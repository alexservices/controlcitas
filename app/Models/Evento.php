<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Paciente;
use App\Models\User;
use App\Models\Atencion;
use App\Models\Servicio;
use App\Models\PagoCita;

class Evento extends Model
{
    use HasFactory;

    protected $table = 'eventos';
    protected $fillable = ['ttulo','descripcion','fecha', 'estado','user_id','atenciones_id','pacientes_id','servicios_id'];

    public function paciente()
    {
        return $this->belongsTo(Paciente::class);
    }


    public function user()
    {
        return $this->belongsTo(User::class);
    }


    public function atencion()
    {
        return $this->belongsTo(Atencion::class);
    }


    public function servicio()
    {
        return $this->belongsTo(Servicio::class);
    }


    public function pagocita()
    {
        return $this->hasOne(PagoCita::class);
    }


}
