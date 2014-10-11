<?php
include __DIR__.'/src/Savant3.php';
include __DIR__.'/src/sponsors.php';

$config = [
    'template_path' => array(__DIR__.'/tpl/')
];
$tpl = new Savant3($config);

$tpl->title = "徵求贊助商";
$tpl->mainClass = ' ⃠-black-box';

$sponsors = sponsorsByLevel();


$tpl->ironman = $sponsors['ironman'];
$tpl->hacker = $sponsors['hacker'];
$tpl->geek = $sponsors['geek'];
$tpl->developer = $sponsors['developer'];
$tpl->coder = $sponsors['coder'];
$tpl->special = $sponsors['special'];
// 輸出畫面
$tpl->content = $tpl->getOutput('sponsor.tpl.php');
$tpl->display('main.tpl.php');



