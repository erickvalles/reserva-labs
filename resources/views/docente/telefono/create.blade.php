@extends('layouts.app')


@section('main_content')

    <div class="row">
        <div class="col-md-2">
            <div class="card">
                <div class="card-header">
                    <div class="card-title">
                        Añadir número de teléfono al profesor
                    </div>

                </div>

                <div class="card-body">
                    <div class="tab-content">
                        <form action="{{route('guardar_telefono')}}" method="POST">
                            @csrf
                            <div class="row">
                              <div class="col-sm-4">
                                <!-- text input -->
                                <div class="form-group">
                                  <label>Área</label>
                                  <input type="text" class="form-control @error('area') is-invalid  @enderror" name="area" placeholder="Enter ..." autocomplete="off" value="{{old('area')}}">
                                  @error('area')
                                  <div class="invalid-feedback">
                                      {{$errors->first('area')}}
                                  </div>
                                  @enderror
                                </div>
                                <input type="hidden" name="docente_codigo" value="{{$docente->codigo}}">
                            </div>

                              <div class="col-sm-8">
                                <!-- text input -->
                                <div class="form-group">
                                  <label>Número</label>
                                  <input type="text" class="form-control @error('numero') is-invalid  @enderror" name="numero" placeholder="Enter ..." autocomplete="off" value="{{old('numero')}}">
                                  @error('numero')
                                  <div class="invalid-feedback">
                                      {{$errors->first('numero')}}
                                  </div>
                                  @enderror
                                </div>
                              </div>


                            </div>

                            <div class="row">
                                <div class="col-sm-12">
                                    <input type="submit" value="Guardar teléfono" class="btn btn-primary">
                                </div>
                            </div>
                           </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

@stop
