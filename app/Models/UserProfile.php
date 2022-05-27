<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserProfile extends Model
{
    use HasFactory;

    // Realacion uno a uno
    public function user()
    {
       return $this->belongsTo(User::class);
    }
}

// INSERT INTO `user_profiles` VALUES (0,'Uruguay', '1970-10-10', ["Restaurantes", "Hoteles", "Noche"], 8, null, null);
