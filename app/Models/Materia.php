<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Materia extends Model
{
    use HasFactory;
    protected $primaryKey = 'crn';

    protected $fillable = [
        'crn',
        'clave',
        'nombre',
        'carrera_clave'
    ];

    public function carrera(){
        return $this->belongsTo(Carrera::class,'carrera_clave','clave');
    }

    //accesor
    public function getClaveAttribute($value){
        return strtoupper($value);
    }
    //mutador
    public function setClaveAttribute($value){
        $this->attributes['clave'] = strtolower($value);
    }
}
