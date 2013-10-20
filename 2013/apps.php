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
        <div class="offset1 span9 second well-large">
          <h3>MOPCON Offical App:</h3>
        </div>
        <div class="row span9 second well-large">
          <div class="appList">
            <h3>iOS</h3>
          </div>
          <div class="appList">
            <h3>Android</h3>
          </div>
          <div class="appList">
            <h3>Windows Phone 8</h3>
          </div>
        </div>
      </div>
    </div>

    <?php include_once("footer.html");?>
  </body>
</html>
