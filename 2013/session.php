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
  <!--<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>-->
  <link rel="stylesheet" href="css/colorbox.css" />
  <script src="scripts/jquery.colorbox.js"></script>
  <script src="scripts/lightbox.js"></script>
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
		  <p>致詞 ＋ 議程導覽
		</div></td></tr>
      <tr>
        <td><div class='time_block'>9:25</div></td>
        <td>
		  <div class='session_block'>
			<p class='inline' href="#inline_content0"><?php echo $session_object->sessions[0]->loc . "<br>" .  $session_object->sessions[0]->name . "<br>" . $session_object->sessions[0]->speaker; ?></p>
		  </div>
		</td>
	  </tr>
      <tr>
        <td><div class='time_block'>10:15</div></td>
        <td><div class='break_block'>休息</div></td></tr>
      <tr>
        <td><div class='time_block'>10:30</div></td>
        <td>
          <div class='session_block'>
            <?php
				for($i=1 ; $i<4 ; $i++)
				{
					echo "<p class='inline' href='#inline_content".$i."'>". $session_object->sessions[$i]->loc . "<br>" .  $session_object->sessions[$i]->name. "<br>" . $session_object->sessions[$i]->speaker . "</p><br>";
				}
			?>
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
            <?php
				for($i=4 ; $i<7 ; $i++)
				{
					echo "<p class='inline' href='#inline_content".$i."'>". $session_object->sessions[$i]->loc . "<br>" .  $session_object->sessions[$i]->name. "<br>" . $session_object->sessions[$i]->speaker . "</p><br>";
				}
			?>
          </div>
        </td>
      </tr>
      <tr>
        <td><div class='time_block'>12:00</div></td>
        <td><div class='break_block'>午餐，小聚會，現場展示</div></td></tr>
      <tr>
        <td><div class='time_block'>13:20</div></td>
        <td>
		  <div class='session_block'>
			<p class='inline' href="#inline_content7"><?php echo $session_object->sessions[7]->loc . "<br>" .  $session_object->sessions[7]->name. "<br>" . $session_object->sessions[7]->speaker; ?></p>
		  </div></td></tr>
      <tr>
        <td><div class='time_block'>14:10</div></td>
        <td><div class='break_block'>休息</div></td></tr>
      <tr>
        <td><div class='time_block'>14:20</div></td>
        <td>
          <div class='session_block'>
            <?php
				for($i=8 ; $i<11 ; $i++)
				{
					echo "<p class='inline' href='#inline_content".$i."'>". $session_object->sessions[$i]->loc . "<br>" .  $session_object->sessions[$i]->name. "<br>" . $session_object->sessions[$i]->speaker . "</p><br>";
				}
			?>
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
             <?php
				for($i=11 ; $i<14 ; $i++)
				{
					echo "<p class='inline' href='#inline_content".$i."'>". $session_object->sessions[$i]->loc . "<br>" .  $session_object->sessions[$i]->name. "<br>" . $session_object->sessions[$i]->speaker . "</p><br>";
				}
			?>
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
			<?php
				for($i=14 ; $i<17 ; $i++)
				{
					echo "<p class='inline' href='#inline_content".$i."'>". $session_object->sessions[$i]->loc . "<br>" .  $session_object->sessions[$i]->name. "<br>" . $session_object->sessions[$i]->speaker . "</p><br>";
				}
			?>
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
			<p class='inline' href="#inline_content17"><?php echo $session_object->sessions[17]->loc . "<br>" .  $session_object->sessions[17]->name. "<br>" . $session_object->sessions[17]->speaker; ?></p>
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
			<?php
				for($i=18 ; $i<21 ; $i++)
				{
					echo "<p class='inline' href='#inline_content".$i."'>". $session_object->sessions[$i]->loc . "<br>" .  $session_object->sessions[$i]->name. "<br>" . $session_object->sessions[$i]->speaker . "</p><br>";
				}
			?>
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
            <?php
				for($i=21 ; $i<24 ; $i++)
				{
					echo "<p class='inline' href='#inline_content".$i."'>". $session_object->sessions[$i]->loc . "<br>" .  $session_object->sessions[$i]->name. "<br>" . $session_object->sessions[$i]->speaker . "</p><br>";
				}
			?>
          </div>
        </td>
      </tr>
      <tr>
        <td><div class='time_block'>11:30</div></td>
        <td>
          <div class='session_block'>
            <?php
				for($i=24 ; $i<27 ; $i++)
				{
					echo "<p class='inline' href='#inline_content".$i."'>". $session_object->sessions[$i]->loc . "<br>" .  $session_object->sessions[$i]->name. "<br>" . $session_object->sessions[$i]->speaker . "</p><br>";
				}
			?>
          </div>
        </td>
      </tr>
      <tr>
        <td><div class='time_block'>12:20</div></td>
        <td><div class='break_block'>午餐，小聚會，現場展示</div></td></tr>
      <tr>
        <td><div class='time_block'>13:30</div></td>
        <td><div class='session_block'>
			<p class='inline' href="#inline_content27"><?php echo $session_object->sessions[27]->loc . "<br>" .  $session_object->sessions[27]->name. "<br>" . $session_object->sessions[27]->speaker; ?></p>
		</div></td></tr>
      <tr>
        <td><div class='time_block'>14:20</div></td>
        <td><div class='break_block'>休息</div></td></tr>
      <tr>
        <td><div class='time_block'>14:30</div></td>
        <td>
          <div class='session_block'>
            <?php
				for($i=28 ; $i<31 ; $i++)
				{
					echo "<p class='inline' href='#inline_content".$i."'>". $session_object->sessions[$i]->loc . "<br>" .  $session_object->sessions[$i]->name. "<br>" . $session_object->sessions[$i]->speaker . "</p><br>";
				}
			?>
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
            <?php
				for($i=31 ; $i<34 ; $i++)
				{
					echo "<p class='inline' href='#inline_content".$i."'>". $session_object->sessions[$i]->loc . "<br>" .  $session_object->sessions[$i]->name. "<br>" . $session_object->sessions[$i]->speaker . "</p><br>";
				}
			?>
          </div>
        </td>
      </tr>
      <tr>
        <td><div class='time_block'>16:10</div></td>
        <td><div class='break_block'>休息</div></td></tr>
      <tr>
        <td><div class='time_block'>16:20</div></td>
        <td><div class='session_block'>
			Microsoft 抽獎 + Lightening Talk
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
	
	
	<div style='display:none'>
		<?php
		for($i=0 ; $i<34 ; $i++)
		{
			
			echo "<div id='inline_content" . $i . "' style='padding:10px; background:#fff;'>";
			echo "<p>講者簡介：<br>" . $session_object->sessions[$i]->speaker_bio . "<br>";
			echo "<p>議程定位：<br>" . $session_object->sessions[$i]->class . "<br>";
			echo "<p>議題介紹：<br>" . $session_object->sessions[$i]->content;
			echo "</div>" ;
		}
		?>
	</div>
    <?php include_once("footer.html");?>
  </body>
</html>
