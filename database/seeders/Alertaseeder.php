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
            ],
            [
                'nombre' => 'Alerta de desboradmiento del rio pirari',
                'detalle' => 'Por las fuertes lluevia exste una crecida del rio dando como resultado un desbordamiento',
                'foto' => json_encode(['imgs/inundaciones/1.jpg', 'imgs/inundaciones/2.jpg', 'imgs/inundaciones/3.jpg',]), 
                'ubicacion_long' => -30,
                'ubicacion_lat' => -12,
                'fecha' => '2022-05-20',
                'hora' => '08:00:00',
                'idevento' => 3,
                'idestado' => 4,
            ],
            [
                'nombre' => 'Alerta de crecida del ripo pirai zona warnes',
                'detalle' => 'las provinicia mas afectada sera warnes donde habra un crecimiento',
                'foto' => json_encode(['imgs/inundaciones/1.jpg', 'imgs/inundaciones/2.jpg', 'imgs/inundaciones/3.jpg',]), 
                'ubicacion_long' => -30,
                'ubicacion_lat' => -12,
                'fecha' => '2022-03-20',
                'hora' => '15:00:00',
                'idevento' => 3,
                'idestado' => 8,
            ],
            [
                'nombre' => 'Alerta de crecida del rio Bermejo ',
                'detalle' => 'Las lluvias  y tormentas ocacionaron una crecida del rio afectara a las zonas cercanas a bermejo ',
                'foto' => json_encode(['imgs/inundaciones/1.jpg', 'imgs/inundaciones/2.jpg', 'imgs/inundaciones/3.jpg',]), 
                'ubicacion_long' => -40,
                'ubicacion_lat' => -12,
                'fecha' => '2022-08-20',
                'hora' => '08:00:00',
                'idevento' => 3,
                'idestado' => 1,
            ],
            [
                'nombre' => 'Alerta de lluvia torrenciales',
                'detalle' => 'Las fuertes lluvias ocacionaran inundaciones a los diferentes barrios',
                'foto' => json_encode(['imgs/inundaciones/1.jpg', 'imgs/inundaciones/2.jpg']), 
                'ubicacion_long' => -80,
                'ubicacion_lat' => -25,
                'fecha' => '2022-03-10',
                'hora' => '20:00:00',
                'idevento' => 3,
                'idestado' => 4,
            ],
            [
                'nombre' => 'Alerta de existente incendio por el aeropuerto viru viru',
                'detalle' => 'La calor y lo vientos hacen dificil poder acabar con este incendio, afectando con el humo sobre todo a la carretera al norte',
                'foto' => json_encode(['imgs/incendio_forestal/1.jpg', 'imgs/incendio_forestal/2.jpg', 'imgs/incendio_forestal/3.jpg']), 
                'ubicacion_long' => -15,
                'ubicacion_lat' => -10,
                'fecha' => '2022-08-15',
                'hora' => '22:00:00',
                'idevento' => 1,
                'idestado' => 2
            ],[
                'nombre' => 'Alerta de incendio en el mercado mutualista',
                'detalle' => 'Malas conexiones elctricas ocacionaron un incendio que esta creciendo conciderablemente, procure no acercarse al lugar',
                'foto' => json_encode(['imgs/incendio_estructural/1.jpg', 'imgs/incendio_estructural/2.jpg', 'imgs/incendio_estructural/3.jpg']), 
                'ubicacion_long' => -80,
                'ubicacion_lat' => -40,
                'fecha' => '2022-3-15',
                'hora' => '22:00:00',
                'idevento' => 2,
                'idestado' => 1
            ],[
                'nombre' => 'Alerta de incendio en la carreta',
                'detalle' => 'la mala manipulacion de gasolina por conductores ocasiono la quema de dos autos en la avenida bush',
                'foto' => json_encode(['imgs/incendio_estructural/1.jpg', 'imgs/incendio_estructural/2.jpg', 'imgs/incendio_estructural/3.jpg']), 
                'ubicacion_long' => -15,
                'ubicacion_lat' => -10,
                'fecha' => '2022-08-15',
                'hora' => '22:00:00',
                'idevento' => 2,
                'idestado' => 1
            ],
            [
                'nombre' => 'Alerta focos de calor por la chiquitania',
                'detalle' => 'el viento y la subida de calor esta generando diversos focos de calor, sea precavido con sus acciones',
                'foto' => json_encode(['imgs/incendio_forestal/1.jpg', 'imgs/incendio_forestal/2.jpg']), 
                'ubicacion_long' => -15,
                'ubicacion_lat' => -10,
                'fecha' => '2022-08-15',
                'hora' => '22:00:00',
                'idevento' => 1,
                'idestado' => 5
            ],
            [
                'nombre' => 'Alerta de bloqueo  ',
                'detalle' => 'bloqueo en el sector de transporte pesado',
                'foto' => json_encode([]), 
                'ubicacion_long' => -15,
                'ubicacion_lat' => -10,
                'fecha' => '2022-08-15',
                'hora' => '22:00:00',
                'idevento' => 8,
                'idestado' => 5
            ],
            [
                'nombre' => 'Alerta de  manifestaciones',
                'detalle' => 'junta de distrito 10 protestanto itms por la salud',
                'foto' => json_encode([]), 
                'ubicacion_long' => -15,
                'ubicacion_lat' => -10,
                'fecha' => '2022-03-12',
                'hora' => '15:00:00',
                'idevento' => 8,
                'idestado' => 8
            ],
            [
                'nombre' => 'Alerta bloqueo  ',
                'detalle' => 'bloqueo en el viaducto de cotoca SCZ',
                'foto' => json_encode([]), 
                'ubicacion_long' => -15,
                'ubicacion_lat' => -10,
                'fecha' => '2022-03-10',
                'hora' => '08:00:00',
                'idevento' => 8,
                'idestado' => 1
            ],
            [
                'nombre' => 'Alerta de bloqueo  ',
                'detalle' => 'ruta bloqueada protesta en el coed',
                'foto' => json_encode([]), 
                'ubicacion_long' => -15,
                'ubicacion_lat' => -10,
                'fecha' => '2022-03-11',
                'hora' => '14:00:00',
                'idevento' => 8,
                'idestado' => 1
            ],
        ]);
    }
}
