<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Evento;

class PagoCita extends Model
{
    use HasFactory;
    protected $table = 'pagocitas';
    protected $fillable = ['eventos_id'];


    public function evento()
    {
        return $this->belongsTo(Evento::class);
    }
}
