<nav
	x-data="Object.assign({}, {
		audioPlaying: false,
		tocItems: {},
		currItems: {vol1: true},
		tocEnter: e => {
			let id = e.detail;
			$data.tocItems[id].inview = true;
			let enteries = Object.entries($data.tocItems);
			let tmpArr = new Array(enteries.length);
			for(let [id, val] of enteries) {
				//tmpArr[val.pos] = {
				tmpArr[tmpArr.length-1-val.pos] = {
					id,
					inview: val.inview,
				}
			}
			tmpArr = tmpArr.filter(t => t.inview);
			if(tmpArr.length > 0) {
				$data.currItems = {};
				$data.currItems[tmpArr[0].id] = true;
				let ids = tmpArr[0].id.split('-');
				ids.pop();
				if(ids.length > 0) {
					ids.forEach(id => $data.currItems[id] = true);
				}
			}
		},
		tocExit: e => {
			let id = e.detail;
			$data.tocItems[id].inview = false;
		},
		jumpTo: id => {
			$dispatch('jump-to', id);
		},
		audioCollapsed: false,
	}, {!! $attributes->has('x-data') ? $attributes['x-data'] : '{}' !!})"
	x-init="
		let items = tocItems;
		$('.toc-item').each(function(pos) {
			let id = $(this).attr('id');
			items[id] = {
				pos,
				inview: false,
			};
		});
		inView('.toc-item')
			.on('enter', el => {
				$dispatch('toc-enter', $(el).attr('id'));
			})
			.on('exit', el => {
				$dispatch('toc-exit', $(el).attr('id'));
			});
		inView.offset(60);
	"
	@@toc-enter.window="tocEnter"
	@@toc-exit.window="tocExit"
	@@audio-shown.window="audioCollapsed=false"
	@@audio-collapsed.window="audioCollapsed=true"
	@@audio-played.window="audioPlaying=true"
	@@audio-paused.window="audioPlaying=false"
	@@audio-stopped.window="audioPlaying=false"
	class="sticky-top"
	data-toggle="toc"
>
	{{ $slot }}
	<hr/>
	@if($attributes->has('audio-supported'))
	<div class="mb-3">
		聲音導讀 {{ $audioCtrlSubtitle ?? '' }}
	</div>
	<div class="mb-3">
		<button x-show="audioCollapsed" @@click="$dispatch('show-audio')" class="btn btn-sm btn-primary" type="button" title="顯示聲音控制">
			<i class="fa fa-headphones"></i>
		</button>
		<button x-show="!audioCollapsed"@@click="$dispatch('collapse-audio', {stop: true})" class="btn btn-sm btn-primary" type="button" title="關閉聲音控制">
			<i class="fa fa-volume-xmark"></i>
		</button>
		<i class="fas arrow"></i>
		<button x-show="!audioPlaying" @@click="$dispatch('play-audio')" class="btn btn-sm btn-secondary" type="button" title="播放">
			<i class="fa fa-play"></i>
		</button>
		<button x-show="audioPlaying" @@click="$dispatch('pause-audio')" class="btn btn-sm btn-secondary" type="button" title="暫停">
			<i class="fa fa-pause"></i>
		</button>
		<button x-show="audioPlaying" @@click="$dispatch('stop-audio')" class="btn btn-sm btn-secondary" type="button" title="停止">
			<i class="fa fa-stop"></i>
		</button>
	</div>
	<hr/>
	@endif
	{{ $othersCtrl ?? '' }}
</nav>