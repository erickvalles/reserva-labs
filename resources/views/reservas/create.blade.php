@extends('layouts.app')


@section('main_content')

    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <div class="card-title">
                        Reservar una práctica
                    </div>

                </div>

                <div class="card-body">
                    <div class="tab-content">
                        <form action="{{route('reservas.store')}}" method="POST">
                            @csrf
                            <div class="row">
                                <div class="col-sm-6">
                                    <!-- text input -->

                                        <div class="form-group">
                                            <label>Fecha inicio:</label>
                                                <div class="input-group date" id="reservationdatetime" data-target-input="nearest">
                                                    <input type="text" name="fecha_inicio" class="form-control datetimepicker-input" data-target="#reservationdatetime"/>
                                                    <div class="input-group-append" data-target="#reservationdatetime" data-toggle="datetimepicker">
                                                        <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                                                    </div>
                                                </div>
                                        </div>

                                  </div>

                                  <div class="col-sm-6">
                                    <!-- text input -->
                                    <div class="form-group">
                                        <label>Fecha fin:</label>
                                            <div class="input-group date" id="reservationfindatetime" data-target-input="nearest">
                                                <input type="text" name="fecha_fin" class="form-control datetimepicker-input" data-target="#reservationfindatetime"/>
                                                <div class="input-group-append" data-target="#reservationfindatetime" data-toggle="datetimepicker">
                                                    <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                                                </div>
                                            </div>
                                    </div>
                                        @error('fecha_fin')
                                        <div class="invalid-feedback">
                                            {{$errors->first('fecha_fin')}}
                                        </div>
                                    @enderror
                                    </div>
                                  </div>
                            </div>
                            <div class="row">
                              <div class="col-sm-4">
                                <!-- text input -->
                                <div class="form-group">
                                  <label>Nombre del profesor</label>
                                  <select class="form-control @error('docente_codigo') is-invalid  @enderror" name="docente_codigo" placeholder="Enter ..." autocomplete="off" value="{{old('docente_codigo')}}">
                                    @foreach ($profesores as $profe)
                                        <option value="{{$profe->codigo}}">{{$profe->nombreCompleto}}</option>
                                    @endforeach
                                  </select>
                                  @error('docente_codigo')
                                  <div class="invalid-feedback">
                                      {{$errors->first('docente_codigo')}}
                                  </div>
                                  @enderror
                                </div>
                              </div>
                              <div class="col-sm-4">
                                <!-- text input -->
                                <div class="form-group">
                                  <label>Laboratorio</label>
                                  <select class="form-control @error('laboratorio_id') is-invalid  @enderror" name="laboratorio_id" placeholder="Enter ..." autocomplete="off" value="{{old('laboratorio_id')}}">
                                    @foreach ($laboratorios as $laboratorio)
                                        <option value="{{$laboratorio->id}}">{{$laboratorio->nombre}}</option>
                                    @endforeach
                                  </select>
                                  @error('laboratorio_id')
                                  <div class="invalid-feedback">
                                      {{$errors->first('laboratorio_id')}}
                                  </div>
                                  @enderror
                                </div>
                              </div>
                              <div class="col-sm-4">
                                <!-- text input -->
                                <div class="form-group">
                                  <label>Materia</label>
                                <select class="form-control @error('materia_crn') is-invalid  @enderror" name="materia_crn" placeholder="Enter ..." autocomplete="off" value="{{old('materia_crn')}}">
                                    @foreach ($materias as $materia)
                                        <option value="{{$materia->crn}}">{{$materia->nombre}}</option>
                                    @endforeach
                                </select>
                                  @error('materia_crn')
                                  <div class="invalid-feedback">
                                      {{$errors->first('materia_crn')}}
                                  </div>
                                  @enderror
                                </div>
                              </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6">
                                    <h3>Equipos</h3>
                                    <div class="input-group">
                                        @foreach ($equipos as $equipo)
                                        <div class="form-check">
                                            <label class="form-check-label">
                                                <input class="form-check-input" type="checkbox" name="equipos[]" value="{{$equipo->id}}">{{$equipo->nombre}}</label>
                                        </div>
                                        @endforeach
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <h3>Prácticas</h3>
                                    <div class="input-group">
                                        @foreach ($practicas as $practica)
                                        <div class="form-check">
                                            <label class="form-check-label">
                                                <input class="form-check-input" type="checkbox" name="practicas[]" value="{{$practica->id}}">{{$practica->nombre}}</label>
                                        </div>
                                        @endforeach
                                    </div>
                            </div>

                            <div class="row">
                                <div class="col-sm-12">
                                    <input type="submit" value="Generar reservación" class="btn btn-block btn-primary">
                                </div>
                            </div>
                           </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

@stop

@push('scripts')

<script type="text/javascript">
    $(function () {
        $('#reservationdatetime').datetimepicker({ icons: { time: 'far fa-clock' } });
        $('#reservationfindatetime').datetimepicker({ icons: { time: 'far fa-clock' } });
    });
 </script>
@endpush
