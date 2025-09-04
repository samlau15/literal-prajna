<div
	x-data="Object.assign({}, {
		collapsed: true,
		audioSource: '',
		toggle: show => {
			if(show) {
				$data.collapsed = false,
				$data.readOnly = false;
				$dispatch('load-audio', {source: $data.audioSource, prefix: `#${$el.id}`});
				$dispatch('audiopara-opened', {id: $el.id});
			} else {
				$data.collapsed = true,
				$data.readOnly = true;
				$dispatch('stop-audio');
			}
		},
		audioParaOpened: e => {
			const {id} = e.detail;
			if(id != $el.id) {
				if(!$data.collapsed) $data.collapsed = true;
			}
		},
	}, {!! $attributes->has('x-data') ? $attributes['x-data'] : '{}' !!})"
	x-init="
		// reset to readonly mode
		// as we dynamically load the audio source to the player
		// after user has toggled on the audio mode
		readOnly = true;
		
		// turnoff autoscroll
		autoScroll = false;
		
	"
	{!! $attributes->whereStartsWith('@') !!}
	@@audiopara-opened.window="audioParaOpened"
	
	{!! $attributes->whereStartsWith(':class') !!}
	@if ($attributes->has('class'))
	class="{!! $attributes['class'] !!}"
	@endif
	
	id="{{ $attributes->has('id') ? $attributes['id'] : 'audio-para' }}"
>
	<div x-show="collapsed">
		{{ $collapsed ?? '' }}
	</div>
	<div x-show="!collapsed">
		{{ $expanded ?? '' }}
	</div>
</div>