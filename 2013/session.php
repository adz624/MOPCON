<?php
  $page = "session";
  $function['session'] = "active";
  $title = "議程";
  $og_descr = "MOPCON 的議程";
  $page_file = $_SERVER['PHP_SELF'];
?>
<html lang="zh-TW" class="">
  <head>
  <?php include_once("header.php");?>
<!--link href="//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.2/css/bootstrap-combined.no-icons.min.css" rel="stylesheet"-->
<link href="//netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css" rel="stylesheet">
<!--[if IE 7]>
  <link rel="stylesheet" href="//netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome-ie7.min.css">
  <![endif]-->
  <style>
    #all {
        padding: 1em 2em;
    }
    .session_block {
        padding:0.5em 1em;
        border-radius:5px;
        background-color: #eee;
    }
    .break_block {
        padding:0.5em 1em;
        color:#666;
    }
    .time_block {
        padding:0.5em 1em 0.5em 0;
        text-align:right;
    }
    .schd_table {
        width:100%;
        border-spacing : 3px 10px;
        border-collapse: separate;
    }
    .schd_table td{
        vertical-align:top;
    }
    .red {color:#f33;}

  </style>
  </head>
  <body data-twttr-rendered="true" data-spy="scroll" data-target=".subnav" data-offset="50">
    <?php include_once("navbar.php");?>
    <div class="container" id="all">

      <div class="row">
        <div class="span12">
          <h1>議程表</h1>
        </div>
      </div>

      <div class="row">
        <div class="span6">
    <h3> 10/26 第一日 </h3>
    <table class="schd_table">
      <tr>
        <td><div class='time_block'>8:30</div></td>
        <td><div class='session_block'>大會報到</div></td>
        <td><div class='session_block'>video playback (議程預覽 + 工商服務 + 早餐時間)</div>
      </tr>
      <tr>
        <td><div class='time_block'>9:05</div></td>
        <td><div class='session_block'>致詞 + 議程導覽</div></td></tr>
      <tr>
        <td><div class='time_block'>9:25</div></td>
        <td><div class='break_block'>Keynote 三廳聯播: AWS</div></td></tr>
      <tr>
        <td><div class='time_block'>10:30</div></td>
        <td>
          <div class='session_block'>
            <p>一廳 (議程 A): KKBOX 在 Android 實作串流音樂的挑戰
            <p>二廳 (議程 B): 遊戲 App 開發營運實務：那些成功者沒說的事
            <p>三廳 (議程 C): Nokia-MS hand-on
          </div>
        </td>
      </tr>
      <tr>
        <td><div class='time_block'>11:20</div></td>
        <td><div class='break_block'>午餐，小聚會，現場展示</div></td></tr>
      <tr>
        <td><div class='time_block'>13:30</div></td>
        <td>
          <div class='session_block'>
            <p><i class="icon-windows red"></i> 一廳 (Keynote 1)
            <p>二廳 (Keynote 2)<p>三廳 (議程 C)
          </div>
        </td></tr>
      <tr>
        <td><div class='time_block'>14:40</div></td>
        <td><div class='break_block'>休息</div></td></tr>
      <tr>
        <td><div class='time_block'>15:10</div></td>
        <td><div class='session_block'><p>議程(D*2)<p>議程+座談(E*2)</div></td></tr>
      <tr>
        <td><div class='time_block'>16:40</div></td>
        <td><div class='session_block'>公告/散場</div></td></tr>
    </table>
        </div>

        <div class="span6">
    <h3> 10/27 第二日 </h3>
    <table class="schd_table">
      <tr>
        <td><div class='time_block'>8:00</div></td>
        <td><div class='session_block'>大會報到</div></td></tr>
      <tr>
        <td><div class='time_block'>8:30</div></td>
        <td><div class='session_block'>video playback (議程預覽 + 工商服務 + 早餐時間)</div></td></tr>
      <tr>
        <td><div class='time_block'>9:00</div></td>
        <td><div class='session_block'>致詞 + Keynote(1) + 議程導覽 (三廳聯播)</div></td></tr>
      <tr>
        <td><div class='time_block'>10:00</div></td>
        <td><div class='break_block'>休息</div></td></tr>
      <tr>
        <td><div class='time_block'>10:20</div></td>
        <td><div class='session_block'><p>一廳 (議程 A)<p>二廳 (議程 B)</div></td></tr>
      <tr>
        <td><div class='time_block'>11:20</div></td>
        <td><div class='break_block'>午餐，小聚會，現場展示</div></td></tr>
      <tr>
        <td><div class='time_block'>13:30</div></td>
        <td><div class='session_block'><p>一廳 (Keynote 1)<p>二廳 (Keynote 2)<p>三廳 (議程 C)</div></td></tr>
      <tr>
        <td><div class='time_block'>14:40</div></td>
        <td><div class='break_block'>休息</div></td></tr>
      <tr>
        <td><div class='time_block'>15:10</div></td>
        <td><div class='session_block'><p>議程(D*2)<p>議程+座談(E*2)</div></td></tr>
      <tr>
        <td><div class='time_block'>16:40</div></td>
        <td><div class='session_block'>公告/散場</div></td></tr>
    </table>
        </div>
      </div>

    </div>
    <?php include_once("footer.html");?>
  </body>
</html>
