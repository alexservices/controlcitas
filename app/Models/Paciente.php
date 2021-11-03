<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Evento;


class Paciente extends Model
{
    use HasFactory;

    protected $table = 'pacientes';
    protected $fillable = ['nombre','telefono','edad'];


    public function evento()
    {
        return $this->hasMany(Evento::class);
    }


}
