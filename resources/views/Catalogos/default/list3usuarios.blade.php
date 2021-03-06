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
                <!--<h4 class="card-title">{{$catalog->getName()}}</h4>-->
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
                "visible": false,
                "render": function(data, type, row){ 
                    
                            return data
               }
            },
            /*{
                "targets": [ 4 ],
                "visible": false
            }*/
            ],
        });

function customFnRowCallback( nRow, aData, iDisplayIndex, iDisplayIndexFull )
    { 
        if('{{$catalog->getUrlPrefix()}}' == "cat"){  

         if(aData['color'] != null ){ 
         $('td:eq(1)', nRow).html('<span class="badge badge-default" style="background-color:'+aData['color']+'">color</span>')
           }
            return nRow;
         }
         if('{{$catalog->getUrlPrefix()}}' == "agendarestudios"){  
         if(aData['ids'] != null ){ 
            $('td:eq(3)', nRow).html( '<a href="downloadimprimirestudios/'+aData['ids']+'"><span class="label label-primary">Descargar</span></a> ' )
         }
            return nRow;
          
           }
    }
  </script>

   <script src="{{ asset('select2/select2.full.min.js')}}"></script>
   <script src="{{ asset('js') }}/newselect.js"></script>
}
       
@endpush