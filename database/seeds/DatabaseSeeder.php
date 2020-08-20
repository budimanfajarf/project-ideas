<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(TierSeeder::class);
        $this->call(TagSeeder::class);        
        $this->call(UserSeeder::class);        
        $this->call(IdeaSeeder::class);
    }
}
