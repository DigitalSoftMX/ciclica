@extends('layouts.app', ['activePage' => 'calendar', 'menuParent' => 'calendar', 'titlePage' => __('Calendar')])

@section('content')
<div class="content">
  <div class="container-fluid">
    <div class="header text-center">
      <h3 class="title">Consulta Citas</h3>
    </div>
    <div class="row">
      <div class="col-md-12 ml-auto mr-auto">
        <div class="card card-calendar">
          <div class="card-body ">
            @csrf
              <div class="row">
                <label class="col-sm-2 col-form-label">Especialidad</label>
                <div class="col-sm-3">
                  <div class="form-group bmd-form-group is-filled">
                    <input class="form-control" name="id_especialidad" id="id_especialidad" type="text" placeholder="Especialidad" required="true" aria-required="true">
                  </div>
                </div>
                <label class="col-sm-2 col-form-label">Medico</label>
                <div class="col-sm-4">
                  <div class="form-group bmd-form-group is-filled">
                    <input class="form-control" name="id_usuario" id="id_usuario" type="text" placeholder="Medico" required="true" aria-required="true">
                  </div>
                </div>
              </div> 
            <div id="fullCalendar"></div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

@endsection


@push('js')
<script src="//cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.10.0/locale/es.js"></script>
<script src="{{ asset('select2/select2.full.min.js')}}"></script>
<script src="{{ asset('js') }}/procesoconsultalaboratorio.js"></script>


@endpush