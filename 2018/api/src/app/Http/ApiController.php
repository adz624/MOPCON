<?php
namespace MopConApi2018\App\Http;

use MopCon2018\Utils\GoogleDocsSpreadsheet;
use MopConApi2018\App\Models\MopConResource;

class ApiController extends Controller
{
    private $sourceFrom;
    private $resource;
    private $jsonOptions;
    private $fullUrlToAssets;

    public function __invoke($request, $response, $args)
    {
        $this->sourceFrom = $request->getAttribute('sourceFrom');
        $this->resource = $request->getAttribute('resource');
        $this->resourceName = $request->getAttribute('routesParsed')[0];
        $this->jsonOptions = JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT;
        $this->fullUrlToAssets = $request->getUri()->getScheme() . '://' . $request->getUri()->getHost() . '/2018/assets';

        return $this->{$this->transform2Method($this->resourceName)}($request, $response, $args);
    }

    private function transform2Method($str)
    {
        $array = explode('-', $str);
        array_walk($array, function (&$value) {
            $value = ucfirst($value);
        });
        array_unshift($array, 'access');

        return implode('', $array);
    }

    /**
     * Output Available Resource List
     *
     * @param [type] $request
     * @param [type] $response
     * @param [type] $args
     * @return $response
     */
    private function accessPublic($request, $response, $args)
    {
        return $response->withJson($this->resource, 200, $this->jsonOptions);
    }

    private function accessCodeOfConduct($request, $response, $args)
    {
        $apiData = new GoogleDocsSpreadsheet(
            $this->resource['sheetKey'],
            $this->resource['columns'],
            $this->resource['sheetGridId']
        );

        # custom processing codes...

        return $response = $response->withHeader('Content-Type: application/json')
            ->getBody()->write($apiData->toJson($this->jsonOptions));
    }

    private function accessSchedule($request, $response, $args)
    {
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
                    )
                ];
            }

            $agenda[] = compact('date', 'items');
        }

        return $response = $response->withJSON(
            [
                'payload' => [
                    'agenda' => $agenda,
                    'talk' => $scheduleUnconf
                ]
            ],
            200,
            $this->jsonOptions
        );
    }

    private function accessScheduleUnconf($request, $response, $args)
    {
        $scheduleUnconfData = MopConResource::getScheduleUnconf();

        return $response = $response->withJson(['payload' => $scheduleUnconfData], 200, $this->jsonOptions);
    }

    private function accessSpeaker($request, $response, $args)
    {
        $apiDataArray = MopConResource::getSpeaker($this->fullUrlToAssets);
        $response = $response->withJson(['payload' => $apiDataArray], 200, $this->jsonOptions);

        return $response;
    }

    private function accessSponsor($request, $response, $args)
    {
        $apiData = new GoogleDocsSpreadsheet(
            $this->resource['sheetKey'],
            $this->resource['columns'],
            $this->resource['sheetGridId']
        );

        $apiDataArray = $apiData->toArray();

        foreach ($apiDataArray as $key => &$value) {
            if (!empty($value['logo'])) {
                $value['logo'] = $this->fullUrlToAssets . '/images/sponsor/' . $value['logo'];
            }
        }

        $response = $response->withJson(['payload' => $apiDataArray], 200, $this->jsonOptions);
        return $response;
    }

    private function accessCommunity($request, $response, $args)
    {
        $apiData = new GoogleDocsSpreadsheet(
            $this->resource['sheetKey'],
            $this->resource['columns'],
            $this->resource['sheetGridId']
        );

        $apiDataArray = $apiData->toArray();

        foreach ($apiDataArray as $key => &$value) {
            if (!empty($value['logo'])) {
                $value['logo'] = $this->fullUrlToAssets . '/images/community/' . $value['logo'];
            }
        }

        $response = $response->withJson(['payload' => $apiDataArray], 200, $this->jsonOptions);
        return $response;
    }

    private function accessVolunteer($request, $response, $args)
    {
        $apiData = new GoogleDocsSpreadsheet(
            $this->resource['sheetKey'],
            $this->resource['columns'],
            $this->resource['sheetGridId']
        );

        $apiDataArray = $apiData->toArray();

        $response = $response->withJson(['payload' => $apiDataArray], 200, $this->jsonOptions);
        return $response;
    }

    private function accessCarousel($request, $response, $args)
    {
        $apiData = new GoogleDocsSpreadsheet(
            $this->resource['sheetKey'],
            $this->resource['columns'],
            $this->resource['sheetGridId']
        );

        $apiDataArray = $apiData->toArray();

        foreach ($apiDataArray as $key => &$value) {
            if (!empty($value['banner'])) {
                $value['banner'] = $this->fullUrlToAssets . '/images/carousel/' . $value['banner'];
            }
        }

        $response = $response->withJson(['payload' => $apiDataArray], 200, $this->jsonOptions);
        return $response;
    }

    private function accessNews($request, $response, $args)
    {
        $apiData = new GoogleDocsSpreadsheet(
            $this->resource['sheetKey'],
            $this->resource['columns'],
            $this->resource['sheetGridId']
        );

        $apiDataArray = $apiData->toArray();

        $response = $response->withJson(['payload' => $apiDataArray], 200, $this->jsonOptions);
        return $response;
    }
}
