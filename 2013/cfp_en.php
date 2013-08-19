<?php
  $page = "cfp";
  $function['cfp'] = "active";
  $title = "Mobile Open Platform Conference's Call For Papers!";
  $og_descr = "Please come and share your experience and thinking about mobile application development at MOPCON!";
  $page_file = $_SERVER['PHP_SELF'];
?>
<html lang="zh-TW" class="">
  <head>
  <?php include_once("header.php");?>
  <style>
    #all {
        padding: 1em 2em;
    }
    .jumbotron {
      margin: 2em 0 1em;
      padding: 1.3em 0;
      text-align: center;
      background: url('/2013/img/cfp_head_bg.jpg');
      border-radius: 15px;
      text-shadow: 2px 2px 1px  #fff;
    }
    .jumbotron h1 {
      font-size: 70px;
      line-height: 1;
    }
    .jumbotron .lead,.jumbotron .btn {
      font-size: 24px;
      line-height: 1.25;
    }
  </style>
  </head>
  <body data-twttr-rendered="true" data-spy="scroll" data-target=".subnav" data-offset="50">
    <?php include_once("navbar_en.php");?>
    <div class="container" id="all">
      <div class="jumbotron">
        <h1>MOPCON<br> Call For Papers!</h1>
        <p class="lead">Please come and share your experience and thinking about mobile application development at Mobile Open Platform Conference!</p>
        <a target="_blank" class="btn btn-primary" href="http://registrano.com/events/MOPCON2013-cfp">Submit Now!</a>

      </div>

      <div class="row-fluid well-large">
        <div class="span6">
        <div class="well">
          <p>
          Every session time slot at MOPCON is about 40 min (Q&A included), and here are the information entries for submitting speaking proposal:
          <ol>
            <li>Name and/or nickname</li>
            <li>Contact information (email, cellphone number)</li>
            <li>Topic</li>
            <li>Abstract in 250 words</li>
            <li>Bio in 250 words</li>
          </ol>
          <p>Then click <a target="_blank" class="btn btn-primary" href="http://registrano.com/events/MOPCON2013-cfp">Submit Now!</a>
          <p>
          Please submit your speaking proposal before Sep 15, 2013, and the session committee will inform you about the availability
          of the session proposal before Sep 28, 2013.
        </div>
        </div>

        <div class="span6">
          <p>It is the pleasure of MOPCON committee to invite you to submit session proposals for the following fields:
          <ul>
            <li>Use case of mobile application operations</li>
            <li>Mobile application development</li>
            <li>Digital media and content oriented delivery</li>
          </ul>
          <p>Additionally, we are willing to accept various interesting applications beyond the above topics, such as wearable technologies and HTML5 based cross-device applications.
          <!--<p>細節請參考<a target="_blank" href="MOPCON-CallForPaper.pdf">行動科技應用開發者年會演講徵求書</a>-->
        </div>
      </div>

    </div>
    <?php include_once("footer.html");?>
  </body>
</html>
