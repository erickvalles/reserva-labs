@extends('layouts.app')

@section('main_content')

    <div class="row">
        <div class="col-md-8">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">
                  <i class="fas fa-chart-pie mr-1"></i>
                  Detalles de {{$docente->nombreCompleto}}
                </h3>

              </div><!-- /.card-header -->
              <div class="card-body">
                <div class="tab-content p-0">
                información de todas las reservaciones relacionadas con este docente

                </div>
              </div><!-- /.card-body -->
            </div>
        </div>

        <div class="col-md-4">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">
                  <i class="fas fa-chart-pie mr-1"></i>
                  Teléfonos registrados
                </h3>
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">Añadir número</button>
              </div><!-- /.card-header -->
              <div class="card-body">
                <div class="tab-content p-0">
                    <ul>
                        @forelse ($docente->telefonos as $telefono)
                        <li>{{$telefono->area}}{{$telefono->numero}} <form action="{{route('eliminar_telefono',$telefono)}}" method="post" id="delete{{$telefono->id}}"> @csrf @method('DELETE') <i class="fas fa-minus-circle" style="color:red" onclick="document.getElementById('delete{{$telefono->id}}').submit();"></i> </form>
                        @empty
                            <li>No hay teléfonos registrados</li>
                        @endforelse

                    </ul>
                </div>
              </div><!-- /.card-body -->
            </div>
        </div>
    </div>



<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">New message</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="{{route('guardar_telefono')}}" method="POST">
      <div class="modal-body">

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

                </div>
            </div>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
        <input type="submit" value="Guardar teléfono" class="btn btn-primary">
      </div>
    </form>
    </div>
  </div>
</div>


@stop

@push('scripts')
<script>
    $( document ).ready(function() {
        @if($errors->any())
        $('#exampleModal').modal('show')
        @endif
    });

</script>
@endpush
