<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Alertaseeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('alertas')->insert([
            [
                'nombre' => 'Incendio Estructural de gran magnitud en surtidor Moragrande II',
                'detalle' => 'Gran incendio estructural causado por imprudencia de los trabajadores del surtidor Moragrande II, donde hay 3 personas heridas con quemaduras de 1er. y 2do. grado',
                'foto' => json_encode(['imgs/incendio_estructural/1.jpg', 'imgs/incendio_estructural/2.jpg', 'imgs/incendio_estructural/3.jpg', 'imgs/incendio_estructural/4.jpg', 'imgs/incendio_estructural/5.jpg']), 
                'ubicacion_long' => -10,
                'ubicacion_lat' => -15,
                'fecha' => '2022-04-20',
                'hora' => '18:00:00',
                'idevento' => 2,
                'idestado' => 2,
            ],
            [
                'nombre' => 'Incendio forestal leve en la zona sur de la Chiquitanía',
                'detalle' => 'Gran incendio estructural causado por imprudencia de los trabajadores del surtidor Moragrande II, donde hay 3 personas heridas con quemaduras de 1er. y 2do. grado',
                'foto' => json_encode(['imgs/incendio_forestal/1.jpg', 'imgs/incendio_forestal/2.jpg']), 
                'ubicacion_long' => -20,
                'ubicacion_lat' => -25,
                'fecha' => '2021-03-10',
                'hora' => '20:00:00',
                'idevento' => 1,
                'idestado' => 3
            ],
            [
                'nombre' => 'Alerta de posible inundación del río Piraí en las próximas horas',
                'detalle' => 'Prevención de inundación en el río Piraí, en horas de la tarde, llegando la lluvia de la zona sur',
                'foto' => json_encode(['imgs/inundaciones/1.jpg', 'imgs/inundaciones/2.jpg', 'imgs/inundaciones/3.jpg']), 
                'ubicacion_long' => -15,
                'ubicacion_lat' => -10,
                'fecha' => '2022-08-15',
                'hora' => '22:00:00',
                'idevento' => 3,
                'idestado' => 3
            ]
        ]);
    }
}
