<?php
include __DIR__ . '/src/init.php';

$templates = [
    'zh' => 'community.twig',
    // 'en' => 'speaker_en.twig',
];

$lang = getLang();
if($lang!=='zh') {
    header("Location:./");
}
$template = isset($templates[$lang]) ? $templates[$lang] : $templates['zh'];

$pageid = 'community';
$params = [
    'pageid' => $pageid,
    'filemtime' => getLastUpdateTime($pageid),
    'community' => getAllCommunities(),
];

if (isset($_GET['api'])) {
    getJson($params);
}
render($template, $params);
