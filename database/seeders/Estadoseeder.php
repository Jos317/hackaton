<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Estadoseeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('estados')->insert([
            [
                'nombre' => 'Critico',
                'color' => 'rojo',
                'grado' => 1,
            ],
            [
                'nombre' => 'Muy alto',
                'color' => 'naranja',
                'grado' => 1,
            ],
            [
                'nombre' => 'Moderado',
                'color' => 'amarillo',
                'grado' => 1,
            ],
            [
                'nombre' => 'Bajo',
                'color' => 'verde',
                'grado' => 1,
            ],
        ]);
    }
}
