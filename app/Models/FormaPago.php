<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Servicio;

class FormaPago extends Model
{
    use HasFactory;

    protected $table = 'formapagos';
    protected $fillable = ['forma','limite'];


    public function servicio()
    {
        return $this->hasMany(servicio::class);
    }

}
