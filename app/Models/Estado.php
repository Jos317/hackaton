<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Estado extends Model
{
    use HasFactory;
    protected $table = 'estados';
    protected $fillable = ['nombre', 'rojo', 'amarillo', 'naranja', 'verde', 'grado'];
    public $timestamps = false;

    public function notificacion()
    {
        return $this->hasOne('App\Models\Notificacion','idevento','id');
    }

    public function alerta()
    {
        return $this->hasOne('App\Models\Alerta','idevento','id');
    }
}
