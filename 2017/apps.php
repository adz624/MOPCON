<?php
include __DIR__ . '/src/init.php';

$lang_zh = json_decode(file_get_contents("locales/ticket-zh_TW.json"), true);
$lang_en = json_decode(file_get_contents("locales/ticket-en.json"), true);
$main = [
    'zh' => $lang_zh,
    'en' => $lang_en,
];
$params = [
    'pageid' => 'apps'
];
$params['og_url'] = 'apps.php';
$params['main']['ogdesc'] = 'MOPCON APP下載頁。';
$lang = getLang();

render('apps.twig', $params);
