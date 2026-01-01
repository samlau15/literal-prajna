@extends('_layouts.main')

@push('meta')
<meta name="robots" content="noindex">
@endpush

@section('title')
<title>Painting requirements of six messengers</title>
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
                    <li><a @@click="jumpTo('preface')" :class="{active: currItems['preface'] && true}" class="nav-link text-nowrap" href="#preface">Preface</a></li>
                    <li>
                        <a @@click="jumpTo('deities')" :class="{active: currItems['deities'] && true}" class="nav-link text-nowrap" href="#deities">Deities' descriptions</a>
                        <ul class="nav navbar-nav">
                            <li><a @@click="jumpTo('deities-00')" :class="{active: currItems['deities-00'] && true}" class="nav-link text-nowrap" href="#deities-00">Ksitigarbha Bodhisattva</a></li>
                            <li><a @@click="jumpTo('deities-01')" :class="{active: currItems['deities-01'] && true}" class="nav-link text-nowrap" href="#deities-01">Yama</a></li>
                            <li><a @@click="jumpTo('deities-02')" :class="{active: currItems['deities-02'] && true}" class="nav-link text-nowrap" href="#deities-02">Treasure-bearing Boy</a></li>
                            <li><a @@click="jumpTo('deities-03')" :class="{active: currItems['deities-03'] && true}" class="nav-link text-nowrap" href="#deities-03">Strongest Tamer</a></li>
                            <li><a @@click="jumpTo('deities-04')" :class="{active: currItems['deities-04'] && true}" class="nav-link text-nowrap" href="#deities-04">Goddess of Great Compassion</a></li>
                            <li><a @@click="jumpTo('deities-05')" :class="{active: currItems['deities-05'] && true}" class="nav-link text-nowrap" href="#deities-05">Goddess of Treasure (Tāraka)</a></li>
                            <li><a @@click="jumpTo('deities-06')" :class="{active: currItems['deities-06'] && true}" class="nav-link text-nowrap" href="#deities-06">Heavenly King (Indra)</a></li>
                        </ul>
                    </li>
                    <li>
                        <a @@click="jumpTo('scene')" :class="{active: currItems['scene'] && true}" class="nav-link text-nowrap" href="#scene">Scene</a>
                        <ul class="nav navbar-nav">
                            <li><a @@click="jumpTo('scene-00')" :class="{active: currItems['scene-00'] && true}" class="nav-link text-nowrap" href="#scene-00">Positions</a></li>
                            <li><a @@click="jumpTo('scene-01')" :class="{active: currItems['scene-01'] && true}" class="nav-link text-nowrap" href="#scene-01">Remarks</a></li>
                        </ul>
                    </li>
                    <li><a @@click="jumpTo('canvas')" :class="{active: currItems['canvas'] && true}" class="nav-link text-nowrap" href="#canvas">Canvas</a></li>
                    <li><a @@click="jumpTo('timing')" :class="{active: currItems['timing'] && true}" class="nav-link text-nowrap" href="#timing">Timing</a></li>
                </ul>
            </x-toc>
        </div>
        <div id="content" class="col-md-9">
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item">Painting requirements</li>
                    <li class="breadcrumb-item active">Six messengers</li>
                </ol>
            </nav>
            <h1>Painting requirements</h1>
            <h2 class="toc-item" id="preface">Preface</h2>
            <div class="mb-3">
                <p>
                    The painting requirement described in this document comes from the "地藏菩薩念誦儀軌" (Ksitigarbha Bodhisattva Recitation Ritual) recorded in a Japanese scripture collection named "溪嵐拾葉集" (Keiran Shūyō Shū).
                    The original text can be viewed
                    <a href="https://21dzk.l.u-tokyo.ac.jp/SAT/ddb-sat2.php?mode=detail&useid=2410_,76,0582c12&key=%E5%9C%B0%E8%97%8F%E8%8F%A9%E8%96%A9%E5%BF%B5%E8%AA%A6%E5%84%80%E8%BB%8C&ktn=&mode2=2" target="_blank" >here</a>.
                </p>
                <p>
                    Since Japanese in the past brought Chinese translated scriptures from China to Japan,
                    the deities' descriptions were all written in classical Chinese.
                    Therefore, I am able to read and translate the content into English.
                    The reference images are to give you a brief idea of what deities look like.
                    You are free to apply your personal drawing style.
                    Personally, I prefer the Newari style of Paubha painting.
                </p>
                <p>
                    Also, different artists may have different religious backgrounds.
                    So deities described here may have conflicts with yours.
                    If you strongly believe that some descriptions are wrong or in doubt,
                    please raise questions for clarification.
                </p>
                <!--
                <p>
                    The finished jobs will be posted to this site for people to appreciate.
                    My target auidences would be Hongkongers and you may see this opportunity as a showcase to let more people know more about your Paubha art works.
                    I could give you a credit by including your contact information like instagram or facebook page along with the finished jobs.
                </p>
                -->
            </div>
            <!--
            <figure class="figure">
                <a href="/assets/images/traffic.webp" target="_blank">
                    <img width="300" src="/assets/images/thumbnails/traffic.webp" class="img-thumbnail" alt="traffic">
                </a>
              <figcaption class="figure-caption text-center">My site still got around a hundred daily visitors.</figcaption>
            </figure>
            -->
            <h2 class="toc-item" id="deities">Deities' descriptions</h2>
            <h4 class="toc-item" id="deities-00">Ksitigarbha Bodhisattva</h4>
            <div class="mb-3">
                <p>
                    <h6>Original text:</h6>
                    「白絲或羂索上畫地藏菩薩形像。安坐千葉白蓮ノ上ニ。左ノ手ニ持如意寶珠。右手ニ執錫杖。身ノ色白肉色。現聲聞形。以種種瓔珞莊嚴其身」
                </p>
                <p>
                    <h6>Translation:</h6>
                    <ol>
                        <li>He is sitting on a <b>white lotus</b> flower.</li>
                        <li>His left hand is holding a <b>Cintāmaṇi</b>.</li>
                        <li>His right hand is holding a <b>Khakkhara</b>.</li>
                        <li>His skin tone is <b>white</b> in color.</li>
                        <li>Appearance of a <b>monk</b>.</li>
                        <li>Use a <b>jade or pearl necklace</b> as decoration.</li>
                    </ol>
                </p>
                <p>
                    <h6>Expectation:</h6>
                    <div class="mb-3">
                        This image of Ksitigarbha Bodhisattva basically fits the bill.
                        However, I believe it is generated by an AI model as details are missing and blurred.
                    </div>
                    <div class="mb-3">
                        <a href="/assets/images/ksitigarbha2.webp" target="_blank">
                            <img width="200" src="/assets/images/thumbnails/ksitigarbha2.webp" class="img-thumbnail" alt="ksitigarbha2">
                        </a>
                    </div>
                    <div class="mb-3">
                        The following statue depicts more facial features than above.
                    </div>
                    <div class="mb-3">
                        <a href="/assets/images/ksitigarbha3.webp" target="_blank">
                            <img width="200" src="/assets/images/thumbnails/ksitigarbha3.webp" class="img-thumbnail" alt="ksitigarbha3">
                        </a>
                    </div>
                    <div class="mb-3">A closer look at his crown embedded with Five Dhyani Buddhas.</div>
                    <div class="mb-3">
                        <a href="/assets/images/ksitigarbha4.webp" target="_blank">
                            <img width="200" src="/assets/images/thumbnails/ksitigarbha4.webp" class="img-thumbnail" alt="ksitigarbha4">
                        </a>
                    </div>
                    <div class="mb-3">
                        You could improve the portrait a little bit by enriching its contents.
                        For example, a hot red fire aureole on his back,
                        a colorful necklace,
                        changing his seat to a white lotus throne, etc.
                        Although the scripture mentions using white lotus as a seat,
                        you may apply pink color to the tips of the flower to make it more natural-looking.
                    </div>
                    <div class="mb-3">
                        Just like other Paubha paintings, the throne and backgrounds should follow the Newari style.
                    </div>
                    <div class="mb-3">
                        <a href="/assets/images/vajrasattva.webp" target="_blank">
                            <img width="200" src="/assets/images/thumbnails/vajrasattva.webp" class="img-thumbnail" alt="vajrasattva">
                        </a>
                    </div>
                    <!--
                    <div class="mb-3">For a Cintāmaṇi, an example reference could be:</div>
                    <div class="mb-3">
                        <a href="/assets/images/cintamani.webp" target="_blank">
                            <img width="200" src="/assets/images/thumbnails/cintamani.webp" class="img-thumbnail" alt="cintamani">
                        </a>
                    </div>
                    <div class="mb-3">For a Khakkhara, an example reference could be:</div>
                    <div class="mb-3">
                        <a href="/assets/images/khakkhara.webp" target="_blank">
                            <img width="200" src="/assets/images/thumbnails/khakkhara.webp" class="img-thumbnail" alt="khakkhara">
                        </a>
                    </div>
                    -->
                </p>
            </div>
            <h4 class="toc-item" id="deities-01">Yama</h4>
            <div class="mb-3">
                <p>
                    <h6>Original text:</h6>
                    「一蓮花座ノ下ノ左ノ方ニ畫閻魔使者。身白肉色左手ニ持寶鏡。右ノ手ニ執檀荼幢」
                </p>
                <p>
                    <h6>Translation:</h6>
                    <ol>
                        <li>His skin tone is <b>white</b> in color.</li>
                        <li>His left hand is holding a <b>Treasure Mirror</b>.</li>
                        <li>His right hand is holding a <b>Sceptre of Human Heads</b>.</li>
                    </ol>
                </p>
                <p>
                    <h6>Expectation:</h6>
                    <div class="mb-3">
                        Yama is the God of death and justice in the hell realm.
                        Just like a judge, he should be middle-aged and look cool and serious.
                    </div>
                    <div class="mb-3 me-3 float-start">
                        <figure class="figure">
                            <a href="/assets/images/yama-japan.webp" target="_blank">
                                <img width="200" src="/assets/images/thumbnails/yama-japan.webp" class="img-thumbnail" alt="yama-japan-style">
                            </a>
                            <figcaption class="figure-caption text-center" style="width: 200px">In Japan, Yama looks like a celestial being.</figcaption>
                        </figure>
                    </div>
                    <!--
                    <div class="mb-3 me-3 float-start">
                        <figure class="figure">
                            <a href="/assets/images/svacchanda-bhairava.webp" target="_blank">
                                <img width="200" src="/assets/images/thumbnails/svacchanda-bhairava.webp" class="img-thumbnail" alt="svacchanda-bhairava">
                            </a>
                            <figcaption class="figure-caption text-center" style="width: 200px">The painting of Svacchanda Bhairava also serves a good reference.</figcaption>
                        </figure>
                    </div>
                    -->
                    <div class="mb-3 me-3 float-start">
                        <figure class="figure">
                            <a href="/assets/images/naropa.webp" target="_blank">
                                <img width="200" src="/assets/images/thumbnails/naropa.webp" class="img-thumbnail" alt="naropa">
                            </a>
                            <figcaption class="figure-caption text-center" style="width: 200px">The painting of Nāropā or Virupa shows a good facial features of majesty.</figcaption>
                        </figure>
                    </div>
                    <div class="mb-3 me-3 float-start">
                        <figure class="figure">
                            <a href="/assets/images/virupa.webp" target="_blank">
                                <img width="200" src="/assets/images/thumbnails/virupa.webp" class="img-thumbnail" alt="virupa">
                            </a>
                            <figcaption class="figure-caption text-center" style="width: 200px">Virupa</figcaption>
                        </figure>
                    </div>
                    <div class="clearfix"></div>
                    <div class="mb-3">
                        Although the role of Yama here is acting as a judge and sometimes refers to a punisher,
                        ancient images of Yama did not show wrathful features as Yamāntaka (Destroyer of Yama) did.
                        So it is not necessary to draw too many scary outfits like a necklace made of human heads, animal' skins, etc., on him.
                        I think you may preserve the crown decorated with skulls to show him as somehow related to death.
                    </div>
                    <div class="mb-3">
                        The following photo is a Yama statue taken from the Odisha State Museum in India.
                        No wrathful features at all.
                        His left hand holds a noose to tie up sinners, while his right hand holds a thick rod for punishment.
                        Those artifacts held in his hands are highly similar to what the scripture described here in terms of the shapes.
                        Maybe the Treasure Mirror is actually a noose while the Sceptre of Human Heads is actually a rod, but who knows?
                    </div>
                    <div class="mb-3">
                        <a href="/assets/images/yama-india.webp" target="_blank">
                            <img width="200" src="/assets/images/thumbnails/yama-india.webp" class="img-thumbnail" alt="yama-india-style">
                        </a>
                    </div>
                    <div class="mb-3">You may also draw him <b>sitting on a buffalo</b> with the right knee bent, while the left leg hangs down.</div>
                    <div class="mb-3">
                        <a href="/assets/images/yama2-japan.webp" target="_blank">
                            <img width="200" src="/assets/images/thumbnails/yama2-japan.webp" class="img-thumbnail" alt="yama2-japan-style">
                        </a>
                    </div>
                    <div class="mb-3">For Treasure Mirror, you may take this as a reference:</div>
                    <div class="mb-3 me-3 float-start">
                        <figure class="figure">
                            <a href="/assets/images/treasure-mirror.webp" target="_blank">
                                <img width="200" src="/assets/images/thumbnails/treasure-mirror.webp" class="img-thumbnail" alt="treasure-mirror">
                            </a>
                            <figcaption class="figure-caption text-center" style="width: 200px">Replacing the Dharma wheel to shiny surface.</figcaption>
                        </figure>
                    </div>
                    <div class="mb-3 me-3 float-start">
                        <figure class="figure">
                            <a href="/assets/images/yama-tibet.webp" target="_blank">
                                <img width="200" src="/assets/images/thumbnails/yama-tibet.webp" class="img-thumbnail" alt="yama-tibet-style">
                            </a>
                            <figcaption class="figure-caption text-center" style="width: 200px">Tibetan painting shows Yama holding a mirror.</figcaption>
                        </figure>
                    </div>
                    <div class="clearfix"></div>
                    <div class="mb-3">For the Sceptre of Human Heads, an example reference could be:</div>
                    <div class="mb-3">
                        <a href="/assets/images/sceptre-of-heads.webp" target="_blank">
                            <img width="200" src="/assets/images/thumbnails/sceptre-of-heads.webp" class="img-thumbnail" alt="sceptre-of-human-heads">
                        </a>
                    </div>
                    <div class="mb-3">
                        Why draw two heads instead of one?
                        Somebody believes that one head will spit iron chains to tie up the sinner,
                        and another head will tell Yama about your sins you committed in your past life.
                        In Japan, those heads are named as "見目嗅鼻" (watching and sniffing).
                        The red head (man's face) is watching while the white head (woman's face) is sniffing.
                        The function is similar, which tells Yama how good or bad you were in the past.
                    </div>
                </p>
            </div>
            <h4 class="toc-item" id="deities-02">Treasure-bearing Boy</h4>
            <div class="mb-3">
                <p>
                    <h6>Original text:</h6>
                    「二次畫持寶童子。其身如日光。左ノ手ニ持如意寶珠。右手與願印」
                </p>
                <p>
                    <ol>
                        <li>His body is glowing like <b>sunlight</b>.</li>
                        <li>His left hand is holding a <b>Cintāmaṇi</b>.</li>
                        <li>His right hand shows a <b>Varada mudrā</b>.</li>
                    </ol>
                </p>
                <p>
                    <h6>Expectation:</h6>
                    <div class="mb-3">
                        He is a childlike god serving in the hungry ghost realm.
                        He is also a symbol of generosity, so he should be <b>smiling</b>.
                    </div>
                    <div class="mb-3">You may take the childhood of the Buddha as a reference:</div>
                    <div class="mb-3">
                        <a href="/assets/images/child-buddha.webp" target="_blank">
                            <img width="200" src="/assets/images/thumbnails/child-buddha.webp" class="img-thumbnail" alt="child-buddha">
                        </a>
                    </div>
                    <div class="mb-3">Another example of a childlike god:</div>
                    <div class="mb-3">
                        <a href="/assets/images/childlike-god.webp" target="_blank">
                            <img width="200" src="/assets/images/thumbnails/childlike-god.webp" class="img-thumbnail" alt="childlike-god">
                        </a>
                    </div>
                    <div class="mb-3">For a Cintāmaṇi, an example reference could be:</div>
                    <div class="mb-3">
                        <a href="/assets/images/cintamani.webp" target="_blank">
                            <img width="200" src="/assets/images/thumbnails/cintamani.webp" class="img-thumbnail" alt="cintamani">
                        </a>
                    </div>
                </p>
            </div>
            <h4 class="toc-item" id="deities-03">Strongest Tamer</h4>
            <div class="mb-3">
                <p>
                    <h6>Original text:</h6>
                    「三次畫大力使者。身青黒色載師子王左手持獸稍。右手開赦押右ノ腰。以忿怒惡眼觀四方形」
                </p>
                <p>
                    <ol>
                        <li>His skin tone is <b>blue-black</b> in color.</li>
                        <li>A <b>Lion king</b> as his vehicle.</li>
                        <li>His left hand holds a <b>Whip</b> to tame the beasts.</li>
                        <li>
                            His right
                            <a href="https://www.google.com/search?q=hand+is+placed+on+the+waist+and+the+elbow+turned+outward&sca_esv=26346f0d52657645&ei=7vBUaZ23C4zj2roPn7epwAQ&ved=0ahUKEwid5rnKxeeRAxWMsVYBHZ9bCkgQ4dUDCBE&uact=5&oq=hand+is+placed+on+the+waist+and+the+elbow+turned+outward" target="_blank">
                                <b>hand is placed on his waist, and his elbow is turned outward.</b>
                            </a>
                        </li>
                        <li>Look around with a very <b>angry face</b>.</li>
                    </ol>
                </p>
                <p>
                    <h6>Expectation:</h6>
                    <div class="mb-3">
                        He should look like a kind of Asura with a strong body shape.
                        To make him look terrifying, facial features should include <b>three eyes and sharp teeth</b>.
                        His whole body should be on <b>fire</b>.
                        The Lion king he is riding on is also <b>roaring angrily</b>.
                        His role is to tame beasts that belong to the animal realm, not to kill them. So no human or animal parts outfits appeared on him.
                        I notice that wrathful deities are usually drawn as a large head with a round belly like an apple body type.
                        In here, I would like him to be more muscular like wrestlers.
                    </div>
                    <div class="mb-3">
                        You may take these Vidyārājas as a reference:
                    </div>
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
                    <div class="mb-3">For a Whip, an example reference could be:</div>
                    <div class="mb-3">
                        <a href="/assets/images/whip.webp" target="_blank">
                            <img width="200" src="/assets/images/thumbnails/whip.webp" class="img-thumbnail" alt="whip">
                        </a>
                    </div>
                </p>
            </div>
            <h4 class="toc-item" id="deities-04">Goddess of Great Compassion</h4>
            <div class="mb-3">
                <p>
                    <h6>Original text:</h6>
                    「四右方畫大慈大悲天女。 画像身白肉色。左ノ手與願印。右ノ手ニ執圓扇」
                </p>
                <p>
                    <ol>
                        <li>Her skin tone is <b>white</b> in color.</li>
                        <li>Her left hand shows a <b>Varada mudrā</b>.</li>
                        <li>Her right hand holds a <b>Round Fan</b>.</li>
                    </ol>
                </p>
                <p>
                    <h6>Expectation:</h6>
                    <div class="mb-3">
                        This Goddess is like a mother with unconditional love for her children.
                        She uses compassion to influence beings in the Asura realm.
                    </div>
                    <div class="mb-3">I think you may take White Tara as a reference, changing from seven eyes to two eyes:</div>
                    <div class="mb-3">
                        <a href="/assets/images/white-tara.webp" target="_blank">
                            <img width="200" src="/assets/images/thumbnails/white-tara.webp" class="img-thumbnail" alt="white-tara">
                        </a>
                    </div>
                    <!--
                    <div class="mb-3">I love this painting very much, I would appreciate if you could imitate the above drawing of this devi.</div>
                    <div class="mb-3">Standing pose like this also look promising, see if you can tranform the above painting to standing pose.</div>
                    <div class="mb-3">
                        <a href="/assets/images/white-tara3.webp" target="_blank">
                            <img width="200" src="/assets/images/thumbnails/white-tara3.webp" class="img-thumbnail" alt="white-tara3">
                        </a>
                    </div>
                    -->
                    <div class="mb-3">For Round Fan, an example reference could be:</div>
                    <!--
                    <div class="me-3 mb-3 float-start">
                        <a href="/assets/images/round-fan.webp" target="_blank">
                            <img width="200" src="/assets/images/thumbnails/round-fan.webp" class="img-thumbnail" alt="round-fan">
                        </a>
                    </div>
                    -->
                    <div class="me-3 mb-3 float-start">
                        <figure class="figure">
                            <a href="/assets/images/devi.webp" target="_blank">
                                <img width="200" src="/assets/images/thumbnails/devi.webp" class="img-thumbnail" alt="devi">
                            </a>
                          <figcaption class="figure-caption text-center" style="width: 200px">Using peacock feathers to make fan also looks great.</figcaption>
                        </figure>
                    </div>
                    <div class="clearfix"></div>
                </p>
            </div>
            <h4 class="toc-item" id="deities-05">Goddess of Treasure (Tāraka)</h4>
            <div class="mb-3">
                <p>
                    <h6>Original text:</h6>
                    「五次畫寶藏天女身。齊色七寶衣甲。以惡眼視一切鬼神形。左手持舍利塔。右ノ手執寶棒」
                </p>
                <p>
                    <ol>
                        <li>She wears a crown, earrings, necklaces, bracelets, a waist belt, etc.
                        A <b>full body of jewellery</b>, made of gold and colorful gemstones.</li>
                        <li>Her left hand is holding a <b>Stupa</b>.</li>
                        <li>Her right hand is holding a short <b>rod decorated with jewellery</b> as a weapon.</li>
                        <li>Role as a dharma protector, <b>angrily staring</b> at all kinds of evil spirits.</li>
                    </ol>
                </p>
                <p>
                    <h6>Expectation:</h6>
                    <div class="mb-3">
                        Esoteric Buddhism in Japan believes that she is an incarnation of Aryavalokiteshvara, like Tara, with great power.
                        In some rituals, she is a crossover with Vaiśravaṇa (known as Kubera) and appears as a Deva.
                        In summary, she is a Queen or King of Yakṣa with great power and holding treasures.
                        Her divine form looks like a young lady with an adorable face and smooth skin; even her breath smells good.
                        Since she is the Queen of Yakṣa, she should be a Yakṣiṇī.
                        A Yakṣiṇī symbolized fertility, so she should have an excellent feminine body as well.
                        Her signature features are wearing <b>purple clothes and head-to-toe jewellery made of colored gemstones and gold</b>.
                    </div>
                    <div class="me-3 mb-3 float-start">
                        <a href="/assets/images/tara.webp" target="_blank">
                            <img width="200" src="/assets/images/thumbnails/tara.webp" class="img-thumbnail" alt="tara">
                        </a>
                    </div>
                    <!--
                    <div class="me-3 mb-3 float-start">
                        <a href="/assets/images/lokeshvara.webp" target="_blank">
                            <img width="200" src="/assets/images/thumbnails/lokeshvara.webp" class="img-thumbnail" alt="lokeshvara">
                        </a>
                    </div>
                    -->
                    <!--
                    <div class="me-3 mb-3 float-start">
                        <a href="/assets/images/laxshmi-with-jewellery.webp" target="_blank">
                            <img width="200" src="/assets/images/thumbnails/laxshmi-with-jewellery.webp" class="img-thumbnail" alt="laxshmi-with-jewellery">
                        </a>
                    </div>
                    <div class="me-3 mb-3 float-start">
                        <a href="/assets/images/white-tara2.webp" target="_blank">
                            <img width="200" src="/assets/images/thumbnails/white-tara2.webp" class="img-thumbnail" alt="white-tara2">
                        </a>
                    </div>
                    -->
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
                        As Vasudhārā, also known as "Gold Tara", I strongly believe that they belong to the same deity with a strong connection to Aryavalokiteshvara.
                        You may take Vasudhārā as a reference and change the features accordingly:
                    </div>
                    <div class="mb-3">
                        <a href="/assets/images/vasudhara.webp" target="_blank">
                            <img width="200" src="/assets/images/thumbnails/vasudhara.webp" class="img-thumbnail" alt="vasudhara">
                        </a>
                    </div>
                    <div class="mb-3">Her role is a protector in the human realm. So she has sharp eyes, watching all kinds of spirits not to do evil things and maintain dharma.</div>
                    <div class="mb-3">
                        <a href="/assets/images/angry-staring.webp" target="_blank">
                            <img width="200" src="/assets/images/thumbnails/angry-staring.webp" class="img-thumbnail" alt="angry-staring">
                        </a>
                    </div>
                    <div class="mb-3">For a Stupa, an example reference could be:</div>
                    <div class="mb-3">
                        <a href="/assets/images/stupa.webp" target="_blank">
                            <img width="200" src="/assets/images/thumbnails/stupa.webp" class="img-thumbnail" alt="stupa">
                        </a>
                    </div>
                    <div class="mb-3">For the weapon, please take the rightmost one as a reference:</div>
                    <div class="mb-3">
                        <a href="/assets/images/lightweight-gada.webp" target="_blank">
                            <img width="400" src="/assets/images/thumbnails/lightweight-gada.webp" class="img-thumbnail" alt="lightweight-gada">
                        </a>
                    </div>
                </p>
            </div>
            <h4 class="toc-item" id="deities-06">Heavenly King (Indra)</h4>
            <div class="mb-3">
                <p>
                    <h6>Original text:</h6>
                    「六次畫接天使者。其身金色。左手托左腰。右手持三股杵。」
                </p>
                <p>
                    <ol>
                        <li>His skin tone is <b>gold</b> in color.</li>
                        <li>His left hand <b>(held as a fist)</b> supports his left waist.</li>
                        <li>His right hand is holding a <b>Three-pronged Vajra</b>.</li>
                    </ol>
                </p>
                <p>
                    <h6>Expectation:</h6>
                    <div class="mb-3">He is the Ruler of Heaven.</div>
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
                    <div class="mb-3">Please note that he should have <b>three eyes</b>.</div>
                    <div class="mb-3">To be consistent, like Yama, please also draw him sitting on a <b>White elephant</b> with the <b>right knee bent while the left leg hangs down</b>.</div>
                    <div class="mb-3">For a Three-pronged Vajra, an example reference could be:</div>
                    <div class="mb-3">
                        <a href="/assets/images/three-pronged-vajra.webp" target="_blank">
                            <img width="200" src="/assets/images/thumbnails/three-pronged-vajra.webp" class="img-thumbnail" alt="three-pronged-vajra">
                        </a>
                    </div>
                </p>
            </div>
            <h2 class="toc-item" id="scene">Scene</h2>
            <h4 class="toc-item" id="scene-00">Positions</h4>
            <div class="border mb-3">
                <div class="row justify-content-center">
                    <div class="col-6 text-center p-3">
                        <strong>Ksitigarbha Bodhisattva</strong><br/>
                        <small>(sitting on his throne)</small>
                    </div>
                </div>
                <div class="row g-0">
                    <div class="col-md-6 ps-2 pe-1 pb-3">
                        <div class="border">
                            <div class="row my-2">
                                <div class="col text-center">
                                    <div class="px-3">
                                        <div>
                                            <small>His right hand side</small>
                                         </div>
                                        <div class="float-start">
                                            <small>Far</small>
                                        </div>
                                        <div class="float-end">
                                            <small>Near</small>
                                        </div>
                                        <div class="clearfix"></div>
                                        <hr/>
                                    </div>
                                </div>
                            </div>
                            <div class="row my-2">
                                <div class="col ps-3 text-center">
                                    <small><strong>Heavenly King</strong></small>
                                </div>
                                <div class="col text-center">
                                    <small><strong>Goddess of Treasure</strong></small>
                                </div>
                                <div class="col pe-3 text-center">
                                    <small><strong>Goddess of Great Compassion</strong></small>
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
                                            <small>His left hand side</small>
                                         </div>
                                        <div class="float-start">
                                            <small>Near</small>
                                        </div>
                                        <div class="float-end">
                                            <small>Far</small>
                                        </div>
                                        <div class="clearfix"></div>
                                        <hr/>
                                    </div>
                                </div>
                            </div>
                            <div class="row my-2">
                                <div class="col ps-3 text-center">
                                    <small><strong>Yama</strong></small>
                                </div>
                                <div class="col text-center">
                                    <small><strong>Treasure-bearing Boy</strong></small>
                                </div>
                                <div class="col pe-3 text-center">
                                    <small><strong>Strongest Tamer</strong></small>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="mb-3">
                Whether the messengers' positions are horizontal or vertical is up to you.
                The rule of thumb is that messengers' positions can be beside the throne but no higher than Ksitigarbha.
            </div>
            <h4 class="toc-item" id="scene-01">Remarks</h4>
            <div class="mb-3">
                <ul>
                    <li>
                        If you think there is too much workload for you,
                        for those messengers,
                        you may consider avoiding drawing complex structures.
                        But Ksitigarbha should pay more attention to him.
                    </li>
                    <li>
                        Please bear in mind the proportion of these six messengers.
                        Deva will be physically larger than Devi, and the childlike-god will be shorter than other deities.
                        However, Ksitigarbha Bodhisattva is the main character of this painting, so he is disproportionately big.
                    </li>
                    <li>
                        The scripture always mentions deities in a white skin tone.
                        You may consider using medium to fair skin tone for variation.
                        However, the Goddess of Great Compassion should be as white as the White Tara.
                    </li>
                    <li>Other drawing details, like sky or landscape, are up to you.</li>
                    <li>
                        Drawing other celestial beings like apsarās, nāgas, kiṃnaras, etc., who are making offerings to the Bodhisattva, would be a plus.
                        Offerings could be food, flowers, a parasol, a lamp, incense, playing a musical instrument, etc.
                    </li>
                </ul>
            </div>
            <div class="me-3 mb-3 float-start">
                <figure class="figure">
                    <a href="/assets/images/skin.webp" target="_blank">
                        <img width="200" src="/assets/images/thumbnails/skin.webp" class="img-thumbnail" alt="skin">
                    </a>
                  <figcaption class="figure-caption text-center">Skin tone</figcaption>
                </figure>
            </div>
            <!--
            <div class="me-3 mb-3 float-start">
                <figure class="figure">
                    <a href="/assets/images/vasudhara.webp" target="_blank">
                        <img width="200" src="/assets/images/thumbnails/vasudhara.webp" class="img-thumbnail" alt="vasudhara">
                    </a>
                  <figcaption class="figure-caption text-center">Vasudhārā painting</figcaption>
                </figure>
            </div>
            <div class="me-3 mb-3 float-start">
                <figure class="figure">
                    <a href="/assets/images/aureole.webp" target="_blank">
                        <img width="200" src="/assets/images/thumbnails/aureole.webp" class="img-thumbnail" alt="aureole">
                    </a>
                  <figcaption class="figure-caption text-center">Circle of aureole</figcaption>
                </figure>
            </div>
            <div class="me-3 mb-3 float-start">
                <figure class="figure">
                    <a href="/assets/images/fairy.webp" target="_blank">
                        <img width="200" src="/assets/images/thumbnails/fairy.webp" class="img-thumbnail" alt="fairy">
                    </a>
                  <figcaption class="figure-caption text-center">Fairy painting</figcaption>
                </figure>
            </div>
            -->
            <div class="clearfix"></div>
            <h2 class="toc-item" id="canvas">Canvas</h2>
            <div class="mb-3">
                <ul>
                    <li>Around A2 (420 x 594 millimeters) canvas size.</li>
                    <li>Portrait orientation.</li>
                    <li>Acrylic paint should be fine.</li>
                    <!--
                    <li>
                        Many scriptures have pointed out that never use animal glue to draw Buddha or Bodhisattva paintings.
                        Tibetan Thangka paintings, as I know, used animal glue as an adhesive for color pigments.
                        Is it possible to use plant-based glue instead?
                        The fallback option could be acrylic paints.
                        Please let me know the cost differences between the color pigments and acrylic paints.
                    </li>
                    -->
                    <li>
                        24K gold paint is too luxurious for me.
                        Is there any alternative paint that gives a similar metallic look and feel?
                    </li>
                </ul>
            </div>
            <h2 class="toc-item" id="timing">Timing</h2>
            <div class="mb-3">This work does not bind with time requirements, so you can work at your own pace.</div>
        </div>
    </div>
</div>
@endsection
