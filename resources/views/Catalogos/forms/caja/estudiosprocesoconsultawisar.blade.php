@extends('layouts.app', ['activePage' => 'form_wizard', 'menuParent' => 'forms', 'titlePage' => __('Consulta')])

<link href="{{ asset('material') }}/css/flipclock.css" rel="stylesheet" />

@section('content')
<div class="content">
  <div class="container-fluid">
    <div class="row">

<!-- PERFIL -->
@forelse ($info as $product)
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
                        <label class="col-sm-12 col-form-label text-center">{{ $product->username }}</label>   
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


      <div class="col-md-8">
        <div class="card card-profile">
   
           <div class="card-body ">
             <form action="{{route('caj',$id)}}" autocomplete="off" class="form-horizontal" method="post">
            @csrf
            @method('post')
              
              <div class="row">
                <label class="col-sm-2 col-form-label">Cantidad</label>
                <div class="col-sm-2">
                  <div class="form-group bmd-form-group is-filled">
                    <input class="form-control" name="cantidad" id="cantidad" type="text" value={{$cantidad}} required="true" readonly>
                  </div>
                </div>
                <label class="col-sm-2 col-form-label">Iva</label>
                <div class="col-sm-2">
                  <div class="form-group bmd-form-group is-filled">
                    <input class="form-control" name="iva" id="iva" type="text" value={{$iva}} required="true" readonly>
                  </div>
                </div>
                <label class="col-sm-2 col-form-label">Total</label>
                <div class="col-sm-2">
                  <div class="form-group bmd-form-group is-filled">
                    <input class="form-control" name="total" id="total" type="text" value={{$total}} required="true" readonly>
                  </div>
                </div>
              </div>

              <div class="row">
                <label class="col-sm-2 col-form-label">Forma de pago</label>
                  <div class="col-sm-4">
                    <div class="form-group">
                      <div class="dropdown bootstrap-select col-sm-12 pl-0 pr-0">
                      <select class="selectpicker col-sm-12 pl-0 pr-0" name="forma_pago" data-style="select-with-transition" title="" data-size="100" tabindex="-98">
                        <option value="Efectivo">Efectivo</option>
                        <option value="Tarjeta">Tarjeta</option>
                      </select>
                   </div>
                  </div>
                </div>
                 
                 <label class="col-sm-2 col-form-label">TC/TD</label>
                <div class="col-sm-4">
                  <div class="form-group bmd-form-group is-filled">
                    <input class="form-control" name="tc_td" id="tc_td" type="text" placeholder="TC/TD" >
                  </div>
                </div>
              </div>

               <div class="row">
                <label class="col-sm-2 col-form-label">Deuda</label>
                  <div class="col-sm-4">
                    <div class="form-group">
                      <div class="dropdown bootstrap-select col-sm-12 pl-0 pr-0">
                      <select class="selectpicker col-sm-12 pl-0 pr-0" name="deuda" data-style="select-with-transition" title="" data-size="100" tabindex="-98">
                        <option value="No">No</option>
                        <option value="Si">Si</option>
                      </select>
                   </div>
                  </div>
                </div>
                 
                 <label class="col-sm-2 col-form-label">Fecha de Pago</label>
                <div class="col-sm-4">
                  <div class="form-group bmd-form-group is-filled">
                    <input class="form-control" name="fech_pago" id="fech_pago" type="text">
                  </div>
                </div>
              </div>
               <div class="row">
                <label class="col-sm-2 col-form-label">Facturar</label>
                  <div class="col-sm-4">
                    <div class="form-group">
                      <div class="dropdown bootstrap-select col-sm-12 pl-0 pr-0">
                      <select class="selectpicker col-sm-12 pl-0 pr-0" name="factura" data-style="select-with-transition" title="" data-size="100" tabindex="-98">
                        <option value="No">No</option>
                        <option value="Si">Si</option>
                      </select>
                   </div>
                  </div>
                </div>
              </div>

                 <button type="submit" class="btn btn-primary" align="left">Guardar</button>

            </form>
          </div>
           
        </div>
      </div>

<!-- PERFIL -->
      
<!--      Wizard container --------------------------------------------------------------------- -->
       <div class="col-md-12">
        <div class="card card-profile">
          <div class="card-body"> 
             <div class="row">
                    <div class="col-12 text-right">
                      <a href="#" class="btn btn-sm btn-rose" data-toggle="modal" data-target=".docs-example-modal-lg" onclick="tipo('nuevo')">{{ __('Agregar') }} </a>
                    </div>
                  </div>
             <div class="table-responsive">
                  <table id="datatables" class="table table-striped table-no-bordered table-hover">
                    <thead class="text-primary">
                      <th>
                          {{ __('Costo') }}
                      </th>
                      <th>
                        {{ __('Nombre') }}
                      </th>
                      <th>
                        {{ __('Clave') }}
                      </th>
                      <th>
                        {{ __('Descripcion') }}
                      </th>
                      <th>
                        {{ __('Medico') }}
                      </th>
                      <th>
                        {{ __('Fecha') }}
                      </th>
                      <th>
                        {{ __('Acciones') }}
                      </th>
                    </thead>
                    <tbody>
                      @foreach($data as $item)
                        <tr>
                          <td>
                            {{ $item->costo }}
                          </td>
                          <td>
                            {{ $item->nomb }}
                          </td>
                          <td>
                            {{ $item->clave }}
                          </td>
                          <td>
                            {{ $item->descripcion }}
                          </td>
                          <td>
                            {{ $item->doctores }}
                          </td>
                          <td>
                            {{ $item->created_at->format('Y-m-d') }}
                          </td>
                          <th>
                            <a href="{{route('addcajacitasdelete',$item->ident)}}" class="btn btn-sm btn-rose">{{ __('Eliminar') }} </a>
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
      
      @include("Catalogos.forms.caja.caja_citas")
      
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
 <script src="{{ asset('js') }}/newselect.js"></script>

@endpush

