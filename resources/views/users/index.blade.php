@extends('layouts.app')

@section('main_content')

    <div class="row">
        <div class="col-md-12">
        <div class="card">
              <div class="card-header">
                <h3 class="card-title">
                  <i class="fas fa-chart-pie mr-1"></i>
                  Listado de usuarios <br> <a href="{{route('usuarios.create')}}" class="btn btn-success">Ir a registrar otro</a>
                </h3>

              </div><!-- /.card-header -->
              <div class="card-body">
                <div class="tab-content p-0">
                <table class="table table-bordered">
                  <thead>
                    <tr>
                      <th style="width: 10px">#</th>
                      <th>Nombre</th>
                      <th>Email</th>
                      <th>Roles</th>
                      <th style="width: 40px">Acciones</th>
                    </tr>
                  </thead>
                  <tbody>
                    @forelse($usuarios as $usuario)
                        <tr>
                            <td>{{$usuario->id}}</td>
                            <td>{{$usuario->name}}</td>
                            <td>{{$usuario->email}}</td>
                            <td>
                                @forelse ($usuario->roles as $rol)
                                    {{$rol->name}}<br>
                                @empty
                                    Sin rol asignado
                                @endforelse
                            </td>
                            <td>
                                <span class="badge bg-warning"><a href="{{route('usuarios.edit',$usuario)}}">Editar</a></span>
                                <span class="badge bg-success"><a href="{{route('usuarios.show',$usuario)}}">Mostrar</a></span>
                                <form action="{{route('usuarios.destroy',$usuario)}}" method="POST">
                                @method('DELETE')
                                @csrf
                                <input type="submit" value="eliminar" onclick="return confirm('¿Desea eliminarlo?')" class="btn btn-danger">
                                </form>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="5">No hay usuarios registrados <br> <a href="{{route('usuarios.create')}}" class="btn btn-success">Ir a registrar alguno</a></td>
                        </tr>
                    @endforelse

                  </tbody>
                </table>

                </div>
              </div><!-- /.card-body -->
            </div>
        </div>
    </div>

@stop
