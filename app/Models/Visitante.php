<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Visitante extends Model
{
    use HasFactory;

    protected $table = 'visitantes';
    protected $fillable = [
        'razonsocial','nombres','apellidos','cargo','direccion','distrito',
        'pais','celular','website','representa','email',
        'busca','qr',
    ];

    public function asistencia()
    {
        return $this->belongsTo(expo2022::class);
    }
}
