@extends('_layouts.main')

@section('title')
<title>占察善惡業報經卷下</title>
@endsection

@push('styles')
<style>
	body {
		background-image: url('{{ $page->baseUrl.'/assets/images/background-mantra.png' }}')；
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
				x-data="{currItems: {vol2: true}}"
				class="sticky-top"
				textsize-supported
				trans-supported
			>
				<ul class="nav navbar-nav">
					<li>
						<a class="nav-link text-nowrap" href="/ksitigarbha-divination-vol1">占察善惡業報經卷上</a>
					</li>
					<li>
						<a @@click="jumpTo('vol2')" :class="{active: currItems['vol2'] && true}" class="nav-link text-nowrap" href="#vol2">占察善惡業報經卷下</a>
					</li>
				</ul>
				<x-slot:transCtrlSubtitle>
					<small class="ms-2">(<a href="mailto:neo_xue@qq.com">慧川原譯</a>，本站略修。)</small>
				</x-slot>
			</x-toc>
		</div>
		<div id="content" class="col-md-9" :class="{'font-enlarged': textsize == 2, 'readonly': readOnly}">
			<nav>
				<ol class="breadcrumb">
					<li class="breadcrumb-item">地藏經典</li>
					<li class="breadcrumb-item"><a href="{{ $page->baseUrl.'/ksitigarbha-divination-vol1' }}">占察善惡業報經</a></li>
					<li class="breadcrumb-item active">卷下</li>
				</ol>
			</nav>
		
			<h1>占察善惡業報經</h1>
			<small class="float-end mb-3">天竺三藏菩提燈　譯</small>
			<div class="clearfix"></div>
			<h2 class="toc-item" id="vol2">
				<span class="word">占察善惡業報經卷下</span>
			</h2>
			<div :class="details ? 'bg-secondary text-white' : ''" class="paragraph">
				<span class="word">爾時堅淨信菩薩摩訶薩問地藏菩薩摩訶薩言</span>
				<span class="punc">：</span>
				<span class="punc">「</span>
				<span class="word">云何開示求向大乘者</span>
				<span class="punc">，</span>
				<span class="word">進趣方便</span>
				<span class="punc">？</span>
				<span class="punc">」</span>
			</div>
			<div x-show="details" class="details mb-3">
				這時，堅淨信大菩薩問地藏大菩薩：「如何開示求學大乘智慧方便呢？」
				<hr/>
			</div>
			<div :class="details ? 'bg-secondary text-white' : ''" class="paragraph">
				<span class="word">地藏菩薩摩訶薩言</span>
				<span class="punc">：</span>
				<span class="punc">「</span>
				<span class="word">善男子</span>
				<span class="punc">！</span>
				<span class="word">若有眾生欲向大乘者</span>
				<span class="punc">，</span>
				<span class="word">應當先知最初所行根本之業</span>
				<span class="punc">。</span>
				<span class="word">其最初所行根本業者</span>
				<span class="punc">，</span>
				<span class="word">所謂依止一實境界以修信解</span>
				<span class="punc">，</span>
				<span class="word">因信解力增長故</span>
				<span class="punc">，</span>
				<span class="word">速疾得入菩薩種性</span>
				<span class="punc">。</span>
				<span class="word">所言一實境界者</span>
				<span class="punc">，</span>
				<span class="word">謂眾生心體</span>
				<span class="punc">，</span>
				<span class="word">從本以來</span>
				<span class="punc">，</span>
				<span class="word">不生不滅</span>
				<span class="punc">，</span>
				<span class="word">自性清淨</span>
				<span class="punc">，</span>
				<span class="word">無障無礙</span>
				<span class="punc">，</span>
				<span class="word">猶如虛空</span>
				<span class="punc">。</span>
				<span class="word">離分別故</span>
				<span class="punc">，</span>
				<span class="word">平等普遍</span>
				<span class="punc">，</span>
				<span class="word">無所不至</span>
				<span class="punc">，</span>
				<span class="word">圓滿十方</span>
				<span class="punc">，</span>
				<span class="word">究竟一相</span>
				<span class="punc">，</span>
				<span class="word">無二無別</span>
				<span class="punc">，</span>
				<span class="word">不變不異</span>
				<span class="punc">，</span>
				<span class="word">無增無減</span>
				<span class="punc">。</span>
				<span class="word">以一切眾生心</span>
				<span class="punc">，</span>
				<span class="word">一切聲聞</span>
				<span class="punc">、</span>
				<span class="word">辟支佛心</span>
				<span class="punc">，</span>
				<span class="word">一切菩薩心</span>
				<span class="punc">，</span>
				<span class="word">一切諸佛心</span>
				<span class="punc">，</span>
				<span class="word">皆同不生不滅</span>
				<span class="punc">，</span>
				<span class="word">無染寂靜</span>
				<span class="punc">，</span>
				<span class="word">真如相故</span>
				<span class="punc">。</span>
				<span class="word">所以者何</span>
				<span class="punc">？</span>
				<span class="word">一切有心起分別者</span>
				<span class="punc">，</span>
				<span class="word">猶如幻化</span>
				<span class="punc">，</span>
				<span class="word">無有定實</span>
				<span class="punc">。</span>
				<span class="word">所謂識</span>
				<span class="punc">、</span>
				<span class="word">受</span>
				<span class="punc">、</span>
				<span class="word">想</span>
				<span class="punc">、</span>
				<span class="word">行</span>
				<span class="punc">、</span>
				<span class="word">憶念</span>
				<span class="punc">、</span>
				<span class="word">緣慮</span>
				<span class="punc">、</span>
				<span class="word">覺知等</span>
				<span class="punc">，</span>
				<span class="word">種種心數</span>
				<span class="punc">，</span>
				<span class="word">非青非黃</span>
				<span class="punc">，</span>
				<span class="word">非赤非白</span>
				<span class="punc">，</span>
				<span class="word">亦非雜色</span>
				<span class="punc">，</span>
				<span class="word">無有長短</span>
				<span class="punc">、</span>
				<span class="word">方圓</span>
				<span class="punc">、</span>
				<span class="word">大小</span>
				<span class="punc">。</span>
				<span class="word">乃至盡於十方虛空一切世界</span>
				<span class="punc">，</span>
				<span class="word">求心形狀</span>
				<span class="punc">，</span>
				<span class="word">無一區分而可得者</span>
				<span class="punc">。</span>
				<span class="word">但以眾生無明癡闇熏習因緣</span>
				<span class="punc">，</span>
				<span class="word">現妄境界</span>
				<span class="punc">，</span>
				<span class="word">令生念著</span>
				<span class="punc">。</span>
				<span class="word">所謂此心不能自知</span>
				<span class="punc">，</span>
				<span class="word">妄自謂有</span>
				<span class="punc">，</span>
				<span class="word">起覺知想</span>
				<span class="punc">，</span>
				<span class="word">計我</span>
				<span class="punc">、</span>
				<span class="word">我所</span>
				<span class="punc">，</span>
				<span class="word">而實無有覺知之想</span>
				<span class="punc">。</span>
				<span class="word">以此妄心畢竟無體</span>
				<span class="punc">，</span>
				<span class="word">不可見故</span>
				<span class="punc">。</span>
				<span class="word">若無覺知能分別者</span>
				<span class="punc">，</span>
				<span class="word">則無十方三世一切境界差別之相</span>
				<span class="punc">。</span>
				<span class="word">以一切法皆不能自有</span>
				<span class="punc">，</span>
				<span class="word">但依妄心分別故有</span>
				<span class="punc">。</span>
				<span class="word">所謂一切境界</span>
				<span class="punc">，</span>
				<span class="word">各各不同</span>
				<span class="punc">，</span>
				<span class="word">自念為有</span>
				<span class="punc">，</span>
				<span class="word">知此為自</span>
				<span class="punc">，</span>
				<span class="word">知彼為他</span>
				<span class="punc">。</span>
				<span class="word">是故一切法不能自有</span>
				<span class="punc">，</span>
				<span class="word">則無別異</span>
				<span class="punc">。</span>
				<span class="word">唯依妄心</span>
				<span class="punc">，</span>
				<span class="word">不知不了內自無故</span>
				<span class="punc">，</span>
				<span class="word">謂有前外境界</span>
				<span class="punc">，</span>
				<span class="word">妄生種種法想</span>
				<span class="punc">，</span>
				<span class="word">謂有謂無</span>
				<span class="punc">，</span>
				<span class="word">謂彼謂此</span>
				<span class="punc">，</span>
				<span class="word">謂是謂非</span>
				<span class="punc">，</span>
				<span class="word">謂好謂惡</span>
				<span class="punc">，</span>
				<span class="word">乃至妄生無量無邊法想</span>
				<span class="punc">。</span>
				<span class="word">當如是知</span>
				<span class="punc">，</span>
				<span class="word">一切諸法</span>
				<span class="punc">，</span>
				<span class="word">皆從妄想生</span>
				<span class="punc">，</span>
				<span class="word">依妄心為本</span>
				<span class="punc">。</span>
				<span class="punc">」</span>
			</div>
			<div x-show="details" class="details mb-3">
				地藏大菩薩說：「善男子，如果有眾生想求學大乘智慧，應當首先知道最初所造作的根本善惡業，依據一體實境而修，增長信心與理解，因信心理解能力增長的緣故，那麼就能夠迅速契合菩薩種性。所說的一體實際境界，即是眾生的自心之體，從無始以來，不生不滅，本自清淨，無所障礙，如同虛空一樣，沒有分別，平等遍滿，無所不至，十方圓滿，徹底的一合相，沒有差別，不變不異，無增無減。一切眾生心體，一切聲聞，辟支佛心體，一切菩薩心體，一切諸佛心體，皆相同不生不滅，寂靜沒有污染，即是真如之相。為什麼呢？一切生起念頭生起分別，猶如幻化，沒有確定實際的，所謂識、受、想、行、意念、思維、覺知等種種心念，非青非黃，非赤非白，也非雜色，沒有長短方圓大小，乃至遍滿十方虛空一切世界，謀求理解心體形狀，那是不可能有所區分而有所得的，但因為眾生無明癡心隱蔽熏陶習氣的因緣，呈現妄想境界，生執著念頭。所謂此心念不能自知，妄想而說有，生起覺知念頭，算計這是我及我所有的，而沒有實際的有覺知念頭存在。因為此妄心徹底沒有形象，無法見到的緣故。如果沒有覺知而起分別，則沒有十方三世一切境界的差異之相。因為一切萬法皆不能獨立存在，只是因為妄想念頭的分別而有，所謂一切境界，各不相同，自己認為存在，知道這個為自己，那個為外在，所以一切萬法不能獨立存在，沒有其他差異，只因為妄想心念，無法了知道沒有內在外界，說內外境界，而妄想生起種種念頭，說有說無，說這說那，說是說非，說好說惡，乃至妄想而生無量無邊的萬法之想。應當這樣理解，一切萬法，皆從妄想念頭而生，以妄想念頭為其根本。」
				<hr/>
			</div>
			<div :class="details ? 'bg-secondary text-white' : ''" class="paragraph">
				<span class="punc">「</span>
				<span class="word">然此妄心無自相故</span>
				<span class="punc">，</span>
				<span class="word">亦依境界而有</span>
				<span class="punc">，</span>
				<span class="word">所謂緣念覺知前境界故</span>
				<span class="punc">，</span>
				<span class="word">說名為心</span>
				<span class="punc">。</span>
				<span class="word">又此妄心與前境界</span>
				<span class="punc">，</span>
				<span class="word">雖俱相依</span>
				<span class="punc">，</span>
				<span class="word">起無先後</span>
				<span class="punc">，</span>
				<span class="word">而此妄心能為一切境界原主</span>
				<span class="punc">。</span>
				<span class="word">所以者何</span>
				<span class="punc">？</span>
				<span class="word">謂依妄心</span>
				<span class="punc">，</span>
				<span class="word">不了法界一相故</span>
				<span class="punc">，</span>
				<span class="word">說心有無明</span>
				<span class="punc">。</span>
				<span class="word">依無明力因故</span>
				<span class="punc">，</span>
				<span class="word">現妄境界</span>
				<span class="punc">。</span>
				<span class="word">亦依無明滅故</span>
				<span class="punc">，</span>
				<span class="word">一切境界滅</span>
				<span class="punc">。</span>
				<span class="word">非依一切境界自不了故</span>
				<span class="punc">，</span>
				<span class="word">說境界有</span>
				<span class="punc">。</span>
				<span class="word">無明亦非依境界故</span>
				<span class="punc">，</span>
				<span class="word">生於無明</span>
				<span class="punc">。</span>
				<span class="word">以一切諸佛</span>
				<span class="punc">，</span>
				<span class="word">於一切境界不生無明故</span>
				<span class="punc">。</span>
				<span class="word">又復不依境界滅故</span>
				<span class="punc">，</span>
				<span class="word">無明心滅</span>
				<span class="punc">。</span>
				<span class="word">以一切境界</span>
				<span class="punc">，</span>
				<span class="word">從本已來</span>
				<span class="punc">，</span>
				<span class="word">體性自滅</span>
				<span class="punc">，</span>
				<span class="word">未曾有故</span>
				<span class="punc">。</span>
				<span class="word">因如此義</span>
				<span class="punc">，</span>
				<span class="word">是故但說一切諸法依心為本</span>
				<span class="punc">。</span>
				<span class="word">當知一切諸法</span>
				<span class="punc">，</span>
				<span class="word">悉名為心</span>
				<span class="punc">，</span>
				<span class="word">以義</span>
				<span class="punc">、</span>
				<span class="word">體不異</span>
				<span class="punc">，</span>
				<span class="word">為心所攝故</span>
				<span class="punc">。</span>
				<span class="word">又一切諸法</span>
				<span class="punc">，</span>
				<span class="word">從心所起</span>
				<span class="punc">，</span>
				<span class="word">與心作相</span>
				<span class="punc">，</span>
				<span class="word">和合而有</span>
				<span class="punc">，</span>
				<span class="word">共生共滅</span>
				<span class="punc">，</span>
				<span class="word">同無有住</span>
				<span class="punc">。</span>
				<span class="word">以一切境界</span>
				<span class="punc">，</span>
				<span class="word">但隨心所緣</span>
				<span class="punc">，</span>
				<span class="word">念念相續故</span>
				<span class="punc">，</span>
				<span class="word">而得住持</span>
				<span class="punc">，</span>
				<span class="word">暫時為有</span>
				<span class="punc">。</span>
				<span class="punc">」</span>
			</div>
			<div x-show="details" class="details mb-3">
				「然而此妄想念頭沒有自相，只依境界而生，所謂攀緣覺知之前的境界的緣故，說這個是心。又此妄想念頭，與之前境界，雖然在一起互為依靠，生起沒有先後，而此妄想念頭，則為一切境界原來的主人。為什麼呢？依據妄想念頭，不能了知法界本來為一體一相緣故。說心有無明，依無明之力的原因，而現妄想境界，也因依據無明消滅的緣故，一切境界也會消滅。並非依據一切境界不能自我了知，說境界有無明。也並非依據一切境界的緣故，而生無明。一切諸佛，對於一切境界不生無明，又不依境界消滅而無明消滅。因為一切境界，從無始以來，本來就是沒有存在自性。因為這樣的義理，所以說一切萬法都依念頭為本，應當知道一切萬法，都名字叫做心，義理和本體沒有差異，被心念所攀緣攝受的緣故。有一切萬法，從心念而起，與心造作相，和合而有，共生共滅，沒有長駐，因為一切境界，都是隨心念所攀緣，念念相續的緣故，而得以存在，暫時而有。」
				<hr/>
			</div>
			<div :class="details ? 'bg-secondary text-white' : ''" class="paragraph">
				<span class="punc">「</span>
				<span class="word">如是所說心義者</span>
				<span class="punc">，</span>
				<span class="word">有二種相</span>
				<span class="punc">。</span>
				<span class="word">何等為二</span>
				<span class="punc">？</span>
				<span class="word">一者心內相</span>
				<span class="punc">，</span>
				<span class="word">二者心外相</span>
				<span class="punc">。</span>
				<span class="word">心內相者</span>
				<span class="punc">，</span>
				<span class="word">復有二種</span>
				<span class="punc">。</span>
				<span class="word">云何為二</span>
				<span class="punc">？</span>
				<span class="word">一者真</span>
				<span class="punc">，</span>
				<span class="word">二者妄</span>
				<span class="punc">。</span>
				<span class="word">所言真者</span>
				<span class="punc">，</span>
				<span class="word">謂心體本相</span>
				<span class="punc">，</span>
				<span class="word">如如不異</span>
				<span class="punc">，</span>
				<span class="word">清淨圓滿</span>
				<span class="punc">，</span>
				<span class="word">無障無礙</span>
				<span class="punc">，</span>
				<span class="word">微密難見</span>
				<span class="punc">，</span>
				<span class="word">以遍一切處</span>
				<span class="punc">，</span>
				<span class="word">常恒不壞</span>
				<span class="punc">，</span>
				<span class="word">建立生長一切法故</span>
				<span class="punc">。</span>
				<span class="word">所言妄者</span>
				<span class="punc">，</span>
				<span class="word">謂起念</span>
				<span class="punc">、</span>
				<span class="word">分別</span>
				<span class="punc">、</span>
				<span class="word">覺知</span>
				<span class="punc">、</span>
				<span class="word">緣慮</span>
				<span class="punc">、</span>
				<span class="word">憶想等事</span>
				<span class="punc">，</span>
				<span class="word">雖復相續</span>
				<span class="punc">，</span>
				<span class="word">能生一切種種境界</span>
				<span class="punc">，</span>
				<span class="word">而內虛偽</span>
				<span class="punc">，</span>
				<span class="word">無有真實</span>
				<span class="punc">，</span>
				<span class="word">不可見故</span>
				<span class="punc">。</span>
				<span class="word">所言心外相者</span>
				<span class="punc">，</span>
				<span class="word">謂一切諸法種種境界等</span>
				<span class="punc">，</span>
				<span class="word">隨有所念</span>
				<span class="punc">，</span>
				<span class="word">境界現前故</span>
				<span class="punc">，</span>
				<span class="word">知有內心及外心差別</span>
				<span class="punc">。</span>
				<span class="word">如是當知</span>
				<span class="punc">，</span>
				<span class="word">內妄想者</span>
				<span class="punc">，</span>
				<span class="word">為因為體</span>
				<span class="punc">。</span>
				<span class="word">外妄相者</span>
				<span class="punc">，</span>
				<span class="word">為果為用</span>
				<span class="punc">。</span>
				<span class="word">依如此等義</span>
				<span class="punc">，</span>
				<span class="word">是故我說一切諸法悉名為心</span>
				<span class="punc">。</span>
				<span class="punc">」</span>
			</div>
			<div x-show="details" class="details mb-3">
				「這樣所說的心的含義，有兩種相。是怎樣的兩種呢？一是心的內相，二是心的外相，心內之相，又有兩種，是怎樣的兩種呢？一是真，二是妄。所說的真，即是心體的本來之相，如如不動，清淨圓滿，無障無礙，精微難見，遍滿一切處恆常不壞，能夠建立助長一切萬法。所說的妄，即生起念頭、分別、覺知、攀緣、思慮、憶念、思考等。雖然重復相續，能生起一切種種境界，但本質虛無，沒有真實存在，不可見。所說的心外相，即一切萬法種種境界，有所念時，境界現前，知道有內心及外心的差別，應當知道，內在的妄相，是因是體，外在妄相，是果是用。依照這樣的義理，所以我說一切萬法皆名為心。」
				<hr/>
			</div>
			<div :class="details ? 'bg-secondary text-white' : ''" class="paragraph">
				<span class="punc">「</span>
				<span class="word">又復當知</span>
				<span class="punc">，</span>
				<span class="word">心外相者</span>
				<span class="punc">，</span>
				<span class="word">如夢所見種種境界</span>
				<span class="punc">，</span>
				<span class="word">唯心想作</span>
				<span class="punc">，</span>
				<span class="word">無實外事</span>
				<span class="punc">。</span>
				<span class="word">一切境界</span>
				<span class="punc">，</span>
				<span class="word">悉亦如是</span>
				<span class="punc">，</span>
				<span class="word">以皆依無明識夢所見</span>
				<span class="punc">，</span>
				<span class="word">妄想作故</span>
				<span class="punc">。</span>
				<span class="punc">」</span>
			</div>
			<div x-show="details" class="details mb-3">
				「另外又應當知道，心外相，如同夢中所見種種境界，皆是唯心所造，沒有實際外實。一切境界，也都如此，即是因為無明心識做夢而見，妄想而造做。」
				<hr/>
			</div>
			<div :class="details ? 'bg-secondary text-white' : ''" class="paragraph">
				<span class="punc">「</span>
				<span class="word">復次</span>
				<span class="punc">，</span>
				<span class="word">應知內心念念不住故</span>
				<span class="punc">，</span>
				<span class="word">所見</span>
				<span class="punc">、</span>
				<span class="word">所緣一切境界亦隨心念念不住</span>
				<span class="punc">，</span>
				<span class="word">所謂心生故種種法生</span>
				<span class="punc">，</span>
				<span class="word">心滅故種種法滅</span>
				<span class="punc">。</span>
				<span class="word">而生滅相</span>
				<span class="punc">，</span>
				<span class="word">但有名字</span>
				<span class="punc">，</span>
				<span class="word">實不可得</span>
				<span class="punc">。</span>
				<span class="word">以心不往至於境界</span>
				<span class="punc">，</span>
				<span class="word">境界亦不來至於心</span>
				<span class="punc">。</span>
				<span class="word">如鏡中像</span>
				<span class="punc">，</span>
				<span class="word">無來無去</span>
				<span class="punc">。</span>
				<span class="word">是故一切法</span>
				<span class="punc">，</span>
				<span class="word">求生滅定相</span>
				<span class="punc">，</span>
				<span class="word">了不可得</span>
				<span class="punc">。</span>
				<span class="word">所謂一切法畢竟無體</span>
				<span class="punc">，</span>
				<span class="word">本來常空</span>
				<span class="punc">，</span>
				<span class="word">實不生滅故</span>
				<span class="punc">。</span>
				<span class="word">如是一切法實不生滅者</span>
				<span class="punc">，</span>
				<span class="word">則無一切境界差別之相</span>
				<span class="punc">，</span>
				<span class="word">寂靜一味</span>
				<span class="punc">，</span>
				<span class="word">名為真如</span>
				<span class="punc">、</span>
				<span class="word">第一義諦</span>
				<span class="punc">、</span>
				<span class="word">自性清淨心</span>
				<span class="punc">。</span>
				<span class="word">彼自性清淨心</span>
				<span class="punc">，</span>
				<span class="word">湛然圓滿</span>
				<span class="punc">，</span>
				<span class="word">以無分別相故</span>
				<span class="punc">。</span>
				<span class="word">無分別相者</span>
				<span class="punc">，</span>
				<span class="word">於一切處</span>
				<span class="punc">，</span>
				<span class="word">無所不在</span>
				<span class="punc">。</span>
				<span class="word">無所不在者</span>
				<span class="punc">，</span>
				<span class="word">以能依持建立一切法故</span>
				<span class="punc">。</span>
				<span class="punc">」</span>
			</div>
			<div x-show="details" class="details mb-3">
				「再者，應當知道：內心念念不停住的緣故，所見所攀緣的一切境界也隨心念念念不停住，所謂心念生故種種法生，心念滅故種種法滅。這樣的生滅之相，只有名字，實際上不可得。心不至境界，則境界不至心，如同鏡子中的影像，沒有來也沒有去。所以一切萬法，生起消滅的定相，是不可能得到的。所謂一切萬法究竟無本體，本來恆空，實則無生無滅的緣故。一切萬法實則無生無滅，那麼也就無一切境界差別之相了，寂靜一味，就是真如第一義理自性清淨心。自性清淨心，清澈圓滿，無所分別。無所分別，於一切處所，無所不在。無所不在，因而能依持建立一切萬法。」
				<hr/>
			</div>
			<div :class="details ? 'bg-secondary text-white' : ''" class="paragraph">
				<span class="punc">「</span>
				<span class="word">復次</span>
				<span class="punc">，</span>
				<span class="word">彼心名如來藏</span>
				<span class="punc">，</span>
				<span class="word">所謂具足無量無邊不可思議無漏清淨功德之業</span>
				<span class="punc">。</span>
				<span class="word">以諸佛法身</span>
				<span class="punc">，</span>
				<span class="word">從無始本際來</span>
				<span class="punc">，</span>
				<span class="word">無障無礙</span>
				<span class="punc">，</span>
				<span class="word">自在不滅</span>
				<span class="punc">，</span>
				<span class="word">一切現化種種功業</span>
				<span class="punc">，</span>
				<span class="word">恒常熾然</span>
				<span class="punc">，</span>
				<span class="word">未曾休息</span>
				<span class="punc">。</span>
				<span class="word">所謂遍一切世界</span>
				<span class="punc">，</span>
				<span class="word">皆示作業</span>
				<span class="punc">，</span>
				<span class="word">種種化益故</span>
				<span class="punc">。</span>
				<span class="word">以一佛身</span>
				<span class="punc">，</span>
				<span class="word">即是一切諸佛身</span>
				<span class="punc">。</span>
				<span class="word">一切諸佛身</span>
				<span class="punc">，</span>
				<span class="word">即是一佛身</span>
				<span class="punc">。</span>
				<span class="word">所有作業亦皆共一</span>
				<span class="punc">，</span>
				<span class="word">所謂無分別相</span>
				<span class="punc">，</span>
				<span class="word">不念彼此</span>
				<span class="punc">，</span>
				<span class="word">平等無二</span>
				<span class="punc">。</span>
				<span class="word">以依一法性而有作業</span>
				<span class="punc">，</span>
				<span class="word">同自然化</span>
				<span class="punc">，</span>
				<span class="word">體無別異故</span>
				<span class="punc">。</span>
				<span class="word">如是諸佛法身</span>
				<span class="punc">，</span>
				<span class="word">遍一切處</span>
				<span class="punc">，</span>
				<span class="word">圓滿不動故</span>
				<span class="punc">，</span>
				<span class="word">隨諸眾生死此生彼</span>
				<span class="punc">，</span>
				<span class="word">恒為作依</span>
				<span class="punc">。</span>
				<span class="word">譬如虛空</span>
				<span class="punc">，</span>
				<span class="word">悉能容受一切色像種種形類</span>
				<span class="punc">，</span>
				<span class="word">以一切色像種種形類</span>
				<span class="punc">，</span>
				<span class="word">皆依虛空而有</span>
				<span class="punc">，</span>
				<span class="word">建立生長</span>
				<span class="punc">。</span>
				<span class="word">住虛空中</span>
				<span class="punc">，</span>
				<span class="word">為虛空處所攝</span>
				<span class="punc">。</span>
				<span class="word">以虛空為體</span>
				<span class="punc">，</span>
				<span class="word">無有能出虛空界分者</span>
				<span class="punc">。</span>
				<span class="word">當知色像之中</span>
				<span class="punc">，</span>
				<span class="word">虛空之界不可毀滅</span>
				<span class="punc">。</span>
				<span class="word">色像終壞時</span>
				<span class="punc">，</span>
				<span class="word">還歸虛空</span>
				<span class="punc">。</span>
				<span class="word">而虛空本界</span>
				<span class="punc">，</span>
				<span class="word">無增無減</span>
				<span class="punc">，</span>
				<span class="word">不動不變</span>
				<span class="punc">。</span>
				<span class="word">諸佛法身</span>
				<span class="punc">，</span>
				<span class="word">亦復如是</span>
				<span class="punc">，</span>
				<span class="word">悉能容受一切眾生種種果報</span>
				<span class="punc">。</span>
				<span class="word">以一切眾生種種果報</span>
				<span class="punc">，</span>
				<span class="word">皆依諸佛法身而有建立生長</span>
				<span class="punc">。</span>
				<span class="word">住法身中</span>
				<span class="punc">，</span>
				<span class="word">為法身處所攝</span>
				<span class="punc">。</span>
				<span class="word">以法身為體</span>
				<span class="punc">，</span>
				<span class="word">無有能出法身界分者</span>
				<span class="punc">。</span>
				<span class="punc">」</span>
			</div>
			<div x-show="details" class="details mb-3">
				「再者，這個真心則稱為如來藏海，具備無量無邊、不可思議、沒有遺漏、清淨功德之作用。諸佛法身，從無始以來，無所障礙，自在不滅，一切顯化，種種功德之作用，恆常發生，從未休息。遍及一切世界，都能夠發生作用，顯示種種度化。一佛身即是一切所有佛身，一切所有佛身即是一佛身。所有的作用，也是共同相通為一體，即無所分別相，不分別彼此，平等無二，依此一體法性而能發生作用，一同自然顯化，自體無所差異。諸佛法身，遍及一切處，圓滿不動，為眾生生死相續恆常依靠。譬如虛空能容受一切種種類型的色像，這一切種種類型的色像皆依虛空而存在、建立、發展變化，住於虛空中，又被虛空所把持，以虛空為體，不能出離虛空的界限。色像之中，虛空界不可毀滅，色像壞滅時，還是歸於虛空，而虛空界，不增不減，不動也不變。諸佛法身，也如同這樣，能夠承載一切眾生各種果報，一切眾生的果報，都是依據諸佛法身而存在、建立和發展變化，住於法身中，為法身所把持，以法身為體，不能出離法身界限。」
				<hr/>
			</div>
			<div :class="details ? 'bg-secondary text-white' : ''" class="paragraph">
				<span class="punc">「</span>
				<span class="word">當知一切眾生身中</span>
				<span class="punc">，</span>
				<span class="word">諸佛法身亦不可毀滅</span>
				<span class="punc">。</span>
				<span class="word">若煩惱斷壞時</span>
				<span class="punc">，</span>
				<span class="word">還歸法身</span>
				<span class="punc">。</span>
				<span class="word">而法身本界</span>
				<span class="punc">，</span>
				<span class="word">無增無減</span>
				<span class="punc">，</span>
				<span class="word">不動不變</span>
				<span class="punc">。</span>
				<span class="word">但從無始世來</span>
				<span class="punc">，</span>
				<span class="word">與無明心俱</span>
				<span class="punc">，</span>
				<span class="word">癡闇因緣熏習力故</span>
				<span class="punc">，</span>
				<span class="word">現妄境界</span>
				<span class="punc">。</span>
				<span class="word">以依妄境界熏習因緣故</span>
				<span class="punc">，</span>
				<span class="word">起妄想相應心</span>
				<span class="punc">，</span>
				<span class="word">計我</span>
				<span class="punc">、</span>
				<span class="word">我所</span>
				<span class="punc">，</span>
				<span class="word">造集諸業</span>
				<span class="punc">，</span>
				<span class="word">受生死苦</span>
				<span class="punc">，</span>
				<span class="word">說彼法身名為眾生</span>
				<span class="punc">。</span>
				<span class="word">若如是眾生中</span>
				<span class="punc">，</span>
				<span class="word">法身熏習而有力者</span>
				<span class="punc">，</span>
				<span class="word">煩惱漸薄</span>
				<span class="punc">，</span>
				<span class="word">能厭世間</span>
				<span class="punc">，</span>
				<span class="word">求涅槃道</span>
				<span class="punc">，</span>
				<span class="word">信歸一實</span>
				<span class="punc">，</span>
				<span class="word">修六波羅蜜等一切菩提分法</span>
				<span class="punc">，</span>
				<span class="word">名為菩薩</span>
				<span class="punc">。</span>
				<span class="word">若如是菩薩中</span>
				<span class="punc">，</span>
				<span class="word">修行一切善法滿足</span>
				<span class="punc">，</span>
				<span class="word">究竟得離無明睡者</span>
				<span class="punc">，</span>
				<span class="word">轉名為佛</span>
				<span class="punc">。</span>
				<span class="word">當知如是眾生</span>
				<span class="punc">、</span>
				<span class="word">菩薩</span>
				<span class="punc">、</span>
				<span class="word">佛等</span>
				<span class="punc">，</span>
				<span class="word">但依世間假名言說</span>
				<span class="punc">，</span>
				<span class="word">故有差別</span>
				<span class="punc">。</span>
				<span class="word">而法身之體</span>
				<span class="punc">，</span>
				<span class="word">畢竟平等</span>
				<span class="punc">，</span>
				<span class="word">無有異相</span>
				<span class="punc">。</span>
				<span class="punc">」</span>
			</div>
			<div x-show="details" class="details mb-3">
				「應當知道一切眾生身中，諸佛法身也是不會毀滅，因為煩惱而斷滅毀壞時，還是歸於法身，而法身界不增不減，不動也不變。但從無始以來，因為無明之心，癡心暗藏的因緣所熏習的業力緣故，顯示妄想境界，以妄想境界熏習的緣故，生起與妄想所生之相相應的念頭，執著我身和我所有，造作各種業力，承受生死之苦，說這個法身名字叫眾生。如果這樣的眾生中，能夠被法身強有力的熏習，煩惱就會逐漸微薄，能夠厭離世間無常，上求涅盤之道，生起對一實境的信力，修六度波羅蜜和一切菩提分法門，就叫菩薩。如果這菩薩，修行一切善法圓滿具足，徹底的遠離了無明睡夢昏沉，就叫做佛。應當知道這樣的眾生、菩薩、佛等等，皆依據世間假名而說的，所以有所差別，而法身之體，是徹底平等的，沒有差異。」
				<hr/>
			</div>
			<div :class="details ? 'bg-secondary text-white' : ''" class="paragraph">
				<span class="punc">「</span>
				<span class="word">善男子</span>
				<span class="punc">！</span>
				<span class="word">是名略說一實境界義</span>
				<span class="punc">。</span>
				<span class="word">若欲依一實境界修信解者</span>
				<span class="punc">，</span>
				<span class="word">應當學習二種觀道</span>
				<span class="punc">。</span>
				<span class="word">何等為二</span>
				<span class="punc">？</span>
				<span class="word">一者唯心識觀</span>
				<span class="punc">，</span>
				<span class="word">二者真如實觀</span>
				<span class="punc">。</span>
				<span class="word">學唯心識觀者</span>
				<span class="punc">，</span>
				<span class="word">所謂於一切時一切處</span>
				<span class="punc">，</span>
				<span class="word">隨身口意所有作業</span>
				<span class="punc">，</span>
				<span class="word">悉當觀察</span>
				<span class="punc">，</span>
				<span class="word">知唯是心</span>
				<span class="punc">。</span>
				<span class="word">乃至一切境界</span>
				<span class="punc">，</span>
				<span class="word">若心住念</span>
				<span class="punc">，</span>
				<span class="word">皆當察知</span>
				<span class="punc">，</span>
				<span class="word">勿令使心無記攀緣</span>
				<span class="punc">，</span>
				<span class="word">不自覺知</span>
				<span class="punc">。</span>
				<span class="word">於念念間</span>
				<span class="punc">，</span>
				<span class="word">悉應觀察</span>
				<span class="punc">。</span>
				<span class="word">隨心有所緣念</span>
				<span class="punc">，</span>
				<span class="word">還當使心隨逐彼念</span>
				<span class="punc">，</span>
				<span class="word">令心自知</span>
				<span class="punc">。</span>
				<span class="word">知己內心自生想念</span>
				<span class="punc">，</span>
				<span class="word">非一切境界有念有分別也</span>
				<span class="punc">。</span>
				<span class="word">所謂內心自生長短</span>
				<span class="punc">、</span>
				<span class="word">好惡</span>
				<span class="punc">、</span>
				<span class="word">是非</span>
				<span class="punc">、</span>
				<span class="word">得失</span>
				<span class="punc">、</span>
				<span class="word">衰利</span>
				<span class="punc">、</span>
				<span class="word">有無等見</span>
				<span class="punc">，</span>
				<span class="word">無量諸想</span>
				<span class="punc">。</span>
				<span class="word">而一切境界</span>
				<span class="punc">，</span>
				<span class="word">未曾有想</span>
				<span class="punc">，</span>
				<span class="word">起於分別</span>
				<span class="punc">。</span>
				<span class="punc">」</span>
			</div>
			<div x-show="details" class="details mb-3">
				「善男子，這就是簡單略說一實境的義理。如果依一實境界修起信，解悟的，應當學習兩種修觀之法，哪兩種呢？一唯心識觀，二真如實觀。學唯心識觀，於一切時一切處，伴隨身口意造業，但應當觀察了知這一切皆唯心念所造作，乃至一切境界。如果生執著念頭，應當察覺，不要使心念無故攀緣，而致不能自我覺察，在念念之間，皆應當觀察，伴隨心念有所攀緣，還應當使心念跟隨此念，讓心念自我覺知。了知內在自生念頭，並非一切境界有念頭有分別。即內心自生長短好壞，是非得失、損利有無等等知見，無窮念頭。而一切境界，不曾有想念頭和生起分別。」
				<hr/>
			</div>
			<div :class="details ? 'bg-secondary text-white' : ''" class="paragraph">
				<span class="punc">「</span>
				<span class="word">當知一切境界自無分別想故</span>
				<span class="punc">，</span>
				<span class="word">即自非長非短</span>
				<span class="punc">、</span>
				<span class="word">非好非惡</span>
				<span class="punc">，</span>
				<span class="word">乃至非有非無</span>
				<span class="punc">，</span>
				<span class="word">離一切相</span>
				<span class="punc">。</span>
				<span class="word">如是觀察</span>
				<span class="punc">，</span>
				<span class="word">一切法唯心想生</span>
				<span class="punc">。</span>
				<span class="word">若使離心</span>
				<span class="punc">，</span>
				<span class="word">則無一法一想而能自見有差別也</span>
				<span class="punc">。</span>
				<span class="word">常應如是守記內心</span>
				<span class="punc">，</span>
				<span class="word">知唯妄念</span>
				<span class="punc">，</span>
				<span class="word">無實境界</span>
				<span class="punc">，</span>
				<span class="word">勿令休廢</span>
				<span class="punc">。</span>
				<span class="word">是名修學唯心識觀</span>
				<span class="punc">。</span>
				<span class="word">若心無記</span>
				<span class="punc">，</span>
				<span class="word">不知自心念者</span>
				<span class="punc">，</span>
				<span class="word">即謂有前境界</span>
				<span class="punc">，</span>
				<span class="word">不名唯心識觀</span>
				<span class="punc">。</span>
				<span class="punc">」</span>
			</div>
			<div x-show="details" class="details mb-3">
				「應當知道一切境界自身離於分別之心，即非長非短，非好非惡，乃至非有非無，離於一切相，這樣觀察一切萬法皆唯心所生。如果要生起出離心，那麼無一法一相能見有差別，應當這樣牢記於心，知道皆是妄想念頭，沒有實體境界，不要讓此心荒廢休止，這個則是修學唯心識觀。如果心無法區分，不能自我覺察心念，即是對境界起分別，則非唯心識觀。」
				<hr/>
			</div>
			<div :class="details ? 'bg-secondary text-white' : ''" class="paragraph">
				<span class="punc">「</span>
				<span class="word">又守記內心者</span>
				<span class="punc">，</span>
				<span class="word">則知貪想</span>
				<span class="punc">、</span>
				<span class="word">瞋想</span>
				<span class="punc">，</span>
				<span class="word">及愚癡</span>
				<span class="punc">、</span>
				<span class="word">邪見想</span>
				<span class="punc">。</span>
				<span class="word">知善</span>
				<span class="punc">、</span>
				<span class="word">知不善</span>
				<span class="punc">、</span>
				<span class="word">知無記</span>
				<span class="punc">，</span>
				<span class="word">知心勞慮種種諸苦</span>
				<span class="punc">。</span>
				<span class="word">若於坐時</span>
				<span class="punc">，</span>
				<span class="word">隨心所緣</span>
				<span class="punc">，</span>
				<span class="word">念念觀知唯心生滅</span>
				<span class="punc">。</span>
				<span class="word">譬如水流燈炎</span>
				<span class="punc">，</span>
				<span class="word">無暫時住</span>
				<span class="punc">。</span>
				<span class="word">從是當得色寂三昧</span>
				<span class="punc">。</span>
				<span class="punc">」</span>
			</div>
			<div x-show="details" class="details mb-3">
				「如果能覺知自己心念的，就能夠知道貪婪的念頭，嗔怒的念頭，以及愚癡邪見的念頭。知道什麼是善，知道什麼是不善，也知道什麼是無記（非善非不善），知道心念操勞憂慮種種苦痛。若坐時，隨心念所攀緣，念念觀察覺知心念生滅，譬如水的流動、燈的火焰，即使暫時的也不能常住。跟隨這樣的修法就能得色寂三昧。」
				<hr/>
			</div>
			<div :class="details ? 'bg-secondary text-white' : ''" class="paragraph">
				<span class="punc">「</span>
				<span class="word">得此三昧已</span>
				<span class="punc">，</span>
				<span class="word">次應學習信奢摩他觀心</span>
				<span class="punc">，</span>
				<span class="word">及信毗婆舍那觀心</span>
				<span class="punc">。</span>
				<span class="word">習信奢摩他觀心者</span>
				<span class="punc">，</span>
				<span class="word">思惟內心不可見相</span>
				<span class="punc">，</span>
				<span class="word">圓滿不動</span>
				<span class="punc">，</span>
				<span class="word">無來無去</span>
				<span class="punc">，</span>
				<span class="word">本性不生</span>
				<span class="punc">，</span>
				<span class="word">離分別故</span>
				<span class="punc">。</span>
				<span class="word">習信毗婆舍那觀心者</span>
				<span class="punc">，</span>
				<span class="word">想見內外色</span>
				<span class="punc">，</span>
				<span class="word">隨心生</span>
				<span class="punc">，</span>
				<span class="word">隨心滅</span>
				<span class="punc">。</span>
				<span class="word">乃至習想見佛色身</span>
				<span class="punc">，</span>
				<span class="word">亦復如是</span>
				<span class="punc">。</span>
				<span class="word">隨心生</span>
				<span class="punc">，</span>
				<span class="word">隨心滅</span>
				<span class="punc">，</span>
				<span class="word">如幻如化</span>
				<span class="punc">，</span>
				<span class="word">如水中月</span>
				<span class="punc">，</span>
				<span class="word">如鏡中像</span>
				<span class="punc">。</span>
				<span class="word">非心不離心</span>
				<span class="punc">，</span>
				<span class="word">非來非不來</span>
				<span class="punc">，</span>
				<span class="word">非去非不去</span>
				<span class="punc">，</span>
				<span class="word">非生非不生</span>
				<span class="punc">，</span>
				<span class="word">非作非不作</span>
				<span class="punc">。</span>
				<span class="punc">」</span>
			</div>
			<div x-show="details" class="details mb-3">
				「得此三昧後，其次應當學習信解奢摩他觀心法門，及毗婆捨那觀心法門。學習信解奢摩他觀心者，思維內心不可見相，圓滿不動，無來無去，本性不生，離於分別。學習毗婆捨那觀心者，想見內外色，隨心生，隨心滅；乃至學習見佛色身，亦復如是，隨心生，隨心滅，如幻如化，如水中月，如鏡中像。非心，不離心；非來，非不來；非去，非不去；非生，非不生；非作，非不作。」
				<hr/>
			</div>
			<div :class="details ? 'bg-secondary text-white' : ''" class="paragraph">
				<span class="punc">「</span>
				<span class="word">善男子</span>
				<span class="punc">！</span>
				<span class="word">若能習信此二觀心者</span>
				<span class="punc">，</span>
				<span class="word">速得趣會一乘之道</span>
				<span class="punc">。</span>
				<span class="word">當知如是唯心識觀</span>
				<span class="punc">，</span>
				<span class="word">名為最上智慧之門</span>
				<span class="punc">。</span>
				<span class="word">所謂能令其心猛利</span>
				<span class="punc">，</span>
				<span class="word">長信解力</span>
				<span class="punc">，</span>
				<span class="word">疾入空義</span>
				<span class="punc">，</span>
				<span class="word">得發無上大菩提心故</span>
				<span class="punc">。</span>
				<span class="word">若學習真如實觀者</span>
				<span class="punc">，</span>
				<span class="word">思惟心性無生無滅</span>
				<span class="punc">，</span>
				<span class="word">不住見聞覺知</span>
				<span class="punc">，</span>
				<span class="word">永離一切分別之想</span>
				<span class="punc">。</span>
				<span class="word">漸漸能過空處</span>
				<span class="punc">、</span>
				<span class="word">識處</span>
				<span class="punc">、</span>
				<span class="word">無少處</span>
				<span class="punc">、</span>
				<span class="word">非想非非想處等定境界相</span>
				<span class="punc">，</span>
				<span class="word">得相似空三昧</span>
				<span class="punc">。</span>
				<span class="word">得相似空三昧時</span>
				<span class="punc">，</span>
				<span class="word">識想受行麁分別相不現在前</span>
				<span class="punc">。</span>
				<span class="word">從此修學</span>
				<span class="punc">，</span>
				<span class="word">為善知識大慈悲者守護長養</span>
				<span class="punc">，</span>
				<span class="word">是故離諸障礙</span>
				<span class="punc">，</span>
				<span class="word">勤修不廢</span>
				<span class="punc">，</span>
				<span class="word">展轉能入心寂三昧</span>
				<span class="punc">。</span>
				<span class="word">得是三昧已</span>
				<span class="punc">，</span>
				<span class="word">即復能入一行三昧</span>
				<span class="punc">。</span>
				<span class="word">入是一行三昧已</span>
				<span class="punc">，</span>
				<span class="word">見佛無數</span>
				<span class="punc">，</span>
				<span class="word">發深廣行心</span>
				<span class="punc">，</span>
				<span class="word">住堅信位</span>
				<span class="punc">。</span>
				<span class="word">所謂於奢摩他</span>
				<span class="punc">、</span>
				<span class="word">毗婆舍那二種觀道</span>
				<span class="punc">，</span>
				<span class="word">決定信解</span>
				<span class="punc">，</span>
				<span class="word">能決定向</span>
				<span class="punc">。</span>
				<span class="word">隨所修學世間諸禪三昧之業</span>
				<span class="punc">，</span>
				<span class="word">無所樂著</span>
				<span class="punc">。</span>
				<span class="word">乃至遍修一切善根菩提分法</span>
				<span class="punc">，</span>
				<span class="word">於生死中無所怯畏</span>
				<span class="punc">，</span>
				<span class="word">不樂二乘</span>
				<span class="punc">。</span>
				<span class="word">以依能習向二觀心最妙巧便</span>
				<span class="punc">，</span>
				<span class="word">眾智所依</span>
				<span class="punc">，</span>
				<span class="word">行根本故</span>
				<span class="punc">。</span>
				<span class="punc">」</span>
			</div>
			<div x-show="details" class="details mb-3">
				「善男子！若能學習信解這兩種觀心法門，能迅速理解一乘法門之道，應當知道這樣的唯心識觀，就是最上等智慧之門，能讓信心勇猛銳利，增長淨信理解之力，快速悟入空的義理，而能發無上大菩提心。如果學習真如實觀法門，那麼應該意識到心性無生無滅，不執著在見聞覺知，永遠遠離一切分別的念頭，漸漸能超越空處，識處，無處有處，非想非非想處等定境界相，得到相似空三昧。得相似空三昧時，識、想、受、行、明顯的分別之相就不會現前了。這樣修學，才夠資格算是善知識，大慈悲的長期守護者，因為遠離各種業障，勤奮修行不荒廢，逐漸能契入心寂三昧。得到這樣的三昧之後，就又能契入一行三昧。契入一行三昧後，能見無數諸佛，發深心廣行六度波羅蜜，安住於堅定淨信之位，對於奢摩他、毗婆捨那二種觀法，決定信解，能決定修行方向。隨緣修學世間的各種禪定三昧之法，不會執著於什麼，乃至修遍一切善法菩提分法，於生死之中無所畏懼，對於二乘法門沒有興趣，因為能修學這兩種觀法的最妙善巧方便，能作眾生依止的善知識，從根本上行化度眾生之法。」
				<hr/>
			</div>
			<div :class="details ? 'bg-secondary text-white' : ''" class="paragraph">
				<span class="punc">「</span>
				<span class="word">復次</span>
				<span class="punc">，</span>
				<span class="word">修學如上信解者</span>
				<span class="punc">，</span>
				<span class="word">人有二種</span>
				<span class="punc">。</span>
				<span class="word">何等為二</span>
				<span class="punc">？</span>
				<span class="word">一者利根</span>
				<span class="punc">，</span>
				<span class="word">二者鈍根</span>
				<span class="punc">。</span>
				<span class="word">其利根者</span>
				<span class="punc">，</span>
				<span class="word">先已能知一切外諸境界</span>
				<span class="punc">，</span>
				<span class="word">唯心所作</span>
				<span class="punc">，</span>
				<span class="word">虛誑不實</span>
				<span class="punc">，</span>
				<span class="word">如夢如幻等</span>
				<span class="punc">，</span>
				<span class="word">決定無有疑慮</span>
				<span class="punc">。</span>
				<span class="word">陰蓋輕微</span>
				<span class="punc">，</span>
				<span class="word">散亂心少</span>
				<span class="punc">。</span>
				<span class="word">如是等人</span>
				<span class="punc">，</span>
				<span class="word">即應學習真如實觀</span>
				<span class="punc">。</span>
				<span class="word">其鈍根者</span>
				<span class="punc">，</span>
				<span class="word">先未能知一切外諸境界</span>
				<span class="punc">，</span>
				<span class="word">悉唯是心</span>
				<span class="punc">，</span>
				<span class="word">虛誑不實故</span>
				<span class="punc">，</span>
				<span class="word">染著情厚</span>
				<span class="punc">，</span>
				<span class="word">蓋障數起</span>
				<span class="punc">，</span>
				<span class="word">心難調伏</span>
				<span class="punc">，</span>
				<span class="word">應當先學唯心識觀</span>
				<span class="punc">。</span>
				<span class="punc">」</span>
			</div>
			<div x-show="details" class="details mb-3">
				「再者，修學如上信解者，人有兩種，哪兩種呢？一是利根之人，二是鈍根之人。利根之人，已經知道一切外境，皆唯心所造，虛妄不實，如夢如幻等，確信沒有疑問，五蓋煩惱輕微，散亂心很少，這樣的人，應該學習真如實觀法門。鈍根之人，開始還不知道一切外境，皆是唯心，虛妄不實，易染習氣情執深厚，五蓋業障經常顯起，妄心難以調伏，應當先學唯心識觀。」
				<hr/>
			</div>
			<div :class="details ? 'bg-secondary text-white' : ''" class="paragraph">
				<span class="punc">「</span>
				<span class="word">若人雖學如是信解</span>
				<span class="punc">，</span>
				<span class="word">而善根業薄</span>
				<span class="punc">，</span>
				<span class="word">未能進趣</span>
				<span class="punc">。</span>
				<span class="word">諸惡煩惱</span>
				<span class="punc">，</span>
				<span class="word">不得漸伏</span>
				<span class="punc">。</span>
				<span class="word">其心疑怯</span>
				<span class="punc">，</span>
				<span class="word">畏墮三惡道</span>
				<span class="punc">，</span>
				<span class="word">生八難處</span>
				<span class="punc">。</span>
				<span class="word">畏不常值佛菩薩等</span>
				<span class="punc">，</span>
				<span class="word">不得供養聽受正法</span>
				<span class="punc">。</span>
				<span class="word">畏菩提信難可成就</span>
				<span class="punc">。</span>
				<span class="word">有如此疑怖及種種障礙等者</span>
				<span class="punc">，</span>
				<span class="word">應於一切時一切處</span>
				<span class="punc">，</span>
				<span class="word">常勤誦念我之名字</span>
				<span class="punc">。</span>
				<span class="word">若得一心</span>
				<span class="punc">，</span>
				<span class="word">善根增長</span>
				<span class="punc">，</span>
				<span class="word">其意猛利</span>
				<span class="punc">，</span>
				<span class="word">當觀我法身</span>
				<span class="punc">，</span>
				<span class="word">及一切諸佛法身</span>
				<span class="punc">，</span>
				<span class="word">與己自身</span>
				<span class="punc">，</span>
				<span class="word">體性平等</span>
				<span class="punc">，</span>
				<span class="word">無二無別</span>
				<span class="punc">，</span>
				<span class="word">不生不滅</span>
				<span class="punc">，</span>
				<span class="word">常樂我淨</span>
				<span class="punc">，</span>
				<span class="word">功德圓滿</span>
				<span class="punc">，</span>
				<span class="word">是可歸依</span>
				<span class="punc">。</span>
				<span class="punc">」</span>
			</div>
			<div x-show="details" class="details mb-3">
				「雖然這樣學習相信理解，如果善業太薄，不能深入進階，業障煩惱，無法逐漸降伏，心生懷疑怯懦，畏懼墜入三惡道，生在八難的地方，害怕不能常逢佛菩薩，不能供養聽聞受持正法，害怕菩提難信不能成就。有這樣的懷疑恐懼及種種業障者，應於一切時一切處，常勤誦地藏菩薩名號，如果能離妄想一心持誦，善根增長，心願勇猛銳利。應當觀我法身，及一切諸佛法身，與自身，體性平等，無二無別，不生不滅，常樂我淨，功德圓滿，是可皈依之處。」
				<hr/>
			</div>
			<div :class="details ? 'bg-secondary text-white' : ''" class="paragraph">
				<span class="punc">「</span>
				<span class="word">又復觀察己身心相</span>
				<span class="punc">，</span>
				<span class="word">無常</span>
				<span class="punc">、</span>
				<span class="word">苦</span>
				<span class="punc">、</span>
				<span class="word">無我</span>
				<span class="punc">、</span>
				<span class="word">不淨</span>
				<span class="punc">，</span>
				<span class="word">如幻如化</span>
				<span class="punc">，</span>
				<span class="word">是可厭離</span>
				<span class="punc">。</span>
				<span class="word">若能修學如是觀者</span>
				<span class="punc">，</span>
				<span class="word">速得增長淨信之心</span>
				<span class="punc">，</span>
				<span class="word">所有諸障</span>
				<span class="punc">，</span>
				<span class="word">漸漸損減</span>
				<span class="punc">。</span>
				<span class="word">何以故</span>
				<span class="punc">？</span>
				<span class="word">此人名為學習聞我名者</span>
				<span class="punc">，</span>
				<span class="word">亦能學習聞十方諸佛名者</span>
				<span class="punc">；</span>
				<span class="word">名為學至心禮拜供養我者</span>
				<span class="punc">，</span>
				<span class="word">亦能學至心禮拜供養十方諸佛者</span>
				<span class="punc">；</span>
				<span class="word">名為學聞大乘深經者</span>
				<span class="punc">；</span>
				<span class="word">名為學執持書寫供養恭敬大乘深經者</span>
				<span class="punc">；</span>
				<span class="word">名為學受持讀誦大乘深經者</span>
				<span class="punc">；</span>
				<span class="word">名為學遠離邪見</span>
				<span class="punc">，</span>
				<span class="word">於深正義中不墮謗者</span>
				<span class="punc">；</span>
				<span class="word">名為於究竟甚深第一實義中學信解者</span>
				<span class="punc">；</span>
				<span class="word">名為能除諸罪障者</span>
				<span class="punc">；</span>
				<span class="word">名為當得無量功德聚者</span>
				<span class="punc">。</span>
				<span class="word">此人捨身</span>
				<span class="punc">，</span>
				<span class="word">終不墮惡道</span>
				<span class="punc">、</span>
				<span class="word">八難之處</span>
				<span class="punc">，</span>
				<span class="word">還聞正法</span>
				<span class="punc">，</span>
				<span class="word">習信修行</span>
				<span class="punc">，</span>
				<span class="word">亦能隨願往生他方淨佛國土</span>
				<span class="punc">。</span>
				<span class="punc">」</span>
			</div>
			<div x-show="details" class="details mb-3">
				「又再觀自己的心念之相，無常、苦、無我、不淨、如幻如化、是應該厭離的。如果能修學這樣的觀法，能夠迅速增長淨信之心，所有業障，能漸漸減弱。為什麼呢？此人能夠學習誦持我名，又能學習誦持十方諸佛名。能學習以至誠心禮拜供養我，也能學習以至誠心禮拜供養十方諸佛。即是學習受持讀誦大乘深經，即是學習遠離邪見，於深邃義理中不墮誹謗，即是對於究竟甚深第一實義學習信解，即是能除各種罪障，即是當得無量功德聚。此人捨身，終不會墮惡道，八難之處，還能聽聞正法，增信修行，也能隨緣往生他方佛陀淨土。」
				<hr/>
			</div>
			<div :class="details ? 'bg-secondary text-white' : ''" class="paragraph">
				<span class="punc">「</span>
				<span class="word">復次</span>
				<span class="punc">，</span>
				<span class="word">若人欲生他方現在淨佛國者</span>
				<span class="punc">，</span>
				<span class="word">應當隨彼世界佛之名字</span>
				<span class="punc">，</span>
				<span class="word">專意誦念</span>
				<span class="punc">，</span>
				<span class="word">一心不亂</span>
				<span class="punc">。</span>
				<span class="word">如上觀察者</span>
				<span class="punc">，</span>
				<span class="word">決定得生彼佛淨國</span>
				<span class="punc">，</span>
				<span class="word">善根增長</span>
				<span class="punc">，</span>
				<span class="word">速獲不退</span>
				<span class="punc">。</span>
				<span class="word">當知如上一心係念思惟諸佛平等法身</span>
				<span class="punc">，</span>
				<span class="word">一切善根中</span>
				<span class="punc">，</span>
				<span class="word">其業最勝</span>
				<span class="punc">。</span>
				<span class="word">所謂勤修習者</span>
				<span class="punc">，</span>
				<span class="word">漸漸能向一行三昧</span>
				<span class="punc">。</span>
				<span class="word">若到一行三昧者</span>
				<span class="punc">，</span>
				<span class="word">則成廣大微妙行心</span>
				<span class="punc">，</span>
				<span class="word">名得相似無生法忍</span>
				<span class="punc">。</span>
				<span class="word">以能得聞我名字故</span>
				<span class="punc">，</span>
				<span class="word">亦能得聞十方諸佛名字故</span>
				<span class="punc">；</span>
				<span class="word">以能至心禮拜供養我故</span>
				<span class="punc">，</span>
				<span class="word">亦能至心禮拜供養十方諸佛故</span>
				<span class="punc">。</span>
				<span class="word">以能得聞大乘深經故</span>
				<span class="punc">，</span>
				<span class="word">能執持書寫供養恭敬大乘深經故</span>
				<span class="punc">，</span>
				<span class="word">能受持讀誦大乘深經故</span>
				<span class="punc">。</span>
				<span class="word">能於究竟甚深第一實義中不生怖畏</span>
				<span class="punc">，</span>
				<span class="word">遠離誹謗</span>
				<span class="punc">，</span>
				<span class="word">得正見心</span>
				<span class="punc">，</span>
				<span class="word">能信解故</span>
				<span class="punc">。</span>
				<span class="word">決定除滅諸罪障故</span>
				<span class="punc">，</span>
				<span class="word">現證無量功德聚故</span>
				<span class="punc">。</span>
				<span class="word">所以者何</span>
				<span class="punc">？</span>
				<span class="word">謂無分別菩提心</span>
				<span class="punc">，</span>
				<span class="word">寂靜智現</span>
				<span class="punc">，</span>
				<span class="word">起發方便業</span>
				<span class="punc">，</span>
				<span class="word">種種願行故</span>
				<span class="punc">。</span>
				<span class="word">能聞我名者</span>
				<span class="punc">，</span>
				<span class="word">謂得決定信利益行故</span>
				<span class="punc">。</span>
				<span class="word">乃至一切所能者</span>
				<span class="punc">，</span>
				<span class="word">皆得不退一乘因故</span>
				<span class="punc">。</span>
				<span class="word">若雜亂垢心</span>
				<span class="punc">，</span>
				<span class="word">雖復稱誦我之名字</span>
				<span class="punc">，</span>
				<span class="word">而不名為聞</span>
				<span class="punc">。</span>
				<span class="word">以不能生決定信解</span>
				<span class="punc">，</span>
				<span class="word">但獲世間善報</span>
				<span class="punc">，</span>
				<span class="word">不得廣大深妙利益</span>
				<span class="punc">。</span>
				<span class="word">如是雜亂垢心</span>
				<span class="punc">，</span>
				<span class="word">隨其所修一切諸善</span>
				<span class="punc">，</span>
				<span class="word">皆不能得深大利益</span>
				<span class="punc">。</span>
				<span class="punc">」</span>
			</div>
			<div x-show="details" class="details mb-3">
				「再者，如果想投生他方現在佛國淨土，應當專心一意誦念此世界佛陀名號，一心不亂，這樣行法，決定得生此佛國淨土，善根增長，迅速獲得不退轉，應當知道這樣一心系念思維諸佛平等法身，一切善根中，其善業最勝。勤修行的，能夠漸漸趣向一行三昧，若得一行三昧，就能成就廣大微妙行願，得相似無生法忍。因為能聽聞我的名字，也能聽聞十方佛名號，以至誠心禮拜供養我，也能以至誠心禮拜供養十方諸佛，能聽聞大乘深邃經典，能執持書寫供養恭敬大乘深邃經典，能受持讀誦大乘深邃經典。能對於究竟甚深第一真實義不會生起恐懼心理，遠離誹謗，得正見心，能淨信理解，決定消除各種罪業障，當下證得無量功德相聚。為什麼呢？因為無分別的菩提心，寂靜而智慧現，能發起方便法種種行願。能聽聞我的名號，得決定淨信利益修行，乃至一切所能做的，皆不會退失一乘深法。如果雜亂污垢妄心，雖然稱誦我的名字，卻不能聽聞，所以不能生決定信解，只是獲得世間的善報，得不到廣大深妙的利益。這樣的雜亂污垢妄心，修行其他一切善法，皆不能得到廣大利益。」
				<hr/>
			</div>
			<div :class="details ? 'bg-secondary text-white' : ''" class="paragraph">
				<span class="punc">「</span>
				<span class="word">善男子</span>
				<span class="punc">！</span>
				<span class="word">當知如上勤心修學無相禪者</span>
				<span class="punc">，</span>
				<span class="word">不久能獲深大利益</span>
				<span class="punc">，</span>
				<span class="word">漸次作佛</span>
				<span class="punc">。</span>
				<span class="punc">」</span>
			</div>
			<div x-show="details" class="details mb-3">
				「善男子，應當知道如上勤奮修學無相禪法者，不久就能獲得廣大利益，逐漸趨向成佛。」
				<hr/>
			</div>
			<div :class="details ? 'bg-secondary text-white' : ''" class="paragraph">
				<span class="punc">「</span>
				<span class="word">深大利益者</span>
				<span class="punc">，</span>
				<span class="word">所謂得入堅信之位</span>
				<span class="punc">，</span>
				<span class="word">成就信忍故</span>
				<span class="punc">。</span>
				<span class="word">入堅法位</span>
				<span class="punc">，</span>
				<span class="word">成就順忍故</span>
				<span class="punc">。</span>
				<span class="word">入正真位</span>
				<span class="punc">，</span>
				<span class="word">成就無生忍故</span>
				<span class="punc">。</span>
				<span class="word">又成就信忍者</span>
				<span class="punc">，</span>
				<span class="word">能作如來種性故</span>
				<span class="punc">。</span>
				<span class="word">成就順忍者</span>
				<span class="punc">，</span>
				<span class="word">能解如來行故</span>
				<span class="punc">。</span>
				<span class="word">成就無生忍者</span>
				<span class="punc">，</span>
				<span class="word">得如來業故</span>
				<span class="punc">。</span>
				<span class="punc">」</span>
			</div>
			<div x-show="details" class="details mb-3">
				「深廣大利益者，得堅定淨信之位，成就淨信能忍。契入堅定修行位，成就柔順忍。入正真位，成就無生法忍。又成就淨信能忍，能作如來種性。成就柔順忍，能解悟如來之行。成就無生法忍，能得如來之業。」
				<hr/>
			</div>
			<div :class="details ? 'bg-secondary text-white' : ''" class="paragraph">
				<span class="punc">「</span>
				<span class="word">漸次作佛者</span>
				<span class="punc">，</span>
				<span class="word">略說有四種</span>
				<span class="punc">。</span>
				<span class="word">何等為四</span>
				<span class="punc">？</span>
				<blockquote>
					<span class="word">一者</span>
					<span class="punc">，</span>
					<span class="word">信滿法故作佛</span>
					<span class="punc">。</span>
					<span class="word">所謂依種性地</span>
					<span class="punc">，</span>
					<span class="word">決定信諸法不生不滅</span>
					<span class="punc">，</span>
					<span class="word">清淨平等</span>
					<span class="punc">，</span>
					<span class="word">無可願求故</span>
					<span class="punc">。</span><br/>
					<span class="word">二者</span>
					<span class="punc">，</span>
					<span class="word">解滿法故作佛</span>
					<span class="punc">。</span>
					<span class="word">所謂依解行地</span>
					<span class="punc">，</span>
					<span class="word">深解法性</span>
					<span class="punc">，</span>
					<span class="word">知如來業無造無作</span>
					<span class="punc">，</span>
					<span class="word">於生死涅槃不起二想</span>
					<span class="punc">，</span>
					<span class="word">心無所怖故</span>
					<span class="punc">。</span><br/>
					<span class="word">三者</span>
					<span class="punc">，</span>
					<span class="word">證滿法故作佛</span>
					<span class="punc">。</span>
					<span class="word">所謂依淨心地</span>
					<span class="punc">，</span>
					<span class="word">以得無分別寂靜法智</span>
					<span class="punc">，</span>
					<span class="word">及不思議自然之業</span>
					<span class="punc">，</span>
					<span class="word">無求想故</span>
					<span class="punc">。</span><br/>
					<span class="word">四者</span>
					<span class="punc">，</span>
					<span class="word">一切功德行滿足故作佛</span>
					<span class="punc">。</span>
					<span class="word">所謂依究竟菩薩地</span>
					<span class="punc">，</span>
					<span class="word">能除一切諸障</span>
					<span class="punc">，</span>
					<span class="word">無明夢盡故</span>
					<span class="punc">。</span>
				</blockquote>
				<span class="punc">」</span>
			</div>
			<div x-show="details" class="details mb-3">
				「則逐漸趨向成佛的人，簡單說有四種，哪四種呢？
				<blockquote>
					一、 淨信圓滿法所以成佛。即以種性地，堅定淨信諸法不生不滅，清淨平等，不可願求。<br/>
					二、 解悟圓滿法所以成佛。即以理解行地，深解法性，知如來之業無造無作，於生死涅盤，不起二想，心無所恐懼。<br/>
					三、 親證圓滿法所以成佛。即以淨心地，得無分別寂靜法智慧，及不可思議自然之業，無所求念頭。<br/>
					四、 一切功德行圓滿具足所以成佛。即依究竟菩薩地，能除一切業障，無明夢消盡。
				</blockquote>
				」
				<hr/>
			</div>
			<div :class="details ? 'bg-secondary text-white' : ''" class="paragraph">
				<span class="punc">「</span>
				<span class="word">復次</span>
				<span class="punc">，</span>
				<span class="word">當知</span>
				<span class="punc">，</span>
				<span class="word">若修學世間有相禪者</span>
				<span class="punc">，</span>
				<span class="word">有三種</span>
				<span class="punc">。</span>
				<span class="word">何等為三</span>
				<span class="punc">？</span>
				<blockquote>
					<span class="word">一者</span>
					<span class="punc">，</span>
					<span class="word">無方便信解力故</span>
					<span class="punc">，</span>
					<span class="word">貪受諸禪三昧功德而生憍慢</span>
					<span class="punc">，</span>
					<span class="word">為禪所縛</span>
					<span class="punc">，</span>
					<span class="word">退求世間</span>
					<span class="punc">。</span><br/>
					<span class="word">二者</span>
					<span class="punc">，</span>
					<span class="word">無方便信解力故</span>
					<span class="punc">，</span>
					<span class="word">依禪發起偏厭離行</span>
					<span class="punc">，</span>
					<span class="word">怖怯生死</span>
					<span class="punc">，</span>
					<span class="word">退墮二乘</span>
					<span class="punc">。</span><br/>
					<span class="word">三者</span>
					<span class="punc">，</span>
					<span class="word">有方便信解力</span>
					<span class="punc">，</span>
					<span class="word">所謂依止一實境界</span>
					<span class="punc">，</span>
					<span class="word">習近奢摩他</span>
					<span class="punc">、</span>
					<span class="word">毗婆舍那二種觀道故</span>
					<span class="punc">，</span>
					<span class="word">能信解一切法唯心想生</span>
					<span class="punc">，</span>
					<span class="word">如夢如幻等</span>
					<span class="punc">。</span>
					<span class="word">雖獲世間諸禪功德</span>
					<span class="punc">，</span>
					<span class="word">而不堅著</span>
					<span class="punc">，</span>
					<span class="word">不復退求三有之果</span>
					<span class="punc">。</span>
					<span class="word">又信知生死即涅槃故</span>
					<span class="punc">，</span>
					<span class="word">亦不怖怯</span>
					<span class="punc">，</span>
					<span class="word">退求二乘</span>
					<span class="punc">。</span>
				</blockquote>
				<span class="punc">」</span>
			</div>
			<div x-show="details" class="details mb-3">
				「再者，應當知道，如果修學世間有相禪定，有三種，哪三種呢？
				<blockquote>
					一、 沒有方便信解，貪受禪定三昧功德而生驕慢心，為禪所束縛，退求世間法。<br/>
					二、 沒有方便信解，依禪定發起，偏好厭離，恐懼生死，退墜二乘法。<br/>
					三、有方便信解，依止一實境界，學習近似奢摩他、毗婆捨那兩種觀法，能信解一切法唯心所生，如夢如幻，雖獲得世間禪定功德，但不執著，不會退求欲界色界無色界之果，信知生死即涅盤，不會恐懼，退求二乘之法。
				</blockquote>
				」
				<hr/>
			</div>
			<div :class="details ? 'bg-secondary text-white' : ''" class="paragraph">
				<span class="punc">「</span>
				<span class="word">如是修學一切諸禪三昧法者</span>
				<span class="punc">，</span>
				<span class="word">當知有十種次第相門</span>
				<span class="punc">，</span>
				<span class="word">具足攝取禪定之業</span>
				<span class="punc">，</span>
				<span class="word">能令學者成就相應</span>
				<span class="punc">，</span>
				<span class="word">不錯不謬</span>
				<span class="punc">。</span>
				<span class="word">何等為十</span>
				<span class="punc">？</span>
				<blockquote>
					<span class="word">一者</span>
					<span class="punc">，</span>
					<span class="word">攝念方便相</span>
					<span class="punc">。</span><br/>
					<span class="word">二者</span>
					<span class="punc">，</span>
					<span class="word">欲住境界相</span>
					<span class="punc">。</span><br/>
					<span class="word">三者</span>
					<span class="punc">，</span>
					<span class="word">初住境界</span>
					<span class="punc">，</span>
					<span class="word">分明了了知出</span>
					<span class="punc">、</span>
					<span class="word">知入相</span>
					<span class="punc">。</span><br/>
					<span class="word">四者</span>
					<span class="punc">，</span>
					<span class="word">善住境界得堅固相</span>
					<span class="punc">。</span><br/>
					<span class="word">五者</span>
					<span class="punc">，</span>
					<span class="word">所作思惟</span>
					<span class="punc">，</span>
					<span class="word">方便勇猛</span>
					<span class="punc">，</span>
					<span class="word">轉求進趣相</span>
					<span class="punc">。</span><br/>
					<span class="word">六者</span>
					<span class="punc">，</span>
					<span class="word">漸得調順</span>
					<span class="punc">，</span>
					<span class="word">稱心喜樂</span>
					<span class="punc">，</span>
					<span class="word">除疑信解</span>
					<span class="punc">，</span>
					<span class="word">自安慰相</span>
					<span class="punc">。</span><br/>
					<span class="word">七者</span>
					<span class="punc">，</span>
					<span class="word">剋獲勝進</span>
					<span class="punc">，</span>
					<span class="word">意所專者</span>
					<span class="punc">，</span>
					<span class="word">少分相應</span>
					<span class="punc">，</span>
					<span class="word">覺知利益相</span>
					<span class="punc">。</span><br/>
					<span class="word">八者</span>
					<span class="punc">，</span>
					<span class="word">轉修增明</span>
					<span class="punc">，</span>
					<span class="word">所習堅固</span>
					<span class="punc">，</span>
					<span class="word">得勝功德</span>
					<span class="punc">，</span>
					<span class="word">對治成就相</span>
					<span class="punc">。</span><br/>
					<span class="word">九者</span>
					<span class="punc">，</span>
					<span class="word">隨心有所念作</span>
					<span class="punc">，</span>
					<span class="word">外現功德</span>
					<span class="punc">，</span>
					<span class="word">如意相應</span>
					<span class="punc">，</span>
					<span class="word">不錯不謬相</span>
					<span class="punc">。</span><br/>
					<span class="word">十者</span>
					<span class="punc">，</span>
					<span class="word">若更異修</span>
					<span class="punc">，</span>
					<span class="word">依前所得而起方便</span>
					<span class="punc">，</span>
					<span class="word">次第成就</span>
					<span class="punc">，</span>
					<span class="word">出入隨心</span>
					<span class="punc">，</span>
					<span class="word">超越自在相</span>
					<span class="punc">。</span>
				</blockquote>
				<span class="word">是名十種次第相門</span>
				<span class="punc">，</span>
				<span class="word">攝修禪定之業</span>
				<span class="punc">。</span>
				<span class="punc">」</span>
			</div>
			<div x-show="details" class="details mb-3">
				「這樣修學一切禪定三昧，應當知道有十種進階次第，能充分幫助確認禪定過程，能讓修學者清楚禪定相應成就，不會錯誤，是哪十種呢？
				<blockquote>
					一、 方便自如的自我覺知念頭。<br/>
					二、 意識趨向安住於寂靜空相。<br/>
					三、 能初步安住於寂靜空相，對外境覺知清清楚楚，清晰知道念頭與覺知生起和消滅。<br/>
					四、 善於且堅定的安住於寂靜空相。<br/>
					五、 心意逐漸調順，安然自在，疑慮消失，淨信與解悟增長，自我安心安慰之相。<br/>
					六、 思維與行動勇猛精進，希望追求更進一步的禪定境界。<br/>
					七、 克服了妄想，意識能夠專注，能夠少許相應，覺知禪定利益。<br/>
					八、 修行更加清明，所修習的更加堅固，對於調伏妄想念頭能自如對治，能得殊勝功德。<br/>
					九、 隨心念起，而外境即顯，相應如意自在，不會錯誤。<br/>
					十、 如果修學其他法門，依照前面修得方便法，次第成就，出入定隨心，超越而得大自在之相。
				</blockquote>
				這個就是禪定的十個次第，總括禪定修行進階。」
				<hr/>
			</div>
			<div :class="details ? 'bg-secondary text-white' : ''" class="paragraph">
				<span class="word">爾時</span>
				<span class="punc">，</span>
				<span class="word">堅淨信菩薩摩訶薩問地藏菩薩摩訶薩言</span>
				<span class="punc">：</span>
				<span class="punc">「</span>
				<span class="word">汝云何巧說深法</span>
				<span class="punc">，</span>
				<span class="word">能令眾生得離怯弱</span>
				<span class="punc">？</span>
				<span class="punc">」</span>
			</div>
			<div x-show="details" class="details mb-3">
				這時，堅淨信大菩薩問地藏大菩薩：「你為何能夠方便善巧的說這樣的深奧法門，讓眾生能夠遠離恐懼擔心呢？」
				<hr/>
			</div>
			<div :class="details ? 'bg-secondary text-white' : ''" class="paragraph">
				<span class="word">地藏菩薩摩訶薩言</span>
				<span class="punc">：</span>
				<span class="punc">「</span>
				<span class="word">善男子</span>
				<span class="punc">！</span>
				<span class="word">當知初學發意</span>
				<span class="punc">，</span>
				<span class="word">求向大乘</span>
				<span class="punc">，</span>
				<span class="word">未得信心者</span>
				<span class="punc">，</span>
				<span class="word">於無上道甚深之法</span>
				<span class="punc">，</span>
				<span class="word">喜生疑怯</span>
				<span class="punc">。</span>
				<span class="word">我常以方便</span>
				<span class="punc">，</span>
				<span class="word">宣顯實義而安慰之</span>
				<span class="punc">，</span>
				<span class="word">令離怯弱</span>
				<span class="punc">，</span>
				<span class="word">是故號我為善安慰說者</span>
				<span class="punc">。</span>
				<span class="word">云何安慰</span>
				<span class="punc">？</span>
				<span class="word">所謂鈍根小心眾生</span>
				<span class="punc">，</span>
				<span class="word">聞無上道最勝最妙</span>
				<span class="punc">，</span>
				<span class="word">意雖貪樂</span>
				<span class="punc">，</span>
				<span class="word">發心願向</span>
				<span class="punc">。</span>
				<span class="word">而復思念求無上道者</span>
				<span class="punc">，</span>
				<span class="word">要須積功廣極</span>
				<span class="punc">，</span>
				<span class="word">難行苦行</span>
				<span class="punc">，</span>
				<span class="word">自度度他</span>
				<span class="punc">，</span>
				<span class="word">劫數長遠</span>
				<span class="punc">，</span>
				<span class="word">於生死中久受勤苦</span>
				<span class="punc">，</span>
				<span class="word">方乃得獲</span>
				<span class="punc">。</span>
				<span class="word">以是之故</span>
				<span class="punc">，</span>
				<span class="word">心生怯弱</span>
				<span class="punc">。</span>
				<span class="word">我即為說真實之義</span>
				<span class="punc">，</span>
				<span class="word">所謂一切諸法</span>
				<span class="punc">，</span>
				<span class="word">本性自空</span>
				<span class="punc">，</span>
				<span class="word">畢竟無我</span>
				<span class="punc">，</span>
				<span class="word">無作無受</span>
				<span class="punc">，</span>
				<span class="word">無自無他</span>
				<span class="punc">，</span>
				<span class="word">無行無到</span>
				<span class="punc">，</span>
				<span class="word">無有方所</span>
				<span class="punc">，</span>
				<span class="word">亦無過去現在</span>
				<span class="punc">、</span>
				<span class="word">未來</span>
				<span class="punc">。</span>
				<span class="word">乃至為說十八空等</span>
				<span class="punc">，</span>
				<span class="word">無有生死</span>
				<span class="punc">、</span>
				<span class="word">涅槃一切諸法定實之相而可得者</span>
				<span class="punc">。</span>
				<span class="word">又復為說一切諸法如幻如化</span>
				<span class="punc">，</span>
				<span class="word">如水中月</span>
				<span class="punc">，</span>
				<span class="word">如鏡中像</span>
				<span class="punc">，</span>
				<span class="word">如乾闥婆城</span>
				<span class="punc">，</span>
				<span class="word">如空谷響</span>
				<span class="punc">，</span>
				<span class="word">如陽焰</span>
				<span class="punc">，</span>
				<span class="word">如泡</span>
				<span class="punc">，</span>
				<span class="word">如露</span>
				<span class="punc">，</span>
				<span class="word">如燈</span>
				<span class="punc">，</span>
				<span class="word">如目𪾼</span>
				<span class="punc">，</span>
				<span class="word">如夢</span>
				<span class="punc">，</span>
				<span class="word">如電</span>
				<span class="punc">，</span>
				<span class="word">如雲</span>
				<span class="punc">。</span>
				<span class="word">煩惱生死</span>
				<span class="punc">，</span>
				<span class="word">性甚微弱</span>
				<span class="punc">，</span>
				<span class="word">易可令滅</span>
				<span class="punc">。</span>
				<span class="word">又煩惱生死</span>
				<span class="punc">，</span>
				<span class="word">畢竟無體</span>
				<span class="punc">，</span>
				<span class="word">求不可得</span>
				<span class="punc">。</span>
				<span class="word">本來不生</span>
				<span class="punc">，</span>
				<span class="word">實更無滅</span>
				<span class="punc">。</span>
				<span class="word">自性寂靜</span>
				<span class="punc">，</span>
				<span class="word">即是涅槃</span>
				<span class="punc">。</span>
				<span class="word">如此所說</span>
				<span class="punc">，</span>
				<span class="word">能破一切諸見</span>
				<span class="punc">，</span>
				<span class="word">損自身心執著想故</span>
				<span class="punc">，</span>
				<span class="word">得離怯弱</span>
				<span class="punc">。</span>
				<span class="punc">」</span>
			</div>
			<div x-show="details" class="details mb-3">
				地藏大菩薩說：「善男子，應當知道初發心修習大乘佛法，沒有信心的，對於無上深奧之法，易生懷疑和擔心，我經常以方便法，宣說真實義理安撫他，讓他增長信心遠離擔心，所以我稱號為善於安撫他人說法者。如何安撫呢？對於根基尚淺的眾生，聽聞這樣無上深奧最殊勝最奧妙之法，雖然貪愛，也發心修學，但又覺得修學無上之道，需要廣積極多功德，苦行也難行，自度度他，劫數實在太長遠，在生死之中持久受苦，方才有所獲，以這樣的原因，心生憂慮和擔心。我即為他說真實之義理，所謂一切萬法，本性為空，徹底遠離我執，沒有造作也無覺受，無自己無外境，無行無到，沒有方向處所，也沒有過去現在未來，乃至為他宣說十八覺受為空等，沒有生死涅盤一切萬法確定實在之相可得之相。又再為他宣說一切萬法，如夢幻化，如水中月，如鏡中像，如海市蜃樓，如空谷回響，如火焰，如水泡，如露水，如燈光，如目翳，如夢，如電，如雲；煩惱生死，常性微弱，很容易滅去；又煩惱生死，畢竟無本質實體，求不可得，本來不生，實則更無滅；自性寂靜，即是涅槃。這樣所說，能破一切知見束縛，破除自身內心執著之念，得以遠離害怕擔心。」
				<hr/>
			</div>
			<div :class="details ? 'bg-secondary text-white' : ''" class="paragraph">
				<span class="punc">「</span>
				<span class="word">復有眾生</span>
				<span class="punc">，</span>
				<span class="word">不解如來言說旨意故而生怯弱</span>
				<span class="punc">。</span>
				<span class="word">當知如來言說旨意者</span>
				<span class="punc">，</span>
				<span class="word">所謂如來見彼一實境界故</span>
				<span class="punc">，</span>
				<span class="word">究竟得離生老病死眾惡之法</span>
				<span class="punc">，</span>
				<span class="word">證彼法身常恒清涼不變異等無量功德聚</span>
				<span class="punc">。</span>
				<span class="word">復能了了見一切眾生身中</span>
				<span class="punc">，</span>
				<span class="word">皆有如是真實微妙清淨功德</span>
				<span class="punc">，</span>
				<span class="word">而為無明闇染之所覆障</span>
				<span class="punc">，</span>
				<span class="word">長夜恒受生老病死無量眾苦</span>
				<span class="punc">。</span>
				<span class="word">如來於此起大慈悲意</span>
				<span class="punc">，</span>
				<span class="word">欲令一切眾生離於眾苦</span>
				<span class="punc">，</span>
				<span class="word">同獲法身第一義樂</span>
				<span class="punc">。</span>
				<span class="word">而彼法身</span>
				<span class="punc">，</span>
				<span class="word">是無分別離念之法</span>
				<span class="punc">。</span>
				<span class="word">唯有能滅虛妄識想不起念著</span>
				<span class="punc">，</span>
				<span class="word">乃所應得</span>
				<span class="punc">。</span>
				<span class="word">但一切眾生</span>
				<span class="punc">，</span>
				<span class="word">常樂分別取著諸法</span>
				<span class="punc">，</span>
				<span class="word">以顛倒妄想故而受生死</span>
				<span class="punc">。</span>
				<span class="punc">」</span>
			</div>
			<div x-show="details" class="details mb-3">
				「又有眾生，不能理解如來所說意旨而心生擔心害怕。應當知道如來所說意旨，如來見一體實境，徹底遠離生老病死種種惡法，親證法身恆常清涼，無所變異等無量功德作用相聚，又能清晰了知一切眾生身中，都有這樣的真實微妙清淨功德作用，只是被無明暗染習氣所遮蓋障礙，如同漫漫長夜恆常遭受生老病死等種種無量之苦。如來生大慈悲心，意願讓一切眾生遠離眾苦，一同獲得法身第一義之樂。而法身，無分別離妄念，只有能滅虛妄心識念想，不起思念的，才能與法身相應。但一切眾生，恆常分別執著萬法，因為顛倒妄想而遭受生死。」
				<hr/>
			</div>
			<div :class="details ? 'bg-secondary text-white' : ''" class="paragraph">
				<span class="punc">「</span>
				<span class="word">是故如來為欲令彼離於分別執著想故</span>
				<span class="punc">，</span>
				<span class="word">說一切世間法</span>
				<span class="punc">，</span>
				<span class="word">畢竟體空無所有</span>
				<span class="punc">。</span>
				<span class="word">乃至一切出世間法</span>
				<span class="punc">，</span>
				<span class="word">亦畢竟體空無所有</span>
				<span class="punc">。</span>
				<span class="word">若廣說者</span>
				<span class="punc">，</span>
				<span class="word">如十八空</span>
				<span class="punc">。</span>
				<span class="word">如是顯示一切諸法</span>
				<span class="punc">，</span>
				<span class="word">皆不離菩提體</span>
				<span class="punc">。</span>
				<span class="word">菩提體者</span>
				<span class="punc">，</span>
				<span class="word">非有</span>
				<span class="punc">、</span>
				<span class="word">非無</span>
				<span class="punc">、</span>
				<span class="word">非非有</span>
				<span class="punc">、</span>
				<span class="word">非非無</span>
				<span class="punc">、</span>
				<span class="word">非有無俱</span>
				<span class="punc">，</span>
				<span class="word">非一</span>
				<span class="punc">、</span>
				<span class="word">非異</span>
				<span class="punc">、</span>
				<span class="word">非非一</span>
				<span class="punc">、</span>
				<span class="word">非非異</span>
				<span class="punc">、</span>
				<span class="word">非一異俱</span>
				<span class="punc">。</span>
				<span class="word">乃至畢竟無有一相而可得者</span>
				<span class="punc">，</span>
				<span class="word">以離一切相故</span>
				<span class="punc">。</span>
				<span class="word">離一切相者</span>
				<span class="punc">，</span>
				<span class="word">所謂不可依言說取</span>
				<span class="punc">。</span>
				<span class="word">以菩提法中</span>
				<span class="punc">，</span>
				<span class="word">無有受言說者</span>
				<span class="punc">，</span>
				<span class="word">及無能言說者故</span>
				<span class="punc">。</span>
				<span class="word">又不可依心念知</span>
				<span class="punc">。</span>
				<span class="word">以菩提法中</span>
				<span class="punc">，</span>
				<span class="word">無有能取</span>
				<span class="punc">、</span>
				<span class="word">可取</span>
				<span class="punc">，</span>
				<span class="word">無自無他</span>
				<span class="punc">，</span>
				<span class="word">離分別想故</span>
				<span class="punc">。</span>
				<span class="word">若有分別想者</span>
				<span class="punc">，</span>
				<span class="word">則為虛偽</span>
				<span class="punc">，</span>
				<span class="word">不名相應</span>
				<span class="punc">。</span>
				<span class="punc">」</span>
			</div>
			<div x-show="details" class="details mb-3">
				「所以如來為讓他們遠離分別執著念想，說一切世間之法皆畢竟空無所有；乃至一切出世間之法，也畢竟空無所有。廣泛的說，如十八覺受空。這樣顯示一切萬法，皆不離菩提性體。菩提性體，非有非無，非非有，非非無，非有無相聚，非一，非異，非非一，非非異，非一異相聚，乃至畢竟沒有一相可得，離一切相，不可以來用語言說，菩提之法中，沒有能接受言說，也不能言說，又不可以以心念而知，菩提之法中，沒有能取和可取得，無自我無外境，離於分別之相。若有分別之想，則為虛偽，不能與法身相應。」
				<hr/>
			</div>
			<div :class="details ? 'bg-secondary text-white' : ''" class="paragraph">
				<span class="punc">「</span>
				<span class="word">如是等說</span>
				<span class="punc">，</span>
				<span class="word">鈍根眾生不能解者</span>
				<span class="punc">，</span>
				<span class="word">謂無上道如來法身但唯空法</span>
				<span class="punc">，</span>
				<span class="word">一向畢竟而無所有</span>
				<span class="punc">，</span>
				<span class="word">其心怯弱</span>
				<span class="punc">，</span>
				<span class="word">畏墮無所得中</span>
				<span class="punc">。</span>
				<span class="word">或生斷滅想</span>
				<span class="punc">，</span>
				<span class="word">作增減見</span>
				<span class="punc">，</span>
				<span class="word">轉起誹謗</span>
				<span class="punc">，</span>
				<span class="word">自輕輕他</span>
				<span class="punc">。</span>
				<span class="word">我即為說如來法身</span>
				<span class="punc">，</span>
				<span class="word">自性不空</span>
				<span class="punc">，</span>
				<span class="word">有真實體</span>
				<span class="punc">，</span>
				<span class="word">具足無量清淨功業</span>
				<span class="punc">。</span>
				<span class="word">從無始世來</span>
				<span class="punc">，</span>
				<span class="word">自然圓滿</span>
				<span class="punc">，</span>
				<span class="word">非修非作</span>
				<span class="punc">。</span>
				<span class="word">乃至一切眾生身中</span>
				<span class="punc">，</span>
				<span class="word">亦皆具足</span>
				<span class="punc">，</span>
				<span class="word">不變不異</span>
				<span class="punc">，</span>
				<span class="word">無增無減</span>
				<span class="punc">。</span>
				<span class="word">如是等說</span>
				<span class="punc">，</span>
				<span class="word">能除怯弱</span>
				<span class="punc">，</span>
				<span class="word">是名安慰</span>
				<span class="punc">。</span>
				<span class="punc">」</span>
			</div>
			<div x-show="details" class="details mb-3">
				「這樣所說，根基尚淺的眾生不能理解，以為無上道法如來法身只有空法，畢竟無所有，心生擔心疑慮，害怕墮入無所得之中，或者生斷滅之想，生增減知見，轉而誹謗，自我輕視也輕視他人。我即為他說如來法身，自性不空，有真實之體，具足無量清淨功德之作用。從無始以來，自然圓滿，無需修行也無需造作。乃至一切眾生身中，也都具足，不變不異，無增無減。這樣說，能除去他們疑慮擔心，這就是安撫安慰之方便了。」
				<hr/>
			</div>
			<div :class="details ? 'bg-secondary text-white' : ''" class="paragraph">
				<span class="punc">「</span>
				<span class="word">又復</span>
				<span class="punc">，</span>
				<span class="word">愚癡堅執眾生</span>
				<span class="punc">，</span>
				<span class="word">聞如是等說亦生怯弱</span>
				<span class="punc">。</span>
				<span class="word">以取如來法身本來滿足</span>
				<span class="punc">，</span>
				<span class="word">非修非作相故</span>
				<span class="punc">，</span>
				<span class="word">起無所得想而生怯弱</span>
				<span class="punc">，</span>
				<span class="word">或計自然墮邪倒見</span>
				<span class="punc">。</span>
				<span class="word">我即為說修行一切善法</span>
				<span class="punc">，</span>
				<span class="word">增長滿足</span>
				<span class="punc">，</span>
				<span class="word">生如來色身</span>
				<span class="punc">，</span>
				<span class="word">得無量功德清淨果報</span>
				<span class="punc">。</span>
				<span class="word">如此等說</span>
				<span class="punc">，</span>
				<span class="word">令離怯弱</span>
				<span class="punc">，</span>
				<span class="word">是為安慰</span>
				<span class="punc">。</span>
				<span class="word">而我所說甚深之義</span>
				<span class="punc">，</span>
				<span class="word">真實相應</span>
				<span class="punc">，</span>
				<span class="word">無有諸過</span>
				<span class="punc">，</span>
				<span class="word">以離相違說故</span>
				<span class="punc">。</span>
				<span class="word">云何知離相違相</span>
				<span class="punc">？</span>
				<span class="word">所謂如來法身中</span>
				<span class="punc">，</span>
				<span class="word">雖復無有言說境界</span>
				<span class="punc">，</span>
				<span class="word">離心想念</span>
				<span class="punc">，</span>
				<span class="word">非空非不空</span>
				<span class="punc">。</span>
				<span class="word">乃至無一切相</span>
				<span class="punc">，</span>
				<span class="word">不可依言說示</span>
				<span class="punc">，</span>
				<span class="word">而據世諦幻化因緣假名法中</span>
				<span class="punc">，</span>
				<span class="word">相待相對</span>
				<span class="punc">，</span>
				<span class="word">則可方便顯示而說</span>
				<span class="punc">。</span>
				<span class="word">以彼法身性實無分別</span>
				<span class="punc">，</span>
				<span class="word">離自相</span>
				<span class="punc">、</span>
				<span class="word">離他相</span>
				<span class="punc">，</span>
				<span class="word">無空</span>
				<span class="punc">、</span>
				<span class="word">無不空</span>
				<span class="punc">，</span>
				<span class="word">乃至遠離一切諸相故</span>
				<span class="punc">，</span>
				<span class="word">說彼法體為畢竟空無所有</span>
				<span class="punc">。</span>
				<span class="word">以離心分別</span>
				<span class="punc">，</span>
				<span class="word">想念則盡</span>
				<span class="punc">，</span>
				<span class="word">無一相而能自見自知為有</span>
				<span class="punc">，</span>
				<span class="word">是故空義決定真實</span>
				<span class="punc">，</span>
				<span class="word">相應不謬</span>
				<span class="punc">。</span>
				<span class="punc">」</span>
			</div>
			<div x-show="details" class="details mb-3">
				「又有欠缺智慧固執己見的眾生，聽聞這樣的說法，也心生疑慮和擔心，以為如來法身本來圓滿具足，無需修行也無需造作，生起無所得的想法而心生疑慮和擔心，或者執著於自然之道，墮入顛倒邪見，我即為他說應修一切善法，增長功德，功德圓滿，生如來色身，得無量功德清淨果報。這樣說，能讓他遠離疑慮和擔心，這就是安撫安慰。而我所說的深奧義理，真實相應，沒有過失，因為離相違而說，如何知道離相違相呢？如來法身中，雖然也有言說境界，遠離心想念頭，非空非不空，乃至無一切相，不可憑借語言而說，而根據世間俗諦幻化因緣，假名為法中，相應相對，才可以方便而說。而法身，實則無分別，離自相，離他相，無空，無不空，乃至遠離一切萬相，說法身之體為畢竟空無所有，以遠離心識分別念頭，無一相而能自見自知說為有，所以空性之義確定真實，相應不會錯誤。」
				<hr/>
			</div>
			<div :class="details ? 'bg-secondary text-white' : ''" class="paragraph">
				<span class="punc">「</span>
				<span class="word">復次</span>
				<span class="punc">，</span>
				<span class="word">即彼空義中</span>
				<span class="punc">，</span>
				<span class="word">以離分別妄想心念故</span>
				<span class="punc">，</span>
				<span class="word">則盡畢竟無有一相而可空者</span>
				<span class="punc">，</span>
				<span class="word">以唯有真實故</span>
				<span class="punc">，</span>
				<span class="word">即為不空</span>
				<span class="punc">。</span>
				<span class="word">所謂離識想故</span>
				<span class="punc">，</span>
				<span class="word">無有一切虛偽之相</span>
				<span class="punc">，</span>
				<span class="word">畢竟常恒</span>
				<span class="punc">，</span>
				<span class="word">不變不異</span>
				<span class="punc">，</span>
				<span class="word">以更無一相可壞可滅</span>
				<span class="punc">，</span>
				<span class="word">離增減故</span>
				<span class="punc">。</span>
				<span class="word">又彼無分別實體之處</span>
				<span class="punc">，</span>
				<span class="word">從無始世來</span>
				<span class="punc">，</span>
				<span class="word">具無量功德自然之業</span>
				<span class="punc">，</span>
				<span class="word">成就相應</span>
				<span class="punc">，</span>
				<span class="word">不離不脫故</span>
				<span class="punc">，</span>
				<span class="word">說為不空</span>
				<span class="punc">。</span>
				<span class="word">如是實體功德之聚</span>
				<span class="punc">，</span>
				<span class="word">一切眾生雖復有之</span>
				<span class="punc">，</span>
				<span class="word">但為無明曀覆障故而不知見</span>
				<span class="punc">，</span>
				<span class="word">不能剋獲功德利益</span>
				<span class="punc">，</span>
				<span class="word">與無莫異</span>
				<span class="punc">，</span>
				<span class="word">說名未有</span>
				<span class="punc">。</span>
				<span class="word">以不知見彼法體故</span>
				<span class="punc">，</span>
				<span class="word">所有功德利益之業</span>
				<span class="punc">，</span>
				<span class="word">非彼眾生所能受用</span>
				<span class="punc">，</span>
				<span class="word">不名屬彼</span>
				<span class="punc">。</span>
				<span class="word">唯依遍修一切善法</span>
				<span class="punc">，</span>
				<span class="word">對治諸障</span>
				<span class="punc">，</span>
				<span class="word">見彼法身</span>
				<span class="punc">，</span>
				<span class="word">然後剋獲功德利益</span>
				<span class="punc">，</span>
				<span class="word">是故說修一切善法</span>
				<span class="punc">，</span>
				<span class="word">生如來色身</span>
				<span class="punc">、</span>
				<span class="word">智身</span>
				<span class="punc">。</span>
				<span class="punc">」</span>
			</div>
			<div x-show="details" class="details mb-3">
				「再者，在這個空性義理中，因為遠離分別妄想心念，實則畢竟沒有一相而可以空的，因為只有真實，即為不空，即所謂離心識念想的緣故，沒有一切虛偽之相，畢竟恆常，不變不異，更別說有一相可以壞滅，沒有增減。這個無分別的實體，從無始以來，具足無量功德，自然發生作用，相應成就，不會脫離，那麼說這是不空。這樣的實體功德作用相聚，一切眾生雖然也具備，但被無明障礙遮蓋，而無法了知，不能克服而獲得利益功德，與不具有沒有什麼不同，是名為沒有。因為不能了知法身之體，所有利益功德作用，這些眾生不能享受利用，則說這不屬於他們。只有以遍修一切善法，來對治這些業障，親見法身，然後才能獲得利益功德，所以說修一切善法，能生如來色身能得如來智慧。」
				<hr/>
			</div>
			<div :class="details ? 'bg-secondary text-white' : ''" class="paragraph">
				<span class="punc">「</span>
				<span class="word">善男子</span>
				<span class="punc">！</span>
				<span class="word">如我所說甚深之義</span>
				<span class="punc">，</span>
				<span class="word">決定真實</span>
				<span class="punc">，</span>
				<span class="word">離相違過</span>
				<span class="punc">，</span>
				<span class="word">當如是知</span>
				<span class="punc">。</span>
				<span class="punc">」</span>
			</div>
			<div x-show="details" class="details mb-3">
				「善男子！我所說深奧義理，徹底而真實，沒有過錯，應當這樣去理解。」
				<hr/>
			</div>
			<div :class="details ? 'bg-secondary text-white' : ''" class="paragraph">
				<span class="word">爾時</span>
				<span class="punc">，</span>
				<span class="word">地藏菩薩摩訶薩說如此等殊勝方便深要法門時</span>
				<span class="punc">，</span>
				<span class="word">有十萬億眾生</span>
				<span class="punc">，</span>
				<span class="word">發阿耨多羅三藐三菩提心</span>
				<span class="punc">，</span>
				<span class="word">住堅信位</span>
				<span class="punc">。</span>
				<span class="word">復有九萬八千菩薩</span>
				<span class="punc">，</span>
				<span class="word">得無生法忍</span>
				<span class="punc">。</span>
				<span class="word">一切大眾各以天香花供養於佛</span>
				<span class="punc">，</span>
				<span class="word">及供養地藏菩薩摩訶薩</span>
				<span class="punc">。</span>
			</div>
			<div x-show="details" class="details mb-3">
				這時，地藏大菩薩說這樣的殊勝方便深奧法門時，有無量的眾生，發阿耨多羅三藐三菩提心，安住堅信階位；又有很多菩薩得無生法忍。一切大眾各個用天妙香花供養佛陀和地藏大菩薩。
				<hr/>
			</div>
			<div :class="details ? 'bg-secondary text-white' : ''" class="paragraph">
				<span class="word">爾時</span>
				<span class="punc">，</span>
				<span class="word">佛告諸大眾言</span>
				<span class="punc">：</span>
				<span class="punc">「</span>
				<span class="word">汝等各各應當受持此法門</span>
				<span class="punc">，</span>
				<span class="word">隨所住處</span>
				<span class="punc">，</span>
				<span class="word">廣令流布</span>
				<span class="punc">。</span>
				<span class="word">所以者何</span>
				<span class="punc">？</span>
				<span class="word">如此法門</span>
				<span class="punc">，</span>
				<span class="word">甚為難值</span>
				<span class="punc">，</span>
				<span class="word">能大利益</span>
				<span class="punc">。</span>
				<span class="word">若人得聞彼地藏菩薩摩訶薩名號</span>
				<span class="punc">，</span>
				<span class="word">及信其所說者</span>
				<span class="punc">，</span>
				<span class="word">當知是人速能得離一切所有諸障礙事</span>
				<span class="punc">，</span>
				<span class="word">疾至無上道</span>
				<span class="punc">。</span>
				<span class="punc">」</span>
			</div>
			<div x-show="details" class="details mb-3">
				這時，佛陀對大眾說：「你們每個人應當受持這個法門，隨緣在所到之處，廣泛的傳播。為什麼呢？這樣的法門，實在難以遇到，若遇到能獲得大利益，如果有聽聞這位地藏大菩薩的名號，相信他所說的，應當知道這個人能迅速脫離所有一切業障，速證無上道法。」
				<hr/>
			</div>
			<div :class="details ? 'bg-secondary text-white' : ''" class="paragraph">
				<span class="word">於是大眾皆同發言</span>
				<span class="punc">：</span>
				<span class="punc">「</span>
				<span class="word">我當受持</span>
				<span class="punc">，</span>
				<span class="word">流布世間</span>
				<span class="punc">，</span>
				<span class="word">不敢令忘</span>
				<span class="punc">。</span>
				<span class="punc">」</span>
			</div>
			<div x-show="details" class="details mb-3">
				於是大眾都同時說：「我們應當修學，流傳此法門於世間，不敢忘記。」
				<hr/>
			</div>
			<div :class="details ? 'bg-secondary text-white' : ''" class="paragraph">
				<span class="word">爾時</span>
				<span class="punc">，</span>
				<span class="word">堅淨信菩薩摩訶薩白佛言</span>
				<span class="punc">：</span>
				<span class="punc">「</span>
				<span class="word">世尊</span>
				<span class="punc">，</span>
				<span class="word">如是所說六根聚修多羅中</span>
				<span class="punc">，</span>
				<span class="word">名何法門</span>
				<span class="punc">？</span>
				<span class="word">此法真要</span>
				<span class="punc">，</span>
				<span class="word">我當受持</span>
				<span class="punc">，</span>
				<span class="word">令未來世普皆得聞</span>
				<span class="punc">。</span>
				<span class="punc">」</span>
			</div>
			<div x-show="details" class="details mb-3">
				這時，堅淨信大菩薩對佛陀說：「世尊，剛才所說的六根相聚教法，叫什麼法門呢？這個法門真的很重要，我應當修學，也要讓末法眾生普遍聽聞。」
				<hr/>
			</div>
			<div :class="details ? 'bg-secondary text-white' : ''" class="paragraph">
				<span class="word">佛告堅淨信菩薩摩訶薩言</span>
				<span class="punc">：</span>
				<span class="punc">「</span>
				<span class="word">此法門名為</span>
				<span class="punc">『</span>
				<span class="word">占察善惡業報</span>
				<span class="punc">』</span>
				<span class="punc">；</span>
				<span class="word">亦名</span>
				<span class="punc">『</span>
				<span class="word">消除諸障增長淨信</span>
				<span class="punc">』</span>
				<span class="punc">；</span>
				<span class="word">亦名</span>
				<span class="punc">『</span>
				<span class="word">開示求向大乘者進趣方便顯出甚深究竟實義</span>
				<span class="punc">』</span>
				<span class="punc">；</span>
				<span class="word">亦名</span>
				<span class="punc">『</span>
				<span class="word">善安慰說令離怯弱速入堅信決定法門</span>
				<span class="punc">』</span>
				<span class="punc">。</span>
				<span class="word">依如是名義</span>
				<span class="punc">，</span>
				<span class="word">汝當受持</span>
				<span class="punc">。</span>
				<span class="punc">」</span>
			</div>
			<div x-show="details" class="details mb-3">
				佛陀對堅淨信菩薩說：「這個法門名叫『占察善惡業報』，也叫『消除諸障增長淨信』（消除各種業障，增長淨信），又叫『開示求向大乘者進趣方便顯出甚深究竟實義』（開示求學大乘智慧方便，剖析深奧徹底的真實義理法門），又名『善安慰說令離怯弱速入堅信決定法門』（善於安慰，讓人遠離疑慮擔心，迅速契入堅定淨信法門）。依據這樣的名與義，你們應當修學。」
				<hr/>
			</div>
			<div :class="details ? 'bg-secondary text-white' : ''" class="paragraph">
				<span class="word">佛說此法門名已</span>
				<span class="punc">，</span>
				<span class="word">一切眾會</span>
				<span class="punc">，</span>
				<span class="word">悉皆歡喜</span>
				<span class="punc">，</span>
				<span class="word">信受奉行</span>
				<span class="punc">。</span>
			</div>
			<div x-show="details" class="details mb-3">
				佛陀說完此法門名稱後，所有的與會大眾，都歡欣鼓舞，淨信奉行。
				<hr/>
			</div>
			<div class="paragraph">
				<h2>
					<span class="word">占察善惡業報經卷下</span>
				</h2>
			</div>
			<div class="d-flex mb-3">
				<div class="me-auto w-50">
					<a href="/ksitigarbha-divination-vol1" class="btn btn-link border p-2 me-3 w-100 h-100 text-decoration-none">
						<div class="d-flex h-100 justify-content-between align-items-center">
							<div class="d-flex">
								<i class="fas fa-arrow-circle-left fs-1"></i>
							</div>
							<div class="d-flex w-100 justify-content-center">
								<span class="ms-2 text-start text-truncate">占察善惡業報經卷上</span>
							</div>
						</div>
					</a>
				</div>
				<div class="ms-auto me-3 w-50">
					<a href="/ksitigarbha-divination-practices" class="btn btn-link border p-2 ms-3 w-100 h-100 text-decoration-none">
						<div class="d-flex h-100 justify-content-between align-items-center">
							<div class="d-flex w-100 justify-content-center">
								<span class="me-2 text-start text-truncate">占察善惡業報經行法</span>
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
