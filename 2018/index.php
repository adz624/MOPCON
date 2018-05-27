<?php
require_once __DIR__ . '/../vendor/autoload.php';

$params = [
    'pageid' => 'index',
];
MopCon2018\Utils\Base::render('components/index.twig', $params ?? []);
