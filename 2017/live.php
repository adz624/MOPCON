<?php
include __DIR__ . '/src/init.php';
$google_data = json_decode(file_get_contents("https://spreadsheets.google.com/feeds/list/1c5oNnKMsbgccDAMZge04lfJh_EHDxciBlAy8DMv2fMU/1/public/values?alt=json"), true);
$google_data = $google_data['feed']['entry'];

$pageid = 'live';
$params = [
    'pageid' => $pageid,
    'stream' => getStream(), 
    'badges' => [],
];




if (isset($_GET['api'])) {
	getJson($params);
}
render('live.twig', $params);
