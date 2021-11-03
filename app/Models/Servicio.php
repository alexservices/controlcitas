<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Evento;
use App\Models\FormaPago;

class Servicio extends Model
{
    
    use HasFactory;
    protected $table = 'servicios';
    protected $fillable = ['tipo','formapagos_id'];


    public function evento()
    {
        return $this->hasMany(Evento::class);
    }

    public function formapago()
    {
        return $this->belongsTo(FormaPago::class);
    }


}
