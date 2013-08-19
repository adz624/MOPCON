<?php
  $page = "home";
?>
<html lang="zh-TW" class="">
  <head>
    <?php include_once("header.php"); ?>
    <link rel="stylesheet" type="text/css" href="css/shareme.css"/>
  </head>
  <body data-twttr-rendered="true" data-spy="scroll" data-target=".subnav" data-offset="50">
    <?php include_once("navbar_en.php"); ?>
    <div class="slogon">
      <img src="img/MOPCON_2013Web_index.jpg"/>
    </div>
    <div class="container" id="all" style="padding: 10px;">
        
        <div class="row">
          <div class="span4 data-cell">
            <img src="pic/index/370x245/DSC_3338.jpg" class="img-rounded"/>
          </div>
          <div class="span4 data-cell">
            <p>Recently, mobile applications have been put under the spot light. E-commerce, digital content, business service, consumer applications...are all expanding their reach to mobile market. MOPCON (Mobile Open Platform Conference) focuses on the development and operation of mobile applications. And is also the largest conference driven by software community in southern Taiwan.
          </div>
          <div class="span4 data-cell">
            <img src="pic/index/370x245/IMG_8797.jpg" class="img-rounded"/>
          </div>
        </div>
        <div class="row" style="margin-top: 10px;">
          <div class="span4 data-cell">
            <p>MOPCON was first held at Kaohsiung Software Technology Park, 2012. More the 160 mobile platform hardware / software developers joined this event. Topic includes mobile front end development, cloud service architecture, development tool, actual operation experience, and more.
          </div>
          <div class="span4 data-cell">
            <img src="pic/index/370x245/DSC_3217.jpg" class="img-rounded"/>
          </div>
          <div class="span4 data-cell">
            <p>Slogan for MOPCON 2013 is "I code, I spread, I connect", the core sessiones will be mainly about mobile development, but will also extend to mobile service operation and digital content in mobile market.
          </div>
        </div>
        <div class="row">
          <div class="span4 offset4 data-cell">
            <p>MOPCON 2013 will be held at International Convention Center Kaohsiung, on 26 to 27 Oct. 2013. Please follow us for latest info.
          </div>
        </div>
    <div class="row">
      <div style="float:right;">
      <p><h3>Follow us</h3></p>
      <? include("./share.php"); ?>
      </div>
      <div style="clear:both;"></div>
    </div>
    </div>
    <?php include_once("footer.html"); ?>
    <script type="text/javascript" src="http://cdn.jsdelivr.net/sharrre/1.3.4/jquery.sharrre-1.3.4.min.js"></script>
    <script type="text/javascript" src="scripts/shareme.js"></script>
  </body>
</html>
