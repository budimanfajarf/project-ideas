<?php

namespace App\Console\Commands\Github;

use App\API\Github;
use Illuminate\Support\Str;
use Illuminate\Console\Command;

class UpdateIdeas extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'github:update';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
        $this->github = new Github('florinpop17', 'app-ideas');
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $projects = $this->github->contents('Projects');
        $projects = collect($projects)->recursive();

        foreach ($projects as $key => $project) {
            $number = $key+1;

            // Get Tier [Idea]
            $tier = $project['name'];
            $tier = Str::after($tier, "{$number}-");

            $this->comment($tier);

            $ideas = $this->github->contents($project['path']);

            $bar = $this->output->createProgressBar(count($ideas));
            $bar->setFormat("%current%/%max% [%bar%] %percent:3s%% %message%");
            $bar->setMessage('');
            $bar->start();

            foreach ($ideas as $idea) {
                // Get Path [Github]
                $path = $idea['path'];

                if ($idea['type'] != 'file') {
                    $bar->setMessage("SKIPPED: ".$idea['path']);
                    continue;
                }

                $bar->setMessage($path);

                // Get Commit Date [Github]
                $commits = $this->github->commits($path, 1, 1);
                $date = $commits[0]['commit']['author']['date'];
                $date = \Carbon\Carbon::parse($date)->toDateTimeString();

                // Get JSON [Github]
                $json = $this->github->contents($idea['path']);

                // Get Content [Idea]
                $content = base64_decode($json['content']);

                // Get Name [Idea]
                $name = Str::between($content, '#', '**Tier');
                $name = (string) Str::of($name)->trim();

                // Get Slug [Idea]
                $slug = Str::of($idea['name'])->before('.md');
                $slug = Str::slug($slug, '-');

                // Get Description [Idea]
                $description = Str::after($content, $tier);
                $description = (string) Str::of($description)->trim();

                // Get Required Description [Idea]
                $requiredDescription = Str::between($content, $tier, '## User Stories');
                $requiredDescription = (string) Str::of($requiredDescription)->trim();

                // Get Short Description [Idea]
                $shortDescription = Str::of($requiredDescription)->replace("\n", ' ');
                $shortDescription = Str::substr($shortDescription, 0, 255);

                // Get Additional Description [Idea]
                $additionalDescription = Str::after($content, $requiredDescription);
                $additionalDescription = (string) Str::of($additionalDescription)->trim();

                $bar->advance();
            }

            $bar->finish();
            $this->line('');
        }
    }
}
