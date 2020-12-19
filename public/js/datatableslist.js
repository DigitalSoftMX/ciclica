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
return @permission("$mod") '<a href="'+url_edit+data+'" class="btn btn-warning btn-xs"><i class="glyphicon glyphicon-edit"></i></a>' + @endpermission 
@permission("$eli") '<a href="'+url_delete+data+'" class="btn btn-danger btn-xs"><i class="glyphicon glyphicon-trash"></i></a>' + @endpermission 
@permission("$ver") '<a href="'+url_ver+data+'" class="btn btn-success btn-xs"><i class="glyphicon glyphicon-th-large"></i></a>' @endpermission
     }
                          else{            
                            return data
                          }
                          
                                
               }
            }]
        });
    });