<?php

namespace App\API;

use Illuminate\Support\Facades\Http;

class Github
{
    protected $token;
    public $baseUrl;
    public $client;

    // public function __construct($token, $baseUrl, $client)
    public function __construct($token, $baseUrl)
    {
        $this->token = $token;
        $this->baseUrl = $baseUrl;
        // $this->client = $client;
        $this->client = \App::make(Http::class);
    }

    protected function get($url)
    {
        // return Http::withHeaders([
        //     'Authorization' => "token {$this->token}",
        // ])
        // ->get($url);
    }

    public function contents($path = null)
    {

    }

    public function commits($path = null, $page=1, $perPage=1)
    {

    }

    public function brul()
    {
        return $this->baseUrl;
    }

}