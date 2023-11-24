@extends('_layouts.main')

@section('title')
<title>地藏菩薩本願經卷中</title>
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
			<x-toc audio-supported>
				目錄
				<ul class="nav navbar-nav">
					<li>
						<a class="nav-link text-nowrap" href="{{ $page->baseUrl.'/ksitigarbha-vows-vol1' }}">地藏菩薩本願經卷上</a>
					</li>
					<li>
						<a @@click="jumpTo('vol2')" :class="{active: currItems['vol2'] && true}" class="nav-link text-nowrap" href="#vol2">地藏菩薩本願經卷中</a>
						<ul class="nav navbar-nav">
							<li><a @@click="jumpTo('vol2-ch5')" :class="{active: currItems['vol2-ch5'] && true}" class="nav-link text-nowrap" href="#vol2-ch5">地獄名號品第五</a></li>
							<li><a @@click="jumpTo('vol2-ch6')" :class="{active: currItems['vol2-ch6'] && true}" class="nav-link text-nowrap" href="#vol2-ch6">如來讚歎品第六</a></li>
							<li><a @@click="jumpTo('vol2-ch7')" :class="{active: currItems['vol2-ch7'] && true}" class="nav-link text-nowrap" href="#vol2-ch7">利益存亡品第七</a></li>
							<li><a @@click="jumpTo('vol2-ch8')" :class="{active: currItems['vol2-ch8'] && true}" class="nav-link text-nowrap" href="#vol2-ch8">閻羅王眾讚歎品第八</a></li>
							<li><a @@click="jumpTo('vol2-ch9')" :class="{active: currItems['vol2-ch9'] && true}" class="nav-link text-nowrap" href="#vol2-ch9">稱佛名號品第九</a></li>
						</ul>
					</li>
					<li>
						<a class="nav-link text-nowrap" href="{{ $page->baseUrl.'/ksitigarbha-vows-vol3' }}">地藏菩薩本願經卷下</a>
					</li>
				</ul>
				<x-slot:audioCtrlSubtitle>
					<small class="ms-3"><a href="https://www.youtube.com/watch?v=aCZG69gvG-M" target="_blank">(觀成法師讀誦)</a></small>
				</x-slot>
				<x-slot:othersCtrl>
					<div class="form-check form-switch">
						<input x-model="details" class="form-check-input" type="checkbox" role="switch" id="switch-details">
						<label class="form-check-label" for="switch-details">白話淺譯</label>
						<small class="ms-1">(郭鵬原譯，本站略修。)</small>
					</div>
				</x-slot>
			</x-toc>
		</div>
		<div id="content" class="col-md-9">
			<nav>
				<ol class="breadcrumb">
					<li class="breadcrumb-item">經典</li>
					<li class="breadcrumb-item"><a href="{{ $page->baseUrl.'/ksitigarbha-vows-vol1' }}">地藏菩薩本願經</a></li>
					<li class="breadcrumb-item active">卷中</li>
				</ol>
			</nav>
		
			<h1>地藏菩薩本願經</h1>
			<small class="float-end">唐‧于闐國‧三藏沙門‧實叉難陀　譯</small>
			<div class="clearfix"></div>
			<h2 class="toc-item" id="vol2">
				<span class="word" @@click="$dispatch('play-segment')" data-start="00:11.96" data-end="00:15.44" data-index="1142">地藏菩薩本願經卷中</span>
			</h2>
			<h4 class="toc-item" id="vol2-ch5">
				<span class="word" @@click="$dispatch('play-segment')" data-start="00:16.52" data-end="00:19.16" data-index="1143">地獄名號品第五</span>
			</h4>
			<div :class="details ? 'bg-secondary text-white' : ''" class="paragraph">
				<span class="word" @@click="$dispatch('play-segment')" data-start="00:20.32" data-end="00:25.74" data-index="1144">爾時普賢菩薩摩訶薩白地藏菩薩言</span>
				<span class="punc">：</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="00:26.30" data-end="00:27.22" data-index="1145">仁者</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="00:27.48" data-end="00:29.80" data-index="1146">願為天龍四眾</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="00:30.06" data-end="00:33.22" data-index="1147">及未來現在一切眾生</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="00:33.76" data-end="00:35.62" data-index="1148">說娑婆世界</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="00:35.92" data-end="00:39.16" data-index="1149">及閻浮提罪苦眾生</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="00:39.28" data-end="00:40.86" data-index="1150">所受報處</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="00:41.30" data-end="00:42.76" data-index="1151">地獄名號</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="00:42.98" data-end="00:44.92" data-index="1152">及惡報等事</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="00:45.58" data-end="00:48.70" data-index="1153">使未來世末法眾生</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="00:48.84" data-end="00:50.18" data-index="1154">知是果報</span>
				<span class="punc">。</span>
			</div>
			<div x-show="details" class="details mb-3">
				這時，普賢大菩薩對地藏菩薩說：「仁者，請你為天龍四眾以及現在、後世的一切眾生，說說娑婆世界，閻浮提裏的罪苦眾生，所受惡報的地方──地獄名號，以及各種惡報的事情，使後世末法時代的眾生，知道因果報應是什麼一回事。」
				<hr/>
			</div>
			<div :class="details ? 'bg-secondary text-white' : ''" class="paragraph">
				<span class="word" @@click="$dispatch('play-segment')" data-start="00:50.94" data-end="00:52.40" data-index="1155">地藏答言</span>
				<span class="punc">：</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="00:52.40" data-end="00:53.26" data-index="1156">仁者</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="00:53.66" data-end="00:56.08" data-index="1157">我今承佛威神</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="00:56.36" data-end="00:57.90" data-index="1158">及大士之力</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="00:58.46" data-end="01:00.62" data-index="1159">略說地獄名號</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="01:00.82" data-end="01:03.94" data-index="1160">及罪報惡報之事</span>
				<span class="punc">。</span>
			</div>
			<div x-show="details" class="details mb-3">
				地藏菩薩回答說：「仁者，我現在承佛的威神和各位大士們的力量，大概地說說地獄的名號，以及罪報惡報的事。」
				<hr/>
			</div>
			<div :class="details ? 'bg-secondary text-white' : ''" class="paragraph">
				<span class="word" @@click="$dispatch('play-segment')" data-start="01:04.66" data-end="01:05.56" data-index="1161">仁者</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="01:05.80" data-end="01:08.68" data-index="1162">閻浮提東方有山</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="01:08.76" data-end="01:10.16" data-index="1163">號曰鐵圍</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="01:10.58" data-end="01:12.28" data-index="1164">其山黑邃</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="01:12.48" data-end="01:14.10" data-index="1165">無日月光</span>
				<span class="punc">。</span>
			</div>
			<div x-show="details" class="details mb-3">
				「仁者，在閻浮提東面有座山，名叫鐵圍，那座山非常黑暗而且深邃，沒有日月光明。」
				<hr/>
			</div>
			<div :class="details ? 'bg-secondary text-white' : ''" class="paragraph">
				<blockquote>
					<span class="word" @@click="$dispatch('play-segment')" data-start="01:14.70" data-end="01:16.10" data-index="1166">有大地獄</span>
					<span class="punc">，</span>
					<span class="word" @@click="$dispatch('play-segment')" data-start="01:16.50" data-end="01:18.10" data-index="1167">號極無間</span>
					<span class="punc">；</span>
					<span class="word" @@click="$dispatch('play-segment')" data-start="01:18.40" data-end="01:19.62" data-index="1168">又有地獄</span>
					<span class="punc">，</span>
					<span class="word" @@click="$dispatch('play-segment')" data-start="01:19.68" data-end="01:21.34" data-index="1169">名大阿鼻</span>
					<span class="punc">；</span><br/>
					<span class="word" @@click="$dispatch('play-segment')" data-start="01:21.80" data-end="01:22.94" data-index="1170">復有地獄</span>
					<span class="punc">，</span>
					<span class="word" @@click="$dispatch('play-segment')" data-start="01:22.94" data-end="01:24.36" data-index="1171">名曰四角</span>
					<span class="punc">；</span>
					<span class="word" @@click="$dispatch('play-segment')" data-start="01:24.74" data-end="01:25.92" data-index="1172">復有地獄</span>
					<span class="punc">，</span>
					<span class="word" @@click="$dispatch('play-segment')" data-start="01:26.06" data-end="01:27.50" data-index="1173">名曰飛刀</span>
					<span class="punc">；</span><br/>
					<span class="word" @@click="$dispatch('play-segment')" data-start="01:28.04" data-end="01:29.14" data-index="1174">復有地獄</span>
					<span class="punc">，</span>
					<span class="word" @@click="$dispatch('play-segment')" data-start="01:29.14" data-end="01:30.92" data-index="1175">名曰火箭</span>
					<span class="punc">；</span>
					<span class="word" @@click="$dispatch('play-segment')" data-start="01:31.26" data-end="01:32.40" data-index="1176">復有地獄</span>
					<span class="punc">，</span>
					<span class="word" @@click="$dispatch('play-segment')" data-start="01:32.56" data-end="01:33.94" data-index="1177">名曰夾山</span>
					<span class="punc">；</span><br/>
					<span class="word" @@click="$dispatch('play-segment')" data-start="01:34.36" data-end="01:35.50" data-index="1178">復有地獄</span>
					<span class="punc">，</span>
					<span class="word" @@click="$dispatch('play-segment')" data-start="01:35.50" data-end="01:37.16" data-index="1179">名曰通槍</span>
					<span class="punc">；</span>
					<span class="word" @@click="$dispatch('play-segment')" data-start="01:37.62" data-end="01:38.74" data-index="1180">復有地獄</span>
					<span class="punc">，</span>
					<span class="word" @@click="$dispatch('play-segment')" data-start="01:38.90" data-end="01:40.40" data-index="1181">名曰鐵車</span>
					<span class="punc">；</span><br/>
					<span class="word" @@click="$dispatch('play-segment')" data-start="01:40.80" data-end="01:41.96" data-index="1182">復有地獄</span>
					<span class="punc">，</span>
					<span class="word" @@click="$dispatch('play-segment')" data-start="01:42.08" data-end="01:43.46" data-index="1183">名曰鐵床</span>
					<span class="punc">；</span>
					<span class="word" @@click="$dispatch('play-segment')" data-start="01:43.98" data-end="01:45.08" data-index="1184">復有地獄</span>
					<span class="punc">，</span>
					<span class="word" @@click="$dispatch('play-segment')" data-start="01:45.18" data-end="01:46.60" data-index="1185">名曰鐵牛</span>
					<span class="punc">；</span><br/>
					<span class="word" @@click="$dispatch('play-segment')" data-start="01:47.00" data-end="01:48.06" data-index="1186">復有地獄</span>
					<span class="punc">，</span>
					<span class="word" @@click="$dispatch('play-segment')" data-start="01:48.20" data-end="01:49.72" data-index="1187">名曰鐵衣</span>
					<span class="punc">；</span>
					<span class="word" @@click="$dispatch('play-segment')" data-start="01:50.08" data-end="01:51.22" data-index="1188">復有地獄</span>
					<span class="punc">，</span>
					<span class="word" @@click="$dispatch('play-segment')" data-start="01:51.44" data-end="01:52.88" data-index="1189">名曰千刃</span>
					<span class="punc">；</span><br/>
					<span class="word" @@click="$dispatch('play-segment')" data-start="01:53.30" data-end="01:54.44" data-index="1190">復有地獄</span>
					<span class="punc">，</span>
					<span class="word" @@click="$dispatch('play-segment')" data-start="01:54.74" data-end="01:56.24" data-index="1191">名曰鐵驢</span>
					<span class="punc">；</span>
					<span class="word" @@click="$dispatch('play-segment')" data-start="01:56.46" data-end="01:57.80" data-index="1192">復有地獄</span>
					<span class="punc">，</span>
					<span class="word" @@click="$dispatch('play-segment')" data-start="01:57.94" data-end="01:59.66" data-index="1193">名曰烊銅</span>
					<span class="punc">；</span><br/>
					<span class="word" @@click="$dispatch('play-segment')" data-start="01:59.98" data-end="02:01.14" data-index="1194">復有地獄</span>
					<span class="punc">，</span>
					<span class="word" @@click="$dispatch('play-segment')" data-start="02:01.34" data-end="02:02.84" data-index="1195">名曰抱柱</span>
					<span class="punc">；</span>
					<span class="word" @@click="$dispatch('play-segment')" data-start="02:03.22" data-end="02:04.46" data-index="1196">復有地獄</span>
					<span class="punc">，</span>
					<span class="word" @@click="$dispatch('play-segment')" data-start="02:04.68" data-end="02:06.30" data-index="1197">名曰流火</span>
					<span class="punc">；</span><br/>
					<span class="word" @@click="$dispatch('play-segment')" data-start="02:06.70" data-end="02:07.84" data-index="1198">復有地獄</span>
					<span class="punc">，</span>
					<span class="word" @@click="$dispatch('play-segment')" data-start="02:08.02" data-end="02:09.62" data-index="1199">名曰耕舌</span>
					<span class="punc">；</span>
					<span class="word" @@click="$dispatch('play-segment')" data-start="02:09.94" data-end="02:11.00" data-index="1200">復有地獄</span>
					<span class="punc">，</span>
					<span class="word" @@click="$dispatch('play-segment')" data-start="02:11.32" data-end="02:12.94" data-index="1201">名曰剉首</span>
					<span class="punc">；</span><br/>
					<span class="word" @@click="$dispatch('play-segment')" data-start="02:13.46" data-end="02:14.48" data-index="1202">復有地獄</span>
					<span class="punc">，</span>
					<span class="word" @@click="$dispatch('play-segment')" data-start="02:14.70" data-end="02:16.16" data-index="1203">名曰燒腳</span>
					<span class="punc">；</span>
					<span class="word" @@click="$dispatch('play-segment')" data-start="02:16.62" data-end="02:17.98" data-index="1204">復有地獄</span>
					<span class="punc">，</span>
					<span class="word" @@click="$dispatch('play-segment')" data-start="02:18.06" data-end="02:19.56" data-index="1205">名曰啗眼</span>
					<span class="punc">；</span><br/>
					<span class="word" @@click="$dispatch('play-segment')" data-start="02:20.00" data-end="02:21.02" data-index="1206">復有地獄</span>
					<span class="punc">，</span>
					<span class="word" @@click="$dispatch('play-segment')" data-start="02:21.20" data-end="02:22.66" data-index="1207">名曰鐵丸</span>
					<span class="punc">；</span>
					<span class="word" @@click="$dispatch('play-segment')" data-start="02:23.04" data-end="02:24.24" data-index="1208">復有地獄</span>
					<span class="punc">，</span>
					<span class="word" @@click="$dispatch('play-segment')" data-start="02:24.42" data-end="02:25.92" data-index="1209">名曰諍論</span>
					<span class="punc">；</span><br/>
					<span class="word" @@click="$dispatch('play-segment')" data-start="02:26.18" data-end="02:27.32" data-index="1210">復有地獄</span>
					<span class="punc">，</span>
					<span class="word" @@click="$dispatch('play-segment')" data-start="02:27.56" data-end="02:29.16" data-index="1211">名曰鐵鈇</span>
					<span class="punc">；</span>
					<span class="word" @@click="$dispatch('play-segment')" data-start="02:29.50" data-end="02:30.70" data-index="1212">復有地獄</span>
					<span class="punc">，</span>
					<span class="word" @@click="$dispatch('play-segment')" data-start="02:30.84" data-end="02:32.46" data-index="1213">名曰多瞋</span>
					<span class="punc">。</span>
				</blockquote>
			</div>
			<div x-show="details" class="details mb-3">
				「
				<blockquote>
					那地方有座大地獄，名叫極無間（受極大苦而從不間斷）；<br/>
					又有座地獄，名叫大阿鼻（和無間意思相同）；<br/>
					又有座地獄，名叫四角（罪人因地獄之火燒而湧向四角，終不得出）；<br/>
					又有座地獄，名叫飛刀（有無數把刀從空中亂墜刺插罪人）；<br/>
					又有座地獄，名叫火箭（有無數帶火之箭亂射罪人）；<br/>
					又有座地獄，名叫夾山（兩山合攏把進入山中的罪人夾成肉餅）；<br/>
					又有座地獄，名叫通槍（鐵槍戳通罪人胸背）；<br/>
					又有座地獄，名叫鐵車（鐵車輾碎罪人身體）；<br/>
					又有座地獄，名叫鐵床（罪人睡床上即被燒焦）；<br/>
					又有座地獄，名叫鐵牛（鐵牛噴火追逐踐踏罪人）；<br/>
					又有座地獄，名叫鐵衣（燒紅的鐵衣，令罪人穿戴）；<br/>
					又有座地獄，名叫千刃（成千把利刃刺殺罪人）；<br/>
					又有座地獄，名叫鐵驢（鐵驢追逐踐踏罪人）；<br/>
					又有座地獄，名叫烊銅（將熔化的銅汁灌澆在罪人身上）；<br/>
					又有座地獄，名叫抱柱（鐵柱燒紅，令罪人擁抱）；<br/>
					又有座地獄，名叫耕舌（把罪人的舌頭用鐵器刻耕）；<br/>
					又有座地獄，名叫剉首（用刀銼罪人頭）；<br/>
					又有座地獄，名叫燒腳（用火燒罪人腳）；<br/>
					又有座地獄，名叫啖眼（鐵鷹啄食罪人眼）；<br/>
					又有座地獄，名叫鐵丸（把鐵丸燒紅令罪人吞服）；<br/>
					又有座地獄，名叫諍論（罪人之間互相爭鬥搏殺）；<br/>
					又有座地獄，名叫鐵鈇（用鐵斧砍殺罪人）；<br/>
					又有座地獄，名叫多瞋（罪人互相怨怒殘殺）。
				</blockquote>
				」
				<hr/>
			</div>
			<div :class="details ? 'bg-secondary text-white' : ''" class="paragraph">
				<span class="word" @@click="$dispatch('play-segment')" data-start="02:32.78" data-end="02:34.24" data-index="1214">地藏白言</span>
				<span class="punc">：</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="02:34.56" data-end="02:35.58" data-index="1215">仁者</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="02:35.84" data-end="02:37.36" data-index="1216">鐵圍之內</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="02:37.36" data-end="02:39.20" data-index="1217">有如是等地獄</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="02:39.56" data-end="02:41.20" data-index="1218">其數無限</span>
				<span class="punc">。</span>
			</div>
			<div x-show="details" class="details mb-3">
				地藏菩薩說：「仁者，鐵圍山之內，像這樣的各種地獄，那數量多得無法計算。」
				<hr/>
			</div>
			<div :class="details ? 'bg-secondary text-white' : ''" class="paragraph">
				<span class="word" @@click="$dispatch('play-segment')" data-start="02:41.72" data-end="02:43.72" data-index="1219">更有</span>
				<blockquote>
					<span class="word" @@click="$dispatch('play-segment')" data-start="02:41.72" data-end="02:43.72" data-index="1219">叫喚地獄</span>
					<span class="punc">，</span>
					<span class="word" @@click="$dispatch('play-segment')" data-start="02:44.32" data-end="02:45.64" data-index="1220">拔舌地獄</span>
					<span class="punc">，</span><br/>
					<span class="word" @@click="$dispatch('play-segment')" data-start="02:46.16" data-end="02:47.70" data-index="1221">糞尿地獄</span>
					<span class="punc">，</span>
					<span class="word" @@click="$dispatch('play-segment')" data-start="02:48.28" data-end="02:49.68" data-index="1222">銅鎖地獄</span>
					<span class="punc">，</span><br/>
					<span class="word" @@click="$dispatch('play-segment')" data-start="02:50.16" data-end="02:51.60" data-index="1223">火象地獄</span>
					<span class="punc">，</span>
					<span class="word" @@click="$dispatch('play-segment')" data-start="02:52.04" data-end="02:53.32" data-index="1224">火狗地獄</span>
					<span class="punc">，</span><br/>
					<span class="word" @@click="$dispatch('play-segment')" data-start="02:53.80" data-end="02:55.04" data-index="1225">火馬地獄</span>
					<span class="punc">，</span>
					<span class="word" @@click="$dispatch('play-segment')" data-start="02:55.40" data-end="02:56.80" data-index="1226">火牛地獄</span>
					<span class="punc">，</span><br/>
					<span class="word" @@click="$dispatch('play-segment')" data-start="02:57.14" data-end="02:58.30" data-index="1227">火山地獄</span>
					<span class="punc">，</span>
					<span class="word" @@click="$dispatch('play-segment')" data-start="02:58.66" data-end="03:00.02" data-index="1228">火石地獄</span>
					<span class="punc">，</span><br/>
					<span class="word" @@click="$dispatch('play-segment')" data-start="03:00.28" data-end="03:01.64" data-index="1229">火床地獄</span>
					<span class="punc">，</span>
					<span class="word" @@click="$dispatch('play-segment')" data-start="03:02.02" data-end="03:03.26" data-index="1230">火梁地獄</span>
					<span class="punc">，</span><br/>
					<span class="word" @@click="$dispatch('play-segment')" data-start="03:03.68" data-end="03:04.90" data-index="1231">火鷹地獄</span>
					<span class="punc">，</span>
					<span class="word" @@click="$dispatch('play-segment')" data-start="03:05.42" data-end="03:06.74" data-index="1232">鋸牙地獄</span>
					<span class="punc">，</span><br/>
					<span class="word" @@click="$dispatch('play-segment')" data-start="03:06.98" data-end="03:08.38" data-index="1233">剝皮地獄</span>
					<span class="punc">，</span>
					<span class="word" @@click="$dispatch('play-segment')" data-start="03:08.62" data-end="03:10.04" data-index="1234">飲血地獄</span>
					<span class="punc">，</span><br/>
					<span class="word" @@click="$dispatch('play-segment')" data-start="03:10.30" data-end="03:11.70" data-index="1235">燒手地獄</span>
					<span class="punc">，</span>
					<span class="word" @@click="$dispatch('play-segment')" data-start="03:12.06" data-end="03:13.44" data-index="1236">燒腳地獄</span>
					<span class="punc">，</span><br/>
					<span class="word" @@click="$dispatch('play-segment')" data-start="03:13.84" data-end="03:15.20" data-index="1237">倒刺地獄</span>
					<span class="punc">，</span>
					<span class="word" @@click="$dispatch('play-segment')" data-start="03:15.74" data-end="03:17.06" data-index="1238">火屋地獄</span>
					<span class="punc">，</span><br/>
					<span class="word" @@click="$dispatch('play-segment')" data-start="03:17.38" data-end="03:18.62" data-index="1239">鐵屋地獄</span>
					<span class="punc">，</span>
					<span class="word" @@click="$dispatch('play-segment')" data-start="03:19.06" data-end="03:20.42" data-index="1240">火狼地獄</span>
					<span class="punc">。</span>
				</blockquote>
				<span class="word" @@click="$dispatch('play-segment')" data-start="03:20.86" data-end="03:22.30" data-index="1241">如是等地獄</span>
				<span class="punc">。</span>
			</div>
			<div x-show="details" class="details mb-3">
				「
				<blockquote>
					還有叫喚地獄（罪人受極大苦，痛楚得大聲叫喚）、<br/>
					拔舌地獄（拔罪人舌頭）、<br/>
					糞尿地獄（把罪人拋入糞尿坑中）、<br/>
					銅鎖地獄（用銅鎖鎖住罪人頸項）、<br/>
					火象地獄（噴火大象，踐踏罪人）、<br/>
					火狗地獄（噴火惡犬，追咬罪人）、<br/>
					火馬地獄（噴火疾馬，追踏罪人）、<br/>
					火牛地獄（噴火狂牛，衝撞罪人）、<br/>
					火山地獄（罪人被山火焚燒）、<br/>
					火石地獄（用燒紅的石頭烤壓罪人）、<br/>
					火床地獄（把罪人放在燒紅的鐵床上）、<br/>
					火梁地獄（把罪人懸掛在火樑上燒烤）、<br/>
					火鷹地獄（鐵鷹噴火，啄食罪人）、<br/>
					鋸牙地獄（鋸罪人的牙）、<br/>
					剝皮地獄（剝罪人的皮）、<br/>
					飲血地獄（惡蟲喝飲罪人的血）、<br/>
					燒手地獄（燒罪人的手）、<br/>
					燒腳地獄（燒罪人的腳）、<br/>
					倒刺地獄（把罪人倒掛在長刺上）、<br/>
					火屋地獄、鐵屋地獄（把罪人關入屋內烤燒）、<br/>
					火狼地獄（噴火惡狼，撕咬罪人）。
				</blockquote>
				」
				<hr/>
			</div>
			<div :class="details ? 'bg-secondary text-white' : ''" class="paragraph">
				<span class="word" @@click="$dispatch('play-segment')" data-start="03:22.60" data-end="03:25.86" data-index="1242">其中各各復有諸小地獄</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="03:26.22" data-end="03:27.08" data-index="1243">或一</span>
				<span class="punc">、</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="03:27.08" data-end="03:27.92" data-index="1244">或二</span>
				<span class="punc">、</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="03:27.92" data-end="03:28.78" data-index="1245">或三</span>
				<span class="punc">、</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="03:28.78" data-end="03:29.66" data-index="1246">或四</span>
				<span class="punc">、</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="03:30.06" data-end="03:31.66" data-index="1247">乃至百千</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="03:32.12" data-end="03:33.58" data-index="1248">其中名號</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="03:33.58" data-end="03:34.92" data-index="1249">各各不同</span>
				<span class="punc">。</span>
			</div>
			<div x-show="details" class="details mb-3">
				「像這每種大地獄內，又有各種各樣的小地獄，或有一個，或有兩個，或有三個，或者有四個，以至於有成百上千個，它們的名號，又各不相同。」
				<hr/>
			</div>
			<div :class="details ? 'bg-secondary text-white' : ''" class="paragraph">
				<span class="word" @@click="$dispatch('play-segment')" data-start="03:35.44" data-end="03:39.24" data-index="1250">地藏菩薩告普賢菩薩言</span>
				<span class="punc">：</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="03:39.72" data-end="03:40.54" data-index="1251">仁者</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="03:41.06" data-end="03:45.98" data-index="1252">此者皆是南閻浮提行惡眾生</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="03:46.34" data-end="03:47.90" data-index="1253">業感如是</span>
				<span class="punc">。</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="03:48.36" data-end="03:49.90" data-index="1254">業力甚大</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="03:50.16" data-end="03:51.72" data-index="1255">能敵須彌</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="03:51.96" data-end="03:53.56" data-index="1256">能深巨海</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="03:53.82" data-end="03:55.38" data-index="1257">能障聖道</span>
				<span class="punc">。</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="03:55.94" data-end="03:58.84" data-index="1258">是故眾生莫輕小惡</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="03:59.16" data-end="04:00.72" data-index="1259">以為無罪</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="04:01.08" data-end="04:02.48" data-index="1260">死後有報</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="04:02.66" data-end="04:04.32" data-index="1261">纖毫受之</span>
				<span class="punc">。</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="04:04.76" data-end="04:06.32" data-index="1262">父子至親</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="04:06.60" data-end="04:08.20" data-index="1263">歧路各別</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="04:08.56" data-end="04:10.20" data-index="1264">縱然相逢</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="04:10.30" data-end="04:11.82" data-index="1265">無肯代受</span>
				<span class="punc">。</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="04:12.36" data-end="04:14.50" data-index="1266">我今承佛威力</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="04:14.92" data-end="04:17.76" data-index="1267">略說地獄罪報之事</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="04:18.04" data-end="04:21.42" data-index="1268">唯願仁者暫聽是言</span>
				<span class="punc">。</span>
			</div>
			<div x-show="details" class="details mb-3">
				地藏菩薩告訴普賢菩薩說：「仁者，這些都是南閻浮提作行惡的眾生，所造的惡業而招致的惡報。這些招感的業報力量是十分巨大，比須彌山還要高，比大海還要深，能夠障礙人修行佛道。所以，世間一切眾生不要輕視小惡，以為是沒有罪過，到死後報應會一一受之。雖然父子骨肉至親，但受報應時，各自受各的報應，即使相逢，也不肯互相代受。我現在承佛的威神力，略說地獄罪報的情況，願仁者暫時聽到這裏。」
				<hr/>
			</div>
			<div :class="details ? 'bg-secondary text-white' : ''" class="paragraph">
				<span class="word" @@click="$dispatch('play-segment')" data-start="04:21.78" data-end="04:23.42" data-index="1269">普賢答言</span>
				<span class="punc">：</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="04:23.82" data-end="04:26.98" data-index="1270">吾已久知三惡道報</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="04:27.24" data-end="04:28.76" data-index="1271">望仁者說</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="04:29.24" data-end="04:33.44" data-index="1272">令後世末法一切惡行眾生</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="04:33.44" data-end="04:35.02" data-index="1273">聞仁者說</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="04:35.42" data-end="04:36.84" data-index="1274">使令歸佛</span>
				<span class="punc">。</span>
			</div>
			<div x-show="details" class="details mb-3">
				普賢菩薩回答說：「我在很久以前就知道有三惡道的報應，希望仁者再說一說，讓後世末法時代的眾生聽到你這番話，從而歸依佛道。」
				<hr/>
			</div>
			<div :class="details ? 'bg-secondary text-white' : ''" class="paragraph">
				<span class="word" @@click="$dispatch('play-segment')" data-start="04:37.34" data-end="04:39.08" data-index="1275">地藏白言</span>
				<span class="punc">：</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="04:39.34" data-end="04:40.14" data-index="1276">仁者</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="04:40.42" data-end="04:41.96" data-index="1277">地獄罪報</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="04:41.96" data-end="04:43.78" data-index="1278">其事如是</span>
				<span class="punc">。</span>
				<blockquote>
					<span class="word" @@click="$dispatch('play-segment')" data-start="04:44.10" data-end="04:45.36" data-index="1279">或有地獄</span>
					<span class="punc">，</span>
					<span class="word" @@click="$dispatch('play-segment')" data-start="04:45.68" data-end="04:47.20" data-index="1280">取罪人舌</span>
					<span class="punc">，</span>
					<span class="word" @@click="$dispatch('play-segment')" data-start="04:47.54" data-end="04:49.08" data-index="1281">使牛耕之</span>
					<span class="punc">。</span><br/>
					<span class="word" @@click="$dispatch('play-segment')" data-start="04:49.44" data-end="04:50.54" data-index="1282">或有地獄</span>
					<span class="punc">，</span>
					<span class="word" @@click="$dispatch('play-segment')" data-start="04:50.82" data-end="04:52.36" data-index="1283">取罪人心</span>
					<span class="punc">，</span>
					<span class="word" @@click="$dispatch('play-segment')" data-start="04:52.54" data-end="04:54.18" data-index="1284">夜叉食之</span>
					<span class="punc">。</span><br/>
					<span class="word" @@click="$dispatch('play-segment')" data-start="04:54.82" data-end="04:55.88" data-index="1285">或有地獄</span>
					<span class="punc">，</span>
					<span class="word" @@click="$dispatch('play-segment')" data-start="04:56.32" data-end="04:58.24" data-index="1286">鑊湯盛沸</span>
					<span class="punc">，</span>
					<span class="word" @@click="$dispatch('play-segment')" data-start="04:58.46" data-end="04:59.98" data-index="1287">煮罪人身</span>
					<span class="punc">。</span><br/>
					<span class="word" @@click="$dispatch('play-segment')" data-start="05:00.30" data-end="05:01.38" data-index="1288">或有地獄</span>
					<span class="punc">，</span>
					<span class="word" @@click="$dispatch('play-segment')" data-start="05:01.82" data-end="05:03.62" data-index="1289">赤燒銅柱</span>
					<span class="punc">，</span>
					<span class="word" @@click="$dispatch('play-segment')" data-start="05:03.94" data-end="05:05.34" data-index="1290">使罪人抱</span>
					<span class="punc">。</span><br/>
					<span class="word" @@click="$dispatch('play-segment')" data-start="05:05.90" data-end="05:07.14" data-index="1291">或有地獄</span>
					<span class="punc">，</span>
					<span class="word" @@click="$dispatch('play-segment')" data-start="05:07.48" data-end="05:09.16" data-index="1292">使諸火燒</span>
					<span class="punc">，</span>
					<span class="word" @@click="$dispatch('play-segment')" data-start="05:09.46" data-end="05:10.94" data-index="1293">趁及罪人</span>
					<span class="punc">。</span><br/>
					<span class="word" @@click="$dispatch('play-segment')" data-start="05:11.30" data-end="05:12.66" data-index="1294">或有地獄</span>
					<span class="punc">，</span>
					<span class="word" @@click="$dispatch('play-segment')" data-start="05:12.92" data-end="05:14.62" data-index="1295">一向寒冰</span>
					<span class="punc">。</span><br/>
					<span class="word" @@click="$dispatch('play-segment')" data-start="05:15.12" data-end="05:16.28" data-index="1296">或有地獄</span>
					<span class="punc">，</span>
					<span class="word" @@click="$dispatch('play-segment')" data-start="05:16.64" data-end="05:18.30" data-index="1297">無限糞尿</span>
					<span class="punc">。</span><br/>
					<span class="word" @@click="$dispatch('play-segment')" data-start="05:18.44" data-end="05:19.86" data-index="1298">或有地獄</span>
					<span class="punc">，</span>
					<span class="word" @@click="$dispatch('play-segment')" data-start="05:20.12" data-end="05:21.76" data-index="1299">純飛鈒鑗</span>
					<span class="punc">。</span><br/>
					<span class="word" @@click="$dispatch('play-segment')" data-start="05:22.24" data-end="05:23.52" data-index="1300">或有地獄</span>
					<span class="punc">，</span>
					<span class="word" @@click="$dispatch('play-segment')" data-start="05:23.88" data-end="05:25.70" data-index="1301">多攢火槍</span>
					<span class="punc">。</span><br/>
					<span class="word" @@click="$dispatch('play-segment')" data-start="05:26.10" data-end="05:27.32" data-index="1302">或有地獄</span>
					<span class="punc">，</span>
					<span class="word" @@click="$dispatch('play-segment')" data-start="05:27.68" data-end="05:29.28" data-index="1303">唯撞胸背</span>
					<span class="punc">。</span><br/>
					<span class="word" @@click="$dispatch('play-segment')" data-start="05:29.62" data-end="05:30.90" data-index="1304">或有地獄</span>
					<span class="punc">，</span>
					<span class="word" @@click="$dispatch('play-segment')" data-start="05:31.18" data-end="05:32.66" data-index="1305">但燒手足</span>
					<span class="punc">。</span><br/>
					<span class="word" @@click="$dispatch('play-segment')" data-start="05:33.20" data-end="05:34.36" data-index="1306">或有地獄</span>
					<span class="punc">，</span>
					<span class="word" @@click="$dispatch('play-segment')" data-start="05:34.86" data-end="05:36.62" data-index="1307">盤繳鐵蛇</span>
					<span class="punc">。</span><br/>
					<span class="word" @@click="$dispatch('play-segment')" data-start="05:36.94" data-end="05:38.20" data-index="1308">或有地獄</span>
					<span class="punc">，</span>
					<span class="word" @@click="$dispatch('play-segment')" data-start="05:38.52" data-end="05:40.20" data-index="1309">驅逐鐵狗</span>
					<span class="punc">。</span><br/>
					<span class="word" @@click="$dispatch('play-segment')" data-start="05:40.42" data-end="05:41.74" data-index="1310">或有地獄</span>
					<span class="punc">，</span>
					<span class="word" @@click="$dispatch('play-segment')" data-start="05:42.10" data-end="05:43.86" data-index="1311">盡駕鐵騾</span>
					<span class="punc">。</span>
				</blockquote>
			</div>
			<div x-show="details" class="details mb-3">
				地藏菩薩說：「仁者，地獄里的罪惡報應情形，是這樣的：
				<blockquote>
					有的地獄，拔取罪人的舌頭，用牛去耕犁；<br/>
					有的地獄，挖取罪人的心臟，讓夜叉食去；<br/>
					有的地獄，用滾燙的熱湯，將罪人放入鍋內去煮；<br/>
					有的地獄，把銅柱燒紅，讓罪人去抱；<br/>
					有的地獄，讓烈火熊燒，把罪人燒；<br/>
					有的地獄，到處都是寒冰，冷凍罪人；<br/>
					有的地獄，到處是糞尿，使罪人浸泡；<br/>
					有的地獄，到處都是鐵刺，刺穿罪人身體；<br/>
					有的地獄，到處都是燒紅了的鐵槍，刺透罪人的身軀；<br/>
					有的地獄，只是用鐵鎚捶擊罪人胸背；<br/>
					有的地獄，只是用大火燒罪人的手腳；<br/>
					有的地獄，到處盤繞着鐵蛇，鑽吸罪人；<br/>
					有的地獄，驅趕着鐵狗追咬罪人；<br/>
					有的地獄，駕着鐵騾踐踏罪人。
				</blockquote>
				」
				<hr/>
			</div>
			<div :class="details ? 'bg-secondary text-white' : ''" class="paragraph">
				<span class="word" @@click="$dispatch('play-segment')" data-start="05:44.10" data-end="05:45.02" data-index="1312">仁者</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="05:45.36" data-end="05:46.98" data-index="1313">如是等報</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="05:47.18" data-end="05:48.74" data-index="1314">各各獄中</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="05:48.96" data-end="05:52.26" data-index="1315">有百千種業道之器</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="05:52.50" data-end="05:55.14" data-index="1316">無非是銅是鐵</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="05:55.30" data-end="05:57.08" data-index="1317">是石是火</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="05:57.32" data-end="05:58.52" data-index="1318">此四種物</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="05:58.94" data-end="06:00.90" data-index="1319">眾業行感</span>
				<span class="punc">。</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="06:01.14" data-end="06:04.48" data-index="1320">若廣說地獄罪報等事</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="06:04.74" data-end="06:05.96" data-index="1321">一一獄中</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="06:06.10" data-end="06:08.68" data-index="1322">更有百千種苦楚</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="06:09.06" data-end="06:10.30" data-index="1323">何況多獄</span>
				<span class="punc">。</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="06:10.80" data-end="06:14.84" data-index="1324">我今承佛威神及仁者問</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="06:15.06" data-end="06:16.64" data-index="1325">略說如是</span>
				<span class="punc">。</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="06:16.92" data-end="06:18.34" data-index="1326">若廣解說</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="06:18.50" data-end="06:19.94" data-index="1327">窮劫不盡</span>
				<span class="punc">。</span>
			</div>
			<div x-show="details" class="details mb-3">
				「仁者，像這樣的種種報應，在每個不同的地獄裏，有千百種業報所用的器具，無不是由銅、鐵、石頭、火這四種東西做成的，都是眾生造業所招致的報應。如果詳細地說地獄裏罪惡報應的情形，每座地獄中，就有百千種苦楚，何況這麼多的地獄。我現在承佛的威神力量，以及仁者的詢問而略說，如果要詳細地說，那是永遠都說不盡的。」
				<hr/>
			</div>
			<h4 class="toc-item" id="vol2-ch6">
				<span class="word" @@click="$dispatch('play-segment')" data-start="06:21.82" data-end="06:24.88" data-index="1328">如來讚歎品第六</span>
			</h4>
			<div :class="details ? 'bg-secondary text-white' : ''" class="paragraph">
				<span class="word" @@click="$dispatch('play-segment')" data-start="06:26.44" data-end="06:30.44" data-index="1329">爾時世尊舉身放大光明</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="06:31.30" data-end="06:36.54" data-index="1330">遍照百千萬億恆河沙等諸佛世界</span>
				<span class="punc">。</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="06:37.30" data-end="06:38.94" data-index="1331">出大音聲</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="06:39.32" data-end="06:44.18" data-index="1332">普告諸佛世界一切諸菩薩摩訶薩</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="06:44.82" data-end="06:48.44" data-index="1333">及天</span>
				<span class="punc">、</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="06:44.82" data-end="06:48.44" data-index="1333">龍</span>
				<span class="punc">、</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="06:44.82" data-end="06:48.44" data-index="1333">鬼</span>
				<span class="punc">、</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="06:44.82" data-end="06:48.44" data-index="1333">神</span>
				<span class="punc">、</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="06:44.82" data-end="06:48.44" data-index="1333">人</span>
				<span class="punc">、</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="06:44.82" data-end="06:48.44" data-index="1333">非人等</span>
				<span class="punc">。</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="06:49.10" data-end="06:55.06" data-index="1334">聽吾今日稱揚讚歎地藏菩薩摩訶薩</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="06:55.52" data-end="06:57.56" data-index="1335">於十方世界</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="06:57.92" data-end="07:02.50" data-index="1336">現大不可思議威神慈悲之力</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="07:03.00" data-end="07:06.08" data-index="1337">救護一切罪苦之事</span>
				<span class="punc">。</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="07:06.72" data-end="07:08.22" data-index="1338">吾滅度後</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="07:08.52" data-end="07:11.22" data-index="1339">汝等諸菩薩大士</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="07:11.52" data-end="07:13.82" data-index="1340">及天龍鬼神等</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="07:14.16" data-end="07:15.76" data-index="1341">廣作方便</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="07:15.98" data-end="07:17.62" data-index="1342">衛護是經</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="07:18.08" data-end="07:21.76" data-index="1343">令一切眾生證涅槃樂</span>
				<span class="punc">。</span>
			</div>
			<div x-show="details" class="details mb-3">
				這時，釋迦牟尼佛全身放出燦爛的光輝，照遍了百千萬億像恆河沙一樣多的諸佛世界，發出巨大的音聲，普告諸佛世界的一切菩薩、大菩薩，以及天、龍、鬼、神、人、非人等所有眾生：「聽我現在稱揚讚歎地藏大菩薩的功德，這位大菩薩在十方世界裏，顯現出不可思議的威神慈悲的力量，來救拔一切業報眾生備受苦惱的事情。我入滅後，你們這些菩薩大士，以及天龍鬼神等，要用各種方法，保護這部《地藏本願經》，使一切眾生都能證得那不生不滅的涅槃之樂。」
				<hr/>
			</div>
			<div :class="details ? 'bg-secondary text-white' : ''" class="paragraph">
				<span class="word" @@click="$dispatch('play-segment')" data-start="07:22.38" data-end="07:23.94" data-index="1344">說是語已</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="07:24.26" data-end="07:26.50" data-index="1345">會中有一菩薩</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="07:26.50" data-end="07:28.28" data-index="1346">名曰普廣</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="07:28.74" data-end="07:31.88" data-index="1347">合掌恭敬而白佛言</span>
				<span class="punc">：</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="07:32.34" data-end="07:36.74" data-index="1348">今見世尊讚歎地藏菩薩</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="07:37.12" data-end="07:41.76" data-index="1349">有如是不可思議大威神德</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="07:42.16" data-end="07:47.80" data-index="1350">唯願世尊為未來世末法眾生</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="07:48.14" data-end="07:54.30" data-index="1351">宣說地藏菩薩利益人天因果等事</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="07:54.72" data-end="07:56.94" data-index="1352">使諸天龍八部</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="07:57.32" data-end="07:59.72" data-index="1353">及未來世眾生</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="08:00.20" data-end="08:02.04" data-index="1354">頂受佛語</span>
				<span class="punc">。</span>
			</div>
			<div x-show="details" class="details mb-3">
				佛說完這番話後，集會中有一位菩薩，名叫普廣，合掌恭敬地對佛說：「現在看到世尊你讚歎地藏菩薩，他具有這麼大的不可思議的大威神力，願世尊為末法時代的眾生，宣說地藏菩薩利益人天因果報應等事情，使諸天龍八部，以及後世的眾生，都來頂戴奉持佛的教導。」
				<hr/>
			</div>
			<div :class="details ? 'bg-secondary text-white' : ''" class="paragraph">
				<span class="word" @@click="$dispatch('play-segment')" data-start="08:02.54" data-end="08:08.56" data-index="1355">爾時世尊告普廣菩薩及四眾等</span>
				<span class="punc">：</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="08:08.96" data-end="08:10.66" data-index="1356">諦聽諦聽</span>
				<span class="punc">！</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="08:10.88" data-end="08:18.80" data-index="1357">吾當為汝略說地藏菩薩利益人天福德之事</span>
				<span class="punc">。</span>
			</div>
			<div x-show="details" class="details mb-3">
				這時佛告訴普廣菩薩及佛徒四眾等：「認真聽啊認真聽，我現在略說地藏菩薩利益人天，廣造福德的事。」
				<hr/>
			</div>
			<div :class="details ? 'bg-secondary text-white' : ''" class="paragraph">
				<span class="word" @@click="$dispatch('play-segment')" data-start="08:19.40" data-end="08:21.22" data-index="1358">普廣白言</span>
				<span class="punc">：</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="08:21.66" data-end="08:22.56" data-index="1359">唯然</span>
				<span class="punc">！</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="08:22.72" data-end="08:23.58" data-index="1360">世尊</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="08:23.58" data-end="08:25.32" data-index="1361">願樂欲聞</span>
				<span class="punc">。</span>
			</div>
			<div x-show="details" class="details mb-3">
				普廣菩薩說：「是的，世尊，我很樂意聽你的教誨。」
				<hr/>
			</div>
			<div :class="details ? 'bg-secondary text-white' : ''" class="paragraph">
				<span class="word" @@click="$dispatch('play-segment')" data-start="08:25.78" data-end="08:28.00" data-index="1362">佛告普廣菩薩</span>
				<span class="punc">：</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="08:28.56" data-end="08:30.18" data-index="1363">未來世中</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="08:30.48" data-end="08:32.86" data-index="1364">若有善男子</span>
				<span class="punc">、</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="08:32.86" data-end="08:34.10" data-index="1365">善女人</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="08:34.48" data-end="08:39.06" data-index="1366">聞是地藏菩薩摩訶薩名者</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="08:39.42" data-end="08:41.06" data-index="1367">或合掌者</span>
				<span class="punc">、</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="08:41.42" data-end="08:42.86" data-index="1368">讚歎者</span>
				<span class="punc">、</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="08:43.04" data-end="08:44.40" data-index="1369">作禮者</span>
				<span class="punc">、</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="08:44.60" data-end="08:46.02" data-index="1370">戀慕者</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="08:46.40" data-end="08:49.72" data-index="1371">是人超越三十劫罪</span>
				<span class="punc">。</span>
			</div>
			<div x-show="details" class="details mb-3">
				佛告訴普廣菩薩說：「將來的世界中，假若有善男女，聽到地藏菩薩這個的名字，或者合掌虔誠地讚歎、恭敬地作禮拜叩、愛戀仰慕，這人就能夠超越三十劫的罪業報應。
				<hr/>
			</div>
			<div :class="details ? 'bg-secondary text-white' : ''" class="paragraph">
				<span class="word" @@click="$dispatch('play-segment')" data-start="08:50.20" data-end="08:50.98" data-index="1372">普廣</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="08:51.38" data-end="08:53.34" data-index="1373">若有善男子</span>
				<span class="punc">、</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="08:53.52" data-end="08:54.68" data-index="1374">善女人</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="08:55.06" data-end="08:57.34" data-index="1375">或彩畫形像</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="08:57.72" data-end="08:59.84" data-index="1376">或土石膠漆</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="09:00.18" data-end="09:01.98" data-index="1377">金銀銅鐵</span>
				<span class="punc">、</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="09:02.36" data-end="09:03.74" data-index="1378">作此菩薩</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="09:04.18" data-end="09:06.18" data-index="1379">一瞻一禮者</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="09:06.78" data-end="09:11.04" data-index="1380">是人百返生於三十三天</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="09:11.38" data-end="09:13.80" data-index="1381">永不墮於惡道</span>
				<span class="punc">。</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="09:14.28" data-end="09:17.04" data-index="1382">假如天福盡故</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="09:17.30" data-end="09:19.08" data-index="1383">下生人間</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="09:19.36" data-end="09:20.94" data-index="1384">猶為國王</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="09:21.20" data-end="09:22.58" data-index="1385">不失大利</span>
				<span class="punc">。</span>
			</div>
			<div x-show="details" class="details mb-3">
				「普廣，如果有善男女，能彩畫地藏菩薩形像，用土石、油漆、金、銀、銅、鐵，塑造地藏菩薩形像，並且向菩薩瞻仰禮拜，這個人就可以往生於三十三天上達百次，永遠不墮入惡道中受苦；假如他因天上的福澤享盡的緣故，下生到人間，還能在人間作國王，繼續享受人間福樂。」
				<hr/>
			</div>
			<div :class="details ? 'bg-secondary text-white' : ''" class="paragraph">
				<span class="word" @@click="$dispatch('play-segment')" data-start="09:22.94" data-end="09:24.42" data-index="1386">若有女人</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="09:24.94" data-end="09:26.70" data-index="1387">厭女人身</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="09:27.08" data-end="09:31.10" data-index="1388">盡心供養地藏菩薩畫像</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="09:31.54" data-end="09:35.82" data-index="1389">及土石膠漆銅鐵等像</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="09:36.16" data-end="09:38.42" data-index="1390">如是日日不退</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="09:38.76" data-end="09:40.60" data-index="1391">常以華香</span>
				<span class="punc">、</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="09:40.70" data-end="09:41.56" data-index="1392">飲食</span>
				<span class="punc">、</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="09:41.74" data-end="09:42.44" data-index="1393">衣服</span>
				<span class="punc">、</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="09:42.74" data-end="09:43.70" data-index="1394">繒綵</span>
				<span class="punc">、</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="09:43.80" data-end="09:44.68" data-index="1395">幢旛</span>
				<span class="punc">、</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="09:45.06" data-end="09:45.54" data-index="1396">錢</span>
				<span class="punc">、</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="09:45.54" data-end="09:47.30" data-index="1397">寶物等供養</span>
				<span class="punc">。</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="09:47.96" data-end="09:49.44" data-index="1398">是善女人</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="09:49.98" data-end="09:52.20" data-index="1399">盡此一報女身</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="09:52.74" data-end="09:54.32" data-index="1400">百千萬劫</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="09:54.64" data-end="09:57.54" data-index="1401">更不生有女人世界</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="09:58.06" data-end="09:59.70" data-index="1402">何況復受</span>
				<span class="punc">。</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="10:00.00" data-end="10:02.72" data-index="1403">除非慈願力故</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="10:03.06" data-end="10:04.62" data-index="1404">要受女身</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="10:04.94" data-end="10:06.62" data-index="1405">度脫眾生</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="10:06.98" data-end="10:10.10" data-index="1406">承斯供養地藏力故</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="10:10.40" data-end="10:11.72" data-index="1407">及功德力</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="10:12.18" data-end="10:15.28" data-index="1408">百千萬劫不受女身</span>
				<span class="punc">。</span>
			</div>
			<div x-show="details" class="details mb-3">
				「假如有女人，討厭自己身為女性的身體，只要誠心供養地藏菩薩的畫像，或者供養用土石、膠、漆、銅、鐵等所造的地藏菩薩像，這樣天天虔誠供養而不退心，經常用香花、飲食、衣服、彩色絹帛、幢幡、錢、寶物等東西來供養。這個女人在結束這一世後，百千萬劫中，再不會轉生到有女人世界，何況再受報為女身呢？除非，她自己慈悲發願，要受女身來度脫受罪苦眾生的緣故，憑着她供養地藏菩薩的福力及功德力，百千萬劫中不再轉生為女人。」
				<hr/>
			</div>
			<div :class="details ? 'bg-secondary text-white' : ''" class="paragraph">
				<span class="word" @@click="$dispatch('play-segment')" data-start="10:15.66" data-end="10:17.30" data-index="1409">復次普廣</span>
				<span class="punc">：</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="10:17.70" data-end="10:19.16" data-index="1410">若有女人</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="10:19.36" data-end="10:21.20" data-index="1411">厭是醜陋</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="10:21.30" data-end="10:22.92" data-index="1412">多疾病者</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="10:23.38" data-end="10:25.96" data-index="1413">但於地藏像前</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="10:26.34" data-end="10:27.92" data-index="1414">志心瞻禮</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="10:28.42" data-end="10:29.92" data-index="1415">食頃之間</span>
				<span class="punc">。</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="10:30.40" data-end="10:32.80" data-index="1416">是人千萬劫中</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="10:33.14" data-end="10:34.96" data-index="1417">所受生身</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="10:35.40" data-end="10:36.96" data-index="1418">相貌圓滿</span>
				<span class="punc">。</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="10:37.52" data-end="10:39.14" data-index="1419">是醜陋女人</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="10:39.50" data-end="10:41.22" data-index="1420">如不厭女身</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="10:41.56" data-end="10:44.26" data-index="1421">即百千萬億生中</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="10:44.52" data-end="10:46.30" data-index="1422">常為王女</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="10:46.58" data-end="10:48.32" data-index="1423">乃及王妃</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="10:48.72" data-end="10:50.48" data-index="1424">宰輔大姓</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="10:50.82" data-end="10:52.32" data-index="1425">大長者女</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="10:52.80" data-end="10:54.40" data-index="1426">端正受生</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="10:54.82" data-end="10:56.40" data-index="1427">諸相圓滿</span>
				<span class="punc">。</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="10:56.90" data-end="10:58.86" data-index="1428">由志心故</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="10:59.20" data-end="11:01.28" data-index="1429">瞻禮地藏菩薩</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="11:01.52" data-end="11:03.26" data-index="1430">獲福如是</span>
				<span class="punc">。</span>
			</div>
			<div x-show="details" class="details mb-3">
				佛又告訴普廣菩薩：「假如有女人，嫌自己長得醜陋而又多疾病，只要她在地藏菩薩像前，誠心誠意瞻仰禮拜，只須一頓飯的時間，這個女人在千萬劫中所受生的相貌，都能圓滿，端正美麗。這個相貌醜陋的女人，如果不嫌棄她是女人身體，便可在百千萬億劫中，常轉生為國王之女，或者當王妃、宰輔大臣或富貴尊榮人家的女兒，而且生得端莊美麗，諸相都非常圓滿稱意。這就是由於她誠心的緣故，一心瞻仰禮拜地藏菩薩，受到了這樣好的報應。」
				<hr/>
			</div>
			<div :class="details ? 'bg-secondary text-white' : ''" class="paragraph">
				<span class="word" @@click="$dispatch('play-segment')" data-start="11:03.70" data-end="11:05.26" data-index="1431">復次普廣</span>
				<span class="punc">：</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="11:05.64" data-end="11:07.62" data-index="1432">若有善男子</span>
				<span class="punc">、</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="11:07.84" data-end="11:08.96" data-index="1433">善女人</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="11:09.46" data-end="11:11.78" data-index="1434">能對菩薩像前</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="11:12.22" data-end="11:13.84" data-index="1435">作諸伎樂</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="11:14.36" data-end="11:16.50" data-index="1436">及歌詠讚歎</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="11:16.94" data-end="11:18.64" data-index="1437">香華供養</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="11:19.12" data-end="11:22.28" data-index="1438">乃至勸於一人多人</span>
				<span class="punc">。</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="11:22.52" data-end="11:24.54" data-index="1439">如是等輩</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="11:24.80" data-end="11:28.32" data-index="1440">現在世中及未來世</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="11:28.70" data-end="11:33.38" data-index="1441">常得百千鬼神日夜衛護</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="11:33.70" data-end="11:37.34" data-index="1442">不令惡事輒聞其耳</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="11:37.80" data-end="11:40.04" data-index="1443">何況親受諸橫</span>
				<span class="punc">。</span>
			</div>
			<div x-show="details" class="details mb-3">
				佛又對普廣菩薩說：「假如有善男女，能在地藏菩薩像前作各種伎樂，或者歌詠讚歎，用香花來供養，甚至勸導一人或多人敬信禮拜地藏菩薩，像這樣的人，在他們現在的一世中以及將來世中，常常會得百千鬼神的日夜護衛，不讓他們經常聽到各種惡事，何況親身遭到各種災禍橫事。」
				<hr/>
			</div>
			<div :class="details ? 'bg-secondary text-white' : ''" class="paragraph">
				<span class="word" @@click="$dispatch('play-segment')" data-start="11:40.64" data-end="11:42.16" data-index="1444">復次普廣</span>
				<span class="punc">：</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="11:42.42" data-end="11:44.16" data-index="1445">未來世中</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="11:44.34" data-end="11:48.40" data-index="1446">若有惡人及惡神惡鬼</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="11:48.80" data-end="11:50.82" data-index="1447">見有善男子</span>
				<span class="punc">、</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="11:50.82" data-end="11:51.88" data-index="1448">善女人</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="11:52.24" data-end="11:58.68" data-index="1449">歸敬供養讚歎瞻禮地藏菩薩形像</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="11:59.22" data-end="12:01.44" data-index="1450">或妄生譏毀</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="12:01.70" data-end="12:04.94" data-index="1451">謗無功德及利益事</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="12:05.38" data-end="12:07.34" data-index="1452">或露齒笑</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="12:07.54" data-end="12:09.48" data-index="1453">或背面非</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="12:09.72" data-end="12:11.64" data-index="1454">或勸人共非</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="12:12.00" data-end="12:13.60" data-index="1455">或一人非</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="12:13.86" data-end="12:15.50" data-index="1456">或多人非</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="12:15.82" data-end="12:19.04" data-index="1457">乃至一念生譏毀者</span>
				<span class="punc">。</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="12:19.44" data-end="12:21.08" data-index="1458">如是之人</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="12:21.28" data-end="12:23.96" data-index="1459">賢劫千佛滅度</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="12:24.16" data-end="12:25.94" data-index="1460">譏毀之報</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="12:26.22" data-end="12:30.70" data-index="1461">尚在阿鼻地獄受極重罪</span>
				<span class="punc">。</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="12:31.12" data-end="12:32.80" data-index="1462">過是劫已</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="12:33.38" data-end="12:35.16" data-index="1463">方受餓鬼</span>
				<span class="punc">。</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="12:35.42" data-end="12:37.24" data-index="1464">又經千劫</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="12:37.66" data-end="12:39.30" data-index="1465">復受畜生</span>
				<span class="punc">。</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="12:39.58" data-end="12:41.30" data-index="1466">又經千劫</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="12:41.72" data-end="12:43.34" data-index="1467">方得人身</span>
				<span class="punc">。</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="12:43.72" data-end="12:45.32" data-index="1468">縱受人身</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="12:45.66" data-end="12:47.40" data-index="1469">貧窮下賤</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="12:47.82" data-end="12:49.52" data-index="1470">諸根不具</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="12:49.64" data-end="12:53.16" data-index="1471">多被惡業來結其心</span>
				<span class="punc">。</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="12:53.58" data-end="12:55.18" data-index="1472">不久之間</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="12:55.36" data-end="12:56.90" data-index="1473">復墮惡道</span>
				<span class="punc">。</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="12:57.46" data-end="12:59.00" data-index="1474">是故普廣</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="12:59.40" data-end="13:01.88" data-index="1475">譏毀他人供養</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="13:02.26" data-end="13:03.88" data-index="1476">尚獲此報</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="13:04.30" data-end="13:07.44" data-index="1477">何況別生惡見毀滅</span>
				<span class="punc">。</span>
			</div>
			<div x-show="details" class="details mb-3">
				佛又告訴普廣菩薩：「在未來世界中，如果有惡人及造惡的鬼神，看見善男女歸依、供養、讚歎、瞻仰禮拜地藏菩薩，這些惡人、鬼神妄生譏笑毀譽之心，說這是無功德利益的事，或露齒冷笑，或背後非議，或唆使許多人一同非議，或一個人非議，甚至生起一念譏笑、毀謗禮敬地藏菩薩的人，像這樣的人，在整個賢劫千佛圓結以後，他們譏毀的惡報，還在阿鼻地獄中受極重的刑罪，地獄苦報完後，又受餓鬼道的罪苦；再經過千劫，又受畜生道的罪苦；又經過千劫，才得以轉生為人，即使為人，也是貧窮下賤的人，同時六根不完全具備，身體殘缺不全，其心身又被惡業所纏繞。這樣，過了不久，又再墮入惡道之中。所以普廣菩薩，譏謗別人供養菩薩，尚且獲得這麼重的報應，何況再另生出其他惡意毀滅。」
				<hr/>
			</div>
			<div :class="details ? 'bg-secondary text-white' : ''" class="paragraph">
				<span class="word" @@click="$dispatch('play-segment')" data-start="13:08.00" data-end="13:09.70" data-index="1478">復次普廣</span>
				<span class="punc">：</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="13:10.10" data-end="13:11.90" data-index="1479">若未來世</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="13:11.90" data-end="13:13.90" data-index="1480">有男子女人</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="13:14.38" data-end="13:16.10" data-index="1481">久處床枕</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="13:16.42" data-end="13:18.08" data-index="1482">求生求死</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="13:18.50" data-end="13:19.70" data-index="1483">了不可得</span>
				<span class="punc">。</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="13:20.20" data-end="13:22.46" data-index="1484">或夜夢惡鬼</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="13:22.84" data-end="13:24.44" data-index="1485">乃及家親</span>
				<span class="punc">、</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="13:24.86" data-end="13:26.54" data-index="1486">或遊險道</span>
				<span class="punc">、</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="13:27.04" data-end="13:28.94" data-index="1487">或多魘寐</span>
				<span class="punc">、</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="13:29.26" data-end="13:31.00" data-index="1488">共鬼神遊</span>
				<span class="punc">。</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="13:31.42" data-end="13:33.40" data-index="1489">日月歲深</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="13:33.82" data-end="13:35.82" data-index="1490">轉復尪瘵</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="13:36.16" data-end="13:38.12" data-index="1491">眠中叫苦</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="13:38.46" data-end="13:40.50" data-index="1492">慘悽不樂者</span>
				<span class="punc">。</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="13:40.92" data-end="13:44.12" data-index="1493">此皆是業道論對</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="13:44.34" data-end="13:46.10" data-index="1494">未定輕重</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="13:46.52" data-end="13:48.24" data-index="1495">或難捨壽</span>
				<span class="punc">、</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="13:48.58" data-end="13:50.24" data-index="1496">或不得癒</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="13:50.54" data-end="13:52.14" data-index="1497">男女俗眼</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="13:52.30" data-end="13:54.14" data-index="1498">不辨是事</span>
				<span class="punc">。</span>
			</div>
			<div x-show="details" class="details mb-3">
				佛又對普廣菩薩說：「假如未來之世，有男女長期臥病在床，求生不能，求死不得；或者夜間夢見惡鬼以及已死的親人眷屬，或者在極險惡的路上遊走，或多惡夢驚叫不醒，夢中與鬼神同遊。這樣經過很長的年月，又轉為五勞七傷、身體殘弱，連眠夢也叫着痛苦，極為淒慘，沒有一點安樂。這都是以往所做的惡事招致的冤親正在與他們一一論對，還未判定他們的罪業輕重，所以還未可以捨去性命，同時疾病纏身不能痊癒。以上這些事情，一般世間凡胎俗眼，是不能辨別明白的。」
				<hr/>
			</div>
			<div :class="details ? 'bg-secondary text-white' : ''" class="paragraph">
				<span class="word" @@click="$dispatch('play-segment')" data-start="13:54.46" data-end="13:58.10" data-index="1499">但當對諸佛菩薩像前</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="13:58.54" data-end="14:01.78" data-index="1500">高聲轉讀此經一遍</span>
				<span class="punc">。</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="14:02.24" data-end="14:04.94" data-index="1501">或取病人可愛之物</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="14:05.26" data-end="14:06.56" data-index="1502">或衣服</span>
				<span class="punc">、</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="14:06.68" data-end="14:07.52" data-index="1503">寶貝</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="14:07.80" data-end="14:08.68" data-index="1504">莊園</span>
				<span class="punc">、</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="14:08.86" data-end="14:09.46" data-index="1505">舍宅</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="14:09.90" data-end="14:11.70" data-index="1506">對病人前</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="14:12.12" data-end="14:13.84" data-index="1507">高聲唱言</span>
				<span class="punc">：</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="14:14.08" data-end="14:15.86" data-index="1508">我某甲等</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="14:16.20" data-end="14:21.64" data-index="1509">為是病人對經像前捨諸等物</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="14:22.12" data-end="14:24.06" data-index="1510">或供養經像</span>
				<span class="punc">、</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="14:24.36" data-end="14:27.26" data-index="1511">或造佛菩薩形像</span>
				<span class="punc">、</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="14:27.60" data-end="14:29.50" data-index="1512">或造塔寺</span>
				<span class="punc">、</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="14:29.86" data-end="14:31.72" data-index="1513">或燃油燈</span>
				<span class="punc">、</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="14:32.12" data-end="14:33.96" data-index="1514">或施常住</span>
				<span class="punc">。</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="14:34.28" data-end="14:36.68" data-index="1515">如是三白病人</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="14:37.08" data-end="14:38.84" data-index="1516">遣令聞知</span>
				<span class="punc">。</span>
			</div>
			<div x-show="details" class="details mb-3">
				「但只要面對佛和菩薩的聖像，高聲轉讀這部《地藏本願經》一遍；或取來病人喜好的東西，或是衣服、寶貝，或是莊園房舍，在病人面前，高聲唱道──我是某甲等人，為了這位病人，在這佛菩薩經像之前布施這些財物，或者用來供養經像，或者用來塑造佛和菩薩聖像，或者用來建造塔寺，或者用來為佛菩薩燃油燈，或者施給寺院。這樣三番五次對病人說，使病人聽到。」
				<hr/>
			</div>
			<div :class="details ? 'bg-secondary text-white' : ''" class="paragraph">
				<span class="word" @@click="$dispatch('play-segment')" data-start="14:39.26" data-end="14:42.04" data-index="1517">假令諸識分散</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="14:42.14" data-end="14:43.86" data-index="1518">至氣盡者</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="14:44.26" data-end="14:45.66" data-index="1519">乃至一日</span>
				<span class="punc">、</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="14:46.04" data-end="14:46.70" data-index="1520">二日</span>
				<span class="punc">、</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="14:46.90" data-end="14:47.64" data-index="1521">三日</span>
				<span class="punc">、</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="14:47.92" data-end="14:50.74" data-index="1522">四日至七日以來</span>
				<span class="punc">。</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="14:51.00" data-end="14:52.72" data-index="1523">但高聲白</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="14:53.00" data-end="14:54.58" data-index="1524">高聲讀經</span>
				<span class="punc">。</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="14:55.18" data-end="14:57.38" data-index="1525">是人命終之後</span>
				<span class="punc">。</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="14:57.68" data-end="14:59.30" data-index="1526">宿殃重罪</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="14:59.72" data-end="15:02.18" data-index="1527">至於五無間罪</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="15:02.40" data-end="15:03.66" data-index="1528">永得解脫</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="15:04.36" data-end="15:06.02" data-index="1529">所受生處</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="15:06.42" data-end="15:08.04" data-index="1530">常知宿命</span>
				<span class="punc">。</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="15:08.42" data-end="15:15.98" data-index="1531">何況善男子善女人自書此經或教人書</span>
				<span class="punc">、</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="15:16.20" data-end="15:21.72" data-index="1532">或自塑畫菩薩形像乃至教人塑畫</span>
				<span class="punc">。</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="15:22.20" data-end="15:23.76" data-index="1533">所受果報</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="15:24.04" data-end="15:25.50" data-index="1534">必獲大利</span>
				<span class="punc">。</span>
			</div>
			<div x-show="details" class="details mb-3">
				「如果病人已經沒有了意識，昏迷不醒，甚至已經氣絕身亡，就在死後一日、二日、三日、四日，直至七日之中，高聲對他說這些話，並大聲地誦經，這個人命終之後，他的宿世禍殃重罪，乃至五無間罪，也能永遠得到解脫；他轉生的地方，常會知前生所做的事情。何況善男女各自抄寫這部《地藏本願經》，或教別人抄寫，或自己塑畫地藏菩薩形像，甚至教別人塑畫地藏菩薩形像，他所受到的報應，必定能夠獲得很大的利益。」
				<hr/>
			</div>
			<div :class="details ? 'bg-secondary text-white' : ''" class="paragraph">
				<span class="word" @@click="$dispatch('play-segment')" data-start="15:25.90" data-end="15:27.58" data-index="1535">是故普廣</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="15:27.82" data-end="15:30.70" data-index="1536">若見有人讀誦是經</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="15:31.10" data-end="15:34.60" data-index="1537">乃至一念讚歎是經</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="15:34.78" data-end="15:36.48" data-index="1538">或恭敬者</span>
				<span class="punc">。</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="15:37.18" data-end="15:39.74" data-index="1539">汝須百千方便</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="15:39.92" data-end="15:41.50" data-index="1540">勸是等人</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="15:41.80" data-end="15:43.44" data-index="1541">勤心莫退</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="15:43.82" data-end="15:45.60" data-index="1542">能得未來</span>
				<span class="punc">、</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="15:45.60" data-end="15:49.90" data-index="1543">現在千萬億不可思議功德</span>
				<span class="punc">。</span>
			</div>
			<div x-show="details" class="details mb-3">
				「所以，普廣菩薩，如果看見有人讀誦這部《地藏本願經》，甚至心生一念讚嘆這部經，或者對此經表示恭敬之意，你須要用百千萬種辦法，奉勸這些人，莫退初心，勤懇修持，這樣就能得到現在及未來千萬億不可思議功德。」
				<hr/>
			</div>
			<div :class="details ? 'bg-secondary text-white' : ''" class="paragraph">
				<span class="word" @@click="$dispatch('play-segment')" data-start="15:50.68" data-end="15:52.32" data-index="1544">復次普廣</span>
				<span class="punc">：</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="15:52.58" data-end="15:56.00" data-index="1545">若未來世諸眾生等</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="15:56.30" data-end="15:58.24" data-index="1546">或夢或寐</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="15:58.62" data-end="16:02.16" data-index="1547">見諸鬼神乃及諸形</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="16:02.56" data-end="16:03.36" data-index="1548">或悲</span>
				<span class="punc">、</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="16:03.36" data-end="16:04.26" data-index="1549">或啼</span>
				<span class="punc">、</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="16:04.56" data-end="16:05.40" data-index="1550">或愁</span>
				<span class="punc">、</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="16:05.40" data-end="16:06.30" data-index="1551">或嘆</span>
				<span class="punc">、</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="16:06.56" data-end="16:07.58" data-index="1552">或恐</span>
				<span class="punc">、</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="16:07.58" data-end="16:08.38" data-index="1553">或怖</span>
				<span class="punc">。</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="16:08.80" data-end="16:15.60" data-index="1554">此皆是一生十生百生千生過去父母</span>
				<span class="punc">、</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="16:16.14" data-end="16:17.84" data-index="1555">男女弟妹</span>
				<span class="punc">、</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="16:18.20" data-end="16:19.64" data-index="1556">夫妻眷屬</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="16:20.12" data-end="16:21.76" data-index="1557">在於惡趣</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="16:22.04" data-end="16:23.64" data-index="1558">未得出離</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="16:23.94" data-end="16:27.12" data-index="1559">無處希望福力救拔</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="16:27.68" data-end="16:29.88" data-index="1560">當告宿世骨肉</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="16:30.34" data-end="16:32.14" data-index="1561">使作方便</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="16:32.48" data-end="16:34.10" data-index="1562">願離惡道</span>
				<span class="punc">。</span>
			</div>
			<div x-show="details" class="details mb-3">
				佛又對普廣菩薩說：「如果未來世間眾生，於做夢時看見各種鬼神的種種形態，有大哭的、有流淚的、有憂愁的、有傷嘆的、有害怕的、有恐怖的，這都是在一生、十生、百生、千生的過去父母、兒女、弟妹、夫妻、眷屬等，在惡道裏受苦，沒法出離，也無法找到有福力的人去救拔他們。你應當告訴他們的骨肉至親，勸令他們用各種方法，勤修功德，使他們的眷屬脫離惡道。」
				<hr/>
			</div>
			<div :class="details ? 'bg-secondary text-white' : ''" class="paragraph">
				<span class="word" @@click="$dispatch('play-segment')" data-start="16:34.62" data-end="16:35.52" data-index="1563">普廣</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="16:35.88" data-end="16:37.16" data-index="1564">汝以神力</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="16:37.62" data-end="16:39.08" data-index="1565">遣是眷屬</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="16:39.40" data-end="16:42.76" data-index="1566">令對諸佛菩薩像前</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="16:43.46" data-end="16:45.72" data-index="1567">志心自讀此經</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="16:46.14" data-end="16:47.70" data-index="1568">或請人讀</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="16:48.02" data-end="16:51.42" data-index="1569">其數三遍或七遍</span>
				<span class="punc">。</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="16:51.90" data-end="16:54.18" data-index="1570">如是惡道眷屬</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="16:54.78" data-end="16:57.12" data-index="1571">經聲畢是遍數</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="16:57.74" data-end="16:59.12" data-index="1572">當得解脫</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="16:59.52" data-end="17:01.94" data-index="1573">乃至夢寐之中</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="17:02.26" data-end="17:03.80" data-index="1574">永不復見</span>
				<span class="punc">。</span>
			</div>
			<div x-show="details" class="details mb-3">
				「普廣，你用你的神力，遣令這些在世的眷屬，使他們在各位佛菩薩像前，專心自讀這部《地藏本願經》，或者請人來讀，讀三遍或七遍。這樣，這些墮入惡道的眷屬，於讀誦經典過後，即當得到解脫，從此以後，其親人也就永遠不會出現於睡夢中了。」
				<hr/>
			</div>
			<div :class="details ? 'bg-secondary text-white' : ''" class="paragraph">
				<span class="word" @@click="$dispatch('play-segment')" data-start="17:04.28" data-end="17:05.80" data-index="1575">復次普廣</span>
				<span class="punc">：</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="17:06.58" data-end="17:08.30" data-index="1576">若未來世</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="17:08.50" data-end="17:10.74" data-index="1577">有諸下賤等人</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="17:11.14" data-end="17:12.68" data-index="1578">或奴或婢</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="17:13.02" data-end="17:15.78" data-index="1579">乃至諸不自由之人</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="17:16.32" data-end="17:17.72" data-index="1580">覺知宿業</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="17:18.08" data-end="17:19.64" data-index="1581">要懺悔者</span>
				<span class="punc">。</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="17:20.02" data-end="17:24.42" data-index="1582">志心瞻禮地藏菩薩形像</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="17:24.78" data-end="17:27.18" data-index="1583">乃至一七日中</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="17:27.38" data-end="17:29.10" data-index="1584">念菩薩名</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="17:29.62" data-end="17:31.34" data-index="1585">可滿萬遍</span>
				<span class="punc">。</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="17:31.60" data-end="17:33.10" data-index="1586">如是等人</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="17:33.64" data-end="17:35.22" data-index="1587">盡此報後</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="17:35.72" data-end="17:37.22" data-index="1588">千萬生中</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="17:37.66" data-end="17:39.50" data-index="1589">常生尊貴</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="17:39.86" data-end="17:42.76" data-index="1590">更不經三惡道苦</span>
				<span class="punc">。</span>
			</div>
			<div x-show="details" class="details mb-3">
				佛又對普廣菩薩說：「如果今後世間有各種地位下賤的人，或是奴僕，或是婢女，甚至各類不自由的人，他們知道這是自己前世所做惡業應得的報應，而要懺悔過去的罪業，因此誠心瞻仰禮拜地藏菩薩形像，甚至在一日到七日之內，念地藏菩薩的名號達到萬遍。這樣的人，盡了這一世的報身之後，千萬生中，常生在富貴之家，更不必再經受地獄等三惡道的罪苦。」
				<hr/>
			</div>
			<div :class="details ? 'bg-secondary text-white' : ''" class="paragraph">
				<span class="word" @@click="$dispatch('play-segment')" data-start="17:43.54" data-end="17:45.24" data-index="1591">復次普廣</span>
				<span class="punc">：</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="17:45.70" data-end="17:47.76" data-index="1592">若未來世中</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="17:48.18" data-end="17:49.94" data-index="1593">閻浮提內</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="17:50.38" data-end="17:51.26" data-index="1594">剎利</span>
				<span class="punc">、</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="17:51.26" data-end="17:52.54" data-index="1595">婆羅門</span>
				<span class="punc">、</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="17:52.54" data-end="17:53.34" data-index="1596">長者</span>
				<span class="punc">、</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="17:53.34" data-end="17:54.26" data-index="1597">居士</span>
				<span class="punc">、</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="17:54.68" data-end="17:56.18" data-index="1598">一切人等</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="17:56.60" data-end="17:58.68" data-index="1599">及異姓種族</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="17:59.24" data-end="18:01.02" data-index="1600">有新產者</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="18:01.30" data-end="18:02.96" data-index="1601">或男或女</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="18:03.18" data-end="18:04.60" data-index="1602">七日之中</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="18:05.02" data-end="18:08.80" data-index="1603">早與讀誦此不思議經典</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="18:09.34" data-end="18:11.80" data-index="1604">更為念菩薩名</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="18:12.22" data-end="18:13.72" data-index="1605">可滿萬遍</span>
				<span class="punc">。</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="18:14.12" data-end="18:15.78" data-index="1606">是新生子</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="18:16.12" data-end="18:17.60" data-index="1607">或男或女</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="18:17.92" data-end="18:19.48" data-index="1608">宿有殃報</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="18:19.92" data-end="18:21.46" data-index="1609">便得解脫</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="18:21.92" data-end="18:23.34" data-index="1610">安樂易養</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="18:23.90" data-end="18:25.52" data-index="1611">壽命增長</span>
				<span class="punc">。</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="18:25.86" data-end="18:28.30" data-index="1612">若是承福生者</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="18:28.82" data-end="18:30.14" data-index="1613">轉增安樂</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="18:30.56" data-end="18:32.10" data-index="1614">及與壽命</span>
				<span class="punc">。</span>
			</div>
			<div x-show="details" class="details mb-3">
				佛又對普廣菩薩說：「假使未來世中，在閻浮提內，有刹利種族、婆羅門種族、有尊貴的長者，以及在家信佛的居士，這一切人，還有一切異姓種族的人，如果有新出生的嬰兒，或男或女，剛生產七天之中，趁早給他們讀誦這部《地藏本願經》不思議經典，再為他們念地藏菩薩名號，念滿萬遍，不管是男孩還是女孩，他們在前世所帶來的禍殃惡報，便全得到解脫，可平安快樂長大，容易養育，而且他們的壽命會隨之增長。如果是因承自己的福報轉生的，那更轉增他們安樂與壽命。」
				<hr/>
			</div>
			<div :class="details ? 'bg-secondary text-white' : ''" class="paragraph">
				<span class="word" @@click="$dispatch('play-segment')" data-start="18:32.54" data-end="18:34.12" data-index="1615">復次普廣</span>
				<span class="punc">：</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="18:34.56" data-end="18:36.86" data-index="1616">若未來世眾生</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="18:37.24" data-end="18:38.72" data-index="1617">於月一日</span>
				<span class="punc">、</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="18:39.14" data-end="18:39.80" data-index="1618">八日</span>
				<span class="punc">、</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="18:40.06" data-end="18:41.06" data-index="1619">十四日</span>
				<span class="punc">、</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="18:41.36" data-end="18:42.34" data-index="1620">十五日</span>
				<span class="punc">、</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="18:42.34" data-end="18:43.40" data-index="1621">十八日</span>
				<span class="punc">、</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="18:43.68" data-end="18:44.76" data-index="1622">二十三</span>
				<span class="punc">、</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="18:44.92" data-end="18:45.86" data-index="1623">二十四</span>
				<span class="punc">、</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="18:46.42" data-end="18:47.26" data-index="1624">二十八</span>
				<span class="punc">、</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="18:47.56" data-end="18:48.64" data-index="1625">二十九日</span>
				<span class="punc">、</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="18:49.08" data-end="18:50.58" data-index="1626">乃至三十日</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="18:51.22" data-end="18:52.62" data-index="1627">是諸日等</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="18:52.98" data-end="18:54.48" data-index="1628">諸罪結集</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="18:54.90" data-end="18:56.48" data-index="1629">定其輕重</span>
				<span class="punc">。</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="18:57.00" data-end="18:59.46" data-index="1630">南閻浮提眾生</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="18:59.94" data-end="19:01.46" data-index="1631">舉止動念</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="19:01.68" data-end="19:03.32" data-index="1632">無不是業</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="19:03.60" data-end="19:05.14" data-index="1633">無不是罪</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="19:05.56" data-end="19:08.02" data-index="1634">何況恣情殺害</span>
				<span class="punc">、</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="19:08.40" data-end="19:09.32" data-index="1635">竊盜</span>
				<span class="punc">、</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="19:09.32" data-end="19:10.14" data-index="1636">邪婬</span>
				<span class="punc">、</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="19:10.32" data-end="19:11.26" data-index="1637">妄語</span>
				<span class="punc">、</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="19:11.62" data-end="19:13.00" data-index="1638">百千罪狀</span>
				<span class="punc">。</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="19:13.40" data-end="19:15.48" data-index="1639">能於是十齋日</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="19:15.96" data-end="19:19.76" data-index="1640">對佛菩薩諸賢聖像前</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="19:20.40" data-end="19:22.12" data-index="1641">讀是經一遍</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="19:22.58" data-end="19:26.04" data-index="1642">東西南北百由旬內</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="19:26.46" data-end="19:28.32" data-index="1643">無諸災難</span>
				<span class="punc">。</span>
			</div>
			<div x-show="details" class="details mb-3">
				佛又告訴普廣菩薩說：「假使未來世的眾生，在每月一日、八日、十四日、十五日、十八日、二十三日、二十四日、二十八日、二十九日，以及三十日，這些日子，是天王來到人間審察眾生所造各種罪業，並結集其善惡情況，判定其造罪輕重的日子，南閻浮提眾生，他們的一舉一動，甚至一個念頭，沒有一刻是不造罪業的，何況恣情任意殺害生命、偷竊搶劫、放縱淫欲、騙人說謊等百千種罪狀呢？假如能在這十齋日中面對佛菩薩及各位聖賢像前，把這部《地藏本願經》讀一遍，就能在東、西、南、北百由旬內沒有發生各種災難。」
				<hr/>
			</div>
			<div :class="details ? 'bg-secondary text-white' : ''" class="paragraph">
				<span class="word" @@click="$dispatch('play-segment')" data-start="19:28.56" data-end="19:30.28" data-index="1644">當此居家</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="19:30.28" data-end="19:31.88" data-index="1645">若長若幼</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="19:32.20" data-end="19:35.78" data-index="1646">現在未來百千歲中</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="19:36.26" data-end="19:37.74" data-index="1647">永離惡趣</span>
				<span class="punc">。</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="19:38.22" data-end="19:42.08" data-index="1648">能於十齋日每轉一遍</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="19:42.46" data-end="19:47.68" data-index="1649">現世令此居家無諸橫病</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="19:48.08" data-end="19:49.58" data-index="1650">衣食豐溢</span>
				<span class="punc">。</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="19:50.20" data-end="19:51.66" data-index="1651">是故普廣</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="19:52.14" data-end="20:00.74" data-index="1652">當知地藏菩薩有如是等不可說百千萬億大威神力</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="20:01.30" data-end="20:03.00" data-index="1653">利益之事</span>
				<span class="punc">。</span>
			</div>
			<div x-show="details" class="details mb-3">
				「在這個範圍內居住的家庭，不管是年長還是年幼的人，現在和以後的百千年中，永遠脫離惡道的報應。如果能每逢十齋日，轉讀《地藏本願經》一遍，在現世就會讓這些家庭免除種種天災人禍，而且能夠衣食豐足。所以普廣，你應當知道，地藏菩薩有無數無量百千萬億大威神力及利益眾生的事。」
				<hr/>
			</div>
			<div :class="details ? 'bg-secondary text-white' : ''" class="paragraph">
				<span class="word" @@click="$dispatch('play-segment')" data-start="20:03.26" data-end="20:05.00" data-index="1654">閻浮眾生</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="20:05.40" data-end="20:08.38" data-index="1655">於此大士有大因緣</span>
				<span class="punc">。</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="20:08.94" data-end="20:10.62" data-index="1656">是諸眾生</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="20:11.00" data-end="20:12.70" data-index="1657">聞菩薩名</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="20:13.00" data-end="20:14.62" data-index="1658">見菩薩像</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="20:14.96" data-end="20:19.06" data-index="1659">乃至聞是經三字五字</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="20:19.50" data-end="20:21.64" data-index="1660">或一偈一句者</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="20:22.24" data-end="20:24.56" data-index="1661">現在殊妙安樂</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="20:25.02" data-end="20:26.50" data-index="1662">未來之世</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="20:26.50" data-end="20:27.96" data-index="1663">百千萬生</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="20:28.46" data-end="20:29.96" data-index="1664">常得端正</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="20:30.42" data-end="20:31.92" data-index="1665">生尊貴家</span>
				<span class="punc">。</span>
			</div>
			<div x-show="details" class="details mb-3">
				「閻浮提眾生，和這位大士有深厚的因緣。這些眾生，聽見地藏菩薩的名字，見到地藏菩薩的畫像、塑像，甚至聽到這部《地藏本願經》的三字五字，一首偈，或一句話，現在在世就能得到極好的安樂，在未來世的百千萬生中，也經常能長得端正美麗，生在尊貴人家中。」
				<hr/>
			</div>
			<div :class="details ? 'bg-secondary text-white' : ''" class="paragraph">
				<span class="word" @@click="$dispatch('play-segment')" data-start="20:32.30" data-end="20:40.08" data-index="1666">爾時普廣菩薩聞佛如來稱揚讚歎地藏菩薩已</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="20:40.88" data-end="20:43.74" data-index="1667">胡跪合掌復白佛言</span>
				<span class="punc">：</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="20:44.34" data-end="20:45.22" data-index="1668">世尊</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="20:45.58" data-end="20:51.72" data-index="1669">我久知是大士有如此不可思議神力</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="20:52.08" data-end="20:54.04" data-index="1670">及大誓願力</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="20:54.78" data-end="20:58.64" data-index="1671">為未來眾生遣知利益</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="20:59.12" data-end="21:00.76" data-index="1672">故問如來</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="21:01.04" data-end="21:02.62" data-index="1673">唯然頂受</span>
				<span class="punc">。</span>
			</div>
			<div x-show="details" class="details mb-3">
				這時，普廣菩薩聽完如來稱揚讚歎地藏菩薩之後，右膝著地，跪拜合掌，再次對佛說：「世尊，我早就知道這位大士有着不可思議的神力，以及他所發的宏大誓願，為了讓後世眾生獲得利益好處，所以才問如來，當然頂受佛的教誨。」
				<hr/>
			</div>
			<div :class="details ? 'bg-secondary text-white' : ''" class="paragraph">
				<span class="word" @@click="$dispatch('play-segment')" data-start="21:02.92" data-end="21:03.78" data-index="1674">世尊</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="21:03.86" data-end="21:05.62" data-index="1675">當何名此經</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="21:06.06" data-end="21:08.30" data-index="1676">使我云何流布</span>
				<span class="punc">？</span>
			</div>
			<div x-show="details" class="details mb-3">
				「世尊，我們應該怎樣稱呼這部經呢？好使我們流通。」
				<hr/>
			</div>
			<div :class="details ? 'bg-secondary text-white' : ''" class="paragraph">
				<span class="word" @@click="$dispatch('play-segment')" data-start="21:08.74" data-end="21:10.32" data-index="1677">佛告普廣</span>
				<span class="punc">：</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="21:10.60" data-end="21:12.54" data-index="1678">此經有三名</span>
				<span class="punc">：</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="21:12.88" data-end="21:15.02" data-index="1679">一名地藏本願</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="21:15.48" data-end="21:17.74" data-index="1680">亦名地藏本行</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="21:18.02" data-end="21:20.98" data-index="1681">亦名地藏本誓力經</span>
				<span class="punc">。</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="21:21.46" data-end="21:22.68" data-index="1682">緣此菩薩</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="21:23.16" data-end="21:24.80" data-index="1683">久遠劫來</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="21:24.80" data-end="21:26.38" data-index="1684">發大重願</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="21:26.76" data-end="21:28.18" data-index="1685">利益眾生</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="21:28.58" data-end="21:30.08" data-index="1686">是故汝等</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="21:30.58" data-end="21:32.28" data-index="1687">依願流布</span>
				<span class="punc">。</span>
			</div>
			<div x-show="details" class="details mb-3">
				佛告訴普廣菩薩說：「這部經有三個名字，一名叫《地藏本願經》，又叫《地藏本行經》，也叫做《地藏本誓力經》。為什麼有三個名字呢？是因為這位地藏菩薩在很久的大劫以前，發了很深很重的誓願，要為廣大眾生謀利益。所以你們就依照地藏菩薩的大願力去流布這部經典。」
				<hr/>
			</div>
			<div :class="details ? 'bg-secondary text-white' : ''" class="paragraph">
				<span class="word" @@click="$dispatch('play-segment')" data-start="21:32.60" data-end="21:34.18" data-index="1688">普廣聞已</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="21:34.40" data-end="21:37.44" data-index="1689">合掌恭敬作禮而退</span>
				<span class="punc">。</span>
			</div>
			<div x-show="details" class="details mb-3">
				普廣菩薩聽後，便合掌恭敬地行禮告退。
				<hr/>
			</div>
			<h4 class="toc-item" id="vol2-ch7">
				<span class="word" @@click="$dispatch('play-segment')" data-start="21:39.34" data-end="21:42.18" data-index="1690">利益存亡品第七</span>
			</h4>
			<div :class="details ? 'bg-secondary text-white' : ''" class="paragraph">
				<span class="word" @@click="$dispatch('play-segment')" data-start="21:44.10" data-end="21:48.74" data-index="1691">爾時地藏菩薩摩訶薩白佛言</span>
				<span class="punc">：</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="21:49.56" data-end="21:50.38" data-index="1692">世尊</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="21:50.80" data-end="21:53.68" data-index="1693">我觀是閻浮眾生</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="21:54.06" data-end="21:55.64" data-index="1694">舉心動念</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="21:55.76" data-end="21:57.36" data-index="1695">無非是罪</span>
				<span class="punc">。</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="21:58.12" data-end="21:59.56" data-index="1696">脫獲善利</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="21:59.90" data-end="22:01.56" data-index="1697">多退初心</span>
				<span class="punc">。</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="22:02.24" data-end="22:03.78" data-index="1698">若遇惡緣</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="22:04.00" data-end="22:05.72" data-index="1699">念念增益</span>
				<span class="punc">。</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="22:06.32" data-end="22:07.86" data-index="1700">是等輩人</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="22:07.86" data-end="22:09.74" data-index="1701">如履泥塗</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="22:10.06" data-end="22:11.74" data-index="1702">負於重石</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="22:12.26" data-end="22:14.02" data-index="1703">漸困漸重</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="22:14.44" data-end="22:16.04" data-index="1704">足步深邃</span>
				<span class="punc">。</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="22:17.12" data-end="22:18.90" data-index="1705">若得遇知識</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="22:19.26" data-end="22:21.04" data-index="1706">替與減負</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="22:21.44" data-end="22:23.04" data-index="1707">或全與負</span>
				<span class="punc">。</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="22:23.64" data-end="22:26.06" data-index="1708">是知識有大力故</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="22:26.54" data-end="22:28.08" data-index="1709">復相扶助</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="22:28.66" data-end="22:30.08" data-index="1710">勸令牢腳</span>
				<span class="punc">。</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="22:30.80" data-end="22:32.54" data-index="1711">若達平地</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="22:32.90" data-end="22:34.50" data-index="1712">須省惡路</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="22:34.86" data-end="22:36.36" data-index="1713">無再經歷</span>
				<span class="punc">。</span>
			</div>
			<div x-show="details" class="details mb-3">
				這時地藏大菩薩對佛說：「世尊，我觀察閻浮提眾生，舉心動念，無不是在造罪業，即使一時做了點善事，可是由於沒有獲得顯著的利益，就退轉回原來的心境，不再做善事；若遇到惡緣，就會念念追隨，增加惡業。這一類人，好比在爛泥路上行走，又背着很重的石頭，漸漸覺得腳步沉重，陷入泥沼而不能自拔。這時，如果他能遇到善於勸化有知識的人，替他減輕負擔，或者全部替他背負，由於這位善人有大能力，不但給予他支援，更令他站穩陣腳。當負重人到達平地時，就要趕快反省，不再在險道上行走。」
				<hr/>
			</div>
			<div :class="details ? 'bg-secondary text-white' : ''" class="paragraph">
				<span class="word" @@click="$dispatch('play-segment')" data-start="22:37.22" data-end="22:38.12" data-index="1714">世尊</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="22:38.44" data-end="22:40.12" data-index="1715">習惡眾生</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="22:40.42" data-end="22:42.22" data-index="1716">從纖毫間</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="22:42.48" data-end="22:44.02" data-index="1717">便至無量</span>
				<span class="punc">。</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="22:44.96" data-end="22:48.56" data-index="1718">是諸眾生有如此習</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="22:49.04" data-end="22:50.78" data-index="1719">臨命終時</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="22:51.08" data-end="22:52.56" data-index="1720">父母眷屬</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="22:53.08" data-end="22:54.44" data-index="1721">宜為設福</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="22:54.70" data-end="22:56.44" data-index="1722">以資前路</span>
				<span class="punc">。</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="22:57.18" data-end="23:01.02" data-index="1723">或懸旛蓋及燃油燈</span>
				<span class="punc">。</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="23:01.32" data-end="23:03.50" data-index="1724">或轉讀尊經</span>
				<span class="punc">、</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="23:03.74" data-end="23:08.04" data-index="1725">或供養佛像及諸聖像</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="23:08.30" data-end="23:10.88" data-index="1726">乃至念佛菩薩</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="23:11.08" data-end="23:13.68" data-index="1727">及辟支佛名字</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="23:13.98" data-end="23:15.54" data-index="1728">一名一號</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="23:16.00" data-end="23:18.26" data-index="1729">歷臨終人耳根</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="23:18.58" data-end="23:20.62" data-index="1730">或聞在本識</span>
				<span class="punc">。</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="23:21.10" data-end="23:24.96" data-index="1731">是諸眾生所造惡業</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="23:25.32" data-end="23:26.90" data-index="1732">計其感果</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="23:27.20" data-end="23:29.02" data-index="1733">必墮惡趣</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="23:29.02" data-end="23:35.18" data-index="1734">緣是眷屬為臨終人修此聖因</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="23:35.70" data-end="23:37.50" data-index="1735">如是眾罪</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="23:37.90" data-end="23:39.44" data-index="1736">悉皆消滅</span>
				<span class="punc">。</span>
			</div>
			<div x-show="details" class="details mb-3">
				「世尊，世間習惡眾生，即使犯毫毛那麼少的惡行，輾轉間便做到無量個，他們在臨死時，父母眷屬，應該替他們廣修福德，廣行布施，以便資助他們往生到善處。或者在佛前懸掛幢幡、寶蓋，以及燃油燈，或者替他讀經，或者供養佛菩薩諸聖像，乃至念佛、菩薩及辟支佛的名字，每個名字，每個佛號，都要深入到臨終人的耳根裏去，使他們銘記於心。這類眾生，按他們所造的惡業，計算起來必定會墮入地獄等惡道去，但由於他們的眷屬為他們種下善因，所以生前所作的種種罪業，也都能漸漸消滅。」
				<hr/>
			</div>
			<div :class="details ? 'bg-secondary text-white' : ''" class="paragraph">
				<span class="word" @@click="$dispatch('play-segment')" data-start="23:40.06" data-end="23:43.42" data-index="1737">若能更為身死之後</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="23:43.90" data-end="23:45.42" data-index="1738">七七日內</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="23:45.78" data-end="23:47.86" data-index="1739">廣造眾善</span>
				<span class="punc">。</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="23:48.24" data-end="23:52.96" data-index="1740">能使是諸眾生永離惡趣</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="23:53.26" data-end="23:54.92" data-index="1741">得生人天</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="23:55.36" data-end="23:56.86" data-index="1742">受勝妙樂</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="23:57.40" data-end="23:58.74" data-index="1743">現在眷屬</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="23:59.08" data-end="24:00.78" data-index="1744">利益無量</span>
				<span class="punc">。</span>
			</div>
			<div x-show="details" class="details mb-3">
				「如果親屬更能替他們於死後四十九日內，廣造各種善事，更能令他們永遠脫離地獄等惡道，往生到人道或天道，享受福報快樂，就連在世的眷屬，也可獲得無數的利益。」
				<hr/>
			</div>
			<div :class="details ? 'bg-secondary text-white' : ''" class="paragraph">
				<span class="word" @@click="$dispatch('play-segment')" data-start="24:01.36" data-end="24:04.84" data-index="1745">是故我今對佛世尊</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="24:05.14" data-end="24:08.86" data-index="1746">及天龍八部人非人等</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="24:09.40" data-end="24:14.22" data-index="1747">勸於閻浮提眾生臨終之日</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="24:14.50" data-end="24:16.16" data-index="1748">慎勿殺害</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="24:16.44" data-end="24:18.20" data-index="1749">及造惡緣</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="24:18.62" data-end="24:20.36" data-index="1750">拜祭鬼神</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="24:20.74" data-end="24:22.68" data-index="1751">求諸魍魎</span>
				<span class="punc">。</span>
			</div>
			<div x-show="details" class="details mb-3">
				「所以我現在對着佛世尊，以及天龍八部、人、非人等，勸告閻浮提眾生於臨死之日，要小心謹慎，不要殺生害命，拜祭鬼神，結下惡緣。」
				<hr/>
			</div>
			<div :class="details ? 'bg-secondary text-white' : ''" class="paragraph">
				<span class="word" @@click="$dispatch('play-segment')" data-start="24:23.30" data-end="24:24.60" data-index="1752">何以故</span>
				<span class="punc">？</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="24:24.82" data-end="24:28.52" data-index="1753">爾所殺害乃至拜祭</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="24:28.84" data-end="24:30.58" data-index="1754">無纖毫之力</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="24:30.98" data-end="24:32.58" data-index="1755">利益亡人</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="24:33.06" data-end="24:34.94" data-index="1756">但結罪緣</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="24:35.24" data-end="24:36.94" data-index="1757">轉增深重</span>
				<span class="punc">。</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="24:37.76" data-end="24:41.52" data-index="1758">假使來世或現在生</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="24:41.80" data-end="24:43.52" data-index="1759">得獲聖分</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="24:43.80" data-end="24:45.48" data-index="1760">生人天中</span>
				<span class="punc">。</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="24:45.86" data-end="24:51.54" data-index="1761">緣是臨終被諸眷屬造是惡因</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="24:51.84" data-end="24:56.48" data-index="1762">亦令是命終人殃累對辯</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="24:56.74" data-end="24:58.56" data-index="1763">晚生善處</span>
				<span class="punc">。</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="24:59.32" data-end="25:01.94" data-index="1764">何況臨命終人</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="25:02.32" data-end="25:05.90" data-index="1765">在生未曾有少善根</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="25:06.24" data-end="25:07.76" data-index="1766">各據本業</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="25:08.12" data-end="25:09.76" data-index="1767">自受惡趣</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="25:10.12" data-end="25:13.64" data-index="1768">何忍眷屬更為增業</span>
				<span class="punc">。</span>
			</div>
			<div x-show="details" class="details mb-3">
				「為什麼呢？你通過殺害生靈來拜祭鬼神，對於死者不會帶來任何好處，只能結下罪緣，反而增加他們的罪報。即使來世或現生，能夠得到佛菩薩的幫助，往生到人間或天上，也由於臨死時他們的眷屬殺生害命拜祭鬼神所造的惡因，使亡人遭受連累，與被殺害的生靈對質辯駁，耽誤時日而晚生善道之中，更何況這快要死亡的人在生時沒有一點善根，根據他們本來的罪業，自當受惡道的報應，他們的眷屬怎麼能忍心為他們增加罪報呢？」
				<hr/>
			</div>
			<div :class="details ? 'bg-secondary text-white' : ''" class="paragraph">
				<span class="word" @@click="$dispatch('play-segment')" data-start="25:14.22" data-end="25:17.70" data-index="1769">譬如有人從遠地來</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="25:17.84" data-end="25:19.34" data-index="1770">絕糧三日</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="25:19.82" data-end="25:21.34" data-index="1771">所負擔物</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="25:21.74" data-end="25:23.34" data-index="1772">強過百斤</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="25:23.88" data-end="25:25.58" data-index="1773">忽遇鄰人</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="25:25.58" data-end="25:27.04" data-index="1774">更附少物</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="25:27.48" data-end="25:29.04" data-index="1775">以是之故</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="25:29.40" data-end="25:31.18" data-index="1776">轉復困重</span>
				<span class="punc">。</span>
			</div>
			<div x-show="details" class="details mb-3">
				「譬如有人從遠方來，已經有三天沒吃飯，他所擔負的重物，超過百斤，忽然遇到路人，再給他增附少量東西，因此反而增加了他的負擔。」
				<hr/>
			</div>
			<div :class="details ? 'bg-secondary text-white' : ''" class="paragraph">
				<span class="word" @@click="$dispatch('play-segment')" data-start="25:31.56" data-end="25:32.46" data-index="1777">世尊</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="25:32.84" data-end="25:35.44" data-index="1778">我觀閻浮眾生</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="25:35.70" data-end="25:38.52" data-index="1779">但能於諸佛教中</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="25:38.84" data-end="25:40.64" data-index="1780">乃至善事</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="25:40.78" data-end="25:42.50" data-index="1781">一毛一渧</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="25:42.66" data-end="25:44.32" data-index="1782">一沙一塵</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="25:44.90" data-end="25:46.04" data-index="1783">如是利益</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="25:46.20" data-end="25:47.90" data-index="1784">悉皆自得</span>
				<span class="punc">。</span>
			</div>
			<div x-show="details" class="details mb-3">
				「世尊，我看閻浮眾生，只要能在佛教中做任何善事，即使是一根毫毛、一滴水、一粒沙、一點微塵那麼少，也能直接得到利益，更不需別人幫忙。」
				<hr/>
			</div>
			<div :class="details ? 'bg-secondary text-white' : ''" class="paragraph">
				<span class="word" @@click="$dispatch('play-segment')" data-start="25:48.46" data-end="25:50.44" data-index="1785">說是語時</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="25:50.66" data-end="25:53.04" data-index="1786">會中有一長者</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="25:53.32" data-end="25:55.04" data-index="1787">名曰大辯</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="25:55.58" data-end="25:58.76" data-index="1788">是長者久證無生</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="25:59.10" data-end="26:00.58" data-index="1789">化度十方</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="26:00.92" data-end="26:02.72" data-index="1790">現長者身</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="26:03.02" data-end="26:04.68" data-index="1791">合掌恭敬</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="26:04.68" data-end="26:07.48" data-index="1792">問地藏菩薩言</span>
				<span class="punc">：</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="26:08.10" data-end="26:09.14" data-index="1793">大士</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="26:09.42" data-end="26:12.66" data-index="1794">是南閻浮提眾生</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="26:12.94" data-end="26:14.62" data-index="1795">命終之後</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="26:15.06" data-end="26:16.62" data-index="1796">小大眷屬</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="26:16.84" data-end="26:18.54" data-index="1797">為修功德</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="26:18.98" data-end="26:20.88" data-index="1798">乃至設齋</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="26:21.28" data-end="26:22.88" data-index="1799">造眾善因</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="26:23.24" data-end="26:24.84" data-index="1800">是命終人</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="26:25.00" data-end="26:28.22" data-index="1801">得大利益及解脫不</span>
				<span class="punc">？</span>
			</div>
			<div x-show="details" class="details mb-3">
				地藏菩薩在說這段話時，會中有一位德高望重的長者，名字叫大辯，這位長者在很久以前，已證得無生法忍的果位，他廣化十方眾生，常顯現出長者的形態。這時，他合掌恭敬地問地藏菩薩說：「大士，這南閻浮提眾生，在死後他的大小眷屬為他修造功德，甚至設齋供養，造各種善因，這位亡人能得到大利益甚至解脫嗎？」
				<hr/>
			</div>
			<div :class="details ? 'bg-secondary text-white' : ''" class="paragraph">
				<span class="word" @@click="$dispatch('play-segment')" data-start="26:29.36" data-end="26:30.88" data-index="1802">地藏答言</span>
				<span class="punc">：</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="26:31.34" data-end="26:32.14" data-index="1803">長者</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="26:32.44" data-end="26:37.44" data-index="1804">我今為未來現在一切眾生</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="26:37.76" data-end="26:39.44" data-index="1805">承佛威力</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="26:39.84" data-end="26:41.64" data-index="1806">略說是事</span>
				<span class="punc">。</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="26:42.06" data-end="26:42.84" data-index="1807">長者</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="26:43.34" data-end="26:46.90" data-index="1808">未來現在諸眾生等</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="26:47.38" data-end="26:48.90" data-index="1809">臨命終日</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="26:49.42" data-end="26:51.38" data-index="1810">得聞一佛名</span>
				<span class="punc">、</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="26:51.40" data-end="26:53.06" data-index="1811">一菩薩名</span>
				<span class="punc">、</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="26:53.32" data-end="26:55.08" data-index="1812">一辟支佛名</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="26:55.60" data-end="26:58.16" data-index="1813">不問有罪無罪</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="26:58.16" data-end="26:59.58" data-index="1814">悉得解脫</span>
				<span class="punc">。</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="27:00.28" data-end="27:02.74" data-index="1815">若有男子女人</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="27:02.96" data-end="27:07.50" data-index="1816">在生不修善因多造眾罪</span>
				<span class="punc">。</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="27:07.62" data-end="27:09.06" data-index="1817">命終之後</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="27:09.56" data-end="27:11.26" data-index="1818">眷屬小大</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="27:11.50" data-end="27:14.96" data-index="1819">為造福利一切聖事</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="27:15.30" data-end="27:18.48" data-index="1820">七分之中而乃獲一</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="27:18.98" data-end="27:20.40" data-index="1821">六分功德</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="27:20.56" data-end="27:22.26" data-index="1822">生者自利</span>
				<span class="punc">。</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="27:22.68" data-end="27:24.26" data-index="1823">以是之故</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="27:24.56" data-end="27:28.16" data-index="1824">未來現在善男女等</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="27:28.58" data-end="27:30.72" data-index="1825">聞健自修</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="27:30.94" data-end="27:32.40" data-index="1826">分分己獲</span>
				<span class="punc">。</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="27:32.82" data-end="27:34.54" data-index="1827">無常大鬼</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="27:34.82" data-end="27:36.30" data-index="1828">不期而到</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="27:36.70" data-end="27:38.30" data-index="1829">冥冥遊神</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="27:38.30" data-end="27:40.00" data-index="1830">未知罪福</span>
				<span class="punc">。</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="27:40.48" data-end="27:42.00" data-index="1831">七七日內</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="27:42.22" data-end="27:43.90" data-index="1832">如癡如聾</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="27:44.24" data-end="27:47.78" data-index="1833">或在諸司辯論業果</span>
				<span class="punc">。</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="27:48.18" data-end="27:49.58" data-index="1834">審定之後</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="27:49.78" data-end="27:51.38" data-index="1835">據業受生</span>
				<span class="punc">。</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="27:51.90" data-end="27:53.38" data-index="1836">未測之間</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="27:53.60" data-end="27:55.38" data-index="1837">千萬愁苦</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="27:55.78" data-end="27:59.40" data-index="1838">何況墮於諸惡趣等</span>
				<span class="punc">。</span>
			</div>
			<div x-show="details" class="details mb-3">
				地藏菩薩回答說：「長者，我今天就承佛的威力，為未來和現在的所有眾生，約略說一說這件事。長者，未來和現在各類眾生，臨死亡時，只要能聽到一位佛名，一位菩薩名，一位辟支佛名，不管他生前有罪無罪，都能得到解脫。如果有男子女人，在生前不修造善因，多做惡事，他在死後，大小眷屬為他修造福業，做一切善事，亡者便能得到這七分之一的利益，而六分功德歸活着的眷屬所有。因此，現在和未來的善男女等，如果能趁着自己身體健康的時候，多造福業，多做善事，那每一分的利益都是自己直接得到。在死神突然到來的時候，讓你在幽暗的陰間遊走，自己不知道是罪是福。在四十九日內，什麼都不知道、什麼都聽不見。當經過閻君審問辯論業果後，就據他所造的業，去受應有果報。如果還未知道應受何等報應之前，這時候會很憂慮擔心，更何況已經墮落到地獄、餓鬼、畜生這三惡道裏去。」
				<hr/>
			</div>
			<div :class="details ? 'bg-secondary text-white' : ''" class="paragraph">
				<span class="word" @@click="$dispatch('play-segment')" data-start="27:59.96" data-end="28:01.90" data-index="1839">是命終人</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="28:01.90" data-end="28:03.66" data-index="1840">未得受生</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="28:03.96" data-end="28:06.02" data-index="1841">在七七日內</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="28:06.36" data-end="28:08.00" data-index="1842">念念之間</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="28:08.32" data-end="28:10.72" data-index="1843">望諸骨肉眷屬</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="28:11.06" data-end="28:13.36" data-index="1844">與造福力救拔</span>
				<span class="punc">。</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="28:13.80" data-end="28:15.38" data-index="1845">過是日後</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="28:15.38" data-end="28:17.24" data-index="1846">隨業受報</span>
				<span class="punc">。</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="28:17.66" data-end="28:19.24" data-index="1847">若是罪人</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="28:19.40" data-end="28:21.90" data-index="1848">動經千百歲中</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="28:22.12" data-end="28:23.70" data-index="1849">無解脫日</span>
				<span class="punc">。</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="28:23.94" data-end="28:26.34" data-index="1850">若是五無間罪</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="28:26.60" data-end="28:28.00" data-index="1851">墮大地獄</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="28:28.32" data-end="28:29.80" data-index="1852">千劫萬劫</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="28:30.24" data-end="28:31.78" data-index="1853">永受眾苦</span>
				<span class="punc">。</span>
			</div>
			<div x-show="details" class="details mb-3">
				「所以這亡人於未轉生之時，在四十九日內，時刻都在盼望自己的骨肉親屬給他修造福德，用這功德力救拔自己。如果超過這段日子，就會按照自己生前所做的善業或惡業，轉生到善道或惡道。如果是有罪業的人，就會墮入地獄、餓鬼、畜生這三惡道，在千百年的歲月中，得不到解脫；如果犯下的是五無間大罪，就會墮入無間地獄，千劫萬劫之中，永遠遭受各種苦楚。」
				<hr/>
			</div>
			<div :class="details ? 'bg-secondary text-white' : ''" class="paragraph">
				<span class="word" @@click="$dispatch('play-segment')" data-start="28:32.50" data-end="28:34.18" data-index="1854">復次長者</span>
				<span class="punc">：</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="28:34.50" data-end="28:36.80" data-index="1855">如是罪業眾生</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="28:37.08" data-end="28:38.64" data-index="1856">命終之後</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="28:38.96" data-end="28:40.28" data-index="1857">眷屬骨肉</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="28:40.70" data-end="28:42.50" data-index="1858">為修營齋</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="28:43.02" data-end="28:46.64" data-index="1859">資助業道未齋食竟</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="28:46.96" data-end="28:49.02" data-index="1860">及營齋之次</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="28:49.42" data-end="28:51.00" data-index="1861">米泔菜葉</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="28:51.44" data-end="28:52.78" data-index="1862">不棄於地</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="28:53.06" data-end="28:56.52" data-index="1863">乃至諸食未獻佛僧</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="28:56.76" data-end="28:58.30" data-index="1864">勿得先食</span>
				<span class="punc">。</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="28:58.86" data-end="29:00.28" data-index="1865">如有違食</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="29:00.66" data-end="29:02.26" data-index="1866">及不精勤</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="29:02.56" data-end="29:04.06" data-index="1867">是命終人</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="29:04.22" data-end="29:05.60" data-index="1868">了不得力</span>
				<span class="punc">。</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="29:05.98" data-end="29:10.10" data-index="1869">如精勤護淨奉獻佛僧</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="29:10.52" data-end="29:12.10" data-index="1870">是命終人</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="29:12.32" data-end="29:13.68" data-index="1871">七分獲一</span>
				<span class="punc">。</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="29:13.98" data-end="29:15.80" data-index="1872">是故長者</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="29:16.04" data-end="29:18.04" data-index="1873">閻浮眾生</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="29:18.36" data-end="29:22.88" data-index="1874">若能為其父母乃至眷屬</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="29:23.40" data-end="29:24.84" data-index="1875">命終之後</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="29:25.12" data-end="29:26.84" data-index="1876">設齋供養</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="29:27.34" data-end="29:29.10" data-index="1877">志心勤懇</span>
				<span class="punc">。</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="29:29.38" data-end="29:30.92" data-index="1878">如是之人</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="29:31.20" data-end="29:32.94" data-index="1879">存亡獲利</span>
				<span class="punc">。</span>
			</div>
			<div x-show="details" class="details mb-3">
				地藏菩薩又對大辯長者說：「像這樣造罪業的眾生，在死亡後，他們的骨肉至親為他們修福辦理齋飯供養佛僧，以幫助亡者增加善業，減輕惡業。假使齋飯食完以後，或者預備齋飯時，洗米的泔水、菜葉，都不要拋棄在地上，甚至各種食品在還未供佛僧前，都不得先食。如果不按以上規矩而自己先吃，或者不專精勤去修功德，則這位亡人，就得不到一點利益。如果能精勤保持潔淨，虔誠奉獻供養佛僧，那麼在七分功德之中，死者就能得到一分。所以長者，世間眾生如果能在他們的父母以及親屬死亡以後，辦理齋飯供養佛僧，誠心勤懇，這樣的話，無論是在世生人，還是亡人，都能獲得利益。」
				<hr/>
			</div>
			<div :class="details ? 'bg-secondary text-white' : ''" class="paragraph">
				<span class="word" @@click="$dispatch('play-segment')" data-start="29:33.10" data-end="29:34.84" data-index="1880">說是語時</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="29:35.20" data-end="29:36.86" data-index="1881">忉利天宮</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="29:37.04" data-end="29:42.50" data-index="1882">有千萬億那由他閻浮鬼神</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="29:42.66" data-end="29:45.80" data-index="1883">悉發無量菩提之心</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="29:46.24" data-end="29:49.56" data-index="1884">大辯長者作禮而退</span>
				<span class="punc">。</span>
			</div>
			<div x-show="details" class="details mb-3">
				地藏菩薩說這番話時，在忉利天宮中有千萬億無量閻浮鬼神，悉發求取正覺成佛的心。大辯長者也就作禮退回原位。
				<hr/>
			</div>
			<h4 class="toc-item" id="vol2-ch8">
				<span class="word" @@click="$dispatch('play-segment')" data-start="29:51.48" data-end="29:55.62" data-index="1885">閻羅王眾讚歎品第八</span>
			</h4>
			<div :class="details ? 'bg-secondary text-white' : ''" class="paragraph">
				<span class="word" @@click="$dispatch('play-segment')" data-start="29:57.40" data-end="30:00.12" data-index="1886">爾時鐵圍山內</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="30:00.46" data-end="30:02.50" data-index="1887">有無量鬼王</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="30:02.90" data-end="30:05.06" data-index="1888">與閻羅天子</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="30:05.56" data-end="30:07.42" data-index="1889">俱詣忉利</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="30:07.78" data-end="30:09.54" data-index="1890">來到佛所</span>
				<span class="punc">。</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="30:10.28" data-end="30:12.68" data-index="1891">所謂</span>
				<span class="punc">：</span>
				<blockquote>
					<span class="word" @@click="$dispatch('play-segment')" data-start="30:10.28" data-end="30:12.68" data-index="1891">惡毒鬼王</span>
					<span class="punc">、</span>
					<span class="word" @@click="$dispatch('play-segment')" data-start="30:13.12" data-end="30:14.64" data-index="1892">多惡鬼王</span>
					<span class="punc">、</span></br>
					<span class="word" @@click="$dispatch('play-segment')" data-start="30:15.12" data-end="30:16.82" data-index="1893">大諍鬼王</span>
					<span class="punc">、</span>
					<span class="word" @@click="$dispatch('play-segment')" data-start="30:17.40" data-end="30:19.00" data-index="1894">白虎鬼王</span>
					<span class="punc">、</span></br>
					<span class="word" @@click="$dispatch('play-segment')" data-start="30:19.42" data-end="30:21.00" data-index="1895">血虎鬼王</span>
					<span class="punc">、</span>
					<span class="word" @@click="$dispatch('play-segment')" data-start="30:21.38" data-end="30:23.22" data-index="1896">赤虎鬼王</span>
					<span class="punc">、</span></br>
					<span class="word" @@click="$dispatch('play-segment')" data-start="30:23.54" data-end="30:25.52" data-index="1897">散殃鬼王</span>
					<span class="punc">、</span>
					<span class="word" @@click="$dispatch('play-segment')" data-start="30:25.98" data-end="30:27.76" data-index="1898">飛身鬼王</span>
					<span class="punc">、</span></br>
					<span class="word" @@click="$dispatch('play-segment')" data-start="30:28.16" data-end="30:29.96" data-index="1899">電光鬼王</span>
					<span class="punc">、</span>
					<span class="word" @@click="$dispatch('play-segment')" data-start="30:30.30" data-end="30:31.94" data-index="1900">狼牙鬼王</span>
					<span class="punc">、</span></br>
					<span class="word" @@click="$dispatch('play-segment')" data-start="30:32.58" data-end="30:34.40" data-index="1901">千眼鬼王</span>
					<span class="punc">、</span>
					<span class="word" @@click="$dispatch('play-segment')" data-start="30:34.72" data-end="30:36.54" data-index="1902">噉獸鬼王</span>
					<span class="punc">、</span></br>
					<span class="word" @@click="$dispatch('play-segment')" data-start="30:37.06" data-end="30:39.00" data-index="1903">負石鬼王</span>
					<span class="punc">、</span>
					<span class="word" @@click="$dispatch('play-segment')" data-start="30:39.48" data-end="30:41.28" data-index="1904">主耗鬼王</span>
					<span class="punc">、</span></br>
					<span class="word" @@click="$dispatch('play-segment')" data-start="30:41.74" data-end="30:43.54" data-index="1905">主禍鬼王</span>
					<span class="punc">、</span>
					<span class="word" @@click="$dispatch('play-segment')" data-start="30:44.04" data-end="30:45.68" data-index="1906">主食鬼王</span>
					<span class="punc">、</span></br>
					<span class="word" @@click="$dispatch('play-segment')" data-start="30:46.12" data-end="30:47.86" data-index="1907">主財鬼王</span>
					<span class="punc">、</span>
					<span class="word" @@click="$dispatch('play-segment')" data-start="30:48.42" data-end="30:50.12" data-index="1908">主畜鬼王</span>
					<span class="punc">、</span></br>
					<span class="word" @@click="$dispatch('play-segment')" data-start="30:50.64" data-end="30:52.24" data-index="1909">主禽鬼王</span>
					<span class="punc">、</span>
					<span class="word" @@click="$dispatch('play-segment')" data-start="30:52.82" data-end="30:54.54" data-index="1910">主獸鬼王</span>
					<span class="punc">、</span></br>
					<span class="word" @@click="$dispatch('play-segment')" data-start="30:55.04" data-end="30:56.80" data-index="1911">主魅鬼王</span>
					<span class="punc">、</span>
					<span class="word" @@click="$dispatch('play-segment')" data-start="30:57.30" data-end="30:58.94" data-index="1912">主產鬼王</span>
					<span class="punc">、</span></br>
					<span class="word" @@click="$dispatch('play-segment')" data-start="30:59.48" data-end="31:01.12" data-index="1913">主命鬼王</span>
					<span class="punc">、</span>
					<span class="word" @@click="$dispatch('play-segment')" data-start="31:01.64" data-end="31:03.38" data-index="1914">主疾鬼王</span>
					<span class="punc">、</span></br>
					<span class="word" @@click="$dispatch('play-segment')" data-start="31:03.90" data-end="31:05.78" data-index="1915">主險鬼王</span>
					<span class="punc">、</span>
					<span class="word" @@click="$dispatch('play-segment')" data-start="31:06.06" data-end="31:07.74" data-index="1916">三目鬼王</span>
					<span class="punc">、</span></br>
					<span class="word" @@click="$dispatch('play-segment')" data-start="31:08.26" data-end="31:10.02" data-index="1917">四目鬼王</span>
					<span class="punc">、</span>
					<span class="word" @@click="$dispatch('play-segment')" data-start="31:10.40" data-end="31:12.26" data-index="1918">五目鬼王</span>
					<span class="punc">、</span></br>
					<span class="word" @@click="$dispatch('play-segment')" data-start="31:12.72" data-end="31:14.52" data-index="1919">祁利失王</span>
					<span class="punc">、</span>
					<span class="word" @@click="$dispatch('play-segment')" data-start="31:15.08" data-end="31:17.30" data-index="1920">大祁利失王</span>
					<span class="punc">、</span></br>
					<span class="word" @@click="$dispatch('play-segment')" data-start="31:17.72" data-end="31:19.60" data-index="1921">祁利叉王</span>
					<span class="punc">、</span>
					<span class="word" @@click="$dispatch('play-segment')" data-start="31:19.94" data-end="31:22.08" data-index="1922">大祁利叉王</span>
					<span class="punc">、</span></br>
					<span class="word" @@click="$dispatch('play-segment')" data-start="31:22.44" data-end="31:24.30" data-index="1923">阿那吒王</span>
					<span class="punc">、</span>
					<span class="word" @@click="$dispatch('play-segment')" data-start="31:24.70" data-end="31:26.76" data-index="1924">大阿那吒王</span>
					<span class="punc">。</span>
				</blockquote>
				<span class="word" @@click="$dispatch('play-segment')" data-start="31:27.26" data-end="31:29.86" data-index="1925">如是等大鬼王</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="31:30.30" data-end="31:34.38" data-index="1926">各各與百千諸小鬼王</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="31:34.88" data-end="31:37.30" data-index="1927">盡居閻浮提</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="31:37.72" data-end="31:39.18" data-index="1928">各有所執</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="31:39.80" data-end="31:41.48" data-index="1929">各有所主</span>
				<span class="punc">。</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="31:42.06" data-end="31:46.48" data-index="1930">是諸鬼王與閻羅天子</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="31:46.92" data-end="31:48.90" data-index="1931">承佛威神</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="31:49.10" data-end="31:52.90" data-index="1932">及地藏菩薩摩訶薩力</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="31:53.40" data-end="31:55.30" data-index="1933">俱詣忉利</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="31:55.52" data-end="31:57.12" data-index="1934">在一面立</span>
				<span class="punc">。</span>
			</div>
			<div x-show="details" class="details mb-3">
				這時，在鐵圍山內，有無數個鬼王，與閻羅天子一起來到忉利天佛說法的道場，
				<blockquote>
					有所謂惡毒鬼王（人有三毒、十惡，此鬼王以毒攻毒，以惡止惡，故名。）、<br/>
					多惡鬼王（此鬼王現忿怒之相，令人見之，不敢起惡念。）、<br/>
					大諍鬼王（大諍即無諍，令人解怨釋結。）、<br/>
					白虎鬼王、血虎鬼王、赤虎鬼王（以獸形得名。）、<br/>
					散殃鬼王（降災禍於作惡之人。）、<br/>
					飛身鬼王（飛行夜叉之帥。）、<br/>
					電光鬼王（眼如電光。）、<br/>
					狼牙鬼王（口露凶牙。）、<br/>
					千眼鬼王（全身千眼，瘟疫神也，所到之處，死人無數。）、<br/>
					啖獸鬼王（吞食惡獸。）、<br/>
					負石鬼王（令小鬼擔沙負石填河塞海。）、<br/>
					主耗鬼王（百物耗損，五穀失收。）、<br/>
					主禍鬼王（主天災橫禍。）、<br/>
					主食鬼王（即面然大士，分衣施食。）、<br/>
					主財鬼王（護人得財，世稱財神。）、<br/>
					主畜鬼王（主管家畜。）、<br/>
					主禽鬼王（主管飛禽。）、<br/>
					主獸鬼王（主管野獸。）、<br/>
					主魅鬼王（主管鬼魅。）、<br/>
					主產鬼王（送生保產。）、<br/>
					主命鬼王（主人生時死時。）、<br/>
					主疾鬼王（主人種種疾病。）、<br/>
					主險鬼王（高山峻嶺，大海深淵，由他主理。）、<br/>
					三目鬼王、四目鬼王、五目鬼王（以多眼得名。）、<br/>
					祁利失王、大祁利失王（大力鬼王。）、<br/>
					祁利叉王、大祁利叉王（火神。）、<br/>
					阿那吒王、大阿那吒王（統領群鬼。），
				</blockquote>
				像這類大鬼王，各各與千百個小鬼王，都居住閻浮提，各有他執掌的事情，各有他所管理的地方，這些鬼王與閻羅王，承佛的大威神力，以及地藏菩薩的大願力，全都來到忉利天宮，恭敬地站在一旁。
				<hr/>
			</div>
			<div :class="details ? 'bg-secondary text-white' : ''" class="paragraph">
				<span class="word" @@click="$dispatch('play-segment')" data-start="31:57.94" data-end="32:00.96" data-index="1935">爾時閻羅天子</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="32:01.44" data-end="32:04.90" data-index="1936">胡跪合掌白佛言</span>
				<span class="punc">：</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="32:05.28" data-end="32:06.30" data-index="1937">世尊</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="32:06.46" data-end="32:10.68" data-index="1938">我等今者與諸鬼王</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="32:11.14" data-end="32:13.18" data-index="1939">承佛威神</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="32:13.30" data-end="32:17.24" data-index="1940">及地藏菩薩摩訶薩力</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="32:17.78" data-end="32:21.62" data-index="1941">方得詣此忉利大會</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="32:22.00" data-end="32:25.72" data-index="1942">亦是我等獲善利故</span>
				<span class="punc">。</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="32:26.04" data-end="32:28.90" data-index="1943">我今有小疑事</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="32:29.24" data-end="32:30.88" data-index="1944">敢問世尊</span>
				<span class="punc">。</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="32:31.32" data-end="32:35.76" data-index="1945">唯願世尊慈悲宣說</span>
				<span class="punc">。</span>
			</div>
			<div x-show="details" class="details mb-3">
				此時，閻羅天子右膝著地，跪拜合掌，對佛說：「我們現在和各位鬼王，承佛的神威力和地藏菩薩的神通力，才能到忉利天宮參加這個大會，這也是因我們具有善因利益眾生。我現在有個小疑問，請教世尊，惟願世尊大發慈悲，為我們宣說。」
				<hr/>
			</div>
			<div :class="details ? 'bg-secondary text-white' : ''" class="paragraph">
				<span class="word" @@click="$dispatch('play-segment')" data-start="32:36.24" data-end="32:39.02" data-index="1946">佛告閻羅天子</span>
				<span class="punc">：</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="32:39.52" data-end="32:41.48" data-index="1947">恣汝所問</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="32:41.82" data-end="32:43.50" data-index="1948">吾為汝說</span>
				<span class="punc">。</span>
			</div>
			<div x-show="details" class="details mb-3">
				佛告訴閻羅天子：「隨便你問吧，我來替你解說。」
				<hr/>
			</div>
			<div :class="details ? 'bg-secondary text-white' : ''" class="paragraph">
				<span class="word" @@click="$dispatch('play-segment')" data-start="32:44.08" data-end="32:49.18" data-index="1949">是時閻羅天子瞻禮世尊</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="32:49.34" data-end="32:52.54" data-index="1950">及迴視地藏菩薩</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="32:52.82" data-end="32:54.40" data-index="1951">而白佛言</span>
				<span class="punc">：</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="32:54.94" data-end="32:55.74" data-index="1952">世尊</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="32:56.10" data-end="33:00.94" data-index="1953">我觀地藏菩薩在六道中</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="33:01.22" data-end="33:06.40" data-index="1954">百千方便而度罪苦眾生</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="33:06.86" data-end="33:09.00" data-index="1955">不辭疲倦</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="33:09.38" data-end="33:16.40" data-index="1956">是大菩薩有如是不可思議神通之事</span>
				<span class="punc">。</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="33:16.90" data-end="33:21.16" data-index="1957">然諸眾生獲脫罪報</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="33:21.50" data-end="33:23.28" data-index="1958">未久之間</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="33:23.66" data-end="33:25.52" data-index="1959">又墮惡道</span>
				<span class="punc">。</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="33:25.98" data-end="33:26.90" data-index="1960">世尊</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="33:27.22" data-end="33:34.06" data-index="1961">是地藏菩薩既有如是不可思議神力</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="33:34.62" data-end="33:39.44" data-index="1962">云何眾生而不依止善道</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="33:39.76" data-end="33:41.46" data-index="1963">永取解脫</span>
				<span class="punc">？</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="33:41.96" data-end="33:45.90" data-index="1964">唯願世尊為我解說</span>
				<span class="punc">。</span>
			</div>
			<div x-show="details" class="details mb-3">
				此時，閻羅天子瞻仰禮拜世尊，並回過頭來看看地藏菩薩，對佛說：「世尊，我看地藏菩薩在六道輪迴中，用盡種種方法，來引度有罪業而受苦的眾生，不知疲倦，這菩薩竟有這麼大的不可思議的神力。然而各個眾生雖然獲得脫離罪業，免受惡報，但時間不久，又做惡事墮入惡道。世尊，這地藏菩薩既然有這樣不可思議的神力，為何眾生不肯依着善道去奉行、永遠取得解脫罪報呢？請世尊替我解說。」
				<hr/>
			</div>
			<div :class="details ? 'bg-secondary text-white' : ''" class="paragraph">
				<span class="word" @@click="$dispatch('play-segment')" data-start="33:46.68" data-end="33:49.34" data-index="1965">佛告閻羅天子</span>
				<span class="punc">：</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="33:49.76" data-end="33:52.54" data-index="1966">南閻浮提眾生</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="33:52.92" data-end="33:54.92" data-index="1967">其性剛強</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="33:55.26" data-end="33:57.26" data-index="1968">難調難伏</span>
				<span class="punc">。</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="33:57.62" data-end="33:59.18" data-index="1969">是大菩薩</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="33:59.78" data-end="34:01.42" data-index="1970">於百千劫</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="34:01.94" data-end="34:05.52" data-index="1971">頭頭救拔如是眾生</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="34:05.92" data-end="34:07.60" data-index="1972">早令解脫</span>
				<span class="punc">。</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="34:08.02" data-end="34:12.72" data-index="1973">是罪報人乃至墮大惡趣</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="34:12.98" data-end="34:15.22" data-index="1974">菩薩以方便力</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="34:15.74" data-end="34:18.30" data-index="1975">拔出根本業緣</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="34:18.54" data-end="34:21.26" data-index="1976">而遣悟宿世之事</span>
				<span class="punc">。</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="34:21.96" data-end="34:27.16" data-index="1977">自是閻浮提眾生結惡習重</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="34:27.76" data-end="34:29.62" data-index="1978">旋出旋入</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="34:30.04" data-end="34:35.74" data-index="1979">勞斯菩薩久經劫數而作度脫</span>
				<span class="punc">。</span>
			</div>
			<div x-show="details" class="details mb-3">
				佛對閻羅天子說：「南閻浮提世間的眾生，生性頑劣剛強，很難調伏教化，這位地藏大菩薩在成百上千劫中，一個個地去救拔這些眾生，讓他們早日得到解脫。可是仍有一些受罪業報應的人墮入大地獄受苦，地藏菩薩便用各種方法，竭力把他們從最根本的罪業中救拔出來，並使他們覺悟到前世所造的罪惡之事。只是世間的眾生所造罪惡太多，積重難返，一會兒出離惡道，一會兒又墮入惡道，實有勞累這位地藏菩薩用很多劫的時間去度脫他們。」
				<hr/>
			</div>
			<div :class="details ? 'bg-secondary text-white' : ''" class="paragraph">
				<span class="word" @@click="$dispatch('play-segment')" data-start="34:36.26" data-end="34:39.84" data-index="1980">譬如有人迷失本家</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="34:40.24" data-end="34:42.06" data-index="1981">誤入險道</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="34:42.58" data-end="34:44.34" data-index="1982">其險道中</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="34:44.70" data-end="34:46.64" data-index="1983">多諸夜叉</span>
				<span class="punc">、</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="34:46.88" data-end="34:48.96" data-index="1984">及虎狼獅子</span>
				<span class="punc">、</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="34:49.28" data-end="34:51.62" data-index="1985">蚖蛇蝮蠍</span>
				<span class="punc">。</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="34:52.10" data-end="34:53.88" data-index="1986">如是迷人</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="34:54.14" data-end="34:55.88" data-index="1987">在險道中</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="34:56.22" data-end="34:57.88" data-index="1988">須臾之間</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="34:58.36" data-end="34:59.94" data-index="1989">即遭諸毒</span>
				<span class="punc">。</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="35:00.42" data-end="35:01.94" data-index="1990">有一知識</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="35:02.46" data-end="35:04.16" data-index="1991">多解大術</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="35:04.64" data-end="35:06.42" data-index="1992">善禁是毒</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="35:06.98" data-end="35:10.58" data-index="1993">乃及夜叉諸惡毒等</span>
				<span class="punc">。</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="35:10.96" data-end="35:14.64" data-index="1994">忽逢迷人欲進險道</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="35:14.92" data-end="35:16.62" data-index="1995">而語之言</span>
				<span class="punc">：</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="35:16.98" data-end="35:19.04" data-index="1996">咄哉男子</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="35:19.30" data-end="35:22.56" data-index="1997">為何事故而入此路</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="35:22.94" data-end="35:24.42" data-index="1998">有何異術</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="35:24.78" data-end="35:26.42" data-index="1999">能制諸毒</span>
				<span class="punc">。</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="35:26.82" data-end="35:30.56" data-index="2000">是迷路人忽聞是語</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="35:30.96" data-end="35:32.56" data-index="2001">方知險道</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="35:33.08" data-end="35:34.88" data-index="2002">即便退步</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="35:35.12" data-end="35:36.88" data-index="2003">求出此路</span>
				<span class="punc">。</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="35:37.50" data-end="35:39.12" data-index="2004">是善知識</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="35:39.48" data-end="35:41.30" data-index="2005">提攜接手</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="35:41.72" data-end="35:43.38" data-index="2006">引出險道</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="35:43.66" data-end="35:45.24" data-index="2007">免諸惡毒</span>
				<span class="punc">。</span>
			</div>
			<div x-show="details" class="details mb-3">
				「譬如有個人迷失了回家的方向，並誤入險惡的道路中，在那條險道中，有許多夜叉及虎、狼、獅子、蚖蛇、蝮蛇、毒蝎等，這個迷路人在這險惡的路上，隨時都會遭受各種惡獸的毒害。這時，有一位善於勸化人有知識的人，他具有種種高明的法術，善於禁制毒獸等，忽然碰到歸路人將要走上危險的道路，就對他說：『這位男子啊，你怎麼要進入這危險的道路呢？你有什麼法術能制伏得了這些毒蛇猛獸呢？』這位迷路人忽然聽到這句話，才意識到走錯了路，急忙往後退，想離開這條危險的道路。這位善知識就拉着他的手，將他領出險道，使他免受毒蟲猛獸的傷害。」
				<hr/>
			</div>
			<div :class="details ? 'bg-secondary text-white' : ''" class="paragraph">
				<span class="word" @@click="$dispatch('play-segment')" data-start="35:45.72" data-end="35:47.26" data-index="2008">至於好道</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="35:47.58" data-end="35:49.16" data-index="2009">令得安樂</span>
				<span class="punc">。</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="35:49.56" data-end="35:51.50" data-index="2010">而語之言</span>
				<span class="punc">：</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="35:51.92" data-end="35:53.50" data-index="2011">咄哉迷人</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="35:53.72" data-end="35:55.32" data-index="2012">自今已後</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="35:55.62" data-end="35:57.46" data-index="2013">勿履是道</span>
				<span class="punc">。</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="35:58.04" data-end="35:59.74" data-index="2014">此路入者</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="36:00.22" data-end="36:01.74" data-index="2015">卒難得出</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="36:02.26" data-end="36:03.94" data-index="2016">復損性命</span>
				<span class="punc">。</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="36:04.58" data-end="36:08.60" data-index="2017">是迷路人亦生感重</span>
				<span class="punc">。</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="36:09.16" data-end="36:11.02" data-index="2018">臨別之時</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="36:11.36" data-end="36:13.00" data-index="2019">知識又言</span>
				<span class="punc">：</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="36:13.38" data-end="36:17.00" data-index="2020">若見親知及諸路人</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="36:17.42" data-end="36:19.04" data-index="2021">若男若女</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="36:19.20" data-end="36:23.10" data-index="2022">言於此路多諸毒惡</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="36:23.42" data-end="36:25.10" data-index="2023">喪失性命</span>
				<span class="punc">。</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="36:25.48" data-end="36:29.48" data-index="2024">無令是眾自取其死</span>
				<span class="punc">。</span>
			</div>
			<div x-show="details" class="details mb-3">
				「當迷路人到達安全的地方，心感安樂，善知識又對他說：『糊塗的人啊，從今以後，不要再走這條路了，從這條路進去的人，最終都難以平安走出，白白丟掉了性命。』這位迷路人十分感激，臨別之時，善知識又說：『如果見到親朋好友或其他行路人，不論是男是女，就要告訴他們這條路遍佈毒蟲惡獸，有性命危險，不要讓這些人自投羅網。』」
				<hr/>
			</div>
			<div :class="details ? 'bg-secondary text-white' : ''" class="paragraph">
				<span class="word" @@click="$dispatch('play-segment')" data-start="36:29.92" data-end="36:34.52" data-index="2025">是故地藏菩薩俱大慈悲</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="36:34.76" data-end="36:37.40" data-index="2026">救拔罪苦眾生</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="36:37.92" data-end="36:39.62" data-index="2027">生人天中</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="36:39.90" data-end="36:41.62" data-index="2028">令受妙樂</span>
				<span class="punc">。</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="36:42.14" data-end="36:43.92" data-index="2029">是諸罪眾</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="36:44.26" data-end="36:45.92" data-index="2030">知業道苦</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="36:46.36" data-end="36:48.10" data-index="2031">脫得出離</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="36:48.50" data-end="36:49.84" data-index="2032">永不再歷</span>
				<span class="punc">。</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="36:50.44" data-end="36:52.28" data-index="2033">如迷路人</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="36:52.44" data-end="36:54.26" data-index="2034">誤入險道</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="36:54.58" data-end="36:58.68" data-index="2035">遇善知識引接令出</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="36:59.00" data-end="37:00.50" data-index="2036">永不復入</span>
				<span class="punc">。</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="37:01.00" data-end="37:02.70" data-index="2037">逢見他人</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="37:03.08" data-end="37:04.54" data-index="2038">復勸莫入</span>
				<span class="punc">。</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="37:05.00" data-end="37:07.98" data-index="2039">自言因是迷故</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="37:08.30" data-end="37:09.86" data-index="2040">得解脫竟</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="37:10.22" data-end="37:11.68" data-index="2041">更不復入</span>
				<span class="punc">。</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="37:12.06" data-end="37:14.28" data-index="2042">若再履踐</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="37:14.58" data-end="37:16.34" data-index="2043">猶尚迷誤</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="37:16.92" data-end="37:20.52" data-index="2044">不覺舊曾所落險道</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="37:21.02" data-end="37:22.70" data-index="2045">或致失命</span>
				<span class="punc">。</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="37:22.98" data-end="37:24.80" data-index="2046">如墮惡趣</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="37:25.14" data-end="37:28.74" data-index="2047">地藏菩薩方便力故</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="37:29.00" data-end="37:30.64" data-index="2048">使令解脫</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="37:30.98" data-end="37:32.66" data-index="2049">生人天中</span>
				<span class="punc">。</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="37:33.02" data-end="37:34.54" data-index="2050">旋又再入</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="37:35.22" data-end="37:37.08" data-index="2051">若業結重</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="37:37.32" data-end="37:38.88" data-index="2052">永處地獄</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="37:39.12" data-end="37:40.84" data-index="2053">無解脫時</span>
				<span class="punc">。</span>
			</div>
			<div x-show="details" class="details mb-3">
				「所以地藏菩薩俱大慈悲，一心救度眾生，想讓眾生都往生到人天中，享受福樂。這樣一來，那些罪業深重的人，自知會墮落惡道受苦，所以一旦能夠脫離，決不會重蹈覆轍。正像那位迷路人誤入險道，遇到善知識引導而脫離險境，一定不會再涉足那條險道；不但自己不入，遇到別人，還要勸他人也不要入。還說自己就曾誤入這條險道，好不容易才脫離困境，以後再也不會重蹈覆轍了。如果再涉足險道，執迷不誤，忘記了以前的危險經歷，就有可能丟失性命，無異於墮落惡道之中。假如憑藉地藏菩薩的方便力，而獲得解脫，往生於人天中，可是不久又重新進入惡道，若業報更加深重時，就永遠處於地獄之中，再沒有解脫的可能。」
				<hr/>
			</div>
			<div :class="details ? 'bg-secondary text-white' : ''" class="paragraph">
				<span class="word" @@click="$dispatch('play-segment')" data-start="37:41.26" data-end="37:47.20" data-index="2054">爾時惡毒鬼王合掌恭敬白佛言</span>
				<span class="punc">：</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="37:47.52" data-end="37:48.54" data-index="2055">世尊</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="37:48.70" data-end="37:51.08" data-index="2056">我等諸鬼王</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="37:51.36" data-end="37:52.98" data-index="2057">其數無量</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="37:53.30" data-end="37:55.22" data-index="2058">在閻浮提</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="37:55.52" data-end="37:57.06" data-index="2059">或利益人</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="37:57.20" data-end="37:58.74" data-index="2060">或損害人</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="37:58.92" data-end="38:00.40" data-index="2061">各各不同</span>
				<span class="punc">。</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="38:00.78" data-end="38:02.38" data-index="2062">然是業報</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="38:02.64" data-end="38:05.72" data-index="2063">使我眷屬遊行世界</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="38:06.16" data-end="38:07.72" data-index="2064">多惡少善</span>
				<span class="punc">。</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="38:08.06" data-end="38:09.68" data-index="2065">過人家庭</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="38:09.96" data-end="38:12.06" data-index="2066">或城邑聚落</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="38:12.46" data-end="38:14.44" data-index="2067">莊園房舍</span>
				<span class="punc">。</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="38:14.72" data-end="38:17.36" data-index="2068">或有男子女人</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="38:17.78" data-end="38:20.00" data-index="2069">修毛髮善事</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="38:20.32" data-end="38:24.04" data-index="2070">乃至懸一旛一蓋</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="38:24.50" data-end="38:26.26" data-index="2071">少香少華</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="38:26.68" data-end="38:30.26" data-index="2072">供養佛像及菩薩像</span>
				<span class="punc">。</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="38:30.42" data-end="38:32.72" data-index="2073">或轉讀尊經</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="38:33.00" data-end="38:36.78" data-index="2074">燒香供養一句一偈</span>
				<span class="punc">。</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="38:37.04" data-end="38:40.68" data-index="2075">我等鬼王敬禮是人</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="38:41.02" data-end="38:45.04" data-index="2076">如過去現在未來諸佛</span>
				<span class="punc">。</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="38:45.68" data-end="38:47.50" data-index="2077">敕諸小鬼</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="38:47.86" data-end="38:49.38" data-index="2078">各有大力</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="38:49.70" data-end="38:51.28" data-index="2079">及土地分</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="38:51.68" data-end="38:53.64" data-index="2080">便令衛護</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="38:53.90" data-end="38:56.74" data-index="2081">不令惡事橫事</span>
				<span class="punc">、</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="38:57.04" data-end="38:59.12" data-index="2082">惡病橫病</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="38:59.36" data-end="39:01.68" data-index="2083">乃至不如意事</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="39:01.98" data-end="39:04.44" data-index="2084">近於此舍等處</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="39:04.80" data-end="39:06.32" data-index="2085">何況入門</span>
				<span class="punc">。</span>
			</div>
			<div x-show="details" class="details mb-3">
				這時惡毒鬼王恭敬地合掌對佛說：「世尊，我們許多鬼王，其數目無法計算，在這閻浮提內，有的去做有利於人的事，有的去幹損害人的事，都因應眾生所得業報，各不相同。這些鬼王眷屬遊行世間巡察，結果發現還是為惡的多，為善的少。若鬼王眾經過世人的家庭，或是城邑、村落、莊園、房舍等，如果看到有男人女人做了像一根毛髮那麼微少的善事，或是在佛堂懸掛一幡或一寶蓋，或在佛和菩薩面前供奉少量的香及花，或者轉讀佛家經典，甚至燒香供養，讀誦一句一偈經典。我們這些鬼王就會尊敬這個人，就像尊敬過去、現在、未來的佛一樣。我們會敕令各個小鬼，他們都有很大的力量，和土地靈祇一起，讓他們保佑衛護這處人家，不要讓兇災橫禍重病等惡事，甚至不如意事，接近這個人的房舍處，更何況進入這家的大門呢？」
				<hr/>
			</div>
			<div :class="details ? 'bg-secondary text-white' : ''" class="paragraph">
				<span class="word" @@click="$dispatch('play-segment')" data-start="39:06.62" data-end="39:08.32" data-index="2086">佛讚鬼王</span>
				<span class="punc">：</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="39:08.46" data-end="39:10.20" data-index="2087">善哉</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="39:08.46" data-end="39:10.20" data-index="2087">善哉</span>
				<span class="punc">！</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="39:10.58" data-end="39:13.40" data-index="2088">汝等及與閻羅</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="39:13.54" data-end="39:17.32" data-index="2089">能如是擁護善男女等</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="39:17.64" data-end="39:20.76" data-index="2090">吾亦告梵王帝釋</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="39:21.18" data-end="39:23.14" data-index="2091">令衛護汝</span>
				<span class="punc">。</span>
			</div>
			<div x-show="details" class="details mb-3">
				佛聽完惡毒鬼王的這番話後，便讚歎說：「好啊，好啊！你們和閻羅天子，能這樣保護善男善女等人，我也告訴梵王和帝釋，讓他們來保護你們。」
				<hr/>
			</div>
			<div :class="details ? 'bg-secondary text-white' : ''" class="paragraph">
				<span class="word" @@click="$dispatch('play-segment')" data-start="39:23.48" data-end="39:25.32" data-index="2092">說是語時</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="39:25.52" data-end="39:28.08" data-index="2093">會中有一鬼王</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="39:28.10" data-end="39:29.72" data-index="2094">名曰主命</span>
				<span class="punc">。</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="39:30.04" data-end="39:31.16" data-index="2095">白佛言</span>
				<span class="punc">：</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="39:31.42" data-end="39:32.30" data-index="2096">世尊</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="39:32.50" data-end="39:34.64" data-index="2097">我本業緣</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="39:34.64" data-end="39:36.76" data-index="2098">主閻浮人命</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="39:37.22" data-end="39:38.88" data-index="2099">生時死時</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="39:39.06" data-end="39:40.80" data-index="2100">我皆主之</span>
				<span class="punc">。</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="39:41.18" data-end="39:42.66" data-index="2101">在我本願</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="39:42.76" data-end="39:44.12" data-index="2102">甚欲利益</span>
				<span class="punc">。</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="39:44.54" data-end="39:47.72" data-index="2103">自是眾生不會我意</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="39:48.10" data-end="39:51.26" data-index="2104">致令生死俱不得安</span>
				<span class="punc">。</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="39:51.64" data-end="39:52.66" data-index="2105">何以故</span>
				<span class="punc">。</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="39:53.06" data-end="39:57.10" data-index="2106">是閻浮提人初生之時</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="39:57.36" data-end="39:58.96" data-index="2107">不問男女</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="39:59.46" data-end="40:01.10" data-index="2108">或欲生時</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="40:01.60" data-end="40:03.10" data-index="2109">但作善事</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="40:03.62" data-end="40:05.24" data-index="2110">增益宅舍</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="40:05.78" data-end="40:09.28" data-index="2111">自令土地無量歡喜</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="40:09.60" data-end="40:11.30" data-index="2112">擁護子母</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="40:11.66" data-end="40:13.22" data-index="2113">得大安樂</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="40:13.68" data-end="40:15.24" data-index="2114">利益眷屬</span>
				<span class="punc">。</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="40:15.72" data-end="40:17.78" data-index="2115">或已生下</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="40:18.14" data-end="40:19.88" data-index="2116">慎勿殺害</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="40:20.10" data-end="40:23.94" data-index="2117">取諸鮮味供給產母</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="40:24.30" data-end="40:26.40" data-index="2118">及廣聚眷屬</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="40:26.74" data-end="40:28.40" data-index="2119">飲酒食肉</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="40:28.80" data-end="40:30.88" data-index="2120">歌樂絃管</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="40:31.12" data-end="40:34.24" data-index="2121">能令子母不得安樂</span>
				<span class="punc">。</span>
			</div>
			<div x-show="details" class="details mb-3">
				佛說這話時，集會中有一個鬼王，名字叫主命，他對佛說：「我本依照着世人自做的業緣，主管閻浮人的生死，他們的生時死時，我都主管着。在我本來的心願中，很想多給他們些利益，但是眾生不領會我的心意，結果使出生的人和臨終的人都不得安樂。為什麼呢？這是因為閻浮提人在剛生下的時候，不論是生男還是生女，在即將出生的時候，如果能作一些善事，祈求闔家平安，自然會使土地靈祇十分歡喜，而保護其子母，得到安樂，亦利及家中眷屬。至於已經生下嬰兒的家庭，就要十分謹慎，不要殺生害命，用諸新鮮肉食來供給產婦，並且宴請各位親屬，飲酒吃肉，歌舞倡樂，這樣就會使子母親都不得安寧。」
				<hr/>
			</div>
			<div :class="details ? 'bg-secondary text-white' : ''" class="paragraph">
				<span class="word" @@click="$dispatch('play-segment')" data-start="40:34.54" data-end="40:35.74" data-index="2122">何以故</span>
				<span class="punc">。</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="40:35.96" data-end="40:37.96" data-index="2123">是產難時</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="40:38.20" data-end="40:43.40" data-index="2124">有無數惡鬼及魍魎精魅</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="40:43.94" data-end="40:45.60" data-index="2125">欲食腥血</span>
				<span class="punc">。</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="40:46.08" data-end="40:50.18" data-index="2126">是我早令舍宅土地靈祇</span>
				<span class="punc">。</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="40:50.66" data-end="40:52.36" data-index="2127">荷護子母</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="40:52.72" data-end="40:54.34" data-index="2128">使令安樂</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="40:54.60" data-end="40:56.12" data-index="2129">而得利益</span>
				<span class="punc">。</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="40:56.54" data-end="40:58.22" data-index="2130">如是之人</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="40:58.58" data-end="41:00.44" data-index="2131">見安樂故</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="41:00.82" data-end="41:02.56" data-index="2132">便合設福</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="41:03.02" data-end="41:04.64" data-index="2133">答諸土地</span>
				<span class="punc">。</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="41:05.02" data-end="41:06.60" data-index="2134">翻為殺害</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="41:07.24" data-end="41:08.60" data-index="2135">聚集眷屬</span>
				<span class="punc">。</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="41:09.08" data-end="41:10.80" data-index="2136">以是之故</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="41:11.16" data-end="41:12.94" data-index="2137">犯殃自受</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="41:13.28" data-end="41:15.02" data-index="2138">子母俱損</span>
				<span class="punc">。</span>
			</div>
			<div x-show="details" class="details mb-3">
				「為什麼呢？這是因為在產難時，有無數惡鬼及山精妖魅，都想來吸食腥血，但我早就令家中的土地靈祇來保護母子倆，使他們安樂而得到利益。像這樣的人，因為他得到了平安，便應當廣泛地做各種善事，來答謝各位靈祇。反而他們卻殺生害命，聚集眷屬恣情暢飲作樂。因為這個緣故，就犯下了罪過，殃禍到臨時自作自受，子母都受到損害。」
				<hr/>
			</div>
			<div :class="details ? 'bg-secondary text-white' : ''" class="paragraph">
				<span class="word" @@click="$dispatch('play-segment')" data-start="41:15.66" data-end="41:19.58" data-index="2139">又閻浮提臨命終人</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="41:19.74" data-end="41:21.16" data-index="2140">不問善惡</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="41:21.44" data-end="41:24.70" data-index="2141">我欲令是命終之人</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="41:24.98" data-end="41:26.50" data-index="2142">不落惡道</span>
				<span class="punc">。</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="41:26.74" data-end="41:31.06" data-index="2143">何況自修善根增我力故</span>
				<span class="punc">。</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="41:31.44" data-end="41:35.12" data-index="2144">是閻浮提行善之人</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="41:35.68" data-end="41:37.28" data-index="2145">臨命終時</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="41:37.70" data-end="41:41.10" data-index="2146">亦有百千惡道鬼神</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="41:41.26" data-end="41:43.14" data-index="2147">或變作父母</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="41:43.38" data-end="41:45.28" data-index="2148">乃至諸眷屬</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="41:45.66" data-end="41:47.46" data-index="2149">引接亡人</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="41:47.60" data-end="41:49.40" data-index="2150">令落惡道</span>
				<span class="punc">。</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="41:49.74" data-end="41:52.22" data-index="2151">何況本造惡者</span>
				<span class="punc">。</span>
			</div>
			<div x-show="details" class="details mb-3">
				「再者，閻浮提將要臨死的人，不論他是行善行惡，我想讓這臨終人不要墮入惡道；何況他本來自己就修造善根，增加了自身福力。這些閻浮提行善的人，臨終時也有成百上千的惡道鬼神，或變成他們的父母，以及他們的眷屬，來誘惑引接亡人，使他們墮入惡道受苦，何況他本身就是有造惡業的人呢？」
				<hr/>
			</div>
			<div :class="details ? 'bg-secondary text-white' : ''" class="paragraph">
				<span class="word" @@click="$dispatch('play-segment')" data-start="41:52.60" data-end="41:53.42" data-index="2152">世尊</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="41:53.74" data-end="41:59.64" data-index="2153">如是閻浮提男子女人臨命終時</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="42:00.02" data-end="42:01.78" data-index="2154">神識惛昧</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="42:02.04" data-end="42:03.70" data-index="2155">不辨善惡</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="42:04.06" data-end="42:07.52" data-index="2156">乃至眼耳更無見聞</span>
				<span class="punc">。</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="42:07.92" data-end="42:09.34" data-index="2157">是諸眷屬</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="42:09.58" data-end="42:12.02" data-index="2158">當須設大供養</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="42:12.26" data-end="42:14.16" data-index="2159">轉讀尊經</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="42:14.44" data-end="42:17.16" data-index="2160">念佛菩薩名號</span>
				<span class="punc">。</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="42:17.36" data-end="42:19.12" data-index="2161">如是善緣</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="42:19.32" data-end="42:23.28" data-index="2162">能令亡者離諸惡道</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="42:23.58" data-end="42:27.28" data-index="2163">諸魔鬼神悉皆退散</span>
				<span class="punc">。</span>
			</div>
			<div x-show="details" class="details mb-3">
				「世尊，像這些閻浮提的男女臨死時，神智昏昧不清，不能分辨善惡，甚至眼睛看不見，耳朵聽不到。他們的眷屬應當為他們設大供養佛僧，並轉讀這部《地藏本願經》，念佛菩薩名號。如果有了這些善緣，就能夠使亡人脫離各種惡道，各路魔、鬼神全部都退避三舍。」
				<hr/>
			</div>
			<div :class="details ? 'bg-secondary text-white' : ''" class="paragraph">
				<span class="word" @@click="$dispatch('play-segment')" data-start="42:27.62" data-end="42:28.58" data-index="2164">世尊</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="42:28.74" data-end="42:32.26" data-index="2165">一切眾生臨命終時</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="42:32.58" data-end="42:34.92" data-index="2166">若得聞一佛名</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="42:35.06" data-end="42:36.76" data-index="2167">一菩薩名</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="42:37.08" data-end="42:39.20" data-index="2168">或大乘經典</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="42:39.44" data-end="42:40.88" data-index="2169">一句一偈</span>
				<span class="punc">。</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="42:41.30" data-end="42:43.70" data-index="2170">我觀如是輩人</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="42:43.96" data-end="42:47.14" data-index="2171">除五無間殺害之罪</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="42:47.50" data-end="42:48.96" data-index="2172">小小惡業</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="42:49.36" data-end="42:51.34" data-index="2173">合墮惡趣者</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="42:51.54" data-end="42:53.12" data-index="2174">尋即解脫</span>
				<span class="punc">。</span>
			</div>
			<div x-show="details" class="details mb-3">
				「世尊，所有眾生臨終時，如果能聽到一名佛號，一菩薩名號，或聽到大乘佛教經典的一句話或一偈語，我看這些人就能漸漸消除因殺害而墮入無間地獄的慘報；至於那些只犯有小小的惡業，應該墮入惡道之中的人們，也就立即得到解脫了。」
				<hr/>
			</div>
			<div :class="details ? 'bg-secondary text-white' : ''" class="paragraph">
				<span class="word" @@click="$dispatch('play-segment')" data-start="42:53.92" data-end="42:56.30" data-index="2175">佛告主命鬼王</span>
				<span class="punc">：</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="42:56.54" data-end="42:58.48" data-index="2176">汝大慈故</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="42:58.90" data-end="43:01.38" data-index="2177">能發如是大願</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="43:01.68" data-end="43:03.30" data-index="2178">於生死中</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="43:03.80" data-end="43:05.50" data-index="2179">護諸眾生</span>
				<span class="punc">。</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="43:05.76" data-end="43:08.38" data-index="2180">若未來世中</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="43:08.48" data-end="43:12.84" data-index="2181">有男子女人至生死時</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="43:13.26" data-end="43:15.68" data-index="2182">汝莫退是願</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="43:15.94" data-end="43:17.48" data-index="2183">總令解脫</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="43:17.84" data-end="43:19.36" data-index="2184">永得安樂</span>
				<span class="punc">。</span>
			</div>
			<div x-show="details" class="details mb-3">
				佛告訴主命鬼王：「你這麼大的慈悲，發這麼大的誓願，在眾生生死苦海中保護他們。假如後世中，有男子女人到生死交替之時，你不要退這個願力，要盡力讓他們得到解脫，永遠得到安樂。」
				<hr/>
			</div>
			<div :class="details ? 'bg-secondary text-white' : ''" class="paragraph">
				<span class="word" @@click="$dispatch('play-segment')" data-start="43:19.80" data-end="43:22.00" data-index="2185">鬼王白佛言</span>
				<span class="punc">：</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="43:22.66" data-end="43:24.34" data-index="2186">願不有慮</span>
				<span class="punc">。</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="43:24.52" data-end="43:26.20" data-index="2187">我畢是形</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="43:26.46" data-end="43:30.54" data-index="2188">念念擁護閻浮眾生</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="43:30.86" data-end="43:32.72" data-index="2189">生時死時</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="43:32.94" data-end="43:34.46" data-index="2190">俱得安樂</span>
				<span class="punc">。</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="43:34.92" data-end="43:38.86" data-index="2191">但願諸眾生於生死時</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="43:39.24" data-end="43:40.86" data-index="2192">信受我語</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="43:41.16" data-end="43:42.62" data-index="2193">無不解脫</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="43:42.88" data-end="43:44.48" data-index="2194">獲大利益</span>
				<span class="punc">。</span>
			</div>
			<div x-show="details" class="details mb-3">
				鬼王對佛說：「請你不要掛慮這件事，我終生時刻保護閻浮的眾生，使他們在生死時，都得到安樂。但願各位眾生在生死時，能相信我所說的話，便能解脫苦難，獲得大利益。」
				<hr/>
			</div>
			<div :class="details ? 'bg-secondary text-white' : ''" class="paragraph">
				<span class="word" @@click="$dispatch('play-segment')" data-start="43:44.72" data-end="43:48.16" data-index="2195">爾時佛告地藏菩薩</span>
				<span class="punc">：</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="43:48.64" data-end="43:51.40" data-index="2196">是大鬼王主命者</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="43:51.72" data-end="43:56.14" data-index="2197">已曾經百千生</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="43:51.72" data-end="43:56.14" data-index="2197">作大鬼王</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="43:56.54" data-end="43:58.34" data-index="2198">於生死中</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="43:58.56" data-end="44:00.24" data-index="2199">擁護眾生</span>
				<span class="punc">。</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="44:00.62" data-end="44:03.78" data-index="2200">是大士慈悲願故</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="44:04.08" data-end="44:05.82" data-index="2201">現大鬼身</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="44:06.02" data-end="44:07.46" data-index="2202">實非鬼也</span>
				<span class="punc">。</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="44:07.94" data-end="44:11.00" data-index="2203">卻後過一百七十劫</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="44:11.44" data-end="44:12.90" data-index="2204">當得成佛</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="44:13.34" data-end="44:15.74" data-index="2205">號曰無相如來</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="44:16.20" data-end="44:17.62" data-index="2206">劫名安樂</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="44:17.96" data-end="44:20.28" data-index="2207">世界名淨住</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="44:20.68" data-end="44:23.92" data-index="2208">其佛壽命不可計劫</span>
				<span class="punc">。</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="44:24.44" data-end="44:25.34" data-index="2209">地藏</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="44:25.44" data-end="44:27.04" data-index="2210">是大鬼王</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="44:27.22" data-end="44:30.88" data-index="2211">其事如是不可思議</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="44:31.16" data-end="44:34.74" data-index="2212">所度人天亦不可限量</span>
				<span class="punc">。</span>
			</div>
			<div x-show="details" class="details mb-3">
				這時佛告訴地藏菩薩：「這位主命大鬼王，已經歷過百千生做大鬼王，在眾生的生死中，保護眾生，是這位大士慈悲願力的緣故，化現成大鬼王，實質並不是鬼。從現在起，再過一百七十劫，就能成佛，佛號叫做無相如來，劫名叫做安樂，世界的名字叫淨住，這個佛的壽命是不可計量的。地藏，這位大鬼王的事情是這樣的不可思議，經他所度的人天眾生也是多得不可計量。」
				<hr/>
			</div>
			<h4 class="toc-item" id="vol2-ch9">
				<span class="word" @@click="$dispatch('play-segment')" data-start="44:36.62" data-end="44:39.58" data-index="2213">稱佛名號品第九</span>
			</h4>
			<div :class="details ? 'bg-secondary text-white' : ''" class="paragraph">
				<span class="word" @@click="$dispatch('play-segment')" data-start="44:41.40" data-end="44:46.46" data-index="2214">爾時地藏菩薩摩訶薩白佛言</span>
				<span class="punc">：</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="44:47.08" data-end="44:48.00" data-index="2215">世尊</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="44:48.36" data-end="44:53.12" data-index="2216">我今為未來眾生演利益事</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="44:53.60" data-end="44:55.14" data-index="2217">於生死中</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="44:55.34" data-end="44:56.56" data-index="2218">得大利益</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="44:57.04" data-end="45:00.38" data-index="2219">唯願世尊聽我說之</span>
				<span class="punc">。</span>
			</div>
			<div x-show="details" class="details mb-3">
				這時，地藏大菩薩對佛說：「世尊，我現在為未來世眾生演說利益的事，使他們在生死之中，都能得到大利益，願世尊你能聽我來詳細說明。」
				<hr/>
			</div>
			<div :class="details ? 'bg-secondary text-white' : ''" class="paragraph">
				<span class="word" @@click="$dispatch('play-segment')" data-start="45:01.10" data-end="45:03.24" data-index="2220">佛告地藏菩薩</span>
				<span class="punc">：</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="45:04.04" data-end="45:06.90" data-index="2221">汝今欲興慈悲</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="45:07.38" data-end="45:11.46" data-index="2222">救拔一切罪苦六道眾生</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="45:11.80" data-end="45:13.94" data-index="2223">演不思議事</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="45:14.58" data-end="45:16.14" data-index="2224">今正是時</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="45:16.82" data-end="45:18.42" data-index="2225">唯當速說</span>
				<span class="punc">。</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="45:18.84" data-end="45:20.42" data-index="2226">吾即涅槃</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="45:20.88" data-end="45:23.08" data-index="2227">使汝早畢是願</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="45:23.52" data-end="45:28.58" data-index="2228">吾亦無憂現在未來一切眾生</span>
				<span class="punc">。</span>
			</div>
			<div x-show="details" class="details mb-3">
				佛告訴地藏菩薩：「你現在想要興起大慈悲之心，為救拔罪苦六道的一切眾生，演說你的不可思議的辦法，現在正是最適合的時候，請你趕快說，不然我就要涅槃了。好使你早日圓滿你的誓願，我也就不再憂慮現在和未來的一切眾生。」
				<hr/>
			</div>
			<div :class="details ? 'bg-secondary text-white' : ''" class="paragraph">
				<span class="word" @@click="$dispatch('play-segment')" data-start="45:29.46" data-end="45:31.96" data-index="2229">地藏菩薩白佛言</span>
				<span class="punc">：</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="45:32.58" data-end="45:33.42" data-index="2230">世尊</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="45:33.98" data-end="45:37.10" data-index="2231">過去無量阿僧祇劫</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="45:37.76" data-end="45:39.30" data-index="2232">有佛出世</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="45:39.56" data-end="45:42.28" data-index="2233">號無邊身如來</span>
				<span class="punc">。</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="45:42.92" data-end="45:47.18" data-index="2234">若有男子女人聞是佛名</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="45:47.58" data-end="45:49.18" data-index="2235">暫生恭敬</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="45:49.54" data-end="45:53.82" data-index="2236">即得超越四十劫生死重罪</span>
				<span class="punc">。</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="45:54.28" data-end="45:56.50" data-index="2237">何況塑畫形像</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="45:57.06" data-end="45:58.76" data-index="2238">供養讚歎</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="45:59.16" data-end="46:02.22" data-index="2239">其人獲福無量無邊</span>
				<span class="punc">。</span>
			</div>
			<div x-show="details" class="details mb-3">
				地藏菩薩對佛說：「世尊，在過去無數個阿僧祇劫中，有一位佛出世，名號叫無邊身如來。如果有男人女人聞了這位佛的名字，暫時能生出恭敬的心來，就能得免除四十劫生死的重罪，更何況能塑畫如來形像，並供養讚嘆呢？那麼，這個人將會獲得無量無邊的福報。」
				<hr/>
			</div>
			<div :class="details ? 'bg-secondary text-white' : ''" class="paragraph">
				<span class="word" @@click="$dispatch('play-segment')" data-start="46:03.04" data-end="46:06.20" data-index="2240">又於過去恆河沙劫</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="46:06.64" data-end="46:08.20" data-index="2241">有佛出世</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="46:08.50" data-end="46:10.48" data-index="2242">號寶性如來</span>
				<span class="punc">。</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="46:10.98" data-end="46:15.00" data-index="2243">若有男子女人聞是佛名</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="46:15.26" data-end="46:16.82" data-index="2244">一彈指頃</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="46:16.96" data-end="46:18.52" data-index="2245">發心歸依</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="46:19.04" data-end="46:23.28" data-index="2246">是人於無上道永不退轉</span>
				<span class="punc">。</span>
			</div>
			<div x-show="details" class="details mb-3">
				「又在過去如恆河沙數的劫中，有一位佛出世，他的名號叫寶性如來。如果有男子女人聽到這位佛的名字，在一彈指時間內，發心歸依這位佛，這人便於追求無上的佛道上永遠不會退心。」
				<hr/>
			</div>
			<div :class="details ? 'bg-secondary text-white' : ''" class="paragraph">
				<span class="word" @@click="$dispatch('play-segment')" data-start="46:23.58" data-end="46:26.76" data-index="2247">又於過去有佛出世</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="46:27.06" data-end="46:29.90" data-index="2248">號波頭摩勝如來</span>
				<span class="punc">。</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="46:30.34" data-end="46:32.86" data-index="2249">若有男子</span>
				<span class="punc">、</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="46:30.34" data-end="46:32.86" data-index="2249">女人</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="46:33.06" data-end="46:34.82" data-index="2250">聞是佛名</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="46:35.02" data-end="46:36.70" data-index="2251">歷於耳根</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="46:37.02" data-end="46:41.90" data-index="2252">是人當得千返生於六欲天中</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="46:42.30" data-end="46:45.00" data-index="2253">何況志心稱念</span>
				<span class="punc">。</span>
			</div>
			<div x-show="details" class="details mb-3">
				「又在過去有一位佛出世，他的佛號叫波頭摩勝如來，如果有男子女人聽到這位佛的名字，傳入他的耳根後，這人當得千次往生在六欲天中，何況他能誠心誠意地稱念名號。」
				<hr/>
			</div>
			<div :class="details ? 'bg-secondary text-white' : ''" class="paragraph">
				<span class="word" @@click="$dispatch('play-segment')" data-start="46:45.64" data-end="46:47.26" data-index="2254">又於過去</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="46:47.26" data-end="46:51.10" data-index="2255">不可說不可說阿僧祇劫</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="46:51.46" data-end="46:52.90" data-index="2256">有佛出世</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="46:53.12" data-end="46:55.26" data-index="2257">號師子吼如來</span>
				<span class="punc">。</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="46:55.74" data-end="46:59.92" data-index="2258">若有男子女人聞是佛名</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="47:00.18" data-end="47:01.60" data-index="2259">一念歸依</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="47:02.02" data-end="47:07.18" data-index="2260">是人得遇無量諸佛摩頂授記</span>
				<span class="punc">。</span>
			</div>
			<div x-show="details" class="details mb-3">
				「又在過去多得無法說清的劫中，有一位佛出世，名字叫師子吼如來。假如有男子女人聽到這位佛的名字，起一念歸依，這個人就能得到無數諸佛給他摩頂授記。」
				<hr/>
			</div>
			<div :class="details ? 'bg-secondary text-white' : ''" class="paragraph">
				<span class="word" @@click="$dispatch('play-segment')" data-start="47:07.68" data-end="47:10.58" data-index="2261">又於過去有佛出世</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="47:11.02" data-end="47:12.84" data-index="2262">號拘留孫佛</span>
				<span class="punc">。</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="47:13.38" data-end="47:15.88" data-index="2263">若有男子女人</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="47:16.30" data-end="47:18.12" data-index="2264">聞是佛名</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="47:18.12" data-end="47:21.78" data-index="2265">志心瞻禮或復讚歎</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="47:22.18" data-end="47:25.98" data-index="2266">是人於賢劫千佛會中</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="47:26.28" data-end="47:28.06" data-index="2267">為大梵王</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="47:28.32" data-end="47:29.98" data-index="2268">得授上記</span>
				<span class="punc">。</span>
			</div>
			<div x-show="details" class="details mb-3">
				「又在過去有一位佛出世，他的名號叫拘留孫佛。如果有男子女人聽到這位佛名，誠心瞻仰敬禮，或者再加以讚歎，這個人在賢劫千佛會裡，則做大梵王，還會授得最高的記別。」
				<hr/>
			</div>
			<div :class="details ? 'bg-secondary text-white' : ''" class="paragraph">
				<span class="word" @@click="$dispatch('play-segment')" data-start="47:30.48" data-end="47:33.62" data-index="2269">又於過去有佛出世</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="47:33.96" data-end="47:35.88" data-index="2270">號毘婆尸</span>
				<span class="punc">。</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="47:36.32" data-end="47:40.86" data-index="2271">若有男子女人聞是佛名</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="47:41.10" data-end="47:43.02" data-index="2272">永不墮惡道</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="47:43.28" data-end="47:45.22" data-index="2273">常生人天</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="47:45.44" data-end="47:46.96" data-index="2274">受勝妙樂</span>
				<span class="punc">。</span>
			</div>
			<div x-show="details" class="details mb-3">
				「又在過去，有一位佛出世，佛名叫毘婆尸。如果有男子女人聽到這位佛的名號，他就永遠不會墮入地獄惡道，永遠生在人天中，享受到最美好的快樂。」
				<hr/>
			</div>
			<div :class="details ? 'bg-secondary text-white' : ''" class="paragraph">
				<span class="word" @@click="$dispatch('play-segment')" data-start="47:47.74" data-end="47:52.56" data-index="2275">又於過去無量無數恆河沙劫</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="47:53.06" data-end="47:54.58" data-index="2276">有佛出世</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="47:54.88" data-end="47:56.82" data-index="2277">號寶勝如來</span>
				<span class="punc">。</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="47:57.22" data-end="48:01.60" data-index="2278">若有男子女人聞是佛名</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="48:01.94" data-end="48:04.14" data-index="2279">畢竟不墮惡道</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="48:04.58" data-end="48:08.30" data-index="2280">常在天上受勝妙樂</span>
				<span class="punc">。</span>
			</div>
			<div x-show="details" class="details mb-3">
				「又在過去多得無法計量恆河沙劫時，有一位佛出世，佛的名號叫寶勝如來。如果有男子女人聽到這位佛的名號，就最終不墮入惡道受苦，而能常往生到天界享受最美好的安樂。」
				<hr/>
			</div>
			<div :class="details ? 'bg-secondary text-white' : ''" class="paragraph">
				<span class="word" @@click="$dispatch('play-segment')" data-start="48:09.16" data-end="48:12.14" data-index="2281">又於過去有佛出世</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="48:12.48" data-end="48:14.22" data-index="2282">號寶相如來</span>
				<span class="punc">。</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="48:14.90" data-end="48:19.06" data-index="2283">若有男子女人聞是佛名</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="48:19.36" data-end="48:21.00" data-index="2284">生恭敬心</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="48:21.50" data-end="48:24.90" data-index="2285">是人不久得阿羅漢果</span>
				<span class="punc">。</span>
			</div>
			<div x-show="details" class="details mb-3">
				「又在過去有一位佛出世，他的名號叫寶相如來。假如有男子女人聽到這位佛的名號，產生恭敬之心，這人不久之後就能證得阿羅漢果位。」
				<hr/>
			</div>
			<div :class="details ? 'bg-secondary text-white' : ''" class="paragraph">
				<span class="word" @@click="$dispatch('play-segment')" data-start="48:25.28" data-end="48:29.00" data-index="2286">又於過去無量阿僧祇劫</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="48:29.46" data-end="48:30.78" data-index="2287">有佛出世</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="48:31.10" data-end="48:33.62" data-index="2288">號袈裟幢如來</span>
				<span class="punc">。</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="48:34.12" data-end="48:38.84" data-index="2289">若有男子女人聞是佛名者</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="48:39.20" data-end="48:42.72" data-index="2290">超一百大劫生死之罪</span>
				<span class="punc">。</span>
			</div>
			<div x-show="details" class="details mb-3">
				「又在過去無數阿僧祇劫中，有位佛出世，名號叫袈裟幢如來。如果有男子女人，聽到這位佛的名號，他就能超脫一百大劫的生死之罪。」
				<hr/>
			</div>
			<div :class="details ? 'bg-secondary text-white' : ''" class="paragraph">
				<span class="word" @@click="$dispatch('play-segment')" data-start="48:43.20" data-end="48:46.20" data-index="2291">又於過去有佛出世</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="48:46.40" data-end="48:49.06" data-index="2292">號大通山王如來</span>
				<span class="punc">。</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="48:49.54" data-end="48:54.22" data-index="2293">若有男子女人聞是佛名者</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="48:54.56" data-end="48:59.28" data-index="2294">是人得遇恆河沙佛廣為說法</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="48:59.60" data-end="49:01.12" data-index="2295">必成菩提</span>
				<span class="punc">。</span>
			</div>
			<div x-show="details" class="details mb-3">
				「又在過去有位佛出世，名叫大通山王如來。如果有男子女人聽到這位佛的名字，這個人就會遇到像恆河沙那麼多的佛為他廣說佛法，他將來必然成就佛果。」
				<hr/>
			</div>
			<div :class="details ? 'bg-secondary text-white' : ''" class="paragraph">
				<span class="word" @@click="$dispatch('play-segment')" data-start="49:01.44" data-end="49:04.64" data-index="2296">又於過去有淨月佛</span>
				<span class="punc">、</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="49:04.88" data-end="49:05.92" data-index="2297">山王佛</span>
				<span class="punc">、</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="49:06.22" data-end="49:07.52" data-index="2298">智勝佛</span>
				<span class="punc">、</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="49:07.96" data-end="49:09.44" data-index="2299">淨名王佛</span>
				<span class="punc">、</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="49:09.86" data-end="49:11.44" data-index="2300">智成就佛</span>
				<span class="punc">、</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="49:11.68" data-end="49:12.90" data-index="2301">無上佛</span>
				<span class="punc">、</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="49:13.30" data-end="49:14.42" data-index="2302">妙聲佛</span>
				<span class="punc">、</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="49:14.86" data-end="49:16.10" data-index="2303">滿月佛</span>
				<span class="punc">、</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="49:16.54" data-end="49:20.86" data-index="2304">月面佛有如是等不可說佛</span>
				<span class="punc">。</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="49:21.36" data-end="49:22.20" data-index="2305">世尊</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="49:22.62" data-end="49:25.82" data-index="2306">現在未來一切眾生</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="49:26.16" data-end="49:27.84" data-index="2307">若天若人</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="49:28.20" data-end="49:29.88" data-index="2308">若男若女</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="49:30.32" data-end="49:33.08" data-index="2309">但念得一佛名號</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="49:33.26" data-end="49:34.74" data-index="2310">功德無量</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="49:35.10" data-end="49:36.56" data-index="2311">何況多名</span>
				<span class="punc">。</span>
			</div>
			<div x-show="details" class="details mb-3">
				「又在過去，有淨月佛、山王佛、智勝佛、淨名王佛、智成就佛、無上佛、妙聲佛、滿月佛、月面佛，有這樣一些無數的佛。世尊，現在未來的一切眾生，無論是天上或人間，無論是男是女，只是能稱念一位佛的名為，他的功德也是無量的，何況他稱念許多佛的名號呢！」
				<hr/>
			</div>
			<div :class="details ? 'bg-secondary text-white' : ''" class="paragraph">
				<span class="word" @@click="$dispatch('play-segment')" data-start="49:37.00" data-end="49:38.72" data-index="2312">是眾生等</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="49:39.08" data-end="49:40.94" data-index="2313">生時死時</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="49:40.94" data-end="49:42.36" data-index="2314">自得大利</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="49:42.78" data-end="49:44.54" data-index="2315">終不墮惡道</span>
				<span class="punc">。</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="49:45.12" data-end="49:47.56" data-index="2316">若有臨命終人</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="49:47.72" data-end="49:49.26" data-index="2317">家中眷屬</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="49:49.60" data-end="49:51.20" data-index="2318">乃至一人</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="49:51.62" data-end="49:55.66" data-index="2319">為是病人高聲念一佛名</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="49:55.94" data-end="49:57.50" data-index="2320">是命終人</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="49:57.72" data-end="50:00.04" data-index="2321">除五無間罪</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="50:00.32" data-end="50:03.68" data-index="2322">餘業報等悉得銷滅</span>
				<span class="punc">。</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="50:04.40" data-end="50:06.40" data-index="2323">是五無間罪</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="50:06.50" data-end="50:08.18" data-index="2324">雖至極重</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="50:08.60" data-end="50:10.20" data-index="2325">動經億劫</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="50:10.40" data-end="50:11.76" data-index="2326">了不得出</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="50:12.20" data-end="50:14.70" data-index="2327">承斯臨命終時</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="50:14.90" data-end="50:18.14" data-index="2328">他人為其稱念佛名</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="50:18.32" data-end="50:19.88" data-index="2329">於是罪中</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="50:19.88" data-end="50:21.42" data-index="2330">亦漸銷滅</span>
				<span class="punc">。</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="50:21.78" data-end="50:25.06" data-index="2331">何況眾生自稱自念</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="50:25.26" data-end="50:26.96" data-index="2332">獲福無量</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="50:27.06" data-end="50:28.74" data-index="2333">滅無量罪</span>
				<span class="punc">。</span>
			</div>
			<div x-show="details" class="details mb-3">
				「這些眾生於生死時，自己能得到很大利益，最終是不會墮入惡道中受苦。假如有臨終的人，家中眷屬即使只有一人，為他高聲地念一聲佛名，這人除了犯五無間大罪外，其餘的業報等，都能全部消滅。這五無間罪，雖然極重，動輒需經過上億個劫數，還不能出離苦海。憑着臨終時，他人為他稱念佛名，他自身的罪業也漸漸消去，更何況眾生自己能夠稱念佛名，他所獲得的福報將是不可限量的，並能消滅無量的罪業。」
				<hr/>
			</div>
			<div class="paragraph">
				<span class="word"><strong>讚</strong></span><br/>
				<span class="word" @@click="$dispatch('play-segment')" data-start="50:29.28" data-end="50:31.32" data-index="2334">普賢啟問</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="50:31.68" data-end="50:33.66" data-index="2335">地藏宏開</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="50:33.92" data-end="50:37.12" data-index="2336">三塗六道絕塵埃</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="50:37.76" data-end="50:39.88" data-index="2337">普廣問如來</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="50:40.16" data-end="50:41.98" data-index="2338">授記十齋</span>
				<span class="punc">，</span>
				<span class="word" @@click="$dispatch('play-segment')" data-start="50:42.26" data-end="50:44.24" data-index="2339">接引上蓮臺</span>
				<span class="punc">。</span>
			</div>
			<div class="paragraph">
				<span class="word" @@click="$dispatch('play-segment')" data-start="50:44.86" data-end="50:54.06" data-index="2340"><strong>南無常住十方法 <sub>(三稱)</sub></strong></span>
			</div>
			<div class="paragraph">
				<h2>
					<span class="word" @@click="$dispatch('play-segment')" data-start="50:54.50" data-end="50:58.84" data-index="2341">地藏菩薩本願經卷中</span>
				</h2>
			</div>
			<div class="d-flex mb-3">
				<div class="me-auto w-50">
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
				</div>
				<div class="ms-auto me-3 w-50">
					<a href="{{ $page->baseUrl.'/ksitigarbha-vows-vol3' }}" class="btn btn-link border p-2 ms-3 w-100 h-100 text-decoration-none">
						<div class="d-flex h-100 justify-content-between align-items-center">
							<div class="d-flex w-100 justify-content-center">
								<span class="me-2 text-start text-truncate">地藏菩薩本願經卷下</span>
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
<div class="container-fulid fixed-bottom" x-show="!isSidebarOpened">
	<div class="row my-3 px-5">
		<x-audio-control>
			<source src="{{ $page->baseUrl.'/assets/audios/ksitigarbha-vows-vol2.mp3' }}" type="audio/mp3" />
		</x-audio-control>
	</div>
</div>
@endsection