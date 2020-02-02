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
            'name' => 'Admin',
            'email' => 'admin@gmail.com',
            'password' => '123456',
            'type' => 1 // Admin
        ]);

        \App\User::create([
            'name' => 'Manager',
            'email' => 'manager@gmail.com',
            'password' => '123456',
            'type' => 2 // manager
        ]);

        \App\User::create([
            'name' => 'Employee',
            'email' => 'employee@gmail.com',
            'password' => '123456',
            'type' => 3 // employee
        ]);
    }
}
