<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Visitante;


class expo2022 extends Model
{
    use HasFactory;

    // protected $table = 'expo2022';
    protected $fillable = [
        'id',
        'visitante_id',
        'asistencia',
    ];
   


    public function visitante()
    {
        return $this->BelongsTo('App\Models\Visitante','visitante_id');
     


    }

   
}
