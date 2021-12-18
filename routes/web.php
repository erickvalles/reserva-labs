<?php

use App\Http\Controllers\EquiposController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/',function(){
    $nombreSeccion = "Dashboard";
    return view('dashboard',compact('nombreSeccion'));
})->name('home');

Route::get('prueba/larga/estilos', function(){
    $nombreSeccion = "Dashboard interno";
    return view('dashboard',compact('nombreSeccion'));
})->name('ruta_interna');

Route::get('primera',function(){
    $nombreSeccion = "Primera vista";
    return view('primera',compact('nombreSeccion'));
})->name('primera');

//Route::get('equipo',[EquiposController::class,'index'])->name('equipo.index');

Route::resource('equipo', EquiposController::class);

/*
Route::get('/', function ($nombre = "Invitado") {
    $edad = 34;
    return view('welcome',compact('nombre','edad'));
});

Route::get('prueba_vistas',function(){
    return view('primera');
});

Route::get('segunda_vista',function(){
    return view('segunda');
});

Route::get('saludo', function(){
    return "Hola mundo desde laravel";
});

Route::get('prueba/{nombre?}', function($nombre="Intruso"){
    echo "Hola $nombre Estás en prueba <a href='".route('perfil',['nombre'=>$nombre])."'>Ir a perfil</a>";
})->where('nombre','[aA-zZ]+');


Route::get('usuario/{nombre}/perfil', function($nombre){
    return "lo que sea aquí $nombre";
})->name('perfil');*/