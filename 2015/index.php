<?php
include __DIR__ . '/src/init.php';

$templates = [
    'zh' => 'index.twig',
    'en' => 'index_en.twig',
];

$lang = getLang();
$template = isset($templates[$lang]) ? $templates[$lang] : $templates['zh'];

$params = [
    'pageid' => 'index',
    'filemtime' => filemtime('index.php'), 
    'data' => null,
];

if (isset($_GET['api'])) {
	getJson($params);
}

render($template, $params);
