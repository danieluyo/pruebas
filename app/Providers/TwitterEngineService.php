<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Abraham\TwitterOAuth\TwitterOAuth;

class TwitterEngineService extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    public static function conection($access)
    {
        $apiKey = env('TW_API_KEY');
        $secret = env('TW_SECRET_KEY');
        $connection = new TwitterOAuth($apiKey, $secret, $access['token'], $access['token_secret']);
        return $connection;
    }

    public static function getCredentials()
    {
        $data = [
            'token' => env('TW_API_KEY'),
            'token_secret' => env('TW_SECRET_KEY')
        ];

        $tw = self::conection($data);
        return $tw->get("account/verify_credentials");
    }

    public static function sendTweet()
    {
        $tokens = [
            'token' => env('TW_API_KEY'),
            'token_secret' => env('TW_SECRET_KEY')
        ];

        $twitter = self::conection($tokens);
        $statues = $twitter->post("statuses/update", ["status" => "¡Hello from laravel @Alejo_lSGl!"]);

        return $statues;
    }
}
