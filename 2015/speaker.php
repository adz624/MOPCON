<?php
include __DIR__ . '/src/init.php';

$params = [
    'pageid' => 'speaker',
    'speakers' => [],
];

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $params['og_image'] = 'speaker/' . $params['speakers'][0]['pic'];
    $params['speakers'] = [
        $id => getSpeakerById($id)
    ];
} else {
    $params['speakers'] = getAllSpeakers();
}

if (count($params['speakers']) === 0 || current($params['speakers']) === null) {
    header('Location: /2015/speaker.php');
    exit;
}

render('speaker.twig', $params);
