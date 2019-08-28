<?php

namespace App\Service;

class SpeakerService
{
    private $tagGroup = [
        'design' => [
            'UI/UX',
        ],
        'other' => [
            'Startup',
        ],
        'tech' => [],
    ];
    private $tagGroupColor = [
        'design' => '#98ce02',
        'other' => '#ff4492',
        'tech' => '#01aaf0',
    ];
    private $hidden_fields = [
        'photo_for_speaker_web',
        'photo_for_speaker_mobile',
        'photo_for_session_web',
        'photo_for_session_mobile',
        'photo_for_sponsor_web',
        'photo_for_sponsor_mobile',
        'tags',
    ];

    public function parse(array $row, string $type = 'speaker')
    {
        $tags = $this->parseTags($row['tags']);
        $row['img'] = [
            'web' => $row['photo_for_' . $type . '_web'],
            'mobile' => $row['photo_for_' . $type . '_mobile'],
        ];
        foreach ($row as $key => $value) {
            if (in_array($key, $this->hidden_fields)) {
                unset($row[$key]);
            }
        }
        $row['tags'] = $tags;

        return $row;
    }

    public function parseTags(array $tags): array
    {
        $result = [];
        foreach ($tags as $tag) {
            $found = false;
            foreach ($this->tagGroup as $type => $groupTags) {
                if (in_array($tag, $groupTags)) {
                    $result[] = [
                        'color' => $this->tagGroupColor[$type],
                        'name' => $tag,
                    ];
                    $found = true;
                    break;
                }
            }
            if (!$found) {
                $result[] = [
                    'color' => $this->tagGroupColor['tech'],
                    'name' => $tag,
                ];
            }
        }

        return $result;
    }
}
