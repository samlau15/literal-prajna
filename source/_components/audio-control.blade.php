<div
    x-data="Object.assign({}, {
		player: null,
		currIntId: null,
		times: [],
		end: null,
		collapsable: null,
		collapsed: false,
		userScrolling: false,
		playFromSelected: false,
		show: e => {
			$data.collapsable.show();
		},
		collapse: e => {
			let {stop} = e.detail;
			let {player} = $data;
			if(stop) {
				$data.stop();
			} else if(player.playing) {
				$data.pause();
			}
			$data.collapsable.hide();
		},
		play: e => $data.player.play(),
		pause: e => $data.player.pause(),
		stop: e => {
			$data.player.stop();
			$('span.word').removeClass('curr');
		},
		playSegment: e => {
			let {player, timeToSecond} = $data;
			let start = timeToSecond($(e.target).data('start'));
			let end = timeToSecond($(e.target).data('end'));
			if(readOnly) return;
			if(player.playing && (start <= player.currentTime && end >= player.currentTime)) return;
			player.currentTime = start;
			$data.end = end;
			if(!player.playing) {
				$data.playFromSelected = true;
				player.play();
			}
		},
		jumpTo: e => {
			let id = e.detail;
			let {player, timeToSecond} = $data;
			
			player.pause();
			let start = $(`#${id} .word`).data('start');
			let end = $(`#${id} .word`).data('end');
			if(start && end) {
				start = timeToSecond(start);
				end = timeToSecond(end);
				if(!(start <= player.currentTime && end >= player.currentTime)) {
					player.currentTime = start;
				}
			}
		},
		timeToSecond: time => (Number(time.substring(0, 2))*60+Number(time.substring(3, 5)))+Number(time.substring(6, 8)/100),
	}, {!! $attributes->has('x-data') ? $attributes['x-data'] : '{}' !!})"
    x-init="
        $data.collapsable = new bootstrap.Collapse($('#collapseAudioCtrl')[0]);
		if(collapsed) {
			setTimeout(() => $data.collapsable.hide(), 100);
		}
		
		$('#collapseAudioCtrl')[0].addEventListener('shown.bs.collapse', e => {
			$data.collapsed = false;
			$dispatch('audio-shown');
		});
		$('#collapseAudioCtrl')[0].addEventListener('hidden.bs.collapse', e => {
			$data.collapsed = true;
			$dispatch('audio-collapsed');
		});
		
		$(window).on('scroll', function(e) {
			$data.userScrolling = true;
		});
		
		$('span.word')
			.filter(function() {
				return $(this).data('start') && $(this).data('end')
			})
			.each(function() {
				let {times, timeToSecond} = $data;
				let start = timeToSecond($(this).data('start'));
				let end = timeToSecond($(this).data('end'));
				let index = Number($(this).data('index'));
				times.push({start, end, index});
			});
			
		player = new Plyr('#{{ $attributes->has('id') ? $attributes['id'] : 'audio-controls' }}');
		player.on('play', e => {
			let {currIntId, times, playFromSelected} = $data;
			let throttleScroll = throttle(function($el) {
				$('html,body').animate({
					scrollTop: $el.offset().top-100
				}, 0);
			}, 500);
			
			if(currIntId) clearInterval(currIntId);
			$data.currIntId = setInterval(() => {
				let target = times.filter(d => d.start <= player.currentTime && d.end >= player.currentTime);
				if($data.end && player.currentTime >= $data.end) {
					if(playFromSelected) {
						player.pause();
						$data.playFromSelected = false;
					}
					$data.end = null;
					return;
				}
				if(target.length > 0) {
					$('span.word').removeClass('curr');
					let {index} = target[0];
					let $el = $(`span.word[data-index=${index}]`);
					$el.addClass('curr');
					if(!isScrolledIntoView($el[0], 0, 100) && $data.autoScroll && !userScrolling) {
						throttleScroll($el);
					}
				}
				userScrolling = false;
			}, 100);
		});
		player.on('playing', e => {
			if(player.currentTime <= 0.5) {
				// $data.show();
				$('html,body').animate({
					scrollTop: 0
				}, 0);
				$('span.word').removeClass('curr');
			}
			$dispatch('audio-played');
		});
		player.on('pause', e => {
			clearInterval($data.currIntId);
			$data.end=null;
			// stop event
			if(player.currentTime <= 0.5) $('span.word').removeClass('curr');
			$dispatch('audio-paused');
		});
		player.on('ended', e => {
			clearInterval($data.currIntId);
			$data.end=null;
			$dispatch('audio-stopped');
		});
        {!! $attributes->has('x-init') ? $attributes['x-init'] : '' !!}
    "
	x-show="!readOnly"
	@@show-audio.window="show"
	@@collapse-audio.window="collapse"
	@@play-audio.window="play"
	@@pause-audio.window="pause"
	@@stop-audio.window="stop"
	@@play-segment.window="playSegment"
	@@jump-to.window="jumpTo"
    {!! $attributes->whereStartsWith('@') !!}
	
	{!! $attributes->whereStartsWith(':class') !!}
	@if ($attributes->has('class'))
	class="{!! $attributes['class'] !!}"
	@endif
>
	<button :class="{'border-bottom-0': !collapsed}" class="btn btn-light btn-sm float-end border pe-auto" type="button" data-bs-toggle="collapse" data-bs-target="#collapseAudioCtrl" aria-controls="collapseAudioCtrl" title="收藏／顯示聲音控制"></button>
	<div id="collapseAudioCtrl" class="collapse p-2 border">
		<audio id="{{ $attributes->has('id') ? $attributes['id'] : 'audio-controls' }}" controls @@mmenu-opened.window="pause">
			{{ $slot }}
		</audio>
	</div>
</div>
