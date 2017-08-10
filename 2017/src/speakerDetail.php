<?php
function getAllSpeakerDetail($speaker)
{
    $lang_zh = json_decode(file_get_contents("locales/speakerDetail-zh_TW.json"), true);
    $lang_en = json_decode(file_get_contents("locales/speakerDetail-en.json"), true);
    $main = [
        'zh' => $lang_zh[$speaker],
        'en' => $lang_en[$speaker],
    ];

    return getI18n($main);
}
