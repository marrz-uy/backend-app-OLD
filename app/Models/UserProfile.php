<?php

namespace App\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserProfile extends Model
{
    use HasFactory;
    protected $table = 'userprofile';

    /* protected $fillable = [
        'nacionalidad',
        'f_nacimiento',
        'preferencias',
    ];
 */
    // Realacion uno a uno
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}

// INSERT INTO `userprofile` (`id`, `user_id`, `nacionalidad`, `f_nacimiento`, `preferencias`, `created_at`, `updated_at`) VALUES (NULL, '1', 'Uruguay', '1999-05-11', '[\"Playa\", \"Hostel\", \"Dia\"]', current_timestamp(), NULL);
// INSERT INTO `userprofile` (`id`, `user_id`, `nacionalidad`, `f_nacimiento`, `preferencias`, `created_at`, `updated_at`) VALUES (NULL, '2', 'Argentina', '1988-05-11', '[\"Playa\", \"Hostel\", \"Dia\"]', current_timestamp(), current_timestamp());
// INSERT INTO `userprofile` VALUES (0,3, 'Brasil', '1970-09-10', '{"Tipo_Alojamiento": "Hotel", "Horarios_Evento": "Dia", "Apto_para": "Familiar", "Tipo_Lugar": "Palya"}', current_timestamp(), current_timestamp());
