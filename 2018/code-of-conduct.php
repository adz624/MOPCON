<?php
require_once __DIR__ . '/../vendor/autoload.php';

$params = [
    'pageid' => 'code_of_conduct',
];
MopCon2018\Utils\Base::render('components/code-of-conduct.twig', $params);
