  <div class="wizard-container">
    <div class="card card-wizard" data-color="rose" id="wizardProfile">
      <form id="myform" method="post" action="{{url('procesoanexo2/add') }}" autocomplete="off" class="form-horizontal">
        @csrf
        @method('post')
        <!-- Menu----- -->
        <input name="id_paciente" id="id_paciente" type="hidden" value="{{ $paciente }}">

        <div class="wizard-navigation">
              <ul class="nav nav-pills">
                <li class="nav-item">
                  <a class="nav-link active show" data-toggle="tab" href="#link1" role="tablist">
                    Uroginecología
                  </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" data-toggle="tab" href="#link2" role="tablist">
                    Colposcopia
                  </a>
                </li>
              </ul>
            </div>

<div class="card-body">
    <div class="tab-content">
         
  <!-- primer metodo del panel-------------------------------------------------------------------->
            <div class="tab-pane active" id="link1">
  
<div class="card-body p-0">
     <!--     <h5 class="title-ciclica">Uroginecología</h5>-->
  <div class="form-row p-5">
     <div class="col-md-12 mb-2">
           <label for="" class="col-form-label col-form-label-sm mb-1">Interrogatorio</label>
            </br>
             <label for="" class="col-form-label col-form-label-sm mb-1">Nictámero</label>
            <div class="col-md-6 mb-2">
              <label for="" class="col-form-label col-form-label-sm mb-1">Consumo de líquidos por día (lts)</label>
              <input class="form-control form-control-sm" type="number" placeholder="LTS" name="anx2_consumo_lt">
            </div>
            <div class="col-md-12 mb-2">
              <input class="" type="checkbox" data-toggle="toggle" data-size="sm" data-style="ios" name="anx2_urina_urgen_1" id="anx2_urina_urgen_1" data-on="PRESENTE" data-off="AUSENTE">

              <div class="collapse" id="anx2_urina_urgen_1_CL">
              <label for="inlineCheckbox1" class="form-check-label ml-2 col-form-label-sm">Incontinencia urinaria de urgencia</label>
              <div class="form-row mt-1 p-0">
                <div class="form-group col-md-4">
                  <input class="form-control form-control-sm" type="text" placeholder="Tiempo de evolución" name="anx2_TiempoE">
                </div>
                <div class="form-group col-md-4">
                  <input class="form-control form-control-sm" type="text" placeholder="Frecuencia" name="anx2_Frecuencia">
                </div>
                <div class="form-group col-md-4">
                  <input class="form-control form-control-sm" type="text" placeholder="Cantidad pérdida" name="anx2_Cantidadp">
                </div>
               </div>
              </div>
            </div>
            <div class="col-md-12 mb-2">
              <input class="" type="checkbox" data-toggle="toggle" data-size="sm" data-style="ios" name="anx2_IUE" id="anx2_IUE" data-on="PRESENTE" data-off="AUSENTE">
              <div class="collapse" id="anx2_IUE_CL">
              <label for="inlineCheckbox1" class="form-check-label ml-2 col-form-label-sm">Incontinencia urinaria de esfuerzo</label>
              <div class="form-row mt-1 p-0">
                <div class="form-group col-md-4">
                  <input class="form-control form-control-sm" type="text" placeholder="Tiempo de evolución" name="anx2_TiempoE2">
                </div>
                <div class="form-group col-md-4">
                  <input class="form-control form-control-sm" type="text" placeholder="Frecuencia" name="anx2_Frecuencia2">
                </div>
                <div class="form-group col-md-4">
                  <input class="form-control form-control-sm" type="text" placeholder="Cantidad pérdida" name="anx2_Cantidadp2">
                </div>
              </div>
             </div>
            </div>
            <div class="row">
            <div class="col-md-6 mb-2">
              <label for="" class="col-form-label col-form-label-sm mb-1">Chorro miccional</label>
              <select class="form-control form-control-sm" id="exampleFormControlSelect1" name="anx2_CMiccional">
                <option>Completo</option>
                <option>Incompleto</option>
              </select>
            </div>
            <div class="col-md-6 mb-2">
              <label for="" class="col-form-label col-form-label-sm mb-1">Sensación de vaciamiento</label>
              <select class="form-control form-control-sm" id="exampleFormControlSelect1" name="anx2_SVaciamiento">
                <option>Completo</option>
                <option>Incompleto</option>
              </select>
            </div>
            </div>

            <div class="accordion col-md-12" id="accordionExample">
              <div class="row">
                      <div class="col-md-4 mb-2">
                        <input class="" type="checkbox" data-toggle="toggle" data-size="sm" data-style="ios" name="anx2_Disuria" data-on="SI" data-off="No">
                        <label for="inlineCheckbox1" class="form-check-label ml-2 col-form-label-sm">Disuria</label>
                      </div>
                      <div class="col-md-4 mb-2">
                        <input class="" type="checkbox" data-toggle="toggle" data-size="sm" data-style="ios" name="anx2_Hematuria" data-on="SI" data-off="No">
                        <label for="inlineCheckbox1" class="form-check-label ml-2 col-form-label-sm">Hematuria</label>
                      </div>
                      <div class="col-md-4 mb-2">
                        <input class="" type="checkbox" data-toggle="toggle" data-size="sm" data-style="ios" name="anx2_VSA" data-on="SI" data-off="No">
                        <label for="inlineCheckbox1" class="form-check-label ml-2 col-form-label-sm">Vida Sexual Activa</label>
                      </div>
                      <div class="col-md-4 mb-2">
                        <input class="" type="checkbox" data-toggle="toggle" data-size="sm" data-style="ios" name="anx2_Rvaginal" data-on="SI" data-off="No">
                        <label for="inlineCheckbox1" class="form-check-label ml-2 col-form-label-sm">Resequedad vaginal </label>
                      </div>
                      <div class="col-md-4 mb-2">
                        <input class="" type="checkbox" data-toggle="toggle" data-size="sm" data-style="ios" name="anx2_ardor" data-on="SI" data-off="No">
                        <label for="inlineCheckbox1" class="form-check-label ml-2 col-form-label-sm">Ardor</label>
                      </div>
                      <div class="col-md-4 mb-2">
                        <input class="" type="checkbox" data-toggle="toggle" data-size="sm" data-style="ios" name="anx2_prurito" data-on="SI" data-off="No">
                        <label for="inlineCheckbox1" class="form-check-label ml-2 col-form-label-sm">Prurito</label>
                      </div>
                      <div class="col-md-4 mb-2">
                        <input class="" type="checkbox" data-toggle="toggle" data-size="sm" data-style="ios" name="anx2_estre" data-on="SI" data-off="No">
                        <label for="inlineCheckbox1" class="form-check-label ml-2 col-form-label-sm">Estreñimiento</label>
                      </div>
                      <div class="col-md-4 mb-2">
                        <input class="" type="checkbox" data-toggle="toggle" data-size="sm" data-style="ios" name="anx2_Claxantes" data-on="SI" data-off="No">
                        <label for="inlineCheckbox1" class="form-check-label ml-2 col-form-label-sm">Consumo de laxantes</label>
                      </div>
                      <div class="col-md-4 mb-2">
                        <label for="inlineCheckbox1" class="form-check-label ml-2 col-form-label-sm">Evacuaciones al día</label>
                        <input class="form-control form-control-sm mt-2" type="number" placeholder="#" name="anx2_evacuacion">
                      </div>
                      <div class="col-md-4 mb-2">
                        <input class="" type="checkbox" data-toggle="toggle" data-size="sm" data-style="ios" name="anx2_IFH" data-on="SI" data-off="No">
                        <label for="inlineCheckbox1" class="form-check-label ml-2 col-form-label-sm">Icontinencia a flatos o heces</label>
                      </div>
                      <div class="col-md-4 mb-2">
                        <input class="" type="checkbox" data-toggle="toggle" data-size="sm" data-style="ios" name="anx2_SCE" data-on="SI" data-off="No">
                        <label for="inlineCheckbox1" class="form-check-label ml-2 col-form-label-sm">Sensación de cuerpo extraño</label>
                      </div>
                      <div class="col-md-4 mb-2">
                        <input class="" type="checkbox" data-toggle="toggle" data-size="sm" data-style="ios" name="anx2_pene_orga" data-on="SI" data-off="No">
                        <label for="inlineCheckbox1" class="form-check-label ml-2 col-form-label-sm">Icontinencia durante penetración u orgasmo</label>
                      </div>
                      <div class="col-md-4 mb-2">
                        <label for="" class="col-form-label col-form-label-sm mb-1">Dispareunia</label>
                        <select class="form-control form-control-sm" id="exampleFormControlSelect1" name="anx2_dispa">
                          <option>Superficial</option>
                          <option>Profunda</option>
                        </select>
                      </div>
                      
                  </div>
            </div>

                <div class="card-header" id="headingThree">
                  <h2 class="mb-0">
                    <a class="btn btn-link btn-block text-left collapsed p-0" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                      <i class="fas fa-plus mr-2"></i>Exploración Física
                    </a>
                  </h2>
                </div>

                <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
                  <div class="row">
                      <div class="col-md-6 mb-2">
                        <input class="" type="checkbox" data-toggle="toggle" data-width="100" data-height="75" data-style="ios" name="anx2_ReflejosPe" id="anx2_ReflejosPe" data-on="PRESENTE" data-off="AUSENTE">
                        <label for="" class="col-form-label col-form-label-sm mb-1">Reflejos perineales</label>
                        <div class="collapse" id="anx2_ReflejosPe_CL">
                        <select class="form-control form-control-sm" id="exampleFormControlSelect1" name="#">
                          <option>Normales </option>
                          <option>Disminuidos </option>
                        </select>
                       </div>
                      </div>
                      <div class="col-md-6 mb-2">
                        <input class="" type="checkbox" data-toggle="toggle" data-width="100" data-height="75" data-style="ios" name="anx2_PTV" id="anx2_PTV" data-on="LLENA" data-off="VACIA">
                        <label for="" class="col-form-label col-form-label-sm mb-1">Prueba de la tos con vejiga</label>
                        <select class="form-control form-control-sm" id="exampleFormControlSelect1" name="#">
                          <option>Positivas </option>
                          <option>Negativas </option>
                        </select>
                      </div>
                      <div class="col-md-6 mb-2">
                        <input class="" type="checkbox" data-toggle="toggle" data-width="100" data-height="75" data-style="ios" name="anx2_AtroVagi" id="anx2_AtroVagi" data-on="PRESENTE" data-off="AUSENTE">
                        <label for="" class="col-form-label col-form-label-sm mb-1">Atrofia Vaginal</label>
                        <div class="collapse" id="anx2_AtroVagi_CL">
                        <select class="form-control form-control-sm" id="exampleFormControlSelect1" name="#">
                          <option>Leve </option>
                          <option>Moderada </option>
                          <option>Severa </option>
                        </select>
                       </div>
                      </div>
                      <div class="col-md-12 mb-2">
                        <label for="" class="col-form-label col-form-label-sm">Notas</label>
                        <textarea class="form-control form-control-sm" id="exampleFormControlTextarea1" rows="3" name="anx2_notas"></textarea>
                      </div>
                   </div>   
                </div>
                
                <button type="submit" class="btn btn-primary" align="left">Guardar</button>
              
              
            </div>
          </div>
        </div>

           </div>
      </form>
  <!-- segundo metodo del panel------------------------------------------------------------------->
            <div class="tab-pane" id="link2">
             <div class="form-row p-4">
     <div class="col-md-12">
           <label for="" class="col-form-label col-form-label-sm mb-1">Antecedente de importancia</label>
            </br>
    </div>
            <div class="col-md-6">
              <label for="" class="col-form-label col-form-label-sm mb-1">Ant. Obstetricos</label>
              <input class="form-control form-control-sm" type="text" placeholder="" name="">
            </div>
            <div class="col-md-6">
              <label for="" class="col-form-label col-form-label-sm mb-1">Fecha Ultima Menstruacion</label>
              <input class="form-control form-control-sm" type="date" placeholder="" name="">
            </div>
            <div class="col-md-6">
              <label for="" class="col-form-label col-form-label-sm mb-1">Uso hormonales</label>
              <input class="form-control form-control-sm" type="text" placeholder="" name="">
            </div>
            <div class="col-md-6">
              <label for="" class="col-form-label col-form-label-sm mb-1">Citología cervical previa</label>
              <input class="form-control form-control-sm" type="text" placeholder="" name="">
            </div>

          <div class="col-md-12">
            <div class="card-header" id="headingThree">
                  <h2 class="mb-0">
                    <a class="btn btn-link btn-block text-left collapsed p-0" type="button" data-toggle="collapse" data-target="#collapse1" aria-expanded="false" aria-controls="collapseThree">
                      <i class="fas fa-plus mr-2"></i>CERVIX
                    </a>
                  </h2>
            </div>
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
                    <div class="col-md-4 mb-2">
                        <label for="" class="col-form-label col-form-label-sm mb-1">Test de Shiller (Lugol)</label>
                        <select class="form-control form-control-sm" id="exampleFormControlSelect1" name="#">
                          <option>Yodo Positivo homogéneo </option>
                          <option>Yodo negativo con zonas hipocaptantes </option>
                        </select>
                         <input type="text" class="form-control mt-2 form-control-sm" id="formGroupExampleInput2" placeholder="" name="">
                    </div>
                     </div>
                </div>

            <div class="col-md-12">
               <div class="card-header" id="headingThree">
                  <h2 class="mb-0">
                    <a class="btn btn-link btn-block text-left collapsed p-0" type="button" data-toggle="collapse" data-target="#collapse3" aria-expanded="false" aria-controls="collapseThree">
                      <i class="fas fa-plus mr-2"></i>VAGINOSCOPIA
                    </a>
                  </h2>
               </div>
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

      </form>
            </div>
 
    </div>
  </div>
 </div>
</div>

  @push('js')

  <script>
 $(function() {
    $('#anx2_urina_urgen_1').change(function() {
      if($('#anx2_urina_urgen_1').prop('checked') == true){  $('#anx2_urina_urgen_1_CL').collapse('show') }
      else if($('#anx2_urina_urgen_1').prop('checked') == false){  $('#anx2_urina_urgen_1_CL').collapse('hide') }
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