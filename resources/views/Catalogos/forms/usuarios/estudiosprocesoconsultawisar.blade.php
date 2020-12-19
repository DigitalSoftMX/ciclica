@extends('layouts.app', ['activePage' => 'form_wizard', 'menuParent' => 'forms', 'titlePage' => __('Consulta')])

<link href="{{ asset('material') }}/css/flipclock.css" rel="stylesheet" />

@section('content')
<div class="content">
  <div class="container-fluid">
    <div class="row">


<!-- PERFIL -->
      
<!--      Wizard container --------------------------------------------------------------------- -->
       <div class="col-md-12">
        <div class="card card-profile">
          <div class="card-body"> 
             
             <div class="table-responsive">
                  <table id="datatables" class="table table-striped table-no-bordered table-hover">
                    <thead class="text-primary">
                      <th>
                          {{ __('Nota') }}
                      </th>
                      <th>
                        {{ __('Archivo') }}
                      </th>
                      <th>
                        {{ __('Archivo 2') }}
                      </th>
                      <th>
                        {{ __('Archivo 3') }}
                      </th>
                      <th>
                        {{ __('Medico') }}
                      </th>
                      <th>
                        {{ __('Especialidad') }}
                      </th>
                      <th>
                        {{ __('Fecha') }}
                      </th>
                    </thead>
                    <tbody>
                      @foreach($resultadosmedicos as $item)
                        <tr>
                          <td>
                            {{ $item->resultado }}
                          </td>
                        <td>
                          @if($item->archivo != null)
                            <a href="download/{{ $item->archivo }}"><span class="label label-primary">Descargar</span></a>
                          @else
                            <a href="#"><span class="label label-primary">No hay archivo</span></a>
                          @endif 
                          </td>
                          <td>
                          @if($item->archivo2 != null)
                            <a href="download/{{ $item->archivo2 }}"><span class="label label-primary">Descargar</span></a>
                          @else
                            <a href="#"><span class="label label-primary">No hay archivo</span></a>
                          @endif 
                          </td>
                          <td>
                          @if($item->archivo3 != null)
                            <a href="download/{{ $item->archivo3 }}"><span class="label label-primary">Descargar</span></a>
                          @else
                            <a href="#"><span class="label label-primary">No hay archivo</span></a>
                          @endif 
                          </td>
                          <td>
                            {{ $item->medico }}
                          </td>
                          <td>
                            {{ $item->especialidad }}
                          </td>
                          <td>
                            {{ $item->created_at->format('Y-m-d') }}
                          </td>
                      @endforeach
                    </tbody>
                  </table>
                </div>


           </div>
         </div>
    </div>
 <!-- wizard container ----------------------------------------------------------------------->


   </div>
  </div>
</div>
    <!--  FIN        -->
      
      @include("Catalogos.forms.imagenologia.formulariolaboratorio")
      
@endsection


@push('js')
  <script>
    $(document).ready(function() {
      // Initialise the wizard
      demo.initMaterialWizard();
      setTimeout(function() {
        $('.card.card-wizard').addClass('active');
      }, 600);
    });
  </script>

  <script>
    $(document).ready(function() {
      // initialise Datetimepicker and Sliders
      md.initFormExtendedDatetimepickers();
      if ($('.slider').length != 0) {
        md.initSliders();
      }
    });
  </script>
 
<script src="//cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.10.0/locale/es.js"></script>
<script src="{{ asset('select2/select2.full.min.js')}}"></script>

@endpush

