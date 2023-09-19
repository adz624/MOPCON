<?php

namespace App\Service;

class SessionService
{
    public static function transportMultipleSpeaker(&$session): array
    {
        $columns = [
            'name',
            'name_e',
            'speaker_id',
            'company',
            'company_e',
            'job_title',
            'job_title_e',
            'img',
            'link_fb',
            'link_github',
            'link_twitter',
            'link_other',
        ];

        $result = [];
        foreach ($columns as $column) {
            $result[$column] = $session[$column];
            unset($session[$column]);
        }

        return $result;
    }

    public static function transToSession($jsonArray, $sponsor): array
    {
        $period = array_column($jsonArray, 'period');
        $sections = array_column(array_merge(...$period), 'room');
        $sessions = [];
        foreach ($sections as $section) {
            if (empty($section)) continue;
            foreach ($section as $room) {
                if (isset($sponsor[$room['sponsor_id']])) {
                    $room['sponsor_info'] = $sponsor[$room['sponsor_id']];
                }
                $sessions[$room['session_id']] = $room;
            }
        }
        return $sessions;
    }
}
