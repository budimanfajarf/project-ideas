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
        // https://insights.stackoverflow.com/survey/2020

        Tag::insert([
            // Custom Added
            [ 'name' => 'Web', 'slug' => Str::slug('Web')],
            [ 'name' => 'Desktop', 'slug' => Str::slug('Desktop')],
            [ 'name' => 'Mobile', 'slug' => Str::slug('Mobile')],
            [ 'name' => 'Database', 'slug' => Str::slug('Database')],
            [ 'name' => 'Frontend', 'slug' => Str::slug('Frontend')],
            [ 'name' => 'Backend', 'slug' => Str::slug('Backend')],
            [ 'name' => 'Fullstack', 'slug' => Str::slug('Fullstack')],

            // Programming Language
            [ 'name' => 'JavaScript', 'slug' => Str::slug('JavaScript')],
            [ 'name' => 'HTML', 'slug' => Str::slug('HTML')],
            [ 'name' => 'CSS', 'slug' => Str::slug('CSS')],
            [ 'name' => 'SQL', 'slug' => Str::slug('SQL')],
            [ 'name' => 'Python', 'slug' => Str::slug('Python')],
            [ 'name' => 'Java', 'slug' => Str::slug('Java')],
            [ 'name' => 'C#', 'slug' => Str::slug('C sharp')],
            [ 'name' => 'TypeScript', 'slug' => Str::slug('TypeScript')],
            [ 'name' => 'PHP', 'slug' => Str::slug('PHP')],
            [ 'name' => 'C++', 'slug' => Str::slug('C plus plus')],
            [ 'name' => 'C', 'slug' => Str::slug('C')],
            [ 'name' => 'Go', 'slug' => Str::slug('Go')],
            [ 'name' => 'Kotlin', 'slug' => Str::slug('Kotlin')],
            [ 'name' => 'Ruby', 'slug' => Str::slug('Ruby')],
            [ 'name' => 'VBA', 'slug' => Str::slug('VBA')],
            [ 'name' => 'Swift', 'slug' => Str::slug('Swift')],
            [ 'name' => 'R', 'slug' => Str::slug('R')],
            [ 'name' => 'Assembly', 'slug' => Str::slug('Assembly')],
            [ 'name' => 'Rust', 'slug' => Str::slug('Rust')],
            [ 'name' => 'Objective-C', 'slug' => Str::slug('Objective-C')],
            [ 'name' => 'Scala', 'slug' => Str::slug('Scala')],
            [ 'name' => 'Dart', 'slug' => Str::slug('Dart')],
            [ 'name' => 'Perl', 'slug' => Str::slug('Perl')],
            [ 'name' => 'Haskell', 'slug' => Str::slug('Haskell')],
            [ 'name' => 'Julia', 'slug' => Str::slug('Julia')],

            // Web Framework
            [ 'name' => 'jQuery', 'slug' => Str::slug('jQuery')],
            [ 'name' => 'React.js', 'slug' => Str::slug('React.js')],
            [ 'name' => 'Angular', 'slug' => Str::slug('Angular')],
            [ 'name' => 'ASP.NET', 'slug' => Str::slug('ASP.NET')],
            [ 'name' => 'Express', 'slug' => Str::slug('Express')],
            [ 'name' => 'Vue.js', 'slug' => Str::slug('Vue.js')],
            [ 'name' => 'Spring', 'slug' => Str::slug('Spring')],
            [ 'name' => 'Flask', 'slug' => Str::slug('Flask')],
            [ 'name' => 'Django', 'slug' => Str::slug('Django')],
            [ 'name' => 'Laravel', 'slug' => Str::slug('Laravel')],
            [ 'name' => 'Ruby on Rails', 'slug' => Str::slug('Ruby on Rails')],
            [ 'name' => 'Symfony', 'slug' => Str::slug('Symfony')],
            [ 'name' => 'Gatsby', 'slug' => Str::slug('Gatsby')],
            [ 'name' => 'Drupal', 'slug' => Str::slug('Drupal')],

            // Other Framework
            [ 'name' => 'Node.js', 'slug' => Str::slug('Node.js')],
            [ 'name' => '.NET', 'slug' => Str::slug('.NET')],
            [ 'name' => 'Pandas', 'slug' => Str::slug('Pandas')],
            [ 'name' => 'React Native', 'slug' => Str::slug('React Native')],
            [ 'name' => 'TensorFlow', 'slug' => Str::slug('TensorFlow')],
            [ 'name' => 'Unity 3D', 'slug' => Str::slug('Unity 3D')],
            [ 'name' => 'Ansible', 'slug' => Str::slug('Ansible')],
            [ 'name' => 'Teraform', 'slug' => Str::slug('Teraform')],
            [ 'name' => 'Flutter', 'slug' => Str::slug('Flutter')],
            [ 'name' => 'Cordova', 'slug' => Str::slug('Cordova')],
            [ 'name' => 'Xamarin', 'slug' => Str::slug('Xamarin')],

            // Database
            [ 'name' => 'MySQL', 'slug' => Str::slug('MySQL')],
            [ 'name' => 'PostgreSQL', 'slug' => Str::slug('PostgreSQL')],
            [ 'name' => 'Microsoft SQL Server', 'slug' => Str::slug('Microsoft SQL Server')],
            [ 'name' => 'SQLite', 'slug' => Str::slug('SQLite')],
            [ 'name' => 'MongoDB', 'slug' => Str::slug('MongoDB')],
            [ 'name' => 'Redis', 'slug' => Str::slug('Redis')],
            [ 'name' => 'MariaDB', 'slug' => Str::slug('MariaDB')],
            [ 'name' => 'Oracle', 'slug' => Str::slug('Oracle')],
            [ 'name' => 'ElasticSearch', 'slug' => Str::slug('ElasticSearch')],
            [ 'name' => 'Firebase', 'slug' => Str::slug('Firebase')],
            [ 'name' => 'DynamoDB', 'slug' => Str::slug('DynamoDB')],
            [ 'name' => 'Cassandra', 'slug' => Str::slug('Cassandra')],

            // Platform
            [ 'name' => 'Linux', 'slug' => Str::slug('Linux')],
            [ 'name' => 'Windows', 'slug' => Str::slug('Windows')],
            [ 'name' => 'Docker', 'slug' => Str::slug('Docker')],
            [ 'name' => 'AWS', 'slug' => Str::slug('AWS')],
            [ 'name' => 'MacOS', 'slug' => Str::slug('MacOS')],
            [ 'name' => 'Android', 'slug' => Str::slug('Android')],
            [ 'name' => 'Microsoft Azure', 'slug' => Str::slug('Microsoft Azure')],
            [ 'name' => 'Google Cloud Platform', 'slug' => Str::slug('Google Cloud Platform')],
            [ 'name' => 'Raspberry Pi', 'slug' => Str::slug('Raspberry Pi')],
            [ 'name' => 'WordPress', 'slug' => Str::slug('WordPress')],
            [ 'name' => 'Kubernetes', 'slug' => Str::slug('Kubernetes')],
            [ 'name' => 'iOS', 'slug' => Str::slug('iOS')],
            [ 'name' => 'Heroku', 'slug' => Str::slug('Heroku')],
            [ 'name' => 'Arduino', 'slug' => Str::slug('Arduino')],

            // Custom Added
            [ 'name' => 'Bootstrap', 'slug' => Str::slug('Bootstrap')],
            [ 'name' => 'Tailwind', 'slug' => Str::slug('Tailwind')],
            [ 'name' => 'CodeIgniter', 'slug' => Str::slug('CodeIgniter')],
            [ 'name' => 'Svelte', 'slug' => Str::slug('Svelte')],
            [ 'name' => 'Hugo', 'slug' => Str::slug('Hugo')],

        ]);
    }
}
