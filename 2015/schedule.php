<?php
include __DIR__ . '/src/init.php';
$filemtime = (filemtime('src/schedule.php') > filemtime('src/speaker.php')) ? filemtime('src/schedule.php') : filemtime('src/speaker.php');
$params = [
    'pageid' => 'schedule',
    'filemtime' => $filemtime, 
    'schedules' => [],
];

if (isset($_GET['id'])) {
    $id = intval($_GET['id']);
    $params['schedules'] = getScheduleMergeSpeaker($id);

} else {
    $params['schedules'] = getScheduleMergeSpeaker();
}

if (count($params['schedules']) === 0 || current($params['schedules']) === null) {
    header('Location: /2015/schedule.php');
    exit;
}

if (isset($_GET['api'])) {
	getJson($params);
}
render(isset($_GET['id']) ? 'scheduleSingle.twig' : 'schedule.twig', $params);
