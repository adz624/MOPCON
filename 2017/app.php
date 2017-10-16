<?php
include __DIR__ . '/src/init.php';

$lang_zh = json_decode(file_get_contents("locales/ticket-zh_TW.json"), true);
$lang_en = json_decode(file_get_contents("locales/ticket-en.json"), true);
$main = [
    'zh' => $lang_zh,
    'en' => $lang_en,
];
$params = [
    'pageid' => 'app'
];
$params['og_url'] = 'app.php';
$params['main']['ogdesc'] = 'MOPCON APP下載頁。';
$lang = getLang();

render('app.twig', $params);
