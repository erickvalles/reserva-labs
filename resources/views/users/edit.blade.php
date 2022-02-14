@extends('layouts.app')


@section('main_content')

    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <div class="card-title">
                        Editar usuario
                    </div>

                </div>

                <div class="card-body">
                    <div class="tab-content">
                        <form action="{{route('usuarios.update',$usuario)}}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')

                            <div class="row">

                              <div class="col-sm-3">
                                <!-- text input -->
                                <div class="form-group">
                                  <label>Nombre</label>
                                  <input type="text" class="form-control @error('name') is-invalid  @enderror" name="name" placeholder="Enter ..." autocomplete="off" value="{{$usuario->name}}">
                                  @error('name')
                                  <div class="invalid-feedback">
                                      {{$errors->first('name')}}
                                  </div>
                                  @enderror
                                </div>
                              </div>

                              <div class="col-sm-3">
                                <!-- text input -->
                                <div class="form-group">
                                  <label>Correo electrónico</label>
                                  <input type="text" class="form-control @error('email') is-invalid  @enderror" name="email" placeholder="Enter ..." autocomplete="off" value="{{$usuario->email}}">
                                  @error('email')
                                  <div class="invalid-feedback">
                                      {{$errors->first('email')}}
                                  </div>
                                  @enderror
                                </div>
                              </div>
                              <div class="col-sm-3">
                                <!-- text input -->
                                <div class="form-group">
                                  <label>Password</label>
                                  <input type="password" class="form-control @error('password') is-invalid  @enderror" name="password" placeholder="Enter ..." autocomplete="off">
                                  @error('password')
                                  <div class="invalid-feedback">
                                      {{$errors->first('password')}}
                                  </div>
                                  @enderror
                                </div>
                              </div>
                              <div class="col-sm-1">
                                <div class="form-group">
                                  <div class="form-check">
                                      <label class="form-check-label">
                                          <input class="form-check-input" type="checkbox" name="cambiar_pass" value="si"> Cambiar contraseña </label>
                                  </div>
                                </div>
                            </div>

                              <div class="col-sm-2">
                                <!-- text input -->
                                <div class="form-group">
                                  <label>Rol:</label>
                                  <div class="input-group">
                                    @foreach ($roles as $rol)
                                    <div class="form-check">
                                        <label class="form-check-label">
                                            <input class="form-check-input" type="checkbox" name="roles[]" value="{{$rol->name}}" @if ($usuario->hasRole($rol->name))
                                                checked
                                            @endif>{{$rol->name}}</label>
                                    </div>
                                    @endforeach
                                </div>
                                </div>
                              </div>


                            </div>
                            <div class="row">
                                <div class="col-sm-3">
                                    <!-- text input -->
                                    <div class="form-group">
                                      <label>Foto de perfil</label>
                                      <input type="file" class="form-control @error('foto') is-invalid  @enderror" name="foto">
                                      @error('foto')
                                      <div class="invalid-feedback">
                                          {{$errors->first('foto')}}
                                      </div>
                                      @enderror
                                    </div>
                                  </div>
                            </div>

                            <div class="row">
                                <div class="col-sm-12">
                                    <input type="submit" value="Guardar usuario" class="btn btn-block btn-primary">
                                </div>
                            </div>
                           </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

@stop
