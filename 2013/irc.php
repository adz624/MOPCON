<?php
  $page = "irc";
  $function['irc'] = "active";
  $title = "IRC";
  $og_descr = "MOPCON IRC Channel";
  $page_file = $_SERVER['PHP_SELF'];
?>
<html lang="zh-TW" class="">
  <head><?php include_once("header.php");?></head>
  <body data-twttr-rendered="true" data-spy="scroll" data-target=".subnav" data-offset="50">
    <?php include_once("navbar.php");?>
    <div class="container" id="all">
      <div class="space"></div>
      <div class="article">
        <div id="irc">
          <div class="offset1 span9 second well-large">
            <h1>加入聊天</h1>
            <div style="text-align:center; vertical-align:middle;">
              <iframe src="http://webchat.freenode.net?channels=ubuntu-tw&uio=d4" width="900" height="600" style="border: 0;"></iframe>
            </div>
          </div>
        </div>
      </div>
    </div>

    <?php include_once("footer.html");?>
  </body>
</html>
