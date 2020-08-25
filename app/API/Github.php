<?php

namespace App\API;

class Github
{
    protected $token;
    protected $baseUrl;

    public function __construct($token, $baseUrl)
    {
        $this->token = $token;
        $this->baseUrl = $baseUrl;
    }
}