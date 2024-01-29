@extends('_layouts.main')

@section('title')
<title>占察善惡業報經</title>
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
				x-data="{currItems: {vol1: true}}"
				class="sticky-top"
				textsize-supported
				trans-supported
			>
				<ul class="nav navbar-nav">
					<li>
						<a @@click="jumpTo('vol1')" :class="{active: currItems['vol1'] && true}" class="nav-link text-nowrap" href="#vol1">占察善惡業報經卷上</a>
					</li>
					<li>
						<a class="nav-link text-nowrap" href="/ksitigarbha-divination-vol2">占察善惡業報經卷下</a>
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
					<li class="breadcrumb-item">地藏法門</li>
					<li class="breadcrumb-item"><a href="{{ $page->baseUrl.'/ksitigarbha-divination-vol1' }}">占察善惡業報經</a></li>
					<li class="breadcrumb-item active">卷上</li>
				</ol>
			</nav>
		
			<h1>占察善惡業報經</h1>
			<small class="float-end mb-3">天竺三藏菩提燈　譯</small>
			<div class="clearfix"></div>
			<h2 class="toc-item" id="vol1">
				<span class="word">占察善惡業報經卷上</span>
			</h2>
			<div :class="details ? 'bg-secondary text-white' : ''" class="paragraph">
				<span class="word">如是我聞</span>
				<span class="punc">：</span>
			</div>
			<div x-show="details" class="details mb-3">
				這些是我（阿難）聽說的，
				<hr/>
			</div>
			<div :class="details ? 'bg-secondary text-white' : ''" class="paragraph">
				<span class="word">一時</span>
				<span class="punc">，</span>
				<span class="word">婆伽婆一切智人</span>
				<span class="punc">，</span>
				<span class="word">在王舍城耆闍崛山中</span>
				<span class="punc">，</span>
				<span class="word">以神通力</span>
				<span class="punc">，</span>
				<span class="word">示廣博嚴淨無礙道場</span>
				<span class="punc">，</span>
				<span class="word">與無量無邊諸大眾俱</span>
				<span class="punc">，</span>
				<span class="word">演說甚深根聚法門</span>
				<span class="punc">。</span>
			</div>
			<div x-show="details" class="details mb-3">
				那時佛陀、婆伽婆、已具備一切智慧的覺者，在王捨城的耆闍崛山中，應用大神通力，展示廣博莊嚴清淨無礙道場，為無數大眾，演說深奧的六根相聚法門（楞嚴經有六根互用為一根的說法）。
				<hr/>
			</div>
			<div :class="details ? 'bg-secondary text-white' : ''" class="paragraph">
				<span class="word">爾時</span>
				<span class="punc">，</span>
				<span class="word">會中有一菩薩名堅淨信</span>
				<span class="punc">，</span>
				<span class="word">從坐而起</span>
				<span class="punc">，</span>
				<span class="word">整衣服</span>
				<span class="punc">，</span>
				<span class="word">偏袒右肩</span>
				<span class="punc">，</span>
				<span class="word">合掌白佛言</span>
				<span class="punc">：</span>
				<span class="punc">「</span>
				<span class="word">我今於此眾中</span>
				<span class="punc">，</span>
				<span class="word">欲有所問</span>
				<span class="punc">，</span>
				<span class="word">諮請世尊</span>
				<span class="punc">，</span>
				<span class="word">願垂聽許</span>
				<span class="punc">。</span>
				<span class="punc">」</span>
			</div>
			<div x-show="details" class="details mb-3">
				那時大會中有一個菩薩，名叫堅淨信，從座位上站起，整理衣服， 裸露右肩，雙手合什對佛陀說：「我今代替大眾，有一些問題想請教世尊，希望世尊能允許並為我們開示。」
				<hr/>
			</div>
			<div :class="details ? 'bg-secondary text-white' : ''" class="paragraph">
				<span class="word">佛言</span>
				<span class="punc">：</span>
				<span class="punc">「</span>
				<span class="word">善男子</span>
				<span class="punc">！</span>
				<span class="word">隨汝所問</span>
				<span class="punc">，</span>
				<span class="word">便可說之</span>
				<span class="punc">。</span>
				<span class="punc">」</span>
			</div>
			<div x-show="details" class="details mb-3">
				佛陀說：「善男子！（窺基大師說善男子為持五戒的在家弟子），你隨意問吧，我都可以為你解答。」
				<hr/>
			</div>
			<div :class="details ? 'bg-secondary text-white' : ''" class="paragraph">
				<span class="word">堅淨信菩薩言</span>
				<span class="punc">：</span>
				<span class="punc">「</span>
				<span class="word">如佛先說</span>
				<span class="punc">：</span>
				<span class="punc">『</span>
				<span class="word">若我去世</span>
				<span class="punc">，</span>
				<span class="word">正法滅後</span>
				<span class="punc">，</span>
				<span class="word">像法向盡</span>
				<span class="punc">，</span>
				<span class="word">及入末世</span>
				<span class="punc">。</span>
				<span class="word">如是之時</span>
				<span class="punc">，</span>
				<span class="word">眾生福薄</span>
				<span class="punc">，</span>
				<span class="word">多諸衰惱</span>
				<span class="punc">，</span>
				<span class="word">國土數亂</span>
				<span class="punc">，</span>
				<span class="word">災害頻起</span>
				<span class="punc">，</span>
				<span class="word">種種厄難</span>
				<span class="punc">，</span>
				<span class="word">怖懼逼擾</span>
				<span class="punc">。</span>
				<span class="word">我諸弟子失其善念</span>
				<span class="punc">，</span>
				<span class="word">唯長貪</span>
				<span class="punc">、</span>
				<span class="word">瞋</span>
				<span class="punc">、</span>
				<span class="word">嫉妬</span>
				<span class="punc">、</span>
				<span class="word">我慢</span>
				<span class="punc">。</span>
				<span class="word">設有像似行善法者</span>
				<span class="punc">，</span>
				<span class="word">但求世間利養名稱</span>
				<span class="punc">，</span>
				<span class="word">以之為主</span>
				<span class="punc">，</span>
				<span class="word">不能專心修出要法</span>
				<span class="punc">。</span>
				<span class="word">爾時眾生覩世災亂</span>
				<span class="punc">，</span>
				<span class="word">心常怯弱</span>
				<span class="punc">，</span>
				<span class="word">憂畏己身及諸親屬不得衣食充養軀命</span>
				<span class="punc">。</span>
				<span class="word">以如此等眾多障礙因緣故</span>
				<span class="punc">，</span>
				<span class="word">於佛法中鈍根少信</span>
				<span class="punc">，</span>
				<span class="word">得道者極少</span>
				<span class="punc">。</span>
				<span class="word">乃至漸漸於三乘中</span>
				<span class="punc">，</span>
				<span class="word">信心成就者亦復甚尠</span>
				<span class="punc">。</span>
				<span class="word">所有修學世間禪定</span>
				<span class="punc">，</span>
				<span class="word">發諸通業</span>
				<span class="punc">，</span>
				<span class="word">自知宿命者</span>
				<span class="punc">，</span>
				<span class="word">次轉無有</span>
				<span class="punc">。</span>
				<span class="word">如是於後</span>
				<span class="punc">，</span>
				<span class="word">入末法中經久</span>
				<span class="punc">，</span>
				<span class="word">得道獲信</span>
				<span class="punc">、</span>
				<span class="word">禪定</span>
				<span class="punc">、</span>
				<span class="word">通業等一切全無</span>
				<span class="punc">。</span>
				<span class="punc">』</span>
				<span class="word">我今為此未來惡世</span>
				<span class="punc">，</span>
				<span class="word">像法向盡及末法中</span>
				<span class="punc">，</span>
				<span class="word">有微少善根者</span>
				<span class="punc">，</span>
				<span class="word">請問如來</span>
				<span class="punc">。</span>
				<span class="word">設何方便</span>
				<span class="punc">，</span>
				<span class="word">開化示導</span>
				<span class="punc">，</span>
				<span class="word">令生信心</span>
				<span class="punc">，</span>
				<span class="word">得除衰惱</span>
				<span class="punc">。</span>
				<span class="word">以彼眾生遭值惡時</span>
				<span class="punc">，</span>
				<span class="word">多障礙故</span>
				<span class="punc">，</span>
				<span class="word">退其善心</span>
				<span class="punc">。</span>
				<span class="word">於世間</span>
				<span class="punc">、</span>
				<span class="word">出世間因果法中</span>
				<span class="punc">，</span>
				<span class="word">數起疑惑</span>
				<span class="punc">，</span>
				<span class="word">不能堅心專求善法</span>
				<span class="punc">。</span>
				<span class="word">如是眾生可愍可救</span>
				<span class="punc">。</span>
				<span class="word">世尊大慈</span>
				<span class="punc">，</span>
				<span class="word">一切種智</span>
				<span class="punc">！</span>
				<span class="word">願興方便而曉喻之</span>
				<span class="punc">。</span>
				<span class="word">令離疑網</span>
				<span class="punc">，</span>
				<span class="word">除諸障礙</span>
				<span class="punc">，</span>
				<span class="word">信得增長</span>
				<span class="punc">。</span>
				<span class="word">隨於何乘</span>
				<span class="punc">，</span>
				<span class="word">速獲不退</span>
				<span class="punc">。</span>
				<span class="punc">」</span>
			</div>
			<div x-show="details" class="details mb-3">
				堅淨信菩薩說：「如同佛陀先前所說，若佛陀涅盤，正法滅盡後，像法也趨向滅盡，及至末法時代，這個時候，眾生福報淺薄，生起各種煩惱，社會與國家經常出現混亂現象，各種災難也頻繁出現，種種苦難，種種恐懼之事讓眾生不得安寧。佛陀的弟子，也失去了純善之念，貪婪嗔怒嫉妒我執我慢之心卻不斷增長，即使有好象在遵守佛陀的善法的人，也只是為了謀求人世間的功名利益供養，基本上以這樣的為主，不能專心修行親證果位。那時的人們，看見世界這麼多災難和混亂現象，心裡常常覺得害怕和無能為力，恐懼擔憂自己和親屬的安危，以及為吃穿發愁，由於有這樣多的障礙的緣故，對於佛法顯得遲鈍缺乏認識，證果得到佛陀真法傳承極少，乃至對於三乘教法，有信心而能夠有所成就的人微不足道了。學習世間禪定法門，修得神通，能自知宿命，接近消失。這樣在末法時代中，經過很長時間，修行得道，能淨信佛法，修得禪定智慧，獲得神通，這樣的人也基本沒有了。我今天為未來惡世像法趨向滅盡，末法時代還有少許善根的眾生，請教如來，用什麼樣的方便法門，能開示引導他們，對佛法生起信心，消除苦難煩惱。這樣的眾生，遭遇末法惡世，又有那麼多障礙，善念也慢慢退失，對於能解脫的因果法門，也經常生起疑惑，不能專心的修善，這樣的眾生值得憐憫還能夠拯救。世尊具有大慈悲心，是具有一切智慧的覺者，祈願您能夠善巧方便的開示，讓他們能夠脫離懷疑的羅網，去除各種障礙，對善法信心增長。應該修學什麼樣的方法，能迅速獲得淨信不退轉呢？」
				<hr/>
			</div>
			<div :class="details ? 'bg-secondary text-white' : ''" class="paragraph">
				<span class="word">佛告堅淨信言</span>
				<span class="punc">：</span>
				<span class="punc">「</span>
				<span class="word">善哉</span>
				<span class="punc">！</span>
				<span class="word">善哉</span>
				<span class="punc">！</span>
				<span class="word">快問斯事</span>
				<span class="punc">，</span>
				<span class="word">深適我意</span>
				<span class="punc">。</span>
				<span class="word">今此眾中</span>
				<span class="punc">，</span>
				<span class="word">有菩薩摩訶薩</span>
				<span class="punc">，</span>
				<span class="word">名曰地藏</span>
				<span class="punc">，</span>
				<span class="word">汝應以此事而請問之</span>
				<span class="punc">。</span>
				<span class="word">彼當為汝建立方便</span>
				<span class="punc">，</span>
				<span class="word">開示演說</span>
				<span class="punc">，</span>
				<span class="word">成汝所願</span>
				<span class="punc">。</span>
				<span class="punc">」</span>
			</div>
			<div x-show="details" class="details mb-3">
				佛陀對堅淨信菩薩說：「很好，很好，你的問的很好，也正是我想的，今天在這個大會中，有一位大菩薩，名字叫地藏，關於此事你應該向他請教，他會為你方便開示，能夠誠心滿足你的願望。」
				<hr/>
			</div>
			<div :class="details ? 'bg-secondary text-white' : ''" class="paragraph">
				<span class="word">時堅淨信菩薩復白佛言</span>
				<span class="punc">：</span>
				<span class="punc">「</span>
				<span class="word">如來世尊</span>
				<span class="punc">，</span>
				<span class="word">無上大智</span>
				<span class="punc">！</span>
				<span class="word">何意不說</span>
				<span class="punc">，</span>
				<span class="word">乃欲令彼地藏菩薩而演說之</span>
				<span class="punc">？</span>
				<span class="punc">」</span>
			</div>
			<div x-show="details" class="details mb-3">
				堅淨信菩薩又問佛陀：「如來是三世最尊，擁有無上廣大智慧，是何原因不說，卻讓那地藏菩薩演說呢？」
				<hr/>
			</div>
			<div :class="details ? 'bg-secondary text-white' : ''" class="paragraph">
				<span class="word">佛告堅淨信</span>
				<span class="punc">：</span>
				<span class="punc">「</span>
				<span class="word">汝莫生高下想</span>
				<span class="punc">。</span>
				<span class="word">此善男子發心已來</span>
				<span class="punc">，</span>
				<span class="word">過無量無邊不可思議阿僧祇劫</span>
				<span class="punc">，</span>
				<span class="word">久已能度薩婆若海</span>
				<span class="punc">，</span>
				<span class="word">功德滿足</span>
				<span class="punc">。</span>
				<span class="word">但依本願自在力故</span>
				<span class="punc">，</span>
				<span class="word">權巧現化</span>
				<span class="punc">，</span>
				<span class="word">影應十方</span>
				<span class="punc">。</span>
				<span class="word">雖復普遊一切剎土常起功業</span>
				<span class="punc">，</span>
				<span class="word">而於五濁惡世化益偏厚</span>
				<span class="punc">，</span>
				<span class="word">亦依本願力所熏習故</span>
				<span class="punc">，</span>
				<span class="word">及因眾生應受化業故也</span>
				<span class="punc">。</span>
				<span class="word">彼從十一劫來</span>
				<span class="punc">，</span>
				<span class="word">莊嚴此世界</span>
				<span class="punc">，</span>
				<span class="word">成熟眾生</span>
				<span class="punc">。</span>
				<span class="word">是故在斯會中</span>
				<span class="punc">，</span>
				<span class="word">身相端嚴</span>
				<span class="punc">，</span>
				<span class="word">威德殊勝</span>
				<span class="punc">，</span>
				<span class="word">唯除如來</span>
				<span class="punc">，</span>
				<span class="word">無能過者</span>
				<span class="punc">。</span>
				<span class="word">又於此世界所有化業</span>
				<span class="punc">，</span>
				<span class="word">唯除遍吉</span>
				<span class="punc">、</span>
				<span class="word">觀世音等諸大菩薩</span>
				<span class="punc">，</span>
				<span class="word">皆不能及</span>
				<span class="punc">。</span>
				<span class="word">以是菩薩本誓願力</span>
				<span class="punc">，</span>
				<span class="word">速滿眾生一切所求</span>
				<span class="punc">，</span>
				<span class="word">能滅眾生一切重罪</span>
				<span class="punc">，</span>
				<span class="word">除諸障礙</span>
				<span class="punc">，</span>
				<span class="word">現得安隱</span>
				<span class="punc">。</span>
				<span class="word">又是菩薩</span>
				<span class="punc">，</span>
				<span class="word">名為善安慰說者</span>
				<span class="punc">。</span>
				<span class="word">所謂</span>
				<span class="punc">，</span>
				<span class="word">巧演深法</span>
				<span class="punc">，</span>
				<span class="word">能善開導初學發意求大乘者</span>
				<span class="punc">，</span>
				<span class="word">令不怯弱</span>
				<span class="punc">。</span>
				<span class="word">以如是等因緣</span>
				<span class="punc">，</span>
				<span class="word">於此世界</span>
				<span class="punc">，</span>
				<span class="word">眾生渴仰</span>
				<span class="punc">，</span>
				<span class="word">受化得度</span>
				<span class="punc">。</span>
				<span class="word">是故我今令彼說之</span>
				<span class="punc">。</span>
				<span class="punc">」</span>
			</div>
			<div x-show="details" class="details mb-3">
				佛陀對堅淨信菩薩說：「你不要生高下的想法，這個善男子發菩提願已經很久了，已經經過了無數無量的不可思維得盡的阿僧祇劫，已經功德圓滿具有一切智慧了。只是因為本願的自在之力，權且善巧應化，以形象響應十方眾生。常游行於一切世界，建功德之業，在五濁惡世，更能利益開示化導眾生，這是因為依他本願之力的原因，以及因為眾生應受度化機緣成熟的緣故。他從十一劫以來，幫助這個世界，成就化導眾生，所以在這個大會之中，身相端正莊嚴，威德殊勝，除了如來沒有能超過他的。在這個世界所有化導眾生的功德之業，除了遍吉觀世音菩薩等大菩薩外都不能及他。以這個菩薩的本願之力，能速滿眾生一切所求，能夠除滅眾生一切重罪，消除各種業障，現世得安寧自在。這個菩薩又名善於安慰之善知識，能夠以方便善巧的方法演說深奧法門，善於開導初學者發願上求大乘深邃智慧，讓他不會害怕擔心，以這樣的因緣，他在此世界，眾生皆仰慕渴望禮敬供養他，希望能夠被他所度，所以我今天讓他為你說方便法門。」
				<hr/>
			</div>
			<div :class="details ? 'bg-secondary text-white' : ''" class="paragraph">
				<span class="word">爾時</span>
				<span class="punc">，</span>
				<span class="word">堅淨信菩薩既解佛意已</span>
				<span class="punc">，</span>
				<span class="word">尋即勸請地藏菩薩摩訶薩言</span>
				<span class="punc">：</span>
				<span class="punc">「</span>
				<span class="word">善哉</span>
				<span class="punc">，</span>
				<span class="word">救世真士</span>
				<span class="punc">！</span>
				<span class="word">善哉</span>
				<span class="punc">，</span>
				<span class="word">大智開士</span>
				<span class="punc">！</span>
				<span class="word">如我所問</span>
				<span class="punc">：</span>
				<span class="punc">『</span>
				<span class="word">惡世眾生</span>
				<span class="punc">，</span>
				<span class="word">以何方便而化導之</span>
				<span class="punc">，</span>
				<span class="word">使離諸障</span>
				<span class="punc">，</span>
				<span class="word">得堅固信</span>
				<span class="punc">？</span>
				<span class="punc">』</span>
				<span class="word">如來今者</span>
				<span class="punc">，</span>
				<span class="word">為欲令汝說是方便</span>
				<span class="punc">。</span>
				<span class="word">宜當知時</span>
				<span class="punc">，</span>
				<span class="word">哀愍為說</span>
				<span class="punc">。</span>
				<span class="punc">」</span>
			</div>
			<div x-show="details" class="details mb-3">
				這時，堅淨信菩薩理解了佛陀的意思，邀請地藏大菩薩演說方便法門，向地藏大菩薩說：「很好，你是真的救世道德高尚之人，也是大智慧之人，就像我所問：『惡世眾生，用什麼樣的方便才能化導他們，使他們遠離各種業障，得到堅固淨信？』今天如來，是想讓你演說這個方便法門，是適宜的時候了，為哀愍末世眾生，請你演說。」
				<hr/>
			</div>
			<div :class="details ? 'bg-secondary text-white' : ''" class="paragraph">
				<span class="word">爾時</span>
				<span class="punc">，</span>
				<span class="word">地藏菩薩摩訶薩語堅淨信菩薩摩訶薩言</span>
				<span class="punc">：</span>
				<span class="punc">「</span>
				<span class="word">善男子</span>
				<span class="punc">！</span>
				<span class="word">諦聽</span>
				<span class="punc">。</span>
				<span class="word">當為汝說</span>
				<span class="punc">。</span>
				<span class="word">若佛滅後</span>
				<span class="punc">，</span>
				<span class="word">惡世之中</span>
				<span class="punc">，</span>
				<span class="word">諸有比丘</span>
				<span class="punc">、</span>
				<span class="word">比丘尼</span>
				<span class="punc">、</span>
				<span class="word">優婆塞</span>
				<span class="punc">、</span>
				<span class="word">優婆夷</span>
				<span class="punc">，</span>
				<span class="word">於世間</span>
				<span class="punc">、</span>
				<span class="word">出世間因果法</span>
				<span class="punc">，</span>
				<span class="word">未得決定信</span>
				<span class="punc">，</span>
				<span class="word">不能修學無常想</span>
				<span class="punc">、</span>
				<span class="word">苦想</span>
				<span class="punc">、</span>
				<span class="word">無我想</span>
				<span class="punc">、</span>
				<span class="word">不淨想</span>
				<span class="punc">，</span>
				<span class="word">成就現前</span>
				<span class="punc">；</span>
				<span class="word">不能勤觀四聖諦法及十二因緣法</span>
				<span class="punc">；</span>
				<span class="word">亦不勤觀真如</span>
				<span class="punc">、</span>
				<span class="word">實際</span>
				<span class="punc">、</span>
				<span class="word">無生無滅等法</span>
				<span class="punc">。</span>
				<span class="word">以不勤觀如是法故</span>
				<span class="punc">，</span>
				<span class="word">不能畢竟不作十惡根本過罪</span>
				<span class="punc">。</span>
				<span class="word">於三寶功德種種境界</span>
				<span class="punc">，</span>
				<span class="word">不能專信</span>
				<span class="punc">。</span>
				<span class="word">於三乘中</span>
				<span class="punc">，</span>
				<span class="word">皆無定向</span>
				<span class="punc">。</span>
				<span class="word">如是等人</span>
				<span class="punc">，</span>
				<span class="word">若有種種諸障礙事</span>
				<span class="punc">，</span>
				<span class="word">增長憂慮</span>
				<span class="punc">，</span>
				<span class="word">或疑或悔</span>
				<span class="punc">，</span>
				<span class="word">於一切處心不明了</span>
				<span class="punc">。</span>
				<span class="word">多求多惱</span>
				<span class="punc">，</span>
				<span class="word">眾事牽纏</span>
				<span class="punc">，</span>
				<span class="word">所作不定</span>
				<span class="punc">，</span>
				<span class="word">思想擾亂</span>
				<span class="punc">，</span>
				<span class="word">廢修道業</span>
				<span class="punc">。</span>
				<span class="word">有如是等障難事者</span>
				<span class="punc">，</span>
				<span class="word">當用木輪相法</span>
				<span class="punc">，</span>
				<span class="word">占察善惡宿世之業</span>
				<span class="punc">、</span>
				<span class="word">現在苦樂吉凶等事</span>
				<span class="punc">。</span>
				<span class="word">緣合故有</span>
				<span class="punc">，</span>
				<span class="word">緣盡則滅</span>
				<span class="punc">。</span>
				<span class="word">業集隨心</span>
				<span class="punc">，</span>
				<span class="word">相現果起</span>
				<span class="punc">。</span>
				<span class="word">不失不壞</span>
				<span class="punc">，</span>
				<span class="word">相應不差</span>
				<span class="punc">。</span>
				<span class="word">如是諦占善惡業報</span>
				<span class="punc">，</span>
				<span class="word">曉喻自心</span>
				<span class="punc">。</span>
				<span class="word">於所疑事</span>
				<span class="punc">，</span>
				<span class="word">以取決了</span>
				<span class="punc">。</span>
				<span class="word">若佛弟子</span>
				<span class="punc">，</span>
				<span class="word">但當學習如此相法</span>
				<span class="punc">，</span>
				<span class="word">至心歸依</span>
				<span class="punc">，</span>
				<span class="word">所觀之事</span>
				<span class="punc">，</span>
				<span class="word">無不誠諦</span>
				<span class="punc">。</span>
				<span class="word">不應棄捨如是之法</span>
				<span class="punc">，</span>
				<span class="word">而返隨逐世間卜筮</span>
				<span class="punc">、</span>
				<span class="word">種種占相吉凶等事</span>
				<span class="punc">，</span>
				<span class="word">貪著樂習</span>
				<span class="punc">。</span>
				<span class="word">若樂習者</span>
				<span class="punc">，</span>
				<span class="word">深障聖道</span>
				<span class="punc">。</span>
				<span class="punc">」</span>
			</div>
			<div x-show="details" class="details mb-3">
				這時，地藏大菩薩對堅淨信大菩薩說：「善男子，認真聽，為你說，佛陀滅度後，惡世中，那些四部弟子，對於世間與出世間的因果法，沒有得到堅定的淨信，無法修學無常觀，苦觀，無我觀，不淨觀而有所成就，不能勤於修學這樣的觀法，所以終究不能脫離十惡之罪過，對於三寶功德種種境界，也無法淨信，對於三乘法門沒有定向，這樣的人，如果有種種業障之事，就會增長煩惱，或者有疑或者後悔，在任何地方，心不能明了，執求多多煩惱也多多，各種俗事牽扯糾纏，做什麼也沒有定向，思想煩擾混亂，對於修善學道之業也荒廢了。有這樣的障礙苦難之事，就應當用木輪相法門，來測算占察累世的善惡業，以及當前的苦難快樂吉凶等事情，因緣業力相合則有，因緣業力盡則消散，業力顯現因為心念，業力之相顯現則果報生起，不會無故壞滅，相應不差毫厘，這樣占察善惡業果報就能明白，對於懷疑的事情也能夠有所判斷。凡是佛弟子，都應該學習這樣占察相法，誠心淨信，那麼所觀的事情，沒有不能夠成就的，所以不要捨棄這個法門，反倒去追求世間那些占卜吉凶那些東西，貪求執著，如果過於執愛，那麼就障礙了對真理尋求的神聖之道。」
				<hr/>
			</div>
			<div :class="details ? 'bg-secondary text-white' : ''" class="paragraph">
				<span class="punc">「</span>
				<span class="word">善男子</span>
				<span class="punc">！</span>
				<span class="word">欲學木輪相者</span>
				<span class="punc">，</span>
				<span class="word">先當刻木如小指許</span>
				<span class="punc">，</span>
				<span class="word">使長短減於一寸</span>
				<span class="punc">，</span>
				<span class="word">正中令其四面方平</span>
				<span class="punc">，</span>
				<span class="word">自餘向兩頭斜漸去之</span>
				<span class="punc">。</span>
				<span class="word">仰手傍擲</span>
				<span class="punc">，</span>
				<span class="word">令使易轉</span>
				<span class="punc">，</span>
				<span class="word">因是義故</span>
				<span class="punc">，</span>
				<span class="word">說名為輪</span>
				<span class="punc">。</span>
				<span class="word">又依此相</span>
				<span class="punc">，</span>
				<span class="word">能破壞眾生邪見疑網</span>
				<span class="punc">，</span>
				<span class="word">轉向正道</span>
				<span class="punc">，</span>
				<span class="word">到安隱處</span>
				<span class="punc">，</span>
				<span class="word">是故名輪</span>
				<span class="punc">。</span>
				<span class="word">其輪相者</span>
				<span class="punc">，</span>
				<span class="word">有三種差別</span>
				<span class="punc">。</span>
				<span class="word">何等為三</span>
				<span class="punc">？</span>
				<span class="word">一者</span>
				<span class="punc">，</span>
				<span class="word">輪相能示宿世所作善惡業種差別</span>
				<span class="punc">，</span>
				<span class="word">其輪有十</span>
				<span class="punc">。</span>
				<span class="word">二者</span>
				<span class="punc">，</span>
				<span class="word">輪相能示宿世集業久近</span>
				<span class="punc">，</span>
				<span class="word">所作強弱</span>
				<span class="punc">、</span>
				<span class="word">大小差別</span>
				<span class="punc">，</span>
				<span class="word">其輪有三</span>
				<span class="punc">。</span>
				<span class="word">三者</span>
				<span class="punc">，</span>
				<span class="word">輪相能示三世中受報差別</span>
				<span class="punc">，</span>
				<span class="word">其輪有六</span>
				<span class="punc">。</span>
				<span class="punc">」</span>
			</div>
			<div x-show="details" class="details mb-3">
				「善男子，如果要學木輪相法門，就用如小指大小的木頭來雕刻，長度一寸左右，中間四面方形平直，兩頭傾斜削去（如鉛筆頭），手抓住向一側投擲，使木輪容易轉動，因為這個緣故，所以叫輪，又因為依據這個相，能夠破除眾生心中疑慮，安於正道，安然自在，所以叫做輪，這個輪相，共有三種差別，那三種呢？
				<blockquote>
					第一種輪相，能夠示現宿世所造的善惡業的差別，共有十個木輪。<br/>
					第二種輪相，能夠示現宿世累積的業力遠近，以及業力的強弱程度差別，共有三個木輪。<br/>
					第三種輪相，能夠示現過去現在未來所受果報的差別，共有六個木輪。
				</blockquote>
				」
				<hr/>
			</div>
			<div :class="details ? 'bg-secondary text-white' : ''" class="paragraph">
				<span class="punc">「</span>
				<span class="word">若欲觀宿世所作善惡業差別者</span>
				<span class="punc">，</span>
				<span class="word">當刻木為十輪</span>
				<span class="punc">。</span>
				<span class="word">依此十輪</span>
				<span class="punc">，</span>
				<span class="word">書記十善之名</span>
				<span class="punc">。</span>
				<span class="word">一善主在一輪</span>
				<span class="punc">，</span>
				<span class="word">於一面記</span>
				<span class="punc">。</span>
				<span class="word">次以十惡書對十善</span>
				<span class="punc">，</span>
				<span class="word">令使相當</span>
				<span class="punc">，</span>
				<span class="word">亦各記在一面</span>
				<span class="punc">。</span>
				<span class="word">言十善者</span>
				<span class="punc">，</span>
				<span class="word">則為一切眾善根本</span>
				<span class="punc">，</span>
				<span class="word">能攝一切諸餘善法</span>
				<span class="punc">。</span>
				<span class="word">言十惡者</span>
				<span class="punc">，</span>
				<span class="word">亦為一切眾惡根本</span>
				<span class="punc">，</span>
				<span class="word">能攝一切諸餘惡法</span>
				<span class="punc">。</span>
				<span class="punc">」</span>
			</div>
			<div x-show="details" class="details mb-3">
				「若想觀宿世所造不同的善惡業，應當刻十個木輪，這十個木輪書寫十種不同善業的名稱，一個木輪的一面書寫善業名稱，對面一面書寫十種惡業名稱。這十種善，是一切善的根本，能統攝包括一切其餘善法。十種惡則為一切眾惡的根本，能統攝包括一切其餘惡法。」
				<hr/>
			</div>
			<div :class="details ? 'bg-secondary text-white' : ''" class="paragraph">
				<span class="punc">「</span>
				<span class="word">若欲占此輪相者</span>
				<span class="punc">，</span>
				<span class="word">先當學至心總禮十方一切諸佛</span>
				<span class="punc">。</span>
				<span class="word">因即立願</span>
				<span class="punc">：</span>
				<span class="punc">『</span>
				<span class="word">願令十方一切眾生</span>
				<span class="punc">，</span>
				<span class="word">速疾皆得親近供養</span>
				<span class="punc">，</span>
				<span class="word">諮受正法</span>
				<span class="punc">。</span>
				<span class="punc">』</span>
				<span class="word">次應學至心敬禮十方一切法藏</span>
				<span class="punc">。</span>
				<span class="word">因即立願</span>
				<span class="punc">：</span>
				<span class="punc">『</span>
				<span class="word">願令十方一切眾生</span>
				<span class="punc">，</span>
				<span class="word">速疾皆得受持讀誦</span>
				<span class="punc">，</span>
				<span class="word">如法修行</span>
				<span class="punc">，</span>
				<span class="word">及為他說</span>
				<span class="punc">。</span>
				<span class="punc">』</span>
				<span class="word">次當學至心敬禮十方一切賢聖</span>
				<span class="punc">。</span>
				<span class="word">因即立願</span>
				<span class="punc">：</span>
				<span class="punc">『</span>
				<span class="word">願令十方一切眾生</span>
				<span class="punc">，</span>
				<span class="word">速疾皆得親近供養</span>
				<span class="punc">，</span>
				<span class="word">發菩提心</span>
				<span class="punc">，</span>
				<span class="word">志不退轉</span>
				<span class="punc">。</span>
				<span class="punc">』</span>
				<span class="word">後應學至心禮我地藏菩薩摩訶薩</span>
				<span class="punc">。</span>
				<span class="word">因即立願</span>
				<span class="punc">：</span>
				<span class="punc">『</span>
				<span class="word">願令十方一切眾生</span>
				<span class="punc">，</span>
				<span class="word">速得除滅惡業重罪</span>
				<span class="punc">，</span>
				<span class="word">離諸障礙</span>
				<span class="punc">。</span>
				<span class="word">資生眾具</span>
				<span class="punc">，</span>
				<span class="word">悉皆充足</span>
				<span class="punc">。</span>
				<span class="punc">』</span>
				<span class="word">如是禮已</span>
				<span class="punc">，</span>
				<span class="word">隨所有香華等</span>
				<span class="punc">，</span>
				<span class="word">當修供養</span>
				<span class="punc">。</span>
				<span class="punc">」</span>
			</div>
			<div x-show="details" class="details mb-3">
				「如果要占察這個善惡業輪相，就應當先至誠心禮敬十方一切諸佛，然後發願：『願十方一切眾生皆能速得親近供養一切諸佛，聽聞正法教導。』；其次至誠心禮敬十方一切諸佛法藏，然後發願：『願十方一切眾生皆能速得讀誦受持，如法修行，也能為他人演說。』；其次至誠心禮敬十方一切聖賢善知識，然後發願：『願十方一切眾生皆能速得親近供養聖賢善知識，發菩提心，志願不退轉。』；然後應當至誠心禮敬我地藏菩薩，然後發願：『願十方一切眾生皆速能消除惡業重罪，遠離各種業障，賴以為生的物資充足。』這樣禮敬完之後，隨自己擁有的香、花等修供養之法。」
				<hr/>
			</div>
			<div :class="details ? 'bg-secondary text-white' : ''" class="paragraph">
				<span class="punc">「</span>
				<span class="word">修供養者</span>
				<span class="punc">，</span>
				<span class="word">仰念一切佛法僧寶</span>
				<span class="punc">，</span>
				<span class="word">體常遍滿</span>
				<span class="punc">，</span>
				<span class="word">無所不在</span>
				<span class="punc">。</span>
				<span class="word">願令此香華</span>
				<span class="punc">，</span>
				<span class="word">等同法性</span>
				<span class="punc">，</span>
				<span class="word">普熏一切諸佛剎土</span>
				<span class="punc">，</span>
				<span class="word">施作佛事</span>
				<span class="punc">。</span>
				<span class="word">又念十方一切供具</span>
				<span class="punc">，</span>
				<span class="word">無時不有</span>
				<span class="punc">。</span>
				<span class="word">我今當以十方所有一切種種香華</span>
				<span class="punc">、</span>
				<span class="word">瓔珞</span>
				<span class="punc">、</span>
				<span class="word">幢幡</span>
				<span class="punc">、</span>
				<span class="word">寶蓋</span>
				<span class="punc">、</span>
				<span class="word">諸珍妙飾</span>
				<span class="punc">、</span>
				<span class="word">種種音樂</span>
				<span class="punc">、</span>
				<span class="word">燈明</span>
				<span class="punc">、</span>
				<span class="word">燭火</span>
				<span class="punc">、</span>
				<span class="word">飲食</span>
				<span class="punc">、</span>
				<span class="word">衣服</span>
				<span class="punc">、</span>
				<span class="word">臥具</span>
				<span class="punc">、</span>
				<span class="word">湯藥</span>
				<span class="punc">，</span>
				<span class="word">乃至十方所有一切種種莊嚴供養之具</span>
				<span class="punc">，</span>
				<span class="word">憶想遙擬</span>
				<span class="punc">，</span>
				<span class="word">普共眾生奉獻供養</span>
				<span class="punc">。</span>
				<span class="word">當念一切世界中有修供養者</span>
				<span class="punc">，</span>
				<span class="word">我今隨喜</span>
				<span class="punc">。</span>
				<span class="word">若未修供養者</span>
				<span class="punc">，</span>
				<span class="word">願得開導</span>
				<span class="punc">，</span>
				<span class="word">令修供養</span>
				<span class="punc">。</span>
				<span class="word">又願我身</span>
				<span class="punc">，</span>
				<span class="word">速能遍至一切剎土</span>
				<span class="punc">，</span>
				<span class="word">於一切佛法僧所</span>
				<span class="punc">，</span>
				<span class="word">各以一切種莊嚴供養之具</span>
				<span class="punc">，</span>
				<span class="word">共一切眾生等持奉獻</span>
				<span class="punc">。</span>
				<span class="word">供養一切諸佛法身</span>
				<span class="punc">、</span>
				<span class="word">色身</span>
				<span class="punc">、</span>
				<span class="word">舍利</span>
				<span class="punc">、</span>
				<span class="word">形像</span>
				<span class="punc">、</span>
				<span class="word">浮圖</span>
				<span class="punc">、</span>
				<span class="word">廟塔一切佛事</span>
				<span class="punc">，</span>
				<span class="word">供養一切所有法藏及說法處</span>
				<span class="punc">，</span>
				<span class="word">供養一切賢聖僧眾</span>
				<span class="punc">，</span>
				<span class="word">願共一切眾生</span>
				<span class="punc">，</span>
				<span class="word">修行如是供養已</span>
				<span class="punc">，</span>
				<span class="word">漸得成就六波羅蜜</span>
				<span class="punc">、</span>
				<span class="word">四無量心</span>
				<span class="punc">。</span>
				<span class="word">深知一切法本來寂靜</span>
				<span class="punc">，</span>
				<span class="word">無生無滅</span>
				<span class="punc">，</span>
				<span class="word">一味平等</span>
				<span class="punc">，</span>
				<span class="word">離念清淨</span>
				<span class="punc">，</span>
				<span class="word">畢竟圓滿</span>
				<span class="punc">。</span>
				<span class="punc">」</span>
			</div>
			<div x-show="details" class="details mb-3">
				「修供養之法時，應先觀想一切佛法僧三寶之體恆常遍滿法界，無處不在。願此香花等同諸法清淨性，遍及一切佛國淨土供養，用作佛事。又觀想一切供養用品器具遍滿十方，無時不有。我今天用這些遍滿十方所有一切種種香、花、珍貴裝飾、法幢懸幡、寶蓋、各種珍寶飾品、種種音樂、明燈、燭火、飲食、衣服、臥具、湯藥、乃至盡十方世界所有一切莊嚴供養用品器具，觀想模擬，和一切眾生一起奉獻供養。我今隨喜於一切世界常修供養之法者，如果尚未修供養之法者，願他得到開導，而能起修供養之法。又願我身能夠迅速抵達一切佛國剎土，在一切有佛法僧的地方，分別以一切莊嚴的用品器具，與一切眾生一起奉獻供養。供養一切諸佛法身、色身、舍利、形像、浮圖、廟塔，一切佛事，供養一切所有法藏及說法處，供養一切賢聖僧眾。願和一切眾生修行這樣的供養，逐漸成就六度波羅蜜、四無量心。深知一切法本來寂靜，無生無滅，平等一味，清淨離於妄想之念，徹底究竟圓滿。」
				<hr/>
			</div>
			<div :class="details ? 'bg-secondary text-white' : ''" class="paragraph">
				<span class="punc">「</span>
				<span class="word">又應別復係心供養我地藏菩薩摩訶薩</span>
				<span class="punc">。</span>
				<span class="word">次當稱名</span>
				<span class="punc">，</span>
				<span class="word">若默誦念</span>
				<span class="punc">。</span>
				<span class="word">一心告言</span>
				<span class="punc">：</span>
				<span class="punc">『</span>
				<span class="word">南無地藏菩薩摩訶薩</span>
				<span class="punc">。</span>
				<span class="punc">』</span>
				<span class="word">如是稱名</span>
				<span class="punc">，</span>
				<span class="word">滿足至千</span>
				<span class="punc">。</span>
				<span class="word">經千念已</span>
				<span class="punc">，</span>
				<span class="word">而作是言</span>
				<span class="punc">：</span>
				<span class="punc">『</span>
				<span class="word">地藏菩薩摩訶薩</span>
				<span class="punc">！</span>
				<span class="word">大慈大悲</span>
				<span class="punc">！</span>
				<span class="word">唯願護念我及一切眾生</span>
				<span class="punc">，</span>
				<span class="word">速除諸障</span>
				<span class="punc">，</span>
				<span class="word">增長淨信</span>
				<span class="punc">，</span>
				<span class="word">令今所觀稱實相應</span>
				<span class="punc">。</span>
				<span class="punc">』</span>
				<span class="word">作此語已</span>
				<span class="punc">，</span>
				<span class="word">然後手執木輪</span>
				<span class="punc">，</span>
				<span class="word">於淨物上而傍擲之</span>
				<span class="punc">。</span>
				<span class="word">如是欲自觀法</span>
				<span class="punc">，</span>
				<span class="word">若欲觀他</span>
				<span class="punc">，</span>
				<span class="word">皆亦如是</span>
				<span class="punc">。</span>
				<span class="punc">」</span>
			</div>
			<div x-show="details" class="details mb-3">
				「另外，應當再用心供養我地藏菩薩，念誦地藏菩薩名號，或默念，一心禱告：『南無地藏菩薩摩訶薩。』這樣至千遍。念誦千遍完畢後，念誦或禱告：『地藏菩薩摩訶薩，大慈大悲，願您加持我及一切眾生，速除諸業障，增長堅定信心，讓今所占察能夠切實與所願相應。』念完之後，然後手持木輪，在乾淨的物品上向一側投擲，如果是占察自己，或是占察他人，都是這樣操作。」
				<hr/>
			</div>
			<div :class="details ? 'bg-secondary text-white' : ''" class="paragraph">
				<span class="punc">「</span>
				<span class="word">應知占其輪相者</span>
				<span class="punc">，</span>
				<span class="word">隨所現業</span>
				<span class="punc">，</span>
				<span class="word">悉應一一諦觀思驗</span>
				<span class="punc">。</span>
				<span class="word">或純具十善</span>
				<span class="punc">，</span>
				<span class="word">或純具十惡</span>
				<span class="punc">，</span>
				<span class="word">或善惡交雜</span>
				<span class="punc">，</span>
				<span class="word">或純善不具</span>
				<span class="punc">，</span>
				<span class="word">或純惡不具</span>
				<span class="punc">。</span>
				<span class="word">如是業因</span>
				<span class="punc">，</span>
				<span class="word">種類不同</span>
				<span class="punc">，</span>
				<span class="word">習氣果報</span>
				<span class="punc">，</span>
				<span class="word">各各別異</span>
				<span class="punc">，</span>
				<span class="word">如佛世尊餘處廣說</span>
				<span class="punc">。</span>
				<span class="word">應當憶念思惟觀察所現業種</span>
				<span class="punc">，</span>
				<span class="word">與今世果報所經苦樂吉凶等事</span>
				<span class="punc">，</span>
				<span class="word">及煩惱業習得相當者</span>
				<span class="punc">，</span>
				<span class="word">名為相應</span>
				<span class="punc">；</span>
				<span class="word">若不相當者</span>
				<span class="punc">，</span>
				<span class="word">謂不至心</span>
				<span class="punc">，</span>
				<span class="word">名虛謬也</span>
				<span class="punc">。</span>
				<span class="punc">」</span>
			</div>
			<div x-show="details" class="details mb-3">
				「應當知道木輪之相，是與顯示的業相相應相隨，都應該一一認真占察思考檢驗，有的全部是十善，有的全部是十惡，有的不全部是善，有的不全部是惡，這樣的業因，種類不同，習氣果報，也各有差別，如同佛陀世尊在其他地方一直常說的一樣。應當憶念思維觀察所顯示的業力的種類，與今世果報所經歷的苦樂吉凶等事，以及煩惱習氣相差不大則為相應。如果相差較大，那麼是妄念太多心不清淨，則不相應了。」
				<hr/>
			</div>
			<div :class="details ? 'bg-secondary text-white' : ''" class="paragraph">
				<span class="punc">「</span>
				<span class="word">若占輪相</span>
				<span class="punc">，</span>
				<span class="word">其善惡業俱不現者</span>
				<span class="punc">，</span>
				<span class="word">此人已證無漏智心</span>
				<span class="punc">，</span>
				<span class="word">專求出離</span>
				<span class="punc">，</span>
				<span class="word">不復樂受世間果報</span>
				<span class="punc">，</span>
				<span class="word">諸有漏業展轉微弱</span>
				<span class="punc">，</span>
				<span class="word">更不增長</span>
				<span class="punc">，</span>
				<span class="word">是故不現</span>
				<span class="punc">。</span>
				<span class="word">又純善不具</span>
				<span class="punc">、</span>
				<span class="word">純惡不具者</span>
				<span class="punc">，</span>
				<span class="word">此二種人</span>
				<span class="punc">，</span>
				<span class="word">善惡之業所有不現者</span>
				<span class="punc">，</span>
				<span class="word">皆是微弱未能牽果</span>
				<span class="punc">，</span>
				<span class="word">是故不現</span>
				<span class="punc">。</span>
				<span class="word">若當來世佛諸弟子</span>
				<span class="punc">，</span>
				<span class="word">已占善惡果報得相應者</span>
				<span class="punc">，</span>
				<span class="word">於五欲眾具得稱意時</span>
				<span class="punc">，</span>
				<span class="word">勿當自縱以起放逸</span>
				<span class="punc">。</span>
				<span class="word">即應思念</span>
				<span class="punc">：</span>
				<span class="punc">『</span>
				<span class="word">由我宿世如是善業故</span>
				<span class="punc">，</span>
				<span class="word">今獲此報</span>
				<span class="punc">。</span>
				<span class="word">我今乃可轉更進修</span>
				<span class="punc">，</span>
				<span class="word">不應休止</span>
				<span class="punc">。</span>
				<span class="punc">』</span>
				<span class="word">若遭眾厄種種衰惱不吉之事擾亂憂怖</span>
				<span class="punc">，</span>
				<span class="word">不稱意時</span>
				<span class="punc">，</span>
				<span class="word">應當甘受</span>
				<span class="punc">，</span>
				<span class="word">無令疑悔</span>
				<span class="punc">，</span>
				<span class="word">退修善業</span>
				<span class="punc">。</span>
				<span class="word">即當思念</span>
				<span class="punc">：</span>
				<span class="punc">『</span>
				<span class="word">但由我宿世造如是惡業故</span>
				<span class="punc">，</span>
				<span class="word">今獲此報</span>
				<span class="punc">，</span>
				<span class="word">我今應當悔彼惡業</span>
				<span class="punc">，</span>
				<span class="word">專修對治及修餘善</span>
				<span class="punc">。</span>
				<span class="word">無得止住懈怠放逸</span>
				<span class="punc">，</span>
				<span class="word">轉更增集種種苦聚</span>
				<span class="punc">。</span>
				<span class="punc">』</span>
				<span class="word">是名占察初輪相法</span>
				<span class="punc">。</span>
				<span class="punc">」</span>
			</div>
			<div x-show="details" class="details mb-3">
				「如果占察輪相上善惡都不顯現，那麼此人已證得無漏智了，專求出離世間，不在樂受世間果報了，那些有漏之業，已逐漸輕微，更不會增長了，所以不顯現。如果一個善相也沒有，一個惡相也沒有，這兩類人，善惡業之所以不顯，因為都很微弱，沒有牽動果報，所以沒有顯現。如果時值來世，諸佛弟子，已經占察的善惡果報都能夠相應，眼耳鼻舌身欲樂用具都能夠稱心合意時，不應自我放縱，生起放逸之心。應當這樣思維：『這些都是因為我宿世種了這樣的善因緣故，所以今天有此善報，我今天更應當精進修行，不應該停止。』如果遭遇種種苦厄衰敗煩惱不吉之事，心神擾亂恐懼，不能稱心如意，應當甘心承受，不要懷疑後悔，退失修善業道心，應當這樣思維：『這些皆是我宿世所造惡業所致，所以今世獲得此果報，我今應當懺悔這些惡業，專心修行對治的方法和其他善法，不停止也不懈怠放逸，否則惡因累集則種種苦惱相聚。』這個就是占察初輪相法。」
				<hr/>
			</div>
			<div :class="details ? 'bg-secondary text-white' : ''" class="paragraph">
				<span class="punc">「</span>
				<span class="word">善男子</span>
				<span class="punc">！</span>
				<span class="word">若欲占察過去往昔集業久近</span>
				<span class="punc">，</span>
				<span class="word">所作強弱</span>
				<span class="punc">、</span>
				<span class="word">大小差別者</span>
				<span class="punc">，</span>
				<span class="word">當復刻木為三輪</span>
				<span class="punc">，</span>
				<span class="word">以身口意各主一輪</span>
				<span class="punc">，</span>
				<span class="word">書字記之</span>
				<span class="punc">。</span>
				<span class="word">又於輪正中</span>
				<span class="punc">，</span>
				<span class="word">一面書一畫</span>
				<span class="punc">，</span>
				<span class="word">令麁長使徹畔</span>
				<span class="punc">。</span>
				<span class="word">次第二面書一畫</span>
				<span class="punc">，</span>
				<span class="word">令細短使不至畔</span>
				<span class="punc">。</span>
				<span class="word">次第三面作一傍刻如畫</span>
				<span class="punc">，</span>
				<span class="word">令其麁深</span>
				<span class="punc">。</span>
				<span class="word">次第四面亦作傍刻</span>
				<span class="punc">，</span>
				<span class="word">令使細淺</span>
				<span class="punc">。</span>
				<span class="word">當知善業莊嚴猶如畫飾</span>
				<span class="punc">，</span>
				<span class="word">惡業衰害猶如損刻</span>
				<span class="punc">。</span>
				<span class="word">其畫長大者</span>
				<span class="punc">，</span>
				<span class="word">顯示積善來久</span>
				<span class="punc">，</span>
				<span class="word">行業猛利</span>
				<span class="punc">，</span>
				<span class="word">所作增上</span>
				<span class="punc">。</span>
				<span class="word">其畫細短者</span>
				<span class="punc">，</span>
				<span class="word">顯示積善來近</span>
				<span class="punc">，</span>
				<span class="word">始習基鈍</span>
				<span class="punc">，</span>
				<span class="word">所作微薄</span>
				<span class="punc">。</span>
				<span class="word">其刻麁深者</span>
				<span class="punc">，</span>
				<span class="word">顯示習惡來久</span>
				<span class="punc">，</span>
				<span class="word">所作增上</span>
				<span class="punc">，</span>
				<span class="word">餘殃亦厚</span>
				<span class="punc">。</span>
				<span class="word">其刻細淺者</span>
				<span class="punc">，</span>
				<span class="word">顯示退善來近</span>
				<span class="punc">，</span>
				<span class="word">始習惡法</span>
				<span class="punc">，</span>
				<span class="word">所作之業</span>
				<span class="punc">，</span>
				<span class="word">未至增上</span>
				<span class="punc">。</span>
				<span class="word">或雖起重惡</span>
				<span class="punc">，</span>
				<span class="word">已曾改悔</span>
				<span class="punc">，</span>
				<span class="word">此謂小惡</span>
				<span class="punc">。</span>
				<span class="punc">」</span>
			</div>
			<div x-show="details" class="details mb-3">
				「善男子！如果想占察過去往昔的累積之業遠近，強弱，大小差異，應當再刻三個木輪，以身口意各代表一個木輪，用文字記號命名，在木輪的一面正中，寫一畫，粗長，至邊處；第二面，寫一畫，細短，不至邊；第三面，傾斜刻一畫，粗深；第四面，還是傾斜刻一畫，細淺。應當知道善業莊嚴，如同書畫，惡業衰敗惱害，如同損壞的雕刻。那一畫長且大，顯示的是積累善業由來已久，所行善業深厚，所作的一直是累加的善因。那一畫細短的，顯示的是所積累的善業不多，開始所作根基較差，所作善業微薄。所刻畫深，顯示宿世惡業由來已久，所造的是累加的惡因，惡業果報也大。所刻畫淺的，顯示最近退失善業，開始造惡業，所造的惡業，還沒有累加增上；或者雖然造過重惡，但已悔改，那麼就是小惡了。」
				<hr/>
			</div>
			<div :class="details ? 'bg-secondary text-white' : ''" class="paragraph">
				<span class="punc">「</span>
				<span class="word">善男子</span>
				<span class="punc">！</span>
				<span class="word">若占初輪相者</span>
				<span class="punc">，</span>
				<span class="word">但知宿世所造之業善惡差別</span>
				<span class="punc">，</span>
				<span class="word">而不能知積習久近</span>
				<span class="punc">、</span>
				<span class="word">所作之業強弱大小</span>
				<span class="punc">，</span>
				<span class="word">是故須占第二輪相</span>
				<span class="punc">。</span>
				<span class="word">若占第二輪相者</span>
				<span class="punc">，</span>
				<span class="word">當依初輪相中所現之業</span>
				<span class="punc">。</span>
				<span class="word">若屬身者</span>
				<span class="punc">，</span>
				<span class="word">擲身輪相</span>
				<span class="punc">；</span>
				<span class="word">若屬口者</span>
				<span class="punc">，</span>
				<span class="word">擲口輪相</span>
				<span class="punc">；</span>
				<span class="word">若屬意者</span>
				<span class="punc">，</span>
				<span class="word">擲意輪相</span>
				<span class="punc">。</span>
				<span class="word">不得以此三輪之相一擲通占</span>
				<span class="punc">。</span>
				<span class="word">應當隨業主念</span>
				<span class="punc">，</span>
				<span class="word">一一善惡</span>
				<span class="punc">，</span>
				<span class="word">依所屬輪</span>
				<span class="punc">，</span>
				<span class="word">別擲占之</span>
				<span class="punc">。</span>
				<span class="punc">」</span>
			</div>
			<div x-show="details" class="details mb-3">
				「善男子！如果占察初輪相，能夠知道宿世所造之業善惡的差別，但無法知道所積之業力遠近、強弱、大小，所以要占第二輪相。如果占第二輪相，應當依初占輪相所顯現的業。如果是身業，那麼就投擲代表身的那個輪相；如果屬於口業，那麼就投擲口輪相；如果屬於意，就投擲意輪相。不得把三種輪相一起投擲同時占，應當分別根據各個善惡業，依據所屬輪相，分別占察。」
				<hr/>
			</div>
			<div :class="details ? 'bg-secondary text-white' : ''" class="paragraph">
				<span class="punc">「</span>
				<span class="word">復次</span>
				<span class="punc">，</span>
				<span class="word">若占初輪相中</span>
				<span class="punc">，</span>
				<span class="word">唯得身之善</span>
				<span class="punc">，</span>
				<span class="word">於此第二輪相中得身惡者</span>
				<span class="punc">，</span>
				<span class="word">謂無至心</span>
				<span class="punc">，</span>
				<span class="word">不得相應</span>
				<span class="punc">，</span>
				<span class="word">名虛謬也</span>
				<span class="punc">。</span>
				<span class="word">又復不相應者</span>
				<span class="punc">，</span>
				<span class="word">謂占初輪相中</span>
				<span class="punc">，</span>
				<span class="word">得不殺業</span>
				<span class="punc">，</span>
				<span class="word">及得偷盜業</span>
				<span class="punc">，</span>
				<span class="word">意先主觀不殺業</span>
				<span class="punc">，</span>
				<span class="word">而於第二輪相中得身惡者</span>
				<span class="punc">，</span>
				<span class="word">名不相應</span>
				<span class="punc">。</span>
				<span class="punc">」</span>
			</div>
			<div x-show="details" class="details mb-3">
				「再者，如果占察初輪相中，只有身善，在第二輪相卻占得身惡，那麼至誠心不夠，不能相應，就是錯誤的。又如果不相應，在初輪相中，占得不殺業，和偷盜業，先占不殺業，在第二輪相中，卻占得身惡，那麼就是不相應。」
				<hr/>
			</div>
			<div :class="details ? 'bg-secondary text-white' : ''" class="paragraph">
				<span class="punc">「</span>
				<span class="word">復次</span>
				<span class="punc">，</span>
				<span class="word">若觀現在從生以來</span>
				<span class="punc">，</span>
				<span class="word">不樂殺業</span>
				<span class="punc">，</span>
				<span class="word">無造殺罪</span>
				<span class="punc">，</span>
				<span class="word">但意主殺業</span>
				<span class="punc">，</span>
				<span class="word">而於此第二輪相中得身大惡者</span>
				<span class="punc">，</span>
				<span class="word">謂名不相應</span>
				<span class="punc">。</span>
				<span class="word">自餘口意中業不相應義</span>
				<span class="punc">，</span>
				<span class="word">亦如是應知</span>
				<span class="punc">。</span>
				<span class="punc">」</span>
			</div>
			<div x-show="details" class="details mb-3">
				「再者，如果現生不樂殺業，也未造殺罪，但占得殺業，並且在第二輪相中，占得身大惡業，那麼就是不相應。口業意業不相應的道理，應當知道也是這樣的。」
				<hr/>
			</div>
			<div :class="details ? 'bg-secondary text-white' : ''" class="paragraph">
				<span class="punc">「</span>
				<span class="word">善男子</span>
				<span class="punc">！</span>
				<span class="word">若未來世諸眾生等</span>
				<span class="punc">，</span>
				<span class="word">欲求度脫生老病死</span>
				<span class="punc">，</span>
				<span class="word">始學發心修習禪定</span>
				<span class="punc">、</span>
				<span class="word">無相智慧者</span>
				<span class="punc">，</span>
				<span class="word">應當先觀宿世所作惡業多少及以輕重</span>
				<span class="punc">。</span>
				<span class="word">若惡業多厚者</span>
				<span class="punc">，</span>
				<span class="word">不得即學禪定</span>
				<span class="punc">、</span>
				<span class="word">智慧</span>
				<span class="punc">，</span>
				<span class="word">應當先修懺悔之法</span>
				<span class="punc">。</span>
				<span class="word">所以者何</span>
				<span class="punc">？</span>
				<span class="word">此人宿習惡心猛利故</span>
				<span class="punc">，</span>
				<span class="word">於今現在必多造惡</span>
				<span class="punc">，</span>
				<span class="word">毀犯重禁</span>
				<span class="punc">。</span>
				<span class="word">以犯重禁故</span>
				<span class="punc">，</span>
				<span class="word">若不懺悔令其清淨</span>
				<span class="punc">，</span>
				<span class="word">而修禪定</span>
				<span class="punc">、</span>
				<span class="word">智慧者</span>
				<span class="punc">，</span>
				<span class="word">則多有障礙</span>
				<span class="punc">，</span>
				<span class="word">不能剋獲</span>
				<span class="punc">。</span>
				<span class="word">或失心錯亂</span>
				<span class="punc">，</span>
				<span class="word">或外邪所惱</span>
				<span class="punc">，</span>
				<span class="word">或納受邪法</span>
				<span class="punc">，</span>
				<span class="word">增長惡見</span>
				<span class="punc">。</span>
				<span class="word">是故當先修懺悔法</span>
				<span class="punc">，</span>
				<span class="word">若戒根清淨</span>
				<span class="punc">，</span>
				<span class="word">及宿世重罪得微薄者</span>
				<span class="punc">，</span>
				<span class="word">則離諸障</span>
				<span class="punc">。</span>
				<span class="punc">」</span>
			</div>
			<div x-show="details" class="details mb-3">
				「善男子！若未來世眾生，想求脫離生老病死，開始發心學習禪定無相智慧，應當先觀宿世所造的惡業多少及輕重。如果惡業多且重，不得立即修學禪定智慧，應當先修懺悔之法。為什麼呢？此人宿世習氣惡念深重，今世必然多造惡業，毀戒犯禁造大惡業，如果不懺悔清淨而修禪定智慧，那麼就有很多障礙，不能克服，或心神錯亂，或外邪煩惱危害，或聽受邪法，增長惡知見，所以應當先修懺悔之法，如果戒根清淨，及宿世重罪微薄，那麼就能夠遠離那些業障。」
				<hr/>
			</div>
			<div :class="details ? 'bg-secondary text-white' : ''" class="paragraph">
				<span class="punc">「</span>
				<span class="word">善男子</span>
				<span class="punc">！</span>
				<span class="word">欲修懺悔法者</span>
				<span class="punc">，</span>
				<span class="word">當住靜處</span>
				<span class="punc">，</span>
				<span class="word">隨力所能</span>
				<span class="punc">，</span>
				<span class="word">莊嚴一室</span>
				<span class="punc">。</span>
				<span class="word">內置佛事及安經法</span>
				<span class="punc">，</span>
				<span class="word">懸繒幡蓋</span>
				<span class="punc">，</span>
				<span class="word">求集香華</span>
				<span class="punc">，</span>
				<span class="word">以修供養</span>
				<span class="punc">。</span>
				<span class="word">澡沐身體</span>
				<span class="punc">，</span>
				<span class="word">及洗衣服</span>
				<span class="punc">，</span>
				<span class="word">勿令臭穢</span>
				<span class="punc">。</span>
				<span class="word">於晝日分</span>
				<span class="punc">，</span>
				<span class="word">在此室內</span>
				<span class="punc">，</span>
				<span class="word">三時稱名</span>
				<span class="punc">。</span>
				<span class="word">一心敬禮過去七佛及五十三佛</span>
				<span class="punc">。</span>
				<span class="word">次隨十方面</span>
				<span class="punc">，</span>
				<span class="word">一一總歸</span>
				<span class="punc">，</span>
				<span class="word">擬心遍禮一切諸佛所有色身</span>
				<span class="punc">、</span>
				<span class="word">舍利</span>
				<span class="punc">、</span>
				<span class="word">形像</span>
				<span class="punc">、</span>
				<span class="word">浮圖</span>
				<span class="punc">、</span>
				<span class="word">廟塔</span>
				<span class="punc">、</span>
				<span class="word">一切佛事</span>
				<span class="punc">。</span>
				<span class="word">次復總禮十方三世所有諸佛</span>
				<span class="punc">。</span>
				<span class="word">又當擬心遍禮十方一切法藏</span>
				<span class="punc">，</span>
				<span class="word">次當擬心遍禮十方一切賢聖</span>
				<span class="punc">，</span>
				<span class="word">然後更別稱名禮我地藏菩薩摩訶薩</span>
				<span class="punc">。</span>
				<span class="punc">」</span>
			</div>
			<div x-show="details" class="details mb-3">
				「善男子！如果想修懺悔之法，應當獨處靜處，隨自己的能力，莊嚴裝飾一室，內置佛堂用作佛事，安放經法，懸繒旛蓋，放置香花，以修供養之法。沐浴更衣，不要讓身體臭污穢。白天時分，在此室內，三個時段（晨朝即上午八時，日中為正午十二時，日沒為下午四時）持誦名號，一心禮敬過去七佛及五十三佛，然後禮敬十方諸佛，一一歸命禮敬，誠心禮敬一切諸佛所有的色身，舍利，形象，浮圖，廟塔，一切佛事。然後禮拜十方三世所有諸佛。又應當在心裡模擬遍禮十方一切法藏。然後應當在心裡模擬遍禮十方一切賢聖。然後獨立稱名禮拜我地藏菩薩。」
				<hr/>
			</div>
			<div :class="details ? 'bg-secondary text-white' : ''" class="paragraph">
				<span class="punc">「</span>
				<span class="word">如是禮已</span>
				<span class="punc">，</span>
				<span class="word">應當說所作罪</span>
				<span class="punc">，</span>
				<span class="word">一心仰告</span>
				<span class="punc">：</span>
			</div>
			<div x-show="details" class="details mb-3">
				「這樣禮拜完後，應當說所造作的罪業，一心恭敬禱告：
				<hr/>
			</div>
			<div :class="details ? 'bg-secondary text-white' : ''" class="paragraph">
				<span class="punc">『</span>
				<span class="word">唯願十方諸大慈尊</span>
				<span class="punc">，</span>
				<span class="word">證知護念</span>
				<span class="punc">，</span>
				<span class="word">我今懺悔</span>
				<span class="punc">，</span>
				<span class="word">不復更造</span>
				<span class="punc">。</span>
				<span class="word">願我及一切眾生</span>
				<span class="punc">，</span>
				<span class="word">速得除滅無量劫來十惡</span>
				<span class="punc">、</span>
				<span class="word">四重</span>
				<span class="punc">、</span>
				<span class="word">五逆</span>
				<span class="punc">、</span>
				<span class="word">顛倒</span>
				<span class="punc">、</span>
				<span class="word">謗毀三寶</span>
				<span class="punc">，</span>
				<span class="word">一闡提罪</span>
				<span class="punc">。</span>
				<span class="punc">』</span>
			</div>
			<div x-show="details" class="details mb-3">
				『
				  願十方諸大慈悲尊者，為我證明為我加持。我今懺悔，不再重復造惡業。願我及一切眾生，迅速除滅無量劫以來，
				  十惡罪（殺生、偷盜、邪淫、妄語、兩舌、惡口、綺語、貪欲、瞋恚、邪見）、
				  四重罪（殺生、偷盜、邪淫、妄語）、
				  五逆罪（殺掉母親、殺掉父親、殺掉阿羅漢、破和合僧、出佛身血）、
				  顛倒罪（常顛倒，無常認為有常；樂顛倒，以苦當作樂；淨顛倒，以不淨為淨；我顛倒，無我認為有我）、
				  謗毀三寶罪、
				  一闡提罪（破戒、作五逆罪；不信佛法、因果；誹謗佛法；斷滅善根、不作善法；破壞僧團綱紀）。
				』
				<hr/>
			</div>
			<div :class="details ? 'bg-secondary text-white' : ''" class="paragraph">
				<span class="word">復應思惟</span>
				<span class="punc">：</span>
				<span class="punc">『</span>
				<span class="word">如是罪性</span>
				<span class="punc">，</span>
				<span class="word">但從虛妄顛倒心起</span>
				<span class="punc">，</span>
				<span class="word">無有定實而可得者</span>
				<span class="punc">，</span>
				<span class="word">本唯空寂</span>
				<span class="punc">。</span>
				<span class="word">願我及一切眾生速達心本</span>
				<span class="punc">，</span>
				<span class="word">永滅罪根</span>
				<span class="punc">。</span>
				<span class="punc">』</span>
			</div>
			<div x-show="details" class="details mb-3">
				另外應當思維：『這樣犯罪的行為，皆從虛妄的顛倒妄想而起，並無實在的本質，一切本來只有空寂。願我及一切眾生，皆迅速了悟心的本質，永遠滅除罪惡根本。』
				<hr/>
			</div>
			<div :class="details ? 'bg-secondary text-white' : ''" class="paragraph">
				<span class="word">次應復發勸請之願</span>
				<span class="punc">：</span>
				<span class="punc">『</span>
				<span class="word">願令十方一切菩薩</span>
				<span class="punc">，</span>
				<span class="word">未成正覺者</span>
				<span class="punc">，</span>
				<span class="word">願速成正覺</span>
				<span class="punc">。</span>
				<span class="word">若已成正覺者</span>
				<span class="punc">，</span>
				<span class="word">願常住在世</span>
				<span class="punc">，</span>
				<span class="word">轉正法輪</span>
				<span class="punc">，</span>
				<span class="word">不入涅槃</span>
				<span class="punc">。</span>
				<span class="punc">』</span>
			</div>
			<div x-show="details" class="details mb-3">
				再次應該再發勸請之願：『願十方世界一切菩薩未能成真正覺悟者，皆速成真正覺悟者。如果已成真正覺悟的，願他們常住在世，宏揚正法，不入涅盤。』
				<hr/>
			</div>
			<div :class="details ? 'bg-secondary text-white' : ''" class="paragraph">
				<span class="word">次當復發隨喜之願</span>
				<span class="punc">：</span>
				<span class="punc">『</span>
				<span class="word">願我及一切眾生</span>
				<span class="punc">，</span>
				<span class="word">畢竟永捨嫉妬之心</span>
				<span class="punc">，</span>
				<span class="word">於三世中一切剎土</span>
				<span class="punc">，</span>
				<span class="word">所有修學一切功德及成就者</span>
				<span class="punc">，</span>
				<span class="word">悉皆隨喜</span>
				<span class="punc">。</span>
				<span class="punc">』</span>
			</div>
			<div x-show="details" class="details mb-3">
				再次應當發隨喜之願：『願我及一切眾生，徹底的永遠捨棄嫉妒之心，於過去現在未來一切剎土，所有修學一切功德以及成就者，我皆隨喜。』
				<hr/>
			</div>
			<div :class="details ? 'bg-secondary text-white' : ''" class="paragraph">
				<span class="word">次當復發迴向之願</span>
				<span class="punc">：</span>
				<span class="punc">『</span>
				<span class="word">願我所修一切功德</span>
				<span class="punc">，</span>
				<span class="word">資益一切諸眾生等</span>
				<span class="punc">，</span>
				<span class="word">同趣佛智</span>
				<span class="punc">，</span>
				<span class="word">至涅槃城</span>
				<span class="punc">。</span>
				<span class="punc">』</span>
				<span class="word">如是發迴向願已</span>
				<span class="punc">，</span>
				<span class="word">復往餘靜室</span>
				<span class="punc">，</span>
				<span class="word">端坐一心</span>
				<span class="punc">，</span>
				<span class="word">若稱誦</span>
				<span class="punc">，</span>
				<span class="word">若默念我之名號</span>
				<span class="punc">。</span>
				<span class="word">當減省睡眠</span>
				<span class="punc">，</span>
				<span class="word">若惛蓋多者</span>
				<span class="punc">，</span>
				<span class="word">應於道場室中旋遶誦念</span>
				<span class="punc">。</span>
				<span class="punc">」</span>
			</div>
			<div x-show="details" class="details mb-3">
				然後應當再發回向之願：『願我所修一切功德，皆回向利益一切眾生，一同樂修佛的智慧，至涅盤聖城。』這樣發回向願後，再在靜室，端坐靜心，或稱誦，或默念地藏菩薩名號。應當減少睡眠，如果昏沉業障太重，應該在道場室中繞行誦念。」
				<hr/>
			</div>
			<div :class="details ? 'bg-secondary text-white' : ''" class="paragraph">
				<span class="punc">「</span>
				<span class="word">次至夜分時</span>
				<span class="punc">，</span>
				<span class="word">若有燈燭光明事者</span>
				<span class="punc">，</span>
				<span class="word">亦應三時恭敬供養</span>
				<span class="punc">，</span>
				<span class="word">悔過發願</span>
				<span class="punc">。</span>
				<span class="word">若不能辦光明事者</span>
				<span class="punc">，</span>
				<span class="word">應當直在餘靜室中</span>
				<span class="punc">，</span>
				<span class="word">一心誦念</span>
				<span class="punc">。</span>
				<span class="word">日日如是行懺悔法</span>
				<span class="punc">，</span>
				<span class="word">勿令懈廢</span>
				<span class="punc">。</span>
				<span class="word">若人宿世遠有善基</span>
				<span class="punc">，</span>
				<span class="word">暫時遇惡因緣而造惡法</span>
				<span class="punc">，</span>
				<span class="word">罪障輕微</span>
				<span class="punc">，</span>
				<span class="word">其心猛利</span>
				<span class="punc">，</span>
				<span class="word">意力強者</span>
				<span class="punc">，</span>
				<span class="word">經七日後</span>
				<span class="punc">，</span>
				<span class="word">即得清淨</span>
				<span class="punc">，</span>
				<span class="word">除諸障礙</span>
				<span class="punc">。</span>
				<span class="word">如是眾生等</span>
				<span class="punc">，</span>
				<span class="word">業有厚薄</span>
				<span class="punc">，</span>
				<span class="word">諸根利鈍</span>
				<span class="punc">，</span>
				<span class="word">差別無量</span>
				<span class="punc">。</span>
				<span class="word">或經二七日後而得清淨</span>
				<span class="punc">；</span>
				<span class="word">或經三七日</span>
				<span class="punc">，</span>
				<span class="word">乃至或經七七日後而得清淨</span>
				<span class="punc">。</span>
				<span class="word">若過去</span>
				<span class="punc">、</span>
				<span class="word">現在俱有增上種種重罪者</span>
				<span class="punc">，</span>
				<span class="word">或經百日而得清淨</span>
				<span class="punc">；</span>
				<span class="word">或經二百日</span>
				<span class="punc">，</span>
				<span class="word">乃至或經千日而得清淨</span>
				<span class="punc">。</span>
				<span class="word">若極鈍根</span>
				<span class="punc">，</span>
				<span class="word">罪障最重者</span>
				<span class="punc">，</span>
				<span class="word">但當能發勇猛之心</span>
				<span class="punc">，</span>
				<span class="word">不顧惜身命想</span>
				<span class="punc">，</span>
				<span class="word">常勤稱念</span>
				<span class="punc">，</span>
				<span class="word">晝夜旋遶</span>
				<span class="punc">，</span>
				<span class="word">減省睡眠</span>
				<span class="punc">，</span>
				<span class="word">禮懺發願</span>
				<span class="punc">，</span>
				<span class="word">樂修供養</span>
				<span class="punc">，</span>
				<span class="word">不懈不廢</span>
				<span class="punc">，</span>
				<span class="word">乃至失命</span>
				<span class="punc">，</span>
				<span class="word">要不休退</span>
				<span class="punc">。</span>
				<span class="word">如是精進</span>
				<span class="punc">，</span>
				<span class="word">於千日中必獲清淨</span>
				<span class="punc">。</span>
				<span class="punc">」</span>
			</div>
			<div x-show="details" class="details mb-3">
				「然後，至半夜時，如果有明燈燭光等，應該三時（通宵）恭敬供養，懺悔過失發願。如果不能置辦明燈燭光等，應當在靜室中，一心誦念，每日這樣修行懺悔之法，不要懈怠荒廢。如果是宿世很早就有善業根基，暫時遇到惡緣而造惡業，罪障輕微，用心猛利，意志堅強，經七天後，就能得清淨，消除各種業障。這樣的眾生，業障有厚有薄，根性有利有鈍，差別很大。有的需要兩個七得到清淨，有的需要三個七，乃至需要七個七後才能得清淨。如果過去現在，都有累加的種種重罪，需要經過一百日才能清淨，或需兩百日乃至千日得清淨。如果根性過於愚鈍，罪障最重，應當發勇敢猛利的願心，不顧慮身家性命，常常勤奮念誦，晝夜繞行，減少睡眠，禮敬懺悔發願，樂意修供養之法，不懈怠荒廢，甚至失去性命也不休息退卻，這樣精進修行，千日中必獲得清淨之業。」
				<hr/>
			</div>
			<div :class="details ? 'bg-secondary text-white' : ''" class="paragraph">
				<span class="punc">「</span>
				<span class="word">善男子</span>
				<span class="punc">！</span>
				<span class="word">若欲知得清淨相者</span>
				<span class="punc">，</span>
				<span class="word">從始修行過七日後</span>
				<span class="punc">，</span>
				<span class="word">應當日日於晨朝旦</span>
				<span class="punc">，</span>
				<span class="word">以第二輪相具安手中</span>
				<span class="punc">，</span>
				<span class="word">頻三擲之</span>
				<span class="punc">。</span>
				<span class="word">若身口意皆純善者</span>
				<span class="punc">，</span>
				<span class="word">名得清淨</span>
				<span class="punc">。</span>
				<span class="word">如是未來諸眾生等</span>
				<span class="punc">，</span>
				<span class="word">能修行懺悔者</span>
				<span class="punc">，</span>
				<span class="word">從先過去久遠以來</span>
				<span class="punc">，</span>
				<span class="word">於佛法中各曾習善</span>
				<span class="punc">，</span>
				<span class="word">隨其所修何等功德</span>
				<span class="punc">，</span>
				<span class="word">業有厚薄種種別異</span>
				<span class="punc">。</span>
				<span class="word">是故彼等得清淨時</span>
				<span class="punc">，</span>
				<span class="word">相亦不同</span>
				<span class="punc">。</span>
				<span class="word">或有眾生得三業純善時</span>
				<span class="punc">，</span>
				<span class="word">不即更得諸餘好相</span>
				<span class="punc">。</span>
				<span class="word">或有眾生得三業善相時</span>
				<span class="punc">，</span>
				<span class="word">於一日一夜中</span>
				<span class="punc">，</span>
				<span class="word">復見光明遍滿其室</span>
				<span class="punc">。</span>
				<span class="word">或聞殊特異好香氣</span>
				<span class="punc">，</span>
				<span class="word">身意快然</span>
				<span class="punc">。</span>
				<span class="word">或作善夢</span>
				<span class="punc">，</span>
				<span class="word">夢中見佛色身來為作證</span>
				<span class="punc">，</span>
				<span class="word">手摩其頭</span>
				<span class="punc">，</span>
				<span class="word">歎言</span>
				<span class="punc">：</span>
				<span class="punc">『</span>
				<span class="word">善哉</span>
				<span class="punc">！</span>
				<span class="word">汝今清淨</span>
				<span class="punc">，</span>
				<span class="word">我來證汝</span>
				<span class="punc">。</span>
				<span class="punc">』</span>
				<span class="word">或夢見菩薩身來為作證</span>
				<span class="punc">，</span>
				<span class="word">或夢見佛形像放光而為作證</span>
				<span class="punc">。</span>
				<span class="word">若人未得三業善相</span>
				<span class="punc">，</span>
				<span class="word">但先見聞如此諸事者</span>
				<span class="punc">，</span>
				<span class="word">則為虛妄誑惑詐偽</span>
				<span class="punc">，</span>
				<span class="word">非善相也</span>
				<span class="punc">。</span>
				<span class="word">若人曾有出世善基</span>
				<span class="punc">，</span>
				<span class="word">攝心猛利者</span>
				<span class="punc">，</span>
				<span class="word">我於爾時</span>
				<span class="punc">，</span>
				<span class="word">隨所應度而為現身</span>
				<span class="punc">。</span>
				<span class="word">放大慈光</span>
				<span class="punc">，</span>
				<span class="word">令彼安隱</span>
				<span class="punc">，</span>
				<span class="word">離諸疑怖</span>
				<span class="punc">。</span>
				<span class="word">或示神通種種變化</span>
				<span class="punc">，</span>
				<span class="word">或復令彼自憶宿命所逕之事</span>
				<span class="punc">、</span>
				<span class="word">所作善惡</span>
				<span class="punc">。</span>
				<span class="word">或復隨其所樂</span>
				<span class="punc">，</span>
				<span class="word">為說種種深要之法</span>
				<span class="punc">。</span>
				<span class="word">彼人即時於所向乘</span>
				<span class="punc">，</span>
				<span class="word">得決定信</span>
				<span class="punc">，</span>
				<span class="word">或漸證獲沙門道果</span>
				<span class="punc">。</span>
				<span class="punc">」</span>
			</div>
			<div x-show="details" class="details mb-3">
				「善男子，如果想的到清淨業相，從開始修行，經過七天後，應當天天在清晨時，占察第二輪相，一起放置手中，連續擲三次，如果身口意都是純善，那麼就得清淨了。如果未來眾生，能修行此懺悔之法，從過去久遠以來，在佛法中，已經修善了，所修的功德之業會有厚薄，有種種差異，所以他得清淨之業時，相也不會相同。有的眾生三業純善時，不會立即得到其他善相，有的眾生三業善相相等，會一日一夜中，光明遍滿房間，或者聞到特殊上好香氣，快樂安然，或者做善夢，夢見佛的色身相，來為他作證，手摩其頭，贊歎說：『很好啊，你今天三業清淨，我來為你作證。』或者夢見菩薩來為他作證，或者夢見佛形象放大光明為他作證。如果三業沒有得到善相，卻經歷前面的那些事，那麼就是虛假的荒謬的欺詐偽造的，不是善相。如果其人曾有出世善根，攝心勇猛精進，我在那時，應化顯身，放大慈悲光明，讓他安然寧靜，遠離各種懷疑恐懼。或者展現種種變化神通，或者讓他自己回憶起宿命，過去生所經歷的事情，所造的善業惡業，或者隨他所喜歡，為他說種種深邃法門，讓他立即趨向此法，得到堅定淨信，或者漸漸證得沙門道果。」
				<hr/>
			</div>
			<div :class="details ? 'bg-secondary text-white' : ''" class="paragraph">
				<span class="punc">「</span>
				<span class="word">復次</span>
				<span class="punc">，</span>
				<span class="word">彼諸眾生若雖未能見我化身轉變說法</span>
				<span class="punc">，</span>
				<span class="word">但當學至心</span>
				<span class="punc">，</span>
				<span class="word">使身口意得清淨相已</span>
				<span class="punc">，</span>
				<span class="word">我亦護念</span>
				<span class="punc">，</span>
				<span class="word">令彼眾生速得消滅種種障礙</span>
				<span class="punc">。</span>
				<span class="word">天魔波旬不來破壞</span>
				<span class="punc">，</span>
				<span class="word">乃至九十五種外道邪師</span>
				<span class="punc">、</span>
				<span class="word">一切鬼神</span>
				<span class="punc">，</span>
				<span class="word">亦不來亂</span>
				<span class="punc">。</span>
				<span class="word">所有五蓋展轉輕微</span>
				<span class="punc">，</span>
				<span class="word">堪能修習諸禪智慧</span>
				<span class="punc">。</span>
				<span class="punc">」</span>
			</div>
			<div x-show="details" class="details mb-3">
				「再者，這些眾生，如果沒有能見我化身為其說法，那麼應當學習至誠心，使身口意得到清淨之相，我也會加持他，讓他迅速消滅種種業障，天魔波旬不會來破壞，乃至九十五種外道邪師，一切鬼神，也不會來擾亂，所有的五蓋（貪欲蓋、瞋恚蓋、睡眠蓋、掉悔蓋、懷疑蓋）煩惱，逐漸轉為輕微，這樣才能夠修習各種禪定智慧。」
				<hr/>
			</div>
			<div :class="details ? 'bg-secondary text-white' : ''" class="paragraph">
				<span class="punc">「</span>
				<span class="word">復次</span>
				<span class="punc">，</span>
				<span class="word">若未來世諸眾生等</span>
				<span class="punc">，</span>
				<span class="word">雖不為求禪定</span>
				<span class="punc">、</span>
				<span class="word">智慧</span>
				<span class="punc">，</span>
				<span class="word">出要之道</span>
				<span class="punc">，</span>
				<span class="word">但遭種種眾厄</span>
				<span class="punc">，</span>
				<span class="word">貧窮困苦</span>
				<span class="punc">，</span>
				<span class="word">憂惱逼迫者</span>
				<span class="punc">，</span>
				<span class="word">亦應恭敬禮拜供養</span>
				<span class="punc">，</span>
				<span class="word">悔所作惡</span>
				<span class="punc">，</span>
				<span class="word">恒常發願</span>
				<span class="punc">，</span>
				<span class="word">於一切時一切處</span>
				<span class="punc">，</span>
				<span class="word">勤心稱誦我之名號</span>
				<span class="punc">，</span>
				<span class="word">令其至誠</span>
				<span class="punc">。</span>
				<span class="word">亦當速脫種種衰惱</span>
				<span class="punc">，</span>
				<span class="word">捨此命已</span>
				<span class="punc">，</span>
				<span class="word">生於善處</span>
				<span class="punc">。</span>
				<span class="punc">」</span>
			</div>
			<div x-show="details" class="details mb-3">
				「再者，如果未來世的眾生，雖然不是為了求得禪定智慧，但卻遭受種種苦厄，貧窮困苦，憂愁煩惱逼迫，也應該恭敬禮拜供養一切佛法僧寶及地藏菩薩，懺悔所造惡業，經常發菩提願，隨時隨地，至誠心勤奮持誦地藏菩薩名號，以至誠心，也會迅脫離種種衰敗煩惱，來世投生善道。」
				<hr/>
			</div>
			<div :class="details ? 'bg-secondary text-white' : ''" class="paragraph">
				<span class="punc">「</span>
				<span class="word">復次</span>
				<span class="punc">，</span>
				<span class="word">未來之世</span>
				<span class="punc">，</span>
				<span class="word">若在家</span>
				<span class="punc">、</span>
				<span class="word">若出家諸眾生等</span>
				<span class="punc">，</span>
				<span class="word">欲求受清淨妙戒</span>
				<span class="punc">，</span>
				<span class="word">而先已作增上重罪</span>
				<span class="punc">，</span>
				<span class="word">不得受者</span>
				<span class="punc">，</span>
				<span class="word">亦當如上修懺悔法</span>
				<span class="punc">，</span>
				<span class="word">令其至心</span>
				<span class="punc">，</span>
				<span class="word">得身口意善相已</span>
				<span class="punc">，</span>
				<span class="word">即應可受</span>
				<span class="punc">。</span>
				<span class="word">若彼眾生欲習摩訶衍道</span>
				<span class="punc">，</span>
				<span class="word">求受菩薩根本重戒</span>
				<span class="punc">，</span>
				<span class="word">及願總受在家</span>
				<span class="punc">、</span>
				<span class="word">出家一切禁戒——所謂</span>
				<span class="punc">：</span>
				<span class="word">攝律儀戒</span>
				<span class="punc">、</span>
				<span class="word">攝善法戒</span>
				<span class="punc">、</span>
				<span class="word">攝化眾生戒——而不能得善好戒師</span>
				<span class="punc">，</span>
				<span class="word">廣解菩薩法藏</span>
				<span class="punc">。</span>
				<span class="word">先修行者</span>
				<span class="punc">，</span>
				<span class="word">應當至心於道場內</span>
				<span class="punc">，</span>
				<span class="word">恭敬供養</span>
				<span class="punc">，</span>
				<span class="word">仰告十方諸佛菩薩</span>
				<span class="punc">，</span>
				<span class="word">請為師證</span>
				<span class="punc">。</span>
				<span class="word">一心立願</span>
				<span class="punc">，</span>
				<span class="word">稱辯戒相</span>
				<span class="punc">，</span>
				<span class="word">先說十根本重戒</span>
				<span class="punc">，</span>
				<span class="word">次當總舉三種戒聚</span>
				<span class="punc">，</span>
				<span class="word">自誓而受</span>
				<span class="punc">，</span>
				<span class="word">此亦得戒</span>
				<span class="punc">。</span>
				<span class="punc">」</span>
			</div>
			<div x-show="details" class="details mb-3">
				「再者，未來世，在家，出家，這些眾生，如果想求得清淨微妙的戒律，但先世已造作了重罪不能受戒，也應當像上面所說修懺悔之法，以至誠心修得身口意三業清淨善相，就可以受戒了。如果這個眾生想學習大乘佛法，尋求受持菩薩的根本重戒，願意總體接受在家出家一切禁戒，即攝律儀戒、攝善法戒，攝化眾生戒，但得不到好的戒師，能夠幫助廣泛解釋菩薩法藏的先修行者，應當以至誠心在道場內，恭敬供養，敬仰禱告十方諸佛菩薩，請作為我師為我證明，專心發願，口誦戒律，先說十個根本重戒，然後總體列舉三種戒，自行發誓受戒，這樣也能夠得戒。」
				<hr/>
			</div>
			<div :class="details ? 'bg-secondary text-white' : ''" class="paragraph">
				<span class="punc">「</span>
				<span class="word">復次</span>
				<span class="punc">，</span>
				<span class="word">未來世諸眾生等</span>
				<span class="punc">，</span>
				<span class="word">欲求出家</span>
				<span class="punc">，</span>
				<span class="word">及已出家</span>
				<span class="punc">，</span>
				<span class="word">若不能得善好戒師</span>
				<span class="punc">，</span>
				<span class="word">及清淨僧眾</span>
				<span class="punc">，</span>
				<span class="word">其心疑惑</span>
				<span class="punc">，</span>
				<span class="word">不得如法受於禁戒者</span>
				<span class="punc">，</span>
				<span class="word">但能學發無上道心</span>
				<span class="punc">，</span>
				<span class="word">亦令身口意得清淨已</span>
				<span class="punc">。</span>
				<span class="word">其未出家者</span>
				<span class="punc">，</span>
				<span class="word">應當剃髮</span>
				<span class="punc">，</span>
				<span class="word">被服法衣</span>
				<span class="punc">，</span>
				<span class="word">如上立願</span>
				<span class="punc">，</span>
				<span class="word">自誓而受菩薩律儀三種戒聚</span>
				<span class="punc">，</span>
				<span class="word">則名具獲波羅提木叉出家之戒</span>
				<span class="punc">，</span>
				<span class="word">名為比丘</span>
				<span class="punc">、</span>
				<span class="word">比丘尼</span>
				<span class="punc">。</span>
				<span class="word">即應推求聲聞律藏</span>
				<span class="punc">，</span>
				<span class="word">及菩薩所習摩德勒伽藏</span>
				<span class="punc">，</span>
				<span class="word">受持讀誦</span>
				<span class="punc">，</span>
				<span class="word">觀察修行</span>
				<span class="punc">。</span>
				<span class="word">若雖出家</span>
				<span class="punc">，</span>
				<span class="word">而其年未滿二十者</span>
				<span class="punc">，</span>
				<span class="word">應當先誓願受十根本戒</span>
				<span class="punc">，</span>
				<span class="word">及受沙彌</span>
				<span class="punc">、</span>
				<span class="word">沙彌尼所有別戒</span>
				<span class="punc">。</span>
				<span class="word">既受戒已</span>
				<span class="punc">，</span>
				<span class="word">亦名沙彌</span>
				<span class="punc">、</span>
				<span class="word">沙彌尼</span>
				<span class="punc">。</span>
				<span class="word">即應親近供養給侍先舊出家</span>
				<span class="punc">，</span>
				<span class="word">學大乘心</span>
				<span class="punc">，</span>
				<span class="word">具受戒者</span>
				<span class="punc">，</span>
				<span class="word">求為依止之師</span>
				<span class="punc">，</span>
				<span class="word">請問教戒</span>
				<span class="punc">，</span>
				<span class="word">修行威儀</span>
				<span class="punc">，</span>
				<span class="word">如沙彌</span>
				<span class="punc">、</span>
				<span class="word">沙彌尼法</span>
				<span class="punc">。</span>
				<span class="word">若不能值如是之人</span>
				<span class="punc">，</span>
				<span class="word">唯當親近菩薩所修摩德勒伽藏</span>
				<span class="punc">，</span>
				<span class="word">讀誦思惟</span>
				<span class="punc">，</span>
				<span class="word">觀察修行</span>
				<span class="punc">，</span>
				<span class="word">慇懃供養佛法僧寶</span>
				<span class="punc">。</span>
				<span class="word">若沙彌尼年已十八者</span>
				<span class="punc">，</span>
				<span class="word">亦當自誓受毘尼藏中式叉摩那六戒之法</span>
				<span class="punc">，</span>
				<span class="word">及遍學比丘尼一切戒聚</span>
				<span class="punc">。</span>
				<span class="word">其年若滿二十時</span>
				<span class="punc">，</span>
				<span class="word">乃可如上總受菩薩三種戒聚</span>
				<span class="punc">。</span>
				<span class="word">然後得名比丘尼</span>
				<span class="punc">。</span>
				<span class="word">若彼眾生</span>
				<span class="punc">，</span>
				<span class="word">雖學懺悔</span>
				<span class="punc">，</span>
				<span class="word">不能至心</span>
				<span class="punc">，</span>
				<span class="word">不獲善相者</span>
				<span class="punc">，</span>
				<span class="word">設作受相</span>
				<span class="punc">，</span>
				<span class="word">不名得戒</span>
				<span class="punc">。</span>
				<span class="punc">」</span>
			</div>
			<div x-show="details" class="details mb-3">
				「再者，未來世眾生，如果想出家或已經出家，如果沒有好的受戒之師和清淨的僧眾，心裡疑惑不能如法受持禁戒，但能學發無上菩提道心，也能讓身口意得清淨，如果未出家，應當剃發，穿上法衣，如同上面所說發願，自行發誓受菩薩律儀三種戒聚，即是徹底解脫戒。出家之戒，即比丘，比丘尼戒，應研究聲聞律藏，及菩薩所修習摩德勒伽藏，受持讀誦，觀察修行。如果雖然出家，但年齡未滿二十的，應當先發誓，願意接受十根本戒，及受沙彌、沙彌尼所有別戒。受完戒後，則名為沙彌、沙彌尼，即應當親近供養伺奉早先出家學大乘心願具足受戒者，請求依止他為師，請教教戒，修行威儀，如沙彌、沙彌尼戒法。若不能遇到這樣的人，應當親修菩薩所修摩德勒伽藏，讀誦思考，觀察修行，殷勤供養佛法僧三寶。如果沙彌尼年紀已過十八，也應當自行發誓受毗尼藏中式叉摩那六戒之法，及遍學比丘尼一切戒律。年滿二十時，才可以如前面持受菩薩三種戒律，然後才叫比丘尼。如果這位眾生，雖然學懺悔之法，不能以至誠心，無法獲得善相，即使有受戒想法，也不能稱作得戒。」
				<hr/>
			</div>
			<div :class="details ? 'bg-secondary text-white' : ''" class="paragraph">
				<span class="word">爾時</span>
				<span class="punc">，</span>
				<span class="word">堅淨信菩薩摩訶薩問地藏菩薩摩訶薩言</span>
				<span class="punc">：</span>
				<span class="punc">「</span>
				<span class="word">所說至心者</span>
				<span class="punc">，</span>
				<span class="word">差別有幾種</span>
				<span class="punc">？</span>
				<span class="word">何等至心</span>
				<span class="punc">，</span>
				<span class="word">能獲善相</span>
				<span class="punc">？</span>
				<span class="punc">」</span>
			</div>
			<div x-show="details" class="details mb-3">
				這時，堅淨信大菩薩問地藏大菩薩：「所說的至誠心，有哪幾種差別呢？什麼樣的至誠心，能夠獲得三業清淨的善相呢？」
				<hr/>
			</div>
			<div :class="details ? 'bg-secondary text-white' : ''" class="paragraph">
				<span class="word">地藏菩薩摩訶薩言</span>
				<span class="punc">：</span>
				<span class="punc">「</span>
				<span class="word">善男子</span>
				<span class="punc">！</span>
				<span class="word">我所說至心者</span>
				<span class="punc">，</span>
				<span class="word">略有二種</span>
				<span class="punc">。</span>
				<span class="word">何等為二</span>
				<span class="punc">？</span>
				<blockquote>
					<span class="word">一者</span>
					<span class="punc">，</span>
					<span class="word">初始學習求願至心</span>
					<span class="punc">。</span><br/>
					<span class="word">二者</span>
					<span class="punc">，</span>
					<span class="word">攝意專精</span>
					<span class="punc">，</span>
					<span class="word">成就勇猛</span>
					<span class="punc">，</span>
					<span class="word">相應至心</span>
					<span class="punc">。</span>
				</blockquote>
				<span class="word">得此第二至心者</span>
				<span class="punc">，</span>
				<span class="word">能獲善相</span>
				<span class="punc">。</span>
				<span class="word">此第二至心</span>
				<span class="punc">，</span>
				<span class="word">復有下中上三種差別</span>
				<span class="punc">，</span>
				<span class="word">何等為三</span>
				<span class="punc">？</span>
				<blockquote>
					<span class="word">一者一心</span>
					<span class="punc">，</span>
					<span class="word">所謂係想不亂</span>
					<span class="punc">，</span>
					<span class="word">心住了了</span>
					<span class="punc">。</span><br/>
					<span class="word">二者勇猛心</span>
					<span class="punc">，</span>
					<span class="word">所謂專求不懈</span>
					<span class="punc">，</span>
					<span class="word">不顧身命</span>
					<span class="punc">。</span><br/>
					<span class="word">三者深心</span>
					<span class="punc">，</span>
					<span class="word">所謂與法相應</span>
					<span class="punc">，</span>
					<span class="word">究竟不退</span>
					<span class="punc">。</span>
				</blockquote>
				<span class="word">若人修習此懺悔法</span>
				<span class="punc">，</span>
				<span class="word">乃至不得下至心者</span>
				<span class="punc">，</span>
				<span class="word">終不能獲清淨善相</span>
				<span class="punc">。</span>
				<span class="word">是名說占第二輪法</span>
				<span class="punc">。</span>
			</div>
			<div x-show="details" class="details mb-3">
				地藏大菩薩說：「善男子，我所說的至誠心，大略有兩種，什麼樣的兩種呢？
				<blockquote>
					一、 初發心的至誠心。<br/>
					二、 攝心專一精進，成就勇猛，能相應的至誠心。
				</blockquote>
				得到第二種至誠心的人，能夠獲得清淨善業相。第二種至誠心，也有上中下三種差別，是哪三種呢？
				<blockquote>
					一、 一心即心繫一處不亂，了了分明。<br/>
					二、 勇猛心，即專心努力不懈，不顧惜身體性命。<br/>
					三、 深心，即與法相應，徹底不退轉。
				</blockquote>
				如果有人修習此懺悔之法，乃至最下等的至誠心也做不到的話，終究不能獲得清淨善相。這個就是占察第二輪相方法了。」
				<hr/>
			</div>
			<div :class="details ? 'bg-secondary text-white' : ''" class="paragraph">
				<span class="punc">「</span>
				<span class="word">善男子</span>
				<span class="punc">！</span>
				<span class="word">若欲占察三世中受報差別者</span>
				<span class="punc">，</span>
				<span class="word">當復刻木為六輪</span>
				<span class="punc">。</span>
				<span class="word">於此六輪</span>
				<span class="punc">，</span>
				<span class="word">以一二三</span>
				<span class="punc">、</span>
				<span class="word">四五六</span>
				<span class="punc">、</span>
				<span class="word">七八九</span>
				<span class="punc">、</span>
				<span class="word">十十一十二</span>
				<span class="punc">、</span>
				<span class="word">十三十四十五</span>
				<span class="punc">、</span>
				<span class="word">十六十七十八等數</span>
				<span class="punc">，</span>
				<span class="word">書字記之</span>
				<span class="punc">。</span>
				<span class="word">一數主一面</span>
				<span class="punc">，</span>
				<span class="word">各書三面</span>
				<span class="punc">，</span>
				<span class="word">令數次第不錯不亂</span>
				<span class="punc">。</span>
				<span class="word">當知如此諸數</span>
				<span class="punc">，</span>
				<span class="word">皆從一數而起</span>
				<span class="punc">，</span>
				<span class="word">以一為本</span>
				<span class="punc">。</span>
				<span class="word">如是數相者</span>
				<span class="punc">，</span>
				<span class="word">顯示一切眾生六根之聚</span>
				<span class="punc">，</span>
				<span class="word">皆從如來藏自性清淨心一實境界而起</span>
				<span class="punc">，</span>
				<span class="word">依一實境界以之為本</span>
				<span class="punc">。</span>
				<span class="word">所謂依一實境界故</span>
				<span class="punc">，</span>
				<span class="word">有彼無明</span>
				<span class="punc">。</span>
				<span class="word">不了一法界</span>
				<span class="punc">，</span>
				<span class="word">謬念思惟</span>
				<span class="punc">，</span>
				<span class="word">現妄境界</span>
				<span class="punc">，</span>
				<span class="word">分別取著</span>
				<span class="punc">，</span>
				<span class="word">集業因緣</span>
				<span class="punc">，</span>
				<span class="word">生眼</span>
				<span class="punc">、</span>
				<span class="word">耳</span>
				<span class="punc">、</span>
				<span class="word">鼻</span>
				<span class="punc">、</span>
				<span class="word">舌</span>
				<span class="punc">、</span>
				<span class="word">身</span>
				<span class="punc">、</span>
				<span class="word">意等六根</span>
				<span class="punc">。</span>
				<span class="word">以依內六根故</span>
				<span class="punc">，</span>
				<span class="word">對外色</span>
				<span class="punc">、</span>
				<span class="word">聲</span>
				<span class="punc">、</span>
				<span class="word">香</span>
				<span class="punc">、</span>
				<span class="word">味</span>
				<span class="punc">、</span>
				<span class="word">觸</span>
				<span class="punc">、</span>
				<span class="word">法等六塵</span>
				<span class="punc">，</span>
				<span class="word">起眼</span>
				<span class="punc">、</span>
				<span class="word">耳</span>
				<span class="punc">、</span>
				<span class="word">鼻</span>
				<span class="punc">、</span>
				<span class="word">舌</span>
				<span class="punc">、</span>
				<span class="word">身</span>
				<span class="punc">、</span>
				<span class="word">意等六識</span>
				<span class="punc">。</span>
				<span class="word">以依六識故</span>
				<span class="punc">，</span>
				<span class="word">於色</span>
				<span class="punc">、</span>
				<span class="word">聲</span>
				<span class="punc">、</span>
				<span class="word">香</span>
				<span class="punc">、</span>
				<span class="word">味</span>
				<span class="punc">、</span>
				<span class="word">觸</span>
				<span class="punc">、</span>
				<span class="word">法中</span>
				<span class="punc">，</span>
				<span class="word">起違想</span>
				<span class="punc">、</span>
				<span class="word">順想</span>
				<span class="punc">、</span>
				<span class="word">非違非順等想</span>
				<span class="punc">，</span>
				<span class="word">生十八種受</span>
				<span class="punc">。</span>
				<span class="word">若未來世佛諸弟子</span>
				<span class="punc">，</span>
				<span class="word">於三世中所受果報</span>
				<span class="punc">，</span>
				<span class="word">欲決疑意者</span>
				<span class="punc">，</span>
				<span class="word">應當三擲此第三輪相</span>
				<span class="punc">，</span>
				<span class="word">占計合數</span>
				<span class="punc">，</span>
				<span class="word">依數觀之</span>
				<span class="punc">，</span>
				<span class="word">以定善惡</span>
				<span class="punc">。</span>
				<span class="punc">」</span>
			</div>
			<div x-show="details" class="details mb-3">
				「善男子，如果想占察過去現在未來三世所受的果報差異，應當再刻六個木輪，這六個木輪，用一二三、四五六、七八九、十十一十二、十三十四十五、十六十七十八數字標記，一個寫在一個面上，各寫三面，數字的次序不能顛倒。應當知道這樣的這些數字，都從一個數字開始，以一為根本，這樣的數字之相，顯示一切眾生的六根相聚，都是從如來藏自性清淨心的一體實境而生起，依照一體實境為之根本。所謂依照一體實境的緣故，有這類無明不能了知一真法界，妄想思維，就顯現妄想的境界，分別執取，積累業力的因緣，生出了眼耳鼻舌身意等六根，以依靠內在的六根緣故，對外境的色聲香味觸法等六塵，生起了眼耳鼻舌身意等六種識，以這六種識的緣故，對外色聲香味觸法六塵生起違背或是順應的念頭，不違背不順應等念頭，衍生十八種感受。如果未來世佛弟子，對於過去現在未來所遭受的果報，想對心中的疑慮作出判斷，應當投擲三次第三輪相，將所現數字相加求和，依據求得之和的數字來觀察，來判斷是善是惡。」
				<hr/>
			</div>
			<div :class="details ? 'bg-secondary text-white' : ''" class="paragraph">
				<span class="punc">「</span>
				<span class="word">如是所觀三世果報善惡之相</span>
				<span class="punc">，</span>
				<span class="word">有一百八十九種</span>
				<span class="punc">。</span>
				<span class="word">何等為一百八十九種</span>
				<span class="punc">？</span>
				<blockquote>
					<span class="word">一者</span>
					<span class="punc">，</span>
					<span class="word">求上乘得不退</span>
					<span class="punc">。</span><br/>
					<span class="word">二者</span>
					<span class="punc">，</span>
					<span class="word">所求果現當證</span>
					<span class="punc">。</span><br/>
					<span class="word">三者</span>
					<span class="punc">，</span>
					<span class="word">求中乘得不退</span>
					<span class="punc">。</span><br/>
					<span class="word">四者</span>
					<span class="punc">，</span>
					<span class="word">求下乘得不退</span>
					<span class="punc">。</span><br/>
					<span class="word">五者</span>
					<span class="punc">，</span>
					<span class="word">求神通得成就</span>
					<span class="punc">。</span><br/>
					<span class="word">六者</span>
					<span class="punc">，</span>
					<span class="word">修四梵得成就</span>
					<span class="punc">。</span><br/>
					<span class="word">七者</span>
					<span class="punc">，</span>
					<span class="word">修世禪得成就</span>
					<span class="punc">。</span><br/>
					<span class="word">八者</span>
					<span class="punc">，</span>
					<span class="word">所欲受得妙戒</span>
					<span class="punc">。</span><br/>
					<span class="word">九者</span>
					<span class="punc">，</span>
					<span class="word">所曾受得戒具</span>
					<span class="punc">。</span><br/>
					<span class="word">十者</span>
					<span class="punc">，</span>
					<span class="word">求上乘未住信</span>
					<span class="punc">。</span><br/>
					<span class="word">十一者</span>
					<span class="punc">，</span>
					<span class="word">求中乘未住信</span>
					<span class="punc">。</span><br/>
					<span class="word">十二者</span>
					<span class="punc">，</span>
					<span class="word">求下乘未住信</span>
					<span class="punc">。</span><br/>
					<span class="word">十三者</span>
					<span class="punc">，</span>
					<span class="word">所觀人為善友</span>
					<span class="punc">。</span><br/>
					<span class="word">十四者</span>
					<span class="punc">，</span>
					<span class="word">隨所聞是正信</span>
					<span class="punc">。</span><br/>
					<span class="word">十五者</span>
					<span class="punc">，</span>
					<span class="word">所觀人為惡友</span>
					<span class="punc">。</span><br/>
					<span class="word">十六者</span>
					<span class="punc">，</span>
					<span class="word">隨所聞非正教</span>
					<span class="punc">。</span><br/>
					<span class="word">十七者</span>
					<span class="punc">，</span>
					<span class="word">所觀人有實德</span>
					<span class="punc">。</span><br/>
					<span class="word">十八者</span>
					<span class="punc">，</span>
					<span class="word">所觀人無實德</span>
					<span class="punc">。</span><br/>
					<span class="word">十九者</span>
					<span class="punc">，</span>
					<span class="word">所觀義不錯謬</span>
					<span class="punc">。</span><br/>
					<span class="word">二十者</span>
					<span class="punc">，</span>
					<span class="word">所觀義是錯謬</span>
					<span class="punc">。</span><br/>
					<span class="word">二十一者</span>
					<span class="punc">，</span>
					<span class="word">有所誦不錯謬</span>
					<span class="punc">。</span><br/>
					<span class="word">二十二者</span>
					<span class="punc">，</span>
					<span class="word">有所誦是錯謬</span>
					<span class="punc">。</span><br/>
					<span class="word">二十三者</span>
					<span class="punc">，</span>
					<span class="word">所修行不錯謬</span>
					<span class="punc">。</span><br/>
					<span class="word">二十四者</span>
					<span class="punc">，</span>
					<span class="word">所見聞是善相</span>
					<span class="punc">。</span><br/>
					<span class="word">二十五者</span>
					<span class="punc">，</span>
					<span class="word">有所證為正實</span>
					<span class="punc">。</span><br/>
					<span class="word">二十六者</span>
					<span class="punc">，</span>
					<span class="word">有所學是錯謬</span>
					<span class="punc">。</span><br/>
					<span class="word">二十七者</span>
					<span class="punc">，</span>
					<span class="word">所見聞非善相</span>
					<span class="punc">。</span><br/>
					<span class="word">二十八者</span>
					<span class="punc">，</span>
					<span class="word">有所證非正法</span>
					<span class="punc">。</span><br/>
					<span class="word">二十九者</span>
					<span class="punc">，</span>
					<span class="word">有所獲邪神持</span>
					<span class="punc">。</span><br/>
					<span class="word">三十者</span>
					<span class="punc">，</span>
					<span class="word">所能說邪智辯</span>
					<span class="punc">。</span><br/>
					<span class="word">三十一者</span>
					<span class="punc">，</span>
					<span class="word">所玄知非人力</span>
					<span class="punc">。</span><br/>
					<span class="word">三十二者</span>
					<span class="punc">，</span>
					<span class="word">應先習觀智道</span>
					<span class="punc">。</span><br/>
					<span class="word">三十三者</span>
					<span class="punc">，</span>
					<span class="word">應先習禪定道</span>
					<span class="punc">。</span><br/>
					<span class="word">三十四者</span>
					<span class="punc">，</span>
					<span class="word">觀所學無障礙</span>
					<span class="punc">。</span><br/>
					<span class="word">三十五者</span>
					<span class="punc">，</span>
					<span class="word">觀所學是所宜</span>
					<span class="punc">。</span><br/>
					<span class="word">三十六者</span>
					<span class="punc">，</span>
					<span class="word">觀所學非所宜</span>
					<span class="punc">。</span><br/>
					<span class="word">三十七者</span>
					<span class="punc">，</span>
					<span class="word">觀所學是宿習</span>
					<span class="punc">。</span><br/>
					<span class="word">三十八者</span>
					<span class="punc">，</span>
					<span class="word">觀所學非宿習</span>
					<span class="punc">。</span><br/>
					<span class="word">三十九者</span>
					<span class="punc">，</span>
					<span class="word">觀所學善增長</span>
					<span class="punc">。</span><br/>
					<span class="word">四十者</span>
					<span class="punc">，</span>
					<span class="word">觀所學方便少</span>
					<span class="punc">。</span><br/>
					<span class="word">四十一者</span>
					<span class="punc">，</span>
					<span class="word">觀所學無進趣</span>
					<span class="punc">。</span><br/>
					<span class="word">四十二者</span>
					<span class="punc">，</span>
					<span class="word">所求果現未得</span>
					<span class="punc">。</span><br/>
					<span class="word">四十三者</span>
					<span class="punc">，</span>
					<span class="word">求出家當得去</span>
					<span class="punc">。</span><br/>
					<span class="word">四十四者</span>
					<span class="punc">，</span>
					<span class="word">求聞法得教示</span>
					<span class="punc">。</span><br/>
					<span class="word">四十五者</span>
					<span class="punc">，</span>
					<span class="word">求經卷得讀誦</span>
					<span class="punc">。</span><br/>
					<span class="word">四十六者</span>
					<span class="punc">，</span>
					<span class="word">觀所作是魔事</span>
					<span class="punc">。</span><br/>
					<span class="word">四十七者</span>
					<span class="punc">，</span>
					<span class="word">觀所作事成就</span>
					<span class="punc">。</span><br/>
					<span class="word">四十八者</span>
					<span class="punc">，</span>
					<span class="word">觀所作事不成</span>
					<span class="punc">。</span><br/>
					<span class="word">四十九者</span>
					<span class="punc">，</span>
					<span class="word">求大富財盈滿</span>
					<span class="punc">。</span><br/>
					<span class="word">五十者</span>
					<span class="punc">，</span>
					<span class="word">求官位當得獲</span>
					<span class="punc">。</span><br/>
					<span class="word">五十一者</span>
					<span class="punc">，</span>
					<span class="word">求壽命得延年</span>
					<span class="punc">。</span><br/>
					<span class="word">五十二者</span>
					<span class="punc">，</span>
					<span class="word">求世仙當得獲</span>
					<span class="punc">。</span><br/>
					<span class="word">五十三者</span>
					<span class="punc">，</span>
					<span class="word">觀學問多所達</span>
					<span class="punc">。</span><br/>
					<span class="word">五十四者</span>
					<span class="punc">，</span>
					<span class="word">觀學問少所達</span>
					<span class="punc">。</span><br/>
					<span class="word">五十五者</span>
					<span class="punc">，</span>
					<span class="word">求師友得如意</span>
					<span class="punc">。</span><br/>
					<span class="word">五十六者</span>
					<span class="punc">，</span>
					<span class="word">求弟子得如意</span>
					<span class="punc">。</span><br/>
					<span class="word">五十七者</span>
					<span class="punc">，</span>
					<span class="word">求父母得如意</span>
					<span class="punc">。</span><br/>
					<span class="word">五十八者</span>
					<span class="punc">，</span>
					<span class="word">求男女得如意</span>
					<span class="punc">。</span><br/>
					<span class="word">五十九者</span>
					<span class="punc">，</span>
					<span class="word">求妻妾得如意</span>
					<span class="punc">。</span><br/>
					<span class="word">六十者</span>
					<span class="punc">，</span>
					<span class="word">求同伴得如意</span>
					<span class="punc">。</span><br/>
					<span class="word">六十一者</span>
					<span class="punc">，</span>
					<span class="word">觀所慮得和合</span>
					<span class="punc">。</span><br/>
					<span class="word">六十二者</span>
					<span class="punc">，</span>
					<span class="word">所觀人心懷恚</span>
					<span class="punc">。</span><br/>
					<span class="word">六十三者</span>
					<span class="punc">，</span>
					<span class="word">求無恨得歡喜</span>
					<span class="punc">。</span><br/>
					<span class="word">六十四者</span>
					<span class="punc">，</span>
					<span class="word">求和合得如意</span>
					<span class="punc">。</span><br/>
					<span class="word">六十五者</span>
					<span class="punc">，</span>
					<span class="word">所觀人心歡喜</span>
					<span class="punc">。</span><br/>
					<span class="word">六十六者</span>
					<span class="punc">，</span>
					<span class="word">所思人得會見</span>
					<span class="punc">。</span><br/>
					<span class="word">六十七者</span>
					<span class="punc">，</span>
					<span class="word">所思人不復會</span>
					<span class="punc">。</span><br/>
					<span class="word">六十八者</span>
					<span class="punc">，</span>
					<span class="word">所請喚得來集</span>
					<span class="punc">。</span><br/>
					<span class="word">六十九者</span>
					<span class="punc">，</span>
					<span class="word">所憎惡得離之</span>
					<span class="punc">。</span><br/>
					<span class="word">七十者</span>
					<span class="punc">，</span>
					<span class="word">所愛敬得近之</span>
					<span class="punc">。</span><br/>
					<span class="word">七十一者</span>
					<span class="punc">，</span>
					<span class="word">觀欲聚得和集</span>
					<span class="punc">。</span><br/>
					<span class="word">七十二者</span>
					<span class="punc">，</span>
					<span class="word">觀欲聚不和集</span>
					<span class="punc">。</span><br/>
					<span class="word">七十三者</span>
					<span class="punc">，</span>
					<span class="word">所請喚不得來</span>
					<span class="punc">。</span><br/>
					<span class="word">七十四者</span>
					<span class="punc">，</span>
					<span class="word">所期人必當至</span>
					<span class="punc">。</span><br/>
					<span class="word">七十五者</span>
					<span class="punc">，</span>
					<span class="word">所期人住不來</span>
					<span class="punc">。</span><br/>
					<span class="word">七十六者</span>
					<span class="punc">，</span>
					<span class="word">所觀人得安吉</span>
					<span class="punc">。</span><br/>
					<span class="word">七十七者</span>
					<span class="punc">，</span>
					<span class="word">所觀人不安吉</span>
					<span class="punc">。</span><br/>
					<span class="word">七十八者</span>
					<span class="punc">，</span>
					<span class="word">所觀人已無身</span>
					<span class="punc">。</span><br/>
					<span class="word">七十九者</span>
					<span class="punc">，</span>
					<span class="word">所望見得覩之</span>
					<span class="punc">。</span><br/>
					<span class="word">八十者</span>
					<span class="punc">，</span>
					<span class="word">所求覓得見之</span>
					<span class="punc">。</span><br/>
					<span class="word">八十一者</span>
					<span class="punc">，</span>
					<span class="word">求所聞得吉語</span>
					<span class="punc">。</span><br/>
					<span class="word">八十二者</span>
					<span class="punc">，</span>
					<span class="word">所求見不如意</span>
					<span class="punc">。</span><br/>
					<span class="word">八十三者</span>
					<span class="punc">，</span>
					<span class="word">觀所疑即為實</span>
					<span class="punc">。</span><br/>
					<span class="word">八十四者</span>
					<span class="punc">，</span>
					<span class="word">觀所疑為不實</span>
					<span class="punc">。</span><br/>
					<span class="word">八十五者</span>
					<span class="punc">，</span>
					<span class="word">所觀人不和合</span>
					<span class="punc">。</span><br/>
					<span class="word">八十六者</span>
					<span class="punc">，</span>
					<span class="word">求佛事當得獲</span>
					<span class="punc">。</span><br/>
					<span class="word">八十七者</span>
					<span class="punc">，</span>
					<span class="word">求供具當得獲</span>
					<span class="punc">。</span><br/>
					<span class="word">八十八者</span>
					<span class="punc">，</span>
					<span class="word">求資生得如意</span>
					<span class="punc">。</span><br/>
					<span class="word">八十九者</span>
					<span class="punc">，</span>
					<span class="word">求資生少得獲</span>
					<span class="punc">。</span><br/>
					<span class="word">九十者</span>
					<span class="punc">，</span>
					<span class="word">有所求皆當得</span>
					<span class="punc">。</span><br/>
					<span class="word">九十一者</span>
					<span class="punc">，</span>
					<span class="word">有所求皆不得</span>
					<span class="punc">。</span><br/>
					<span class="word">九十二者</span>
					<span class="punc">，</span>
					<span class="word">有所求少得獲</span>
					<span class="punc">。</span><br/>
					<span class="word">九十三者</span>
					<span class="punc">，</span>
					<span class="word">有所求得如意</span>
					<span class="punc">。</span><br/>
					<span class="word">九十四者</span>
					<span class="punc">，</span>
					<span class="word">有所求速當得</span>
					<span class="punc">。</span><br/>
					<span class="word">九十五者</span>
					<span class="punc">，</span>
					<span class="word">有所求久當得</span>
					<span class="punc">。</span><br/>
					<span class="word">九十六者</span>
					<span class="punc">，</span>
					<span class="word">有所求而損失</span>
					<span class="punc">。</span><br/>
					<span class="word">九十七者</span>
					<span class="punc">，</span>
					<span class="word">有所求得吉利</span>
					<span class="punc">。</span><br/>
					<span class="word">九十八者</span>
					<span class="punc">，</span>
					<span class="word">有所求而受苦</span>
					<span class="punc">。</span><br/>
					<span class="word">九十九者</span>
					<span class="punc">，</span>
					<span class="word">觀所失求當得</span>
					<span class="punc">。</span><br/>
					<span class="word">一百者</span>
					<span class="punc">，</span>
					<span class="word">觀所失永不得</span>
					<span class="punc">。</span><br/>
					<span class="word">一百一者</span>
					<span class="punc">，</span>
					<span class="word">觀所失自還得</span>
					<span class="punc">。</span><br/>
					<span class="word">一百二者</span>
					<span class="punc">，</span>
					<span class="word">求離厄得脫難</span>
					<span class="punc">。</span><br/>
					<span class="word">一百三者</span>
					<span class="punc">，</span>
					<span class="word">求離病得除愈</span>
					<span class="punc">。</span><br/>
					<span class="word">一百四者</span>
					<span class="punc">，</span>
					<span class="word">觀所去無障礙</span>
					<span class="punc">。</span><br/>
					<span class="word">一百五者</span>
					<span class="punc">，</span>
					<span class="word">觀所去有障礙</span>
					<span class="punc">。</span><br/>
					<span class="word">一百六者</span>
					<span class="punc">，</span>
					<span class="word">觀所住得安止</span>
					<span class="punc">。</span><br/>
					<span class="word">一百七者</span>
					<span class="punc">，</span>
					<span class="word">觀所住不得安</span>
					<span class="punc">。</span><br/>
					<span class="word">一百八者</span>
					<span class="punc">，</span>
					<span class="word">所向處得安快</span>
					<span class="punc">。</span><br/>
					<span class="word">一百九者</span>
					<span class="punc">，</span>
					<span class="word">所向處有厄難</span>
					<span class="punc">。</span><br/>
					<span class="word">一百一十者</span>
					<span class="punc">，</span>
					<span class="word">所向處為魔網</span>
					<span class="punc">。</span><br/>
					<span class="word">一百一十一者</span>
					<span class="punc">，</span>
					<span class="word">所向處難開化</span>
					<span class="punc">。</span><br/>
					<span class="word">一百一十二者</span>
					<span class="punc">，</span>
					<span class="word">所向處可開化</span>
					<span class="punc">。</span><br/>
					<span class="word">一百一十三者</span>
					<span class="punc">，</span>
					<span class="word">所向處自獲利</span>
					<span class="punc">。</span><br/>
					<span class="word">一百一十四者</span>
					<span class="punc">，</span>
					<span class="word">所遊路無惱害</span>
					<span class="punc">。</span><br/>
					<span class="word">一百一十五者</span>
					<span class="punc">，</span>
					<span class="word">所遊路有惱害</span>
					<span class="punc">。</span><br/>
					<span class="word">一百一十六者</span>
					<span class="punc">，</span>
					<span class="word">君民惡饑饉起</span>
					<span class="punc">。</span><br/>
					<span class="word">一百一十七者</span>
					<span class="punc">，</span>
					<span class="word">君民惡多疾疫</span>
					<span class="punc">。</span><br/>
					<span class="word">一百一十八者</span>
					<span class="punc">，</span>
					<span class="word">君民好國豐樂</span>
					<span class="punc">。</span><br/>
					<span class="word">一百一十九者</span>
					<span class="punc">，</span>
					<span class="word">君無道國災亂</span>
					<span class="punc">。</span><br/>
					<span class="word">一百二十者</span>
					<span class="punc">，</span>
					<span class="word">君修德災亂滅</span>
					<span class="punc">。</span><br/>
					<span class="word">一百二十一者</span>
					<span class="punc">，</span>
					<span class="word">君行惡國將破</span>
					<span class="punc">。</span><br/>
					<span class="word">一百二十二者</span>
					<span class="punc">，</span>
					<span class="word">君修善國還立</span>
					<span class="punc">。</span><br/>
					<span class="word">一百二十三者</span>
					<span class="punc">，</span>
					<span class="word">觀所避得度難</span>
					<span class="punc">。</span><br/>
					<span class="word">一百二十四者</span>
					<span class="punc">，</span>
					<span class="word">觀所避不脫難</span>
					<span class="punc">。</span><br/>
					<span class="word">一百二十五者</span>
					<span class="punc">，</span>
					<span class="word">所住處眾安隱</span>
					<span class="punc">。</span><br/>
					<span class="word">一百二十六者</span>
					<span class="punc">，</span>
					<span class="word">所住處有障難</span>
					<span class="punc">。</span><br/>
					<span class="word">一百二十七者</span>
					<span class="punc">，</span>
					<span class="word">所依聚眾不安</span>
					<span class="punc">。</span><br/>
					<span class="word">一百二十八者</span>
					<span class="punc">，</span>
					<span class="word">閑靜處無諸難</span>
					<span class="punc">。</span><br/>
					<span class="word">一百二十九者</span>
					<span class="punc">，</span>
					<span class="word">觀怪異無損害</span>
					<span class="punc">。</span><br/>
					<span class="word">一百三十者</span>
					<span class="punc">，</span>
					<span class="word">觀怪異有損害</span>
					<span class="punc">。</span><br/>
					<span class="word">一百三十一者</span>
					<span class="punc">，</span>
					<span class="word">觀怪異精進安</span>
					<span class="punc">。</span><br/>
					<span class="word">一百三十二者</span>
					<span class="punc">，</span>
					<span class="word">觀所夢無損害</span>
					<span class="punc">。</span><br/>
					<span class="word">一百三十三者</span>
					<span class="punc">，</span>
					<span class="word">觀所夢有所損</span>
					<span class="punc">。</span><br/>
					<span class="word">一百三十四者</span>
					<span class="punc">，</span>
					<span class="word">觀所夢精進安</span>
					<span class="punc">。</span><br/>
					<span class="word">一百三十五者</span>
					<span class="punc">，</span>
					<span class="word">觀所夢為吉利</span>
					<span class="punc">。</span><br/>
					<span class="word">一百三十六者</span>
					<span class="punc">，</span>
					<span class="word">觀障亂速得離</span>
					<span class="punc">。</span><br/>
					<span class="word">一百三十七者</span>
					<span class="punc">，</span>
					<span class="word">觀障亂漸得離</span>
					<span class="punc">。</span><br/>
					<span class="word">一百三十八者</span>
					<span class="punc">，</span>
					<span class="word">觀障亂不能離</span>
					<span class="punc">。</span><br/>
					<span class="word">一百三十九者</span>
					<span class="punc">，</span>
					<span class="word">觀障亂一心除</span>
					<span class="punc">。</span><br/>
					<span class="word">一百四十者</span>
					<span class="punc">，</span>
					<span class="word">觀所難速得脫</span>
					<span class="punc">。</span><br/>
					<span class="word">一百四十一者</span>
					<span class="punc">，</span>
					<span class="word">觀所難久得脫</span>
					<span class="punc">。</span><br/>
					<span class="word">一百四十二者</span>
					<span class="punc">，</span>
					<span class="word">觀所難受衰惱</span>
					<span class="punc">。</span><br/>
					<span class="word">一百四十三者</span>
					<span class="punc">，</span>
					<span class="word">觀所難精進脫</span>
					<span class="punc">。</span><br/>
					<span class="word">一百四十四者</span>
					<span class="punc">，</span>
					<span class="word">觀所難命當盡</span>
					<span class="punc">。</span><br/>
					<span class="word">一百四十五者</span>
					<span class="punc">，</span>
					<span class="word">觀所患大不調</span>
					<span class="punc">。</span><br/>
					<span class="word">一百四十六者</span>
					<span class="punc">，</span>
					<span class="word">觀所患非人惱</span>
					<span class="punc">。</span><br/>
					<span class="word">一百四十七者</span>
					<span class="punc">，</span>
					<span class="word">觀所患合非人</span>
					<span class="punc">。</span><br/>
					<span class="word">一百四十八者</span>
					<span class="punc">，</span>
					<span class="word">觀所患可療治</span>
					<span class="punc">。</span><br/>
					<span class="word">一百四十九者</span>
					<span class="punc">，</span>
					<span class="word">觀所患難療治</span>
					<span class="punc">。</span><br/>
					<span class="word">一百五十者</span>
					<span class="punc">，</span>
					<span class="word">觀所患精進差</span>
					<span class="punc">。</span><br/>
					<span class="word">一百五十一者</span>
					<span class="punc">，</span>
					<span class="word">觀所患久長苦</span>
					<span class="punc">。</span><br/>
					<span class="word">一百五十二者</span>
					<span class="punc">，</span>
					<span class="word">觀所患自當差</span>
					<span class="punc">。</span><br/>
					<span class="word">一百五十三者</span>
					<span class="punc">，</span>
					<span class="word">所向醫堪能治</span>
					<span class="punc">。</span><br/>
					<span class="word">一百五十四者</span>
					<span class="punc">，</span>
					<span class="word">觀所療是對治</span>
					<span class="punc">。</span><br/>
					<span class="word">一百五十五者</span>
					<span class="punc">，</span>
					<span class="word">所服藥當得力</span>
					<span class="punc">。</span><br/>
					<span class="word">一百五十六者</span>
					<span class="punc">，</span>
					<span class="word">觀所患得除愈</span>
					<span class="punc">。</span><br/>
					<span class="word">一百五十七者</span>
					<span class="punc">，</span>
					<span class="word">所向醫不能治</span>
					<span class="punc">。</span><br/>
					<span class="word">一百五十八者</span>
					<span class="punc">，</span>
					<span class="word">觀所療非對治</span>
					<span class="punc">。</span><br/>
					<span class="word">一百五十九者</span>
					<span class="punc">，</span>
					<span class="word">所服藥不得力</span>
					<span class="punc">。</span><br/>
					<span class="word">一百六十者</span>
					<span class="punc">，</span>
					<span class="word">觀所患命當盡</span>
					<span class="punc">。</span><br/>
					<span class="word">一百六十一者</span>
					<span class="punc">，</span>
					<span class="word">從地獄道中來</span>
					<span class="punc">。</span><br/>
					<span class="word">一百六十二者</span>
					<span class="punc">，</span>
					<span class="word">從畜生道中來</span>
					<span class="punc">。</span><br/>
					<span class="word">一百六十三者</span>
					<span class="punc">，</span>
					<span class="word">從餓鬼道中來</span>
					<span class="punc">。</span><br/>
					<span class="word">一百六十四者</span>
					<span class="punc">，</span>
					<span class="word">從阿修羅道中來</span>
					<span class="punc">。</span><br/>
					<span class="word">一百六十五者</span>
					<span class="punc">，</span>
					<span class="word">從人道中而來</span>
					<span class="punc">。</span><br/>
					<span class="word">一百六十六者</span>
					<span class="punc">，</span>
					<span class="word">從天道中而來</span>
					<span class="punc">。</span><br/>
					<span class="word">一百六十七者</span>
					<span class="punc">，</span>
					<span class="word">從在家中而來</span>
					<span class="punc">。</span><br/>
					<span class="word">一百六十八者</span>
					<span class="punc">，</span>
					<span class="word">從出家中而來</span>
					<span class="punc">。</span><br/>
					<span class="word">一百六十九者</span>
					<span class="punc">，</span>
					<span class="word">曾值佛供養來</span>
					<span class="punc">。</span><br/>
					<span class="word">一百七十者</span>
					<span class="punc">，</span>
					<span class="word">曾親供養賢聖來</span>
					<span class="punc">。</span><br/>
					<span class="word">一百七十一者</span>
					<span class="punc">，</span>
					<span class="word">曾得聞深法來</span>
					<span class="punc">。</span><br/>
					<span class="word">一百七十二者</span>
					<span class="punc">，</span>
					<span class="word">捨身已入地獄</span>
					<span class="punc">。</span><br/>
					<span class="word">一百七十三者</span>
					<span class="punc">，</span>
					<span class="word">捨身已作畜生</span>
					<span class="punc">。</span><br/>
					<span class="word">一百七十四者</span>
					<span class="punc">，</span>
					<span class="word">捨身已作餓鬼</span>
					<span class="punc">。</span><br/>
					<span class="word">一百七十五者</span>
					<span class="punc">，</span>
					<span class="word">捨身已作阿修羅</span>
					<span class="punc">。</span><br/>
					<span class="word">一百七十六者</span>
					<span class="punc">，</span>
					<span class="word">捨身已生人道</span>
					<span class="punc">。</span><br/>
					<span class="word">一百七十七者</span>
					<span class="punc">，</span>
					<span class="word">捨身已為人王</span>
					<span class="punc">。</span><br/>
					<span class="word">一百七十八者</span>
					<span class="punc">，</span>
					<span class="word">捨身已生天道</span>
					<span class="punc">。</span><br/>
					<span class="word">一百七十九者</span>
					<span class="punc">，</span>
					<span class="word">捨身已為天王</span>
					<span class="punc">。</span><br/>
					<span class="word">一百八十者</span>
					<span class="punc">，</span>
					<span class="word">捨身已聞深法</span>
					<span class="punc">。</span><br/>
					<span class="word">一百八十一者</span>
					<span class="punc">，</span>
					<span class="word">捨身已得出家</span>
					<span class="punc">。</span><br/>
					<span class="word">一百八十二者</span>
					<span class="punc">，</span>
					<span class="word">捨身已值聖僧</span>
					<span class="punc">。</span><br/>
					<span class="word">一百八十三者</span>
					<span class="punc">，</span>
					<span class="word">捨身已生兜率天</span>
					<span class="punc">。</span><br/>
					<span class="word">一百八十四者</span>
					<span class="punc">，</span>
					<span class="word">捨身已生淨佛國</span>
					<span class="punc">。</span><br/>
					<span class="word">一百八十五者</span>
					<span class="punc">，</span>
					<span class="word">捨身已尋見佛</span>
					<span class="punc">。</span><br/>
					<span class="word">一百八十六者</span>
					<span class="punc">，</span>
					<span class="word">捨身已住下乘</span>
					<span class="punc">。</span><br/>
					<span class="word">一百八十七者</span>
					<span class="punc">，</span>
					<span class="word">捨身已住中乘</span>
					<span class="punc">。</span><br/>
					<span class="word">一百八十八者</span>
					<span class="punc">，</span>
					<span class="word">捨身已獲果證</span>
					<span class="punc">。</span><br/>
					<span class="word">一百八十九者</span>
					<span class="punc">，</span>
					<span class="word">捨身已住上乘</span>
					<span class="punc">。</span><br/>
				</blockquote>
				<span class="punc">」</span>
			</div>
			<div x-show="details" class="details mb-3">
				「這樣所觀的過去現在未來三世果報善惡相，有一百八十九種，是哪一百八十九種呢：
				<blockquote>
					<ol>
						<li>追求上乘佛法，不會退轉。</li>
						<li>追求的道果，今生可得證。</li>
						<li>追求中乘（緣覺）的佛法，不會退轉。</li>
						<li>追求小乘自度，不會退轉。</li>
						<li>所求神通，能夠得到成就。</li>
						<li>所修四梵果報能夠得到成就（修四梵住能夠得來生作四梵天王的果報）。</li>
						<li>想要修世間四禪八定，能夠成就。</li>
						<li>想要去受戒，可以滿願得戒。</li>
						<li>曾經所受之戒律得具足。</li>
						<li>想要追求大乘的佛法，但是信心還沒有堅定。</li>
						<li>想要追求中乘的佛法（緣覺法門），但是信心還沒有堅定。</li>
						<li>想要追求小乘的佛法，但是信心還沒有堅定。</li>
						<li>所觀之人是善知識。</li>
						<li>所聽聞的是正法。</li>
						<li>所觀之人非善知識。</li>
						<li>所聽聞的不是正法。</li>
						<li>所觀之人有實際德性。</li>
						<li>所觀之人無實際德性。</li>
						<li>所觀的義理沒有錯誤。</li>
						<li>所觀的義理是錯誤的。</li>
						<li>所誦持的沒有錯誤。</li>
						<li>所誦持的是錯誤的。</li>
						<li>所修行的沒有錯誤。</li>
						<li>所見聞的是有益的。</li>
						<li>所證是真實的。</li>
						<li>所學習的是錯誤的。</li>
						<li>所見所聞沒有利益。</li>
						<li>所證不是真理正法。</li>
						<li>所獲得證知的是邪神加持。</li>
						<li>所說的是邪知邪見。</li>
						<li>深奧的知識非人智力所能知。</li>
						<li>應該先修內觀智慧的方法。</li>
						<li>應該先修學禪定。</li>
						<li>所觀修學沒有障礙。</li>
						<li>所觀的修學是適宜的。</li>
						<li>所觀的修學不適合。</li>
						<li>所觀的修學是過去學習過的。</li>
						<li>所觀的修學不是過去所學的。</li>
						<li>所觀的修學能夠快速進步。</li>
						<li>所觀的修學方便法很少，不容易。</li>
						<li>所觀的修學沒有進步。</li>
						<li>所求的果報現在還未得到。</li>
						<li>希望出家應當行動。</li>
						<li>希望聽聞正法能夠得到開示。</li>
						<li>所求經法能夠得到，讀誦。</li>
						<li>所觀所作之事是魔事。</li>
						<li>所觀之事能夠成就。</li>
						<li>所觀所作之事無法成就。</li>
						<li>謀求財富得到很多很充足。</li>
						<li>謀求官位能夠得到。</li>
						<li>謀求延年益壽可以實現。</li>
						<li>求成仙能夠成功。</li>
						<li>所觀學問能夠通達。</li>
						<li>所觀的學問獲得很少。</li>
						<li>求師得友能夠如意。</li>
						<li>收弟子能夠如意。</li>
						<li>求未來有好父母能夠如意。</li>
						<li>求子女能夠如意。</li>
						<li>求妻妾能夠如意。</li>
						<li>求同伴能夠如意。</li>
						<li>所憂慮的能夠和合圓滿。</li>
						<li>所觀的人心懷怨恨。</li>
						<li>求無怨恨能夠歡喜滿意。</li>
						<li>求和合圓滿能夠滿意。</li>
						<li>所觀的人心裡愉快歡喜。</li>
						<li>所思念的人能夠相見。</li>
						<li>所思念的人不會再見。</li>
						<li> 請客、請人、幫助你的人能來。</li>
						<li>所憎惡的能夠遠離。</li>
						<li>所尊敬喜愛的能夠親近。</li>
						<li>想要邀人相聚能夠實現。</li>
						<li>想要邀人相聚無法實現。</li>
						<li>所邀請的不會來。</li>
						<li>所期待的人一定會到。</li>
						<li>所期待的人一定不來。</li>
						<li>所觀察的人能夠平安吉祥。</li>
						<li>所觀的人無法平安吉祥。</li>
						<li>所觀的人已失去了肉身。</li>
						<li>所期待的能夠見到。</li>
						<li>所尋覓的能夠見到。</li>
						<li>所聽聞的是吉祥之語。</li>
						<li>所求見不能如意。</li>
						<li>所懷疑的是事實。</li>
						<li>所懷疑的不是事實。</li>
						<li>所觀的人無法愉快相處。</li>
						<li>所求佛事能夠獲得。</li>
						<li>所求供養器具能夠獲得。</li>
						<li>所求生活所需能夠如意。</li>
						<li>所求生活所需獲得很少。</li>
						<li>有所求都能夠得到。</li>
						<li>有所求都不能得到。</li>
						<li>有所求獲得很少。</li>
						<li>有所求能夠如意。</li>
						<li>有所求能夠迅速獲得。</li>
						<li>有所求要過很長時間才能得到。</li>
						<li>有所求卻有所損失。</li>
						<li>有所求能吉祥順利。</li>
						<li>有所求而受苦難。</li>
						<li>所失去的求而能得。</li>
						<li>所失去的求而不得。</li>
						<li>所失去的自動歸來。</li>
						<li>謀求離厄運苦難能夠脫離。</li>
						<li>求離病痛能夠脫離和愈合。</li>
						<li>所去之地沒有障礙。</li>
						<li>所去之地有障礙困難。</li>
						<li>所觀之處能夠安穩。</li>
						<li>所觀之處不得安寧。</li>
						<li>所要去的地方能夠安穩快樂。</li>
						<li>所要去的地方會有苦難。</li>
						<li>所要去的地方是則為魔事之網。</li>
						<li>所要去的地方難以開化。</li>
						<li>所要去的地方可以開化。</li>
						<li>所要去的地方能夠自得利益。</li>
						<li>所游之路沒有煩惱危害。</li>
						<li>所游之路有煩惱和危害。</li>
						<li>國君與人民饑餓苦難現起。</li>
						<li>國君與人民多瘟疫苦難。</li>
						<li>國君與人民安樂豐足。</li>
						<li>國君無道國家多災難多混亂。</li>
						<li>國君修學高尚道德災難混亂消滅。</li>
						<li>國君無道國家將破。</li>
						<li>國君修善國家仍然會安立。</li>
						<li>所觀能夠躲避苦難。</li>
						<li>所觀不能躲避苦難。</li>
						<li>所住之處眾人都自在寧靜。</li>
						<li>所住之處有障礙困難。</li>
						<li>所處人群不能安穩寧靜。</li>
						<li>悠閒寂靜之處沒有種種災難。</li>
						<li>所觀的怪異之事沒有什麼損害。</li>
						<li>所觀的怪異之事會有損害。</li>
						<li>所觀的怪異之事，如果精進修行能夠安寧。</li>
						<li>所觀之夢沒有損害。</li>
						<li>所觀之夢會有所損害。</li>
						<li>所觀之夢如果精進則能安慰。</li>
						<li>所觀之夢是吉利的。</li>
						<li>所觀的障礙混亂能迅脫離。</li>
						<li>所觀的障礙混亂漸漸脫離。</li>
						<li>所觀的障礙混亂無法脫離。</li>
						<li>所觀的障礙混亂需要專一心去除。</li>
						<li>所觀的苦難能夠迅速脫離。</li>
						<li>所觀的苦難需要很久才能夠脫離。</li>
						<li>所觀的苦難會遭受衰敗煩惱。</li>
						<li>所觀的苦難精進則能夠脫離。</li>
						<li>所觀的苦難壽命會消盡。</li>
						<li>所觀的病患是四大不調所致。</li>
						<li>所觀的病患是非人惱害。</li>
						<li>所觀病患非人力能夠治療。</li>
						<li>所觀病患可以治療。</li>
						<li>所觀病患難以治療。</li>
						<li>所觀病患精進能愈。</li>
						<li>所觀病患是長久的苦痛。</li>
						<li>所觀病患自然能愈。</li>
						<li>所找的醫生能夠治療。</li>
						<li>所做的治療能夠對治。</li>
						<li>所服用的藥物得力。</li>
						<li>所觀病患能夠得到除愈。</li>
						<li>所找的醫生不能治療。</li>
						<li>所用的醫療方法不能對治。</li>
						<li>所服用藥物不得力。</li>
						<li>所觀的病患導致壽命消盡。</li>
						<li>從地獄道來。</li>
						<li>從畜生到來。</li>
						<li>從餓鬼道來。</li>
						<li>從修羅到來。</li>
						<li>從人道來。</li>
						<li>從天道來。</li>
						<li>從在家人中來。</li>
						<li>從出家人中來。</li>
						<li>曾逢佛在世間並供養而來。</li>
						<li>曾親自供養聖賢而來。</li>
						<li>因曾聽聞深法而來。</li>
						<li>下一世入地獄。</li>
						<li>下一世作畜生。</li>
						<li>下一世做餓鬼。</li>
						<li>下一世做修羅。</li>
						<li>下一世生人道。</li>
						<li>下一世為君主。</li>
						<li>下一世生天人道。</li>
						<li>下一世生為天人王。</li>
						<li>捨身就已聽聞深邃佛法。</li>
						<li>捨身則已出家。</li>
						<li>捨身就能遇到聖僧。</li>
						<li>捨身就生在兜率天。</li>
						<li>捨身就生在佛國淨土。</li>
						<li>捨身則見佛。</li>
						<li>捨身就已安住小乘佛法。</li>
						<li>捨身就已安住緣覺佛法。</li>
						<li>捨身就已證果位。</li>
						<li>捨身就已安住於大乘佛法。</li>
					</ol>
				</blockquote>
				」
				<hr/>
			</div>		
			<div :class="details ? 'bg-secondary text-white' : ''" class="paragraph">
				<span class="punc">「</span>
				<span class="word">善男子</span>
				<span class="punc">！</span>
				<span class="word">是名一百八十九種善惡果報差別之相</span>
				<span class="punc">。</span>
				<span class="word">如此占法</span>
				<span class="punc">，</span>
				<span class="word">隨心所觀主念之事</span>
				<span class="punc">，</span>
				<span class="word">若數合與意相當者</span>
				<span class="punc">，</span>
				<span class="word">無有乖錯</span>
				<span class="punc">。</span>
				<span class="word">若其所擲所合之數</span>
				<span class="punc">，</span>
				<span class="word">與心所觀主念之事不相當者</span>
				<span class="punc">，</span>
				<span class="word">謂不至心</span>
				<span class="punc">，</span>
				<span class="word">名為虛謬</span>
				<span class="punc">。</span>
				<span class="word">其有三擲而皆無所現者</span>
				<span class="punc">，</span>
				<span class="word">此人則名已得無所得也</span>
				<span class="punc">。</span>
				<span class="punc">」</span>
			</div>
			<div x-show="details" class="details mb-3">
				「善男子，這個即是一百八十九種善惡果報差別之相。按這樣占察，按心裡所觀所念之事，如果數字合計與所想相應時，則沒有錯誤，如果所投擲數字合計與心所觀所念之事不相應，那麼即是至誠心不夠，就是錯誤的，如果投擲三次都沒有數字顯示，那麼此人已得無所得了。」
				<hr/>
			</div>
			<div :class="details ? 'bg-secondary text-white' : ''" class="paragraph">
				<span class="punc">「</span>
				<span class="word">復次</span>
				<span class="punc">，</span>
				<span class="word">善男子</span>
				<span class="punc">！</span>
				<span class="word">若自發意</span>
				<span class="punc">，</span>
				<span class="word">觀於他人所受果報</span>
				<span class="punc">，</span>
				<span class="word">事亦同爾</span>
				<span class="punc">。</span>
				<span class="word">若有他人不能自占</span>
				<span class="punc">，</span>
				<span class="word">而來求請欲使占者</span>
				<span class="punc">，</span>
				<span class="word">應當籌量觀察自心</span>
				<span class="punc">，</span>
				<span class="word">不貪世間</span>
				<span class="punc">，</span>
				<span class="word">內意清淨</span>
				<span class="punc">，</span>
				<span class="word">然後乃可如上</span>
				<span class="punc">，</span>
				<span class="word">歸敬修行供養</span>
				<span class="punc">，</span>
				<span class="word">至心發願而為占察</span>
				<span class="punc">。</span>
				<span class="word">不應貪求世間名利</span>
				<span class="punc">，</span>
				<span class="word">如行師道</span>
				<span class="punc">，</span>
				<span class="word">以自妨亂</span>
				<span class="punc">。</span>
				<span class="word">又若內心不清淨者</span>
				<span class="punc">，</span>
				<span class="word">設令占察而不相當</span>
				<span class="punc">，</span>
				<span class="word">但為虛謬耳</span>
				<span class="punc">。</span>
				<span class="punc">」</span>
			</div>
			<div x-show="details" class="details mb-3">
				「再者，善男子，如果想觀他人所受的果報，方法同樣。如果有人自己不能占，而來請求幫助他占察，應當審查自心，不貪世間福報，內心清淨，然後才可以如上述皈依禮敬修供養之法，至誠心發願為他占察。不應當貪求世間名利，如果履行為師之道，要防止自心防礙擾亂。內心有所求不夠清淨，那麼占察也不相應，則為虛偽錯謬。」
				<hr/>
			</div>
			<div :class="details ? 'bg-secondary text-white' : ''" class="paragraph">
				<span class="punc">「</span>
				<span class="word">復次</span>
				<span class="punc">，</span>
				<span class="word">若未來世諸眾生等</span>
				<span class="punc">，</span>
				<span class="word">一切所占</span>
				<span class="punc">，</span>
				<span class="word">不獲吉善</span>
				<span class="punc">，</span>
				<span class="word">所求不得</span>
				<span class="punc">，</span>
				<span class="word">種種憂慮</span>
				<span class="punc">，</span>
				<span class="word">逼惱怖懼時</span>
				<span class="punc">，</span>
				<span class="word">應當晝夜常勤誦念我之名字</span>
				<span class="punc">。</span>
				<span class="word">若能至心者</span>
				<span class="punc">，</span>
				<span class="word">所占則吉</span>
				<span class="punc">，</span>
				<span class="word">所求皆獲</span>
				<span class="punc">，</span>
				<span class="word">現離衰惱</span>
				<span class="punc">。</span>
				<span class="punc">」</span>
			</div>
			<div x-show="details" class="details mb-3">
				「再者，如果未來世眾生，所占的一切事情，不能獲得吉祥善順，所求都不能得，各種憂慮，煩惱恐懼逼迫時，應當晝夜時常勤誦我的名號，如果至誠心，所占則能吉祥如意，所求也能獲得，遠離衰敗煩惱。」
				<hr/>
			</div>
			<div class="paragraph">
				<h2>
					<span class="word">占察善惡業報經卷上</span>
				</h2>
			</div>
			<div class="d-flex mb-3">
			{{--
				<div class="me-auto w-50">
					<a href="#" class="btn btn-link border p-2 me-3 w-100 h-100 text-decoration-none">
						<div class="d-flex h-100 justify-content-between align-items-center">
							<div class="d-flex">
								<i class="fas fa-arrow-circle-left fs-1"></i>
							</div>
							<div class="d-flex w-100 justify-content-center">
								<span class="ms-2 text-start text-truncate"></span>
							</div>
						</div>
					</a>
				</div>
			--}}
				<div class="ms-auto me-3 w-50">
					<a href="/ksitigarbha-divination-vol2" class="btn btn-link border p-2 ms-3 w-100 h-100 text-decoration-none">
						<div class="d-flex h-100 justify-content-between align-items-center">
							<div class="d-flex w-100 justify-content-center">
								<span class="me-2 text-start text-truncate">占察善惡業報經卷下</span>
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
