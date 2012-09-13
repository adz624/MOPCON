<?php
  $function[$page] = 'active';
?>
  <div class="navbar navbar-fixed-top">
    <div class="navbar-inner">
      <div class="container" style="width: auto;">
        <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </a>
        <a id="main_logo" class="brand" href="http://test.mopcon.org"><img src="img/logo.png"/></a>
        <div class="nav-collapse">
          <ul class="nav">
            <li class="<?php echo $function['home']; ?>"><a href="http://test.mopcon.org">首頁</a></li>
            <li class="<?php echo $function['session']; ?>"><a href="session.html">議程</a></li>
            <li class="<?php echo $function['social']; ?>"><a href="#">社群</a></li>
            <li class="<?php echo $function['sponser']; ?>"><a href="#">贊助</a></li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">其他 <b class="caret"></b></a>
              <ul class="dropdown-menu">
                <li><a href="#">報名資訊</a></li>
                <li><a href="#">贊助資訊</a></li>
                <li class="divider"></li>
                <li><a class="<?php echo $function['map']; ?>" href="#">交通</a></li>
              </ul>
            </li>
          </ul>
          <ul class="nav pull-right">
            <li class="divider-vertical"></li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">Language <b class="caret"></b></a>
              <ul class="dropdown-menu">
                <li><a href="#">繁體中文</a></li>
                <li><a href="#">English</a></li>
              </ul>
            </li>
          </ul>
        </div><!-- /.nav-collapse -->
      </div>
    </div><!-- /navbar-inner -->
    <div id="functionSeprate"></div>
  </div><!-- /navbar -->


<script src="scripts/jquery-1.8.1.min.js"></script>
<script src="css/bootstrap/js/bootstrap.js"></script>