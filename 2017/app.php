<?php
include __DIR__ . '/src/init.php';

$lang_zh = json_decode(file_get_contents("locales/ticket-zh_TW.json"), true);
$lang_en = json_decode(file_get_contents("locales/ticket-en.json"), true);
$main = [
    'zh' => $lang_zh,
    'en' => $lang_en,
];

$lang = getLang();
$params = [
    'pageid' => 'app'
];
render('app.twig', $params);
