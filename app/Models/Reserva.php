<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reserva extends Model
{
    use HasFactory;

    protected $fillable = [
        'slug',
        'checkin',
        'checkout',
        'estado',
        'preciototal',
        'numHuesped',
        'mascotas',
        'lugare_id',
        'user_id'
    ];

    public function Lugar(){
        return $this->belongsTo("App\Models\Lugar");
    }

    public function User(){
        return $this->belongsTo("App\Models\User");
    }
}
