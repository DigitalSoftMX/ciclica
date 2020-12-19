@extends('layouts.app', ['activePage' => 'category-management', 'menuParent' => 'laravel', 'titlePage' => ' '])

@section('content')
  <div class="content">
    <div class="container-fluid">
     
    <!-- CANJES-->
    @if($catalog->getUrlPrefix() == "imagenologia" || $catalog->getUrlPrefix() == "imagenologiafinalizado")
        <div class="row">
          <div class="col-sm-4">
              <div class="card">
                   @if($catalog->getUrlPrefix() == "imagenologia")
                    <ul class="nav nav-pills nav-pills-warning nav-pills-icons justify-content-center" role="tablist" style="background:#FFD003">
                    <li class="nav-item">
                    <a class="nav-link" href="{{ url('imagenologia') }}" >
                    @else
                    <ul class="nav nav-pills nav-pills-warning nav-pills-icons justify-content-center" role="tablist">
                    <li class="nav-item">
                    <a class="nav-link" href="{{ url('imagenologia') }}" >
                    @endif
                    <i class="material-icons">folder_open</i> Pendientes
                    </a>
                  </li>
                </ul>
              </div>
            </div>
            <div class="col-sm-4">
              <div class="card">
                   @if($catalog->getUrlPrefix() == "imagenologiafinalizado")
                      <ul class="nav nav-pills nav-pills-warning nav-pills-icons justify-content-center" role="tablist" style="background:#FFD003">
                      <li class="nav-item">
                      <a class="nav-link" href="{{ url('imagenologiafinalizado') }}">
                    @else
                      <ul class="nav nav-pills nav-pills-warning nav-pills-icons justify-content-center" role="tablist">
                      <li class="nav-item">
                      <a class="nav-link" href="{{ url('imagenologiafinalizado') }}">
                    @endif
                    <i class="material-icons">how_to_reg</i> Finalizados
                    </a>
                  </li>
                </ul>
              </div>
            </div>
        </div>    
    </br>
    @endif
      <div class="row">
        <div class="col-md-12">
            <div class="card">
              <div class="card-body">
          <div class='notifications top-right'></div>
            <!--
                @if($catalog->getUrlPrefix() == "imagenologia" || $catalog->getUrlPrefix() == "imagenologiafinalizado")
                            @role('Laboratorio')
                            <div class="row">
                              <div class="col-12 text-left">
                                     <button class="btn btn-sm btn-rose" data-toggle="modal" data-target="#myModal">
                                      Filtro
                                     <div class="ripple-container"></div>
                                     </button>
                              </div>
                            </div>
                            @endrole
                        @endif
            -->            
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

@include("Catalogos.forms.usuarios.imagenologialist")


@push('js')
  <script>

   fields = {!! json_encode( array_keys($catalog->field_list) ) !!};
    url_add = '{{$catalog->getUrlPrefix()}}/add/';
    url_delete = '{{$catalog->getUrlPrefix()}}/destroy/';
    url_edit = 'consultarprocesoconsultaimagenologia34/';
    url_ver = '{{$catalog->getUrlPrefix()}}/ver/';

    columns = [];
    $.each(fields,function(index,value){columns.push({'data':value});});
      

      $('#datatables').fadeIn(1100);
        $('#datatables').DataTable( {
            "processing": true,
            "responsive": true,
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
            }],
        });  
        
        
        function customFnRowCallback( nRow, aData, iDisplayIndex, iDisplayIndexFull )
        { 
            if('{{$catalog->getUrlPrefix()}}' == "laboratorio" || '{{$catalog->getUrlPrefix()}}' == "laboratoriofinalizados"){  
                if(aData['estado'] == 1){
                    $('td:eq(4)', nRow).html( 'Pendiente' );
                }else{
                    $('td:eq(4)', nRow).html( 'Finalizado' );
                }
                return nRow;
            }
            if('{{$catalog->getUrlPrefix()}}' == "imagenologia" || '{{$catalog->getUrlPrefix()}}' == "imagenologiafinalizados"){  
                if(aData['estado'] == 1){
                    $('td:eq(4)', nRow).html( 'Pendiente' );
                }else{
                    $('td:eq(4)', nRow).html( 'Finalizado' );
                }
                return nRow;
            }
            
        }
        
  </script>


<script>
  
    function FFunction(){

  var values1 = $("#min").val();
  var values2 = $("#max").val();
  var url = '{{$catalog->getUrlPrefix()}}';
  var folio = $("#id_paciente").val();
  var parametros = { "min" : values1,
                     "max" : values2,
                     "url" : url,
                     "folio" : folio};

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
            "responsive": true,
            "fnRowCallback": customFnRowCallback,
            "destroy": true, 
            "ajax": {
               "url": '{{$catalog->getUrlPrefix()}}jfilter',
               "type": 'POST',
               "data": parametros,
             },
            "deferRender": true,
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
                        
                          $("#min").val('');
                          $("#max").val('');
                          $("#folio").val('');
                          $('#myModal').modal('hide');
                          
                     
                        @permission("$mod")
                            return '<a href="'+url_edit+data+'"><span class="material-icons">edit</span></a>'       
                        @endpermission
                        @permission("$eli")
                            + '<a href="#" onClick="warnBeforeRedirect('+data+');" ><span class="material-icons">delete</span></a>'    
                        @endpermission
                        @permission("$ver")
                            + '<a href="'+url_ver+data+'"><span class="material-icons">remove_red_eye</span></a>'    
                        @endpermission
                        
                    }else{            
                        return data
                    }    
                }
            }]
        });  
        function customFnRowCallback( nRow, aData, iDisplayIndex, iDisplayIndexFull )
        { 
            if('{{$catalog->getUrlPrefix()}}' == "imagenologia" || '{{$catalog->getUrlPrefix()}}' == "imagenologiafinalizados"){  
                if(aData['estado'] == 1){
                    $('td:eq(4)', nRow).html( 'Pendiente' );
                }else{
                    $('td:eq(4)', nRow).html( 'Finalizado' );
                }
                return nRow;
            }
        }
}
  </script>
    <script>
  function warnBeforeRedirect(data) {

      var url_delete = '{{$catalog->getUrlPrefix()}}/destroy/';
      var linkURL = url_delete+data;
      //console.log(linkURL)

            Swal({
                title: 'Estas seguro?',
                text: "De eliminarlo!",
                type: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Si, Eliminar!',
                cancelButtonText: 'Cerrar',
            }).then((result) => {
                if (result.value) {
                    window.location.href = linkURL;
                }
            })

        }
  </script>

   <script src="{{ asset('select2/select2.full.min.js')}}"></script>
   <script src="{{ asset('js') }}/newselect.js"></script>

@endpush


