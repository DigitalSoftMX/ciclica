@extends('layouts.appdoctores', ['activePage' => 'calendar', 'menuParent' => 'calendar', 'titlePage' => __('Calendar')])

@section('content')
<div class="content">
  <div class="container-fluid">
    <div class="header text-center">
      <h3 class="title">Mis Consultas</h3>
    </div>
    <div class="row">
      <div class="col-md-12 ml-auto mr-auto">
        <div class="card card-calendar">
          <div class="card-body ">
            @csrf
              <input name="id_user" id="id_user" type="hidden" value="{{ auth()->user()->id }}">
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
<script src="{{ asset('js') }}/procesoconsultadoctores.js"></script>   

@endpush