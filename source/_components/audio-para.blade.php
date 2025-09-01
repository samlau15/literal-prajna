<div
	x-data="Object.assign({}, {
		collapsed: true,
		audioSource: '',
		toggle: show => {
			if(show) {
				$data.collapsed = false,
				$data.readOnly = false;
				$dispatch('load-audio', {source: $data.audioSource});
			} else {
				$data.collapsed = true,
				$data.readOnly = true;
				$dispatch('stop-audio');
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