<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UnconfController extends Controller
{
    use ApiTrait;

    protected $function = 'unconf';
    private $missingStructure = [
        'isBroadCast' => '',
        'event' => '',
        'room' => [
            'company' => '',
            'company_e' => '',
            'job_title' => '',
            'job_title_e' => '',
            'summary' => '',
            'summary_e' => '',
            'is_keynote' => false,
            'room' => 'UnConf',
            'floor' => '3F',
            'img' => [
                'web' => '',
                'mobile' => ''
            ],
            'tags' => [],
            'recordable' => true,
            'level' => 'Basic',
            'sponsor_info' => [
                'name' => '',
                'name_e' => '',
                'logo_path' => ''
            ]
        ]
    ];

    /**
     * fill correct format into json
     */
    public function __construct()
    {
        parent::__construct();
        $this->mapMissingStructure();
    }

    /**
     * return all unconf data.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function index()
    {
        return $this->returnSuccess('success', $this->jsonAry);
    }

    /**
     * return specific tags of unconf data.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function getUnconfList(Request $request)
    {
        $tagsStr = $request->get('tags', '');
        $tagsArr = $tagsStr == '' ? [] : explode(',', $tagsStr);
        $result = [];
        // loop over everyday
        array_walk($this->jsonAry, function ($subset) use (&$result, &$tagsArr) {
            // loop over every period
            array_walk($subset['period'], function ($unconf) use (&$result, &$tagsArr){
                // merge specific data in result
                $result = array_merge($result, array_filter($unconf['room'], function ($room) use (&$tagsArr){
                    foreach ($room['tags'] as $key => $tags) {
                        // if this confernce contain the tags we want
                        if(in_array($tags['name'], $tagsArr)){
                            return true;
                        }
                    }
                    return false;
                }));
            });
        });
        if ($result == []) {
            return $this->returnNotFoundError();
        }
        return $this->returnSuccess('success', $result);
    }

    /**
     * return specific id of unconf data.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function show($id)
    {
        if (!is_numeric($id)) {
            return $this->returnError('Bad request');
        }
        $unconfs = $this->unconfIdMap($this->jsonAry);
        if (isset($unconfs[$id])) {
            return $this->returnSuccess('success', $unconfs[$id]);
        }
        return $this->returnNotFoundError();
    }

    /**
     * map all id and unconf conference.
     *
     * we can store result into redis so we don't have to do that over and over again.
     *
     * @return array
     */
    private function unconfIdMap(array $rawArr)
    {
        $result = [];
        // loop over everyday
        array_walk($rawArr, function ($subset) use (&$result) {
            // loop over every period
            array_walk($subset['period'], function ($unconf) use (&$result){
                 // loop over every room
                array_walk($unconf['room'], function ($room) use (&$result){
                    $result[$room['session_id']] = $room;
                });
            });
        });
        return $result;
    }

    private function mapMissingStructure()
    {
        // loop over everyday
        foreach ($this->jsonAry as $key => &$subset){
            // loop over every period
            foreach ($subset['period'] as $periodKey => &$periodSubset){
                $periodSubset = array_merge_recursive($this->missingStructure, $periodSubset);
            }
        }
    }
}
