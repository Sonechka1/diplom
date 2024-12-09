<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            'email' => 'admin@gmail.com',
            'password' => Hash::make('12345678'),
            'role_id' => 1,
            'name' => 'Администратор',
            'date' => now(),
        ]);

        DB::table('users')->insert([
            'email' => 'employee@gmail.com',
            'password' => Hash::make('12345678'),
            'role_id' => 2,
            'name' => 'employee',
            'date' => now(),
        ]);
        DB::table('users')->insert([
            'email' => 'user@gmail.com',
            'password' => Hash::make('12345678'),
            'role_id' => 3,
            'name' => 'Иван',
            'date' => now(),
        ]);

    }
}
