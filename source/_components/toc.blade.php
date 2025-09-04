<nav
	x-data="Object.assign({}, {
		audioPlaying: false,
		tocItems: {},
		currItems: {},
		audioCollapsed: false,
		updateCurrItems: () => {
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
		tocEnter: e => {
			const id = e.detail;
			$data.tocItems[id].inview = true;
			$data.updateCurrItems();
		},
		tocExit: e => {
			const id = e.detail;
			$data.tocItems[id].inview = false;
			$data.updateCurrItems();
		},
		jumpTo: id => {
			$dispatch('jump-to', id);
		},
		adjustFontsize: deg => {
			$data.textsize = deg;
		}
	}, {!! $attributes->has('x-data') ? $attributes['x-data'] : '{}' !!})"
	x-init="
		let items = tocItems;
		$('.toc-item').each(function(pos) {
			const id = $(this).attr('id');
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
		inView.offset(80);
		
		@if($attributes->has('textsize-supported'))
		$data.textsize = 1;
		@endif
				
		@if($attributes->has('audio-supported'))
		$data.autoScroll = true;
		@endif
	
		@if($attributes->has('trans-supported'))
		$data.details = false;
		@endif
	"
	@@toc-enter.window="tocEnter"
	@@toc-exit.window="tocExit"
	@@audio-shown.window="audioCollapsed=false"
	@@audio-collapsed.window="audioCollapsed=true"
	@@audio-played.window="audioPlaying=true"
	@@audio-paused.window="audioPlaying=false"
	@@audio-stopped.window="audioPlaying=false"
	{!! $attributes->whereStartsWith('@') !!}
	
	{!! $attributes->whereStartsWith(':class') !!}
	@if ($attributes->has('class'))
	class="{!! $attributes['class'] !!} px-2"
	@endif
	
	data-toggle="toc"
>
	<i class="fa fa-list"></i> 目錄
	{{ $slot }}
	<hr/>
	@if($attributes->has('textsize-supported'))
	<div class="mb-3">
		<i class="fa fa-font"></i>
		字體大小
		<button x-show="textsize==2" @@click="textsize=1" class="btn btn-sm btn-secondary ms-3" type="button" title="縮小">
			<i class="fa fa-magnifying-glass-minus"></i>
		</button>
		<button x-show="textsize==1" @@click="textsize=2" class="btn btn-sm btn-secondary ms-3" type="button" title="增大">
			<i class="fa fa-magnifying-glass-plus"></i>
		</button>
	</div>
	<hr/>
	@endif
	@if($attributes->has('audio-supported'))
	<div x-show="!readOnly" class="mb-3">
		<i class="fa fa-headphones"></i>
		粵語導讀 {{ $audioCtrlSubtitle ?? '' }}
	</div>
	<div x-show="!readOnly" class="mb-3">
		<div class="mb-1">
			{{--
			<button x-show="audioCollapsed" @@click="$dispatch('show-audio')" class="btn btn-sm btn-primary" type="button" title="顯示聲音控制">
				<i class="fa fa-headphones"></i>
			</button>
			<button @@click="readOnly=true;$dispatch('collapse-audio', {stop: true})" class="btn btn-sm btn-danger" type="button" title="關閉聲音控制">
			--}}
			<button @@click="readOnly=true;$dispatch('stop-audio')" class="btn btn-sm btn-danger" type="button" title="關閉聲音控制">
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
		<div class="form-check form-switch my-3">
			<input x-model="autoScroll" class="form-check-input" type="checkbox" role="switch" id="switch-autoScroll">
			<label class="form-check-label" for="switch-autoScroll">自動滾動</label>
		</div>
	</div>
	<div x-show="!readOnly">
		<i class="fa fa-book-open"></i>
		<a @@click.prevent="readOnly=true;$dispatch('pause-audio')" href="#">開啟閱讀模式</a>
	</div>
	<div x-show="readOnly">
		<i class="fa fa-headphones"></i>
		<a @@click.prevent="readOnly=false;$dispatch('show-audio')" href="#">開啟粵語導讀</a>
	</div>
	<hr/>
	@endif
	@if($attributes->has('trans-supported'))
	<div class="mb-3">
		<i class="fa fa-globe"></i>
		白話淺譯 {{ $transCtrlSubtitle ?? '' }}
	</div>
	<div class="form-check form-switch">
		<input x-model="details" class="form-check-input" type="checkbox" role="switch" id="switch-details">
		<label class="form-check-label" for="switch-details">顯示</label>
	</div>
	<hr/>
	@endif
	{{ $othersCtrl ?? '' }}
</nav>