@extends('layouts.app')

@section('main_content')

    <div class="row">
        <div class="col-md-12">
        <div class="card">
              <div class="card-header">
                <h3 class="card-title">
                  <i class="fas fa-chart-pie mr-1"></i>
                  Listado de materias <br> <a href="{{route('materias.create')}}" class="btn btn-success">Ir a registrar una</a>
                </h3>

              </div><!-- /.card-header -->
              <div class="card-body">
                <div class="tab-content p-0">
                <table class="table table-bordered">
                  <thead>
                    <tr>
                      <th style="width: 10px">CLAVE</th>
                      <th style="width: 10px">CRN</th>
                      <th>Nombre</th>
                      <th>Carrera</th>
                      <th style="width: 40px">Acciones</th>
                    </tr>
                  </thead>
                  <tbody>
                    @forelse($materias as $materia)
                        <tr>
                            <td>{{$materia->clave}}</td>
                            <td>{{$materia->crn}}</td>
                            <td>{{$materia->nombre}}</td>
                            <td>{{$materia->carrera->nombre}}</td>
                            <td>
                                <span class="badge bg-warning"><a href="{{route('materias.edit',$materia)}}">Editar</a></span>
                                <span class="badge bg-success"><a href="{{route('materias.show',$materia)}}">Mostrar</a></span>
                                <form action="{{route('materias.destroy',$materia)}}" method="POST">
                                @method('DELETE')
                                @csrf
                                <input type="submit" value="eliminar" onclick="return confirm('¿Desea eliminarla?')" class="btn btn-danger">
                                </form>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="5">No hay materias registradas <br> <a href="{{route('materias.create')}}" class="btn btn-success">Ir a registrar una</a></td>
                        </tr>
                    @endforelse

                  </tbody>
                </table>
                {{$materias->onEachSide(3)->links()}}
                </div>
              </div><!-- /.card-body -->
            </div>
        </div>
    </div>

@stop
