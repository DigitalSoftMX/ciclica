@extends('layouts.app', ['activePage' => 'calendar', 'menuParent' => 'calendar', 'titlePage' => __('Calendar')]) @section('content')
<div class="">
  <div class="container">
    <div class="header text-center mb-0">
      <h3 class="title">Citas</h3>
    </div>
    <div class="row">
        <div class="col-12 text-left">
            <button class="btn btn-primary btn-round" data-toggle="modal" data-target=".myModal">
              Filtro
             <div class="ripple-container"></div>
            </button>
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
    <div class="row">
      <div class="col-md-12 ml-auto mr-auto">
        <div class="card card-calendar">
          <div class="card-body ">
            @csrf
            <div class="row principal-header p-3 form-row color-back-1 d-flex align-items-center">
                <h3 class="color-text-2 mx-4 mb-0"><i class="iconPlas-agenda-dia mr-2 mb-0"></i>Citas</h3>
                <label class=" col-auto p-0 mr-2" style="align-self: center;">Especialidad</label>
                <input class="col-auto form-control col-auto" name="id_especialidad" id="id_especialidad" type="text" placeholder="Especialidad" required="true" aria-required="true">
                <div class="col-auto form-row ml-2">
                    <label class="col-auto p-0 mr-2" style="align-self:center;">Medico</label>
                <input class="col-auto form-control col" style="background: white; height: 28px;" name="id_usuario" id="id_usuario" type="text" placeholder="Medico" required="true" aria-required="true">
                </div>
            </div>
            <div id="fullCalendar"></div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

 @include("pages.calendarmodals")

@endsection @push('js')
<script src="//cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.10.0/locale/es.js"></script>
<script src="{{ asset('select2/select2.full.min.js')}}"></script>
<script src="{{ asset('js') }}/citas.js"></script>
<script>
  function citas() {

    var token = $("#_token").val();
    var doctor = $("#id_usuario").val();
    var especialidad = $("#id_especialidad").val();
    var varistart = $("#fechstart").val();
    var variend = $("#fechend").val();
    var paciente = $("#numpac").val();
    var notas = $("#nota").val();
    var picture = $("#img").val();
    var checkup = $("#id_checkup").val();
    var checkup1722 = $("#id_checkup1722").val();

    $.ajax({
      type: "POST",
      dataType: "json",
      url: "https://ciclica.lealtaddigitalsoft.mx/public/citas/add",
      data: {
        _token: "{{ csrf_token() }}",
        start: varistart,
        end: variend,
        doc: doctor,
        esp: especialidad,
        pac: paciente,
        nota: notas,
        checkup: checkup,
        checkup1722: checkup1722
      },
      success: function(data) {
        var item = [];
        for (var i = 0, max = data.data.length; i < max; i++) {
          var result = data.data[i].message;
        }
        if (result == "Se agrego correctamente") {
          var eventData;
          event_title = $('#numpac').val();
          start = $('#fechstart').val();
          end = $('#fechend').val();
          nota = $('#nota').val();
          img = $('#picture').val();
          if (event_title) {
            eventData = {
              title: event_title,
              start: start,
              end: end
            };
            $calendar.fullCalendar('renderEvent', eventData, true);
            $calendar.fullCalendar('unselect');
          }
          Swal.fire({
            position: 'top-end',
            type: 'success',
            title: result,
            showConfirmButton: false,
            timer: 2500
          });
            

        } else {
          Swal.fire({
            position: 'top-end',
            type: 'error',
            title: result,
            showConfirmButton: false,
            timer: 2500
          });
        }

       $('.docs-example-modal-lg').modal('hide');

      }
    });

  }

  md.initFormExtendedDatetimepickers();
</script>
<script>

    function FFunction(){

  var url = 'calendarfilter';
  var name = $("#name").val();
  var appname = $("#app_name").val();
  var apmname = $("#apm_name").val();
  var username = $("#username").val();
  var parametros = { "name" : name,
                     "app_name" : appname,
                     "apm_name" : apmname,
                     "url" : url,
                     "username" : username};

    fields = {!! json_encode( array_keys($catalog->field_list) ) !!};
    url_add = 'calendarfilter/add/';
    url_delete = 'calendarfilter/destroy/';
    url_edit = 'calendarfilter/edit/';
    url_ver = 'calendarfilter/ver/';
    url_fac = 'calendarfilter/fac/';
    columns = [];
    $.each(fields,function(index,value){columns.push({'data':value});});
      

      $('#datatables').fadeIn(1100);
        $('#datatables').DataTable( {
            "processing": true,
            "responsive": true,
            "fnRowCallback": customFnRowCallback,
            "dom": 'Bfrtip',
            "destroy": true, 
            "ajax": {
               "url": 'calendarfilterjfilter',
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
                        
                       $('.myModal').modal('hide')
                        
                        return data
                     
                }
            }],
            "buttons": [
                {
                "extend": 'excel',
                "text": 'Excel <span class="material-icons">cloud_download</span>'
            }],
        });  
        
        function customFnRowCallback( nRow, aData, iDisplayIndex, iDisplayIndexFull )
        { 
            
        }
}
</script>
<script>
    $('.datetimepicker').datetimepicker({
    icons: {
        time: "fa fa-clock-o",
        date: "fa fa-calendar",
        up: "fa fa-chevron-up",
        down: "fa fa-chevron-down",
        previous: 'fa fa-chevron-left',
        next: 'fa fa-chevron-right',
        today: 'fa fa-screenshot',
        clear: 'fa fa-trash',
        close: 'fa fa-remove'
    }
});
</script>

@endpush