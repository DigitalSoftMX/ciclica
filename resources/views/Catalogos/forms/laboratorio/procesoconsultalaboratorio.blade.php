@extends('layouts.app', ['activePage' => 'calendar', 'menuParent' => 'calendar', 'titlePage' => __('Calendar')])

@section('content')
<div class="content mt-2">
  <div class="container-fluid">
    <div class="header text-center m-0 p-0">
      
    </div>
    <div class="row">
      <div class="col-md-12 ml-auto mr-auto">
        <div class="card card-calendar">
          <div class="card-body ">
            @csrf
              <div class="row principal-header p-3 form-row color-back-1 d-flex align-items-center">
                  <h3 class="color-text-2 mx-4 mb-0"><i class="iconPlas-agenda-dia mr-2 mb-0"></i>Consulta Cita</h3>
                <label class="col-auto ">Especialidad</label>
                 <input class="col-auto form-control" name="id_especialidad" id="id_especialidad" type="text" placeholder="Especialidad" required="true" aria-required="true">
                
                <div class="col-auto form-row ml-2 p-0 d-flex align-items-center">
                    <label class="col-auto ">Medico</label>
                  
                    <input class="form-control" name="id_usuario" id="id_usuario" type="text" placeholder="Medico" required="true" aria-required="true">
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