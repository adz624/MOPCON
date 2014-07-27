<?php
include __DIR__.'/src/Savant3.php';

$config = [
    'template_path' => array(__DIR__.'/tpl/')
];  
$tpl = new Savant3($config);

$tpl->title = "MOPCON 2014";
$tpl->mainClass = 'index';

$tpl->content =<<<RAW_HTML
<div class="sns">
    <a href="https://www.facebook.com/mopcon/" alt="MOPCON Facebook 粉絲團" title="MOPCON Facebook 粉絲團"><i class="icon-facebook32"></i></a>
    <a href="https://google.com/+MopconOrg" alt="MOPCON @ Google+" title="MOPCON @ Google+"><i class="icon-googleplus32"></i></a>
    <a href="https://twitter.com/mopcon" alt="MOPCON @ Twitter" title="MOPCON @ Twitter"><i class="icon-twitter22"></i></a>
</div>
<div class="pc-banner">
    <img src="images/banner.png"  alt="堅持在濁水溪以南舉辦的千人社群研討會，將於 2014/10/25 日到 2014/10/26 在高雄國際會議中心舉辦">
    
</div>
<div class="mobile-banner">
    <div class="mobile-banner-img">
        <img src="images/index-banner-retina.png" class="mobile-banner-img" alt="">
    </div>
    <time>2014/10/25~2014/10/26</time> 
</div>
RAW_HTML;

// 輸出畫面
$tpl->display('main.tpl.php');
