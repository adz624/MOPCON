<?php
include __DIR__ . '/src/init.php';

$main = [
    'zh' => [
        'pagetitle' => '地圖',
    ],
    'en' => [
        'pagetitle' => 'Location',
    ],
];

$main = getI18n($main);

render('location.twig', [
    'pageid' => 'location',
    'main' => $main,
]);
