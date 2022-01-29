<?php

namespace App\Http\Controllers;

use App\Http\Requests\DocenteRequest;
use App\Models\Docente;
use App\Models\Telefono;
use Illuminate\Http\Request;

class DocenteController extends Controller
{
    private $nombre = "Profesores";
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $profes = Docente::orderBy('created_at','desc')->paginate(10);

        return view('docente.index', with(['profes'=>$profes,'nombreSeccion'=>$this->nombre]));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        return view('docente.create', with(['nombreSeccion'=>$this->nombre]));

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(DocenteRequest $request)
    {
        Docente::create($request->all());
        return redirect()->route('docentes.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Docente  $docente
     * @return \Illuminate\Http\Response
     */
    public function show(Docente $docente)
    {
        return view('docente.show', with(['nombreSeccion'=>$this->nombre,'docente'=>$docente]));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Docente  $docente
     * @return \Illuminate\Http\Response
     */
    public function edit(Docente $docente)
    {
        return view('docente.edit', with(['nombreSeccion'=>$this->nombre,'profesor'=>$docente]));
    }



    public function guardar_telefono(Request $request){
        //dd($request->all());
        $telefonoValido = $request->validate([
            'area'=>'required|size:3',
            'numero'=>'required|size:7',
            'docente_codigo'=>'required'
        ]);

        Telefono::create($telefonoValido);

        return redirect()->back();

    }

    public function eliminar_telefono(Telefono $telefono){
        $telefono->delete();
        return redirect()->back();
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Docente  $docente
     * @return \Illuminate\Http\Response
     */
    public function update(DocenteRequest $request, Docente $docente)
    {
        $docente->update($request->only(['nombre','ap','am','correo']));
        $request->session()->flash('mensaje', "Editado exitosamente");
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Docente  $docente
     * @return \Illuminate\Http\Response
     */
    public function destroy(Docente $docente)
    {
        $docente->delete();
        return redirect()->route('docentes.index');
    }
}
