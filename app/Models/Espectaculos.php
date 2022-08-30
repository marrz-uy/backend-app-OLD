<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Espectaculos extends Model
{
    protected $table='espectaculos';
    use HasFactory;
    public function PuntosInteres(){
        return $this->belongsTo(PuntosInteres::class);
    }
}
