<div class="wizard-container">
  <div class="card card-wizard" data-color="rose" id="wizardProfile">    
  <form id="myform" method="post" action="{{url('procesoanexo40/add') }}" autocomplete="off" class="form-horizontal">
        @csrf
          @method('post')              

      <input name="id_paciente" id="paciente" type="hidden" value="{{ $paciente }}">
      <!-- Menu----- -->
      <div class="wizard-navigation">
        <ul class="nav nav-pills">
          <li class="nav-item">
            <a class="nav-link active show" data-toggle="tab" href="#link1" role="tablist">
                    Consultas Subsecuentes
                  </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="tab" href="#link2" role="tablist">
                    Diagnósticos
                  </a>
          </li>
        </ul>
      </div>
      <!--Menu --------->

      <div class="card-body p-5">
        <div class="tab-content">

          <!-- primer metodo del panel-------------------------------------------------------------------->
          <div class="tab-pane active" id="link1">
              <div class="row">
                <div class="col-sm-6 mb-3">
                  <div class="form-group">
                    <label class="position-relative">Gestas:</label>
                    <input type="text" class="form-control" placeholder="" name="anx40_gestas">
                  </div>
                </div>
                <div class="col-sm-6 mb-3">
                  <div class="form-group">
                    <label class="position-relative">Partos:</label>
                    <input type="text" class="form-control" placeholder="" name="anx40_partos">
                  </div>
                </div>
                <div class="col-sm-4 mb-3">
                  <div class="form-group">
                    <label class="position-relative">Cesáreas:</label>
                    <input type="text" class="form-control" placeholder="" name="anx40_cesareas">
                  </div>
                </div>
                <div class="col-sm-4 mb-3">
                  <div class="form-group">
                    <label class="position-relative">Abortos:</label>
                    <input type="text" class="form-control" placeholder="" name="anx40_abortos">
                  </div>
                </div>


                <div class="col-sm-4">
                  <div class="form-group">
                    <label class="position-relative">Ectópicos:</label>
                    <input type="text" class="form-control" placeholder="" name="anx40_ectopicos">
                  </div>
                </div>

                <div class="col-sm-4">
                  <div class="form-group">
                    <label class="position-relative">Grupo RH:</label>
                    <input type="text" class="form-control" placeholder="" name="anx40_gruporh">
                  </div>
                </div>
              </div>

          </div>

          <!-- segundo metodo del panel--------------------------------------------------------------------->
          <div class="tab-pane" id="link2">

              <div class="row ">
               
                <div class="col-12 mb-3">
                  <label class="mb-0">Diagnósticos:</label>
                  <div class="form-group{{ $errors->has('description') ? ' has-danger' : '' }}">
                    <textarea rows="2" class="form-control{{ $errors->has('description') ? ' is-invalid' : '' }}" name="anx40_diagnostico" id="input-description" type="text" placeholder="" aria-required="true">{{ old('Exporacion Fisica:') }}</textarea> @include('alerts.feedback', ['field' => 'description'])
                  </div>
                </div>
              
                
                <div class="col-12 mb-3">
                  <label class="mb-0">Subjetivo:</label>
                  <div class="form-group{{ $errors->has('description') ? ' has-danger' : '' }}">
                    <textarea rows="2" class="form-control{{ $errors->has('description') ? ' is-invalid' : '' }}" name="anx40_subjetivo" id="input-description" type="text" placeholder="" aria-required="true">{{ old('Exporacion Fisica:') }}</textarea> @include('alerts.feedback', ['field' => 'description'])
                  </div>
                </div>
              
                
                <div class="col-sm-12 mb-3">
                 <label class="mb-0">Objetivo:</label>
                  <div class="form-group{{ $errors->has('description') ? ' has-danger' : '' }}">
                    <textarea rows="2" class="form-control{{ $errors->has('description') ? ' is-invalid' : '' }}" name="anx40_objetivo" id="input-description" type="text" placeholder="" aria-required="true">{{ old('Exporacion Fisica:') }}</textarea> @include('alerts.feedback', ['field' => 'description'])
                  </div>
                </div>
             
                
                <div class="col-sm-12 mb-3">
                 <label class="mb-0">Análisis:</label>
                  <div class="form-group{{ $errors->has('description') ? ' has-danger' : '' }}">
                    <textarea rows="2" class="form-control{{ $errors->has('description') ? ' is-invalid' : '' }}" name="anx40_analisis" id="input-description" type="text" placeholder="" aria-required="true">{{ old('Exporacion Fisica:') }}</textarea> @include('alerts.feedback', ['field' => 'description'])
                  </div>
                </div>
             
                
                <div class="col-sm-12 mb-3">
                 <label class="mb-0">Plan:</label>
                  <div class="form-group{{ $errors->has('description') ? ' has-danger' : '' }}">
                    <textarea rows="2" class="form-control{{ $errors->has('description') ? ' is-invalid' : '' }}" name="anx40_plan" id="input-description" type="text" placeholder="" aria-required="true">{{ old('Exporacion Fisica:') }}</textarea> @include('alerts.feedback', ['field' => 'description'])
                  </div>
                </div>
              </div>
          </div>

          <!--  Fin seccion 2 ------------------------>
        </div>
      </div>
     
      <div class="card-footer">
                <div class="card-footer ml-auto mr-auto">
                    <button type="input" class="btn btn-rose">{{ __('Guardar ') }}
                    </button>
                </div>
              <div class="clearfix"></div>
            </div>
    </form>
  </div>
</div>

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
@endpush