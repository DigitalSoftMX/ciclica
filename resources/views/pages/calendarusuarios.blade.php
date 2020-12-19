@extends('layouts.app', ['activePage' => 'calendar', 'menuParent' => 'calendar', 'titlePage' => __('Calendar')])

@section('content')
<div class="content">
  <div class="container-fluid">
    <div class="header text-center">
      <h3 class="title">Citas</h3>
    </div>
    <div class="row">
      <div class="col-md-12 ml-auto mr-auto">
        <div class="card card-calendar">
          <div class="card-body ">
            @csrf
              <div class="row">
                <label class="col-sm-2 col-form-label">Especialidad</label>
                <div class="col-sm-3">
                  <div class="form-group bmd-form-group is-filled">
                    <input class="form-control" name="id_especialidad" id="id_especialidad" type="text" placeholder="Especialidad" required="true" aria-required="true">
                  </div>
                </div>
                <label class="col-sm-2 col-form-label">Medico</label>
                <div class="col-sm-4">
                  <div class="form-group bmd-form-group is-filled">
                    <input class="form-control" name="id_usuario" id="id_usuario" type="text" placeholder="Medico" required="true" aria-required="true">
                  </div>
                </div>
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
                <label class="col-sm-2 col-form-label">Agregar algun comentario</label>
                <div class="col-sm-10">
                  <div class="form-group bmd-form-group is-filled">
                    <input class="form-control" name="nota" id="nota" type="text" placeholder="Nota"> 
                    <input name="fechstart" id="fechstart" type="hidden">  
                    <input name="fechend" id="fechend" type="hidden">  
                    <input name="img" id="img" type="hidden">  
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
 function citas(){

   var token =  $("#_token").val();
   var doctor =  $("#id_usuario").val();
   var especialidad =  $("#id_especialidad").val();
   var varistart =  $("#fechstart").val();
   var variend =  $("#fechend").val();
   var notas =  $("#nota").val();
   var picture =  $("#img").val();

      $.ajax({
        type: "POST",
        dataType: "json",
        url: "../public/citas/add",
        data: {_token: "{{ csrf_token() }}", start: varistart, end: variend, doc: doctor, esp: especialidad, nota: notas},
        success: function (data) {
                    var item = [];
                    for (var i = 0, max = data.data.length; i < max; i++) {
                     var result = data.data[i].message;
                    }
                    if(result == "Se agrego correctamente"){
                            var eventData;
                                event_title = $('#numpac').val();
                                start =  $('#fechstart').val();
                                end =     $('#fechend').val();
                                nota =     $('#nota').val();
                                img =     $('#picture').val();
                                if (start) {
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
                    }
                    else{
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