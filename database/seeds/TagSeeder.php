<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
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
        Tag::insert([
            [ 'name' => 'Web', 'slug' => Str::slug('Web')],
            [ 'name' => 'Frontend', 'slug' => Str::slug('Frontend')],
            [ 'name' => 'Backend', 'slug' => Str::slug('Backend')],
            [ 'name' => 'Fullstack', 'slug' => Str::slug('Fullstack')],
            [ 'name' => 'HTML', 'slug' => Str::slug('HTML')],
            [ 'name' => 'CSS', 'slug' => Str::slug('CSS')],
            [ 'name' => 'Bootstrap', 'slug' => Str::slug('Bootstrap')],
            [ 'name' => 'Tailwind', 'slug' => Str::slug('Tailwind')],
            [ 'name' => 'JavaScript', 'slug' => Str::slug('JavaScript')],
            [ 'name' => 'JQuery', 'slug' => Str::slug('JQuery')],
            [ 'name' => 'NodeJS', 'slug' => Str::slug('NodeJS')],
            [ 'name' => 'ExpressJS', 'slug' => Str::slug('ExpressJS')],
            [ 'name' => 'VueJS', 'slug' => Str::slug('VueJS')],
            [ 'name' => 'NuxtJS', 'slug' => Str::slug('NuxtJS')],
            [ 'name' => 'ReactJS', 'slug' => Str::slug('ReactJS')],
            [ 'name' => 'NextJS', 'slug' => Str::slug('NextJS')],
            [ 'name' => 'Angular', 'slug' => Str::slug('Angular')],
            [ 'name' => 'Svelte', 'slug' => Str::slug('Svelte')],
            [ 'name' => 'PHP', 'slug' => Str::slug('PHP')],
            [ 'name' => 'Laravel', 'slug' => Str::slug('Laravel')],
            [ 'name' => 'CodeIgniter', 'slug' => Str::slug('CodeIgniter')],
            [ 'name' => 'Python', 'slug' => Str::slug('Python')],
            [ 'name' => 'Django', 'slug' => Str::slug('Django')],
            [ 'name' => 'Flask', 'slug' => Str::slug('Flask')],
            [ 'name' => 'Ruby', 'slug' => Str::slug('Ruby')],
            [ 'name' => 'Rails', 'slug' => Str::slug('Rails')],
            [ 'name' => 'Java', 'slug' => Str::slug('Java')],
            [ 'name' => 'Spring', 'slug' => Str::slug('Spring')],
            [ 'name' => 'Golang', 'slug' => Str::slug('Golang')],
            [ 'name' => 'Gin', 'slug' => Str::slug('Gin')],
            [ 'name' => 'C', 'slug' => Str::slug('C')],
            [ 'name' => 'Android', 'slug' => Str::slug('Android')],
            [ 'name' => 'Kotlin', 'slug' => Str::slug('Kotlin')],
            [ 'name' => 'React Native', 'slug' => Str::slug('React Native')],
            [ 'name' => 'Ionic', 'slug' => Str::slug('Ionic')],
            [ 'name' => 'iOS', 'slug' => Str::slug('iOS')],
            [ 'name' => 'Swift', 'slug' => Str::slug('Swift')],
            [ 'name' => 'Desktop', 'slug' => Str::slug('Desktop')],
            [ 'name' => 'Electron', 'slug' => Str::slug('Electron')],
            [ 'name' => 'Database', 'slug' => Str::slug('Database')],
            [ 'name' => 'SQL', 'slug' => Str::slug('SQL')],
            [ 'name' => 'MySQL', 'slug' => Str::slug('MySQL')],
            [ 'name' => 'PostgreSQL', 'slug' => Str::slug('PostgreSQL')],
            [ 'name' => 'MariaDB', 'slug' => Str::slug('MariaDB')],
            [ 'name' => 'SQLite', 'slug' => Str::slug('SQLite')],
            [ 'name' => 'MongoDB', 'slug' => Str::slug('MongoDB')],
            [ 'name' => 'Redis', 'slug' => Str::slug('Redis')],
        ]);
    }
}
