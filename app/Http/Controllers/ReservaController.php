<?php

namespace App\Http\Controllers;

use App\Http\Resources\ReservaResource;
use App\Models\Docente;
use App\Models\Equipo;
use App\Models\Laboratorio;
use App\Models\Materia;
use App\Models\Practica;
use App\Models\Reserva;
use Carbon\Carbon;
use Illuminate\Http\Request;

class ReservaController extends Controller
{
    private $nombreSeccion = "Reservas";
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('reservas.index', with([
            'nombreSeccion'=>$this->nombreSeccion,
            'reservas'=>Reserva::paginate(15)
        ]));
    }

    public function calendario(){
        $reservas = ReservaResource::collection(Reserva::all());
        //return $reservas;

        return view('reservas.calendario', with([
            'nombreSeccion'=>$this->nombreSeccion,
            'reservas'=>$reservas->toJson()
        ]));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        $profesores = Docente::all();
        $laboratorios = Laboratorio::all();
        $materias = Materia::all();
        $equipos = Equipo::all();
        $practicas = Practica::all();
        return view('reservas.create',with([
            'nombreSeccion'=>$this->nombreSeccion,
            'profesores'=>$profesores,
            'laboratorios'=>$laboratorios,
            'materias'=>$materias,
            'equipos'=>$equipos,
            'practicas'=>$practicas
        ]));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {


        $fecha_inicio = $request->fecha_inicio;
        $fecha_fin = $request->fecha_fin;

        $inicio = Carbon::create($fecha_inicio);
        $fin = Carbon::create($fecha_fin);

        $reserva = new Reserva();

        $reserva->fecha_inicio = $inicio;
        $reserva->fecha_fin = $fin;
        $reserva->laboratorio_id = $request->laboratorio_id;
        $reserva->docente_codigo = $request->docente_codigo;
        $reserva->materia_crn = $request->materia_crn;
        $reserva->save();

        $reserva->equipos()->sync($request['equipos']);
        $reserva->practicas()->sync($request->practicas);

        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Reserva  $reserva
     * @return \Illuminate\Http\Response
     */
    public function show(Reserva $reserva)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Reserva  $reserva
     * @return \Illuminate\Http\Response
     */
    public function edit(Reserva $reserva)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Reserva  $reserva
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Reserva $reserva)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Reserva  $reserva
     * @return \Illuminate\Http\Response
     */
    public function destroy(Reserva $reserva)
    {
        //
    }
}
