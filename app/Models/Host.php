<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Host extends Model
{
    use HasFactory;

    protected $fillable = [
        'nombre',
        'descripcion',
        'urlfoto',
        'urllogo',
        'estado',
        'ruta_id',
        'user_id'
    ];

    public function Ruta(){
        return $this->belongsTo("App\Models\Ruta");
    }
    
    public function User(){
        return $this->belongsTo("App\Models\User");
    }
}
