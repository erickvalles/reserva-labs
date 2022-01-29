<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Telefono extends Model
{
    use HasFactory;

    protected $fillable = [
        'area',
        'numero',
        'docente_codigo'
    ];


    public function docente(){
        return $this->belongsTo(Docente::class);
    }
}
