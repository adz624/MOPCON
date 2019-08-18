<?php

class SponsorController extends TestCase
{
    private $dataset;
    public function setUp() :void
    {
        parent::setUp();
        $env = env('APP_ENV') ? env('APP_ENV') : 'production';
        $sponsorfilePath = __DIR__ . '/../../../../resource/assets/json/' . ($env == 'production' ? 'sponsor.json' : 'sponsor-dev.json') ;
        $this->dataset = json_decode(file_get_contents($sponsorfilePath), true);
    }
    public function testGetAllSponsor()
    {
        $response = $this->get('/api/2019/sponsor');
        $data = [
            'tony_stark' => [],
            'bruce_wayne' => [],
            'hacker' => [],
            'geek' => [],
            'developer' => [],
            'special_cooperation' => [],
            'special_thanks' => [],
            'education' => []
        ];
        foreach ($this->dataset as $index => $sponsor) {
            array_push($data[$sponsor['sponsor_type']], $sponsor);
        }
        $this->assertEquals(200, $this->response->status());
        $response->seeJsonEquals([
            'success' => true,
            'message' => 'success',
            'data' => $data
        ]);
    }
    public function testGetSpecificSponsor()
    {
        $data = [];
        $id = ['g1', 'a1', 'a2'];
        $response = $this->get('/api/2019/sponsor?sponsor_id=' . implode(',', $id));
        foreach ($this->dataset as $index => $sponsor) {
            if (in_array($sponsor['sponsor_id'], $id)) {
                array_push($data, $sponsor);
            }
        }
        $this->assertEquals(200, $this->response->status());
        $response->seeJsonEquals([
            'success' => true,
            'message' => 'success',
            'data' => $data
        ]);
    }
    public function testGetWrongSpecificSponsor()
    {
        $data = [];
        $id = ['aaa', 'bbb'];
        $response = $this->get('/api/2019/sponsor?sponsor_id=' . implode(',', $id));
        foreach ($this->dataset as $index => $sponsor) {
            if (in_array($sponsor['sponsor_id'], $id)) {
                array_push($data, $sponsor);
            }
        }
        $this->assertEquals(404, $this->response->status());
        $response->seeJsonEquals([
            'success' => false,
            'message' => 'Not found',
            'data' => [],
        ]);
    }
}
