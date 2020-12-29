<div class="wizard-container">
  <div class="card card-wizard" data-color="rose" id="wizardProfile">    
  
       <form id="myform" method="post" action="#" autocomplete="off" class="form-horizontal">
        @csrf
          @method('post')              

 <div class="card p-0">
        <!--       
        para copiar y pegar en el sistema de anexo 3
        -->
        <div class="card-body p-0">
          <h5 class="title-ciclica">Climaterio y salud ósea</h5>
          <div class="form-row p-5">
            <div class="col-md-4 mb-2">
              <label for="" class="col-form-label col-form-label-sm mb-1">Ciclos menstruales</label>
              <input class="form-control form-control-sm" type="text" placeholder="">
            </div>
            <div class="col-md-4 mb-2">
              <label for="" class="col-form-label col-form-label-sm mb-1">Cantidad de sangrado mestrual</label>
              <select class="form-control form-control-sm" id="exampleFormControlSelect1">
                <option>Escaso</option>
                <option>Normal</option>
                <option>Abundante</option>
              </select>
            </div>
            <div class="col-md-4 mb-2">
              <label for="" class="col-form-label col-form-label-sm mb-1">Toallas por día</label>
              <input class="form-control form-control-sm" type="number" placeholder="#">
            </div>
            <div class="col-md-2 mb-2">
              <label for="inlineCheckbox1" class="form-check-label col-form-label-sm mb-1">Dismenorrea</label>
              <select class="form-control mt-2 form-control-sm" id="exampleFormControlSelect1">
                <option>Si</option>
                <option>No</option>
                <option>Leve</option>
                <option>Moderado</option>
                <option>Severo</option>
              </select>
            </div>
            <div class="col-md-5 mb-2">
              <label for="inlineCheckbox1" class="form-check-label pl-0 col-form-label-sm col-12 mb-1">Bochornos</label>
              <div class="form-row mt-1 p-0">
                <div class="form-group col-md-6">
                  <select class="form-control form-control-sm" id="exampleFormControlSelect1">
                    <option>Si</option>
                    <option>No</option>
                    <option>Leve</option>
                    <option>Moderado</option>
                    <option>Severo</option>
                  </select>
                </div>
                <div class="form-group col-md-6">
                  <input class="form-control form-control-sm" type="text" placeholder="Tipo de evolución">
                </div>
              </div>
            </div>
            <div class="col-md-5 mb-2">
              <label for="inlineCheckbox1" class="form-check-label pl-0 col-form-label-sm col-12 mb-1">Sudoración</label>
              <div class="form-row mt-1 p-0">
                <div class="form-group col-md-6">
                  <select class="form-control form-control-sm" id="exampleFormControlSelect1">
                    <option>Si</option>
                    <option>No</option>
                    <option>Leve</option>
                    <option>Moderado</option>
                    <option>Severo</option>
                  </select>
                </div>
                <div class="form-group col-md-6">
                  <input class="form-control form-control-sm" type="text" placeholder="Tipo de evolución">
                </div>
              </div>
            </div>
            <div class="col-md-3 mb-2">
              <label for="inlineCheckbox1" class="form-check-label pl-0 col-form-label-sm col-12 mb-1">Caída del cabello</label>
              <input class="" type="checkbox" data-toggle="toggle" data-size="sm" data-style="ios" data-on="SI" data-off="No">
            </div>
            <div class="col-md-3 mb-2">
              <label for="inlineCheckbox1" class="form-check-label pl-0 col-form-label-sm col-12 mb-1">Resequedad de piel</label>
              <input class="" type="checkbox" data-toggle="toggle" data-size="sm" data-style="ios" data-on="SI" data-off="No">
            </div>
            <div class="col-md-3 mb-2">
              <label for="inlineCheckbox1" class="form-check-label pl-0 col-form-label-sm col-12 mb-1">Labilidad</label>
              <input class="" type="checkbox" data-toggle="toggle" data-size="sm" data-style="ios" data-on="SI" data-off="No">
            </div>
            <div class="col-md-3 mb-2">
              <label for="inlineCheckbox1" class="form-check-label pl-0 col-form-label-sm col-12 mb-1">Irritabilidad</label>
              <input class="" type="checkbox" data-toggle="toggle" data-size="sm" data-style="ios" data-on="SI" data-off="No">
            </div>
            <div class="col-md-3 mb-2">
              <label for="inlineCheckbox1" class="form-check-label pl-0 col-form-label-sm col-12 mb-1">Ansiedad</label>
              <input class="" type="checkbox" data-toggle="toggle" data-size="sm" data-style="ios" data-on="SI" data-off="No">
            </div>
            <div class="col-md-3 mb-2">
              <label for="inlineCheckbox1" class="form-check-label pl-0 col-form-label-sm col-12 mb-1">Nerviosismo</label>
              <input class="" type="checkbox" data-toggle="toggle" data-size="sm" data-style="ios" data-on="SI" data-off="No">
            </div>
            <div class="col-md-3 mb-2">
              <label for="inlineCheckbox1" class="form-check-label pl-0 col-form-label-sm col-12 mb-1">Cefalea</label>
              <input class="" type="checkbox" data-toggle="toggle" data-size="sm" data-style="ios" data-on="SI" data-off="No">
            </div>
            <div class="col-md-3 mb-2">
              <label for="inlineCheckbox1" class="form-check-label pl-0 col-form-label-sm col-12 mb-1">Insomnio</label>
              <input class="" type="checkbox" data-toggle="toggle" data-size="sm" data-style="ios" data-on="SI" data-off="No">
            </div>
            <div class="col-md-3 mb-2">
              <label for="inlineCheckbox1" class="form-check-label pl-0 col-form-label-sm col-12 mb-1">Alteración libido</label>
              <input class="" type="checkbox" data-toggle="toggle" data-size="sm" data-style="ios" data-on="SI" data-off="No">
            </div>
            <div class="col-md-6 mb-2">
              <label for="inlineCheckbox1" class="form-check-label pl-0 col-form-label-sm col-12 mb-1">Incontinencia urinaria</label>
              <select class="form-control form-control-sm" id="exampleFormControlSelect1">
                <option>Si</option>
                <option>No</option>
                <option>Esfuerzo</option>
                <option>Urgencia</option>
              </select>
            </div>
            <div class="col-md-3 mb-2">
              <label for="inlineCheckbox1" class="form-check-label pl-0 col-form-label-sm col-12 mb-1">Resequedad vaginal</label>
              <input class="" type="checkbox" data-toggle="toggle" data-size="sm" data-style="ios" data-on="SI" data-off="No">
            </div>
            <div class="col-md-12 mb-2">
              <label for="" class="col-form-label col-form-label-sm">Notas</label>
              <textarea class="form-control form-control-sm" id="exampleFormControlTextarea1" rows="3"></textarea>
            </div>
            
              <div class="card-footer p-0 ml-auto mr-auto">
                <button type="input" class="btn btn-rose">{{ __('Guardar ') }}
                </button>
              </div>
            
          </div>
        </div>
        <!--      fin de copiado de anexo 3-->
      </div>
      
      </form>
 
 
  </div>
</div>


@push('js')   
<script>
    var slider = document.getElementById("toallasxdia");
    var output = document.getElementById("valortoallas");
    output.innerHTML = slider.value;
    slider.oninput = function() {
      output.innerHTML = this.value;
    }
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
@endpush
