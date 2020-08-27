<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

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

        \App\Tag::insert([
            // Custom Added
            ['name' => 'Web', 'slug' => $this->getSlug('Web')],
            ['name' => 'Desktop', 'slug' => $this->getSlug('Desktop')],
            ['name' => 'Mobile', 'slug' => $this->getSlug('Mobile')],
            ['name' => 'Database', 'slug' => $this->getSlug('Database')],
            ['name' => 'Frontend', 'slug' => $this->getSlug('Frontend')],
            ['name' => 'Backend', 'slug' => $this->getSlug('Backend')],
            ['name' => 'Fullstack', 'slug' => $this->getSlug('Fullstack')],

            // Programming Language
            ['name' => 'JavaScript', 'slug' => $this->getSlug('JavaScript')],
            ['name' => 'HTML', 'slug' => $this->getSlug('HTML')],
            ['name' => 'CSS', 'slug' => $this->getSlug('CSS')],
            ['name' => 'SQL', 'slug' => $this->getSlug('SQL')],
            ['name' => 'Python', 'slug' => $this->getSlug('Python')],
            ['name' => 'Java', 'slug' => $this->getSlug('Java')],
            ['name' => 'C#', 'slug' => $this->getSlug('C sharp')],
            ['name' => 'TypeScript', 'slug' => $this->getSlug('TypeScript')],
            ['name' => 'PHP', 'slug' => $this->getSlug('PHP')],
            ['name' => 'C++', 'slug' => $this->getSlug('C plus plus')],
            ['name' => 'C', 'slug' => $this->getSlug('C')],
            ['name' => 'Go', 'slug' => $this->getSlug('Go')],
            ['name' => 'Kotlin', 'slug' => $this->getSlug('Kotlin')],
            ['name' => 'Ruby', 'slug' => $this->getSlug('Ruby')],
            ['name' => 'VBA', 'slug' => $this->getSlug('VBA')],
            ['name' => 'Swift', 'slug' => $this->getSlug('Swift')],
            ['name' => 'R', 'slug' => $this->getSlug('R')],
            ['name' => 'Assembly', 'slug' => $this->getSlug('Assembly')],
            ['name' => 'Rust', 'slug' => $this->getSlug('Rust')],
            ['name' => 'Objective-C', 'slug' => $this->getSlug('Objective-C')],
            ['name' => 'Scala', 'slug' => $this->getSlug('Scala')],
            ['name' => 'Dart', 'slug' => $this->getSlug('Dart')],
            ['name' => 'Perl', 'slug' => $this->getSlug('Perl')],
            ['name' => 'Haskell', 'slug' => $this->getSlug('Haskell')],
            ['name' => 'Julia', 'slug' => $this->getSlug('Julia')],

            // Web Framework
            ['name' => 'jQuery', 'slug' => $this->getSlug('jQuery')],
            ['name' => 'React.js', 'slug' => $this->getSlug('React.js')],
            ['name' => 'Angular', 'slug' => $this->getSlug('Angular')],
            ['name' => 'ASP.NET', 'slug' => $this->getSlug('ASP.NET')],
            ['name' => 'Express', 'slug' => $this->getSlug('Express')],
            ['name' => 'Vue.js', 'slug' => $this->getSlug('Vue.js')],
            ['name' => 'Spring', 'slug' => $this->getSlug('Spring')],
            ['name' => 'Flask', 'slug' => $this->getSlug('Flask')],
            ['name' => 'Django', 'slug' => $this->getSlug('Django')],
            ['name' => 'Laravel', 'slug' => $this->getSlug('Laravel')],
            ['name' => 'Ruby on Rails', 'slug' => $this->getSlug('Ruby on Rails')],
            ['name' => 'Symfony', 'slug' => $this->getSlug('Symfony')],
            ['name' => 'Gatsby', 'slug' => $this->getSlug('Gatsby')],
            ['name' => 'Drupal', 'slug' => $this->getSlug('Drupal')],

            // Other Framework
            ['name' => 'Node.js', 'slug' => $this->getSlug('Node.js')],
            ['name' => '.NET', 'slug' => $this->getSlug('.NET')],
            ['name' => 'Pandas', 'slug' => $this->getSlug('Pandas')],
            ['name' => 'React Native', 'slug' => $this->getSlug('React Native')],
            ['name' => 'TensorFlow', 'slug' => $this->getSlug('TensorFlow')],
            ['name' => 'Unity 3D', 'slug' => $this->getSlug('Unity 3D')],
            ['name' => 'Ansible', 'slug' => $this->getSlug('Ansible')],
            ['name' => 'Teraform', 'slug' => $this->getSlug('Teraform')],
            ['name' => 'Flutter', 'slug' => $this->getSlug('Flutter')],
            ['name' => 'Cordova', 'slug' => $this->getSlug('Cordova')],
            ['name' => 'Xamarin', 'slug' => $this->getSlug('Xamarin')],

            // Database
            ['name' => 'MySQL', 'slug' => $this->getSlug('MySQL')],
            ['name' => 'PostgreSQL', 'slug' => $this->getSlug('PostgreSQL')],
            ['name' => 'Microsoft SQL Server', 'slug' => $this->getSlug('Microsoft SQL Server')],
            ['name' => 'SQLite', 'slug' => $this->getSlug('SQLite')],
            ['name' => 'MongoDB', 'slug' => $this->getSlug('MongoDB')],
            ['name' => 'Redis', 'slug' => $this->getSlug('Redis')],
            ['name' => 'MariaDB', 'slug' => $this->getSlug('MariaDB')],
            ['name' => 'Oracle', 'slug' => $this->getSlug('Oracle')],
            ['name' => 'ElasticSearch', 'slug' => $this->getSlug('ElasticSearch')],
            ['name' => 'Firebase', 'slug' => $this->getSlug('Firebase')],
            ['name' => 'DynamoDB', 'slug' => $this->getSlug('DynamoDB')],
            ['name' => 'Cassandra', 'slug' => $this->getSlug('Cassandra')],

            // Platform
            ['name' => 'Linux', 'slug' => $this->getSlug('Linux')],
            ['name' => 'Windows', 'slug' => $this->getSlug('Windows')],
            ['name' => 'Docker', 'slug' => $this->getSlug('Docker')],
            ['name' => 'AWS', 'slug' => $this->getSlug('AWS')],
            ['name' => 'MacOS', 'slug' => $this->getSlug('MacOS')],
            ['name' => 'Android', 'slug' => $this->getSlug('Android')],
            ['name' => 'Microsoft Azure', 'slug' => $this->getSlug('Microsoft Azure')],
            ['name' => 'Google Cloud Platform', 'slug' => $this->getSlug('Google Cloud Platform')],
            ['name' => 'Raspberry Pi', 'slug' => $this->getSlug('Raspberry Pi')],
            ['name' => 'WordPress', 'slug' => $this->getSlug('WordPress')],
            ['name' => 'Kubernetes', 'slug' => $this->getSlug('Kubernetes')],
            ['name' => 'iOS', 'slug' => $this->getSlug('iOS')],
            ['name' => 'Heroku', 'slug' => $this->getSlug('Heroku')],
            ['name' => 'Arduino', 'slug' => $this->getSlug('Arduino')],

            // Custom Added
            ['name' => 'Bootstrap', 'slug' => $this->getSlug('Bootstrap')],
            ['name' => 'Tailwind', 'slug' => $this->getSlug('Tailwind')],
            ['name' => 'CodeIgniter', 'slug' => $this->getSlug('CodeIgniter')],
            ['name' => 'Svelte', 'slug' => $this->getSlug('Svelte')],
            ['name' => 'Hugo', 'slug' => $this->getSlug('Hugo')],
        ]);
    }

    /**
     * Custom function get slug from the value
     *
     * @return string
     */
    public function getSlug($value)
    {
        return Str::slug($value);
    }
}
