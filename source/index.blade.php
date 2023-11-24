@extends('_layouts.main')

@push('scripts')
<script>
	window.location.replace('{{ $page->baseUrl.'/ksitigarbha-vows-vol1' }}');
</script>
@endpush