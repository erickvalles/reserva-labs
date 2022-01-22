@extends('layouts.app')

@section('main_content')

    <div class="row">
        <div class="col-md-12">
        <div class="card">
              <div class="card-header">
                <h3 class="card-title">
                  <i class="fas fa-chart-pie mr-1"></i>
                  Listado de prácticas <br> <a href="{{route('practicas.create')}}" class="btn btn-success">Ir a registrar una</a>
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
                    @forelse($practicas as $practica)
                        <tr>
                            <td>{{$practica->id}}</td>
                            <td>{{$practica->nombre}}</td>
                            <td>{{$practica->descripcion}}</td>
                            <td><span class="badge bg-warning"><a href="{{route('practicas.edit',$practica->id)}}">Editar</a></span>
                                <span class="badge bg-success"><a href="{{route('practicas.show',$practica->id)}}">Mostrar</a></span>
                                <form action="{{route('practicas.destroy',$practica->id)}}" method="POST">
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
                {{$practicas->onEachSide(3)->links()}}
                </div>
              </div><!-- /.card-body -->
            </div>
        </div>
    </div>

@stop
