@extends('layouts.app')

@section('main_content')

    <div class="row">
        <div class="col-md-12">
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
    </div>

@stop
