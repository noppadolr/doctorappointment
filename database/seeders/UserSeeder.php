<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Carbon;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            [
                'name' => 'Admin',
                'email' => 'admin@gmail.com',
                'password' => Hash::make('111'),
                'role'=>2,
                'username'=>'admin',
                'created_at'=>Carbon::now(),
                'email_verified_at'=>Carbon::now(),
        
            ],
            [
                'name' => 'User',
                'email' => 'user@gmail.com',
                'username'=>'pt',
                'role'=>0,
                'password' => Hash::make('111'),
                'created_at'=>Carbon::now(),
                'email_verified_at'=>Carbon::now(),
            ],
            [
                'name' => 'นพดล',
                'email' => 'riyasarn.n@gmail.com',
                'password' => Hash::make('111'),
                'created_at'=>Carbon::now(),
                'email_verified_at'=>Carbon::now(),
                'role'=>2,
                'username'=>'nop',
            ],
            [
                'name' => 'Doctor',
                'email' => 'doctor@gmail.com',
                'password' => Hash::make('111'),
                'created_at'=>Carbon::now(),
                'email_verified_at'=>Carbon::now(),
                'role'=>1,
                'username'=>'doctor',
            ]
        ]);
    }
}
