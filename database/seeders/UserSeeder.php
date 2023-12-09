<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $user = [
            'name' => 'Derren',
            'email' => 'derren@gmail.com',
            'password' => \bcrypt('derren1234')
        ];

        User::insert($user);
    }
}
