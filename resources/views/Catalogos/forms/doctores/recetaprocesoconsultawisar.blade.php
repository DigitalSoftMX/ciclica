@extends('layouts.app', ['activePage' => 'form_wizard', 'menuParent' => 'forms', 'titlePage' => __('Consulta')])

<link href="{{ asset('material') }}/css/flipclock.css" rel="stylesheet" />

@section('content')
 
<div class="content">
  <div class="container-fluid">
   
   
    <form id="myForm" method="post" action='{{url("recetaprocesoconsultadoctores/edit/$ids") }}' autocomplete="off" class="form-horizontal">
        @csrf
          @method('post')   
          <div class="card-footer ml-auto mr-auto">
            <button type="submit" class="btn btn-rose">{{ __('Cerrar Consulta') }}</button>
          </div>
       </form>
       
   
    <form id="myForm" method="post" action="{{url('recetaprocesoconsultadoctores/add') }}" autocomplete="off" class="form-horizontal">
        @csrf
          @method('post')   
          <input name="id_paciente" id="paciente" type="hidden" value="{{ $paciente }}">             
   <div class="row">

<!-- PERFIL -->
  @forelse ($info as $product)
      <div class="col-md-3">
        <div class="card card-profile">
          <div class="card-avatar">
                @if ($product->picture)
                    <img src="../storage/app/public/{{ $product->picture }}" />
                @else
                    <img src="{{ asset('material') }}/img/placeholder.jpg" alt="...">
                @endif
          </div>
         <!-- body -->     
            <div class="card-body">
                  <div class="row justify-content-center">
                     <div class="col-lg-12 mt-3">
                      <div class="input-group form-control-lg">
                        <label class="col-sm-12 col-form-label text-center">{{ $product->name }} {{ $product->app_name }} {{ $product->apm_name }}</label>   
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
                         
                          <div class="card-footer row">
                              <div class="col-12">
                                 <button type="button" name="jobb" value="Codes" data-toggle="modal" data-target=".docs-modalestudios-modal-lg" class="btn btn-rose btn-block">{{ __('Agendar Estudios') }}</button> 
                                 
                                 <button type="button" name="jobb" value="Codes" data-toggle="modal" data-target=".docs-modalreceta-modal-lg" class="btn btn-rose btn-block">{{ __('Receta') }}</button> 
                              
                                 <button type="button" name="jobb" value="Codes" data-toggle="modal" data-target=".docs-modalanexo1-modal-lg" class="btn btn-rose btn-block"><i class="iconPlas-iconCiclica70"></i>{{ __('Historia Clinica') }}</button> 
                              
                                 <a class="btn btn-rose btn-block" href="{{ url('historialprocesoconsultadoctores') }}"><i class="iconPlas-iconCiclica70"></i>Historial Medico</a>
                                
                                 <a class="btn btn-rose btn-block" href="{{ url('estudiosprocesoconsultadoctores') }}"><i class="iconPlas-iconCiclica70"></i>Resultados</a>
                                
                              </div>

                          </div>
                    
           <!-- body -->     
          </div>
        </div>
      </div>
  @empty
      <div class="card-header card-header-primary text-center">
         <h4>No se encontraron Resultados</h4>
      </div>
  @endforelse
<!-- PERFIL -->
      
     
<!-- Consulta -->
  @forelse ($citas as $lista)
     <input name="cita" id="cita" type="hidden" value="{{ $lista->id }}">
     <input name="id_paciente" id="paciente" type="hidden" value="{{ $lista->id_paciente }}">
     <input name="id_doctor" id="dcctor" type="hidden" value="{{ $lista->id_doctor }}">
    @empty
      <div class="card-header card-header-primary text-center">
         <h4>No se encontraron Resultados</h4>
      </div>
  @endforelse

  @forelse ($receta as $recet)
    <div class="col-md-9">
         <!-- body -->     
          <div class="card-body">
                  
                        
                    <div id="accordion" role="tablist">
                     
                      <div class="card card-collapse">
                       
                        <div class="card-header" role="tab" id="headingOne">
                          <h5 class="mb-0">
                            <a data-toggle="collapse" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                              Signos Vitales
                              <i class="material-icons">keyboard_arrow_down</i>
                            </a>
                          </h5>
                        </div>
                        <div id="collapseOne" class="collapse show" role="tabpanel" aria-labelledby="headingOne" data-parent="#accordion">
                        <div class="row">
                        <div class="col-md-2 mr-auto ml-auto" >
                      <label for="exampleTalla" class="bmd-label-floating">Talla</label>
                      <input class="form-control" style="width:50%" name="talla" id="talla" type="text" placeholder="" value="{{ $recet->talla }}"  aria-required="true">
                    </div>
                    <div class="col-md-2 mr-auto ml-auto">
                    <label for="examplePeso" class="bmd-label-floating">Peso</label>
                    <input class="form-control" name="peso" id="peso" type="text" placeholder="" value="{{ $recet->peso }}"  aria-required="true">
                  </div>
                    <div class="col-md-2 mr-auto ml-auto">
                      <label for="exampleTemp" class="bmd-label-floating">Temp(ºC)</label>
                      <input class="form-control" name="temp" id="temp" type="text" placeholder="" value="{{ $recet->temp }}"  aria-required="true">
                    </div>
                    <div class="col-md-2 mr-auto ml-auto">
                      <label for="exampleTalla" class="bmd-label-floating">T.A</label>
                      <input class="form-control" name="ta" id="ta" type="text" placeholder="" value="{{ $recet->ta }}"  aria-required="true">
                    </div>
                    <div class="col-md-2 mr-auto ml-auto">
                      <label for="exampleTalla" class="bmd-label-floating">F.C</label>
                      <input class="form-control" name="fc" id="fc" type="text" placeholder="" value="{{ $recet->fc }}"  aria-required="true">
                    </div>
                    <div class="col-md-2 mr-auto ml-auto">
                      <label for="exampleTalla" class="bmd-label-floating">F.R</label>
                      <input class="form-control" name="fr" id="fr" type="text" placeholder="" value="{{ $recet->fr }}"  aria-required="true">
                    </div>
                    <div class="col-md-2 mr-auto ml-auto">
                      <label for="exampleTalla" class="bmd-label-floating">F.M</label>
                      <input class="form-control" name="fm" id="fm" type="text" placeholder="" value="{{ $recet->fm }}"  aria-required="true">
                    </div>
                    <div class="col-md-10 mr-auto ml-auto">
                      <label for="exampleTalla" class="bmd-label-floating">Observaciones</label>
                      <input class="form-control" name="observ" id="observ" type="text" placeholder="" value="{{ $recet->observaciones }}"  aria-required="true">
                    </div>
                  </div>
                        </div>
                        </br>
                        </div>
                      
                      <div class="card card-collapse">
                        <div class="card-header" role="tab" id="headingTwo">
                          <h5 class="mb-0">
                            <a class="collapsed" data-toggle="collapse" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                              Análisis
                              <i class="material-icons">keyboard_arrow_down</i>
                            </a>
                          </h5>
                        </div>
                          <div id="collapseTwo" class="collapse" role="tabpanel" aria-labelledby="headingTwo" data-parent="#accordion">
                               <div class="row">
                              <div class="col-md-10 mr-auto ml-auto" >
                            <div class="col-lg-12 form-group{{ $errors->has('descripcionp') ? ' has-danger' : '' }}">
                            <textarea  rows="8" class="form-control{{ $errors->has('descripcionp') ? ' is-invalid' : '' }}" name="descripcionp" id="input-description" type="text"   aria-required="true" >{{ $recet->descripcionp }}</textarea>
                            </div>
                            </div>
                             </div>
                          </br>
                          </div>
                      </div>
                      
                      <div class="card card-collapse">
                        <div class="card-header" role="tab" id="headingThree">
                          <h5 class="mb-0">
                            <a class="collapsed" data-toggle="collapse" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                              Tratamiento
                              <i class="material-icons">keyboard_arrow_down</i>
                            </a>
                          </h5>
                        </div>
                        <div id="collapseThree" class="collapse" role="tabpanel" aria-labelledby="headingThree" data-parent="#accordion">
                              <div class="row">
                               <div class="col-md-10 mr-auto ml-auto" >
                               <div class="col-lg-12 form-group{{ $errors->has('description') ? ' has-danger' : '' }}">
                               <textarea  rows="8" class="form-control{{ $errors->has('description') ? ' is-invalid' : '' }}" name="expo_me" id="input-description" type="text" placeholder=""  aria-required="true">{{ $recet->expo_me }}</textarea>
                               </div>
                            </div>
                        </div>
                        </br>
                        </div>
                      </div>
                      
                      <div class="card card-collapse">
                        <div class="card-header" role="tab" id="headingFord">
                          <h5 class="mb-0">
                            <a class="collapsed" data-toggle="collapse" href="#collapseFord" aria-expanded="false" aria-controls="collapseFord">
                              Plan Medico
                              <i class="material-icons">keyboard_arrow_down</i>
                            </a>
                          </h5>
                        </div>
                        <div id="collapseFord" class="collapse" role="tabpanel" aria-labelledby="headingFord" data-parent="#accordion">
                              <div class="row">
                               <div class="col-md-10 mr-auto ml-auto" >
                               <div class="col-lg-12 form-group{{ $errors->has('indica') ? ' has-danger' : '' }}">
                               <textarea  rows="8" class="form-control{{ $errors->has('indica') ? ' is-invalid' : '' }}" name="indica" id="input-description" type="text" placeholder=""  aria-required="true">{{ $recet->indica }}</textarea>
                               </div>
                            </div>
                        </div>
                        </br>
                        </div>
                      </div>
                      
                    </div>
                    
                
                <!--     <div class="col-md-4 my-3">
                      <div class="input-group">
                        <label for="name" class="">Fecha de Padto</label>
                        <div class="col-md-12 p-0 m-0 form-group">
                          <input type="text" class="form-control datepicker" value="{{ $recet->fechap }}" name="fechap" />
                        </div>
                      </div>
                    </div>
                    </br>
                    </br>
    -->
                    
               
                  
                <div class="card-footer ml-auto mr-auto">
                  <div class="card-footer ml-auto mr-auto">
                  <button type="submit" id="receta" class="btn btn-rose btn-cicli">{{ __('Guardar ') }}</button>
                  </div>  
                </div>
                <div class="clearfix"></div>
           
           <!-- body -->     
        </div>
      </div>
  @empty
<div class="col-md-9">
         <!-- body -->     
          <div class="card-body">
                  
                     <!--<div class="row">
                      <div class="input-group form-control-lg">
                        <label for="name" class="bmd-label-floating">Fecha de Padecimiento</label>
                        <div class="col-lg-12 form-group">
                          <input type="text" class="form-control datepicker" value="" name="fechaP" />
                        </div>
                      </div>
                    </div>
                    </br>
                    </br>-->
                    
                    <div id="accordion" role="tablist">
                     
                      <div class="card card-collapse">
                       
                        <div class="card-header" role="tab" id="headingOne">
                          <h5 class="mb-0">
                            <a data-toggle="collapse" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                              Signos Vitales
                              <i class="material-icons">keyboard_arrow_down</i>
                            </a>
                          </h5>
                        </div>
                        <div id="collapseOne" class="collapse show" role="tabpanel" aria-labelledby="headingOne" data-parent="#accordion">
                        <div class="row">
                               
                           
                            <div class="col-lg-2 mr-auto ml-auto" >
                              <label for="exampleTalla" class="bmd-label-floating">Talla</label>
                              <input class="form-control" name="talla"  id="talla" type="text" placeholder="" value=""  aria-required="true">
                            </div>
                            <div class="col-lg-2 mr-auto ml-auto">
                            <label for="examplePeso" class="bmd-label-floating">Peso</label>
                            <input class="form-control" name="peso" id="peso" type="text" placeholder="" value=""  aria-required="true">
                          </div>
                            <div class="col-lg-2 mr-auto ml-auto">
                              <label for="exampleTemp" class="bmd-label-floating">Temp(ºC)</label>
                              <input class="form-control" name="temp" id="temp" type="text" placeholder="" value=""  aria-required="true">
                            </div>
                            <div class="col-lg-2 mr-auto ml-auto">
                              <label for="exampleTalla" class="bmd-label-floating">T.A</label>
                              <input class="form-control" name="ta" id="ta" type="text" placeholder="" value=""  aria-required="true">
                            </div>
                            <div class="col-lg-2 mr-auto ml-auto">
                              <label for="exampleTalla" class="bmd-label-floating">F.C</label>
                              <input class="form-control" name="fc" id="fc" type="text" placeholder="" value=""  aria-required="true">
                            </div>
                            <div class="col-lg-2 mr-auto ml-auto">
                              <label for="exampleTalla" class="bmd-label-floating">F.R</label>
                              <input class="form-control" name="fr" id="fr" type="text" placeholder="" value=""  aria-required="true">
                            </div>
                            <div class="col-md-2 mr-auto ml-auto">
                              <label for="exampleTalla" class="bmd-label-floating">F.M</label>
                              <input class="form-control" name="fm" id="fm" type="text" placeholder="" value=""  aria-required="true">
                            </div>
                            <div class="col-md-10 mr-auto ml-auto">
                              <label for="exampleTalla" class="bmd-label-floating">Observaciones</label>
                              <input class="form-control" name="observ" id="observ" type="text" placeholder="" value=""  aria-required="true">
                            </div>
                          
                          </div>
                        </div>
                        </br>
                        </div>
                      
                      <div class="card card-collapse">
                        <div class="card-header" role="tab" id="headingTwo">
                          <h5 class="mb-0">
                            <a class="collapsed" data-toggle="collapse" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                              Análisis
                              <i class="material-icons">keyboard_arrow_down</i>
                            </a>
                          </h5>
                        </div>
                          <div id="collapseTwo" class="collapse" role="tabpanel" aria-labelledby="headingTwo" data-parent="#accordion">
                               <div class="row">
                              <div class="col-md-10 mr-auto ml-auto" >
                            <div class="col-lg-12 form-group{{ $errors->has('description') ? ' has-danger' : '' }}">
                            <textarea  rows="8" class="form-control{{ $errors->has('descripcionp') ? ' is-invalid' : '' }}" name="descripcionp" id="input-description" type="text"   aria-required="true" ></textarea>
                            </div>
                            </div>
                             </div>
                          </br>
                          </div>
                      </div>
                      
                      <div class="card card-collapse">
                        <div class="card-header" role="tab" id="headingThree">
                          <h5 class="mb-0">
                            <a class="collapsed" data-toggle="collapse" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                              Tratamiento
                              <i class="material-icons">keyboard_arrow_down</i>
                            </a>
                          </h5>
                        </div>
                        <div id="collapseThree" class="collapse" role="tabpanel" aria-labelledby="headingThree" data-parent="#accordion">
                              <div class="row">
                               <div class="col-md-10 mr-auto ml-auto" >
                               <div class="col-lg-12 form-group{{ $errors->has('description') ? ' has-danger' : '' }}">
                               <textarea  rows="8" class="form-control{{ $errors->has('description') ? ' is-invalid' : '' }}" name="expo_me" id="input-description" type="text" placeholder=""  aria-required="true"></textarea>
                               </div>
                            </div>
                        </div>
                        </br>
                        </div>
                      </div>
                      
                      <div class="card card-collapse">
                        <div class="card-header" role="tab" id="headingFord">
                          <h5 class="mb-0">
                            <a class="collapsed" data-toggle="collapse" href="#collapseFord" aria-expanded="false" aria-controls="collapseFord">
                              Plan Medico
                              <i class="material-icons">keyboard_arrow_down</i>
                            </a>
                          </h5>
                        </div>
                        <div id="collapseFord" class="collapse" role="tabpanel" aria-labelledby="headingFord" data-parent="#accordion">
                              <div class="row">
                               <div class="col-md-10 mr-auto ml-auto" >
                               <div class="col-lg-12 form-group{{ $errors->has('indica') ? ' has-danger' : '' }}">
                               <textarea  rows="8" class="form-control{{ $errors->has('indica') ? ' is-invalid' : '' }}" name="indica" id="input-description" type="text" placeholder=""  aria-required="true"></textarea>
                               </div>
                            </div>
                        </div>
                        </br>
                        </div>
                      </div>
                      
                    </div>
                    
            
                  
                
                <div class="card-footer ml-auto mr-auto">
                  <div class="card-footer ml-auto mr-auto">
                  <button type="submit" id="receta" class="btn btn-rose">{{ __('Guardar ') }}</button>
                  </div>  
                </div>
              <div class="clearfix"></div>
           <!-- body -->     
         
        </div>
      </div>
@endforelse
<!-- Consulta -->

    </div>
   </form>

  </div>
</div>
    <!--  FIN        -->
     
    @include("Catalogos.forms.doctores.imprimirestudio")
   
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
  $(document).ready(function() {
   
var i = 0;
var hour = 0;
var minut = 0;
var second = 0;

var year = 0;
var month = 0;
var day = 0;
var total = 0;

var tod = new Date();
var newhour = tod.getHours();
var newmin = tod.getMinutes();
var newsec = tod.getSeconds();

var citas = {{ $ids }};
      $.ajax({
        type: "GET",
        dataType: "json",
        url: "../public/cronometro",
        data: {cita: citas},
        success: function (result) {

           $.each(result, function (index, subcatObj) {
           i++;

            year = subcatObj.start.substring(0, 4);
            month = subcatObj.start.substring(5, 7);
            day = subcatObj.start.substring(8, 10);
            hour = subcatObj.cron_inicia.substring(0, 2);
            minut = subcatObj.cron_inicia.substring(3, 5);
            second = subcatObj.cron_inicia.substring(6, 8);
           
            var date = new Date(year, month, day,hour,minut,second);
            var today = new Date(year, month, day,newhour,newmin,newsec);
            var dif = today.getTime() - date.getTime();
            var timeLeft = (dif/1000);

            clock = $('.clock').FlipClock({
            clockFace: 'MinuteCounter'
            });
                clock.setTime(timeLeft);
                clock.start(); 
        });
      }
   });     

});



function start(){
  clock = $('.clock').FlipClock({
  clockFace: 'MinuteCounter'
  });  
}

function reset(result){
  var times = result;
  clock = $('.clock').FlipClock({
  clockFace: 'MinuteCounter'
  });
      clock.setTime(times);
      clock.start();  
}
    function stop () { 
        clock.stop;
        var tiempo = clock.getTime();
        alert(tiempo);
         $("#final").val(tiempo);
         var times = $("#final").val();
         //myForm.submit(); 
         document.getElementById("myForm").submit();   
         }

</script>
@endpush

