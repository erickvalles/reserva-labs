@extends('layouts.app')

@section('main_content')

    <div class="row">
        <div class="col-md-12">
        <div class="card">
              <div class="card-header">
                <h3 class="card-title">
                  <i class="fas fa-chart-pie mr-1"></i>
                  Detalles de {{$materia->nombre}}
                </h3>

              </div><!-- /.card-header -->
              <div class="card-body">
                <div class="tab-content p-0">
                información de todas las practicas relacionadas con esta materia

                </div>
              </div><!-- /.card-body -->
            </div>
        </div>
    </div>

@stop
