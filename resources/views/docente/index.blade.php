@extends('layouts.app')

@section('main_content')

    <div class="row">
        <div class="col-md-12">
        <div class="card">
              <div class="card-header">
                <h3 class="card-title">
                  <i class="fas fa-chart-pie mr-1"></i>
                  Listado de docentes <br> <a href="{{route('docentes.create')}}" class="btn btn-success">Ir a registrar otro</a>
                </h3>

              </div><!-- /.card-header -->
              <div class="card-body">
                <div class="tab-content p-0">
                <table class="table table-bordered">
                  <thead>
                    <tr>
                      <th style="width: 10px">Código</th>
                      <th>Nombre</th>
                      <th>Email</th>
                      <th style="width: 40px">Acciones</th>
                    </tr>
                  </thead>
                  <tbody>
                    @forelse($profes as $profe)
                        <tr>
                            <td>{{$profe->codigo}}</td>
                            <td>{{$profe->nombreCompleto}}</td>
                            <td>{{$profe->correo}}</td>
                            <td>
                                <span class="badge bg-warning"><a href="{{route('docentes.edit',$profe)}}">Editar</a></span>
                                <span class="badge bg-success"><a href="{{route('docentes.show',$profe)}}">Mostrar</a></span>
                                <form action="{{route('docentes.destroy',$profe)}}" method="POST">
                                @method('DELETE')
                                @csrf
                                <input type="submit" value="eliminar" onclick="return confirm('¿Desea eliminarla?')" class="btn btn-danger">
                                </form>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="5">No hay materias registradas <br> <a href="{{route('docentes.create')}}" class="btn btn-success">Ir a registrar alguno</a></td>
                        </tr>
                    @endforelse

                  </tbody>
                </table>
                {{$profes->onEachSide(3)->links()}}
                </div>
              </div><!-- /.card-body -->
            </div>
        </div>
    </div>

@stop
