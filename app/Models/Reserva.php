<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reserva extends Model
{
    use HasFactory;

    protected $fillable = [
        'fecha_inicio',
        'fecha_fin',
        'laboratorio_id',
        'docente_codigo',
        'materia_crn'
    ];

    public function profesor(){
        return $this->belongsTo(Docente::class,'docente_codigo');
    }

    public function materia(){
        return $this->belongsTo(Materia::class,'materia_crn');
    }

    public function laboratorio(){
        return $this->belongsTo(Laboratorio::class,'laboratorio_id');
    }

    public function equipos(){
        return $this->belongsToMany(Equipo::class,'reservaxequipo','reserva_id','equipo_id');
    }
    public function practicas(){
        return $this->belongsToMany(Practica::class,'reservaxpracticas','reserva_id','practicas_id');
    }
}
