<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Alerta extends Model
{
    use HasFactory;
    protected $table = 'alertas';
    protected $fillable = ['nombre', 'detalle', 'foto', 'video', 'ubicacion_long', 'ubicacion_lat', 'fecha', 'idevento', 'idestado'];
    public $timestamps = false;

    public function evento(){
        return $this->belongsTo('App\Models\Evento','idevento','id');
    }
}
