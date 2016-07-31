<?php
function getAllSpeakers()
{
    $jsonText = file_get_contents(__DIR__."/../api/speakers.json");
    $jsonArr = json_decode($jsonText,true);
    return $jsonArr;
}
