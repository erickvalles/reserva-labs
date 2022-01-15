<?php

namespace App\Http\Controllers;

use App\Models\Equipo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class EquiposController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $equipos = Equipo::paginate(15);
        $nombreSeccion = "Todo el equipo";
        return view('equipo.index',compact('nombreSeccion','equipos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $nombreSeccion = "Crear un equipo";
        return view('equipo.create',compact('nombreSeccion'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $peticionValida = $request->validate([
            'cantidad'=>'required|numeric',
            'nombre'=>'required',
            'descripcion'=>'required'
        ]);

        /* es necesario configurar la asignación masiva.
        Equipo::create([
            'nombre'=>$peticionValida['nombre'],
            'descripcion'=>$peticionValida['descripcion'],
            'cantidad'=>$peticionValida['cantidad']
        ]);*/
        $equipo = new Equipo();
        $equipo->nombre = $peticionValida['nombre'];
        $equipo->descripcion = $peticionValida['descripcion'];
        $equipo->cantidad = $peticionValida['cantidad'];

        $equipo->save();

        return redirect()->route('equipo.index');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $equipo = Equipo::find($id);
        return $equipo;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $equipo = Equipo::find($id);
        $nombreSeccion = "Editar un equipo";

        return view('equipo.edit', compact('equipo','nombreSeccion'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $peticionValida = $request->validate([
            'cantidad'=>'required|numeric',
            'nombre'=>'required',
            'descripcion'=>'required'
        ]);

        $equipo = Equipo::find($id);
        $equipo->nombre = $peticionValida['nombre'];
        $equipo->descripcion = $peticionValida['descripcion'];
        $equipo->cantidad = $peticionValida['cantidad'];

        $equipo->save();

        return redirect()->route('equipo.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $equipo = Equipo::find($id);
        $equipo->delete();
        return redirect()->back();

    }

    public function rawSelect(){
        $cantidad = 5;
        //SELECT
        /*
        $equipos = DB::select('SELECT * FROM equipos where cantidad = :cantidad',
    ['cantidad'=>$cantidad]);
        ddd($equipos);
        */
        //INSERT
        /*
        DB::insert('INSERT INTO equipos (nombre, descripcion, cantidad) VALUES (:nombre,:desc,:cant)',
        ['nombre'=>'Multimetro','desc'=>'Sirve para medir cosas','cant'=>30]);
        */
        //UPDATE
        /*
        DB::update('UPDATE equipos set nombre = :name WHERE id = :id',[
            'name'=>'Cautín',
            'id'=>5
        ]);
        */
        //DELETE
        /*
        DB::delete('DELETE FROM equipos WHERE cantidad = :cantidad',
        ['cantidad'=>0]);
        */




    }

    public function queryBuilder(){
        //$equipos = DB::table('equipos')->where('cantidad','<=',10)->get();
        //$equipos = DB::table('equipos')->select('cantidad','descripcion')->get();
        //$equipos = DB::table('equipos')->select('nombre')->where('cantidad','<',5)->get();
        //$equipos = DB::table('equipos')->orderByDesc('cantidad')->get();
        /*$equipos = DB::table('equipos')
        ->select('nombre','cantidad')
        ->where('cantidad','<',8)
        ->orderBy('cantidad')->take(3)->get();*/
        $equipoNuevo = DB::table('equipos')->whereNotNull('created_at')->orderBy('created_at')->first(['nombre','cantidad','created_at']);
        $maximo = DB::table('equipos')->max('cantidad');
        $equipoDiez = DB::table('equipos')->find(10);
        $promedio = DB::table('equipos')->avg('cantidad');

        $profesTelefonos = DB::table('docente')
                    ->join('telefonos','docente.codigo','=','telefonos.docente_codigo')
                    ->select('docente.*','telefonos.numero')->get();

        ddd($equipoNuevo,$maximo,$equipoDiez,$promedio,$profesTelefonos);

    }
}
