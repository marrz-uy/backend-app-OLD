<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Eventos extends Model
{
    use HasFactory;


    public function PuntosInteresDeEvento()
    {
        return $this->belongsTo(PuntosInteres::class, 'puntosinteres_id', 'id');
    }


}
