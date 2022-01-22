@extends('layouts.app')


@section('main_content')

    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <div class="card-title">
                        Editar asignatura
                    </div>

                </div>

                <div class="card-body">
                    <div class="tab-content">
                        @if (\Session::has('mensaje'))
                        <div class="alert alert-success">
                            {{\Session::get('mensaje')}}
                            </div>
                        @endif
                        <form action="{{route('materias.update',$materia)}}" method="POST">
                            @csrf
                            @method('PUT')
                            <div class="row">
                              <div class="col-sm-2">
                                <!-- text input -->
                                <div class="form-group">
                                  <label>CLAVE</label>
                                  <input type="text" class="form-control @error('clave') is-invalid  @enderror" name="clave" placeholder="Enter ..." autocomplete="off" value="{{$materia->clave}}">
                                  @error('clave')
                                  <div class="invalid-feedback">
                                      {{$errors->first('clave')}}
                                  </div>
                                  @enderror
                                </div>
                              </div>
                              <div class="col-sm-2">
                                <!-- text input -->
                                <div class="form-group">
                                  <label>CRN</label>
                                  <input type="text" class="form-control @error('crn') is-invalid  @enderror" name="crn" placeholder="Enter ..." autocomplete="off" value="{{$materia->crn}}">
                                  @error('crn')
                                  <div class="invalid-feedback">
                                      {{$errors->first('crn')}}
                                  </div>
                                  @enderror
                                </div>
                              </div>

                              <div class="col-sm-4">
                                <!-- text input -->
                                <div class="form-group">
                                  <label>Nombre</label>
                                  <input type="text" class="form-control @error('nombre') is-invalid  @enderror" name="nombre" placeholder="Enter ..." autocomplete="off" value="{{$materia->nombre}}">
                                  @error('nombre')
                                  <div class="invalid-feedback">
                                      {{$errors->first('nombre')}}
                                  </div>
                                  @enderror
                                </div>
                              </div>

                              <div class="col-sm-4">
                                <!-- text input -->
                                <div class="form-group">
                                  <label>Carrera</label>
                                  <select class="form-control @error('carrera_clave') is-invalid  @enderror" name="carrera_clave">
                                    @foreach ($carreras as $carrera)
                                        <option value="{{$carrera->clave}}" @if($carrera->clave == $materia->carrera_clave) selected @endif>{{$carrera->nombre}}</option>
                                    @endforeach
                                  </select>
                                  @error('carrera_clave')
                                  <div class="invalid-feedback">
                                      {{$errors->first('carrera_clave')}}
                                  </div>
                                  @enderror
                                </div>
                              </div>
                            </div>

                            <div class="row">
                                <div class="col-sm-12">
                                    <input type="submit" value="Guardar materia" class="btn btn-block btn-primary">
                                </div>
                            </div>
                           </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

@stop
