<?php

namespace App\Service;

class SpeakerService
{
    private $tagGroup;
    private $tagDefaultColor;
    private $hidden_fields = [
        'photo_for_speaker_web',
        'photo_for_speaker_mobile',
        'photo_for_session_web',
        'photo_for_session_mobile',
        'photo_for_sponsor_web',
        'photo_for_sponsor_mobile',
        'tags',
    ];
    private $sessionSpeakerMapping = [];

    public function __construct(array $sessionAry, $tagGroupSetting)
    {
        $this->initSessionSpeakerMapping($sessionAry);
        $this->initTagGroup($tagGroupSetting);
    }

    public function getSessionSpeakerMapping(): array
    {
        return $this->sessionSpeakerMapping;
    }

    public function parse(array $row, string $type = 'speaker')
    {
        $row['session_id'] = $this->sessionSpeakerMapping[$row['speaker_id']] ?? 0;
        $tags = $this->parseTags($row['tags']);
        $filterKeys = [
            'photo_for_' . $type . '_web',
            'photo_for_' . $type . '_mobile'
        ];
        if (isset($row[$filterKeys[0]]) || isset($row[$filterKeys[0]])) {
            foreach ($filterKeys as $filterkey) {
                if (!filter_var($filterkey, FILTER_VALIDATE_URL)) {
                    $row[$filterkey] = url(str_replace('/api', '/', $row[$filterkey]));
                }
            }
            $row['img'] = [
                'web' => $row['photo_for_' . $type . '_web'],
                'mobile' => $row['photo_for_' . $type . '_mobile'],
            ];
        }
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
            foreach ($this->tagGroup as $group) {
                if (in_array($tag, $group["members"])) {
                    $result[] = [
                        'color' => $group["color"],
                        'name' => $tag,
                    ];
                    $found = true;
                    break;
                }
            }
            if (!$found) {
                $result[] = [
                    'color' => $this->tagDefaultColor,
                    'name' => is_array($tag) ? $tag['name'] : $tag,
                ];
            }
        }
        return $result;
    }

    /**
     * 初始化講者與議程對應
     * @param array $sessionAry
     */
    private function initSessionSpeakerMapping(array $sessionAry)
    {
        foreach ($sessionAry as $schedule) {
            foreach ($schedule['period'] as &$period) {
                if (empty($period['room'])) {
                    continue;
                }
                foreach ($period['room'] as $room) {
                    if (isset($room['speaker_id'])) {
                        if (is_array($room['speaker_id'])) {
                            foreach ($room['speaker_id'] as $id) {
                                $this->sessionSpeakerMapping[$id] = $room['session_id'];
                            }
                            continue;
                        }
                        $this->sessionSpeakerMapping[$room['speaker_id']] = $room['session_id'];
                    } else {
                        if (isset($room['speakers'])) {
                            foreach ($room['speakers'] as $speaker) {
                                $this->sessionSpeakerMapping[$speaker['speaker_id']] = $room['session_id'];
                            }
                        }
                    }
                }
            }
        }
    }

    /**
     * 初始化標籤群組
     * @param object $tagGroupSetting
     */
    private function initTagGroup($tagGroupSetting)
    {
        $this->tagGroup = $tagGroupSetting["group"];
        $this->tagDefaultColor = $tagGroupSetting["defaultColor"];
    }
}
