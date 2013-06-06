<!-- PHP Wrapper - 404 Not Found -->
<?php
  if ( file_exists(dirname(__FILE__)."/../2012".$_SERVER['REQUEST_URI']) ) {
    // 2012 link exists
    header("HTTP/1.1 302 Redirect");
    header("Location: /2013".$_SERVER['REQUEST_URI']);
  } else {
    // 2012 link not exists
    // echo "URL: http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']."<br>\n";
    // $fixer = "checksuexec ".escapeshellarg($_SERVER['DOCUMENT_ROOT'].$_SERVER['REQUEST_URI']);
    // echo `$fixer`;
  }
?>
<html lang="zh-TW">
  <head>
    <?php include_once("../2013/header.php");?>
  </head>
  <body bgcolor=white>
    <h1>Uh-Oh! Huston, We got problem!</h1>

    別說<a href="http://mopcon.org">這個</a>了，你看過以下失蹤兒童嗎？
    <hr>

    <center>
      <iframe src="http://childnotfound.tw/404" width="650" height="500" marginwidth="0" #marginheight="0" scrolling="no" frameborder="0" align="center"></iframe>
      <br>
      <a href="http://mopcon.org">返回首頁</a>
    </center>

  </body>
</html>
