@extends('_layouts.main')

@section('title')
<title>地藏菩薩本願經卷下</title>
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
				x-data="{currItems: {vol3: true}}"
				class="sticky-top"
				textsize-supported
				audio-supported
				trans-supported
			>
				<ul class="nav navbar-nav">
					<li>
						<a class="nav-link text-nowrap" href="{{ $page->baseUrl.'/ksitigarbha-vows-vol1' }}">地藏菩薩本願經卷上</a>
					</li>
					<li>
						<a class="nav-link text-nowrap" href="{{ $page->baseUrl.'/ksitigarbha-vows-vol2' }}">地藏菩薩本願經卷中</a>
					</li>
					<li>
						<a @@click="jumpTo('vol3')" :class="{active: currItems['vol3'] && true}" class="nav-link text-nowrap" href="#vol3">地藏菩薩本願經卷下</a>
						<ul class="nav navbar-nav">
							<li><a @@click="jumpTo('vol3-ch10')" :class="{active: currItems['vol3-ch10'] && true}" class="nav-link text-nowrap" href="#vol3-ch10">校量布施功德緣品第十</a></li>
							<li><a @@click="jumpTo('vol3-ch11')" :class="{active: currItems['vol3-ch11'] && true}" class="nav-link text-nowrap" href="#vol3-ch11">地神護法品第十一</a></li>
							<li><a @@click="jumpTo('vol3-ch12')" :class="{active: currItems['vol3-ch12'] && true}" class="nav-link text-nowrap" href="#vol3-ch12">見聞利益品第十二</a></li>
							<li><a @@click="jumpTo('vol3-ch13')" :class="{active: currItems['vol3-ch13'] && true}" class="nav-link text-nowrap" href="#vol3-ch13">囑累人天品第十三</a></li>
						</ul>
					</li>
				</ul>
				<x-slot:audioCtrlSubtitle>
					<small class="ms-2"><a href="https://www.youtube.com/watch?v=Sff9emcqW-Q" target="_blank">(觀成法師讀經)</a></small>
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
					<li class="breadcrumb-item active">卷下</li>
				</ol>
			</nav>
		
			<h1>地藏菩薩本願經</h1>
			<small class="float-end mb-3">唐‧于闐國‧三藏沙門‧實叉難陀　譯</small>
			<div class="clearfix"></div>
			<h2 class="toc-item" id="vol3">
				<span class="word" @@click="$dispatch('play-segment')" data-start="00:11.96" data-end="00:15.68" data-index="2342">地藏菩薩本願經卷下</span>
			</h2>
			<h4 class="toc-item" id="vol3-ch10">
				<span class="word" @@click="$dispatch('play-segment')" data-start="00:16.28" data-end="00:20.48" data-index="2343">校量布施功德緣品第十</span>
			</h4>
			<div :class="details ? 'bg-secondary text-white' : ''" class="paragraph">
				<span class="word" @@click="$dispatch('play-segment')" data-start="00:21.64" data-end="00:24.94" data-index="2344">爾時地藏菩薩摩訶薩</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="00:25.46" data-end="00:27.18" data-index="2345">承佛威神</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="00:27.18" data-end="00:28.68" data-index="2346">從座而起</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="00:29.12" data-end="00:31.98" data-index="2347">胡跪合掌白佛言</span>
				<span class="punc">：</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="00:32.58" data-end="00:33.46" data-index="2348">世尊</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="00:33.92" data-end="00:36.54" data-index="2349">我觀業道眾生</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="00:37.08" data-end="00:38.80" data-index="2350">校量布施</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="00:39.20" data-end="00:40.74" data-index="2351">有輕有重</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="00:41.32" data-end="00:43.00" data-index="2352">有一生受福</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="00:43.46" data-end="00:45.18" data-index="2353">有十生受福</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="00:45.62" data-end="00:49.44" data-index="2354">有百生千生受大福利者</span>
				<span class="punc">。</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="00:50.20" data-end="00:51.98" data-index="2355">是事云何</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="00:52.34" data-end="00:55.40" data-index="2356">唯願世尊為我說之</span>
				<span class="punc">。</span>
			</div>
			<div x-show="details" class="details mb-3">
				這時，地藏大菩薩仰承佛的大威神力，即從座位上站起來，走到佛前，右膝著地，跪拜合掌對佛說：「世尊，我觀看業道裏的眾生，比較他們所做的布施，有輕有重，有的一生受福，有的十生受福，還有的百生、千生受到很大的福報，這是怎麼一回事呢？請世尊為我解說。」
				<hr/>
			</div>
			<div :class="details ? 'bg-secondary text-white' : ''" class="paragraph">
				<span class="word" @@click="$dispatch('play-segment')" data-start="00:56.20" data-end="00:59.08" data-index="2357">爾時佛告地藏菩薩</span>
				<span class="punc">：</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="00:59.72" data-end="01:04.76" data-index="2358">吾今於忉利天宮一切眾會</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="01:05.32" data-end="01:10.30" data-index="2359">說閻浮提布施較量功德輕重</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="01:10.80" data-end="01:12.46" data-index="2360">汝當諦聽</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="01:12.66" data-end="01:14.36" data-index="2361">吾為汝說</span>
				<span class="punc">。</span>
			</div>
			<div x-show="details" class="details mb-3">
				這時佛告訴地藏菩薩說：「我現在在這忉利天宮的法會上，來比較閻浮提眾生布施功德輕重，你應當仔細聆聽，我來為你解說。」
				<hr/>
			</div>
			<div :class="details ? 'bg-secondary text-white' : ''" class="paragraph">
				<span class="word" @@click="$dispatch('play-segment')" data-start="01:14.96" data-end="01:16.82" data-index="2362">地藏白佛言</span>
				<span class="punc">：</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="01:17.18" data-end="01:18.98" data-index="2363">我疑是事</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="01:19.18" data-end="01:20.92" data-index="2364">願樂欲聞</span>
				<span class="punc">。</span>
			</div>
			<div x-show="details" class="details mb-3">
				地藏菩薩回答佛說：「我對這件事有疑惑，很樂意聆聽你的解說。」
				<hr/>
			</div>
			<div :class="details ? 'bg-secondary text-white' : ''" class="paragraph">
				<span class="word" @@click="$dispatch('play-segment')" data-start="01:21.60" data-end="01:23.62" data-index="2365">佛告地藏菩薩</span>
				<span class="punc">：</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="01:24.32" data-end="01:26.40" data-index="2366">南閻浮提</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="01:26.40" data-end="01:27.88" data-index="2367">有諸國王</span>
				<span class="punc">、</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="01:28.48" data-end="01:30.02" data-index="2368">宰輔大臣</span>
				<span class="punc">、</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="01:30.26" data-end="01:31.38" data-index="2369">大長者</span>
				<span class="punc">、</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="01:31.84" data-end="01:33.04" data-index="2370">大剎利</span>
				<span class="punc">、</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="01:33.28" data-end="01:35.14" data-index="2371">大婆羅門等</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="01:35.64" data-end="01:37.92" data-index="2372">若遇最下貧窮</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="01:38.34" data-end="01:41.08" data-index="2373">乃至癃殘瘖啞</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="01:41.82" data-end="01:43.62" data-index="2374">聾癡無目</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="01:44.24" data-end="01:47.30" data-index="2375">如是種種不完具者</span>
				<span class="punc">。</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="01:47.80" data-end="01:51.28" data-index="2376">是大國王等欲布施時</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="01:51.84" data-end="01:56.64" data-index="2377">若能具大慈悲下心含笑</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="01:56.94" data-end="01:59.50" data-index="2378">親手遍布施</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="01:59.82" data-end="02:01.44" data-index="2379">或使人施</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="02:01.74" data-end="02:03.70" data-index="2380">軟言慰喻</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="02:04.16" data-end="02:07.14" data-index="2381">是國王等所獲福利</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="02:07.48" data-end="02:12.42" data-index="2382">如布施百恆河沙佛功德之利</span>
				<span class="punc">。</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="02:13.18" data-end="02:14.12" data-index="2383">何以故</span>
				<span class="punc">。</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="02:14.50" data-end="02:16.56" data-index="2384">緣是國王等</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="02:16.78" data-end="02:21.30" data-index="2385">於是最貧賤輩及不完具者</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="02:21.62" data-end="02:23.22" data-index="2386">發大慈心</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="02:23.66" data-end="02:26.76" data-index="2387">是故福利有如此報</span>
				<span class="punc">。</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="02:27.38" data-end="02:28.94" data-index="2388">百千生中</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="02:29.08" data-end="02:31.22" data-index="2389">常得七寶具足</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="02:31.76" data-end="02:34.10" data-index="2390">何況衣食受用</span>
				<span class="punc">。</span>
			</div>
			<div x-show="details" class="details mb-3">
				佛告訴地藏菩薩說：「在南閻浮提，無論那一國的國王、宰相、大臣，或是大長者、有錢的王族刹帝利人及淨行修道的大婆羅門人等，如果遇見最低下貧窮的人，甚至殘廢、癱瘓、啞巴、聾子、傻子、瞎子，像這樣一些有種種殘疾、身體不完備的人，這些大國王等人想要布施時，如果能以慈悲之心，放下自己尊貴的身份，面帶笑容，親自遍行布施，或者派別人代為布施，並用溫柔體貼的言語去安慰這些貧窮之人。這些國王等人所獲得的福報利益，就好像布施了上百條恆河沙那麼多的佛而獲得的功德利益。為什麼呢？因為這些國王等人，對於最卑微貧賤的人及五體殘缺不全的人發出大慈悲心來布施，所以才能獲得這麼大的福報。在他們百千生中，常能得到各種寶物，更何況衣服、飲食等，自然受用不盡了。
				<hr/>
			</div>
			<div :class="details ? 'bg-secondary text-white' : ''" class="paragraph">
				<span class="word" @@click="$dispatch('play-segment')" data-start="02:34.88" data-end="02:36.42" data-index="2391">復次地藏</span>
				<span class="punc">：</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="02:36.66" data-end="02:38.56" data-index="2392">若未來世</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="02:38.56" data-end="02:40.20" data-index="2393">有諸國王</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="02:40.68" data-end="02:42.88" data-index="2394">至婆羅門等</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="02:43.42" data-end="02:45.16" data-index="2395">遇佛塔寺</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="02:45.64" data-end="02:47.36" data-index="2396">或佛形像</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="02:48.00" data-end="02:52.28" data-index="2397">乃至菩薩聲聞辟支佛像</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="02:52.82" data-end="02:56.90" data-index="2398">躬自營辦供養布施</span>
				<span class="punc">。</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="02:57.34" data-end="02:58.78" data-index="2399">是國王等</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="02:59.14" data-end="03:02.32" data-index="2400">當得三劫為帝釋身</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="03:02.98" data-end="03:04.46" data-index="2401">受勝妙樂</span>
				<span class="punc">。</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="03:05.06" data-end="03:08.30" data-index="2402">若能以此布施福利</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="03:08.78" data-end="03:10.42" data-index="2403">迴向法界</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="03:10.72" data-end="03:12.74" data-index="2404">是大國王等</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="03:13.00" data-end="03:14.58" data-index="2405">於十劫中</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="03:14.88" data-end="03:17.32" data-index="2406">常為大梵天王</span>
				<span class="punc">。</span>
			</div>
			<div x-show="details" class="details mb-3">
				佛又對地藏菩薩說：「如果後世有各國國王，以及婆羅門等人，遇到佛的塔寺，或者佛的形像，甚至菩薩、聲聞、辟支佛等像，如果能親自去操辦供養布施，這些國王等人，就會得到三劫成為天帝釋而享受微妙美好的福樂；如果能將這些布施福利，不作自利而反過來迴向法界一切有情眾生，那麼這些國王等人就能在十劫之中，常做大梵天王。」
				<hr/>
			</div>
			<div :class="details ? 'bg-secondary text-white' : ''" class="paragraph">
				<span class="word" @@click="$dispatch('play-segment')" data-start="03:17.78" data-end="03:19.32" data-index="2407">復次地藏</span>
				<span class="punc">：</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="03:19.68" data-end="03:21.34" data-index="2408">若未來世</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="03:21.34" data-end="03:22.94" data-index="2409">有諸國王</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="03:23.28" data-end="03:25.14" data-index="2410">至婆羅門等</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="03:25.58" data-end="03:27.66" data-index="2411">遇先佛塔廟</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="03:27.92" data-end="03:29.60" data-index="2412">或至經像</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="03:30.04" data-end="03:31.40" data-index="2413">毀壞破落</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="03:31.88" data-end="03:34.14" data-index="2414">乃能發心修補</span>
				<span class="punc">。</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="03:34.48" data-end="03:36.20" data-index="2415">是國王等</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="03:36.62" data-end="03:38.48" data-index="2416">或自營辦</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="03:38.74" data-end="03:40.30" data-index="2417">或勸他人</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="03:40.66" data-end="03:45.06" data-index="2418">乃至百千人等布施結緣</span>
				<span class="punc">。</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="03:45.50" data-end="03:47.06" data-index="2419">是國王等</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="03:47.46" data-end="03:51.86" data-index="2420">百千生中常為轉輪王身</span>
				<span class="punc">。</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="03:52.42" data-end="03:55.50" data-index="2421">如是他人同布施者</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="03:56.02" data-end="04:00.32" data-index="2422">百千生中常為小國王身</span>
				<span class="punc">。</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="04:00.82" data-end="04:03.20" data-index="2423">更能於塔廟前</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="04:03.62" data-end="04:05.44" data-index="2424">發迴向心</span>
				<span class="punc">。</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="04:05.76" data-end="04:09.22" data-index="2425">如是國王乃及諸人</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="04:09.56" data-end="04:11.18" data-index="2426">盡成佛道</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="04:11.48" data-end="04:15.30" data-index="2427">以此果報無量無邊</span>
				<span class="punc">。</span>
			</div>
			<div x-show="details" class="details mb-3">
				佛又對地藏菩薩說：「假如未來世界中，有各國國王，以至婆羅門等人，遇到前人所建造的佛塔、佛廟，或者佛經、佛像，年代久遠已經毀壞破落了，如果能下決心修補，這些國王等人，或自己修補營辦，或者勸告別人去修補，甚至於勸化千百人一起布施結善緣而修補佛廟、佛塔、佛經、佛像。這些國王等人，在百千生中，就常常做轉輪王；像那些同他一起布施修補經像的人，在百千生中常做小國的國王。如果更能在塔廟前，把修補的功德迴向給法界有情眾生，像這樣的國王和協辦的人，都能成就佛果，因為這些功德的果報是無量無邊的。」
				<hr/>
			</div>
			<div :class="details ? 'bg-secondary text-white' : ''" class="paragraph">
				<span class="word" @@click="$dispatch('play-segment')" data-start="04:15.76" data-end="04:17.60" data-index="2428">復次地藏</span>
				<span class="punc">：</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="04:17.82" data-end="04:19.56" data-index="2429">未來世中</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="04:19.68" data-end="04:23.82" data-index="2430">有諸國王及婆羅門等</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="04:24.20" data-end="04:28.02" data-index="2431">見諸老病及生產婦女</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="04:28.48" data-end="04:30.32" data-index="2432">若一念間</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="04:30.68" data-end="04:32.32" data-index="2433">具大慈心</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="04:32.80" data-end="04:36.56" data-index="2434">布施醫藥飲食臥具</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="04:36.88" data-end="04:38.20" data-index="2435">使令安樂</span>
				<span class="punc">。</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="04:38.78" data-end="04:42.00" data-index="2436">如是福利最不思議</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="04:42.40" data-end="04:46.96" data-index="2437">一百劫中常為淨居天主</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="04:47.40" data-end="04:51.72" data-index="2438">二百劫中常為六欲天主</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="04:52.36" data-end="04:53.80" data-index="2439">畢竟成佛</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="04:54.14" data-end="04:56.12" data-index="2440">永不墮惡道</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="04:56.50" data-end="04:58.92" data-index="2441">乃至百千生中</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="04:59.24" data-end="05:01.34" data-index="2442">耳不聞苦聲</span>
				<span class="punc">。</span>
			</div>
			<div x-show="details" class="details mb-3">
				佛又對地藏菩薩說：「在未來世界中，如果有各國的國王和婆羅門等人，見到一些老人、有病的人，以及將要生產的婦女，如果能在一念之間，發慈悲之心，向他們布施醫藥、飲食、被褥卧具等，使他們得到安樂。像這樣的布施福德利益是最不可思議的。他們在一百劫中常往生為淨居天的天主，在二百劫中常往生為六欲天的天主，最終成佛，永遠不墮入惡道中受苦，甚至在百千世中，耳聽不到絲毫苦惱的音聲。」
				<hr/>
			</div>
			<div :class="details ? 'bg-secondary text-white' : ''" class="paragraph">
				<span class="word" @@click="$dispatch('play-segment')" data-start="05:01.58" data-end="05:03.24" data-index="2443">復次地藏</span>
				<span class="punc">：</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="05:03.54" data-end="05:05.50" data-index="2444">若未來世中</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="05:05.88" data-end="05:09.68" data-index="2445">有諸國王及婆羅門等</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="05:10.00" data-end="05:12.58" data-index="2446">能作如是布施</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="05:12.80" data-end="05:14.26" data-index="2447">獲福無量</span>
				<span class="punc">。</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="05:14.80" data-end="05:16.32" data-index="2448">更能迴向</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="05:16.42" data-end="05:17.90" data-index="2449">不問多少</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="05:18.16" data-end="05:19.58" data-index="2450">畢竟成佛</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="05:20.16" data-end="05:23.26" data-index="2451">何況釋梵轉輪之報</span>
				<span class="punc">。</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="05:23.78" data-end="05:25.26" data-index="2452">是故地藏</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="05:25.50" data-end="05:28.64" data-index="2453">普勸眾生當如是學</span>
				<span class="punc">。</span>
			</div>
			<div x-show="details" class="details mb-3">
				佛又告訴地藏菩薩說：「假如未來世中，有各國國王及婆羅門等人，能做這樣的布施，他所獲得的福德利益，是無量無邊的；如果能將福德再迴向給眾生，不論多少，最終他定會成佛，何況成為帝釋天、梵天王、轉輪王的果報呢！所以，地藏菩薩，你應該普及勸導眾生，實踐這種布施的方法。」
				<hr/>
			</div>
			<div :class="details ? 'bg-secondary text-white' : ''" class="paragraph">
				<span class="word" @@click="$dispatch('play-segment')" data-start="05:29.04" data-end="05:30.56" data-index="2454">復次地藏</span>
				<span class="punc">：</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="05:30.84" data-end="05:32.42" data-index="2455">未來世中</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="05:32.64" data-end="05:35.42" data-index="2456">若善男子善女人</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="05:35.76" data-end="05:37.26" data-index="2457">於佛法中</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="05:37.62" data-end="05:39.44" data-index="2458">種少善根</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="05:39.72" data-end="05:42.18" data-index="2459">毛髮沙塵等許</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="05:42.72" data-end="05:44.18" data-index="2460">所受福利</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="05:44.76" data-end="05:46.18" data-index="2461">不可為喻</span>
				<span class="punc">。</span>
			</div>
			<div x-show="details" class="details mb-3">
				佛又對地藏菩薩說：「在未來世中，如果有善男善女，在佛法之中，種下了一點善根，小得就像頭髮、沙子、灰塵那麼大，而他所受的福報也是很大的，大得沒法比喻。」
				<hr/>
			</div>
			<div :class="details ? 'bg-secondary text-white' : ''" class="paragraph">
				<span class="word" @@click="$dispatch('play-segment')" data-start="05:46.70" data-end="05:48.18" data-index="2462">復次地藏</span>
				<span class="punc">：</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="05:48.38" data-end="05:50.16" data-index="2463">未來世中</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="05:50.44" data-end="05:53.98" data-index="2464">若有善男子善女人</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="05:54.28" data-end="05:56.10" data-index="2465">遇佛形像</span>
				<span class="punc">、</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="05:56.28" data-end="05:57.86" data-index="2466">菩薩形像</span>
				<span class="punc">、</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="05:58.14" data-end="06:00.12" data-index="2467">辟支佛形像</span>
				<span class="punc">、</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="06:00.42" data-end="06:02.52" data-index="2468">轉輪王形像</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="06:02.82" data-end="06:06.42" data-index="2469">布施供養得無量福</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="06:06.86" data-end="06:10.64" data-index="2470">常在人天受勝妙樂</span>
				<span class="punc">。</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="06:11.10" data-end="06:13.48" data-index="2471">若能迴向法界</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="06:13.72" data-end="06:17.38" data-index="2472">是人福利不可為喻</span>
				<span class="punc">。</span>
			</div>
			<div x-show="details" class="details mb-3">
				佛又告訴地藏菩薩：「在未來世中，如果有善男善女，遇到佛像、菩薩像、辟支佛像、轉輪王的形像，能夠布施供養，就能得到無數的福報，常在人間、天上享受到福樂；如果他再能將供養功德迴向法界眾生，那麼這個人所得利益更是大得無法比喻。」
				<hr/>
			</div>
			<div :class="details ? 'bg-secondary text-white' : ''" class="paragraph">
				<span class="word" @@click="$dispatch('play-segment')" data-start="06:17.96" data-end="06:19.62" data-index="2473">復次地藏</span>
				<span class="punc">：</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="06:19.88" data-end="06:21.62" data-index="2474">未來世中</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="06:21.94" data-end="06:25.34" data-index="2475">若有善男子善女人</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="06:25.68" data-end="06:27.78" data-index="2476">遇大乘經典</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="06:28.08" data-end="06:31.16" data-index="2477">或聽聞一偈一句</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="06:31.48" data-end="06:33.16" data-index="2478">發殷重心</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="06:33.56" data-end="06:35.16" data-index="2479">讚歎恭敬</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="06:35.62" data-end="06:37.16" data-index="2480">布施供養</span>
				<span class="punc">。</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="06:37.46" data-end="06:39.78" data-index="2481">是人獲大果報</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="06:39.88" data-end="06:41.52" data-index="2482">無量無邊</span>
				<span class="punc">。</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="06:41.90" data-end="06:44.16" data-index="2483">若能迴向法界</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="06:44.36" data-end="06:46.74" data-index="2484">其福不可為喻</span>
				<span class="punc">。</span>
			</div>
			<div x-show="details" class="details mb-3">
				佛又向地藏菩薩說：「在未來世中，如果有善男善女，遇到大乘佛教經典，或聽到別人說一句偈語，一句經文，能發自內心地殷勤，讚歎、恭敬尊重這些經典，並能布施供養出資印經傳播，這人將會獲得極大的果報，其功德無量無邊。如果再能將這獲得的功德利益迴向到法界有情，他所獲的福報更是大得無法比喻。」
				<hr/>
			</div>
			<div :class="details ? 'bg-secondary text-white' : ''" class="paragraph">
				<span class="word" @@click="$dispatch('play-segment')" data-start="06:47.14" data-end="06:48.62" data-index="2485">復次地藏</span>
				<span class="punc">：</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="06:49.00" data-end="06:51.00" data-index="2486">若未來世中</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="06:51.28" data-end="06:54.08" data-index="2487">有善男子善女人</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="06:54.40" data-end="06:56.18" data-index="2488">遇佛塔寺</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="06:56.48" data-end="06:58.22" data-index="2489">大乘經典</span>
				<span class="punc">。</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="06:58.58" data-end="07:01.14" data-index="2490">新者布施供養</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="07:01.62" data-end="07:03.14" data-index="2491">瞻禮讚歎</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="07:03.54" data-end="07:05.14" data-index="2492">恭敬合掌</span>
				<span class="punc">。</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="07:05.46" data-end="07:07.06" data-index="2493">若遇故者</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="07:07.38" data-end="07:08.94" data-index="2494">或毀壞者</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="07:09.32" data-end="07:10.94" data-index="2495">修補營理</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="07:11.22" data-end="07:12.78" data-index="2496">或獨發心</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="07:13.12" data-end="07:17.06" data-index="2497">或勸多人同共發心</span>
				<span class="punc">。</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="07:17.32" data-end="07:19.04" data-index="2498">如是等輩</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="07:19.28" data-end="07:23.90" data-index="2499">三十生中常為諸小國王</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="07:24.22" data-end="07:25.66" data-index="2500">檀越之人</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="07:25.84" data-end="07:27.44" data-index="2501">常為輪王</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="07:27.78" data-end="07:32.24" data-index="2502">還以善法教化諸小國王</span>
				<span class="punc">。</span>
			</div>
			<div x-show="details" class="details mb-3">
				佛又告訴地藏菩薩：「如果未來世中，有善男善女，遇到佛的塔寺、大乘佛教經典，如果見是新的，他能夠布施供養，瞻仰禮拜，稱揚讚歎，恭敬地合掌膜拜；如果是破舊毀壞的，能夠修補整理或經營，或者獨自一人發心出資修補營辦，或者勸導多人共同發心。像這樣的人，在三十生中常當小國國王；如果是出資承辦的人，常往生為轉輪王，還會用善法去教化各個小國國王。」
				<hr/>
			</div>
			<div :class="details ? 'bg-secondary text-white' : ''" class="paragraph">
				<span class="word" @@click="$dispatch('play-segment')" data-start="07:32.72" data-end="07:34.24" data-index="2503">復次地藏</span>
				<span class="punc">：</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="07:34.48" data-end="07:36.20" data-index="2504">未來世中</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="07:36.50" data-end="07:39.46" data-index="2505">若有善男子善女人</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="07:39.70" data-end="07:43.06" data-index="2506">於佛法中所種善根</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="07:43.38" data-end="07:45.44" data-index="2507">或布施供養</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="07:45.78" data-end="07:47.68" data-index="2508">或修補塔寺</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="07:48.00" data-end="07:50.24" data-index="2509">或裝理經典</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="07:50.48" data-end="07:53.06" data-index="2510">乃至一毛一塵</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="07:53.36" data-end="07:55.04" data-index="2511">一沙一渧</span>
				<span class="punc">。</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="07:55.26" data-end="07:56.82" data-index="2512">如是善事</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="07:57.10" data-end="07:59.54" data-index="2513">但能迴向法界</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="07:59.86" data-end="08:01.10" data-index="2514">是人功德</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="08:01.52" data-end="08:04.50" data-index="2515">百千生中受上妙樂</span>
				<span class="punc">。</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="08:04.94" data-end="08:08.20" data-index="2516">如但迴向自家眷屬</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="08:08.52" data-end="08:10.48" data-index="2517">或自身利益</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="08:10.88" data-end="08:12.44" data-index="2518">如是之果</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="08:12.78" data-end="08:14.66" data-index="2519">即三生受樂</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="08:15.16" data-end="08:17.26" data-index="2520">捨一得萬報</span>
				<span class="punc">。</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="08:17.70" data-end="08:19.16" data-index="2521">是故地藏</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="08:19.54" data-end="08:21.02" data-index="2522">布施因緣</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="08:21.26" data-end="08:23.16" data-index="2523">其事如是</span>
				<span class="punc">。</span>
			</div>
			<div x-show="details" class="details mb-3">
				佛又向地藏菩薩說：「在未來世中，如果有善男善女，在佛法中所種植下的善根，或者是布施供養佛法，或者是修補塔寺，或者是裝裱整理佛教經典，甚至只是一根毛、一微塵、一粒沙、一滴水那麼少的善事，只要能迴向法界眾生，這人的功德，成百上千生中會享受到最美妙的快樂；如果只是將功德迴向自家的眷屬，或自身的利益，這樣的果報，就是三世享受安樂。所以如果能捨棄自身利益，則能獲得萬倍的果報。所以地藏菩薩啊，布施的因果關係，就是這樣。」
				<hr/>
			</div>
			<h4 class="toc-item" id="vol3-ch11">
				<span class="word" @@click="$dispatch('play-segment')" data-start="08:25.06" data-end="08:28.10" data-index="2524">地神護法品第十一</span>
			</h4>
			<div :class="details ? 'bg-secondary text-white' : ''" class="paragraph">
				<span class="word" @@click="$dispatch('play-segment')" data-start="08:30.00" data-end="08:33.48" data-index="2525">爾時堅牢地神白佛言</span>
				<span class="punc">：</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="08:34.06" data-end="08:35.00" data-index="2526">世尊</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="08:35.00" data-end="08:40.78" data-index="2527">我從昔來瞻視頂禮無量菩薩摩訶薩</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="08:41.38" data-end="08:45.48" data-index="2528">皆是大不可思議神通智慧</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="08:45.84" data-end="08:47.48" data-index="2529">廣度眾生</span>
				<span class="punc">。</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="08:48.06" data-end="08:51.14" data-index="2530">是地藏菩薩摩訶薩</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="08:51.56" data-end="08:54.88" data-index="2531">於諸菩薩誓願深重</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="08:55.64" data-end="08:56.50" data-index="2532">世尊</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="08:56.68" data-end="09:02.58" data-index="2533">是地藏菩薩於閻浮提有大因緣</span>
				<span class="punc">。</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="09:03.22" data-end="09:04.84" data-index="2534">如文殊</span>
				<span class="punc">、</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="09:04.98" data-end="09:05.84" data-index="2535">普賢</span>
				<span class="punc">、</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="09:06.14" data-end="09:06.96" data-index="2536">觀音</span>
				<span class="punc">、</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="09:06.96" data-end="09:07.72" data-index="2537">彌勒</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="09:08.10" data-end="09:10.66" data-index="2538">亦化百千身形</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="09:10.78" data-end="09:12.20" data-index="2539">度於六道</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="09:12.56" data-end="09:15.18" data-index="2540">其願尚有畢竟</span>
				<span class="punc">。</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="09:15.86" data-end="09:20.66" data-index="2541">是地藏菩薩教化六道一切眾生</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="09:21.12" data-end="09:23.46" data-index="2542">所發誓願劫數</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="09:23.80" data-end="09:26.46" data-index="2543">如千百億恆河沙</span>
				<span class="punc">。</span>
			</div>
			<div x-show="details" class="details mb-3">
				此時，堅牢地神對佛說：「世尊，我從往昔以來，瞻視頂禮過無數的菩薩、大菩薩，他們都有很大的不可思議的神通智慧，廣度眾生出離苦難，可是這地藏菩薩的願力比其他菩薩更為深重。世尊，這位地藏菩薩，與閻浮提世間眾生有着特別深厚的大因緣，像文殊、普賢、觀音、彌勒這四位大菩薩，他們也化現為成百上千種身形，來廣度在六道中輪迴的眾生，但他們的願力最後還是有完滿的時候，而這位地藏菩薩教化六道一切眾生，他所發的誓願劫數，就好像千百億條恆河的沙子一樣多。」
				<hr/>
			</div>
			<div :class="details ? 'bg-secondary text-white' : ''" class="paragraph">
				<span class="word" @@click="$dispatch('play-segment')" data-start="09:27.26" data-end="09:28.10" data-index="2544">世尊</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="09:28.10" data-end="09:31.52" data-index="2545">我觀未來及現在眾生</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="09:32.06" data-end="09:33.52" data-index="2546">於所住處</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="09:33.94" data-end="09:36.70" data-index="2547">於南方清潔之地</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="09:37.02" data-end="09:40.70" data-index="2548">以土石竹木作其龕室</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="09:41.02" data-end="09:42.86" data-index="2549">是中能塑畫</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="09:43.30" data-end="09:45.64" data-index="2550">乃至金銀銅鐵</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="09:45.92" data-end="09:47.92" data-index="2551">作地藏形像</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="09:48.32" data-end="09:50.06" data-index="2552">燒香供養</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="09:50.38" data-end="09:51.98" data-index="2553">瞻禮讚歎</span>
				<span class="punc">。</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="09:52.22" data-end="09:53.94" data-index="2554">是人居處</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="09:54.10" data-end="09:56.14" data-index="2555">即得十種利益</span>
				<span class="punc">。</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="09:56.72" data-end="09:58.36" data-index="2556">何等為十</span>
				<span class="punc">：</span>
				<blockquote>
					<span class="word" @@click="$dispatch('play-segment')" data-start="09:58.88" data-end="09:59.72" data-index="2557">一者</span>
					<span class="punc">、</span>
					<span class="word" @@click="$dispatch('play-segment')" data-start="09:59.84" data-end="10:01.42" data-index="2558">土地豐壤</span>
					<span class="punc">；</span>
					<span class="word" @@click="$dispatch('play-segment')" data-start="10:01.66" data-end="10:02.56" data-index="2559">二者</span>
					<span class="punc">、</span>
					<span class="word" @@click="$dispatch('play-segment')" data-start="10:02.78" data-end="10:04.20" data-index="2560">家宅永安</span>
					<span class="punc">；</span><br/>
					<span class="word" @@click="$dispatch('play-segment')" data-start="10:04.78" data-end="10:05.64" data-index="2561">三者</span>
					<span class="punc">、</span>
					<span class="word" @@click="$dispatch('play-segment')" data-start="10:05.64" data-end="10:07.42" data-index="2562">先亡生天</span>
					<span class="punc">；</span>
					<span class="word" @@click="$dispatch('play-segment')" data-start="10:07.70" data-end="10:08.64" data-index="2563">四者</span>
					<span class="punc">、</span>
					<span class="word" @@click="$dispatch('play-segment')" data-start="10:08.64" data-end="10:10.48" data-index="2564">現存益壽</span>
					<span class="punc">；</span><br/>
					<span class="word" @@click="$dispatch('play-segment')" data-start="10:10.88" data-end="10:11.72" data-index="2565">五者</span>
					<span class="punc">、</span>
					<span class="word" @@click="$dispatch('play-segment')" data-start="10:11.72" data-end="10:13.52" data-index="2566">所求遂意</span>
					<span class="punc">；</span>
					<span class="word" @@click="$dispatch('play-segment')" data-start="10:13.70" data-end="10:14.64" data-index="2567">六者</span>
					<span class="punc">、</span>
					<span class="word" @@click="$dispatch('play-segment')" data-start="10:14.64" data-end="10:16.44" data-index="2568">無水火災</span>
					<span class="punc">；</span><br/>
					<span class="word" @@click="$dispatch('play-segment')" data-start="10:17.08" data-end="10:17.82" data-index="2569">七者</span>
					<span class="punc">、</span>
					<span class="word" @@click="$dispatch('play-segment')" data-start="10:17.82" data-end="10:19.42" data-index="2570">虛耗辟除</span>
					<span class="punc">；</span>
					<span class="word" @@click="$dispatch('play-segment')" data-start="10:20.06" data-end="10:20.82" data-index="2571">八者</span>
					<span class="punc">、</span>
					<span class="word" @@click="$dispatch('play-segment')" data-start="10:21.08" data-end="10:22.64" data-index="2572">杜絕惡夢</span>
					<span class="punc">；</span><br/>
					<span class="word" @@click="$dispatch('play-segment')" data-start="10:23.08" data-end="10:23.92" data-index="2573">九者</span>
					<span class="punc">、</span>
					<span class="word" @@click="$dispatch('play-segment')" data-start="10:24.02" data-end="10:25.44" data-index="2574">出入神護</span>
					<span class="punc">；</span>
					<span class="word" @@click="$dispatch('play-segment')" data-start="10:25.90" data-end="10:26.72" data-index="2575">十者</span>
					<span class="punc">、</span>
					<span class="word" @@click="$dispatch('play-segment')" data-start="10:26.72" data-end="10:28.28" data-index="2576">多遇聖因</span>
					<span class="punc">。</span>
				</blockquote>
			</div>
			<div x-show="details" class="details mb-3">
				「世尊，我看未來及現在的一切眾生，在他們所住的地方，於南方清潔的位置，用土、石、竹、木等材料做一個龕室，當中塑畫地藏菩薩聖像，甚至用金、銀、銅、鐵來鑄造形像，並對且燒香供養，瞻仰禮拜、稱讚，那麼，這處居所，就得能到十種利益，有那十種呢？
				<blockquote>
					第一，他所住的土地變得肥沃富饒，五穀豐收；<br/>
					第二，家中大小眷屬永遠平安無事；<br/>
					第三，已經亡故的先人們可以早日超生在天上；<br/>
					第四，現在世的人都能增長壽命；<br/>
					第五，所求的事均能遂心如意地實現；<br/>
					第六，沒有水災、火災等災難；<br/>
					第七，一切驚恐不如意的事都能消除；<br/>
					第八，無惡夢可做；<br/>
					第九，出入起居平安，有神靈護衛；<br/>
					第十，修持上能經常遇到一些殊勝的因緣與印證。
				</blockquote>
				」
				<hr/>
			</div>
			<div :class="details ? 'bg-secondary text-white' : ''" class="paragraph">
				<span class="word" @@click="$dispatch('play-segment')" data-start="10:28.88" data-end="10:29.74" data-index="2577">世尊</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="10:29.74" data-end="10:31.48" data-index="2578">未來世中</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="10:31.50" data-end="10:33.54" data-index="2579">及現在眾生</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="10:33.96" data-end="10:37.40" data-index="2580">若能於所住處方面</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="10:37.86" data-end="10:39.86" data-index="2581">作如是供養</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="10:40.10" data-end="10:41.82" data-index="2582">得如是利益</span>
				<span class="punc">。</span>
			</div>
			<div x-show="details" class="details mb-3">
				「世尊，在未來以及現在的一切眾生中，如果能夠在他們所住的地方，做前面所說的各種供養，就能獲得這十種利益。」
				<hr/>
			</div>
			<div :class="details ? 'bg-secondary text-white' : ''" class="paragraph">
				<span class="word" @@click="$dispatch('play-segment')" data-start="10:42.56" data-end="10:43.98" data-index="2583">復白佛言</span>
				<span class="punc">：</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="10:44.20" data-end="10:44.98" data-index="2584">世尊</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="10:45.12" data-end="10:46.76" data-index="2585">未來世中</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="10:47.12" data-end="10:50.48" data-index="2586">若有善男子善女人</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="10:50.64" data-end="10:52.44" data-index="2587">於所住處</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="10:52.44" data-end="10:55.98" data-index="2588">有此經典及菩薩像</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="10:56.32" data-end="10:59.52" data-index="2589">是人更能轉讀經典</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="10:59.86" data-end="11:01.34" data-index="2590">供養菩薩</span>
				<span class="punc">。</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="11:01.88" data-end="11:04.72" data-index="2591">我常日夜以本神力</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="11:05.22" data-end="11:06.72" data-index="2592">衛護是人</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="11:06.96" data-end="11:09.30" data-index="2593">乃至水火盜賊</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="11:09.72" data-end="11:11.30" data-index="2594">大橫小橫</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="11:11.74" data-end="11:13.20" data-index="2595">一切惡事</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="11:13.40" data-end="11:15.04" data-index="2596">悉皆消滅</span>
				<span class="punc">。</span>
			</div>
			<div x-show="details" class="details mb-3">
				堅牢地神又對佛說：「世尊，在未來世中，假使有善男善女，在所住的地方，如果有《地藏本願經》及地藏菩薩的聖像，這個人還能讀誦這部經典，供養地藏菩薩，那麼我便在日夜常用神通力量，來保護這個人，甚至水災、火災、盜賊等大小禍事、一切惡事，都能夠替他消滅。」
				<hr/>
			</div>
			<div :class="details ? 'bg-secondary text-white' : ''" class="paragraph">
				<span class="word" @@click="$dispatch('play-segment')" data-start="11:15.74" data-end="11:17.98" data-index="2597">佛告堅牢地神</span>
				<span class="punc">：</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="11:18.38" data-end="11:19.98" data-index="2598">汝大神力</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="11:20.14" data-end="11:21.76" data-index="2599">諸神少及</span>
				<span class="punc">。</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="11:22.18" data-end="11:23.18" data-index="2600">何以故</span>
				<span class="punc">？</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="11:23.52" data-end="11:25.52" data-index="2601">閻浮土地</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="11:25.86" data-end="11:27.40" data-index="2602">悉蒙汝護</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="11:27.64" data-end="11:30.26" data-index="2603">乃至草木沙石</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="11:30.84" data-end="11:32.50" data-index="2604">稻麻竹葦</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="11:33.02" data-end="11:34.90" data-index="2605">穀米寶貝</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="11:35.08" data-end="11:36.56" data-index="2606">從地而有</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="11:36.90" data-end="11:38.14" data-index="2607">皆因汝力</span>
				<span class="punc">。</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="11:38.54" data-end="11:43.26" data-index="2608">又常稱揚地藏菩薩利益之事</span>
				<span class="punc">。</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="11:43.72" data-end="11:45.26" data-index="2609">汝之功德</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="11:45.64" data-end="11:47.58" data-index="2610">及以神通</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="11:47.58" data-end="11:50.88" data-index="2611">百千倍於常分地神</span>
				<span class="punc">。</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="11:51.40" data-end="11:53.60" data-index="2612">若未來世中</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="11:54.00" data-end="11:57.02" data-index="2613">有善男子善女人</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="11:57.54" data-end="11:58.90" data-index="2614">供養菩薩</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="11:59.22" data-end="12:01.22" data-index="2615">及轉讀是經</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="12:01.70" data-end="12:06.76" data-index="2616">但依地藏本願經一事修行者</span>
				<span class="punc">。</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="12:07.22" data-end="12:11.30" data-index="2617">汝以本神力而擁護之</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="12:11.62" data-end="12:16.40" data-index="2618">勿令一切災害及不如意事</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="12:16.82" data-end="12:18.46" data-index="2619">輒聞於耳</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="12:18.94" data-end="12:20.46" data-index="2620">何況令受</span>
				<span class="punc">。</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="12:21.00" data-end="12:24.12" data-index="2621">非但汝獨護是人故</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="12:24.32" data-end="12:26.56" data-index="2622">亦有釋梵眷屬</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="12:26.92" data-end="12:28.34" data-index="2623">諸天眷屬</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="12:28.68" data-end="12:30.12" data-index="2624">擁護是人</span>
				<span class="punc">。</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="12:30.48" data-end="12:34.02" data-index="2625">何故得如是聖賢擁護</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="12:34.36" data-end="12:37.54" data-index="2626">皆由瞻禮地藏形像</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="12:37.82" data-end="12:41.10" data-index="2627">及轉讀是本願經故</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="12:41.58" data-end="12:44.86" data-index="2628">自然畢竟出離苦海</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="12:45.30" data-end="12:46.74" data-index="2629">證涅槃樂</span>
				<span class="punc">。</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="12:47.14" data-end="12:48.92" data-index="2630">以是之故</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="12:49.02" data-end="12:50.54" data-index="2631">得大擁護</span>
				<span class="punc">。</span>
			</div>
			<div x-show="details" class="details mb-3">
				佛告訴堅牢地神說：「像你這樣大的神通力量，其他的神祇很少有能力比得上你。為什麼呢？因為南閻浮提世間的所有土地，都是受你保護，甚至土地上的一草一木，一沙一石，還有稻、麻、竹、葦、穀米、寶貝等一切東西，之所能從土地中生長出來，皆因有你的神通保護才有。你又能稱讚歌頌地藏菩薩所做的功德利益事，因此，你的功德，以及你的神通，是比普通地神還要高出百千倍。如果未來世界中，有善男善女，供養地藏菩薩，以及轉讀這部《地藏本願經》，並能依照《地藏本願經》裏的每件事來修行的人，你都要用你的神通力去支持他，擁護他，保護他，不要使一切災害以及不如意的事經常在他耳邊出現，更何況他親自去經歷這些災難呢？不單止你保護這些人，還有帝釋、梵天天王的眷屬，都來擁戴保護這些人。為什麼能夠得到這麼多的聖賢來衛護？皆因他瞻仰禮拜地藏菩薩形像，以及轉讀了這部《地藏本願經》的緣故。自然最終能脫離苦海，證得涅槃不生不死的快樂。就是這個原因，得大擁護。」
				<hr/>
			</div>
			<h4 class="toc-item" id="vol3-ch12">
				<span class="word" @@click="$dispatch('play-segment')" data-start="12:52.46" data-end="12:55.70" data-index="2632">見聞利益品第十二</span>
			</h4>
			<div :class="details ? 'bg-secondary text-white' : ''" class="paragraph">
				<span class="word" @@click="$dispatch('play-segment')" data-start="12:57.80" data-end="12:59.56" data-index="2633">爾時世尊</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="12:59.68" data-end="13:01.40" data-index="2634">從頂門上</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="13:01.64" data-end="13:05.10" data-index="2635">放百千萬億大毫相光</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="13:05.94" data-end="13:06.72" data-index="2636">所謂</span>
				<span class="punc">：</span>
				<blockquote>
					<span class="word" @@click="$dispatch('play-segment')" data-start="13:06.72" data-end="13:08.28" data-index="2637">白毫相光</span>
					<span class="punc">、</span>
					<span class="word" @@click="$dispatch('play-segment')" data-start="13:08.74" data-end="13:10.58" data-index="2638">大白毫相光</span>
					<span class="punc">、</span><br/>
					<span class="word" @@click="$dispatch('play-segment')" data-start="13:11.10" data-end="13:13.12" data-index="2639">瑞毫相光</span>
					<span class="punc">、</span>
					<span class="word" @@click="$dispatch('play-segment')" data-start="13:13.44" data-end="13:15.48" data-index="2640">大瑞毫相光</span>
					<span class="punc">、</span><br/>
					<span class="word" @@click="$dispatch('play-segment')" data-start="13:15.88" data-end="13:17.42" data-index="2641">玉毫相光</span>
					<span class="punc">、</span>
					<span class="word" @@click="$dispatch('play-segment')" data-start="13:17.78" data-end="13:19.72" data-index="2642">大玉毫相光</span>
					<span class="punc">、</span><br/>
					<span class="word" @@click="$dispatch('play-segment')" data-start="13:20.08" data-end="13:21.66" data-index="2643">紫毫相光</span>
					<span class="punc">、</span>
					<span class="word" @@click="$dispatch('play-segment')" data-start="13:22.02" data-end="13:24.02" data-index="2644">大紫毫相光</span>
					<span class="punc">、</span><br/>
					<span class="word" @@click="$dispatch('play-segment')" data-start="13:24.34" data-end="13:26.20" data-index="2645">青毫相光</span>
					<span class="punc">、</span>
					<span class="word" @@click="$dispatch('play-segment')" data-start="13:26.68" data-end="13:28.74" data-index="2646">大青毫相光</span>
					<span class="punc">、</span><br/>
					<span class="word" @@click="$dispatch('play-segment')" data-start="13:29.08" data-end="13:30.74" data-index="2647">碧毫相光</span>
					<span class="punc">、</span>
					<span class="word" @@click="$dispatch('play-segment')" data-start="13:31.26" data-end="13:33.06" data-index="2648">大碧毫相光</span>
					<span class="punc">、</span><br/>
					<span class="word" @@click="$dispatch('play-segment')" data-start="13:33.72" data-end="13:35.40" data-index="2649">紅毫相光</span>
					<span class="punc">、</span>
					<span class="word" @@click="$dispatch('play-segment')" data-start="13:35.80" data-end="13:37.86" data-index="2650">大紅毫相光</span>
					<span class="punc">、</span><br/>
					<span class="word" @@click="$dispatch('play-segment')" data-start="13:38.18" data-end="13:39.86" data-index="2651">綠毫相光</span>
					<span class="punc">、</span>
					<span class="word" @@click="$dispatch('play-segment')" data-start="13:40.38" data-end="13:42.24" data-index="2652">大綠毫相光</span>
					<span class="punc">、</span><br/>
					<span class="word" @@click="$dispatch('play-segment')" data-start="13:42.76" data-end="13:44.38" data-index="2653">金毫相光</span>
					<span class="punc">、</span>
					<span class="word" @@click="$dispatch('play-segment')" data-start="13:44.80" data-end="13:46.70" data-index="2654">大金毫相光</span>
					<span class="punc">、</span><br/>
					<span class="word" @@click="$dispatch('play-segment')" data-start="13:47.24" data-end="13:49.16" data-index="2655">慶雲毫相光</span>
					<span class="punc">、</span>
					<span class="word" @@click="$dispatch('play-segment')" data-start="13:49.76" data-end="13:52.04" data-index="2656">大慶雲毫相光</span>
					<span class="punc">、</span><br/>
					<span class="word" @@click="$dispatch('play-segment')" data-start="13:52.54" data-end="13:54.24" data-index="2657">千輪毫光</span>
					<span class="punc">、</span>
					<span class="word" @@click="$dispatch('play-segment')" data-start="13:54.68" data-end="13:56.66" data-index="2658">大千輪毫光</span>
					<span class="punc">、</span><br/>
					<span class="word" @@click="$dispatch('play-segment')" data-start="13:57.10" data-end="13:58.72" data-index="2659">寶輪毫光</span>
					<span class="punc">、</span>
					<span class="word" @@click="$dispatch('play-segment')" data-start="13:59.08" data-end="14:01.04" data-index="2660">大寶輪毫光</span>
					<span class="punc">、</span><br/>
					<span class="word" @@click="$dispatch('play-segment')" data-start="14:01.42" data-end="14:03.10" data-index="2661">日輪毫光</span>
					<span class="punc">、</span>
					<span class="word" @@click="$dispatch('play-segment')" data-start="14:03.34" data-end="14:05.28" data-index="2662">大日輪毫光</span>
					<span class="punc">、</span><br/>
					<span class="word" @@click="$dispatch('play-segment')" data-start="14:05.80" data-end="14:07.48" data-index="2663">月輪毫光</span>
					<span class="punc">、</span>
					<span class="word" @@click="$dispatch('play-segment')" data-start="14:07.98" data-end="14:09.90" data-index="2664">大月輪毫光</span>
					<span class="punc">、</span><br/>
					<span class="word" @@click="$dispatch('play-segment')" data-start="14:10.42" data-end="14:12.26" data-index="2665">宮殿毫光</span>
					<span class="punc">、</span>
					<span class="word" @@click="$dispatch('play-segment')" data-start="14:12.68" data-end="14:14.68" data-index="2666">大宮殿毫光</span>
					<span class="punc">、</span><br/>
					<span class="word" @@click="$dispatch('play-segment')" data-start="14:15.08" data-end="14:16.64" data-index="2667">海雲毫光</span>
					<span class="punc">、</span>
					<span class="word" @@click="$dispatch('play-segment')" data-start="14:17.10" data-end="14:19.12" data-index="2668">大海雲毫光</span>
					<span class="punc">。</span>
				</blockquote>
			</div>
			<div x-show="details" class="details mb-3">
				這時，佛從他的頭頂上放出百千萬億道毫光瑞相，
				<blockquote>
					所謂白毫相光、大白毫相光、<br/>
					瑞毫相光、大瑞毫相光、<br/>
					玉毫相光、大玉毫相光、<br/>
					紫毫相光、大紫毫相光、<br/>
					青毫相光、大青毫相光、<br/>
					碧毫相光、大碧毫相光、<br/>
					紅毫相光、大紅毫相光、<br/>
					綠毫相光、大綠毫相光、<br/>
					金毫相光、大金毫相光、<br/>
					慶雲毫相光、大慶雲毫相光、<br/>
					千輪毫光、大千輪毫光、<br/>
					寶輪毫光、大寶輪毫光、<br/>
					日輪毫光、大日輪毫光、<br/>
					月輪毫光、大月輪毫光、<br/>
					宮殿毫光、大宮殿毫光、<br/>
					海雲毫光、大海雲毫光。
				</blockquote>
				<hr/>
			</div>
			<div :class="details ? 'bg-secondary text-white' : ''" class="paragraph">
				<span class="word" @@click="$dispatch('play-segment')" data-start="14:19.68" data-end="14:25.28" data-index="2669">於頂門上放如是等毫相光已</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="14:25.70" data-end="14:27.54" data-index="2670">出微妙音</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="14:27.86" data-end="14:29.52" data-index="2671">告諸大眾</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="14:29.78" data-end="14:31.40" data-index="2672">天龍八部</span>
				<span class="punc">、</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="14:31.78" data-end="14:33.28" data-index="2673">人非人等</span>
				<span class="punc">：</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="14:33.76" data-end="14:37.52" data-index="2674">聽吾今日於忉利天宮</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="14:38.18" data-end="14:43.86" data-index="2675">稱揚讚歎地藏菩薩於人天中</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="14:44.02" data-end="14:45.62" data-index="2676">利益等事</span>
				<span class="punc">、</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="14:46.06" data-end="14:47.52" data-index="2677">不思議事</span>
				<span class="punc">、</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="14:47.92" data-end="14:49.76" data-index="2678">超聖因事</span>
				<span class="punc">、</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="14:50.20" data-end="14:52.20" data-index="2679">證十地事</span>
				<span class="punc">、</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="14:52.50" data-end="14:58.30" data-index="2680">畢竟不退阿耨多羅三藐三菩提事</span>
				<span class="punc">。</span>
			</div>
			<div x-show="details" class="details mb-3">
				佛從他的頭頂上放出這許許多多道毫光相之後，又發出微妙的聲音，告訴大眾，天龍八部、人以及非人等說：「你們聽我今天在忉利天宮稱揚讚歎地藏菩薩在人道和天道中，為眾生造種種利益的事，種種不可思議的事，超凡入聖的事，證得十地果位的事，最終於無上正等正覺的道路上永不退轉的事。」
				<hr/>
			</div>
			<div :class="details ? 'bg-secondary text-white' : ''" class="paragraph">
				<span class="word" @@click="$dispatch('play-segment')" data-start="14:59.04" data-end="15:00.74" data-index="2681">說是語時</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="15:01.14" data-end="15:04.34" data-index="2682">會中有一菩薩摩訶薩</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="15:04.74" data-end="15:06.58" data-index="2683">名觀世音</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="15:06.94" data-end="15:08.88" data-index="2684">從座而起</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="15:09.12" data-end="15:12.14" data-index="2685">胡跪合掌白佛言</span>
				<span class="punc">：</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="15:12.50" data-end="15:13.34" data-index="2686">世尊</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="15:13.44" data-end="15:18.92" data-index="2687">是地藏菩薩摩訶薩具大慈悲</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="15:19.28" data-end="15:21.84" data-index="2688">憐愍罪苦眾生</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="15:22.22" data-end="15:24.62" data-index="2689">於千萬億世界</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="15:25.04" data-end="15:26.96" data-index="2690">化千萬億身</span>
				<span class="punc">。</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="15:27.50" data-end="15:32.38" data-index="2691">所有功德及不思議威神之力</span>
				<span class="punc">。</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="15:32.92" data-end="15:34.66" data-index="2692">我聞世尊</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="15:34.96" data-end="15:37.64" data-index="2693">與十方無量諸佛</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="15:38.08" data-end="15:39.90" data-index="2694">異口同音</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="15:40.08" data-end="15:42.98" data-index="2695">讚歎地藏菩薩云</span>
				<span class="punc">：</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="15:43.54" data-end="15:47.56" data-index="2696">正使過去現在未來諸佛</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="15:48.00" data-end="15:49.54" data-index="2697">說其功德</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="15:49.80" data-end="15:51.52" data-index="2698">猶不能盡</span>
				<span class="punc">。</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="15:52.08" data-end="15:52.90" data-index="2699">向者</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="15:52.90" data-end="15:54.56" data-index="2700">又蒙世尊</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="15:54.56" data-end="15:56.28" data-index="2701">普告大眾</span>
				<span class="punc">：</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="15:56.76" data-end="16:00.32" data-index="2702">欲稱揚地藏利益等事</span>
				<span class="punc">。</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="16:00.72" data-end="16:02.52" data-index="2703">唯願世尊</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="16:02.80" data-end="16:06.64" data-index="2704">為現在未來一切眾生</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="16:06.98" data-end="16:10.12" data-index="2705">稱揚地藏不思議事</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="16:10.60" data-end="16:13.06" data-index="2706">令天龍八部</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="16:13.16" data-end="16:14.50" data-index="2707">瞻禮獲福</span>
				<span class="punc">。</span>
			</div>
			<div x-show="details" class="details mb-3">
				佛正在說這段話的時候，會中有一位大菩薩，名字叫觀世音，從座中站起，右膝跪地，恭敬合掌對佛說：「世尊，這個地藏大菩薩具備極大慈悲之心，憐憫罪苦眾生，在千萬億世界，化出千萬億化身，他真有不可思議的大功德和神力，我聽世尊和各方諸佛都異口同聲地讚歎地藏菩薩，即使過去、現在、未來諸佛都說不完他的功德。前面又承蒙世尊普告大眾，要稱讚宣揚地藏菩薩給眾生造利益的事，現在希望世尊能為現在和未來的一切眾生，稱讚宣揚地藏菩薩不可思議的利益功德之事，以便讓天龍八部護法諸神能瞻仰禮拜地藏菩薩，而獲得福報利益。」
				<hr/>
			</div>
			<div :class="details ? 'bg-secondary text-white' : ''" class="paragraph">
				<span class="word" @@click="$dispatch('play-segment')" data-start="16:15.08" data-end="16:17.66" data-index="2708">佛告觀世音菩薩</span>
				<span class="punc">：</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="16:18.44" data-end="16:23.24" data-index="2709">汝於娑婆世界有大因緣</span>
				<span class="punc">。</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="16:23.50" data-end="16:25.14" data-index="2710">若天若龍</span>
				<span class="punc">、</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="16:25.26" data-end="16:26.88" data-index="2711">若男若女</span>
				<span class="punc">、</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="16:27.34" data-end="16:29.04" data-index="2712">若神若鬼</span>
				<span class="punc">、</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="16:29.32" data-end="16:32.92" data-index="2713">乃至六道罪苦眾生</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="16:33.48" data-end="16:35.36" data-index="2714">聞汝名者</span>
				<span class="punc">、</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="16:35.86" data-end="16:37.50" data-index="2715">見汝形者</span>
				<span class="punc">、</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="16:38.02" data-end="16:39.66" data-index="2716">戀慕汝者</span>
				<span class="punc">、</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="16:40.14" data-end="16:41.66" data-index="2717">讚歎汝者</span>
				<span class="punc">。</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="16:42.08" data-end="16:43.56" data-index="2718">是諸眾生</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="16:43.94" data-end="16:45.62" data-index="2719">於無上道</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="16:46.18" data-end="16:47.94" data-index="2720">必不退轉</span>
				<span class="punc">。</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="16:48.20" data-end="16:50.04" data-index="2721">常生人天</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="16:50.42" data-end="16:52.16" data-index="2722">具受妙樂</span>
				<span class="punc">。</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="16:52.52" data-end="16:54.18" data-index="2723">因果將熟</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="16:54.78" data-end="16:56.40" data-index="2724">遇佛受記</span>
				<span class="punc">。</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="16:56.82" data-end="16:59.66" data-index="2725">汝今具大慈悲</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="16:59.70" data-end="17:01.26" data-index="2726">憐愍眾生</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="17:01.62" data-end="17:03.78" data-index="2727">及天龍八部</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="17:04.18" data-end="17:10.50" data-index="2728">聽吾宣說地藏菩薩不思議利益之事</span>
				<span class="punc">。</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="17:11.04" data-end="17:12.58" data-index="2729">汝當諦聽</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="17:13.10" data-end="17:14.58" data-index="2730">吾今說之</span>
				<span class="punc">。</span>
			</div>
			<div x-show="details" class="details mb-3">
				佛告訴觀世音菩薩說：「你在娑婆世界有很大的因緣，如果諸天神眾、龍眾，或者男女眾，或神或鬼，以至於在六道中輪迴的罪苦眾生，只要聽到你的名字，見到你的形像，戀慕欽敬你、讚歎你的這些眾生，於佛法這至高無上的正道，必然不會產生退轉的心，還可以往生到人道或天道去享受福樂，待因果成熟的時候，便會遇佛來接引，為其授記。你現今以大慈悲的心，同情憐憫眾生，以及天龍八部，聽我宣說地藏菩薩不可思議的功德利益的事。你就細心聆聽，我現在就為你宣說。」
				<hr/>
			</div>
			<div :class="details ? 'bg-secondary text-white' : ''" class="paragraph">
				<span class="word" @@click="$dispatch('play-segment')" data-start="17:15.50" data-end="17:17.12" data-index="2731">觀世音言</span>
				<span class="punc">：</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="17:17.60" data-end="17:18.28" data-index="2732">唯然</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="17:18.36" data-end="17:19.18" data-index="2733">世尊</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="17:19.54" data-end="17:21.16" data-index="2734">願樂欲聞</span>
				<span class="punc">！</span>
			</div>
			<div x-show="details" class="details mb-3">
				觀世音菩薩說：「是的，世尊，我樂於聽你宣說。」
				<hr/>
			</div>
			<div :class="details ? 'bg-secondary text-white' : ''" class="paragraph">
				<span class="word" @@click="$dispatch('play-segment')" data-start="17:21.56" data-end="17:23.96" data-index="2735">佛告觀世音菩薩</span>
				<span class="punc">：</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="17:24.38" data-end="17:27.64" data-index="2736">未來現在諸世界中</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="17:28.18" data-end="17:31.14" data-index="2737">有天人受天福盡</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="17:31.50" data-end="17:33.76" data-index="2738">有五衰相現</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="17:33.96" data-end="17:37.04" data-index="2739">或有墮於惡道之者</span>
				<span class="punc">。</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="17:37.46" data-end="17:39.02" data-index="2740">如是天人</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="17:39.10" data-end="17:40.74" data-index="2741">若男若女</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="17:41.16" data-end="17:42.88" data-index="2742">當現相時</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="17:43.30" data-end="17:46.54" data-index="2743">或見地藏菩薩形像</span>
				<span class="punc">、</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="17:46.84" data-end="17:49.50" data-index="2744">或聞地藏菩薩名</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="17:49.98" data-end="17:51.58" data-index="2745">一瞻一禮</span>
				<span class="punc">。</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="17:51.88" data-end="17:53.44" data-index="2746">是諸天人</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="17:53.44" data-end="17:54.96" data-index="2747">轉增天福</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="17:55.38" data-end="17:56.92" data-index="2748">受大快樂</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="17:57.36" data-end="18:00.14" data-index="2749">永不墮三惡道報</span>
				<span class="punc">。</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="18:00.60" data-end="18:02.98" data-index="2750">何況見聞菩薩</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="18:03.24" data-end="18:04.80" data-index="2751">以諸香華</span>
				<span class="punc">、</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="18:05.12" data-end="18:05.70" data-index="2752">衣服</span>
				<span class="punc">、</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="18:05.70" data-end="18:06.44" data-index="2753">飲食</span>
				<span class="punc">、</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="18:06.86" data-end="18:07.76" data-index="2754">寶貝</span>
				<span class="punc">、</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="18:07.76" data-end="18:08.42" data-index="2755">瓔珞</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="18:08.76" data-end="18:10.30" data-index="2756">布施供養</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="18:10.46" data-end="18:12.68" data-index="2757">所獲功德福利</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="18:13.00" data-end="18:14.78" data-index="2758">無量無邊</span>
				<span class="punc">。</span>
			</div>
			<div x-show="details" class="details mb-3">
				佛告訴觀世音菩薩說：「在未來和現在的各個世界中，如果有天上的人，天福享受盡了，就要顯現出五種衰相，甚至有的將要墮入惡道去受苦，像這樣的天人，無論是男是女，當出現五衰相時，如果能見到地藏菩薩的形像，或是聽到地藏菩薩的名號，能夠一瞻仰，一禮拜，這些天人，就能轉增他們的天福，受到極大的快樂，而且永不墮入地獄、餓鬼、畜生這三惡道去受苦。更何況見到地藏菩薩，聽到他的名號後，能夠用各種香花、衣服、飲食、寶貝、瓔珞等物布施供養地藏菩薩，那麼，這些天人所獲得的功德福報利益，則是無量無邊的了。
				<hr/>
			</div>
			<div :class="details ? 'bg-secondary text-white' : ''" class="paragraph">
				<span class="word" @@click="$dispatch('play-segment')" data-start="18:15.20" data-end="18:17.18" data-index="2759">復次觀世音</span>
				<span class="punc">：</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="18:17.46" data-end="18:21.10" data-index="2760">若未來現在諸世界中</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="18:21.58" data-end="18:25.76" data-index="2761">六道眾生臨命終時</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="18:26.14" data-end="18:29.02" data-index="2762">得聞地藏菩薩名</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="18:29.36" data-end="18:31.84" data-index="2763">一聲歷耳根者</span>
				<span class="punc">。</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="18:32.18" data-end="18:33.82" data-index="2764">是諸眾生</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="18:34.16" data-end="18:37.00" data-index="2765">永不歷三惡道苦</span>
				<span class="punc">。</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="18:37.38" data-end="18:40.04" data-index="2766">何況臨命終時</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="18:40.26" data-end="18:41.68" data-index="2767">父母眷屬</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="18:42.04" data-end="18:44.96" data-index="2768">將是命終人舍宅</span>
				<span class="punc">、</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="18:44.96" data-end="18:45.78" data-index="2769">財物</span>
				<span class="punc">、</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="18:46.28" data-end="18:47.04" data-index="2770">寶貝</span>
				<span class="punc">、</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="18:47.04" data-end="18:47.58" data-index="2771">衣服</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="18:47.96" data-end="18:50.50" data-index="2772">塑畫地藏形像</span>
				<span class="punc">。</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="18:50.82" data-end="18:53.80" data-index="2773">或使病人未終之時</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="18:54.12" data-end="18:55.76" data-index="2774">眼耳見聞</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="18:56.12" data-end="18:59.14" data-index="2775">知道眷屬將舍宅</span>
				<span class="punc">、</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="18:59.42" data-end="19:05.76" data-index="2776">寶貝等為其自身塑畫地藏菩薩形像</span>
				<span class="punc">。</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="19:06.22" data-end="19:11.38" data-index="2777">是人若是業報合受重病者</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="19:11.66" data-end="19:13.26" data-index="2778">承斯功德</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="19:13.74" data-end="19:15.50" data-index="2779">尋即除愈</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="19:15.80" data-end="19:17.34" data-index="2780">壽命增益</span>
				<span class="punc">。</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="19:17.84" data-end="19:21.04" data-index="2781">是人若是業報命盡</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="19:21.42" data-end="19:24.62" data-index="2782">應有一切罪障業障</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="19:24.96" data-end="19:26.90" data-index="2783">合墮惡趣者</span>
				<span class="punc">。</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="19:27.14" data-end="19:28.84" data-index="2784">承斯功德</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="19:29.10" data-end="19:30.98" data-index="2785">命終之後</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="19:31.16" data-end="19:32.80" data-index="2786">即生人天</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="19:33.18" data-end="19:34.98" data-index="2787">受勝妙樂</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="19:35.40" data-end="19:37.14" data-index="2788">一切罪障</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="19:37.22" data-end="19:38.74" data-index="2789">皆悉消滅</span>
				<span class="punc">。</span>
			</div>
			<div x-show="details" class="details mb-3">
				佛又對觀世音菩薩說：「如有在未來和現在各個世界中，輪迴在六道裏的眾生在臨死時，能聽到地藏菩薩的名號，只要有一聲歷歷分明地入到他的耳中，那麼這個眾生，就永遠不墮入地獄、餓鬼、畜生這三惡道中去受苦。更何況他臨死時，他的父母等眷屬能將臨死的人的所有房屋、財物、珍寶、衣服等變賣了而為他塑畫地藏菩薩形像，廣求供具大舉供養，或者病人在未死的時候，親眼見到、親耳聽到，知道他的眷屬把房屋、寶貝等物變賣，為他塑畫地藏菩薩形像而作供養，這個人如果是本身的業報應當受到重病的，承蒙這種功德之力，他的重病馬上就會痊癒，而且能增加壽命；如果這個人的業報應當命終而死，根據他所有的一切罪障業障，本該墮入地獄等惡道的，也會承蒙這些功德，於死後立即往生到天上，受到最大的快樂，他的一切罪障，也都全部消除。」
				<hr/>
			</div>
			<div :class="details ? 'bg-secondary text-white' : ''" class="paragraph">
				<span class="word" @@click="$dispatch('play-segment')" data-start="19:39.28" data-end="19:41.84" data-index="2790">復次觀世音菩薩</span>
				<span class="punc">：</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="19:42.34" data-end="19:44.16" data-index="2791">若未來世</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="19:44.48" data-end="19:46.38" data-index="2792">有男子女人</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="19:46.84" data-end="19:48.86" data-index="2793">或乳哺時</span>
				<span class="punc">、</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="19:49.14" data-end="19:50.64" data-index="2794">或三歲</span>
				<span class="punc">、</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="19:50.64" data-end="19:51.38" data-index="2795">五歲</span>
				<span class="punc">、</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="19:51.38" data-end="19:52.72" data-index="2796">十歲以下</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="19:53.14" data-end="19:54.64" data-index="2797">亡失父母</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="19:55.04" data-end="19:58.16" data-index="2798">乃及亡失兄弟姐妹</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="19:58.42" data-end="20:00.88" data-index="2799">是人年既長大</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="20:01.28" data-end="20:04.44" data-index="2800">思憶父母及諸眷屬</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="20:04.92" data-end="20:07.48" data-index="2801">不知落在何趣</span>
				<span class="punc">、</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="20:07.48" data-end="20:09.22" data-index="2802">生何世界</span>
				<span class="punc">、</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="20:09.52" data-end="20:11.22" data-index="2803">生何天中</span>
				<span class="punc">？</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="20:11.46" data-end="20:16.20" data-index="2804">是人若能塑畫地藏菩薩形像</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="20:16.54" data-end="20:18.24" data-index="2805">乃至聞名</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="20:18.42" data-end="20:20.04" data-index="2806">一瞻一禮</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="20:20.36" data-end="20:22.24" data-index="2807">一日至七日</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="20:22.56" data-end="20:24.32" data-index="2808">莫退初心</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="20:24.54" data-end="20:26.46" data-index="2809">聞名見形</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="20:26.46" data-end="20:28.14" data-index="2810">瞻禮供養</span>
				<span class="punc">。</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="20:28.40" data-end="20:29.92" data-index="2811">是人眷屬</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="20:30.36" data-end="20:32.10" data-index="2812">假因業故</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="20:32.52" data-end="20:34.10" data-index="2813">墮惡趣者</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="20:34.86" data-end="20:36.58" data-index="2814">計當劫數</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="20:36.80" data-end="20:38.70" data-index="2815">承斯男女</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="20:38.96" data-end="20:40.56" data-index="2816">兄弟姊妹</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="20:40.92" data-end="20:43.40" data-index="2817">塑畫地藏形像</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="20:43.72" data-end="20:45.20" data-index="2818">瞻禮功德</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="20:45.54" data-end="20:47.22" data-index="2819">尋即解脫</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="20:47.60" data-end="20:49.22" data-index="2820">生人天中</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="20:49.54" data-end="20:51.24" data-index="2821">受勝妙樂</span>
				<span class="punc">。</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="20:51.60" data-end="20:53.08" data-index="2822">是人眷屬</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="20:53.62" data-end="20:54.98" data-index="2823">如有福力</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="20:55.48" data-end="20:57.22" data-index="2824">已生人天</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="20:57.36" data-end="20:59.54" data-index="2825">受勝妙樂者</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="20:59.90" data-end="21:01.52" data-index="2826">即承斯功德</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="21:02.06" data-end="21:03.86" data-index="2827">轉增聖因</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="21:03.88" data-end="21:05.48" data-index="2828">受無量樂</span>
				<span class="punc">。</span>
			</div>
			<div x-show="details" class="details mb-3">
				佛又對觀世音菩薩說：「如果未來世界中，有男子女人，或者是在哺乳期間，或者是三歲、五歲、十歲以下，父母死亡，甚至兄弟姐妹死亡，這人長大之後，思念他的父母和各位眷屬，不知道墮落在那一道裏，往生到那個世界之中，生在那一層天道之中。這個人如果能塑畫地藏菩薩形像，或者聽到地藏菩薩的名字，一瞻仰、一禮拜，甚至供養，從一日到七日之間，都不要退轉初心，這人過世的眷屬，假因他們自身的惡業而墮入惡道，本應當在地獄等惡道裏，受若干劫的苦難，承蒙在生人為其父母、兄弟、姐妹而塑畫地藏菩薩形像、瞻仰禮拜菩薩的功德，立即得以解脫地獄罪報的苦難，而往生到天上，受到極大的快樂，這人的家屬如果本有福德，已經往生到了人道或天道中，正在受着極大的快樂，就會仰承這人所做的功德，又轉增聖因，更加享受無邊無盡的安樂。」
				<hr/>
			</div>
			<div :class="details ? 'bg-secondary text-white' : ''" class="paragraph">
				<span class="word" @@click="$dispatch('play-segment')" data-start="21:05.94" data-end="21:08.70" data-index="2829">是人更能三七日中</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="21:08.94" data-end="21:12.46" data-index="2830">一心瞻禮地藏形像</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="21:12.74" data-end="21:14.54" data-index="2831">念其名字</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="21:14.76" data-end="21:16.52" data-index="2832">滿於萬遍</span>
				<span class="punc">。</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="21:16.78" data-end="21:19.64" data-index="2833">當得菩薩現無邊身</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="21:20.06" data-end="21:21.78" data-index="2834">具告是人</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="21:21.78" data-end="21:23.52" data-index="2835">眷屬生界</span>
				<span class="punc">。</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="21:23.82" data-end="21:25.68" data-index="2836">或於夢中</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="21:25.92" data-end="21:28.18" data-index="2837">菩薩現大神力</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="21:28.48" data-end="21:29.88" data-index="2838">親領是人</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="21:30.30" data-end="21:32.08" data-index="2839">於諸世界</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="21:32.38" data-end="21:34.10" data-index="2840">見諸眷屬</span>
				<span class="punc">。</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="21:34.64" data-end="21:39.06" data-index="2841">更能每日念菩薩名千遍</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="21:39.38" data-end="21:40.84" data-index="2842">至於千日</span>
				<span class="punc">。</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="21:41.00" data-end="21:46.40" data-index="2843">是人當得菩薩遣所在土地鬼神</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="21:46.82" data-end="21:48.60" data-index="2844">終身衛護</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="21:48.98" data-end="21:51.48" data-index="2845">現世衣食豐溢</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="21:51.84" data-end="21:53.68" data-index="2846">無諸疾苦</span>
				<span class="punc">。</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="21:54.08" data-end="21:57.44" data-index="2847">乃至橫事不入其門</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="21:57.82" data-end="21:59.46" data-index="2848">何況及身</span>
				<span class="punc">。</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="21:59.68" data-end="22:04.28" data-index="2849">是人畢竟得菩薩摩頂授記</span>
				<span class="punc">。</span>
			</div>
			<div x-show="details" class="details mb-3">
				「這個人如果更能夠在二十一日之內，一心一意瞻仰禮拜地藏菩薩形像，並稱念他的名號，念滿一萬遍，就能看到地藏菩薩現出廣大無邊的身形，來告知這個人死去的親眷們所往生的地方，或者在睡夢中，地藏菩薩現出巨大的神力，親自領着這人，到各個世界中去看望他的各位眷屬。如果這人更能每天誦念地藏菩薩名號一千遍，一直堅持到一千日，這個人就能得到地藏菩薩派遣當地的土地神祇的終生保護，在現世能夠衣食充足有餘，沒有各種疾病，甚至各種災禍橫事從不進入家門，何況殃及到他身上。這人最終可以得到地藏菩薩來為他摩頂授記，修成佛道。」
				<hr/>
			</div>
			<div :class="details ? 'bg-secondary text-white' : ''" class="paragraph">
				<span class="word" @@click="$dispatch('play-segment')" data-start="22:04.80" data-end="22:07.32" data-index="2850">復次觀世音菩薩</span>
				<span class="punc">：</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="22:07.62" data-end="22:12.48" data-index="2851">若未來世有善男子善女人</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="22:12.86" data-end="22:15.40" data-index="2852">欲發廣大慈心</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="22:15.78" data-end="22:18.74" data-index="2853">救度一切眾生者</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="22:19.02" data-end="22:21.88" data-index="2854">欲修無上菩提者</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="22:22.24" data-end="22:24.64" data-index="2855">欲出離三界者</span>
				<span class="punc">。</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="22:24.88" data-end="22:26.28" data-index="2856">是諸人等</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="22:26.62" data-end="22:29.20" data-index="2857">見地藏形像</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="22:29.46" data-end="22:31.26" data-index="2858">及聞名者</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="22:31.58" data-end="22:33.08" data-index="2859">至心歸依</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="22:33.70" data-end="22:35.26" data-index="2860">或以香華</span>
				<span class="punc">、</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="22:35.30" data-end="22:35.82" data-index="2861">衣服</span>
				<span class="punc">、</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="22:36.28" data-end="22:37.18" data-index="2862">寶貝</span>
				<span class="punc">、</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="22:37.18" data-end="22:37.72" data-index="2863">飲食</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="22:38.48" data-end="22:40.14" data-index="2864">供養瞻禮</span>
				<span class="punc">。</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="22:40.44" data-end="22:42.42" data-index="2865">是善男女等</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="22:42.68" data-end="22:44.40" data-index="2866">所願速成</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="22:44.80" data-end="22:46.52" data-index="2867">永無障礙</span>
				<span class="punc">。</span>
			</div>
			<div x-show="details" class="details mb-3">
				佛又對觀世音菩薩說：「如果在未來的世界中，有善男善女，想發廣大的慈悲心來救度一切受苦眾生，想要修得無上智慧覺悟，想要脫離這世俗世界，這些人見了地藏菩薩的形像，以及聽到他的名號，能誠心誠意地歸依地藏菩薩，或者用香花、衣服、寶貝、飲食等物，供養、瞻仰禮拜地藏菩薩，這些善男善女等人所發的心願就能很快實現，永遠沒有障礙了。」
				<hr/>
			</div>
			<div :class="details ? 'bg-secondary text-white' : ''" class="paragraph">
				<span class="word" @@click="$dispatch('play-segment')" data-start="22:46.80" data-end="22:48.78" data-index="2868">復次觀世音</span>
				<span class="punc">：</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="22:49.14" data-end="22:50.96" data-index="2869">若未來世</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="22:50.96" data-end="22:53.72" data-index="2870">有善男子善女人</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="22:54.06" data-end="22:59.10" data-index="2871">欲求現在未來百千萬億等願</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="22:59.42" data-end="23:01.64" data-index="2872">百千萬億等事</span>
				<span class="punc">。</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="23:01.88" data-end="23:04.24" data-index="2873">但當歸依瞻禮</span>
				<span class="punc">、</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="23:04.60" data-end="23:06.48" data-index="2874">供養讚歎</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="23:06.68" data-end="23:09.14" data-index="2875">地藏菩薩形像</span>
				<span class="punc">。</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="23:09.60" data-end="23:12.00" data-index="2876">如是所願所求</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="23:12.42" data-end="23:14.10" data-index="2877">悉皆成就</span>
				<span class="punc">。</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="23:14.80" data-end="23:18.90" data-index="2878">復願地藏菩薩具大慈悲</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="23:19.54" data-end="23:21.20" data-index="2879">永擁護我</span>
				<span class="punc">。</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="23:21.44" data-end="23:23.72" data-index="2880">是人於睡夢中</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="23:24.02" data-end="23:27.14" data-index="2881">即得菩薩摩頂授記</span>
				<span class="punc">。</span>
			</div>
			<div x-show="details" class="details mb-3">
				佛又對觀世音菩薩說：「如果在未來世中，有善男善女，想求實現他現在及以後的千萬億種心願，完成他千萬億件事情，只要他一心歸依、瞻仰禮拜、供養、讚歎地藏菩薩的形像，這樣，他所求的心願和事情，都能實現。假如他又希望地藏菩薩發大慈悲之心，永遠擁戴保護自己，這人就會在睡夢中，便能得到菩薩來給他摩頂授記，告訴他成佛的事。」
				<hr/>
			</div>
			<div :class="details ? 'bg-secondary text-white' : ''" class="paragraph">
				<span class="word" @@click="$dispatch('play-segment')" data-start="23:27.60" data-end="23:30.20" data-index="2882">復次觀世音菩薩</span>
				<span class="punc">：</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="23:30.66" data-end="23:32.42" data-index="2883">若未來世</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="23:32.50" data-end="23:35.18" data-index="2884">善男子善女人</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="23:35.64" data-end="23:37.96" data-index="2885">於大乘經典</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="23:38.38" data-end="23:40.20" data-index="2886">深生珍重</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="23:40.82" data-end="23:42.58" data-index="2887">發不思議心</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="23:42.94" data-end="23:44.62" data-index="2888">欲讀欲誦</span>
				<span class="punc">。</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="23:44.98" data-end="23:48.60" data-index="2889">縱遇明師教視令熟</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="23:48.84" data-end="23:50.48" data-index="2890">旋得旋忘</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="23:50.90" data-end="23:52.40" data-index="2891">動經年月</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="23:52.68" data-end="23:54.08" data-index="2892">不能讀誦</span>
				<span class="punc">。</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="23:54.38" data-end="23:56.58" data-index="2893">是善男子等</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="23:56.80" data-end="23:58.46" data-index="2894">有宿業障</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="23:58.56" data-end="24:00.18" data-index="2895">未得消除</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="24:00.58" data-end="24:03.14" data-index="2896">故於大乘經典</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="24:03.36" data-end="24:05.04" data-index="2897">無讀誦性</span>
				<span class="punc">。</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="24:05.56" data-end="24:06.94" data-index="2898">如是之人</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="24:07.14" data-end="24:09.72" data-index="2899">聞地藏菩薩名</span>
				<span class="punc">、</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="24:10.10" data-end="24:12.60" data-index="2900">見地藏菩薩像</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="24:12.98" data-end="24:16.36" data-index="2901">具以本心恭敬陳白</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="24:16.74" data-end="24:18.38" data-index="2902">更以香華</span>
				<span class="punc">、</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="24:18.60" data-end="24:19.46" data-index="2903">衣服</span>
				<span class="punc">、</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="24:19.46" data-end="24:20.14" data-index="2904">飲食</span>
				<span class="punc">、</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="24:20.44" data-end="24:21.98" data-index="2905">一切玩具</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="24:22.38" data-end="24:23.70" data-index="2906">供養菩薩</span>
				<span class="punc">。</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="24:24.10" data-end="24:26.04" data-index="2907">以淨水一盞</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="24:26.32" data-end="24:29.88" data-index="2908">經一日一夜安菩薩前</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="24:30.28" data-end="24:32.48" data-index="2909">然後合掌請服</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="24:32.96" data-end="24:34.56" data-index="2910">回首向南</span>
				<span class="punc">。</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="24:35.00" data-end="24:36.86" data-index="2911">臨入口時</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="24:37.06" data-end="24:38.88" data-index="2912">至心鄭重</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="24:39.20" data-end="24:40.64" data-index="2913">服水既畢</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="24:41.04" data-end="24:43.10" data-index="2914">慎五辛酒肉</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="24:43.36" data-end="24:44.98" data-index="2915">邪婬妄語</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="24:45.30" data-end="24:46.78" data-index="2916">及諸殺害</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="24:47.28" data-end="24:49.64" data-index="2917">一七日或三七日</span>
				<span class="punc">。</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="24:49.92" data-end="24:52.74" data-index="2918">是善男子善女人</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="24:53.14" data-end="24:54.94" data-index="2919">於睡夢中</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="24:55.34" data-end="24:59.56" data-index="2920">具見地藏菩薩現無邊身</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="24:59.90" data-end="25:01.34" data-index="2921">於是人處</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="25:01.58" data-end="25:03.38" data-index="2922">授灌頂水</span>
				<span class="punc">。</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="25:03.78" data-end="25:05.52" data-index="2923">其人夢覺</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="25:05.80" data-end="25:07.24" data-index="2924">即獲聰明</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="25:07.48" data-end="25:09.20" data-index="2925">應是經典</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="25:09.28" data-end="25:10.86" data-index="2926">一歷耳根</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="25:11.12" data-end="25:12.86" data-index="2927">即當永記</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="25:13.16" data-end="25:16.42" data-index="2928">更不忘失一句一偈</span>
				<span class="punc">。</span>
			</div>
			<div x-show="details" class="details mb-3">
				佛又對觀世音菩薩說：「假如未來世界中，有善男善女，對於大乘佛教經典，能深深產生珍重之心，產生不可思議的毅力，想來讀誦它。雖然也遇到了明師督導，要他熟念熟記，但卻邊讀邊忘，經過許多年月，還不能讀誦。這是因為這個人有往世業障，沒有消除，所以對大乘佛教經典，沒有讀誦的記憶性。像這樣的人，聽到地藏菩薩的名號，見到地藏菩薩的聖像，應該誠懇恭敬地向菩薩陳述，還要用香花、衣服、飲食、各種玩具等物來供養地藏菩薩，並將淨水一杯，安放菩薩座前，經過一日一夜，然後合着雙掌，請求菩薩給予服下，面向南方，臨入口時，要誠心鄭重虔誠；服完水以後，要謹慎小心，不要吃蔥蒜等五種辛辣的蔬菜，不要喝酒吃肉，也不要邪淫和說謊話，更不要殺害各種生靈。這樣經過七日，或二十一日後，這些善男善女在睡夢中，就會見到地藏菩薩現出無邊廣大的身體，在這人住的地方，給他授灌頂水，這人夢醒後，即變得極為聰明，凡是一切經典，只要一經過他的耳根，立即便永遠牢記住了，更不會忘記其中的一句一偈經文。」
				<hr/>
			</div>
			<div :class="details ? 'bg-secondary text-white' : ''" class="paragraph">
				<span class="word" @@click="$dispatch('play-segment')" data-start="25:16.82" data-end="25:19.34" data-index="2929">復次觀世音菩薩</span>
				<span class="punc">：</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="25:19.56" data-end="25:21.44" data-index="2930">若未來世</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="25:21.78" data-end="25:23.38" data-index="2931">有諸人等</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="25:23.68" data-end="25:25.00" data-index="2932">衣食不足</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="25:25.38" data-end="25:27.14" data-index="2933">求者乖願</span>
				<span class="punc">、</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="25:27.60" data-end="25:29.26" data-index="2934">或多病疾</span>
				<span class="punc">、</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="25:29.48" data-end="25:31.30" data-index="2935">或多凶衰</span>
				<span class="punc">、</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="25:31.68" data-end="25:33.08" data-index="2936">家宅不安</span>
				<span class="punc">、</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="25:33.28" data-end="25:34.88" data-index="2937">眷屬分散</span>
				<span class="punc">、</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="25:35.32" data-end="25:37.00" data-index="2938">或諸橫事</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="25:37.32" data-end="25:39.08" data-index="2939">多來忤身</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="25:39.34" data-end="25:40.88" data-index="2940">睡夢之間</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="25:41.24" data-end="25:42.72" data-index="2941">多有驚怖</span>
				<span class="punc">。</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="25:43.22" data-end="25:44.80" data-index="2942">如是人等</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="25:44.90" data-end="25:46.62" data-index="2943">聞地藏名</span>
				<span class="punc">、</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="25:46.96" data-end="25:48.48" data-index="2944">見地藏形</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="25:48.82" data-end="25:50.58" data-index="2945">至心恭敬</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="25:50.94" data-end="25:52.76" data-index="2946">念滿萬遍</span>
				<span class="punc">。</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="25:53.02" data-end="25:55.68" data-index="2947">是諸不如意事</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="25:55.86" data-end="25:57.32" data-index="2948">漸漸消滅</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="25:57.66" data-end="25:58.88" data-index="2949">即得安樂</span>
				<span class="punc">、</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="25:59.30" data-end="26:00.70" data-index="2950">衣食豐溢</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="26:01.14" data-end="26:05.32" data-index="2951">乃至於睡夢中</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="26:01.14" data-end="26:05.32" data-index="2951">悉皆安樂</span>
				<span class="punc">。</span>
			</div>
			<div x-show="details" class="details mb-3">
				佛又對觀世音菩薩說：「假如未來世界中，有各種人，衣食不充足，謀求事情終不能如願，或者多生疾病，或者家中多兇事衰敗，家庭宅第不安寧，親屬分散不能團圓，或者許多災禍經常來纏繞着自身，甚至在睡夢之間，也多有驚慌恐怖。像這樣的人，聽到地藏菩薩的名號，見到地藏菩薩的形像，能誠心恭敬，把地藏名號誦念滿一萬遍，這樣，各種不如意的事，就會漸漸消滅，立即就會得到安樂，衣食豐足有餘，甚至在睡夢中，也都十分安樂，不再驚怖。」
				<hr/>
			</div>
			<div :class="details ? 'bg-secondary text-white' : ''" class="paragraph">
				<span class="word" @@click="$dispatch('play-segment')" data-start="26:05.72" data-end="26:08.36" data-index="2952">復次觀世音菩薩</span>
				<span class="punc">：</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="26:08.72" data-end="26:10.54" data-index="2953">若未來世</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="26:10.80" data-end="26:13.46" data-index="2954">有善男子善女人</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="26:13.82" data-end="26:15.66" data-index="2955">或因治生</span>
				<span class="punc">、</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="26:16.00" data-end="26:17.78" data-index="2956">或因公私</span>
				<span class="punc">、</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="26:18.12" data-end="26:19.74" data-index="2957">或因生死</span>
				<span class="punc">、</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="26:20.04" data-end="26:21.62" data-index="2958">或因急事</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="26:21.84" data-end="26:23.58" data-index="2959">入山林中</span>
				<span class="punc">、</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="26:23.92" data-end="26:25.60" data-index="2960">過渡河海</span>
				<span class="punc">、</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="26:26.04" data-end="26:27.94" data-index="2961">乃及大水</span>
				<span class="punc">、</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="26:28.12" data-end="26:29.78" data-index="2962">或經險道</span>
				<span class="punc">。</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="26:30.16" data-end="26:34.88" data-index="2963">是人先當念地藏菩薩名萬遍</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="26:35.26" data-end="26:36.82" data-index="2964">所過土地</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="26:37.06" data-end="26:38.66" data-index="2965">鬼神衛護</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="26:39.04" data-end="26:40.62" data-index="2966">行住坐臥</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="26:40.90" data-end="26:42.34" data-index="2967">永保安樂</span>
				<span class="punc">。</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="26:42.78" data-end="26:46.24" data-index="2968">乃至逢於虎狼師子</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="26:46.54" data-end="26:47.98" data-index="2969">一切毒害</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="26:48.52" data-end="26:50.00" data-index="2970">不能損之</span>
				<span class="punc">。</span>
			</div>
			<div x-show="details" class="details mb-3">
				佛又對觀世音菩薩說：「假如未來世中，有善男善女，或因為謀生需要，或因公事私事，或因新生兒去報喜或親屬逝世去報喪，或因有急事，進入山林之中，或過河渡海，遇到急流或要經歷極為險惡的道路，這人應當先念誦地藏菩薩名號一萬遍，那麼，他所經過的地方，就有鬼神來保護他，他的行住坐臥，能永保安樂，甚至遇到虎、狼、獅子等一切猛獸為害，也不能損害他的生命。」
				<hr/>
			</div>
			<div :class="details ? 'bg-secondary text-white' : ''" class="paragraph">
				<span class="word" @@click="$dispatch('play-segment')" data-start="26:50.38" data-end="26:52.80" data-index="2971">佛告觀世音菩薩</span>
				<span class="punc">：</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="26:53.28" data-end="26:55.22" data-index="2972">是地藏菩薩</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="26:55.52" data-end="26:59.26" data-index="2973">於閻浮提有大因緣</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="26:59.54" data-end="27:04.74" data-index="2974">若說於諸眾生見聞利益等事</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="27:05.26" data-end="27:06.88" data-index="2975">百千劫中</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="27:07.00" data-end="27:08.78" data-index="2976">說不能盡</span>
				<span class="punc">。</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="27:09.10" data-end="27:11.18" data-index="2977">是故觀世音</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="27:11.52" data-end="27:15.04" data-index="2978">汝以神力流布是經</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="27:15.32" data-end="27:18.10" data-index="2979">令娑婆世界眾生</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="27:18.44" data-end="27:21.86" data-index="2980">百千萬劫永受安樂</span>
				<span class="punc">。</span>
			</div>
			<div x-show="details" class="details mb-3">
				佛告訴觀世音菩薩說：「這個地藏菩薩在閻浮提有很大的因緣，如果要說出各位眾生見地藏形、聞地藏名所獲得的各種利益的事，那是在百千劫那麼長的時間裏，也說不盡的。所以，觀世音，你應當用你的神力來流通這部《地藏本願經》，使娑婆世界的芸芸眾生，在百千萬劫中，永遠享受安樂。」
				<hr/>
			</div>
			<div :class="details ? 'bg-secondary text-white' : ''" class="paragraph">
				<span class="word" @@click="$dispatch('play-segment')" data-start="27:22.28" data-end="27:24.02" data-index="2981">爾時世尊</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="27:24.02" data-end="27:25.58" data-index="2982">而說偈言</span>
				<span class="punc">：</span>
				<blockquote>
					<span class="word" @@click="$dispatch('play-segment')" data-start="27:26.68" data-end="27:29.44" data-index="2983">吾觀地藏威神力</span>
					<span class="punc">，</span>
					<span class="word" @@click="$dispatch('play-segment')" data-start="27:29.88" data-end="27:32.82" data-index="2984">恆河沙劫說難盡</span>
					<span class="punc">，</span>
					<span class="word" @@click="$dispatch('play-segment')" data-start="27:33.62" data-end="27:36.42" data-index="2985">見聞瞻禮一念間</span>
					<span class="punc">，</span>
					<span class="word" @@click="$dispatch('play-segment')" data-start="27:36.84" data-end="27:39.70" data-index="2986">利益人天無量事</span>
					<span class="punc">。</span><br/>
					<span class="word" @@click="$dispatch('play-segment')" data-start="27:40.18" data-end="27:43.02" data-index="2987">若男若女若龍神</span>
					<span class="punc">，</span>
					<span class="word" @@click="$dispatch('play-segment')" data-start="27:43.40" data-end="27:46.10" data-index="2988">報盡應當墮惡道</span>
					<span class="punc">，</span>
					<span class="word" @@click="$dispatch('play-segment')" data-start="27:46.70" data-end="27:49.36" data-index="2989">至心歸依大士身</span>
					<span class="punc">，</span>
					<span class="word" @@click="$dispatch('play-segment')" data-start="27:49.78" data-end="27:53.10" data-index="2990">壽命轉增除罪障</span>
					<span class="punc">。</span><br/>
					<span class="word" @@click="$dispatch('play-segment')" data-start="27:53.60" data-end="27:56.52" data-index="2991">少失父母恩愛者</span>
					<span class="punc">，</span>
					<span class="word" @@click="$dispatch('play-segment')" data-start="27:57.14" data-end="27:59.76" data-index="2992">未知魂神在何趣</span>
					<span class="punc">，</span>
					<span class="word" @@click="$dispatch('play-segment')" data-start="28:00.30" data-end="28:03.06" data-index="2993">兄弟姊妹及諸親</span>
					<span class="punc">，</span>
					<span class="word" @@click="$dispatch('play-segment')" data-start="28:03.46" data-end="28:06.08" data-index="2994">生長以來皆不識</span>
					<span class="punc">。</span><br/>
					<span class="word" @@click="$dispatch('play-segment')" data-start="28:06.76" data-end="28:09.60" data-index="2995">或塑或畫大士身</span>
					<span class="punc">，</span>
					<span class="word" @@click="$dispatch('play-segment')" data-start="28:10.24" data-end="28:13.02" data-index="2996">悲戀瞻禮不暫捨</span>
					<span class="punc">，</span>
					<span class="word" @@click="$dispatch('play-segment')" data-start="28:13.86" data-end="28:16.72" data-index="2997">三七日中念其名</span>
					<span class="punc">，</span>
					<span class="word" @@click="$dispatch('play-segment')" data-start="28:17.14" data-end="28:20.30" data-index="2998">菩薩當現無邊體</span>
					<span class="punc">，</span><br/>
					<span class="word" @@click="$dispatch('play-segment')" data-start="28:20.74" data-end="28:23.40" data-index="2999">示其眷屬所生界</span>
					<span class="punc">，</span>
					<span class="word" @@click="$dispatch('play-segment')" data-start="28:23.94" data-end="28:26.74" data-index="3000">縱墮惡趣尋出離</span>
					<span class="punc">。</span>
					<span class="word" @@click="$dispatch('play-segment')" data-start="28:27.40" data-end="28:30.04" data-index="3001">若能不退是初心</span>
					<span class="punc">，</span>
					<span class="word" @@click="$dispatch('play-segment')" data-start="28:30.60" data-end="28:33.48" data-index="3002">即獲摩頂受聖記</span>
					<span class="punc">。</span><br/>
					<span class="word" @@click="$dispatch('play-segment')" data-start="28:34.02" data-end="28:37.14" data-index="3003">欲修無上菩提者</span>
					<span class="punc">，</span>
					<span class="word" @@click="$dispatch('play-segment')" data-start="28:37.72" data-end="28:40.54" data-index="3004">乃至出離三界苦</span>
					<span class="punc">。</span>
					<span class="word" @@click="$dispatch('play-segment')" data-start="28:41.04" data-end="28:43.90" data-index="3005">是人既發大悲心</span>
					<span class="punc">，</span>
					<span class="word" @@click="$dispatch('play-segment')" data-start="28:44.30" data-end="28:47.30" data-index="3006">先當瞻禮大士像</span>
					<span class="punc">，</span><br/>
					<span class="word" @@click="$dispatch('play-segment')" data-start="28:47.86" data-end="28:50.84" data-index="3007">一切諸願速成就</span>
					<span class="punc">，</span>
					<span class="word" @@click="$dispatch('play-segment')" data-start="28:51.48" data-end="28:54.46" data-index="3008">永無業障能遮止</span>
					<span class="punc">。</span>
					<span class="word" @@click="$dispatch('play-segment')" data-start="28:55.04" data-end="28:58.20" data-index="3009">有人發心念經典</span>
					<span class="punc">，</span>
					<span class="word" @@click="$dispatch('play-segment')" data-start="28:58.66" data-end="29:01.44" data-index="3010">欲度群迷超彼岸</span>
					<span class="punc">，</span><br/>
					<span class="word" @@click="$dispatch('play-segment')" data-start="29:02.04" data-end="29:04.68" data-index="3011">雖立是願不思議</span>
					<span class="punc">，</span>
					<span class="word" @@click="$dispatch('play-segment')" data-start="29:05.04" data-end="29:07.94" data-index="3012">旋讀旋忘多廢失</span>
					<span class="punc">，</span>
					<span class="word" @@click="$dispatch('play-segment')" data-start="29:08.70" data-end="29:11.58" data-index="3013">斯人有業障惑故</span>
					<span class="punc">，</span>
					<span class="word" @@click="$dispatch('play-segment')" data-start="29:12.04" data-end="29:14.82" data-index="3014">於大乘經不能記</span>
					<span class="punc">。</span><br/>
					<span class="word" @@click="$dispatch('play-segment')" data-start="29:15.40" data-end="29:18.10" data-index="3015">供養地藏以香華</span>
					<span class="punc">，</span>
					<span class="word" @@click="$dispatch('play-segment')" data-start="29:18.58" data-end="29:21.24" data-index="3016">衣服飲食諸玩具</span>
					<span class="punc">，</span>
					<span class="word" @@click="$dispatch('play-segment')" data-start="29:21.76" data-end="29:24.66" data-index="3017">以淨水安大士前</span>
					<span class="punc">，</span>
					<span class="word" @@click="$dispatch('play-segment')" data-start="29:25.02" data-end="29:27.48" data-index="3018">一日一夜求服之</span>
					<span class="punc">，</span><br/>
					<span class="word" @@click="$dispatch('play-segment')" data-start="29:28.04" data-end="29:31.34" data-index="3019">發殷重心慎五辛</span>
					<span class="punc">，</span>
					<span class="word" @@click="$dispatch('play-segment')" data-start="29:31.80" data-end="29:34.40" data-index="3020">酒肉邪婬及妄語</span>
					<span class="punc">，</span>
					<span class="word" @@click="$dispatch('play-segment')" data-start="29:34.78" data-end="29:37.70" data-index="3021">三七日內勿殺害</span>
					<span class="punc">，</span>
					<span class="word" @@click="$dispatch('play-segment')" data-start="29:38.14" data-end="29:41.30" data-index="3022">至心思念大士名</span>
					<span class="punc">，</span><br/>
					<span class="word" @@click="$dispatch('play-segment')" data-start="29:41.80" data-end="29:44.88" data-index="3023">即於夢中見無邊</span>
					<span class="punc">，</span>
					<span class="word" @@click="$dispatch('play-segment')" data-start="29:45.24" data-end="29:47.96" data-index="3024">覺來便得利根耳</span>
					<span class="punc">，</span>
					<span class="word" @@click="$dispatch('play-segment')" data-start="29:48.42" data-end="29:51.32" data-index="3025">應是經教歷耳聞</span>
					<span class="punc">，</span>
					<span class="word" @@click="$dispatch('play-segment')" data-start="29:51.74" data-end="29:54.38" data-index="3026">千萬生中永不忘</span>
					<span class="punc">。</span><br/>
					<span class="word" @@click="$dispatch('play-segment')" data-start="29:55.00" data-end="29:57.66" data-index="3027">以是大士不思議</span>
					<span class="punc">，</span>
					<span class="word" @@click="$dispatch('play-segment')" data-start="29:58.18" data-end="30:00.82" data-index="3028">能使斯人獲此慧</span>
					<span class="punc">。</span>
					<span class="word" @@click="$dispatch('play-segment')" data-start="30:01.36" data-end="30:04.24" data-index="3029">貧窮眾生及疾病</span>
					<span class="punc">，</span>
					<span class="word" @@click="$dispatch('play-segment')" data-start="30:04.74" data-end="30:07.52" data-index="3030">家宅凶衰眷屬離</span>
					<span class="punc">。</span><br/>
					<span class="word" @@click="$dispatch('play-segment')" data-start="30:08.06" data-end="30:10.54" data-index="3031">睡夢之中悉不安</span>
					<span class="punc">，</span>
					<span class="word" @@click="$dispatch('play-segment')" data-start="30:11.10" data-end="30:14.00" data-index="3032">求者乖違無稱遂</span>
					<span class="punc">。</span>
					<span class="word" @@click="$dispatch('play-segment')" data-start="30:14.46" data-end="30:17.16" data-index="3033">至心瞻禮地藏像</span>
					<span class="punc">，</span>
					<span class="word" @@click="$dispatch('play-segment')" data-start="30:17.52" data-end="30:20.42" data-index="3034">一切惡事皆消滅</span>
					<span class="punc">。</span><br/>
					<span class="word" @@click="$dispatch('play-segment')" data-start="30:20.98" data-end="30:23.88" data-index="3035">至於夢中盡得安</span>
					<span class="punc">，</span>
					<span class="word" @@click="$dispatch('play-segment')" data-start="30:24.40" data-end="30:27.74" data-index="3036">衣食豐饒神鬼護</span>
					<span class="punc">。</span>
					<span class="word" @@click="$dispatch('play-segment')" data-start="30:28.08" data-end="30:30.84" data-index="3037">欲入山林及渡海</span>
					<span class="punc">，</span>
					<span class="word" @@click="$dispatch('play-segment')" data-start="30:31.40" data-end="30:34.18" data-index="3038">毒惡禽獸及惡人</span>
					<span class="punc">，</span><br/>
					<span class="word" @@click="$dispatch('play-segment')" data-start="30:34.66" data-end="30:37.56" data-index="3039">惡神惡鬼并惡風</span>
					<span class="punc">，</span>
					<span class="word" @@click="$dispatch('play-segment')" data-start="30:37.96" data-end="30:40.88" data-index="3040">一切諸難諸苦惱</span>
					<span class="punc">。</span>
					<span class="word" @@click="$dispatch('play-segment')" data-start="30:41.34" data-end="30:44.38" data-index="3041">但當瞻禮及供養</span>
					<span class="punc">，</span>
					<span class="word" @@click="$dispatch('play-segment')" data-start="30:44.90" data-end="30:47.92" data-index="3042">地藏菩薩大士像</span>
					<span class="punc">，</span><br/>
					<span class="word" @@click="$dispatch('play-segment')" data-start="30:48.42" data-end="30:51.34" data-index="3043">如是山林大海中</span>
					<span class="punc">，</span>
					<span class="word" @@click="$dispatch('play-segment')" data-start="30:51.62" data-end="30:54.50" data-index="3044">應是諸惡皆消滅</span>
					<span class="punc">。</span>
					<span class="word" @@click="$dispatch('play-segment')" data-start="30:55.06" data-end="30:58.04" data-index="3045">觀音至心聽吾說</span>
					<span class="punc">，</span>
					<span class="word" @@click="$dispatch('play-segment')" data-start="30:58.46" data-end="31:01.38" data-index="3046">地藏無盡不思議</span>
					<span class="punc">，</span><br/>
					<span class="word" @@click="$dispatch('play-segment')" data-start="31:01.70" data-end="31:04.24" data-index="3047">百千萬劫說不周</span>
					<span class="punc">，</span>
					<span class="word" @@click="$dispatch('play-segment')" data-start="31:04.76" data-end="31:07.48" data-index="3048">廣宣大士如是力</span>
					<span class="punc">。</span>
					<span class="word" @@click="$dispatch('play-segment')" data-start="31:08.16" data-end="31:11.04" data-index="3049">地藏名字人若聞</span>
					<span class="punc">，</span>
					<span class="word" @@click="$dispatch('play-segment')" data-start="31:11.40" data-end="31:14.34" data-index="3050">乃至見像瞻禮者</span>
					<span class="punc">，</span><br/>
					<span class="word" @@click="$dispatch('play-segment')" data-start="31:14.92" data-end="31:17.66" data-index="3051">香華衣服飲食奉</span>
					<span class="punc">，</span>
					<span class="word" @@click="$dispatch('play-segment')" data-start="31:18.20" data-end="31:21.06" data-index="3052">供養百千受妙樂</span>
					<span class="punc">。</span>
					<span class="word" @@click="$dispatch('play-segment')" data-start="31:21.74" data-end="31:24.70" data-index="3053">若能以此迴法界</span>
					<span class="punc">，</span>
					<span class="word" @@click="$dispatch('play-segment')" data-start="31:25.16" data-end="31:28.04" data-index="3054">畢竟成佛超生死</span>
					<span class="punc">。</span><br/>
					<span class="word" @@click="$dispatch('play-segment')" data-start="31:28.54" data-end="31:31.42" data-index="3055">是故觀音汝當知</span>
					<span class="punc">，</span>
					<span class="word" @@click="$dispatch('play-segment')" data-start="31:31.92" data-end="31:34.84" data-index="3056">普告恆沙諸國土</span>
					<span class="punc">。</span>
				</blockquote>
			</div>
			<div x-show="details" class="details mb-3">
				這時，佛把前面的經文，用簡短的偈文又說了一遍：「
				<blockquote>
					我看這地藏菩薩的大威神力，即使像恆河沙劫那麼長的時間也是難以說完的。見到、聽到、瞻仰禮拜，或只要一念向着地藏菩薩，他就會給人道和天道造出無限的利益。假使有男女或者龍神，他們的福報結束，壽命將完，就要墮入惡道入地獄，往生為餓鬼、畜生，只要他誠心歸依地藏菩薩，他的壽命就會轉增延長，罪障消除。
					<br/>
				</blockquote>
				<blockquote>
					如果有人在年少時就亡故了恩愛的父母，長大後又不知道他們的魂神墮入那一道內，還有他的兄弟姐妹等親人們，自從他長大以來都不認識。只要他塑畫地藏大士的形像，悲戀瞻仰禮拜，一刻也不停歇，在二十一日中念地藏菩薩名號，菩薩就會顯現出無邊的身相，指示他的親屬們所往生的處所，即使已經墮入惡道，仍會得益於他塑畫及瞻禮的功德，不久之後出離惡道；假使能夠持續稱名供養，就可以受到地藏菩薩的摩頂授記。
					<br/>
				</blockquote>
				<blockquote>
					假使有人要修習無上正覺的佛道，乃至於想出離三界火宅之苦，這人既然產生這麼大的慈悲心願，便應當先瞻仰禮拜地藏大士像，這樣，他的一切願望就能很快實現，永遠沒有什麼業障能夠阻止得了。
					<br/>
				</blockquote>
				<blockquote>
					假使有人要發心讀大乘佛經，想超度群迷的眾生到達彼岸，雖然他立下了這不可思議的大願，但他一邊讀經一邊忘記，這是因為該人為業障所迷惑的緣故，所以對大乘佛經不能牢記。他如果能用香花、衣服、飲食、各種器物來供養布施地藏菩薩，把一碗凈水安放在地藏菩薩像前，經過一日一夜，至心鄭重，服下淨水，慎食五辛之物，不飲食酒肉，不邪淫及說謊，在二十一日不要殺害生命，誠心思念地藏菩薩的名號。這樣，他在夢中就會見到地藏菩薩的無邊之身，醒來之後便能得到利根，凡是經過他耳朵聽到的經典，千生萬生中永遠不會忘記。這全是地藏菩薩不可思議的威神之力，能夠使這人獲得這麼大的聰慧。
					<br/>
				</blockquote>
				<blockquote>
					眾生如有貧窮、疾病、家宅不安、親屬離散、睡夢不安所求違願，這些不順利的事，只要能誠心瞻仰禮拜地藏菩薩，一切惡事都能消除，甚至睡夢中也能很安寧，衣食豐足有餘，連鬼神也來保護他。
					<br/>
				</blockquote>
				<blockquote>
					假使要進入山林，或漂洋過海的人，若遇到毒禽、猛獸、惡人、惡神、惡鬼、惡風等，一切災難苦惱，就要瞻仰禮拜和供養地藏菩薩形像，這樣大海山林之中，各種惡物就都會消滅淨盡。
					<br/>
				</blockquote>
				<blockquote>
					觀音你專心聽我說，地藏利益眾生的事多得不可思議，在百千萬劫中也說不完。你應該廣為宣說地藏大士的神通廣大。地藏的名字如果有人聽到了，甚至見到地藏畫像而瞻仰禮拜的人，用香花、衣服、飲食供奉地藏菩薩，此人就能在百千劫中享受到安樂。如果能更以此來迴向法界眾生，那這人就最終能成佛，超脫生死輪迴。
				</blockquote>
				<blockquote>
					所以觀世音菩薩，你要知道，你要廣泛地囑告恆河沙那麼多的國土中眾生，使眾生都知道地藏菩薩這不可思議的功德利益。
				</blockquote>
				」
				<hr/>
			</div>
			<h4 class="toc-item" id="vol3-ch13">
				<span class="word" @@click="$dispatch('play-segment')" data-start="31:36.78" data-end="31:40.18" data-index="3057">囑累人天品第十三</span>
			</h4>
			<div :class="details ? 'bg-secondary text-white' : ''" class="paragraph">
				<span class="word" @@click="$dispatch('play-segment')" data-start="31:42.26" data-end="31:45.48" data-index="3058">爾時世尊舉金色臂</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="31:45.96" data-end="31:49.92" data-index="3059">又摩地藏菩薩摩訶薩頂</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="31:50.58" data-end="31:51.86" data-index="3060">而作是言</span>
				<span class="punc">：</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="31:52.40" data-end="31:54.16" data-index="3061">地藏地藏</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="31:54.64" data-end="31:57.54" data-index="3062">汝之神力不可思議</span>
				<span class="punc">、</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="31:58.16" data-end="32:00.96" data-index="3063">汝之慈悲不可思議</span>
				<span class="punc">、</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="32:01.52" data-end="32:03.96" data-index="3064">汝之智慧不可思議</span>
				<span class="punc">、</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="32:04.64" data-end="32:07.38" data-index="3065">汝之辯才不可思議</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="32:08.14" data-end="32:10.26" data-index="3066">正使十方諸佛</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="32:10.82" data-end="32:15.08" data-index="3067">讚歎宣說汝之不思議事</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="32:15.50" data-end="32:17.22" data-index="3068">千萬劫中</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="32:17.40" data-end="32:18.78" data-index="3069">不能得盡</span>
				<span class="punc">。</span>
			</div>
			<div x-show="details" class="details mb-3">
				這時佛舉起金色的手臂，又摩着地藏菩薩的頭頂，而對他說：「地藏啊地藏，你的神通威力是不可思議的；你的慈悲之心是不可思議的；你的智慧是不可思議的；你的能言善辯也是不可思議的，縱使十方諸佛都來讚嘆宣說你的不可思議事，在千萬劫中也是說不盡的。」
				<hr/>
			</div>
			<div :class="details ? 'bg-secondary text-white' : ''" class="paragraph">
				<span class="word" @@click="$dispatch('play-segment')" data-start="32:19.52" data-end="32:21.16" data-index="3070">地藏地藏</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="32:21.58" data-end="32:24.82" data-index="3071">記吾今日在忉利天中</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="32:25.60" data-end="32:28.44" data-index="3072">於百千萬億不可說</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="32:28.44" data-end="32:29.46" data-index="3073">不可說</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="32:29.46" data-end="32:31.46" data-index="3074">一切諸佛菩薩</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="32:32.06" data-end="32:33.72" data-index="3075">天龍八部</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="32:33.72" data-end="32:35.26" data-index="3076">大會之中</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="32:35.94" data-end="32:39.18" data-index="3077">再以人天諸眾生等</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="32:39.80" data-end="32:41.40" data-index="3078">未出三界</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="32:41.44" data-end="32:43.18" data-index="3079">在火宅中者</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="32:44.02" data-end="32:45.46" data-index="3080">付囑於汝</span>
				<span class="punc">。</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="32:46.02" data-end="32:48.38" data-index="3081">無令是諸眾生</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="32:48.74" data-end="32:50.32" data-index="3082">墮惡趣中</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="32:50.32" data-end="32:51.62" data-index="3083">一日一夜</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="32:52.32" data-end="32:55.12" data-index="3084">何況更落五無間</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="32:55.24" data-end="32:57.00" data-index="3085">及阿鼻地獄</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="32:57.64" data-end="32:59.76" data-index="3086">動經千萬億劫</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="33:00.02" data-end="33:01.60" data-index="3087">無有出期</span>
				<span class="punc">。</span>
			</div>
			<div x-show="details" class="details mb-3">
				「地藏啊地藏，你要記着我今天在忉利天宮，在這百千萬億許多無法用言語說清數目的一切諸佛、菩薩及天龍八部都齊集在法會之中，在這時將未脫離三界火宅中諸人天等眾，都托付給你，不要讓這些眾生墮落到惡道中去，那怕是受一日一夜的苦難，更何況讓他們墮入五無間及阿鼻地獄，受千萬億劫沒有期限的苦楚。」
				<hr/>
			</div>
			<div :class="details ? 'bg-secondary text-white' : ''" class="paragraph">
				<span class="word" @@click="$dispatch('play-segment')" data-start="33:02.12" data-end="33:02.88" data-index="3088">地藏</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="33:03.14" data-end="33:06.18" data-index="3089">是南閻浮提眾生</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="33:06.68" data-end="33:08.42" data-index="3090">志性無定</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="33:08.96" data-end="33:10.36" data-index="3091">習惡者多</span>
				<span class="punc">。</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="33:10.80" data-end="33:12.56" data-index="3092">縱發善心</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="33:12.94" data-end="33:14.48" data-index="3093">須臾即退</span>
				<span class="punc">。</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="33:15.08" data-end="33:16.82" data-index="3094">若遇惡緣</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="33:17.10" data-end="33:18.90" data-index="3095">念念增長</span>
				<span class="punc">。</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="33:19.32" data-end="33:21.00" data-index="3096">以是之故</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="33:21.40" data-end="33:23.08" data-index="3097">吾分是形</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="33:23.60" data-end="33:25.48" data-index="3098">百千億化度</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="33:25.88" data-end="33:29.54" data-index="3099">隨其根性而度脫之</span>
				<span class="punc">。</span>
			</div>
			<div x-show="details" class="details mb-3">
				「地藏，這閻浮提世間的眾生，他們的志願和根性，沒有定數，總是行惡者多，即使能發出善心，也一會便退失；如果遇到惡緣，惡習更會不斷增長。因為這個原因，我分出了百千萬億的身形，隨眾生的根性來度脫他們。」
				<hr/>
			</div>
			<div :class="details ? 'bg-secondary text-white' : ''" class="paragraph">
				<span class="word" @@click="$dispatch('play-segment')" data-start="33:30.16" data-end="33:31.00" data-index="3100">地藏</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="33:31.10" data-end="33:32.92" data-index="3101">吾今殷勤</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="33:33.24" data-end="33:34.72" data-index="3102">以天人眾</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="33:35.16" data-end="33:36.72" data-index="3103">付囑於汝</span>
				<span class="punc">。</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="33:37.22" data-end="33:38.80" data-index="3104">未來之世</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="33:39.02" data-end="33:40.48" data-index="3105">若有天人</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="33:40.88" data-end="33:43.66" data-index="3106">及善男子善女人</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="33:44.02" data-end="33:45.60" data-index="3107">於佛法中</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="33:45.84" data-end="33:47.64" data-index="3108">種少善根</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="33:48.02" data-end="33:49.66" data-index="3109">一毛一塵</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="33:49.82" data-end="33:51.34" data-index="3110">一沙一渧</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="33:51.72" data-end="33:52.98" data-index="3111">汝以道力</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="33:52.98" data-end="33:54.50" data-index="3112">擁護是人</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="33:54.92" data-end="33:56.94" data-index="3113">漸修無上</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="33:56.94" data-end="33:58.62" data-index="3114">勿令退失</span>
				<span class="punc">。</span>
			</div>
			<div x-show="details" class="details mb-3">
				「地藏，我現在至誠懇切地把天上人間的眾生，全都託付給你。在未來的世界中，如果有天上的人，以及人間的善男善女，在佛法中，種下一點善根，那怕是一根毛，一微塵，一粒沙，一滴水那麼小的善根，你都要用你的神通之力擁護這個人，使他漸修無上佛道，並且不要使他退轉。」
				<hr/>
			</div>
			<div :class="details ? 'bg-secondary text-white' : ''" class="paragraph">
				<span class="word" @@click="$dispatch('play-segment')" data-start="33:59.48" data-end="34:01.14" data-index="3115">復次地藏</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="34:01.22" data-end="34:03.00" data-index="3116">未來世中</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="34:03.38" data-end="34:05.04" data-index="3117">若天若人</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="34:05.42" data-end="34:07.32" data-index="3118">隨業報應</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="34:07.68" data-end="34:09.22" data-index="3119">落在惡趣</span>
				<span class="punc">。</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="34:09.56" data-end="34:11.18" data-index="3120">臨墮趣中</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="34:11.62" data-end="34:13.28" data-index="3121">或至門首</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="34:13.64" data-end="34:15.18" data-index="3122">是諸眾生</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="34:15.64" data-end="34:18.52" data-index="3123">若能念得一佛名</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="34:18.52" data-end="34:20.24" data-index="3124">一菩薩名</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="34:20.54" data-end="34:23.86" data-index="3125">一句一偈大乘經典</span>
				<span class="punc">。</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="34:24.28" data-end="34:25.94" data-index="3126">是諸眾生</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="34:26.34" data-end="34:27.94" data-index="3127">汝以神力</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="34:28.18" data-end="34:29.84" data-index="3128">方便救拔</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="34:30.28" data-end="34:31.88" data-index="3129">於是人所</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="34:31.88" data-end="34:33.72" data-index="3130">現無邊身</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="34:34.06" data-end="34:35.50" data-index="3131">為碎地獄</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="34:36.06" data-end="34:37.74" data-index="3132">遣令生天</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="34:38.02" data-end="34:39.60" data-index="3133">受勝妙樂</span>
				<span class="punc">。</span>
			</div>
			<div x-show="details" class="details mb-3">
				佛又對地藏菩薩說：「在未來世界中，假使有天人或凡人，因自身所作的業而受到各種報應。如果要落入惡道，臨墮落之際或已到臨面前，這些眾生若能念一佛名，一菩薩名，念誦一句一偈大乘經典，這些眾生，你要用你的威神力設法救拔他們，在這些人所身之處，現出無邊之身，為他們粉碎地獄，遣令他們往生到天上，享受到最大的安樂。」
				<hr/>
			</div>
			<div :class="details ? 'bg-secondary text-white' : ''" class="paragraph">
				<span class="word" @@click="$dispatch('play-segment')" data-start="34:40.26" data-end="34:41.90" data-index="3134">爾時世尊</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="34:41.90" data-end="34:43.54" data-index="3135">而說偈言</span>
				<span class="punc">：</span>
				<blockquote>
					<span class="word" @@click="$dispatch('play-segment')" data-start="34:44.12" data-end="34:47.18" data-index="3136">現在未來天人眾</span>
					<span class="punc">，</span>
					<span class="word" @@click="$dispatch('play-segment')" data-start="34:47.68" data-end="34:50.32" data-index="3137">吾今慇懃付囑汝</span>
					<span class="punc">，</span>
					<span class="word" @@click="$dispatch('play-segment')" data-start="34:50.90" data-end="34:53.74" data-index="3138">以大神通方便度</span>
					<span class="punc">，</span>
					<span class="word" @@click="$dispatch('play-segment')" data-start="34:54.34" data-end="34:56.80" data-index="3139">勿令墮在諸惡趣</span>
					<span class="punc">。</span>
				</blockquote>
			</div>
			<div x-show="details" class="details mb-3">
				這時，佛又說出以下偈言：「現在未來的天人眾生，我今天殷勤託付給你，你要以大神通力設法度脫他們，不要讓他們墮入惡道受痛苦。」
				<hr/>
			</div>
			<div :class="details ? 'bg-secondary text-white' : ''" class="paragraph">
				<span class="word" @@click="$dispatch('play-segment')" data-start="34:57.58" data-end="35:00.90" data-index="3140">爾時地藏菩薩摩訶薩</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="35:01.40" data-end="35:04.24" data-index="3141">胡跪合掌白佛言</span>
				<span class="punc">：</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="35:04.72" data-end="35:05.66" data-index="3142">世尊</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="35:05.82" data-end="35:09.18" data-index="3143">唯願世尊不以為慮</span>
				<span class="punc">。</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="35:09.52" data-end="35:11.26" data-index="3144">未來世中</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="35:11.26" data-end="35:14.58" data-index="3145">若有善男子善女人</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="35:15.04" data-end="35:16.58" data-index="3146">於佛法中</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="35:16.86" data-end="35:18.52" data-index="3147">一念恭敬</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="35:18.80" data-end="35:21.18" data-index="3148">我亦百千方便</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="35:21.36" data-end="35:22.98" data-index="3149">度脫是人</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="35:22.98" data-end="35:26.54" data-index="3150">於生死中速得解脫</span>
				<span class="punc">。</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="35:27.06" data-end="35:29.58" data-index="3151">何況聞諸善事</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="35:30.02" data-end="35:31.62" data-index="3152">念念修行</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="35:32.02" data-end="35:36.20" data-index="3153">自然於無上道永不退轉</span>
				<span class="punc">。</span>
			</div>
			<div x-show="details" class="details mb-3">
				這時地藏大菩薩右膝著地，跪拜合掌對佛說：「世尊，請你不要掛慮這件事情。在未來世界中，如果有善男善女，在佛法中，只要能產生一念的恭敬之心，我也要用百千種方法，度脫這些人，讓他們在生死輪迴中，儘快得到解脫，何況見到那些做了許多善事，一心一意修行的眾生，我自然讓他們在無上佛道永不退轉初心。」
				<hr/>
			</div>
			<div :class="details ? 'bg-secondary text-white' : ''" class="paragraph">
				<span class="word" @@click="$dispatch('play-segment')" data-start="35:36.62" data-end="35:38.48" data-index="3154">說是語時</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="35:38.72" data-end="35:41.04" data-index="3155">會中有一菩薩</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="35:41.46" data-end="35:43.26" data-index="3156">名虛空藏</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="35:43.62" data-end="35:44.70" data-index="3157">白佛言</span>
				<span class="punc">：</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="35:44.92" data-end="35:45.88" data-index="3158">世尊</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="35:46.16" data-end="35:48.14" data-index="3159">我自至忉利</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="35:48.36" data-end="35:52.22" data-index="3160">聞於如來讚歎地藏菩薩</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="35:52.72" data-end="35:54.34" data-index="3161">威神勢力</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="35:54.56" data-end="35:55.92" data-index="3162">不可思議</span>
				<span class="punc">。</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="35:56.40" data-end="35:58.10" data-index="3163">未來世中</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="35:58.34" data-end="36:01.84" data-index="3164">若有善男子善女人</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="36:02.22" data-end="36:04.30" data-index="3165">乃及一切天龍</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="36:04.60" data-end="36:08.52" data-index="3166">聞此經典及地藏名字</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="36:08.94" data-end="36:11.06" data-index="3167">或瞻禮形像</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="36:11.26" data-end="36:12.96" data-index="3168">得幾種福利</span>
				<span class="punc">？</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="36:13.14" data-end="36:14.88" data-index="3169">唯願世尊</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="36:15.12" data-end="36:18.58" data-index="3170">為未來現在一切眾等</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="36:18.92" data-end="36:20.72" data-index="3171">略而說之</span>
				<span class="punc">。</span>
			</div>
			<div x-show="details" class="details mb-3">
				就在這時，法會中有一位菩薩，名叫虛空藏，他對佛說：「世尊，我自從到了忉利天宮，就聽見如來讚歎地藏菩薩，以及他的威神勢力那麼不可思議。在未來世中，如果有善男善女，甚至一切天龍，聽到這部經典及地藏菩薩的名字，或瞻仰禮拜他的聖像，能得到那幾種福利？懇請世尊，為未來現在一切眾生約略地說一說。」
				<hr/>
			</div>
			<div :class="details ? 'bg-secondary text-white' : ''" class="paragraph">
				<span class="word" @@click="$dispatch('play-segment')" data-start="36:21.22" data-end="36:23.78" data-index="3172">佛告虛空藏菩薩</span>
				<span class="punc">：</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="36:24.26" data-end="36:25.72" data-index="3173">諦聽諦聽</span>
				<span class="punc">！</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="36:26.08" data-end="36:29.36" data-index="3174">吾當為汝分別說之</span>
				<span class="punc">。</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="36:29.72" data-end="36:31.42" data-index="3175">若未來世</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="36:31.68" data-end="36:34.56" data-index="3176">有善男子善女人</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="36:34.92" data-end="36:37.08" data-index="3177">見地藏形像</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="36:37.44" data-end="36:39.14" data-index="3178">及聞此經</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="36:39.42" data-end="36:40.82" data-index="3179">乃至讀誦</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="36:41.12" data-end="36:42.58" data-index="3180">香華飲食</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="36:42.96" data-end="36:44.54" data-index="3181">衣服珍寶</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="36:44.92" data-end="36:46.46" data-index="3182">布施供養</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="36:46.98" data-end="36:48.46" data-index="3183">讚歎瞻禮</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="36:48.76" data-end="36:51.16" data-index="3184">得二十八種利益</span>
				<span class="punc">：</span>
				<blockquote>
					<span class="word" @@click="$dispatch('play-segment')" data-start="36:51.66" data-end="36:52.50" data-index="3185">一者</span>
					<span class="punc">、</span>
					<span class="word" @@click="$dispatch('play-segment')" data-start="36:52.50" data-end="36:54.22" data-index="3186">天龍護念</span>
					<span class="punc">，</span>
					<span class="word" @@click="$dispatch('play-segment')" data-start="36:54.42" data-end="36:55.18" data-index="3187">二者</span>
					<span class="punc">、</span>
					<span class="word" @@click="$dispatch('play-segment')" data-start="36:55.28" data-end="36:57.12" data-index="3188">善果日增</span>
					<span class="punc">，</span><br/>
					<span class="word" @@click="$dispatch('play-segment')" data-start="36:57.40" data-end="36:58.16" data-index="3189">三者</span>
					<span class="punc">、</span>
					<span class="word" @@click="$dispatch('play-segment')" data-start="36:58.40" data-end="37:00.06" data-index="3190">集聖上因</span>
					<span class="punc">，</span>
					<span class="word" @@click="$dispatch('play-segment')" data-start="37:00.20" data-end="37:01.02" data-index="3191">四者</span>
					<span class="punc">、</span>
					<span class="word" @@click="$dispatch('play-segment')" data-start="37:01.28" data-end="37:02.90" data-index="3192">菩提不退</span>
					<span class="punc">，</span><br/>
					<span class="word" @@click="$dispatch('play-segment')" data-start="37:03.12" data-end="37:03.80" data-index="3193">五者</span>
					<span class="punc">、</span>
					<span class="word" @@click="$dispatch('play-segment')" data-start="37:04.04" data-end="37:05.60" data-index="3194">衣食豐足</span>
					<span class="punc">，</span>
					<span class="word" @@click="$dispatch('play-segment')" data-start="37:06.08" data-end="37:06.80" data-index="3195">六者</span>
					<span class="punc">、</span>
					<span class="word" @@click="$dispatch('play-segment')" data-start="37:06.98" data-end="37:08.76" data-index="3196">疾疫不臨</span>
					<span class="punc">，</span><br/>
					<span class="word" @@click="$dispatch('play-segment')" data-start="37:09.04" data-end="37:09.76" data-index="3197">七者</span>
					<span class="punc">、</span>
					<span class="word" @@click="$dispatch('play-segment')" data-start="37:09.94" data-end="37:11.66" data-index="3198">離水火災</span>
					<span class="punc">，</span>
					<span class="word" @@click="$dispatch('play-segment')" data-start="37:11.98" data-end="37:12.80" data-index="3199">八者</span>
					<span class="punc">、</span>
					<span class="word" @@click="$dispatch('play-segment')" data-start="37:13.10" data-end="37:14.66" data-index="3200">無盜賊厄</span>
					<span class="punc">，</span><br/>
					<span class="word" @@click="$dispatch('play-segment')" data-start="37:15.22" data-end="37:16.00" data-index="3201">九者</span>
					<span class="punc">、</span>
					<span class="word" @@click="$dispatch('play-segment')" data-start="37:16.00" data-end="37:17.88" data-index="3202">人見欽敬</span>
					<span class="punc">，</span>
					<span class="word" @@click="$dispatch('play-segment')" data-start="37:18.02" data-end="37:18.96" data-index="3203">十者</span>
					<span class="punc">、</span>
					<span class="word" @@click="$dispatch('play-segment')" data-start="37:18.96" data-end="37:20.82" data-index="3204">神鬼助持</span>
					<span class="punc">，</span><br/>
					<span class="word" @@click="$dispatch('play-segment')" data-start="37:21.10" data-end="37:22.12" data-index="3205">十一者</span>
					<span class="punc">、</span>
					<span class="word" @@click="$dispatch('play-segment')" data-start="37:22.26" data-end="37:23.86" data-index="3206">女轉男身</span>
					<span class="punc">，</span>
					<span class="word" @@click="$dispatch('play-segment')" data-start="37:24.12" data-end="37:25.18" data-index="3207">十二者</span>
					<span class="punc">、</span>
					<span class="word" @@click="$dispatch('play-segment')" data-start="37:25.32" data-end="37:27.04" data-index="3208">為王臣女</span>
					<span class="punc">，</span><br/>
					<span class="word" @@click="$dispatch('play-segment')" data-start="37:27.34" data-end="37:28.32" data-index="3209">十三者</span>
					<span class="punc">、</span>
					<span class="word" @@click="$dispatch('play-segment')" data-start="37:28.32" data-end="37:29.98" data-index="3210">端正相好</span>
					<span class="punc">，</span>
					<span class="word" @@click="$dispatch('play-segment')" data-start="37:30.30" data-end="37:31.46" data-index="3211">十四者</span>
					<span class="punc">、</span>
					<span class="word" @@click="$dispatch('play-segment')" data-start="37:31.54" data-end="37:33.12" data-index="3212">多生天上</span>
					<span class="punc">。</span><br/>
					<span class="word" @@click="$dispatch('play-segment')" data-start="37:33.48" data-end="37:34.50" data-index="3213">十五者</span>
					<span class="punc">、</span>
					<span class="word" @@click="$dispatch('play-segment')" data-start="37:34.54" data-end="37:36.04" data-index="3214">或為帝王</span>
					<span class="punc">，</span>
					<span class="word" @@click="$dispatch('play-segment')" data-start="37:36.42" data-end="37:37.32" data-index="3215">十六者</span>
					<span class="punc">、</span>
					<span class="word" @@click="$dispatch('play-segment')" data-start="37:37.56" data-end="37:39.20" data-index="3216">宿智命通</span>
					<span class="punc">，</span><br/>
					<span class="word" @@click="$dispatch('play-segment')" data-start="37:39.44" data-end="37:40.30" data-index="3217">十七者</span>
					<span class="punc">、</span>
					<span class="word" @@click="$dispatch('play-segment')" data-start="37:40.66" data-end="37:42.22" data-index="3218">有求皆從</span>
					<span class="punc">，</span>
					<span class="word" @@click="$dispatch('play-segment')" data-start="37:42.66" data-end="37:43.64" data-index="3219">十八者</span>
					<span class="punc">、</span>
					<span class="word" @@click="$dispatch('play-segment')" data-start="37:43.86" data-end="37:45.16" data-index="3220">眷屬歡樂</span>
					<span class="punc">，</span><br/>
					<span class="word" @@click="$dispatch('play-segment')" data-start="37:45.60" data-end="37:46.60" data-index="3221">十九者</span>
					<span class="punc">、</span>
					<span class="word" @@click="$dispatch('play-segment')" data-start="37:46.90" data-end="37:48.50" data-index="3222">諸橫消滅</span>
					<span class="punc">，</span>
					<span class="word" @@click="$dispatch('play-segment')" data-start="37:48.74" data-end="37:49.62" data-index="3223">二十者</span>
					<span class="punc">、</span>
					<span class="word" @@click="$dispatch('play-segment')" data-start="37:49.80" data-end="37:51.44" data-index="3224">業道永除</span>
					<span class="punc">，</span><br/>
					<span class="word" @@click="$dispatch('play-segment')" data-start="37:51.76" data-end="37:52.98" data-index="3225">二十一者</span>
					<span class="punc">、</span>
					<span class="word" @@click="$dispatch('play-segment')" data-start="37:53.16" data-end="37:54.72" data-index="3226">去處盡通</span>
					<span class="punc">，</span>
					<span class="word" @@click="$dispatch('play-segment')" data-start="37:55.16" data-end="37:56.30" data-index="3227">二十二者</span>
					<span class="punc">、</span>
					<span class="word" @@click="$dispatch('play-segment')" data-start="37:56.30" data-end="37:57.76" data-index="3228">夜夢安樂</span>
					<span class="punc">，</span><br/>
					<span class="word" @@click="$dispatch('play-segment')" data-start="37:58.18" data-end="37:59.64" data-index="3229">二十三者</span>
					<span class="punc">、</span>
					<span class="word" @@click="$dispatch('play-segment')" data-start="37:59.64" data-end="38:01.26" data-index="3230">先亡離苦</span>
					<span class="punc">，</span>
					<span class="word" @@click="$dispatch('play-segment')" data-start="38:01.68" data-end="38:02.86" data-index="3231">二十四者</span>
					<span class="punc">、</span>
					<span class="word" @@click="$dispatch('play-segment')" data-start="38:02.94" data-end="38:04.42" data-index="3232">宿福受生</span>
					<span class="punc">，</span><br/>
					<span class="word" @@click="$dispatch('play-segment')" data-start="38:05.14" data-end="38:06.44" data-index="3233">二十五者</span>
					<span class="punc">、</span>
					<span class="word" @@click="$dispatch('play-segment')" data-start="38:06.80" data-end="38:08.44" data-index="3234">諸聖讚歎</span>
					<span class="punc">，</span>
					<span class="word" @@click="$dispatch('play-segment')" data-start="38:08.86" data-end="38:10.08" data-index="3235">二十六者</span>
					<span class="punc">、</span>
					<span class="word" @@click="$dispatch('play-segment')" data-start="38:10.24" data-end="38:11.94" data-index="3236">聰明利根</span>
					<span class="punc">，</span><br/>
					<span class="word" @@click="$dispatch('play-segment')" data-start="38:12.34" data-end="38:13.52" data-index="3237">二十七者</span>
					<span class="punc">、</span>
					<span class="word" @@click="$dispatch('play-segment')" data-start="38:13.92" data-end="38:15.72" data-index="3238">饒慈愍心</span>
					<span class="punc">，</span>
					<span class="word" @@click="$dispatch('play-segment')" data-start="38:16.08" data-end="38:17.46" data-index="3239">二十八者</span>
					<span class="punc">、</span>
					<span class="word" @@click="$dispatch('play-segment')" data-start="38:17.64" data-end="38:19.14" data-index="3240">畢竟成佛</span>
					<span class="punc">。</span>
				</blockquote>
			</div>
			<div x-show="details" class="details mb-3">
				佛告訴虛空藏菩薩：「你們認真聽着，我現在為你一一地說。如果未來世中，有善男善女，看見地藏菩薩形像，以及聽聞這部經典，甚至讀誦這部經典，用香花、飲食、衣服、珍寶布施供養、讚歎、瞻仰禮拜地藏菩薩，那麼這種人就會得二十八種利益：
				<blockquote>
					第一，有各種天龍的保護；<br/>
					第二，他的善果每天增加；<br/>
					第三，能積累修無上佛道的善因緣；<br/>
					第四，覺悟智慧之心永遠不會減退；<br/>
					第五，他的衣食豐足有餘；<br/>
					第六，他永不生疾病；<br/>
					第七，永遠脫離水火之災；<br/>
					第八，不會遇到盜賊厄難；<br/>
					第九，別人見了會欽敬他；<br/>
					第十，得到鬼神幫助；<br/>
					第十一，如果人厭惡自身為女則會在下世往生為男；<br/>
					第十二，願為女身者，可以往生為國王、大臣之女；<br/>
					第十三，相貌端正漂亮；<br/>
					第十四，多轉生到天上；<br/>
					第十五，或者能轉生為帝王；<br/>
					第十六，能知道前世宿命之事；<br/>
					第十七，有求都能如願；<br/>
					第十八，家庭親屬歡樂和睦；<br/>
					第十九，各種災禍消除；<br/>
					第二十，永遠免除墮入惡道受苦；<br/>
					第二十一，所到之處都順利暢通無阻礙；<br/>
					第二十二，夜夢之中得安寧；<br/>
					第二十三，逝去眷屬脫離惡道苦難；<br/>
					第二十四，前世所積功德今生能夠受用；<br/>
					第二十五，得到各位佛、菩薩聖賢的讚歎；<br/>
					第二十六，能具有聰明的利根；<br/>
					第二十七，富有慈悲憐憫之心；<br/>
					第二十八，最終成佛。
				</blockquote>
				」
				<hr/>
			</div>
			<div :class="details ? 'bg-secondary text-white' : ''" class="paragraph">
				<span class="word" @@click="$dispatch('play-segment')" data-start="38:19.72" data-end="38:22.38" data-index="3241">復次虛空藏菩薩</span>
				<span class="punc">：</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="38:22.80" data-end="38:24.98" data-index="3242">若現在未來</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="38:25.00" data-end="38:26.44" data-index="3243">天龍鬼神</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="38:26.78" data-end="38:28.48" data-index="3244">聞地藏名</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="38:28.82" data-end="38:30.66" data-index="3245">禮地藏形</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="38:31.28" data-end="38:34.52" data-index="3246">或聞地藏本願事行</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="38:34.88" data-end="38:36.42" data-index="3247">讚歎瞻禮</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="38:36.92" data-end="38:38.52" data-index="3248">得七種利益</span>
				<span class="punc">：</span>
				<blockquote>
					<span class="word" @@click="$dispatch('play-segment')" data-start="38:38.96" data-end="38:39.68" data-index="3249">一者</span>
					<span class="punc">、</span>
					<span class="word" @@click="$dispatch('play-segment')" data-start="38:39.88" data-end="38:41.52" data-index="3250">速超聖地</span>
					<span class="punc">，</span>
					<span class="word" @@click="$dispatch('play-segment')" data-start="38:41.78" data-end="38:42.62" data-index="3251">二者</span>
					<span class="punc">、</span>
					<span class="word" @@click="$dispatch('play-segment')" data-start="38:42.70" data-end="38:44.18" data-index="3252">惡業消滅</span>
					<span class="punc">，</span><br/>
					<span class="word" @@click="$dispatch('play-segment')" data-start="38:44.40" data-end="38:45.32" data-index="3253">三者</span>
					<span class="punc">、</span>
					<span class="word" @@click="$dispatch('play-segment')" data-start="38:45.50" data-end="38:47.16" data-index="3254">諸佛護臨</span>
					<span class="punc">，</span>
					<span class="word" @@click="$dispatch('play-segment')" data-start="38:47.34" data-end="38:48.12" data-index="3255">四者</span>
					<span class="punc">、</span>
					<span class="word" @@click="$dispatch('play-segment')" data-start="38:48.20" data-end="38:49.74" data-index="3256">菩提不退</span>
					<span class="punc">，</span><br/>
					<span class="word" @@click="$dispatch('play-segment')" data-start="38:50.04" data-end="38:50.82" data-index="3257">五者</span>
					<span class="punc">、</span>
					<span class="word" @@click="$dispatch('play-segment')" data-start="38:50.82" data-end="38:52.24" data-index="3258">增長本力</span>
					<span class="punc">，</span>
					<span class="word" @@click="$dispatch('play-segment')" data-start="38:52.60" data-end="38:53.40" data-index="3259">六者</span>
					<span class="punc">、</span>
					<span class="word" @@click="$dispatch('play-segment')" data-start="38:53.50" data-end="38:55.30" data-index="3260">宿命皆通</span>
					<span class="punc">，</span><br/>
					<span class="word" @@click="$dispatch('play-segment')" data-start="38:55.46" data-end="38:56.16" data-index="3261">七者</span>
					<span class="punc">、</span>
					<span class="word" @@click="$dispatch('play-segment')" data-start="38:56.42" data-end="38:57.94" data-index="3262">畢竟成佛</span>
					<span class="punc">。</span>
				</blockquote>
			</div>
			<div x-show="details" class="details mb-3">
				佛又對虛空藏菩薩說：「如果現在、未來世中的一切天龍鬼神，聽到地藏菩薩的名號，禮拜地藏菩薩，或聽到地藏發願度脫眾生的事蹟後，能讚歎、瞻仰禮拜地藏菩薩，那麼這些天龍鬼神就會得到七種利益：
				<blockquote>
					第一，能迅速證得果位；<br/>
					第二，惡業就會消除；<br/>
					第三，受到各位佛的降臨護念；<br/>
					第四，成佛的心堅固不退；<br/>
					第五，能增本有的力量；<br/>
					第六，能知道前世所做的一切事情；<br/>
					第七，最終成佛。
				</blockquote>
				」
				<hr/>
			</div>
			<div :class="details ? 'bg-secondary text-white' : ''" class="paragraph">
				<span class="word" @@click="$dispatch('play-segment')" data-start="38:58.68" data-end="38:59.40" data-index="3263">爾時</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="38:59.50" data-end="39:01.76" data-index="3264">十方一切諸來</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="39:01.98" data-end="39:05.44" data-index="3265">不可說不可說諸佛如來</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="39:05.76" data-end="39:08.98" data-index="3266">及大菩薩天龍八部</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="39:09.30" data-end="39:11.32" data-index="3267">聞釋迦牟尼佛</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="39:11.82" data-end="39:15.16" data-index="3268">稱揚讚歎地藏菩薩</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="39:15.58" data-end="39:16.90" data-index="3269">大威神力</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="39:17.26" data-end="39:18.70" data-index="3270">不可思議</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="39:18.94" data-end="39:20.52" data-index="3271">歎未曾有</span>
				<span class="punc">。</span>
			</div>
			<div x-show="details" class="details mb-3">
				這時，各方一切來參加法會的無量諸佛如來，以及大菩薩、天龍八部等，聽了釋迦牟尼佛稱讚宣揚地藏菩薩大威神力，實在不可思議，讚歎從古到今從未有過。
				<hr/>
			</div>
			<div :class="details ? 'bg-secondary text-white' : ''" class="paragraph">
				<span class="word" @@click="$dispatch('play-segment')" data-start="39:21.24" data-end="39:23.48" data-index="3272">是時</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="39:21.24" data-end="39:23.48" data-index="3272">忉利天</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="39:23.82" data-end="39:25.88" data-index="3273">雨無量香華</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="39:26.34" data-end="39:28.04" data-index="3274">天衣珠瓔</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="39:28.42" data-end="39:31.00" data-index="3275">供養釋迦牟尼佛</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="39:31.36" data-end="39:33.76" data-index="3276">及地藏菩薩已</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="39:34.12" data-end="39:35.72" data-index="3277">一切眾會</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="39:36.14" data-end="39:37.70" data-index="3278">俱復瞻禮</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="39:37.88" data-end="39:39.36" data-index="3279">合掌而退</span>
				<span class="punc">。</span>
			</div>
			<div x-show="details" class="details mb-3">
				這時，忉利天飄下許多香花、天衣，以及名貴的珠寶瓔珞，來供養釋迦牟尼佛及地藏菩薩。一切參加法會的大眾，都一再瞻仰禮拜釋迦牟尼佛和地藏菩薩，恭敬合掌而退。
				<hr/>
			</div>
			<div class="paragraph">
				<span class="word"><strong>讚</strong></span><br/>
				<span class="word" @@click="$dispatch('play-segment')" data-start="39:40.58" data-end="39:42.30" data-index="3280">地藏本誓</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="39:42.64" data-end="39:44.38" data-index="3281">校量經因</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="39:44.92" data-end="39:48.22" data-index="3282">癃殘瘖瘂是前生</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="39:48.62" data-end="39:50.84" data-index="3283">今世諷大乘</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="39:51.36" data-end="39:52.98" data-index="3284">福利無窮</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="39:53.24" data-end="39:55.00" data-index="3285">決定寶蓮生</span>
				<span class="punc">。</span>
			</div>
			<div class="paragraph">
				<span class="word" @@click="$dispatch('play-segment')" data-start="39:55.78" data-end="40:04.66" data-index="3286"><strong>南無常住十方僧 <sub>(三稱)</sub></strong></span>
			</div>
			<div class="paragraph">
				<h2>
					<span class="word" @@click="$dispatch('play-segment')" data-start="40:05.42" data-end="40:09.08" data-index="3287">地藏菩薩本願經卷下</span>
				</h2>
			</div>
			<div class="d-flex mb-3">
				<div class="me-auto w-50">
					<a href="{{ $page->baseUrl.'/ksitigarbha-vows-vol2' }}" class="btn btn-link border p-2 me-3 w-100 h-100 text-decoration-none">
						<div class="d-flex h-100 justify-content-between align-items-center">
							<div class="d-flex">
								<i class="fas fa-arrow-circle-left fs-1"></i>
							</div>
							<div class="d-flex w-100 justify-content-center">
								<span class="ms-2 text-start text-truncate">地藏菩薩本願經卷中</span>
							</div>
						</div>
					</a>
				</div>
				<div class="ms-auto me-3 w-50">
					<a href="{{ $page->baseUrl.'/ksitigarbha-vows-practices' }}" class="btn btn-link border p-2 ms-3 w-100 h-100 text-decoration-none">
						<div class="d-flex h-100 justify-content-between align-items-center">
							<div class="d-flex w-100 justify-content-center">
								<span class="me-2 text-start text-truncate">地藏經修行概要</span>
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
			<source src="{{ $page->baseUrl.'/assets/audios/ksitigarbha-vows-vol3.mp3' }}" type="audio/mp3" />
		</x-audio-control>
	</div>
</div>
@endsection