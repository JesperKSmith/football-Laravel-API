<?php

use Illuminate\Database\Seeder;
use App\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Let's clear the users table first
        User::truncate();
        
                $faker = \Faker\Factory::create();
        
                // Hashing password
                $password = Hash::make('toptal');
        
                User::create([
                    'name' => 'Administrator',
                    'email' => 'admin@test.com',
                    'password' => $password,
                ]);
        
                // Adding regular users
                for ($i = 0; $i < 10; $i++) {
                    User::create([
                        'name' => $faker->name,
                        'email' => $faker->email,
                        'password' => $password,
                    ]);
                }
    }
}
