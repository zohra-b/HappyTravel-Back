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
                'name' => 'Alicia',
                'email' => 'ali123@gmail.com',
                'password' => Hash::make('123456'),
            ],
            [
                'name' => 'Caro',
                'email' => 'caro123@gmail.com',
                'password' => Hash::make('123456'),
            ], 
            [
                'name' => 'Gaby I',
                'email' => 'gabyi123@gmail.com',
                'password' => Hash::make('123456'),
            ], 
            [
                'name' => 'Gaby P',
                'email' => 'gabyp123@gmail.com',
                'password' => Hash::make('123456'),
            ], 
            [
                'name' => 'Laura',
                'email' => 'lau123@gmail.com',
                'password' => Hash::make('123456'),
            ], 
            [
                'name' => 'Zohra',
                'email' => 'zo123@gmail.com',
                'password' => Hash::make('123456'),
            ], 
            
            
            ];
            DB::table('users')->insert($users);     }
    }


