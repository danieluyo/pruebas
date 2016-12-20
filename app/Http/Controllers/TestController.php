<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Events\EjemploEvent;
use Redis;
use App\Providers\TwitterEngineService;

class TestController extends Controller
{
    public function test()
    {
        event(New EjemploEvent());

        Redis::publish('evento', json_encode(['foo' => 'bar']));

        dd(1);
    }

    public function tuita()
    {
        $test = TwitterEngineService::sendTweet();

        dd($test);

    }
}
