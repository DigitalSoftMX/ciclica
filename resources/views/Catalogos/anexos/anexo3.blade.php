<div class="wizard-container">
  <div class="card card-wizard" data-color="rose" id="wizardProfile">    
  
       <form id="myform" method="post" action="#" autocomplete="off" class="form-horizontal">
        @csrf
          @method('post')              

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
           
            <div class="col-md-4 mb-4" >
                    <input class="" type="checkbox" data-toggle="toggle" data-size="sm" data-style="ios" name="dismonorrea" id="dismonorrea" data-on="SI" data-off="NO" >
                    <label for="inlineCheckbox1" class="form-check-label">Dismenorrea</label>
                    <div class="collapse" id="dismonorrea_CL">
                    <select class="form-control mt-2" name="#">
                       <option>Leve</option>
                       <option>Moderado</option>
                       <option>Severo</option>
                    </select>
                    </div>
            </div>
            <div class="col-md-4">
              <input class="" type="checkbox" data-toggle="toggle" data-size="sm" data-style="ios" data-on="SI" data-off="No" />
              <label for="inlineCheckbox1" class="form-check-label">Caída del cabello</label>
            </div>
            <div class="col-md-4">
              <input class="" type="checkbox" data-toggle="toggle" data-size="sm" data-style="ios" data-on="SI" data-off="No">
              <label for="inlineCheckbox1" class="form-check-label">Resequedad de piel</label>
            </div>
            <div class="col-md-4 mb-4" >
              <input class="" type="checkbox" data-toggle="toggle" data-size="sm" data-style="ios" name="bochornos" id="bochornos" data-on="SI" data-off="NO">
              <label for="inlineCheckbox1" class="form-check-label col-form-label-sm">Bochornos</label>
              <div class="collapse" id="bochornos_CL">
                <select class="form-control mt-2 form-control-sm" id="exampleFormControlSelect1" name="#">
                        <option>Leve</option>
                        <option>Moderado</option>
                        <option>Severo</option>
                </select>
               <input class="form-control form-control-sm" type="text" placeholder="Tiempo de evolución" name="">            
             </div>
            </div>         
            <div class="col-md-4">
                    <input class="" type="checkbox" data-toggle="toggle" data-size="sm" data-style="ios" name="sudoracion" id="sudoracion" data-on="SI" data-off="NO">
                    <label for="inlineCheckbox1" class="form-check-label col-form-label-sm">Sudoración</label>
                    <div class="collapse" id="sudoracion_CL">
                      <input class="form-control form-control-sm" type="text" placeholder="Tiempo de evolución" name="">
                    </div>
            </div>
                  
            <div class="col-md-4">
              <input class="" type="checkbox" data-toggle="toggle" data-size="sm" data-style="ios" data-on="SI" data-off="No">
              <label for="inlineCheckbox1" class="form-check-label">Labilidad</label>
            </div>


            <div class="col-md-4 mb-4">
              <input class="" type="checkbox" data-toggle="toggle" data-size="sm" data-style="ios" data-on="SI" data-off="No">
                <label for="inlineCheckbox1" class="form-check-label">Irritabilidad</label>
            </div>
            <div class="col-md-4">
              <input class="" type="checkbox" data-toggle="toggle" data-size="sm" data-style="ios" data-on="SI" data-off="No">
               <label for="inlineCheckbox1" class="form-check-label ">Ansiedad</label>
            </div>
            <div class="col-md-4">
              <input class="" type="checkbox" data-toggle="toggle" data-size="sm" data-style="ios" data-on="SI" data-off="No">
                 <label for="inlineCheckbox1" class="form-check-label ">Nerviosismo</label>
            </div>
            <div class="col-md-4 mb-4">
              <input class="" type="checkbox" data-toggle="toggle" data-size="sm" data-style="ios" data-on="SI" data-off="No">
              <label for="inlineCheckbox1" class="form-check-label ">Cefalea</label>
            </div>
            <div class="col-md-4">
              <input class="" type="checkbox" data-toggle="toggle" data-size="sm" data-style="ios" data-on="SI" data-off="No">
              <label for="inlineCheckbox1" class="form-check-label ">Insomnio</label>
            </div>
            <div class="col-md-4">
              <input class="" type="checkbox" data-toggle="toggle" data-size="sm" data-style="ios" data-on="SI" data-off="No">
              <label for="inlineCheckbox1" class="form-check-label ">Alteración libido</label>
            </div>
            
             <div class="col-4 mb-4">
                    <input class="" type="checkbox" data-toggle="toggle" data-size="sm" data-style="ios" name="incontinencia" id="incontinencia" data-on="SI" data-off="NO">
                    <label for="inlineCheckbox1" class="form-check-label col-form-label-sm">Incontinencia urinaria</label>
                    <div class="collapse" id="incontinencia_CL">
                         <select class="form-control mt-2 form-control-sm" id="exampleFormControlSelect1" name="#">
                        <option>Esfuerzo</option>
                        <option>Urgencia</option>
                          </select>
                    </div>
                  </div>

            <div class="col-md-4">
              <input class="" type="checkbox" data-toggle="toggle" data-size="sm" data-style="ios" data-on="SI" data-off="No">
              <label for="inlineCheckbox1" class="form-check-label ">Resequedad vaginal</label>
            </div>
            <div class="col-md-12">
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
  
      
      </form>
 
 
  </div>
</div>


@push('js')

<script>
 $(function() {
    $('#dismonorrea').change(function() {
           if($('#dismonorrea').prop('checked') == true){  $('#dismonorrea_CL').collapse('show') }
      else if($('#dismonorrea').prop('checked') == false){  $('#dismonorrea_CL').collapse('hide') }
    });
    //-----------------------------------------------------------------------------------------------
    $('#bochornos').change(function() {
           if($('#bochornos').prop('checked') == true){  $('#bochornos_CL').collapse('show') }
      else if($('#bochornos').prop('checked') == false){  $('#bochornos_CL').collapse('hide') }
    });
    //-----------------------------------------------------------------------------------------------
    /*$('#sudoracion').change(function() {
           if($('#sudoracion').prop('checked') == true){  $('#sudoracion_CL').collapse('show') }
      else if($('#sudoracion').prop('checked') == false){  $('#sudoracion_CL').collapse('hide') }
    });*/
    //-----------------------------------------------------------------------------------------------
    $('#incontinencia').change(function() {
           if($('#incontinencia').prop('checked') == true){  $('#incontinencia_CL').collapse('show') }
      else if($('#incontinencia').prop('checked') == false){  $('#incontinencia_CL').collapse('hide') }
    });
    //-----------------------------------------------------------------------------------------------
    
     
 })
</script>


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
