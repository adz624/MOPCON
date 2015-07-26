<?php
include __DIR__ . '/src/init.php';

$main = [
    'zh' => [
        'pagetitle' => '主辦社群',
    ],
    'en' => [
        'pagetitle' => 'Organizing Communities',
    ],
];

$main = getI18n($main);

render('community.twig', [
    'pageid' => 'community',
    'main' => $main,
]);
