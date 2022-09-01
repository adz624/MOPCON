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
}
