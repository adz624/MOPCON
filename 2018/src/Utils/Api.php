<?php
namespace MopCon2018\Utils;

use MopConApi2018\App\Models\MopConResource;
use MopCon\RedisFactory;

class Api
{
    protected $config;
    protected $fullUrlToAssets;
    protected $redis;

    public function __construct()
    {
        $this->config = Base::getConfig();
        $this->fullUrlToAssets = Base::getBaseUri() . '/2018/assets';
        $this->redis = (new RedisFactory())->create();
    }

    public function getSchedule()
    {
        $redis_key = Base::getRedisKey('schedule');
        $redis_data = $this->redis->get($redis_key);
        if ($redis_data) {
            return $redis_data;
        }

        $schedule = MopConResource::getSchedule($this->fullUrlToAssets);
        $scheduleUnconf = MopConResource::getScheduleUnconf();

        $agenda = [];
        foreach (array_unique(array_column($schedule, 'date')) as $date) {
            $items = [];

            $scheduleByDate = array_values(
                array_filter($schedule, function ($row) use ($date) {
                    return $row['date'] == $date;
                })
            );

            $durations = array_unique(array_column($scheduleByDate, 'duration'));
            sort($durations);

            foreach ($durations as $duration) {
                $items[] = [
                    'duration' => $duration,
                    'agendas' => array_values(
                        array_filter($scheduleByDate, function ($row) use ($duration) {
                            return $row['duration'] == $duration;
                        })
                    ),
                ];
            }

            $agenda[] = compact('date', 'items');
        }

        $apiData = [
            'payload' => [
                'agenda' => $agenda,
                'talk' => $scheduleUnconf,
            ],
        ];

        $apiData_json = json_encode($apiData);
        $this->redis->setex($redis_key, 600, $apiData_json);

        return $apiData_json;
    }

    public function getSpeaker()
    {
        $redis_key = Base::getRedisKey('speaker');
        $redis_data = $this->redis->get($redis_key);
        if ($redis_data) {
            return $redis_data;
        }

        $apiDataArray = MopConResource::getSpeaker($this->fullUrlToAssets);
        $apiDataArray = array_filter($apiDataArray, function ($row) {
            return !empty($row['speaker_id']);
        });
        $apiData = ['payload' => $apiDataArray];

        $apiData_json = json_encode($apiData);
        $this->redis->setex($redis_key, 600, $apiData_json);

        return $apiData_json;
    }

    public function getSponsor()
    {
        $redis_key = Base::getRedisKey('sponsor');
        $redis_data = $this->redis->get($redis_key);
        if ($redis_data) {
            return $redis_data;
        }
        $apiData = new GoogleDocsSpreadsheet(
            MopConResource::getSourceInfo()['googleSheet']['sponsor']['sheetKey'],
            MopConResource::getSourceInfo()['googleSheet']['sponsor']['columns'],
            MopConResource::getSourceInfo()['googleSheet']['sponsor']['sheetGridId']
        );

        $apiDataArray = $apiData->toArray();

        foreach ($apiDataArray as $key => &$value) {
            if (!empty($value['logo'])) {
                $value['logo'] = $this->fullUrlToAssets . '/images/sponsor/' . $value['logo'];
            }
        }
        $apiData = ['payload' => $apiDataArray];

        $apiData_json = json_encode($apiData);
        $this->redis->setex($redis_key, 600, $apiData_json);

        return $apiData_json;
    }

    public function getScheduleUnconf()
    {
        $redis_key = Base::getRedisKey('unconf');
        $redis_data = $this->redis->get($redis_key);
        if ($redis_data) {
            return $redis_data;
        }

        $scheduleUnconfData = MopConResource::getScheduleUnconf();
        $apiData = ['payload' => $scheduleUnconfData];

        $apiData_json = json_encode($apiData);
        $this->redis->setex($redis_key, 600, $apiData_json);

        return $apiData_json;
    }

    public function getCommunity()
    {
        $redis_key = Base::getRedisKey('community');
        $redis_data = $this->redis->get($redis_key);
        if ($redis_data) {
            return $redis_data;
        }

        $apiData = new GoogleDocsSpreadsheet(
            MopConResource::getSourceInfo()['googleSheet']['community']['sheetKey'],
            MopConResource::getSourceInfo()['googleSheet']['community']['columns'],
            MopConResource::getSourceInfo()['googleSheet']['community']['sheetGridId']
        );

        $apiDataArray = $apiData->toArray();

        foreach ($apiDataArray as $key => &$value) {
            if (!empty($value['logo'])) {
                $value['logo'] = $this->fullUrlToAssets . '/images/community/' . $value['logo'];
            }
        }

        $apiData = ['payload' => $apiDataArray];
        $apiData_json = json_encode($apiData);
        $this->redis->setex($redis_key, 600, $apiData_json);

        return $apiData_json;
    }

    public function getVolunteer()
    {
        $redis_key = Base::getRedisKey('volunteer');
        $redis_data = $this->redis->get($redis_key);
        if ($redis_data) {
            return $redis_data;
        }

        $apiData = new GoogleDocsSpreadsheet(
            MopConResource::getSourceInfo()['googleSheet']['volunteer']['sheetKey'],
            MopConResource::getSourceInfo()['googleSheet']['volunteer']['columns'],
            MopConResource::getSourceInfo()['googleSheet']['volunteer']['sheetGridId']
        );

        $apiDataArray = $apiData->toArray();

        $apiData = ['payload' => $apiDataArray];
        $apiData_json = json_encode($apiData);
        $this->redis->setex($redis_key, 600, $apiData_json);

        return $apiData_json;
    }

    public function getCarousel()
    {
        $redis_key = Base::getRedisKey('carousel');
        $redis_data = $this->redis->get($redis_key);
        if ($redis_data) {
            return $redis_data;
        }

        $apiData = new GoogleDocsSpreadsheet(
            MopConResource::getSourceInfo()['googleSheet']['carousel']['sheetKey'],
            MopConResource::getSourceInfo()['googleSheet']['carousel']['columns'],
            MopConResource::getSourceInfo()['googleSheet']['carousel']['sheetGridId']
        );

        $apiDataArray = $apiData->toArray();

        foreach ($apiDataArray as $key => &$value) {
            if (!empty($value['banner'])) {
                $value['banner'] = $this->fullUrlToAssets . '/images/carousel/' . $value['banner'];
            }
        }

        $apiData = ['payload' => $apiDataArray];
        $apiData_json = json_encode($apiData);
        $this->redis->setex($redis_key, 600, $apiData_json);

        return $apiData_json;
    }

    public function getNews()
    {
        $redis_key = Base::getRedisKey('news');
        $redis_data = $this->redis->get($redis_key);
        if ($redis_data) {
            return $redis_data;
        }

        $apiData = new GoogleDocsSpreadsheet(
            MopConResource::getSourceInfo()['googleSheet']['news']['sheetKey'],
            MopConResource::getSourceInfo()['googleSheet']['news']['columns'],
            MopConResource::getSourceInfo()['googleSheet']['news']['sheetGridId']
        );

        $apiDataArray = array_reverse($apiData->toArray());

        $apiData = ['payload' => $apiDataArray];
        $apiData_json = json_encode($apiData);
        $this->redis->setex($redis_key, 600, $apiData_json);

        return $apiData_json;
    }
}
