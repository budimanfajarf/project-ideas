<?php

use Illuminate\Database\Seeder;

class TierSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tiers')->insert([
            ['name' => 'Beginner'],
            ['name' => 'Intermediate'],
            ['name' => 'Advanced'],                        
        ]);
    }
}
