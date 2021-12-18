@extends('layouts.app')

@section('main_content')

    <div class="row">
        <div class="col-md-12">
        <div class="card">
              <div class="card-header">
                <h3 class="card-title">
                  <i class="fas fa-chart-pie mr-1"></i>
                  Listado de equipos
                </h3>

              </div><!-- /.card-header -->
              <div class="card-body">
                <div class="tab-content p-0">
                <table class="table table-bordered">
                  <thead>
                    <tr>
                      <th style="width: 10px">#</th>
                      <th>Nombre</th>
                      <th>Descripción</th>
                      <th style="width: 40px">Acciones</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach($equipos as $equipo)
                        <tr>
                            <td>{{$equipo->id}}</td>
                            <td>{{$equipo->nombre}}</td>
                            <td>{{$equipo->descripcion}}</td>
                            <td><span class="badge bg-warning"><a href="{{route('equipo.edit',$equipo->id)}}">Editar</a></span>
                                <span class="badge bg-success"><a href="{{route('equipo.show',$equipo->id)}}">Mostrar</a></span>
                                <form action="{{route('equipo.destroy',$equipo->id)}}" method="POST">
                                @method('DELETE')
                                @csrf
                                <input type="submit" value="eliminar" class="btn btn-danger">
                                </form>
                            </td>
                        </tr>
                    @endforeach

                  </tbody>
                </table>
                {{$equipos->onEachSide(3)->links()}}
                </div>
              </div><!-- /.card-body -->
            </div>
        </div>
    </div>

@stop
