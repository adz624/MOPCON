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
