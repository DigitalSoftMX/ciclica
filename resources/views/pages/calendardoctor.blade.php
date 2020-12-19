@extends('layouts.appdoctores', ['activePage' => 'calendar', 'menuParent' => 'calendar', 'titlePage' => __('Calendar')])

@section('content')
<div class="content mt-2">
  <div class="container-fluid">
    <div class="header text-center m-0">
      
    </div>
    <div class="row">
      <div class="col-md-12 ml-auto mr-auto">
        <div class="card card-calendar m-0">
          <div class="card-body ">
            @csrf
              <div class="row color-back-1 d-flex align-items-center p-3 radius-top">
                  <h3 class="color-text-2 mx-4 mb-0"><i class="iconPlas-agenda-dia mr-2"></i>Citas</h3>
                <label class="col-auto color-text-2 m-0">Especialidad</label>
                <input class="col-auto form-control" name="id_especialidad" id="id_especialidad" type="text" placeholder="Especialidad" required="true" aria-required="true">
                <label class="col-auto color-text-2 m-0">Medico</label>
               <input class="col-auto form-control" name="id_usuario" id="id_usuario" type="text" placeholder="Medico" required="true" aria-required="true">
              </div> 
            <div id="fullCalendar"></div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="modal fade docs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h3 class="modal-title" id="exampleModalLongTitle">Agendar Citas</h3>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close" style="color: red">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="card">
          <div class="card-body">
            <div class="tab-content">
              <div class="tab-pane active">
                <div class="card-body ">
                  <div class="row">
                    <label class="col-sm-2 col-form-label">Numero de Paciente</label>
                    <div class="col-sm-10">
                      <div class="form-group bmd-form-group is-filled">
                        <input class="form-control" name="numpac" id="numpac" type="text" placeholder="Numeo de Paciente" required="true" aria-required="true">
                      </div>
                    </div>
                
                    <label class="col-sm-2 col-form-label">Nota</label>
                    <div class="col-sm-10">
                      <div class="form-group bmd-form-group is-filled">
                        <input class="form-control" name="nota" id="nota" type="text" placeholder="Nota">
                        <input name="fechstart" id="fechstart" type="hidden">
                        <input name="fechend" id="fechend" type="hidden">
                        <input name="img" id="img" type="hidden">
                      </div>
                    </div>
                    
                    <label class="col-sm-2 col-form-label" id="cat">Checkup</label>
                    <div class="col-sm-10" id="cat">
                      <div class="form-group bmd-form-group is-filled">
                      <input class="form-control" style="background: white; width: 100%;" name="id_checkup" id="id_checkup" type="text" >
                      </div>
                   
                      <div class="form-group bmd-form-group is-filled">
                      <input class="form-control" name="id_checkup1722" id="id_checkup1722" type="text">
                      </div>
                    </div>
                    
                  </div>

                </div>
              </div>
            </div>
          </div>
        </div>
        <button type="button" class="btn btn-primary" align="left" onclick=citas()>Aceptar</button>
      </div>
    </div>
    <div class="card-footer ml-auto">
    </div>
  </div>
</div>

@endsection


@push('js')
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

        $('.modal').modal("toggle");
      }
    });

  }

   md.initFormExtendedDatetimepickers();
   
   </script>


@endpush