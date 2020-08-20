<?php

use Illuminate\Database\Seeder;

class TagSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tags')->insert([
            ['name' => 'Web'],
            ['name' => 'Android'],
            ['name' => 'Database'],
            ['name' => 'MySQL'],
            ['name' => 'HTML'],
            ['name' => 'CSS'],
            ['name' => 'Bootstrap'],
            ['name' => 'JavaScript'],
            ['name' => 'NodeJS'],
            ['name' => 'VueJS'],
            ['name' => 'React'],
            ['name' => 'Angular'],
            ['name' => 'PHP'],
            ['name' => 'Laravel'],
            ['name' => 'CodeIgniter'],
            ['name' => 'Python'],
            ['name' => 'Django'],
            ['name' => 'Flask'],
            ['name' => 'Ruby'],
        ]);
    }
}
