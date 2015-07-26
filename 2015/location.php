<?php
include __DIR__ . '/src/init.php';

$main = [
    'tc' => [
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
