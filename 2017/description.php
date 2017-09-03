<?php
include __DIR__ . '/src/init.php';

$pageid = 'description';
$params = [
    'pageid' => $pageid,
    'filemtime' => getLastUpdateTime($pageid), 
    'descriptions' => [],
];

$params['description'] = getScheduleMergeSpeaker();


if (isset($_GET['api'])) {
	getJson($params);
}
render('description.twig', $params);
