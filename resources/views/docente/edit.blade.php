@extends('layouts.app')


@section('main_content')

    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <div class="card-title">
                        Editar profesor
                    </div>

                </div>

                <div class="card-body">
                    <div class="tab-content">
                        @if (\Session::has('mensaje'))
                        <div class="alert alert-success">
                            {{\Session::get('mensaje')}}
                            </div>
                        @endif
                        <form action="{{route('docentes.update',$profesor)}}" method="POST">
                            @csrf
                            @method('PUT')

                            <div class="row">
                                <div class="col-sm-3">
                                    <!-- text input -->
                                    <div class="form-group">
                                      <label>Código</label>
                                      <input type="text" class="form-control @error('codigo') is-invalid  @enderror"
                                       name="codigo" placeholder="Enter ..." autocomplete="off" value="{{$profesor->codigo}}">
                                      @error('codigo')
                                      <div class="invalid-feedback">
                                          {{$errors->first('codigo')}}
                                      </div>
                                      @enderror
                                    </div>
                                  </div>
                            </div>
                            <div class="row">

                              <div class="col-sm-3">
                                <!-- text input -->
                                <div class="form-group">
                                  <label>Nombre</label>
                                  <input type="text" class="form-control @error('nombre') is-invalid  @enderror"
                                   name="nombre" placeholder="Enter ..." autocomplete="off" value="{{$profesor->nombre}}">
                                  @error('nombre')
                                  <div class="invalid-feedback">
                                      {{$errors->first('nombre')}}
                                  </div>
                                  @enderror
                                </div>
                              </div>

                              <div class="col-sm-3">
                                <!-- text input -->
                                <div class="form-group">
                                  <label>Apellido paterno</label>
                                  <input type="text" class="form-control @error('ap') is-invalid  @enderror"
                                   name="ap" placeholder="Enter ..." autocomplete="off" value="{{$profesor->ap}}">
                                  @error('ap')
                                  <div class="invalid-feedback">
                                      {{$errors->first('ap')}}
                                  </div>
                                  @enderror
                                </div>
                              </div>
                              <div class="col-sm-3">
                                <!-- text input -->
                                <div class="form-group">
                                  <label>Apellido materno</label>
                                  <input type="text" class="form-control @error('am') is-invalid  @enderror"
                                   name="am" placeholder="Enter ..." autocomplete="off" value="{{$profesor->am}}">
                                  @error('am')
                                  <div class="invalid-feedback">
                                      {{$errors->first('am')}}
                                  </div>
                                  @enderror
                                </div>
                              </div>

                              <div class="col-sm-3">
                                <!-- text input -->
                                <div class="form-group">
                                  <label>Correo electrónico</label>
                                  <input type="text" class="form-control @error('correo') is-invalid  @enderror"
                                  name="correo" placeholder="Enter ..." autocomplete="off" value="{{$profesor->correo}}">
                                  @error('correo')
                                  <div class="invalid-feedback">
                                      {{$errors->first('correo')}}
                                  </div>
                                  @enderror
                                </div>
                              </div>


                            </div>

                            <div class="row">
                                <div class="col-sm-12">
                                    <input type="submit" value="Guardar profesor" class="btn btn-block btn-primary">
                                </div>
                            </div>
                           </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

@stop
