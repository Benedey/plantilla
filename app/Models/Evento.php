<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Evento extends Model
{
    use HasFactory;

    protected $table = 'eventos';

    protected $fillable = [
        'dia',
        'mes',
        'año',
        'hora',
        'lugar',
        'id_usuario',
        'servicio',
        'precio_paquete',
        'apartado',
        'segundo_pago',
        'tercer_pago',
        'firma',
    ];

    public function usuario()
    {
        return $this->belongsTo(User::class, 'id_usuario');
    }
}
