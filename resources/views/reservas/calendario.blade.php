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
                        <div id="calendar">

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@stop

@push('estilos')
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/fullcalendar@5.10.1/main.min.css">
@endpush
@push('scripts')

<script src="https://cdn.jsdelivr.net/npm/fullcalendar@5.10.1/main.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/fullcalendar@5.10.1/locales-all.min.js"></script>

<script>

    document.addEventListener('DOMContentLoaded', function() {
      var calendarEl = document.getElementById('calendar');
      var calendar = new FullCalendar.Calendar(calendarEl, {
        initialView: 'timeGridWeek',
        height:900,
        locale:'es',
        events: {!!$reservas!!}
      });
      calendar.render();
    });

  </script>

@endpush
