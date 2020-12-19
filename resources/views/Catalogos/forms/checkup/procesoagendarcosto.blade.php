@extends('layouts.appdoctores', ['activePage' => 'form_wizard', 'menuParent' => 'forms', 'titlePage' => __('Consulta')])

@section('content')
  <div class="content">
    <div class="container-fluid">
      <div class="row">
          
          <!-- PERFIL -->
  @forelse ($info as $product)
      <div class="col-md-12">
        <div class="card card-profile">
   
            <div class="card-body">
                  <div class="row justify-content-center">
                     <div class="col-lg-9 mt-3">
                      <div class="input-group form-control-lg">
                        <label class="col-sm-12 col-form-label text-center">{{ $product->name }} {{ $product->app_name }} {{ $product->apm_name }}</label>   
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

<!-- PERFIL -->


        <div class="col-md-12">
            <div class="card">
              <div class="card-header card-header-rose card-header-icon">
                <div class="card-icon">
                  <i class="material-icons">category</i>
                </div>
                <h4 class="card-title">Agregar costo a la cita</h4>
              </div>
              <div class="card-body">
                 <div class="row">
                    <div class="col-12 text-right">
                      <a href="#" class="btn btn-sm btn-rose" data-toggle="modal" data-target=".docs-example-modal-lg">{{ __('Agregar') }} </a>
                    </div>

                  </div>
                <div class="table-responsive">
                  
                  <table id="datatables" class="table table-striped table-no-bordered table-hover datatable-rose" style="display:none">
                     <thead class="text-primary">
                        <tr>
                            @foreach ($catalog->field_list as $field)
                            <th>{{$field}}</th>
                            @endforeach
                        </tr>
                        </thead>
                        <tbody>
                        @foreach ($catalog->field_list as $field)
                        <tr>
                            @foreach ($catalog->field_list as $field)
                            <th>{{$field}}</th>
                            @endforeach
                        </tr>
                        @endforeach
                        </tbody>
                    </table>


                 </div>
              </div>
            </div>
        </div>
      </div>
    </div>
  </div>

@endsection

 @include("Catalogos.forms.caja.caja_citas")


@push('js')
  <script>

   fields = {!! json_encode( array_keys($catalog->field_list) ) !!};
    url_add = '{{$catalog->getUrlPrefix()}}/add/';
    url_delete = 'https://ciclica.lealtaddigitalsoft.mx/public/agendarcaja/destroy/';
    url_edit = '{{$catalog->getUrlPrefix()}}/edit/';
    url_ver = '{{$catalog->getUrlPrefix()}}/ver/';
    columns = [];
    $.each(fields,function(index,value){columns.push({'data':value});});
      
      var ident = {{ $id }}; 
      var parametros = { "nombre" : "Add Caja",
                         "agenda" : ident };

      $('#datatables').fadeIn(1100);
        $('#datatables').DataTable( {
            "processing": true,
            "ajax": {
               "url": 'https://ciclica.lealtaddigitalsoft.mx/public/agendarcajajlistt',
               "type": 'POST',
               "data": parametros,
             },
            "fnRowCallback": customFnRowCallback,
            "columns": columns,
            "lengthMenu": [
             [10, 25, 50, -1],
             [10, 25, 50, "All"]
            ],
            "oLanguage": {
                "sLengthMenu": "Mostrar _MENU_ registros",
                "sZeroRecords": "No se mostraron resultados",
                "sInfo": "Pagina _PAGE_ de _PAGES_",
                "sInfoEmpty":      "Mostrando registros del 0 al 0 de un total de 0 registros",
                "sInfoFiltered":   "(filtrado de un total de _MAX_ registros)",
                "sSearch":         "Buscar:",
                "sLoadingRecords": "Cargando...",
                "sProcessing":     "Procesando...",
                "oPaginate": {
                    "sFirst":    "Primero",
                    "sLast":     "Ultimo",
                    "sNext":     "Siguiente",
                    "sPrevious": "Anterior"
                }
            },
            "columnDefs": [{
                "targets": -1,
                "render": function(data, type, row){ 
                    
                      
return '<a rel="tooltip" href="'+url_delete+data+'" class="btn btn-danger btn-link" data-original-title="" title="" ><i class="material-icons">close</i></a>'
                       
                            
               }
            }],
        });

function customFnRowCallback( nRow, aData, iDisplayIndex, iDisplayIndexFull )
    { 
        
    }
  </script>

   <script src="{{ asset('select2/select2.full.min.js')}}"></script>
   <script src="{{ asset('js') }}/newselect.js"></script>
}
       
@endpush