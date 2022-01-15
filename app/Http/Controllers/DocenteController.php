<?php

namespace App\Http\Controllers;

use App\Models\Docente;
use Illuminate\Http\Request;

class DocenteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $profes = Docente::onlyTrashed()->count();
        return $profes;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        /*$docente = new Docente();
        $docente->codigo = '2954456';
        $docente->nombre = "Erick";
        $docente->ap = "Guerrero";
        $docente->am = "M";
        $docente->correo = "erickg@valles.udg.mx";
        $docente->save();*/

       /* $profe = Docente::make([
            'codigo' => '2954458',
            'nombre' => "Jorge",
            'ap' => "Guerrero",
            'am' => "M",
            'correo' => "erickg@valles.udg.mx"
        ]);

        $profe->save();*/

        /*$profe = Docente::create([
            'codigo' => '2954460',
            'nombre' => "Roberto",
            'ap' => "Guerrero",
            'am' => "M",
            'correo' => "robertog@valles.udg.mx"
        ]);*/

        /* actualizar
        $profe = Docente::find('70301');
        $profe->ap = "Álvarez";
        $profe->save();*/

        /*$profe = Docente::withTrashed()->where('codigo','92775')->first();
        $profe->forceDelete();*/

        $profes = Docente::with('telefonos')->get();



        return $profes;

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Docente  $docente
     * @return \Illuminate\Http\Response
     */
    public function show(Docente $docente)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Docente  $docente
     * @return \Illuminate\Http\Response
     */
    public function edit(Docente $docente)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Docente  $docente
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Docente $docente)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Docente  $docente
     * @return \Illuminate\Http\Response
     */
    public function destroy(Docente $docente)
    {
        //
    }
}
