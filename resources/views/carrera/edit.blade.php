@extends('layouts.app')


@section('main_content')

    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <div class="card-title">
                        Editar Carrera
                    </div>

                </div>

                <div class="card-body">
                    <div class="tab-content">
                        @if (\Session::has('mensaje'))
                        <div class="alert alert-success">
                            {{\Session::get('mensaje')}}
                            </div>

                        @endif
                        <form action="{{route('carreras.update',$carrera)}}" method="POST">
                            @csrf
                            @method('PUT')
                            <div class="row">
                              <div class="col-sm-12">
                                <!-- text input -->
                                <div class="form-group">
                                  <label>Nombre</label>
                                  <input type="text" class="form-control @error('nombre') is-invalid  @enderror"
                                   name="nombre" placeholder="Enter ..." autocomplete="off"
                                    value="{{$carrera->nombre}}">
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
                                    <input type="submit" value="Guardar carrera" class="btn btn-block btn-primary">
                                </div>
                            </div>
                           </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

@stop
