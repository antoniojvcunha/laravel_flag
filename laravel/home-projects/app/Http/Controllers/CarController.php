<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CarController extends Controller
{
    public function store()
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

        return "Dados inseridos com sucesso";
    }
}
