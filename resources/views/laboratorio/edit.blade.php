@extends('layouts.app')


@section('main_content')

    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <div class="card-title">
                        Editar el {{$laboratorio->nombre}}
                    </div>

                </div>

                <div class="card-body">
                    <div class="tab-content">
                        @if (\Session::has('mensaje'))
                        <div class="alert alert-success">
                            {{\Session::get('mensaje')}}
                            </div>

                        @endif
                        <form action="{{route('laboratorios.update',$laboratorio)}}" method="POST">
                            @csrf
                            @method('PUT')
                            <div class="row">
                              <div class="col-sm-4">
                                <!-- text input -->
                                <div class="form-group">
                                  <label>Nombre</label>
                                  <input type="text" class="form-control @error('nombre') is-invalid  @enderror"
                                   name="nombre" placeholder="Enter ..." autocomplete="off"
                                   value="{{$laboratorio->nombre}}">
                                  @error('nombre')
                                  <div class="invalid-feedback">
                                      {{$errors->first('nombre')}}
                                  </div>
                                  @enderror
                                </div>
                              </div>
                              <div class="col-sm-4">
                                <div class="form-group">
                                  <label>Edificio</label>
                                  <input type="text" class="form-control @error('edificio') is-invalid  @enderror"
                                   name="edificio" placeholder="Enter ..." autocomplete="off"
                                   value="{{$laboratorio->edificio}}">
                                  @error('edificio')
                                  <div class="invalid-feedback">
                                    {{$errors->first('edificio')}}
                                </div>
                                  @enderror
                                </div>
                              </div>
                              <div class="col-sm-4">
                                <div class="form-group">
                                  <label for="capacidad">Capacidad</label>
                                  <input type="text"  class="form-control @error('capacidad') is-invalid @enderror"
                                   name="capacidad" id="capacidad" placeholder="Ej. 20" autocomplete="off"
                                    value="{{$laboratorio->capacidad}}">
                                  <div class="invalid-feedback">
                                    {{$errors->first('capacidad')}}
                                </div>
                                </div>
                              </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-12">
                                    <input type="submit" value="Guardar laboratorio" class="btn btn-block btn-primary">
                                </div>
                            </div>
                           </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

@stop
