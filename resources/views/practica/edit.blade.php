@extends('layouts.app')


@section('main_content')

    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <div class="card-title">
                        Editar Práctica
                    </div>

                </div>

                <div class="card-body">
                    <div class="tab-content">
                        @if (\Session::has('mensaje'))
                        <div class="alert alert-success">
                            {{\Session::get('mensaje')}}
                            </div>
                        @endif
                        <form action="{{route('practicas.update',$practica->id)}}" method="POST">
                            @csrf
                            @method('PUT')
                            <div class="row">
                              <div class="col-sm-12">
                                <!-- text input -->
                                <div class="form-group">
                                  <label>Nombre</label>
                                  <input type="text" class="form-control @error('nombre') is-invalid  @enderror"
                                   name="nombre" placeholder="Enter ..." autocomplete="off"
                                   value="{{$practica->nombre}}">
                                  @error('nombre')
                                  <div class="invalid-feedback">
                                      {{$errors->first('nombre')}}
                                  </div>
                                  @enderror
                                </div>
                              </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-12">
                                  <!-- textarea -->
                                  <div class="form-group">
                                    <label>Descripción</label>
                                    <textarea class="form-control @error('descripcion') is-invalid  @enderror"
                                     name="descripcion" rows="3"
                                      placeholder="Enter ...">{{$practica->descripcion}}</textarea>
                                    @error('descripcion')
                                        <div class="invalid-feedback">
                                            {{$errors->first('descripcion')}}
                                        </div>
                                    @enderror
                                  </div>
                                </div>
                              </div>
                            <div class="row">
                                <div class="col-sm-12">
                                    <input type="submit" value="Guardar práctica" class="btn btn-block btn-primary">
                                </div>
                            </div>
                           </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

@stop
