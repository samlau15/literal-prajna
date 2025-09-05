@extends('_layouts.main')

@section('title')
<title>首頁</title>
@endsection

@push('styles')
<style>
	body {
		background-image: url('{{ $page->baseUrl.'/assets/images/background-mantra.png' }}');
	}
</style>
@endpush

@section('navbar-brand-img')
<img class="" width="55" src="{{ $page->baseUrl.'/assets/images/logo-mantra.png' }}" />
@endsection

@section('content')
<div class="container pb-3">

	<div class="container w-75">
		<img src="{{ $page->baseUrl.'/assets/images/ksitigarbha.png' }}" class="w-100 mx-auto mb-3 d-block" alt="地藏菩薩摩訶薩" />
	</div>

	<div class="text-center fs-4 fw-bold mb-5">
		<span class="me-3">稽首本然淨心地</span>
		<span>無盡佛藏大慈尊</span><br/>
		<span class="me-3">南方世界湧香雲</span>
		<span>香雨花雲及花雨</span><br/>
		<span class="me-3">寶雨寶雲無數種</span>
		<span>為祥為瑞遍莊嚴</span><br/>
		<span class="me-3">天人問佛是何因</span>
		<span>佛言地藏菩薩至</span><br/>
		<span class="me-3">三世如來同讚歎</span>
		<span>十方菩薩共歸依</span><br/>
		<span class="me-3">我今宿植善因緣</span>
		<span>稱揚地藏真功德</span>
	</div>
	
	<div class="text-center fw-bold mb-5">
		<span>自皈依佛，當願眾生，</span>
		<span class="mb-1">體解大道，發無上心。</span><br/>
		<span>自皈依法，當願眾生，</span>
		<span class="mb-1">深入經藏，智慧如海。</span><br/>
		<span>自皈依僧，當願眾生，</span>
		<span>統理大眾，一切無礙。</span>
	</div>
	
	<div class="text-center fs-4 fw-bold mb-3">
		<a href="/ksitigarbha-vows-vol1">
			<button type="button" class="btn btn-warning btn-lg">閱讀地藏經典</button>
		</a>
	</div>
</div>
@endsection
