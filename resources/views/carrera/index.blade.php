@extends('layouts.app')

@section('main_content')

    <div class="row">
        <div class="col-md-12">
        <div class="card">
              <div class="card-header">
                <h3 class="card-title">
                  <i class="fas fa-chart-pie mr-1"></i>
                  Listado de carreras <br> <a href="{{route('carreras.create')}}" class="btn btn-success">Ir a registrar una</a>
                </h3>

              </div><!-- /.card-header -->
              <div class="card-body">
                <div class="tab-content p-0">
                <table class="table table-bordered">
                  <thead>
                    <tr>
                      <th style="width: 10px">#</th>
                      <th>Nombre</th>
                      <th style="width: 40px">Acciones</th>
                    </tr>
                  </thead>
                  <tbody>
                    @forelse($carreras as $carrera)
                        <tr>
                            <td>{{$carrera->clave}}</td>
                            <td>{{$carrera->nombre}}</td>
                            <td>
                                <span class="badge bg-warning"><a href="{{route('carreras.edit',$carrera->clave)}}">Editar</a></span>
                                <span class="badge bg-success"><a href="{{route('carreras.show',$carrera->clave)}}">Mostrar</a></span>
                                <form action="{{route('carreras.destroy',$carrera->clave)}}" method="POST">
                                @method('DELETE')
                                @csrf
                                <input type="submit" value="eliminar" onclick="return confirm('¿Desea eliminarla?')" class="btn btn-danger">
                                </form>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="5">No hay carreras registradas <br> <a href="{{route('carreras.create')}}" class="btn btn-success">Ir a registrar una</a></td>
                        </tr>
                    @endforelse

                  </tbody>
                </table>
                {{$carreras->onEachSide(3)->links()}}
                </div>
              </div><!-- /.card-body -->
            </div>
        </div>
    </div>

@stop
