<?php
include __DIR__ . '/src/init.php';

$main = [
    'zh' => [
        'pagetitle' => '主辦社群',
        'community_list' => '社群列表',
    ],
    'en' => [
        'pagetitle' => 'Organizing Communities',
        'community_list' => 'Community List',
    ],
];



$main = getI18n($main);
$params = [
    'pageid' => 'community',
    'filemtime' => filemtime('src/community.php'),
    'main' => $main,
    'communities' => getAllCommunities(),

];
if (isset($_GET['api'])) {
    getJson($params);
}
render('community.twig', $params);
