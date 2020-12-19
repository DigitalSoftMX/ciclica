@extends('layouts.app', ['activePage' => 'category-management', 'menuParent' => 'laravel', 'titlePage' => __('Category Management')])

@section('content')
  <div class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12">
            <div class="card">
              <div class="card-header card-header-rose card-header-icon">
                <div class="card-icon">
                  <i class="material-icons">category</i>
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

 @include("Catalogos.forms." . "" . $catalog->getUrlPrefix())

@endsection

@push('js')
<script>
    $(document).ready(function() {
    fields = {!! json_encode( array_keys($catalog->field_list) ) !!};
    url_add = '{{$catalog->getUrlPrefix()}}/add/';
    url_delete = '{{$catalog->getUrlPrefix()}}/destroy/';
    url_edit = '{{$catalog->getUrlPrefix()}}/edit/';
    url_ver = '{{$catalog->getUrlPrefix()}}/ver/';
    columns = [];
    $.each(fields,function(index,value){columns.push({'data':value});});
      
    var table =
        $('#datatables').fadeIn(1100);
        $('#datatables').DataTable( {
            "processing": true,
            "responsive": true,
            "fnRowCallback": customFnRowCallback,
            "ajax": "{{$catalog->getUrlPrefix()}}jlist",
            "columns": columns,
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
                "visible": false,
                "render": function(data, type, row){ 
                    
                        if('{{$show}}' == ""){  
return @permission("$mod") '<a rel="tooltip" href="'+url_edit+data+'" class="btn btn-success btn-link" data-original-title="" title=""><i class="material-icons">edit</i></a>' + @endpermission 
@permission("$eli") '<a rel="tooltip" href="'+url_delete+data+'" class="btn btn-danger btn-link" data-original-title="" title=""><i class="material-icons">close</i></a>' + @endpermission 
@permission("$ver") '<a href="'+url_ver+data+'" class="btn btn-success btn-xs"><i class="glyphicon glyphicon-th-large"></i></a>' @endpermission
     }
                          else{            
                            return data
                          }
                          
                                
               }
            }]
        });
    });

    function customFnRowCallback( nRow, aData, iDisplayIndex, iDisplayIndexFull )
    { 
        if('{{$catalog->getUrlPrefix()}}' == "seguimiento"){  
         if(aData['archivo'] != null ){ 
            $('td:eq(6)', nRow).html( '<a href="download/'+aData['archivo']+'"><span class="label label-primary">Descargar</span></a> ' )
         }
            return nRow;
          
           }
        
        if('{{$catalog->getUrlPrefix()}}' == "recetas"){  
         if(aData['ids'] != null ){ 
            $('td:eq(3)', nRow).html( '<a href="downloadimprimirreceta/'+aData['ids']+'"><span class="label label-primary">Descargar</span></a> ' )
         }
            return nRow;
          
           }
           
            if('{{$catalog->getUrlPrefix()}}' == "caja"){  
         if(aData['ids'] != null ){ 
            $('td:eq(3)', nRow).html( '<a href="downloadimprimirnota/'+aData['ids']+'"><span class="label label-primary">Descargar</span></a> ' )
         }
            return nRow;
          
           }
    }
</script>
@endpush
