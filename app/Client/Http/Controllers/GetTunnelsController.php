<?php

namespace App\Client\Http\Controllers;

use App\Client\Client;
use App\Http\Controllers\Controller;
use GuzzleHttp\Psr7\Message;
use GuzzleHttp\Psr7\Response;
use Illuminate\Http\Request;
use Ratchet\ConnectionInterface;

class GetTunnelsController extends Controller
{
    public function handle(Request $request, ConnectionInterface $httpConnection)
    {
        $httpConnection->send(respond_json([
            'tunnels' => Client::$subdomains,
        ], 200));
    }
}
