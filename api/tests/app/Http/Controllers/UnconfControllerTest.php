<?php

class UnconfControllerTest extends TestCase
{
    public function setUp() : void
    {
        parent::setUp();
        putenv('APP_ENV=develop');
    }
    public function testAllUnconf()
    {
        $response = $this->call('GET', '/api/2019/unconf');
        $result = json_decode($response->getContent(), true);
        $this->assertEquals(true, $result['success']);
    }

    public function testSpecificUnconf()
    {
        $id = '2019101';
        $response = $this->call('GET', '/api/2019/unconf/' . $id);
        $result = json_decode($response->getContent(), true);
        $this->assertEquals(true, $result['success']);
    }

    public function testSpecificTagsUnconf()
    {
        $tags = ['Blockchain'];
        $response = $this->call('GET', '/api/2019/unconf/tags=' . implode(',', $tags));
        $result = json_decode($response->getContent(), true);
        $this->assertEquals(false, $result['success']);
    }

    public function testWrongSpecificUnconf()
    {
        $id = '2019000';
        $response = $this->call('GET', '/api/2019/unconf/' . $id);
        $result = json_decode($response->getContent(), true);
        $this->assertEquals(false, $result['success']);
    }
    public function testWrongTagsUnconf()
    {
        $tags = ['abcz'];
        $response = $this->call('GET', '/api/2019/unconf/tags=' . implode(',', $tags));
        $result = json_decode($response->getContent(), true);
        $this->assertEquals(false, $result['success']);
    }
}
