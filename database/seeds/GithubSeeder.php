<?php

use Illuminate\Database\Seeder;

class GithubSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Github::create([
            'name' => 'Example',
            'path' => 'Example/Example.md',
            'content_json' => collect(['example' => 'example'])->toJson(),
            'commits_json' => collect([['example' => 'example']])->toJson(),
            'committed_at' => \Carbon\Carbon::parse('2020-07-07T10:32:34Z')->toDateTimeString(),
        ]);

    }
}
