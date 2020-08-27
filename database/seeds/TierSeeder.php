<?php

use Illuminate\Database\Seeder;
use App\Tier;

class TierSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Tier::create([
            'name' => 'Beginner',
            'description' => 'Developers in the early stages of their learning journey. Those who are typically focused on creating user-facing applications.'
        ]);
        Tier::create([
            'name' => 'Intermediate',
            'description' => 'Developers at an intermediate stage of learning and experience. They are comfortable in UI/UX, using development tools, and building apps that use API services.'
        ]);
        Tier::create([
            'name' => 'Advanced',
            'description' => 'Developers who have all of the above, and are learning more advanced techniques like implementing backend applications and database services.'
        ]);
    }
}
