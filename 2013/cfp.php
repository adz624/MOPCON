<?php
  $page = "sponsor";
?>
<html lang="zh-TW" class="">
  <head>
  <?php include_once("header.php");?>
  <style>
    #all {
        padding: 1em 2em;
    }
    .jumbotron {
      margin: 80px 0;
      text-align: center;
    }
    .jumbotron h1 {
      font-size: 70px;
      line-height: 1;
    }
    .jumbotron .lead {
      font-size: 24px;
      line-height: 1.25;
    }
  </style>
  </head>
  <body data-twttr-rendered="true" data-spy="scroll" data-target=".subnav" data-offset="50">
    <?php include_once("navbar.php");?>
    <div class="container" id="all">
      <div class="jumbotron">
        <h1>徵求演講，Call For Paper！</h1>
        <p class="lead">MOPCON 2013  將於十月底盛大舉辦，歡迎您前來與我們分享各種心得，看法，與經驗。</p>
      </div>
      <hr>

      <div class="row-fluid well-large">
        <div class="span6">
        <div class="well">
          <p>
          每個議程的長度約為 40 分鐘 (包括問答時間)。若您想到 MOPCON 2013 分享您的技術、
          經驗或心得，請在 2013 年 9 月 15 日前備齊下列資訊，前往 <a href="http://registrano.com/events/MOPCON2013-cfp">http://registrano.com/events/MOPCON2013-cfp</a> 投稿：
          <ol>
            <li>姓名、暱稱或網路 ID</li>
            <li>聯絡方式（電子郵件、行動電話等）</li>
            <li>講題</li>
            <li>100 字以內的摘要（中英文皆可）</li>
            <li>100 字以內的簡要自我介紹</li>
          </ol>
          <p>MOPCON 議程委員會將會在 2013 年 9 月 28 日前通知您稿件是否入選、以及安排的時段。
        </div>
        </div>

        <div class="span6">
          <p>MOPCON 2013  邀請您針對下列三個主題發表演說
          <ul>
            <li>行動應用營運具體案例</li>
            <li>行動應用開發</li>
            <li>數位內容</li>
          </ul>
          <p>並且別忘了除此三個主題以外，我們也歡迎各種環繞於行動應用發展的演說主題，諸如穿戴式技術和基於 HTML5 的可攜式跨裝置應用程式。
          <p>細節請參考<a href="MOPCON-CallForPaper.pdf">行動科技應用開發者年會演講徵求書</a>
        </div>
      </div>

    </div>
    <?php include_once("footer.html");?>
  </body>
</html>
