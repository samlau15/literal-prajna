@extends('_layouts.main')

@section('title')
<title>地藏菩薩法</title>
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
                        <a @@click="jumpTo('vol1')" :class="{active: currItems['vol1'] && true}" class="nav-link text-nowrap" href="#vol1">地藏菩薩法</a>
                    </li>
                </ul>
            </x-toc>
        </div>
        <div id="content" class="col-md-9" :class="{'font-enlarged': textsize == 2, 'readonly': readOnly}">
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item">密法儀軌</li>
                    <li class="breadcrumb-item"><a href="/ksitigarbha-dharma">地藏菩薩法</a></li>
                </ol>
            </nav>
        
            <h1 class="toc-item" id="vol1">地藏菩薩法</h1>
            <small class="float-start mb-3">
                節錄　<a href="https://21dzk.l.u-tokyo.ac.jp/SAT/ddb-sat2.php?mode=detail&useid=2409_,76,0327b03&key=%E8%A1%8C%E6%9E%97%E7%AC%AC%E5%9B%9B%E5%8D%81%E4%BA%94&ktn=&mode2=2">行林第四十五</a>
            </small>
            <small class="float-end mb-3">
                兜率谷鷄頭院闍梨嚴覺　書
            </small>
            <div class="clearfix"></div>
            <div class="mb-3">
                <p>一支度 <sub class="sub-lg">(如常)</sub></p>
            </div>
            <div class="mb-3">
                <p>一起首時分向方等 <sub class="sub-lg">(可隨所求)</sub></p>
            </div>
            <div class="mb-3">
                <p>一行法</p>
            </div>
            <div class="mb-3">
                <p>於此菩薩有經有軌。但十輪經。本願經等。偏説本誓。無入修法。儀軌之中纔説形像根本明等。不明行法。陀羅尼集經有二印一明。不委持誦法。大日經具緣品中略説形容色物座。轉字輪品又説形色印。種藏品中説真言。密印品中又説印真言。祕密曼荼羅品中説曼荼羅相。其一一文抄記如左。</p>
            </div>
            <div class="mb-3">
                <p>欲修此法須依胎藏。附其行儀可有多種。今示梗概。</p>
            </div>
            <div class="mb-3">
                <blockquote>
                    尊位　左方第二重中<br/>
                    梵號　<span class=word>阿利也<sub class="sub-lg">二合</sub>乞叉<sub class="sub-lg">二合</sub>底蘗婆又尾薩縛<sub class="sub-lg">引</sub>鉢里布羅迦</span>　或 　
                    <img src="{{ $page->baseUrl.'/assets/images/jpgsdm/a.jpg' }}" alt="a" />
                    <img src="{{ $page->baseUrl.'/assets/images/jpgsdm/ry@a.jpg' }}" alt="ry@a" />
                    <img src="{{ $page->baseUrl.'/assets/images/jpgsdm/k@si.jpg' }}" alt="k@si" />
                    <img src="{{ $page->baseUrl.'/assets/images/jpgsdm/ta.jpg' }}" alt="ta" />
                    <img src="{{ $page->baseUrl.'/assets/images/jpgsdm/ga.jpg' }}" alt="ga" />
                    <img src="{{ $page->baseUrl.'/assets/images/jpgsdm/rbha.jpg' }}" alt="rbha" /><br/>
                    密號　悲願金剛　又悲愍金剛　又與願金剛 <sub class="sub-lg">(理界記)</sub><br/>
                    種子
                    　<img src="{{ $page->baseUrl.'/assets/images/jpgsdm/ha.jpg' }}" alt="ha" />普
                    　<img src="{{ $page->baseUrl.'/assets/images/jpgsdm/i.jpg' }}" alt="i" />轉<br/>
                    三形　蓮花上幢或寶珠<br/>
                    尊形　圖云白肉色。左手持月形 <sub class="sub-lg">(或云寶珠)</sub>。右手持蓮花。上在幢幡。寶坐赤蓮花。祕藏記云。白肉色左手持蓮花。上有幢幡。右手持寶珠。<br/>
                </blockquote>
            </div>
            <div class="mb-3">
                <p>儀軌云。次説畫像法。作聲聞形像。著袈裟。端覆左肩左手盈花形。右手施無畏。令坐蓮花。復作居坐大士像。頂著天冠。著袈裟。左手持蓮花莖。右手如先。令安座九品蓮臺。</p>
            </div>
            <div class="mb-3">
                <p>印明經第四 <sub class="sub-lg">(密印品)</sub>云。如前以定惠手為拳。令二火輪開敷。是地藏旗印。彼真言曰</p>
                <blockquote>
                    <span class="word">南麼三曼多勃馱喃<sub>一</sub>訶訶訶微娑麼<sub>二合</sub>曳<sub>平二</sub>娑縛訶</span>
                </blockquote>
            </div>
            <div class="mb-3">
                <p>義云。次地藏菩薩印。先作指向內相叉拳。申二火指竪之。令指頭一寸許不相到。即是也 <sub class="sub-lg">(二空並竪餘如常也)</sub>。計都是旗。此印如旗也。</p>
            </div>
            <div class="mb-3">
                <p>真言。訶訶訶 <sub class="sub-lg">(離三因如上也)</sub>吠薩未曳 <sub class="sub-lg">(希有也。一切有情常有我想種種苦惱。纔念之我想即除。此為希有也。亦是希可義也。)</p>
            </div>
            <div class="mb-3">
                <p>胎軌云。祕密內為縛。舒散於火輪傳授私記云。肉縛二火直竪不相著。</p>
            </div>
            <div class="mb-3">
                <p>對授記云。北方地藏尊印。海大德説以下第七會也。是第二重北方中也。</p>
            </div>
            <div class="mb-3">
                <p>文云。祕密○者開散二火直不相著之。是名旗印。此印如旗故。</p>
            </div>
            <div class="mb-3">
                <p>大和上記云。此印如儀軌。唯二空並立也。意大德説同海本説。權僧正大和上説。惠珍兩和上説。同海本説。無大和上記。別記亦同 <sub class="sub-lg">(但云是旗印)</sub>。</p>
            </div>
            <div class="mb-3">
                <p>以上北方地藏會印明訖。</p>
            </div>
            <div class="mb-3">
                <p>經第二 <sub class="sub-lg">(藏品)</sub>云。時地藏菩薩住金剛不可壞行境界三昧。説真言曰</p>
                <blockquote>
                    <span class="word">南麼三曼多勃馱喃<sub>一</sub>訶訶訶<sub>二</sub>素<sub>上</sub>怛拏<sub>三</sub>莎訶 </span>
                    <sub class="sub-lg">(私云。此品中不説印。諸尊皆爾。)</sub>
                </blockquote>
            </div>
            <div class="mb-3">
                <p>義云。經云。時地藏菩薩○三昧者。猶如金剛地輪。以極堅固不可壞故。能住持萬物使不傾動。又如大地出生種種珍寶伏藏無有窮盡。含藏一切種子令不杇敗。漸次滋榮。今此三昧亦如是。能持法界眾生善根種子。經無量億劫終不敗亡。出生實性功德。無有窮盡。又如金剛。以是地之實性。是故不可破傷。今此堅固菩提心。亦是第一實際。乃至常在無間地獄。為一切眾生備受眾苦。不亦為煩惱所傷故。以為喻也。</p>
            </div>
            <div class="mb-3">
                <p>初云。賀字是因義。如世間種子雖有上中下性。無不因地而生。一切眾生萬善種子雖有三乘種種差別。無不因此金剛地生。故三轉言之。即是三乘種種因義也。復次如世間種子。雖復從緣增長有種種類形。至論地界無生無滅。今此三乘種子亦復如是。以所生法不可得故。當知因即非因。至論實體但一金剛界耳。</p>
            </div>
            <div class="mb-3">
                <p>次云。蘇多努者是善子義。以此堅固菩提心荷負世間。不可傾動。是則能紹如來大悲家業。故以為名。復次種性真正故名為善子。觀一切眾生一毫之善。皆從寶王如來種性生。此是地藏菩薩。最真實語正以賀字為此真言體也。</p>
            </div>
            <div class="mb-3">
                <p>
                    疏云。時此菩薩入不可壞金剛行三昧金剛者。即是菩提之心。此菩提心即是不可壞。依此進行是金剛行也。
                    訶訶訶 <sub class="sub-lg">(上訶字是真言體也。訶是行義也。亦是笑義。入阿字門即是離。喜喜者即生滅法。所以有三者即三乘行。此菩薩以種種法門利益眾生也。)</sub>。
                    蘇多奴 <sub class="sub-lg">(蘇是善。多奴是子義。所謂善子也。亦是輕安義也。)</sub>。
                    猶善能行此。利益有情之行。真是佛子。從善性而生。故名善子。從佛而生。故名佛子也。此菩薩即能説種種三乘行門。利益眾生。如十輪廣説。
                </p>
            </div>
            <div class="mb-3">
                <p>經第四 <sub class="sub-lg">(密印品)</sub>云。同前印申二水輪風輪。餘如拳。是地藏菩薩印 <sub class="sub-lg">(私云真言同藏品)。</sub></p>
            </div>
            <div class="mb-3">
                <p>
                    義云。仰向內相叉作拳合掌。申地水指令頭合 <sub class="sub-lg">(如峯叉也)</sub>。
                    二空並而竪之。真言訶訶訶 <sub class="sub-lg">(離三因也。謂聲聞緣覺菩薩之因也。凡此中諸真言皆自説本尊之德行。此總持地藏菩薩之德也。)</sub>。
                    蘇哆奴 <sub class="sub-lg">(妙身也。由身德淨故名妙身。妙身即法身也。)</sub>。
                </p>
            </div>
            <div class="mb-3">
                <p>胎軌云。地藏內為縛地水空並合。</p>
            </div>
            <div class="mb-3">
                <p>傳授記云。內縛地水空並竪合。</p>
            </div>
            <div class="mb-3">
                <p>青龍軌云。地藏圓滿合二空風輪側。如是應器成。</p>
            </div>
            <div class="mb-3">
                <p>攝軌云。地藏同馬頭申水風餘拳。</p>
            </div>
            <div class="mb-3">
                <p>對授記云。海大德説。是第三院九菩薩中第五菩薩也。內縛地水空密並合竪也 <sub class="sub-lg">(此印與經不同)</sub>。意大德説。同權僧正大和尚説。惠和上説同海説也。珍和上用鉢印。二空持二地下節。</p>
            </div>
            <div class="mb-3">
                <p>別記云。內縛二空二水地並竪。</p>
            </div>
            <div class="mb-3">
                <p>理界記云。地水火三指頭相合窪之。以二風押火甲。以二空加風側如鉢 <sub class="sub-lg">(云云)</sub>。</p>
                <p><sub class="sub-lg">(以上觀音會地藏印明了。經疏文北方地藏之外於觀音會復列此尊。雖然現圖觀音會中不置此尊矣。)</sub></p>
            </div>
            <div class="mb-3">
                <p>山王院大師在唐記云。凡胎藏者。此法界理體。所以諸尊無有次第。亦無定位混將來置一處也。得大地藏在觀音部其義如此。又或有印無真言。或有真言無印。或上無名印相如是等類皆互相顯。應得意耳 <sub class="sub-lg">(云云)</sub>。</p>
            </div>
            <div class="mb-3">
                <p>經第一 <sub class="sub-lg">(具緣品)</sub>云。至於北勝方○。而造具善忍地藏摩訶薩。其座極巧麗身。處於焰胎。雜寶莊嚴地。綺錯互相間。四寶為蓮花。聖者所安住。</p>
            </div>
            <div class="mb-3">
                <p>義云。次於北方盡地藏菩薩。於種種間飾雜寶莊嚴地上。以金銀頗胝水精四寶為蓮花座。亦令窮極巧麗。其菩薩在花座上。光焰周遍其身如在胎藏。故云處於焰胎也。此聖者主持寶王心地中性起功德無邊寶藏。故其幖幟。以一切珍奇雜寶綺飾雜莊嚴也。其餘眷屬菩薩義亦同之。當於地藏於地藏之右置寶處菩薩。地藏之左置寶掌菩薩。次於寶處之右置持地菩薩。寶掌之左置寶印手菩薩。持地之右又置堅固意菩薩。如是上首諸尊。又各各於其左右畫諸眷屬以自圍遶也。</p>
            </div>
            <div class="mb-3">
                <p>經第三 <sub class="sub-lg">(轉字輪品)</sub>云。夜叉方地藏菩薩。色如鉢孕遇花。手持蓮花。以諸瓔珞莊嚴。或置彼印。或置字句。所所謂伊字義云北方作地藏。色如鉢孕瞿花色。西方有此花。如此間栗穀之花色。房亦如穀穗。甚香也。此菩薩手執執蓮花。以諸瓔珞莊嚴其身。若作印者。但置蓮花也。若置字者作伊字也。</p>
            </div>
            <div class="mb-3">
                <p>經第五 <sub class="sub-lg">(祕密曼荼羅品)</sub>云。北方地藏尊密印次當説。先作莊嚴座在因陀羅壇大蓮發光焰間錯備眾色。於彼建大幢。大寶在其端。是名最勝密印之形像。義云。北方地藏菩薩 <sub class="sub-lg">(大因陀羅輪也)</sub>。於金剛輪中作寶莊嚴地 <sub class="sub-lg">(所謂在中無置座也)。</sub>地上畫蓮花。具種種色。花上作幢。幢頭安寶不畫形。但畫幢也。若作此印者極上色者此是形相也。此説名最上形是歎也。若作此印於諸印中最為勝上殊妙。彼中畫印慇懃作之也。此菩薩有無量眷屬。</p>
            </div>
            <div class="mb-3">
                <p>右印明。形色。種子。曼荼羅。文粗抄之畢。</p>
            </div>
            <div class="mb-3">
                <p>或都壇。或別壇。消息在意而已。</p>
            </div>
            <div class="mb-3">
                <p>唱禮</p>
                <blockquote>若都壇時。八葉佛眼之次加本尊號 <sub class="sub-lg">(如常)</sub>。</blockquote>
                <blockquote>
                    若別壇時。三身。佛眼。本尊。五大明王。大小三部。
                    <img src="{{ $page->baseUrl.'/assets/images/jpgsdm/m@r.jpg' }}" alt="m@r" />
                    <img src="{{ $page->baseUrl.'/assets/images/jpgsdm/dhi.jpg' }}" alt="dhi" />
                    <img src="{{ $page->baseUrl.'/assets/images/jpgsdm/v@i.jpg' }}" alt="v@i" /> <sub class="sub-lg">(地)</sub>
                    <img src="{{ $page->baseUrl.'/assets/images/jpgsdm/ga.jpg' }}" alt="ga" />
                    <img src="{{ $page->baseUrl.'/assets/images/jpgsdm/rbha.jpg' }}" alt="rbha" /> <sub class="sub-lg">(藏)</sub>。
                </blockquote>
                依悉地者 <sub class="sub-lg">(行法如常)</sub>。
            </div>
            <div class="mb-3">
                <p>
                    大原甚密抄云。樓閣中有八葉大蓮花臺。上有月輪。輪中有
                    <img src="{{ $page->baseUrl.'/assets/images/jpgsdm/ha.jpg' }}" alt="ha" />訶
                    字。字變成寶幢 <sub class="sub-lg">(或寶珠)</sub>。幢變成地藏菩薩。作聲聞形像。著袈裟端覆左肩左手持盈花形。右手陀無畏。令坐蓮花。眷屬圍遶 <sub class="sub-lg">(八大菩薩經云。左臍下拓鉢云云。檢胎藏圖云右手持月形。或持寶珠云云。)</sub>。
                </p>
            </div>
            <div class="mb-3">
                <p>讚 <sub class="sub-lg">(金界幢菩薩讚也)</sub></p>
                <blockquote>
                    <!-- https://cbetaonline.dila.edu.tw/zh/T18n0873_p0304b05 -->
                    嚩日羅計都。蘇薩怛縛羅他。嚩日羅特嚩惹蘇覩灑迦囉。怛那計都。摩訶嚩日羅嚩日羅野瑟𪘜[齒*束]曩牟蘇都諦。
                </blockquote>
            </div>
            <div class="mb-3">
                <p>印。內縛二火直竪不相著。</p>
            </div>
            <div class="mb-3">
                <p class="mb-2">言曰</p>
                <blockquote>訶訶訶尾娑麼曳娑縛訶 <sub class="sub-lg">(有歸)</sub></blockquote>
                <p class="mb-2">爾時地藏菩薩説呪曰</p>
                <blockquote>唵閻麼他閻麼儞俱苾俱苾三曼多莎訶 <sub class="sub-lg">(已上大原説)</sub></blockquote>
                <p class="mb-2">心呪</p>
                <blockquote>唵炎曼他耆沙呵</blockquote>
                <p class="mb-2">心中心呪</p>
                <blockquote>唵砥呬</blockquote>
                <p><sub class="sub-lg">(私云。已上三呪出儀軌。)</sub></p>
            </div>
            <div class="mb-3">
                <p>
                    念誦
                    <sub class="sub-lg">(先部母　次大日　次本尊　次諸菩薩　次諸天總　次成就明　次部主　次又部母)</sub>
                </p>
            </div>
            <div class="mb-3">
                <p class="mb-2">集經云。地藏菩薩法身印呪</p>
                <blockquote>仰兩手二頭指二無名指各相鉤。右押左。二大指屈掌中。以二中指各屈握二大指申上。二小指又各屈掌中。大指來去。</blockquote>
                <p class="mb-2">呪曰</p>
                <blockquote>
                    <span class="word">唵<sub>一</sub>波羅<sub>二合</sub>味<sub>平音</sub>馱儞<sub>二</sub>莎訶</span>
                </blockquote>
                <p class="mb-2">又地藏菩薩印</p>
                <blockquote>合兩腕二大指直竪。屈二頭指押二大指頭。二中指直竪。以二無名指各苾於中指背上。二小指開直竪。</blockquote>
                <p class="mb-2">是法印呪。若有人。每以白月十四日。黑月十四日香湯洗浴。立地端身並兩脚。已而作此印誦呪。護身滅罪療病大好有驗。</p>
            </div>
            <div class="mb-3">
                <p>依金界者</p>
            </div>
            <div class="mb-3">
                <p>一印四印等。曼荼羅行法。可委尋習矣。又八大菩薩曼荼羅。經意是通通法歟。可問之。右説以十六尊中幢菩薩讚為地藏贊。幢菩薩即地藏歟。或處云。濁惡世中有一菩薩。其名曰尾嚩嚩哩普邏迦。此云地藏。常現威光自在藥叉之身。恒説三乘。隨其所應安置三乘不退轉地。此大菩薩安住首楞伽摩三昧。悟入一切如來妙境界。能現不可思儀。一切惡鬼發起無量殊勝功德。今是地藏菩薩。</p>
            </div>
            <div class="mb-3">
                <p class="mb-2">與最勝王經鴝嚧只羅菩薩一體分身。鴝嚧只囉此云妙幢。地藏以三訶字標三惡趣利益。正了知王以五訶示五道利益。妙幢現金鼓光滅三途罪苦。妙幢真言曰</p>
                <blockquote>
                    <span class="word">唵蘇計都吠薩嚩播野惹賀野招孃<sub>二合</sub>曩吽</span>
                <blockquote>
            </div>
            <div class="mb-3">
                <p>弘法大師最勝王經釋云。妙幢者地藏異名。古賢見聞集文云。雖本地叵測。上智炬佛見南方寶相佛也。此佛變成妙幢。有此義故中妙幢菩薩。下正了知王 <sub class="sub-lg">(云云)</sub>。</p>
            </div>
            <div class="mb-3">
                <p>一切能</p>
            </div>
            <div class="mb-3">
                <p>大乘大集地藏十輪經第一云。佛言善男子。假使有人於彌勒及妙吉祥并觀自在普賢之類而為上首。恒河沙等大菩薩摩訶薩所於百劫中至心歸依。稱名念誦。禮拜供養。求諸所願。不如有人。於一食頃。至心歸依。稱名念誦。禮拜供養。地藏菩薩求諸所願。速得滿足。所以者何地藏菩薩利益安樂一切有情。令諸有情所願滿足。如如意寶。亦如伏藏。如是大士。為欲成就諸有情故。久修堅固。大願大悲。勇猛精進。過諸菩薩。是故汝等當供養。</p>
            </div>
            <div class="mb-3">
                <p class="mb-2">○説偈言</p>
                <blockquote>
                    地藏真大士　具足多功德<br/>
                    現聲聞色相　來稽首大師<br/>
                    一日稱地藏　功德大名聞<br/>
                    勝俱胝劫中　稱餘智者德<br/>
                    眾生宿惡業　刀兵病飢饉<br/>
                    隨所在惱害　皆能令解脱<br/>
                    眾生五趣身　諸苦所逼切<br/>
                    歸依地藏者　有苦悉皆除
                </blockquote>
            </div>
            <div class="mb-3">
                <p>占察善惡業報經上云。爾時會中有菩薩。名堅淨信。從座而起。令掌白佛言○如佛先説。若我去世正法滅後。像法向盡及入末世。如是之時。眾生福薄多諸衰惱。國土散亂災害頻起。種種厄難怖懼逼繞。我諸弟子失其善念。唯增長貪瞋嫉妬我慢設有像似行善法者。但求世間利益。以之為主。不能專心。修出要法。○以如是等眾多障礙因緣故。於佛法中鈍根。少信得道者極少。乃至漸漸於三乘中信心成就者亦復甚少○我今為此未來惡世像法。向盡及末法中有微少善根者。請問如來。設何方便開化示導。令生信心得除衰惱。以被眾生遭值惡時。多障礙故退其善心。○世尊大慈一切種智願與方便而曉喻之。離疑網。除諸障礙信得增長。隨於何乘。速獲不退。佛告堅淨信善哉善哉。快問斯事。深適我意。今此眾中有菩薩○名曰地藏。汝應以此事而請問之。彼當為汝建立方便。開示演説成所願。時堅淨信菩薩。復白佛言。如何如來無上大智。何意不説。乃欲令彼地藏菩薩而演説之。佛告堅淨意。汝莫生高下想。此善男子心已來過無量無邊不可思議阿僧祇劫。久已能度薩婆若海。功德滿足。但依本願自在力故。權巧現化影應十方。雖復普遊一切剎土。常起功業。與於五濁惡世。化益偏厚。亦依本願力。所童習故。及因眾生應受化業故也。彼從十一劫來。莊嚴此世界。成就眾生。是故在此會中。身相端嚴。威德殊勝。唯除如來無能能過者。又於此世界。所有作業。唯遍吉觀世音等諸大菩薩。皆不能及。以是菩薩本誓願力。速滿眾生一切所求。能滅眾生一切重罪。除諸障礙。現得安穩。又是菩薩名為善安慰説者。所謂巧演深法。能善開導初學。發意求大乘者令不怯弱。以如是等因緣。於此世界。眾生渴仰。受化得度。是故我今令彼説 <sub class="sub-lg">(云云)</sub>。</p>
            </div>
            <div class="mb-3">
                <p>下卷云。爾時佛告諸大眾言○若人得聞彼地藏菩薩○名號。及信其所説者。當知是人。速能得離一切所有諸障礙事。疾至無上道。</p>
            </div>
            <div class="mb-3">
                <p>須彌四域經云。地藏菩薩為神農 <sub class="sub-lg">(云云)</sub>。</p>
            </div>
            <div class="mb-3">
                <p>仁王經疏云 <sub class="sub-lg">(道液)</sub>。地藏恒居無間。豈不深思 <sub class="sub-lg">(文)</sub>。</p>
            </div>
            <div class="mb-3">
                <p class="mb-2">
                    現在未來天大眾　吾今慇懃付囑汝<br/>
                    以大神通方便力　勿令墮在諸惡趣
                </p>
                <p class="mb-2">地藏曰</p>
                <blockquote>唯願世尊。不以後世惡業眾生為慮。</blockquote>
                <p class="mb-2">本願經佛忉利天付屬文也。</p>
            </div>
            <div class="mb-3">
                <p>地藏菩薩法　第四十四</p>
            </div>
            <div class="d-flex mb-3">
                <div class="me-auto w-50">
                    <a href="/ksitigarbha-rituals" class="btn btn-link border p-2 me-3 w-100 h-100 text-decoration-none">
                        <div class="d-flex h-100 justify-content-between align-items-center">
                            <div class="d-flex">
                                <i class="fas fa-arrow-circle-left fs-1"></i>
                            </div>
                            <div class="d-flex w-100 justify-content-center">
                                <span class="ms-2 text-start text-truncate">地藏菩薩儀軌</span>
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
