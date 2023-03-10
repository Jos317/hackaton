<?php

namespace App\Http\Controllers;

use App\Models\Alerta;
use Illuminate\Http\Request;

class EventoController extends Controller
{
    public function index($id)
    {
        $alertas = Alerta::join('eventos', 'alertas.idevento', 'eventos.id')
        ->join('estados', 'alertas.idestado', 'estados.id')
        ->select('alertas.id', 'alertas.nombre', 'alertas.detalle', 'alertas.fecha', 'eventos.nombre as eventos_nombre', 'estados.nombre as estados_nombre')
        ->where('eventos.id', $id)
        ->get();

        return view('events.datos', compact('alertas'));
    }
}
