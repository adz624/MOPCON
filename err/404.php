<!-- PHP Wrapper - 404 Not Found -->
<?php
  if ( file_exists(dirname(__FILE__)."/../2012".$_SERVER['REQUEST_URI']) ) {
    // 2012 link exists
    header("HTTP/1.1 302 Redirect");
    header("Location: /2012".$_SERVER['REQUEST_URI']);
  } else {
    // 2012 link not exists
    // echo "URL: http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']."<br>\n";
    // $fixer = "checksuexec ".escapeshellarg($_SERVER['DOCUMENT_ROOT'].$_SERVER['REQUEST_URI']);
    // echo `$fixer`;
  }

  $full_url = "http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
?>
<html lang="zh-TW">
  <head>
    <?php include_once("../2013/header.php");?>
    <style>
    html{
      background-color:white;
    }
    body {
      background-color:white;
      text-align:center;
      color:#444;
    }
    .content {
      text-align:left;
      width:800px;
      margin:3em auto;
             background-color:red;
    }
    h1 {
      font-size:180px;
      line-height:1em;
      margin:0;
    }
    .text {
      margin:1em;
      width:350px;
      text-align:center;
    }
    .text, #mascut {
      float:left;
    }
    .box {
      line-height:1.5em;
      background-color:#eee;
      padding:3px 5px;
      border-radius:8px;
      box-shadow:-3px 3px 3px #bbb inset, 1px -1px 1px #ddd inset;
      text-shadow:1px 1px #fff;
      text-wrap: normal;
      word-wrap:break-word;
    }
    </style>
  </head>
  <body>
    <div class="content">
      <div class="text">
        <h1>404</h1>
        <div class="box">
        <p>找不到您想看的網頁<br><a rel="nofollow" href="<? echo $full_url ?>"><? echo $full_url ?></a>
        <p>要不要到<a href="/"> MOPCON 首頁</a>去看看呢？</p>

        </div>
      </div>
      <img id="mascut" src="/err/mascut.jpg">
    </div>
  </body>
</html>
