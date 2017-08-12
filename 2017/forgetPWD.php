<?php
include __DIR__ . '/src/init.php';

$pageid = 'forgetPWD';
$params = [
    'pageid' => $pageid,
    'filemtime' => getLastUpdateTime($pageid), 
    'heatmaps' => [],
];

$params['forgetPWDs'] = getScheduleMergeSpeaker();


if (isset($_GET['api'])) {
	getJson($params);
}
render('forgetPWD.twig', $params);
