@extends('layouts.appcheckup', ['activePage' => 'form_wizard', 'menuParent' => 'forms', 'titlePage' => __('Consulta')])

<link href="{{ asset('material') }}/css/flipclock.css" rel="stylesheet" />

@section('content')
 
<div class="content">
  <div class="container-fluid">
   <div class="row">

<!-- PERFIL -->
 <!-- @forelse ($info as $product)
      <div class="col-md-3">
        <div class="card card-profile">
          <div class="card-avatar">
                @if ($product->picture)
                    <img src="../storage/app/public/{{ $product->picture }}" />
                @else
                    <img src="{{ asset('material') }}/img/placeholder.jpg" alt="...">
                @endif
          </div>
   
            <div class="card-body">
                  <div class="row justify-content-center">
                     <div class="col-lg-9 mt-3">
                      <div class="input-group form-control-lg">
                        <label class="col-sm-12 col-form-label text-center">{{ $product->name }} {{ $product->app_name }} {{ $product->apm_name }}</label>   
                      </div>
                    </div>
                    <div class="col-lg-12 mt-3">
                      <div class="input-group form-control-lg">
                        <label class="col-sm-12 col-form-label text-center">26 años</label>   
                      </div>
                    </div>
                  </div>
                  <div class="card-footer">
                <div class="card-footer ml-auto mr-auto">
                     <div class="col-lg-12">
                      <div class="clock"></div>
                    </div>
                </div>
              <div class="clearfix"></div>
            </div>
   
          </div>
        </div>
      </div>
  @empty
      <div class="card-header card-header-primary text-center">
         <h4>No se encontraron Resultados</h4>
      </div>
  @endforelse
-->
<!-- PERFIL -->
      
      <!-- AGENDAR -->
   
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
                <label class="col-sm-2 col-form-label">Nota</label>
                <div class="col-sm-10">
                  <div class="form-group bmd-form-group is-filled">
                    <input class="form-control" name="nota" id="nota" type="text" placeholder="Nota"> 
                    <input name="numpac" id="numpac" value="{{ $paciente }}" type="hidden">  
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
<script src="{{ asset('js') }}/citasprocesoconsulta.js"></script>


<script>

 function citas(){

   var token =  $("#_token").val();
   var doctor =  $("#id_usuario").val();
   var especialidad =  $("#id_especialidad").val();
   var varistart =  $("#fechstart").val();
   var variend =  $("#fechend").val();
   var paciente =  $("#numpac").val();
   var notas =  $("#nota").val();
   var picture =  $("#img").val();

      $.ajax({
        type: "POST",
        dataType: "json",
        url: "../public/citas/add",
        data: {_token: "{{ csrf_token() }}", start: varistart, end: variend, doc: doctor, esp: especialidad, pac: paciente, nota: notas},
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
                                if (event_title) {
                                  eventData = {
                                    title: event_title,
                                    start: start,
                                    end: end
                                };
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

