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
        return $this->output('schedule', function () {
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

            return json_encode($apiData);
        });
    }

    public function getSpeaker()
    {
        return $this->output('speaker', function () {
            $apiDataArray = MopConResource::getSpeaker($this->fullUrlToAssets);
            $apiDataArray = array_filter($apiDataArray, function ($row) {
                return !empty($row['speaker_id']);
            });
            $apiData = ['payload' => $apiDataArray];

            $apiData_json = json_encode($apiData);

            return $apiData_json;
        });
    }

    public function getSponsor()
    {
        return $this->output('sponsor', function () {
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

            return $apiData_json;
        });
    }

    public function getScheduleUnconf()
    {
        return $this->output('unconf', function () {
            $scheduleUnconfData = MopConResource::getScheduleUnconf();
            $apiData = ['payload' => $scheduleUnconfData];

            $apiData_json = json_encode($apiData);

            return $apiData_json;
        });
    }

    public function getCommunity()
    {
        return $this->output('community', function () {
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

            return $apiData_json;
        });
    }

    public function getVolunteer()
    {
        return $this->output('volunteer', function () {
            $apiData = new GoogleDocsSpreadsheet(
                MopConResource::getSourceInfo()['googleSheet']['volunteer']['sheetKey'],
                MopConResource::getSourceInfo()['googleSheet']['volunteer']['columns'],
                MopConResource::getSourceInfo()['googleSheet']['volunteer']['sheetGridId']
            );

            $apiDataArray = $apiData->toArray();

            $apiData = ['payload' => $apiDataArray];
            $apiData_json = json_encode($apiData);

            return $apiData_json;
        });
    }

    public function getCarousel()
    {
        return $this->output('carousel', function () {
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

            return $apiData_json;
        });
    }

    public function getNews()
    {
        return $this->output('news', function () {
            $apiData = new GoogleDocsSpreadsheet(
                MopConResource::getSourceInfo()['googleSheet']['news']['sheetKey'],
                MopConResource::getSourceInfo()['googleSheet']['news']['columns'],
                MopConResource::getSourceInfo()['googleSheet']['news']['sheetGridId']
            );

            $apiDataArray = array_reverse($apiData->toArray());

            $apiData = ['payload' => $apiDataArray];
            $apiData_json = json_encode($apiData);

            return $apiData_json;
        });
    }

    private function output($name, $function)
    {
        $redis_key = Base::getRedisKey($name);
        $redis_data = $this->redis->get($redis_key);
        if ($redis_data) {
            return $redis_data;
        }

        $apiData_json = $function->__invoke();
        $this->redis->setex($redis_key, 600, $apiData_json);

        return $apiData_json;
    }
}
