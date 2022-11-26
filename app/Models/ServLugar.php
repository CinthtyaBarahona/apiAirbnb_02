<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ServLugar extends Model
{
    use HasFactory;

    protected $fillable = [
        'lugare_id',
        'servicio_id',
    ];

    public function Lugar(){
        return $this->belongsTo("App\Models\Lugar");
    }

    public function Servicio(){
        return $this->belongsTo("App\Models\Servicio");
    }
}
