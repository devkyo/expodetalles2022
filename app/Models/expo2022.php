<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class expo2022 extends Model
{
    use HasFactory;

    protected $fillable = [
        'visitante_id',
    ];


    public function visitante()
    {
        return $this->belongsTo(Visitante::class);
    }
}
