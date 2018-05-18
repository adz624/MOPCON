<?php
include __DIR__.'/src/Savant3.php';
include __DIR__.'/src/speakers.php';

$config = [
    'template_path' => array(__DIR__.'/tpl/')
];
$tpl = new Savant3($config);

$tpl->title = "講者介紹";
$tpl->mainClass = 'love-☺';

$tpl->speakers = speakers();


// 輸出畫面
$tpl->content = $tpl->getOutput('speakers.tpl.php');
$tpl->display('main.tpl.php');



