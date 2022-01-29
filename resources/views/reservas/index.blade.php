@extends('layouts.app')

@section('main_content')

    <div class="row">
        <div class="col-md-12">
        <div class="card">
              <div class="card-header">
                <h3 class="card-title">
                  <i class="fas fa-chart-pie mr-1"></i>
                  Listado de reservaciones <br> <a href="{{route('reservas.create')}}" class="btn btn-success">Ir a registrar otra</a>
                </h3>

              </div><!-- /.card-header -->
              <div class="card-body">
                <div class="tab-content p-0">
                <table class="table table-bordered">
                  <thead>
                    <tr>
                      <th style="width: 10px">#</th>
                      <th>Profesor</th>
                      <th>Materia</th>
                      <th>Laboratorio</th>
                      <th>Inicio</th>
                      <th>Fin</th>
                      <th style="width: 40px">Acciones</th>
                    </tr>
                  </thead>
                  <tbody>
                    @forelse($reservas as $reserva)
                        <tr>
                            <td>{{$reserva->id}}</td>
                            <td>{{$reserva->profesor->nombreCompleto}}</td>
                            <td>{{$reserva->materia->nombre}}</td>
                            <td>{{$reserva->laboratorio->nombre}}</td>
                            <td>{{$reserva->fecha_inicio}}</td>
                            <td>{{$reserva->fecha_fin}}</td>
                            <td><span class="badge bg-warning"><a href="{{route('reservas.edit',$reserva->id)}}">Editar</a></span>
                                <span class="badge bg-success"><a href="{{route('reservas.show',$reserva->id)}}">Mostrar</a></span>
                                <form action="{{route('reservas.destroy',$reserva->id)}}" method="POST">
                                @method('DELETE')
                                @csrf
                                <input type="submit" value="eliminar" onclick="return confirm('¿Desea eliminarla?')" class="btn btn-danger">
                                </form>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="5">No hay prácticas registradas <br> <a href="{{route('practicas.create')}}" class="btn btn-success">Ir a registrar una</a></td>
                        </tr>
                    @endforelse

                  </tbody>
                </table>
                {{$reservas->onEachSide(3)->links()}}
                </div>
              </div><!-- /.card-body -->
            </div>
        </div>
    </div>

@stop
