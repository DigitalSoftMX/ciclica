  <div class="wizard-container">
    <div class="card card-wizard" data-color="rose" id="wizardProfile">
      <form id="myform" method="post" action="" autocomplete="off" class="form-horizontal">
        @csrf
        @method('post')
        <!-- Menu----- -->
        <input name="id_paciente" id="id_paciente" type="hidden" value="{{ $paciente }}">


<div class="card-body p-0">
          <h5 class="title-ciclica">Colposcopia</h5>
  <div class="form-row p-4">
     <div class="col-md-12">
           <label for="" class="col-form-label col-form-label-sm mb-1">Antecedente de importancia</label>
            </br>
            <div class="col-md-6">
              <label for="" class="col-form-label col-form-label-sm mb-1">Ant. Obstetricos</label>
              <input class="form-control form-control-sm" type="text" placeholder="" name="">
            </div>
            <div class="col-md-6 mb-2">
              <label for="" class="col-form-label col-form-label-sm mb-1">Fecha Ultima Menstruacion</label>
              <input class="form-control form-control-sm" type="date" placeholder="" name="">
            </div>
            <div class="col-md-6 mb-2">
              <label for="" class="col-form-label col-form-label-sm mb-1">Uso hormonales</label>
              <input class="form-control form-control-sm" type="text" placeholder="" name="">
            </div>
            <div class="col-md-6 mb-2">
              <label for="" class="col-form-label col-form-label-sm mb-1">Citología cervical previa</label>
              <input class="form-control form-control-sm" type="text" placeholder="" name="">
            </div>

            <div class="card-header" id="headingThree">
                  <h2 class="mb-0">
                    <a class="btn btn-link btn-block text-left collapsed p-0" type="button" data-toggle="collapse" data-target="#collapse1" aria-expanded="false" aria-controls="collapseThree">
                      <i class="fas fa-plus mr-2"></i>CERVIX
                    </a>
                  </h2>
            </div>

                <div id="collapse1" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
                  <div class="row">
                      <div class="col-md-4 mb-2">
                        <label for="" class="col-form-label col-form-label-sm mb-1">Volumen</label>
                        <select class="form-control form-control-sm" id="exampleFormControlSelect1" name="#">
                          <option>Eutrófico </option>
                          <option>Hipotrófico </option>
                          <option>Atrófico </option>
                          <option>Auscencia Quirurgica </option>
                        </select>
                      </div>
                      <div class="col-md-4 mb-2">
                        <label for="" class="col-form-label col-form-label-sm mb-1">Zona Transformacion</label>
                        <select class="form-control form-control-sm" id="exampleFormControlSelect1" name="#">
                          <option>Tipo 1 </option>
                          <option>Tipo II </option>
                          <option>Tipo III </option>
                          <option>No valorable </option>
                        </select>
                      </div>
                      <div class="col-md-4 mb-2">
                        <label for="" class="col-form-label col-form-label-sm mb-1">Estudio de Colposcopia</label>
                        <select class="form-control form-control-sm" id="exampleFormControlSelect1" name="#">
                          <option>Satisfactoria </option>
                          <option>No Satisfactoria </option>
                        </select>
                      </div>
                      <div class="col-md-4 mb-2">
                        <label for="" class="col-form-label col-form-label-sm mb-1">Eversion Glandular</label>
                        <select class="form-control form-control-sm" id="exampleFormControlSelect1" name="#">
                          <option>Pequeña </option>
                          <option>Moderada </option>
                          <option>Grande </option>
                        </select>
                      </div>
                       <div class="col-md-4 mb-2">
                        <label for="" class="col-form-label col-form-label-sm mb-1">Atrofia Epitelial</label>
                        <select class="form-control form-control-sm" id="exampleFormControlSelect1" name="#">
                          <option>Ausente </option>
                          <option>Leve </option>
                          <option>Moderada </option>
                          <option>Severa </option>
                        </select>
                       </div>
                       <div class="col-md-4 mb-2">
                        <br>
                         <label for="inlineCheckbox1" class="form-check-label ml-1">Quistes de Naboth</label>
                           <select class="form-control form-control-sm" id="exampleFormControlSelect1" name="#">
                          <option>Presente </option>
                          <option>Ausente </option>
                        </select>
                       </div>
                       <div class="col-md-4 mb-2">
                         <label for="inlineCheckbox1" class="form-check-label ml-1 col-form-label-sm">Tumoracion</label>
                          <select class="form-control form-control-sm" id="exampleFormControlSelect1" name="#">
                          <option>Presente </option>
                          <option>Ausente </option>
                        </select>
                       </div>
                   </div>   

                    <div class="row">
                       <div class="col-md-12 mb-2">
                      <label for="inlineCheckbox1" class="form-check-label pl-0 col-form-label-sm col-12 mb-1">A la aplicación de acido acético al 5% se observa:</label>
                     </div>
                      <div class="col-md-4 mb-2">
                        <br>
                         <label for="inlineCheckbox1" class="form-check-label ml-1">Epitelio Acetoblanco</label>
                        <select class="form-control form-control-sm" id="exampleFormControlSelect1" name="#">
                          <option>Presente </option>
                          <option>Ausente </option>
                        </select>
                      </div>
                      <div class="col-md-4 mb-2">
                        <label for="" class="col-form-label col-form-label-sm mb-1">Borde</label>
                        <select class="form-control form-control-sm" id="exampleFormControlSelect1" name="#">
                          <option>Definidos Con Relieve</option>
                          <option>Definidos Sin Relieve</option>
                          <option>Difuso Con Relieve</option>
                          <option>Difuso Sin Relieve </option>
                        </select>
                      </div>
                      <div class="col-md-4 mb-2">
                        <label for="" class="col-form-label col-form-label-sm mb-1">Mosaico</label>
                        <select class="form-control form-control-sm" id="exampleFormControlSelect1" name="#">
                          <option>Fino </option>
                          <option>Grueso </option>
                        </select>
                      </div>
                      <div class="col-md-4 mb-2">
                        <label for="" class="col-form-label col-form-label-sm mb-1">Superficie</label>
                        <select class="form-control form-control-sm" id="exampleFormControlSelect1" name="#">
                          <option>Lisa con puntilleo fino</option>
                          <option>Lisa con puntilleo grueso</option>
                          <option>Micro Papilar con puntilleo fino</option>
                          <option>Micro Papilar con puntilleo fino</option>
                        </select>
                      </div>
                      <div class="col-md-4 mb-2">
                        <label for="" class="col-form-label col-form-label-sm mb-1">Vasos Sanguíneos</label>
                        <select class="form-control form-control-sm" id="exampleFormControlSelect1" name="#">
                          <option>Presente </option>
                          <option>Ausente </option>
                        </select>      
                      </div>
                    </div>
                    <div class="col-md-4 mb-2">
                        <label for="" class="col-form-label col-form-label-sm mb-1">Test de Shiller (Lugol)</label>
                        <select class="form-control form-control-sm" id="exampleFormControlSelect1" name="#">
                          <option>Yodo Positivo homogéneo </option>
                          <option>Yodo negativo con zonas hipocaptantes </option>
                        </select>
                         <input type="text" class="form-control mt-2 form-control-sm" id="formGroupExampleInput2" placeholder="" name="">
                    </div>
                </div>

               <div class="card-header" id="headingThree">
                  <h2 class="mb-0">
                    <a class="btn btn-link btn-block text-left collapsed p-0" type="button" data-toggle="collapse" data-target="#collapse3" aria-expanded="false" aria-controls="collapseThree">
                      <i class="fas fa-plus mr-2"></i>VAGINOSCOPIA
                    </a>
                  </h2>
               </div>

                <div id="collapse3" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
                  <div class="row">
                    <div class="col-4">
                    <input class="" type="checkbox" data-toggle="toggle" data-size="sm" data-style="ios" name="leucorrea" id="leucorrea" data-on="SI" data-off="No">
                    <label for="inlineCheckbox1" class="form-check-label col-form-label-sm">Leucorrea</label>
                     <div class="collapse" id="leucorrea_CL">
                     <input type="text" class="form-control mt-2 form-control-sm" id="formGroupExampleInput2" placeholder="" name="">
                     </div>
                    </div>

                    <div class="col-4">
                    <input class="" type="checkbox" data-toggle="toggle" data-size="sm" data-style="ios" name="epitelio" id="epitelio" data-on="SI" data-off="No">
                    <label for="inlineCheckbox1" class="form-check-label col-form-label-sm">Epitelio Acetoblanco</label>
                     <div class="collapse" id="epitelio_CL">
                     <input type="text" class="form-control mt-2 form-control-sm" id="formGroupExampleInput2" placeholder="" name="">
                     </div>
                    </div>

                      <div class="col-md-4 mb-2">
                        <label for="" class="col-form-label col-form-label-sm mb-1">Captación de lugol</label>
                        <select class="form-control form-control-sm" id="exampleFormControlSelect1" name="#">
                          <option>Yodo Positivo homogéneo </option>
                          <option>Yodo negativo con zonas hipocaptantes </option>
                        </select>
                         <input type="text" class="form-control mt-2 form-control-sm" id="formGroupExampleInput2" placeholder="" name="">
                      </div>
                      <div class="col-md-6 mb-2">
                        <label for="" class="col-form-label col-form-label-sm">VULVOSCOPIA</label>
                        <textarea class="form-control form-control-sm" id="exampleFormControlTextarea1" rows="5" name=""></textarea>
                      </div>
                      <div class="col-md-6 mb-2">
                        <label for="" class="col-form-label col-form-label-sm">DIAGNOSTICO COLPOSCÓPICO</label>
                        <textarea class="form-control form-control-sm" id="exampleFormControlTextarea1" rows="5" name=""></textarea>
                      </div>
                   </div>   
                </div>
                
                <button type="submit" class="btn btn-primary" align="left">Guardar</button>
              
              
            </div>
          </div>
        </div>

        
      </form>
    </div>
  </div>

  @push('js')

  <script>
 $(function() {
    $('#leucorrea').change(function() {
      if($('#leucorrea').prop('checked') == true){  $('#leucorrea_CL').collapse('show') }
      else if($('#leucorrea').prop('checked') == false){  $('#leucorrea_CL').collapse('hide') }
    });
    //-----------------------------------------------------------------------------------------------
    $('#epitelio').change(function() {
      if($('#epitelio').prop('checked') == true){  $('#epitelio_CL').collapse('show') }
      else if($('#epitelio').prop('checked') == false){  $('#epitelio_CL').collapse('hide') }
    });
    //-----------------------------------------------------------------------------------------------
    $('#anx2_IUE').change(function() {
      if($('#anx2_IUE').prop('checked') == true){  $('#anx2_IUE_CL').collapse('show') }
      else if($('#anx2_IUE').prop('checked') == false){  $('#anx2_IUE_CL').collapse('hide') }
    });
    //-----------------------------------------------------------------------------------------------
    $('#anx2_ReflejosPe').change(function() {
      if($('#anx2_ReflejosPe').prop('checked') == true){  $('#anx2_ReflejosPe_CL').collapse('show') }
      else if($('#anx2_ReflejosPe').prop('checked') == false){  $('#anx2_ReflejosPe_CL').collapse('hide') }
    });
    //-----------------------------------------------------------------------------------------------
      $('#anx2_PTV').change(function() {
      if($('#anx2_PTV').prop('checked') == true){  $('#anx2_PTV_CL').collapse('show') }
      else if($('#anx2_PTV').prop('checked') == false){  $('#anx2_PTV_CL').collapse('hide') }
    });
    //-----------------------------------------------------------------------------------------------
       $('#anx2_AtroVagi').change(function() {
      if($('#anx2_AtroVagi').prop('checked') == true){  $('#anx2_AtroVagi_CL').collapse('show') }
      else if($('#anx2_AtroVagi').prop('checked') == false){  $('#anx2_AtroVagi_CL').collapse('hide') }
    });
   
     
 })
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