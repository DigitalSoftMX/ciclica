@extends('layouts.app', ['activePage' => 'form_wizard', 'menuParent' => 'forms', 'titlePage' => __('Consulta')])

<link href="{{ asset('material') }}/css/flipclock.css" rel="stylesheet" />

@section('content')
 
<div class="content">
  <div class="container-fluid">
   <div class="row">

<!-- PERFIL -->
      
      <!-- AGENDAR -->
   
                   <div class="col-md-12 ml-auto mr-auto">
                      <div class="card card-calendar">
                        <div class="card-body ">
                          @csrf
                          <div id="fullCalendar"></div>
                        </div>
                      </div>
                    </div>

   <!-- AGENDAR --->
    </div>
  </div>
</div>
    <!--  FIN        -->
@endsection

<div class="modal fade docs-modalcitas-modal-lg" id="modalcitas" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h3 class="modal-title" id="exampleModalLongTitle">Agendar Citas de laboratorio</h3>
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
                      <label class="col-sm-2 col-form-label">Estudio</label>
                      <div class="col-sm-4">
                        <div class="form-group bmd-form-group">
                          <div class="dropdown bootstrap-select col-sm-12 pl-0 pr-0">
                          <select class="selectpicker col-sm-12 pl-0 pr-0" name="estudio" id="estudio" data-style="select-with-transition" title="" data-size="100" tabindex="-98">
                        <option value="1">General</option>
                        <option value="2">Andrologia</option>
                      </select>
                          </div>
                        </div>
                      </div>
                </div>
                <div class="row">
                <label class="col-sm-2 col-form-label">Anotaciones</label>
                <div class="col-sm-10">
                  <div class="form-group bmd-form-group is-filled">
                    <input class="form-control" name="id_anotaciones" id="id_anotaciones" type="text" placeholder="Anotaciones" style="width:80%"> 
                  </div>
                </div>
              </div>

              <div class="row">
                <label class="col-sm-2 col-form-label">Nota</label>
                <div class="col-sm-10">
                  <div class="form-group bmd-form-group is-filled">
                    <input class="form-control" name="nota" id="nota" type="text" placeholder="Nota"> 
                    <input name="numpac" id="numpac" type="hidden" value="{{ $cita }}">
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



@push('js')
  <script>
    $(document).ready(function() {
      // Initialise the wizard
      demo.initMaterialWizard();
      setTimeout(function() {
        $('.card.card-wizard').addClass('active');
      }, 600);
    });
  </script>

  <script>
    $(document).ready(function() {
      // initialise Datetimepicker and Sliders
      md.initFormExtendedDatetimepickers();
      if ($('.slider').length != 0) {
        md.initSliders();
      }
    });
  </script>
 
<script src="//cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.10.0/locale/es.js"></script>
<script src="{{ asset('select2/select2.full.min.js')}}"></script>
<script src="{{ asset('js') }}/newselect.js"></script>
<script src="{{ asset('js') }}/citaslaboratorios.js"></script>


<script>

 function citas(){

   var token =  $("#_token").val();
   var varistart =  $("#fechstart").val();
   var variend =  $("#fechend").val();
   var paciente = $("#numpac").val();
   var notas =  $("#nota").val();
   var picture =  $("#img").val();
   var estudio =  $("#estudio").val();
   var anotaciones =  $("#id_anotaciones").val();

      $.ajax({
        type: "POST",
        dataType: "json",
        url: "https://ciclica.lealtaddigitalsoft.mx/public/citaslaboratorio/add",
        data: {_token: "{{ csrf_token() }}", start: varistart, end: variend, pac: paciente, nota: notas, estudio: estudio, anotaciones: anotaciones},
        success: function (data) {
                    var item = [];
                    for (var i = 0, max = data.data.length; i < max; i++) {
                     var result = data.data[i].message;
                    }
                    
                    if(result == "Se agrego correctamente"){
                                var eventData;
                                event_title = $('#numpac').val();
                                start =   $('#fechstart').val();
                                end =     $('#fechend').val();
                                nota =    $('#nota').val();
                                img =     $('#picture').val();
                                estudio = $('#estudio').val();
                                if (event_title) {
                                  eventData = {
                                    title: event_title,
                                    start: start,
                                    end: end
                                };
                                //alert(eventData);
                             $calendar.fullCalendar('renderEvent', eventData, true);
                             $calendar.fullCalendar('unselect');
                          //window.location.reload();
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

                     $('#modalcitas').modal("toggle");
             }
        });
        
}
</script>

<script>
function confSubmit(form) {
            Swal({
                title: 'Deseas Guardar la informacion',
                text: " ",
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Si, Guardar!',
                cancelButtonText: 'Cerrar',
            }).then((result) => {
                if (result.value) {
                 clock.stop;
                 var tiempo = clock.getTime();
                 $("#perfils").val(tiempo);
                 var times = $("#perfils").val();
                 document.getElementById("myForm").submit();
                }
            })

        }
</script>

@endpush