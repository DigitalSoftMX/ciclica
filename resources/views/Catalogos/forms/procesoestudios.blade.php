@extends('layouts.app', ['activePage' => 'calendar', 'menuParent' => 'calendar', 'titlePage' => __('Calendar')])

@section('content')
<div class="content">
  <div class="container-fluid">
    <div class="header text-center">
      <h3 class="title">Estudios</h3>
    </div>
    <div class="row">
      <div class="col-md-12 ml-auto mr-auto">
        <div class="card card-calendar">
          <div class="card-body ">
            @csrf
            @method('post')
            <div class="row">
                <label class="col-sm-2 col-form-label">Medico</label>
                <div class="col-sm-6">
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
<script src="{{ asset('js') }}/procesoestudios.js"></script>   

@endpush