<?php
require_once __DIR__ . '/../vendor/autoload.php';

$params = [
    'pageid' => 'code-of-conduct',
    'pagetitle' => '行為準則'
];
MopCon2018\Utils\Base::render('components/code-of-conduct.twig', $params);
