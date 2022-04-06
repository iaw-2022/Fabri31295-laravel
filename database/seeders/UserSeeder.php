<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeeder extends Seeder
{

    public function run()
    {
        User::create([
            'name' => 'admin',
            'email' => 'admin@gmail.com',
            'password' => bcrypt('12345678')
        ]);

        User::create([
            'name' => 'usuario1',
            'email' => 'usuario1@gmail.com',
            'password' => bcrypt('12345678')
        ]);

        User::create([
            'name' => 'usuario2',
            'email' => 'usuario2@gmail.com',
            'password' => bcrypt('12345678')
        ]);
    }
}
