  <div class="wizard-container">
    <div class="card card-wizard" data-color="rose" id="wizardProfile">
      <form id="myform" method="post" action="{{url('procesoanexo2/add') }}" autocomplete="off" class="form-horizontal">
        @csrf
        @method('post')
        <!-- Menu----- -->
        <input name="id_paciente" id="id_paciente" type="hidden" value="{{ $paciente }}">


<div class="card-body p-0">
          <h5 class="title-ciclica">Uroginecología</h5>
          <div class="form-row p-5">
            <div class="col-md-6 mb-2">
              <label for="" class="col-form-label col-form-label-sm mb-1">Nictámero</label>
           <!--   <input class="form-control form-control-sm" type="text" placeholder="Frecuencia urinaria">-->
            </div>
            <div class="col-md-6 mb-2">
              <label for="" class="col-form-label col-form-label-sm mb-1">Consumo de líquidos por día (lts)</label>
              <input class="form-control form-control-sm" type="number" placeholder="LTS" name="anx2_consumo_lt">
            </div>
            <div class="col-md-12 mb-2">
              <input class="" type="checkbox" data-toggle="toggle" data-size="sm" data-style="ios" name="anx2_urina_urgen_1" data-on="PRESENTE" data-off="AUSENTE">
              <label for="inlineCheckbox1" class="form-check-label ml-2 col-form-label-sm">Incontinencia urinaria de urgencia</label>
              <div class="form-row mt-1 p-0">
                <div class="form-group col-md-4">
                  <input class="form-control form-control-sm" type="text" placeholder="Tiempo de envolución" name="anx2_TiempoE">
                </div>
                <div class="form-group col-md-4">
                  <input class="form-control form-control-sm" type="text" placeholder="Frecuencia" name="anx2_Frecuencia">
                </div>
                <div class="form-group col-md-4">
                  <input class="form-control form-control-sm" type="text" placeholder="Cantidad pérdida" name="anx2_Cantidadp">
                </div>
              </div>
            </div>
            <div class="col-md-12 mb-2">
              <input class="" type="checkbox" data-toggle="toggle" data-size="sm" data-style="ios" name="anx2_IUE" data-on="PRESENTE" data-off="AUSENTE">
              <label for="inlineCheckbox1" class="form-check-label ml-2 col-form-label-sm">Incontinencia urinaria de esfuerzo</label>
              <div class="form-row mt-1 p-0">
                <div class="form-group col-md-4">
                  <input class="form-control form-control-sm" type="text" placeholder="Tiempo de envolución" name="anx2_TiempoE2">
                </div>
                <div class="form-group col-md-4">
                  <input class="form-control form-control-sm" type="text" placeholder="Frecuencia" name="anx2_Frecuencia2">
                </div>
                <div class="form-group col-md-4">
                  <input class="form-control form-control-sm" type="text" placeholder="Cantidad pérdida" name="anx2_Cantidadp2">
                </div>
              </div>
            </div>
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

            <div class="accordion col-md-12 mt-3" id="accordionExample">
              <div class="">
                <div class="card-header" id="headingOne">
                  <h2 class="mb-0">
                    <button class="btn btn-link btn-block text-left p-0" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                      <i class="fas fa-plus mr-2"></i>Interrogatorio
                    </button>
                  </h2>
                </div>
                <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
                  <div class="card-body">
                    <div class="form-row">
                      <div class="col-md-4 mb-2">
                        <input class="" type="checkbox" data-toggle="toggle" data-size="sm" data-style="ios" name="anx2_Disuria" data-on="SI" data-off="No">
                        <label for="inlineCheckbox1" class="form-check-label ml-2 col-form-label-sm">Disuria</label>
                      </div>
                      <div class="col-md-4 mb-2">
                        <input class="" type="checkbox" data-toggle="toggle" data-size="sm" data-style="ios" name="anx2_Hematuria" data-on="SI" data-off="No">
                        <label for="inlineCheckbox1" class="form-check-label ml-2 col-form-label-sm">Hematuria</label>
                      </div>
                      <div class="col-md-4 mb-2">
                        <input class="" type="checkbox" data-toggle="toggle" data-size="sm" data-style="ios" name="anx2_SCE" data-on="SI" data-off="No">
                        <label for="inlineCheckbox1" class="form-check-label ml-2 col-form-label-sm">Sensación de cuerpo extraño</label>
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
                        <input class="" type="checkbox" data-toggle="toggle" data-size="sm" data-style="ios" name="anx2_VSA" data-on="SI" data-off="No">
                        <label for="inlineCheckbox1" class="form-check-label ml-2 col-form-label-sm">Vida Sexual Activa</label>
                      </div>
                      <div class="col-md-3 mb-2">
                        <label for="" class="col-form-label col-form-label-sm mb-1">Dispareunia</label>
                        <select class="form-control form-control-sm" id="exampleFormControlSelect1" name="anx2_dispa">
                          <option>Superficial</option>
                          <option>Profunda</option>
                        </select>
                      </div>
                      <div class="col-md-9 mb-2">
                        <input class="" type="checkbox" data-toggle="toggle" data-size="sm" data-style="ios" name="anx2_pene_orga" data-on="SI" data-off="No">
                        <label for="inlineCheckbox1" class="form-check-label ml-2 col-form-label-sm">Icontinencia durante penetración u orgasmo</label>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="">
                <div class="card-header" id="headingThree">
                  <h2 class="mb-0">
                    <button class="btn btn-link btn-block text-left collapsed p-0" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                      <i class="fas fa-plus mr-2"></i>Exploración Física
                    </button>
                  </h2>
                </div>
                <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
                  <div class="card-body">
                    <div class="form-row">
                      <div class="col-md-4 mb-2">
                        <label for="" class="col-form-label col-form-label-sm mb-1">Reflejos perineales</label>
                        <select class="form-control form-control-sm" id="exampleFormControlSelect1" name="anx2_ReflejosPe">
                          <option>Presentes</option>
                          <option>Ausentes </option>
                          <option>Normales </option>
                          <option>Disminuidos </option>
                        </select>
                      </div>
                      <div class="col-md-4 mb-2">
                        <label for="" class="col-form-label col-form-label-sm mb-1">Prueba de la tos con vejiga</label>
                        <select class="form-control form-control-sm" id="exampleFormControlSelect1" name="anx2_PTV">
                          <option>LLenas</option>
                          <option>Vacias </option>
                          <option>Positivas </option>
                          <option>Negativas </option>
                        </select>
                      </div>
                      <div class="col-md-4 mb-2">
                        <label for="" class="col-form-label col-form-label-sm mb-1">Atrofia Vaginal</label>
                        <select class="form-control form-control-sm" id="exampleFormControlSelect1" name="anx2_AtroVagi">
                          <option>Presentes</option>
                          <option>Ausentes </option>
                          <option>Leve </option>
                          <option>Moderada </option>
                          <option>Severa </option>
                        </select>
                      </div>
                      <div class="col-md-12 mb-2">
                        <label for="" class="col-form-label col-form-label-sm">Notas</label>
                        <textarea class="form-control form-control-sm" id="exampleFormControlTextarea1" rows="3" name="anx2_notas"></textarea>
                      </div>
                     
                    </div>
                     
                  </div>
                </div>
                <button type="submit" class="btn btn-primary" align="left">Guardar</button>
              </div>
            </div>



          </div>
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