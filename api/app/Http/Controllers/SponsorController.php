<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SponsorController extends Controller
{
    use ApiTrait;

    private $sponsorTypes = ['tony_stark', 'bruce_wayne', 'hacker', 'geek', 'developer', 'special_cooperation', 'special_thanks'];
    protected $function = 'sponsor';

    /**
     * Get all or specific Sponsors information.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function index(Request $request)
    {
        $sponsorIds = $request->get('sponsor_id', '');
        $sponsorIdArr = $sponsorIds == '' ? [] : explode(",", $sponsorIds);
        return count($sponsorIdArr) ? $this->getSpecificSponsors($this->jsonAry, $sponsorIdArr) : $this->getAllSponsors($this->jsonAry);
    }

    private function getAllSponsors($sponsorJson)
    {
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
        foreach ($sponsorJson as $index => $sponsor) {
            array_push($data[$sponsor['sponsor_type']], $sponsor);
        }
        return $this->returnSuccess('success', $data);
    }

    private function getSpecificSponsors($sponsorJson, $sponsorIdArr)
    {
        $data = [];
        foreach ($sponsorJson as $index => $sponsor) {
            if (in_array($sponsor['sponsor_id'], $sponsorIdArr)) {
                array_push($data, $sponsor);
            }
        }
        if (count($data) == 0) {
            return $this->returnNotFoundError();
        }
        return $this->returnSuccess('success', $data);
    }
}
