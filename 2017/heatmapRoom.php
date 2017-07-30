<?php
include __DIR__ . '/src/init.php';

$pageid = 'heatmapRoom';
$params = [
    'pageid' => $pageid,
    'filemtime' => getLastUpdateTime($pageid), 
    'heatmapRooms' => [],
];

$params['heatmaps'] = getScheduleMergeSpeaker();


if (isset($_GET['api'])) {
	getJson($params);
}
render('heatmapRoom.twig', $params);
