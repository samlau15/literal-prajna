@extends('_layouts.main')

@section('title')
<title>地藏菩薩本願經卷上</title>
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
				audio-supported
				trans-supported
			>
				<ul class="nav navbar-nav">
					<li>
						<a @@click="jumpTo('vol1')" :class="{active: currItems['vol1'] && true}" class="nav-link text-nowrap" href="#vol1">地藏菩薩本願經卷上</a>
						<ul class="nav navbar-nav">
							<li><a @@click="jumpTo('vol1-ch1')" :class="{active: currItems['vol1-ch1'] && true}" class="nav-link text-nowrap" href="#vol1-ch1">忉利天宮神通品第一</a></li>
							<li><a @@click="jumpTo('vol1-ch2')" :class="{active: currItems['vol1-ch2'] && true}" class="nav-link text-nowrap" href="#vol1-ch2">分身集會品第二</a></li>
							<li><a @@click="jumpTo('vol1-ch3')" :class="{active: currItems['vol1-ch3'] && true}" class="nav-link text-nowrap" href="#vol1-ch3">觀眾生業緣品第三</a></li>
							<li><a @@click="jumpTo('vol1-ch4')" :class="{active: currItems['vol1-ch4'] && true}" class="nav-link text-nowrap" href="#vol1-ch4">閻浮眾生業感品第四</a></li>
						</ul>
					</li>
					<li>
						<a class="nav-link text-nowrap" href="{{ $page->baseUrl.'/ksitigarbha-vows-vol2' }}">地藏菩薩本願經卷中</a>
					</li>
					<li>
						<a class="nav-link text-nowrap" href="{{ $page->baseUrl.'/ksitigarbha-vows-vol3' }}">地藏菩薩本願經卷下</a>
					</li>
				</ul>
				<x-slot:audioCtrlSubtitle>
					<small class="ms-2"><a href="https://www.youtube.com/watch?v=FxKANq2yPs8" target="_blank">(觀成法師讀經)</a></small>
				</x-slot>
				<x-slot:transCtrlSubtitle>
					<small class="ms-2">(郭鵬原譯，本站略修。)</small>
				</x-slot>
			</x-toc>
		</div>
		<div id="content" class="col-md-9" :class="{'font-enlarged': textsize == 2, 'readonly': readOnly}">
			<nav>
				<ol class="breadcrumb">
					<li class="breadcrumb-item">地藏經典</li>
					<li class="breadcrumb-item"><a href="{{ $page->baseUrl.'/ksitigarbha-vows-vol1' }}">地藏菩薩本願經</a></li>
					<li class="breadcrumb-item active">卷上</li>
				</ol>
			</nav>
		
			<h1>地藏菩薩本願經</h1>
			<small class="float-end mb-3">唐‧于闐國‧三藏沙門‧實叉難陀　譯</small>
			<div class="clearfix"></div>
			<div class="paragraph">
				<span class="word" @@click="$dispatch('play-segment')" data-start="00:11.88" data-end="00:22.90" data-index="0"><strong>南無本師釋迦牟尼佛 <sub>(三稱)</sub></strong></span>
			</div>
			<div class="paragraph">
				<span class="word"><strong>開經偈</strong></span><br/>
				<span class="word me-5" @@click="$dispatch('play-segment')" data-start="00:25.64" data-end="00:28.72" data-index="1">無上甚深微妙法</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="00:29.18" data-end="00:32.08" data-index="2">百千萬劫難遭遇</span><br/>
				<span class="word me-5" @@click="$dispatch('play-segment')" data-start="00:32.58" data-end="00:35.30" data-index="3">我今見聞得受持</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="00:35.80" data-end="00:38.26" data-index="4">願解如來真實義</span><br/>
			</div>
			<h2 class="toc-item" id="vol1">
				<span class="word" @@click="$dispatch('play-segment')" data-start="00:39.34" data-end="00:43.10" data-index="5">地藏菩薩本願經卷上</span>
			</h2>
			<h4 class="toc-item" id="vol1-ch1">
				<span class="word" @@click="$dispatch('play-segment')" data-start="00:44.02" data-end="00:47.18" data-index="6">忉利天宮神通品第一</span>
			</h4>
			<div :class="details ? 'bg-secondary text-white' : ''" class="paragraph">
				<span class="word" @@click="$dispatch('play-segment')" data-start="00:48.23" data-end="00:49.76" data-index="7">如是我聞</span>
				<span class="punc">。</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="00:49.76" data-end="00:52.43" data-index="8">一時佛在忉利天</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="00:53.33" data-end="00:54.57" data-index="9">為母說法</span>
				<span class="punc">。</span>
			</div>
			<div x-show="details" class="details mb-3">
				這是我所聽說的，有一天釋迦牟尼佛在忉利天為母親宣說佛法。
				<hr/>
			</div>
			<div :class="details ? 'bg-secondary text-white' : ''" class="paragraph">
				<span class="word" @@click="$dispatch('play-segment')" data-start="00:55.50" data-end="00:58.48" data-index="10">爾時十方無量世界</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="00:58.48" data-end="01:02.56" data-index="11">不可說不可說一切諸佛</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="01:02.96" data-end="01:05.42" data-index="12">及大菩薩摩訶薩</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="01:05.94" data-end="01:07.44" data-index="13">皆來集會</span>
				<span class="punc">。</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="01:08.06" data-end="01:10.56" data-index="14">讚歎釋迦牟尼佛</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="01:11.28" data-end="01:13.64" data-index="15">能於五濁惡世</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="01:14.10" data-end="01:18.60" data-index="16">現不可思議大智慧神通之力</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="01:18.84" data-end="01:21.54" data-index="17">調伏剛強眾生</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="01:21.90" data-end="01:23.96" data-index="18">知苦樂法</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="01:24.74" data-end="01:26.56" data-index="19">各遣侍者</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="01:26.88" data-end="01:28.80" data-index="20">問訊世尊</span>
				<span class="punc">。</span>
			</div>
			<div x-show="details" class="details mb-3">
				這時，各方世界無量諸佛及大菩薩們，都來集會。讚歎釋迦牟尼佛能夠在五濁泛濫的惡世之中，用不可思議的神通智慧，調伏那些倔強難馴的眾生，使他們知道前世惡業而遭受的痛苦，從而樂於歸依佛法。大家都派遣使者，向釋迦牟尼佛問安。
				<hr/>
			</div>
			<div :class="details ? 'bg-secondary text-white' : ''" class="paragraph">
				<span class="word" @@click="$dispatch('play-segment')" data-start="01:29.52" data-end="01:31.92" data-index="21">是時</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="01:29.52" data-end="01:31.92" data-index="21">如來含笑</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="01:32.42" data-end="01:35.64" data-index="22">放百千萬億大光明雲</span>
				<span class="punc">，</span>
				<blockquote>
					<span class="word" @@click="$dispatch('play-segment')" data-start="01:36.20" data-end="01:39.36" data-index="23">所謂大圓滿光明雲</span>
					<span class="punc">、</span>
					<span class="word" @@click="$dispatch('play-segment')" data-start="01:39.94" data-end="01:42.40" data-index="24">大慈悲光明雲</span>
					<span class="punc">、</span><br/>
					<span class="word" @@click="$dispatch('play-segment')" data-start="01:42.84" data-end="01:45.10" data-index="25">大智慧光明雲</span>
					<span class="punc">、</span>
					<span class="word" @@click="$dispatch('play-segment')" data-start="01:45.58" data-end="01:47.92" data-index="26">大般若光明雲</span>
					<span class="punc">、</span><br/>
					<span class="word" @@click="$dispatch('play-segment')" data-start="01:48.34" data-end="01:50.68" data-index="27">大三昧光明雲</span>
					<span class="punc">、</span>
					<span class="word" @@click="$dispatch('play-segment')" data-start="01:51.24" data-end="01:53.50" data-index="28">大吉祥光明雲</span>
					<span class="punc">、</span><br/>
					<span class="word" @@click="$dispatch('play-segment')" data-start="01:54.06" data-end="01:56.34" data-index="29">大福德光明雲</span>
					<span class="punc">、</span>
					<span class="word" @@click="$dispatch('play-segment')" data-start="01:56.86" data-end="01:58.96" data-index="30">大功德光明雲</span>
					<span class="punc">、</span><br/>
					<span class="word" @@click="$dispatch('play-segment')" data-start="01:59.46" data-end="02:01.96" data-index="31">大歸依光明雲</span>
					<span class="punc">、</span>
					<span class="word" @@click="$dispatch('play-segment')" data-start="02:02.54" data-end="02:04.80" data-index="32">大讚歎光明雲</span>
					<span class="punc">。</span>
				</blockquote>
			</div>
			<div x-show="details" class="details mb-3">
				這時，如來滿臉含笑，放出無數道各種鮮豔的光明雲彩，
				<blockquote>
					所謂大圓滿光明雲、
					大慈悲光明雲、<br/>
					大智慧光明雲、
					大般若光明雲、<br/>
					大三昧光明雲、
					大吉祥光明雲、<br/>
					大福德光明雲、
					大功德光明雲、<br/>
					大歸依光明雲、
					大讚嘆光明雲。
				</blockquote>
				<hr/>
			</div>
			<div :class="details ? 'bg-secondary text-white' : ''" class="paragraph">
				<span class="word" @@click="$dispatch('play-segment')" data-start="02:06.10" data-end="02:09.86" data-index="33">放如是等不可說光明雲已</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="02:10.26" data-end="02:13.52" data-index="34">又出種種微妙之音</span>
				<span class="punc">，</span>
				<blockquote>
					<span class="word" @@click="$dispatch('play-segment')" data-start="02:14.02" data-end="02:16.54" data-index="35">所謂檀波羅蜜音</span>
					<span class="punc">、</span>
					<span class="word" @@click="$dispatch('play-segment')" data-start="02:16.90" data-end="02:18.96" data-index="36">尸波羅蜜音</span>
					<span class="punc">、</span><br/>
					<span class="word" @@click="$dispatch('play-segment')" data-start="02:19.44" data-end="02:21.70" data-index="37">羼提波羅密音</span>
					<span class="punc">、</span>
					<span class="word" @@click="$dispatch('play-segment')" data-start="02:22.68" data-end="02:25.08" data-index="38">毗離耶波羅蜜音</span>
					<span class="punc">、</span><br/>
					<span class="word" @@click="$dispatch('play-segment')" data-start="02:25.52" data-end="02:27.56" data-index="39">禪波羅蜜音</span>
					<span class="punc">、</span>
					<span class="word" @@click="$dispatch('play-segment')" data-start="02:27.88" data-end="02:30.14" data-index="40">般若波羅密音</span>
					<span class="punc">、</span><br/>
					<span class="word" @@click="$dispatch('play-segment')" data-start="02:30.52" data-end="02:31.84" data-index="41">慈悲音</span>
					<span class="punc">、</span>
					<span class="word" @@click="$dispatch('play-segment')" data-start="02:32.18" data-end="02:33.54" data-index="42">喜捨音</span>
					<span class="punc">、</span><br/>
					<span class="word" @@click="$dispatch('play-segment')" data-start="02:33.78" data-end="02:34.96" data-index="43">解脫音</span>
					<span class="punc">、</span>
					<span class="word" @@click="$dispatch('play-segment')" data-start="02:35.42" data-end="02:36.74" data-index="44">無漏音</span>
					<span class="punc">、</span><br/>
					<span class="word" @@click="$dispatch('play-segment')" data-start="02:37.02" data-end="02:38.40" data-index="45">智慧音</span>
					<span class="punc">、</span>
					<span class="word" @@click="$dispatch('play-segment')" data-start="02:38.56" data-end="02:40.34" data-index="46">大智慧音</span>
					<span class="punc">、</span><br/>
					<span class="word" @@click="$dispatch('play-segment')" data-start="02:40.84" data-end="02:42.68" data-index="47">師子吼音</span>
					<span class="punc">、</span>
					<span class="word" @@click="$dispatch('play-segment')" data-start="02:42.98" data-end="02:44.98" data-index="48">大師子吼音</span>
					<span class="punc">、</span><br/>
					<span class="word" @@click="$dispatch('play-segment')" data-start="02:45.54" data-end="02:46.84" data-index="49">雲雷音</span>
					<span class="punc">、</span>
					<span class="word" @@click="$dispatch('play-segment')" data-start="02:47.08" data-end="02:48.82" data-index="50">大雲雷音</span>
					<span class="punc">。</span>
				</blockquote>
			</div>
			<div x-show="details" class="details mb-3">
				放出這許許多多光明雲後，又發出各種微妙的音聲，
				<blockquote>
					所謂檀波羅蜜音、
					尸波羅蜜音、<br/>
					羼提波羅蜜音、
					毗離耶波羅蜜音、<br/>
					禪波羅蜜音、
					般若波羅蜜音、<br/>
					慈悲音、
					喜舍音、<br/>
					解脫音、
					無漏音、<br/>
					智慧音、
					大智慧音、<br/>
					師子吼音、
					大師子吼音、<br/>
					雲雷音、
					大雲雷音。
				</blockquote>
				<hr/>
			</div>
			<div :class="details ? 'bg-secondary text-white' : ''" class="paragraph">
				<span class="word" @@click="$dispatch('play-segment')" data-start="02:49.10" data-end="02:54.06" data-index="51">出如是等不可說不可說音已</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="02:54.48" data-end="02:56.16" data-index="52">娑婆世界</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="02:56.36" data-end="02:58.36" data-index="53">及他方國土</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="02:58.70" data-end="03:01.78" data-index="54">有無量億天龍鬼神</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="03:02.18" data-end="03:05.08" data-index="55">亦集到忉利天宮</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="03:05.48" data-end="03:08.40" data-index="56">所謂：</span>
				<blockquote>
					<span class="word" @@click="$dispatch('play-segment')" data-start="03:05.48" data-end="03:08.40" data-index="56">四天王天</span>
					<span class="punc">、</span>
					<span class="word" @@click="$dispatch('play-segment')" data-start="03:08.70" data-end="03:10.12" data-index="57">忉利天</span>
					<span class="punc">、</span><br/>
					<span class="word" @@click="$dispatch('play-segment')" data-start="03:10.70" data-end="03:12.48" data-index="58">須燄摩天</span>
					<span class="punc">、</span>
					<span class="word" @@click="$dispatch('play-segment')" data-start="03:12.76" data-end="03:14.50" data-index="59">兜率陀天</span>
					<span class="punc">、</span><br/>
					<span class="word" @@click="$dispatch('play-segment')" data-start="03:14.92" data-end="03:16.40" data-index="60">化樂天</span>
					<span class="punc">、</span>
					<span class="word" @@click="$dispatch('play-segment')" data-start="03:16.56" data-end="03:18.60" data-index="61">他化自在天</span>
					<span class="punc">、</span><br/>
					<span class="word" @@click="$dispatch('play-segment')" data-start="03:19.16" data-end="03:20.68" data-index="62">梵眾天</span>
					<span class="punc">、</span>
					<span class="word" @@click="$dispatch('play-segment')" data-start="03:21.12" data-end="03:22.54" data-index="63">梵輔天</span>
					<span class="punc">、</span><br/>
					<span class="word" @@click="$dispatch('play-segment')" data-start="03:23.06" data-end="03:24.48" data-index="64">大梵天</span>
					<span class="punc">、</span>
					<span class="word" @@click="$dispatch('play-segment')" data-start="03:24.94" data-end="03:26.30" data-index="65">少光天</span>
					<span class="punc">、</span><br/>
					<span class="word" @@click="$dispatch('play-segment')" data-start="03:26.92" data-end="03:28.56" data-index="66">無量光天</span>
					<span class="punc">、</span>
					<span class="word" @@click="$dispatch('play-segment')" data-start="03:29.12" data-end="03:30.36" data-index="67">光音天</span>
					<span class="punc">、</span><br/>
					<span class="word" @@click="$dispatch('play-segment')" data-start="03:30.64" data-end="03:32.06" data-index="68">少淨天</span>
					<span class="punc">、</span>
					<span class="word" @@click="$dispatch('play-segment')" data-start="03:32.54" data-end="03:34.26" data-index="69">無量淨天</span>
					<span class="punc">、</span><br/>
					<span class="word" @@click="$dispatch('play-segment')" data-start="03:34.76" data-end="03:36.24" data-index="70">遍淨天</span>
					<span class="punc">、</span>
					<span class="word" @@click="$dispatch('play-segment')" data-start="03:36.46" data-end="03:38.10" data-index="71">福生天</span>
					<span class="punc">、</span><br/>
					<span class="word" @@click="$dispatch('play-segment')" data-start="03:38.36" data-end="03:39.78" data-index="72">福愛天</span>
					<span class="punc">、</span>
					<span class="word" @@click="$dispatch('play-segment')" data-start="03:40.16" data-end="03:41.42" data-index="73">廣果天</span>
					<span class="punc">、</span><br/>
					<span class="word" @@click="$dispatch('play-segment')" data-start="03:41.74" data-end="03:43.14" data-index="74">無想天</span>
					<span class="punc">、</span>
					<span class="word" @@click="$dispatch('play-segment')" data-start="03:43.70" data-end="03:45.14" data-index="75">無煩天</span>
					<span class="punc">、</span><br/>
					<span class="word" @@click="$dispatch('play-segment')" data-start="03:45.44" data-end="03:46.92" data-index="76">無熱天</span>
					<span class="punc">、</span>
					<span class="word" @@click="$dispatch('play-segment')" data-start="03:47.16" data-end="03:48.64" data-index="77">善見天</span>
					<span class="punc">、</span><br/>
					<span class="word" @@click="$dispatch('play-segment')" data-start="03:49.06" data-end="03:50.46" data-index="78">善現天</span>
					<span class="punc">、</span>
					<span class="word" @@click="$dispatch('play-segment')" data-start="03:50.88" data-end="03:52.56" data-index="79">色究竟天</span>
					<span class="punc">、</span><br/>
					<span class="word" @@click="$dispatch('play-segment')" data-start="03:52.84" data-end="03:54.96" data-index="80">摩醯首羅天</span>
					<span class="punc">、</span>
					<span class="word" @@click="$dispatch('play-segment')" data-start="03:55.22" data-end="03:59.04" data-index="81">乃至非想非非想處天</span>
					<span class="punc">，</span>
				</blockquote>
				<span class="word" @@click="$dispatch('play-segment')" data-start="03:59.54" data-end="04:01.26" data-index="82">一切天眾</span>
				<span class="punc">、</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="04:01.40" data-end="04:02.34" data-index="83">龍眾</span>
				<span class="punc">、</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="04:02.46" data-end="04:03.90" data-index="84">鬼神等眾</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="04:04.22" data-end="04:05.66" data-index="85">悉來集會</span>
				<span class="punc">。</span>
			</div>
			<div x-show="details" class="details mb-3">
				發出這許許多多種音聲後，娑婆世界及其他國中有無數的天龍鬼神，也齊集到忉利天宮，這些鬼神有來自：
				<blockquote>
					四天王天、
					忉利天、<br/>
					須焰摩天、
					兜率天、<br/>
					化樂天、
					他化自在天、<br/>
					梵眾天、
					梵輔天、<br/>
					大梵天、
					少光天、<br/>
					無量光天、
					光音天、<br/>
					少淨天、
					無量淨天、<br/>
					遍淨天、
					福生天、<br/>
					福愛天、
					廣果天、<br/>
					無想天、
					無煩天、<br/>
					無熱天、
					善見天、<br/>
					善現天、
					色究竟天、<br/>
					摩醯首羅天、
					乃至非想非非想處天。
				</blockquote>
				一切天眾、龍眾、鬼神等，都來集會。
				<hr/>
			</div>
			<div :class="details ? 'bg-secondary text-white' : ''" class="paragraph">
				<span class="word" @@click="$dispatch('play-segment')" data-start="04:06.36" data-end="04:08.66" data-index="86">復有他方國土</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="04:08.98" data-end="04:10.76" data-index="87">及娑婆世界</span>
				<span class="punc">，</span>
				<blockquote>
				<span class="word" @@click="$dispatch('play-segment')" data-start="04:11.26" data-end="04:12.12" data-index="88">海神</span>
				<span class="punc">、</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="04:12.34" data-end="04:13.28" data-index="89">江神</span>
				<span class="punc">、</span><br/>
				<span class="word" @@click="$dispatch('play-segment')" data-start="04:13.54" data-end="04:14.36" data-index="90">河神</span>
				<span class="punc">、</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="04:14.62" data-end="04:15.58" data-index="91">樹神</span>
				<span class="punc">、</span><br/>
				<span class="word" @@click="$dispatch('play-segment')" data-start="04:15.80" data-end="04:16.74" data-index="92">山神</span>
				<span class="punc">、</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="04:17.08" data-end="04:17.94" data-index="93">地神</span>
				<span class="punc">、</span><br/>
				<span class="word" @@click="$dispatch('play-segment')" data-start="04:18.40" data-end="04:19.60" data-index="94">川澤神</span>
				<span class="punc">、</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="04:19.76" data-end="04:21.02" data-index="95">苗稼神</span>
				<span class="punc">、</span><br/>
				<span class="word" @@click="$dispatch('play-segment')" data-start="04:21.30" data-end="04:22.16" data-index="96">晝神</span>
				<span class="punc">、</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="04:22.40" data-end="04:23.46" data-index="97">夜神</span>
				<span class="punc">、</span><br/>
				<span class="word" @@click="$dispatch('play-segment')" data-start="04:23.68" data-end="04:24.72" data-index="98">空神</span>
				<span class="punc">、</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="04:24.88" data-end="04:25.80" data-index="99">天神</span>
				<span class="punc">、</span><br/>
				<span class="word" @@click="$dispatch('play-segment')" data-start="04:26.08" data-end="04:27.20" data-index="100">飲食神</span>
				<span class="punc">、</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="04:27.42" data-end="04:28.58" data-index="101">草木神</span>
				<span class="punc">，</span>
				</blockquote>
				<span class="word" @@click="$dispatch('play-segment')" data-start="04:29.02" data-end="04:30.54" data-index="102">如是等神</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="04:30.64" data-end="04:32.24" data-index="103">皆來集會</span>
				<span class="punc">。</span>
			</div>
			<div x-show="details" class="details mb-3">
				還有其他國土及娑婆世界的
				<blockquote>
					海神、
					江神、<br/>
					河神、
					樹神、<br/>
					山神、
					地神、<br/>
					川澤神、
					苗稼神、<br/>
					晝神、
					夜神、<br/>
					空神、
					天神、<br/>
					飲食神、
					草木神，
				</blockquote>
				這些神等都來集會。
				<hr/>
			</div>
			<div :class="details ? 'bg-secondary text-white' : ''" class="paragraph">
				<span class="word" @@click="$dispatch('play-segment')" data-start="04:32.74" data-end="04:34.84" data-index="104">復有他方國土</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="04:34.98" data-end="04:36.84" data-index="105">及娑婆世界</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="04:37.40" data-end="04:38.98" data-index="106">諸大鬼王</span>
				<span class="punc">。</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="04:39.44" data-end="04:40.26" data-index="107">所謂</span>
				<span class="punc">：</span>
				<blockquote>
					<span class="word" @@click="$dispatch('play-segment')" data-start="04:40.34" data-end="04:41.92" data-index="108">惡目鬼王</span>
					<span class="punc">、</span>
					<span class="word" @@click="$dispatch('play-segment')" data-start="04:42.30" data-end="04:43.90" data-index="109">噉血鬼王</span>
					<span class="punc">、</span><br/>
					<span class="word" @@click="$dispatch('play-segment')" data-start="04:44.26" data-end="04:46.18" data-index="110">噉精氣鬼王</span>
					<span class="punc">、</span>
					<span class="word" @@click="$dispatch('play-segment')" data-start="04:46.62" data-end="04:48.56" data-index="111">噉胎卵鬼王</span>
					<span class="punc">、</span><br/>
					<span class="word" @@click="$dispatch('play-segment')" data-start="04:48.84" data-end="04:50.56" data-index="112">行病鬼王</span>
					<span class="punc">、</span>
					<span class="word" @@click="$dispatch('play-segment')" data-start="04:50.98" data-end="04:52.36" data-index="113">攝毒鬼王</span>
					<span class="punc">、</span><br/>
					<span class="word" @@click="$dispatch('play-segment')" data-start="04:52.86" data-end="04:54.46" data-index="114">慈心鬼王</span>
					<span class="punc">、</span>
					<span class="word" @@click="$dispatch('play-segment')" data-start="04:54.74" data-end="04:56.46" data-index="115">福利鬼王</span>
					<span class="punc">、</span><br/>
					<span class="word" @@click="$dispatch('play-segment')" data-start="04:56.68" data-end="04:58.60" data-index="116">大愛敬鬼王</span>
					<span class="punc">，</span>
				</blockquote>
				<span class="word" @@click="$dispatch('play-segment')" data-start="04:59.20" data-end="05:00.94" data-index="117">如是等鬼王</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="05:01.14" data-end="05:02.88" data-index="118">皆來集會</span>
				<span class="punc">。</span>
			</div>
			<div x-show="details" class="details mb-3">
				還有其他國土及娑婆世界的各大鬼王：
				<blockquote>
					所謂惡目鬼王、
					啖血鬼王、<br/>
					啖精氣鬼王、
					啖胎卵鬼王、<br/>
					行病鬼王、
					攝毒鬼王、<br/>
					慈心鬼王、
					福利鬼王、<br/>
					大愛敬鬼王等，
				</blockquote>
				這些鬼王也都前來集會。
				<hr/>
			</div>
			<div :class="details ? 'bg-secondary text-white' : ''" class="paragraph">
				<span class="word" @@click="$dispatch('play-segment')" data-start="05:03.28" data-end="05:05.72" data-index="119">爾時釋迦牟尼佛</span>
				<span class="punc">、</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="05:06.08" data-end="05:11.00" data-index="120">告文殊師利法王子菩薩摩訶薩</span>
				<span class="punc">：</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="05:11.40" data-end="05:14.88" data-index="121">汝觀是一切諸佛菩薩</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="05:15.28" data-end="05:17.54" data-index="122">及天龍鬼神</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="05:17.84" data-end="05:19.22" data-index="123">此世界</span>
				<span class="punc">、</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="05:19.38" data-end="05:20.50" data-index="124">他世界</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="05:21.08" data-end="05:22.20" data-index="125">此國土</span>
				<span class="punc">、</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="05:22.40" data-end="05:23.56" data-index="126">他國土</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="05:23.98" data-end="05:28.24" data-index="127">如是今來集會到忉利天者</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="05:28.74" data-end="05:30.30" data-index="128">汝知數不</span>
				<span class="punc">？</span>
			</div>
			<div x-show="details" class="details mb-3">
				這時，釋迦牟尼佛告訴文殊師利法王子：「你看這一切諸佛、菩薩，以及一切天龍八部鬼神，這個世界和其他世界，這個國土和其他國土，現在都集會到忉利天宮的，你能知道有多少嗎？」				<hr/>
			</div>
			<div :class="details ? 'bg-secondary text-white' : ''" class="paragraph">
				<span class="word" @@click="$dispatch('play-segment')" data-start="05:30.90" data-end="05:33.52" data-index="129">文殊師利白佛言</span>
				<span class="punc">：</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="05:33.94" data-end="05:34.86" data-index="130">世尊</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="05:35.26" data-end="05:37.00" data-index="131">若以我神力</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="05:37.18" data-end="05:38.66" data-index="132">千劫測度</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="05:39.04" data-end="05:40.68" data-index="133">不能得知</span>
				<span class="punc">。</span>
			</div>
			<div x-show="details" class="details mb-3">
				文殊師利回答說：「世尊，假使用我的神通來推算，用千劫時間都不能得知。」
				<hr/>
			</div>
			<div :class="details ? 'bg-secondary text-white' : ''" class="paragraph">
				<span class="word" @@click="$dispatch('play-segment')" data-start="05:41.14" data-end="05:43.38" data-index="134">佛告文殊師利</span>
				<span class="punc">：</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="05:43.78" data-end="05:46.32" data-index="135">吾以佛眼觀故</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="05:46.64" data-end="05:48.14" data-index="136">猶不盡數</span>
				<span class="punc">。</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="05:48.58" data-end="05:52.90" data-index="137">此皆是地藏菩薩久遠劫來</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="05:53.22" data-end="05:54.08" data-index="138">已度</span>
				<span class="punc">、</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="05:54.24" data-end="05:55.24" data-index="139">當度</span>
				<span class="punc">、</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="05:55.26" data-end="05:56.30" data-index="140">未度</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="05:56.56" data-end="05:57.62" data-index="141">已成就</span>
				<span class="punc">、</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="05:57.86" data-end="05:58.96" data-index="142">當成就</span>
				<span class="punc">、</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="05:59.22" data-end="06:00.48" data-index="143">未成就</span>
				<span class="punc">。</span>
			</div>
			<div x-show="details" class="details mb-3">
				佛告訴文殊師利：「不但你不知道，就連我用佛眼來觀察，也不知道數目有多少。這都是地藏菩薩久遠劫以來，已經度，應該度，或者還未度的眾生，就是過去、現在、未來的眾生。
				<hr/>
			</div>
			<div :class="details ? 'bg-secondary text-white' : ''" class="paragraph">
				<span class="word" @@click="$dispatch('play-segment')" data-start="06:00.86" data-end="06:03.22" data-index="144">文殊師利白佛言</span>
				<span class="punc">：</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="06:03.94" data-end="06:04.74" data-index="145">世尊</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="06:05.06" data-end="06:08.30" data-index="146">我已過去久修善根</span>
				<span class="punc">、</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="06:08.56" data-end="06:10.24" data-index="147">證無礙智</span>
				<span class="punc">。</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="06:10.58" data-end="06:12.24" data-index="148">聞佛所言</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="06:12.44" data-end="06:13.94" data-index="149">即當信受</span>
				<span class="punc">。</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="06:14.44" data-end="06:15.86" data-index="150">小果聲聞</span>
				<span class="punc">、</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="06:16.06" data-end="06:17.48" data-index="151">天龍八部</span>
				<span class="punc">、</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="06:17.74" data-end="06:20.82" data-index="152">及未來世諸眾生等</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="06:21.44" data-end="06:24.46" data-index="153">雖聞如來誠實之語</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="06:24.46" data-end="06:26.46" data-index="154">必懷疑惑</span>
				<span class="punc">。</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="06:26.76" data-end="06:28.14" data-index="155">設使頂受</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="06:28.40" data-end="06:30.10" data-index="156">未免興謗</span>
				<span class="punc">。</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="06:30.54" data-end="06:32.20" data-index="157">唯願世尊</span>
				<span class="punc">、</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="06:32.42" data-end="06:35.58" data-index="158">廣說地藏菩薩摩訶薩</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="06:35.96" data-end="06:38.00" data-index="159">因地作何行</span>
				<span class="punc">？</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="06:38.00" data-end="06:39.22" data-index="160">立何願</span>
				<span class="punc">？</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="06:39.52" data-end="06:42.22" data-index="161">而能成就不思議事</span>
				<span class="punc">。</span>
			</div>
			<div x-show="details" class="details mb-3">
				文殊師利對佛說：「世尊，我在過去很多劫中修了很多善根，已證得無所障礙的智慧，我聽了佛所說的事，立即就能明白、相信接受。而那些只具有小果位的聲聞的羅漢們、天龍八部眾，以及後來的世間眾生，雖然聽到佛這麼真誠懇切的話，心裏仍生疑惑，即使暫時頂奉受持，但過後又可能生起誹謗。希望世尊你能廣說地藏菩薩因他修了什麼善業，發了什麼大願，而能成就這種不可思議的事情。」
				<hr/>
			</div>
			<div :class="details ? 'bg-secondary text-white' : ''" class="paragraph">
				<span class="word" @@click="$dispatch('play-segment')" data-start="06:43.36" data-end="06:45.58" data-index="162">佛告文殊師利</span>
				<span class="punc">：</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="06:45.86" data-end="06:51.68" data-index="163">譬如三千大千世界所有草木叢林</span>
				<span class="punc">、</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="06:52.02" data-end="06:53.62" data-index="164">稻麻竹葦</span>
				<span class="punc">、</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="06:54.12" data-end="06:55.78" data-index="165">山石微塵</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="06:56.00" data-end="06:57.40" data-index="166">一物一數</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="06:57.64" data-end="06:59.00" data-index="167">作一恆河</span>
				<span class="punc">；</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="06:59.28" data-end="07:00.82" data-index="168">一恆河沙</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="07:00.98" data-end="07:02.64" data-index="169">一沙一界</span>
				<span class="punc">；</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="07:02.84" data-end="07:04.16" data-index="170">一界之內</span>
				<span class="punc">、</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="07:04.38" data-end="07:05.72" data-index="171">一塵一劫</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="07:06.22" data-end="07:07.44" data-index="172">一劫之內</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="07:07.86" data-end="07:09.46" data-index="173">所積塵數</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="07:09.66" data-end="07:11.10" data-index="174">盡充為劫</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="07:11.62" data-end="07:15.48" data-index="175">地藏菩薩證十地果位以來</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="07:15.78" data-end="07:17.98" data-index="176">千倍多於上喻</span>
				<span class="punc">。</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="07:18.32" data-end="07:22.22" data-index="177">何況地藏菩薩在聲聞</span>
				<span class="punc">、</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="07:22.20" data-end="07:23.74" data-index="178">辟支佛地</span>
				<span class="punc">。</span>
			</div>
			<div x-show="details" class="details mb-3">
				佛告訴文殊師利說：「譬如在三千大千世界中，地上的花草、樹木、叢林、稻、麻、竹葦、山石、微塵等，所有東西都譬喻為一條恆河，在每一條恆河中的每一粒沙，譬喻為一個世界。在每個世界中，每一粒微塵譬喻為一個劫，於這個世界一劫內所有積聚的微塵數量，全都當作劫的數量，你看這數目是多少？地藏菩薩獲得十地果位到現在，度生數目已經超過以上所譬喻的數目了，更何況地藏菩薩未證十地果位前，於聲聞羅漢、辟支佛的時候開始度生呢？」
				<hr/>
			</div>
			<div :class="details ? 'bg-secondary text-white' : ''" class="paragraph">
				<span class="word" @@click="$dispatch('play-segment')" data-start="07:24.08" data-end="07:25.76" data-index="179">文殊師利</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="07:26.00" data-end="07:28.96" data-index="180">此菩薩威神誓願</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="07:28.96" data-end="07:30.44" data-index="181">不可思議</span>
				<span class="punc">。</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="07:30.86" data-end="07:32.56" data-index="182">若未來世</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="07:32.56" data-end="07:34.28" data-index="183">有善男子</span>
				<span class="punc">、</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="07:34.30" data-end="07:35.34" data-index="184">善女人</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="07:35.68" data-end="07:38.08" data-index="185">聞是菩薩名字</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="07:38.36" data-end="07:39.64" data-index="186">或讚歎</span>
				<span class="punc">、</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="07:39.90" data-end="07:41.16" data-index="187">或瞻禮</span>
				<span class="punc">、</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="07:41.24" data-end="07:42.38" data-index="188">或稱名</span>
				<span class="punc">、</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="07:42.56" data-end="07:43.72" data-index="189">或供養</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="07:44.08" data-end="07:48.56" data-index="190">乃至彩畫刻鏤塑漆形像</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="07:48.80" data-end="07:53.30" data-index="191">是人當得百返生於三十三天</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="07:53.34" data-end="07:55.08" data-index="192">永不墮惡道</span>
				<span class="punc">。</span>
			</div>
			<div x-show="details" class="details mb-3">
				「文殊師利，這位地藏菩薩的威力和他所發誓願力，都是不可思議的。假使未來世時，有善男子、善女人，聽到地藏菩薩的名字、或稱讚、或瞻仰、或稱念菩薩名號、或供養，甚至彩繪或雕塑地藏菩薩的形像。這個人必能往生上三十三天達百次以上，而永遠不會墮入地獄、餓鬼、畜生這三惡道裏。」
				<hr/>
			</div>
			<div :class="details ? 'bg-secondary text-white' : ''" class="paragraph">
				<span class="word" @@click="$dispatch('play-segment')" data-start="07:55.50" data-end="07:56.98" data-index="193">文殊師利</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="07:57.40" data-end="08:00.02" data-index="194">是地藏菩薩摩訶薩</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="08:00.26" data-end="08:03.28" data-index="195">於過去久遠不可說</span>
				<span class="punc">、</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="08:03.56" data-end="08:05.18" data-index="196">不可說劫前</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="08:05.40" data-end="08:07.64" data-index="197">身為大長者子</span>
				<span class="punc">。</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="08:08.00" data-end="08:09.32" data-index="198">時世有佛</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="08:09.72" data-end="08:14.34" data-index="199">號曰師子奮迅具足萬行如來</span>
				<span class="punc">。</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="08:14.62" data-end="08:15.92" data-index="200">時長者子</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="08:16.02" data-end="08:17.48" data-index="201">見佛相好</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="08:17.76" data-end="08:19.20" data-index="202">千福莊嚴</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="08:19.48" data-end="08:21.04" data-index="203">因問彼佛</span>
				<span class="punc">：</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="08:21.26" data-end="08:22.94" data-index="204">作何行願</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="08:23.02" data-end="08:24.50" data-index="205">而得此相</span>
				<span class="punc">？</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="08:25.00" data-end="08:30.54" data-index="206">時師子奮迅具足萬行如來告長者子</span>
				<span class="punc">：</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="08:30.90" data-end="08:32.48" data-index="207">欲證此身</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="08:32.74" data-end="08:37.18" data-index="208">當須久遠度脫一切受苦眾生</span>
				<span class="punc">。</span>
			</div>
			<div x-show="details" class="details mb-3">
				「文殊師利，這位地藏大菩薩，在過去很久不可說不可說那麼多的劫數以前，是一位富裕且有大勢力財主的兒子。當時有一位佛，名為師子奮迅具足萬行如來，這位財主之子看到佛相美好，有千福莊嚴，便問佛說：『你以前做過什麼功德？發過什麼誓願而能得到這樣圓滿莊嚴的身相呢？』這時，如來便告長者子說：『你想要得到這種莊嚴相好具足的身相，就應該在久遠的大劫裏，救脫一切受苦眾生，使他們離苦得樂。』」
				<hr/>
			</div>
			<div :class="details ? 'bg-secondary text-white' : ''" class="paragraph">
				<span class="word" @@click="$dispatch('play-segment')" data-start="08:37.88" data-end="08:39.22" data-index="209">文殊師利</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="08:39.62" data-end="08:41.12" data-index="210">時長者子</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="08:41.24" data-end="08:42.72" data-index="211">因發願言</span>
				<span class="punc">：</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="08:43.00" data-end="08:46.32" data-index="212">我今盡未來際不可計劫</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="08:46.80" data-end="08:49.66" data-index="213">為是罪苦六道眾生</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="08:49.98" data-end="08:51.68" data-index="214">廣設方便</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="08:51.96" data-end="08:53.40" data-index="215">盡令解脫</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="08:53.78" data-end="08:55.42" data-index="216">而我自身</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="08:55.58" data-end="08:57.04" data-index="217">方成佛道</span>
				<span class="punc">。</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="08:57.50" data-end="08:59.88" data-index="218">以是於彼佛前</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="09:00.02" data-end="09:01.62" data-index="219">立斯大願</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="09:01.88" data-end="09:06.82" data-index="220">于今百千萬億那由他不可說劫</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="09:07.12" data-end="09:08.48" data-index="221">尚為菩薩</span>
				<span class="punc">。</span>
			</div>
			<div x-show="details" class="details mb-3">
				「文殊師利，這時財主的兒子就發誓願說：『我從現在直至未來無法計算之多的大劫中，為六道輪迴受苦的眾生，廣設種種方便法門，讓他們全都解脫，然後我才成佛道。』於是，他就在這個佛面前立下這個大願。至今已過了百千萬億多得無法計算的劫數後，還是菩薩，沒有成佛。」
				<hr/>
			</div>
			<div :class="details ? 'bg-secondary text-white' : ''" class="paragraph">
				<span class="word" @@click="$dispatch('play-segment')" data-start="09:08.98" data-end="09:10.30" data-index="222">又於過去</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="09:10.30" data-end="09:13.42" data-index="223">不可思議阿僧祇劫</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="09:13.78" data-end="09:15.18" data-index="224">時世有佛</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="09:15.56" data-end="09:19.38" data-index="225">號曰覺華定自在王如來</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="09:19.76" data-end="09:21.14" data-index="226">彼佛壽命</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="09:21.34" data-end="09:24.70" data-index="227">四百千萬億阿僧祇劫</span>
				<span class="punc">。</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="09:25.06" data-end="09:26.62" data-index="228">像法之中</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="09:26.82" data-end="09:29.08" data-index="229">有一婆羅門女</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="09:29.34" data-end="09:31.00" data-index="230">宿福深厚</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="09:31.08" data-end="09:32.78" data-index="231">眾所欽敬</span>
				<span class="punc">；</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="09:33.04" data-end="09:34.70" data-index="232">行住坐臥</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="09:34.96" data-end="09:36.64" data-index="233">諸天衛護</span>
				<span class="punc">。</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="09:36.92" data-end="09:38.54" data-index="234">其母信邪</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="09:38.88" data-end="09:40.50" data-index="235">常輕三寶</span>
				<span class="punc">。</span>
			</div>
			<div x-show="details" class="details mb-3">
				又在過去無數劫以前，當時有一位佛，名號叫覺華定自在王如來，那佛的壽命有四百千萬億無數劫長。在像法之時，有一位婆羅門女，經過長期修行，種植了極深厚的善根，人們都欽慕恭敬，無論行住坐臥，都有天神來保護。她的母親深信邪魔外道，常對佛、法、僧三寶非議輕慢。
				<hr/>
			</div>
			<div :class="details ? 'bg-secondary text-white' : ''" class="paragraph">
				<span class="word" @@click="$dispatch('play-segment')" data-start="09:41.16" data-end="09:44.46" data-index="236">是時聖女廣設方便</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="09:44.78" data-end="09:46.30" data-index="237">勸誘其母</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="09:46.56" data-end="09:48.14" data-index="238">令生正見</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="09:48.48" data-end="09:49.90" data-index="239">而此女母</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="09:50.12" data-end="09:51.66" data-index="240">未全生信</span>
				<span class="punc">。</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="09:52.04" data-end="09:53.72" data-index="241">不久命終</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="09:53.86" data-end="09:56.82" data-index="242">魂神墮在無間地獄</span>
				<span class="punc">。</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="09:57.38" data-end="09:59.06" data-index="243">時婆羅門女</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="09:59.42" data-end="10:00.98" data-index="244">知母在世</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="10:01.16" data-end="10:02.52" data-index="245">不信因果</span>
				<span class="punc">。</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="10:02.84" data-end="10:04.36" data-index="246">計當隨業</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="10:04.74" data-end="10:06.14" data-index="247">必生惡趣</span>
				<span class="punc">。</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="10:06.34" data-end="10:07.92" data-index="248">遂賣家宅</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="10:08.24" data-end="10:09.82" data-index="249">廣求香華</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="10:10.14" data-end="10:11.70" data-index="250">及諸供具</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="10:12.04" data-end="10:13.94" data-index="251">於先佛塔寺</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="10:14.16" data-end="10:15.68" data-index="252">大興供養</span>
				<span class="punc">。</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="10:16.04" data-end="10:19.12" data-index="253">見覺華定自在王如來</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="10:19.50" data-end="10:22.04" data-index="254">其形像在一寺中</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="10:22.52" data-end="10:24.06" data-index="255">塑畫威容</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="10:24.40" data-end="10:26.12" data-index="256">端嚴畢備</span>
				<span class="punc">。</span>
			</div>
			<div x-show="details" class="details mb-3">
				這時，那位婆羅門聖女，多方施行種種方便法門，勸令誘導她的母親，讓她生起正確的知見。而婆羅門女的母親並不完全相信佛法。不久其母死後，她的魂神墮到無間地獄裏。這時，婆羅門女知道她的母親在世時，不信因果報應的道理，做了惡事，必然隨業報墮入地獄、餓鬼、畜生三惡道中。於是，為救拔其母，就變賣家產土地，籌備香花及各種供佛的物品，在先佛塔寺中大舉供養。當時她在一所寺中看到覺華定自在王如來的畫像，容貌威儀，極為端莊。
				<hr/>
			</div>
			<div :class="details ? 'bg-secondary text-white' : ''" class="paragraph">
				<span class="word" @@click="$dispatch('play-segment')" data-start="10:26.52" data-end="10:28.26" data-index="257">時婆羅門女</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="10:28.62" data-end="10:30.04" data-index="258">瞻禮尊容</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="10:30.18" data-end="10:31.82" data-index="259">倍生敬仰</span>
				<span class="punc">。</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="10:32.08" data-end="10:33.78" data-index="260">私自念言</span>
				<span class="punc">：</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="10:34.14" data-end="10:35.80" data-index="261">佛名大覺</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="10:36.04" data-end="10:37.62" data-index="262">具一切智</span>
				<span class="punc">。</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="10:38.04" data-end="10:39.76" data-index="263">若在世時</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="10:40.00" data-end="10:41.52" data-index="264">我母死後</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="10:41.72" data-end="10:43.22" data-index="265">儻來問佛</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="10:43.54" data-end="10:45.12" data-index="266">必知處所</span>
				<span class="punc">。</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="10:45.72" data-end="10:47.50" data-index="267">時婆羅門女</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="10:47.84" data-end="10:49.66" data-index="268">垂泣良久</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="10:50.18" data-end="10:51.90" data-index="269">瞻戀如來</span>
				<span class="punc">。</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="10:52.22" data-end="10:54.30" data-index="270">忽聞空中聲曰</span>
				<span class="punc">：</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="10:55.10" data-end="10:56.86" data-index="271">泣者聖女</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="10:57.10" data-end="10:58.78" data-index="272">勿至悲哀</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="10:58.94" data-end="11:02.42" data-index="273">我今示汝母之去處</span>
				<span class="punc">。</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="11:02.72" data-end="11:05.66" data-index="274">婆羅門女合掌向空</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="11:05.92" data-end="11:07.46" data-index="275">而白空曰</span>
				<span class="punc">：</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="11:07.90" data-end="11:09.22" data-index="276">是何神德</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="11:09.74" data-end="11:11.34" data-index="277">寬我憂慮</span>
				<span class="punc">。</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="11:11.62" data-end="11:13.72" data-index="278">我自失母以來</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="11:14.18" data-end="11:15.82" data-index="279">晝夜憶戀</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="11:15.98" data-end="11:19.46" data-index="280">無處可問知母生界</span>
				<span class="punc">。</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="11:20.00" data-end="11:21.62" data-index="281">時空中有聲</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="11:21.86" data-end="11:23.42" data-index="282">再報女曰</span>
				<span class="punc">：</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="11:23.86" data-end="11:26.56" data-index="283">我是汝所瞻禮者</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="11:26.84" data-end="11:30.62" data-index="284">過去覺華定自在王如來</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="11:31.16" data-end="11:32.78" data-index="285">見汝憶母</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="11:33.00" data-end="11:36.14" data-index="286">倍於常情眾生之分</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="11:36.42" data-end="11:38.00" data-index="287">故來告示</span>
				<span class="punc">。</span>
			</div>
			<div x-show="details" class="details mb-3">
				這時，婆羅門女瞻仰禮拜了該佛的尊容後，倍生敬仰之心，心裏說道：「既然這位佛名號叫做大覺（大覺悟），一定具備一切圓滿的智慧。如果這位佛還在世間，我母親死後倘來問佛，佛必定知道我母親往生到那裏去了。」此時，婆羅門女流淚不止，瞻仰如來。忽然聽到空中有聲音說：「這位哭泣的聖女，不要太悲哀了，我現在告訴你母親的去處。」婆羅門女雙手合掌，向空中遙拜，並對空中說：「是何等大德神靈來安慰我呢？我自從失去母親以來，晝夜思念，沒有地方可以問到我母往生之處。」這時空中有聲再次回答說：「我就是你所瞻仰禮拜的過去佛覺華定自在王如來，看到你思念母親倍於一般眾生的分上，所以來告訴你母親的去處。」
				<hr/>
			</div>
			<div :class="details ? 'bg-secondary text-white' : ''" class="paragraph">
				<span class="word" @@click="$dispatch('play-segment')" data-start="11:38.18" data-end="11:41.56" data-index="288">婆羅門女聞此聲已</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="11:41.92" data-end="11:43.76" data-index="289">舉身自撲</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="11:44.12" data-end="11:45.82" data-index="290">肢節皆損</span>
				<span class="punc">。</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="11:46.16" data-end="11:47.86" data-index="291">左右扶侍</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="11:48.14" data-end="11:50.00" data-index="292">良久方蘇</span>
				<span class="punc">。</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="11:50.14" data-end="11:51.70" data-index="293">而白空曰</span>
				<span class="punc">：</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="11:52.00" data-end="11:53.74" data-index="294">願佛慈愍</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="11:54.12" data-end="11:56.72" data-index="295">速說我母生界</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="11:57.14" data-end="11:58.84" data-index="296">我今身心</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="11:58.88" data-end="12:00.26" data-index="297">將死不久</span>
				<span class="punc">。</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="12:00.80" data-end="12:04.12" data-index="298">時覺華定自在王如來</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="12:04.52" data-end="12:05.96" data-index="299">告聖女曰</span>
				<span class="punc">：</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="12:06.30" data-end="12:07.98" data-index="300">汝供養畢</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="12:08.36" data-end="12:10.08" data-index="301">但早返舍</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="12:10.36" data-end="12:13.50" data-index="302">端坐思惟吾之名號</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="12:13.94" data-end="12:17.26" data-index="303">即當知母所生去處</span>
				<span class="punc">。</span>
			</div>
			<div x-show="details" class="details mb-3">
				婆羅門女聽完這話後，舉身向前猛撲，著地禮佛，竟將自己的肢節都跌損了，在她左右的人把她扶起來，很長時間才甦醒過來。便對空中說：「請佛大發慈悲愍念同情我，趕快告訴我母親往生的去處，我現在這個身體不久將要死了。」這時覺華定自在王如來告訴婆羅門聖女說：「你供養完畢之後，早點回家，專心一意念我的名號，便知道你母親所往生的地方。」
				<hr/>
			</div>
			<div :class="details ? 'bg-secondary text-white' : ''" class="paragraph">
				<span class="word" @@click="$dispatch('play-segment')" data-start="12:17.52" data-end="12:21.26" data-index="304">時婆羅門女尋禮佛已</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="12:21.58" data-end="12:23.34" data-index="305">即歸其舍</span>
				<span class="punc">。</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="12:23.56" data-end="12:25.16" data-index="306">以憶母故</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="12:25.44" data-end="12:29.72" data-index="307">端坐念覺華定自在王如來</span>
				<span class="punc">。</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="12:29.92" data-end="12:31.88" data-index="308">經一日一夜</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="12:32.32" data-end="12:35.18" data-index="309">忽見自身到一海邊</span>
				<span class="punc">。</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="12:35.50" data-end="12:37.08" data-index="310">其水涌沸</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="12:37.36" data-end="12:39.10" data-index="311">多諸惡獸</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="12:39.30" data-end="12:40.90" data-index="312">盡復鐵身</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="12:41.18" data-end="12:42.86" data-index="313">飛走海上</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="12:43.24" data-end="12:44.70" data-index="314">東西馳逐</span>
				<span class="punc">。</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="12:45.18" data-end="12:47.56" data-index="315">見諸男子女人</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="12:47.88" data-end="12:49.58" data-index="316">百千萬數</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="12:49.74" data-end="12:51.20" data-index="317">出沒海中</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="12:51.68" data-end="12:55.26" data-index="318">被諸惡獸爭取食噉</span>
				<span class="punc">。</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="12:55.50" data-end="12:57.20" data-index="319">又見夜叉</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="12:57.42" data-end="12:59.22" data-index="320">其形各異</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="12:59.38" data-end="13:01.58" data-index="321">或多手多眼</span>
				<span class="punc">、</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="13:01.90" data-end="13:03.48" data-index="322">多足多頭</span>
				<span class="punc">、</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="13:03.74" data-end="13:05.28" data-index="323">口牙外出</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="13:05.40" data-end="13:07.28" data-index="324">利刃如劍</span>
				<span class="punc">。</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="13:07.54" data-end="13:09.30" data-index="325">驅諸罪人</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="13:09.62" data-end="13:11.24" data-index="326">使近惡獸</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="13:11.66" data-end="13:13.44" data-index="327">復自搏攫</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="13:13.64" data-end="13:15.48" data-index="328">頭足相就</span>
				<span class="punc">。</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="13:15.70" data-end="13:17.42" data-index="329">其形萬類</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="13:17.56" data-end="13:19.18" data-index="330">不敢久視</span>
				<span class="punc">。</span>
			</div>
			<div x-show="details" class="details mb-3">
				當時婆羅門女拜完了佛，立即回家，因為她思憶母親的緣故，便端坐念覺華定自在王如來的名號。經過一日一夜，忽然見自己來到岸邊，那裏海水洶湧滾燙，有許多種惡獸，好像鐵身一樣，在海上東奔西跑。又見這麼多的男子女人，成百成千成萬，出入海中，被那些惡獸爭相吞食。又看見夜叉，其容貌各不相同，有的身體長着多手、或多眼、或多腳、或多頭，牙齒長到了嘴的外面，像劍一樣鋒利，追趕着那些罪人，使他們靠近那些惡獸。夜叉又聯同惡獸把罪人捉住，將他們的身體如頭、足等扭在一起，形狀千奇百怪，令人不敢久看。
				<hr/>
			</div>
			<div :class="details ? 'bg-secondary text-white' : ''" class="paragraph">
				<span class="word" @@click="$dispatch('play-segment')" data-start="13:19.60" data-end="13:21.50" data-index="331">時婆羅門女</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="13:21.64" data-end="13:23.62" data-index="332">以念佛力故</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="13:23.74" data-end="13:25.52" data-index="333">自然無懼</span>
				<span class="punc">。</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="13:25.76" data-end="13:27.24" data-index="334">有一鬼王</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="13:27.38" data-end="13:29.00" data-index="335">名曰無毒</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="13:29.38" data-end="13:30.80" data-index="336">稽首來迎</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="13:31.30" data-end="13:32.74" data-index="337">白聖女曰</span>
				<span class="punc">：</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="13:33.18" data-end="13:34.74" data-index="338">善哉</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="13:33.18" data-end="13:34.74" data-index="338">菩薩</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="13:35.10" data-end="13:36.92" data-index="339">何緣來此</span>
				<span class="punc">？</span>
			</div>
			<div x-show="details" class="details mb-3">
				這時婆羅門女因念佛得神力的緣故，自然沒有恐懼。有一位鬼王，名號叫做無毒，走過來向婆羅門女叩頭相迎，並對她說：「菩薩你好！為什麼你要到這裏來呢？」
				<hr/>
			</div>
			<div :class="details ? 'bg-secondary text-white' : ''" class="paragraph">
				<span class="word" @@click="$dispatch('play-segment')" data-start="13:37.22" data-end="13:40.84" data-index="340">時婆羅門女問鬼王曰</span>
				<span class="punc">：</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="13:41.32" data-end="13:42.94" data-index="341">此是何處</span>
				<span class="punc">？</span>
			</div>
			<div x-show="details" class="details mb-3">
				這時婆羅門女問鬼王說：「這是什麼地方？」
				<hr/>
			</div>
			<div :class="details ? 'bg-secondary text-white' : ''" class="paragraph">
				<span class="word" @@click="$dispatch('play-segment')" data-start="13:43.14" data-end="13:44.60" data-index="342">無毒答曰</span>
				<span class="punc">：</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="13:45.02" data-end="13:50.22" data-index="343">此是大鐵圍山西面第一重海</span>
				<span class="punc">。</span>
			</div>
			<div x-show="details" class="details mb-3">
				無毒回答說：「這是大鐵圍山西面第一重海。」
				<hr/>
			</div>
			<div :class="details ? 'bg-secondary text-white' : ''" class="paragraph">
				<span class="word" @@click="$dispatch('play-segment')" data-start="13:50.50" data-end="13:52.10" data-index="344">聖女問曰</span>
				<span class="punc">：</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="13:52.40" data-end="13:54.76" data-index="345">我聞鐵圍之內</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="13:54.82" data-end="13:56.40" data-index="346">地獄在中</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="13:56.76" data-end="13:58.62" data-index="347">是事實否</span>
				<span class="punc">？</span>
			</div>
			<div x-show="details" class="details mb-3">
				聖女又問說：「我聽說在鐵圍山內，地獄便在其中，這是事實嗎？」
				<hr/>
			</div>
			<div :class="details ? 'bg-secondary text-white' : ''" class="paragraph">
				<span class="word" @@click="$dispatch('play-segment')" data-start="13:58.90" data-end="14:00.30" data-index="348">無毒答曰</span>
				<span class="punc">：</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="14:00.86" data-end="14:02.24" data-index="349">實有地獄</span>
				<span class="punc">。</span>
			</div>
			<div x-show="details" class="details mb-3">
				無毒答說：「確實是有地獄。」
				<hr/>
			</div>
			<div :class="details ? 'bg-secondary text-white' : ''" class="paragraph">
				<span class="word" @@click="$dispatch('play-segment')" data-start="14:02.62" data-end="14:04.24" data-index="350">聖女問曰</span>
				<span class="punc">：</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="14:04.48" data-end="14:07.54" data-index="351">我今云何得到獄所</span>
				<span class="punc">？</span>
			</div>
			<div x-show="details" class="details mb-3">
				聖女又問：「我現在怎樣才能到得地獄裏去呢？」
				<hr/>
			</div>
			<div :class="details ? 'bg-secondary text-white' : ''" class="paragraph">
				<span class="word" @@click="$dispatch('play-segment')" data-start="14:08.00" data-end="14:09.54" data-index="352">無毒答曰</span>
				<span class="punc">：</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="14:09.74" data-end="14:11.54" data-index="353">若非威神</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="14:11.76" data-end="14:13.30" data-index="354">即須業力</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="14:13.56" data-end="14:15.30" data-index="355">非此二事</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="14:15.50" data-end="14:17.10" data-index="356">終不能到</span>
				<span class="punc">。</span>
			</div>
			<div x-show="details" class="details mb-3">
				無毒答說：「如果不是大威神力，就需要業力，才能到達這個地方，沒有這兩種因緣，是永遠不能到這地方來的。」
				<hr/>
			</div>
			<div :class="details ? 'bg-secondary text-white' : ''" class="paragraph">
				<span class="word" @@click="$dispatch('play-segment')" data-start="14:17.42" data-end="14:18.92" data-index="357">聖女又問</span>
				<span class="punc">：</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="14:19.30" data-end="14:20.92" data-index="358">此水何緣</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="14:21.04" data-end="14:22.68" data-index="359">而乃涌沸</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="14:22.98" data-end="14:24.42" data-index="360">多諸罪人</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="14:24.60" data-end="14:26.14" data-index="361">及以惡獸</span>
				<span class="punc">？</span>
			</div>
			<div x-show="details" class="details mb-3">
				聖女又問：「這裏的海水是什麼緣故，竟不斷地滾沸呢？為什麼有這麼多的罪人和惡獸呢？」
				<hr/>
			</div>
			<div :class="details ? 'bg-secondary text-white' : ''" class="paragraph">
				<span class="word" @@click="$dispatch('play-segment')" data-start="14:26.42" data-end="14:27.88" data-index="362">無毒答曰</span>
				<span class="punc">：</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="14:28.30" data-end="14:31.88" data-index="363">此是閻浮提造惡眾生</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="14:32.16" data-end="14:33.72" data-index="364">新死之者</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="14:34.12" data-end="14:36.20" data-index="365">經四十九日後</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="14:36.44" data-end="14:38.28" data-index="366">無人繼嗣</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="14:38.54" data-end="14:39.88" data-index="367">為作功德</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="14:40.24" data-end="14:41.64" data-index="368">救拔苦難</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="14:41.88" data-end="14:44.60" data-index="369">生時又無善因</span>
				<span class="punc">。</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="14:44.86" data-end="14:47.74" data-index="370">當據本業所感地獄</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="14:48.02" data-end="14:50.34" data-index="371">自然先渡此海</span>
				<span class="punc">。</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="14:50.80" data-end="14:53.14" data-index="372">海東十萬由旬</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="14:53.38" data-end="14:54.88" data-index="373">又有一海</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="14:55.16" data-end="14:57.18" data-index="374">其苦倍此</span>
				<span class="punc">。</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="14:57.50" data-end="14:58.86" data-index="375">彼海之東</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="14:58.86" data-end="15:00.18" data-index="376">又有一海</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="15:00.52" data-end="15:02.18" data-index="377">其苦復倍</span>
				<span class="punc">。</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="15:02.52" data-end="15:05.82" data-index="378">三業惡因之所招感</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="15:06.16" data-end="15:07.82" data-index="379">共號業海</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="15:08.16" data-end="15:09.72" data-index="380">其處是也</span>
				<span class="punc">。</span>
			</div>
			<div x-show="details" class="details mb-3">
				無毒回答說：「這些都是閻浮作惡的眾生，剛死之時，經四十九日後，無人為他們繼修功德，救拔出離苦難；他們活着的時候，又沒有修一點善行的因緣，就要根據他們本身所作的惡業，招感到相關地獄中，途中自然要渡這個苦海。此海的東面十萬由旬，又有一海，它的苦處更為加倍；那個海的東面，還有一海，它的苦處更比前兩海加倍。他們都是因身、口、意所作的惡業而招感墮入到苦海中，所以這三海就叫作業海，就是這個地方。」
				<hr/>
			</div>
			<div :class="details ? 'bg-secondary text-white' : ''" class="paragraph">
				<span class="word" @@click="$dispatch('play-segment')" data-start="15:09.98" data-end="15:13.70" data-index="381">聖女又問鬼王無毒曰</span>
				<span class="punc">：</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="15:14.14" data-end="15:15.60" data-index="382">地獄何在</span>
				<span class="punc">？</span>
			</div>
			<div x-show="details" class="details mb-3">
				聖女又問無毒鬼王說：「地獄究竟是在什麼地方呢？」
				<hr/>
			</div>
			<div :class="details ? 'bg-secondary text-white' : ''" class="paragraph">
				<span class="word" @@click="$dispatch('play-segment')" data-start="15:15.84" data-end="15:17.34" data-index="383">無毒答曰</span>
				<span class="punc">：</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="15:17.62" data-end="15:19.14" data-index="384">三海之內</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="15:19.18" data-end="15:20.38" data-index="385">是大地獄</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="15:20.74" data-end="15:22.38" data-index="386">其數百千</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="15:22.62" data-end="15:23.96" data-index="387">各各差別</span>
				<span class="punc">。</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="15:24.42" data-end="15:25.96" data-index="388">所謂大者</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="15:26.06" data-end="15:27.30" data-index="389">具有十八</span>
				<span class="punc">。</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="15:27.64" data-end="15:29.12" data-index="390">次有五百</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="15:29.64" data-end="15:31.16" data-index="391">苦毒無量</span>
				<span class="punc">。</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="15:31.48" data-end="15:33.12" data-index="392">次有千百</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="15:33.34" data-end="15:34.96" data-index="393">亦無量苦</span>
				<span class="punc">。</span>
			</div>
			<div x-show="details" class="details mb-3">
				無毒回答說：「在這三個業海之內，就是大地獄，其內有成千上百個小地獄，每個地獄各不相同。所說的大地獄，共有十八個；其次有五百個地獄，每個地獄所受的苦是無法計算的；再其次有千百個小地獄，所受的苦也是無法計算的。」
				<hr/>
			</div>
			<div :class="details ? 'bg-secondary text-white' : ''" class="paragraph">
				<span class="word" @@click="$dispatch('play-segment')" data-start="15:35.34" data-end="15:38.20" data-index="394">聖女又問大鬼王曰</span>
				<span class="punc">：</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="15:38.56" data-end="15:40.80" data-index="395">我母死來未久</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="15:40.98" data-end="15:44.38" data-index="396">不知魂神當至何趣</span>
				<span class="punc">？</span>
			</div>
			<div x-show="details" class="details mb-3">
				聖女又問無毒大鬼王說：「我的母親剛死不久，不知道她的魂神投生到什麼地方？」
				<hr/>
			</div>
			<div :class="details ? 'bg-secondary text-white' : ''" class="paragraph">
				<span class="word" @@click="$dispatch('play-segment')" data-start="15:44.64" data-end="15:46.76" data-index="397">鬼王問聖女曰</span>
				<span class="punc">：</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="15:47.42" data-end="15:48.84" data-index="398">菩薩之母</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="15:49.18" data-end="15:51.80" data-index="399">在生習何行業</span>
				<span class="punc">？</span>
			</div>
			<div x-show="details" class="details mb-3">
				鬼王問聖女說：「你的母親在世時她曾做過什麼事呢？」
				<hr/>
			</div>
			<div :class="details ? 'bg-secondary text-white' : ''" class="paragraph">
				<span class="word" @@click="$dispatch('play-segment')" data-start="15:52.26" data-end="15:53.72" data-index="400">聖女答曰</span>
				<span class="punc">：</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="15:54.12" data-end="15:55.82" data-index="401">我母邪見</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="15:55.96" data-end="15:57.56" data-index="402">譏毀三寶</span>
				<span class="punc">。</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="15:57.88" data-end="15:59.54" data-index="403">設或暫信</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="15:59.96" data-end="16:01.48" data-index="404">旋又不敬</span>
				<span class="punc">。</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="16:01.74" data-end="16:03.40" data-index="405">死雖日淺</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="16:03.66" data-end="16:05.32" data-index="406">未知生處</span>
				<span class="punc">。</span>
			</div>
			<div x-show="details" class="details mb-3">
				聖女回答說：「我母親在世時存有不正確的觀念，譏笑毀謗佛、法、僧三寶，即使暫時相信，不久又不恭敬。她死後時間雖然不長，還不知道她會往生到那裏。」
				<hr/>
			</div>
			<div :class="details ? 'bg-secondary text-white' : ''" class="paragraph">
				<span class="word" @@click="$dispatch('play-segment')" data-start="16:05.58" data-end="16:07.16" data-index="407">無毒問曰</span>
				<span class="punc">：</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="16:07.46" data-end="16:08.96" data-index="408">菩薩之母</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="16:09.14" data-end="16:10.72" data-index="409">姓氏何等</span>
				<span class="punc">？</span>
			</div>
			<div x-show="details" class="details mb-3">
				無毒問說：「你母親姓什麼？」
				<hr/>
			</div>
			<div :class="details ? 'bg-secondary text-white' : ''" class="paragraph">
				<span class="word" @@click="$dispatch('play-segment')" data-start="16:11.04" data-end="16:12.40" data-index="410">聖女答曰</span>
				<span class="punc">：</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="16:12.72" data-end="16:14.40" data-index="411">我父我母</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="16:14.68" data-end="16:16.88" data-index="412">俱婆羅門種</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="16:17.20" data-end="16:19.32" data-index="413">父號尸羅善現</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="16:19.50" data-end="16:21.70" data-index="414">母號悅帝利</span>
				<span class="punc">。</span>
			</div>
			<div x-show="details" class="details mb-3">
				聖女答說：「我父親母親都是婆羅門種姓，父親名叫尸羅善現，母親名叫悅帝利。」
				<hr/>
			</div>
			<div :class="details ? 'bg-secondary text-white' : ''" class="paragraph">
				<span class="word" @@click="$dispatch('play-segment')" data-start="16:22.02" data-end="16:24.88" data-index="415">無毒合掌啟菩薩曰</span>
				<span class="punc">：</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="16:25.30" data-end="16:28.48" data-index="416">願聖者卻返本處</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="16:28.60" data-end="16:31.20" data-index="417">無至憂憶悲戀</span>
				<span class="punc">。</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="16:31.58" data-end="16:33.40" data-index="418">悅帝利罪女</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="16:33.66" data-end="16:35.14" data-index="419">生天以來</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="16:35.20" data-end="16:36.54" data-index="420">經今三日</span>
				<span class="punc">。</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="16:36.84" data-end="16:39.22" data-index="421">云承孝順之子</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="16:39.40" data-end="16:41.96" data-index="422">為母設供修福</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="16:42.24" data-end="16:46.76" data-index="423">布施覺華定自在王如來塔寺</span>
				<span class="punc">。</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="16:47.16" data-end="16:49.38" data-index="424">非唯菩薩之母</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="16:49.48" data-end="16:50.82" data-index="425">得脫地獄</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="16:51.02" data-end="16:53.46" data-index="426">應是無間罪人</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="16:53.78" data-end="16:55.52" data-index="427">此日悉得受樂</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="16:55.82" data-end="16:57.38" data-index="428">俱同生訖</span>
				<span class="punc">。</span>
			</div>
			<div x-show="details" class="details mb-3">
				無毒鬼王合掌告訴婆羅門女說：「希望你立即回家吧，不要憂愁悲哀。你母親悅帝利罪女生天以來已經三天。全靠她孝順的女兒為母親設齋修福做功德，布施覺華定自在王如來塔寺。不但她得到解脫地獄之苦，連同墮入無間地獄的所有罪人，此日都一起生天享樂了。」
				<hr/>
			</div>
			<div :class="details ? 'bg-secondary text-white' : ''" class="paragraph">
				<span class="word" @@click="$dispatch('play-segment')" data-start="16:57.74" data-end="16:59.20" data-index="429">鬼王言畢</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="16:59.50" data-end="17:00.90" data-index="430">合掌而退</span>
				<span class="punc">。</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="17:01.10" data-end="17:02.52" data-index="431">婆羅門女</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="17:02.64" data-end="17:04.46" data-index="432">尋如夢歸</span>
				<span class="punc">。</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="17:04.60" data-end="17:06.20" data-index="433">悟此事已</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="17:06.44" data-end="17:11.26" data-index="434">便於覺華定自在王如來塔像之前</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="17:11.62" data-end="17:13.26" data-index="435">立弘誓願</span>
				<span class="punc">：</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="17:13.64" data-end="17:15.74" data-index="436">願我盡未來劫</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="17:16.06" data-end="17:18.20" data-index="437">應有罪苦眾生</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="17:18.42" data-end="17:19.98" data-index="438">廣設方便</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="17:20.20" data-end="17:21.62" data-index="439">使令解脫</span>
				<span class="punc">。</span>
			</div>
			<div x-show="details" class="details mb-3">
				鬼王說畢，合掌而退。婆羅門女不久便如從夢中醒來一樣，她明白這件事後，便在覺華定自在王如來塔像之前，立下宏大的誓願──願我盡未來世界的所有劫數，我都要為所有造罪受苦的眾生，廣設種種方便，使他們得到解脫苦難。
				<hr/>
			</div>
			<div :class="details ? 'bg-secondary text-white' : ''" class="paragraph">
				<span class="word" @@click="$dispatch('play-segment')" data-start="17:21.86" data-end="17:23.98" data-index="440">佛告文殊師利</span>
				<span class="punc">：</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="17:24.34" data-end="17:26.38" data-index="441">時鬼王無毒者</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="17:26.48" data-end="17:29.14" data-index="442">當今財首菩薩是</span>
				<span class="punc">。</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="17:29.46" data-end="17:31.18" data-index="443">婆羅門女者</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="17:31.46" data-end="17:33.62" data-index="444">即地藏菩薩是</span>
				<span class="punc">。</span>
			</div>
			<div x-show="details" class="details mb-3">
				佛告訴文殊師利：「當時那個無毒鬼王，就是現在的財首菩薩；那位婆羅門女，就是這位地藏菩薩。」
				<hr/>
			</div>
			<h4 class="toc-item" id="vol1-ch2">
				<span class="word" @@click="$dispatch('play-segment')" data-start="17:35.48" data-end="17:38.48" data-index="445">分身集會品第二</span>
			</h4>
			<div :class="details ? 'bg-secondary text-white' : ''" class="paragraph">
				<span class="word" @@click="$dispatch('play-segment')" data-start="17:40.24" data-end="17:43.84" data-index="446">爾時百千萬億不可思</span>
				<span class="punc">、</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="17:43.84" data-end="17:45.04" data-index="447">不可議</span>
				<span class="punc">、</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="17:45.04" data-end="17:46.14" data-index="448">不可量</span>
				<span class="punc">、</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="17:46.32" data-end="17:49.94" data-index="449">不可說無量阿僧祇世界</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="17:50.66" data-end="17:52.42" data-index="450">所有地獄處</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="17:52.72" data-end="17:54.94" data-index="451">分身地藏菩薩</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="17:55.46" data-end="17:58.56" data-index="452">俱來集在忉利天宮</span>
				<span class="punc">。</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="17:59.22" data-end="18:01.68" data-index="453">以如來神力故</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="18:02.04" data-end="18:03.68" data-index="454">各以方面</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="18:03.92" data-end="18:07.64" data-index="455">與諸得解脫從業道出者</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="18:07.92" data-end="18:11.72" data-index="456">亦各有千萬億那由他數</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="18:12.04" data-end="18:15.22" data-index="457">共持香華</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="18:12.04" data-end="18:15.22" data-index="457">來供養佛</span>
				<span class="punc">。</span>
			</div>
			<div x-show="details" class="details mb-3">
				這時，有百千萬億無數世界、所有從地獄來的地藏菩薩分身，都聚集到忉利天宮。仗以佛的神通力緣故，來自各方從地獄業道得到解脫的眾生，也有千萬億數不清的數目，都聚集到忉利天宮，手持香花來供養佛。
				<hr/>
			</div>
			<div :class="details ? 'bg-secondary text-white' : ''" class="paragraph">
				<span class="word" @@click="$dispatch('play-segment')" data-start="18:15.82" data-end="18:18.34" data-index="458">彼諸同來等輩</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="18:18.94" data-end="18:22.04" data-index="459">皆因地藏菩薩教化</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="18:22.42" data-end="18:28.66" data-index="460">永不退轉於阿耨多羅三藐三菩提</span>
				<span class="punc">。</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="18:29.32" data-end="18:31.08" data-index="461">是諸眾等</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="18:31.42" data-end="18:33.22" data-index="462">久遠劫來</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="18:33.32" data-end="18:35.10" data-index="463">流浪生死</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="18:35.70" data-end="18:37.50" data-index="464">六道受苦</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="18:37.50" data-end="18:38.94" data-index="465">暫無休息</span>
				<span class="punc">。</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="18:39.36" data-end="18:43.20" data-index="466">以地藏菩薩廣大慈悲</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="18:43.44" data-end="18:45.18" data-index="467">深誓願故</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="18:45.44" data-end="18:47.04" data-index="468">各獲果證</span>
				<span class="punc">。</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="18:47.60" data-end="18:49.46" data-index="469">既至忉利</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="18:49.46" data-end="18:50.98" data-index="470">心懷踴躍</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="18:51.40" data-end="18:52.98" data-index="471">瞻仰如來</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="18:53.24" data-end="18:54.98" data-index="472">目不暫捨</span>
				<span class="punc">。</span>
			</div>
			<div x-show="details" class="details mb-3">
				那些一同前來的眾生，都是受地藏菩薩的教化，永遠不會從無上正等正覺中退轉。這些眾生，從久遠劫以前到現在，都在生死苦海裏顛沛流浪，受六道輪迴之苦，沒有一點時間休息。由於地藏菩薩以廣大慈悲之心，誓願救拔苦難的緣故，這些眾生個個都證得了果位。他們現在來到忉利天宮，心情歡欣而激動，瞻仰如來，眼睛一刻也不離開佛。
				<hr/>
			</div>
			<div :class="details ? 'bg-secondary text-white' : ''" class="paragraph">
				<span class="word" @@click="$dispatch('play-segment')" data-start="18:55.46" data-end="18:59.08" data-index="473">爾時</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="18:55.46" data-end="18:59.08" data-index="473">世尊舒金色臂</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="18:59.40" data-end="19:02.60" data-index="474">摩百千萬億不可思</span>
				<span class="punc">、</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="19:02.70" data-end="19:03.90" data-index="475">不可議</span>
				<span class="punc">、</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="19:03.90" data-end="19:05.18" data-index="476">不可量</span>
				<span class="punc">、</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="19:05.18" data-end="19:06.16" data-index="477">不可說</span>
				<span class="punc">、</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="19:06.16" data-end="19:13.72" data-index="478">無量阿僧祇世界諸分身地藏菩薩摩訶薩頂</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="19:14.16" data-end="19:15.72" data-index="479">而作是言</span>
				<span class="punc">：</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="19:16.24" data-end="19:18.76" data-index="480">吾於五濁惡世</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="19:18.88" data-end="19:22.50" data-index="481">教化如是剛強眾生</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="19:22.70" data-end="19:24.50" data-index="482">令心調伏</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="19:24.86" data-end="19:26.50" data-index="483">捨邪歸正</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="19:26.72" data-end="19:28.22" data-index="484">十有一二</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="19:28.66" data-end="19:30.22" data-index="485">尚惡習在</span>
				<span class="punc">。</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="19:30.36" data-end="19:33.42" data-index="486">吾亦分身千百億</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="19:33.42" data-end="19:35.16" data-index="487">廣設方便</span>
				<span class="punc">。</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="19:35.42" data-end="19:37.16" data-index="488">或有利根</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="19:37.44" data-end="19:39.16" data-index="489">聞即信受</span>
				<span class="punc">；</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="19:39.60" data-end="19:41.16" data-index="490">或有善果</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="19:41.56" data-end="19:43.42" data-index="491">勤勸成就</span>
				<span class="punc">；</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="19:43.60" data-end="19:45.42" data-index="492">或有暗鈍</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="19:45.58" data-end="19:47.30" data-index="493">久化方歸</span>
				<span class="punc">；</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="19:47.56" data-end="19:49.30" data-index="494">或有業重</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="19:49.48" data-end="19:51.18" data-index="495">不生敬仰</span>
				<span class="punc">。</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="19:51.44" data-end="19:53.90" data-index="496">如是等輩眾生</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="19:53.90" data-end="19:55.56" data-index="497">各各差別</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="19:55.74" data-end="19:57.38" data-index="498">分身度脫</span>
				<span class="punc">。</span>
			</div>
			<div x-show="details" class="details mb-3">
				這時，佛伸出他那金色的手臂，摸無量分身地藏菩薩的頭頂並且這樣說：「我在這五濁惡世中，教化這麼多剛強頑固的眾生，使他們的心都能調伏柔順，捨棄邪道，走上正道，但在十個之中，有一兩個還是惡習不改。我也分作千百億個化身，用種種方法來度脫他們。其中利根聰明的，聽我一講，就能相信接受；有些做過善業有善根的人，要經常耐心教化他們，然後才能成就；有些愚笨魯鈍的人，長期教化他們，才能使他們歸依佛法；還有些罪業太重的，對佛法不敬仰。像這種種眾生，各有不同的根性，我都要分身去救度他們，令他們脫離苦海。」
				<hr/>
			</div>
			<div :class="details ? 'bg-secondary text-white' : ''" class="paragraph">
				<span class="word" @@click="$dispatch('play-segment')" data-start="19:57.64" data-end="19:59.70" data-index="499">或現男子身</span>
				<span class="punc">、</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="19:59.90" data-end="20:02.04" data-index="500">或現女人身</span>
				<span class="punc">、</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="20:02.32" data-end="20:04.48" data-index="501">或現天龍身</span>
				<span class="punc">、</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="20:04.68" data-end="20:06.82" data-index="502">或現神鬼身</span>
				<span class="punc">、</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="20:07.10" data-end="20:10.02" data-index="503">或現山林川原</span>
				<span class="punc">、</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="20:10.32" data-end="20:12.76" data-index="504">河池泉井</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="20:12.88" data-end="20:14.54" data-index="505">利及於人</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="20:14.88" data-end="20:16.54" data-index="506">悉皆度脫</span>
				<span class="punc">。</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="20:16.72" data-end="20:18.88" data-index="507">或現天帝身</span>
				<span class="punc">、</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="20:19.10" data-end="20:21.44" data-index="508">或現梵王身</span>
				<span class="punc">、</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="20:21.70" data-end="20:24.10" data-index="509">或現轉輪王身</span>
				<span class="punc">、</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="20:24.24" data-end="20:26.32" data-index="510">或現居士身</span>
				<span class="punc">、</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="20:26.62" data-end="20:28.70" data-index="511">或現國王身</span>
				<span class="punc">、</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="20:28.94" data-end="20:31.10" data-index="512">或現宰輔身</span>
				<span class="punc">、</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="20:31.28" data-end="20:33.38" data-index="513">或現官屬身</span>
				<span class="punc">、</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="20:33.58" data-end="20:35.24" data-index="514">或現比丘</span>
				<span class="punc">、</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="20:35.36" data-end="20:36.56" data-index="515">比丘尼</span>
				<span class="punc">、</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="20:36.66" data-end="20:37.84" data-index="516">優婆塞</span>
				<span class="punc">、</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="20:38.04" data-end="20:39.70" data-index="517">優婆夷身</span>
				<span class="punc">、</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="20:39.70" data-end="20:41.86" data-index="518">乃至聲聞</span>
				<span class="punc">、</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="20:41.88" data-end="20:42.80" data-index="519">羅漢</span>
				<span class="punc">、</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="20:42.98" data-end="20:44.12" data-index="520">辟支佛</span>
				<span class="punc">、</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="20:44.38" data-end="20:45.98" data-index="521">菩薩等身</span>
				<span class="punc">、</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="20:46.18" data-end="20:48.04" data-index="522">而以化度</span>
				<span class="punc">。</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="20:48.50" data-end="20:50.44" data-index="523">非但佛身</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="20:50.44" data-end="20:52.04" data-index="524">獨現其前</span>
				<span class="punc">。</span>
			</div>
			<div x-show="details" class="details mb-3">
				「我或者現男子身，或者現女人身，或者現天龍身，或者現神鬼身，或變成山、林、川、原、河、池、泉、井，為眾人造利，從而使他們全部脫離苦海。我或者現天帝身，或現梵天王身，或現轉輪王身，或現居士身，或現國王身，或現宰相大臣身，或現大官的眷屬身，或現和尚身，或現尼姑身，或現男居士身，或現女居士身，甚至現聲聞羅漢、辟支佛、菩薩等身，用種種形象方便、隨緣化度眾生，並不只以佛身出現在眾生面前。」
				<hr/>
			</div>
			<div :class="details ? 'bg-secondary text-white' : ''" class="paragraph">
				<span class="word" @@click="$dispatch('play-segment')" data-start="20:52.40" data-end="20:55.56" data-index="525">汝觀吾累劫勤苦</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="20:55.90" data-end="21:01.88" data-index="526">度脫如是等難化剛強罪苦眾生</span>
				<span class="punc">。</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="21:02.50" data-end="21:05.08" data-index="527">其有未調伏者</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="21:05.26" data-end="21:07.22" data-index="528">隨業報應</span>
				<span class="punc">。</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="21:07.30" data-end="21:08.98" data-index="529">若墮惡趣</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="21:09.12" data-end="21:10.62" data-index="530">受大苦時</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="21:10.82" data-end="21:15.00" data-index="531">汝當憶念吾在忉利天宮</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="21:15.40" data-end="21:16.96" data-index="532">殷懃付囑</span>
				<span class="punc">。</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="21:17.26" data-end="21:19.52" data-index="533">令娑婆世界</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="21:19.90" data-end="21:23.20" data-index="534">至彌勒出世已來眾生</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="21:23.64" data-end="21:25.10" data-index="535">悉使解脫</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="21:25.28" data-end="21:27.06" data-index="536">永離諸苦</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="21:27.22" data-end="21:28.94" data-index="537">遇佛授記</span>
				<span class="punc">。</span>
			</div>
			<div x-show="details" class="details mb-3">
				「你看我無數劫以來，這樣辛勤勞苦，度脫像這樣難化的頑固罪苦眾生，對於那些到現在還沒有調伏的眾生，隨其惡業而墮入地獄、餓鬼、畜生三惡道，受極大苦難時，你應當記得我在忉利天宮再三囑咐你，令這個世間直至彌勒菩薩出世以來的眾生，全部都得到解脫，永遠脫離各種苦難，再遇佛為他們授記。」
				<hr/>
			</div>
			<div :class="details ? 'bg-secondary text-white' : ''" class="paragraph">
				<span class="word" @@click="$dispatch('play-segment')" data-start="21:29.24" data-end="21:30.26" data-index="538">爾時</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="21:30.26" data-end="21:33.80" data-index="539">諸世界分身地藏菩薩</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="21:34.14" data-end="21:35.80" data-index="540">共復一形</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="21:36.04" data-end="21:37.80" data-index="541">涕淚哀戀</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="21:38.16" data-end="21:39.80" data-index="542">白其佛言</span>
				<span class="punc">：</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="21:40.06" data-end="21:42.54" data-index="543">我從久遠劫來</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="21:42.84" data-end="21:44.54" data-index="544">蒙佛接引</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="21:44.94" data-end="21:47.96" data-index="545">使獲不可思議神力</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="21:48.12" data-end="21:49.78" data-index="546">具大智慧</span>
				<span class="punc">。</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="21:50.02" data-end="21:51.86" data-index="547">我所分身</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="21:51.86" data-end="21:56.46" data-index="548">遍滿百千萬億恆河沙世界</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="21:56.80" data-end="22:00.68" data-index="549">每一世界化百千萬億身</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="22:01.10" data-end="22:04.50" data-index="550">每一身度百千萬億人</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="22:04.84" data-end="22:07.00" data-index="551">令歸敬三寶</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="22:07.22" data-end="22:08.96" data-index="552">永離生死</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="22:09.30" data-end="22:10.74" data-index="553">至涅槃樂</span>
				<span class="punc">。</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="22:11.04" data-end="22:14.88" data-index="554">但於佛法中所為善事</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="22:15.20" data-end="22:16.88" data-index="555">一毛一渧</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="22:17.04" data-end="22:18.54" data-index="556">一沙一塵</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="22:18.96" data-end="22:20.66" data-index="557">或毫髮許</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="22:21.02" data-end="22:22.50" data-index="558">我漸度脫</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="22:22.84" data-end="22:24.40" data-index="559">使獲大利</span>
				<span class="punc">。</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="22:24.72" data-end="22:26.42" data-index="560">唯願世尊</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="22:26.82" data-end="22:30.58" data-index="561">不以後世惡業眾生為慮</span>
				<span class="punc">。</span>
			</div>
			<div x-show="details" class="details mb-3">
				這時，各世界的分身地藏菩薩合成一體，不禁涕淚交流，哀傷的對佛說：「我從久遠劫以來，承蒙佛的慈悲來接引，使我得到不可思議的神力，具有大智慧。我現所分身遍滿百千萬億恆河沙數那麼多的世界，在每一個世界裏，又化作百千萬億個分身，每一個分身，又去度化百千萬億個人，使他們都歸依恭敬佛、法、僧三寶，永遠離開生死苦惱，擺脫六道輪迴，得涅槃之樂。即使眾生於佛法中所做的善事，小至只有一根毛、一滴水、一粒沙、一點灰塵，甚至只有像毫髮那麼小的善事，我都要逐漸地度脫他們，使他們脫離苦海，得到很大的利益。願世尊你不要為後世的惡業眾生而憂慮。」
				<hr/>
			</div>
			<div :class="details ? 'bg-secondary text-white' : ''" class="paragraph">
				<span class="word" @@click="$dispatch('play-segment')" data-start="22:30.90" data-end="22:33.18" data-index="562">如是三白佛言</span>
				<span class="punc">：</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="22:33.50" data-end="22:34.94" data-index="563">唯願世尊</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="22:35.20" data-end="22:38.94" data-index="564">不以後世惡業眾生為慮</span>
				<span class="punc">。</span>
			</div>
			<div x-show="details" class="details mb-3">
				地藏菩薩再三對佛說：「願世尊你不要為後世的惡業眾生而憂慮。」
				<hr/>
			</div>
			<div :class="details ? 'bg-secondary text-white' : ''" class="paragraph">
				<span class="word" @@click="$dispatch('play-segment')" data-start="22:39.38" data-end="22:40.36" data-index="565">爾時</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="22:40.44" data-end="22:43.02" data-index="566">佛讚地藏菩薩言</span>
				<span class="punc">：</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="22:43.32" data-end="22:45.10" data-index="567">善哉</span>
				<span class="punc">！</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="22:43.32" data-end="22:45.10" data-index="567">善哉</span>
				<span class="punc">！</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="22:45.32" data-end="22:47.32" data-index="568">吾助汝喜</span>
				<span class="punc">。</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="22:47.64" data-end="22:51.00" data-index="569">汝能成就久遠劫來</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="22:51.32" data-end="22:52.86" data-index="570">發弘誓願</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="22:53.02" data-end="22:54.50" data-index="571">廣度將畢</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="22:54.80" data-end="22:56.34" data-index="572">即證菩提</span>
				<span class="punc">。</span>
			</div>
			<div x-show="details" class="details mb-3">
				這時，佛就稱讚地藏菩薩說：「非常好，非常好，我來幫助你加快達成這件事，你能夠成就許多劫以來所發的宏大誓願，普度眾生即將要完畢，便立刻證得菩提成佛了。」
				<hr/>
			</div>
			<h4 class="toc-item" id="vol1-ch3">
				<span class="word" @@click="$dispatch('play-segment')" data-start="22:57.96" data-end="23:01.74" data-index="573">觀眾生業緣品第三</span>
			</h4>
			<div :class="details ? 'bg-secondary text-white' : ''" class="paragraph">
				<span class="word" @@click="$dispatch('play-segment')" data-start="23:03.62" data-end="23:06.78" data-index="574">爾時佛母摩耶夫人</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="23:07.20" data-end="23:11.28" data-index="575">恭敬合掌問地藏菩薩言</span>
				<span class="punc">：</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="23:12.06" data-end="23:12.94" data-index="576">聖者</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="23:13.16" data-end="23:15.02" data-index="577">閻浮眾生</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="23:15.12" data-end="23:16.58" data-index="578">造業差別</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="23:16.98" data-end="23:18.70" data-index="579">所受報應</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="23:18.96" data-end="23:20.38" data-index="580">其事云何</span>
				<span class="punc">？</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="23:20.94" data-end="23:22.50" data-index="581">地藏答言</span>
				<span class="punc">：</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="23:23.10" data-end="23:24.76" data-index="582">千萬世界</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="23:25.02" data-end="23:26.78" data-index="583">乃及國土</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="23:26.94" data-end="23:28.26" data-index="584">或有地獄</span>
				<span class="punc">、</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="23:28.50" data-end="23:29.96" data-index="585">或無地獄</span>
				<span class="punc">；</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="23:30.36" data-end="23:31.92" data-index="586">或有女人</span>
				<span class="punc">、</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="23:32.22" data-end="23:33.76" data-index="587">或無女人</span>
				<span class="punc">；</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="23:34.10" data-end="23:35.56" data-index="588">或有佛法</span>
				<span class="punc">、</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="23:35.94" data-end="23:37.54" data-index="589">或無佛法</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="23:38.04" data-end="23:41.06" data-index="590">乃至聲聞辟支佛</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="23:41.34" data-end="23:43.06" data-index="591">亦復如是</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="23:43.56" data-end="23:46.70" data-index="592">非但地獄罪報一等</span>
				<span class="punc">。</span>
			</div>
			<div x-show="details" class="details mb-3">
				這時，釋迦牟尼佛的母親摩耶夫人恭敬合掌向地藏菩薩說：「聖者，閻浮眾生他們所造的罪業各不相同，因而他們所受的報應又是怎麼樣的呢？」地藏菩薩回答說：「在千萬世界乃至無數的國土中，有的有地獄，有的沒有地獄，有的地方有女人，有的地方沒有女人，有的地方有佛法，有的地方沒有佛法，甚至聲聞、辟支佛也是如此，所以說，地獄的罪報也並不是統統一律相同的。」
				<hr/>
			</div>
			<div :class="details ? 'bg-secondary text-white' : ''" class="paragraph">
				<span class="word" @@click="$dispatch('play-segment')" data-start="23:47.38" data-end="23:50.64" data-index="593">摩耶夫人重白菩薩</span>
				<span class="punc">：</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="23:51.18" data-end="23:56.34" data-index="594">且願聞於閻浮罪報所感惡趣</span>
				<span class="punc">。</span>
			</div>
			<div x-show="details" class="details mb-3">
				摩耶夫人再次對地藏菩薩說：「我願聽一聽閻浮罪惡眾生所招致的惡報是怎麼樣的。」
				<hr/>
			</div>
			<div :class="details ? 'bg-secondary text-white' : ''" class="paragraph">
				<span class="word" @@click="$dispatch('play-segment')" data-start="23:56.88" data-end="23:58.48" data-index="595">地藏答言</span>
				<span class="punc">：</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="23:58.78" data-end="23:59.64" data-index="596">聖母</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="23:59.64" data-end="24:01.40" data-index="597">唯願聽受</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="24:01.62" data-end="24:03.40" data-index="598">我粗說之</span>
				<span class="punc">。</span>
			</div>
			<div x-show="details" class="details mb-3">
				地藏菩薩回答說：「聖母，願你聽信我所說的話，我粗略地說一遍。」
				<hr/>
			</div>
			<div :class="details ? 'bg-secondary text-white' : ''" class="paragraph">
				<span class="word" @@click="$dispatch('play-segment')" data-start="24:04.48" data-end="24:06.06" data-index="599">佛母白言</span>
				<span class="punc">：</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="24:06.36" data-end="24:08.00" data-index="600">願聖者說</span>
				<span class="punc">。</span>
			</div>
			<div x-show="details" class="details mb-3">
				佛母說：「願聖者你給我說一說。」
				<hr/>
			</div>
			<div :class="details ? 'bg-secondary text-white' : ''" class="paragraph">
				<span class="word" @@click="$dispatch('play-segment')" data-start="24:08.48" data-end="24:12.46" data-index="601">爾時地藏菩薩白聖母言</span>
				<span class="punc">：</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="24:13.26" data-end="24:15.06" data-index="602">南閻浮提</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="24:15.06" data-end="24:17.44" data-index="603">罪報名號如是</span>
				<span class="punc">。</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="24:17.82" data-end="24:21.24" data-index="604">若有眾生不孝父母</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="24:21.46" data-end="24:23.06" data-index="605">或至殺害</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="24:23.32" data-end="24:25.54" data-index="606">當墮無間地獄</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="24:26.02" data-end="24:29.22" data-index="607">千萬億劫求出無期</span>
				<span class="punc">。</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="24:29.76" data-end="24:32.88" data-index="608">若有眾生出佛身血</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="24:33.32" data-end="24:35.22" data-index="609">毀謗三寶</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="24:35.72" data-end="24:37.24" data-index="610">不敬尊經</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="24:37.62" data-end="24:40.52" data-index="611">亦當墮於無間地獄</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="24:41.06" data-end="24:42.52" data-index="612">千萬億劫</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="24:42.68" data-end="24:44.48" data-index="613">求出無期</span>
				<span class="punc">。</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="24:44.86" data-end="24:48.38" data-index="614">若有眾生侵損常住</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="24:48.72" data-end="24:50.32" data-index="615">玷污僧尼</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="24:50.56" data-end="24:54.12" data-index="616">或伽藍內恣行婬欲</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="24:54.50" data-end="24:56.12" data-index="617">或殺或害</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="24:56.44" data-end="24:58.12" data-index="618">如是等輩</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="24:58.34" data-end="25:00.68" data-index="619">當墮無間地獄</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="25:01.02" data-end="25:02.56" data-index="620">千萬億劫</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="25:02.90" data-end="25:04.60" data-index="621">求出無期</span>
				<span class="punc">。</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="25:05.04" data-end="25:08.92" data-index="622">若有眾生</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="25:05.04" data-end="25:08.92" data-index="622">偽作沙門</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="25:09.20" data-end="25:10.92" data-index="623">心非沙門</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="25:11.30" data-end="25:13.20" data-index="624">破用常住</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="25:13.44" data-end="25:15.34" data-index="625">欺誑白衣</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="25:15.72" data-end="25:17.34" data-index="626">違背戒律</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="25:17.74" data-end="25:19.28" data-index="627">種種造惡</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="25:19.64" data-end="25:21.40" data-index="628">如是等輩</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="25:21.70" data-end="25:24.04" data-index="629">當墮無間地獄</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="25:24.54" data-end="25:25.98" data-index="630">千萬億劫</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="25:26.38" data-end="25:27.98" data-index="631">求出無期</span>
				<span class="punc">。</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="25:28.54" data-end="25:34.26" data-index="632">若有眾生</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="25:28.54" data-end="25:34.26" data-index="632">偷竊常住財物穀米</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="25:34.26" data-end="25:35.88" data-index="633">飲食衣服</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="25:36.18" data-end="25:39.54" data-index="634">乃至一物不與取者</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="25:39.74" data-end="25:41.84" data-index="635">當墮無間地獄</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="25:42.46" data-end="25:43.80" data-index="636">千萬億劫</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="25:44.16" data-end="25:45.82" data-index="637">求出無期</span>
				<span class="punc">。</span>
			</div>
			<div x-show="details" class="details mb-3">
				這時地藏菩薩對聖母說：「在南閻浮提世界受罪報的名號是這樣的：假如有眾生，不孝順父母，甚至殺害，他們當會墮入到無間地獄中。經過千萬億劫的時間，想要出離這無間地獄，是永遠沒有希望的；假如有眾生傷害佛身，使佛身受傷出血，或者詆毀譏謗佛、法、僧三寶，不尊敬佛經，也會墮入無間地獄，經過千萬億劫的時間，想要出離這無間地獄，是永遠辦不到的；假如有眾生侵佔損害寺院，污辱和尚、尼姑，或者在寺院內任意淫欲，或者殺生害命，像這樣的人，也應當墮入無間地獄，在千萬億劫的時間裏，想要出離無間地獄，是遙遙無期的；假如有眾生假冒佛僧，而內心並不真正是佛僧，破壞糟蹋寺院的東西，欺騙世人，違背佛教戒律，做出許多惡事，像這樣的人，應當墮入無間地獄，千萬億劫的時間內，想要出離無間地獄，也是沒有希望的；假如有眾生偷竊寺院的財物、糧食、飲食、衣服，甚至一件物品不經過問而自取者，當墮入無間地獄，在千萬億劫的時間裏，想要出離無間地獄，是不可能的。」
				<hr/>
			</div>
			<div :class="details ? 'bg-secondary text-white' : ''" class="paragraph">
				<span class="word" @@click="$dispatch('play-segment')" data-start="25:46.22" data-end="25:47.72" data-index="638">地藏白言</span>
				<span class="punc">：</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="25:48.02" data-end="25:48.86" data-index="639">聖母</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="25:49.12" data-end="25:50.62" data-index="640">若有眾生</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="25:50.90" data-end="25:52.60" data-index="641">作如是罪</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="25:52.80" data-end="25:55.32" data-index="642">當墮五無間地獄</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="25:55.82" data-end="25:58.94" data-index="643">求暫停苦一念不得</span>
				<span class="punc">。</span>
			</div>
			<div x-show="details" class="details mb-3">
				地藏菩薩說：「聖母，如果有眾生作了這些罪業，就會墮入五無間地獄，要求暫停一念之間的痛苦也不得。」
				<hr/>
			</div>
			<div :class="details ? 'bg-secondary text-white' : ''" class="paragraph">
				<span class="word" @@click="$dispatch('play-segment')" data-start="25:59.40" data-end="26:03.68" data-index="644">摩耶夫人重白地藏菩薩言</span>
				<span class="punc">：</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="26:04.26" data-end="26:07.14" data-index="645">云何名為無間地獄</span>
				<span class="punc">？</span>
			</div>
			<div x-show="details" class="details mb-3">
				摩耶夫人再次對地藏菩薩說：「什麼叫無間地獄？」
				<hr/>
			</div>
			<div :class="details ? 'bg-secondary text-white' : ''" class="paragraph">
				<span class="word" @@click="$dispatch('play-segment')" data-start="26:08.10" data-end="26:09.62" data-index="646">地藏白言</span>
				<span class="punc">：</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="26:09.88" data-end="26:10.66" data-index="647">聖母</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="26:11.02" data-end="26:15.26" data-index="648">諸有地獄在大鐵圍山之內</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="26:15.58" data-end="26:19.04" data-index="649">其大地獄有一十八所</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="26:19.36" data-end="26:20.78" data-index="650">次有五百</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="26:21.04" data-end="26:22.56" data-index="651">名號各別</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="26:22.96" data-end="26:24.50" data-index="652">次有千百</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="26:24.82" data-end="26:26.48" data-index="653">名字亦別</span>
				<span class="punc">。</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="26:26.78" data-end="26:28.34" data-index="654">無間獄者</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="26:28.66" data-end="26:32.42" data-index="655">其獄城周匝八萬餘里</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="26:32.82" data-end="26:34.62" data-index="656">其城純鐵</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="26:34.86" data-end="26:36.34" data-index="657">高一萬里</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="26:36.88" data-end="26:38.70" data-index="658">城上火聚</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="26:38.80" data-end="26:40.24" data-index="659">少有空缺</span>
				<span class="punc">。</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="26:40.68" data-end="26:42.40" data-index="660">其獄城中</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="26:42.76" data-end="26:44.40" data-index="661">諸獄相連</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="26:44.66" data-end="26:46.24" data-index="662">名號各別</span>
				<span class="punc">。</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="26:46.70" data-end="26:48.24" data-index="663">獨有一獄</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="26:48.44" data-end="26:50.46" data-index="664">名曰無間</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="26:50.92" data-end="26:54.72" data-index="665">其獄周匝萬八千里</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="26:55.10" data-end="26:57.66" data-index="666">獄牆高一千里</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="26:57.98" data-end="26:59.66" data-index="667">悉是鐵圍</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="27:00.14" data-end="27:01.90" data-index="668">上火徹下</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="27:02.24" data-end="27:04.02" data-index="669">下火徹上</span>
				<span class="punc">。</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="27:04.50" data-end="27:06.02" data-index="670">鐵蛇鐵狗</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="27:06.52" data-end="27:10.10" data-index="671">吐火馳逐獄牆之上</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="27:10.44" data-end="27:11.94" data-index="672">東西而走</span>
				<span class="punc">。</span>
			</div>
			<div x-show="details" class="details mb-3">
				地藏菩薩說：「聖母，所有的地獄，都在大鐵圍山之內，其中大的地獄有一十八所，其次有五百所，名稱各不相同；再其次有成百上千個小地獄，名號也各不相同。所謂無間地獄，就在周長有八萬多里的地獄城內，城牆是純鐵鑄成的，高有一萬里，城上烈火聚燒，沒有一點空隙。那所獄城裏面，每所地獄互通相連，名號各不相同，其中一座地獄，名叫無間地獄。這座無間地獄周長一萬八千里，獄牆高一千里，全部是鐵鑄成的，獄牆上面的火直燃到獄牆下，牆下的火又燃到牆上來，把整座地獄都燒透了。還有鐵蛇鐵狗，它們口吐大火在獄牆上，東奔西跑到處追逐。」
				<hr/>
			</div>
			<div :class="details ? 'bg-secondary text-white' : ''" class="paragraph">
				<span class="word" @@click="$dispatch('play-segment')" data-start="27:12.44" data-end="27:14.04" data-index="673">獄中有床</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="27:14.38" data-end="27:16.04" data-index="674">遍滿萬里</span>
				<span class="punc">。</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="27:16.58" data-end="27:18.32" data-index="675">一人受罪</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="27:18.56" data-end="27:22.22" data-index="676">自見其身遍臥滿床</span>
				<span class="punc">。</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="27:22.64" data-end="27:24.46" data-index="677">千萬人受罪</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="27:24.68" data-end="27:28.00" data-index="678">亦各自見身滿床上</span>
				<span class="punc">。</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="27:28.56" data-end="27:32.30" data-index="679">眾業所感獲報如是</span>
				<span class="punc">。</span>
			</div>
			<div x-show="details" class="details mb-3">
				「地獄中有鐵床，遍滿萬里。假若一個人受罪，就會看到自己的身體分身遍臥滿床；如果千萬個人受罪，也各自見到自己遍臥滿布所有床上，這就是眾生所造的罪業招致的報應。」
				<hr/>
			</div>
			<div :class="details ? 'bg-secondary text-white' : ''" class="paragraph">
				<span class="word" @@click="$dispatch('play-segment')" data-start="27:32.60" data-end="27:34.24" data-index="680">又諸罪人</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="27:34.54" data-end="27:36.24" data-index="681">備受眾苦</span>
				<span class="punc">。</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="27:36.72" data-end="27:39.98" data-index="682">千百夜叉及以惡鬼</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="27:40.40" data-end="27:41.98" data-index="683">口牙如劍</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="27:42.28" data-end="27:43.98" data-index="684">眼如電光</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="27:44.50" data-end="27:46.44" data-index="685">手復銅爪</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="27:46.72" data-end="27:48.44" data-index="686">拖拽罪人</span>
				<span class="punc">。</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="27:48.90" data-end="27:52.32" data-index="687">復有夜叉執大鐵戟</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="27:52.74" data-end="27:54.44" data-index="688">中罪人身</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="27:54.80" data-end="27:56.44" data-index="689">或中口鼻</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="27:56.76" data-end="27:58.64" data-index="690">或中腹背</span>
				<span class="punc">。</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="27:58.96" data-end="28:02.82" data-index="691">拋空翻接或置床上</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="28:03.22" data-end="28:06.94" data-index="692">復有鐵鷹啗罪人目</span>
				<span class="punc">。</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="28:07.44" data-end="28:11.08" data-index="693">復有鐵蛇絞罪人頸</span>
				<span class="punc">。</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="28:11.48" data-end="28:13.18" data-index="694">百肢節內</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="28:13.46" data-end="28:15.18" data-index="695">悉下長釘</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="28:15.42" data-end="28:17.26" data-index="696">拔舌耕犁</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="28:17.82" data-end="28:19.58" data-index="697">抽腸剉斬</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="28:19.94" data-end="28:21.58" data-index="698">烊銅灌口</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="28:22.00" data-end="28:23.78" data-index="699">熱鐵纏身</span>
				<span class="punc">。</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="28:24.16" data-end="28:26.08" data-index="700">萬死千生</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="28:26.32" data-end="28:28.14" data-index="701">業感如是</span>
				<span class="punc">。</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="28:28.58" data-end="28:30.14" data-index="702">動經億劫</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="28:30.42" data-end="28:32.12" data-index="703">求出無期</span>
				<span class="punc">。</span>
			</div>
			<div x-show="details" class="details mb-3">
				「這些罪人，要受各種痛苦。有千百個夜叉以及惡鬼，它們牙齒像劍那麼鋒利，眼睛像電光那麼明亮，手像銅爪一般銳利，不停地拖拽罪人。又有一種夜叉手持大鐵戟，刺中罪人的身體，或刺入罪人的口鼻，或刺入罪人的腹背，把罪人拋到空中，又用戟接住再刺；或者把罪人放在鐵床上，還有鐵鷹把罪人的眼珠啄瞎，又有鐵蛇把罪人的頭纏住；在身體四肢百千關節內，全都打入鐵釘；或把罪人的舌頭拔出來，用鐵鏵在上面耕犁；或把罪人的腸子抽出來用銼刀銼斷，或把熔化的銅汁從罪人的口裏灌下；或把鐵燒紅纏裹罪人的身體。萬死千生，痛苦不已，這都是他們所作的惡業所感招的果報，動輒要受上億劫的時間，想要出離地獄是沒有希望的。」
				<hr/>
			</div>
			<div :class="details ? 'bg-secondary text-white' : ''" class="paragraph">
				<span class="word" @@click="$dispatch('play-segment')" data-start="28:32.60" data-end="28:34.12" data-index="704">此界壞時</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="28:34.50" data-end="28:36.12" data-index="705">寄生他界</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="28:36.52" data-end="28:38.22" data-index="706">他界次壞</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="28:38.42" data-end="28:40.06" data-index="707">轉寄他方</span>
				<span class="punc">；</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="28:40.42" data-end="28:42.06" data-index="708">他方壞時</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="28:42.46" data-end="28:44.06" data-index="709">輾轉相寄</span>
				<span class="punc">。</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="28:44.46" data-end="28:46.06" data-index="710">此界成後</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="28:46.34" data-end="28:47.80" data-index="711">還復而來</span>
				<span class="punc">。</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="28:48.14" data-end="28:49.78" data-index="712">無間罪報</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="28:50.06" data-end="28:51.78" data-index="713">其事如是</span>
				<span class="punc">。</span>
			</div>
			<div x-show="details" class="details mb-3">
				「這個世界毁滅時，又會轉到另一個世界去繼續受苦。到另一個世界又毁滅時，再轉寄別的地方受苦，輾轉相寄。到這個世界形成後，又再返回來繼續受苦。無間地獄罪人的報應，就是這個樣子的。」
				<hr/>
			</div>
			<div :class="details ? 'bg-secondary text-white' : ''" class="paragraph">
				<span class="word" @@click="$dispatch('play-segment')" data-start="28:52.20" data-end="28:54.46" data-index="714">又五事業感</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="28:54.62" data-end="28:56.36" data-index="715">故稱無間</span>
				<span class="punc">。</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="28:56.62" data-end="28:58.08" data-index="716">何等為五</span>
				<span class="punc">？</span>
			</div>
			<div x-show="details" class="details mb-3">
				「又因為惡業招感成就五種無間，統稱為無間。是那五種呢？」
				<hr/>
			</div>
			<div :class="details ? 'bg-secondary text-white' : ''" class="paragraph">
				<span class="word" @@click="$dispatch('play-segment')" data-start="28:58.34" data-end="28:59.22" data-index="717">一者</span>
				<span class="punc">、</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="28:59.72" data-end="29:01.42" data-index="718">日夜受罪</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="29:01.60" data-end="29:03.28" data-index="719">以至劫數</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="29:03.44" data-end="29:05.24" data-index="720">無時間絕</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="29:05.58" data-end="29:07.22" data-index="721">故稱無間</span>
				<span class="punc">。</span>
			</div>
			<div x-show="details" class="details mb-3">
				「第一，日夜都在受罪，以至在許多劫中，沒有暫停一刻，故稱為無間。」
				<hr/>
			</div>
			<div :class="details ? 'bg-secondary text-white' : ''" class="paragraph">
				<span class="word" @@click="$dispatch('play-segment')" data-start="29:07.40" data-end="29:08.28" data-index="722">二者</span>
				<span class="punc">、</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="29:08.50" data-end="29:10.02" data-index="723">一人亦滿</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="29:10.30" data-end="29:11.80" data-index="724">多人亦滿</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="29:12.04" data-end="29:13.56" data-index="725">故稱無間</span>
				<span class="punc">。</span>
			</div>
			<div x-show="details" class="details mb-3">
				「第二，無論一人或多人受罪報，罪報之人都是分身遍滿此獄受苦，故稱為無間。」
				<hr/>
			</div>
			<div :class="details ? 'bg-secondary text-white' : ''" class="paragraph">
				<span class="word" @@click="$dispatch('play-segment')" data-start="29:13.94" data-end="29:14.92" data-index="726">三者</span>
				<span class="punc">、</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="29:15.26" data-end="29:17.16" data-index="727">罪器叉棒</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="29:17.34" data-end="29:19.42" data-index="728">鷹蛇狼犬</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="29:19.74" data-end="29:21.74" data-index="729">碓磨鋸鑿</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="29:22.26" data-end="29:24.16" data-index="730">剉斫鑊湯</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="29:24.48" data-end="29:26.30" data-index="731">鐵網鐵繩</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="29:26.64" data-end="29:28.76" data-index="732">鐵驢鐵馬</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="29:28.72" data-end="29:30.72" data-index="733">生革絡首</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="29:31.16" data-end="29:33.44" data-index="734">熱鐵澆身</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="29:33.84" data-end="29:35.74" data-index="735">飢吞鐵丸</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="29:35.96" data-end="29:37.58" data-index="736">渴飲鐵汁</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="29:38.06" data-end="29:39.90" data-index="737">從年竟劫</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="29:40.24" data-end="29:41.88" data-index="738">數那由他</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="29:42.22" data-end="29:43.94" data-index="739">苦楚相連</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="29:44.20" data-end="29:45.94" data-index="740">更無間斷</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="29:46.28" data-end="29:47.94" data-index="741">故稱無間</span>
				<span class="punc">。</span>
			</div>
			<div x-show="details" class="details mb-3">
				「第三，懲罰罪人的器具多種，有刺人的叉，打人的棒，吃人的鷹、蛇、狼、犬，還有碓、臼、磨子、鋸子、鑿子、銼刀、斧子、鐵鍋、沸湯、鐵網、鐵繩、鐵驢、鐵馬，用堅硬生牛皮捆綁罪人的頭，用熔化的鐵水灌澆罪人的身體，迫饑餓的罪人吞食鐵丸，令口渴的罪人飲下鐵水，從始至終歷經無數的劫數，苦楚一個接着一個，從沒有一刻間斷，故稱為無間。」
				<hr/>
			</div>
			<div :class="details ? 'bg-secondary text-white' : ''" class="paragraph">
				<span class="word" @@click="$dispatch('play-segment')" data-start="29:48.30" data-end="29:49.32" data-index="742">四者</span>
				<span class="punc">、</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="29:49.60" data-end="29:52.16" data-index="743">不問男子女人</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="29:52.50" data-end="29:54.18" data-index="744">羌胡夷狄</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="29:54.58" data-end="29:56.46" data-index="745">老幼貴賤</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="29:56.64" data-end="29:58.30" data-index="746">或龍或神</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="29:58.54" data-end="30:00.24" data-index="747">或天或鬼</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="30:00.50" data-end="30:02.18" data-index="748">罪行業感</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="30:02.46" data-end="30:04.18" data-index="749">悉同受之</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="30:04.64" data-end="30:06.44" data-index="750">故稱無間</span>
				<span class="punc">。</span>
			</div>
			<div x-show="details" class="details mb-3">
				「第四，不管是男人還是女人，是羌人還是胡人，是夷人還是狄人，不分老幼貴賤的人，也不管是龍是神，是天人或是鬼怪，只要招致罪惡業報，都一樣受地獄之苦，故稱為無間。」
				<hr/>
			</div>
			<div :class="details ? 'bg-secondary text-white' : ''" class="paragraph">
				<span class="word" @@click="$dispatch('play-segment')" data-start="30:06.66" data-end="30:07.52" data-index="751">五者</span>
				<span class="punc">、</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="30:07.76" data-end="30:09.44" data-index="752">若墮此獄</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="30:09.56" data-end="30:11.44" data-index="753">從初入時</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="30:11.74" data-end="30:13.30" data-index="754">至百千劫</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="30:13.62" data-end="30:15.28" data-index="755">一日一夜</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="30:15.40" data-end="30:17.28" data-index="756">萬死萬生</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="30:17.62" data-end="30:21.02" data-index="757">求一念間暫住不得</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="30:21.38" data-end="30:23.14" data-index="758">除非業盡</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="30:23.14" data-end="30:24.82" data-index="759">方得受生</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="30:25.18" data-end="30:26.82" data-index="760">以此連綿</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="30:27.04" data-end="30:28.82" data-index="761">故稱無間</span>
				<span class="punc">。</span>
			</div>
			<div x-show="details" class="details mb-3">
				「第五，如果墮入這個地獄中，從開始墮入時，直到百千劫中，一日一夜，都要經受上萬次生死的苦痛，想求短得一念之間的停止也得不到，除非業報結束，才能得到往生，如此連綿不斷，故稱為無間。」
				<hr/>
			</div>
			<div :class="details ? 'bg-secondary text-white' : ''" class="paragraph">
				<span class="word" @@click="$dispatch('play-segment')" data-start="30:29.20" data-end="30:32.18" data-index="762">地藏菩薩白聖母言</span>
				<span class="punc">：</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="30:32.42" data-end="30:33.94" data-index="763">無間地獄</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="30:34.12" data-end="30:35.84" data-index="764">粗說如是</span>
				<span class="punc">。</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="30:36.16" data-end="30:39.32" data-index="765">若廣說地獄罪器等名</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="30:39.46" data-end="30:40.98" data-index="766">及諸苦事</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="30:41.20" data-end="30:42.68" data-index="767">一劫之中</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="30:42.86" data-end="30:44.14" data-index="768">求說不盡</span>
				<span class="punc">。</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="30:44.40" data-end="30:47.20" data-index="769">摩耶夫人聞已</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="30:47.28" data-end="30:49.04" data-index="770">愁憂合掌</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="30:49.14" data-end="30:50.52" data-index="771">頂禮而退</span>
				<span class="punc">。</span>
			</div>
			<div x-show="details" class="details mb-3">
				地藏菩薩對聖母說：「無間地獄，粗略地說就是這樣，如果詳細說明地獄中用來懲罰罪人的器具名稱，以及各種受苦的情況，即使用一劫那麼長的時間，也是說不完的。」摩耶夫人聽完之後，憂愁合掌，頂禮而退。
				<hr/>
			</div>
			<h4 class="toc-item" id="vol1-ch4">
				<span class="word" @@click="$dispatch('play-segment')" data-start="30:52.36" data-end="30:56.30" data-index="772">閻浮眾生業感品第四</span>
			</h4>
			<div :class="details ? 'bg-secondary text-white' : ''" class="paragraph">
				<span class="word" @@click="$dispatch('play-segment')" data-start="30:58.12" data-end="31:02.70" data-index="773">爾時地藏菩薩摩訶薩白佛言</span>
				<span class="punc">：</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="31:03.50" data-end="31:04.32" data-index="774">世尊</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="31:04.40" data-end="31:07.86" data-index="775">我承佛如來威神力故</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="31:08.18" data-end="31:11.16" data-index="776">遍百千萬億世界</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="31:11.52" data-end="31:13.02" data-index="777">分是身形</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="31:13.24" data-end="31:16.36" data-index="778">救拔一切業報眾生</span>
				<span class="punc">。</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="31:17.34" data-end="31:20.08" data-index="779">若非如來大慈力故</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="31:20.38" data-end="31:23.04" data-index="780">即不能作如是變化</span>
				<span class="punc">。</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="31:23.54" data-end="31:26.12" data-index="781">我今又蒙佛付囑</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="31:26.36" data-end="31:29.28" data-index="782">至阿逸多成佛以來</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="31:29.66" data-end="31:31.38" data-index="783">六道眾生</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="31:31.80" data-end="31:33.38" data-index="784">遣令度脫</span>
				<span class="punc">。</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="31:34.02" data-end="31:35.78" data-index="785">唯然世尊</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="31:35.78" data-end="31:37.48" data-index="786">願不有慮</span>
				<span class="punc">。</span>
			</div>
			<div x-show="details" class="details mb-3">
				這時，地藏大菩薩對釋迦牟尼佛說：「世尊，我承蒙佛大威神通之力的緣故，走遍百千萬億個世界，分我這個身形，救拔一切受罪苦業報的眾生。若非如來的大慈悲顯神通力，我就不能具有這樣的變化。我今又承蒙佛的囑咐，直到阿逸多（彌勒）成了佛以來，在天、人、阿修羅、地獄、餓鬼、畜生這六道中生死輪迴的眾生，我都予以度脫，使他們脫離苦難。我唯命是從按照佛的囑咐去辦，願世尊你不要掛慮此事。」
				<hr/>
			</div>
			<div :class="details ? 'bg-secondary text-white' : ''" class="paragraph">
				<span class="word" @@click="$dispatch('play-segment')" data-start="31:38.24" data-end="31:41.12" data-index="787">爾時佛告地藏菩薩</span>
				<span class="punc">：</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="31:41.64" data-end="31:44.74" data-index="788">一切眾生未解脫者</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="31:45.20" data-end="31:46.94" data-index="789">性識無定</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="31:47.50" data-end="31:49.02" data-index="790">惡習結業</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="31:49.70" data-end="31:51.30" data-index="791">善習結果</span>
				<span class="punc">。</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="31:52.00" data-end="31:53.72" data-index="792">為善為惡</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="31:54.24" data-end="31:55.72" data-index="793">逐境而生</span>
				<span class="punc">。</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="31:56.14" data-end="31:57.98" data-index="794">輪轉五道</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="31:58.16" data-end="31:59.86" data-index="795">暫無休息</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="32:00.28" data-end="32:02.04" data-index="796">動經塵劫</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="32:02.54" data-end="32:04.36" data-index="797">迷惑障難</span>
				<span class="punc">。</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="32:04.74" data-end="32:06.98" data-index="798">如魚游網</span>
				<span class="punc">。</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="32:07.52" data-end="32:09.16" data-index="799">將是長流</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="32:09.64" data-end="32:11.12" data-index="800">脫入暫出</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="32:11.58" data-end="32:13.06" data-index="801">又復遭網</span>
				<span class="punc">。</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="32:13.62" data-end="32:15.34" data-index="802">以是等輩</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="32:15.66" data-end="32:17.44" data-index="803">吾當憂念</span>
				<span class="punc">。</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="32:17.86" data-end="32:20.46" data-index="804">汝既畢是往願</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="32:20.82" data-end="32:22.76" data-index="805">累劫重誓</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="32:23.18" data-end="32:25.00" data-index="806">廣度罪輩</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="32:25.18" data-end="32:26.80" data-index="807">吾復何慮</span>
				<span class="punc">。</span>
			</div>
			<div x-show="details" class="details mb-3">
				這時，佛告訴地藏菩薩：「一切還沒有得到解脫的眾生，他們的性情和思想是不穩定的，無論從惡習結成的惡業，還是從善習結成的善果，為善為惡，都是隨心思而遷，隨種種妄念而生起的。他們在五道之中輪迴，永不停歇，即使經過微塵那麼多的劫數，還是遭到迷惑、障礙與苦難。這就如同魚游入網內，誤認為這是長流的水道，剛剛擺脫了魚網，或者暫時逃了出來，又再次被網束縛住了。像這樣的眾生，很難教化，我本來是非常憂慮掛念的，但你既然決心要達成你往日累劫所發的重誓，要廣度罪苦眾生，我還有什麼憂慮呢？」
				<hr/>
			</div>
			<div :class="details ? 'bg-secondary text-white' : ''" class="paragraph">
				<span class="word" @@click="$dispatch('play-segment')" data-start="32:27.46" data-end="32:29.14" data-index="808">說是語時</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="32:29.32" data-end="32:32.34" data-index="809">會中有一菩薩摩訶薩</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="32:32.74" data-end="32:34.94" data-index="810">名定自在王</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="32:35.10" data-end="32:36.16" data-index="811">白佛言</span>
				<span class="punc">：</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="32:36.68" data-end="32:37.52" data-index="812">世尊</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="32:38.06" data-end="32:41.44" data-index="813">地藏菩薩累劫以來</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="32:41.68" data-end="32:43.50" data-index="814">各發何願</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="32:43.70" data-end="32:47.42" data-index="815">今蒙世尊慇懃讚歎</span>
				<span class="punc">。</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="32:47.42" data-end="32:49.04" data-index="816">唯願世尊</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="32:49.32" data-end="32:51.00" data-index="817">略而說之</span>
				<span class="punc">。</span>
			</div>
			<div x-show="details" class="details mb-3">
				佛在說這番話的時候，會中有一位大菩薩，名號叫定自在王，他對佛說：「世尊，地藏菩薩累劫以來，都發出過什麼大願，現在受到世尊在法會上多次讚揚稱嘆呢？願請世尊粗略地說一遍。」
				<hr/>
			</div>
			<div :class="details ? 'bg-secondary text-white' : ''" class="paragraph">
				<span class="word" @@click="$dispatch('play-segment')" data-start="32:51.54" data-end="32:56.00" data-index="818">爾時世尊告定自在王菩薩</span>
				<span class="punc">：</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="32:56.72" data-end="32:58.42" data-index="819">諦聽諦聽</span>
				<span class="punc">！</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="32:58.80" data-end="33:00.44" data-index="820">善思念之</span>
				<span class="punc">！</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="33:00.86" data-end="33:04.08" data-index="821">吾當為汝分別解說</span>
				<span class="punc">。</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="33:04.78" data-end="33:11.12" data-index="822">乃往過去無量阿僧祇那由他不可說劫</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="33:11.68" data-end="33:13.30" data-index="823">爾時有佛</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="33:13.54" data-end="33:16.26" data-index="824">號一切智成就如來</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="33:16.74" data-end="33:17.60" data-index="825">應供</span>
				<span class="punc">、</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="33:17.88" data-end="33:19.08" data-index="826">正遍知</span>
				<span class="punc">、</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="33:19.32" data-end="33:20.50" data-index="827">明行足</span>
				<span class="punc">、</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="33:20.92" data-end="33:21.82" data-index="828">善逝</span>
				<span class="punc">、</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="33:22.02" data-end="33:23.36" data-index="829">世間解</span>
				<span class="punc">、</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="33:23.58" data-end="33:24.98" data-index="830">無上士</span>
				<span class="punc">、</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="33:25.26" data-end="33:26.94" data-index="831">調御丈夫</span>
				<span class="punc">、</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="33:27.32" data-end="33:28.56" data-index="832">天人師</span>
				<span class="punc">、</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="33:28.64" data-end="33:29.04" data-index="833">佛</span>
				<span class="punc">、</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="33:29.46" data-end="33:30.28" data-index="834">世尊</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="33:31.02" data-end="33:33.86" data-index="835">其佛壽命六萬劫</span>
				<span class="punc">。</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="33:34.42" data-end="33:37.62" data-index="836">未出家時為小國王</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="33:38.04" data-end="33:40.68" data-index="837">與一鄰國王為友</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="33:41.00" data-end="33:42.82" data-index="838">同行十善</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="33:43.18" data-end="33:44.86" data-index="839">饒益眾生</span>
				<span class="punc">。</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="33:45.36" data-end="33:48.54" data-index="840">其鄰國內所有人民</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="33:48.86" data-end="33:50.42" data-index="841">多造眾惡</span>
				<span class="punc">。</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="33:50.86" data-end="33:52.60" data-index="842">二王議計</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="33:53.24" data-end="33:54.92" data-index="843">廣設方便</span>
				<span class="punc">。</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="33:55.38" data-end="33:56.90" data-index="844">一王發願</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="33:57.08" data-end="33:58.56" data-index="845">早成佛道</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="33:58.96" data-end="34:00.84" data-index="846">當度是輩</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="34:01.48" data-end="34:03.16" data-index="847">令使無餘</span>
				<span class="punc">。</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="34:03.44" data-end="34:04.90" data-index="848">一王發願</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="34:05.10" data-end="34:07.52" data-index="849">若不先度罪苦</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="34:07.90" data-end="34:09.32" data-index="850">令是安樂</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="34:09.50" data-end="34:10.94" data-index="851">得至菩提</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="34:11.26" data-end="34:13.66" data-index="852">我終未願成佛</span>
				<span class="punc">。</span>
			</div>
			<div x-show="details" class="details mb-3">
				這時佛告訴定自在王菩薩：「你們認真聽着，要好好思維一番，我現在就為你們分別解說。在以往不可說的劫數以前，那時有一位佛，佛號叫一切智成就如來、應供、正遍知、明行足、善逝、世間解、無上士、調禦丈夫、天人師、佛、世尊，這個佛的壽命有六萬劫。他在未出家時，是一個小國王，曾與鄰國的國王是好朋友，他們共同奉行十種善行，對芸芸眾生做了許多利益的事。但其鄰國之內所有的人民多造各種惡事。於是，兩個國王商議，怎樣才能使他們改邪歸正呢？一個國王發願說：『我願早日成佛之後，來度脫這些惡人，使他們一個也不剩下。』另一個國王發願說：『如果我不先度完了這些罪苦眾生，使他們得到安樂，直到成佛，我終生不願成佛。』」
				<hr/>
			</div>
			<div :class="details ? 'bg-secondary text-white' : ''" class="paragraph">
				<span class="word" @@click="$dispatch('play-segment')" data-start="34:14.16" data-end="34:17.06" data-index="853">佛告定自在王菩薩</span>
				<span class="punc">：</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="34:17.74" data-end="34:20.88" data-index="854">一王發願早成佛者</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="34:21.12" data-end="34:24.72" data-index="855">即一切智成就如來是</span>
				<span class="punc">。</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="34:24.96" data-end="34:29.44" data-index="856">一王發願永度罪苦眾生</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="34:29.74" data-end="34:32.04" data-index="857">未願成佛者</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="34:32.52" data-end="34:34.84" data-index="858">即地藏菩薩是</span>
				<span class="punc">。</span>
			</div>
			<div x-show="details" class="details mb-3">
				佛告訴定自在王菩薩說：「那個發願早成佛道的國王，就是一切智成就如來，那個發願永遠普度受罪苦眾生，不願早成佛的國王，就是地藏菩薩。」
				<hr/>
			</div>
			<div :class="details ? 'bg-secondary text-white' : ''" class="paragraph">
				<span class="word" @@click="$dispatch('play-segment')" data-start="34:35.46" data-end="34:39.56" data-index="859">復於過去無量阿僧祇劫</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="34:40.22" data-end="34:41.68" data-index="860">有佛出世</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="34:42.06" data-end="34:45.40" data-index="861">名清淨蓮華目如來</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="34:45.84" data-end="34:48.78" data-index="862">其佛壽命四十劫</span>
				<span class="punc">。</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="34:49.28" data-end="34:50.68" data-index="863">像法之中</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="34:51.12" data-end="34:52.62" data-index="864">有一羅漢</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="34:52.98" data-end="34:54.66" data-index="865">福度眾生</span>
				<span class="punc">。</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="34:55.00" data-end="34:56.70" data-index="866">因次教化</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="34:57.12" data-end="34:58.52" data-index="867">遇一女人</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="34:58.88" data-end="35:00.44" data-index="868">字曰光目</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="35:00.92" data-end="35:02.82" data-index="869">設食供養</span>
				<span class="punc">。</span>
			</div>
			<div x-show="details" class="details mb-3">
				又在過去無數的劫期中，有一位佛出世，名號叫清淨蓮華目如來，他的壽命有四十劫那麼長。在像法時期，有一位羅漢，廣度眾生。因一次教化，他遇到一個女人，名字叫光目，為供養他準備食物。
				<hr/>
			</div>
			<div :class="details ? 'bg-secondary text-white' : ''" class="paragraph">
				<span class="word" @@click="$dispatch('play-segment')" data-start="35:03.10" data-end="35:04.74" data-index="870">羅漢問之</span>
				<span class="punc">：</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="35:05.04" data-end="35:06.82" data-index="871">欲願何等</span>
				<span class="punc">？</span>
			</div>
			<div x-show="details" class="details mb-3">
				羅漢問她：「你有什麼想期求？」
				<hr/>
			</div>
			<div :class="details ? 'bg-secondary text-white' : ''" class="paragraph">
				<span class="word" @@click="$dispatch('play-segment')" data-start="35:07.28" data-end="35:08.92" data-index="872">光目答曰</span>
				<span class="punc">：</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="35:09.02" data-end="35:11.48" data-index="873">我以母亡之日</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="35:12.04" data-end="35:13.56" data-index="874">資福救拔</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="35:13.96" data-end="35:17.22" data-index="875">未知我母生處何趣</span>
				<span class="punc">？</span>
			</div>
			<div x-show="details" class="details mb-3">
				光目回答說：「我在母親身故的日子裏，為她出資修福，不知我母超生到什麼地方去了？」
				<hr/>
			</div>
			<div :class="details ? 'bg-secondary text-white' : ''" class="paragraph">
				<span class="word" @@click="$dispatch('play-segment')" data-start="35:17.64" data-end="35:19.66" data-index="876">羅漢愍之</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="35:19.96" data-end="35:21.72" data-index="877">為入定觀</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="35:22.18" data-end="35:26.32" data-index="878">見光目女母墮在惡趣</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="35:26.68" data-end="35:28.42" data-index="879">受極大苦</span>
				<span class="punc">。</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="35:28.74" data-end="35:31.42" data-index="880">羅漢問光目言</span>
				<span class="punc">：</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="35:31.92" data-end="35:33.66" data-index="881">汝母在生</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="35:33.96" data-end="35:35.66" data-index="882">作何行業</span>
				<span class="punc">？</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="35:36.00" data-end="35:37.66" data-index="883">今在惡趣</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="35:37.98" data-end="35:39.70" data-index="884">受極大苦</span>
				<span class="punc">。</span>
			</div>
			<div x-show="details" class="details mb-3">
				羅漢憐憫她，便為她入定觀察，見光目的母親墮入了惡道之中，受着極大的苦難。羅漢問光目說：「你母親在世時，做了些什麼事，以致現在墮入惡道中受極大苦？」
				<hr/>
			</div>
			<div :class="details ? 'bg-secondary text-white' : ''" class="paragraph">
				<span class="word" @@click="$dispatch('play-segment')" data-start="35:40.14" data-end="35:41.74" data-index="885">光目答言</span>
				<span class="punc">：</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="35:42.06" data-end="35:43.58" data-index="886">我母所習</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="35:43.86" data-end="35:47.72" data-index="887">唯好食噉魚鱉之屬</span>
				<span class="punc">。</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="35:48.18" data-end="35:49.70" data-index="888">所食魚鱉</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="35:50.02" data-end="35:51.66" data-index="889">多食其子</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="35:52.06" data-end="35:53.90" data-index="890">或炒或煮</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="35:54.42" data-end="35:56.08" data-index="891">恣情食噉</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="35:56.36" data-end="35:58.08" data-index="892">計其命數</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="35:58.28" data-end="36:00.14" data-index="893">千萬復倍</span>
				<span class="punc">。</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="36:00.86" data-end="36:02.30" data-index="894">尊者慈愍</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="36:02.52" data-end="36:04.28" data-index="895">如何哀救</span>
				<span class="punc">？</span>
			</div>
			<div x-show="details" class="details mb-3">
				光目回答說：「我母親的習性，最喜歡吃魚鼈之類，而且所吃的魚鼈，多數是魚鼈之子，有時炒着吃，有時煮着吃，任意殺害烹食，計算她所殺害的生命的數目，達到千萬倍。請尊者你慈悲可憐我，想辦法救救我母親。」
				<hr/>
			</div>
			<div :class="details ? 'bg-secondary text-white' : ''" class="paragraph">
				<span class="word" @@click="$dispatch('play-segment')" data-start="36:04.84" data-end="36:06.48" data-index="896">羅漢愍之</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="36:06.78" data-end="36:08.48" data-index="897">為作方便</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="36:08.76" data-end="36:10.38" data-index="898">勸光目言</span>
				<span class="punc">：</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="36:10.86" data-end="36:15.66" data-index="899">汝可志誠念清淨蓮華目如來</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="36:16.00" data-end="36:18.00" data-index="900">兼塑畫形像</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="36:18.44" data-end="36:20.32" data-index="901">存亡獲報</span>
				<span class="punc">。</span>
			</div>
			<div x-show="details" class="details mb-3">
				羅漢憐憫她，便替她想辦法，勸光目說：「你可以最虔誠之心，專念清淨蓮華目如來的名字，再塑畫這位如來的形像，這樣，無論是在生的子女，還是你死去的親人，都能得到福報。」
				<hr/>
			</div>
			<div :class="details ? 'bg-secondary text-white' : ''" class="paragraph">
				<span class="word" @@click="$dispatch('play-segment')" data-start="36:20.66" data-end="36:22.26" data-index="902">光目聞已</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="36:22.60" data-end="36:24.34" data-index="903">即捨所愛</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="36:24.58" data-end="36:28.12" data-index="904">尋畫佛像而供養之</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="36:28.76" data-end="36:30.48" data-index="905">復恭敬心</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="36:30.70" data-end="36:32.26" data-index="906">悲泣瞻禮</span>
				<span class="punc">。</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="36:32.80" data-end="36:34.42" data-index="907">忽於夜後</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="36:34.60" data-end="36:38.54" data-index="908">夢見佛身金色晃耀</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="36:38.74" data-end="36:40.36" data-index="909">如須彌山</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="36:40.88" data-end="36:42.38" data-index="910">放大光明</span>
				<span class="punc">。</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="36:42.64" data-end="36:44.34" data-index="911">而告光目</span>
				<span class="punc">：</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="36:44.86" data-end="36:48.32" data-index="912">汝母不久當生汝家</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="36:48.56" data-end="36:50.40" data-index="913">纔覺飢寒</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="36:50.52" data-end="36:52.38" data-index="914">即當言說</span>
				<span class="punc">。</span>
			</div>
			<div x-show="details" class="details mb-3">
				光目聽了這話後，便捨棄她所喜愛的一切東西，找人來塑畫佛像而虔誠地供養佛，以恭敬的心態，悲泣哀戀地瞻仰禮拜佛像。忽然在午夜以後，夢見佛的身體發出金色耀眼的光芒，佛身如須彌山一樣大，放出極為奪目的光明，並且對光目說：「你的母親不久就會投生到你的家中，嬰兒才覺得饑餓寒冷，就會說話了。」
				<hr/>
			</div>
			<div :class="details ? 'bg-secondary text-white' : ''" class="paragraph">
				<span class="word" @@click="$dispatch('play-segment')" data-start="36:52.74" data-end="36:55.98" data-index="915">其後家內婢生一子</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="36:56.40" data-end="36:57.90" data-index="916">未滿三日</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="36:58.20" data-end="36:59.90" data-index="917">而乃言說</span>
				<span class="punc">。</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="37:00.24" data-end="37:01.78" data-index="918">稽首悲泣</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="37:02.40" data-end="37:03.98" data-index="919">告於光目</span>
				<span class="punc">：</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="37:04.48" data-end="37:06.06" data-index="920">生死業緣</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="37:06.26" data-end="37:07.96" data-index="921">果報自受</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="37:08.20" data-end="37:09.88" data-index="922">吾是汝母</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="37:10.14" data-end="37:12.10" data-index="923">久處暗冥</span>
				<span class="punc">。</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="37:12.20" data-end="37:13.64" data-index="924">自別汝來</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="37:13.94" data-end="37:15.74" data-index="925">累墮大地獄</span>
				<span class="punc">。</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="37:16.08" data-end="37:17.66" data-index="926">蒙汝福力</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="37:18.02" data-end="37:19.66" data-index="927">方得受生</span>
				<span class="punc">。</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="37:19.96" data-end="37:21.66" data-index="928">為下賤人</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="37:21.90" data-end="37:23.56" data-index="929">又復短命</span>
				<span class="punc">。</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="37:23.72" data-end="37:25.56" data-index="930">壽年十三</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="37:25.84" data-end="37:27.48" data-index="931">更落惡道</span>
				<span class="punc">。</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="37:27.78" data-end="37:29.48" data-index="932">汝有何計</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="37:29.64" data-end="37:31.48" data-index="933">令吾脫免</span>
				<span class="punc">？</span>
			</div>
			<div x-show="details" class="details mb-3">
				其後，她家中的婢女果然生下一個孩子，還未滿三日，就會說話了。那孩子作揖叩頭，悲傷泣哭，告訴光目女：「生前自作的惡業，死後獲得應有的果報。我就是你已死去的母親，死後長期住在幽暗的冥界中，自從離別你以來，每次都墮入到大地獄裏受苦，承蒙你修福的功德力量，才使我投身到這裡來，當一個下賤的人。然而，我又應當短命，只有十三歲的年壽，然後，又會墮落入惡道裏去受苦。你有什麼辦法，能使我解脫苦難呢？」
				<hr/>
			</div>
			<div :class="details ? 'bg-secondary text-white' : ''" class="paragraph">
				<span class="word" @@click="$dispatch('play-segment')" data-start="37:32.06" data-end="37:33.48" data-index="934">光目聞說</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="37:33.96" data-end="37:36.12" data-index="935">知母無疑</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="37:36.26" data-end="37:39.76" data-index="936">哽咽悲啼而白婢子</span>
				<span class="punc">：</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="37:40.56" data-end="37:42.20" data-index="937">既是我母</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="37:42.90" data-end="37:44.64" data-index="938">合知本罪</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="37:44.84" data-end="37:46.74" data-index="939">作何行業</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="37:47.00" data-end="37:48.52" data-index="940">墮於惡道</span>
				<span class="punc">。</span>
			</div>
			<div x-show="details" class="details mb-3">
				光目女聽了這番話後，知道這婢子所生的嬰兒就是自己轉生的母親，於是悲傷痛哭，對婢女的孩子說：「你既然是我母親，就應該知道自己本身所做的什麼罪業，因而使你墮入惡道之中。」
				<hr/>
			</div>
			<div :class="details ? 'bg-secondary text-white' : ''" class="paragraph">
				<span class="word" @@click="$dispatch('play-segment')" data-start="37:48.84" data-end="37:50.52" data-index="941">婢子答言</span>
				<span class="punc">：</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="37:50.82" data-end="37:54.52" data-index="942">以殺害毀罵二業受報</span>
				<span class="punc">。</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="37:54.98" data-end="37:56.76" data-index="943">若非蒙福</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="37:57.00" data-end="37:58.50" data-index="944">救拔吾難</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="37:58.72" data-end="38:00.46" data-index="945">以是業故</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="38:00.68" data-end="38:02.16" data-index="946">未合解脫</span>
				<span class="punc">。</span>
			</div>
			<div x-show="details" class="details mb-3">
				婢女之子回答說：「我是因為殺生害命和毀謗佛法這兩種罪業才受到這種惡報的，如果不是承蒙你替我修福作功德，救拔我出苦海，這深重的業報，又怎能有解脫之日呢？」
				<hr/>
			</div>
			<div :class="details ? 'bg-secondary text-white' : ''" class="paragraph">
				<span class="word" @@click="$dispatch('play-segment')" data-start="38:02.62" data-end="38:04.38" data-index="947">光目問言</span>
				<span class="punc">：</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="38:04.60" data-end="38:06.04" data-index="948">地獄罪報</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="38:06.22" data-end="38:07.72" data-index="949">其事云何</span>
				<span class="punc">？</span>
			</div>
			<div x-show="details" class="details mb-3">
				光目問說：「地獄中的罪報，情況是怎麼樣？」
				<hr/>
			</div>
			<div :class="details ? 'bg-secondary text-white' : ''" class="paragraph">
				<span class="word" @@click="$dispatch('play-segment')" data-start="38:08.20" data-end="38:09.72" data-index="950">婢子答言</span>
				<span class="punc">：</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="38:10.22" data-end="38:11.74" data-index="951">罪苦之事</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="38:11.86" data-end="38:13.22" data-index="952">不忍稱說</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="38:13.62" data-end="38:15.22" data-index="953">百千歲中</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="38:15.56" data-end="38:17.24" data-index="954">卒白難竟</span>
				<span class="punc">。</span>
			</div>
			<div x-show="details" class="details mb-3">
				婢女之子答說：「地獄中各種罪報受苦的情形，我真是不忍再說了，即使用千百年的時間也難以說完。」
				<hr/>
			</div>
			<div :class="details ? 'bg-secondary text-white' : ''" class="paragraph">
				<span class="word" @@click="$dispatch('play-segment')" data-start="38:17.64" data-end="38:19.34" data-index="955">光目聞已</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="38:19.60" data-end="38:23.06" data-index="956">啼淚號泣而白空界</span>
				<span class="punc">：</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="38:23.46" data-end="38:25.04" data-index="957">願我之母</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="38:25.38" data-end="38:26.94" data-index="958">永脫地獄</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="38:27.38" data-end="38:29.20" data-index="959">畢十三歲</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="38:29.56" data-end="38:31.20" data-index="960">更無重罪</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="38:31.44" data-end="38:33.08" data-index="961">及歷惡道</span>
				<span class="punc">。</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="38:33.40" data-end="38:37.16" data-index="962">十方諸佛慈哀愍我</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="38:37.36" data-end="38:41.68" data-index="963">聽我為母所發廣大誓願</span>
				<span class="punc">。</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="38:42.02" data-end="38:47.40" data-index="964">若得我母永離三途及斯下賤</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="38:47.68" data-end="38:52.10" data-index="965">乃至女人之身永劫不受者</span>
				<span class="punc">。</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="38:52.64" data-end="38:54.84" data-index="966">願我自今日後</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="38:55.14" data-end="38:58.82" data-index="967">對清淨蓮華目如來像前</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="38:59.16" data-end="39:02.24" data-index="968">卻後百千萬億劫中</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="39:02.48" data-end="39:04.18" data-index="969">應有世界</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="39:04.52" data-end="39:09.96" data-index="970">所有地獄及三惡道諸罪苦眾生</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="39:10.34" data-end="39:12.12" data-index="971">誓願救拔</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="39:12.56" data-end="39:15.24" data-index="972">令離地獄惡趣</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="39:15.24" data-end="39:17.18" data-index="973">畜生餓鬼等</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="39:17.54" data-end="39:19.96" data-index="974">如是罪報等人</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="39:20.36" data-end="39:22.00" data-index="975">盡成佛竟</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="39:22.10" data-end="39:24.88" data-index="976">我然後方成正等正覺</span>
				<span class="punc">。</span>
			</div>
			<div x-show="details" class="details mb-3">
				光目女聽了母親說的這些話後，不禁號啕大哭，向着天空說：「願我的母親永遠能脫離地獄的惡報，活到十三歲以後，不再有其他重大的罪業，墮入到地獄惡道裏去，請各方的諸位佛慈悲可憐我，聽我為母親發下宏大的誓願──假如我的母親能永遠脫離地獄、餓鬼、畜生三惡道的苦難，也不要超生在這下賤的人家，甚至不再超生為女人身，我從今之後，對清淨蓮華目如來像前發誓，願把以後百千萬億劫中，應有世界中，所有地獄及三惡道裏的罪苦眾生，都救濟超度，使他們永遠脫離地獄、畜生、餓鬼這三惡道，使這些受苦罪人都修成佛後，我然後才成佛。」
				<hr/>
			</div>
			<div :class="details ? 'bg-secondary text-white' : ''" class="paragraph">
				<span class="word" @@click="$dispatch('play-segment')" data-start="39:25.48" data-end="39:27.14" data-index="977">發誓願已</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="39:27.46" data-end="39:32.82" data-index="978">具聞清淨蓮華目如來而告之曰</span>
				<span class="punc">：</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="39:33.36" data-end="39:34.08" data-index="979">光目</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="39:34.34" data-end="39:35.94" data-index="980">汝大慈愍</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="39:36.22" data-end="39:40.12" data-index="981">善能為母發如是大願</span>
				<span class="punc">。</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="39:40.26" data-end="39:43.76" data-index="982">吾觀汝母十三歲畢</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="39:44.52" data-end="39:46.20" data-index="983">捨此報已</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="39:46.54" data-end="39:48.38" data-index="984">生為梵志</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="39:48.82" data-end="39:50.64" data-index="985">壽年百歲</span>
				<span class="punc">。</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="39:51.06" data-end="39:52.64" data-index="986">過是報後</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="39:53.00" data-end="39:55.36" data-index="987">當生無憂國土</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="39:55.74" data-end="39:57.84" data-index="988">壽命不可計劫</span>
				<span class="punc">。</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="39:58.44" data-end="40:00.04" data-index="989">後成佛果</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="40:00.46" data-end="40:02.04" data-index="990">廣度人天</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="40:02.54" data-end="40:04.64" data-index="991">數如恆河沙</span>
				<span class="punc">。</span>
			</div>
			<div x-show="details" class="details mb-3">
				光目女發完這個大願以後，清楚地聽到清淨蓮華目如來告訴她說：「光目，你真是大慈大悲，能為你母親發這麼大的誓願，我看你的母親活到十三歲後，就捨此報身，便轉生為婆羅門梵志，有百年壽命；受完這果報後，就當超生到極樂世界，那裏壽命之長，是無法計算的；此後她就成佛，再廣度人天，像恆河裡的沙子一樣多。」
				<hr/>
			</div>
			<div :class="details ? 'bg-secondary text-white' : ''" class="paragraph">
				<span class="word" @@click="$dispatch('play-segment')" data-start="40:05.22" data-end="40:07.42" data-index="992">佛告定自在王</span>
				<span class="punc">：</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="40:07.90" data-end="40:11.56" data-index="993">爾時羅漢福度光目者</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="40:11.98" data-end="40:14.56" data-index="994">即無盡意菩薩是</span>
				<span class="punc">。</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="40:15.04" data-end="40:16.60" data-index="995">光目母者</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="40:16.72" data-end="40:18.76" data-index="996">即解脫菩薩是</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="40:19.14" data-end="40:22.98" data-index="997">光目女者即地藏菩薩是</span>
				<span class="punc">。</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="40:23.48" data-end="40:25.82" data-index="998">過去久遠劫中</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="40:25.98" data-end="40:27.54" data-index="999">如是慈愍</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="40:27.80" data-end="40:29.84" data-index="1000">發恆河沙願</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="40:30.06" data-end="40:31.64" data-index="1001">廣度眾生</span>
				<span class="punc">。</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="40:32.06" data-end="40:33.64" data-index="1002">未來世中</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="40:33.92" data-end="40:36.24" data-index="1003">若有男子女人</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="40:36.50" data-end="40:39.60" data-index="1004">不行善者行惡者</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="40:39.92" data-end="40:42.56" data-index="1005">乃至不信因果者</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="40:42.90" data-end="40:44.90" data-index="1006">邪婬妄語者</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="40:45.22" data-end="40:47.38" data-index="1007">兩舌惡口者</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="40:47.64" data-end="40:49.92" data-index="1008">毀謗大乘者</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="40:50.16" data-end="40:52.52" data-index="1009">如是諸業眾生</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="40:52.82" data-end="40:54.44" data-index="1010">必墮惡趣</span>
				<span class="punc">。</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="40:54.68" data-end="40:56.74" data-index="1011">若遇善知識</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="40:57.02" data-end="40:59.56" data-index="1012">勸令一彈指間</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="40:59.82" data-end="41:02.06" data-index="1013">歸依地藏菩薩</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="41:02.64" data-end="41:04.38" data-index="1014">是諸眾生</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="41:04.72" data-end="41:07.92" data-index="1015">即得解脫三惡道報</span>
				<span class="punc">。</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="41:08.78" data-end="41:13.86" data-index="1016">若能志心歸敬及瞻禮讚歎</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="41:13.86" data-end="41:15.40" data-index="1017">香華衣服</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="41:15.72" data-end="41:17.24" data-index="1018">種種珍寶</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="41:17.50" data-end="41:18.94" data-index="1019">或復飲食</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="41:19.48" data-end="41:21.48" data-index="1020">如是奉事者</span>
				<span class="punc">。</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="41:21.96" data-end="41:25.40" data-index="1021">未來百千萬億劫中</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="41:25.78" data-end="41:29.06" data-index="1022">常在諸天受勝妙樂</span>
				<span class="punc">。</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="41:29.44" data-end="41:31.16" data-index="1023">若天福盡</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="41:31.46" data-end="41:33.14" data-index="1024">下生人間</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="41:33.34" data-end="41:36.82" data-index="1025">猶百千劫常為帝王</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="41:37.36" data-end="41:40.62" data-index="1026">能憶宿命因果本末</span>
				<span class="punc">。</span>
			</div>
			<div x-show="details" class="details mb-3">
				佛告訴定自在王說：「那時福度光目女的羅漢，就是無盡意菩薩；光目女的母親，就是現在的解脫菩薩；光目女，就是這位地藏菩薩。他在過去很久的劫中，都是這般的慈悲，發出如恆河沙一樣多的大誓願，普度眾生。在以後的世界中，假若有男人女人，不行善事的人，行惡的人，乃至不相信因果報應的人，或犯邪淫、說謊、唆弄是非、罵人，或毀謗大乘佛教經典的人，像犯這樣各種罪業的眾生，必然墮入惡道中受苦。如果他能遇到善於勸化有知識的人，勸令他在一彈指間那麼短的時間裏歸依地藏菩薩，像這樣的眾生，就能得到解脫地獄等三惡道的果報了。如果他能誠心誠意歸依、禮敬、瞻禮、讚歎地藏菩薩，並用香花、衣服及各種珍寶，或用飲食等來供養地藏菩薩，這種人就能在以後百千萬億劫中，經常在天上享受到極大的快樂；如果他在天上享福盡了，下生人間，還能在百千萬億劫中經常成為帝王，並且能清楚地記憶他前世輪轉到今生的前後因果關係。」
				<hr/>
			</div>
			<div :class="details ? 'bg-secondary text-white' : ''" class="paragraph">
				<span class="word" @@click="$dispatch('play-segment')" data-start="41:40.94" data-end="41:42.56" data-index="1027">定自在王</span>
				<span class="punc">！</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="41:42.92" data-end="41:49.86" data-index="1028">如是地藏菩薩有如此不可思議大威神力</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="41:50.22" data-end="41:58.36" data-index="1029">廣利眾生</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="41:50.22" data-end="41:58.36" data-index="1029">汝等諸菩薩當記是經廣宣流布</span>
				<span class="punc">。</span>
			</div>
			<div x-show="details" class="details mb-3">
				「定自在王啊，像地藏菩薩有這麼不可思議的威神力量，利益一切眾生，你們各位菩薩，應當牢記這部《地藏本願經》，弘揚流通這部經典。」
				<hr/>
			</div>
			<div :class="details ? 'bg-secondary text-white' : ''" class="paragraph">
				<span class="word" @@click="$dispatch('play-segment')" data-start="41:58.68" data-end="42:01.44" data-index="1030">定自在王白佛言</span>
				<span class="punc">：</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="42:01.76" data-end="42:02.72" data-index="1031">世尊</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="42:02.76" data-end="42:04.64" data-index="1032">願不有慮</span>
				<span class="punc">。</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="42:04.96" data-end="42:08.94" data-index="1033">我等千萬億菩薩摩訶薩</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="42:09.36" data-end="42:13.82" data-index="1034">必能承佛威神廣演是經</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="42:14.28" data-end="42:17.74" data-index="1035">於閻浮提利益眾生</span>
				<span class="punc">。</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="42:18.22" data-end="42:22.20" data-index="1036">定自在王菩薩白世尊已</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="42:22.48" data-end="42:25.94" data-index="1037">合掌恭敬作禮而退</span>
				<span class="punc">。</span>
			</div>
			<div x-show="details" class="details mb-3">
				定自在王對佛說：「世尊，請你不要掛念這件事，我們千萬億大菩薩，一定能承佛的威神力量，廣泛地演說這部《地藏本願經》，利益閻浮提的一切眾生。」定自在王對佛說完後，恭敬地合掌作禮告退了。
				<hr/>
			</div>
			<div :class="details ? 'bg-secondary text-white' : ''" class="paragraph">
				<span class="word" @@click="$dispatch('play-segment')" data-start="42:26.68" data-end="42:30.74" data-index="1038">爾時四方天王俱從座起</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="42:31.10" data-end="42:33.92" data-index="1039">合掌恭敬白佛言</span>
				<span class="punc">：</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="42:34.34" data-end="42:35.24" data-index="1040">世尊</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="42:35.38" data-end="42:39.08" data-index="1041">地藏菩薩於久遠劫來</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="42:39.54" data-end="42:41.50" data-index="1042">發如是大願</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="42:41.82" data-end="42:45.46" data-index="1043">云何至今猶度未絕</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="42:45.90" data-end="42:48.40" data-index="1044">更發廣大誓言</span>
				<span class="punc">。</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="42:48.68" data-end="42:52.24" data-index="1045">唯願世尊為我等說</span>
				<span class="punc">。</span>
			</div>
			<div x-show="details" class="details mb-3">
				這時，四方天王一齊從座位上站起來，合掌恭敬地對佛說：「世尊，地藏菩薩從久遠劫以來，就發這麼大的誓願，為什麼至今還沒有把眾生度完，他又要發更大的誓願呢？請世尊為我們說一說。」
				<hr/>
			</div>
			<div :class="details ? 'bg-secondary text-white' : ''" class="paragraph">
				<span class="word" @@click="$dispatch('play-segment')" data-start="42:53.28" data-end="42:55.26" data-index="1046">佛告四天王</span>
				<span class="punc">：</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="42:55.58" data-end="42:57.32" data-index="1047">善哉善哉</span>
				<span class="punc">！</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="42:57.66" data-end="43:03.54" data-index="1048">吾今為汝及未來現在天人眾等</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="43:03.80" data-end="43:05.16" data-index="1049">廣利益故</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="43:05.52" data-end="43:09.90" data-index="1050">說地藏菩薩於娑婆世界</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="43:10.34" data-end="43:13.76" data-index="1051">閻浮提內生死道中</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="43:14.56" data-end="43:16.14" data-index="1052">慈哀救拔</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="43:16.42" data-end="43:21.52" data-index="1053">度脫一切罪苦眾生方便之事</span>
				<span class="punc">。</span>
			</div>
			<div x-show="details" class="details mb-3">
				佛對四大天王說：「很好，很好！我現在就為了利益你們以及現在、未來的天上和人間的一切眾生，來講說地藏菩薩在娑婆世界，閻浮提內生死的道途中，慈哀救度解脫一切罪苦眾生，以及他所用的各種方法。」
				<hr/>
			</div>
			<div :class="details ? 'bg-secondary text-white' : ''" class="paragraph">
				<span class="word" @@click="$dispatch('play-segment')" data-start="43:22.08" data-end="43:23.62" data-index="1054">四天王言</span>
				<span class="punc">：</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="43:23.80" data-end="43:25.84" data-index="1055">唯然世尊</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="43:25.96" data-end="43:27.56" data-index="1056">願樂欲聞</span>
				<span class="punc">。</span>
			</div>
			<div x-show="details" class="details mb-3">
				四大天王說：「是的世尊，我們樂意聽受。」
				<hr/>
			</div>
			<div :class="details ? 'bg-secondary text-white' : ''" class="paragraph">
				<span class="word" @@click="$dispatch('play-segment')" data-start="43:27.88" data-end="43:29.84" data-index="1057">佛告四天王</span>
				<span class="punc">：</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="43:30.18" data-end="43:33.40" data-index="1058">地藏菩薩久遠劫來</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="43:33.64" data-end="43:35.28" data-index="1059">迄至於今</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="43:35.78" data-end="43:37.28" data-index="1060">度脫眾生</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="43:37.52" data-end="43:39.30" data-index="1061">猶未畢願</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="43:39.82" data-end="43:43.06" data-index="1062">慈愍此世罪苦眾生</span>
				<span class="punc">。</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="43:43.50" data-end="43:47.16" data-index="1063">復觀未來無量劫中</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="43:47.38" data-end="43:49.08" data-index="1064">因蔓不斷</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="43:49.40" data-end="43:50.96" data-index="1065">以是之故</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="43:51.32" data-end="43:53.08" data-index="1066">又發重願</span>
				<span class="punc">。</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="43:53.60" data-end="43:57.70" data-index="1067">如是菩薩於娑婆世界</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="43:58.00" data-end="43:59.70" data-index="1068">閻浮提中</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="44:00.02" data-end="44:02.60" data-index="1069">百千萬億方便</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="44:02.78" data-end="44:04.40" data-index="1070">而為教化</span>
				<span class="punc">。</span>
			</div>
			<div x-show="details" class="details mb-3">
				佛告訴四天王說：「地藏菩薩從無數劫以來，直到現在，雖然度脫了一切罪報受苦的眾生，但還沒有完成他的誓願。因為他慈悲愍念這一世界的受罪苦眾生，又看到以後無數劫中，罪業眾生像草一樣延蔓不斷地出現。以此，他又發出重大的誓願。如是地藏菩薩在娑婆世界，閻浮提中，用百千萬億種方法，隨機教化。」
				<hr/>
			</div>
			<div :class="details ? 'bg-secondary text-white' : ''" class="paragraph">
				<span class="word" @@click="$dispatch('play-segment')" data-start="44:04.92" data-end="44:06.10" data-index="1071">四天王</span>
				<span class="punc">，</span>
				<blockquote>
					<span class="word" @@click="$dispatch('play-segment')" data-start="44:06.40" data-end="44:10.26" data-index="1072">地藏菩薩若遇殺生者</span>
					<span class="punc">，</span>
					<span class="word" @@click="$dispatch('play-segment')" data-start="44:10.68" data-end="44:13.22" data-index="1073">說宿殃短命報</span>
					<span class="punc">。</span><br/>
					<span class="word" @@click="$dispatch('play-segment')" data-start="44:13.58" data-end="44:15.88" data-index="1074">若遇竊盜者</span>
					<span class="punc">，</span>
					<span class="word" @@click="$dispatch('play-segment')" data-start="44:16.10" data-end="44:18.64" data-index="1075">說貧窮苦楚報</span>
					<span class="punc">。</span><br/>
					<span class="word" @@click="$dispatch('play-segment')" data-start="44:19.04" data-end="44:21.20" data-index="1076">若遇邪婬者</span>
					<span class="punc">，</span>
					<span class="word" @@click="$dispatch('play-segment')" data-start="44:21.58" data-end="44:24.10" data-index="1077">說雀鴿鴛鴦報</span>
					<span class="punc">。</span><br/>
					<span class="word" @@click="$dispatch('play-segment')" data-start="44:24.50" data-end="44:26.66" data-index="1078">若遇惡口者</span>
					<span class="punc">，</span>
					<span class="word" @@click="$dispatch('play-segment')" data-start="44:27.20" data-end="44:29.70" data-index="1079">說眷屬鬥諍報</span>
					<span class="punc">。</span><br/>
					<span class="word" @@click="$dispatch('play-segment')" data-start="44:30.18" data-end="44:32.30" data-index="1080">若遇毀謗者</span>
					<span class="punc">，</span>
					<span class="word" @@click="$dispatch('play-segment')" data-start="44:32.72" data-end="44:35.24" data-index="1081">說無舌瘡口報</span>
					<span class="punc">。</span><br/>
					<span class="word" @@click="$dispatch('play-segment')" data-start="44:35.68" data-end="44:37.72" data-index="1082">若遇瞋恚者</span>
					<span class="punc">，</span>
					<span class="word" @@click="$dispatch('play-segment')" data-start="44:38.14" data-end="44:41.48" data-index="1083">說醜陋癃殘報</span>
					<span class="punc">。</span><br/>
					<span class="word" @@click="$dispatch('play-segment')" data-start="44:41.98" data-end="44:44.52" data-index="1084">若遇慳吝者</span>
					<span class="punc">，</span>
					<span class="word" @@click="$dispatch('play-segment')" data-start="44:44.92" data-end="44:47.74" data-index="1085">說所求違願報</span>
					<span class="punc">。</span><br/>
					<span class="word" @@click="$dispatch('play-segment')" data-start="44:48.00" data-end="44:51.22" data-index="1086">若遇飲食無度者</span>
					<span class="punc">，</span>
					<span class="word" @@click="$dispatch('play-segment')" data-start="44:51.52" data-end="44:54.66" data-index="1087">說飢渴咽病報</span>
					<span class="punc">。</span><br/>
					<span class="word" @@click="$dispatch('play-segment')" data-start="44:54.92" data-end="44:58.02" data-index="1088">若遇畋獵恣情者</span>
					<span class="punc">，</span>
					<span class="word" @@click="$dispatch('play-segment')" data-start="44:58.46" data-end="45:01.00" data-index="1089">說驚狂喪命報</span>
					<span class="punc">。</span><br/>
					<span class="word" @@click="$dispatch('play-segment')" data-start="45:01.60" data-end="45:04.38" data-index="1090">若遇悖逆父母者</span>
					<span class="punc">，</span>
					<span class="word" @@click="$dispatch('play-segment')" data-start="45:04.78" data-end="45:07.36" data-index="1091">說天地災殺報</span>
					<span class="punc">。</span><br/>
					<span class="word" @@click="$dispatch('play-segment')" data-start="45:07.76" data-end="45:10.68" data-index="1092">若遇燒山林木者</span>
					<span class="punc">，</span>
					<span class="word" @@click="$dispatch('play-segment')" data-start="45:11.04" data-end="45:13.64" data-index="1093">說狂迷取死報</span>
					<span class="punc">。</span><br/>
					<span class="word" @@click="$dispatch('play-segment')" data-start="45:14.08" data-end="45:17.78" data-index="1094">若遇前後父母惡毒者</span>
					<span class="punc">，</span>
					<span class="word" @@click="$dispatch('play-segment')" data-start="45:18.16" data-end="45:21.72" data-index="1095">說返生鞭撻現受報</span>
					<span class="punc">。</span><br/>
					<span class="word" @@click="$dispatch('play-segment')" data-start="45:22.34" data-end="45:25.62" data-index="1096">若遇網捕生雛者</span>
					<span class="punc">，</span>
					<span class="word" @@click="$dispatch('play-segment')" data-start="45:26.00" data-end="45:28.54" data-index="1097">說骨肉分離報</span>
					<span class="punc">。</span><br/>
					<span class="word" @@click="$dispatch('play-segment')" data-start="45:28.74" data-end="45:31.88" data-index="1098">若遇毀謗三寶者</span>
					<span class="punc">，</span>
					<span class="word" @@click="$dispatch('play-segment')" data-start="45:32.16" data-end="45:34.84" data-index="1099">說盲聾瘖啞報</span>
					<span class="punc">。</span><br/>
					<span class="word" @@click="$dispatch('play-segment')" data-start="45:35.24" data-end="45:38.08" data-index="1100">若遇輕法慢教者</span>
					<span class="punc">，</span>
					<span class="word" @@click="$dispatch('play-segment')" data-start="45:38.50" data-end="45:41.28" data-index="1101">說永處惡道報</span>
					<span class="punc">。</span><br/>
					<span class="word" @@click="$dispatch('play-segment')" data-start="45:41.50" data-end="45:44.72" data-index="1102">若遇破用常住者</span>
					<span class="punc">，</span>
					<span class="word" @@click="$dispatch('play-segment')" data-start="45:45.08" data-end="45:48.58" data-index="1103">說億劫輪迴地獄報</span>
					<span class="punc">。</span><br/>
					<span class="word" @@click="$dispatch('play-segment')" data-start="45:48.92" data-end="45:52.58" data-index="1104">若遇污梵誣僧者</span>
					<span class="punc">，</span>
					<span class="word" @@click="$dispatch('play-segment')" data-start="45:52.86" data-end="45:55.50" data-index="1105">說永在畜生報</span>
					<span class="punc">。</span><br/>
					<span class="word" @@click="$dispatch('play-segment')" data-start="45:55.82" data-end="45:59.54" data-index="1106">若遇湯火斬斫傷生者</span>
					<span class="punc">，</span>
					<span class="word" @@click="$dispatch('play-segment')" data-start="45:59.86" data-end="46:02.36" data-index="1107">說輪迴遞償報</span>
					<span class="punc">。</span><br/>
					<span class="word" @@click="$dispatch('play-segment')" data-start="46:02.58" data-end="46:05.88" data-index="1108">若遇破戒犯齋者</span>
					<span class="punc">，</span>
					<span class="word" @@click="$dispatch('play-segment')" data-start="46:06.04" data-end="46:08.48" data-index="1109">說禽獸飢餓報</span>
					<span class="punc">。</span><br/>
					<span class="word" @@click="$dispatch('play-segment')" data-start="46:08.84" data-end="46:11.74" data-index="1110">若遇非理毀用者</span>
					<span class="punc">，</span>
					<span class="word" @@click="$dispatch('play-segment')" data-start="46:12.12" data-end="46:14.74" data-index="1111">說所求闕絕報</span>
					<span class="punc">。</span><br/>
					<span class="word" @@click="$dispatch('play-segment')" data-start="46:15.02" data-end="46:18.14" data-index="1112">若遇吾我貢高者</span>
					<span class="punc">，</span>
					<span class="word" @@click="$dispatch('play-segment')" data-start="46:18.54" data-end="46:21.32" data-index="1113">說卑使下賤報</span>
					<span class="punc">。</span><br/>
					<span class="word" @@click="$dispatch('play-segment')" data-start="46:21.68" data-end="46:24.86" data-index="1114">若遇兩舌鬥亂者</span>
					<span class="punc">，</span>
					<span class="word" @@click="$dispatch('play-segment')" data-start="46:25.16" data-end="46:27.84" data-index="1115">說無舌百舌報</span>
					<span class="punc">。</span><br/>
					<span class="word" @@click="$dispatch('play-segment')" data-start="46:28.14" data-end="46:30.28" data-index="1116">若遇邪見者</span>
					<span class="punc">，</span>
					<span class="word" @@click="$dispatch('play-segment')" data-start="46:30.60" data-end="46:33.16" data-index="1117">說邊地受生報</span>
					<span class="punc">。</span>
				</blockquote>
			</div>
			<div x-show="details" class="details mb-3">
				「四天王，
				<blockquote>
					地藏菩薩如果遇到殺生害命的人，就對他說會遭到災難、病苦短命的報應；<br/>
					如果遇到偷竊及做強盜的人，就對他說必然遭受貧窮苦楚的報應；<br/>
					如果遇到邪淫的人，就對他說必然會遭轉生為孔雀、鴿子、鴛鴦等的報應；<br/>
					如果遇到用惡毒語言罵人的人，就對他說來生眷屬在一起總不相和，總要鬥諍的報應；<br/>
					如果遇到毀謗別人的人，就對他說必然遭到變成啞巴或口舌生瘡的報應；<br/>
					如果遇到愛發脾氣、怨恨別人的人，就對他說必然轉生為醜陋傷殘的報應；<br/>
					如果遇到很慳吝的人，就對他說會遭到一切願望都不能達成的報應；<br/>
					如果遇到大吃大喝、飲食沒有節制的人，就對他說會遭到饑餓、口渴及咽喉生病的報應；<br/>
					如果遇到縱情打獵的人，就對他說會遭到受驚嚇恐怖而喪命的報應；<br/>
					如果遇到不孝順父母的人，就對他說會遭到天誅地滅、受各種天災突變而死的報應；<br/>
					如果遇到放火燒山林樹木的人，就說會受到癲狂、失智而死的報應；<br/>
					如果遇到前父母或繼父母狠毒對待非親生孩子，就說轉生後會遭到受鞭打的報應；<br/>
					如果遇到網捕剛出生或年幼鳥獸的人，就對他說會遭到父母子女骨肉分離的報應；<br/>
					如果遇到毀謗佛、法、僧三寶的人，就說會遭到眼瞎、耳聾、變成啞巴的報應；<br/>
					如果遇到輕慢佛法的人，就說會遭到永遠墮入地獄、餓鬼、畜生惡道的報應；<br/>
					如果遇到破壞糟蹋寺院財物的人，就說會遭到永遠輪迴在地獄中受苦的報應；<br/>
					如果遇到污辱修道者、誣陷佛僧的人，就說會遭到永遠超生為畜生的報應；<br/>
					如果遇到用熱湯、烈火、利刀傷害生靈的人，就說他下一輩子也會遭到這種下場的報應；<br/>
					如果遇到違犯佛家戒齋規儀的佛僧，就對他說會遭到變成禽獸、捱飢抵餓的報應；<br/>
					如果遇到無理佔用或破壞器物的人，就說會遭到所求而不可得的報應；<br/>
					如果遇到高傲的人，就說會遭到超生為卑微下賤人的報應；<br/>
					如果遇到搬弄口舌是非、挑撥離間的人，就說會遭到沒有舌頭或長出百個舌頭的報應；<br/>
					如果遇到心術不正、觀點錯謬的人，就說會遭到投生到邊疆荒野遠地受苦的報應。
				</blockquote>
				」
				<hr/>
			</div>
			<div :class="details ? 'bg-secondary text-white' : ''" class="paragraph">
				<span class="word" @@click="$dispatch('play-segment')" data-start="46:33.58" data-end="46:37.14" data-index="1118">如是等閻浮提眾生</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="46:37.62" data-end="46:39.14" data-index="1119">身口意業</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="46:39.62" data-end="46:41.10" data-index="1120">惡習結果</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="46:41.38" data-end="46:43.00" data-index="1121">百千報應</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="46:43.24" data-end="46:44.74" data-index="1122">今粗略說</span>
				<span class="punc">。</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="46:45.34" data-end="46:50.36" data-index="1123">如是等閻浮提眾生業感差別</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="46:50.76" data-end="46:55.96" data-index="1124">地藏菩薩百千方便而教化之</span>
				<span class="punc">。</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="46:56.26" data-end="46:57.80" data-index="1125">是諸眾生</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="46:58.22" data-end="47:00.86" data-index="1126">先受如是等報</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="47:01.08" data-end="47:02.54" data-index="1127">後墮地獄</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="47:02.86" data-end="47:04.66" data-index="1128">動經劫數</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="47:04.90" data-end="47:06.34" data-index="1129">無有出期</span>
				<span class="punc">。</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="47:06.80" data-end="47:09.94" data-index="1130">是故汝等護人護國</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="47:10.24" data-end="47:14.14" data-index="1131">無令是諸眾業迷惑眾生</span>
				<span class="punc">。</span>
			</div>
			<div x-show="details" class="details mb-3">
				「像這樣的閻浮提眾生，他們的行為、語言、意識所造下的惡習業果，有千百種不同的報應，現在我只是這樣大概地說一說。閻浮提眾生有着不同的善惡，地藏菩薩是用千百種不同的方法去教化他們的。像這類眾生，先要經受這麼一些報應，隨後墮入地獄，經過無數劫時間的苦難，都沒法擺脫地獄之苦。所以，你們要保護世人和國家，不要讓這各種罪業把眾生迷惑了。」
				<hr/>
			</div>
			<div :class="details ? 'bg-secondary text-white' : ''" class="paragraph">
				<span class="word" @@click="$dispatch('play-segment')" data-start="47:14.62" data-end="47:16.48" data-index="1132">四天王聞已</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="47:16.62" data-end="47:20.16" data-index="1133">涕淚悲歎合掌而退</span>
				<span class="punc">。</span>
			</div>
			<div x-show="details" class="details mb-3">
				四天王聽了佛的這一番話後，流淚悲歎，恭敬地合掌退回原位。
				<hr/>
			</div>
			<div class="paragraph">
				<span class="word"><strong>讚</strong></span><br/>
				<span class="word" @@click="$dispatch('play-segment')" data-start="47:20.88" data-end="47:22.52" data-index="1134">如來慈愍</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="47:22.70" data-end="47:24.32" data-index="1135">轉大法輪</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="47:24.88" data-end="47:27.52" data-index="1136">婆羅門女救慈親</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="47:28.26" data-end="47:30.28" data-index="1137">覺華度迷津</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="47:30.72" data-end="47:32.28" data-index="1138">摩耶夫人</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="47:32.56" data-end="47:34.28" data-index="1139">請問地藏因</span>
				<span class="punc">。</span>
			</div>
			<div class="paragraph">
				<span class="word" @@click="$dispatch('play-segment')" data-start="47:34.84" data-end="47:43.64" data-index="1140"><strong>南無常住十方佛 <sub>(三稱)</sub></strong></span>
			</div>
			<div class="paragraph">
				<h2>
					<span class="word" @@click="$dispatch('play-segment')" data-start="47:44.24" data-end="47:48.10" data-index="1141">地藏菩薩本願經卷上</span>
				</h2>
			</div>
			
			<div class="d-flex mb-3">
				<div class="me-auto w-50">
					{{--
					<a href="{{ $page->baseUrl.'/ksitigarbha-vows-vol1' }}" class="btn btn-link border p-2 me-3 w-100 h-100 text-decoration-none">
						<div class="d-flex h-100 justify-content-between align-items-center">
							<div class="d-flex">
								<i class="fas fa-arrow-circle-left fs-1"></i>
							</div>
							<div class="d-flex w-100 justify-content-center">
								<span class="ms-2 text-start text-truncate">地藏菩薩本願經卷上</span>
							</div>
						</div>
					</a>
					--}}
				</div>
				<div class="ms-auto me-3 w-50">
					<a href="{{ $page->baseUrl.'/ksitigarbha-vows-vol2' }}" class="btn btn-link border p-2 ms-3 w-100 h-100 text-decoration-none">
						<div class="d-flex h-100 justify-content-between align-items-center">
							<div class="d-flex w-100 justify-content-center">
								<span class="me-2 text-start text-truncate">地藏菩薩本願經卷中</span>
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
<div class="container fixed-bottom pe-none" x-show="!isSidebarOpened">
	<div class="row my-3">
		<x-audio-control class="col-md-12 px-4 audio-container" ::class="{'pe-auto': !collapsed}">
			<source src="{{ $page->baseUrl.'/assets/audios/ksitigarbha-vows-vol1.mp3' }}" type="audio/mp3" />
		</x-audio-control>
	</div>
</div>
@endsection