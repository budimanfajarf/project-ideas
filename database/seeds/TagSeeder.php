<?php

use Illuminate\Database\Seeder;
use App\Tag;

class TagSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Tag::create(['name' => 'Web']);
        Tag::create(['name' => 'Android']);
        Tag::create(['name' => 'Database']);
        Tag::create(['name' => 'MySQL']);
        Tag::create(['name' => 'HTML']);
        Tag::create(['name' => 'CSS']);
        Tag::create(['name' => 'Bootstrap']);
        Tag::create(['name' => 'JavaScript']);
        Tag::create(['name' => 'NodeJS']);
        Tag::create(['name' => 'VueJS']);
        Tag::create(['name' => 'React']);
        Tag::create(['name' => 'Angular']);
        Tag::create(['name' => 'PHP']);
        Tag::create(['name' => 'Laravel']);
        Tag::create(['name' => 'CodeIgniter']);
        Tag::create(['name' => 'Python']);
        Tag::create(['name' => 'Django']);
        Tag::create(['name' => 'Flask']);
        Tag::create(['name' => 'Ruby']);
    }
}
