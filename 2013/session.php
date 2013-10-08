<?php
  $page = "session";
  $function['session'] = "active";
  $title = "議程";
  $og_descr = "MOPCON 的議程";
  $page_file = $_SERVER['PHP_SELF'];
  
  $session_json = file_get_contents('http://mopcon.org/2013/api/session.php');
  $session_object = json_decode($session_json);
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
        <td><div class='session_block'>
		
		<?php
			echo $session_object->sessions[0]->loc . " : " .  $session_object->sessions[0]->name;
		?>
		</div></td></tr>
      <tr>
        <td><div class='time_block'>9:25</div></td>
        <td><div class='session_block'>
		<?php
			echo $session_object->sessions[1]->loc . " : " .  $session_object->sessions[1]->name;
		?>
		</div></td></tr>
      <tr>
        <td><div class='time_block'>10:15</div></td>
        <td><div class='break_block'>休息</div></td></tr>
      <tr>
        <td><div class='time_block'>10:30</div></td>
        <td>
          <div class='session_block'>
            <p><?php echo $session_object->sessions[2]->loc . " : " .  $session_object->sessions[2]->name; ?>
            <p><?php echo $session_object->sessions[3]->loc . " : " .  $session_object->sessions[3]->name; ?>
            <p><?php echo $session_object->sessions[4]->loc . " : " .  $session_object->sessions[4]->name; ?>
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
            <p><?php echo $session_object->sessions[5]->loc . " : " .  $session_object->sessions[5]->name; ?>
            <p><?php echo $session_object->sessions[6]->loc . " : " .  $session_object->sessions[6]->name; ?>
            <p><?php echo $session_object->sessions[7]->loc . " : " .  $session_object->sessions[7]->name; ?>
          </div>
        </td>
      </tr>
      <tr>
        <td><div class='time_block'>12:00</div></td>
        <td><div class='break_block'>午餐，小聚會，現場展示</div></td></tr>
      <tr>
        <td><div class='time_block'>13:20</div></td>
        <td><div class='session_block'><?php echo $session_object->sessions[8]->loc . " : " .  $session_object->sessions[8]->name; ?></div></td></tr>
      <tr>
        <td><div class='time_block'>14:10</div></td>
        <td><div class='break_block'>休息</div></td></tr>
      <tr>
        <td><div class='time_block'>14:20</div></td>
        <td>
          <div class='session_block'>
            <p><?php echo $session_object->sessions[9]->loc . " : " .  $session_object->sessions[9]->name; ?>
            <p><?php echo $session_object->sessions[10]->loc . " : " .  $session_object->sessions[10]->name; ?>
            <p><?php echo $session_object->sessions[11]->loc . " : " .  $session_object->sessions[11]->name; ?>
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
            <p><?php echo $session_object->sessions[12]->loc . " : " .  $session_object->sessions[12]->name; ?>
            <p><?php echo $session_object->sessions[13]->loc . " : " .  $session_object->sessions[13]->name; ?>
            <p><?php echo $session_object->sessions[14]->loc . " : " .  $session_object->sessions[14]->name; ?>
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
            <p><?php echo $session_object->sessions[15]->loc . " : " .  $session_object->sessions[15]->name; ?>
            <p><?php echo $session_object->sessions[16]->loc . " : " .  $session_object->sessions[16]->name; ?>
            <p><?php echo $session_object->sessions[17]->loc . " : " .  $session_object->sessions[17]->name; ?>
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
        <td><div class='session_block'>
			<?php echo $session_object->sessions[18]->loc . " : " .  $session_object->sessions[18]->name; ?>
			</div>
		</td>
	  </tr>
      <tr>
        <td><div class='time_block'>9:50</div></td>
        <td><div class='break_block'>休息</div></td></tr>
      <tr>
        <td><div class='time_block'>10:00</div></td>
        <td>
          <div class='session_block'>
            <p><?php echo $session_object->sessions[19]->loc . " : " .  $session_object->sessions[19]->name; ?>
            <p><?php echo $session_object->sessions[20]->loc . " : " .  $session_object->sessions[20]->name; ?>
            <p><?php echo $session_object->sessions[21]->loc . " : " .  $session_object->sessions[21]->name; ?>
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
            <p><?php echo $session_object->sessions[22]->loc . " : " .  $session_object->sessions[22]->name; ?>
            <p><?php echo $session_object->sessions[23]->loc . " : " .  $session_object->sessions[23]->name; ?>
            <p><?php echo $session_object->sessions[24]->loc . " : " .  $session_object->sessions[24]->name; ?>
          </div>
        </td>
      </tr>
      <tr>
        <td><div class='time_block'>11:30</div></td>
        <td>
          <div class='session_block'>
            <p><?php echo $session_object->sessions[25]->loc . " : " .  $session_object->sessions[25]->name; ?>
            <p><?php echo $session_object->sessions[26]->loc . " : " .  $session_object->sessions[26]->name; ?>
            <p><?php echo $session_object->sessions[27]->loc . " : " .  $session_object->sessions[27]->name; ?>
          </div>
        </td>
      </tr>
      <tr>
        <td><div class='time_block'>12:20</div></td>
        <td><div class='break_block'>午餐，小聚會，現場展示</div></td></tr>
      <tr>
        <td><div class='time_block'>13:30</div></td>
        <td><div class='session_block'><?php echo $session_object->sessions[28]->loc . " : " .  $session_object->sessions[28]->name; ?></div></td></tr>
      <tr>
        <td><div class='time_block'>14:20</div></td>
        <td><div class='break_block'>休息</div></td></tr>
      <tr>
        <td><div class='time_block'>14:30</div></td>
        <td>
          <div class='session_block'>
            <p><?php echo $session_object->sessions[29]->loc . " : " .  $session_object->sessions[29]->name; ?>
            <p><?php echo $session_object->sessions[30]->loc . " : " .  $session_object->sessions[30]->name; ?>
            <p><?php echo $session_object->sessions[31]->loc . " : " .  $session_object->sessions[31]->name; ?>
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
            <p><?php echo $session_object->sessions[32]->loc . " : " .  $session_object->sessions[32]->name; ?>
            <p><?php echo $session_object->sessions[33]->loc . " : " .  $session_object->sessions[33]->name; ?>
            <p><?php echo $session_object->sessions[34]->loc . " : " .  $session_object->sessions[34]->name; ?>
          </div>
        </td>
      </tr>
      <tr>
        <td><div class='time_block'>16:10</div></td>
        <td><div class='break_block'>休息</div></td></tr>
      <tr>
        <td><div class='time_block'>16:20</div></td>
        <td><div class='session_block'>
			<?php echo $session_object->sessions[35]->loc . " : " .  $session_object->sessions[35]->name; ?>
			</div>
		</td>
	  </tr>
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
