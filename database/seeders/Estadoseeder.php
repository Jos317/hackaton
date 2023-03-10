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
                'rojo' => '0xff0000',
                'naranja' => '0xffa500',
                'amarillo' => '0xffff00',
                'verde' => '0x008000',
                'grado' => 1,
            ],
            [
                'nombre' => 'Critico',
                'rojo' => '0xff0000',
                'naranja' => '0xffa500',
                'amarillo' => '0xffff00',
                'verde' => '0x008000',
                'grado' => 1,
            ],
            [
                'nombre' => 'Critico',
                'rojo' => '0xff0000',
                'naranja' => '0xffa500',
                'amarillo' => '0xffff00',
                'verde' => '0x008000',
                'grado' => 1,
            ],
            [
                'nombre' => 'Muy alto',
                'rojo' => '0xff0000',
                'naranja' => '0xffa500',
                'amarillo' => '0xffff00',
                'verde' => '0x008000',
                'grado' => 1,
            ],
            [
                'nombre' => 'Muy alto',
                'rojo' => '0xff0000',
                'naranja' => '0xffa500',
                'amarillo' => '0xffff00',
                'verde' => '0x008000',
                'grado' => 1,
            ],
            [
                'nombre' => 'Muy alto',
                'rojo' => '0xff0000',
                'naranja' => '0xffa500',
                'amarillo' => '0xffff00',
                'verde' => '0x008000',
                'grado' => 1,
            ],
            [
                'nombre' => 'Moderado',
                'rojo' => '0xff0000',
                'naranja' => '0xffa500',
                'amarillo' => '0xffff00',
                'verde' => '0x008000',
                'grado' => 1,
            ],
            [
                'nombre' => 'Moderado',
                'rojo' => '0xff0000',
                'naranja' => '0xffa500',
                'amarillo' => '0xffff00',
                'verde' => '0x008000',
                'grado' => 1,
            ],
            [
                'nombre' => 'Moderado',
                'rojo' => '0xff0000',
                'naranja' => '0xffa500',
                'amarillo' => '0xffff00',
                'verde' => '0x008000',
                'grado' => 1,
            ],
            [
                'nombre' => 'Bajo',
                'rojo' => '0xff0000',
                'naranja' => '0xffa500',
                'amarillo' => '0xffff00',
                'verde' => '0x008000',
                'grado' => 1,
            ],
            [
                'nombre' => 'Bajo',
                'rojo' => '0xff0000',
                'naranja' => '0xffa500',
                'amarillo' => '0xffff00',
                'verde' => '0x008000',
                'grado' => 1,
            ],
            [
                'nombre' => 'Bajo',
                'rojo' => '0xff0000',
                'naranja' => '0xffa500',
                'amarillo' => '0xffff00',
                'verde' => '0x008000',
                'grado' => 1,
            ],
        ]);
    }
}
