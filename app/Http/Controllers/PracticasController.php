<?php

namespace App\Http\Controllers;

use App\Http\Requests\PracticaRequest;
use App\Models\Practica;


class PracticasController extends Controller
{
    private $nombreSeccion = "Prácticas";
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $practicas = Practica::paginate(10);
        return view('practica.index', with(['practicas'=>$practicas,'nombreSeccion'=>$this->nombreSeccion]));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('practica.create', with(['nombreSeccion'=>$this->nombreSeccion]));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(PracticaRequest $request)
    {
        Practica::create($request->all());
        return redirect()->route('practicas.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Practica $practica)
    {
        return view('practica.show', with(['practica'=>$practica, 'nombreSeccion'=>$this->nombreSeccion]));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Practica $practica)
    {

        return view('practica.edit', with(['practica'=>$practica,'nombreSeccion'=>$this->nombreSeccion]));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(PracticaRequest $request, Practica $practica)
    {
        $practica->update($request->all());
        $request->session()->flash('mensaje', "Editado exitosamente");
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Practica $practica)
    {
        $practica->delete();
        return redirect()->route('practicas.index');
    }
}
