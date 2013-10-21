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
          <h3>MOPCON Offical App:</h3>
          <div class="row span11">
            <div class="span3 ircframe">
              <p>&nbsp;&nbsp;</p>
              <p><img src="img/MOPCON_iOS_QRCode.jpg" alt="iOS App QRCode"></p>
            </div>
            <div class="span3 ircframe">
              <p>Android</p>
            </div>
            <div class="span3 ircframe">
              <p>Windows Phone 8</p>
            </div>
          </div>
        </div>
      </div>
    </div>

    <?php include_once("footer.html");?>
  </body>
</html>
