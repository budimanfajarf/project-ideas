<?php

use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\User::create([
            'name' => 'Bot',
            'email' => 'hello@budidev.com',
            'password' => Hash::make('bot@2020'),
            'email_verified_at' => \Carbon\Carbon::now()
        ]);
    }
}
