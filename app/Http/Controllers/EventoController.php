<?php

namespace App\Http\Controllers;

use App\Models\Alerta;
use App\Models\Evento;
use Illuminate\Http\Request;

class EventoController extends Controller
{
    public function index($id)
    {
        $alertas = Alerta::join('eventos', 'alertas.idevento', 'eventos.id')
        ->join('estados', 'alertas.idestado', 'estados.id')
        ->select('alertas.id', 'alertas.nombre', 'alertas.detalle', 'alertas.fecha', 'alertas.hora', 'eventos.nombre as eventos_nombre', 'estados.nombre as estados_nombre')
        ->where('eventos.id', $id)
        ->get();

        $eventos = Evento::select('eventos.id', 'eventos.nombre')->where('eventos.id', $id)->first();

        // dd(json_decode(json_encode($eventos)));

        return view('events.datos', ['evento' => $eventos], compact('alertas'));
    }
}
