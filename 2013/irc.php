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
        <div id="irc" class="span10 second well-large">
          <div class="ircframe span9">
            <h3>加入IRC聊天頻道</h3>
            <div style="text-align:center; vertical-align:middle;">
              <iframe src="http://webchat.freenode.net?channels=mopcon&uio=d4" width="570" height="600" style="border: 0;"></iframe>
            </div>
          </div>
          <div class="irclogs">
            <h3>活動實況文字轉播記錄</h3>
          </div>
        </div>
      </div>
    </div>

    <?php include_once("footer.html");?>
  </body>
</html>
