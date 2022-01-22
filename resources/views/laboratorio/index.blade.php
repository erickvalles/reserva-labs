@extends('layouts.app')

@section('main_content')

    <div class="row">
        <div class="col-md-12">
        <div class="card">
              <div class="card-header">
                <h3 class="card-title">
                  <i class="fas fa-chart-pie mr-1"></i>
                  Listado de laboratorios <br> <a href="{{route('laboratorios.create')}}" class="btn btn-success">Ir a registrar uno</a>
                </h3>

              </div><!-- /.card-header -->
              <div class="card-body">
                <div class="tab-content p-0">
                <table class="table table-bordered">
                  <thead>
                    <tr>
                      <th style="width: 10px">#</th>
                      <th>Nombre</th>
                      <th>Edificio</th>
                      <th>Capacidad</th>
                      <th style="width: 40px">Acciones</th>
                    </tr>
                  </thead>
                  <tbody>
                    @forelse($laboratorios as $lab)
                        <tr>
                            <td>{{$lab->id}}</td>
                            <td>{{$lab->nombre}}</td>
                            <td>{{$lab->edificio}}</td>
                            <td>{{$lab->capacidad}}</td>
                            <td><span class="badge bg-warning"><a href="{{route('laboratorios.edit',$lab->id)}}">Editar</a></span>
                                <span class="badge bg-success"><a href="{{route('laboratorios.show',$lab->id)}}">Mostrar</a></span>
                                <form action="{{route('laboratorios.destroy',$lab->id)}}" method="POST">
                                @method('DELETE')
                                @csrf
                                <input type="submit" value="eliminar" onclick="return confirm('¿Desea aliminarlo?')" class="btn btn-danger">
                                </form>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="5">No hay laboratorios registrados <br> <a href="{{route('laboratorios.create')}}" class="btn btn-success">Ir a registrar uno</a></td>
                        </tr>
                    @endforelse

                  </tbody>
                </table>
                {{$laboratorios->onEachSide(3)->links()}}
                </div>
              </div><!-- /.card-body -->
            </div>
        </div>
    </div>

@stop
