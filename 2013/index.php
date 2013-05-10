<?php
  $page = "home";
?>
<html lang="zh-TW" class="">
  <head>
    <?php include_once("header.php");?>
    <style type="text/css">

    section {
      padding: 100px 0 100px 0;
    }

    #hero-section {
      background-color: #0066CC;
      color: #fff;
    }

    #registeration-section {
      background-color: #E0E0E0;
    }

    .data-cell {
      vertical-align: middle;
    }

    .hero-unit {
      background-color: #0066CC;
    }

    .bottom-band {
      height: 15px;
      background-color: #E6E600;
    }
    </style>
  </head>
  <body data-twttr-rendered="true" data-spy="scroll" data-target=".subnav" data-offset="50">
    <?php include_once("navbar.php");?>
    <section id="hero-section">
      <div class="container">
        <div class="row">
          <div class="span12">
            <div class="hero-unit">
              <h1>I code, I spread, I connect.</h1>
              <p style="margin-top: 20px;">-- <i>MOPCON 2013.</i></p>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section>
      <div class="container">
        <div class="row">
          <div class="span4 data-cell">
            <img src="pic/DSC_3338.JPG" class="img-rounded"/>
          </div>
          <div class="span4 data-cell">
            <p>行動應用近年成為媒體追逐之寵兒，從電子商務、數位內容、商業服務、消費應用無不積極行動相關領域發展。MOPCON 專注於行動軟體開發 / 應用技術之專業研討會，也是南部最大社群研討會，希望藉由軟體技術社群的力量，推動南北業界技術實務經驗交流，關注行動應用趨勢。</p>
          </div>
          <div class="span4 data-cell">
            <img src="pic/DSC_3217.JPG" class="img-rounded"/>
          </div>
        </div>
        <div class="row" style="margin-top: 10px;">
          <div class="span4 data-cell">
            <p>MOPCON 2012 首度於高雄軟體園區舉辦，超過 160 為移動式平台的軟、硬體開發人員與廠商與會，來自全台各地之業界菁英擔任講師，兩日 17 場議程，內容綜觀行動前端開發、雲端服務架構、底層系統與開發工具、服務維運經驗等。100% 受訪與會者對 MOPCON 2012 議程給予滿意以上的評價，更高達 95% 平等為十分滿意。</p>
          </div>
          <div class="span4 data-cell">
            <img src="pic/IMG_8797.JPG" class="img-rounded"/>
          </div>
          <div class="span4 data-cell">
            <p>MOPCON 2013 將以 "I code, I spread, I connect" 作為主要精神意涵，議程將以行動開發技術議程為核心，引申到行動服務營運，更將涵蓋數位內容之行動應用發展。</p>
          </div>
        </div>
        <div class="row">
          <div class="span4 offset4 data-cell">
            <p>本屆活動日期訂於 2013 年 10 月 26 ~ 27 日於高雄國際會議中心 (ICCK) 盛大舉行，請密切關注我們的發展。</p>
          </div>
        </div>
      </div>
    </section>
    <section id="registeration-section">
      <div class="container">
        <div class="span8 offset2">
          <h3 class="text-center">報名資訊</h3>
          <ul class="sessionList unstyled">
            <li><i class="icon-time"></i>&nbsp;&nbsp;時間：2013/10/26-27（六日兩天）</li>
            <li><i class="icon-road"></i>&nbsp;&nbsp;地點：高雄國際會議中心 (ICCK) <i class="icon-map-marker"></i></li>
            <!--
            <li><i class="icon-user"></i>&nbsp;&nbsp;主題：MOPCON 2012議程主軸為「電子票劵」，此議題之應用因近年手機硬體相機、NFC，軟體如雲端服務、QR code等技術發展逐漸成形，預計明年將發酵引發產業中新應用，故MOPCON將針對此主題尋求相關實作經驗的工程人員與廠商來產業上、中、下游進行完整探討與經驗分享</li>
            -->
          </ul>
        </div>
      </div>
    </section>
    <section id="sponsor-section">
      <div class="container">
        <div class="row">
          <div class="span12">
            <legend class="text-center">贊助商</legend>
          </div>
        </div>
        <div class="row">
          <div class="span12">
            <legend class="text-center">特別感謝</legend>
          </div>
        </div>
      </div>
    </section>
    <?php include_once("footer.html");?>
    <div class="bottom-band"></div>
    <script type="text/javascript">
    <!--
    $(document).ready(function() {
    });
    -->
    </script>
  </body>
</html>
