<?php

namespace App\Repositories;

use Illuminate\Support\Facades\Http;

class GithubApiRepository
{
    private $token;
    protected $baseUrl = 'https://api.github.com';

    public function __construct()
    {
        $this->token = config('app.github_token');
    }

    public function getBaseUrl ()
    {
        return $this->baseUrl;
    }

    private function sendRequest($path)
    {
        return Http::withHeaders([
            'Authorization' => "token {$this->token}",
        ])
        ->get("{$this->baseUrl}/{$path}");
    }

    public function getRate ()
    {
        return $this->sendRequest('rate_limit')->json();
    }

    public function getRateLimit ()
    {
        $response = $this->sendRequest('rate_limit')->json();
        return $response['rate']['limit'];
    }

    public function getRateLimitRemaining ()
    {
        $response = $this->sendRequest('rate_limit')->json();
        return $response['rate']['remaining'];
    }
}
