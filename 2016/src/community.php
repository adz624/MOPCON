<?php
function getAllCommunities()
{
    $jsonText = file_get_contents(__DIR__."/../api/community.json");
    $jsonArr = json_decode($jsonText,true);
    return $jsonArr;
}
