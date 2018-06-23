<?php
namespace MopConApi2018\App\Http;

use MopCon2018\Utils\GoogleDocsSpreadsheet;

class ApiController extends Controller
{
    private $sourceFrom;
    private $resource;
    private $jsonOptions;

    public function __invoke($request, $response, $args)
    {
        $this->sourceFrom = $request->getAttribute('sourceFrom');
        $this->resource = $request->getAttribute('resource');
        $this->resourceName = $request->getAttribute('routesParsed')[0];
        $this->jsonOptions = JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE | JSON_FORCE_OBJECT | JSON_PRETTY_PRINT;

        $this->{$this->transform2Method($this->resourceName)}($request, $response, $args);
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
        return $response->withHeader('Content-Type: application/json')
            ->getBody()->write(json_encode($this->resource, $this->jsonOptions));
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
        $apiData = new GoogleDocsSpreadsheet(
            $this->resource['sheetKey'],
            $this->resource['columns'],
            $this->resource['sheetGridId']
        );

        # custom processing codes...

        return $response = $response->withHeader('Content-Type: application/json')
            ->getBody()->write($apiData->toJson($this->jsonOptions));
    }

    private function accessScheduleUnconf($request, $response, $args)
    {
        $apiData = new GoogleDocsSpreadsheet(
            $this->resource['sheetKey'],
            $this->resource['columns'],
            $this->resource['sheetGridId']
        );

        $scheduleUnconfData = [];

        foreach ($apiData->toArray() as $rowIndex => $rowData) {
            foreach ($rowData as $columnName => $columnVal) {
                preg_match('/^(.*)_([0-9]+)/', $columnName, $result);
                if (!$result) {
                    $scheduleUnconfData['day1'][$rowIndex][$columnName] = $columnVal;
                } else {
                    $theDay = 'day' . $result[2];
                    $columnNameNew = $result[1];

                    $scheduleUnconfData[$theDay][$rowIndex][$columnNameNew] = $columnVal;
                }
            }
        }

        return $response = $response->withHeader('Content-Type: application/json')
            ->getBody()->write(json_encode($scheduleUnconfData, $this->jsonOptions));
    }

    private function accessSpeaker($request, $response, $args)
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

    private function accessSponsor($request, $response, $args)
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
}
