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

           
            <div class="col-4">
                    <input class="" type="checkbox" data-toggle="toggle" data-size="sm" data-style="ios" name="anx1_hiperSN" id="anx1_hiperSN" data-on="SI" data-off="No" >
                    <label for="inlineCheckbox1" class="form-check-label ml-2 col-form-label-sm">Dismenorrea</label>
                    <div class="collapse" id="anx1_hiper">
                    <select class="form-control mt-2" name="anx1_hiper">
                       <option>Leve</option>
                       <option>Moderado</option>
                       <option>Severo</option>
                    </select>
                    </div>
                  </div>

            <div class="col-md-4 mb-2">
              <label for="inlineCheckbox1" class="form-check-label pl-0 col-form-label-sm col-12 mb-1">Caída del cabello</label>
              <input class="" type="checkbox" data-toggle="toggle" data-size="sm" data-style="ios" data-on="SI" data-off="No">
            </div>
            <div class="col-md-4 mb-2">
              <label for="inlineCheckbox1" class="form-check-label pl-0 col-form-label-sm col-12 mb-1">Resequedad de piel</label>
              <input class="" type="checkbox" data-toggle="toggle" data-size="sm" data-style="ios" data-on="SI" data-off="No">
            </div>
             
             <div class="col-4 mt-3">
                    <input class="" type="checkbox" data-toggle="toggle" data-size="sm" data-style="ios" name="anx1_diabetesSN" id="anx1_diabetesSN" data-on="SI" data-off="No">
                    <label for="inlineCheckbox1" class="form-check-label col-form-label-sm">Bochornos</label>
                     <div class="collapse" id="anx1_diabetes">
                        <select class="form-control mt-2 form-control-sm" id="exampleFormControlSelect1" name="anx1_diabetes">
                        <option>Leve</option>
                        <option>Moderado</option>
                        <option>Severo</option>
                      </select>
                      </div>
                  </div>
                  
                  <div class="col-4 mt-3">
                    <input class="" type="checkbox" data-toggle="toggle" data-size="sm" data-style="ios" name="anx1_patoTiroSN" id="anx1_patoTiroSN" data-on="SI" data-off="No">
                    <label for="inlineCheckbox1" class="form-check-label col-form-label-sm">Sudoración</label>
                    <div class="collapse" id="anx1_patoTiro">
                         <select class="form-control mt-2 form-control-sm" id="exampleFormControlSelect1" name="anx1_patoTiro">
                        <option>Leve</option>
                          <option>Moderado</option>
                          <option>Severo</option>
                          </select>
                    </div>
                  </div>
                  
            <div class="col-md-4 mb-2">
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
            
             <div class="col-4 mt-3">
                    <input class="" type="checkbox" data-toggle="toggle" data-size="sm" data-style="ios" name="anx1_ejerSN" id="anx1_ejerSN" data-on="SI" data-off="No">
                    <label for="inlineCheckbox1" class="form-check-label col-form-label-sm">Incontinencia urinaria</label>
                    <div class="collapse" id="anx1_ejer">
                         <select class="form-control mt-2 form-control-sm" id="exampleFormControlSelect1" name="anx1_ejer">
                        <option>Leve</option>
                        <option>Esfuerzo</option>
                        <option>Urgencia</option>
                          </select>
                    </div>
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
 $(function() {
    $('#anx1_hiperSN').change(function() {
           if($('#anx1_hiperSN').prop('checked') == true){  $('#anx1_hiper').collapse('show') }
      else if($('#anx1_hiperSN').prop('checked') == false){  $('#anx1_hiper').collapse('hide') }
    });
    //-----------------------------------------------------------------------------------------------
    $('#anx1_cancerSN').change(function() {
           if($('#anx1_cancerSN').prop('checked') == true){  $('#anx1_cancer').collapse('show') }
      else if($('#anx1_cancerSN').prop('checked') == false){  $('#anx1_cancer').collapse('hide') }
    });
    //-----------------------------------------------------------------------------------------------
    $('#anx1_diabetesSN').change(function() {
           if($('#anx1_diabetesSN').prop('checked') == true){  $('#anx1_diabetes').collapse('show') }
      else if($('#anx1_diabetesSN').prop('checked') == false){  $('#anx1_diabetes').collapse('hide') }
    });
    //-----------------------------------------------------------------------------------------------
    $('#anx1_patoTiroSN').change(function() {
           if($('#anx1_patoTiroSN').prop('checked') == true){  $('#anx1_patoTiro').collapse('show') }
      else if($('#anx1_patoTiroSN').prop('checked') == false){  $('#anx1_patoTiro').collapse('hide') }
    });
    //-----------------------------------------------------------------------------------------------
    $('#anx1_otros2').change(function() {
           if($('#anx1_otros2').prop('checked') == true){  $('#anx1_otros2SN').collapse('show') }
      else if($('#anx1_otros2').prop('checked') == false){  $('#anx1_otros2SN').collapse('hide') }
    });
    //-----------------------------------------------------------------------------------------------
    //SEGUNDO
    $('#anx1_ejerSN').change(function() {
           if($('#anx1_ejerSN').prop('checked') == true){  $('#anx1_ejer').collapse('show') }
      else if($('#anx1_ejerSN').prop('checked') == false){  $('#anx1_ejer').collapse('hide') }
    });
    $('#anx1_tabaquimoSN').change(function() {
           if($('#anx1_tabaquimoSN').prop('checked') == true){  $('#anx1_tabaquimo').collapse('show') }
      else if($('#anx1_tabaquimoSN').prop('checked') == false){  $('#anx1_tabaquimo').collapse('hide') }
    });
    $('#anx1_alcoholSN').change(function() {
           if($('#anx1_alcoholSN').prop('checked') == true){  $('#anx1_alcohol').collapse('show') }
      else if($('#anx1_alcoholSN').prop('checked') == false){  $('#anx1_alcohol').collapse('hide') }
    });
    $('#anx1_drogasSN').change(function() {
           if($('#anx1_drogasSN').prop('checked') == true){  $('#anx1_drogas').collapse('show') }
      else if($('#anx1_drogasSN').prop('checked') == false){  $('#anx1_drogas').collapse('hide') }
    });
    $('#anx1_extreSN').change(function() {
           if($('#anx1_extreSN').prop('checked') == true){  $('#anx1_extre').collapse('show') }
      else if($('#anx1_extreSN').prop('checked') == false){  $('#anx1_extre').collapse('hide') }
    });
      //-----------------------------------------------------------------------------------------------
    //TERCERO
    $('#anx1_cirugiaSN').change(function() {
           if($('#anx1_cirugiaSN').prop('checked') == true){  $('#anx1_cirugia').collapse('show') }
      else if($('#anx1_cirugiaSN').prop('checked') == false){  $('#anx1_cirugia').collapse('hide') }
    });
    $('#anx1_transSN').change(function() {
           if($('#anx1_transSN').prop('checked') == true){  $('#anx1_trans').collapse('show') }
      else if($('#anx1_transSN').prop('checked') == false){  $('#anx1_trans').collapse('hide') }
    });
    $('#anx1_CroDegeSN').change(function() {
           if($('#anx1_CroDegeSN').prop('checked') == true){  $('#anx1_CroDege').collapse('show') }
      else if($('#anx1_CroDegeSN').prop('checked') == false){  $('#anx1_CroDege').collapse('hide') }
    });
    $('#anx1_infecciosaSN').change(function() {
           if($('#anx1_infecciosaSN').prop('checked') == true){  $('#anx1_infecciosa').collapse('show') }
      else if($('#anx1_infecciosaSN').prop('checked') == false){  $('#anx1_infecciosa').collapse('hide') }
    });
    $('#anx1_traumaSN').change(function() {
           if($('#anx1_traumaSN').prop('checked') == true){  $('#anx1_trauma').collapse('show') }
      else if($('#anx1_traumaSN').prop('checked') == false){  $('#anx1_trauma').collapse('hide') }
    });
    $('#anx1_gine2SN').change(function() {
           if($('#anx1_gine2SN').prop('checked') == true){  $('#anx1_gine2').collapse('show') }
      else if($('#anx1_gine2SN').prop('checked') == false){  $('#anx1_gine2').collapse('hide') }
    });
     
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
