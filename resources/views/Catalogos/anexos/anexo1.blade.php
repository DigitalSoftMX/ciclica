
  <div class="wizard-container">   
    <div class="card card-wizard" data-color="rose" id="wizardProfile">
      <form id="myform" method="post" action="{{url('procesoanexo1/add') }}" autocomplete="off" class="form-horizontal">
        @csrf
          @method('post')              
  <!-- Menu----- -->   
         <input name="id_paciente" id="id_paciente" type="hidden" value="{{ $paciente }}">
    
            <div class="wizard-navigation">
              <ul class="nav nav-pills">
                <li class="nav-item">
                  <a class="nav-link active show" data-toggle="tab" href="#link1" role="tablist">
                    Heredo familiares
                  </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" data-toggle="tab" href="#link2" role="tablist">
                    Personales no patologicos
                  </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" data-toggle="tab" href="#link3" role="tablist">
                    Personales patologicos
                  </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" data-toggle="tab" href="#link4" role="tablist">
                    Gineco-obstetros
                  </a>
                </li>
              </ul>
            </div>
<!--Menu --------->

  <div class="card-body">
    <div class="tab-content">
         
  <!-- primer metodo del panel-------------------------------------------------------------------->
            <div class="tab-pane active" id="link1">
               
            <div class="form-row p-3 mb-3">

                  <div class="col-4">
                    <input class="" type="checkbox" data-toggle="toggle" data-size="sm" data-style="ios" name="anx1_hiperSN" id="anx1_hiperSN" data-on="SI" data-off="No" >
                    <label for="inlineCheckbox1" class="form-check-label ml-2 col-form-label-sm">Hipertensión</label>
                    <div class="collapse" id="anx1_hiper">
                    <select class="form-control mt-2" name="anx1_hiper">
                      <option>Familiar</option>
                      <option>Padre</option>
                      <option>Madre</option>
                      <option>Hermano</option>
                      <option>Otro</option>
                    </select>
                    </div>
                  </div>
                  <div class="col-8">
                    <input class="" type="checkbox" data-toggle="toggle" data-size="sm" data-style="ios" name="anx1_cancerSN" id="anx1_cancerSN" data-on="SI" data-off="No">
                    <label for="inlineCheckbox1" class="form-check-label col-form-label-sm">Cáncer</label>
                  </div>
                  <div class="col-12 collapse" id="anx1_cancer">
                  <div class="col-12">
                    <label for="inlineCheckbox1" class="form-check-label col-form-label-sm">Ginecológico</label>
                    <div class="form-row">
                      <div class="col">
                        <input type="text" class="form-control mt-2 form-control-sm" id="prue" placeholder="" name="">
                      </div>
                      <div class="col">
                        <input type="text" class="form-control mt-2 form-control-sm" id="formGroupExampleInput2" placeholder="Edad de aparición" name="">
                      </div>
                    </div>
                  </div>
                  <div class="col-12">
                    <label for="inlineCheckbox1" class="form-check-label col-form-label-sm">Otros</label>
                    <div class="form-row">
                      <div class="col">
                        <input type="text" class="form-control mt-2 form-control-sm" id="formGroupExampleInput2" placeholder="" name="">
                      </div>
                      <div class="col">
                        <input type="text" class="form-control mt-2 form-control-sm" id="formGroupExampleInput2" placeholder="Edad de aparición" name="">
                      </div>
                    </div>
                  </div>
                  </div>
                  <div class="col-4 mt-3">
                    <input class="" type="checkbox" data-toggle="toggle" data-size="sm" data-style="ios" name="anx1_diabetesSN" id="anx1_diabetesSN" data-on="SI" data-off="No">
                    <label for="inlineCheckbox1" class="form-check-label col-form-label-sm">Diabetes mellitus</label>
                     <div class="collapse" id="anx1_diabetes">
                        <select class="form-control mt-2 form-control-sm" id="exampleFormControlSelect1" name="anx1_diabetes">
                          <option>Familiar</option>
                          <option>Padre</option>
                          <option>Madre</option>
                          <option>Hermano</option>
                          <option>Otro</option>
                        </select>
                      </div>
                  </div>
                  <div class="col-4 mt-3">
                    <input class="" type="checkbox" data-toggle="toggle" data-size="sm" data-style="ios" name="anx1_patoTiroSN" id="anx1_patoTiroSN" data-on="SI" data-off="No">
                    <label for="inlineCheckbox1" class="form-check-label col-form-label-sm">Patología Tiroidea</label>
                    <div class="collapse" id="anx1_patoTiro">
                         <select class="form-control mt-2 form-control-sm" id="exampleFormControlSelect1" name="anx1_patoTiro">
                          <option>Familiar</option>
                          <option>Padre</option>
                          <option>Madre</option>
                          <option>Hermano</option>
                          <option>Otro</option>
                        </select>
                    </div>
                  </div>
                  <div class="col-4 mt-3">
                    <input class="" type="checkbox" data-toggle="toggle" data-size="sm" data-style="ios" name="anx1_otros2" id="anx1_otros2" data-on="SI" data-off="No">
                    <label for="inlineCheckbox1" class="form-check-label col-form-label-sm">Otros</label>
                     <div class="collapse" id="anx1_otros2SN">
                       <input type="text" class="form-control form-control-sm" id="formGroupExampleInput2" placeholder="" name="anx1_otros2">
                      </div>
                  </div>
                </div>
               
            </div>
  <!-- segundo metodo del panel------------------------------------------------------------------->
            <div class="tab-pane" id="link2">
             <div class="form-row p-3 mb-3">
                  <div class="col-4 mb-3">
                    <label for="inlineCheckbox1" class="form-check-label ml-2 col-form-label-sm">Tipo de Sangre</label>
                    <div class="input-group  input-group-sm">
                      <div class="input-group-prepend mt-2">
                        <div class="input-group-text">
                          <i class="fas fa-tint text-danger"></i>
                        </div>
                      </div>
                      
                      <select class="form-control mt-2 mb-3" id="" name="anx1_TipoSangre">
                        <option>Seleccione</option>
                        <option>O+</option>
                        <option>O-</option>
                        <option>A+</option>
                        <option>A-</option>
                        <option>AB+</option>
                        <option>AB-</option>
                      </select>

                    </div>
                  </div>
                  <div class="col-4">
                    <input class="" type="checkbox" data-toggle="toggle" data-size="sm" data-style="ios" name="anx1_ejerSN" id="anx1_ejerSN" data-on="SI" data-off="No">
                    <label for="inlineCheckbox1" class="form-check-label col-form-label-sm">Ejercicio</label>
                     <div class="collapse" id="anx1_ejer">
                    <input type="text" class="form-control mt-2 form-control-sm" id="formGroupExampleInput2" placeholder="" name="anx1_ejer">
                    <select class="form-control mt-2" id="" name="">
                        <option>día</option>
                        <option>semana</option>
                        <option>mes</option>
                        <option>trimestre</option>
                        <option>año</option>
                      </select>
                    </div>
                  </div>
                  <div class="col-4">
                    <input class="" type="checkbox" data-toggle="toggle" data-size="sm" data-style="ios" name="anx1_tabaquimoSN" id="anx1_tabaquimoSN" data-on="SI" data-off="No">
                    <label for="inlineCheckbox1" class="form-check-label col-form-label-sm">Tabaquismo</label>
                     <div class="collapse" id="anx1_tabaquimo">
                       <input type="text" class="form-control mt-2 form-control-sm" id="formGroupExampleInput2" placeholder="" name="anx1_tabaquimo">
                      <select class="form-control mt-2" id="" name="">
                        <option>día</option>
                        <option>semana</option>
                        <option>mes</option>
                        <option>trimestre</option>
                        <option>año</option>
                      </select>
                     </div>
                  </div>
                  <div class="col-4">
                    <input class="" type="checkbox" data-toggle="toggle" data-size="sm" data-style="ios" name="anx1_alcoholSN" id="anx1_alcoholSN" data-on="SI" data-off="No">
                    <label for="inlineCheckbox1" class="form-check-label col-form-label-sm">Alcoholismo</label>
                     <div class="collapse" id="anx1_alcohol">
                    <input type="text" class="form-control mt-2 form-control-sm" id="formGroupExampleInput2" placeholder="" name="anx1_alcohol">
                    <select class="form-control mt-2" id="" name="">
                        <option>día</option>
                        <option>semana</option>
                        <option>mes</option>
                        <option>trimestre</option>
                        <option>año</option>
                    </select>
                  </div>
                  </div>
                  <div class="col-4">
                    <input class="" type="checkbox" data-toggle="toggle" data-size="sm" data-style="ios" name="anx1_drogasSN" id="anx1_drogasSN" data-on="SI" data-off="No">
                    <label for="inlineCheckbox1" class="form-check-label col-form-label-sm">Drogas</label>
                     <div class="collapse" id="anx1_drogas">
                    <input type="text" class="form-control mt-2 form-control-sm" id="formGroupExampleInput2" placeholder="" name="anx1_drogas">
                    <select class="form-control mt-2" id="" name="">
                        <option>día</option>
                        <option>semana</option>
                        <option>mes</option>
                        <option>trimestre</option>
                        <option>año</option>
                    </select>
                  </div>
                  </div>
                  <div class="col-4">
                    <input class="" type="checkbox" data-toggle="toggle" data-size="sm" data-style="ios" name="anx1_extreSN" id="anx1_extreSN" data-on="SI" data-off="No">
                    <label for="inlineCheckbox1" class="form-check-label col-form-label-sm">Estreñimiento</label>
                     <div class="collapse" id="anx1_extre">
                    <input type="text" class="form-control mt-2 form-control-sm" id="formGroupExampleInput2" placeholder="" name="anx1_extre">
                    <select class="form-control mt-2" id="" name="">
                        <option>día</option>
                        <option>semana</option>
                        <option>mes</option>
                        <option>trimestre</option>
                        <option>año</option>
                    </select>
                  </div>
                  </div>
                </div>
               
            </div>
 <!-- tercer metodo del panel-------------------------------------------------------------------->
            <div class="tab-pane" id="link3">
              <div class="form-row p-3 mb-3">
                  <div class="col-12">
                    <label for="inlineCheckbox1" class="form-check-label col-form-label-sm">Alergias</label>
                    <input type="text" class="form-control mt-2 form-control-sm" id="formGroupExampleInput2" placeholder="Descripción corta" name="anx1_alergias">
                  </div>
                  <div class="col-4">
                    <input class="" type="checkbox" data-toggle="toggle" data-size="sm" data-style="ios" name="anx1_cirugiaSN" id="anx1_cirugiaSN" data-on="SI" data-off="No">
                    <label for="inlineCheckbox1" class="form-check-label col-form-label-sm">Cirugías</label>
                     <div class="collapse" id="anx1_cirugia">
                    <input type="text" class="form-control mt-2 form-control-sm" id="formGroupExampleInput2" placeholder="Descripción corta" name="anx1_cirugia">
                  </div>
                  </div>
                  <div class="col-4">
                    <input class="" type="checkbox" data-toggle="toggle" data-size="sm" data-style="ios"  name="anx1_transSN" id="anx1_transSN" data-on="SI" data-off="No">
                    <label for="inlineCheckbox1" class="form-check-label col-form-label-sm">Transfusionales</label>
                     <div class="collapse" id="anx1_trans">
                    <input type="text" class="form-control mt-2 form-control-sm" id="formGroupExampleInput2" placeholder="" name="anx1_trans">
                  </div>
                  </div>
                  <div class="col-4 mb-3">
                    <input class="" type="checkbox" data-toggle="toggle" data-size="sm" data-style="ios" name="anx1_infecciosaSN" id="anx1_infecciosaSN" data-on="SI" data-off="No">
                    <label for="inlineCheckbox1" class="form-check-label col-form-label-sm">Infecciosas</label>
                     <div class="collapse" id="anx1_infecciosa">
                    <input type="text" class="form-control mt-2 form-control-sm" id="formGroupExampleInput2" placeholder="" name="anx1_infecciosa">
                  </div>
                  </div>
                  <div class="col-4">
                    <input class="" type="checkbox" data-toggle="toggle" data-size="sm" data-style="ios" name="anx1_CroDegeSN" id="anx1_CroDegeSN" data-on="SI" data-off="No">
                    <label for="inlineCheckbox1" class="form-check-label col-form-label-sm">Crónico degenerativas</label>
                     <div class="collapse" id="anx1_CroDege">
                    <input type="text" class="form-control mt-2 form-control-sm" id="formGroupExampleInput2" placeholder="" name="anx1_CroDege">
                  </div>
                  </div>
                  <div class="col-4">
                    <input class="" type="checkbox" data-toggle="toggle" data-size="sm" data-style="ios" name="anx1_traumaSN" id="anx1_traumaSN" data-on="SI" data-off="No">
                    <label for="inlineCheckbox1" class="form-check-label col-form-label-sm">Traumatismos</label>
                     <div class="collapse" id="anx1_trauma">
                    <input type="text" class="form-control mt-2 form-control-sm" id="formGroupExampleInput2" placeholder="" name="anx1_trauma">
                  </div>
                  </div>
                  <div class="col-4">
                    <input class="" type="checkbox" data-toggle="toggle" data-size="sm" data-style="ios" name="anx1_gine2SN" id="anx1_gine2SN" data-on="SI" data-off="No">
                    <label for="inlineCheckbox1" class="form-check-label col-form-label-sm">Ginecológicos</label>
                     <div class="collapse" id="anx1_gine2">
                    <input type="text" class="form-control mt-2 form-control-sm" id="formGroupExampleInput2" placeholder="" name="anx1_gine2">
                  </div>
                  </div>
                </div>

            </div>
  <!-- cuarto metodo del panel------------------------------------------------------------------->
            <div class="tab-pane" id="link4">
              <div class="form-row p-3 mb-3">
                  <div class="col-3 mb-2">
                    <label for="" class="col-form-label col-form-label-sm">Menarca</label>
                    <input class="form-control form-control-sm" type="text" placeholder="" name="anx1_menarca">
                  </div>
                  <div class="col-md-3 mb-2">
                    <label for="" class="col-form-label col-form-label-sm">Ritmo</label>
                    <input class="form-control form-control-sm" type="text" placeholder="" name="anx1_ritmo">
                  </div>
                  <div class="col-md-3 mb-2">
                    <label for="" class="col-form-label col-form-label-sm">Cantidad</label>
                    <select class="form-control form-control-sm" id="" name="anx1_cantidad">
                      <option>Escaso</option>
                      <option>Normal</option>
                      <option>Abundante</option>
                    </select>
                  </div>
                  <div class="col-md-3 mb-2">
                    <label for="" class="col-form-label col-form-label-sm"><span class="mr-2" id="valortoallas"></span> Toallas por día</label>
                    <input type="range" class="custom-range mt-1" min="0" max="15" id="toallasxdia" name="anx1_toalla">
                  </div>
                  <div class="col-md-3 mb-2">
                    <label for="" class="col-form-label col-form-label-sm">Dolor</label>
                    <select class="form-control form-control-sm" id="" name="anx1_dolor">
                      <option>Leve</option>
                      <option>Moderado</option>
                      <option>Severo</option>
                    </select>
                  </div>
                  <div class="col-md-9 mb-2">
                    <label for="" class="col-form-label col-form-label-sm">Tratamiento</label>
                    <input class="form-control form-control-sm" type="text" placeholder="Descripción del tratamiento" name="anx1_tratamiento">
                  </div>
                  <div class="col-md-4 mb-2">
                    <label for="" class="col-form-label col-form-label-sm">FUM</label>
                    <input class="form-control form-control-sm" type="text" placeholder="Fecha" name="anx1_fum">
                  </div>
                  <div class="col-md-4 mb-2">
                    <label for="" class="col-form-label col-form-label-sm">IVSA</label>
                    <input class="form-control form-control-sm" type="text" placeholder="" name="anx1_ivisa">
                  </div>
                  <div class="col-md-2 mb-2">
                    <label for="" class="col-form-label col-form-label-sm">Parejas</label>
                    <input class="form-control form-control-sm" type="number" placeholder="#" name="anx1_parejas">
                  </div>
                  <div class="col-md-2 mb-2">
                    <label for="" class="col-form-label col-form-label-sm">MPF</label>
                    <select class="form-control form-control-sm" id="" name="anx1_mpf">
                      <option>Actual</option>
                      <option>Previos</option>
                    </select>
                  </div>

                  <div class="col-md-2 mb-2">
                    <label for="" class="col-form-label col-form-label-sm">Gestas</label>
                    <input class="form-control form-control-sm" type="number" placeholder="#" name="anx1_gestas">
                  </div>
                  <div class="col-md-2 mb-2">
                    <label for="" class="col-form-label col-form-label-sm">Cesáreas</label>
                    <input class="form-control form-control-sm" type="number" placeholder="#" name="anx1_cesareas">
                  </div>
                  <div class="col-md-2 mb-2">
                    <label for="" class="col-form-label col-form-label-sm">Partos</label>
                    <input class="form-control form-control-sm" type="number" placeholder="#" name="anx1_partos">
                  </div>
                  <div class="col-md-3 mb-2">
                    <label for="" class="col-form-label col-form-label-sm">Abortos</label>
                    <input class="form-control form-control-sm" type="number" placeholder="#" name="anx1_abortos">
                  </div>
                  <div class="col-3 mb-4">
                    <label for="" class="col-form-label col-form-label-sm">Ectópicos</label>
                    <input class="form-control form-control-sm" type="number" placeholder="#" name="anx1_ectopicos">
                  </div>

                  <div id="accordion" class="col-12 mb-4">
                    <div class="card">
                      <div class="card-header p-0" id="head-g1">
                        <h5 class="mb-0">
                          <a class="btn btn-link" data-toggle="collapse" data-target="#g1-coll" aria-expanded="true" aria-controls="collapseOne">
                            <i class="fas fa-plus mr-2"></i>G1
                          </a>
                        </h5>
                      </div>

                      <div id="g1-coll" class="collapse" aria-labelledby="head-g1" data-parent="#accordion">
                        <div class="card-body">
                          <div class="form-row">
                            <div class="col-md-3 mb-2">
                              <label for="" class="col-form-label col-form-label-sm">Año</label>
                              <input class="form-control form-control-sm" type="text" placeholder="Ejem: 1994" name="anx1_g1_año">
                            </div>
                            <div class="col-md-3 mb-2">
                              <label for="" class="col-form-label col-form-label-sm">Edad Maternal</label>
                              <input class="form-control form-control-sm" type="number" placeholder="años" name="anx1_g1_edadmat" min="1" max="90">
                            </div>
                            <div class="col-md-3 mb-2">
                              <label for="" class="col-form-label col-form-label-sm">Duración de embarazo</label>
                              <input class="form-control form-control-sm" type="number" placeholder="sem" name="anx1_g1_durembara" min="1" max="42" >
                            </div>
                            <div class="col-md-3 mb-2">
                              <label for="" class="col-form-label col-form-label-sm">Sexo</label>
                              <select class="form-control form-control-sm" id="" name="anx1_g1_sexo">
                                <option>Femenino</option>
                                <option>Masculino</option>
                              </select>
                            </div>
                            <div class="col-md-3 mb-2">
                              <label for="" class="col-form-label col-form-label-sm">Peso</label>
                              <input class="form-control form-control-sm" type="number" placeholder="gr" name="anx1_g1_peso" min="1" max="10000">
                            </div>
                            <div class="col-md-3 mb-2">
                              <br>
                              <input class="" type="checkbox" data-toggle="toggle" data-size="sm" data-style="ios" data-on="SI" data-off="No" name="anx1_g1_vivo">
                              <label for="" class="col-form-label">Vivo y sano</label>
                            </div>
                            <div class="col-md-3 mb-2">
                              <label for="" class="col-form-label col-form-label-sm">Resol.</label>
                              <select class="form-control form-control-sm" id="" name="anx1_g1_resol">
                                <option>Parto</option>
                                <option>Cesarea</option>
                                <option>Forceps</option>
                                <option>Aborto</option>
                              </select>
                            </div>
                            <div class="col-md-3 mb-2">
                              <br>
                              <input class="" type="checkbox" data-toggle="toggle" data-size="xs" data-style="ios" data-on="Si" data-off="No" name="comp" id="comp">
                              <label for="" class="col-form-label col-form-label-sm pl-0">Comp</label>
                             <div class="collapse" id="comp_CL">
                              <input class="form-control form-control-sm" type="number" placeholder="Meses" name="anx1_g1_comp">
                             </div>
                            </div>
                            <div class="col-md-3">
                              <label for="" class="col-form-label col-form-label-sm">Lactancia</label>
                              <input class="form-control form-control-sm" type="number" placeholder="# meses" name="anx1_g1_lactancia" min="1" max="12">
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>

                    <div class="card">
                      <div class="card-header p-0" id="head-g2">
                        <h5 class="mb-0">
                          <a class="btn btn-link" data-toggle="collapse" data-target="#g2-coll" aria-expanded="true" aria-controls="collapseOne">
                            <i class="fas fa-plus mr-2"></i>G2
                          </a>
                        </h5>
                      </div>

                      <div id="g2-coll" class="collapse" aria-labelledby="head-g2" data-parent="#accordion">
                        <div class="card-body">
                          <div class="form-row">
                            <div class="col-md-3 mb-2">
                              <label for="" class="col-form-label col-form-label-sm">Año</label>
                              <input class="form-control form-control-sm" type="text" placeholder="Ejem: 1994" name="anx1_g2_año">
                            </div>
                            <div class="col-md-3 mb-2">
                              <label for="" class="col-form-label col-form-label-sm">Edad Maternal</label>
                              <input class="form-control form-control-sm" type="number" placeholder="años" name="anx1_g2_edadmat" min="1" max="90">
                            </div>
                            <div class="col-md-3 mb-2">
                              <label for="" class="col-form-label col-form-label-sm">Duración de embarazo</label>
                              <input class="form-control form-control-sm" type="number" placeholder="1 a 42 sem" name="anx1_g2_durembara">
                            </div>
                            <div class="col-md-3 mb-2">
                              <label for="" class="col-form-label col-form-label-sm">Sexo</label>
                              <select class="form-control form-control-sm" id="" name="anx1_g2_sexo">
                                <option>Femenino</option>
                                <option>Masculino</option>
                              </select>
                            </div>
                            <div class="col-md-3 mb-2">
                              <label for="" class="col-form-label col-form-label-sm">Peso</label>
                              <input class="form-control form-control-sm" type="number" placeholder="gr" name="anx1_g2_peso" min="1" max="10000">
                            </div>
                            <div class="col-md-3 mb-2">
                              <br>
                              <input class="" type="checkbox" data-toggle="toggle" data-size="sm" data-style="ios" data-on="SI" data-off="No" name="anx1_g1_vivo">
                              <label for="" class="col-form-label">Vivo y sano</label>
                            </div>
                            <div class="col-md-3 mb-2">
                              <label for="" class="col-form-label col-form-label-sm">Resol.</label>
                              <select class="form-control form-control-sm" id="" name="anx1_g2_resol">
                                <option>Parto</option>
                                <option>Cesarea</option>
                                <option>Forceps</option>
                                <option>Aborto</option>
                              </select>
                            </div>
                            <div class="col-md-3 mb-2">
                              <br>
                              <input class="" type="checkbox" data-toggle="toggle" data-size="xs" data-style="ios" data-on="Si" data-off="No" name="compg2" id="compg2">
                              <label for="" class="col-form-label col-form-label-sm pl-0">Comp</label>
                             <div class="collapse" id="compg2_CL">
                              <input class="form-control form-control-sm" type="number" placeholder="Meses" name="anx1_g2_comp">
                             </div>
                            </div>
                            <div class="col-md-3">
                              <label for="" class="col-form-label col-form-label-sm">Lactancia</label>
                              <input class="form-control form-control-sm" type="number" placeholder="# meses" name="anx1_g2_lactancia" min="1" max="12">
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="card">
                      <div class="card-header p-0" id="head-g3">
                        <h5 class="mb-0">
                          <a class="btn btn-link" data-toggle="collapse" data-target="#g3-coll" aria-expanded="true" aria-controls="collapseOne">
                            <i class="fas fa-plus mr-2"></i>G3
                          </a>
                        </h5>
                      </div>

                      <div id="g3-coll" class="collapse" aria-labelledby="head-g3" data-parent="#accordion">
                        <div class="card-body">
                          <div class="form-row">
                            <div class="col-md-3 mb-2">
                              <label for="" class="col-form-label col-form-label-sm">Año</label>
                              <input class="form-control form-control-sm" type="text" placeholder="Ejem: 1994" name="anx1_g3_año">
                            </div>
                            <div class="col-md-3 mb-2">
                              <label for="" class="col-form-label col-form-label-sm">Edad Maternal</label>
                              <input class="form-control form-control-sm" type="number" placeholder="años" name="anx1_g3_edadmat" min="1" max="90">
                            </div>
                            <div class="col-md-3 mb-2">
                              <label for="" class="col-form-label col-form-label-sm">Duración de embarazo</label>
                              <input class="form-control form-control-sm" type="number" placeholder="1 a 42 sem" name="anx1_g3_durembara">
                            </div>
                            <div class="col-md-3 mb-2">
                              <label for="" class="col-form-label col-form-label-sm">Sexo</label>
                              <select class="form-control form-control-sm" id="" name="anx1_g3_sexo">
                                <option>Femenino</option>
                                <option>Masculino</option>
                              </select>
                            </div>
                            <div class="col-md-3 mb-2">
                              <label for="" class="col-form-label col-form-label-sm">Peso</label>
                              <input class="form-control form-control-sm" type="number" placeholder="gr" name="anx1_g3_peso" min="1" max="10000">
                            </div>
                            <div class="col-md-3 mb-2">
                              <br>
                              <input class="" type="checkbox" data-toggle="toggle" data-size="sm" data-style="ios" data-on="SI" data-off="No" name="anx1_g1_vivo">
                              <label for="" class="col-form-label">Vivo y sano</label>
                            </div>
                            <div class="col-md-3 mb-2">
                              <label for="" class="col-form-label col-form-label-sm">Resol.</label>
                              <select class="form-control form-control-sm" id="" name="anx1_g3_resol">
                                <option>Parto</option>
                                <option>Cesarea</option>
                                <option>Forceps</option>
                                <option>Aborto</option>
                              </select>
                            </div>
                            <div class="col-md-3 mb-2">
                              <br>
                              <input class="" type="checkbox" data-toggle="toggle" data-size="xs" data-style="ios" data-on="Si" data-off="No" name="compg3" id="compg3">
                              <label for="" class="col-form-label col-form-label-sm pl-0">Comp</label>
                             <div class="collapse" id="compg3_CL">
                              <input class="form-control form-control-sm" type="number" placeholder="Meses" name="anx1_g3_comp">
                             </div>
                            </div>
                            <div class="col-md-3">
                              <label for="" class="col-form-label col-form-label-sm">Lactancia</label>
                              <input class="form-control form-control-sm" type="number" placeholder="# meses" name="anx1_g3_lactancia" min="1" max="12">
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="card">
                      <div class="card-header p-0" id="head-g4">
                        <h5 class="mb-0">
                          <a class="btn btn-link" data-toggle="collapse" data-target="#g4-coll" aria-expanded="true" aria-controls="collapseOne">
                            <i class="fas fa-plus mr-2"></i>G4
                          </a>
                        </h5>
                      </div>

                      <div id="g4-coll" class="collapse" aria-labelledby="head-g4" data-parent="#accordion">
                        <div class="card-body">
                          <div class="form-row">
                            <div class="col-md-3 mb-2">
                              <label for="" class="col-form-label col-form-label-sm">Año</label>
                              <input class="form-control form-control-sm" type="text" placeholder="Ejem: 1994" name="anx1_g4_año">
                            </div>
                            <div class="col-md-3 mb-2">
                              <label for="" class="col-form-label col-form-label-sm">Edad Maternal</label>
                              <input class="form-control form-control-sm" type="number" placeholder="años" name="anx1_g4_edadmat" min="1" max="90">
                            </div>
                            <div class="col-md-3 mb-2">
                              <label for="" class="col-form-label col-form-label-sm">Duración de embarazo</label>
                              <input class="form-control form-control-sm" type="number" placeholder="1 a 42 sem" name="anx1_g4_durembara">
                            </div>
                            <div class="col-md-3 mb-2">
                              <label for="" class="col-form-label col-form-label-sm">Sexo</label>
                              <select class="form-control form-control-sm" id="" name="anx1_g4_sexo">
                                <option>Femenino</option>
                                <option>Masculino</option>
                              </select>
                            </div>
                            <div class="col-md-3 mb-2">
                              <label for="" class="col-form-label col-form-label-sm">Peso</label>
                              <input class="form-control form-control-sm" type="number" placeholder="gr" name="anx1_g4_peso" min="1" max="10000">
                            </div>
                            <div class="col-md-3 mb-2">
                              <br>
                              <input class="" type="checkbox" data-toggle="toggle" data-size="sm" data-style="ios" data-on="SI" data-off="No" name="anx1_g1_vivo">
                              <label for="" class="col-form-label">Vivo y sano</label>
                            </div>
                            <div class="col-md-3 mb-2">
                              <label for="" class="col-form-label col-form-label-sm">Resol.</label>
                              <select class="form-control form-control-sm" id="" name="anx1_g4_resol">
                                <option>Parto</option>
                                <option>Cesarea</option>
                                <option>Forceps</option>
                                <option>Aborto</option>
                              </select>
                            </div>
                            <div class="col-md-3 mb-2">
                              <br>
                              <input class="" type="checkbox" data-toggle="toggle" data-size="xs" data-style="ios" data-on="Si" data-off="No" name="compg4" id="compg4">
                              <label for="" class="col-form-label col-form-label-sm pl-0">Comp</label>
                             <div class="collapse" id="compg4_CL">
                              <input class="form-control form-control-sm" type="number" placeholder="Meses" name="anx1_g4_comp">
                             </div>
                            </div>
                            <div class="col-md-3">
                              <label for="" class="col-form-label col-form-label-sm">Lactancia</label>
                              <input class="form-control form-control-sm" type="number" placeholder="# meses" name="anx1_g4_lactancia" min="1" max="12">
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    </div>

                  <div class="col-md-2 mb-2">
                    <label for="" class="col-form-label col-form-label-sm">Citología cervical</label>
                    <input class="form-control form-control-sm" type="number" placeholder="" name="anx1_cervical" min="1" max="100000">
                  </div>
                  <div class="col-md-2 mb-2">
                    <label for="" class="col-form-label col-form-label-sm">Autoexploración</label>
                    <input class="form-control form-control-sm" type="number" placeholder="" name="anx1_autoexp" min="1" max="100000">
                  </div>
                  <div class="col-md-2 mb-2">
                    <label for="" class="col-form-label col-form-label-sm">USG</label>
                    <input class="form-control form-control-sm" type="number" placeholder="" name="anx1_usg" min="1" max="100000">
                  </div>
                  <div class="col-md-2 mb-2">
                    <label for="" class="col-form-label col-form-label-sm">Mastografía</label>
                    <input class="form-control form-control-sm" type="number" placeholder="" name="anx1_mastogra" min="1" max="100000">
                  </div>
                  <div class="col-md-2 mb-2">
                    <label for="" class="col-form-label col-form-label-sm">Menopausia</label>
                    <input class="form-control form-control-sm" type="number" placeholder="edad" name="anx1_menopausia" min="1" max="100">
                  </div>
                  <div class="col-md-12 mb-4">
                    <input class="" type="checkbox" data-toggle="toggle" data-size="sm" data-style="ios" name="anx1_infertiSN" id="anx1_infertiSN" data-on="SI" data-off="No">
                    <label for="" class="col-form-label col-form-label-sm">Antecedentes de infertilidad</label>
                    <div class="collapse" id="anx1_inferti_CL">
                    <input class="form-control form-control-sm" type="number" placeholder="" name="anx1_inferti" min="1" max="100000">
                    </div>
                  </div>                 
                  <div class="col-md-12 mb-4">
                   <div class="col-md-12 mb-2">
                    <label for="" class="col-form-label col-form-label-sm">Esquema de Vacunación VPH</label>
                    <input class="" type="checkbox" data-toggle="toggle" data-size="sm" data-style="ios" data-on="SI" data-off="No" name="">
                    </div>
                     <div class="collapse" id="anx1_inferti_CL">
                     <div class="col-md-3 mb-2">
                    <label for="" class="col-form-label col-form-label-sm">Año</label>
                    <input class="form-control form-control-sm" type="date" placeholder="" name="" >
                    </div>
                    <div class="col-md-3 mb-2">
                    <label for="" class="col-form-label col-form-label-sm">No. Dosis</label>
                    <input class="form-control form-control-sm" type="number" placeholder="" name="" min="1" max="100">
                    </div>
                    </div>
                  </div>
                           
                  
                

                  <div id="accordion2" class="col-12 mb-4">
                    <div class="card">
                      <div class="card-header p-0" id="head-trata">
                        <h5 class="mb-0">
                          <a class="btn btn-link" data-toggle="collapse" data-target="#trata-form" aria-expanded="true" aria-controls="collapseOne">
                            <i class="fas fa-plus mr-2"></i>Tratamiento
                          </a>
                        </h5>
                      </div>
                      <div id="trata-form" class="collapse" aria-labelledby="head-trata" data-parent="#accordion2">
                        <div class="card-body">
                          <div class="form-row">
                            <div class="col-md-6 mb-2">
                              <label for="" class="col-form-label col-form-label-sm">Padecimiento actual</label>
                              <textarea class="form-control form-control-sm" id="exampleFormControlTextarea1" rows="5" name="anx1_pActual"></textarea>
                            </div>
                            <div class="col-md-6 mb-2">
                              <label for="" class="col-form-label col-form-label-sm">Exploracion física</label>
                              <textarea class="form-control form-control-sm" id="exampleFormControlTextarea1" rows="5" name="anx1_impresionD"></textarea>
                            </div>
                            <div class="col-md-6 mb-2">
                              <label for="" class="col-form-label col-form-label-sm">Gabinete y laboratorio</label>
                              <textarea class="form-control form-control-sm" id="exampleFormControlTextarea1" rows="5" placeholder="Estudios de gabinete y laboratorio " name="anx1_EGL"></textarea>
                            </div>
                            <div class="col-md-6 mb-2">
                              <label for="" class="col-form-label col-form-label-sm">Impresión diagnostica</label>
                              <textarea class="form-control form-control-sm" id="exampleFormControlTextarea1" rows="5" name="anx1_impresionD"></textarea>
                            </div>
                            <div class="col-md-6 mb-2">
                              <label for="" class="col-form-label col-form-label-sm">Tratamiento</label>
                              <textarea class="form-control form-control-sm" id="exampleFormControlTextarea1" rows="5" name="anx1_tratamiento1"></textarea>
                            </div>
                            <div class="col-md-6 mb-2">
                              <label for="" class="col-form-label col-form-label-sm">Plan médico</label>
                              <textarea class="form-control form-control-sm" id="exampleFormControlTextarea1" rows="5" name="anx1_Pmedico" ></textarea>
                            </div>
                            <hr>
                            <h6 class="col-md-12 m-0 mt-3 color-text-1">Pronóstico</h6>
                            <div class="col-md-6 mb-2">
                              <label for="" class="col-form-label col-form-label-sm">Para la vida</label>
                              <select class="form-control form-control-sm" id="" name="anx1_pronos">
                                <option>Bueno</option>
                                <option>Reservado</option>
                                <option>Malo</option>
                              </select>
                            </div>
                            <div class="col-md-6 mb-2">
                              <label for="" class="col-form-label col-form-label-sm">Para la función</label>
                              <select class="form-control form-control-sm" id="" name="anx1_fun">
                                <option>Bueno</option>
                                <option>Reservado</option>
                                <option>Malo</option>
                              </select>
                            </div>

                          </div>
                        </div>
                      </div>
                    </div>
                    
                        <div class="card-footer">
                            <div class="card-footer ml-auto mr-auto">
                                <button type="input" class="btn btn-rose">{{ __('Guardar ') }}
                            </div>
                          <div class="clearfix"></div>
                        </div>
            
                  </div>
                  
                  
                </div>
            </div>
            
<!--  Fin seccion 4 ------------------------>
       </div>
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
    $('#comp').change(function() {
           if($('#comp').prop('checked') == true){  $('#comp_CL').collapse('show') }
      else if($('#comp').prop('checked') == false){  $('#comp_CL').collapse('hide') }
    });
    $('#compg2').change(function() {
           if($('#compg2').prop('checked') == true){  $('#compg2_CL').collapse('show') }
      else if($('#compg2').prop('checked') == false){  $('#compg2_CL').collapse('hide') }
    });
    $('#compg3').change(function() {
           if($('#compg3').prop('checked') == true){  $('#compg3_CL').collapse('show') }
      else if($('#compg3').prop('checked') == false){  $('#compg3_CL').collapse('hide') }
    });
    $('#compg4').change(function() {
           if($('#compg4').prop('checked') == true){  $('#compg4_CL').collapse('show') }
      else if($('#compg4').prop('checked') == false){  $('#compg4_CL').collapse('hide') }
    });
    $('#anx1_infertiSN').change(function() {
           if($('#anx1_infertiSN').prop('checked') == true){  $('#anx1_inferti_CL').collapse('show') }
      else if($('#anx1_infertiSN').prop('checked') == false){  $('#anx1_inferti_CL').collapse('hide') }
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
