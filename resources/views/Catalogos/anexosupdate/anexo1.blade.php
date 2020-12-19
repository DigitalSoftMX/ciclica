
  <div class="wizard-container">   
    <div class="card card-wizard" data-color="rose" id="wizardProfile">
   @role('admin_master')
   <form id="myform" method="post" action="{{url('procesoanexo1/edit/$anexid') }}" autocomplete="off" class="form-horizontal">
        @csrf
          @method('post')
   @endrole
  <!-- Menu----- -->   
         <input name="id_paciente" id="id_paciente" type="hidden" value="{{ $paciente }}">
    
            <div class="wizard-navigation">
              <ul class="nav nav-pills">
                <li class="nav-item">
                  <a class="nav-link active show" data-toggle="tab" href="#link1" role="tablist">
                    Heredo Familiares
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
                    <input class="" type="checkbox" data-toggle="toggle" data-size="sm" data-style="ios" name="anx1_hiperSN" data-on="{{ $result[0]->anx1_hiperSN }}" data-off="{{ $result[0]->anx1_hiperSN }}" >
                    <label for="inlineCheckbox1" class="form-check-label ml-2 col-form-label-sm">Hipertención</label>
                    <select class="form-control mt-2 form-control-sm" id="exampleFormControlSelect1" name="anx1_hiper">
                      <option>{{ $result[0]->anx1_hiper }}</option>    
                      <option>Padre</option>
                      <option>Madre</option>
                      <option>Hermano</option>
                      <option>Otro</option>
                    </select>
                  </div>
                  <div class="col-8">
                    <input class="" type="checkbox" data-toggle="toggle" data-size="sm" data-style="ios" name="anx1_cancerSN" data-on="{{ $result[0]->anx1_cancerSN }}" data-off="{{ $result[0]->anx1_cancerSN }}" >
                    <label for="inlineCheckbox1" class="form-check-label col-form-label-sm">Cancer</label>
                    <div class="form-row">
                      <div class="col">
                        <select class="form-control mt-2 form-control-sm" id="exampleFormControlSelect1" name="anx1_cancer">
                          <option>{{ $result[0]->anx1_cancer }}</option>    
                          <option>Padre</option>
                          <option>Mandre</option>
                          <option>Hermano</option>
                          <option>Otro</option>
                        </select>
                      </div>
                      <div class="col">
                        <input type="text" class="form-control mt-2 form-control-sm" id="formGroupExampleInput2" placeholder="Edad de aparición" name="anx1_apari" value"{{ $result[0]->anx1_apari }}">
                      </div>
                    </div>
                  </div>
                  <div class="col-4 mt-3">
                    <input class="" type="checkbox" data-toggle="toggle" data-size="sm" data-style="ios" name="anx1_diabetesSN" data-on="{{ $result[0]->anx1_diabetesSN }}" data-off="{{ $result[0]->anx1_diabetesSN }}">
                    <label for="inlineCheckbox1" class="form-check-label col-form-label-sm">Diabetes mellitus</label>
                    <div class="form-row">
                      <div class="col">
                        <select class="form-control mt-2 form-control-sm" id="exampleFormControlSelect1" name="anx1_diabetes" >
                          <option>{{ $result[0]->anx1_diabetes }}</option>
                          <option>Familiar</option>
                          <option>Padre</option>
                          <option>Mandre</option>
                          <option>Hermano</option>
                          <option>Otro</option>
                        </select>
                      </div>
                    </div>
                  </div>
                  <div class="col-4 mt-3">
                    <input class="" type="checkbox" data-toggle="toggle" data-size="sm" data-style="ios" name="anx1_patoTiroSN" data-on="{{ $result[0]->anx1_patoTiroSN }}" data-off="{{ $result[0]->anx1_patoTiroSN }}">
                    <label for="inlineCheckbox1" class="form-check-label col-form-label-sm">Patologia Tiroidea</label>
                    <div class="form-row">
                      <div class="col">
                        <select class="form-control mt-2 form-control-sm" id="exampleFormControlSelect1" name="anx1_patoTiro">
                          <option>{{ $result[0]->anx1_patoTiro }}</option>
                          <option>Familiar</option>
                          <option>Padre</option>
                          <option>Mandre</option>
                          <option>Hermano</option>
                          <option>Otro</option>
                        </select>
                      </div>
                    </div>
                  </div>
                  <div class="col-4 mt-3">
                    <input class="" type="checkbox" data-toggle="toggle" data-size="sm" data-style="ios" name="anx1_otros2SN" data-on="{{ $result[0]->anx1_otros2SN }}" data-off="{{ $result[0]->anx1_otros2SN }}">
                    <label for="inlineCheckbox1" class="form-check-label col-form-label-sm">Otro</label>
                    <div class="form-row">
                      <div class="col">
                        <input type="text" class="form-control mt-2 form-control-sm" id="formGroupExampleInput2" placeholder="Especifique" name="anx1_otros2" value="{{ $result[0]->anx1_otros2 }}">
                      </div>
                    </div>
                  </div>
                </div>
               
            </div>
<!-- segundo metodo del panel--------------------------------------------------------------------->
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
                      <select class="form-control mt-2" id="" name="anx1_TipoSangre">
                        <option>{{ $result[0]->anx1_TipoSangre }}</option>
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
                    <input class="" type="checkbox" data-toggle="toggle" data-size="sm" data-style="ios" name="anx1_ejerSN" data-on="{{ $result[0]->anx1_ejerSN }}" data-off="{{ $result[0]->anx1_ejerSN }}">
                    <label for="inlineCheckbox1" class="form-check-label col-form-label-sm">Ejercicio</label>
                    <input type="text" class="form-control mt-2 form-control-sm" id="formGroupExampleInput2" placeholder="Frecuencia e inicio" name="anx1_ejer" value="{{ $result[0]->anx1_ejer }}">
                  </div>
                  <div class="col-4">
                    <input class="" type="checkbox" data-toggle="toggle" data-size="sm" data-style="ios" name="anx1_tabaquimoSN" data-on="{{ $result[0]->anx1_tabaquimoSN }}" data-off="{{ $result[0]->anx1_tabaquimoSN }}">
                    <label for="inlineCheckbox1" class="form-check-label col-form-label-sm">Tabaquismo</label>
                    <input type="text" class="form-control mt-2 form-control-sm" id="formGroupExampleInput2" placeholder="Frecuencia e inicio" name="anx1_tabaquimo" value="{{ $result[0]->anx1_tabaquimo }}">
                  </div>
                  <div class="col-4">
                    <input class="" type="checkbox" data-toggle="toggle" data-size="sm" data-style="ios" name="anx1_alcoholSN" data-on="{{ $result[0]->anx1_alcoholSN }}" data-off="{{ $result[0]->anx1_alcoholSN }}">
                    <label for="inlineCheckbox1" class="form-check-label col-form-label-sm">Alcoholismo</label>
                    <input type="text" class="form-control mt-2 form-control-sm" id="formGroupExampleInput2" placeholder="Frecuencia e inicio" name="anx1_alcohol" value="{{ $result[0]->anx1_alcohol }}">
                  </div>
                  <div class="col-4">
                    <input class="" type="checkbox" data-toggle="toggle" data-size="sm" data-style="ios" name="anx1_drogasSN" data-on="{{ $result[0]->anx1_drogasSN }}" data-off="{{ $result[0]->anx1_drogasSN }}">
                    <label for="inlineCheckbox1" class="form-check-label col-form-label-sm">Drogas</label>
                    <input type="text" class="form-control mt-2 form-control-sm" id="formGroupExampleInput2" placeholder="Frecuencia e inicio" name="anx1_drogas" value="{{ $result[0]->anx1_drogas }}">
                  </div>
                  <div class="col-4">
                    <input class="" type="checkbox" data-toggle="toggle" data-size="sm" data-style="ios" name="anx1_extreSN" data-on="{{ $result[0]->anx1_extreSN }}" data-off="{{ $result[0]->anx1_extreSN }}">
                    <label for="inlineCheckbox1" class="form-check-label col-form-label-sm">Estreñimiento</label>
                    <input type="text" class="form-control mt-2 form-control-sm" id="formGroupExampleInput2" placeholder="Frecuencia e inicio" name="anx1_extre" value="{{ $result[0]->anx1_extre }}">
                  </div>
                </div>
               
            </div>
 <!-- tercer metodo del panel-------------------------------------------------------------------->
            <div class="tab-pane" id="link3">
              <div class="form-row p-3 mb-3">
                  <div class="col-4">
                    <input class="" type="checkbox" data-toggle="toggle" data-size="sm" data-style="ios" name="anx1_cirugia" data-on="{{ $result[0]->anx1_cirugiaSN }}" data-off="{{ $result[0]->anx1_cirugiaSN }}">
                    <label for="inlineCheckbox1" class="form-check-label col-form-label-sm">Cirugias</label>
                    <input type="text" class="form-control mt-2 form-control-sm" id="formGroupExampleInput2" placeholder="Descripción corta" name="anx1_cirugia" value="{{ $result[0]->anx1_cirugia }}">
                  </div>
                  <div class="col-4">
                    <input class="" type="checkbox" data-toggle="toggle" data-size="sm" data-style="ios" name="anx1_transSN" data-on="{{ $result[0]->anx1_transSN }}" data-off="{{ $result[0]->anx1_transSN }}">
                    <label for="inlineCheckbox1" class="form-check-label col-form-label-sm">Transfusionales</label>
                    <input type="text" class="form-control mt-2 form-control-sm" id="formGroupExampleInput2" placeholder="Cuantas veces y hace cuanto ?" name="anx1_trans" value="{{ $result[0]->anx1_trans }}">
                  </div>
                  <div class="col-4 mb-3">
                    <input class="" type="checkbox" data-toggle="toggle" data-size="sm" data-style="ios" name="anx1_infecciosaSN" data-on="{{ $result[0]->anx1_infecciosaSN }}" data-off="{{ $result[0]->anx1_infecciosaSN }}">
                    <label for="inlineCheckbox1" class="form-check-label col-form-label-sm">Infeccionsas</label>
                    <input type="text" class="form-control mt-2 form-control-sm" id="formGroupExampleInput2" placeholder="Describalas" name="anx1_infecciosa" value="{{ $result[0]->anx1_infecciosa }}">
                  </div>
                  <div class="col-4">
                    <input class="" type="checkbox" data-toggle="toggle" data-size="sm" data-style="ios" name="anx1_CroDegeSN" data-on="{{ $result[0]->anx1_CroDegeSN }}" data-off="{{ $result[0]->anx1_CroDegeSN }}">
                    <label for="inlineCheckbox1" class="form-check-label col-form-label-sm">Cronico degenerativas</label>
                    <input type="text" class="form-control mt-2 form-control-sm" id="formGroupExampleInput2" placeholder="Describalas" name="anx1_CroDege" value="{{ $result[0]->anx1_CroDege }}">
                  </div>
                  <div class="col-4">
                    <input class="" type="checkbox" data-toggle="toggle" data-size="sm" data-style="ios" name="anx1_traumaSN" data-on="{{ $result[0]->anx1_traumaSN }}" data-off="{{ $result[0]->anx1_traumaSN }}">
                    <label for="inlineCheckbox1" class="form-check-label col-form-label-sm">Traumatismos</label>
                    <input type="text" class="form-control mt-2 form-control-sm" id="formGroupExampleInput2" placeholder="Describalas" name="anx1_trauma" value="{{ $result[0]->anx1_trauma }}">
                  </div>
                  <div class="col-4">
                    <input class="" type="checkbox" data-toggle="toggle" data-size="sm" data-style="ios" name="anx1_gine2SN" data-on="{{ $result[0]->anx1_gine2SN }}" data-off="{{ $result[0]->anx1_gine2SN }}">
                    <label for="inlineCheckbox1" class="form-check-label col-form-label-sm">Ginecológicos</label>
                    <input type="text" class="form-control mt-2 form-control-sm" id="formGroupExampleInput2" placeholder="Describalas" name="anx1_gine2" value="{{ $result[0]->anx1_gine2 }}">
                  </div>
                </div>

            </div>
  <!-- cuarto metodo del panel------------------------------------------------------------------->
            <div class="tab-pane" id="link4">
              <div class="form-row p-3 mb-3">
                  <div class="col-3 mb-2">
                    <label for="" class="col-form-label col-form-label-sm">Menarca</label>
                    <input class="form-control form-control-sm" type="text" placeholder="A que edad comenzo" name="anx1_menarca" value="{{ $result[0]->anx1_menarca }}">
                  </div>
                  <div class="col-md-3 mb-2">
                    <label for="" class="col-form-label col-form-label-sm">Ritmo</label>
                    <input class="form-control form-control-sm" type="text" placeholder="" name="anx1_ritmo" value="{{ $result[0]->anx1_ritmo }}">
                  </div>
                  <div class="col-md-3 mb-2">
                    <label for="" class="col-form-label col-form-label-sm">Cantidad</label>
                    <select class="form-control form-control-sm" id="" name="anx1_cantidad">
                      <option>{{ $result[0]->anx1_ejer }}</option>
                      <option>Escaso</option>
                      <option>Normal</option>
                      <option>Abundante</option>
                    </select>
                  </div>
                  <div class="col-md-3 mb-2">
                    <label for="" class="col-form-label col-form-label-sm"><span class="mr-2" id="valortoallas"></span> Toallas por día</label>
                    <input type="range" class="custom-range mt-1" min="0" max="15" id="toallasxdia" name="anx1_toalla" value="{{ $result[0]->anx1_toalla }}">
                  </div>
                  <div class="col-md-3 mb-2">
                    <label for="" class="col-form-label col-form-label-sm">Dolor</label>
                    <select class="form-control form-control-sm" id="" name="anx1_dolor">
                      <option>{{ $result[0]->anx1_dolor}}</option>
                      <option>Leve</option>
                      <option>Moderado</option>
                      <option>Severo</option>
                    </select>
                  </div>
                  <div class="col-md-9 mb-2">
                    <label for="" class="col-form-label col-form-label-sm">Tratamiento</label>
                    <input class="form-control form-control-sm" type="text" placeholder="Descripción del tratamiento" name="anx1_tratamiento" value="{{ $result[0]->anx1_tratamiento }}">
                  </div>
                  <div class="col-md-4 mb-2">
                    <label for="" class="col-form-label col-form-label-sm">FUM</label>
                    <input class="form-control form-control-sm" type="text" placeholder="Fechao" name="anx1_fum" value="{{ $result[0]->anx1_fum }}">
                  </div>
                  <div class="col-md-4 mb-2">
                    <label for="" class="col-form-label col-form-label-sm">IVSA</label>
                    <input class="form-control form-control-sm" type="text" placeholder="Año de comienz" name="anx1_ivisa" value="{{ $result[0]->anx1_ivisa }}">
                  </div>
                  <div class="col-md-2 mb-2">
                    <label for="" class="col-form-label col-form-label-sm">Parejas</label>
                    <input class="form-control form-control-sm" type="number" placeholder="#" name="anx1_parejas" value="{{ $result[0]->anx1_parejas }}">
                  </div>
                  <div class="col-md-2 mb-2">
                    <label for="" class="col-form-label col-form-label-sm">MPF</label>
                    <select class="form-control form-control-sm" id="" name="anx1_mpf">
                      <option>{{ $result[0]->anx1_mpf }}</option>
                      <option>Actual</option>
                      <option>Previos</option>
                    </select>
                  </div>

                  <div class="col-md-2 mb-2">
                    <label for="" class="col-form-label col-form-label-sm">Gestas</label>
                    <input class="form-control form-control-sm" type="number" placeholder="#" name="anx1_gestas" value="{{ $result[0]->anx1_gestas }}">
                  </div>
                  <div class="col-md-2 mb-2">
                    <label for="" class="col-form-label col-form-label-sm">Cesareas</label>
                    <input class="form-control form-control-sm" type="number" placeholder="#" name="anx1_cesareas" value="{{ $result[0]->anx1_cesareas }}">
                  </div>
                  <div class="col-md-2 mb-2">
                    <label for="" class="col-form-label col-form-label-sm">Partos</label>
                    <input class="form-control form-control-sm" type="number" placeholder="#" name="anx1_partos" value="{{ $result[0]->anx1_partos }}">
                  </div>
                  <div class="col-md-3 mb-2">
                    <label for="" class="col-form-label col-form-label-sm">Abortos</label>
                    <input class="form-control form-control-sm" type="number" placeholder="#" name="anx1_abortos" value="{{ $result[0]->anx1_abortos }}">
                  </div>
                  <div class="col-3 mb-4">
                    <label for="" class="col-form-label col-form-label-sm">Estópicas</label>
                    <input class="form-control form-control-sm" type="number" placeholder="#" name="anx1_ectopicos" value="{{ $result[0]->anx1_ectopicos }}">
                  </div>

                  <div id="accordion" class="col-12 mb-4">
                    <div class="card">
                      <div class="card-header p-0" id="head-g1">
                        <h5 class="mb-0">
                          <button class="btn btn-link" data-toggle="collapse" data-target="#g1-coll" aria-expanded="true" aria-controls="collapseOne">
                            <i class="fas fa-plus mr-2"></i>G1
                          </button>
                        </h5>
                      </div>

                      <div id="g1-coll" class="collapse" aria-labelledby="head-g1" data-parent="#accordion">
                        <div class="card-body">
                          <div class="form-row">
                            <div class="col-md-3 mb-2">
                              <label for="" class="col-form-label col-form-label-sm">Año</label>
                              <input class="form-control form-control-sm" type="text" placeholder="Ejem: 1994" name="anx1_g1_ano" value="{{ $result[0]->anx1_g1_ano }}">
                            </div>
                            <div class="col-md-3 mb-2">
                              <label for="" class="col-form-label col-form-label-sm">Edad Maternal</label>
                              <input class="form-control form-control-sm" type="number" placeholder="Edad" name="anx1_g1_edadmat" value="{{ $result[0]->anx1_g1_edadmat }}">
                            </div>
                            <div class="col-md-3 mb-2">
                              <label for="" class="col-form-label col-form-label-sm">Duración de embarazo</label>
                              <input class="form-control form-control-sm" type="number" placeholder="1 a 42 sem" name="anx1_g1_durembara" value="{{ $result[0]->anx1_g1_durembara }}">
                            </div>
                            <div class="col-md-3 mb-2">
                              <label for="" class="col-form-label col-form-label-sm">Sexo</label>
                              <select class="form-control form-control-sm" id="" name="anx1_g1_sexo">
                                <option>{{ $result[0]->anx1_g1_sexo }}</option>
                                <option>Sleccione el sexo</option>
                                <option>Femenino</option>
                                <option>Masculino</option>
                              </select>
                            </div>
                            <div class="col-md-3 mb-2">
                              <label for="" class="col-form-label col-form-label-sm">Peso</label>
                              <input class="form-control form-control-sm" type="number" placeholder="Eje: 300 gr" name="anx1_g1_peso" value="{{ $result[0]->anx1_g1_peso }}">
                            </div>
                            <div class="col-md-2 mb-2">
                              <label for="" class="col-form-label col-form-label-sm col-sm-12 pl-0">Vivo y sano</label>
                              <input class="" type="checkbox" data-toggle="toggle" data-size="sm" data-style="ios" data-on="SI" data-off="No" name="anx1_g1_vivo" value="{{ $result[0]->anx1_g1_vivo }}">
                            </div>
                            <div class="col-md-2 mb-2">
                              <label for="" class="col-form-label col-form-label-sm">Resol.</label>
                              <select class="form-control form-control-sm" id="" name="anx1_g1_resol">
                                <option>{{ $result[0]->anx1_g1_resol }}</option>
                                <option>Parto</option>
                                <option>Cesarea</option>
                                <option>Forceps</option>
                                <option>Aborto</option>
                              </select>
                            </div>
                            <div class="col-md-2 mb-2">
                              <label for="" class="col-form-label col-form-label-sm pl-0">Comp</label>
                              <input class="" type="checkbox" data-toggle="toggle" data-size="xs" data-style="ios" data-on="✓" data-off="x">
                              <input class="form-control form-control-sm" type="number" placeholder="Meses" name="anx1_g1_comp" value="{{ $result[0]->anx1_g1_comp }}">
                            </div>
                            <div class="col-md-3 mb-2">
                              <label for="" class="col-form-label col-form-label-sm">Lactancia</label>
                              <input class="form-control form-control-sm" type="number" placeholder="Meses" name="anx1_g1_lactancia" value="{{ $result[0]->anx1_g1_lactancia }}">
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>

                    <div class="card">
                      <div class="card-header p-0" id="head-g2">
                        <h5 class="mb-0">
                          <button class="btn btn-link" data-toggle="collapse" data-target="#g2-coll" aria-expanded="true" aria-controls="collapseOne">
                            <i class="fas fa-plus mr-2"></i>G2
                          </button>
                        </h5>
                      </div>

                      <div id="g2-coll" class="collapse" aria-labelledby="head-g2" data-parent="#accordion">
                        <div class="card-body">
                          <div class="form-row">
                            <div class="col-md-3 mb-2">
                              <label for="" class="col-form-label col-form-label-sm">Año</label>
                              <input class="form-control form-control-sm" type="text" placeholder="Ejem: 1994" name="anx1_g2_año" value="{{ $result[0]->anx1_g2_ano }}">
                            </div>
                            <div class="col-md-3 mb-2">
                              <label for="" class="col-form-label col-form-label-sm">Edad Maternal</label>
                              <input class="form-control form-control-sm" type="number" placeholder="Edad" name="anx1_g2_edadmat" value="{{ $result[0]->anx1_g2_edadmat }}">
                            </div>
                            <div class="col-md-3 mb-2">
                              <label for="" class="col-form-label col-form-label-sm">Duración de embarazo</label>
                              <input class="form-control form-control-sm" type="number" placeholder="1 a 42 sem" name="anx1_g2_durembara" value="{{ $result[0]->anx1_g2_durembara }}">
                            </div>
                            <div class="col-md-3 mb-2">
                              <label for="" class="col-form-label col-form-label-sm">Sexo</label>
                              <select class="form-control form-control-sm" id="" name="anx1_g2_sexo">
                                <option>{{ $result[0]->anx1_g2_sexo }}</option>
                                <option>Seleccione el sexo</option>
                                <option>Femenino</option>
                                <option>Masculino</option>
                              </select>
                            </div>
                            <div class="col-md-3 mb-2">
                              <label for="" class="col-form-label col-form-label-sm">Peso</label>
                              <input class="form-control form-control-sm" type="number" placeholder="Eje: 300 gr" name="anx1_g2_peso" value="{{ $result[0]->anx1_g2_peso }}">
                            </div>
                            <div class="col-md-2 mb-2">
                              <label for="" class="col-form-label col-form-label-sm col-sm-12 pl-0">Vivo y sano</label>
                              <input class="" type="checkbox" data-toggle="toggle" data-size="sm" data-style="ios" data-on="SI" data-off="No" name="anx1_g2_vivo" value="{{ $result[0]->anx1_g2_vivo }}">
                            </div>
                            <div class="col-md-2 mb-2">
                              <label for="" class="col-form-label col-form-label-sm">Resol.</label>
                              <select class="form-control form-control-sm" id="" name="anx1_g2_resol">
                                <option>{{ $result[0]->anx1_g2_resol }}</option>
                                <option>Parto</option>
                                <option>Cesarea</option>
                                <option>Forceps</option>
                                <option>Aborto</option>
                              </select>
                            </div>
                            <div class="col-md-2 mb-2">
                              <label for="" class="col-form-label col-form-label-sm pl-0">Comp</label>
                              <input class="" type="checkbox" data-toggle="toggle" data-size="xs" data-style="ios" data-on="✓" data-off="x">
                              <input class="form-control form-control-sm" type="number" placeholder="Meses" name="anx1_g2_comp" value="{{ $result[0]->anx1_g2_comp }}">
                            </div>
                            <div class="col-md-3 mb-2">
                              <label for="" class="col-form-label col-form-label-sm">Lactancia</label>
                              <input class="form-control form-control-sm" type="number" placeholder="Meses" name="anx1_g2_lactancia" value="{{ $result[0]->anx1_g2_lactancia }}">
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="card">
                      <div class="card-header p-0" id="head-g3">
                        <h5 class="mb-0">
                          <button class="btn btn-link" data-toggle="collapse" data-target="#g3-coll" aria-expanded="true" aria-controls="collapseOne">
                            <i class="fas fa-plus mr-2"></i>G3
                          </button>
                        </h5>
                      </div>

                      <div id="g3-coll" class="collapse" aria-labelledby="head-g3" data-parent="#accordion">
                        <div class="card-body">
                          <div class="form-row">
                            <div class="col-md-3 mb-2">
                              <label for="" class="col-form-label col-form-label-sm">Año</label>
                              <input class="form-control form-control-sm" type="text" placeholder="Ejem: 1994" name="anx1_g3_año" value="{{ $result[0]->anx1_g3_ano }}">
                            </div>
                            <div class="col-md-3 mb-2">
                              <label for="" class="col-form-label col-form-label-sm">Edad Maternal</label>
                              <input class="form-control form-control-sm" type="number" placeholder="Edad" name="anx1_g3_edadmat" value="{{ $result[0]->anx1_g3_edadmat }}">
                            </div>
                            <div class="col-md-3 mb-2">
                              <label for="" class="col-form-label col-form-label-sm">Duración de embarazo</label>
                              <input class="form-control form-control-sm" type="number" placeholder="1 a 42 sem" name="anx1_g3_durembara" value="{{ $result[0]->anx1_g3_durembara }}">
                            </div>
                            <div class="col-md-3 mb-2">
                              <label for="" class="col-form-label col-form-label-sm">Sexo</label>
                              <select class="form-control form-control-sm" id="" name="anx1_g3_sexo">
                                <option>{{ $result[0]->anx1_g3_sexo }}</option>
                                <option>Seleccione el sexo</option>
                                <option>Femenino</option>
                                <option>Masculino</option>
                              </select>
                            </div>
                            <div class="col-md-3 mb-2">
                              <label for="" class="col-form-label col-form-label-sm">Peso</label>
                              <input class="form-control form-control-sm" type="number" placeholder="Eje: 300 gr" name="anx1_g3_peso" value="{{ $result[0]->anx1_g3_peso }}">
                            </div>
                            <div class="col-md-2 mb-2">
                              <label for="" class="col-form-label col-form-label-sm col-sm-12 pl-0">Vivo y sano</label>
                              <input class="" type="checkbox" data-toggle="toggle" data-size="sm" data-style="ios" data-on="SI" data-off="No" name="anx1_g3_vivo" value="{{ $result[0]->anx1_g3_vivo }}">
                            </div>
                            <div class="col-md-2 mb-2">
                              <label for="" class="col-form-label col-form-label-sm">Resol.</label>
                              <select class="form-control form-control-sm" id="" name="anx1_g3_resol">
                                <option>{{ $result[0]->anx1_g3_resol }}</option>
                                <option>Parto</option>
                                <option>Cesarea</option>
                                <option>Forceps</option>
                                <option>Aborto</option>
                              </select>
                            </div>
                            <div class="col-md-2 mb-2">
                              <label for="" class="col-form-label col-form-label-sm pl-0">Comp</label>
                              <input class="" type="checkbox" data-toggle="toggle" data-size="xs" data-style="ios" data-on="✓" data-off="x">
                              <input class="form-control form-control-sm" type="number" placeholder="Meses" name="anx1_g3_comp" value="{{ $result[0]->anx1_g3_comp }}">
                            </div>
                            <div class="col-md-3 mb-2">
                              <label for="" class="col-form-label col-form-label-sm">Lactancia</label>
                              <input class="form-control form-control-sm" type="number" placeholder="Meses" name="anx1_g3_lactancia" value="{{ $result[0]->anx1_g3_lactancia }}">
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="card">
                      <div class="card-header p-0" id="head-g4">
                        <h5 class="mb-0">
                          <button class="btn btn-link" data-toggle="collapse" data-target="#g4-coll" aria-expanded="true" aria-controls="collapseOne">
                            <i class="fas fa-plus mr-2"></i>G4
                          </button>
                        </h5>
                      </div>

                      <div id="g4-coll" class="collapse" aria-labelledby="head-g4" data-parent="#accordion">
                        <div class="card-body">
                          <div class="form-row">
                            <div class="col-md-3 mb-2">
                              <label for="" class="col-form-label col-form-label-sm">Año</label>
                              <input class="form-control form-control-sm" type="text" placeholder="Ejem: 1994" name="anx1_g4_año" value="{{ $result[0]->anx1_g4_ano }}">
                            </div>
                            <div class="col-md-3 mb-2">
                              <label for="" class="col-form-label col-form-label-sm">Edad Maternal</label>
                              <input class="form-control form-control-sm" type="number" placeholder="Edad" name="anx1_g4_edadmat" value="{{ $result[0]->anx1_g4_edadmat }}">
                            </div>
                            <div class="col-md-3 mb-2">
                              <label for="" class="col-form-label col-form-label-sm">Duración de embarazo</label>
                              <input class="form-control form-control-sm" type="number" placeholder="1 a 42 sem" name="anx1_g4_durembara" value="{{ $result[0]->anx1_g4_durembara }}">
                            </div>
                            <div class="col-md-3 mb-2">
                              <label for="" class="col-form-label col-form-label-sm">Sexo</label>
                              <select class="form-control form-control-sm" id="" name="anx1_g4_sexo" >
                                  <option>{{ $result[0]->anx1_g4_sexo }}</option>
                                <option>Seleccione el sexo</option>
                                <option>Femenino</option>
                                <option>Masculino</option>
                              </select>
                            </div>
                            <div class="col-md-3 mb-2">
                              <label for="" class="col-form-label col-form-label-sm">Peso</label>
                              <input class="form-control form-control-sm" type="number" placeholder="Eje: 300 gr" name="anx1_g4_peso" value="{{ $result[0]->anx1_g4_peso }}">
                            </div>
                            <div class="col-md-2 mb-2">
                              <label for="" class="col-form-label col-form-label-sm col-sm-12 pl-0">Vivo y sano</label>
                              <input class="" type="checkbox" data-toggle="toggle" data-size="sm" data-style="ios" data-on="SI" data-off="No" name="anx1_g4_vivo" value="{{ $result[0]->anx1_g4_vivo }}">
                            </div>
                            <div class="col-md-2 mb-2">
                              <label for="" class="col-form-label col-form-label-sm">Resol.</label>
                              <select class="form-control form-control-sm" id="" name="anx1_g4_resol">
                                <option>{{ $result[0]->anx1_g4_resol }}</option>
                                <option>Parto</option>
                                <option>Cesarea</option>
                                <option>Forceps</option>
                                <option>Aborto</option>
                              </select>
                            </div>
                            <div class="col-md-2 mb-2">
                              <label for="" class="col-form-label col-form-label-sm pl-0">Comp</label>
                              <input class="" type="checkbox" data-toggle="toggle" data-size="xs" data-style="ios" data-on="✓" data-off="x">
                              <input class="form-control form-control-sm" type="number" placeholder="Meses" name="anx1_g4_comp" value="{{ $result[0]->anx1_g4_comp }}">
                            </div>
                            <div class="col-md-3 mb-2">
                              <label for="" class="col-form-label col-form-label-sm">Lactancia</label>
                              <input class="form-control form-control-sm" type="number" placeholder="Meses" name="anx1_g4_lactancia" value="{{ $result[0]->anx1_g4_lactancia }}">
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-2 mb-2">
                    <label for="" class="col-form-label col-form-label-sm">Citología cervical</label>
                    <input class="form-control form-control-sm" type="number" placeholder="Fecha" name="anx1_cervical" value="{{ $result[0]->anx1_cervical }}">
                  </div>
                  <div class="col-md-2 mb-2">
                    <label for="" class="col-form-label col-form-label-sm">DOCMA</label>
                    <input class="form-control form-control-sm" type="number" placeholder="Fecha" name="anx1_docma" value="{{ $result[0]->anx1_docma }}">
                  </div>
                  <div class="col-md-2 mb-2">
                    <label for="" class="col-form-label col-form-label-sm">Autoexploración</label>
                    <input class="form-control form-control-sm" type="number" placeholder="" name="anx1_autoexp" value="{{ $result[0]->anx1_autoexp }}">
                  </div>
                  <div class="col-md-2 mb-2">
                    <label for="" class="col-form-label col-form-label-sm">USG</label>
                    <input class="form-control form-control-sm" type="number" placeholder="" name="anx1_usg" value="{{ $result[0]->anx1_usg }}">
                  </div>
                  <div class="col-md-2 mb-2">
                    <label for="" class="col-form-label col-form-label-sm">Mastografía</label>
                    <input class="form-control form-control-sm" type="number" placeholder="" name="anx1_mastogra" value="{{ $result[0]->anx1_mastogra }}">
                  </div>
                  <div class="col-md-2 mb-2">
                    <label for="" class="col-form-label col-form-label-sm">Menopausia</label>
                    <input class="form-control form-control-sm" type="number" placeholder="Edad" name="anx1_menopausia" value="{{ $result[0]->anx1_menopausia }}">
                  </div>
                  <div class="col-md-12 mb-4">
                    <label for="" class="col-form-label col-form-label-sm">Antecedentes de infertilidad</label>
                    <input class="form-control form-control-sm" type="number" placeholder="Descripción" name="anx1_inferti" value="{{ $result[0]->anx1_inferti }}">
                  </div>

                  <div id="accordion2" class="col-12 mb-4">
                    <div class="card">
                      <div class="card-header p-0" id="head-trata">
                        <h5 class="mb-0">
                          <button class="btn btn-link" data-toggle="collapse" data-target="#trata-form" aria-expanded="true" aria-controls="collapseOne">
                            <i class="fas fa-plus mr-2"></i>Tratamiento
                          </button>
                        </h5>
                      </div>
                      <div id="trata-form" class="collapse" aria-labelledby="head-trata" data-parent="#accordion2">
                        <div class="card-body">
                          <div class="form-row">
                            <div class="col-md-6 mb-2">
                              <label for="" class="col-form-label col-form-label-sm">Padecimiento actual</label>
                              <textarea class="form-control form-control-sm" id="exampleFormControlTextarea1" rows="3" name="anx1_pActual" value="{{ $result[0]->anx1_pActual }}"></textarea>
                            </div>
                            <div class="col-md-6 mb-2">
                              <label for="" class="col-form-label col-form-label-sm">Exploración física</label>
                              <textarea class="form-control form-control-sm" id="exampleFormControlTextarea1" rows="3" name="anx1_impresionD" value="{{ $result[0]->anx1_impresionD }}"></textarea>
                            </div>
                            <div class="col-md-3 mb-2">
                              <label for="" class="col-form-label col-form-label-sm">Gabinete y laboratoria</label>
                              <textarea class="form-control form-control-sm" id="exampleFormControlTextarea1" rows="3" placeholder="Estudios de gabinete y laboratorio " name="anx1_EGL" value="{{ $result[0]->anx1_EGL }}"></textarea>
                            </div>
                            <div class="col-md-3 mb-2">
                              <label for="" class="col-form-label col-form-label-sm">Impresión diagnostica</label>
                              <textarea class="form-control form-control-sm" id="exampleFormControlTextarea1" rows="3" name="anx1_impresionD" value="{{ $result[0]->anx1_impresionD }}"></textarea>
                            </div>
                            <div class="col-md-3 mb-2">
                              <label for="" class="col-form-label col-form-label-sm">Tratamiento</label>
                              <textarea class="form-control form-control-sm" id="exampleFormControlTextarea1" rows="3" name="anx1_tratamiento1" value="{{ $result[0]->anx1_tratamiento1 }}"></textarea>
                            </div>
                            <div class="col-md-3 mb-2">
                              <label for="" class="col-form-label col-form-label-sm">Plan medico</label>
                              <textarea class="form-control form-control-sm" id="exampleFormControlTextarea1" rows="3" name="anx1_Pmedico" value="{{ $result[0]->anx1_Pmedico }}"></textarea>
                            </div>
                            <hr>
                            <h6 class="col-md-12 m-0 mt-3 color-text-1">Pronóstico</h6>
                            <div class="col-md-6 mb-2">
                              <label for="" class="col-form-label col-form-label-sm">Para la vida</label>
                              <select class="form-control form-control-sm" id="" name="anx1_pronos">
                                <option>{{ $result[0]->anx1_pronos }}</option>
                                <option>Bueno</option>
                                <option>Reservado</option>
                                <option>Malo</option>
                              </select>
                            </div>
                            <div class="col-md-6 mb-2">
                              <label for="" class="col-form-label col-form-label-sm">Para la función</label>
                              <select class="form-control form-control-sm" id="" name="anx1_fun">
                                <option>{{ $result[0]->anx1_fun }}"</option>
                                <option>Bueno</option>
                                <option>Reservado</option>
                                <option>Malo</option>
                              </select>
                            </div>

                          </div>
                        </div>
                      </div>
                    </div>
                  </div>

                </div>
            </div>
<!--  Fin seccion 4 ------------------------>
       </div>
      </div>
        @role('admin_master')
             <div class="card-footer">
                <div class="card-footer ml-auto mr-auto">
                    <button type="input" class="btn btn-rose">{{ __('Guardar ') }}
                    </button>
                </div>
              <div class="clearfix"></div>
            </div>
        @endrole
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
