<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $users = [
            [
                'name' => 'Laura',
                'email' => 'lau123@gmail.com',
                'password' => Hash::make('123456'),
            ], 
            [
                'name' => 'Alicia',
                'email' => 'ali@gmail.com',
                'password' => Hash::make('123456'),
            ]
            ];
            DB::table('users')->insert($users);     }
    }


