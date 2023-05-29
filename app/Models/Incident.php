<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Incident extends Model
{
    use HasFactory;
    protected $table = 'incident';
    /**
     * $guarded especifica los atributos que no deben ser asignados en masa
     * $guarded en el modelo evita que ciertos atributos sean asignados masivamente, 
     * protegiendo campos como id y marcas de tiempo para evitar modificaciones no 
     * deseadas por parte de los usuarios.
     */
    protected $guarded = ['id_incident','create_at','update_at','date','hour'];

    public function users(){
        return $this->hasMany(User::class);
    }

    public function service(){
        return $this->hasMany(Service::class);
    }
}
