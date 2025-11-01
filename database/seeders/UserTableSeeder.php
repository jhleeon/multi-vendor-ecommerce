<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            [
                'email' => 'admin@gmail.com',
                'password' => Hash::make(123456),
                'email_verified_at' => now(),
                'name' => 'Admin',
                'user_name' => 'admin',
                'role' => 'admin',
                'status' => 'active',
            ],
            [
                'email' => 'vendor@gmail.com',
                'password' => Hash::make(123456),
                'email_verified_at' => now(),
                'name' => 'Vendor',
                'user_name' => 'vendor',
                'role' => 'vendor',
                'status' => 'active',
            ],
            [
                'email' => 'user@gmail.com',
                'password' => Hash::make(123456),
                'email_verified_at' => now(),
                'name' => 'User',
                'user_name' => 'User',
                'role' => 'user',
                'status' => 'active',
            ]
        ]);
    }
}
