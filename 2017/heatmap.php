<?php
include __DIR__ . '/src/init.php';

$pageid = 'heatmap';
$params = [
    'pageid' => $pageid,
    'filemtime' => getLastUpdateTime($pageid), 
    'heatmaps' => [],
];

$params['heatmaps'] = getScheduleMergeSpeaker();


if (isset($_GET['api'])) {
	getJson($params);
}
render('heatmap.twig', $params);
