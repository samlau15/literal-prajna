@extends('_layouts.main')

@section('title')
<title>地藏菩薩念誦儀軌</title>
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
	<div class="row">
		<div class="col-md-3 toc-container">
			<x-toc
				x-data="{currItems: {vol1: true}}"
				class="sticky-top"
				textsize-supported
			>
				<ul class="nav navbar-nav">
					<li>
						<a @@click="jumpTo('vol1')" :class="{active: currItems['vol1'] && true}" class="nav-link text-nowrap" href="#vol1">地藏菩薩念誦儀軌</a>
						<ul class="nav navbar-nav">
							<li><a @@click="jumpTo('vol1-m1')" :class="{active: currItems['vol1-m1'] && true}" class="nav-link text-nowrap" href="#vol1-m1">根本真言</a></li>
							<li><a @@click="jumpTo('vol1-m2')" :class="{active: currItems['vol1-m2'] && true}" class="nav-link text-nowrap" href="#vol1-m2">心真言</a></li>
							<li><a @@click="jumpTo('vol1-m3')" :class="{active: currItems['vol1-m3'] && true}" class="nav-link text-nowrap" href="#vol1-m3">心中心真言</a></li>
							<li><a @@click="jumpTo('vol1-mu1')" :class="{active: currItems['vol1-mu1'] && true}" class="nav-link text-nowrap" href="#vol1-mu1">根本印相</a></li>
							<li><a @@click="jumpTo('vol1-mu2')" :class="{active: currItems['vol1-mu2'] && true}" class="nav-link text-nowrap" href="#vol1-mu2">心印相</a></li>
							<li><a @@click="jumpTo('vol1-mu3')" :class="{active: currItems['vol1-mu3'] && true}" class="nav-link text-nowrap" href="#vol1-mu3">心中心印相</a></li>
						</ul>
					</li>
				</ul>
			</x-toc>
		</div>
		<div id="content" class="col-md-9" :class="{'font-enlarged': textsize == 2, 'readonly': readOnly}">
			<nav>
				<ol class="breadcrumb">
					<li class="breadcrumb-item">地藏經典</li>
					<li class="breadcrumb-item"><a href="/ksitigarbha-reciting-rituals">地藏菩薩念誦儀軌</a></li>
				</ol>
			</nav>
		
			<h1>地藏菩薩念誦儀軌</h1>
			<small class="float-start mb-3">
				節錄　<a href="https://21dzk.l.u-tokyo.ac.jp/SAT/ddb-sat2.php?mode=detail&useid=2410_,76,0582c12&key=%E5%9C%B0%E8%97%8F%E8%8F%A9%E8%96%A9%E5%BF%B5%E8%AA%A6%E5%84%80%E8%BB%8C&ktn=&mode2=2">溪嵐拾葉集</a>
			</small>
			<small class="float-end mb-3">
				不空　譯
			</small>
			<div class="clearfix"></div>
			<div class="mb-3">
				<p>爾時世尊普告一切諸天人眾言。汝等善聽。地藏菩薩大慈大悲真言法。我今當為汝等開示顯説。若有誦者一切所作皆得成就。更無過者。於諸大悲中是最勝法王。有大威德力。能除眾生苦。引導安樂國。若有善男子善女人能受持者。雖作十惡業不墮無間獄。由大悲顯力故也。地藏菩薩常來擁護。現聲聞形常隨行者。諸善子。此真言法能接諸法教法。何況一切菩薩及諸天龍鬼神等。況若有善男子善女人每日誦一百八遍。永離三惡道往生西方極樂世界面見無量壽佛證大菩提位。若復有人誦此大悲真言者。一切怨敵一切魔王鬼神病罪百病萬惱不能親近。盡福壽常見寶藏出來世眾生福盡之處。能誦此真言者消除貧苦兩(雨)七寶。所有一切五無間等罪業皆消滅。不沈輪生死大海。永離三途惡道之怖隨所生處得宿命知。六根清淨諸根具足。妙盡嚴威德熾盛。若能受持是真言者。雖有女(屢)犯不墮惡道。何況三業清淨常受持者。佛説是語已。爾時地藏菩薩以大悲大慈觀一切眾。</p>
			</div>
			<h6 class="toc-item" id="vol1-m1">
				<span class="word">根本真言</span>
			</h6>
			<div class="mb-3">
				<p>即説真言曰。</p>
			</div>
			<div class="mb-3">
				<blockquote>
					<span class="word">曩莫三曼荼沒多南<sub>引</sub>訶訶訶索怛弩莎哥。</span>
				</blockquote>
			</div>
			<x-audio-para
				x-data="{audioSource: '{{ $page->baseUrl.'/assets/audios/ksitigarbha-mantra1.mp3' }}'}"
				id="audio-para1"
				class="paragraph mantra"
				::class="collapsed ? 'collapsed' : ''"
			>
				<x-slot:collapsed>
					<small><a @@click.prevent="toggle(true)" class="float-end" href="#">顯示 IAST 羅馬拼音</a></small>
					<div class="clearfix"></div>
				</x-slot>
				<x-slot:expanded>
					<small><a @@click.prevent="toggle(false)" class="float-end" href="#">關閉 IAST 羅馬拼音</a></small>
					<div class="clearfix"></div>
					<blockquote>
						<span class="word" @@click="$dispatch('play-segment')" data-start="00:00.00" data-end="00:00.99" data-index="0">namaḥ</span>
						<span class="word" @@click="$dispatch('play-segment')" data-start="00:01.15" data-end="00:02.47" data-index="1">samanta</span>
						<span class="word" @@click="$dispatch('play-segment')" data-start="00:02.64" data-end="00:04.25" data-index="2">buddhānāṃ</span>
						<span class="word" @@click="$dispatch('play-segment')" data-start="00:04.40" data-end="00:05.92" data-index="3">ha ha ha</span>
						<span class="word" @@click="$dispatch('play-segment')" data-start="00:06.07" data-end="00:07.21" data-index="4">sutanu</span>
						<span class="word" @@click="$dispatch('play-segment')" data-start="00:07.39" data-end="00:08.58" data-index="5">svāhā</span>
					</blockquote>
				</x-slot>
			</x-audio-para>
			<h6 class="toc-item" id="vol1-m2">
				<span class="word">心真言</span>
			</h6>
			<div class="mb-3">
				<p>復次説心真言曰。</p>
			</div>
			<div class="mb-3">
				<blockquote>
					<span class="word">唵訶訶訶毘三摩曳娑婆<sub>二合</sub>賀<sub>引</sub>。</span>
				</blockquote>
			</div>
			<x-audio-para
				x-data="{audioSource: '{{ $page->baseUrl.'/assets/audios/ksitigarbha-mantra2.mp3' }}'}"
				id="audio-para2"
				class="paragraph mantra"
				::class="collapsed ? 'collapsed' : ''"
			>
				<x-slot:collapsed>
					<small><a @@click.prevent="toggle(true)" class="float-end" href="#">顯示 IAST 羅馬拼音</a></small>
					<div class="clearfix"></div>
				</x-slot>
				<x-slot:expanded>
					<small><a @@click.prevent="toggle(false)" class="float-end" href="#">關閉 IAST 羅馬拼音</a></small>
					<div class="clearfix"></div>
					<blockquote>
						<span class="word" @@click="$dispatch('play-segment')" data-start="00:00.00" data-end="00:00.74" data-index="6">oṃ</span>
						<span class="word" @@click="$dispatch('play-segment')" data-start="00:00.92" data-end="00:02.45" data-index="7">ha ha ha</span>
						<span class="word" @@click="$dispatch('play-segment')" data-start="00:02.60" data-end="00:03.83" data-index="8">vismaye</span>
						<span class="word" @@click="$dispatch('play-segment')" data-start="00:04.04" data-end="00:05.19" data-index="9">svāhā</span>
					</blockquote>
				</x-slot>
			</x-audio-para>
			<h6 class="toc-item" id="vol1-m3">
				<span class="word">心中心真言</span>
			</h6>
			<div class="mb-3">
				<p>復次説心中心真言曰。</p>
			</div>
			<div class="mb-3">
				<blockquote>
					<span class="word">唵係多振多摩尼莎哥。</span>
				</blockquote>
			</div>
			<x-audio-para
				x-data="{audioSource: '{{ $page->baseUrl.'/assets/audios/ksitigarbha-mantra3.mp3' }}'}"
				id="audio-para3"
				class="paragraph mantra"
				::class="collapsed ? 'collapsed' : ''"
			>
				<x-slot:collapsed>
					<small><a @@click.prevent="toggle(true)" class="float-end" href="#">顯示 IAST 羅馬拼音</a></small>
					<div class="clearfix"></div>
				</x-slot>
				<x-slot:expanded>
					<small><a @@click.prevent="toggle(false)" class="float-end" href="#">關閉 IAST 羅馬拼音</a></small>
					<div class="clearfix"></div>
					<blockquote>
						<span class="word" @@click="$dispatch('play-segment')" data-start="00:00.00" data-end="00:00.78" data-index="10">oṃ</span>
						<span class="word" @@click="$dispatch('play-segment')" data-start="00:00.90" data-end="00:01.78" data-index="11">hita</span>
						<span class="word" @@click="$dispatch('play-segment')" data-start="00:02.04" data-end="00:03.39" data-index="12">cintāmaṇi</span>
						<span class="word" @@click="$dispatch('play-segment')" data-start="00:03.60" data-end="00:04.78" data-index="13">svāhā</span>
					</blockquote>
				</x-slot>
			</x-audio-para>
			<h6 class="toc-item" id="vol1-mu1">
				<span class="word">根本印相</span>
			</h6>
			<div class="mb-3">
				<p>復次説根本印相。二手相縛竪。一合火輪圓滿如錫杖形。是名根本印。由是結印故。成就大悲。不墮三惡道。常生諸佛前。</p>
			</div>
			<figure class="figure me-3">
				<img src="{{ $page->baseUrl.'/assets/images/內縛印.png' }}" class="figure-img img-fluid rounded" alt="內縛印">
				<figcaption class="figure-caption">雙手內縛</figcaption>
			</figure>
			<figure class="figure me-3">
				<img src="{{ $page->baseUrl.'/assets/images/旗印.png' }}" class="figure-img img-fluid rounded" alt="旗印">
				<figcaption class="figure-caption">兩中指豎起相對</figcaption>
			</figure>
			<figure class="figure me-3">
				<img src="{{ $page->baseUrl.'/assets/images/九華山旗印.png' }}" class="figure-img img-fluid rounded" alt="九華山旗印">
				<figcaption class="figure-caption">九華山根本印模型</figcaption>
			</figure>
			<h6 class="toc-item" id="vol1-mu2">
				<span class="word">心印相</span>
			</h6>
			<div class="mb-3">
				<p>復次説心印。二手合掌作蓮花形。由是結印故。消滅一切破戒罪障。一切毀犯業悉得清淨。</p>
			</div>
			<figure class="figure">
				<img src="{{ $page->baseUrl.'/assets/images/蓮花印.png' }}" class="figure-img img-fluid rounded" alt="蓮花印">
				<figcaption class="figure-caption">蓮花印</figcaption>
			</figure>
			<h6 class="toc-item" id="vol1-mu3">
				<span class="word">心中心印相</span>
			</h6>
			<div class="mb-3">
				<p>復次説心中心印。二手內縛進力摩尼形禪智並立。由是印威力故。消滅貧苦悉得福壽利。能滅定業能延壽命。</p>
			</div>
			<figure class="figure me-3">
				<img src="{{ $page->baseUrl.'/assets/images/寶印.png' }}" class="figure-img img-fluid rounded" alt="寶印">
				<figcaption class="figure-caption">雙手內縛，食指彎曲如寶珠，大拇指並立。</figcaption>
			</figure>
			<figure class="figure">
				<img src="{{ $page->baseUrl.'/assets/images/十指圖.png' }}" class="figure-img img-fluid rounded" alt="十指圖">
				<figcaption class="figure-caption">進力對應食指，禪智對應大拇指。</figcaption>
			</figure>
			<div class="mb-3">
				<p>若有善男子善女人比丘比丘尼優婆塞優婆夷。厭三惡道求菩提。消除貧苦求福利。滅不淨業求清淨身。離惡業身求眾生愛。或求王位若求官位。欲得好子者。先擇宿曜吉祥之日。白絲或羂索上畫地藏菩薩形像。安坐千葉白蓮上。左手持如意寶珠。右手執錫杖。身色白肉色。現聲聞形。以種種瓔珞莊嚴其身。</p>
			</div>
			<div class="mb-3">
				<p>一　蓮花座下左方畫閻魔使者。身白肉色左手持寶鏡。右手執檀荼幢。</p>
			</div>
			<div class="mb-3">
				<p>二　次畫持寶童子。其身如日光。左手持如意寶珠。右手與願印。</p>
			</div>
			<div class="mb-3">
				<p>三　次畫大力使者。身青黒色載師子王左手持獸稍(梢)。右手開赦押右腰。以忿怒惡眼觀四方形。</p>
			</div>
			<div class="mb-3">
				<p>四　右方畫大慈大悲天女。身白肉色。左手與願印。右手執圓扇。</p>
			</div>
			<div class="mb-3">
				<p>五　次畫寶藏天女身。齊色七寶衣甲。以惡眼視一切鬼神形。左手持舍利塔。右手執寶棒。</p>
			</div>
			<div class="mb-3">
				<p>六　次畫接天使者。其身金色。左手托左腰。右手持三股杵。</p>
			</div>
			<div class="mb-3">
				<p>畫如此像已作念誦法。燒香散花供養。置尊像於西方。面向東方。行者向西方滿三七日誦其真言三洛叉遍。即得成就則滅身中十惡四重五無間罪一切業障。不廢忘菩提心。消滅破戒滅障。還得戒品清淨。何況餘罪障。臨命終時見無量壽佛及地藏菩薩。則生極樂世界。上品上生證菩薩位。若每日誦前真言一百八反。我地藏菩薩作等童子形常隨遂與願。所求皆成就。所説言敬。人皆信受。</p>
			</div>
			<div class="mb-3">
				<p>一　勝軍事　再等敬　易產事</p>
			</div>
			<div class="mb-3">
				<p>又取帝支縛底藥以前真言加持百七反。隨身持得眾人愛敬。一切鬪諍之處皆得勝。</p>
			</div>
			<div class="mb-3">
				<p>又有女人欲生男子者。對像誦前真言一萬反。則生男女子。</p>
			</div>
			<div class="mb-3">
				<p>又一切鬼魅所著種種痛所或為毒藥所中。當以蘇三兩孔雀尾一兩內於蘇中。加持之二十一反。煎之擣為粉和淨水。以孔雀尾拂病人頭。患即除愈。</p>
			</div>
			<div class="mb-3">
				<p>又有怨敵及諸惡夢種種怖畏。身心不安。以金剛杵加持自身二十一反。一切怨敵種種惡夢怖畏悉皆消散。即得安穩。</p>
			</div>
			<div class="mb-3">
				<p>又有諸眾生喫五辛酒肉等。每日至心能見尊像誦前真言二十一反。一切諸惡自然退散。得無量福不墮惡道。</p>
			</div>
			<div class="mb-3">
				<p>我今為行者復説兩(雨)寶形像。若欲供養者。白絲上或羂索上畫地上菩薩兩(雨)寶形像。其身金色。𭞺[忄*𤋮]怡微笑。種種珠髣頂冠瓔珞莊嚴其身。右手執金剛幢。左手安腰。安立千葉蓮花。對此像作念誦法者。先世薄福者皆得寶藏能滅宿業壽命長久。</p>
			</div>
			<div class="mb-3">
				<p>
					焰魔使者真言曰。二手外縛二中指立合如針。
					<span class="word">唵因捺羅耶娑婆<sub>二合</sub>賀<sub>引</sub></span>
					是接天使者一切諸天王。若有眾生婦敬持念者。無有薄福短命夭死業。
				</p>
			</div>
			<div class="d-flex mb-3">
				<div class="me-auto w-50">
					<a href="/ksitigarbha-dasacakra-vol10" class="btn btn-link border p-2 me-3 w-100 h-100 text-decoration-none">
						<div class="d-flex h-100 justify-content-between align-items-center">
							<div class="d-flex">
								<i class="fas fa-arrow-circle-left fs-1"></i>
							</div>
							<div class="d-flex w-100 justify-content-center">
								<span class="ms-2 text-start text-truncate">地藏十輪經卷十</span>
							</div>
						</div>
					</a>
				</div>
				{{--
				<div class="ms-auto me-3 w-50">
					<a href="#" class="btn btn-link border p-2 ms-3 w-100 h-100 text-decoration-none">
						<div class="d-flex h-100 justify-content-between align-items-center">
							<div class="d-flex w-100 justify-content-center">
								<span class="me-2 text-start text-truncate"></span>
							</div>
							<div class="d-flex">
								<i class="fas fa-arrow-circle-right fs-1"></i>
							</div>
						</div>
					</a>
				</div>
				--}}
			</div>
		</div>
	</div>
</div>
@endsection

@section('audio')
<div class="container audio-outer-container fixed-bottom pe-none" :class="{'opened': !readOnly}" x-show="!isSidebarOpened">
	<div class="row my-3">
		<x-audio-control class="col-md-12 px-4 audio-container" ::class="{'pe-auto': !collapsed}" x-data="{scrollTopFirstPlay: false}">
			<source src="" type="audio/mp3" />
		</x-audio-control>
	</div>
</div>
@endsection