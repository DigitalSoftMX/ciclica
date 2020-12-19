@extends('layouts.app', ['activePage' => 'category-management', 'menuParent' => 'laravel', 'titlePage' => __('Category Management')])

@section('content')
  <div class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12">
            <div class="card">
              <div class="card-header card-header-rose card-header-icon">
                <div class="card-icon">
                  <i class="iconPlas-paciente" style="font-size:30px;"></i>
                </div>
                <h4 class="card-title">{{$catalog->getName()}}</h4>
              </div>
              <div class="card-body">
               @permission("$ins")
                 <div class="row">
                    <div class="col-12 text-right">
                      <a href="#" class="btn btn-sm btn-rose" data-toggle="modal" data-target=".docs-example-modal-lg" onclick="tipo('nuevo')">{{ __('Nuevo') }} </a>
                    </div>

                  </div>
              @endpermission
                <div class="table-responsive">
                  
                  <table id="datatables" class="table table-striped table-no-bordered table-hover datatable-rose" style="display:none">
                     <thead class="text-primary">
                        <tr>
                            @foreach ($catalog->field_list as $field)
                            <th class="color-text-1">{{$field}}</th>
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

 @include("Catalogos.forms." . "" . $catalog->getUrlPrefix())

@endsection

@push('js')
  <script>

   fields = {!! json_encode( array_keys($catalog->field_list) ) !!};
    url_add = '{{$catalog->getUrlPrefix()}}/add/';
    url_delete = '{{$catalog->getUrlPrefix()}}/destroy/';
    url_edit = '{{$catalog->getUrlPrefix()}}/edit/';
    url_ver = '{{$catalog->getUrlPrefix()}}/ver/';
    columns = [];
    $.each(fields,function(index,value){columns.push({'data':value});});
      

      $('#datatables').fadeIn(1100);
        $('#datatables').DataTable( {
            "processing": true,
            "ajax": "{{$catalog->getUrlPrefix()}}jlist",
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
                    
                          if('{{$show}}' == ""){  
return @permission("$mod") '<a rel="tooltip" href="#" class="btn btn-success btn-link" data-toggle="modal" data-target=".docs-example-modal-lg" onclick="tipo('+data+')"><i class="material-icons">edit</i></a>' @endpermission 
@permission("$eli") + '<a rel="tooltip" href="'+url_delete+data+'" class="btn btn-danger btn-link" data-original-title="" title="" ><i class="material-icons">close</i></a>' @endpermission 
@permission("$ver") + '<a href="'+url_ver+data+'" class="btn btn-success btn-xs"><i class="glyphicon glyphicon-th-large"></i></a>' @endpermission
}
                         else if('{{$show}}' == "Historial"){  
return @permission("$mod") '<a href="'+url_ver+data+'" class="btn btn-success btn-xs"><i class="glyphicon glyphicon-th-large"></i></a>' @endpermission
}  
                          else{            
                            return data
                          }    
               }
            }],
        });

function customFnRowCallback( nRow, aData, iDisplayIndex, iDisplayIndexFull )
    { 
        if('{{$catalog->getUrlPrefix()}}' == "cat"){  

         if(aData['color'] != null ){ 
         $('td:eq(1)', nRow).html('<span class="badge badge-default" style="background-color:'+aData['color']+'">color</span>')
           }
            return nRow;
         }
    }
  </script>

   <script src="{{ asset('select2/select2.full.min.js')}}"></script>
   <script src="{{ asset('js') }}/newselect.js"></script>
}
       
@endpush
