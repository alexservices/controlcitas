<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Atencion;

class Medico extends Model
{
    use HasFactory;

    protected $table = 'medicos';
    protected $fillable = ['nombre','tipo'];

    public function atencion()
    {
        return $this->hasMany(Atencion::class);
    }

}

