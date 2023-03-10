<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

class Notificacion extends Model
{
    use HasFactory;
    protected $table = 'notificacions';
    protected $fillable = ['descripcion', 'foto', 'video', 'fecha','ubicacion_long', 'ubicacion_lat', 'idevento', 'idestado'];
    public $timestamps = false;

    public function evento(){
        return $this->belongsTo('App\Models\Evento','idevento','id');
    }

    public function estado(){
        return $this->belongsTo('App\Models\Estado','idestado','id');
    }

    public static function crearNotificacion(Request $request){
        $notificacion = new Notificacion();
        $notificacion->descripcion = $request->descripcion;
        $notificacion->foto = json_encode($request->foto);
        $notificacion->video = $request->video;
        $notificacion->fecha = $request->fecha;
        $notificacion->ubicacion_long = $request->ubicacion_long;
        $notificacion->ubicacion_lat = $request->ubicacion_lat; 
        $notificacion->idevento= $request->idevento; 
        $notificacion->idusuario= $request->idusuario; 
        $notificacion->save();

    }
}
