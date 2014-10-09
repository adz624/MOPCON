<?php
include __DIR__.'/src/Savant3.php';

$config = [
    'template_path' => array(__DIR__.'/tpl/')
];
$tpl = new Savant3($config);

$tpl->title = "媒體合作";
$tpl->mainClass = ' ⃠-black-box';

$tpl->hacker = [
    [
        'id'   => 'punnode',
        'name' => 'PunNode',
        'img'  => 'punnode.png',
        'url'  => 'http://punnode.com/',
        'desc' => 'PunNode，聚焦亞洲科技與創業，親身投入參與、舉辦創業相關聚會及計劃。
        
        報導台灣科技新創公司與國外最新的科技新聞、投資方向以及產業發展趨勢；特別關注以中國、日本、韓國、新加坡…等亞洲科技動態。期許做為國內重要的國際科技媒體代表，搭建起台灣通往世界的橋樑，並冀望協助打造台灣良好的產業鏈與生態系，建立具有台灣特色的開發、創業、科技圈。
        
        與全台最大 App 專業評測網站 最棒app、全台最大科學網站 PanSci 為密切夥伴，同時亦為全球頂尖科技媒體 TechCrunch 中國官方代理方－－動點科技的唯一台灣合作夥伴。',
    ],
];

// 輸出畫面
$tpl->content = $tpl->getOutput('media.tpl.php');
$tpl->display('main.tpl.php');



