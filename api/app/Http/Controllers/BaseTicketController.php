<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Controllers\ApiTrait;
use Illuminate\Http\Response;

class BaseTicketController extends Controller
{
    use ApiTrait;

    /**
     * 取得電子票券
     *
     * @param Request $request
     * @return \Illuminate\Http\Response
     */
    public function getTicket(Request $request)
    {
        if (!isset($request->ticketNo) || empty($request->ticketNo)) {
            return $this->returnNotFoundError();
        }

        $dir = $this->ticketPath . $request->ticketNo;
        $path = glob($dir);
        if (empty($path)) {
            $this->returnNotFoundError();
        }

        $file = fopen($dir . '/'. $request->ticketNo .'.txt','r');
        $link = '';
        while ($line = fgets($file)) {
            $link .= $line;
        }
        fclose($file);

        $data = [
            'apple' => url('api/2022/ticket/' . $request->ticketNo),
            'google' => $link,
        ];

        return $this->returnSuccess('success', $data);
    }

    public function getIOSWalletTicket($ticketNo) {
        $dir = $this->ticketPath .  $ticketNo . '/' . $ticketNo . '.pkpass';
        $path = glob($dir);
        if (empty($path)) {
            return $this->returnNotFoundError();
        }
        $path = end($path);
        $type = mime_content_type($path);
        // print_r($type);
        return (new Response(file_get_contents($path), 200))->header('Content-Type', 'application/vnd.apple.pkpass');
    }
}
