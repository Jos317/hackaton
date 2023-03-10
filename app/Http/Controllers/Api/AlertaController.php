<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Alerta;
use Illuminate\Http\Request;

class AlertaController extends Controller
{
    
    public function getAlerts(Request $request)
    {
        $alertas = Alerta::join('eventos', 'alertas.idevento', 'eventos.id')
        ->join('estados', 'alertas.idestado', 'estados.id')
        ->select('alertas.id', 'alertas.nombre', 'alertas.detalle', 'alertas.foto', 'alertas.video', 'alertas.ubicacion_long', 'alertas.ubicacion_lat','alertas.fecha', 'alertas.hora', 'eventos.nombre as eventos_nombre', 'estados.nombre as estados_nombre')
        ->where('eventos.nombre', $request->nombre)
        ->get();

        return response()->json(['mensaje' => 'Consulta exitosa', 'data' => $alertas], 200);
    }
}
