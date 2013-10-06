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
          <h1>議程簡表</h1>
        </div>
      </div>

      <div class="row">
        <div class="span6">
    <h3> 10/26 第一日 </h3>
    <table class="schd_table">
      <tr>
        <td><div class='time_block'>8:30</div></td>
        <td>
          <div class='session_block'>
            <p>大會報到
            <p>video playback (議程預覽 + 工商服務 + 早餐時間)
          </div>
        </td>
      </tr>
      <tr>
        <td><div class='time_block'>9:05</div></td>
        <td><div class='session_block'>致詞 + 議程導覽</div></td></tr>
      <tr>
        <td><div class='time_block'>9:25</div></td>
        <td><div class='session_block'>Keynote 三廳聯播: Rethinking the Mobile Universe with Amazon Web Services (Markku Lepisto) - Amazon Web Service</div></td></tr>
      <tr>
        <td><div class='time_block'>10:15</div></td>
        <td><div class='break_block'>休息</div></td></tr>
      <tr>
        <td><div class='time_block'>10:30</div></td>
        <td>
          <div class='session_block'>
            <p>一廳 (議程 A): KKBOX 在 Android 實作串流音樂的挑戰 (Rogery)
            <p>二廳 (議程 B): 遊戲 App 開發營運實務：那些成功者沒說的事 (半路)
            <p>三廳 (議程 C): 議題確認中 - Nokia/Microsoft
          </div>
        </td>
      </tr>
      <tr>
        <td><div class='time_block'>11:10</div></td>
        <td><div class='break_block'>休息</div></td></tr>
      <tr>
        <td><div class='time_block'>11:20</div></td>
        <td>
          <div class='session_block'>
            <p>一廳 (議程 A): 深入淺出桌椅組裝器材 (Shaka)
            <p>二廳 (議程 B): 我已經不能說自己是程式界的菜鳥了 (魏巍)
            <p>三廳 (議程 C): 議題確認中 - Nokia/Microsoft
          </div>
        </td>
      </tr>
      <tr>
        <td><div class='time_block'>12:00</div></td>
        <td><div class='break_block'>午餐，小聚會，現場展示</div></td></tr>
      <tr>
        <td><div class='time_block'>13:20</div></td>
        <td><div class='session_block'>Keynote 三廳聯播: Open is the new norm (Sega)</div></td></tr>
      <tr>
        <td><div class='time_block'>14:10</div></td>
        <td><div class='break_block'>休息</div></td></tr>
      <tr>
        <td><div class='time_block'>14:20</div></td>
        <td>
          <div class='session_block'>
            <p>一廳 (議程 A): 利用 CloudBox 開發跨平台行動遊戲 (Cloudhsu)
            <p>二廳 (議程 B): App 與改變世界的力量 (KNY)
            <p>三廳 (議程 C): iOS 上的文字描繪基礎 (yllan)
          </div>
        </td>
      </tr>
      <tr>
        <td><div class='time_block'>15:00</div></td>
        <td><div class='break_block'>休息</div></td></tr>
      <tr>
        <td><div class='time_block'>15:20</div></td>
        <td>
          <div class='session_block'>
            <p>一廳 (議程 A): 用 KKBOX Android Toolkit 加速 Android Apps 開發 (Peter/Allan)
            <p>二廳 (議程 B): 軟硬整合設計 (Scott)
            <p>三廳 (議程 C): RubyMotion: Use It & Hack It (Joseph)
          </div>
        </td>
      </tr>
      <tr>
        <td><div class='time_block'>16:00</div></td>
        <td><div class='break_block'>休息</div></td></tr>
      <tr>
        <td><div class='time_block'>16:10</div></td>
        <td>
          <div class='session_block'>
            <p>一廳 (議程 A): 讓你 App 優雅的 crash 三部曲 (hokila)
            <p>二廳 (議程 B): 議題確認中 (Neil Lee) - Hiiir
            <p>三廳 (議程 C): 從手機程式到網頁開發 (Walkingice)
          </div>
        </td>
      </tr>
      <tr>
        <td><div class='time_block'>17:00</div></td>
        <td><div class='session_block'>公告/散場</div></td></tr>
    </table>
        </div>

        <div class="span6">
    <h3> 10/27 第二日 </h3>
    <table class="schd_table">
      <tr>
        <td><div class='time_block'>8:30</div></td>
        <td>
          <div class='session_block'>
            <p>大會報到
            <p>video playback (議程預覽 + 工商服務 + 早餐時間)
          </div>
        </td>
      </tr>
      <tr>
        <td><div class='time_block'>9:00</div></td>
        <td><div class='session_block'>Keynote 三廳聯播: 議題確認中 (Ptt, PTT創辦人) - Microsoft</div></td></tr>
      <tr>
        <td><div class='time_block'>9:50</div></td>
        <td><div class='break_block'>休息</div></td></tr>
      <tr>
        <td><div class='time_block'>10:00</div></td>
        <td>
          <div class='session_block'>
            <p>一廳 (議程 A): Fingers Party: 從一代至二代經驗分享 (炎羅)
            <p>二廳 (議程 B): Industry Hacking: 聊，傳統產業健身器材，玩，軟硬體整合 (Ernest Chiang)
            <p>三廳 (議程 C): 在行動裝置的即時影像辨識開發經驗分享: 以 FindDog.net 尋狗網為例 (Jamesyeh)
          </div>
        </td>
      </tr>
      <tr>
        <td><div class='time_block'>10:40</div></td>
        <td><div class='break_block'>休息</div></td></tr>
      <tr>
        <td><div class='time_block'>10:50</div></td>
        <td>
          <div class='session_block'>
            <p>一廳 (議程 A): Mobile Web Application 甘苦談 (othree)
            <p>二廳 (議程 B): 為了環遊世界而誕生的世界迷霧 (Olli)
            <p>三廳 (議程 C): Hands-on: Mobile Push Notifications to Android, iOS and Kindle Fire with AWS (Joe Ziegler) - Amazon Web Service
          </div>
        </td>
      </tr>
      <tr>
        <td><div class='time_block'>11:30</div></td>
        <td>
          <div class='session_block'>
            <p>一廳 (議程 A): 為視障朋友打造行動應用 (zonble)
            <p>二廳 (議程 B): 多雲及混合雲管理平台的開發實踐 - 數位無限軟體 總經理 陳文裕
            <p>三廳 (議程 C): Hands-on: Mobile Push Notifications to Android, iOS and Kindle Fire with AWS (Joe Ziegler) - Amazon Web Service
          </div>
        </td>
      </tr>
      <tr>
        <td><div class='time_block'>12:20</div></td>
        <td><div class='break_block'>午餐，小聚會，現場展示</div></td></tr>
      <tr>
        <td><div class='time_block'>13:30</div></td>
        <td><div class='session_block'>Keynote 三廳聯播: Mobile App 開發: 創意 理想與現實之間 - 凱鈿行動科技</div></td></tr>
      <tr>
        <td><div class='time_block'>14:20</div></td>
        <td><div class='break_block'>休息</div></td></tr>
      <tr>
        <td><div class='time_block'>14:30</div></td>
        <td>
          <div class='session_block'>
            <p>一廳 (議程 A): The web backend of android mobile (TonyQ)
            <p>二廳 (議程 B): App 急速視覺 UX 回饋應用: 以 AR 應用為例 (Anistar)
            <p>三廳 (議程 C): AllJoyn (awaw)
          </div>
        </td>
      </tr>
      <tr>
        <td><div class='time_block'>15:10</div></td>
        <td><div class='break_block'>休息</div></td></tr>
      <tr>
        <td><div class='time_block'>15:30</div></td>
        <td>
          <div class='session_block'>
            <p>一廳 (議程 A): 挖掘低耗電藍芽的寶藏 (Evan Wu)
            <p>二廳 (議程 B): Apps 製作心得分享 (Nokimi)
            <p>三廳 (議程 C): 有沒有那條線很重要嗎？ (stanely)
          </div>
        </td>
      </tr>
      <tr>
        <td><div class='time_block'>16:10</div></td>
        <td><div class='break_block'>休息</div></td></tr>
      <tr>
        <td><div class='time_block'>16:20</div></td>
        <td><div class='session_block'>Microsoft 抽獎 + Lightening Talk</div></td></tr>
      <tr>
        <td><div class='time_block'>17:30</div></td>
        <td><div class='session_block'>公告/散場</div></td></tr>
    </table>
        </div>
      </div>

    </div>
    <?php include_once("footer.html");?>
  </body>
</html>
