<?php

namespace App\Http\Controllers;

use App\Http\Requests\LaboratorioRequest;
use App\Models\Laboratorio;
use Illuminate\Contracts\Session\Session;
use Illuminate\Http\Request;

class LaboratorioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $laboratorios = Laboratorio::paginate(5);
        $nombreSeccion = "Registro de los laboratorios";
        return view('laboratorio.index',compact('laboratorios','nombreSeccion'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $nombreSeccion = "Registro de los laboratorios";
        return view('laboratorio.create', compact('nombreSeccion'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(LaboratorioRequest $request)
    {
        Laboratorio::create($request->all());
        return redirect()->route('laboratorios.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Laboratorio  $laboratorio
     * @return \Illuminate\Http\Response
     */
    public function show(Laboratorio $laboratorio)
    {
        $nombreSeccion = "Detalles";

        return view('laboratorio.show', compact('nombreSeccion','laboratorio'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Laboratorio  $laboratorio
     * @return \Illuminate\Http\Response
     */
    public function edit(Laboratorio $laboratorio)
    {
        $nombreSeccion = "Editar un laboratorio";
        return view('laboratorio.edit', compact('laboratorio','nombreSeccion'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Laboratorio  $laboratorio
     * @return \Illuminate\Http\Response
     */
    public function update(LaboratorioRequest $request, Laboratorio $laboratorio)
    {
        $laboratorio->update($request->all());
        $request->session()->flash('mensaje', "Editado exitosamente");
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Laboratorio  $laboratorio
     * @return \Illuminate\Http\Response
     */
    public function destroy(Laboratorio $laboratorio)
    {
        $laboratorio->delete();
        return redirect()->route('laboratorios.index');
    }
}
