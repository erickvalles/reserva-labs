<?php

namespace App\Http\Controllers;

use App\Http\Requests\MateriaRequest;
use App\Models\Carrera;
use App\Models\Materia;
use Illuminate\Http\Request;

class MateriaController extends Controller
{
    private $nombre = "Materias";
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $materias = Materia::paginate(20);
        return view('materia.index', with(['materias'=>$materias,'nombreSeccion'=>$this->nombre]));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $carreras = Carrera::all();
        return view('materia.create', with(['nombreSeccion'=>$this->nombre,'carreras'=>$carreras]));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(MateriaRequest $request)
    {
        Materia::create($request->all());
        return redirect()->route('materias.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Materia  $materia
     * @return \Illuminate\Http\Response
     */
    public function show(Materia $materia)
    {
        return view('materia.show', with(['materia'=>$materia,'nombreSeccion'=>$this->nombre]));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Materia  $materia
     * @return \Illuminate\Http\Response
     */
    public function edit(Materia $materia)
    {
        $carreras = Carrera::all();
        return view('materia.edit', with(['carreras'=>$carreras,'materia'=>$materia,'nombreSeccion'=>$this->nombre]));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Materia  $materia
     * @return \Illuminate\Http\Response
     */
    public function update(MateriaRequest $request, Materia $materia)
    {
        $materia->update($request->all());
        $request->session()->flash('mensaje', "Editado exitosamente");
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Materia  $materia
     * @return \Illuminate\Http\Response
     */
    public function destroy(Materia $materia)
    {
        $materia->delete();
        return redirect()->route('materias.index');
    }
}
