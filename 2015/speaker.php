<?php
include __DIR__ . '/src/init.php';

$params = [
    'pageid' => 'speaker',
    'filemtime' => filemtime('src/speaker.php'),
    'speakers' => [],
];
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $params['speakers'] = [
        $id => getSpeakerById($id)
    ];
    $params['og_image'] = $params['speakers'][$id]['pic'];
    $params['og_url'] = 'speaker.php?id=' . $id;
    $params['main']['ogdesc'] = $params['speakers'][$id]['name'] . "\n" . $params['speakers'][$id]['title'] . "\n" . $params['speakers'][$id]['bio'];

} else {
    $params['og_url'] = 'speaker.php';
    $params['speakers'] = getAllSpeakers();
    $params['main']['ogdesc'] = '濁水溪以南最強大行動科技研討會，星光閃閃講師盡在這邊！'; 	
}

if (count($params['speakers']) === 0 || current($params['speakers']) === null) {
    header('Location: /2015/speaker.php');
    exit;
}
if (isset($_GET['api'])) {
    getJson($params);
}
render('speaker.twig', $params);
