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
            @method('post')
            <div class="row principal-header p-3 form-row color-back-1 d-flex align-items-center">
                <h3 class="color-text-2 mx-4 mb-0"><i class="iconPlas-consultas mr-2 mb-0"></i>Consultas</h3>
                <label class="col-auto ">Medico</label>
                <div class="col-auto">
                  <div class="form-group bmd-form-group is-filled">
                    <input class="form-control" name="id_user" id="id_user" type="text" placeholder="Medico" required="true" aria-required="true">
                  </div>
                </div>
              </div>            <div id="fullCalendar"></div>
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
<script src="{{ asset('js') }}/procesoconsulta.js"></script>   

@endpush