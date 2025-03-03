<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CarTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('cars')->insert([
            [
                'marca' => 'Toyota',
                'modelo' => 'Celica',
                'ano' => 2015,
                'preco' => 12000,
                'cor' => 'vermelho',
                'created_at' => now(),
                'updated_at' => now(),
            ]
        ]);

        Car::where('marca', 'Toyota')->update(['ano' => 2025]);
    }

    
}
