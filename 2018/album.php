<?php
require_once __DIR__ . '/../vendor/autoload.php';
function getAlbum()
{
    $jsonText = file_get_contents(__DIR__ . "/locales/album/photodata.json");
    $jsonArr = json_decode($jsonText, true);
    $returnArr = $jsonArr;

    
    return $returnArr;
}
$params = [
    'pageid' => 'album',
    'pagetitle' => '相簿',
    'album' => getAlbum()
    // 'i18n' => file_get_contents(__DIR__ . )
];

// file_get_contents();
// MopCon2018\Utils\Base::getL10n();
MopCon2018\Utils\Base::render('components/album.twig', $params);
