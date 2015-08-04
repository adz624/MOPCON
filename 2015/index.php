<?php
include __DIR__ . '/src/init.php';

$templates = [
    'zh' => 'index.twig',
    'en' => 'index_en.twig',
];

$lang = getLang();
$template = isset($templates[$lang]) ? $templates[$lang] : $templates['zh'];
render($template, [
    'pageid' => 'index',
]);
