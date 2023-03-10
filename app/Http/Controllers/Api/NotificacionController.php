<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Notificacion;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class NotificacionController extends Controller
{
    public function crearNotificacion(Request $request){
        try {
            DB::beginTransaction();
            Notificacion::crearNotificacion($request);
            DB::commit();
            return response()->json(['mensaje' => 'Notificaciones creado exitosamente'], 200);
        } catch (\Exception $e) {
            DB::rollBack();
            return response()->json(['mensaje' => $e->getMessage()], 500);
        }
    }
}
