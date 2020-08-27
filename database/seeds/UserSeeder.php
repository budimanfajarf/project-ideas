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
            'name' => 'Budiman Fajar Firdaus',
            'email' => 'hello@budidev.com',
            'password' => Hash::make('budi@2020'),
            'email_verified_at' => now()
        ]);
    }
}
