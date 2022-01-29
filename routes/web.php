<?php

use App\Http\Controllers\CarreraController;
use App\Http\Controllers\DocenteController;
use App\Http\Controllers\EquiposController;
use App\Http\Controllers\LaboratorioController;
use App\Http\Controllers\MateriaController;
use App\Http\Controllers\PracticasController;
use App\Http\Controllers\ReservaController;
use Illuminate\Support\Facades\Artisan;
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
Route::resource('docentes',DocenteController::class);
Route::post('guardar_telefono',[DocenteController::class,'guardar_telefono'])->name('guardar_telefono');
Route::delete('delete_phone/{telefono}',[DocenteController::class,'eliminar_telefono'])->name('eliminar_telefono');
Route::resource('laboratorios', LaboratorioController::class);
Route::resource('practicas', PracticasController::class);
Route::resource('carreras', CarreraController::class);
Route::resource('materias', MateriaController::class);
Route::resource('reservas',ReservaController::class);
Route::get('calendario',[ReservaController::class,'calendario'])->name('reservas.calendario');


Route::get('consulta',[EquiposController::class,'rawSelect'])->name('consultas1');
Route::get('consultas2',[EquiposController::class,'queryBuilder'])->name('consultas2');
/*Route::get('migrar', function(){
    Artisan::call('migrate:refresh');
});*/
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
