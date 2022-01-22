<?php

namespace App\Http\Controllers;

use App\Http\Requests\CarreraRequest;
use App\Models\Carrera;
use Illuminate\Http\Request;

class CarreraController extends Controller
{
    private $nombre = "Carreras";
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $carreras = Carrera::paginate(5);
        return view('carrera.index',with(['carreras'=>$carreras,'nombreSeccion'=>$this->nombre]));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('carrera.create', with(['nombreSeccion'=>$this->nombre]));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CarreraRequest $request)
    {
        Carrera::create($request->all());

        return redirect()->route('carreras.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Carrera  $carrera
     * @return \Illuminate\Http\Response
     */
    public function show(Carrera $carrera)
    {
        return view('carrera.show', with(['carrera'=>$carrera,'nombreSeccion'=>$this->nombre]));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Carrera  $carrera
     * @return \Illuminate\Http\Response
     */
    public function edit(Carrera $carrera)
    {
        return view('carrera.edit', with(['carrera'=>$carrera,'nombreSeccion'=>$this->nombre]));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Carrera  $carrera
     * @return \Illuminate\Http\Response
     */
    public function update(CarreraRequest $request, Carrera $carrera)
    {
        $carrera->update($request->all());
        $request->session()->flash('mensaje', "Editado exitosamente");
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Carrera  $carrera
     * @return \Illuminate\Http\Response
     */
    public function destroy(Carrera $carrera)
    {
        $carrera->delete();
        return redirect()->route('carreras.index');
    }
}
