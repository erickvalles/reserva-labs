<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Docente extends Model
{
    use SoftDeletes;
    protected $table = "docente";
    protected $primaryKey = "codigo";
    protected $incremental = false;
    use HasFactory;
    protected $fillable = ['nombre','ap','am','correo'];
    protected $appends = ['nombreCompleto'];


    public function telefonos(){
        return $this->hasMany(Telefono::class);
    }

    public function getNombreCompletoAttribute(){
        return $this->nombre.' '.$this->ap." ".$this->am;
    }
}
