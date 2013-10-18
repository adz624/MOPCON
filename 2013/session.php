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
  <head><?php include_once("header.php");?></head>
  <body data-twttr-rendered="true" data-spy="scroll" data-target=".subnav" data-offset="50">
    <?php include_once("navbar.php");?>
    <div class="container" id="session">
    <div class="agenda">
        <div class="border">
          <div class="line">
            <div class="row">
              <div class="span12">
                <hgroup>
                  <h2 class="wf wf-h2">
                    10/26 議程表
                  </h2>
                </hgroup>
              </div>
            </div>
            <div class="agenda-group">
              <div class="agenda-title">
                <div class="row-fluid">
                  <div class="span2">
                    <div class="text-wrapper">
                      <div class="time">08:30 ~ 09:05</div>
                    </div>
                  </div>
                  <div class="span10">
                    <div class="text-wrapper">
                      <div class="name">大會報到</div>
					  <div class="head">video playback (議程預覽 + 工商服務 + 早餐時間)</div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="agenda-group off">
              <a class="agenda-title" href="#">
                <div class="row-fluid">
                  <div class="span2">
                    <div class="text-wrapper">
                      <div class="time">09:05 ~ 09:25</div>
                    </div>
                  </div>
                  <div class="span10">
                    <div class="text-wrapper">
                      <div class="name">致詞 ＋ 議程導覽</div>
                    </div>
                  </div>
                </div>
              </a>
              <div class="agenda-content">
                <div class="row-fluid">
                  <div class="span2">
                    <div class="text-wrapper">
                      議程介紹
                    </div>
                  </div>
                  <div class="span10">
                    <div class="text-wrapper">
                    </div>
                  </div>
                </div>
              </div>
            </div>
			<div class="agenda-group off">
              <a class="agenda-title" href="#">
                <div class="row-fluid">
                  <div class="span2">
                    <div class="text-wrapper">
                      <div class="time">
						<?php echo $session_object->sessions[0]->loc ; ?>
					  <br />09:25 ~ 10:15</div>
                    </div>
                  </div>
                  <div class="span10">
                    <div class="text-wrapper">
                      <div class="name"><?php echo $session_object->sessions[0]->speaker ; ?></div>
                      <div class="head"><?php echo $session_object->sessions[0]->name ; ?></div>
                    </div>
                  </div>
                </div>
              </a>
              <div class="agenda-content">
                <div class="row-fluid">
                  <div class="span2">
                    <div class="text-wrapper">
                      議程<br />介紹
                    </div>
                  </div>
                  <div class="span10">
                    <div class="text-wrapper">
						<?php echo "<p>講者簡介：<br />" . $session_object->sessions[0]->speaker_bio . "<br />";
								echo "<p>議題介紹：<br />" . $session_object->sessions[0]->content;
						?>
                    </div>
                  </div>
                </div>
              </div>
            </div>
			<div class="agenda-group rest">
              <div class="agenda-title">
                <div class="name">中場休息</div>
              </div>
            </div>


            <div class="row-fluid two-col">
              <div class="span4">
                <div class="agenda-group off">
                  <a class="agenda-title" href="#">
                    <div class="row-fluid">
                      <div class="span2">
                        <div class="text-wrapper">
                          <div class="time">
							<?php echo $session_object->sessions[1]->loc ; ?>
						  <br />10:30 ~ 11:10</div>
                        </div>
                      </div>
                      <div class="span10">
                        <div class="text-wrapper">
                          <div class="name"><?php echo $session_object->sessions[1]->speaker ; ?></div>
                          <div class="head"><?php echo $session_object->sessions[1]->name ; ?></div>
                        </div>
                      </div>
                    </div>
                  </a>
                  <div class="agenda-content">
                    <div class="row-fluid">
                      <div class="span2">
                        <div class="text-wrapper">
                          議程<br />介紹
                        </div>
                      </div>
                      <div class="span10">
                        <div class="text-wrapper">
							<?php echo "<p>講者簡介：<br />" . $session_object->sessions[1]->speaker_bio . "<br />";
								echo "<p>議題介紹：<br />" . $session_object->sessions[1]->content;
							?>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="span4">
                <div class="agenda-group off">
                  <a class="agenda-title" href="#">
                    <div class="row-fluid">
                      <div class="span2">
                        <div class="text-wrapper">
                          <div class="time"><?php echo $session_object->sessions[2]->loc ; ?><br />10:30 ~ 11:10</div>
                        </div>
                      </div>
                      <div class="span10">
                        <div class="text-wrapper">
                          <div class="name"><?php echo $session_object->sessions[2]->speaker ; ?></div>
                          <div class="head"><?php echo $session_object->sessions[2]->name ; ?></div>
                        </div>
                      </div>
                    </div>
                  </a>
                  <div class="agenda-content">
                    <div class="row-fluid">
                      <div class="span2">
                        <div class="text-wrapper">
                          議程<br />介紹
                        </div>
                      </div>
                      <div class="span10">
                        <div class="text-wrapper">
							<?php echo "<p>講者簡介：<br />" . $session_object->sessions[2]->speaker_bio . "<br />";
								echo "<p>議題介紹：<br />" . $session_object->sessions[2]->content;
							?>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
			  <div class="span4">
                <div class="agenda-group off">
                  <a class="agenda-title" href="#">
                    <div class="row-fluid">
                      <div class="span2">
                        <div class="text-wrapper">
                          <div class="time"><?php echo $session_object->sessions[3]->loc ; ?><br />10:30 ~ 11:10</div>
                        </div>
                      </div>
                      <div class="span10">
                        <div class="text-wrapper">
                          <div class="name"><?php echo $session_object->sessions[3]->speaker ; ?></div>
                          <div class="head"><?php echo $session_object->sessions[3]->name ; ?></div>
                        </div>
                      </div>
                    </div>
                  </a>
                  <div class="agenda-content">
                    <div class="row-fluid">
                      <div class="span2">
                        <div class="text-wrapper">
                          議程<br />介紹
                        </div>
                      </div>
                      <div class="span10">
                        <div class="text-wrapper">
							<?php echo "<p>講者簡介：<br />" . $session_object->sessions[3]->speaker_bio . "<br />";
								echo "<p>議題介紹：<br />" . $session_object->sessions[3]->content;
							?>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="agenda-group rest">
              <div class="agenda-title">
                <div class="name">中場休息</div>
              </div>
            </div>
            <div class="row-fluid two-col">
              <div class="span4">
                <div class="agenda-group off">
                  <a class="agenda-title" href="#">
                    <div class="row-fluid">
                      <div class="span2">
                        <div class="text-wrapper">
                          <div class="time"><?php echo $session_object->sessions[4]->loc ; ?><br />11:20 ~ 12:00</div>
                        </div>
                      </div>
                      <div class="span10">
                        <div class="text-wrapper">
                          <div class="name"><?php echo $session_object->sessions[4]->speaker ; ?></div>
                          <div class="head"><?php echo $session_object->sessions[4]->name ; ?></div>
                        </div>
                      </div>
                    </div>
                  </a>
                  <div class="agenda-content">
                    <div class="row-fluid">
                      <div class="span2">
                        <div class="text-wrapper">
                          議程<br />介紹
                        </div>
                      </div>
                      <div class="span10">
                        <div class="text-wrapper">
                          <?php echo "<p>講者簡介：<br />" . $session_object->sessions[4]->speaker_bio . "<br />";
								echo "<p>議題介紹：<br />" . $session_object->sessions[4]->content;
						  ?>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="span4">
                <div class="agenda-group off">
                  <a class="agenda-title" href="#">
                    <div class="row-fluid">
                      <div class="span2">
                        <div class="text-wrapper">
                          <div class="time"><?php echo $session_object->sessions[5]->loc ; ?><br />11:20 ~ 12:00</div>
                        </div>
                      </div>
                      <div class="span10">
                        <div class="text-wrapper">
                          <div class="name"><?php echo $session_object->sessions[5]->speaker ; ?></div>
                          <div class="head"><?php echo $session_object->sessions[5]->name ; ?></div>
                        </div>
                      </div>
                    </div>
                  </a>
                  <div class="agenda-content">
                    <div class="row-fluid">
                      <div class="span2">
                        <div class="text-wrapper">
                          議程<br />介紹
                        </div>
                      </div>
                      <div class="span10">
                        <div class="text-wrapper">
							<?php echo "<p>講者簡介：<br />" . $session_object->sessions[5]->speaker_bio . "<br />";
								echo "<p>議題介紹：<br />" . $session_object->sessions[5]->content;
						  ?>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
			  <div class="span4">
                <div class="agenda-group off">
                  <a class="agenda-title" href="#">
                    <div class="row-fluid">
                      <div class="span2">
                        <div class="text-wrapper">
                          <div class="time"><?php echo $session_object->sessions[6]->loc ; ?><br />11:20 ~ 12:00</div>
                        </div>
                      </div>
                      <div class="span10">
                        <div class="text-wrapper">
                          <div class="name"><?php echo $session_object->sessions[6]->speaker ; ?></div>
                          <div class="head"><?php echo $session_object->sessions[6]->name ; ?></div>
                        </div>
                      </div>
                    </div>
                  </a>
                  <div class="agenda-content">
                    <div class="row-fluid">
                      <div class="span2">
                        <div class="text-wrapper">
                          議程介紹
                        </div>
                      </div>
                      <div class="span10">
                        <div class="text-wrapper">
							<?php echo "<p>講者簡介：<br />" . $session_object->sessions[6]->speaker_bio . "<br />";
								echo "<p>議題介紹：<br />" . $session_object->sessions[6]->content;
						  ?>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="agenda-group rest">
              <div class="agenda-title">
                <div class="name">Lunch + Demo show</div>
              </div>
            </div>
            <div class="agenda-group off">
              <a class="agenda-title" href="#">
                <div class="row-fluid">
                  <div class="span2">
                    <div class="text-wrapper">
                      <div class="time"><?php echo $session_object->sessions[7]->loc ; ?><br />13:10 ~ 14:10</div>
                    </div>
                  </div>
                  <div class="span10">
                    <div class="text-wrapper">
                      <div class="name"><?php echo $session_object->sessions[7]->speaker ; ?></div>
                          <div class="head"><?php echo $session_object->sessions[7]->name ; ?></div>
                    </div>
                  </div>
                </div>
              </a>
              <div class="agenda-content">
                <div class="row-fluid">
                  <div class="span2">
                    <div class="text-wrapper">
                      議程介紹
                    </div>
                  </div>
                  <div class="span10">
                    <div class="text-wrapper">
                      <?php echo "<p>講者簡介：<br />" . $session_object->sessions[7]->speaker_bio . "<br />";
								echo "<p>議題介紹：<br />" . $session_object->sessions[7]->content;
					   ?>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="agenda-group rest">
              <div class="agenda-title">
                <div class="name">中場休息</div>
              </div>
            </div>
            <div class="row-fluid two-col">
              <div class="span4">
                <div class="agenda-group off">
                  <a class="agenda-title" href="#">
                    <div class="row-fluid">
                      <div class="span2">
                        <div class="text-wrapper">
                          <div class="time"><?php echo $session_object->sessions[8]->loc ; ?><br />14:20 ~ 15:00</div>
                        </div>
                      </div>
                      <div class="span10">
                        <div class="text-wrapper">
                          <div class="name"><?php echo $session_object->sessions[8]->speaker ; ?></div>
                          <div class="head"><?php echo $session_object->sessions[8]->name ; ?></div>
                        </div>
                      </div>
                    </div>
                  </a>
                  <div class="agenda-content">
                    <div class="row-fluid">
                      <div class="span2">
                        <div class="text-wrapper">
                          議程<br />介紹
                        </div>
                      </div>
                      <div class="span10">
                        <div class="text-wrapper">
                          <?php echo "<p>講者簡介：<br />" . $session_object->sessions[8]->speaker_bio . "<br />";
								echo "<p>議題介紹：<br />" . $session_object->sessions[8]->content;
						  ?>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="span4">
                <div class="agenda-group off">
                  <a class="agenda-title" href="#">
                    <div class="row-fluid">
                      <div class="span2">
                        <div class="text-wrapper">
                          <div class="time"><?php echo $session_object->sessions[9]->loc ; ?><br />15:20 ~ 16:00</div>
                        </div>
                      </div>
                      <div class="span10">
                        <div class="text-wrapper">
                          <div class="name"><?php echo $session_object->sessions[9]->speaker ; ?></div>
                          <div class="head"><?php echo $session_object->sessions[9]->name ; ?></div>
                        </div>
                      </div>
                    </div>
                  </a>
                  <div class="agenda-content">
                    <div class="row-fluid">
                      <div class="span2">
                        <div class="text-wrapper">
                          議程<br />介紹
                        </div>
                      </div>
                      <div class="span10">
                        <div class="text-wrapper">
							<?php echo "<p>講者簡介：<br />" . $session_object->sessions[9]->speaker_bio . "<br />";
								echo "<p>議題介紹：<br />" . $session_object->sessions[9]->content;
						  ?>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
			  <div class="span4">
                <div class="agenda-group off">
                  <a class="agenda-title" href="#">
                    <div class="row-fluid">
                      <div class="span2">
                        <div class="text-wrapper">
                          <div class="time"><?php echo $session_object->sessions[10]->loc ; ?><br />14:20 ~ 15:00</div>
                        </div>
                      </div>
                      <div class="span10">
                        <div class="text-wrapper">
                          <div class="name"><?php echo $session_object->sessions[10]->speaker ; ?></div>
                          <div class="head"><?php echo $session_object->sessions[10]->name ; ?></div>
                        </div>
                      </div>
                    </div>
                  </a>
                  <div class="agenda-content">
                    <div class="row-fluid">
                      <div class="span2">
                        <div class="text-wrapper">
                          議程介紹
                        </div>
                      </div>
                      <div class="span10">
                        <div class="text-wrapper">
							<?php echo "<p>講者簡介：<br />" . $session_object->sessions[10]->speaker_bio . "<br />";
								echo "<p>議題介紹：<br />" . $session_object->sessions[10]->content;
						  ?>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="agenda-group rest">
              <div class="agenda-title">
                <div class="name">中場休息</div>
              </div>
            </div>
            <div class="row-fluid two-col">
              <div class="span4">
                <div class="agenda-group off">
                  <a class="agenda-title" href="#">
                    <div class="row-fluid">
                      <div class="span2">
                        <div class="text-wrapper">
                          <div class="time"><?php echo $session_object->sessions[11]->loc ; ?><br />15:20 ~ 16:00</div>
                        </div>
                      </div>
                      <div class="span10">
                        <div class="text-wrapper">
                          <div class="name"><?php echo $session_object->sessions[11]->speaker ; ?></div>
                          <div class="head"><?php echo $session_object->sessions[11]->name ; ?></div>
                        </div>
                      </div>
                    </div>
                  </a>
                  <div class="agenda-content">
                    <div class="row-fluid">
                      <div class="span2">
                        <div class="text-wrapper">
                          議程<br />介紹
                        </div>
                      </div>
                      <div class="span10">
                        <div class="text-wrapper">
                          <?php echo "<p>講者簡介：<br />" . $session_object->sessions[11]->speaker_bio . "<br />";
								echo "<p>議題介紹：<br />" . $session_object->sessions[11]->content;
						  ?>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="span4">
                <div class="agenda-group off">
                  <a class="agenda-title" href="#">
                    <div class="row-fluid">
                      <div class="span2">
                        <div class="text-wrapper">
                          <div class="time"><?php echo $session_object->sessions[12]->loc ; ?><br />15:20 ~ 16:00</div>
                        </div>
                      </div>
                      <div class="span10">
                        <div class="text-wrapper">
                          <div class="name"><?php echo $session_object->sessions[12]->speaker ; ?></div>
                          <div class="head"><?php echo $session_object->sessions[12]->name ; ?></div>
                        </div>
                      </div>
                    </div>
                  </a>
                  <div class="agenda-content">
                    <div class="row-fluid">
                      <div class="span2">
                        <div class="text-wrapper">
                          議程<br />介紹
                        </div>
                      </div>
                      <div class="span10">
                        <div class="text-wrapper">
							<?php echo "<p>講者簡介：<br />" . $session_object->sessions[12]->speaker_bio . "<br />";
								echo "<p>議題介紹：<br />" . $session_object->sessions[12]->content;
						  ?>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
			  <div class="span4">
                <div class="agenda-group off">
                  <a class="agenda-title" href="#">
                    <div class="row-fluid">
                      <div class="span2">
                        <div class="text-wrapper">
                          <div class="time"><?php echo $session_object->sessions[13]->loc ; ?><br />16:10 ~ 16:50</div>
                        </div>
                      </div>
                      <div class="span10">
                        <div class="text-wrapper">
                          <div class="name"><?php echo $session_object->sessions[13]->speaker ; ?></div>
                          <div class="head"><?php echo $session_object->sessions[13]->name ; ?></div>
                        </div>
                      </div>
                    </div>
                  </a>
                  <div class="agenda-content">
                    <div class="row-fluid">
                      <div class="span2">
                        <div class="text-wrapper">
                          議程介紹
                        </div>
                      </div>
                      <div class="span10">
                        <div class="text-wrapper">
							<?php echo "<p>講者簡介：<br />" . $session_object->sessions[13]->speaker_bio . "<br />";
								echo "<p>議題介紹：<br />" . $session_object->sessions[13]->content;
						  ?>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
			<div class="agenda-group rest">
              <div class="agenda-title">
                <div class="name">中場休息</div>
              </div>
            </div>


			<div class="row-fluid two-col">
              <div class="span4">
                <div class="agenda-group off">
                  <a class="agenda-title" href="#">
                    <div class="row-fluid">
                      <div class="span2">
                        <div class="text-wrapper">
                          <div class="time"><?php echo $session_object->sessions[14]->loc ; ?><br />16:10 ~ 16:50</div>
                        </div>
                      </div>
                      <div class="span10">
                        <div class="text-wrapper">
                          <div class="name"><?php echo $session_object->sessions[14]->speaker ; ?></div>
                          <div class="head"><?php echo $session_object->sessions[14]->name ; ?></div>
                        </div>
                      </div>
                    </div>
                  </a>
                  <div class="agenda-content">
                    <div class="row-fluid">
                      <div class="span2">
                        <div class="text-wrapper">
                          議程<br />介紹
                        </div>
                      </div>
                      <div class="span10">
                        <div class="text-wrapper">
                          <?php echo "<p>講者簡介：<br />" . $session_object->sessions[14]->speaker_bio . "<br />";
								echo "<p>議題介紹：<br />" . $session_object->sessions[14]->content;
						  ?>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="span4">
                <div class="agenda-group off">
                  <a class="agenda-title" href="#">
                    <div class="row-fluid">
                      <div class="span2">
                        <div class="text-wrapper">
                          <div class="time"><?php echo $session_object->sessions[15]->loc ; ?><br />16:10 ~ 16:50</div>
                        </div>
                      </div>
                      <div class="span10">
                        <div class="text-wrapper">
                          <div class="name"><?php echo $session_object->sessions[15]->speaker ; ?></div>
                          <div class="head"><?php echo $session_object->sessions[15]->name ; ?></div>
                        </div>
                      </div>
                    </div>
                  </a>
                  <div class="agenda-content">
                    <div class="row-fluid">
                      <div class="span2">
                        <div class="text-wrapper">
                          議程<br />介紹
                        </div>
                      </div>
                      <div class="span10">
                        <div class="text-wrapper">
							<?php echo "<p>講者簡介：<br />" . $session_object->sessions[15]->speaker_bio . "<br />";
								echo "<p>議題介紹：<br />" . $session_object->sessions[15]->content;
						  ?>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
			  <div class="span4">
                <div class="agenda-group off">
                  <a class="agenda-title" href="#">
                    <div class="row-fluid">
                      <div class="span2">
                        <div class="text-wrapper">
                          <div class="time"><?php echo $session_object->sessions[16]->loc ; ?><br />16:10 ~ 16:50</div>
                        </div>
                      </div>
                      <div class="span10">
                        <div class="text-wrapper">
                          <div class="name"><?php echo $session_object->sessions[16]->speaker ; ?></div>
                          <div class="head"><?php echo $session_object->sessions[16]->name ; ?></div>
                        </div>
                      </div>
                    </div>
                  </a>
                  <div class="agenda-content">
                    <div class="row-fluid">
                      <div class="span2">
                        <div class="text-wrapper">
                          議程介紹
                        </div>
                      </div>
                      <div class="span10">
                        <div class="text-wrapper">
							<?php echo "<p>講者簡介：<br />" . $session_object->sessions[16]->speaker_bio . "<br />";
								echo "<p>議題介紹：<br />" . $session_object->sessions[16]->content;
						  ?>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
			<div class="agenda-group">
              <div class="agenda-title">
                <div class="row-fluid">
                  <div class="span2">
                    <div class="text-wrapper">
                      <div class="time">17:00 ~ </div>
                    </div>
                  </div>
                  <div class="span10">
                    <div class="text-wrapper">
                      <div class="name">公告 + 散場</div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

	  <div class="agenda">
        <div class="border">
          <div class="line">
            <div class="row">
              <div class="span12">
                <hgroup>
                  <h2 class="wf wf-h2">
                    10/27 議程表
                  </h2>
                </hgroup>
              </div>
            </div>
            <div class="agenda-group">
              <div class="agenda-title">
                <div class="row-fluid">
                  <div class="span2">
                    <div class="text-wrapper">
                      <div class="time">08:30 ~ 09:00</div>
                    </div>
                  </div>
                  <div class="span10">
                    <div class="text-wrapper">
                      <div class="name">大會報到</div>
					  <div class="head">video playback (議程預覽 + 工商服務 + 早餐時間)</div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
			<div class="agenda-group off">
              <a class="agenda-title" href="#">
                <div class="row-fluid">
                  <div class="span2">
                    <div class="text-wrapper">
                      <div class="time">
						<?php echo $session_object->sessions[17]->loc ; ?>
					  <br />09:00 ~ 09:50</div>
                    </div>
                  </div>
                  <div class="span10">
                    <div class="text-wrapper">
                      <div class="name"><?php echo $session_object->sessions[17]->speaker ; ?></div>
                      <div class="head"><?php echo $session_object->sessions[17]->name ; ?></div>
                    </div>
                  </div>
                </div>
              </a>
              <div class="agenda-content">
                <div class="row-fluid">
                  <div class="span2">
                    <div class="text-wrapper">
                      議程<br />介紹
                    </div>
                  </div>
                  <div class="span10">
                    <div class="text-wrapper">
						<?php echo "<p>講者簡介：<br />" . $session_object->sessions[17]->speaker_bio . "<br />";
								echo "<p>議題介紹：<br />" . $session_object->sessions[17]->content;
						?>
                    </div>
                  </div>
                </div>
              </div>
            </div>
			<div class="agenda-group rest">
              <div class="agenda-title">
                <div class="name">中場休息</div>
              </div>
            </div>
            <div class="row-fluid two-col">
              <div class="span4">
                <div class="agenda-group off">
                  <a class="agenda-title" href="#">
                    <div class="row-fluid">
                      <div class="span2">
                        <div class="text-wrapper">
                          <div class="time">
							<?php echo $session_object->sessions[18]->loc ; ?><br />10:00 ~ 10:40</div>
                        </div>
                      </div>
                      <div class="span10">
                        <div class="text-wrapper">
                          <div class="name"><?php echo $session_object->sessions[18]->speaker ; ?></div>
                          <div class="head"><?php echo $session_object->sessions[18]->name ; ?></div>
                        </div>
                      </div>
                    </div>
                  </a>
                  <div class="agenda-content">
                    <div class="row-fluid">
                      <div class="span2">
                        <div class="text-wrapper">
                          議程<br />介紹
                        </div>
                      </div>
                      <div class="span10">
                        <div class="text-wrapper">
							<?php echo "<p>講者簡介：<br />" . $session_object->sessions[18]->speaker_bio . "<br />";
								echo "<p>議題介紹：<br />" . $session_object->sessions[18]->content;
							?>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="span4">
                <div class="agenda-group off">
                  <a class="agenda-title" href="#">
                    <div class="row-fluid">
                      <div class="span2">
                        <div class="text-wrapper">
                          <div class="time"><?php echo $session_object->sessions[19]->loc ; ?><br />10:00 ~ 10:40</div>
                        </div>
                      </div>
                      <div class="span10">
                        <div class="text-wrapper">
                          <div class="name"><?php echo $session_object->sessions[19]->speaker ; ?></div>
                          <div class="head"><?php echo $session_object->sessions[19]->name ; ?></div>
                        </div>
                      </div>
                    </div>
                  </a>
                  <div class="agenda-content">
                    <div class="row-fluid">
                      <div class="span2">
                        <div class="text-wrapper">
                          議程<br />介紹
                        </div>
                      </div>
                      <div class="span10">
                        <div class="text-wrapper">
							<?php echo "<p>講者簡介：<br />" . $session_object->sessions[19]->speaker_bio . "<br />";
								echo "<p>議題介紹：<br />" . $session_object->sessions[19]->content;
							?>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
			  <div class="span4">
                <div class="agenda-group off">
                  <a class="agenda-title" href="#">
                    <div class="row-fluid">
                      <div class="span2">
                        <div class="text-wrapper">
                          <div class="time"><?php echo $session_object->sessions[20]->loc ; ?><br />10:00 ~ 10:40</div>
                        </div>
                      </div>
                      <div class="span10">
                        <div class="text-wrapper">
                          <div class="name"><?php echo $session_object->sessions[20]->speaker ; ?></div>
                          <div class="head"><?php echo $session_object->sessions[20]->name ; ?></div>
                        </div>
                      </div>
                    </div>
                  </a>
                  <div class="agenda-content">
                    <div class="row-fluid">
                      <div class="span2">
                        <div class="text-wrapper">
                          議程<br />介紹
                        </div>
                      </div>
                      <div class="span10">
                        <div class="text-wrapper">
							<?php echo "<p>講者簡介：<br />" . $session_object->sessions[20]->speaker_bio . "<br />";
								echo "<p>議題介紹：<br />" . $session_object->sessions[20]->content;
							?>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="agenda-group rest">
              <div class="agenda-title">
                <div class="name">中場休息</div>
              </div>
            </div>
            <div class="row-fluid two-col">
              <div class="span4">
                <div class="agenda-group off">
                  <a class="agenda-title" href="#">
                    <div class="row-fluid">
                      <div class="span2">
                        <div class="text-wrapper">
                          <div class="time"><?php echo $session_object->sessions[21]->loc ; ?><br />10:50 ~ 11:30</div>
                        </div>
                      </div>
                      <div class="span10">
                        <div class="text-wrapper">
                          <div class="name"><?php echo $session_object->sessions[21]->speaker ; ?></div>
                          <div class="head"><?php echo $session_object->sessions[21]->name ; ?></div>
                        </div>
                      </div>
                    </div>
                  </a>
                  <div class="agenda-content">
                    <div class="row-fluid">
                      <div class="span2">
                        <div class="text-wrapper">
                          議程<br />介紹
                        </div>
                      </div>
                      <div class="span10">
                        <div class="text-wrapper">
                          <?php echo "<p>講者簡介：<br />" . $session_object->sessions[21]->speaker_bio . "<br />";
								echo "<p>議題介紹：<br />" . $session_object->sessions[21]->content;
						  ?>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="span4">
                <div class="agenda-group off">
                  <a class="agenda-title" href="#">
                    <div class="row-fluid">
                      <div class="span2">
                        <div class="text-wrapper">
                          <div class="time"><?php echo $session_object->sessions[22]->loc ; ?><br />10:50 ~ 11:30</div>
                        </div>
                      </div>
                      <div class="span10">
                        <div class="text-wrapper">
                          <div class="name"><?php echo $session_object->sessions[22]->speaker ; ?></div>
                          <div class="head"><?php echo $session_object->sessions[22]->name ; ?></div>
                        </div>
                      </div>
                    </div>
                  </a>
                  <div class="agenda-content">
                    <div class="row-fluid">
                      <div class="span2">
                        <div class="text-wrapper">
                          議程<br />介紹
                        </div>
                      </div>
                      <div class="span10">
                        <div class="text-wrapper">
							<?php echo "<p>講者簡介：<br />" . $session_object->sessions[22]->speaker_bio . "<br />";
								echo "<p>議題介紹：<br />" . $session_object->sessions[22]->content;
						  ?>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
			  <div class="span4">
                <div class="agenda-group off">
                  <a class="agenda-title" href="#">
                    <div class="row-fluid">
                      <div class="span2">
                        <div class="text-wrapper">
                          <div class="time"><?php echo $session_object->sessions[23]->loc ; ?><br />10:50 ~ 11:30</div>
                        </div>
                      </div>
                      <div class="span10">
                        <div class="text-wrapper">
                          <div class="name"><?php echo $session_object->sessions[23]->speaker ; ?></div>
                          <div class="head"><?php echo $session_object->sessions[23]->name ; ?></div>
                        </div>
                      </div>
                    </div>
                  </a>
                  <div class="agenda-content">
                    <div class="row-fluid">
                      <div class="span2">
                        <div class="text-wrapper">
                          議程介紹
                        </div>
                      </div>
                      <div class="span10">
                        <div class="text-wrapper">
							<?php echo "<p>講者簡介：<br />" . $session_object->sessions[23]->speaker_bio . "<br />";
								echo "<p>議題介紹：<br />" . $session_object->sessions[23]->content;
						  ?>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>



			<div class="row-fluid two-col">
              <div class="span4">
                <div class="agenda-group off">
                  <a class="agenda-title" href="#">
                    <div class="row-fluid">
                      <div class="span2">
                        <div class="text-wrapper">
                          <div class="time"><?php echo $session_object->sessions[24]->loc ; ?><br />11:30 ~ 12:20</div>
                        </div>
                      </div>
                      <div class="span10">
                        <div class="text-wrapper">
                          <div class="name"><?php echo $session_object->sessions[24]->speaker ; ?></div>
                          <div class="head"><?php echo $session_object->sessions[24]->name ; ?></div>
                        </div>
                      </div>
                    </div>
                  </a>
                  <div class="agenda-content">
                    <div class="row-fluid">
                      <div class="span2">
                        <div class="text-wrapper">
                          議程<br />介紹
                        </div>
                      </div>
                      <div class="span10">
                        <div class="text-wrapper">
                          <?php echo "<p>講者簡介：<br />" . $session_object->sessions[24]->speaker_bio . "<br />";
								echo "<p>議題介紹：<br />" . $session_object->sessions[24]->content;
						  ?>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="span4">
                <div class="agenda-group off">
                  <a class="agenda-title" href="#">
                    <div class="row-fluid">
                      <div class="span2">
                        <div class="text-wrapper">
                          <div class="time"><?php echo $session_object->sessions[25]->loc ; ?><br />11:30 ~ 12:20</div>
                        </div>
                      </div>
                      <div class="span10">
                        <div class="text-wrapper">
                          <div class="name"><?php echo $session_object->sessions[25]->speaker ; ?></div>
                          <div class="head"><?php echo $session_object->sessions[25]->name ; ?></div>
                        </div>
                      </div>
                    </div>
                  </a>
                  <div class="agenda-content">
                    <div class="row-fluid">
                      <div class="span2">
                        <div class="text-wrapper">
                          議程<br />介紹
                        </div>
                      </div>
                      <div class="span10">
                        <div class="text-wrapper">
							<?php echo "<p>講者簡介：<br />" . $session_object->sessions[25]->speaker_bio . "<br />";
								echo "<p>議題介紹：<br />" . $session_object->sessions[25]->content;
						  ?>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
			  <div class="span4">
                <div class="agenda-group off">
                  <a class="agenda-title" href="#">
                    <div class="row-fluid">
                      <div class="span2">
                        <div class="text-wrapper">
                          <div class="time"><?php echo $session_object->sessions[26]->loc ; ?><br />11:30 ~ 12:20</div>
                        </div>
                      </div>
                      <div class="span10">
                        <div class="text-wrapper">
                          <div class="name"><?php echo $session_object->sessions[26]->speaker ; ?></div>
                          <div class="head"><?php echo $session_object->sessions[26]->name ; ?></div>
                        </div>
                      </div>
                    </div>
                  </a>
                  <div class="agenda-content">
                    <div class="row-fluid">
                      <div class="span2">
                        <div class="text-wrapper">
                          議程介紹
                        </div>
                      </div>
                      <div class="span10">
                        <div class="text-wrapper">
							<?php echo "<p>講者簡介：<br />" . $session_object->sessions[26]->speaker_bio . "<br />";
								echo "<p>議題介紹：<br />" . $session_object->sessions[26]->content;
						  ?>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="agenda-group rest">
              <div class="agenda-title">
                <div class="name">Lunch + Demo show</div>
              </div>
            </div>
            <div class="agenda-group off">
              <a class="agenda-title" href="#">
                <div class="row-fluid">
                  <div class="span2">
                    <div class="text-wrapper">
                      <div class="time"><?php echo $session_object->sessions[27]->loc ; ?><br />13:30 ~ 14:20</div>
                    </div>
                  </div>
                  <div class="span10">
                    <div class="text-wrapper">
                      <div class="name"><?php echo $session_object->sessions[27]->speaker ; ?></div>
                          <div class="head"><?php echo $session_object->sessions[27]->name ; ?></div>
                    </div>
                  </div>
                </div>
              </a>
              <div class="agenda-content">
                <div class="row-fluid">
                  <div class="span2">
                    <div class="text-wrapper">
                      議程介紹
                    </div>
                  </div>
                  <div class="span10">
                    <div class="text-wrapper">
                      <?php echo "<p>講者簡介：<br />" . $session_object->sessions[27]->speaker_bio . "<br />";
								echo "<p>議題介紹：<br />" . $session_object->sessions[27]->content;
					   ?>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="agenda-group rest">
              <div class="agenda-title">
                <div class="name">中場休息</div>
              </div>
            </div>


            <div class="row-fluid two-col">
              <div class="span4">
                <div class="agenda-group off">
                  <a class="agenda-title" href="#">
                    <div class="row-fluid">
                      <div class="span2">
                        <div class="text-wrapper">
                          <div class="time"><?php echo $session_object->sessions[28]->loc ; ?><br />14:30 ~ 15:10</div>
                        </div>
                      </div>
                      <div class="span10">
                        <div class="text-wrapper">
                          <div class="name"><?php echo $session_object->sessions[28]->speaker ; ?></div>
                          <div class="head"><?php echo $session_object->sessions[28]->name ; ?></div>
                        </div>
                      </div>
                    </div>
                  </a>
                  <div class="agenda-content">
                    <div class="row-fluid">
                      <div class="span2">
                        <div class="text-wrapper">
                          議程<br />介紹
                        </div>
                      </div>
                      <div class="span10">
                        <div class="text-wrapper">
                          <?php echo "<p>講者簡介：<br />" . $session_object->sessions[28]->speaker_bio . "<br />";
								echo "<p>議題介紹：<br />" . $session_object->sessions[28]->content;
						  ?>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="span4">
                <div class="agenda-group off">
                  <a class="agenda-title" href="#">
                    <div class="row-fluid">
                      <div class="span2">
                        <div class="text-wrapper">
                          <div class="time"><?php echo $session_object->sessions[29]->loc ; ?><br />14:30 ~ 15:10</div>
                        </div>
                      </div>
                      <div class="span10">
                        <div class="text-wrapper">
                          <div class="name"><?php echo $session_object->sessions[29]->speaker ; ?></div>
                          <div class="head"><?php echo $session_object->sessions[29]->name ; ?></div>
                        </div>
                      </div>
                    </div>
                  </a>
                  <div class="agenda-content">
                    <div class="row-fluid">
                      <div class="span2">
                        <div class="text-wrapper">
                          議程<br />介紹
                        </div>
                      </div>
                      <div class="span10">
                        <div class="text-wrapper">
							<?php echo "<p>講者簡介：<br />" . $session_object->sessions[29]->speaker_bio . "<br />";
								echo "<p>議題介紹：<br />" . $session_object->sessions[29]->content;
						  ?>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
			  <div class="span4">
                <div class="agenda-group off">
                  <a class="agenda-title" href="#">
                    <div class="row-fluid">
                      <div class="span2">
                        <div class="text-wrapper">
                          <div class="time"><?php echo $session_object->sessions[30]->loc ; ?><br />14:30 ~ 15:10</div>
                        </div>
                      </div>
                      <div class="span10">
                        <div class="text-wrapper">
                          <div class="name"><?php echo $session_object->sessions[30]->speaker ; ?></div>
                          <div class="head"><?php echo $session_object->sessions[30]->name ; ?></div>
                        </div>
                      </div>
                    </div>
                  </a>
                  <div class="agenda-content">
                    <div class="row-fluid">
                      <div class="span2">
                        <div class="text-wrapper">
                          議程介紹
                        </div>
                      </div>
                      <div class="span10">
                        <div class="text-wrapper">
							<?php echo "<p>講者簡介：<br />" . $session_object->sessions[30]->speaker_bio . "<br />";
								echo "<p>議題介紹：<br />" . $session_object->sessions[30]->content;
						  ?>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="agenda-group rest">
              <div class="agenda-title">
                <div class="name">中場休息</div>
              </div>
            </div>
            <div class="row-fluid two-col">
              <div class="span4">
                <div class="agenda-group off">
                  <a class="agenda-title" href="#">
                    <div class="row-fluid">
                      <div class="span2">
                        <div class="text-wrapper">
                          <div class="time"><?php echo $session_object->sessions[31]->loc ; ?><br />15:30 ~ 16:10</div>
                        </div>
                      </div>
                      <div class="span10">
                        <div class="text-wrapper">
                          <div class="name"><?php echo $session_object->sessions[31]->speaker ; ?></div>
                          <div class="head"><?php echo $session_object->sessions[31]->name ; ?></div>
                        </div>
                      </div>
                    </div>
                  </a>
                  <div class="agenda-content">
                    <div class="row-fluid">
                      <div class="span2">
                        <div class="text-wrapper">
                          議程<br />介紹
                        </div>
                      </div>
                      <div class="span10">
                        <div class="text-wrapper">
                          <?php echo "<p>講者簡介：<br />" . $session_object->sessions[31]->speaker_bio . "<br />";
								echo "<p>議題介紹：<br />" . $session_object->sessions[31]->content;
						  ?>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="span4">
                <div class="agenda-group off">
                  <a class="agenda-title" href="#">
                    <div class="row-fluid">
                      <div class="span2">
                        <div class="text-wrapper">
                          <div class="time"><?php echo $session_object->sessions[32]->loc ; ?><br />15:30 ~ 16:10</div>
                        </div>
                      </div>
                      <div class="span10">
                        <div class="text-wrapper">
                          <div class="name"><?php echo $session_object->sessions[32]->speaker ; ?></div>
                          <div class="head"><?php echo $session_object->sessions[32]->name ; ?></div>
                        </div>
                      </div>
                    </div>
                  </a>
                  <div class="agenda-content">
                    <div class="row-fluid">
                      <div class="span2">
                        <div class="text-wrapper">
                          議程<br />介紹
                        </div>
                      </div>
                      <div class="span10">
                        <div class="text-wrapper">
							<?php echo "<p>講者簡介：<br />" . $session_object->sessions[32]->speaker_bio . "<br />";
								echo "<p>議題介紹：<br />" . $session_object->sessions[32]->content;
						  ?>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
			  <div class="span4">
                <div class="agenda-group off">
                  <a class="agenda-title" href="#">
                    <div class="row-fluid">
                      <div class="span2">
                        <div class="text-wrapper">
                          <div class="time"><?php echo $session_object->sessions[33]->loc ; ?><br />15:30 ~ 16:10</div>
                        </div>
                      </div>
                      <div class="span10">
                        <div class="text-wrapper">
                          <div class="name"><?php echo $session_object->sessions[33]->speaker ; ?></div>
                          <div class="head"><?php echo $session_object->sessions[33]->name ; ?></div>
                        </div>
                      </div>
                    </div>
                  </a>
                  <div class="agenda-content">
                    <div class="row-fluid">
                      <div class="span2">
                        <div class="text-wrapper">
                          議程介紹
                        </div>
                      </div>
                      <div class="span10">
                        <div class="text-wrapper">
							<?php echo "<p>講者簡介：<br />" . $session_object->sessions[33]->speaker_bio . "<br />";
								echo "<p>議題介紹：<br />" . $session_object->sessions[33]->content;
						  ?>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
			<div class="agenda-group rest">
              <div class="agenda-title">
                <div class="name">中場休息</div>
              </div>
            </div>


			<div class="agenda-group off">
              <a class="agenda-title" href="#">
                <div class="row-fluid">
                  <div class="span2">
                    <div class="text-wrapper">
                      <div class="time">
						<?php echo $session_object->sessions[17]->loc ; ?>
					  <br />16:20 ~ 17:30</div>
                    </div>
                  </div>
                  <div class="span10">
                    <div class="text-wrapper">
                      <div class="name">Microsoft 抽獎 + Lightening Talk</div>
                    </div>
                  </div>
                </div>
              </a>
              <div class="agenda-content">
                <div class="row-fluid">
                  <div class="span2">
                    <div class="text-wrapper">
                      議程<br />介紹
                    </div>
                  </div>
                  <div class="span10">
                    <div class="text-wrapper">
                    </div>
                  </div>
                </div>
              </div>
            </div>
			<div class="agenda-group">
              <div class="agenda-title">
                <div class="row-fluid">
                  <div class="span2">
                    <div class="text-wrapper">
                      <div class="time">17:30 ~ </div>
                    </div>
                  </div>
                  <div class="span10">
                    <div class="text-wrapper">
                      <div class="name">公告 + 散場</div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

  </div>
    <?php include_once("footer.html");?>
  </body>
</html>
