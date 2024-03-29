@extends('_layouts.main')

@section('title')
<title>占察善惡業報經行法</title>
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
						<a @@click="jumpTo('vol1')" :class="{active: currItems['vol1'] && true}" class="nav-link text-nowrap" href="#vol1">占察善惡業報經行法</a>
						<ul class="nav navbar-nav">
							<li><a @@click="jumpTo('vol1-ch1')" :class="{active: currItems['vol1-ch1'] && true}" class="nav-link text-nowrap" href="#vol1-ch1">緣起第一</a></li>
							<li><a @@click="jumpTo('vol1-ch2')" :class="{active: currItems['vol1-ch2'] && true}" class="nav-link text-nowrap" href="#vol1-ch2">勸修第二</a></li>
							<li><a @@click="jumpTo('vol1-ch3')" :class="{active: currItems['vol1-ch3'] && true}" class="nav-link text-nowrap" href="#vol1-ch3">簡擇同行第三</a></li>
							<li><a @@click="jumpTo('vol1-ch4')" :class="{active: currItems['vol1-ch4'] && true}" class="nav-link text-nowrap" href="#vol1-ch4">占察輪相第四</a></li>
							<li><a @@click="jumpTo('vol1-ch5')" :class="{active: currItems['vol1-ch5'] && true}" class="nav-link text-nowrap" href="#vol1-ch5">正修懺法第五</a></li>
							<li><a @@click="jumpTo('vol1-ch6')" :class="{active: currItems['vol1-ch6'] && true}" class="nav-link text-nowrap" href="#vol1-ch6">別明二種觀道第六</a></li>
							<li><a @@click="jumpTo('vol1-ch7')" :class="{active: currItems['vol1-ch7'] && true}" class="nav-link text-nowrap" href="#vol1-ch7">附占輪相法</a></li>
							<li><a @@click="jumpTo('vol1-ch8')" :class="{active: currItems['vol1-ch8'] && true}" class="nav-link text-nowrap" href="#vol1-ch8">附懺壇中齋佛儀</a></li>
						</ul>
					</li>
				</ul>
			</x-toc>
		</div>
		<div id="content" class="col-md-9" :class="{'font-enlarged': textsize == 2, 'readonly': readOnly}">
			<nav>
				<ol class="breadcrumb">
					<li class="breadcrumb-item">修行概要</li>
					<li class="breadcrumb-item active">占察善惡業報經行法</li>
				</ol>
			</nav>
		
			<h1 class="toc-item" id="vol1">占察善惡業報經行法</h1>
			<small class="float-end mb-3">明　古吳比丘　智旭（藕益大師）　集</small>
			<div class="clearfix"></div>
			<h4 class="toc-item" id="vol1-ch1">
				<span>緣起第一</span>
			</h4>
			<div class="mb-3">
				<p>夫諸佛菩薩愍念羣迷。不啻如母憶子。故種種方便。教出苦輪。而眾生不了業報因緣。罔知斷惡修善。淨信日微。五濁增盛。由此劇苦機感。倍關無緣慈應。爰有當機。名堅淨信。諮請世尊。曲垂悲救。佛乃廣歎地藏功德。令其建立方便。於是以三種輪相。示善惡差別。以二種觀道。歸一實境界。仍誡業重之人。不得先修定慧。應依懺法。得清淨已。然後修習二觀。尅獲無難。此誠末世對症之神劑。而方便中之殊勝方便也。予悲障深。丁茲法亂。律教禪宗。淆訛匪一。幸逢斯典。開我迷雲。理觀事儀。昭然可踐。竊以諸懺十科行法。詳略稍殊。一一鬮陳。纖疑始決。罔敢師心。廼述緣起。</p>
				<hr/>
			</div>
			
			<h4 class="toc-item" id="vol1-ch2">
				<span>勸修第二</span>
			</h4>
			<div class="mb-3">
				<p>若佛弟子欲修出世正法者。欲現在無諸障緣者。欲除滅五逆十惡無間重業者。欲求資生眾具皆得充饒者。欲令重難輕遮皆得消滅者。欲得優婆塞．沙彌．比丘清淨律儀者。欲得菩薩三聚淨戒者。欲獲諸禪三昧者。欲獲無相智慧者。欲求現證三乘果位者。欲隨意往生淨佛國土者。欲悟無生法忍圓滿證入一實境界者。皆應受持修行此懺悔法。何以故。此是釋迦如來格外弘慈。地藏菩薩稱機悲願。無苦不拔。無樂不與。依此修行。淨信堅固。如經廣明。所宜諦信。</p>
				<hr/>
			</div>
			
			<h4 class="toc-item" id="vol1-ch3">
				<span>簡擇同行第三</span>
			</h4>
			<div class="mb-3">
				<p>經中不言人數多寡。准他行法。得至十人。但須嚴擇。必求法器。倘無同志。獨行彌善。或有真實為生死者。堪作伴侶。十人以內。多寡無妨。又必先審所求。或求律儀。或求定慧。或求果證。或求往生。所求相合。方可同修。於十人內。仍須推一夙德為教授師。事儀理觀。微細秉承。切勿鹵莽。唐捐苦行。</p>
				<hr/>
			</div>
			
			<h4 class="toc-item" id="vol1-ch4">
				<span>占察輪相第四</span>
			</h4>
			<div class="mb-3">
				<p>懺悔之法雖則普為眾生發露眾罪。然當人無始業習各有偏強。是故經中先說占初輪相。然後明懺悔法。今欲修懺悔者。既已嚴淨道場。宜於未建首前。各占輪相。簡察善惡。何罪偏重。應的悔之。於修懺時。庶便陳白。(<a href="#vol1-ch7">占法別附於後</a>。)</p>
				<hr/>
			</div>
			
			<h4 class="toc-item" id="vol1-ch5">
				<span>正修懺法第五</span>
			</h4>
			<div class="mb-3">
				<p>准經自列。亦具十科。</p>
				<p>&nbsp;</p>
			</div>
			
			<h5 id="vol1-ch5-sec1">
				<i class="fa-solid fa-section"></i>
				第一嚴淨道場
			</h5>
			<div class="mb-3">
				<p>經云。欲修懺悔者。當住靜處。隨力所能。莊嚴一室。內置佛事及安經法。懸繒旛葢。求集香華。以修供養。</p>
				<p>&nbsp;</p>
			</div>
			
			<h5 id="vol1-ch5-sec2">
				<i class="fa-solid fa-section"></i>
				第二清淨三業
			</h5>
			<div class="mb-3">
				<p>經云。澡浴身體。及洗衣服。勿令臭穢。准諸行法。每至穢處。必須更髑衣。旋轉既訖。洗浴清淨。還著淨衣。縱一日都不至穢。亦須一浴。終竟一期。或七日。或二七．三七乃至千日。以得三業純善輪相為期。於中專莫雜語。及一切接對問訊。或有所需。但可直索。不得因事牽發餘語。專秉一心。念所修法。不得剎那念世雜事。當思生死大事。無常迅速。堅精努力。乃克有濟。倘稍違淨法。則唐喪劬勞。不可不慎。</p>
				<p>&nbsp;</p>
			</div>
			
			<h5 id="vol1-ch5-sec3">
				<i class="fa-solid fa-section"></i>
				第三香華供養
			</h5>
			<div class="mb-3">
				<p>行者初入道場。至法座前。敷具正身。合掌倚立。應先緣念一切三寶。體常徧滿。無所不在。眾生迷惑。流轉可哀。我為眾生。翻迷歸悟。禮敬三寶。作是念已。唱言。</p>
				<p>一切恭敬。</p>
				<p>&nbsp;</p>
			</div>
			<div class="mb-3">
				<p>
					<strong>一心恭禮十方常住三寶。</strong>
					<span class="text-black-50">（如是禮已。隨所有香華等。當修供養。作是唱言。）</span>
				</p>
			</div>
			<div class="mb-3">
				<p>
					<strong>嚴持香華。如法供養。</strong>
				</p>
			</div>
			<div class="mb-3">
				<p>
					<strong>願此香華雲。徧滿十方界。供養一切佛。尊法諸賢聖。無邊佛土中。受用作佛事。</strong>
					<span class="text-black-50">（至此停唱。散華作供。手執香爐。作是想云。）</span>
				</p>
			</div>
			<div class="mb-3">
				<p>
					<strong>一切佛法僧寶。體常徧滿。無所不在。願令以此香華。等同法性。普熏一切諸佛剎土。施作佛事。十方一切供具。無時不有。我今當以十方所有一切種種香華．瓔珞．幢幡．寶葢．諸珍妙飾。種種音樂．燈明．燭火．飲食．衣服．臥具．湯藥。乃至盡十方所有一切種種莊嚴供養之具。憶想遙擬。普共眾生。奉獻供養。一切世界中。有修供養者。我今隨喜。若未修供養者。願得開導。令修供養。又願我身。速能徧至一切剎土。於一一佛法僧所。各以一切種莊嚴供養之具。共一切眾生等持奉獻。供養一切諸佛法身．色身．舍利．形像．浮圖廟塔。一切佛事。供養一切所有法藏及說法處。供養一切賢聖僧眾。願共一切眾生。修行如是供養已。漸得成就六波羅蜜．四無量心。深知一切法。本來寂靜。無生無滅。一味平等。離念清淨。畢竟圓滿。</strong>
					<span class="text-black-50">（此段全用經文。作是念已。唱云。）</span>
				</p>
			</div>
			<div class="mb-3">
				<p>
					供養已一切恭敬。
					<span class="text-black-50">（一禮。）</span>
				</p>
				<p>&nbsp;</p>
			</div>
			
			<h5 id="vol1-ch5-sec4">
				<i class="fa-solid fa-section"></i>
				第四啟請三寶諸天
			</h5>
			<div class="mb-3">
				<p>本經無啟請法。准餘行儀。於建首日。宜致三請。良以三寶雖無所不在。而眾生久積迷惑。背覺合塵。念與悲隔。今既翻迷歸悟。應須緣念三寶。充滿虗空。應物現形。如水中月。作是念已。涕淚翹勤。逐位三請。手執香爐。燒眾名香。口作是唱。</p>
				<p>&nbsp;</p>
			</div>
			<div class="mb-3">
				<p>
					<strong>一心奉請南無本師釋迦牟尼佛。</strong>
					<span class="text-black-50">（想云。我三業性如虗空。釋迦如來亦如是。不起真際為眾生。與眾俱來受供養。下皆准此。但改佛名及形相來處。至請賢聖。則云一切賢聖亦如是。餘皆准知。三請畢。隨作一禮。）</span>
				</p>
			</div>
			<div class="mb-3">
				<p>
					<strong>一心奉請南無毗婆尸等過去七佛。</strong>
				</p>
			</div>
			<div class="mb-3">
				<p>
					<strong>一心奉請南無普光佛等五十三佛。</strong>
				</p>
			</div>
			<div class="mb-3">
				<p>
					<strong>一心奉請南無一切諸佛所有色身．舍利．形像．浮圖廟塔．一切佛事。</strong>
					<span class="text-black-50">（想云。諸佛法身如虗空。化事住世難思議。我今三業如法請。惟願影現受供養。）</span>
				</p>
			</div>
			<div class="mb-3">
				<p>
					<strong>一心奉請南無十方三世一切諸佛。</strong>
				</p>
			</div>
			<div class="mb-3">
				<p>
					<strong>一心奉請南無占察善惡業報經微妙法藏。</strong>
					<span class="text-black-50">（想云。法性如空不可見。常住法寶難思議。我今三業如法請。惟願影現受供養。）</span>
				</p>
			</div>
			<div class="mb-3">
				<p>
					<strong>一心奉請南無十方一切法藏。</strong>
					<span class="text-black-50">（想如上。）</span>
				</p>
			</div>
			<div class="mb-3">
				<p>
					<strong>一心奉請南無十方一切賢聖。</strong>
				</p>
			</div>
			<div class="mb-3">
				<p>
					<strong>一心奉請南無堅淨信菩薩摩訶薩。</strong>
					<span class="text-black-50">（此是當機啟教之人。應念菩薩。為我等故。請問大法。我今得聞此最勝法。皆是菩薩莫大恩德。）</span>
				</p>
			</div>
			<div class="mb-3">
				<p>
					<strong>一心奉請南無徧吉菩薩．觀世音菩薩摩訶薩。</strong>
					<span class="text-black-50">（應念此二菩薩慈悲慧行。普度羣迷。與地藏菩薩威神無異。）</span>
				</p>
			</div>
			<div class="mb-3">
				<p>
					<strong>一心奉請南無地藏菩薩摩訶薩。</strong>
					<span class="text-black-50">（應念。此是我等的對懺悔之主。依此菩薩大慈大悲威神力故。令我無惡不滅。無善不生。我今歸命啟請。如子憶母。此為道場正主。餘佛菩薩。同作證明。涕泣求哀。猶如面奉。必冀菩薩。攝受護持。觀想偈文。應知如上。）</span>
				</p>
			</div>
			<div class="mb-3">
				<p>
					<strong>一心奉請梵釋四王天龍八部。僧伽藍內護正法者一切聖眾。</strong>
					<span class="text-black-50">（例皆三請。但除禮拜。白衣無妨。）</span>
				</p>
				<p>&nbsp;</p>
			</div>
			<div class="mb-3">
				<p>
					<strong>惟願釋迦慈父七佛世尊五十三佛。一切覺者。他心道眼。無礙見聞。身通自在。來降道場攝取我等令成淨信。</strong>
				</p>
			</div>
			<div class="mb-3">
				<p>
					<strong>占察善惡業報尊經。十方一切清淨法藏等真法性。充滿虗空。顯現道場受我供養。</strong>
				</p>
			</div>
			<div class="mb-3">
				<p>
					<strong>堅淨信菩薩徧吉菩薩觀世音菩薩等十方一切賢聖。不捨大慈來臨法座。哀憐覆護。證我行法。</strong>
				</p>
			</div>
			<div class="mb-3">
				<p>
					<strong>地藏菩薩摩訶薩。救世真士。大智開士。善安慰說者。速除諸障增淨信者。大慈大悲。不違本誓。放大光明。滿我所願。</strong>
				</p>
			</div>
			<div class="mb-3">
				<p>
					<strong>護法天龍伽藍真宰。隨我請來。堅守道場。却諸魔障。示現吉祥。令我所修自在成就。</strong>
				</p>
			</div>
			<div class="mb-3">
				<p>
					<span class="text-black-50">（每節執爐三說已。一禮。惟護法處不須禮拜。白衣無妨。）</span>
				</p>
				<p>&nbsp;</p>
			</div>
			
			<h5 id="vol1-ch5-sec5">
				<i class="fa-solid fa-section"></i>
				第五讚禮三寶
			</h5>
			<div class="mb-3">
				<p>經無讚法。不別立科。但取十輪經中地藏菩薩讚佛二偈。隨行禮敬。合為一科。</p>
				<p>&nbsp;</p>
			</div>
			<div class="mb-3">
				<p>
					<span><strong>我聞徧知海</strong></span>
					<span class="ms-4"><strong>真實德無邊</strong></span><br/>
					<span><strong>度脫諸有情</strong></span>
					<span class="ms-4"><strong>心歡喜敬禮</strong></span><br/>
					<span><strong>曾修無量福</strong></span>
					<span class="ms-4"><strong>今得禮尊足</strong></span><br/>
					<span><strong>願無量劫中</strong></span>
					<span class="ms-4"><strong>常修多供養</strong></span>
				</p>
				<p>&nbsp;</p>
			</div>
			<div class="mb-3">
				<p>
					<strong>一心敬禮過去毗婆尸佛。</strong>
					<span class="text-black-50">（想云。能禮所禮性空寂。感應道交難思議。我此道場如帝珠。毗婆尸佛影現中。我身影現如來前。頭面接足歸命禮。下皆准此。但改佛菩薩名。）</span>
				</p>
			</div>
			<div class="mb-3">
				<p>
					<strong>一心敬禮尸棄佛。</strong>
				</p>
			</div>
			<div class="mb-3">
				<p>
					<strong>一心敬禮毗舍浮佛。</strong>
				</p>
			</div>
			<div class="mb-3">
				<p>
					<strong>一心敬禮拘留孫佛。</strong>
				</p>
			</div>
			<div class="mb-3">
				<p>
					<strong>一心敬禮拘那含牟尼佛。</strong>
				</p>
			</div>
			<div class="mb-3">
				<p>
					<strong>一心敬禮迦葉佛。</strong>
				</p>
			</div>
			<div class="mb-3">
				<p>
					<strong>一心敬禮本師釋迦牟尼佛。</strong>
				</p>
			</div>
			<div class="mb-3">
				<p>
					<strong>一心敬禮普光佛。</strong>
				</p>
			</div>
			<div class="mb-3">
				<p>
					<strong>一心敬禮普明佛。</strong>
				</p>
			</div>
			<div class="mb-3">
				<p>
					<strong>一心敬禮普淨佛。</strong>
				</p>
			</div>
			<div class="mb-3">
				<p>
					<strong>一心敬禮多摩羅跋栴檀香佛。</strong>
				</p>
			</div>
			<div class="mb-3">
				<p>
					<strong>一心敬禮栴檀光佛。</strong>
				</p>
			</div>
			<div class="mb-3">
				<p>
					<strong>一心敬禮摩尼幢佛。</strong>
				</p>
			</div>
			<div class="mb-3">
				<p>
					<strong>一心敬禮歡喜藏摩尼寶積佛。</strong>
				</p>
			</div>
			<div class="mb-3">
				<p>
					<strong>一心敬禮一切世間樂見上大精進佛。</strong>
				</p>
			</div>
			<div class="mb-3">
				<p>
					<strong>一心敬禮摩尼幢燈光佛。</strong>
				</p>
			</div>
			<div class="mb-3">
				<p>
					<strong>一心敬禮慧炬照佛。</strong>
				</p>
			</div>
			<div class="mb-3">
				<p>
					<strong>一心敬禮海德光明佛。</strong>
				</p>
			</div>
			<div class="mb-3">
				<p>
					<strong>一心敬禮金剛牢強普散金光佛。</strong>
				</p>
			</div>
			<div class="mb-3">
				<p>
					<strong>一心敬禮大強精進勇猛佛。</strong>
				</p>
			</div>
			<div class="mb-3">
				<p>
					<strong>一心敬禮大悲光佛。</strong>
				</p>
			</div>
			<div class="mb-3">
				<p>
					<strong>一心敬禮慈力王佛。</strong>
				</p>
			</div>
			<div class="mb-3">
				<p>
					<strong>一心敬禮慈藏佛。</strong>
				</p>
			</div>
			<div class="mb-3">
				<p>
					<strong>一心敬禮栴檀窟莊嚴勝佛。</strong>
				</p>
			</div>
			<div class="mb-3">
				<p>
					<strong>一心敬禮賢善首佛。</strong>
				</p>
			</div>
			<div class="mb-3">
				<p>
					<strong>一心敬禮善意佛。</strong>
				</p>
			</div>
			<div class="mb-3">
				<p>
					<strong>一心敬禮廣莊嚴王佛。</strong>
				</p>
			</div>
			<div class="mb-3">
				<p>
					<strong>一心敬禮金華光佛。</strong>
				</p>
			</div>
			<div class="mb-3">
				<p>
					<strong>一心敬禮寶葢照空自在力王佛。</strong>
				</p>
			</div>
			<div class="mb-3">
				<p>
					<strong>一心敬禮虗空寶華光佛。</strong>
				</p>
			</div>
			<div class="mb-3">
				<p>
					<strong>一心敬禮琉璃莊嚴王佛。</strong>
				</p>
			</div>
			<div class="mb-3">
				<p>
					<strong>一心敬禮普現色身光佛。</strong>
				</p>
			</div>
			<div class="mb-3">
				<p>
					<strong>一心敬禮不動智光佛。</strong>
				</p>
			</div>
			<div class="mb-3">
				<p>
					<strong>一心敬禮降伏眾魔王佛。</strong>
				</p>
			</div>
			<div class="mb-3">
				<p>
					<strong>一心敬禮才光明佛。</strong>
				</p>
			</div>
			<div class="mb-3">
				<p>
					<strong>一心敬禮智慧勝佛。</strong>
				</p>
			</div>
			<div class="mb-3">
				<p>
					<strong>一心敬禮彌勒仙光佛。</strong>
				</p>
			</div>
			<div class="mb-3">
				<p>
					<strong>一心敬禮善寂月音妙尊智王佛。</strong>
				</p>
			</div>
			<div class="mb-3">
				<p>
					<strong>一心敬禮世淨光佛。</strong>
				</p>
			</div>
			<div class="mb-3">
				<p>
					<strong>一心敬禮龍種上尊王佛。</strong>
				</p>
			</div>
			<div class="mb-3">
				<p>
					<strong>一心敬禮日月光佛。</strong>
				</p>
			</div>
			<div class="mb-3">
				<p>
					<strong>一心敬禮日月珠光佛。</strong>
				</p>
			</div>
			<div class="mb-3">
				<p>
					<strong>一心敬禮慧幢勝王佛。</strong>
				</p>
			</div>
			<div class="mb-3">
				<p>
					<strong>一心敬禮師子吼自在力王佛。</strong>
				</p>
			</div>
			<div class="mb-3">
				<p>
					<strong>一心敬禮妙音勝佛。</strong>
				</p>
			</div>
			<div class="mb-3">
				<p>
					<strong>一心敬禮常光幢佛。</strong>
				</p>
			</div>
			<div class="mb-3">
				<p>
					<strong>一心敬禮觀世燈佛。</strong>
				</p>
			</div>
			<div class="mb-3">
				<p>
					<strong>一心敬禮慧威燈王佛。</strong>
				</p>
			</div>
			<div class="mb-3">
				<p>
					<strong>一心敬禮法勝王佛。</strong>
				</p>
			</div>
			<div class="mb-3">
				<p>
					<strong>一心敬禮須彌光佛。</strong>
				</p>
			</div>
			<div class="mb-3">
				<p>
					<strong>一心敬禮須摩那華光佛。</strong>
				</p>
			</div>
			<div class="mb-3">
				<p>
					<strong>一心敬禮優曇鉢羅華殊勝王佛。</strong>
				</p>
			</div>
			<div class="mb-3">
				<p>
					<strong>一心敬禮大慧力王佛。</strong>
				</p>
			</div>
			<div class="mb-3">
				<p>
					<strong>一心敬禮阿閦毗歡喜光佛。</strong>
				</p>
			</div>
			<div class="mb-3">
				<p>
					<strong>一心敬禮無量音聲王佛。</strong>
				</p>
			</div>
			<div class="mb-3">
				<p>
					<strong>一心敬禮才光佛。</strong>
				</p>
			</div>
			<div class="mb-3">
				<p>
					<strong>一心敬禮金海光佛。</strong>
				</p>
			</div>
			<div class="mb-3">
				<p>
					<strong>一心敬禮山海慧自在通王佛。</strong>
				</p>
			</div>
			<div class="mb-3">
				<p>
					<strong>一心敬禮大通光佛。</strong>
				</p>
			</div>
			<div class="mb-3">
				<p>
					<strong>一心敬禮一切法幢滿王佛。</strong>
				</p>
			</div>
			<div class="mb-3">
				<p>
					<strong>一心敬禮東方一切諸佛所有色身．舍利．形像．浮圖廟塔．一切佛事。</strong>
					<span class="text-black-50">（想云。諸佛法身如虗空。化事住世難思議。我皆影現化事前。一一皆悉歸命禮。）</span>
				</p>
			</div>
			<div class="mb-3">
				<p>
					<strong>一心敬禮東南方一切諸佛所有色身．舍利．形像．浮圖廟塔．一切佛事。</strong>
				</p>
			</div>
			<div class="mb-3">
				<p>
					<strong>一心敬禮南方一切諸佛所有色身．舍利．形像．浮圖廟塔．一切佛事。</strong>
				</p>
			</div>
			<div class="mb-3">
				<p>
					<strong>一心敬禮西南方一切諸佛所有色身．舍利．形像．浮圖廟塔．一切佛事。</strong>
				</p>
			</div>
			<div class="mb-3">
				<p>
					<strong>一心敬禮西方一切諸佛所有色身．舍利．形像．浮圖廟塔．一切佛事。</strong>
				</p>
			</div>
			<div class="mb-3">
				<p>
					<strong>一心敬禮西北方一切諸佛所有色身．舍利．形像．浮圖廟塔．一切佛事。</strong>
				</p>
			</div>
			<div class="mb-3">
				<p>
					<strong>一心敬禮北方一切諸佛所有色身．舍利．形像．浮圖廟塔．一切佛事。</strong>
				</p>
			</div>
			<div class="mb-3">
				<p>
					<strong>一心敬禮東北方一切諸佛所有色身．舍利．形像．浮圖廟塔．一切佛事。</strong>
				</p>
			</div>
			<div class="mb-3">
				<p>
					<strong>一心敬禮下方一切諸佛所有色身．舍利．形像．浮圖廟塔．一切佛事。</strong>
				</p>
			</div>
			<div class="mb-3">
				<p>
					<strong>一心敬禮上方一切諸佛所有色身．舍利．形像．浮圖廟塔．一切佛事。</strong>
				</p>
			</div>
			<div class="mb-3">
				<p>
					<strong>一心敬禮十方三世一切諸佛。</strong>
				</p>
			</div>
			<div class="mb-3">
				<p>
					<strong>一心敬禮十方一切法藏。</strong>
					<span class="text-black-50">（三禮此恐太繁。依鬮取決。倘能隨十方面一一致禮。尤為善也。想云。真空法性如虛空。常住法寶難思議。我身影現法寶前。一心如法歸命禮。下一禮同。）</span>
				</p>
			</div>
			<div class="mb-3">
				<p>
					<strong>一心敬禮占察善惡業報經微妙法藏。</strong>
				</p>
			</div>
			<div class="mb-3">
				<p>
					<strong>一心敬禮十方一切賢聖。</strong>
					<span class="text-black-50">（三禮此亦依鬮取決。倘能隨十方面一一致禮尤善。）</span>
				</p>
			</div>
			<div class="mb-3">
				<p>
					<strong>一心敬禮堅淨信菩薩摩訶薩。</strong>
				</p>
			</div>
			<div class="mb-3">
				<p>
					<strong>一心敬禮徧吉菩薩．觀世音菩薩摩訶薩。</strong>
				</p>
			</div>
			<div class="mb-3">
				<p>
					<strong>一心敬禮地藏菩薩摩訶薩。</strong>
					<span class="text-black-50">（此是懺主。應須三禮。想偈如前。但末句須云。為求滅障接足禮。又或各隨所求稱之亦可。如求律儀。即云。為求律儀接足禮。求證果。求往生等。類此可知。）</span>
				</p>
				<p>&nbsp;</p>
			</div>
			
			<h5 id="vol1-ch5-sec6">
				<i class="fa-solid fa-section"></i>
				第六修行懺悔
			</h5>
			<div class="mb-3">
				<p>
					經云。應當說所作罪。一心仰告。夫罪雖無量。而就輪相所現者。尤為最重。能招惡果。能障聖道。故須慚愧涕淚。各別陳之。殷勤悔過。冀令消滅。五體投地。說重罪已。仍作是念。
				</p>
				<p>&nbsp;</p>
			</div>
			<div class="mb-3">
				<p>
					<strong>我及眾生。無始常為三業六根重罪所障。不見諸佛。不知出要。但順生死。不知妙理。我今雖知。猶與眾生同為一切重罪所障。今對地藏．十方佛前。普為眾生。歸命懺悔。惟願加護。令障消滅。</strong>
					<span class="text-black-50">（作是念已。胡跪唱言。）</span>
				</p>
			</div>
			<div class="mb-3">
				<p>
					<strong>普為法界一切眾生。悉願斷除三障。歸命懺悔。</strong>
					<span class="text-black-50">（唱已。五體投地。復作是念。）</span>
				</p>
			</div>
			<div class="mb-3">
				<p>
					<strong>
						我與眾生。無始來今。由愛見故。<br/><br/>
						內計我人(一)。<br/>
						外加惡友(二)。<br/>
						不隨喜他一毫之善(三)。<br/>
						惟徧三業廣造眾罪(四)。<br/>
						事雖不廣惡心徧布(五)。<br/>
						晝夜相續無有間斷(六)。<br/>
						覆諱過失不欲人知(七)。<br/>
						不畏惡道(八)。<br/>
						無慚無愧(九)。<br/>
						撥無因果(十)。
					</strong>
				</p>
			</div>
			<div class="mb-3">
				<p>
					<strong>
						故於今日<br/><br/>
						深信因果(一)。<br/>
						生重慚愧(二)。<br/>
						生大怖畏(三)。<br/>
						發露懺悔(四)。<br/>
						斷相續心(五)。<br/>
						發菩提心斷惡修善(六)。<br/>
						勤策三業翻昔重過(七)。<br/>
						隨喜凡聖一毫之善(八)。<br/>
						念十方佛有大福慧。能救拔我。及諸眾生。從二死海。置三德岸(九)。<br/>
						從無始來。不知諸法本性空寂。廣造眾惡。今知空寂。為求菩提。為眾生故。廣修諸善。徧斷眾惡(十)。<br/>
					</strong>
				</p>
			</div>
			<div class="mb-3">
				<p>
					<strong>
						惟願一切三寶．地藏菩薩。慈悲攝受。聽我懺悔。
					</strong>
					<span class="text-black-50">（作是念已。胡跪唱言。）</span>
				</p>
			</div>
			<div class="mb-3">
				<p>
					<strong>我弟子某甲。至心懺悔。我及眾生。自性清淨。一實境界。諸佛體同。無明癡暗熏習因緣。現妄境界。令生念著。計我．我所。習諸惡法。三業六根。廣造眾罪。十惡五逆。重難輕遮。障慧障定。障諸戒品。致使長淪苦海。永無出期。設欲修行。多諸疑障。或擾外魔。或遭邪見。助緣缺乏。淨信不成。今遇。</strong>
				</p>
			</div>
			<div class="mb-3">
				<p>
					<strong>地藏菩薩摩訶薩。善安慰說。開我迷雲。滌慮洗心。求哀悔過。惟願十方。</strong>
				</p>
			</div>
			<div class="mb-3">
				<p>
					<strong>諸大慈尊。證知護念。我今懺悔。不復更造。願我及一切眾生。速得除滅無量劫來十惡．四重．五逆．顛倒謗毀三寶．一闡提罪。如是罪性本惟空寂。但從虗妄顛倒心起。無有定實而可得者。願一切眾生速達心本。永滅罪根。</strong>
					<span class="text-black-50">（或一說。或三說。皆可。下四亦然。）</span>
				</p>
			</div>
			<div class="mb-3">
				<p>
					懺悔已。歸命禮三寶。
					<span class="text-black-50">（此懺悔文。并下三願。皆出本經。但於惟願之前。撮略經中他處數語。以表說所作罪一心仰告之意。餘皆一字弗敢移易。）</span>
				</p>
				<p>&nbsp;</p>
			</div>
			
			<h5 id="vol1-ch5-sec7">
				<i class="fa-solid fa-section"></i>
				第七發勸請願
			</h5>
			<div class="mb-3">
				<p>
					<strong>我弟子某甲。至心勸請。願令十方一切菩薩未成正覺者。願速成正覺。若已成正覺者。願常住在世。轉正法輪。不入涅槃。</strong>
				</p>
			</div>
			<div class="mb-3">
				<p>勸請已。歸命禮三寶。</p>
				<p>&nbsp;</p>
			</div>
			
			<h5 id="vol1-ch5-sec8">
				<i class="fa-solid fa-section"></i>
				第八發隨喜願
			</h5>
			<div class="mb-3">
				<p>
					<strong>我弟子某甲。至心隨喜。願我及一切眾生。畢竟永捨嫉妬之心。於三世中。一切剎土。所有修學一切功德及成就者。悉皆隨喜。</strong>
				</p>
			</div>
			<div class="mb-3">
				<p>隨喜已。歸命禮三寶。</p>
				<p>&nbsp;</p>
			</div>
			
			<h5 id="vol1-ch5-sec9">
				<i class="fa-solid fa-section"></i>
				第九發迴向願
			</h5>
			<div class="mb-3">
				<p>
					<strong>我弟子某甲。至心迴向。願我所修一切功德。資益一切諸眾生等。同趣佛智。至涅槃城。</strong>
				</p>
			</div>
			<div class="mb-3">
				<p>迴向已。歸命禮三寶。</p>
				<p>&nbsp;</p>
			</div>
			
			<h5 id="vol1-ch5-sec10">
				<i class="fa-solid fa-section"></i>
				第十補發願及端坐靜室稱念名號
			</h5>
			<div class="mb-3">
				<p>五悔法門。別有發願。此經不說。葢以勸請等三即是願故。又行人修此懺法。所求不同。或求律儀。或求定慧。或求往生淨土。或求現在安樂。今因鬮決聽許補願。是在修行者各自陳白。不容預擬成言也。然所求之願。雖各不同。須與四弘相合。不得增長生死。誠恐不知梗概。違背經宗。聊陳大意。以便行持。或用或否。任從決擇。</p>
			</div>
			<div class="mb-3">
				<p>
					<strong>
						我弟子某甲至心發願。<br/><br/>
						願<br/>
						十方三寶。地藏慈尊。哀愍護持。救拔拯濟。令此國土。災亂消除。正法流通。咸生淨信。無諸障礙。永斷魔邪。我及眾生。重罪速滅。現離衰惱。充足資生。三聚戒根。畢竟清淨。二種觀道。應念現前。三昧總持。神通方便。四攝六度。無不圓成。了悟自心。一實境界。捨身他世。生在佛前。<br/><br/>
						面奉<br/>
						彌陀。歷侍諸佛。親蒙授記。迴入塵勞。普會羣迷。同歸秘藏。
					</strong>
				</p>
			</div>
			<div class="mb-3">
				<p>發願已。歸命禮三寶。</p>
			</div>
			<div class="mb-3">
				<p>
					<strong>
						自歸依佛當願眾生體解大道發無上心。<br/>
						自歸依法當願眾生深入經藏智慧如海。<br/>
						自歸依僧當願眾生統理大眾一切無礙和南聖眾。
					</strong>
				</p>
				<p>次往餘靜室。端坐一心。若稱誦。若默念。地藏菩薩。其惛葢多者。應於道場中旋遶誦念。晝三夜三。具如經說。七日之後。每旦以第二輪相頻三擲之。若身口意皆純善者。名得清淨。若不得三業純善輪相者。雖見光明．異香．吉祥好夢等。止名虗妄。非善相也。若未獲純善輪相以前。止許稱念地藏名號。未許修行觀法。得善相後。乃於二種觀道。可以如實修之。</p>
				<hr/>
			</div>
			
			<h4 class="toc-item" id="vol1-ch6">
				<span>別明二種觀道第六</span>
			</h4>
			<div class="mb-3">
				<p>諸懺坐禪一科。即於懺畢出壇時修。故列在正修第十。此經二觀。要於懺悔清淨之後。方許正修。故十科畢。方別明之。</p>
			</div>
			<div class="mb-3">
				<p>經云。彼諸眾生。但學至心。使身口意得清淨相已。我亦護念。乃至堪能修習諸禪智慧。</p>
			</div>
			<div class="mb-3">
				<p>又云。若有眾生。欲向大乘者。應當先知最初所行根本之業。所謂依止一實境界。以修信解。</p>
			</div>
			<div class="mb-3">
				<p>又云。若欲依一實境界修信解者。應當學習二種觀道。一者。唯心識觀。二者。真如實觀。</p>
			</div>
			<div class="mb-3">
				<p>學唯心識觀者。於一切時一切處。隨身口意。有所作業。悉當觀察。知唯是心。乃至一切境界。若心住念。皆當察知。勿使心無記攀緣。不自覺知。於念念間。悉應觀察。隨心有所緣念。還當使心隨逐彼念。令心自知。知己內心自生想念。非一切境界有念有分別也。當應如是守記內心。知唯妄念。無實境界。勿令休廢。是名修學唯心識觀。念念觀知。唯心生滅。如水流燈燄。無暫時住。從是當得色寂三昧。得此三昧已。次應學習信奢摩他觀心。及信毗婆舍那觀心。</p>
			</div>
			<div class="mb-3">
				<p>學真如實觀者。思惟心性無生無滅。不住見聞覺知。離一切分別想。漸漸能過四空定境界相。得相似空三昧。展轉能入心寂三昧。即復能入一行三昧。見佛無數。發深廣心。住堅信位。所謂於奢摩他．毗婆舍那二種觀道。決定信解。能決定向。</p>
			</div>
			<div class="mb-3">
				<p>復次。修學如上信解者。人有二種。一者。利根。先已能知一切外境惟心所作。虗誑不實。如夢如幻等。決定無疑。障葢輕微。散亂心少。如是等人。即應學習真如實觀。二者。鈍根。先未能知一切外境悉唯是心。染著情厚。葢障數起。心難調伏。應當先學唯心識觀。</p>
			</div>
			<div class="mb-3">
				<p>今依經文。略出其意。此經本以一實境界為體。二種觀道為宗。若非洞明一實境界。無以稱性。起於二觀。若非殷勤修習二觀。無以契會一實境界。一實境界者。即是不思議境。亦名諸法實相。謂境界即諸法。一實即實相。境界即事造三千。一實即理具三千。境界即權。一實即實。權實不二。理事一如。故名一實境界。</p>
			</div>
			<div class="mb-3">
				<p>又以境界從一實。則一空一切空。不思議真諦也。以一實從境界。則一假一切假。不思議俗諦也。直云一實境界。則一中一切中。不思議中道第一義諦也。故經云。妄心畢竟無體。不可見故。若無覺知能分別者。則無十方三世一切境界差別之相。豈非即空義耶。</p>
			</div>
			<div class="mb-3">
				<p>又云。無分別相者。於一切處。無所不在。以能依持建立一切法故。豈非即假義耶。</p>
			</div>
			<div class="mb-3">
				<p>又云。眾生心體。從本以來。不生不滅。自性清淨。</p>
			</div>
			<div class="mb-3">
				<p>又云。當知一切諸法悉名為心。以義體不異。為心所攝故。</p>
			</div>
			<div class="mb-3">
				<p>又云。一切眾生。種種果報。皆依諸佛法身而有建立生長。住法身中。為法身處所攝。以法身為體。無有能出法身界分者。豈非即中義耶。</p>
			</div>
			<div class="mb-3">
				<p>故知一實境界。則已收盡中論一偈之旨。境界即因緣所生法。一實即是空假中也。中論約觀。故先立境。此經顯諦。故先出理。依此一實境界以修信解。則知二種觀道。全是不思議法門。</p>
			</div>
			<div class="mb-3">
				<p>而復於中分利．分鈍者。略出二意。一者。此經雖正明圓頓宗旨。而兼攝別機。名圓為利。名別為鈍。二者。雖是圓機。於中仍分利鈍。初意者。圓教行人。於名字位中。能知如來秘密之藏。肉眼即名佛眼。故能學習真如實觀。了知現前心性。本自不生。不復更滅。所謂法界一相。雖三千歷然。而究竟平等。此即名字位中初修觀行之法也。得相似空三昧。位登五品。圓伏五住。故超過空等定境界相。入心寂三昧。即能入一行三昧。住堅信位。所謂六根清淨。相似即佛也。故於奢摩他．毗婆舍那二種觀道決定信解。能決定向。以奢摩他是不思議三止。毗婆舍那是不思議三觀。止觀不二。即是般若第一義空。首楞嚴究竟解脫。初住分證。任運現前。十信位中。名得決定也。</p>
			</div>
			<div class="mb-3">
				<p>若別教行人。名字位中。雖聞中道。未能了知。但可仰信。故須先學唯心識觀。了知實無外境。唯有內心。即是從假入空。不無次第。故先得色寂三昧。准位當在別教十信。若望圓教。位在五品。次應學習信奢摩他．毗婆舍那二觀。則教之捨別從圓也。</p>
			</div>
			<div class="mb-3">
				<p>次意者。圓教利機。即於識心體其本寂。三千宛然即空假中。故云即應學習真如實觀。其稍鈍者。必須照於起心。變造十界即空假中。故云應當先學唯心識觀也。然於一實境界。若善能得意。則稱性所起。二觀用雖不同。實無優劣。</p>
			</div>
			<div class="mb-3">
				<p>言用不同者。如詳解云。唯識歷事。真如觀理。觀本寂三千為理觀。炤起心變造十界名事觀。從理惟達法性。從事專炤起心。又直觀一念本具三千名理觀。縱任三性。用於四運。推檢起心。變造十界名事觀。故古人約起心不起心。推運不推運分之。</p>
			</div>
			<div class="mb-3">
				<p>言無優劣者。如詳解云。須知占察知唯是心。則於色界及諸外境不起分別。所以經云。色寂三昧。非謂事觀專觀外色。真如實觀。思惟心性不生不滅。以能超過無色四空。心及心所二俱寂滅。是故經云。心寂三昧。非謂理觀唯在內心。又云。修理觀者。雖云但觀理具。須知全修在性。則善修實相觀也。修事觀者。雖觀能造十界之心。須知全性成修。則善修唯識觀也。</p>
			</div>
			<div class="mb-3">
				<p>又指要鈔云。應知觀於內心。二觀既爾。觀於外境。二觀亦然。以此言之。則一色一香一塵一法。皆了唯心。同歸真實。隨宜方便。究竟無殊。</p>
			</div>
			<div class="mb-3">
				<p>又此二觀。雖云懺悔得清淨相乃可修之。而正行懺悔及稱念地藏名時。非無二觀。如修懺時。始從香華供養。終至三歸。歷事分明。運想無滯。知唯心作。無實境界。是名唯心識觀。若始從供養乃至三歸。事雖歷歷。一心不生。是名真如實觀。又稱名時。歷歷分明。知心如幻。地藏洪名。不離自心。是名唯心識觀。若觀地藏法身及一切諸佛法身。與己自身。體性平等。無二無別。不生不滅。常樂我淨。功德圓滿。是名真如實觀。</p>
			</div>
			<div class="mb-3">
				<p>又既得善相。正修二觀之時。亦可仍前修行懺法及稱名號。即以懺法稱名。助成二觀。轉更分明。所以菩薩五悔法門。始自凡夫。終於等覺。無不以之為進修方便。須知作法。取相無生。三種懺法。後後具於前前。前前亦通後後。事理相扶。始終一致。方名圓頓法門。倘輕忽事相。高談名理。重罪不滅。善法不生。是故末世行人。切須體會堅淨信菩薩問法苦心。深究地藏大士立法本意。以真實不欺誑心。不忽略心。痛切為生死心。無上大菩提心。於此經中。開發正解。成就真修。得堅固信。不墮疑障。如或不然。遇饌不食。寶山空回。救世真士。大智開士。亦未如之何也矣。</p>
				<hr/>
			</div>
			
			<h4 class="toc-item" id="vol1-ch7">
				<span>附占輪相法</span>
			</h4>
			<div class="mb-3">
				<p>
					<strong>
						至心敬禮十方一切諸佛。<br/>
						願令十方一切眾生。速疾皆得親近供養。[言*恣]受正法。
					</strong>
				</p>
			</div>
			<div class="mb-3">
				<p>
					<strong>
						至心敬禮十方一切法藏。<br/>
						願令十方一切眾生。速疾皆得受持讀誦。如法修行。及為他說。
					</strong>
				</p>
			</div>
			<div class="mb-3">
				<p>
					<strong>
						至心敬禮十方一切賢聖。<br/>
						願令十方一切眾生。速疾皆得親近供養。發菩提心。至不退轉。
					</strong>
				</p>
			</div>
			<div class="mb-3">
				<p>
					<strong>
						至心敬禮地藏菩薩摩訶薩。<br/>
						願令十方一切眾生。速得除滅惡業重罪。離諸障礙。資生眾具悉皆充足。
					</strong>
					<span class="text-black-50">（如是禮已。隨所有香華等當修供養。作是唱言。）</span>
				</p>
			</div>
			<div class="mb-3">
				<p>
					<strong>
						嚴持香華。如法供養。<br/>
						願此香華雲。徧滿十方界。供養一切佛。尊法諸賢聖。無邊佛土中。受用作佛事。
					</strong>
					<span class="text-black-50">（至此停唱。散華作供。復運想云。）</span>
				</p>
			</div>
			<div class="mb-3">
				<p>
					<strong>一切佛法僧寶。（乃至）離念清淨。畢竟圓滿。</strong>
					<span class="text-black-50">（全文具懺儀中。須精熟之。使運想不滯）供養已。一切恭敬。(一禮。次復別用香華。係心供養地藏菩薩。一心告言。弟子某甲。現是生死凡夫。罪障深重。不知三世業報因緣。多懷疑惑。今以其事敬依菩薩所示三種輪相。如法占察。至心仰叩地藏慈尊。願以大悲力加被拯接。除我疑障。作是語已。五體投地。胡跪合掌。一心稱念。）</span>
				</p>
			</div>
			<div class="mb-3">
				<p>
					<strong>南無地藏菩薩摩訶薩。</strong>
					<span class="text-black-50">（或稱名。或默念。滿足至千。乃作是白。）</span>
				</p>
			</div>
			<div class="mb-3">
				<p>
					<strong>地藏菩薩摩訶薩。大慈大悲。惟願護念我。及一切眾生。速除諸障。增長淨信。令今所觀稱實相應。</strong>
					<span class="text-black-50">（作此語已。雙手捧於輪相。承以淨物。至誠殷重。仰手傍擲。諦觀諦察。乃知相應與不相應。具如經說。須先自熟玩經文。知其大意。方可擲輪。否則自無細心。反疑輪為虗設。為罪多矣。）</span>
				</p>
			</div>
			
			<div class="mb-3">
				<p>凡占輪相者。或欲具占三種輪相。應如是禮拜供養稱名作白。然後占初輪相。就初輪中所現善惡。一一主念。別占第二輪相。次復更占第三輪相。若有欲修懺法。止占第一．第二兩種輪相者。亦應如是禮拜供養稱名作白。次第占之。若有為自為他。但占第三輪相。欲知三世果報事者。亦應如是禮拜供養稱名作白。取第三輪相。頻三擲之。記其所現之數。以知吉凶。若有修懺。已經七日之後。欲但占第二輪相。求純善相者。於清晨時。惟須作白頻三擲之。</p>
				<hr/>
			</div>

			<h4 class="toc-item" id="vol1-ch8">
				<span>附懺壇中齋佛儀</span>
			</h4>
			<div class="mb-3">
				<p>
					<strong>
						南無十方佛<br/>
						南無十方法<br/>
						南無十方僧<br/>
						南無本師釋迦牟尼佛<br/>
						南無過去七佛<br/>
						南無五十三佛<br/>
						南無十方一切佛事<br/>
						南無占察善惡業報經<br/>
						南無堅淨信菩薩<br/>
						南無徧吉菩薩<br/>
						南無觀世音菩薩<br/>
						南無地藏菩薩摩訶薩<br/>
					
					</strong>
					<span class="text-black-50">（三稱畢。次誦變食真言二十一徧。甘露真言三徧。灑淨。）</span>
				</p>
			</div>
			
			<div class="d-flex mb-3">
				<div class="me-auto w-50">
					<a href="{{ $page->baseUrl.'/ksitigarbha-divination-vol2' }}" class="btn btn-link border p-2 me-3 w-100 h-100 text-decoration-none">
						<div class="d-flex h-100 justify-content-between align-items-center">
							<div class="d-flex">
								<i class="fas fa-arrow-circle-left fs-1"></i>
							</div>
							<div class="d-flex w-100 justify-content-center">
								<span class="ms-2 text-start text-truncate">占察善惡業報經卷下</span>
							</div>
						</div>
					</a>
				</div>
				<div class="ms-auto me-3 w-50">
					<a href="{{ $page->baseUrl.'/ksitigarbha-divination-tools-group3' }}" class="btn btn-link border p-2 ms-3 w-100 h-100 text-decoration-none">
						<div class="d-flex h-100 justify-content-between align-items-center">
							<div class="d-flex w-100 justify-content-center">
								<span class="me-2 text-start text-truncate">第三輪相翻查結果</span>
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