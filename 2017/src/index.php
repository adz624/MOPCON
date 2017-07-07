<?php
function getIndex()
{
    $lang_zh = json_decode(file_get_contents("https://cdn.rawgit.com/Wcc723/mopcon_2017_back_end/master/locales/zh_TW.json"), true);
    $lang_en = json_decode(file_get_contents("https://cdn.rawgit.com/Wcc723/mopcon_2017_back_end/master/locales/en.json"), true);
    $main = [
        'zh' => $lang_zh,
        'en' => $lang_en,
    ];
    return getI18n($main);
}