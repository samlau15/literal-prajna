@extends('_layouts.main')

@push('meta')
<meta name="robots" content="noindex">
@endpush

@section('title')
<title>地藏六使畫作要求</title>
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
                x-data="{currItems: {preface: true}}"
                class="sticky-top"
            >
                <ul class="nav navbar-nav">
                    <li><a @@click="jumpTo('preface')" :class="{active: currItems['preface'] && true}" class="nav-link text-nowrap" href="#preface">前言</a></li>
                    <li>
                        <a @@click="jumpTo('deities')" :class="{active: currItems['deities'] && true}" class="nav-link text-nowrap" href="#deities">神明描述</a>
                        <ul class="nav navbar-nav">
                            <li><a @@click="jumpTo('deities-00')" :class="{active: currItems['deities-00'] && true}" class="nav-link text-nowrap" href="#deities-00">地藏菩薩</a></li>
                            <li><a @@click="jumpTo('deities-01')" :class="{active: currItems['deities-01'] && true}" class="nav-link text-nowrap" href="#deities-01">閻魔使者</a></li>
                            <li><a @@click="jumpTo('deities-02')" :class="{active: currItems['deities-02'] && true}" class="nav-link text-nowrap" href="#deities-02">持寶童子</a></li>
                            <li><a @@click="jumpTo('deities-03')" :class="{active: currItems['deities-03'] && true}" class="nav-link text-nowrap" href="#deities-03">大力使者</a></li>
                            <li><a @@click="jumpTo('deities-04')" :class="{active: currItems['deities-04'] && true}" class="nav-link text-nowrap" href="#deities-04">大慈大悲天女</a></li>
                            <li><a @@click="jumpTo('deities-05')" :class="{active: currItems['deities-05'] && true}" class="nav-link text-nowrap" href="#deities-05">寶藏天女 (吒羅佉)</a></li>
                            <li><a @@click="jumpTo('deities-06')" :class="{active: currItems['deities-06'] && true}" class="nav-link text-nowrap" href="#deities-06">接天使者 (因陀羅)</a></li>
                        </ul>
                    </li>
                    <li>
                        <a @@click="jumpTo('scene')" :class="{active: currItems['scene'] && true}" class="nav-link text-nowrap" href="#scene">場景</a>
                        <ul class="nav navbar-nav">
                            <li><a @@click="jumpTo('scene-00')" :class="{active: currItems['scene-00'] && true}" class="nav-link text-nowrap" href="#scene-00">位置排列</a></li>
                            <li><a @@click="jumpTo('scene-01')" :class="{active: currItems['scene-01'] && true}" class="nav-link text-nowrap" href="#scene-01">備註</a></li>
                        </ul>
                    </li>
                    <li><a @@click="jumpTo('canvas')" :class="{active: currItems['canvas'] && true}" class="nav-link text-nowrap" href="#canvas">畫布</a></li>
                    <li><a @@click="jumpTo('timing')" :class="{active: currItems['timing'] && true}" class="nav-link text-nowrap" href="#timing">時間</a></li>
                </ul>
            </x-toc>
        </div>
        <div id="content" class="col-md-9">
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item">畫作要求</li>
                    <li class="breadcrumb-item active">地藏六使</li>
                </ol>
            </nav>
            <h1>畫作要求</h1>
            <h2 class="toc-item" id="preface">前言</h2>
            <div class="mb-3">
                <p>
                    本文所描述的繪畫要求來自於日本經典「溪嵐拾葉集」中記載的「地藏菩薩念誦儀軌」。
                    原文可以在
                    <a href="https://21dzk.l.u-tokyo.ac.jp/SAT/ddb-sat2.php?mode=detail&useid=2410_,76,0582c12&key=%E5%9C%B0%E8%97%8F%E8%8F%A9%E8%96%A9%E5%BF%B5%E8%AA%A6%E5%84%80%E8%BB%8C&ktn=&mode2=2" target="_blank" >這裡</a>
                    查看。
                </p>
                <p>
                    由於日本所結集的經文主要來源都是來自中國，
                    神明描述都是用文言文寫成的，
                    因此本人仍有幸能夠閱讀獲益。
                    本文之參考圖片只是為了讓你大致了解神明的形象，
                    你可以自由發揮自己的繪畫風格。
                    我個人比較喜歡尼泊爾的尼瓦爾族的繪畫風格。
                </p>
                <p>
                    此外不同藝術家其宗教背景亦各有不同，
                    因此這裏的神明描述可能與你的信仰有所衝突。
                    如果你對某些描述有保留，可向本人提出詢問。
                </p>
            </div>
            <h2 class="toc-item" id="deities">神明描述</h2>
            <h4 class="toc-item" id="deities-00">地藏菩薩</h4>
            <div class="mb-3">
                <p>
                    <h6>原文：</h6>
                    「白絲或羂索上畫地藏菩薩形像。安坐千葉白蓮ノ上ニ。左ノ手ニ持如意寶珠。右手ニ執錫杖。身ノ色白肉色。現聲聞形。以種種瓔珞莊嚴其身」
                </p>
                <p>
                    <h6>列點：</h6>
                    <ol>
                        <li>他端坐於一朵<b>白蓮花</b>之上。</li>
                        <li>他的左手握著一顆<b>寶珠</b>。</li>
                        <li>他的右手握著一把<b>錫杖</b>。</li>
                        <li><b>白色</b>肌膚。</li>
                        <li><b>僧侶</b>相。</li>
                        <li>頸項戴上<b>寶珠寶石串成的頸鍊</b>。</li>
                    </ol>
                </p>
                <p>
                    <h6>闡述：</h6>
                    <div class="mb-3">
                        這張「地藏菩薩」像基本上符合描述。 但是我認為它是人工合成圖，因其細節缺失且模糊不清。
                    </div>
                    <div class="mb-3">
                        <a href="/assets/images/ksitigarbha2.webp" target="_blank">
                            <img width="200" src="/assets/images/thumbnails/ksitigarbha2.webp" class="img-thumbnail" alt="ksitigarbha2">
                        </a>
                    </div>
                    <div class="mb-3">
                        下圖雕像的臉部特徵比上圖清晰得多，可作參考。
                    </div>
                    <div class="mb-3">
                        <a href="/assets/images/ksitigarbha3.webp" target="_blank">
                            <img width="200" src="/assets/images/thumbnails/ksitigarbha3.webp" class="img-thumbnail" alt="ksitigarbha3">
                        </a>
                    </div>
                    <div class="mb-3">頂戴五佛冠。</div>
                    <div class="mb-3">
                        <a href="/assets/images/ksitigarbha4.webp" target="_blank">
                            <img width="200" src="/assets/images/thumbnails/ksitigarbha4.webp" class="img-thumbnail" alt="ksitigarbha4">
                        </a>
                    </div>
                    <div class="mb-3">
                        你可以對上述畫像進行精描修改。
                        例如在他的背上畫上熾熱的紅色光環，
                        給他戴上一條色彩鮮豔的頸鍊，
                        讓他坐上白色蓮花寶座等等。
                        雖然經文中提到用白色蓮花作坐墊，你也可以在花瓣的邊沿塗粉紅色，使其看來更加自然。
                    </div>
                    <div class="mb-3">
                        與其他尼泊爾畫作一樣，寶座和背後風景應遵循尼瓦爾風格。
                    </div>
                    <div class="mb-3">
                        <a href="/assets/images/vajrasattva.webp" target="_blank">
                            <img width="200" src="/assets/images/thumbnails/vajrasattva.webp" class="img-thumbnail" alt="vajrasattva">
                        </a>
                    </div>
                </p>
            </div>
            <h4 class="toc-item" id="deities-01">閻魔使者</h4>
            <div class="mb-3">
                <p>
                    <h6>原文：</h6>
                    「一蓮花座ノ下ノ左ノ方ニ畫閻魔使者。身白肉色左手ニ持寶鏡。右ノ手ニ執檀荼幢」
                </p>
                <p>
                    <h6>列點：</h6>
                    <ol>
                        <li><b>白色</b>肌膚。</li>
                        <li>他的左手拿著一面<b>寶鏡</b>。</li>
                        <li>他的右手拿著一根<b>人頭權杖</b>。</li>
                    </ol>
                </p>
                <p>
                    <h6>闡述：</h6>
                    <div class="mb-3">
                        「閻魔天」是掌管地獄中的死神和審判之神。
                        他就像一位法官，看起來既冷酷又嚴肅。
                    </div>
                    <div class="mb-3 me-3 float-start">
                        <figure class="figure">
                            <a href="/assets/images/yama-japan.webp" target="_blank">
                                <img width="200" src="/assets/images/thumbnails/yama-japan.webp" class="img-thumbnail" alt="yama-japan-style">
                            </a>
                            <figcaption class="figure-caption text-center" style="width: 200px">在日本，「閻魔天」看起來像個天神。</figcaption>
                        </figure>
                    </div>
                    <div class="mb-3 me-3 float-start">
                        <figure class="figure">
                            <a href="/assets/images/naropa.webp" target="_blank">
                                <img width="200" src="/assets/images/thumbnails/naropa.webp" class="img-thumbnail" alt="naropa">
                            </a>
                            <figcaption class="figure-caption text-center" style="width: 200px">可借「那洛巴」或「畢魯巴」的畫像，展現威嚴的面容。</figcaption>
                        </figure>
                    </div>
                    <div class="mb-3 me-3 float-start">
                        <figure class="figure">
                            <a href="/assets/images/virupa.webp" target="_blank">
                                <img width="200" src="/assets/images/thumbnails/virupa.webp" class="img-thumbnail" alt="virupa">
                            </a>
                            <figcaption class="figure-caption text-center" style="width: 200px">「畢魯巴」的畫像。</figcaption>
                        </figure>
                    </div>
                    <div class="clearfix"></div>
                    <div class="mb-3">
                        雖然「閻魔」在此扮演的是審判者或懲罰者的角色，
                        但古代「閻魔」的形象並不像「閻曼達迦」（「閻魔」的毀滅者）那樣展現出憤怒的神態。
                        因此，沒有必要在他身上描繪太多恐怖的裝束，
                        例如用人頭、獸皮等製成的飾物。
                        我認為可以保留骷髏王冠，以表示他與死亡的某種聯繫。
                    </div>
                    <div class="mb-3">
                        下圖是印度奧里薩邦博物館收藏的一尊「閻魔」像，他並沒有太多恐怖的裝束。
                        只是左手持繩索，用來捆綁罪人；右手持粗棒，用來懲罰罪人。
                        他手中的法器形狀與經文中所描述的非常相似，也許寶鏡其實是繩索，而人頭杖亦只是粗棒而已。
                    </div>
                    <div class="mb-3">
                        <a href="/assets/images/yama-india.webp" target="_blank">
                            <img width="200" src="/assets/images/thumbnails/yama-india.webp" class="img-thumbnail" alt="yama-india-style">
                        </a>
                    </div>
                    <div class="mb-3">你也可以畫他<b>坐在水牛背上</b>，右膝彎曲，左腿垂下來。</div>
                    <div class="mb-3">
                        <a href="/assets/images/yama2-japan.webp" target="_blank">
                            <img width="200" src="/assets/images/thumbnails/yama2-japan.webp" class="img-thumbnail" alt="yama2-japan-style">
                        </a>
                    </div>
                    <div class="mb-3">關於寶鏡，參考如下：</div>
                    <div class="mb-3 me-3 float-start">
                        <figure class="figure">
                            <a href="/assets/images/treasure-mirror.webp" target="_blank">
                                <img width="200" src="/assets/images/thumbnails/treasure-mirror.webp" class="img-thumbnail" alt="treasure-mirror">
                            </a>
                            <figcaption class="figure-caption text-center" style="width: 200px">將法輪轉換為鏡面。</figcaption>
                        </figure>
                    </div>
                    <div class="mb-3 me-3 float-start">
                        <figure class="figure">
                            <a href="/assets/images/yama-tibet.webp" target="_blank">
                                <img width="200" src="/assets/images/thumbnails/yama-tibet.webp" class="img-thumbnail" alt="yama-tibet-style">
                            </a>
                            <figcaption class="figure-caption text-center" style="width: 200px">藏傳畫像描繪「閻魔」手持鏡子的形象。</figcaption>
                        </figure>
                    </div>
                    <div class="clearfix"></div>
                    <div class="mb-3">關於人頭權杖，參考如下：</div>
                    <div class="mb-3">
                        <a href="/assets/images/sceptre-of-heads.webp" target="_blank">
                            <img width="200" src="/assets/images/thumbnails/sceptre-of-heads.webp" class="img-thumbnail" alt="sceptre-of-human-heads">
                        </a>
                    </div>
                    <div class="mb-3">
                        為什麼要畫兩個頭而不是一個呢？
                        有人認為，一個頭會吐出鐵鍊捆綁罪人，另一個頭會向「閻魔」稟告你前世所犯的罪孽。
                        在日本，這些頭像被稱為「見目嗅鼻」（意為觀察和嗅探）。
                        紅色的頭像（男性的臉）負責觀察，
                        白色的頭像（女性的臉）負責嗅探。
                        它們的作用類似，都是告訴「閻魔」你過往生是善是惡。
                    </div>
                </p>
            </div>
            <h4 class="toc-item" id="deities-02">持寶童子</h4>
            <div class="mb-3">
                <p>
                    <h6>原文：</h6>
                    「二次畫持寶童子。其身如日光。左ノ手ニ持如意寶珠。右手與願印」
                </p>
                <p>
                    <h6>列點：</h6>
                    <ol>
                        <li>他的身體如同<b>陽光般閃耀</b>。</li>
                        <li>他的左手拿著<b>寶珠</b>。</li>
                        <li>他的右手結<b>與願印</b>。</li>
                    </ol>
                </p>
                <p>
                    <h6>闡述：</h6>
                    <div class="mb-3">他於餓鬼界中現童子身相的神明，<b>面露微笑</b>是慷慨的象徵。</div>
                    <div class="mb-3">你可以參考佛陀的童子相：</div>
                    <div class="mb-3">
                        <a href="/assets/images/child-buddha.webp" target="_blank">
                            <img width="200" src="/assets/images/thumbnails/child-buddha.webp" class="img-thumbnail" alt="child-buddha">
                        </a>
                    </div>
                    <div class="mb-3">另一個童子相的參考：</div>
                    <div class="mb-3">
                        <a href="/assets/images/childlike-god.webp" target="_blank">
                            <img width="200" src="/assets/images/thumbnails/childlike-god.webp" class="img-thumbnail" alt="childlike-god">
                        </a>
                    </div>
                    <div class="mb-3">關於寶珠，參考如下：</div>
                    <div class="mb-3">
                        <a href="/assets/images/cintamani.webp" target="_blank">
                            <img width="200" src="/assets/images/thumbnails/cintamani.webp" class="img-thumbnail" alt="cintamani">
                        </a>
                    </div>
                </p>
            </div>
            <h4 class="toc-item" id="deities-03">大力使者</h4>
            <div class="mb-3">
                <p>
                    <h6>原文：</h6>
                    「三次畫大力使者。身青黒色載師子王左手持獸稍。右手開赦押右ノ腰。以忿怒惡眼觀四方形」
                </p>
                <p>
                    <h6>列點：</h6>
                    <ol>
                        <li>他的膚色呈<b>藍黑色</b>。</li>
                        <li>他的坐騎是一隻<b>獅子王</b>。</li>
                        <li>他左手握著<b>獸鞭</b>，用來馴服野獸。</li>
                        <li>他的右手<b>叉腰</b>。</li>
                        <li>他面露<b>怒容，環顧四周</b>。</li>
                    </ol>
                </p>
                <p>
                    <h6>闡述：</h6>
                    <div class="mb-3">
                        他看起來像個體格強壯的阿修羅。
                        為了讓他看起來恐怖，臉部特徵應該包括<b>三隻眼睛和尖牙</b>。
                        他全身都應該<b>燃燒著火焰</b>。
                        他騎乘的獅王也在<b>憤怒地咆哮</b>。
                        他是負責馴服畜道的野獸，而不是殺戮牠們，
                        所以他身上不會出現任何人類或動物殘肢的飾物。
                        我注意到忿怒尊通常被描繪成頭大肚胖，
                        在這裡我希望他稍為肌肉發達些，像摔角手一般。
                    </div>
                    <div class="mb-3">以下明王相你可作參考：</div>
                    <div class="me-3 mb-3 float-start">
                        <a href="/assets/images/vidyaraja.webp" target="_blank">
                            <img width="200" src="/assets/images/thumbnails/vidyaraja.webp" class="img-thumbnail" alt="vidyaraja">
                        </a>
                    </div>
                    <div class="me-3 mb-3 float-start">
                        <a href="/assets/images/vidyaraja2.webp" target="_blank">
                            <img width="200" src="/assets/images/thumbnails/vidyaraja2.webp" class="img-thumbnail" alt="vidyaraja2">
                        </a>
                    </div>
                    <div class="me-3 mb-3 float-start">
                        <a href="/assets/images/vidyaraja3.webp" target="_blank">
                            <img width="200" src="/assets/images/thumbnails/vidyaraja3.webp" class="img-thumbnail" alt="vidyaraja3">
                        </a>
                    </div>
                    <div class="clearfix"></div>
                    <div class="me-3 mb-3 float-start">
                        <a href="/assets/images/vidyaraja4.webp" target="_blank">
                            <img width="200" src="/assets/images/thumbnails/vidyaraja4.webp" class="img-thumbnail" alt="vidyaraja4">
                        </a>
                    </div>
                    <div class="clearfix"></div>
                    <div class="mb-3">關於獸鞭，參考如下：</div>
                    <div class="mb-3">
                        <a href="/assets/images/whip.webp" target="_blank">
                            <img width="200" src="/assets/images/thumbnails/whip.webp" class="img-thumbnail" alt="whip">
                        </a>
                    </div>
                </p>
            </div>
            <h4 class="toc-item" id="deities-04">大慈大悲天女</h4>
            <div class="mb-3">
                <p>
                    <h6>原文：</h6>
                    「四右方畫大慈大悲天女。 画像身白肉色。左ノ手與願印。右ノ手ニ執圓扇」
                </p>
                <p>
                    <h6>列點：</h6>
                    <ol>
                        <li>她的膚色<b>白皙</b>。</li>
                        <li>她的左手結<b>與願印</b>。</li>
                        <li>她的右手拿著一把<b>圓扇</b>。</li>
                    </ol>
                </p>
                <p>
                    <h6>闡述：</h6>
                    <div class="mb-3">
                        這位女神如同母親一般，對她的孩子們有著無條件的愛。
                        她以慈悲之心影響阿修羅界的眾生。
                    </div>
                    <div class="mb-3">我想你可以以「白度母」作參考，將七眼改為兩眼：</div>
                    <div class="mb-3">
                        <a href="/assets/images/white-tara.webp" target="_blank">
                            <img width="200" src="/assets/images/thumbnails/white-tara.webp" class="img-thumbnail" alt="white-tara">
                        </a>
                    </div>
                    <div class="mb-3">關於圓扇，參考如下：</div>
                    <div class="me-3 mb-3 float-start">
                        <figure class="figure">
                            <a href="/assets/images/devi.webp" target="_blank">
                                <img width="200" src="/assets/images/thumbnails/devi.webp" class="img-thumbnail" alt="devi">
                            </a>
                          <figcaption class="figure-caption text-center" style="width: 200px">用孔雀羽毛作扇也不錯。</figcaption>
                        </figure>
                    </div>
                    <div class="clearfix"></div>
                </p>
            </div>
            <h4 class="toc-item" id="deities-05">寶藏天女 (吒羅佉)</h4>
            <div class="mb-3">
                <p>
                    <h6>原文：</h6>
                    「五次畫寶藏天女身。齊色七寶衣甲。以惡眼視一切鬼神形。左手持舍利塔。右ノ手執寶棒」
                </p>
                <p>
                    <h6>列點：</h6>
                    <ol>
                        <li>她頂戴王冠，戴著耳環、頸鍊、手鐲、腰帶等，<b>全身佩戴著由黃金和彩色寶石製成的首飾</b>。</li>
                        <li>她的左手拿著一座<b>舍利塔</b>。</li>
                        <li>她的右手握著一根<b>寶棒</b>作武器。</li>
                        <li>她扮演著護法神的角色，<b>怒視著各種邪靈</b>。</li>
                    </ol>
                </p>
                <p>
                    <h6>闡述：</h6>
                    <div class="mb-3">
                        日本密教認為她是「觀世音菩薩」的化身，如同度母一般，擁有強大的力量。
                        在某些儀式中，她與「毗沙門天」（又稱「俱毘羅」）融合，以天神的形像出現。
                        總而言之，她是擁有強大力量和寶藏的夜叉女王或國王。
                        她天女形像是一位面容姣好、肌膚光滑的年輕女子，甚至連呼吸都散發著芬芳。
                        既然她是夜叉王，那麼她應該是夜叉女。夜叉女象徵生育力，因此她也應該擁有姣好的女性體態。
                        她的標誌性特徵是穿著<b>紫色服飾，全身佩戴由彩色寶石和黃金製成的首飾</b>。
                    </div>
                    <div class="me-3 mb-3 float-start">
                        <a href="/assets/images/tara.webp" target="_blank">
                            <img width="200" src="/assets/images/thumbnails/tara.webp" class="img-thumbnail" alt="tara">
                        </a>
                    </div>
                    <div class="me-3 mb-3 float-start">
                        <a href="/assets/images/laxshmi-with-jewellery2.webp" target="_blank">
                            <img width="200" src="/assets/images/thumbnails/laxshmi-with-jewellery2.webp" class="img-thumbnail" alt="laxshmi-with-jewellery2">
                        </a>
                    </div>
                    <div class="me-3 mb-3 float-start">
                        <a href="/assets/images/laxmi.webp" target="_blank">
                            <img width="200" src="/assets/images/thumbnails/laxmi.webp" class="img-thumbnail" alt="laxmi">
                        </a>
                    </div>
                    <div class="clearfix"></div>
                    <div class="me-3 mb-3 float-start">
                        <a href="/assets/images/devi2.webp" target="_blank">
                            <img width="200" src="/assets/images/thumbnails/devi2.webp" class="img-thumbnail" alt="devi2">
                        </a>
                    </div>
                    <div class="clearfix"></div>
                    <div class="mb-3">
                        「財源天母」又稱「金度母」，我相信她與「寶藏天女」屬於同一位神明，與「觀世音菩薩」有著密切的聯繫。
                        您可以參考「財源天母」的形象，並以上描述，修改其特徵。
                    </div>
                    <div class="mb-3">
                        <a href="/assets/images/vasudhara.webp" target="_blank">
                            <img width="200" src="/assets/images/thumbnails/vasudhara.webp" class="img-thumbnail" alt="vasudhara">
                        </a>
                    </div>
                    <div class="mb-3">
                        她在人間扮演守護者的角色，
                        因此她目光銳利，監察著種種惡鬼邪神，防止它們作惡，以維護正法。
                    </div>
                    <div class="mb-3">
                        <a href="/assets/images/angry-staring.webp" target="_blank">
                            <img width="200" src="/assets/images/thumbnails/angry-staring.webp" class="img-thumbnail" alt="angry-staring">
                        </a>
                    </div>
                    <div class="mb-3">關於舍利塔，參考如下：</div>
                    <div class="mb-3">
                        <a href="/assets/images/stupa.webp" target="_blank">
                            <img width="200" src="/assets/images/thumbnails/stupa.webp" class="img-thumbnail" alt="stupa">
                        </a>
                    </div>
                    <div class="mb-3">關於寶棒，參考最右手那根：</div>
                    <div class="mb-3">
                        <a href="/assets/images/lightweight-gada.webp" target="_blank">
                            <img width="400" src="/assets/images/thumbnails/lightweight-gada.webp" class="img-thumbnail" alt="lightweight-gada">
                        </a>
                    </div>
                </p>
            </div>
            <h4 class="toc-item" id="deities-06">接天使者 (因陀羅)</h4>
            <div class="mb-3">
                <p>
                    <h6>原文：</h6>
                    「六次畫接天使者。其身金色。左手托左腰。右手持三股杵。」
                </p>
                <p>
                    <h6>列點：</h6>
                    <ol>
                        <li>他的膚色呈<b>金色</b>。</li>
                        <li>他的左手（<b>握成拳頭</b>）托著左腰。 </li>
                        <li>他的右手握著<b>三股金剛杵</b>。</li>
                         
                    </ol>
                </p>
                <p>
                    <h6>闡述：</h6>
                    <div class="mb-3">他是「帝釋天」，主宰三十三天的天主，又名「因陀羅」。</div>
                    <div class="me-3 mb-3 float-start">
                        <a href="/assets/images/indra.webp" target="_blank">
                            <img width="200" src="/assets/images/thumbnails/indra.webp" class="img-thumbnail" alt="indra">
                        </a>
                    </div>
                    <div class="me-3 mb-3 float-start">
                        <a href="/assets/images/indra2.webp" target="_blank">
                            <img width="200" src="/assets/images/thumbnails/indra2.webp" class="img-thumbnail" alt="indra2">
                        </a>
                    </div>
                    <div class="clearfix"></div>
                    <div class="mb-3">請注意，他應該有<b>三隻眼睛</b>。</div>
                    <div class="mb-3">為了保持一致性，請像「閻魔」一樣，畫他坐在<b>白象</b>上，<b>右膝彎曲，左腿垂下</b>。</div>
                    <div class="mb-3">關於三股金剛杵，參考如下：</div>
                    <div class="mb-3">
                        <a href="/assets/images/three-pronged-vajra.webp" target="_blank">
                            <img width="200" src="/assets/images/thumbnails/three-pronged-vajra.webp" class="img-thumbnail" alt="three-pronged-vajra">
                        </a>
                    </div>
                </p>
            </div>
            <h2 class="toc-item" id="scene">場景</h2>
            <h4 class="toc-item" id="scene-00">位置排列</h4>
            <div class="border mb-3">
                <div class="row justify-content-center">
                    <div class="col-6 text-center p-3">
                        <strong>地藏菩薩</strong><br/>
                        <small>(坐在寶座)</small>
                    </div>
                </div>
                <div class="row g-0">
                    <div class="col-md-6 ps-2 pe-1 pb-3">
                        <div class="border">
                            <div class="row my-2">
                                <div class="col text-center">
                                    <div class="px-3">
                                        <div>
                                            <small>右手邊</small>
                                         </div>
                                        <div class="float-start">
                                            <small>遠</small>
                                        </div>
                                        <div class="float-end">
                                            <small>近</small>
                                        </div>
                                        <div class="clearfix"></div>
                                        <hr/>
                                    </div>
                                </div>
                            </div>
                            <div class="row my-2">
                                <div class="col ps-3 text-center">
                                    <small><strong>接天使者</strong></small>
                                </div>
                                <div class="col text-center">
                                    <small><strong>寶藏天女</strong></small>
                                </div>
                                <div class="col pe-3 text-center">
                                    <small><strong>大慈大悲天女</strong></small>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 ps-1 pe-2 pb-3">
                        <div class="border">
                            <div class="row my-2">
                                <div class="col text-center">
                                    <div class="px-3">
                                        <div>
                                            <small>左手邊</small>
                                         </div>
                                        <div class="float-start">
                                            <small>近</small>
                                        </div>
                                        <div class="float-end">
                                            <small>遠</small>
                                        </div>
                                        <div class="clearfix"></div>
                                        <hr/>
                                    </div>
                                </div>
                            </div>
                            <div class="row my-2">
                                <div class="col ps-3 text-center">
                                    <small><strong>閻魔使者</strong></small>
                                </div>
                                <div class="col text-center">
                                    <small><strong>持寶童子</strong></small>
                                </div>
                                <div class="col pe-3 text-center">
                                    <small><strong>大力使者</strong></small>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="mb-3">
                使者們的位置排列是水平還是垂直，由你決定。
                一般而言，使者可置於寶座旁邊，但不能高於「地藏菩薩」。
                至於背景請遵循尼瓦爾風格自由創作。
            </div>
            <h4 class="toc-item" id="scene-01">備註</h4>
            <div class="mb-3">
                <ul>
                    <li>
                        如果你覺得工作量太大，你可以考慮繪製使者們時避免複雜的結構。
                        但「地藏菩薩」貴為本尊，應該仔細繪畫。
                    </li>
                    <li>
                        請注意這六位使者的比例，天子的體型會比天女的大，而童子的體型會比其他神為細。
                        然而「地藏菩薩」是本尊，所以他的體型顯得格外龐大。
                    </li>
                    <li>
                        經文中提到的諸神膚色總是白皙的，為增加變化，你可以考慮於不同神明使用中等至偏白的膚色。
                        但是「大慈大悲天女」的膚色應該要像「白度母」一樣潔白。
                    </li>
                    <li>其他繪畫細節，例如天空或風景，都由你決定。</li>
                    <li>
                        如果能描繪出其他天界眾生，如天女、龍女、緊那羅女等向菩薩作供養那就更好了。
                        供品可以是食物、鮮花、傘蓋、燈、香、樂器等等。
                    </li>
                </ul>
            </div>
            <div class="me-3 mb-3 float-start">
                <figure class="figure">
                    <a href="/assets/images/skin.webp" target="_blank">
                        <img width="200" src="/assets/images/thumbnails/skin.webp" class="img-thumbnail" alt="skin">
                    </a>
                  <figcaption class="figure-caption text-center">膚色</figcaption>
                </figure>
            </div>
            <div class="clearfix"></div>
            <h2 class="toc-item" id="canvas">畫布</h2>
            <div class="mb-3">
                <ul>
                    <li>畫布尺寸約為 A2（420 x 594毫米）。</li>
                    <li>立軸掛畫。</li>
                    <li>使用丙烯顏料就可以。</li>
                    <li>24K 金粉漆對我來說太奢華了，有沒有其他顏料能呈現類似的金屬質感？</li>
                    <li>使用清漆作基本保護。</li>
                </ul>
            </div>
            <h2 class="toc-item" id="timing">時間</h2>
            <div class="mb-3">此畫作沒有時間限制，你可以自我按排時間來製作。</div>
        </div>
    </div>
</div>
@endsection
