@extends('layouts.app')

@section('main_content')

    <div class="row">
        <div class="col-md-12">
        <div class="card">
              <div class="card-header">
                <h3 class="card-title">
                  <i class="fas fa-chart-pie mr-1"></i>
                  Editar equipo: {{$equipo->nombre}}
                </h3>

              </div><!-- /.card-header -->
              <div class="card-body">
                <div class="tab-content p-0">
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    <form action="{{route('equipo.update',$equipo->id)}}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="row">
                          <div class="col-sm-2">
                            <!-- text input -->
                            <div class="form-group">
                              <label>Cantidad</label>
                              <input type="text" class="form-control" value="{{$equipo->cantidad}}" name="cantidad" placeholder="Enter ...">
                            </div>
                          </div>
                          <div class="col-sm-10">
                            <div class="form-group">
                              <label>Nombre</label>
                              <input type="text" class="form-control" value="{{$equipo->nombre}}" name="nombre" placeholder="Enter ...">
                            </div>
                          </div>
                        </div>
                        <div class="row">
                          <div class="col-sm-12">
                            <!-- textarea -->
                            <div class="form-group">
                              <label>Descripción</label>
                              <textarea class="form-control" name="descripcion" rows="3" placeholder="Enter ...">{{$equipo->descripcion}}</textarea>
                            </div>
                          </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-12">
                                <input type="submit" value="Guardar equipo" class="btn btn-block btn-primary">
                            </div>
                        </div>
                       </form>
                </div>
              </div><!-- /.card-body -->
            </div>
        </div>
    </div>

@stop
