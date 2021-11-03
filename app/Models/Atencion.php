<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Medico;
use App\Models\Evento;

class Atencion extends Model
{
    use HasFactory;
    protected $table = 'atenciones';
    protected $fillable = ['tipo','medicos_id'];

    public function medico()
    {
        return $this->belongsTo(Medico::class);
    }


    public function evento()
    {
        return $this->hasMany(Evento::class);
    }


}

