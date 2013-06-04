<?php
  $function[$page] = 'active';
?>
  <div class="navbar navbar-fixed-top">
    <div class="navbar-inner ">
      <div class="" style="width: auto;">
        <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </a>
        <a id="main_logo" class="brand" href="/"><img src="img/logo.png"/></a>
        <div class="nav-collapse">
          <ul class="nav">
            <li class="<?php echo $function['session']; ?>"><a href="session.php">議程</a></li>
            <li class="<?php echo $function['sponser']; ?>"><a href="sponser.php">贊助</a></li>
            <li class="<?php echo $function['social']; ?>"><a href="social.php">社群</a></li>
            <li class="dropdown <?php echo $function['other']; ?>">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">其他 <b class="caret"></b></a>
              <ul class="dropdown-menu">
                <li class="<?php echo $function['map']; ?>"><a href="map.php">交通</a></li>                
                <li class="<?php echo $function['register']; ?>"><a href="register.php">報名</a></li>
<!--                <li class="<?php echo $function['cfp']; ?>"><a href="cfp.php">議程投稿</a></li>     -->
                <li class="divider"></li>
                <li class="<?php echo $function['cfs']; ?>"><a href="cfs.php">贊助活動</a></li>
                <li class="<?php echo $function['contact']; ?>"><a href="contact.php">聯絡我們</a></li>
                <li class="divider"></li>
                <li class="<?php echo $function['activity']; ?>"><a href="activity.php">2012 花絮</a></li>
              </ul>
            </li>
          </ul>
          <ul id="language" class="nav pull-right">
            <li class="divider-vertical"></li>
            <li class="dropdown">
            <div id="google_translate_element"></div><script type="text/javascript">
            function googleTranslateElementInit() {
                  new google.translate.TranslateElement({pageLanguage: 'zh-TW', includedLanguages: 'en,ja', layout: google.translate.TranslateElement.InlineLayout.HORIZONTAL, gaTrack: true, gaId: 'UA-34651129-1'}, 'google_translate_element');
            }
            </script><script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
        
<!--              <a href="#" class="dropdown-toggle" data-toggle="dropdown">Language <b class="caret"></b></a>
              <ul class="dropdown-menu">
                <li><a href="#">繁體中文</a></li>
                <li><a href="#">English</a></li>    -->
              </ul>
            </li>
          </ul>
        </div><!-- /.nav-collapse -->
      </div>
    </div><!-- /navbar-inner -->
    <div id="functionSeprate"></div>
  </div><!-- /navbar -->
