<?php
include __DIR__.'/src/Savant3.php';

$config = [
    'template_path' => array(__DIR__.'/tpl/')
];  
$tpl = new Savant3($config);

$tpl->title = "MOPCON 2014";
$tpl->mainClass = 'index';

$tpl->content =<<<RAW_HTML
<div class="sns" style="margin-top:-2em; font-size:1.5em; line-height:2em;">
<a href="https://www.facebook.com/mopcon/" alt="MOPCON Facebook 粉絲團" title="MOPCON Facebook 粉絲團" ><i class="icon-facebook42"></i></a>
</div>
<img src="images/banner.png" style="margin:0 0 30px 0" alt="堅持在濁水溪以南舉辦的千人社群研討會，將於 2014/10/25 日到 2014/10/26 在高雄國際會議中心舉辦" >
RAW_HTML;

// 輸出畫面
$tpl->display('main.tpl.php');
