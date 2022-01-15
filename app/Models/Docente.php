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
    protected $fillable = ['codigo','nombre','ap','am','correo'];


    public function telefonos(){
        return $this->hasMany(Telefono::class);
    }
}
