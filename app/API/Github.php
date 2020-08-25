<?php

namespace App\API;

class Github
{
    protected $token;

    public function __construct($token)
    {
        $this->token = $token;
    }
}