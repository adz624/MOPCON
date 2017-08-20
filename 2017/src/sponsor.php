<?php
function getAllSponsors()
{
    // $jsonText = file_get_contents(__DIR__."/../api/sponsors.json");
    $lang_zh = json_decode(file_get_contents(__DIR__."/../api/sponsors.json"), true);
    $lang_en = json_decode(file_get_contents(__DIR__."/../api/sponsors.json"), true);
    $main = [
        'zh' => $lang_zh,
        'en' => $lang_en,
    ];
    return getI18n($main);
}
