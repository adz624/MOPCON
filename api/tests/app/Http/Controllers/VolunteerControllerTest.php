<?php

namespace Tests\App\Http\Controllers;

use TestCase;

class VolunteerController extends TestCase
{
    private $dataset;
    public function setUp() :void
    {
        parent::setUp();

        if (env('APP_ENV') === 'production') {
            $this->dataset = json_decode(file_get_contents(__DIR__ . '/../../../../resource/assets/json/volunteers.json'), true);
        } else {
            $this->dataset = json_decode(file_get_contents(__DIR__ . '/../../../../resource/assets/json/volunteers-dev.json'), true);
        }

    }

    public function testGetVolunteerList()
    {
        $response = $this->get('/api/volunteer/');
        $compared = [];
        $compared['volunteer'] = array_map(function ($value) {
            $value['photo'] = url($value['photo']);
            unset($value['introducion'], $value['members']);
            return $value;
        }, $this->dataset);

        $this->assertEquals(200, $this->response->status());

        $response->seeJsonEquals([
            'success' => true,
            'message' => 'success',
            'data' => $compared
        ]);
    }

    public function testGetVolunteer()
    {
        $volunteers = $this->dataset;
        $id = rand(1, count($volunteers));
        $response = $this->get('/api/volunteer/' . $id);
        $compared = $this->searchTargetById($volunteers, $id);

        $this->assertEquals(200, $this->response->status());

        $response->seeJsonEquals([
            'success' => true,
            'message' => 'success',
            'data' => $compared,
        ]);
    }

    public function testGetVolunteerWithNoExistId()
    {
        $volunteers = $this->dataset;
        $id = count($volunteers) + 1;
        $response = $this->get('/api/volunteer/' . $id);

        $this->assertEquals(404, $this->response->status());

        $response->seeJsonEquals([
            'success' => false,
            'message' => 'Not found',
            'data' => [],
        ]);
    }

    public function testGetVolunteerWithWrongIdType()
    {
        $volunteers = $this->dataset;
        $id = "info_team";
        $response = $this->get('/api/volunteer/' . $id);

        $this->assertEquals(400, $this->response->status());

        $response->seeJsonEquals([
            'success' => false,
            'message' => 'Bad request',
            'data' => [],
        ]);
    }

    private function searchTargetById($dataset, $targetId)
    {
        $result = array_filter($dataset, function ($subset) use ($targetId) {
            if ((int)$subset['id'] === (int)$targetId) {
                return true;
            }
        });

        $result = array_pop($result);

        if (isset($result['photo']) && $result['photo'] !== '') {
            $result['photo'] = url($result['photo']);
        }
        unset($result['id']);

        return $result;
    }
}
