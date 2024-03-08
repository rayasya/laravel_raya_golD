<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('biodata')->insert([
            'name' => 'Muhammad Rayasya Dziqi Cahyana',
            'email' => 'rayasya.dziqi@gmail.com',
            'email_verified_at' => null,
            'password' => Hash::make('admin123'),
            'remember_toker' => null,
            'created_at' => now(),
            'updated_at' => null
        ]);
    }
}
