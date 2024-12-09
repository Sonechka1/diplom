<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StatusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('statuses')->insert([
            'id' => 1,
            'status_name' => 'Оформлен',
        ]);

        DB::table('statuses')->insert([
            'id' => 2,
            'status_name' => 'Принят',
        ]);
        DB::table('statuses')->insert([
            'id' => 3,
            'status_name' => 'В обработке',
        ]);
        DB::table('statuses')->insert([
            'id' => 4,
            'status_name' => 'Выполнен',
        ]);
        DB::table('statuses')->insert([
            'id' => 5,
            'status_name' => 'В доставке',
        ]);
    }
}
