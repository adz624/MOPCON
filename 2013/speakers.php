<?php
  ini_set('error_reporting', E_ALL^E_NOTICE^E_STRICT);
  $page = "speakers";
  $title = "講者介紹";
  $og_descr = "講者匯集國內知名行動技術開發者，10/26~27兩日議程提供最先進與實務之開發技術饗宴";
  $page_file = $_SERVER['PHP_SELF'];
?>
<html lang="zh-TW" class="">
  <head>
  <?php include_once("header.php");?>
  <style>
    #all {
      padding: 10px;
    }
    #speakerpool {
      margin-bottom:3.5em;
    }
    .speaker {
      width:336px;
      margin:0.3em;
      border: 1px solid #ccc;
      padding: 0.5em;
      border-radius:5px;
      background-color:#fafafa;
    }
    .speaker img {
        float:right;
        border: 0.5em solid #fafafa;
    }
    .speaker h2 {
        font-size:1.5em;
        border-bottom: 6px solid #ccc;
    }

    @media (min-width: 980px) and (max-width: 1199px) {
        .speaker {
          width:400px;
        }
    }
    @media (min-width: 768px) and (max-width: 979px) {
        .speaker {
          width:304px;
        }
    }
    @media (max-width: 767px) {
        .speaker {
          width:95%;
        }
    }
  </style>
  </head>
  <body data-twttr-rendered="true" data-spy="scroll" data-target=".subnav" data-offset="50">
  <?php include_once("navbar.php");?>
  <div class="container" id="all">
    <div class="row"><div class="span12"><h1>講者介紹</h1></div></div>
    <div class="span12">
      <div id="speakerpool">

      <div class="speaker">
      <a id="segacheng"></a> 
      <img src="speaker_img/sega.jpg" alt="Sega">
      <h2>程世嘉<br>Sega Cheng</h2>
<p>經歷： (前兩者為現職)
<ul>
<li>CEO, <a href="http://www.ikala.tv">iKala</a></li>
<li>CEO, <a href="https://livehouse.in/">LIVEhouse</a></li>
<li>Gamania (遊戲橘子) 董事</li>
<li>Google 軟體工程師</li>
<li>史丹佛大學電腦科學碩士、台大資訊工程系</li>
</ul>
<p>題目: Open is the new norm.
<p>議程摘要:<br>
    Big data, open data, open mobile platform, quantified self, internet
    of things, 這些進幾年來興起的領域，代表著網際網路和全世界的大趨勢，正快速地把我們推向一個更為開放的世界。「開放已是常態、封閉無法生存」，這一個
    session 中將與各位分享，在這樣開放的新世界，我們應該如何應對？
      </div>

      <div class="speaker">
      <a id="scottcheng"></a> 
      <img src="speaker_img/scott.jpg" alt="Scott">
      <h2>程士恒<br>Scott Cheng</h2>
<p>博晶醫電 / 共同創辦人
<p>講者自 2007 年以來投入需高度軟硬整合的遠距照護計劃。對於電子＋生物的應用有高度興趣與熱忱。並於 2011 年創辦運動感測器設計公司
—— 博晶醫電 (bOMDIC Inc.) —— 發願讓 bOMDIC 結合電子感測、無線通訊技術，和手機 App
等多種元素的整合，成為「高品質運動的代名詞」。
<p>議程簡介:<br>
設計是為了解決問題。但軟硬整合的設計實戰中，常因為硬體的前期投資，讓設計團隊為了回收投入，執著於已開發成果，有了「慣性思考」—
最後竟演變成「設計是為了製造問題」。講者以其參與的運動器材「HeartWave
心浪體能配置機」的開發經驗，分享如何避開軟硬整合設計的慣性陷阱。
      </div>

      <div class="speaker">
      <a id="weiwei"></a> 
      <img src="speaker_img/weiwei.jpg" alt="魏巍">
      <h2>魏巍</h2>
<!--
 (之前打錯名字了真對不起)
                \
                 Orz
-->
<p>曾是 DJ、音樂人，出過一張唱片，後來擔任出版社外文主編，曾寫過一本小說與17本德語法語教學書籍。目前獨立開發 iPhone 與
Android 程式與遊戲，上架 19 個App，從企畫、美術、寫程式全部都一手包辦。
<p>題目：<br>我已經不能說自己是程式界的菜鳥了：CORONA SDK 開發跨平台手機遊戲
<ol>
<li>CORONA SDK簡介</li>
<li>製作遊戲心得分享</li>
</ol>
      </div>


      <div class="speaker">
      <a id="kny"></a>
      <img src="speaker_img/kny.jpg" alt="KNY">
      <h2>陳坤助<br>KNY</h2>
<p>中華民國 App 跨界交流協會理事長
<p>於 2012 年11月獲得 Google Play Top Developer 徽章。
<p>長期關注與推動台灣 App 產業的發展，並積極倡議台灣 OpenData 的發展。希望能透過科技與開放的力量，建構更美好的未來。
<p>題目: App 與 改變世界的力量
<p>如何透過微小的 App ，獲得巨大的力量，進而改變世界
      </div>

      <div class="speaker">
      <a id="shakalaca"></a>
      <img src="speaker_img/shakalaca.jpg" alt="Shakalaca">
      <h2>Shakalaca</h2>
<p>身兼數職：尿布管理員, 搖籃推進器, 嘴砲攻城獅, 鈔票劊子手。
<p>目前與朋友創業打怪中，最愛 Android (App) 開發，常出沒於 Taipei GTUG 聽取各路好手分享技術，也樂於跟大家分享程序員有興趣的小技巧或小工具
<p><a href="http://about.me/shakalaca">http://about.me/shakalaca</a>
<p>題目：深入淺出桌椅組裝器材 (Head First Android Dev Tools)
<p>摘要：傳授 gradle，genymotion...等工具的使用心法，歡迎喜愛桌椅組裝的朋友切磋交流。
      </div>

      <div class="speaker">
      <a id="josephku"></a>
      <img src="speaker_img/josephku.jpg" alt="古傑芳 Joseph Ku">
      <h2>古傑芳<br>Joseph Ku</h2>
<p>themobiapps.com (英商移動應用) / 研發副總
<p>程式設計師一枚。十歲時開始撰寫 x86 組合語言程式，二十歲寫 C 維生，三十歲愛上 Ruby。曾主導開發多種嵌入式設備產品，並於 2008年投身行動應用開發迄今。
<p>題目：RubyMotion: Use It &amp; Hack It
<p>摘要：Ruby 是替代 Objective-C 的最佳程式語言，RubyMotion 的誕生更是讓全球 Rub
愛好者磨拳擦掌想要跳入行動應用的領域。無論您是不是熟悉 Ruby，接觸 RubyMotion
後都一定會醉倒在它那極簡、優雅、迅捷的開發體驗。議程中除了介紹 RubyMotion
的架構，還會分享開發時所經歷的酸甜苦辣，此外，只要再進行小小的 Hack，即可將 RubyMotion 帶到全新的應用上。
      </div>

      <div class="speaker">
      <a id="chunchinsu"></a>
      <img src="speaker_img/chunchinsu.jpg" alt="蘇俊欽">
      <h2>蘇俊欽</h2>
<ul>
<li>成功大學工業設計研究所 人因工程與互動設計組 博士候選人</li>
<li>ARTruth互動設計師</li>
<li>川三十媒體設計 互動設計師</li>
<li>成功大學人因互動設計實驗室 研究員</li>
<li>新加坡國立大學 MXR實驗室 工程研究員</li>
</ul>
<p>目前任職於凱鈿行動科技產品設計總監職務。
<p>主要專長項目為多媒體人機互動、3D 擴增實境與概念性產品開發，在公司負責制定產品設計規劃。
<p>題目：Mobile APP開發-創意 理想與現實之間
<p>摘要：介紹KdanMobile在開發上的實務經驗，從一個設計師的角度，從創意到概念收斂，以及與各部門協同合作的開發經驗。
      </div>

      <div class="speaker">
      <a id="rogery"></a>
      <img src="speaker_img/rogery.jpg" alt="Rogery">
      <h2>楊哲豪<br>Rogery</h2>
<p>熱愛音樂創作的工程師，從 Android 1.0 開始研發 KKBOX Android，開發經
   驗至今已四年以上，目前在 KKBOX 擔任 Android Team Leader。
<p>題目：KKBOX 在 Android 實作串流音樂的挑戰
      </div>

      <div class="speaker">
      <a id="peter"></a>
      <img src="speaker_img/peter.jpg" alt="Peter">
      <h2>周壘<br>Peter</h2>
<p>
<ul>
<li>KKBOX New Product Team Senior Engineer</li>
<li>KKBOX Android refactoring lead developer</li>
<li>KKBOX Android toolkit maintainer</li>
<li>KKBOX Android tap game developer</li>
</ul>
<p>題目：用KKBOX Android Toolkit加速android apps開發
<p>摘要：Android apps開發團隊人數增加，怎樣才能讓大家統一規範和開發模式？
actionbar，bitmap OOM等低版本android問題遇到麻煩？
跨activity的背景service要顯示dialog？
google提供的UI元件不夠滿足產品需求？
<p>讓 <a href="https://github.com/KKBOX/android_kktoolkit">KKBOX Android Toolkit</a> 來給你提供解決方案
      </div>

      <div class="speaker">
      <a id="allan914"></a>
      <img src="speaker_img/allan914.jpg" alt="Allan Sun">
      <h2>孫承憲<br>Allan Sun</h2>
<p>住天龍國但是常常被誤以為偷渡客，從野狗大學畢業不過還沒得狂犬病；目前在 KKBOX 擔任不站崗的快樂小警衛。
<p>題目：用KKBOX Android Toolkit加速android apps開發
<p>摘要：Android apps開發團隊人數增加，怎樣才能讓大家統一規範和開發模式？
actionbar，bitmap OOM等低版本android問題遇到麻煩？
跨activity的背景service要顯示dialog？
google提供的UI元件不夠滿足產品需求？
<p>讓 <a href="https://github.com/KKBOX/android_kktoolkit">KKBOX Android Toolkit</a> 來給你提供解決方案
      </div>

      <div class="speaker">
      <a id="monkeypotion"></a>
      <img src="speaker_img/monkeypotion.jpg" alt="Monkey Potion">
      <h2> 鄭暐橋/半路<br>Monkey Potion</h2>
<p>一半的腦袋是理性邏輯的工程師，另一半是感性的文字寫作者；一半的靈魂是藝術工作者，另一半是商人。
在找到工作之前，是個獨立遊戲開發者，曾參與製作的遊戲App包括《邦妮早午餐》系列和《勾玉忍者》，並著有《半路叛逃》一書。
<p>題目：遊戲App開發營運實務：那些成功者沒說的事
<p>摘要：這世界往往是成功者說了算，但如果你剛好有那麼一點反骨，請來聽聽「不成功者」如何在遊戲App獨立開發這條路上，於理想與現實的之間擺盪，奮力掙扎的真實故事。
      </div>

      <div class="speaker">
      <a id="zonble"></a>
      <img src="speaker_img/zonble.jpg" alt="Zonble">
      <h2>楊維中<br>zonble</h2>
<p>網路代號 zonble。Mac OS X 應用程式開發經驗八年、iOS 應用程式開發經驗五年，一個身上有 Objective-C 程式碼刺青的軟體工程師。
<p>曾參與 OpenVanilla、Yahoo! 輸入法、嘸蝦米輸入法 X1、教育部閩南語漢字輸入法等軟體開發專案，目前任職於 KKBOX，負責 Mac OS X 與 iOS 平台各項產品開發。
<p>題目：為視障朋友打造行動應用
<p>摘要：觸控介面以及語音合成（TTS）技術的普及，現在的智慧型手機與平板電腦，可說是自電腦問世以來，對視障朋友最為方便的資訊應用工具。然而，要讓視障朋友可以方便地使用各項服務，除了作業系統本身所提供的能力外，更需要的是所有應用程式開發者對於無障礙議題的關心與努力。
<p>本講題以 iOS 平台為例，說明視障朋友如何操作行動裝置，開發者如何在應用程式中、甚至是複雜操作介面中加入無障礙支援，以及其他需要注意之處。
      </div>

      <div class="speaker">
      <a id="Olli"></a>
      <img src="speaker_img/Olli.jpg" alt="Olli">
      <h2>Olli</h2>
<p>獨立開發者，Ollix 創辦人，只做只自已想要的 App，夢想是要和老婆帶兩台小折去環遊世界。<a href="http://about.me/olliwang">Olli Wang</a>
<p>題目：為了環遊世界而誕生的世界迷霧
<p>議程大綱：
<li>Ollix團隊介紹</li>
<li>世界迷霧的發想綠起</li>
<li>世界迷霧的設計過程</li>
<li>世界迷霧上架一年來的心得分享題目</li>
      </div>

      <div class="speaker">
      <a id="Markku Lepisto"></a>
      <img src="speaker_img/MarkkuLepisto.jpg" alt="MarkkuLepisto">
      <h2>Markku Lepisto</h2>
<p>Speaker: Markku Lepisto, Technology Evangelist, Amazon Web Services
<p>Bio: "Markku is the APAC Technology Evangelist at Amazon Web Services. He has been in the IT industry for 14 years, and has held various technical and management positions, covering R&D, technical support and architecture. For the past couple of years, Markku was responsible for the cloud computing architecture and technology transformation of Nokia Siemens Networks' global business units. Markku has worked out of Finland, China and Singapore."
<p>Title: Rethinking the Mobile Universe with Amazon Web Services
<p>Synopsis: Learn how you can develop and run a multi-tiered Mobile App without a single server, leveraging the power of Amazon Web Services.
      </div>

      <div class="speaker">
      <a id="Joe Ziegler"></a>
      <img src="speaker_img/JoeZiegler.jpg" alt="JoeZiegler">
      <h2>Joe Ziegler</h2>
<p>Speaker: Joe Ziegler, Start-Up Business Development Manager, Amazon Web Services
<p>Bio: “Joe works across Asia Pacific as the AWS Start-Up Business Development Manager, enabling the ecosystem and working with amazing start-up companies. Originally from Texas, he began his career in Silicon Valley. In 1995, he worked on some of the first e-commerce applications at Netscape, and worked at NetGravity during the time of its IPO, as a technical executive responsible for the company IP, and managing engineering groups. After that, Joe built several startups from the ground up as the Director of Technical Services in his recent venture, Iris Data Services, which was listed as one of the “Forbes 500 Fastest Growing Companies in the US”. Joe has lived on five continents and has studied Mandarin Chinese, Japanese and Korean.”
<p>Title: Hands-on: Mobile Push Notifications to Android, iOS and Kindle Fire with AWS
<p>Synopsis: Push notifications are alerts you can send to users even when they are not actively using your app. Join us to see a Live Demo of how you can easily send push notifications to Apple, Google and Amazon devices through a simple, Unified API, using Amazon Simple Notification Service.
      </div>

      <div class="speaker">
      <a id="Neil Lee"></a>
      <img src="speaker_img/NeilLee.jpg" alt="NeilLee">
      <h2>Neil Lee</h2>
<p>Hiiir 時間軸科技副總經理
<p>經歷簡述：專長於技術整合及三網架構，擅於整合市場需求提供最佳技術解決方案，目前擔任Hiiir時間軸科技市場技術總監，帶領30多位網站及行動技術團隊提供源源不絕的技術整合創意，同時也為國內企業行動技術顧問、業界講師及大專院校講師。
<p>題目：協助開發者創造成功 APP 的營運體驗 - APP 點圈新經濟
<p>摘要：APP 開發除了好創意外每個開發團隊都會遇到，如果有一天我的APP爆紅了，那之後怎麼辦？
<p>一個好的 APP 要顧住流量、掌握營收、創造體驗，如何在團隊規模不足的情況下找到平衡點。善用各種第三方平台和工具減少開發時間，將心力專注於創會是其中的訣竅！從APP連結擴散到整個生態圈，創造出APP 點圈新經濟。
      </div>

      <div class="speaker">
      <a id="PTT"></a>
      <img src="speaker_img/ptt.jpg" alt="PTT">
      <h2>杜奕瑾<br>PTT</h2>
<p>經歷簡述
<ul>
<li>台大批踢踢創辦人</li>
<li>蕃薯藤網托邦創辦人</li>
<li>美國國家衛生研究院程式組長</li>
<li>美國微軟研究院網際網路服務研究所資深研究開發員</li>
<li>現任中文微軟Bing行動軟體開發組 Senior Development Lead</li>
</ul>
<p>題目：Mobile Development, Bing Services and Big Data
<p>摘要：行動裝置, 雲端服務與巨量資料是當前資訊科技發展的重點。我們邀請到台大批踢踢創辦人，現任中文微軟Bing行動軟體開發組 Senior Development Lead 杜奕瑾先生(PTT)回來台灣。從微軟的角度，介紹當前的軟體巨擘如何看待這樣的趨勢發展，並且投入各項Bing技術服務與應用的規劃與研發。 同時杜奕瑾也希望招募更多新血投入研發團隊。
      </div>

      <div class="speaker">
      <a id="Moli"></a>
      <img src="speaker_img/moli.jpg" alt="Moli">
      <h2>王森<br>Moli</h2>
<p>經歷簡述：目前為微軟全球最有價值 Kinect專家(Kinect MVP)。 曾任Sun教育訓練中心經理、微軟資深經理。撰寫過多本深入 Java 程式設計與 Java 手機開發的書籍。目前從事行動開發與體感互動開發顧問工作，並積極從事校園中的教育訓練。閒暇之餘，喜歡研究 Intel PerC、Leap Motion 的應用與 Raspberry Pi、Arduino整合開發，企盼找出未來人機互動的新形態。
<p>題目：搶拿Lumia 1020 - Windows Phone開發入門與應用 : 以Kinect體感裝置與 Windows Phone整合為例
<p>摘要：搭配 “開發達人來挑戰 MOPCON 特別版” 活動, 本講次邀請Moli 介紹Windows Phone 開發的入門以及Kinect 整合Windows Phone應用實例。有興趣的學員可以在本講次中了解Windows Phone的開發技術，開發Windows Phone App 參加現場活動。有機會贏得4100萬像素的Lumia 1020 手機。
      </div>

      <div class="speaker">
      <img src="speaker_img/question_mark.jpg" alt="Who is Next?">
<p><br>還有其他講者將會陸續登場，敬請期待。
      </div>

      </div>
    </div>
  </div>
  <?php include_once("footer.html");?>

  <script src="scripts/masonry.pkgd.min.js"></script>
  <script>
  $(function(){
      var container = document.getElementById('speakerpool');
      //$('#speakerpool').masonry({itemSelector: '.speaker'});
      $('#speakerpool').masonry({itemSelector: '.speaker'});

      // xxx re-layout again after page load complete
      // 用來避免發生.masonry() 算錯物件高度的詭異狀況
      setTimeout(function() {
          $('#speakerpool').masonry();
      }, 450);
  });
  </script>
  </body>
</html>
