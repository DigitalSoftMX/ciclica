@extends('layouts.app', ['activePage' => 'form_wizard', 'menuParent' => 'forms', 'titlePage' => __('Consulta')])

@section('content')
<div class="content">
  <div class="container-fluid">
    <div class="col-md-8 col-12 mr-auto ml-auto">
      <!--      Wizard container        -->
      <div class="wizard-container">
        <div class="card card-wizard" data-color="rose" id="wizardProfile">
            <form method="post" action="{{url('procesoconsultas/add') }}" autocomplete="off" class="form-horizontal">
          @csrf
          @method('post')
            <!--        You can switch " data-color="primary" "  with one of the next bright colors: "green", "orange", "red", "blue"       -->
            <div class="card-header text-center">
              <h3 class="card-title">
                Consulta
              </h3>
              <div id="screen"><h3>00 : 00 </h3></div>
              <input name="cronometro" id="cronometro" type="hidden" >
            </div>
              
            <div class="wizard-navigation">
              <ul class="nav nav-pills">
                <li class="nav-item">
                  <a class="nav-link active" href="#consu" data-toggle="tab" role="tab">
                    Consulta
                  </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#perfil" data-toggle="tab" role="tab">
                    Perfil
                  </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#ht_clinico" data-toggle="tab" role="tab">
                    Historial Clinica
                  </a>
                </li>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#ht_medico" data-toggle="tab" role="tab">
                   Historial Medico
                  </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#estudios" data-toggle="tab" role="tab">
                   Estudios
                  </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#agendar" data-toggle="tab" role="tab">
                   Agendar
                  </a>
                </li>
                </li>
                </ul>
            </div>
            <div class="card-body">
              <div class="tab-content">
                @forelse ($citas as $lista)
                <input name="cita" id="cita" type="hidden" value="{{ $lista->id }}">
                <input name="id_paciente" id="paciente" type="hidden" value="{{ $lista->id_paciente }}">
                <input name="id_doctor" id="dcctor" type="hidden" value="{{ $lista->id_doctor }}">
                <div class="tab-pane active" id="consu">
                  <div class="row" >
                  <div class="col-md-5 mr-auto ml-auto">
                    <div class="card ">
                      <div class="card-header card-header-rose card-header-text">
                        <div class="card-icon">
                          <i class="material-icons">today</i>
                        </div>
                        <h4 class="card-title">Fecha Padecimiento</h4>
                      </div>
                      <div class="card-body ">
                        <div class="form-group">
                          <input type="text" class="form-control datepicker" value="" name="fechaP">
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-5 mr-auto ml-auto">
                    <div class="card ">
                      <div class="card-header card-header-rose card-header-text">
                        <div class="card-icon">
                          <i class="material-icons">today</i>
                        </div>
                        <h4 class="card-title">Fecha Consulta</h4>
                      </div>
                      <div class="card-body ">
                        <div class="form-group">
                          <input type="text" class="form-control " value="{{ $lista->start }}" name="fechaC">
                        </div>
                      </div>
                    </div>
                  </div>
                  </div>
                  <div class="row">
                    <label class="col-sm-2 col-form-label">{{ __('Padecimiento actual') }}</label>
                    <div class="col-sm-7">
                      <div class="form-group{{ $errors->has('description') ? ' has-danger' : '' }}">
                        <textarea  rows="4" class="form-control{{ $errors->has('descripcionP') ? ' is-invalid' : '' }}" name="descripcionP" id="input-description" type="text"   aria-required="true">{{ old('Padecimiento actual') }}</textarea>
                        @include('alerts.feedback', ['field' => 'description'])
                      </div>
                    </div>
                  </div>
                  <div class="row justify-content-center">
                    <!--<label class="col-sm-2 col-form-label">Nombre</label>-->

                    <div class="col-md-1 mr-auto ml-auto">
                      <label for="exampleTalla" class="bmd-label-floating">Talla</label>
                      <input class="form-control" name="talla" id="talla" type="text" placeholder="" value=""  aria-required="true">
                    </div>
                    <div class="col-md-1 mr-auto ml-auto">
                    <label for="examplePeso" class="bmd-label-floating">Peso</label>
                    <input class="form-control" name="peso" id="peso" type="text" placeholder="" value=""  aria-required="true">
                  </div>
                    <div class="col-md-1 mr-auto ml-auto">
                      <label for="exampleTemp" class="bmd-label-floating">Temp(°C)</label>
                      <input class="form-control" name="temp" id="temp" type="text" placeholder="" value=""  aria-required="true">
                    </div>
                    <div class="col-md-1 mr-auto ml-auto">
                      <label for="exampleTalla" class="bmd-label-floating">T.A</label>
                      <input class="form-control" name="ta" id="ta" type="text" placeholder="" value=""  aria-required="true">
                    </div>
                    <div class="col-md-1 mr-auto ml-auto">
                      <label for="exampleTalla" class="bmd-label-floating">F.C</label>
                      <input class="form-control" name="fc" id="fc" type="text" placeholder="" value=""  aria-required="true">
                    </div>
                    <div class="col-md-1 mr-auto ml-auto">
                      <label for="exampleTalla" class="bmd-label-floating">F.R</label>
                      <input class="form-control" name="fr" id="fr" type="text" placeholder="" value=""  aria-required="true">
                    </div>
                  </div>
                  <div class="row ">
                    <label class="col-sm-2 col-form-label"><small>Exporacion Fisica:</small></label>
                    <div class="col-sm-7">
                      <div class="form-group{{ $errors->has('description') ? ' has-danger' : '' }}">
                        <textarea  rows="4" class="form-control{{ $errors->has('description') ? ' is-invalid' : '' }}" name="expo_me" id="input-description" type="text" placeholder=""  aria-required="true">{{ old('Exporacion Fisica:') }}</textarea>
                        @include('alerts.feedback', ['field' => 'description'])
                      </div>
                    </div>
                  </div>
                    <div class="row ">
                        <label class="col-sm-2 col-form-label"><small>Tratamiento:</small></label>
                        <div class="col-sm-7">
                            <div class="form-group{{ $errors->has('description') ? ' has-danger' : '' }}">
                                <textarea  rows="4" class="form-control{{ $errors->has('description') ? ' is-invalid' : '' }}" name="indica" id="input-description" type="text" placeholder=""  aria-required="true">{{ old('Exporacion Fisica:') }}</textarea>
                                @include('alerts.feedback', ['field' => 'description'])
                            </div>
                        </div>
                    </div>
                      <div class="row">
                        <div class="col-md-6 mr-auto ml-auto">
                         <a class="btn btn-rose btn-round" href="{{ url("calendarprocesoconsulta/$ids") }}" style="width: 200px; height: 40px;">
                               Agendar Estudios
                               </a>
                        </div>
                       <div class="col-md-4 mr-auto ml-auto">
                         <a class="btn btn-rose btn-round" href="{{ url("calendarprocesoconsulta/$ids") }}" style="width: 200px; height: 40px;">
                               Recetas
                               </a>
                    </div>
                  </div>
                    <div class="card-footer">
              <!--<div class="mr-auto">
                <input type="button" class="btn btn-previous btn-fill btn-default btn-wd disabled" name="previous" value="Atras">
              </div>
              <div class="ml-auto">
                <input type="button" class="btn btn-next btn-fill btn-rose btn-wd" name="next" value="Siguiente">
                <input type="button" class="btn btn-finish btn-fill btn-rose btn-wd" name="finish" value="Finish" style="display: none;">
              </div>-->
                <div class="card-footer ml-auto mr-auto">
                    <button type="submit" class="btn btn-rose">{{ __('Guardar ') }}</button>
                </div>
              <div class="clearfix"></div>
            </div>
                </div>
                @empty
                  <div class="card-header card-header-primary text-center">
                    <h4>No se encontraron Resultados</h4>
                  </div>
                @endforelse


                @forelse ($info as $product)
                <div class="tab-pane " id="perfil">
                  <div class="row justify-content-center">
                    <div class="col-sm-10">
                      <div class="row">
                        <label class="col-sm-2 col-form-label">Nombre</label>
                        <div class="col-sm-4">
                          <div class="form-group bmd-form-group">
                            <input class="form-control" name="name" id="name" type="text" placeholder="{{ $product->name }}" value="{{ $product->name }}" required="true" aria-required="true">

                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <label class="col-sm-2 col-form-label">Apellido Paterno</label>
                        <div class="col-sm-4">
                          <div class="form-group bmd-form-group">
                            <input class="form-control" name="app_name" id="app_name" type="text" placeholder="{{ $product->app_name }}" value="{{ $product->app_name }}" required="true">
                          </div>
                        </div>
                        <label class="col-sm-2 col-form-label">Apellido Materno</label>
                        <div class="col-sm-4">
                          <div class="form-group bmd-form-group">
                            <input class="form-control" name="apm_name" id="apm_name" type="text" placeholder="{{ $product->apm_name }}" value="{{ $product->apm_name }}" required="true">
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <label class="col-sm-2 col-form-label">Nombre</label>
                        <div class="col-sm-4">
                          <div class="form-group bmd-form-group">
                            <input class="form-control" name="name" id="name" type="text" placeholder="{{ $product->name }}" value="{{ $product->name }}" required="true" aria-required="true">
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-lg-10 mt-3">
                      <div class="input-group form-control-lg">
                        <div class="input-group-prepend">
                          <span class="input-group-text">
                            <i class="material-icons">email</i>
                          </span>
                        </div>
                        <div class="form-group">
                          <label for="email" class="bmd-label-floating">Correo electronico</label>
                          <input type="email" class="form-control" id="email" name="email" placeholder="{{ $product->email }}" value="{{ $product->email }}" required>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="card-footer">
              <!--<div class="mr-auto">
                <input type="button" class="btn btn-previous btn-fill btn-default btn-wd disabled" name="previous" value="Atras">
              </div>
              <div class="ml-auto">
                <input type="button" class="btn btn-next btn-fill btn-rose btn-wd" name="next" value="Siguiente">
                <input type="button" class="btn btn-finish btn-fill btn-rose btn-wd" name="finish" value="Finish" style="display: none;">
              </div>-->
                <div class="card-footer ml-auto mr-auto">
                    <button type="button" onClick="confSubmit(this.form);" class="btn btn-rose">{{ __('Guardar ') }}</button>
                </div>
              <div class="clearfix"></div>
            </div>
                </div>
                @empty
                 <div class="card-header card-header-primary text-center">
                     <h4>No se encontraron Resultados</h4>
                 </div>
                @endforelse


                <div class="tab-pane" id="ht_clinico">
                  <div class="row justify-content-center">
                    <div class="row">
                        <div class="col-sm-4">
                          <div class="choice" data-toggle="wizard-checkbox">
                            <input type="button" name="jobb" value="Code" data-toggle="modal" data-target=".docs-anexo{{$anexos}}-modal-lg">

                            <div class="icon">
                              <i class="fa fa-terminal"></i>
                            </div>
                            <h6> Uroginecología</h6>
                          </div>
                        </div>
                        <div class="col-sm-4">
                          <div class="choice" data-toggle="wizard-checkbox">
                            <input type="button" name="jobb" value="Codes" data-toggle="modal" data-target=".docs-anexonueve-modal-lg">
                            <div class="icon">
                              <i class="fa fa-laptop"></i>
                            </div>
                            <h6>Ver resultados</h6>
                          </div>

                        </div>
                      </div>
                     
                        </div>
                      </div>


                <div class="tab-pane" id="ht_medico">
                  <div class="row justify-content-center">
                  
                  <div class="table-responsive">
                  <table id="datatables" class="table table-striped table-no-bordered table-hover">
                    <thead class="text-primary">
                      <th>
                          {{ __('Anexo') }}
                      </th>
                      <th>
                        {{ __('Doctor') }}
                      </th>
                      <th>
                        {{ __('Especialidad') }}
                      </th>
                      <th>
                        {{ __('Fecha') }}
                      </th>
                      <th>
                          {{ __('Accion') }}
                        </th>
                    </thead>
                    <tbody>
                      @foreach($histmedico as $item)
                        <tr>
                          <td>
                            {{ $item->id_anexo }}
                          </td>
                          <td>
                            {{ $item->medico }}
                          </td>
                          <td>
                            {{ $item->especialidad }}
                          </td>
                          <td>
                            {{ $item->created_at->format('Y-m-d') }}
                          </td>
                          <td class="td-actions text-right">
                           <input class="btn btn-rose btn-round" type="button" value="Ver" data-toggle="modal" data-target=".docs-anexo{{$item->id_anexo}}-modal-lg">
                          </td>
                      @endforeach
                    </tbody>
                  </table>
                </div>
                    
                    </div>
                  </div>

             

                <div class="tab-pane" id="estudios">
                  <div class="row justify-content-center">
                  
                  <div class="table-responsive">
                  <table id="datatables" class="table table-striped table-no-bordered table-hover">
                    <thead class="text-primary">
                      <th>
                          {{ __('Resultado') }}
                      </th>
                      <th>
                        {{ __('Archivo') }}
                      </th>
                      <th>
                        {{ __('Medico') }}
                      </th>
                      <th>
                        {{ __('Imagen') }}
                      </th>
                      <th>
                        {{ __('Especialidad') }}
                      </th>
                      <th>
                        {{ __('Fecha') }}
                      </th>
                    </thead>
                    <tbody>
                      @foreach($resultadosmedicos as $item)
                        <tr>
                          <td>
                            {{ $item->resultado }}
                          </td>
                        <td>
                          @if($item->archivo != null)
                            <a href="download/{{ $item->archivo }}"><span class="label label-primary">Descargar</span></a>
                          @else
                            <a href="#"><span class="label label-primary">No hay archivo</span></a>
                          @endif 
                          </td>
                          <td>
                            {{ $item->medico }}
                          </td>
                          <td>
                            <a href="downloadimg/{{ $item->imagen }}"><img src='{{ asset('material')}}/archivos/{{ $item->imagen }}.png' alt="" style="max-width: 100px;"></a>
                            
                          </td>
                          <td>
                            {{ $item->especialidad }}
                          </td>
                          <td>
                            {{ $item->created_at->format('Y-m-d') }}
                          </td>
                      @endforeach
                    </tbody>
                  </table>
                </div>


                    
                    </div>
                  </div>


                <div class="tab-pane" id="agendar">
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
          </form>
        </div>
      </div>
      <!-- wizard container -->
    </div>
  </div>
</div>

@include("Catalogos.anexos.anexo10")

@endsection



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
@endpush


@push('js')
  <script>
    $(document).ready(function() {

      // initialise Datetimepicker and Sliders
      md.initFormExtendedDatetimepickers();
      if ($('.slider').length != 0) {
        md.initSliders();
      }
    });
  </script>

  <script>
    window.onload = function() {
   pantalla = document.getElementById("screen");
}
var isMarch = false; 
var acumularTime = 0; 
 $(document).ready(function() {
  
  var citas = {{ $ids }};
      $.ajax({
        type: "GET",
        dataType: "json",
        url: "../cronometro",
        data: {cita: citas},
        success: function (data) {
            var result = data;
             alert(result);
                    if(result == "error"){
                        alert("fafd");
                  
                    }
                    else{
   alert("dddd");
                  
                    }
          }
        });  
       
    /*    if (cronom === "no") { 
      alert("no");
          timeInicial = new Date();
            control = setInterval(cronometro,10);
            isMarch = true;
            // $("#cronometro").val("no");     
            }
        else{
      alert("si");
            timeInicial.setTime(cronom);
            control = setInterval(cronometro,10);  
        }*/
  });

function cronometro () { 
         timeActual = new Date();
         acumularTime = timeActual - timeInicial;
         acumularTime2 = new Date();
         acumularTime2.setTime(acumularTime); 
         cc = Math.round(acumularTime2.getMilliseconds()/10);
         ss = acumularTime2.getSeconds();
         mm = acumularTime2.getMinutes();
         hh = acumularTime2.getHours()-18;
         if (cc < 10) {cc = "0"+cc;}
         if (ss < 10) {ss = "0"+ss;} 
         if (mm < 10) {mm = "0"+mm;}
         if (hh < 10) {hh = "0"+hh;}
         pantalla.innerHTML = hh+" : "+mm+" : "+ss+" : "+cc;
         }

function stop () { 
         if (isMarch == true) {
            clearInterval(control);
            isMarch = false;
            }     
         }      

function resume () {
         if (isMarch == false) {
            timeActu2 = new Date();
            timeActu2 = timeActu2.getTime();
            acumularResume = timeActu2-acumularTime;
            
            timeInicial.setTime(acumularResume);
            control = setInterval(cronometro,10);
            isMarch = true;
            }     
         }

function reset () {
         if (isMarch == true) {
            clearInterval(control);
            isMarch = false;
            }
         acumularTime = 0;
         pantalla.innerHTML = "00 : 00 : 00 : 00";
         }
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
        url: "http://localhost:8080/CiclicaV2/public/citas/add",
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
                   // window.location.href = linkURL;
                  clearInterval(control);
                  timeActu2 = new Date();
                  timeActu2 = timeActu2.getTime();
                  acumularResume = timeActu2-acumularTime;
                  
                  timeInicial.setTime(acumularResume);
                  $("#cronometro").val(acumularResume);
                  //control = setInterval(cronometro,10);
                  var cr = $("#cronometro").val();
                  alert(cr);
      
                  //alert(acumularResume);
                   form.submit();
                }
            })

        }
</script>

@endpush

