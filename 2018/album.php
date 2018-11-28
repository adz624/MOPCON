<?php
require_once __DIR__ . '/../vendor/autoload.php';

$params = [
    'pageid' => 'album',
    'pagetitle' => '相簿',
    // 'i18n' => file_get_contents(__DIR__ . )
];

// file_get_contents();
// MopCon2018\Utils\Base::getL10n();
MopCon2018\Utils\Base::render('components/album.twig', $params);
