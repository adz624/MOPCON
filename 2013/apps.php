<?php
  $page = "apps";
  $function['apps'] = "active";
  $title = "Apps";
  $og_descr = "MOPCON Apps";
  $page_file = $_SERVER['PHP_SELF'];
?>
<html lang="zh-TW" class="">
  <head><?php include_once("header.php");?></head>
  <body data-twttr-rendered="true" data-spy="scroll" data-target=".subnav" data-offset="50">
    <?php include_once("navbar.php");?>
    <div class="container" id="all">
      <div class="space"></div>
      <div class="article">
        <div class="offset1 span12 second well-large">
          <div class="row span11">
            <h3>MOPCON Offical Mobile App:</h3>
          </div>
          <div class="row span11">
            <div class="span3 appframe">
              <p><a href="https://itunes.apple.com/tw/app/mopcon/id721411970?l=zh" rel="external" target="_blank">iOS 版下載</a></p>
              <p><img src="img/MOPCON_iOS_QRCode.jpg" alt="iOS App QRCode"></p>
            </div>
            <div class="span3 appframe">
              <p><a href="https://play.google.com/store/apps/details?id=org.mopcon" rel="external" target="_blank">Android 版下載</a></p>
              <p><img src="img/MOPCON_Android_QRCode.jpg" alt="Android App QRCode"></p>
            </div>
            <div class="span3 appframe">
              <p><a href="http://www.windowsphone.com/zh-tw/store/app/mopcon-2013/b2fd04ba-1c3f-425a-87b5-11b31f87ed18" rel="external" target="_blank">Windows Phone 8</a></p>
              <p><img src="img/MOPCON_WP8_QRCode.jpg" alt="Windows Phone 8 App QRCode"></p>
            </div>
          </div>
        </div>
      </div>
    </div>

    <?php include_once("footer.html");?>
  </body>
</html>
