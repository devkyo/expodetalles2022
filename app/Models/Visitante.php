<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\expo2022;

class Visitante extends Model
{
    use HasFactory;

    // protected $table = 'visitantes';
    protected $fillable = [
        'id',
        'razonsocial','nombres','apellidos','cargo','direccion','distrito',
        'pais','celular','website','representa','email',
        'busca','qr'
    ];

    public function expo2022()
    {
        return $this->hasMany(expo2022::class);
    }
}
