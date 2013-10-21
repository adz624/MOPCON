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
          <div class="row ircframe">
            <div class="span9">
              <h3>加入IRC聊天頻道</h3>
              <p>MOPCON 在 Freenote 註冊了一個 #mopcon 文字頻道，歡迎大家一起來哈拉與線上轉播。</p>
              <p><a class="btn btn-success btn-large" rel="external" href="http://webchat.freenode.net?channels=mopcon&uio=d4">加入頻道討論</a></p>
            </div>
          </div>
          <div class="row">
            <div class="row span9">
              <h3>活動實況文字轉播記錄</h3>
              <p>建置中</p>
            </div>
          </div>
        </div>
      </div>
    </div>

    <?php include_once("footer.html");?>
  </body>
</html>
