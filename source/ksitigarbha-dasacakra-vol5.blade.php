@extends('_layouts.main')

@section('title')
<title>大乘大集地藏十輪經卷五</title>
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
				x-data="{currItems: {vol5: true}}"
				class="sticky-top"
				textsize-supported
				trans-supported
			>
				<ul class="nav navbar-nav">
					<li>
						<a class="nav-link text-nowrap" href="/ksitigarbha-dasacakra-vol1">地藏十輪經卷一</a>
					</li>
					<li>
						<a class="nav-link text-nowrap" href="/ksitigarbha-dasacakra-vol2">地藏十輪經卷二</a>
					</li>
					<li>
						<a class="nav-link text-nowrap" href="/ksitigarbha-dasacakra-vol3">地藏十輪經卷三</a>
					</li>
					<li>
						<a class="nav-link text-nowrap" href="/ksitigarbha-dasacakra-vol4">地藏十輪經卷四</a>
					</li>
					<li>
						<a @@click="jumpTo('vol5')" :class="{active: currItems['vol5'] && true}" class="nav-link text-nowrap" href="#vol5">地藏十輪經卷五</a>
						<ul class="nav navbar-nav">
							<li><a @@click="jumpTo('vol5-ch5')" :class="{active: currItems['vol5-ch5'] && true}" class="nav-link text-nowrap" href="#vol5-ch5">無依行品第三之三</a></li>
							<li><a @@click="jumpTo('vol5-m2')" :class="{active: currItems['vol5-m2'] && true}" class="nav-link text-nowrap" href="#vol5-m2">護國不退輪心<br/>大陀羅尼明呪章句</a></li>
							<li><a @@click="jumpTo('vol5-ch6')" :class="{active: currItems['vol5-ch6'] && true}" class="nav-link text-nowrap" href="#vol5-ch6">有依行品第四之一</a></li>
						</ul>
					</li>
					<li>
						<a class="nav-link text-nowrap" href="/ksitigarbha-dasacakra-vol6">地藏十輪經卷六</a>
					</li>
					<li>
						<a class="nav-link text-nowrap" href="/ksitigarbha-dasacakra-vol7">地藏十輪經卷七</a>
					</li>
					<li>
						<a class="nav-link text-nowrap" href="/ksitigarbha-dasacakra-vol8">地藏十輪經卷八</a>
					</li>
					<li>
						<a class="nav-link text-nowrap" href="/ksitigarbha-dasacakra-vol9">地藏十輪經卷九</a>
					</li>
					<li>
						<a class="nav-link text-nowrap" href="/ksitigarbha-dasacakra-vol10">地藏十輪經卷十</a>
					</li>
				</ul>
				<x-slot:transCtrlSubtitle>
					<small class="ms-2">
						(譕非原譯，轉載自 <a href="https://mahagoogol.pixnet.net/blog/post/185651701">「譕非的部落格」</a>，內有詳盡註釋。
						由於原譯經文與 <a href="https://cbetaonline.dila.edu.tw/zh/T13n0411_p0721a04">CBETA</a> 有出入，本站依從 CBETA 的版本及對內容略作修改。)
					</small>
				</x-slot>
			</x-toc>
		</div>
		<div id="content" class="col-md-9" :class="{'font-enlarged': textsize == 2, 'readonly': readOnly}">
			<nav>
				<ol class="breadcrumb">
					<li class="breadcrumb-item">地藏經典</li>
					<li class="breadcrumb-item"><a href="/ksitigarbha-dasacakra-vol1">大乘大集地藏十輪經</a></li>
					<li class="breadcrumb-item active">卷五</li>
				</ol>
			</nav>
		
			<h1>大乘大集地藏十輪經</h1>
			<small class="float-end mb-3">三藏法師玄奘　譯</small>
			<div class="clearfix"></div>
			<h2 class="toc-item" id="vol5">
				<span class="word">地藏十輪經卷五</span>
			</h2>
			<h4 class="toc-item" id="vol5-ch5">
				<span class="word">無依行品第三之三</span>
			</h4>
			<div :class="details ? 'bg-secondary text-white' : ''" class="paragraph">
				<span class="word">爾時地藏菩薩摩訶薩復白佛言</span>
				<span class="punc">：</span>
				<span class="word">大德世尊</span>
				<span class="punc">！</span>
				<span class="word">若有真善剎帝利</span>
				<span class="punc">、</span>
				<span class="word">真善宰官</span>
				<span class="punc">、</span>
				<span class="word">真善居士</span>
				<span class="punc">、</span>
				<span class="word">真善長者</span>
				<span class="punc">、</span>
				<span class="word">真善沙門</span>
				<span class="punc">、</span>
				<span class="word">真善婆羅門</span>
				<span class="punc">。</span>
				<span class="word">如是等人</span>
				<span class="punc">，</span>
				<span class="word">能自善護</span>
				<span class="punc">，</span>
				<span class="word">亦善護他</span>
				<span class="punc">，</span>
				<span class="word">善護後世</span>
				<span class="punc">，</span>
				<span class="word">善護佛法</span>
				<span class="punc">。</span>
				<span class="word">出家之人若是法器</span>
				<span class="punc">，</span>
				<span class="word">若非法器</span>
				<span class="punc">，</span>
				<span class="word">下至無戒剃除鬚髮被袈裟者</span>
				<span class="punc">，</span>
				<span class="word">普善守護</span>
				<span class="punc">，</span>
				<span class="word">恭敬供養</span>
				<span class="punc">。</span>
				<span class="word">又能善護聲聞乘法</span>
				<span class="punc">，</span>
				<span class="word">緣覺乘法及大乘法</span>
				<span class="punc">，</span>
				<span class="word">恭敬聽聞</span>
				<span class="punc">，</span>
				<span class="word">信受供養</span>
				<span class="punc">。</span>
				<span class="word">於住大乘具戒富德</span>
				<span class="punc">，</span>
				<span class="word">精勤修行</span>
				<span class="punc">，</span>
				<span class="word">乃至住果補特伽羅</span>
				<span class="punc">，</span>
				<span class="word">能善守護助其勢力</span>
				<span class="punc">，</span>
				<span class="word">諮問聽受歡喜談論</span>
				<span class="punc">，</span>
				<span class="word">遠離破戒惡行苾芻</span>
				<span class="punc">。</span>
			</div>
			<div x-show="details" class="details mb-3">
				這時地藏菩薩摩訶薩又對佛說：大德世尊！如果有身心俱善俱淨的真善剎帝利、真善宰官、真善居士、真善長者、真善沙門、真善婆羅門。這樣身心俱淨的善人，能盡心守護自身，又能盡心守護他人，盡心守護後世，盡心守護佛法。對於出家人，無論是能任持正法的法器僧，或非法器僧，下到還未受戒只是剃除鬚髮穿著袈裟的僧人，都能盡心守護，恭敬供養。又能盡心守護聲聞乘法，緣覺乘法及大乘佛法，一切佛法都能恭敬聽聞，信解受持恭敬供養。對於依止大乘佛法精勤修行，戒德兼備，乃至證得正果的僧眾，都能盡心守護增長威德勢力，歡喜前去請益聽受及談論正法，遠離破戒惡行比丘。
				<hr/>
			</div>
			<div :class="details ? 'bg-secondary text-white' : ''" class="paragraph">
				<span class="word">於諸所施四方僧物</span>
				<span class="punc">，</span>
				<span class="word">終不令人非法費用</span>
				<span class="punc">，</span>
				<span class="word">勤加守護供四方僧</span>
				<span class="punc">。</span>
				<span class="word">於窣堵波及僧祇物</span>
				<span class="punc">，</span>
				<span class="word">終不自奪不教他奪</span>
				<span class="punc">，</span>
				<span class="word">亦不自用不教他用</span>
				<span class="punc">。</span>
				<span class="word">於能辯說三乘法人</span>
				<span class="punc">，</span>
				<span class="word">恭敬供養</span>
				<span class="punc">，</span>
				<span class="word">加護與力</span>
				<span class="punc">，</span>
				<span class="word">不令他人誹謗毀辱</span>
				<span class="punc">。</span>
				<span class="word">尊重安慰諸出家人</span>
				<span class="punc">，</span>
				<span class="word">信受護持佛所說法</span>
				<span class="punc">。</span>
				<span class="word">終不破壞諸窣堵波</span>
				<span class="punc">，</span>
				<span class="word">亦常護持僧伽藍舍</span>
				<span class="punc">，</span>
				<span class="word">於剃鬚髮被服袈裟出家人所</span>
				<span class="punc">，</span>
				<span class="word">終不毀廢</span>
				<span class="punc">。</span>
				<span class="word">於十惡輪自不染習</span>
				<span class="punc">，</span>
				<span class="word">亦常勸他離十惡輪</span>
				<span class="punc">。</span>
				<span class="word">具學先王治國正法</span>
				<span class="punc">，</span>
				<span class="word">紹三寶種常令熾盛</span>
				<span class="punc">。</span>
				<span class="word">恒樂親近諸善知識</span>
				<span class="punc">，</span>
				<span class="word">慈心撫育一切國人</span>
				<span class="punc">，</span>
				<span class="word">隨其所宜</span>
				<span class="punc">，</span>
				<span class="word">方便化導</span>
				<span class="punc">，</span>
				<span class="word">令捨邪法</span>
				<span class="punc">，</span>
				<span class="word">修行正法</span>
				<span class="punc">。</span>
				<span class="word">如是真善剎帝利王</span>
				<span class="punc">，</span>
				<span class="word">乃至真善婆羅門等</span>
				<span class="punc">，</span>
				<span class="word">得幾所福</span>
				<span class="punc">？</span>
				<span class="word">滅幾所罪</span>
				<span class="punc">？</span>
			</div>
			<div x-show="details" class="details mb-3">
				對於信眾布施供養的四方僧物，絕不讓人非法耗用，勤加守護以供養僧眾。對於廟塔及僧眾公物，絕不自己奪取也不讓他人奪取，自己不妄用也不讓他人妄用。對於能宣說開示三乘佛法的佛門弟子，恭敬供養，全心守護助長威力，不讓他人來誹謗毀辱。尊重出家僧眾、安慰利益出家僧眾，信解護持世尊所說一切正法。絕不破壞浮圖塔廟，也常常護持園林寺院，對於剃除鬚髮穿著袈裟的出家人處，絕不廢壞譭棄。自己不造作染習十惡輪，也常勸他人遠離十惡輪。圓滿修學先賢聖王治國正法，延繼昌隆三寶傳承。時時歡喜親近善知識，慈心護育一切國人，相應國人合適因緣，施行種種教化開導，使他們捨棄邪見惡法，修行正法。這樣身心清淨的真善剎帝利王，乃至真善婆羅門等人，能得多少福德？能滅多少罪業？
				<hr/>
			</div>
			<div :class="details ? 'bg-secondary text-white' : ''" class="paragraph">
				<span class="word">佛言</span>
				<span class="punc">：</span>
				<span class="word">善男子</span>
				<span class="punc">！</span>
				<span class="word">假使有人出現世間具大威力</span>
				<span class="punc">，</span>
				<span class="word">於日初分</span>
				<span class="punc">，</span>
				<span class="word">積集七寶滿贍部洲</span>
				<span class="punc">，</span>
				<span class="word">奉施諸佛及弟子眾</span>
				<span class="punc">。</span>
				<span class="word">於日中分</span>
				<span class="punc">，</span>
				<span class="word">亦集七寶滿贍部洲</span>
				<span class="punc">，</span>
				<span class="word">奉施諸佛及弟子眾</span>
				<span class="punc">。</span>
				<span class="word">於日後分</span>
				<span class="punc">，</span>
				<span class="word">亦集七寶滿贍部洲</span>
				<span class="punc">，</span>
				<span class="word">奉施諸佛及弟子眾</span>
				<span class="punc">。</span>
				<span class="word">如是日日相續布施滿百千年</span>
				<span class="punc">，</span>
				<span class="word">此人福聚寧為多不</span>
				<span class="punc">？</span>
				<span class="word">地藏菩薩摩訶薩言</span>
				<span class="punc">：</span>
				<span class="word">甚多</span>
				<span class="punc">，</span>
				<span class="word">世尊</span>
				<span class="punc">！</span>
				<span class="word">甚多</span>
				<span class="punc">，</span>
				<span class="word">大德</span>
				<span class="punc">！</span>
				<span class="word">此人福聚無量無邊不可稱計</span>
				<span class="punc">，</span>
				<span class="word">算數譬喻所不能及</span>
				<span class="punc">，</span>
				<span class="word">惟佛能知</span>
				<span class="punc">，</span>
				<span class="word">餘無知者</span>
				<span class="punc">。</span>
				<span class="word">佛言</span>
				<span class="punc">：</span>
				<span class="word">善男子</span>
				<span class="punc">！</span>
				<span class="word">如是如是如汝所說</span>
				<span class="punc">。</span>
				<span class="word">若有真善剎帝利王</span>
				<span class="punc">，</span>
				<span class="word">乃至真善婆羅門等</span>
				<span class="punc">，</span>
				<span class="word">於十惡輪自不染習</span>
				<span class="punc">，</span>
				<span class="word">亦常勸他離十惡輪</span>
				<span class="punc">，</span>
				<span class="word">所獲福聚過前福聚</span>
				<span class="punc">，</span>
				<span class="word">無量無邊不可稱計</span>
				<span class="punc">。</span>
			</div>
			<div x-show="details" class="details mb-3">
				佛對地藏菩薩說：善男子！譬如在這世間出現一人，具有大威神力，在清晨時，用聚滿南贍部洲的金、銀、琉璃、珊瑚、硨磲、赤珠、瑪瑙等七寶，供養諸佛及弟子眾。在日中時，也用聚滿南贍部洲七寶，供養諸佛及弟子眾。在日末時，也用聚滿南贍部洲七寶，供養諸佛及弟子眾。這樣日日不斷布施供養了百千年，這人所累聚的福德是不是很多呢？地藏菩薩摩訶薩說：非常多，世尊！非常多，大德！這人累聚的福德無量無邊，連算數譬喻都無法估算清楚，除了佛能知曉，其他人無法得知。佛說：善男子！是啊！是啊！正如你所說的。如果有身心俱淨真善剎帝利王，乃至真善婆羅門等人，自己不造作染習十惡輪，也常勸他人遠離十惡輪，所累聚的福德無量無邊無法計算，勝過前面所說七寶布施的功德。
				<hr/>
			</div>
			<div :class="details ? 'bg-secondary text-white' : ''" class="paragraph">
				<span class="word">又善男子</span>
				<span class="punc">！</span>
				<span class="word">假使有人出現世間具大威力</span>
				<span class="punc">，</span>
				<span class="word">為四方僧營建寺宇</span>
				<span class="punc">，</span>
				<span class="word">其量寬廣等四大洲</span>
				<span class="punc">，</span>
				<span class="word">上妙房舍</span>
				<span class="punc">，</span>
				<span class="word">床敷衣服</span>
				<span class="punc">，</span>
				<span class="word">飲食醫藥</span>
				<span class="punc">，</span>
				<span class="word">資緣充備</span>
				<span class="punc">。</span>
				<span class="word">令諸如來聲聞</span>
				<span class="punc">、</span>
				<span class="word">菩薩大弟子眾</span>
				<span class="punc">，</span>
				<span class="word">止住其中</span>
				<span class="punc">，</span>
				<span class="word">精進修行種種善品</span>
				<span class="punc">，</span>
				<span class="word">若晝若夜無有懈息</span>
				<span class="punc">。</span>
				<span class="word">經百千俱胝那庾多歲</span>
				<span class="punc">，</span>
				<span class="word">供給供養相續不絕</span>
				<span class="punc">，</span>
				<span class="word">此人福聚寧為多不</span>
				<span class="punc">？</span>
				<span class="word">地藏菩薩摩訶薩言</span>
				<span class="punc">：</span>
				<span class="word">甚多</span>
				<span class="punc">。</span>
				<span class="word">世尊</span>
				<span class="punc">！</span>
				<span class="word">甚多</span>
				<span class="punc">。</span>
				<span class="word">大德</span>
				<span class="punc">！</span>
				<span class="word">此人福聚無量無邊</span>
				<span class="punc">，</span>
				<span class="word">不可稱計</span>
				<span class="punc">，</span>
				<span class="word">算數譬喻所不能及</span>
				<span class="punc">，</span>
				<span class="word">惟佛能知</span>
				<span class="punc">，</span>
				<span class="word">餘無知者</span>
				<span class="punc">。</span>
				<span class="word">佛言</span>
				<span class="punc">：</span>
				<span class="word">善男子</span>
				<span class="punc">！</span>
				<span class="word">如是如是</span>
				<span class="punc">，</span>
				<span class="word">如汝所說</span>
				<span class="punc">。</span>
			</div>
			<div x-show="details" class="details mb-3">
				善男子！又譬如在這世間出現一人具有大威神力，建造寺院供養四方僧眾，院舍寬廣如同四大部洲這麼大，精妙屋舍，床褥衣服，飲食醫藥，生活用具都完備充足。讓如來的聲聞、菩薩大弟子們在那裡安住，精進修行各種善道法門，日夜勤修毫無懈怠。這樣相續不斷的布施供養了百千萬億年，這人所累聚的福德是不是很多呢？地藏菩薩摩訶薩說，非常多，世尊！非常多，大德！這人累聚的福德無量無邊，無法計算，連算數譬喻都無法估算，除了佛能知曉，他人無法得知。佛說，善男子！是啊！是啊！正如你所說的，無量無邊，無法計算。
				<hr/>
			</div>
			<div :class="details ? 'bg-secondary text-white' : ''" class="paragraph">
				<span class="word">又善男子</span>
				<span class="punc">！</span>
				<span class="word">假使有人</span>
				<span class="punc">，</span>
				<span class="word">出現世間具大威力</span>
				<span class="punc">，</span>
				<span class="word">為四方僧營建寺宇</span>
				<span class="punc">，</span>
				<span class="word">寬廣量等十四大洲</span>
				<span class="punc">，</span>
				<span class="word">上妙房舍</span>
				<span class="punc">，</span>
				<span class="word">床敷衣服</span>
				<span class="punc">，</span>
				<span class="word">飲食醫藥</span>
				<span class="punc">，</span>
				<span class="word">資緣充備</span>
				<span class="punc">。</span>
				<span class="word">令諸如來聲聞</span>
				<span class="punc">、</span>
				<span class="word">菩薩</span>
				<span class="punc">、</span>
				<span class="word">大弟子眾</span>
				<span class="punc">，</span>
				<span class="word">止住其中</span>
				<span class="punc">，</span>
				<span class="word">精進修行種種善品</span>
				<span class="punc">，</span>
				<span class="word">若晝若夜無有懈息</span>
				<span class="punc">；</span>
				<span class="word">經百千俱胝那庾多歲</span>
				<span class="punc">，</span>
				<span class="word">供給供養相續不絕</span>
				<span class="punc">。</span>
				<span class="word">此人福聚寧為多不</span>
				<span class="punc">？</span>
				<span class="word">地藏菩薩摩訶薩言</span>
				<span class="punc">：</span>
				<span class="word">甚多</span>
				<span class="punc">，</span>
				<span class="word">世尊</span>
				<span class="punc">！</span>
				<span class="word">甚多</span>
				<span class="punc">，</span>
				<span class="word">大德</span>
				<span class="punc">！</span>
				<span class="word">此人福聚無量無邊</span>
				<span class="punc">，</span>
				<span class="word">不可稱計</span>
				<span class="punc">，</span>
				<span class="word">算數譬喻所不能及</span>
				<span class="punc">；</span>
				<span class="word">唯佛能知</span>
				<span class="punc">，</span>
				<span class="word">餘無知者</span>
				<span class="punc">！</span>
				<span class="word">佛言</span>
				<span class="punc">：</span>
				<span class="word">善男子</span>
				<span class="punc">！</span>
				<span class="word">如是如是</span>
				<span class="punc">，</span>
				<span class="word">如汝所說</span>
				<span class="punc">。</span>
			</div>
			<div x-show="details" class="details mb-3">
				善男子！又譬如在這世間出現一人具有大威神力，建造寺院供養四方僧眾，院舍寬廣如同十個四大部洲這麼大，精妙屋舍，床褥衣服，飲食醫藥，生活用具充足完備。讓如來的聲聞、菩薩、大弟子們在這裡安住。精進修行各種善道法門，日夜勤修毫無懈怠。相續不斷的布施供養百千萬億年，這人所累聚的福德是不是很多呢？地藏菩薩摩訶薩說：非常多，世尊！非常多，大德！這人累聚的福德無量無邊，無法計算，連算數譬喻都無法估算。除了佛能知曉，他人無法得知。佛說，善男子！是啊！是啊！正如你所說的，無量無邊，無法計算。
				<hr/>
			</div>
			<div :class="details ? 'bg-secondary text-white' : ''" class="paragraph">
				<span class="word">又善男子</span>
				<span class="punc">！</span>
				<span class="word">假使有人</span>
				<span class="punc">，</span>
				<span class="word">出現世間具大威力</span>
				<span class="punc">，</span>
				<span class="word">為佛舍利起窣堵波</span>
				<span class="punc">，</span>
				<span class="word">嚴麗高廣</span>
				<span class="punc">，</span>
				<span class="word">量等三千大千世界</span>
				<span class="punc">。</span>
				<span class="word">如前所說</span>
				<span class="punc">，</span>
				<span class="word">為四方僧造寺福聚</span>
				<span class="punc">，</span>
				<span class="word">類此所說為佛舍利起窣堵波所獲福聚</span>
				<span class="punc">，</span>
				<span class="word">於百分中不及其一</span>
				<span class="punc">，</span>
				<span class="word">於千分中亦不及一</span>
				<span class="punc">，</span>
				<span class="word">於百千分亦不及一</span>
				<span class="punc">，</span>
				<span class="word">於俱胝分亦不及一</span>
				<span class="punc">，</span>
				<span class="word">那庾多分</span>
				<span class="punc">，</span>
				<span class="word">數分</span>
				<span class="punc">，</span>
				<span class="word">算分</span>
				<span class="punc">，</span>
				<span class="word">計分</span>
				<span class="punc">，</span>
				<span class="word">喻分</span>
				<span class="punc">，</span>
				<span class="word">乃至鄔波尼殺曇分亦不及一</span>
				<span class="punc">。</span>
			</div>
			<div x-show="details" class="details mb-3">
				善男子！又譬如在這世間出現一人具有大威神力，建造華麗莊嚴塔廟供養佛舍利，塔廟高大寬廣如同三千大千世界這麼巨大。前面所說建造寺院供養四方僧眾的功德福報，相較這建造塔廟供養佛舍利所得的功德福報，不到百分之一，也不到千分之一，也不到百萬分之一，也不到億分之一，千億分，數數目分，計算分，比較分，譬喻分，甚至連無限數量分之一也不到。
				<hr/>
			</div>
			<div :class="details ? 'bg-secondary text-white' : ''" class="paragraph">
				<span class="word">又善男子</span>
				<span class="punc">！</span>
				<span class="word">假使有得波羅蜜多</span>
				<span class="punc">，</span>
				<span class="word">具八解脫靜慮</span>
				<span class="punc">、</span>
				<span class="word">等至大阿羅漢</span>
				<span class="punc">，</span>
				<span class="word">遍滿三千大千世界</span>
				<span class="punc">，</span>
				<span class="word">如稻麻</span>
				<span class="punc">、</span>
				<span class="word">竹葦</span>
				<span class="punc">、</span>
				<span class="word">甘蔗</span>
				<span class="punc">、</span>
				<span class="word">叢林</span>
				<span class="punc">，</span>
				<span class="word">一切皆被堅縛五處經百千年</span>
				<span class="punc">。</span>
				<span class="word">時有一人出現於世</span>
				<span class="punc">，</span>
				<span class="word">具大威力</span>
				<span class="punc">，</span>
				<span class="word">樂福德故</span>
				<span class="punc">，</span>
				<span class="word">悉解被縛諸阿羅漢</span>
				<span class="punc">，</span>
				<span class="word">香湯澡浴</span>
				<span class="punc">，</span>
				<span class="word">奉施衣鉢</span>
				<span class="punc">；</span>
				<span class="word">經百千年</span>
				<span class="punc">，</span>
				<span class="word">給上房舍</span>
				<span class="punc">，</span>
				<span class="word">床敷衣服</span>
				<span class="punc">，</span>
				<span class="word">飲食醫藥</span>
				<span class="punc">，</span>
				<span class="word">種種所須如法資具</span>
				<span class="punc">。</span>
				<span class="word">諸阿羅漢般涅槃已</span>
				<span class="punc">，</span>
				<span class="word">供養焚燒收取舍利</span>
				<span class="punc">，</span>
				<span class="word">以妙七寶起窣堵波</span>
				<span class="punc">，</span>
				<span class="word">安置其中</span>
				<span class="punc">。</span>
				<span class="word">復以種種寶幢</span>
				<span class="punc">、</span>
				<span class="word">幡蓋</span>
				<span class="punc">、</span>
				<span class="word">香花</span>
				<span class="punc">、</span>
				<span class="word">伎樂而供養之</span>
				<span class="punc">。</span>
				<span class="word">如前所說</span>
				<span class="punc">，</span>
				<span class="word">為佛舍利起窣堵波所獲福聚</span>
				<span class="punc">，</span>
				<span class="word">類此所說解阿羅漢供養福聚</span>
				<span class="punc">，</span>
				<span class="word">於百分中不及其一</span>
				<span class="punc">，</span>
				<span class="word">於千分中亦不及一</span>
				<span class="punc">，</span>
				<span class="word">於百千分亦不及一</span>
				<span class="punc">，</span>
				<span class="word">於俱胝分亦不及一</span>
				<span class="punc">，</span>
				<span class="word">那庾多分</span>
				<span class="punc">，</span>
				<span class="word">數分</span>
				<span class="punc">，</span>
				<span class="word">算分</span>
				<span class="punc">，</span>
				<span class="word">計分</span>
				<span class="punc">，</span>
				<span class="word">喻分乃至鄔波尼殺曇分亦不及一</span>
				<span class="punc">。</span>
				<span class="word">善男子</span>
				<span class="punc">！</span>
				<span class="word">若有真善剎帝利王</span>
				<span class="punc">，</span>
				<span class="word">乃至真善婆羅門等</span>
				<span class="punc">，</span>
				<span class="word">於十惡輪自不染習</span>
				<span class="punc">，</span>
				<span class="word">亦常勸他離十惡輪</span>
				<span class="punc">，</span>
				<span class="word">所獲福德過前福聚</span>
				<span class="punc">，</span>
				<span class="word">無量無邊不可稱計</span>
				<span class="punc">，</span>
				<span class="word">如生福數</span>
				<span class="punc">，</span>
				<span class="word">滅罪亦爾</span>
				<span class="punc">。</span>
			</div>
			<div x-show="details" class="details mb-3">
				善男子！又譬如有證得波羅蜜多，修具八解脫禪定的大阿羅漢，數量如同遍滿三千大千世界的稻麻、蘆葦、甘蔗、叢林這麼多，這些大阿羅漢的四肢頭頸五處都被嚴實捆綁，經過了百千年。這時世間出現一人具有大威神力，樂修福德，解救了被綁縛的阿羅漢們，並且供養香湯沐浴，侍奉衣服食具；經過百千年，一直供養上好房舍，床褥衣服，飲食醫藥等種種如法所需的生活用品。阿羅漢們涅槃後，荼毗收取舍利供養，用上妙七寶建造塔廟安置舍利，又用種種寶幢、幡蓋、香花、音樂來供養。如前所說建塔供養佛舍利的功德福報，相較這裡解救供養阿羅漢的功德福報，不到百分之一，也不到千分之一，也不到百萬分之一，也不到億分之一，千億分，數數目分，計算分，比較分，譬喻分，甚至連極限數量分之一也不到。善男子！如果有身心俱淨的真善剎帝利王，乃至真善婆羅門等人，自己不造作染習十惡輪，也常勸他人遠離十惡輪，所獲功德福報無量無邊無法計算，超過前面所說解救供養阿羅漢的功德福報，所滅除的罪業也如同所得功德福報數量一樣多。
				<hr/>
			</div>
			<div :class="details ? 'bg-secondary text-white' : ''" class="paragraph">
				<span class="word">善男子</span>
				<span class="punc">！</span>
				<span class="word">若有真善剎帝利王</span>
				<span class="punc">，</span>
				<span class="word">及諸真善宰官</span>
				<span class="punc">、</span>
				<span class="word">居士</span>
				<span class="punc">、</span>
				<span class="word">長者</span>
				<span class="punc">、</span>
				<span class="word">沙門</span>
				<span class="punc">、</span>
				<span class="word">婆羅門等</span>
				<span class="punc">，</span>
				<span class="word">於未來世後五百歲</span>
				<span class="punc">，</span>
				<span class="word">法欲滅時</span>
				<span class="punc">，</span>
				<span class="word">能善護持我之法眼</span>
				<span class="punc">；</span>
				<span class="word">能自善護</span>
				<span class="punc">，</span>
				<span class="word">亦善護他</span>
				<span class="punc">，</span>
				<span class="word">善護後世</span>
				<span class="punc">，</span>
				<span class="word">善護我法</span>
				<span class="punc">。</span>
				<span class="word">出家弟子若是法器若非法器</span>
				<span class="punc">，</span>
				<span class="word">下至無戒</span>
				<span class="punc">，</span>
				<span class="word">剃除鬚髮被袈裟者</span>
				<span class="punc">，</span>
				<span class="word">普善守護</span>
				<span class="punc">，</span>
				<span class="word">恭敬供養</span>
				<span class="punc">，</span>
				<span class="word">令無損惱</span>
				<span class="punc">。</span>
				<span class="word">又能善護三乘正法</span>
				<span class="punc">，</span>
				<span class="word">聽受供養聲聞法時</span>
				<span class="punc">，</span>
				<span class="word">於獨覺乘及大乘法不生誹謗</span>
				<span class="punc">，</span>
				<span class="word">於獨覺乘及大乘人亦不憎嫉</span>
				<span class="punc">。</span>
				<span class="word">聽受供養獨覺法時</span>
				<span class="punc">，</span>
				<span class="word">於聲聞乘及大乘法不生誹謗</span>
				<span class="punc">，</span>
				<span class="word">於聲聞乘及大乘人亦不憎嫉</span>
				<span class="punc">。</span>
				<span class="word">聽受供養大乘法時</span>
				<span class="punc">，</span>
				<span class="word">於聲聞乘</span>
				<span class="punc">、</span>
				<span class="word">獨覺乘法不生誹謗</span>
				<span class="punc">，</span>
				<span class="word">於聲聞乘</span>
				<span class="punc">、</span>
				<span class="word">獨覺乘人亦不憎嫉</span>
				<span class="punc">。</span>
				<span class="word">於聲聞乘</span>
				<span class="punc">、</span>
				<span class="word">獨覺乘法不求趣證</span>
				<span class="punc">，</span>
				<span class="word">唯求趣證大乘正法</span>
				<span class="punc">。</span>
			</div>
			<div x-show="details" class="details mb-3">
				善男子！如果有身心俱淨俱善的真善剎帝利王，及真善宰官、居士、長者、沙門、婆羅門等善人，在未來世的後五百年，正法將要滅亡時，能盡心護持佛道正法知見；能盡心守護自身，又能盡心守護他人，盡心守護後世，盡心守護佛法。對於如來出家弟子，無論是能任持正法的法器僧，或是非法器僧，下到還未受戒只是剃除鬚髮穿著袈裟的僧人，都能盡心守護，恭敬供養，使他們不遭受身心損害。又能盡心護持三乘正法，聽受供養聲聞法時，不誹謗獨覺乘法和大乘法，也不厭惡嫉恨獨覺乘和大乘修行人。聽受供養獨覺法時，不誹謗聲聞乘法和大乘法，也不厭惡嫉恨聲聞乘和大乘修行人。聽受供養大乘法時，不誹謗聲聞乘法和獨覺乘法，也不憎恨嫉妒聲聞乘和獨覺乘修行人。不偏求聲聞乘、緣覺乘法所得果證，衷心願求圓滿大乘正法。
				<hr/>
			</div>
			<div :class="details ? 'bg-secondary text-white' : ''" class="paragraph">
				<span class="word">於住大乘具戒富德</span>
				<span class="punc">、</span>
				<span class="word">精勤修行</span>
				<span class="punc">，</span>
				<span class="word">乃至住果補特伽羅</span>
				<span class="punc">，</span>
				<span class="word">多數親近承事供養</span>
				<span class="punc">，</span>
				<span class="word">深心敬重請問聽受</span>
				<span class="punc">，</span>
				<span class="word">遠離破戒惡行苾芻</span>
				<span class="punc">。</span>
				<span class="word">於諸所施四方僧物</span>
				<span class="punc">，</span>
				<span class="word">終不令人非法費用</span>
				<span class="punc">，</span>
				<span class="word">勤加守護供四方僧</span>
				<span class="punc">。</span>
				<span class="word">於窣堵波及僧祇物</span>
				<span class="punc">，</span>
				<span class="word">終不自奪不教他奪</span>
				<span class="punc">，</span>
				<span class="word">亦不自用不教他用</span>
				<span class="punc">。</span>
				<span class="word">於能辯說三乘法人</span>
				<span class="punc">，</span>
				<span class="word">恭敬供養加護與力</span>
				<span class="punc">，</span>
				<span class="word">不令他人誹謗毀辱</span>
				<span class="punc">。</span>
				<span class="word">尊重安慰諸出家人</span>
				<span class="punc">，</span>
				<span class="word">信受護持如來聖教</span>
				<span class="punc">；</span>
				<span class="word">終不破壞諸窣堵波</span>
				<span class="punc">，</span>
				<span class="word">亦常護持四方僧寺</span>
				<span class="punc">。</span>
				<span class="word">於我出家諸弟子所</span>
				<span class="punc">，</span>
				<span class="word">終不毀廢</span>
				<span class="punc">，</span>
				<span class="word">還俗策使</span>
				<span class="punc">。</span>
				<span class="word">於十惡輪自不染習</span>
				<span class="punc">，</span>
				<span class="word">亦常勸他離十惡輪</span>
				<span class="punc">。</span>
				<span class="word">具學先王治國正法</span>
				<span class="punc">，</span>
				<span class="word">十善業道攝化世間</span>
				<span class="punc">，</span>
				<span class="word">常當親近諸善知識</span>
				<span class="punc">，</span>
				<span class="word">紹三寶種常令熾盛</span>
				<span class="punc">，</span>
				<span class="word">善護法眼令不滅沒</span>
				<span class="punc">。</span>
			</div>
			<div x-show="details" class="details mb-3">
				對於依止大乘佛法精勤修行，戒德兼備，乃至證得正果的僧眾，常常親近侍奉供養，深心尊重，恭敬請益聽受，遠離破戒惡行比丘。對於信眾布施供養的四方僧物，絕不讓人非法耗用，勤加守護以供養僧眾。對於廟塔及僧眾公物，絕不自己奪取也不讓他人奪取，自己不妄用也不讓他人妄用。對於能宣說開示三乘佛法的佛門弟子，恭敬供養，全心守護助長威力，不讓他人來誹謗毀辱。尊重安慰出家僧眾，信解受持世尊所說一切正法。絕不破壞浮圖塔廟，也常常護持園林寺院。對於佛門出家弟子僧眾處，絕不廢壞譭棄，強令逼迫僧眾還俗，驅使勞役。自己不造作染習十惡輪，也常勸他人遠離十惡輪。圓滿修學先王治國正法，以十善業道來教化利益世間眾生，常常親近善知識們，延繼昌隆三寶傳承；盡心守護正法知見，使得正法不會殞沒。
				<hr/>
			</div>
			<div :class="details ? 'bg-secondary text-white' : ''" class="paragraph">
				<span class="word">如是真善剎帝利王</span>
				<span class="punc">，</span>
				<span class="word">乃至真善婆羅門等</span>
				<span class="punc">，</span>
				<span class="word">由具如是諸功德故</span>
				<span class="punc">，</span>
				<span class="word">名不虛受國人俸祿</span>
				<span class="punc">。</span>
				<span class="word">一切天龍</span>
				<span class="punc">、</span>
				<span class="word">藥叉鬼神</span>
				<span class="punc">，</span>
				<span class="word">乃至羯吒布怛那等</span>
				<span class="punc">，</span>
				<span class="word">皆生歡喜慈悲擁護</span>
				<span class="punc">。</span>
				<span class="word">一切法器</span>
				<span class="punc">、</span>
				<span class="word">真實福田</span>
				<span class="punc">，</span>
				<span class="word">亦生歡喜慈悲護念</span>
				<span class="punc">。</span>
				<span class="word">由是因緣</span>
				<span class="punc">，</span>
				<span class="word">所居國土及諸有情展轉熾盛</span>
				<span class="punc">，</span>
				<span class="word">安隱豐樂</span>
				<span class="punc">。</span>
				<span class="word">隣國兵戈不能侵害</span>
				<span class="punc">，</span>
				<span class="word">皆敬慕德自來歸附</span>
				<span class="punc">。</span>
			</div>
			<div x-show="details" class="details mb-3">
				這樣身心俱淨俱善的真善剎帝利王，乃至真善婆羅門等，具足了這種種功德，能名符其實受到國人財祿伺奉供養。一切天、龍、藥叉、鬼神，乃至迦吒富單那鬼眾等，都會心生歡喜慈悲擁護。一切法器僧眾、福田僧眾，也會心生歡喜慈悲護念。由於這樣善緣，所居國土及眾生們不斷興旺，生活安穩富足快樂。外國軍隊不來侵害，天下人民敬慕德政，紛紛前來歸附。
				<hr/>
			</div>
			<div :class="details ? 'bg-secondary text-white' : ''" class="paragraph">
				<span class="word">由此展轉勸修善業</span>
				<span class="punc">，</span>
				<span class="word">枯竭惡趣</span>
				<span class="punc">，</span>
				<span class="word">增長天人</span>
				<span class="punc">。</span>
				<span class="word">守護身命令得長遠</span>
				<span class="punc">，</span>
				<span class="word">自滅煩惱亦令他滅</span>
				<span class="punc">。</span>
				<span class="word">住持菩提道六波羅蜜多</span>
				<span class="punc">，</span>
				<span class="word">破壞一切眾邪惡道</span>
				<span class="punc">，</span>
				<span class="word">於生死海不久沉淪</span>
				<span class="punc">。</span>
				<span class="word">常離惡友</span>
				<span class="punc">，</span>
				<span class="word">常近善友</span>
				<span class="punc">，</span>
				<span class="word">生生常遇諸佛菩薩</span>
				<span class="punc">，</span>
				<span class="word">恭敬承事曾無暫廢</span>
				<span class="punc">。</span>
				<span class="word">不久皆當隨心所樂</span>
				<span class="punc">，</span>
				<span class="word">各各安住於佛國土</span>
				<span class="punc">，</span>
				<span class="word">證得無上正等菩提</span>
				<span class="punc">。</span>
			</div>
			<div x-show="details" class="details mb-3">
				由此不斷勸勉眾生修持各種善業，枯竭了三惡道果報眾生，增長了眾生人天福報。使得眾生能平安守護身家，生命能得長遠快樂。自己滅除煩惱也使他人滅除煩惱。依止菩提正道，修持六波羅蜜，破壞了一切惡道邪見，不再長久沉淪生死苦海。常能遠離惡友，常能親近善知識，生生常遇諸佛菩薩，恭敬侍奉不會間斷。很快就能隨心所樂，安住各個佛國淨土，證得無上正等菩提。
				<hr/>
			</div>
			<div :class="details ? 'bg-secondary text-white' : ''" class="paragraph">
				<span class="word">爾時眾中一切天帝及諸眷屬</span>
				<span class="punc">，</span>
				<span class="word">乃至一切畢舍遮帝及諸眷屬</span>
				<span class="punc">，</span>
				<span class="word">從座而起</span>
				<span class="punc">，</span>
				<span class="word">頂禮佛足</span>
				<span class="punc">，</span>
				<span class="word">合掌恭敬</span>
				<span class="punc">，</span>
				<span class="word">而白佛言</span>
				<span class="punc">：</span>
				<span class="word">大德世尊</span>
				<span class="punc">！</span>
				<span class="word">於未來世後五百歲</span>
				<span class="punc">，</span>
				<span class="word">於此佛土法欲滅時</span>
				<span class="punc">，</span>
				<span class="word">若有真善剎帝利王</span>
				<span class="punc">，</span>
				<span class="word">乃至真善婆羅門等</span>
				<span class="punc">，</span>
				<span class="word">於十惡輪自能遠離</span>
				<span class="punc">，</span>
				<span class="word">亦能勸他令其遠離</span>
				<span class="punc">，</span>
				<span class="word">善護自他</span>
				<span class="punc">，</span>
				<span class="word">善護後世</span>
				<span class="punc">，</span>
				<span class="word">護持正法</span>
				<span class="punc">，</span>
				<span class="word">紹三寶種皆令熾盛無有斷絕</span>
				<span class="punc">。</span>
				<span class="word">以要言之如佛所說</span>
				<span class="punc">，</span>
				<span class="word">如是等人</span>
				<span class="punc">，</span>
				<span class="word">於三乘法恭敬聽受終不隱藏</span>
				<span class="punc">；</span>
				<span class="word">於三乘人護持供養不令擾惱</span>
				<span class="punc">；</span>
				<span class="word">於三寶物勤加守護不令侵損</span>
				<span class="punc">。</span>
				<span class="word">我等眷屬</span>
				<span class="punc">，</span>
				<span class="word">於此真善剎帝利王</span>
				<span class="punc">，</span>
				<span class="word">乃至真善婆羅門等</span>
				<span class="punc">，</span>
				<span class="word">勤加擁護</span>
				<span class="punc">，</span>
				<span class="word">令其十法皆得增長</span>
				<span class="punc">。</span>
			</div>
			<div x-show="details" class="details mb-3">
				這時法會大眾中一切天帝及眷屬們，乃至一切鬼王及眷屬們，都從座位上起身，頂禮佛足，合掌恭敬而對佛說：大德世尊！在未來世後五百年，在這佛土正法將要滅亡時，如有身心俱淨的真善剎帝利王，乃至真善婆羅門等人，自己能遠離十惡輪，也能勸他人遠離十惡輪，盡心守護自他，盡心守護後世，護持正法，延續昌隆三寶傳承，使三寶傳承不會斷絕。簡單的說，就如同世尊之前所開示，這些身心俱善的真善人等，恭敬聽受三乘佛法，絕不使正法受到隱蔽藏沒；盡心護持供養三乘修行人，不使他們遭受煩惱的擾亂；勤加守護佛、法、僧三寶物事不遭受侵損。我等鬼神及眷屬們，對於這真善剎帝利王，乃至真善婆羅門等人，必定勤加擁護，使他們增長十種福報喜樂。
				<hr/>
			</div>
			<div :class="details ? 'bg-secondary text-white' : ''" class="paragraph">
				<span class="word">何等為十</span>
				<span class="punc">？</span>
				<blockquote>
					<span class="word">一者</span>
					<span class="punc">、</span>
					<span class="word">增長壽命</span>
					<span class="punc">；</span>
					<span class="word">二者</span>
					<span class="punc">、</span>
					<span class="word">增長無難</span>
					<span class="punc">；</span><br/>
					<span class="word">三者</span>
					<span class="punc">、</span>
					<span class="word">增長無病</span>
					<span class="punc">；</span>
					<span class="word">四者</span>
					<span class="punc">、</span>
					<span class="word">增長眷屬</span>
					<span class="punc">；</span><br/>
					<span class="word">五者</span>
					<span class="punc">、</span>
					<span class="word">增長財寶</span>
					<span class="punc">；</span>
					<span class="word">六者</span>
					<span class="punc">、</span>
					<span class="word">增長資具</span>
					<span class="punc">；</span><br/>
					<span class="word">七者</span>
					<span class="punc">、</span>
					<span class="word">增長自在</span>
					<span class="punc">；</span>
					<span class="word">八者</span>
					<span class="punc">、</span>
					<span class="word">增長名稱</span>
					<span class="punc">；</span><br/>
					<span class="word">九者</span>
					<span class="punc">、</span>
					<span class="word">增長善友</span>
					<span class="punc">；</span>
					<span class="word">十者</span>
					<span class="punc">、</span>
					<span class="word">增長智慧</span>
					<span class="punc">。</span>
				</blockquote>
				<span class="word">大德世尊</span>
				<span class="punc">！</span>
				<span class="word">若彼真善剎帝利王</span>
				<span class="punc">，</span>
				<span class="word">乃至真善婆羅門等</span>
				<span class="punc">，</span>
				<span class="word">於十惡輪自能遠離</span>
				<span class="punc">，</span>
				<span class="word">亦能勸他令其遠離</span>
				<span class="punc">，</span>
				<span class="word">具前所說諸功德者</span>
				<span class="punc">，</span>
				<span class="word">我等擁護定當得此十法增長</span>
				<span class="punc">。</span>
			</div>
			<div x-show="details" class="details mb-3">
				是那十種福報呢？
				<blockquote>
					一者、增長壽命；<br/>
					二者、增長無災難；<br/>
					三者、增長無疾病；<br/>
					四者、增長多眷屬；<br/>
					五者、增長多財寶；<br/>
					六者、增長資生用具豐足；<br/>
					七者、增長自在安樂；<br/>
					八者、增長名聲遠聞；<br/>
					九者、增長多善友；<br/>
					十者、增長智慧。
				</blockquote>
				大德世尊！如果真善剎帝利王，乃至真善婆羅門等，自己能遠離十惡輪，也能勸導他人遠離十惡輪，具足了世尊之前所說的種種功德，我們必然擁護他們，定能使他們增長這十種福報喜樂。
				<hr/>
			</div>
			<div :class="details ? 'bg-secondary text-white' : ''" class="paragraph">
				<span class="word">復次世尊</span>
				<span class="punc">！</span>
				<span class="word">若有真善剎帝利王</span>
				<span class="punc">，</span>
				<span class="word">乃至真善婆羅門等</span>
				<span class="punc">，</span>
				<span class="word">成就如前所說功德</span>
				<span class="punc">，</span>
				<span class="word">我等眷屬勤加擁護</span>
				<span class="punc">，</span>
				<span class="word">令於十法皆得遠離</span>
				<span class="punc">。</span>
				<span class="word">何等為十</span>
				<span class="punc">？</span>
				<blockquote>
					<span class="word">一者</span>
					<span class="punc">、</span>
					<span class="word">遠離一切怨家寇敵</span>
					<span class="punc">；</span><br/>
					<span class="word">二者</span>
					<span class="punc">、</span>
					<span class="word">遠離一切非愛</span>
					<span class="punc">、</span>
					<span class="word">色</span>
					<span class="punc">、</span>
					<span class="word">聲</span>
					<span class="punc">、</span>
					<span class="word">香</span>
					<span class="punc">、</span>
					<span class="word">味</span>
					<span class="punc">、</span>
					<span class="word">觸境</span>
					<span class="punc">；</span><br/>
					<span class="word">三者</span>
					<span class="punc">、</span>
					<span class="word">遠離一切障癘疾病</span>
					<span class="punc">；</span><br/>
					<span class="word">四者</span>
					<span class="punc">、</span>
					<span class="word">遠離一切邪執惡見</span>
					<span class="punc">；</span><br/>
					<span class="word">五者</span>
					<span class="punc">、</span>
					<span class="word">遠離一切邪妄歸依</span>
					<span class="punc">；</span><br/>
					<span class="word">六者</span>
					<span class="punc">、</span>
					<span class="word">遠離一切邪惡災怪</span>
					<span class="punc">；</span><br/>
					<span class="word">七者</span>
					<span class="punc">、</span>
					<span class="word">遠離一切邪惡事業</span>
					<span class="punc">；</span><br/>
					<span class="word">八者</span>
					<span class="punc">、</span>
					<span class="word">遠離一切邪惡知識</span>
					<span class="punc">；</span><br/>
					<span class="word">九者</span>
					<span class="punc">、</span>
					<span class="word">遠離一切居家淤泥</span>
					<span class="punc">；</span><br/>
					<span class="word">十者</span>
					<span class="punc">、</span>
					<span class="word">遠離一切非時夭喪</span>
					<span class="punc">。</span>
				</blockquote>
				<span class="word">大德世尊</span>
				<span class="punc">！</span>
				<span class="word">若彼真善剎帝利王</span>
				<span class="punc">，</span>
				<span class="word">乃至真善婆羅門等</span>
				<span class="punc">，</span>
				<span class="word">成前所說諸功德者</span>
				<span class="punc">，</span>
				<span class="word">我等擁護</span>
				<span class="punc">，</span>
				<span class="word">定當得此十法遠離</span>
				<span class="punc">。</span>
			</div>
			<div x-show="details" class="details mb-3">
				此外，世尊！如有身心俱淨俱善的真善剎帝利王，乃至真善婆羅門等，成就了世尊之前所說的種種功德，我等眷屬們必然勤加擁護，使他們遠離十種不善法。是那十種不善呢？
				<blockquote>
					一者、遠離一切冤家仇敵；<br/>
					二者、遠離一切不喜愛的色、聲、香、味、觸等塵境；<br/>
					三者、遠離一切瘟疫疾病；<br/>
					四者、遠離一切邪執惡見；<br/>
					五者、遠離一切邪謬歸依；<br/>
					六者、遠離一切邪災鬼怪禍亂；<br/>
					七者、遠離一切邪惡事業；<br/>
					八者、遠離一切邪師惡友；<br/>
					九者、遠離一切俗務煩惱；<br/>
					十者、遠離一切夭折橫死。
				</blockquote>
				大德世尊！如果真善剎帝利王，乃至真善婆羅門等人，成就了世尊之前所說的種種功德，我等必然勤加擁護，定使他們遠離這十種不善法。
				<hr/>
			</div>
			<div :class="details ? 'bg-secondary text-white' : ''" class="paragraph">
				<span class="word">復次</span>
				<span class="punc">，</span>
				<span class="word">世尊</span>
				<span class="punc">！</span>
				<span class="word">若有真善剎帝利王</span>
				<span class="punc">，</span>
				<span class="word">具修如前所說功德令圓滿者</span>
				<span class="punc">，</span>
				<span class="word">我等眷屬勤加擁護</span>
				<span class="punc">，</span>
				<span class="word">令此帝王并諸眷屬及其國土一切人民</span>
				<span class="punc">，</span>
				<span class="word">令於十法皆得遠離</span>
				<span class="punc">。</span>
				<span class="word">何等為十</span>
				<span class="punc">？</span>
				<blockquote>
					<span class="word">一者</span>
					<span class="punc">、</span>
					<span class="word">遠離一切他國怨敵</span>
					<span class="punc">；</span><br/>
					<span class="word">二者</span>
					<span class="punc">、</span>
					<span class="word">遠離一切自國怨敵</span>
					<span class="punc">；</span><br/>
					<span class="word">三者</span>
					<span class="punc">、</span>
					<span class="word">遠離一切凶惡鬼神</span>
					<span class="punc">；</span><br/>
					<span class="word">四者</span>
					<span class="punc">、</span>
					<span class="word">遠離一切諐陽亢旱</span>
					<span class="punc">；</span><br/>
					<span class="word">五者</span>
					<span class="punc">、</span>
					<span class="word">遠離一切伏陰滯雨</span>
					<span class="punc">；</span><br/>
					<span class="word">六者</span>
					<span class="punc">、</span>
					<span class="word">遠離一切非時寒熱</span>
					<span class="punc">、</span>
					<span class="word">烈風</span>
					<span class="punc">、</span>
					<span class="word">暴雨</span>
					<span class="punc">、</span>
					<span class="word">霜雹</span>
					<span class="punc">、</span>
					<span class="word">災害</span>
					<span class="punc">；</span><br/>
					<span class="word">七者</span>
					<span class="punc">、</span>
					<span class="word">遠離一切惡星變怪</span>
					<span class="punc">；</span><br/>
					<span class="word">八者</span>
					<span class="punc">、</span>
					<span class="word">遠離一切飢饉荒儉</span>
					<span class="punc">；</span><br/>
					<span class="word">九者</span>
					<span class="punc">、</span>
					<span class="word">遠離一切非時病死</span>
					<span class="punc">；</span><br/>
					<span class="word">十者</span>
					<span class="punc">、</span>
					<span class="word">遠離一切邪執惡見</span>
					<span class="punc">。</span>
				</blockquote>
				<span class="word">大德世尊</span>
				<span class="punc">！</span>
				<span class="word">若彼真善剎帝利王</span>
				<span class="punc">，</span>
				<span class="word">具修如前所說功德令圓滿者</span>
				<span class="punc">，</span>
				<span class="word">我等眷屬勤加擁護</span>
				<span class="punc">，</span>
				<span class="word">令此帝王并諸眷屬及其國土一切人民</span>
				<span class="punc">，</span>
				<span class="word">定當得此十法遠離</span>
				<span class="punc">。</span>
				<span class="word">爾時世尊讚諸天帝及其眷屬</span>
				<span class="punc">，</span>
				<span class="word">乃至一切畢舍遮帝及眷屬言</span>
				<span class="punc">：</span>
				<span class="word">善哉</span>
				<span class="punc">！</span>
				<span class="word">善哉</span>
				<span class="punc">！</span>
				<span class="word">汝等乃能發此誓願</span>
				<span class="punc">，</span>
				<span class="word">此事皆是汝等應作</span>
				<span class="punc">。</span>
				<span class="word">由是因緣</span>
				<span class="punc">，</span>
				<span class="word">當令汝等長夜安樂</span>
				<span class="punc">。</span>
			</div>
			<div x-show="details" class="details mb-3">
				此外，世尊！如有身心俱淨的真善剎帝利王，具足圓滿了世尊之前所說種種功德，我等眷屬們必然勤加擁護，使這帝王與眷屬們，及國中所有人民，都能遠離十種災難。是那十種災難呢？
				<blockquote>
					一者、遠離一切國外仇敵；<br/>
					二者、遠離一切國內仇敵；<br/>
					三者、遠離一切兇神惡鬼；<br/>
					四者、遠離一切酷陽大旱成災；<br/>
					五者、遠離一切陰雨久滯成災；<br/>
					六者、遠離一切不合時令的寒冷炎熱、狂風暴雨、霜凍冰雹等災害；<br/>
					七是、遠離一切惡星天相詭變驚擾；<br/>
					八者、遠離一切缺糧饑荒；<br/>
					九者、遠離一切非時橫死疾厄；<br/>
					十者、遠離一切邪執惡見。
				</blockquote>
				大德世尊！如果身心俱淨的真善剎帝利王，具足圓滿了世尊之前所說功德，我等眷屬們必然勤加擁護，使這帝王與眷屬，及國中一切人民，必能遠離這十種災難。這時世尊稱讚天帝及眷屬們，乃至所有鬼王及眷屬們說：太好了！太好了！你們能發這樣的擁護誓願，這確實也是你們應當護持奉行的。由此因緣，我會讓你們在漫漫生死長夜中得到安樂福報。
				<hr/>
			</div>
			<div :class="details ? 'bg-secondary text-white' : ''" class="paragraph">
				<span class="word">爾時</span>
				<span class="punc">，</span>
				<span class="word">天藏大梵復白佛言</span>
				<span class="punc">：</span>
				<span class="word">世尊</span>
				<span class="punc">！</span>
				<span class="word">唯願聽我為未來世此佛土中</span>
				<span class="punc">，</span>
				<span class="word">一切真善剎帝利王</span>
				<span class="punc">，</span>
				<span class="word">說能護國不退輪心大陀羅尼明呪章句</span>
				<span class="punc">。</span>
				<span class="word">由此護國不退輪心大陀羅尼明呪章句威神力故</span>
				<span class="punc">，</span>
				<span class="word">令未來世此佛土中</span>
				<span class="punc">，</span>
				<span class="word">一切真善剎帝利王</span>
				<span class="punc">，</span>
				<span class="word">不為一切怨敵惡友之所摧伏</span>
				<span class="punc">，</span>
				<span class="word">能令一切怨敵惡友自然退散</span>
				<span class="punc">。</span>
				<span class="word">能善護持身</span>
				<span class="punc">、</span>
				<span class="word">語</span>
				<span class="punc">、</span>
				<span class="word">意業</span>
				<span class="punc">，</span>
				<span class="word">為諸智者常所稱讚</span>
				<span class="punc">。</span>
				<span class="word">離諸惡法常行善法</span>
				<span class="punc">，</span>
				<span class="word">常離一切邪見邪歸</span>
				<span class="punc">。</span>
				<span class="word">常於大乘精進修行勇猛堅固</span>
				<span class="punc">。</span>
				<span class="word">常能成熟無量無數所化有情</span>
				<span class="punc">，</span>
				<span class="word">智不依他自然善巧</span>
				<span class="punc">。</span>
				<span class="word">具能修行六到彼岸珍寶伏藏</span>
				<span class="punc">，</span>
				<span class="word">遠離一切忿</span>
				<span class="punc">、</span>
				<span class="word">慳</span>
				<span class="punc">、</span>
				<span class="word">嫉等煩惱纏垢</span>
				<span class="punc">。</span>
				<span class="word">常為一切人非人等恭敬護念</span>
				<span class="punc">，</span>
				<span class="word">諸有所為心無忘失</span>
				<span class="punc">。</span>
				<span class="word">不捨有情樂四攝事</span>
				<span class="punc">，</span>
				<span class="word">常不遠離法器福田</span>
				<span class="punc">。</span>
			</div>
			<div x-show="details" class="details mb-3">
				這時，天藏大梵天王又再對佛說：世尊！請您聽我為這未來世佛土中的一切身心俱淨的真善剎帝利王，宣說能護國護民，不退轉菩提心大陀羅尼明咒章句。由於這護國不退輪心大陀羅尼明咒章句的大威神力，能使未來世這佛土中所有的真善剎帝利王，不會遭受一切仇敵惡友摧損傷害，能使所有仇敵惡友自然退散。能盡心護持身口意三業，常得智者們的讚揚。遠離各種惡法，時時行持善法，遠離一切邪知邪見與邪歸依。常常信心堅定勇猛精進修行大乘佛法。常能成熟無量無數所教化的眾生，自在具足善巧智慧無須向外緣求。圓滿修行藏伏珍貴功德的六波羅蜜多，遠離一切憤恨、慳貪、嫉妒等煩惱纏縛。常得一切人非人等恭敬護念，所有念行所作都不退轉菩提心。樂行四攝法不捨棄一切眾生，常不遠離任持正法的法器僧眾、福田僧眾。
				<hr/>
			</div>
			<div :class="details ? 'bg-secondary text-white' : ''" class="paragraph">
				<span class="word">佛言</span>
				<span class="punc">：</span>
				<span class="word">天藏</span>
				<span class="punc">！</span>
				<span class="word">吾今恣汝為未來世此佛土中一切真善剎帝利王</span>
				<span class="punc">，</span>
				<span class="word">說能護國不退輪心大陀羅尼明呪章句</span>
				<span class="punc">。</span>
				<span class="word">由此護國不退輪心大陀羅尼明呪章句威神力故</span>
				<span class="punc">，</span>
				<span class="word">令未來世此佛土中</span>
				<span class="punc">，</span>
				<span class="word">一切真善剎帝利王</span>
				<span class="punc">，</span>
				<span class="word">不為一切怨敵惡友之所摧伏</span>
				<span class="punc">，</span>
				<span class="word">廣說乃至常不遠離一切諸佛及佛弟子</span>
				<span class="punc">。</span>
			</div>
			<div x-show="details" class="details mb-3">
				佛說：天藏！我現在應許你為這未來世佛土中所有真善剎帝利王，宣說能護國護民，不退轉菩提心大陀羅尼明咒章句。藉由這護國不退輪心大陀羅尼明咒章句大威神力，能使未來世這佛土中所有真善剎帝利王，不受一切仇敵惡友摧折傷害。廣說乃至常不遠離一切諸佛及佛弟子。
				<hr/>
			</div>
			<h6 class="toc-item" id="vol5-m2">
				<span class="word">護國不退輪心大陀羅尼明呪章句</span>
			</h6>
			<div :class="details ? 'bg-secondary text-white' : ''" class="paragraph">
				<span class="word">爾時天藏大梵即說護國不退輪心大陀羅尼明呪章句</span>
				<span class="punc">：</span>
				<blockquote>
					<span class="word">怛絰他<sub>(唐言謂)</sub>牟尼冐㘑<sub>(一)</sub>　</span>
					<span class="word">牟那揭臘茷<sub>(二)</sub>　</span>
					<span class="word">牟尼紇梨達曳<sub>(三)</sub>　</span>
					<span class="word">牟尼嚧訶毘折<sub>(常列反)</sub>隸<sub>(四)</sub>　</span>
					<span class="word">牟那曷栗制<sub>(五)</sub>　</span>
					<span class="word">牟尼笈謎<sub>(六)</sub>　</span>
					<span class="word">束訖羅博差<sub>(七)(初戒反)</sub>　</span>
					<span class="word">鉢邏奢博差<sub>(八)(初戒反)</sub>　</span>
					<span class="word">蜜羅博差<sub>(九)(初戒反)</sub>　</span>
					<span class="word">騷剌婆紇栗帝<sub>(十)</sub>　</span>
					<span class="word">妬剌拏紇栗折<sub>(章列反)</sub>隸<sub>(十一)</sub>　</span>
					<span class="word">鉢怛邏叉紇栗帝<sub>(十二)</sub>　</span>
					<span class="word">具具拏蜜隸<sub>(十三)</sub>　</span>
					<span class="word">唈<sub>(烏合反)</sub>茷叉薩隸<sub>(十四)</sub>　</span>
					<span class="word">遏怒訶祇𭌆茷<sub>(十五)</sub>　</span>
					<span class="word">牟尼鉢塔茷<sub>(十六)</sub>　</span>
					<span class="word">莎訶<sub>(唐言善說)</sub></span>
				</blockquote>
			</div>
			<div x-show="details" class="details mb-3">
				這時天藏大梵就說了護國不退輪心大陀羅尼明咒章句：
			</div>
			<x-audio-para
				x-data="{audioSource: '{{ $page->baseUrl.'/assets/audios/ksitigarbha-dasacakra-mantra2.mp3' }}'}"
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
						<span class="word" @@click="$dispatch('play-segment')" data-start="00:00.00" data-end="00:01.31" data-index="0">tadyathā</span>　
						<span class="word" @@click="$dispatch('play-segment')" data-start="00:01.42" data-end="00:03.83" data-index="1">munimore munakalpe</span>　
						<span class="word" @@click="$dispatch('play-segment')" data-start="00:03.94" data-end="00:05.70" data-index="2">muni hṛdaye</span>　
						<span class="word" @@click="$dispatch('play-segment')" data-start="00:05.82" data-end="00:07.89" data-index="3">muni ruhābhicare</span>　
						<span class="word" @@click="$dispatch('play-segment')" data-start="00:08.04" data-end="00:09.71" data-index="4">muna halce</span>　
						<span class="word" @@click="$dispatch('play-segment')" data-start="00:09.82" data-end="00:11.36" data-index="5">muni game</span>　
						<span class="word" @@click="$dispatch('play-segment')" data-start="00:11.49" data-end="00:13.21" data-index="6">śukra pakṣe</span>　
						<span class="word" @@click="$dispatch('play-segment')" data-start="00:13.41" data-end="00:15.05" data-index="7">praśa pakṣe</span>　
						<span class="word" @@click="$dispatch('play-segment')" data-start="00:15.17" data-end="00:16.77" data-index="8">mira pakṣe</span>　
						<span class="word" @@click="$dispatch('play-segment')" data-start="00:16.92" data-end="00:19.07" data-index="9">saurabha hṛte</span>　
						<span class="word" @@click="$dispatch('play-segment')" data-start="00:19.31" data-end="00:21.11" data-index="10">turaṇa hṛcre</span>　
						<span class="word" @@click="$dispatch('play-segment')" data-start="00:21.28" data-end="00:23.28" data-index="11">patrakṣa hṛte</span>　
						<span class="word" @@click="$dispatch('play-segment')" data-start="00:23.44" data-end="00:24.99" data-index="12">gugunamile</span>　
						<span class="word" @@click="$dispatch('play-segment')" data-start="00:25.10" data-end="00:26.58" data-index="13">avakṣasare</span>　
						<span class="word" @@click="$dispatch('play-segment')" data-start="00:26.73" data-end="00:28.48" data-index="14">anuhāgeriva</span>　
						<span class="word" @@click="$dispatch('play-segment')" data-start="00:28.59" data-end="00:30.29" data-index="15">muni pathava</span>　
						<span class="word" @@click="$dispatch('play-segment')" data-start="00:30.42" data-end="00:31.61" data-index="16">svāhā</span>　
					</blockquote>
					<small class="text-muted float-end">
						IAST 羅馬拼音出自此書
						<a href="https://www.mantra.com.tw/classic/m9.html">「地藏十輪經咒音初探」</a>
					</small>
					<div class="clearfix"></div>
				</x-slot>
			</x-audio-para>
			<div x-show="details" class="details mb-3">
				<hr/>
			</div>
			<div :class="details ? 'bg-secondary text-white' : ''" class="paragraph">
				<span class="word">天藏大梵說是呪已</span>
				<span class="punc">，</span>
				<span class="word">復白佛言</span>
				<span class="punc">：</span>
				<span class="word">唯願世尊及諸大眾</span>
				<span class="punc">，</span>
				<span class="word">於我所說大陀羅尼皆生隨喜</span>
				<span class="punc">。</span>
				<span class="word">世尊告曰</span>
				<span class="punc">：</span>
				<span class="word">善哉</span>
				<span class="punc">，</span>
				<span class="word">善哉</span>
				<span class="punc">！</span>
				<span class="word">一切大眾亦作是言</span>
				<span class="punc">：</span>
				<span class="word">善哉</span>
				<span class="punc">，</span>
				<span class="word">善哉</span>
				<span class="punc">！</span>
				<span class="word">爾時世尊復告尊者大目乾連</span>
				<span class="punc">，</span>
				<span class="word">及告彌勒菩薩摩訶薩曰</span>
				<span class="punc">：</span>
				<span class="word">善男子</span>
				<span class="punc">！</span>
				<span class="word">汝等皆應受持如是天藏大梵所說護國不退輪心大陀羅尼明呪章句</span>
				<span class="punc">，</span>
				<span class="word">傳授未來此佛土中</span>
				<span class="punc">，</span>
				<span class="word">一切真善剎帝利王</span>
				<span class="punc">，</span>
				<span class="word">令自受持及令流布</span>
				<span class="punc">。</span>
				<span class="word">由是因緣</span>
				<span class="punc">，</span>
				<span class="word">彼諸真善剎帝利王</span>
				<span class="punc">，</span>
				<span class="word">并諸眷屬及國人民一切皆得利益安樂</span>
				<span class="punc">。</span>
				<span class="word">常轉法輪名稱高遠</span>
				<span class="punc">，</span>
				<span class="word">威德熾盛摧滅邪見</span>
				<span class="punc">，</span>
				<span class="word">建立正見守護法眼</span>
				<span class="punc">，</span>
				<span class="word">紹三寶種皆令熾盛無有斷絕</span>
				<span class="punc">。</span>
				<span class="word">成熟無量無邊有情</span>
				<span class="punc">，</span>
				<span class="word">於大乘中</span>
				<span class="punc">，</span>
				<span class="word">堅固淨信久住圓滿</span>
				<span class="punc">，</span>
				<span class="word">能具修六波羅蜜多</span>
				<span class="punc">，</span>
				<span class="word">斷一切障速到究竟</span>
				<span class="punc">。</span>
			</div>
			<div x-show="details" class="details mb-3">
				天藏大梵說完此咒後，又對佛說：唯願世尊及大眾們，對我所說的大陀羅尼都能心生隨喜。世尊對天藏大梵說：善哉！善哉！一切大眾也同樣說道：善哉！善哉！這時世尊又對大目犍連尊者，及彌勒菩薩薩摩訶薩說：善男子！你們都應受持這天藏大梵所說的護國不退輪心大陀羅尼明咒章句，傳授給未來這佛土中所有真善剎帝利王，使他們能受持及流傳此咒。由此因緣，能使這些真善剎帝利王、眷屬及國土人民們都能得利益安樂。能使佛法廣傳聲名遠播，威德昌盛摧滅邪見，建立正法知見，守護法眼徹見真理，延續昌隆三寶傳承永不斷絕。能成熟無量無邊眾生，淨信堅固，圓滿安住大乘佛法，圓滿修行六波羅蜜多，斷除一切障難，速到究竟彼岸。
				<hr/>
			</div>
			<div :class="details ? 'bg-secondary text-white' : ''" class="paragraph">
				<span class="word">爾時世尊重顯此義而說頌曰</span>
				<span class="punc">：</span>
				<blockquote>
					<span class="word">時天藏大梵</span>
					<span class="punc">，</span>
					<span class="word">請問兩足尊</span>
					<span class="punc">，</span><br/>
					<span class="word">利根等有情</span>
					<span class="punc">，</span>
					<span class="word">樂修定誦福</span>
					<span class="punc">。</span><br/>
					<span class="word">聰慧王成法</span>
					<span class="punc">，</span>
					<span class="word">為升進沉淪</span>
					<span class="punc">，</span><br/>
					<span class="word">所修三事中</span>
					<span class="punc">，</span>
					<span class="word">唯除惑不退</span>
					<span class="punc">？</span><br/>
					<span class="word">世尊告彼言</span>
					<span class="punc">，</span>
					<span class="word">若犯無依行</span>
					<span class="punc">，</span><br/>
					<span class="word">雖覺慧猛利</span>
					<span class="punc">，</span>
					<span class="word">而趣無間獄</span>
					<span class="punc">。</span><br/>
					<span class="word">非真聰慧故</span>
					<span class="punc">，</span>
					<span class="word">樂行十惡輪</span>
					<span class="punc">，</span><br/>
					<span class="word">斷滅諸善根</span>
					<span class="punc">，</span>
					<span class="word">速趣於地獄</span>
					<span class="punc">。</span><br/>
					<span class="word">定能斷煩惱</span>
					<span class="punc">，</span>
					<span class="word">非聽誦福業</span>
					<span class="punc">，</span><br/>
					<span class="word">故欲求涅槃</span>
					<span class="punc">，</span>
					<span class="word">常當修靜慮</span>
					<span class="punc">。</span><br/>
					<span class="word">有慧勤精進</span>
					<span class="punc">，</span>
					<span class="word">護持我正法</span>
					<span class="punc">，</span><br/>
					<span class="word">由敬信袈裟</span>
					<span class="punc">，</span>
					<span class="word">能渡煩惱海</span>
					<span class="punc">。</span><br/>
					<span class="word">樂處空閑林</span>
					<span class="punc">，</span>
					<span class="word">遠造無間類</span>
					<span class="punc">，</span><br/>
					<span class="word">敬持戒修定</span>
					<span class="punc">，</span>
					<span class="word">能渡諸有海</span>
					<span class="punc">。</span><br/>
					<span class="word">普信敬三乘</span>
					<span class="punc">，</span>
					<span class="word">興隆我正法</span>
					<span class="punc">，</span><br/>
					<span class="word">供養染衣者</span>
					<span class="punc">，</span>
					<span class="word">當成功德海</span>
					<span class="punc">。</span><br/>
					<span class="word">能伏難調心</span>
					<span class="punc">，</span>
					<span class="word">不舉苾芻罪</span>
					<span class="punc">，</span><br/>
					<span class="word">修知足聖種</span>
					<span class="punc">，</span>
					<span class="word">當成兩足尊</span>
					<span class="punc">。</span><br/>
					<span class="word">遠離惡苾芻</span>
					<span class="punc">，</span>
					<span class="word">親近聖行處</span>
					<span class="punc">，</span><br/>
					<span class="word">不食用僧物</span>
					<span class="punc">，</span>
					<span class="word">速證大菩提</span>
					<span class="punc">。</span><br/>
					<span class="word">三界中安樂</span>
					<span class="punc">，</span>
					<span class="word">皆由三寶生</span>
					<span class="punc">，</span><br/>
					<span class="word">故求安樂人</span>
					<span class="punc">，</span>
					<span class="word">常供養三寶</span>
					<span class="punc">。</span><br/>
					<span class="word">旃荼羅王等</span>
					<span class="punc">，</span>
					<span class="word">朋黨惡苾芻</span>
					<span class="punc">，</span><br/>
					<span class="word">於三寶起過</span>
					<span class="punc">，</span>
					<span class="word">速墮無間獄</span>
					<span class="punc">。</span><br/>
					<span class="word">十壓油輪罪</span>
					<span class="punc">，</span>
					<span class="word">等彼一婬坊</span>
					<span class="punc">，</span><br/>
					<span class="word">置彼十婬坊</span>
					<span class="punc">，</span>
					<span class="word">等一酒坊罪</span>
					<span class="punc">。</span><br/>
					<span class="word">置十酒坊罪</span>
					<span class="punc">，</span>
					<span class="word">等彼一屠坊</span>
					<span class="punc">，</span><br/>
					<span class="word">置彼十屠坊</span>
					<span class="punc">，</span>
					<span class="word">罪等王等一</span>
					<span class="punc">。</span><br/>
					<span class="word">真善國王等</span>
					<span class="punc">，</span>
					<span class="word">興隆我正法</span>
					<span class="punc">，</span><br/>
					<span class="word">普供養三乘</span>
					<span class="punc">，</span>
					<span class="word">當成功德海</span>
					<span class="punc">。</span><br/>
					<span class="word">七寶滿贍部</span>
					<span class="punc">，</span>
					<span class="word">奉施佛及僧</span>
					<span class="punc">，</span><br/>
					<span class="word">彼所獲福聚</span>
					<span class="punc">，</span>
					<span class="word">不如護佛法</span>
					<span class="punc">。</span><br/>
					<span class="word">為佛僧造寺</span>
					<span class="punc">，</span>
					<span class="word">量等十四洲</span>
					<span class="punc">，</span><br/>
					<span class="word">彼所獲福聚</span>
					<span class="punc">，</span>
					<span class="word">不如護佛法</span>
					<span class="punc">。</span><br/>
					<span class="word">造佛窣堵波</span>
					<span class="punc">，</span>
					<span class="word">量等三千界</span>
					<span class="punc">，</span><br/>
					<span class="word">彼所獲福聚</span>
					<span class="punc">，</span>
					<span class="word">不如護佛法</span>
					<span class="punc">。</span><br/>
					<span class="word">解阿羅漢縛</span>
					<span class="punc">，</span>
					<span class="word">種種修供養</span>
					<span class="punc">，</span><br/>
					<span class="word">不障我正法</span>
					<span class="punc">，</span>
					<span class="word">其福勝於彼</span>
					<span class="punc">。</span><br/>
					<span class="word">千俱胝劫中</span>
					<span class="punc">，</span>
					<span class="word">智者勤修定</span>
					<span class="punc">，</span><br/>
					<span class="word">所生勝覺慧</span>
					<span class="punc">，</span>
					<span class="word">不如護我法</span>
					<span class="punc">。</span><br/>
					<span class="word">真善國王等</span>
					<span class="punc">，</span>
					<span class="word">遠離十惡輪</span>
					<span class="punc">，</span><br/>
					<span class="word">護持我正法</span>
					<span class="punc">，</span>
					<span class="word">及著袈裟者</span>
					<span class="punc">。</span><br/>
					<span class="word">不毀謗我說</span>
					<span class="punc">，</span>
					<span class="word">三乘法及人</span>
					<span class="punc">，</span><br/>
					<span class="word">普聽聞供養</span>
					<span class="punc">，</span>
					<span class="word">護持說法者</span>
					<span class="punc">。</span><br/>
					<span class="word">不損三寶物</span>
					<span class="punc">，</span>
					<span class="word">不障著袈裟</span>
					<span class="punc">，</span><br/>
					<span class="word">常敬器非器</span>
					<span class="punc">，</span>
					<span class="word">福勝無倫匹</span>
					<span class="punc">。</span><br/>
					<span class="word">如五日並現</span>
					<span class="punc">，</span>
					<span class="word">大海皆枯竭</span>
					<span class="punc">，</span><br/>
					<span class="word">如是護我法</span>
					<span class="punc">，</span>
					<span class="word">能枯竭煩惱</span>
					<span class="punc">。</span><br/>
					<span class="word">如風災起時</span>
					<span class="punc">，</span>
					<span class="word">諸山皆散滅</span>
					<span class="punc">，</span><br/>
					<span class="word">如是護我法</span>
					<span class="punc">，</span>
					<span class="word">能除滅煩惱</span>
					<span class="punc">。</span><br/>
					<span class="word">如水災起時</span>
					<span class="punc">，</span>
					<span class="word">大地皆漂壞</span>
					<span class="punc">，</span><br/>
					<span class="word">如是護我法</span>
					<span class="punc">，</span>
					<span class="word">能壞非愛果</span>
					<span class="punc">。</span><br/>
					<span class="word">如如意寶珠</span>
					<span class="punc">，</span>
					<span class="word">隨所願皆滿</span>
					<span class="punc">，</span><br/>
					<span class="word">如是三乘法</span>
					<span class="punc">，</span>
					<span class="word">能滿眾生願</span>
					<span class="punc">。</span><br/>
					<span class="word">如遇得賢瓶</span>
					<span class="punc">，</span>
					<span class="word">除貧獲富樂</span>
					<span class="punc">，</span><br/>
					<span class="word">如是遇佛法</span>
					<span class="punc">，</span>
					<span class="word">滅惑證菩提</span>
					<span class="punc">。</span><br/>
					<span class="word">如十五夜月</span>
					<span class="punc">，</span>
					<span class="word">明照滿虛空</span>
					<span class="punc">，</span><br/>
					<span class="word">如是護法人</span>
					<span class="punc">，</span>
					<span class="word">智慧周法界</span>
					<span class="punc">。</span><br/>
					<span class="word">如虛空平等</span>
					<span class="punc">，</span>
					<span class="word">無物亦無相</span>
					<span class="punc">，</span><br/>
					<span class="word">如是護法人</span>
					<span class="punc">，</span>
					<span class="word">知諸法一味</span>
					<span class="punc">。</span><br/>
					<span class="word">如日放光明</span>
					<span class="punc">，</span>
					<span class="word">恒除世間闇</span>
					<span class="punc">，</span><br/>
					<span class="word">如是護法者</span>
					<span class="punc">，</span>
					<span class="word">常普照世間</span>
					<span class="punc">。</span>
				</blockquote>
			</div>
			<div x-show="details" class="details mb-3">
				這時世尊為重顯經義而說了偈頌：
				<blockquote>
					當時天藏大梵天王，向福慧雙足的世尊請法：<br/>
					根性聰利的眾生，樂作修定、習誦、營福三業輪。<br/>
					聰慧的剎利王勤修佛法，能求得升進涅槃境地，或是仍然沉淪六道輪迴？<br/>
					眾生所修習的三種業輪中，那一種能除滅煩惱，讓道業不退轉呢？<br/>
					世尊開示天藏大梵，無論覺慧如何聰利的眾生，如在十無依行惡法中犯了一惡行，仍然會趣向無間地獄淪墮。<br/>
					不是真正智慧的人，才會去造作十惡輪，斷滅了德本善根，身後快速輪墮無間地獄。<br/>
					真正斷除煩惱要修習禪定，不是僅靠習誦、營福事業就能成就，所以要證得涅槃解脫，應當要靜心勤修禪定。<br/>
					有智慧的人時時勇猛精進，又能護持佛法正道，敬信出家人袈裟清淨持戒真義，當能度脫煩惱苦海。樂處山林寂靜處，不造作無間罪及同類罪，恭敬持戒及修定，當能渡脫三界生死無邊海。<br/>
					恭敬信受三乘佛法不妄分別，興旺昌隆佛道正法，供養穿著袈裟的出家人，當能成就深廣功德海。<br/>
					以大威智慧調伏難調的妄心，不依不正法舉問比丘罪失，修習聖道正法少欲知足，當能成就為福慧具足的世尊。<br/>
					遠離破戒惡行比丘，恭敬親近賢聖所行正法，不食不用四方僧物，速能成就正等正覺。三界種種殊妙安樂，都由信敬三寶所成就，因此想求安樂的眾生，常要盡心供養三寶。<br/>
					剎帝利惡王等惡人，與破戒惡行比丘勾結成黨，對佛、對法、對僧都造下了罪業，必定快速淪墮無間地獄。<br/>
					用十輪壓油所獲罪業，等同開設一淫坊。<br/>
					開設十間淫坊所獲罪業，等同開設一酒坊。<br/>
					開設十家酒坊所獲罪業，等同開設一屠坊。<br/>
					開設十處屠坊所獲罪業，等同剎帝利惡王等惡人在十惡輪中造作一惡輪。<br/>
					身心俱善的真善剎帝利王等善人，興盛昌隆佛道正法，普遍供養三乘無所分別，當能成就深廣功德海。<br/>
					用遍滿南贍部洲的七寶，布施供養諸佛及弟子僧眾，所累聚的福德，還不如護持佛法。<br/>
					建造寺院供養四方僧伽，院舍高大寬廣如同十個四大部洲，所累聚的福德，還不如護持佛法。<br/>
					建造塔廟供養佛舍利，塔廟高大寬廣如同三千大千世界，所累聚的福德，還不如護持佛法。<br/>
					解救阿羅漢長久被綑綁束縛，更奉以種種精妙供養修大功德；護持佛道不障正法，更勝過這解救及供養阿羅漢的功德。<br/>
					智慧聰利的人勤修禪定，經歷了千億長劫，所得到的殊妙覺悟智慧，還不如護持佛法。<br/>
					真善剎帝利王等善人，能遠離十惡輪，盡心護持佛道正法，護持穿著袈裟的出家人。<br/>
					不毀謗如來所說的佛法，對於三乘法及三乘修行人，都能聽受及供養，盡心護持說法教化眾生之人。<br/>
					不去侵損三寶物品，不去障惱穿著袈裟的出家人，無論是法器僧或非器都能恭敬，當能得到無以倫比的福德。<br/>
					譬如五個太陽同時出現天上，能將大海所有海水完全枯竭，盡心護持佛法，也能如此枯竭所有煩惱。<br/>
					譬如大風災時，所有山嶺全被狂風吹散消滅，盡心護持佛法，也能如此吹滅所有煩惱。<br/>
					譬如大水災時，一切大地全被洪水浸漂沖壞，盡心護持佛法，也能如此漂壞一切惡報不樂果。<br/>
					譬如摩尼如意寶珠，所有願求都能滿足，盡心護持三乘佛法，也能如此如法圓滿眾生所願。<br/>
					譬如遇到了賢德寶瓶，能滅除貧窮得到富樂，得遇佛法，也能如此滅除煩惱得證菩提。<br/>
					譬如十五夜晚皓月當空，照遍虛空處處光明，盡心護持佛法之人，也能如此智慧圓融週遍法界。<br/>
					譬如虛空中一無所有，無物無相無所分別，盡心護持佛法之人，也能如此了知真法如一沒有任何分別。<br/>
					譬如太陽朗照放大光明，除盡世間一切黑暗，盡心護持佛法之人，也能如此成就正法光明導引眾生趨向解脫。
				</blockquote>
				<hr/>
			</div>
			<h4 class="toc-item" id="vol5-ch6">
				<span class="word">有依行品第四之一</span>
			</h4>
			<div :class="details ? 'bg-secondary text-white' : ''" class="paragraph">
				<span class="word">爾時</span>
				<span class="punc">，</span>
				<span class="word">金剛藏菩薩摩訶薩</span>
				<span class="punc">，</span>
				<span class="word">於大眾中從座而起</span>
				<span class="punc">，</span>
				<span class="word">頂禮佛足</span>
				<span class="punc">，</span>
				<span class="word">偏袒一肩</span>
				<span class="punc">，</span>
				<span class="word">右膝著地</span>
				<span class="punc">，</span>
				<span class="word">合掌恭敬</span>
				<span class="punc">，</span>
				<span class="word">以頌問曰</span>
				<span class="punc">：</span>
				<blockquote>
					<span class="word">昔言破戒失淨德</span>
					<span class="punc">，</span>
					<span class="word">非賢聖器非我子</span>
					<span class="punc">，</span><br/>
					<span class="word">諸沙門法棄如燼</span>
					<span class="punc">，</span>
					<span class="word">不應居我清眾中</span>
					<span class="punc">。</span><br/>
					<span class="word">三垢所污失滅道</span>
					<span class="punc">，</span>
					<span class="word">彼不堪消勝供養</span>
					<span class="punc">，</span><br/>
					<span class="word">於施四方僧眾物</span>
					<span class="punc">，</span>
					<span class="word">少分我亦不聽受</span>
					<span class="punc">。</span><br/>
					<span class="word">四根本罪隨犯一</span>
					<span class="punc">，</span>
					<span class="word">清眾所棄如海尸</span>
					<span class="punc">。</span><br/>
					<span class="word">云何今說惡苾芻</span>
					<span class="punc">，</span>
					<span class="word">應忍應悲遮讁罰</span>
					<span class="punc">。</span><br/>
					<span class="word">復勸應勤供養彼</span>
					<span class="punc">，</span>
					<span class="word">悲愍勿生微惡心</span>
					<span class="punc">。</span><br/>
					<span class="word">恭敬聽受所說法</span>
					<span class="punc">，</span>
					<span class="word">當獲福慧大悲者</span>
					<span class="punc">。</span><br/>
					<span class="word">六通救世餘經說</span>
					<span class="punc">，</span>
					<span class="word">汝等皆當信大乘</span>
					<span class="punc">。</span><br/>
					<span class="word">正直微妙菩提道</span>
					<span class="punc">，</span>
					<span class="word">應捨二乘解脫路</span>
					<span class="punc">。</span><br/>
					<span class="word">云何今復說三乘</span>
					<span class="punc">，</span>
					<span class="word">普勸聽持修供養</span>
					<span class="punc">。</span><br/>
					<span class="word">根力覺道沙門果</span>
					<span class="punc">，</span>
					<span class="word">此經中有餘處無</span>
					<span class="punc">。</span><br/>
					<span class="word">八支聖道無等倫</span>
					<span class="punc">，</span>
					<span class="word">三乘皆同行此道</span>
					<span class="punc">。</span><br/>
					<span class="word">欲求解脫勤精進</span>
					<span class="punc">，</span>
					<span class="word">各隨所願證菩提</span>
					<span class="punc">。</span><br/>
					<span class="word">有情中尊當照察</span>
					<span class="punc">，</span>
					<span class="word">會今昔教使無違</span>
					<span class="punc">。</span><br/>
					<span class="word">令諸天人菩薩眾</span>
					<span class="punc">，</span>
					<span class="word">解悟心歡證真實</span>
					<span class="punc">。</span><br/>
					<span class="word">聞說大乘誰有益</span>
					<span class="punc">？</span>
					<span class="word">聞說大乘誰有損</span>
					<span class="punc">？</span><br/>
					<span class="word">十種解脫聲聞乘</span>
					<span class="punc">，</span>
					<span class="word">聞說誰損誰有益</span>
					<span class="punc">？</span><br/>
					<span class="word">何人聞法轉昇進</span>
					<span class="punc">？</span>
					<span class="word">何人聞法翻退沒</span>
					<span class="punc">？</span><br/>
					<span class="word">云何厭患諸有為</span>
					<span class="punc">？</span>
					<span class="word">能速枯竭於老死</span>
					<span class="punc">。</span><br/>
					<span class="word">晝夜勤修諸善者</span>
					<span class="punc">，</span>
					<span class="word">依何妙理御何乘</span>
					<span class="punc">？</span><br/>
					<span class="word">能渡深廣四瀑流</span>
					<span class="punc">？</span>
					<span class="word">救世皆當為宣說</span>
					<span class="punc">。</span>
				</blockquote>
			</div>
			<div x-show="details" class="details mb-3">
				這時金剛藏菩薩摩訶薩，在大眾中從座位上起身，頂禮佛足，偏袒一肩，右膝著地，合掌恭敬以偈頌請問佛：
				<blockquote>
					過去世尊曾說破戒的比丘失去了清淨的德行，已不是賢聖法器僧，也不是世尊弟子，沙門戒律盡棄焚滅如同灰燼，不應當再居處清淨僧眾中。<br/>
					貪瞋痴三毒壞滅了正法道心，他們已不能再受世間勝供養，四方信眾所布施供養的僧眾資具，既使少許如來也不允許他們受用。<br/>
					殺盜婬妄四根本罪只要犯了一罪，就要從清淨僧眾中如同死屍一樣逐棄，為何今天卻開示，我們應當要憐憫、容忍破戒行惡的比丘，遮護他們不受到世俗的責罰。<br/>
					世尊還勸導眾生對破戒比丘仍應精勤供養，對待他們要有悲憫心切勿生起絲毫嫌惡心，仍要恭敬聽受他們說法，當能得獲福慧，成就大悲利他菩薩道。<br/>
					世尊在其他經典中都說要證悟究竟六神通來救度眾生，因此眾生應當信受大乘佛法。<br/>
					大乘佛法是最正確最殊妙的正覺之道，所以應捨棄二乘的修行法門而來修行大乘。<br/>
					為何在這經中又同說三乘，普勸眾生應當聽聞受持供養三乘。<br/>
					根力覺道與聲聞乘沙門四果唯有在這部大乘經典中同說，其他大乘經典則沒有開示。<br/>
					八支正道殊勝無比，三乘行者都應該同修這八正道。<br/>
					想要求得解脫應要精勤修習八正道，就能隨自己得願求證悟聲聞、緣覺、菩薩等妙果。<br/>
					祈請世尊觀照眾生開解眾生，今天法會的開示與往昔的教導並無矛盾相違之處。<br/>
					讓會中的天人菩薩等眾，能歡喜解悟真實法理。<br/>
					那一類眾生聽聞大乘佛法能獲益？<br/>
					那一類眾生聽聞大乘佛法會受損？<br/>
					聲聞乘種種解脫法，那一類眾生聽聞後能受益？<br/>
					那一類眾生聽聞後會受損？<br/>
					那一類眾生聞法後能昇進道心果證？<br/>
					那一類眾生聞法後反而會退墮沉淪？<br/>
					如何厭離種種世間有為法，能快速枯竭生老病死的輪迴因緣？<br/>
					晝夜精進勤修各類善法的修行人，要依從何種道法？<br/>
					修行何種乘法？<br/>
					來渡脫深廣的煩惱瀑流？<br/>
					請世尊宣說開示，讓我們奉持以救度眾生。
				</blockquote>
				<hr/>
			</div>
			<div :class="details ? 'bg-secondary text-white' : ''" class="paragraph">
				<span class="word">爾時佛告金剛藏菩薩摩訶薩言</span>
				<span class="punc">：</span>
				<span class="word">善哉</span>
				<span class="punc">，</span>
				<span class="word">善哉</span>
				<span class="punc">！</span>
				<span class="word">善男子</span>
				<span class="punc">！</span>
				<span class="word">汝今為欲利益安樂無量有情</span>
				<span class="punc">，</span>
				<span class="word">為諸天人</span>
				<span class="punc">、</span>
				<span class="word">阿素洛等作大義利</span>
				<span class="punc">，</span>
				<span class="word">請問如來如是深義</span>
				<span class="punc">，</span>
				<span class="word">汝應諦聽</span>
				<span class="punc">，</span>
				<span class="word">善思念之</span>
				<span class="punc">，</span>
				<span class="word">吾當為汝分別解說</span>
				<span class="punc">。</span>
				<span class="word">金剛藏菩薩言</span>
				<span class="punc">：</span>
				<span class="word">唯然</span>
				<span class="punc">，</span>
				<span class="word">世尊</span>
				<span class="punc">！</span>
				<span class="word">願樂欲聞</span>
				<span class="punc">。</span>
			</div>
			<div x-show="details" class="details mb-3">
				這時佛對金剛藏菩薩摩訶薩說：很好！很好！善男子！你為了利益安樂無量眾生，為造就天人、阿修羅眾等現前及未來的大義大益，因此請問如來如此深奧法義，你要仔細聽聞，好好思惟我所說的，我要為你分別解說。金剛藏菩薩說：好的，世尊！我非常歡喜，願聽您開示。
				<hr/>
			</div>
			<div :class="details ? 'bg-secondary text-white' : ''" class="paragraph">
				<span class="word">佛言</span>
				<span class="punc">：</span>
				<span class="word">善男子</span>
				<span class="punc">！</span>
				<span class="word">有十種補特伽羅</span>
				<span class="punc">，</span>
				<span class="word">輪迴生死難得人身</span>
				<span class="punc">。</span>
				<span class="word">何等為十補特伽羅</span>
				<span class="punc">？</span>
				<blockquote>
					<span class="word">一者</span>
					<span class="punc">、</span>
					<span class="word">不種善根</span>
					<span class="punc">；</span><br/>
					<span class="word">二者</span>
					<span class="punc">、</span>
					<span class="word">未修福業</span>
					<span class="punc">；</span><br/>
					<span class="word">三者</span>
					<span class="punc">、</span>
					<span class="word">雜染相續</span>
					<span class="punc">；</span><br/>
					<span class="word">四者</span>
					<span class="punc">、</span>
					<span class="word">隨惡友行</span>
					<span class="punc">；</span><br/>
					<span class="word">五者</span>
					<span class="punc">、</span>
					<span class="word">不見不畏後世苦果</span>
					<span class="punc">；</span><br/>
					<span class="word">六者</span>
					<span class="punc">、</span>
					<span class="word">猛利貪欲</span>
					<span class="punc">；</span><br/>
					<span class="word">七者</span>
					<span class="punc">、</span>
					<span class="word">猛利瞋恚</span>
					<span class="punc">；</span><br/>
					<span class="word">八者</span>
					<span class="punc">、</span>
					<span class="word">猛利愚癡</span>
					<span class="punc">；</span><br/>
					<span class="word">九者</span>
					<span class="punc">、</span>
					<span class="word">其心迷亂</span>
					<span class="punc">；</span><br/>
					<span class="word">十者</span>
					<span class="punc">、</span>
					<span class="word">守惡邪見</span>
					<span class="punc">。</span>
				</blockquote>
			</div>
			<div x-show="details" class="details mb-3">
				佛說：善男子！有十種輪迴受生的眾生罪業深重，輪迴生死卻難生人道。是那十種眾生呢？
				<blockquote>
					一者、宿世及現世不種菩提善根。<br/>
					二者、未曾修習布施、持戒等福德事業。<br/>
					三者、貪、瞋、癡等雜染煩惱相續不斷。<br/>
					四者、隨順惡友造作惡行。<br/>
					五者、不信也不畏來世苦果惡報。<br/>
					六者、貪愛強烈無所厭足。<br/>
					七者、瞋恚強烈無法止息。<br/>
					八者、愚痴強烈不知正道。<br/>
					九者、心迷狂亂無法自主，造作種種惡業。<br/>
					十者、執持外道邪見不受正法。
				</blockquote>
				<hr/>
			</div>
			<div :class="details ? 'bg-secondary text-white' : ''" class="paragraph">
				<span class="word">如是十種無依行因</span>
				<span class="punc">，</span>
				<span class="word">令諸眾生犯根本罪</span>
				<span class="punc">，</span>
				<span class="word">毀犯尸羅</span>
				<span class="punc">，</span>
				<span class="word">墮諸惡趣</span>
				<span class="punc">。</span>
				<span class="word">何等名為十無依行</span>
				<span class="punc">？</span>
				<blockquote>
					<span class="word">謂我法中而出家者</span>
					<span class="punc">，</span>
					<span class="word">有加行壞</span>
					<span class="punc">，</span>
					<span class="word">意樂不壞</span>
					<span class="punc">。</span><br/>
					<span class="word">有意樂壞</span>
					<span class="punc">、</span>
					<span class="word">加行不壞</span>
					<span class="punc">。</span><br/>
					<span class="word">有加行</span>
					<span class="punc">、</span>
					<span class="word">意樂俱壞</span>
					<span class="punc">。</span><br/>
					<span class="word">有戒壞</span>
					<span class="punc">、</span>
					<span class="word">見不壞</span>
					<span class="punc">。</span><br/>
					<span class="word">有見壞</span>
					<span class="punc">、</span>
					<span class="word">戒不壞</span>
					<span class="punc">。</span><br/>
					<span class="word">有戒</span>
					<span class="punc">、</span>
					<span class="word">見俱壞</span>
					<span class="punc">。</span><br/>
					<span class="word">有於加行</span>
					<span class="punc">、</span>
					<span class="word">意樂</span>
					<span class="punc">、</span>
					<span class="word">戒</span>
					<span class="punc">、</span>
					<span class="word">見</span>
					<span class="punc">、</span>
					<span class="word">雖皆不壞</span>
					<span class="punc">，</span>
					<span class="word">而但依止惡友力行</span>
					<span class="punc">，</span>
					<span class="word">作無依行</span>
					<span class="punc">。</span><br/>
					<span class="word">有雖依止善友力行</span>
					<span class="punc">，</span>
					<span class="word">而復愚鈍猶如瘂羊</span>
					<span class="punc">，</span>
					<span class="word">於諸事業都不分別</span>
					<span class="punc">，</span>
					<span class="word">聞善友說善</span>
					<span class="punc">、</span>
					<span class="word">不善法</span>
					<span class="punc">，</span>
					<span class="word">不能領受</span>
					<span class="punc">、</span>
					<span class="word">不能記持</span>
					<span class="punc">，</span>
					<span class="word">不能解了善</span>
					<span class="punc">、</span>
					<span class="word">不善義</span>
					<span class="punc">，</span>
					<span class="word">由是因緣作無依行</span>
					<span class="punc">。</span><br/>
					<span class="word">有於種種財寶</span>
					<span class="punc">、</span>
					<span class="word">眾具常無厭足</span>
					<span class="punc">，</span>
					<span class="word">追求因緣</span>
					<span class="punc">，</span>
					<span class="word">其心迷亂作無依行</span>
					<span class="punc">。</span><br/>
					<span class="word">有為眾病之所逼惱</span>
					<span class="punc">，</span>
					<span class="word">便求種種祠祀呪術</span>
					<span class="punc">，</span>
					<span class="word">由是因緣作無依行</span>
					<span class="punc">。</span>
				</blockquote>
				<span class="word">如是十種無依行因</span>
				<span class="punc">，</span>
				<span class="word">令諸眾生犯根本罪</span>
				<span class="punc">，</span>
				<span class="word">於現法中非賢聖器</span>
				<span class="punc">，</span>
				<span class="word">毀犯尸羅</span>
				<span class="punc">，</span>
				<span class="word">墮諸惡趣</span>
				<span class="punc">。</span>
			</div>
			<div x-show="details" class="details mb-3">
				有十種無依行的業因，會讓眾生們違犯根本大罪，毀犯戒律而淪墮三惡道。是那十種業因稱為無依行法呢？
				<blockquote>
					就是指歸依佛門的出家人，有些人在修學用功上出了過失，但正法信念不壞。<br/>
					有些是正法信念已壞，但修學用功無過失。<br/>
					有些則是修學用功、正法信念皆壞。<br/>
					有些是違壞戒律，但知見未壞。<br/>
					有些是知見不正，但持戒不壞。<br/>
					有些是持戒、知見皆壞。<br/>
					有些是修學用功、正法信念、持戒、知見雖然都無過失，但依止惡知識惡行，造作無依行惡業。<br/>
					有些人雖依止善知識行為處事，但心智愚鈍如同啞羊，對於各種事務不能分別輕重，聽聞善知識所說的善或不善法，都無法領會，無法憶念受持，不能理解善或不善的意義區別，由此愚鈍因緣而造作了無依行惡業。<br/>
					還有些人對於財寶、生活資具永不滿足，攀求財富因緣，心念迷亂而造作無依行惡業。<br/>
					還有些人受病苦逼迫，便尋求種種外道祭祀、邪門咒術等，由此因緣而造作無依行惡業。
				</blockquote>
				這十種無依行業因，使得眾生等犯了根本罪，無法任持正法成為賢聖法器，毀犯戒律，必當淪墮三惡道。
				<hr/>
			</div>
			<div :class="details ? 'bg-secondary text-white' : ''" class="paragraph">
				<span class="word">善男子</span>
				<span class="punc">！</span>
				<span class="word">若有補特伽羅</span>
				<span class="punc">，</span>
				<span class="word">加行壞</span>
				<span class="punc">、</span>
				<span class="word">意樂不壞</span>
				<span class="punc">，</span>
				<span class="word">隨遇一種無依行因</span>
				<span class="punc">，</span>
				<span class="word">犯根本罪</span>
				<span class="punc">，</span>
				<span class="word">便深怖懼</span>
				<span class="punc">，</span>
				<span class="word">慚愧棄捨</span>
				<span class="punc">，</span>
				<span class="word">而不數數作諸惡行</span>
				<span class="punc">。</span>
				<span class="word">如來為益彼故</span>
				<span class="punc">，</span>
				<span class="word">說有污道沙門</span>
				<span class="punc">。</span>
				<span class="word">所以者何</span>
				<span class="punc">？</span>
				<span class="word">彼作如是重惡業已</span>
				<span class="punc">，</span>
				<span class="word">即便發露不敢覆藏</span>
				<span class="punc">，</span>
				<span class="word">慚愧懺悔</span>
				<span class="punc">。</span>
				<span class="word">彼由如是慚愧懺悔</span>
				<span class="punc">，</span>
				<span class="word">罪得除滅</span>
				<span class="punc">，</span>
				<span class="word">永斷相續</span>
				<span class="punc">，</span>
				<span class="word">不復更作</span>
				<span class="punc">。</span>
			</div>
			<div x-show="details" class="details mb-3">
				善男子！如有僧眾，在修學用功上出了過失，但正法信念未壞，無論遇到任何無依行因緣犯了根本罪，卻能深切畏懼，心懷慚愧厭離所作惡行，不再繼續造作各種惡行。如來為了利益這些人，稱他們為污道沙門。為何如此？他們造作這些重惡罪業後，立即表白自己過失不敢隱瞞，而能慚愧懺悔。由於他們作了這樣的慚愧懺悔，罪業可以滅除，永斷相續的惡念，今後不會再造作惡業。
				<hr/>
			</div>
			<div :class="details ? 'bg-secondary text-white' : ''" class="paragraph">
				<span class="word">雖於一切沙門法事皆應擯出</span>
				<span class="punc">，</span>
				<span class="word">一切沙門所有資具不聽受用</span>
				<span class="punc">，</span>
				<span class="word">而由彼人於三乘中成法器故</span>
				<span class="punc">，</span>
				<span class="word">如來慈悲</span>
				<span class="punc">，</span>
				<span class="word">或為彼說聲聞乘法</span>
				<span class="punc">、</span>
				<span class="word">或為彼說緣覺乘法</span>
				<span class="punc">、</span>
				<span class="word">或為彼說無上乘法</span>
				<span class="punc">。</span>
				<span class="word">彼有是處</span>
				<span class="punc">，</span>
				<span class="word">轉於第二</span>
				<span class="punc">、</span>
				<span class="word">第三生中</span>
				<span class="punc">，</span>
				<span class="word">發正願力</span>
				<span class="punc">，</span>
				<span class="word">遇善友力</span>
				<span class="punc">，</span>
				<span class="word">一切所作諸惡業障</span>
				<span class="punc">，</span>
				<span class="word">皆悉消滅</span>
				<span class="punc">。</span>
				<span class="word">或有證得聲聞乘果</span>
				<span class="punc">、</span>
				<span class="word">或有證得緣覺乘果而般涅槃</span>
				<span class="punc">、</span>
				<span class="word">或有悟入廣大甚深無上乘理</span>
				<span class="punc">。</span>
				<span class="word">如是戒壞見不壞者</span>
				<span class="punc">，</span>
				<span class="word">應知亦爾</span>
				<span class="punc">。</span>
			</div>
			<div x-show="details" class="details mb-3">
				雖然一切沙門法事都被擯除不允許參與，一切沙門僧眾的生活資具也不讓他享用，但由於他們仍能任持三乘佛法而成法器，所以如來慈悲，仍為他們開示聲聞乘法，或為他們開示緣覺乘法，或為他們開示無上大乘佛法。他們有此善因善果，在第二或第三世轉生時，正願力成就，得遇善知識提攜，過去所造作的一切罪惡業障能夠全部消滅。有的能證得聲聞乘果，或能證得緣覺乘果而得涅槃，或證入精深廣大的無上大乘正法。同樣的，違犯戒律但知見未壞的僧眾，應當知曉也是同樣的。
				<hr/>
			</div>
			<div :class="details ? 'bg-secondary text-white' : ''" class="paragraph">
				<span class="word">若有補特伽羅</span>
				<span class="punc">，</span>
				<span class="word">意樂壞</span>
				<span class="punc">、</span>
				<span class="word">加行不壞</span>
				<span class="punc">，</span>
				<span class="word">如來為益彼故</span>
				<span class="punc">，</span>
				<span class="word">說求四梵住法</span>
				<span class="punc">，</span>
				<span class="word">彼是聲聞乘器</span>
				<span class="punc">，</span>
				<span class="word">或是緣覺乘器</span>
				<span class="punc">。</span>
				<span class="word">若有補特伽羅</span>
				<span class="punc">，</span>
				<span class="word">加行</span>
				<span class="punc">、</span>
				<span class="word">意樂俱壞</span>
				<span class="punc">，</span>
				<span class="word">彼於諸乘皆非法器</span>
				<span class="punc">。</span>
				<span class="word">如來為益彼故</span>
				<span class="punc">，</span>
				<span class="word">讚說布施</span>
				<span class="punc">。</span>
				<span class="word">若有補特伽羅</span>
				<span class="punc">，</span>
				<span class="word">見壞</span>
				<span class="punc">、</span>
				<span class="word">戒不壞</span>
				<span class="punc">，</span>
				<span class="word">如來為益彼故</span>
				<span class="punc">，</span>
				<span class="word">說緣起法令捨惡見</span>
				<span class="punc">，</span>
				<span class="word">於現身中入聲聞法</span>
				<span class="punc">、</span>
				<span class="word">或緣覺法</span>
				<span class="punc">，</span>
				<span class="word">或於餘身方能悟入</span>
				<span class="punc">。</span>
				<span class="word">若有補特伽羅</span>
				<span class="punc">，</span>
				<span class="word">戒</span>
				<span class="punc">、</span>
				<span class="word">見俱壞</span>
				<span class="punc">，</span>
				<span class="word">彼於聖法亦不成器</span>
				<span class="punc">。</span>
				<span class="word">如來為益彼故</span>
				<span class="punc">，</span>
				<span class="word">讚說布施</span>
				<span class="punc">。</span>
			</div>
			<div x-show="details" class="details mb-3">
				如果有僧眾，正法信念壞而修學用功不壞，如來為了利益他們繼續修行，而為他們宣說慈、悲、喜、捨四梵住，他們能成為任持聲聞乘法或緣覺乘法的法器。如果有僧眾，修學用功及正法信念皆壞，則對三乘法都無法信受。如來為了利益他們，而為他們開示解說布施的利益功德。如果有僧眾，知見不正，但持戒不壞，如來為了利益他們，開示十二因緣法，使他們捨棄惡知惡見，在當生中能證悟聲聞法或緣覺法，或者來生才能開悟。若有僧眾，持戒及知見都毀壞，則無法任持正法成為法器。如來為利益他們，而為他們開示解說布施的利益功德。
				<hr/>
			</div>
			<div :class="details ? 'bg-secondary text-white' : ''" class="paragraph">
				<span class="word">若有補特伽羅</span>
				<span class="punc">，</span>
				<span class="word">加行</span>
				<span class="punc">、</span>
				<span class="word">意樂</span>
				<span class="punc">、</span>
				<span class="word">戒</span>
				<span class="punc">、</span>
				<span class="word">見不壞</span>
				<span class="punc">，</span>
				<span class="word">而但依止惡友力行</span>
				<span class="punc">，</span>
				<span class="word">如來為益彼故</span>
				<span class="punc">，</span>
				<span class="word">讚說十善業道</span>
				<span class="punc">。</span>
				<span class="word">若有補特伽羅</span>
				<span class="punc">，</span>
				<span class="word">雖復依止善友力行</span>
				<span class="punc">，</span>
				<span class="word">而復愚鈍猶如啞羊</span>
				<span class="punc">，</span>
				<span class="word">不能領受善不善法</span>
				<span class="punc">。</span>
				<span class="word">如來為益彼故</span>
				<span class="punc">，</span>
				<span class="word">讚說習誦</span>
				<span class="punc">。</span>
				<span class="word">若為種種貪病所逼</span>
				<span class="punc">，</span>
				<span class="word">有為種種見趣迷惑</span>
				<span class="punc">，</span>
				<span class="word">如來為益如是等故</span>
				<span class="punc">，</span>
				<span class="word">求解脫者</span>
				<span class="punc">，</span>
				<span class="word">為其開示能出生死趣聲聞乘四聖諦法</span>
				<span class="punc">。</span>
				<span class="word">斷見論者</span>
				<span class="punc">，</span>
				<span class="word">為其讚說諸緣起法</span>
				<span class="punc">；</span>
				<span class="word">常見論者</span>
				<span class="punc">，</span>
				<span class="word">為說三界諸有諸趣</span>
				<span class="punc">，</span>
				<span class="word">死此生彼</span>
				<span class="punc">，</span>
				<span class="word">如陶家輪往來無絕</span>
				<span class="punc">，</span>
				<span class="word">無常等法</span>
				<span class="punc">。</span>
			</div>
			<div x-show="details" class="details mb-3">
				如果有僧眾，修學用功、正法信念、持戒、知見都無缺壞，卻依止惡知識惡行，如來為利益他們，為他們開示解說十善業道功德。如果有僧眾雖然依止善知識而行，但生性愚鈍如同啞羊，無法領會受持善法或不善法義理。如來為利益他們，為他們開示解說習誦經典功德。如果有僧眾受種種貪欲疾病逼切，被種種邪見邪趣迷惑，如來為了利益這等眾生，為求解脫之人開示能出離生死，趣修聲聞乘的苦集滅道四諦聖法。為妄持斷見無因果論之人，開示解說十二因緣緣起法；為妄持常見邪論之人，開示解說三界因果，六道生死輪回，如同製陶之輪運轉不停，生滅遷流剎那不住的無常法。
				<hr/>
			</div>
			<div :class="details ? 'bg-secondary text-white' : ''" class="paragraph">
				<span class="word">善男子</span>
				<span class="punc">！</span>
				<span class="word">如來無有所說名字</span>
				<span class="punc">、</span>
				<span class="word">言說</span>
				<span class="punc">、</span>
				<span class="word">音聲</span>
				<span class="punc">、</span>
				<span class="word">空</span>
				<span class="punc">、</span>
				<span class="word">無</span>
				<span class="punc">、</span>
				<span class="word">果者</span>
				<span class="punc">，</span>
				<span class="word">無不皆為成熟有情</span>
				<span class="punc">。</span>
				<span class="word">是故一切毀謗如來所說正法</span>
				<span class="punc">，</span>
				<span class="word">壞諸有情正法眼罪</span>
				<span class="punc">，</span>
				<span class="word">過諸無間</span>
				<span class="punc">、</span>
				<span class="word">似無間等無量重罪</span>
				<span class="punc">。</span>
				<span class="word">若有於我為欲利樂一切有情所說正法</span>
				<span class="punc">，</span>
				<span class="word">謂依聲聞乘所說正法</span>
				<span class="punc">、</span>
				<span class="word">或依緣覺乘所說正法</span>
				<span class="punc">、</span>
				<span class="word">或依大乘所說正法</span>
				<span class="punc">，</span>
				<span class="word">誹謗</span>
				<span class="punc">、</span>
				<span class="word">遮止</span>
				<span class="punc">、</span>
				<span class="word">障蔽</span>
				<span class="punc">、</span>
				<span class="word">隱沒下至一頌</span>
				<span class="punc">。</span>
				<span class="word">當知是名謗正法者</span>
				<span class="punc">，</span>
				<span class="word">亦名毀滅八聖道者</span>
				<span class="punc">、</span>
				<span class="word">亦名破壞一切有情正法眼者</span>
				<span class="punc">。</span>
				<span class="word">如是之人</span>
				<span class="punc">，</span>
				<span class="word">既自習行大無利行</span>
				<span class="punc">，</span>
				<span class="word">亦令一切有情習行大無利行</span>
				<span class="punc">；</span>
				<span class="word">此人依止無慚愧僧</span>
				<span class="punc">，</span>
				<span class="word">如是毀謗如來正法</span>
				<span class="punc">。</span>
			</div>
			<div x-show="details" class="details mb-3">
				善男子！如來不妄說正法，法中的名字、言說、音聲、空相、無為、果證等等皆無實相，都是為了成熟各類眾生的方便說法。因此一切譭謗如來所說正法，破壞眾生們知見正法的罪業，超過五無間、似無間等無量重罪。如果有人對於如來為利樂一切眾生所說的正法，就是隨依聲聞乘人所說的正法、或隨依緣覺乘人所說的正法、或隨依大乘人所說的正法。加以誹謗、阻止、障蔽、隱沒，甚至障礙一句一頌。當知這就是謗毀正法的人，也就是毀滅八聖道的人，也就是破壞一切眾生知見正法的人。這種人，不但自己造作了極大的無利益惡行，也使所有眾生造作極大的無利益惡行。這種人依循無慚愧僧的所作所為，譭謗了如來正法。
				<hr/>
			</div>
			<div :class="details ? 'bg-secondary text-white' : ''" class="paragraph">
				<span class="word">復次</span>
				<span class="punc">，</span>
				<span class="word">善男子</span>
				<span class="punc">！</span>
				<span class="word">有四種僧</span>
				<span class="punc">。</span>
				<span class="word">何等為四</span>
				<span class="punc">？</span>
				<blockquote>
					<span class="word">一者</span>
					<span class="punc">、</span>
					<span class="word">勝義僧</span>
					<span class="punc">；</span><br/>
					<span class="word">二者</span>
					<span class="punc">、</span>
					<span class="word">世俗僧</span>
					<span class="punc">；</span><br/>
					<span class="word">三者</span>
					<span class="punc">、</span>
					<span class="word">啞羊僧</span>
					<span class="punc">；</span><br/>
					<span class="word">四者</span>
					<span class="punc">、</span>
					<span class="word">無慚愧僧</span>
					<span class="punc">。</span>
				</blockquote>
				<span class="word">云何名勝義僧</span>
				<span class="punc">？</span>
				<span class="word">謂佛世尊</span>
				<span class="punc">、</span>
				<span class="word">若諸菩薩摩訶薩眾</span>
				<span class="punc">，</span>
				<span class="word">其德尊高</span>
				<span class="punc">，</span>
				<span class="word">於一切法得自在者</span>
				<span class="punc">；</span>
				<span class="word">若獨勝覺</span>
				<span class="punc">、</span>
				<span class="word">若阿羅漢</span>
				<span class="punc">、</span>
				<span class="word">若不還</span>
				<span class="punc">、</span>
				<span class="word">若一來</span>
				<span class="punc">、</span>
				<span class="word">若預流</span>
				<span class="punc">，</span>
				<span class="word">如是七種補特伽羅</span>
				<span class="punc">，</span>
				<span class="word">勝義僧攝</span>
				<span class="punc">。</span>
				<span class="word">若諸有情帶在家相</span>
				<span class="punc">，</span>
				<span class="word">不剃鬚髮不服袈裟</span>
				<span class="punc">，</span>
				<span class="word">雖不得受一切出家別解脫戒</span>
				<span class="punc">，</span>
				<span class="word">一切羯磨</span>
				<span class="punc">、</span>
				<span class="word">布薩</span>
				<span class="punc">、</span>
				<span class="word">自恣悉皆遮遣</span>
				<span class="punc">，</span>
				<span class="word">而有聖法得聖果故</span>
				<span class="punc">，</span>
				<span class="word">勝義僧攝</span>
				<span class="punc">。</span>
				<span class="word">是名勝義僧</span>
				<span class="punc">。</span>
			</div>
			<div x-show="details" class="details mb-3">
				此外，善男子！世間僧人分為四種。是那四種呢？
				<blockquote>
					一者、勝義僧；<br/>
					二者、世俗僧；<br/>
					三者、啞羊僧；<br/>
					四者、無慚愧僧。
				</blockquote>
				什麼是勝義僧？就是佛世尊、或如諸菩薩摩訶薩眾，他們德慧尊高，一切法都能自在無礙；還有證果的獨覺、阿羅漢、阿那含、斯陀含、須陀洹等，勝義僧包含了這七種聖眾。如果眾生們現在家相，不剃鬚髮不穿袈裟，雖然不能領受一切出家人的別解脫戒，一切羯磨、布薩、自恣等佛事也都不能參與，但能修行佛法證悟正果，因此也包含在勝義僧中。這就稱為勝義僧。
				<hr/>
			</div>
			<div :class="details ? 'bg-secondary text-white' : ''" class="paragraph">
				<span class="word">云何名世俗僧</span>
				<span class="punc">？</span>
				<span class="word">謂剃鬚髮被服袈裟</span>
				<span class="punc">，</span>
				<span class="word">成就出家別解脫戒</span>
				<span class="punc">，</span>
				<span class="word">是名世俗僧</span>
				<span class="punc">。</span>
				<span class="word">云何名啞羊僧</span>
				<span class="punc">？</span>
				<span class="word">謂不了知根本等罪犯與不犯</span>
				<span class="punc">，</span>
				<span class="word">不知輕重</span>
				<span class="punc">。</span>
				<span class="word">毀犯種種小隨小罪</span>
				<span class="punc">，</span>
				<span class="word">不知發露懺悔所犯</span>
				<span class="punc">。</span>
				<span class="word">憃愚魯鈍</span>
				<span class="punc">，</span>
				<span class="word">於微小罪不見不畏</span>
				<span class="punc">。</span>
				<span class="word">不依聰明善士而住</span>
				<span class="punc">，</span>
				<span class="word">不時時間往詣多聞聰明者所</span>
				<span class="punc">，</span>
				<span class="word">親近承事</span>
				<span class="punc">。</span>
				<span class="word">亦不數數恭敬請問</span>
				<span class="punc">，</span>
				<span class="word">云何為善</span>
				<span class="punc">？</span>
				<span class="word">云何不善</span>
				<span class="punc">？</span>
				<span class="word">云何有罪</span>
				<span class="punc">？</span>
				<span class="word">云何無罪</span>
				<span class="punc">？</span>
				<span class="word">修何為妙</span>
				<span class="punc">？</span>
				<span class="word">作何為惡</span>
				<span class="punc">？</span>
				<span class="word">如是一切補特伽羅啞羊僧攝</span>
				<span class="punc">。</span>
				<span class="word">是名啞羊僧</span>
				<span class="punc">。</span>
			</div>
			<div x-show="details" class="details mb-3">
				什麼是世俗僧？就是剃除鬚髮身穿袈裟，出家領受了別解脫戒，稱為世俗僧。什麼是啞羊僧？就是指不知道什麼是根本罪、無間罪等等，不知道是否犯罪或不犯罪，也不知犯罪是輕或重。常常毀犯各種微小罪，不知道要發露懺悔所犯之罪。生性愚蠢魯鈍，不知也不畏違犯微小罪的惡果報。不懂要依止聰敏善知識修行，也不懂要會常去拜訪請益、親近侍奉多聞聰敏善知識。也不會常常恭敬請問，什麼是善或不善？什麼是有罪或無罪？什麼是正妙善行？什麼是乖理惡行？所有這樣的僧眾，都包含在啞羊僧類。這就稱為啞羊僧。
				<hr/>
			</div>
			<div :class="details ? 'bg-secondary text-white' : ''" class="paragraph">
				<span class="word">云何名無慚愧僧</span>
				<span class="punc">？</span>
				<span class="word">謂若有情為活命故</span>
				<span class="punc">，</span>
				<span class="word">歸依我法而求出家</span>
				<span class="punc">。</span>
				<span class="word">得出家已</span>
				<span class="punc">，</span>
				<span class="word">於所受持別解脫戒</span>
				<span class="punc">，</span>
				<span class="word">一切毀犯</span>
				<span class="punc">，</span>
				<span class="word">無慚無愧</span>
				<span class="punc">，</span>
				<span class="word">不見不畏後世苦果</span>
				<span class="punc">。</span>
				<span class="word">內懷腐敗如穢蝸螺</span>
				<span class="punc">，</span>
				<span class="word">貝音狗行</span>
				<span class="punc">。</span>
				<span class="word">常好虛言曾無一實</span>
				<span class="punc">。</span>
				<span class="word">慳貪</span>
				<span class="punc">、</span>
				<span class="word">嫉妬</span>
				<span class="punc">、</span>
				<span class="word">愚癡</span>
				<span class="punc">、</span>
				<span class="word">憍慢</span>
				<span class="punc">，</span>
				<span class="word">離三勝業</span>
				<span class="punc">。</span>
				<span class="word">貪著利養</span>
				<span class="punc">、</span>
				<span class="word">恭敬</span>
				<span class="punc">、</span>
				<span class="word">名譽</span>
				<span class="punc">；</span>
				<span class="word">耽湎六塵</span>
				<span class="punc">，</span>
				<span class="word">好樂婬泆</span>
				<span class="punc">，</span>
				<span class="word">愛欲色</span>
				<span class="punc">、</span>
				<span class="word">聲</span>
				<span class="punc">、</span>
				<span class="word">香</span>
				<span class="punc">、</span>
				<span class="word">味</span>
				<span class="punc">、</span>
				<span class="word">觸境</span>
				<span class="punc">。</span>
				<span class="word">如是一切補特伽羅無慚僧攝</span>
				<span class="punc">。</span>
				<span class="word">毀謗正法</span>
				<span class="punc">，</span>
				<span class="word">是名無慚愧僧</span>
				<span class="punc">。</span>
			</div>
			<div x-show="details" class="details mb-3">
				什麼是無慚愧僧？就是眾生為了活命而出家歸依佛門。出家之後，對於所領受的別解脫戒全都毀犯，無慚無愧，不知也不畏後世苦果。內心腐敗猶如將糞污及身體一起都藏在殼內的臭穢蝸螺，表面上大吹法螺，實際惡行低賤如狗。常愛虛言妄語沒有一句正見實話。心懷慳貪、嫉妒、愚癡、憍慢，遠離身口意清淨三業。貪著利養、恭敬、名聞；沉溺在六塵之中，喜好縱欲淫樂，愛著色聲香味觸等五欲享受。一切這類的僧人都是無慚愧僧。譭謗正法無慚無愧，就稱為無慚愧僧。
				<hr/>
			</div>
			<div :class="details ? 'bg-secondary text-white' : ''" class="paragraph">
				<span class="word">善男子</span>
				<span class="punc">！</span>
				<span class="word">勝義僧者</span>
				<span class="punc">，</span>
				<span class="word">於中或有亦是勝道沙門所攝</span>
				<span class="punc">。</span>
				<span class="word">言勝道者</span>
				<span class="punc">，</span>
				<span class="word">謂若能依八支聖道</span>
				<span class="punc">，</span>
				<span class="word">自度一切煩惱駛流</span>
				<span class="punc">，</span>
				<span class="word">亦令他度</span>
				<span class="punc">。</span>
				<span class="word">此復云何</span>
				<span class="punc">？</span>
				<span class="word">謂佛世尊</span>
				<span class="punc">，</span>
				<span class="word">及獨勝覺</span>
				<span class="punc">，</span>
				<span class="word">諸阿羅漢</span>
				<span class="punc">。</span>
				<span class="word">如是三種補特伽羅</span>
				<span class="punc">，</span>
				<span class="word">已離一切有支眷屬</span>
				<span class="punc">，</span>
				<span class="word">故名勝道</span>
				<span class="punc">。</span>
				<span class="word">復有菩薩摩訶薩眾</span>
				<span class="punc">，</span>
				<span class="word">不假他緣</span>
				<span class="punc">，</span>
				<span class="word">於一切法智見無障</span>
				<span class="punc">，</span>
				<span class="word">攝受利樂一切有情</span>
				<span class="punc">，</span>
				<span class="word">亦名勝道沙門所攝</span>
				<span class="punc">。</span>
			</div>
			<div x-show="details" class="details mb-3">
				善男子！勝義僧眾，其中部分也可說是屬於勝道沙門。所謂勝道，就是指能依止八正道修行，自度一切煩惱束縛，也能度他。這又是指什麼呢？就是佛世尊，及二乘的證果獨覺、阿羅漢。這三種聖眾，已經出離了一切三界生死果報，故稱為勝道。還有菩薩摩訶薩眾，不藉外緣，自己精進修行開悟覺慧，證悟一切法，智見無礙，能引領利益一切眾生，也是屬於勝道沙門。
				<hr/>
			</div>
			<div :class="details ? 'bg-secondary text-white' : ''" class="paragraph">
				<span class="word">其勝義僧及世俗僧</span>
				<span class="punc">，</span>
				<span class="word">於中或有亦是示道沙門所攝</span>
				<span class="punc">。</span>
				<span class="word">若有成就別解脫戒真善異生</span>
				<span class="punc">，</span>
				<span class="word">乃至具足世間正見</span>
				<span class="punc">，</span>
				<span class="word">彼由記說變現力故</span>
				<span class="punc">，</span>
				<span class="word">能廣為他宣說開示諸聖道法</span>
				<span class="punc">，</span>
				<span class="word">當知如是補特伽羅</span>
				<span class="punc">，</span>
				<span class="word">名最下劣示道沙門</span>
				<span class="punc">。</span>
				<span class="word">證預流果補特伽羅</span>
				<span class="punc">，</span>
				<span class="word">是名第二</span>
				<span class="punc">。</span>
				<span class="word">證一來果補特伽羅</span>
				<span class="punc">，</span>
				<span class="word">是名第三</span>
				<span class="punc">。</span>
				<span class="word">證不還果補特伽羅</span>
				<span class="punc">，</span>
				<span class="word">是名第四</span>
				<span class="punc">。</span>
				<span class="word">復有菩薩摩訶薩眾</span>
				<span class="punc">，</span>
				<span class="word">是名第五</span>
				<span class="punc">，</span>
				<span class="word">謂住初地至第十地</span>
				<span class="punc">，</span>
				<span class="word">乃至安住最後有身</span>
				<span class="punc">，</span>
				<span class="word">此皆示道沙門所攝</span>
				<span class="punc">。</span>
			</div>
			<div x-show="details" class="details mb-3">
				在勝義僧和世俗僧中，其中部分也是屬於示道沙門。如有眾生出家領受了別解脫戒，乃至具足世間有漏正慧正知，能了達解說佛法深義，廣為他眾宣說開示種種佛法聖道，這樣的僧眾，就是最下等的示道沙門。證得初果的眾生，是第二種。證得一來果的眾生，是第三種。證得不還果的眾生，是第四種。還有菩薩摩訶薩眾，是第五種，就是指住於初地至十地境界，乃至是安住一生補處的等覺菩薩，這些聖眾都是屬於示道沙門。
				<hr/>
			</div>
			<div :class="details ? 'bg-secondary text-white' : ''" class="paragraph">
				<span class="word">若有成就別解脫戒</span>
				<span class="punc">，</span>
				<span class="word">軌則所行清淨具足</span>
				<span class="punc">，</span>
				<span class="word">此皆命道沙門所攝</span>
				<span class="punc">。</span>
				<span class="word">以道活命</span>
				<span class="punc">，</span>
				<span class="word">故名命道</span>
				<span class="punc">。</span>
				<span class="word">復有菩薩摩訶薩眾</span>
				<span class="punc">，</span>
				<span class="word">為欲攝受利益安樂一切有情</span>
				<span class="punc">，</span>
				<span class="word">具足修行六到彼岸</span>
				<span class="punc">，</span>
				<span class="word">亦名命道</span>
				<span class="punc">。</span>
				<span class="word">如是勝道</span>
				<span class="punc">、</span>
				<span class="word">示道</span>
				<span class="punc">、</span>
				<span class="word">命道三種沙門</span>
				<span class="punc">，</span>
				<span class="word">名為世間真實福田</span>
				<span class="punc">。</span>
				<span class="word">所餘沙門名為污道</span>
				<span class="punc">，</span>
				<span class="word">雖非真實</span>
				<span class="punc">，</span>
				<span class="word">亦得墮在福田數中</span>
				<span class="punc">。</span>
			</div>
			<div x-show="details" class="details mb-3">
				如有眾生出家領受了別解脫戒，所作所行都依戒律，具足清淨，這些僧眾則是屬於命道沙門。依道活命，所以稱為命道。還有菩薩摩訶薩眾，為了引領利益安樂一切眾生，圓滿修行六度，也稱為命道。勝道、示道、命道這三種沙門，可稱為世間的真實福田。其他沙門則稱為污道沙門，雖非真正的勝道、示道、命道沙門，但受佛法開解智識，入在佛教，能為眾生廣作佛事，也是列在福田僧中。
				<hr/>
			</div>
			<div :class="details ? 'bg-secondary text-white' : ''" class="paragraph">
				<span class="word">若有依止無慚愧僧補特伽羅</span>
				<span class="punc">，</span>
				<span class="word">於我正法毘奈耶中名為死屍</span>
				<span class="punc">，</span>
				<span class="word">於清眾海應當擯棄</span>
				<span class="punc">。</span>
				<span class="word">非法器故</span>
				<span class="punc">，</span>
				<span class="word">我於彼人不稱大師</span>
				<span class="punc">，</span>
				<span class="word">彼人於我亦非弟子</span>
				<span class="punc">。</span>
				<span class="word">有無慚僧不成法器</span>
				<span class="punc">，</span>
				<span class="word">稱我為師</span>
				<span class="punc">，</span>
				<span class="word">於我舍利及我形像深生敬信</span>
				<span class="punc">；</span>
				<span class="word">於我法僧聖所愛戒亦深敬信</span>
				<span class="punc">；</span>
				<span class="word">既不自執諸惡邪見</span>
				<span class="punc">，</span>
				<span class="word">亦不令他執惡邪見</span>
				<span class="punc">。</span>
				<span class="word">能廣為他宣說我法</span>
				<span class="punc">，</span>
				<span class="word">稱揚讚歎不生毀謗</span>
				<span class="punc">；</span>
				<span class="word">常發正願</span>
				<span class="punc">；</span>
				<span class="word">隨所犯罪數數厭捨</span>
				<span class="punc">，</span>
				<span class="word">發露懺悔</span>
				<span class="punc">，</span>
				<span class="word">眾多業障皆能除滅</span>
				<span class="punc">。</span>
				<span class="word">當知如是補特伽羅</span>
				<span class="punc">，</span>
				<span class="word">信敬三寶聖戒力故</span>
				<span class="punc">，</span>
				<span class="word">勝九十五諸外道眾多百千倍</span>
				<span class="punc">。</span>
				<span class="word">非速能入般涅槃城</span>
				<span class="punc">，</span>
				<span class="word">轉輪聖王尚不能及</span>
				<span class="punc">，</span>
				<span class="word">況餘雜類一切有情</span>
				<span class="punc">！</span>
			</div>
			<div x-show="details" class="details mb-3">
				如果是破戒惡行的無慚愧僧，在佛法律藏中稱為死屍，應當要擯出清淨僧海。由於他們已經不是能任持正法的法器僧人，所以如來不是他們的導師，他們也不是如來的弟子。其中有些不成法器的無慚愧僧，在如來滅度後，仍然尊敬如來為導師，對於如來的舍利及法像深切敬信；也深切敬信法寶、僧寶所傳授的清淨聖戒；非但自己不執持各種惡知邪見，也不使他人執持惡知邪見。能廣為他人宣說佛法，稱揚讚歎佛法，不譭謗佛法。信解正法常發正願；無論犯了大小何種罪業，都能發露懺悔棄捨厭離，如此便可滅除許多業障。應知這樣的僧眾，由於信敬三寶及持守聖戒的功德力，威德勝過九十五種外道們百千倍。雖然無法快速證得涅槃，但功德連轉輪聖王也無法比擬，更何況其他類的眾生。
				<hr/>
			</div>
			<div :class="details ? 'bg-secondary text-white' : ''" class="paragraph">
				<span class="word">以是義故</span>
				<span class="punc">，</span>
				<span class="word">如來觀察一切有情</span>
				<span class="punc">，</span>
				<span class="word">諸業法受差別相已</span>
				<span class="punc">，</span>
				<span class="word">作如是說</span>
				<span class="punc">：</span>
				<span class="word">於我法中</span>
				<span class="punc">，</span>
				<span class="word">剃除鬚髮被袈裟者</span>
				<span class="punc">，</span>
				<span class="word">我終不聽剎帝利等毀辱讁罰</span>
				<span class="punc">。</span>
				<span class="word">若有毀辱讁罰一切出家之人</span>
				<span class="punc">，</span>
				<span class="word">所獲罪報如前廣說</span>
				<span class="punc">。</span>
				<span class="word">又依我法捨俗出家</span>
				<span class="punc">，</span>
				<span class="word">剃除鬚髮被赤袈裟</span>
				<span class="punc">，</span>
				<span class="word">即為一切過去</span>
				<span class="punc">、</span>
				<span class="word">未來</span>
				<span class="punc">、</span>
				<span class="word">現在諸佛慈悲護念</span>
				<span class="punc">；</span>
				<span class="word">威儀形相所服袈裟</span>
				<span class="punc">，</span>
				<span class="word">亦為過去</span>
				<span class="punc">、</span>
				<span class="word">未來</span>
				<span class="punc">、</span>
				<span class="word">現在</span>
				<span class="punc">、</span>
				<span class="word">諸佛世尊慈悲守護</span>
				<span class="punc">。</span>
				<span class="word">是故輕毀剃除鬚髮被赤袈裟出家人者</span>
				<span class="punc">，</span>
				<span class="word">即是輕毀一切過去</span>
				<span class="punc">、</span>
				<span class="word">未來</span>
				<span class="punc">、</span>
				<span class="word">現在</span>
				<span class="punc">、</span>
				<span class="word">諸佛世尊</span>
				<span class="punc">。</span>
				<span class="word">由是因緣</span>
				<span class="punc">，</span>
				<span class="word">諸有智慧</span>
				<span class="punc">，</span>
				<span class="word">厭怖眾苦</span>
				<span class="punc">，</span>
				<span class="word">欣求人天涅槃樂者</span>
				<span class="punc">，</span>
				<span class="word">不應輕毀捨俗出家剃除鬚髮被袈裟者</span>
				<span class="punc">。</span>
			</div>
			<div x-show="details" class="details mb-3">
				以此緣故，如來察知一切眾生三業果報法受的種種不同後，作這樣開示：歸依佛法，剃除鬚髮身穿袈裟的出家人，我從不允許剎帝利王等來毀辱責罰他們。如有毀辱責罰任何出家人，所獲罪報如前面經文所廣說。而且，歸依佛法離俗出家，剃除鬚髮身穿紅袈裟，即是受到一切過去、未來、現在三世諸佛的慈悲護念，莊嚴威儀的袈裟法衣，也是受到過去、未來、現在諸佛世尊慈悲守護。因此輕慢詆譭剃除鬚髮穿紅袈裟的出家人，就是輕慢詆譭一切過去、未來、現在諸佛世尊。因這緣故，凡有智慧，厭怖世間眾苦，願求人天涅槃大樂的人，都不應該輕慢詆譭離俗出家，剃除鬚髮穿著袈裟的僧人。
				<hr/>
			</div>
			<div :class="details ? 'bg-secondary text-white' : ''" class="paragraph">
				<span class="word">有無慚僧毀破禁戒</span>
				<span class="punc">，</span>
				<span class="word">不成三乘賢聖法器</span>
				<span class="punc">，</span>
				<span class="word">既自堅執諸惡邪見</span>
				<span class="punc">，</span>
				<span class="word">亦能令他執惡邪見</span>
				<span class="punc">。</span>
				<span class="word">謂為真善剎帝利</span>
				<span class="punc">、</span>
				<span class="word">真善婆羅門</span>
				<span class="punc">、</span>
				<span class="word">真善宰官</span>
				<span class="punc">、</span>
				<span class="word">真善居士</span>
				<span class="punc">、</span>
				<span class="word">真善沙門</span>
				<span class="punc">、</span>
				<span class="word">真善長者</span>
				<span class="punc">、</span>
				<span class="word">真善茷舍</span>
				<span class="punc">、</span>
				<span class="word">真善戍達羅</span>
				<span class="punc">、</span>
				<span class="word">若男若女</span>
				<span class="punc">，</span>
				<span class="word">說諸世間無父無母</span>
				<span class="punc">，</span>
				<span class="word">乃至無有善業惡業所得果報</span>
				<span class="punc">，</span>
				<span class="word">無有能得聖道果者</span>
				<span class="punc">，</span>
				<span class="word">一切諸法不從因生</span>
				<span class="punc">。</span>
				<span class="word">或有執言</span>
				<span class="punc">，</span>
				<span class="word">色界是常</span>
				<span class="punc">，</span>
				<span class="word">非變壞法</span>
				<span class="punc">。</span>
				<span class="word">或有執言</span>
				<span class="punc">，</span>
				<span class="word">無色界常</span>
				<span class="punc">，</span>
				<span class="word">非變壞法</span>
				<span class="punc">。</span>
				<span class="word">或有執言</span>
				<span class="punc">，</span>
				<span class="word">外道所計諸苦行法得究竟淨</span>
				<span class="punc">。</span>
			</div>
			<div x-show="details" class="details mb-3">
				毀破禁戒的無慚愧僧，不能成為任持三乘佛法的賢聖法器，自己妄執了各種惡知邪見，也使他人妄執惡知邪見。就是對真善剎帝利、真善婆羅門、真善宰官、真善居士、真善沙門、真善長者、真善吠舍、真善戍陀羅無論男女等人，妄說世間無父無母，乃至妄說世間沒有善惡因緣果報，沒有能得證涅槃正果的人，一切諸法都不是因緣和合而生。或是偏執妄說，色界常住不滅，永遠不壞的常論邪說。或是偏執妄說，無色界常住不滅，永遠不壞的常論邪說。或是偏執妄說，外道憑藉想像推論的各種苦行法，能證得究竟清淨。
				<hr/>
			</div>
			<div :class="details ? 'bg-secondary text-white' : ''" class="paragraph">
				<span class="word">或有執言</span>
				<span class="punc">，</span>
				<span class="word">唯聲聞乘得究竟淨</span>
				<span class="punc">，</span>
				<span class="word">非獨覺乘</span>
				<span class="punc">，</span>
				<span class="word">亦非大乘</span>
				<span class="punc">；</span>
				<span class="word">於聲聞乘</span>
				<span class="punc">，</span>
				<span class="word">信敬稱讚宣說開示</span>
				<span class="punc">。</span>
				<span class="word">於獨覺乘及於大乘</span>
				<span class="punc">，</span>
				<span class="word">誹謗</span>
				<span class="punc">、</span>
				<span class="word">輕毀</span>
				<span class="punc">、</span>
				<span class="word">障蔽</span>
				<span class="punc">、</span>
				<span class="word">隱沒</span>
				<span class="punc">，</span>
				<span class="word">不令流布</span>
				<span class="punc">。</span>
				<span class="word">或有執言</span>
				<span class="punc">，</span>
				<span class="word">唯獨覺乘得究竟淨</span>
				<span class="punc">，</span>
				<span class="word">非聲聞乘亦非大乘</span>
				<span class="punc">。</span>
				<span class="word">於獨覺乘</span>
				<span class="punc">，</span>
				<span class="word">信敬稱讚宣說開示</span>
				<span class="punc">。</span>
				<span class="word">於聲聞乘及於大乘</span>
				<span class="punc">，</span>
				<span class="word">誹謗</span>
				<span class="punc">、</span>
				<span class="word">輕毀</span>
				<span class="punc">、</span>
				<span class="word">障蔽</span>
				<span class="punc">、</span>
				<span class="word">隱沒</span>
				<span class="punc">，</span>
				<span class="word">不令流布</span>
				<span class="punc">。</span>
				<span class="word">或有執言</span>
				<span class="punc">，</span>
				<span class="word">唯有大乘得究竟淨</span>
				<span class="punc">，</span>
				<span class="word">非聲聞乘</span>
				<span class="punc">、</span>
				<span class="word">非獨覺乘</span>
				<span class="punc">。</span>
				<span class="word">於大乘法</span>
				<span class="punc">，</span>
				<span class="word">既自生信教他生信</span>
				<span class="punc">，</span>
				<span class="word">既自恭敬教他恭敬</span>
				<span class="punc">，</span>
				<span class="word">既自稱讚教他稱讚</span>
				<span class="punc">，</span>
				<span class="word">既自書寫教他書寫</span>
				<span class="punc">，</span>
				<span class="word">既自讀誦教他讀誦</span>
				<span class="punc">，</span>
				<span class="word">既自聽受教他聽受</span>
				<span class="punc">，</span>
				<span class="word">既自思惟教他思惟</span>
				<span class="punc">。</span>
				<span class="word">於他有情若是法器</span>
				<span class="punc">、</span>
				<span class="word">若非法器</span>
				<span class="punc">，</span>
				<span class="word">皆為廣說開示</span>
				<span class="punc">，</span>
				<span class="word">解釋微細甚深大乘法義</span>
				<span class="punc">。</span>
				<span class="word">於聲聞乘</span>
				<span class="punc">，</span>
				<span class="word">及獨覺乘</span>
				<span class="punc">，</span>
				<span class="word">誹謗</span>
				<span class="punc">、</span>
				<span class="word">輕毀</span>
				<span class="punc">、</span>
				<span class="word">障蔽</span>
				<span class="punc">、</span>
				<span class="word">隱沒</span>
				<span class="punc">，</span>
				<span class="word">不令流布</span>
				<span class="punc">。</span>
				<span class="word">自不生信障他生信</span>
				<span class="punc">，</span>
				<span class="word">自不恭敬障他恭敬</span>
				<span class="punc">，</span>
				<span class="word">自不稱讚障他稱讚</span>
				<span class="punc">，</span>
				<span class="word">自不書寫障他書寫</span>
				<span class="punc">，</span>
				<span class="word">自不讀誦聽受思惟</span>
				<span class="punc">，</span>
				<span class="word">障他讀誦聽受思惟</span>
				<span class="punc">，</span>
				<span class="word">不樂廣說開示解釋三乘法義</span>
				<span class="punc">。</span>
			</div>
			<div x-show="details" class="details mb-3">
				或是偏執妄說，只有修行聲聞乘能得究竟清淨，修行獨覺乘不行，修行大乘也不行。對於聲聞乘法信奉恭敬稱讚，宣說開示。對於獨覺乘法和大乘法，則是誹謗、輕毀、障蔽、隱沒，不讓這二法流通傳布。或是偏執妄說，只有修行獨覺乘能得究竟清淨，修行聲聞乘不行，修行大乘也不行。對於獨覺乘法信奉恭敬稱讚，宣說開示。對於聲聞乘法和大乘法，則是誹謗、輕毀、障蔽、隱沒，不讓這二法流通傳布。或是偏執妄說，只有修行大乘法可以得究竟清淨，修行聲聞乘不行，修行獨覺也不行。對於大乘法，不但自己信奉也教他人信奉，不僅自己恭敬也教他人恭敬，不僅自己稱讚也教他人稱讚，不僅自己書寫也教他人書寫，不僅自己讀誦也教他人讀誦，不僅自己聽信受持也教他人聽信受持，不僅自己思維法義也教他人思維法義。對於其他眾生，不論法器或非法器，都為他們廣說開示，解釋細微深奧大乘法義。對於聲聞乘法和獨覺乘法，則是誹謗、輕毀、障蔽、隱沒，不讓這二法流通傳布。自己不信奉也障礙他人信奉，自己不恭敬也障礙他人恭敬，自己不稱讚也障礙他人稱讚，自己不書寫也障礙他人書寫，自己不讀誦經典、聽受思維法義、也障礙他人讀誦經典、聽受思維法義。不喜歡對眾人廣說開示、解釋三乘法義。
				<hr/>
			</div>
			<div :class="details ? 'bg-secondary text-white' : ''" class="paragraph">
				<span class="word">或有執言</span>
				<span class="punc">，</span>
				<span class="word">唯修布施得究竟淨</span>
				<span class="punc">，</span>
				<span class="word">非戒</span>
				<span class="punc">、</span>
				<span class="word">非忍乃至非慧</span>
				<span class="punc">。</span>
				<span class="word">或有執言</span>
				<span class="punc">，</span>
				<span class="word">唯修禁戒得究竟淨</span>
				<span class="punc">，</span>
				<span class="word">非施</span>
				<span class="punc">、</span>
				<span class="word">非忍乃至非慧</span>
				<span class="punc">。</span>
				<span class="word">或有執言</span>
				<span class="punc">，</span>
				<span class="word">唯修安忍得究竟淨</span>
				<span class="punc">，</span>
				<span class="word">非施</span>
				<span class="punc">、</span>
				<span class="word">非戒乃至非慧</span>
				<span class="punc">。</span>
				<span class="word">或有執言</span>
				<span class="punc">，</span>
				<span class="word">唯修精進得究竟淨</span>
				<span class="punc">，</span>
				<span class="word">非施</span>
				<span class="punc">、</span>
				<span class="word">非戒乃至非慧</span>
				<span class="punc">。</span>
				<span class="word">或有執言</span>
				<span class="punc">，</span>
				<span class="word">唯修靜慮得究竟淨</span>
				<span class="punc">，</span>
				<span class="word">非施</span>
				<span class="punc">、</span>
				<span class="word">非戒乃至非慧</span>
				<span class="punc">。</span>
				<span class="word">或有執言</span>
				<span class="punc">，</span>
				<span class="word">唯修般若得究竟淨</span>
				<span class="punc">，</span>
				<span class="word">非施</span>
				<span class="punc">、</span>
				<span class="word">非戒乃至非定</span>
				<span class="punc">。</span>
				<span class="word">或有執言</span>
				<span class="punc">，</span>
				<span class="word">唯修種種世間所習諸伎藝智</span>
				<span class="punc">，</span>
				<span class="word">得究竟淨</span>
				<span class="punc">。</span>
				<span class="word">或有執言</span>
				<span class="punc">，</span>
				<span class="word">唯修種種投巖</span>
				<span class="punc">、</span>
				<span class="word">赴火</span>
				<span class="punc">、</span>
				<span class="word">自餓等行</span>
				<span class="punc">，</span>
				<span class="word">得究竟淨</span>
				<span class="punc">。</span>
			</div>
			<div x-show="details" class="details mb-3">
				或是偏執妄說，只有修持布施才能得到究竟清淨，修持戒忍辱乃至修慧等都不能得。或是偏執妄說，只有修持禁戒才能得到究竟清淨，修布施忍辱乃至修慧等都不能得。或是偏執妄說，只有修持安忍才能得到究竟清淨，修布施持戒乃至修慧等都不能得。或是偏執妄說，只有修持精進才能得到究竟清淨，修布施持戒乃至修慧等都不能得。或是偏執妄說，只有修持靜慮才能得到究竟清淨，修布施持戒乃至修慧等都不能得。或是偏執妄說，只有修持智慧才能得到究竟清淨，修布施持戒乃至修定等都不能得。或是偏執妄說，只有修學種種世間傳習的各類技藝智識，才能得到究竟清淨。或是偏執妄說，只有修行種種投崖取死、蹈火焚身、自餓絕食等苦行，才能得究竟清淨。
				<hr/>
			</div>
			<div :class="details ? 'bg-secondary text-white' : ''" class="paragraph">
				<span class="word">善男子</span>
				<span class="punc">！</span>
				<span class="word">如是破戒惡行苾芻</span>
				<span class="punc">，</span>
				<span class="word">非法器者</span>
				<span class="punc">，</span>
				<span class="word">種種誑惑真善法器諸有情等</span>
				<span class="punc">，</span>
				<span class="word">令執惡見</span>
				<span class="punc">。</span>
				<span class="word">彼由顛倒諸惡見故</span>
				<span class="punc">，</span>
				<span class="word">破壞真善剎帝利王</span>
				<span class="punc">，</span>
				<span class="word">乃至真善戍達羅等</span>
				<span class="punc">，</span>
				<span class="word">若男若女所有淨信戒聞捨慧</span>
				<span class="punc">。</span>
				<span class="word">轉剎帝利成旃荼羅</span>
				<span class="punc">，</span>
				<span class="word">乃至茷舍</span>
				<span class="punc">、</span>
				<span class="word">戍達羅等成旃荼羅</span>
				<span class="punc">。</span>
				<span class="word">此非法器破戒苾芻并剎帝利旃荼羅等</span>
				<span class="punc">，</span>
				<span class="word">師及弟子</span>
				<span class="punc">，</span>
				<span class="word">俱斷善根</span>
				<span class="punc">，</span>
				<span class="word">乃至當墮無間地獄</span>
				<span class="punc">。</span>
			</div>
			<div x-show="details" class="details mb-3">
				善男子！這種破戒惡行比丘、非法器僧，以種種妄言誑惑，使身心俱善乃至能受正法的法器眾生等，執持惡知惡見。由於種種顛倒惡知惡見，破壞了真善剎帝利王乃至真善戍達羅或男或女等，所有的淨信、淨戒、淨聞、淨捨、淨慧。反轉成了剎帝利旃荼羅惡王，乃至筏舍、戍達羅等旃荼羅惡人。這些非法器僧的破戒比丘與剎帝利惡王等惡人，惡師及惡弟子斷滅了善根，最後必當淪墮無間地獄。
				<hr/>
			</div>
			<div :class="details ? 'bg-secondary text-white' : ''" class="paragraph">
				<span class="word">善男子</span>
				<span class="punc">！</span>
				<span class="word">如人死尸</span>
				<span class="punc">，</span>
				<span class="word">膖脹爛臭</span>
				<span class="punc">，</span>
				<span class="word">諸來見者皆為臭熏</span>
				<span class="punc">。</span>
				<span class="word">隨所觸近爛臭死尸或與交翫隨被臭穢之所熏染</span>
				<span class="punc">。</span>
				<span class="word">如是真善剎帝利王</span>
				<span class="punc">，</span>
				<span class="word">乃至真善戍達羅等</span>
				<span class="punc">，</span>
				<span class="word">若男若女</span>
				<span class="punc">，</span>
				<span class="word">隨所親近破戒惡行非法器僧</span>
				<span class="punc">，</span>
				<span class="word">或與交遊</span>
				<span class="punc">，</span>
				<span class="word">或共住止</span>
				<span class="punc">，</span>
				<span class="word">或同事業</span>
				<span class="punc">，</span>
				<span class="word">隨被惡見臭穢熏染</span>
				<span class="punc">。</span>
				<span class="word">如是如是</span>
				<span class="punc">，</span>
				<span class="word">令彼真善剎帝利王</span>
				<span class="punc">，</span>
				<span class="word">乃至真善戍達羅等</span>
				<span class="punc">，</span>
				<span class="word">若男若女</span>
				<span class="punc">，</span>
				<span class="word">退失淨信戒聞捨慧</span>
				<span class="punc">，</span>
				<span class="word">成旃荼羅師及弟子</span>
				<span class="punc">，</span>
				<span class="word">俱斷善根</span>
				<span class="punc">，</span>
				<span class="word">乃至當墮無間地獄</span>
				<span class="punc">。</span>
			</div>
			<div x-show="details" class="details mb-3">
				善男子！譬如人的死屍膨脹腐爛後，所有接近的人都會被臭氣薰逼難受。與爛臭死屍接近或交遊，就被髒臭氣息薰染沾上臭氣。同樣的，真善剎帝利王乃至真善戍達羅無論男女等，任何親近破戒惡行的非法器僧，或是與他交往，或是同住集會，或是同作事業，就會被他髒臭的惡知惡見所薰染。如此如此長久熏習，使得這些真善剎帝利王乃至真善戍達羅無論男女等，退失了淨信、淨戒、淨聞、淨捨、淨慧，而成了旃荼羅惡人，惡師及惡弟子斷滅了善根，最後必當淪墮無間地獄。
				<hr/>
			</div>
			<div class="paragraph">
				<h2>
					<span class="word">地藏十輪經卷五</span>
				</h2>
			</div>
			<div class="d-flex mb-3">
				<div class="me-auto w-50">
					<a href="/ksitigarbha-dasacakra-vol4" class="btn btn-link border p-2 me-3 w-100 h-100 text-decoration-none">
						<div class="d-flex h-100 justify-content-between align-items-center">
							<div class="d-flex">
								<i class="fas fa-arrow-circle-left fs-1"></i>
							</div>
							<div class="d-flex w-100 justify-content-center">
								<span class="ms-2 text-start text-truncate">地藏十輪經卷四</span>
							</div>
						</div>
					</a>
				</div>
				<div class="ms-auto me-3 w-50">
					<a href="/ksitigarbha-dasacakra-vol6" class="btn btn-link border p-2 ms-3 w-100 h-100 text-decoration-none">
						<div class="d-flex h-100 justify-content-between align-items-center">
							<div class="d-flex w-100 justify-content-center">
								<span class="me-2 text-start text-truncate">地藏十輪經卷六</span>
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