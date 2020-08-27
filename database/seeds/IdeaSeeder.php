<?php

use Illuminate\Database\Seeder;

class IdeaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $idea = \App\Idea::create([
            'ideaable_id' => 1,
            'ideaable_type' => \App\Github::class,
            'tier_id' => 1,
            'name' => 'Example',
            'slug' => 'example',
            'short_description' => 'example',
            'required_description' => 'example',
            'additional_description' => 'example',
            'description' => 'example',
            'content' => 'example',
        ]);


        $idea->tags()->attach([1, 2, 3]);
    }
}
