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
        $consulta = new Notificacion();
        $consulta->descripcion = $request->descripcion;
        $consulta->foto = $request->foto;
        $consulta->video = $request->video;
        $consulta->fecha = $request->fecha;
        $consulta->ubicacion_long = $request->ubicacion_long;
        $consulta->ubicacion_lat = $request->ubicacion_lat; 
        $consulta->idevento= $request->idevento; 
        $consulta->idusuario= $request->idusuario; 
        $consulta->save();

    }
}
