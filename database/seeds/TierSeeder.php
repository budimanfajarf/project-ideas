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
        Tier::create(['name' => 'Beginner']);
        Tier::create(['name' => 'Intermediate']);
        Tier::create(['name' => 'Advanced']);
    }
}
