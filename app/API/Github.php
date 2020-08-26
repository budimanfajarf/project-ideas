<?php

namespace App\API;

use Illuminate\Support\Facades\Http;

class Github
{
    protected $token;
    protected $baseUrl;

    public function __construct($owner = null, $repo = null)
    {
        $this->token = config('services.github.token');
        $this->baseUrl = "https://".config('services.github.endpoint');
        $this->owner = $owner;
        $this->repo = $repo;
    }

    public function get($path)
    {
        $url = $this->baseUrl.$path;
        $request = Http::withHeaders([
            'Authorization' => "token {$this->token}",
        ])
        ->get($url);

        $request->throw();
        return $request->json();
    }

    public function rate()
    {
        $rate = $this->get("/rate_limit");
        return $rate['rate'];
    }

    public function contents($path = null)
    {
        return $this->get("/repos/{$this->owner}/{$this->repo}/contents/{$path}");
    }

    public function commits($path = null, $page=null, $perPage=null)
    {
        return $this->get("/repos/{$this->owner}/{$this->repo}/commits?path={$path}&page={$page}&per_page={$perPage}");
    }

}