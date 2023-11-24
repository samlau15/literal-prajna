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
		
		<script src="{{ $page->baseUrl.mix('js/manifest.js', 'assets/build') }}" defer></script>
		<script src="{{ $page->baseUrl.mix('js/vendor.js', 'assets/build') }}" defer></script>
        <script src="{{ $page->baseUrl.mix('js/app.js', 'assets/build') }}" defer></script>
		@stack('scripts')
    </head>
    <body
		x-data="{
			isSidebarOpened: false,
			details: false,
		}"
		@@mmenu-opened.window="isSidebarOpened=true"
		@@mmenu-closed.window="isSidebarOpened=false"
	>
		<!-- navbar -->
		<nav class="navbar navbar-expand-lg">
			<div class="container">
				<a class="navbar-brand" href="#">
					@yield('navbar-brand-img')
				</a>
				<div class="collapse navbar-collapse" id="main_nav">
					<ul class="navbar-nav ms-auto">
						<li class="nav-item dropdown">
							<a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
								經典
							</a>
							<ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdownMenuLink">
								<li><a class="dropdown-item" href="{{ $page->baseUrl.'/ksitigarbha-vows-vol1' }}">地藏菩薩本願經</a></li>
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
					<span>經典</span>
					<ul>
						<li><a href="{{ $page->baseUrl.'/ksitigarbha-vows-vol1' }}">地藏菩薩本願經</a></li>
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
    </body>
</html>
