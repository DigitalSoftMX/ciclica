@extends('layouts.applaboratorio', ['activePage' => 'form_wizard', 'menuParent' => 'forms', 'titlePage' => __('Consulta')])

<link href="{{ asset('material') }}/css/flipclock.css" rel="stylesheet" />

@section('content')
<div class="content">
  <div class="container-fluid">
    <div class="row">

<!-- PERFIL -->
 <!-- @forelse ($info as $product)
      <div class="col-md-3">
        <div class="card card-profile">
          <div class="card-avatar">
                @if ($product->picture)
                    <img src="../storage/app/public/{{ $product->picture }}" />
                @else
                    <img src="{{ asset('material') }}/img/placeholder.jpg" alt="...">
                @endif
          </div>
     
            <div class="card-body">
                  <div class="row justify-content-center">
                     <div class="col-lg-12 mt-3">
                      <div class="input-group form-control-lg">
                        <label class="col-sm-12 col-form-label text-center">{{ $product->name }} {{ $product->app_name }} {{ $product->apm_name }}</label>   
                      </div>
                    </div>
                    <div class="col-lg-12 mt-3">
                      <div class="input-group form-control-lg">
                        <label class="col-sm-12 col-form-label text-center">26 años</label>   
                      </div>
                    </div>
                  </div>
                  <div class="card-footer">
                <div class="card-footer ml-auto mr-auto">
                     <div class="col-lg-12">
                      <div class="clock"></div>
                    </div>
                </div>
              <div class="clearfix"></div>
            </div>
          </div>
        </div>
      </div>
  @empty
      <div class="card-header card-header-primary text-center">
         <h4>No se encontraron Resultados</h4>
      </div>
  @endforelse
-->

@forelse ($estu as $product)
      <div class="col-md-12">
        <div class="card card-profile">
   
            <div class="card-body">
                  <div class="row justify-content-center">
                     <div class="col-lg-9 mt-3">
                      <div class="input-group form-control-lg">
                        <label class="col-sm-12 col-form-label text-center">{{ $product->descripcion }}</label>   
                      </div>
                    </div>
                  </div>
                  <div class="card-footer">
                <div class="card-footer ml-auto mr-auto">
                     <div class="col-lg-12">
                      <div class="clock"></div>
                    </div>
                </div>
              <div class="clearfix"></div>
            </div>
   
          </div>
        </div>
      </div>
  @empty
      <div class="card-header card-header-primary text-center">
        <!-- <h4>No se encontraron Resultados</h4>-->
      </div>
  @endforelse
  
<!-- PERFIL -->
      
<!--      Wizard container --------------------------------------------------------------------- -->
       <div class="col-md-12">
        <div class="card card-profile">
          <div class="card-body"> 
             @if($est == null)
             <div class="row">
                    <div class="col-12 text-right">
                      <a href="#" class="btn btn-sm btn-rose" data-toggle="modal" data-target=".docs-example-modal-lg" onclick="tipo('nuevo')">{{ __('Agregar') }} </a>
                    </div>
                  </div>
              @endif
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
                      <th>
                        {{ __('Acciones') }}
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
                          <th>
                            <a href="{{route('addlaboratorioedit',$item->id)}}" class="btn btn-sm btn-rose" data-toggle="modal" data-target=".docs-exampleedit-modal-lg">{{ __('Editar') }} </a>
                            <a href="{{route('addlaboratoriodelete',$item->id)}}" class="btn btn-sm btn-rose">{{ __('Eliminar') }} </a>
                      </th>
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
      
      @include("Catalogos.forms.laboratorio.formulariolaboratorio")
      
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

