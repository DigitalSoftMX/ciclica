@extends('layouts.app', ['activePage' => 'category-management', 'menuParent' => 'laravel', 'titlePage' => ' '])

@section('content')
  <div class="content">
    <div class="container-fluid">
     
    <!-- CANJES-->
    @if($catalog->getUrlPrefix() == "citascheckup" || $catalog->getUrlPrefix() == "citascheckupfinalizado")
        <div class="row">
          <div class="col-sm-4">
              <div class="card">
                   @if($catalog->getUrlPrefix() == "citascheckup")
                    <ul class="nav nav-pills nav-pills-warning nav-pills-icons justify-content-center" role="tablist" style="background:#FFD003">
                    <li class="nav-item">
                    <a class="nav-link" href="{{ url('citascheckup') }}" >
                    @else
                    <ul class="nav nav-pills nav-pills-warning nav-pills-icons justify-content-center" role="tablist">
                    <li class="nav-item">
                    <a class="nav-link" href="{{ url('citascheckup') }}" >
                    @endif
                    <i class="material-icons">folder_open</i> Pendientes
                    </a>
                  </li>
                </ul>
              </div>
            </div>
            <div class="col-sm-4">
              <div class="card">
                   @if($catalog->getUrlPrefix() == "citascheckupfinalizado")
                      <ul class="nav nav-pills nav-pills-warning nav-pills-icons justify-content-center" role="tablist" style="background:#FFD003">
                      <li class="nav-item">
                      <a class="nav-link" href="{{ url('citascheckupfinalizado') }}">
                    @else
                      <ul class="nav nav-pills nav-pills-warning nav-pills-icons justify-content-center" role="tablist">
                      <li class="nav-item">
                      <a class="nav-link" href="{{ url('citascheckupfinalizado') }}">
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
                @if($catalog->getUrlPrefix() == "citascheckup" || $catalog->getUrlPrefix() == "citascheckupfinalizado")
                            <div class="row">
                              <div class="col-12 text-left">
                                     <button class="btn btn-sm btn-rose" data-toggle="modal" data-target="#myModal">
                                      Filtro
                                     <div class="ripple-container"></div>
                                     </button>
                              </div>
                            </div>
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

@include("Catalogos.forms.checkup.sibirarchi")


@push('js')
  <script>

   fields = {!! json_encode( array_keys($catalog->field_list) ) !!};
    url_add = '{{$catalog->getUrlPrefix()}}/add/';
    url_delete = '{{$catalog->getUrlPrefix()}}/destroy/';
    url_edit = 'consultarprocesoconsultalaboratorio24/';
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
                "render": function(data, type, row){ 
                         return '<a rel="tooltip" href="#" class="btn btn-success btn-link" data-toggle="modal" data-target=".docs-exampleenferm-modal-lg" onclick="tipo('+data+')"><i class="material-icons">edit</i></a>' 
                   
                }
            }],
        });  
        
        
       function customFnRowCallback( nRow, aData, iDisplayIndex, iDisplayIndexFull )
        { 
            if('{{$catalog->getUrlPrefix()}}' == "citascheckup" || '{{$catalog->getUrlPrefix()}}' == "laboratoriofinalizados"){  
                if(aData['archivo'] == null){
                    $('td:eq(3)', nRow).html( 'Pendiente' );
                }else{
                    $('td:eq(3)', nRow).html( '<a href="citascheckupdownload/'+aData['archivo']+'"><span class="label label-primary">Descargar</span></a>');
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
                    
                         return '<a rel="tooltip" href="#" class="btn btn-success btn-link" data-toggle="modal" data-target=".docs-exampleenferm-modal-lg" onclick="tipo('+data+')"><i class="material-icons">edit</i></a>' 
                     
                }
            }]
        });  
        function customFnRowCallback( nRow, aData, iDisplayIndex, iDisplayIndexFull )
        { 
            if('{{$catalog->getUrlPrefix()}}' == "citascheckup" || '{{$catalog->getUrlPrefix()}}' == "laboratoriofinalizados"){  
                if(aData['archivo'] == null){
                    $('td:eq(3)', nRow).html( 'Pendiente' );
                }else{
                    $('td:eq(3)', nRow).html( '<a href="citascheckupdownload/'+aData['archivo']+'"><span class="label label-primary">Descargar</span></a>');
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


