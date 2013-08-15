<?php
  $page = "speakers";
  $title = "講者介紹";
  $og_descr = "講者匯集國內知名行動技術開發者，10/26~27兩日議程提供最先進與實務之開發技術饗宴";
  $page_file = $_SERVER['PHP_SELF'];
?>
<html lang="zh-TW" class="">
  <head>
  <?php include_once("header.php");?>
  <script src="scripts/masonry.pkgd.min.js"></script>
  <script>
  $(function(){
      var container = document.getElementById('speakerpool');
      var msnry = new Masonry( container, {
          // options
          itemSelector: '.speaker'
      });
  });
  </script>
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
      <img src="speaker_img/weiwei.jpg" alt="魏蘶">
      <h2>魏蘶</h2>
<p>曾是 DJ、音樂人，出過一張唱片，後來擔任出版社外文主編，曾寫過一本小說與17本德語法語教學書籍。目前獨立開發 iPhone 與
Android 程式與遊戲，上架 19 個App，從企畫、美術、寫程式全部都一手包辦。
<p>題目：<br>我已經不能說自己是程式界的菜鳥了：CORONA SDK 開發跨平台手機遊戲
<ol>
<li>CORONA SDK簡介</li>
<li>製作遊戲心得分享</li>
</ol>
      </div>

      <div class="speaker">
      <img src="speaker_img/question_mark.jpg" alt="Who is Next?">
<p><br>還有其他講者將會陸續登場，敬請期待。
      </div>

      </div>
    </div>
  </div>
  <?php include_once("footer.html");?>
  </body>
</html>
