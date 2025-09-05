<!DOCTYPE html>
<html lang="{{ $page->language ?? 'en' }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="{{ $page->description }}">
		@section('title')
        <title>{{ $page->title }}</title>
		@show
		
        <link rel="canonical" href="{{ $page->getUrl() }}">
		<link rel="icon" href="{{ $page->baseUrl.'/assets/images/favicon.png' }}">
        <link rel="stylesheet" href="{{ $page->baseUrl.mix('css/app.css', 'assets/build') }}">
		@stack('styles')
		
		<!-- Google tag (gtag.js) -->
		<!-- Must be placed in head tag, otherwise Google search console cannot detect it. -->
		<script async src="https://www.googletagmanager.com/gtag/js?id=G-9CYG1JG43E"></script>
		<script>
			window.dataLayer = window.dataLayer || [];
			function gtag(){dataLayer.push(arguments);}
			gtag('js', new Date());
			gtag('config', 'G-9CYG1JG43E');
		</script>
    </head>
    <body
		x-data="page"
		@@mmenu-opened.window="isSidebarOpened=true"
		@@mmenu-closed.window="isSidebarOpened=false"
	>
		<!-- navbar -->
		<nav class="navbar navbar-expand-lg">
			<div class="container">
				<a class="navbar-brand" href="/">
					@yield('navbar-brand-img')
				</a>
				<div class="collapse navbar-collapse" id="main_nav">
					<ul class="navbar-nav ms-auto">
						<li class="nav-item dropdown">
							<a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
								地藏經典
							</a>
							<ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdownMenuLink">
								<li><a class="dropdown-item" href="{{ $page->baseUrl.'/ksitigarbha-vows-vol1' }}">地藏菩薩本願經</a></li>
								<li><a class="dropdown-item" href="{{ $page->baseUrl.'/ksitigarbha-divination-vol1' }}">占察善惡業報經</a></li>
								<li><a class="dropdown-item" href="{{ $page->baseUrl.'/ksitigarbha-dasacakra-vol1' }}">大乘大集地藏十輪經</a></li>
								<li><a class="dropdown-item" href="{{ $page->baseUrl.'/ksitigarbha-reciting-rituals' }}">地藏菩薩念誦儀軌</a></li>
							</ul>
						</li>
						<li class="nav-item dropdown">
							<a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
								修行概要
							</a>
							<ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdownMenuLink">
								<li><a class="dropdown-item" href="{{ $page->baseUrl.'/ksitigarbha-vows-practices' }}">地藏經修行概要</a></li>
								<li><a class="dropdown-item" href="{{ $page->baseUrl.'/ksitigarbha-divination-practices' }}">占察善惡業報經行法</a></li>
							</ul>
						</li>
						<li class="nav-item dropdown">
							<a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
								占察工具
							</a>
							<ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdownMenuLink">
								<li><a class="dropdown-item" href="{{ $page->baseUrl.'/ksitigarbha-divination-tools-group3' }}">第三輪相翻查結果</a></li>
							</ul>
						</li>
					</ul>
				</div>
				<a href="#menu" x-show="!isSidebarOpened">
					<button class="navbar-toggler">
						<i class="fas fa-bars"></i>
					</button>
				</a>
				<a href="#page" x-show="isSidebarOpened">
					<button class="navbar-toggler">
						<i class="fas fa-bars"></i>
					</button>
				</a>
			</div>
		</nav>
		
		<!-- sidebar -->
		<nav id="menu">
			<ul id="panel-menu">
				<li>
					<span>地藏經典</span>
					<ul>
						<li><a href="{{ $page->baseUrl.'/ksitigarbha-vows-vol1' }}">地藏菩薩本願經</a></li>
						<li><a href="{{ $page->baseUrl.'/ksitigarbha-divination-vol1' }}">占察善惡業報經</a></li>
						<li><a href="{{ $page->baseUrl.'/ksitigarbha-dasacakra-vol1' }}">大乘大集地藏十輪經</a></li>
						<li><a href="{{ $page->baseUrl.'/ksitigarbha-reciting-rituals' }}">地藏菩薩念誦儀軌</a></li>
					</ul>
				</li>
				<li>
					<span>修行概要</span>
					<ul>
						<li><a href="{{ $page->baseUrl.'/ksitigarbha-vows-practices' }}">地藏經修行概要</a></li>
						<li><a href="{{ $page->baseUrl.'/ksitigarbha-divination-practices' }}">占察善惡業報經行法</a></li>
					</ul>
				</li>
				<li>
					<span>占察工具</span>
					<ul>
						<li><a href="{{ $page->baseUrl.'/ksitigarbha-divination-tools-group3' }}">第三輪相翻查結果</a></li>
					</ul>
				</li>
			</ul>
		</nav>
	
		<!-- content -->
		<div id="page" class="pt-3">
			@yield('content')
		</div>
		
		<!-- audio control -->
		@yield('audio')
		
		<!-- footer -->
		@include('_partials.footer-links')
		
		<!-- scripts -->
		<!-- never use defer attribute as it caused jQuery undefined -->
		<script src="{{ $page->baseUrl.mix('js/manifest.js', 'assets/build') }}" ></script>
		<script src="{{ $page->baseUrl.mix('js/vendor.js', 'assets/build') }}" ></script>
        <script src="{{ $page->baseUrl.mix('js/app.js', 'assets/build') }}"></script>
		@stack('scripts')
    </body>
</html>
