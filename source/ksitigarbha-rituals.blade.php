@extends('_layouts.main')

@section('title')
<title>地藏菩薩儀軌</title>
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
						<a @@click="jumpTo('vol1')" :class="{active: currItems['vol1'] && true}" class="nav-link text-nowrap" href="#vol1">地藏菩薩儀軌</a>
					</li>
				</ul>
			</x-toc>
		</div>
		<div id="content" class="col-md-9" :class="{'font-enlarged': textsize == 2, 'readonly': readOnly}">
			<nav>
				<ol class="breadcrumb">
					<li class="breadcrumb-item">密法儀軌</li>
					<li class="breadcrumb-item"><a href="/ksitigarbha-rituals">地藏菩薩儀軌</a></li>
				</ol>
			</nav>
		
			<h1 class="toc-item" id="vol1">地藏菩薩儀軌</h1>
			<small class="float-end mb-3">
				中天竺輸婆迦羅　譯
			</small>
			<div class="clearfix"></div>
			<div class="mb-3">
				<p>爾時釋迦牟尼佛在𭛟[彳*去]羅提耶山，與無量諸地藏菩薩，十俱胝比丘比、丘尼及天龍八部諸鬼神俱，無量百千大眾圍繞而為說法。爾時大眾中有一大士名曰地藏，偏袒右肩右膝著地，合掌恭敬白佛言：「我說神呪，欲利益一切眾生。唯願世尊欲說神呪慈哀聽許。」時佛告地藏菩薩言：「汝等速說，利益一切有情。」</p>
			</div>
			<div class="mb-3">
				<p>爾時地藏菩薩騰虛空讚歎，歸命世尊，在空中亦現無量神通，以神口說呪曰：</p>
			</div>
			<div class="mb-3">
				<blockquote>
					<span class="word">唵闇摩他𭌩[口*闇]摩爾俱苾俱苾三曼多娑婆賀</span>
				</blockquote>
			</div>
			<div class="mb-3">
				<p>次說心呪：</p>
			</div>
			<div class="mb-3">
				<blockquote>
					<span class="word">唵炎曼他啫娑婆賀</span>
				</blockquote>
			</div>
			<div class="mb-3">
				<p>次心中心呪：</p>
			</div>
			<div class="mb-3">
				<blockquote>
					<span class="word">唵礘呬<sub>二合</sub></span>
				</blockquote>
			</div>
			<div class="mb-3">
				<p>纔說此呪，十地等大菩薩失本心迷惑，天龍八部藥叉鬼神驚走倒地，日月星宿失光隱蔽，空雨寶華繽紛，窮劫說呪力不可說盡。</p>
			</div>
			<div class="mb-3">
				<p>次說畫像法。作聲聞形像，著袈裟端覆左肩，左手持盈華形，右手施無畏，令坐蓮華。復居座大士像，頂著天冠，著袈裟，左手持蓮華茶，右手如先，令安坐九品蓮臺 <sub class="sub-lg">(傳云：九品者，九重也，亦云八葉中臺也)</sub>。</p>
			</div>
			<div class="mb-3">
				<p>次說印呪印。二羽三補吒，戒方內掌來去。呪曰：</p>
			</div>
			<div class="mb-3">
				<blockquote>
					<span class="word">唵炎摩智利娑婆賀</span>
				</blockquote>
			</div>
			<div class="mb-3">
				<p>次說普供養印。二羽三補吒，禪智立來去。</p>
			</div>
			<div class="mb-3">
				<blockquote>
					<span class="word">唵喃惹摩尼娑嚩賀</span>
				</blockquote>
			</div>
			<div class="mb-3">
				<p>次總說總印。二羽三補吒，進力立來去。呪曰：</p>
			</div>
			<div class="mb-3">
				<blockquote>
					<span class="word">唵𭌅[口*羯]只儞耶娑嚩<sub>二合</sub>賀</span>
				</blockquote>
			</div>
			<div class="mb-3">
				<p>次請讚印。二羽三補吒，進力來去。次撥遣，以觀手禪進彈。</p>
			</div>
			<div class="mb-3">
				<p>復說成就法。若念得大福德，持阿迦木護摩七萬遍。若念得五穀成就，以稻實華護摩。若念他人福德，取得其家竈土護摩。若念得高位二德，以比哩華護摩。若念生生世世怨敵伏，以苦練木護摩。若念惡靈邪家伏，以毒味護摩。若念顛狂痾病除愈，蓮實草護摩三萬遍。若念滅罪生善、生身後生極樂，以草護摩三萬遍。若念惡人呪咀還著本人，以苦草投火中護摩三萬遍。若念得無量榮果俸祿，白華鳥草護摩三萬遍。若念三昧辨財德者，以骨婁草護摩三萬遍。若念化度一切眾生令離苦得樂，以白芥子護摩三萬遍。若念化度無佛世界眾生，以尸迦草護摩三七萬遍。若念枯田畠五穀生者，加持古蔓菁，加持散。若愁萬病者，牛膝草護摩三萬遍。若愁三陰四熱種種病，以降乾各門草護摩。若夫妻不和者，比罪草護摩三萬遍和合。若惡友善友相違者，藤葉草護摩三萬遍。若白月八日十四日十五日，以上法修必得成就。</p>
			</div>
			
			<div class="d-flex mb-3">
				<div class="me-auto w-50">
					<a href="/ksitigarbha-reciting-rituals" class="btn btn-link border p-2 me-3 w-100 h-100 text-decoration-none">
						<div class="d-flex h-100 justify-content-between align-items-center">
							<div class="d-flex">
								<i class="fas fa-arrow-circle-left fs-1"></i>
							</div>
							<div class="d-flex w-100 justify-content-center">
								<span class="ms-2 text-start text-truncate">地藏菩薩念誦儀軌</span>
							</div>
						</div>
					</a>
				</div>
				<div class="ms-auto me-3 w-50">
					<a href="/ksitigarbha-dharma" class="btn btn-link border p-2 ms-3 w-100 h-100 text-decoration-none">
						<div class="d-flex h-100 justify-content-between align-items-center">
							<div class="d-flex w-100 justify-content-center">
								<span class="me-2 text-start text-truncate">地藏菩薩法</span>
							</div>
							<div class="d-flex">
								<i class="fas fa-arrow-circle-right fs-1"></i>
							</div>
						</div>
					</a>
				</div>
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