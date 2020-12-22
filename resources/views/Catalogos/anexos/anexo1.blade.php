
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
                    Heredo Familiare
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
                



                  <div class="col-12">
                    <label for="inlineCheckbox1" class="form-check-label col-form-label-sm" data-toggle='collapse' data-target='#anx1_hiper'>
                    <input class="" type="checkbox" data-size="sm" data-style="ios" name="anx1_hiperSN" data-on="SI" data-off="No" data-toggle='toggle'> Hipertención</label>
                    <select class="collapse form-control mt-2 form-control-sm" name="anx1_hiper" id='anx1_hiper'>
                      <option>Padre</option>
                      <option>Madre</option>
                      <option>Hermano</option>
                      <option>Otro</option>
                    </select>
                  </div>
                  <div class="col-12">
                    <label for="inlineCheckbox1" class="form-check-label col-form-label-sm" data-toggle='collapse' data-target='#cancer'>
                    <input class="" type="checkbox" data-toggle="toggle" data-size="sm" data-style="ios" name="anx1_cancerSN" data-on="SI" data-off="No">
                    Cancer</label>
                  </div>
                  <div class="col-12 collapse" id='cancer'>
                    <label for="inlineCheckbox1" class="form-check-label col-form-label-sm">Ginecológico</label>
                    <div class="form-row">
                      <div class="col">
                        <input type="text" class="form-control mt-2 form-control-sm" id="formGroupExampleInput2" placeholder="" name="">
                      </div>
                      <div class="col">
                        <input type="text" class="form-control mt-2 form-control-sm" id="formGroupExampleInput2" placeholder="Edad de aparición" name="">
                      </div>
                    </div>
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
                  <div class="col-4 mt-3">
                    <label for="inlineCheckbox1" class="form-check-label col-form-label-sm" data-toggle='collapse' data-target='#anx1_diabetes'>
                    <input class="" type="checkbox" data-toggle="toggle" data-size="sm" data-style="ios" name="anx1_diabetesSN" data-on="SI" data-off="No">
                    Diabetes mellitus</label>
                    <div class="form-row">
                      <div class="col">
                        <select class="form-control mt-2 form-control-sm collapse" id="anx1_diabetes" name="anx1_diabetes">
                          <option>Familiar</option>
                          <option>Padre</option>
                          <option>Madre</option>
                          <option>Hermano</option>
                          <option>Otro</option>
                        </select>
                      </div>
                    </div>
                  </div>
                  <div class="col-4 mt-3">
                    <label for="inlineCheckbox1" class="form-check-label col-form-label-sm" data-toggle='collapse' data-target='#anx1_patoTiro'>
                    <input class="" type="checkbox" data-toggle="toggle" data-size="sm" data-style="ios" name="anx1_patoTiroSN" data-on="SI" data-off="No">
                    Patologia Tiroidea</label>
                    <div class="form-row">
                      <div class="col">
                        <select class="form-control mt-2 form-control-sm collapse" id="anx1_patoTiro" name="anx1_patoTiro">
                          <option>Familiar</option>
                          <option>Padre</option>
                          <option>Madre</option>
                          <option>Hermano</option>
                          <option>Otro</option>
                        </select>
                      </div>
                    </div>
                  </div>
                  <div class="col-4 mt-3">
                    <label for="inlineCheckbox1" class="form-check-label col-form-label-sm" data-toggle='collapse' data-target='#anx1_otros2'>
                    <input class="" type="checkbox" data-toggle="toggle" data-size="sm" data-style="ios" name="anx1_otros2" data-on="SI" data-off="No">
                    Otro</label>
                    <div class="form-row">
                      <div class="col">
                        <input type="text" class="form-control mt-2 form-control-sm collapse" id="anx1_otros2" placeholder="Especifique" name="anx1_otros2">
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
                        <option>Seleccione tipo de sangre</option>
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
                    <label for="inlineCheckbox1" class="form-check-label col-form-label-sm" data-toggle='collapse' data-target='#anx1_ejer'>
                    <input class="" type="checkbox" data-toggle="toggle" data-size="sm" data-style="ios" name="anx1_ejerSN" data-on="SI" data-off="No">
                    Ejercicio</label>
                    <input type="text" class="form-control mt-2 form-control-sm collapse" id="anx1_ejer" placeholder="Frecuencia e inicio" name="anx1_ejer">
                  </div>
                  <div class="col-4">
                    <label for="inlineCheckbox1" class="form-check-label col-form-label-sm" data-toggle='collapse' data-target='#anx1_tabaquimo'>
                    <input class="" type="checkbox" data-toggle="toggle" data-size="sm" data-style="ios" name="anx1_tabaquimoSN" data-on="SI" data-off="No">
                    Tabaquismo</label>
                    <input type="text" class="form-control mt-2 form-control-sm collapse" id="anx1_tabaquimo" placeholder="Frecuencia e inicio" name="anx1_tabaquimo">
                  </div>
                  <div class="col-4">
                    <label for="inlineCheckbox1" class="form-check-label col-form-label-sm" data-toggle='collapse' data-target='#anx1_alcohol'>
                    <input class="" type="checkbox" data-toggle="toggle" data-size="sm" data-style="ios" name="anx1_alcoholSN" data-on="SI" data-off="No">
                    Alcoholismo</label>
                    <input type="text" class="form-control mt-2 form-control-sm collapse" id="anx1_alcohol" placeholder="Frecuencia e inicio" name="anx1_alcohol">
                  </div>
                  <div class="col-4">
                    <label for="inlineCheckbox1" class="form-check-label col-form-label-sm" data-toggle='collapse' data-target='#anx1_drogas'>
                    <input class="" type="checkbox" data-toggle="toggle" data-size="sm" data-style="ios" name="anx1_drogasSN" data-on="SI" data-off="No">
                    Drogas</label>
                    <input type="text" class="form-control mt-2 form-control-sm collapse" id="anx1_drogas" placeholder="Frecuencia e inicio" name="anx1_drogas">
                  </div>
                  <div class="col-4">
                    <label for="inlineCheckbox1" class="form-check-label col-form-label-sm" data-toggle='collapse' data-target='#anx1_extre'>
                    <input class="" type="checkbox" data-toggle="toggle" data-size="sm" data-style="ios" name="anx1_extreSN" data-on="SI" data-off="No">
                    Estreñimiento</label>
                    <input type="text" class="form-control mt-2 form-control-sm collapse" id="anx1_extre" placeholder="Frecuencia e inicio" name="anx1_extre">
                  </div>
                </div>
               
            </div>
 <!-- tercer metodo del panel-------------------------------------------------------------------->
            <div class="tab-pane" id="link3">
              <div class="form-row p-3 mb-3">
                  <div class="col-4">
                    <label for="inlineCheckbox1" class="form-check-label col-form-label-sm" data-toggle='collapse' data-target='#anx1_cirugia'>
                    <input class="" type="checkbox" data-toggle="toggle" data-size="sm" data-style="ios" name="anx1_cirugiaSN" data-on="SI" data-off="No">
                    Cirugias</label>
                    <input type="text" class="form-control mt-2 form-control-sm collapse" id="anx1_cirugia" placeholder="Descripción corta" name="anx1_cirugia">
                  </div>
                  <div class="col-4">
                    <label for="inlineCheckbox1" class="form-check-label col-form-label-sm" data-toggle='collapse' data-target='#anx1_trans'>
                    <input class="" type="checkbox" data-toggle="toggle" data-size="sm" data-style="ios"  name="anx1_transSN" data-on="SI" data-off="No">
                    Transfusionales</label>
                    <input type="text" class="form-control mt-2 form-control-sm collapse" id="anx1_trans" placeholder="Cuantas veces y hace cuanto ?" name="anx1_trans">
                  </div>
                  <div class="col-4 mb-3">
                    <label for="inlineCheckbox1" class="form-check-label col-form-label-sm" data-toggle='collapse' data-target='#anx1_infecciosa'>
                    <input class="" type="checkbox" data-toggle="toggle" data-size="sm" data-style="ios" name="anx1_infecciosaSN" data-on="SI" data-off="No">
                    Infeccionsas</label>
                    <input type="text" class="form-control mt-2 form-control-sm collapse" id="anx1_infecciosa" placeholder="Describalas" name="anx1_infecciosa">
                  </div>
                  <div class="col-4">
                    <label for="inlineCheckbox1" class="form-check-label col-form-label-sm" data-toggle='collapse' data-target='#anx1_CroDege'>
                    <input class="" type="checkbox" data-toggle="toggle" data-size="sm" data-style="ios" name="anx1_CroDegeSN" data-on="SI" data-off="No">
                    Cronico degenerativas</label>
                    <input type="text" class="form-control mt-2 form-control-sm collapse" id="anx1_CroDege" placeholder="Describalas" name="anx1_CroDege">
                  </div>
                  <div class="col-4">
                    <label for="inlineCheckbox1" class="form-check-label col-form-label-sm" data-toggle='collapse' data-target='#anx1_trauma'>
                    <input class="" type="checkbox" data-toggle="toggle" data-size="sm" data-style="ios" name="anx1_traumaSN" data-on="SI" data-off="No">
                    Traumatismos</label>
                    <input type="text" class="form-control mt-2 form-control-sm collapse" id="anx1_trauma" placeholder="Describalas" name="anx1_trauma">
                  </div>
                  <div class="col-4">
                    <label for="inlineCheckbox1" class="form-check-label col-form-label-sm" data-toggle='collapse' data-target='#anx1_gine2'>
                    <input class="" type="checkbox" data-toggle="toggle" data-size="sm" data-style="ios" name="anx1_gine2SN" data-on="SI" data-off="No">
                    Ginecológicos</label>
                    <input type="text" class="form-control mt-2 form-control-sm collapse" id="anx1_gine2" placeholder="Describalas" name="anx1_gine2">
                  </div>
                </div>

            </div>
  <!-- cuarto metodo del panel------------------------------------------------------------------->
            <div class="tab-pane" id="link4">
              <div class="form-row p-3 mb-3">
                  <div class="col-3 mb-2">
                    <label for="" class="col-form-label col-form-label-sm">Menarca</label>
                    <input class="form-control form-control-sm" type="text" placeholder="A que edad comenzo" name="anx1_menarca">
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
                    <input class="form-control form-control-sm" type="text" placeholder="Fechao" name="anx1_fum">
                  </div>
                  <div class="col-md-4 mb-2">
                    <label for="" class="col-form-label col-form-label-sm">IVSA</label>
                    <input class="form-control form-control-sm" type="text" placeholder="Año de comienz" name="anx1_ivisa">
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
                    <label for="" class="col-form-label col-form-label-sm">Cesareas</label>
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
                    <label for="" class="col-form-label col-form-label-sm">Estópicas</label>
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
                              <input class="form-control form-control-sm" type="number" placeholder="Edad" name="anx1_g1_edadmat">
                            </div>
                            <div class="col-md-3 mb-2">
                              <label for="" class="col-form-label col-form-label-sm">Duración de embarazo</label>
                              <input class="form-control form-control-sm" type="number" placeholder="1 a 42 sem" name="anx1_g1_durembara">
                            </div>
                            <div class="col-md-3 mb-2">
                              <label for="" class="col-form-label col-form-label-sm">Sexo</label>
                              <select class="form-control form-control-sm" id="" name="anx1_g1_sexo">
                                <option>Sleccione el sexo</option>
                                <option>Femenino</option>
                                <option>Masculino</option>
                              </select>
                            </div>
                            <div class="col-md-3 mb-2">
                              <label for="" class="col-form-label col-form-label-sm">Peso</label>
                              <input class="form-control form-control-sm" type="number" placeholder="Eje: 300 gr" name="anx1_g1_peso">
                            </div>
                            <div class="col-md-2 mb-2">
                              <label for="" class="col-form-label col-form-label-sm col-sm-12 pl-0">Vivo y sano</label>
                              <input class="" type="checkbox" data-toggle="toggle" data-size="sm" data-style="ios" data-on="SI" data-off="No" name="anx1_g1_vivo">
                            </div>
                            <div class="col-md-2 mb-2">
                              <label for="" class="col-form-label col-form-label-sm">Resol.</label>
                              <select class="form-control form-control-sm" id="" name="anx1_g1_resol">
                                <option>Parto</option>
                                <option>Cesarea</option>
                                <option>Forceps</option>
                                <option>Aborto</option>
                              </select>
                            </div>
                            <div class="col-md-2 mb-2">
                              <label for="" class="col-form-label col-form-label-sm pl-0">Comp</label>
                              <input class="" type="checkbox" data-toggle="toggle" data-size="xs" data-style="ios" data-on="✓" data-off="x">
                              <input class="form-control form-control-sm" type="number" placeholder="Meses" name="anx1_g1_comp">
                            </div>
                            <div class="col-md-3 mb-2">
                              <label for="" class="col-form-label col-form-label-sm">Lactancia</label>
                              <input class="form-control form-control-sm" type="number" placeholder="Meses" name="anx1_g1_lactancia">
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
                              <input class="form-control form-control-sm" type="number" placeholder="Edad" name="anx1_g2_edadmat">
                            </div>
                            <div class="col-md-3 mb-2">
                              <label for="" class="col-form-label col-form-label-sm">Duración de embarazo</label>
                              <input class="form-control form-control-sm" type="number" placeholder="1 a 42 sem" name="anx1_g2_durembara">
                            </div>
                            <div class="col-md-3 mb-2">
                              <label for="" class="col-form-label col-form-label-sm">Sexo</label>
                              <select class="form-control form-control-sm" id="" name="anx1_g2_sexo">
                                <option>Sleccione el sexo</option>
                                <option>Femenino</option>
                                <option>Masculino</option>
                              </select>
                            </div>
                            <div class="col-md-3 mb-2">
                              <label for="" class="col-form-label col-form-label-sm">Peso</label>
                              <input class="form-control form-control-sm" type="number" placeholder="Eje: 300 gr" name="anx1_g2_peso">
                            </div>
                            <div class="col-md-2 mb-2">
                              <label for="" class="col-form-label col-form-label-sm col-sm-12 pl-0">Vivo y sano</label>
                              <input class="" type="checkbox" data-toggle="toggle" data-size="sm" data-style="ios" data-on="SI" data-off="No" name="anx1_g2_vivo">
                            </div>
                            <div class="col-md-2 mb-2">
                              <label for="" class="col-form-label col-form-label-sm">Resol.</label>
                              <select class="form-control form-control-sm" id="" name="anx1_g2_resol">
                                <option>Parto</option>
                                <option>Cesarea</option>
                                <option>Forceps</option>
                                <option>Aborto</option>
                              </select>
                            </div>
                            <div class="col-md-2 mb-2">
                              <label for="" class="col-form-label col-form-label-sm pl-0">Comp</label>
                              <input class="" type="checkbox" data-toggle="toggle" data-size="xs" data-style="ios" data-on="✓" data-off="x">
                              <input class="form-control form-control-sm" type="number" placeholder="Meses" name="anx1_g2_comp">
                            </div>
                            <div class="col-md-3 mb-2">
                              <label for="" class="col-form-label col-form-label-sm">Lactancia</label>
                              <input class="form-control form-control-sm" type="number" placeholder="Meses" name="anx1_g2_lactancia">
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
                              <input class="form-control form-control-sm" type="number" placeholder="Edad" name="anx1_g3_edadmat">
                            </div>
                            <div class="col-md-3 mb-2">
                              <label for="" class="col-form-label col-form-label-sm">Duración de embarazo</label>
                              <input class="form-control form-control-sm" type="number" placeholder="1 a 42 sem" name="anx1_g3_durembara">
                            </div>
                            <div class="col-md-3 mb-2">
                              <label for="" class="col-form-label col-form-label-sm">Sexo</label>
                              <select class="form-control form-control-sm" id="" name="anx1_g3_sexo">
                                <option>Seleccione el sexo</option>
                                <option>Femenino</option>
                                <option>Masculino</option>
                              </select>
                            </div>
                            <div class="col-md-3 mb-2">
                              <label for="" class="col-form-label col-form-label-sm">Peso</label>
                              <input class="form-control form-control-sm" type="number" placeholder="Eje: 300 gr" name="anx1_g3_peso">
                            </div>
                            <div class="col-md-2 mb-2">
                              <label for="" class="col-form-label col-form-label-sm col-sm-12 pl-0">Vivo y sano</label>
                              <input class="" type="checkbox" data-toggle="toggle" data-size="sm" data-style="ios" data-on="SI" data-off="No" name="anx1_g3_vivo">
                            </div>
                            <div class="col-md-2 mb-2">
                              <label for="" class="col-form-label col-form-label-sm">Resol.</label>
                              <select class="form-control form-control-sm" id="" name="anx1_g3_resol">
                                <option>Parto</option>
                                <option>Cesarea</option>
                                <option>Forceps</option>
                                <option>Aborto</option>
                              </select>
                            </div>
                            <div class="col-md-2 mb-2">
                              <label for="" class="col-form-label col-form-label-sm pl-0">Comp</label>
                              <input class="" type="checkbox" data-toggle="toggle" data-size="xs" data-style="ios" data-on="✓" data-off="x">
                              <input class="form-control form-control-sm" type="number" placeholder="Meses" name="anx1_g3_comp">
                            </div>
                            <div class="col-md-3 mb-2">
                              <label for="" class="col-form-label col-form-label-sm">Lactancia</label>
                              <input class="form-control form-control-sm" type="number" placeholder="Meses" name="anx1_g3_lactancia">
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
                              <input class="form-control form-control-sm" type="number" placeholder="Edad" name="anx1_g4_edadmat">
                            </div>
                            <div class="col-md-3 mb-2">
                              <label for="" class="col-form-label col-form-label-sm">Duración de embarazo</label>
                              <input class="form-control form-control-sm" type="number" placeholder="1 a 42 sem" name="anx1_g4_durembara">
                            </div>
                            <div class="col-md-3 mb-2">
                              <label for="" class="col-form-label col-form-label-sm">Sexo</label>
                              <select class="form-control form-control-sm" id="" name="anx1_g4_sexo">
                                <option>Sleccione el sexo</option>
                                <option>Femenino</option>
                                <option>Masculino</option>
                              </select>
                            </div>
                            <div class="col-md-3 mb-2">
                              <label for="" class="col-form-label col-form-label-sm">Peso</label>
                              <input class="form-control form-control-sm" type="number" placeholder="Eje: 300 gr" name="anx1_g4_peso">
                            </div>
                            <div class="col-md-2 mb-2">
                              <label for="" class="col-form-label col-form-label-sm col-sm-12 pl-0">Vivo y sano</label>
                              <input class="" type="checkbox" data-toggle="toggle" data-size="sm" data-style="ios" data-on="SI" data-off="No" name="anx1_g4_vivo">
                            </div>
                            <div class="col-md-2 mb-2">
                              <label for="" class="col-form-label col-form-label-sm">Resol.</label>
                              <select class="form-control form-control-sm" id="" name="anx1_g4_resol">
                                <option>Parto</option>
                                <option>Cesarea</option>
                                <option>Forceps</option>
                                <option>Aborto</option>
                              </select>
                            </div>
                            <div class="col-md-2 mb-2">
                              <label for="" class="col-form-label col-form-label-sm pl-0">Comp</label>
                              <input class="" type="checkbox" data-toggle="toggle" data-size="xs" data-style="ios" data-on="✓" data-off="x">
                              <input class="form-control form-control-sm" type="number" placeholder="Meses" name="anx1_g4_comp">
                            </div>
                            <div class="col-md-3 mb-2">
                              <label for="" class="col-form-label col-form-label-sm">Lactancia</label>
                              <input class="form-control form-control-sm" type="number" placeholder="Meses" name="anx1_g4_lactancia">
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-2 mb-2">
                    <label for="" class="col-form-label col-form-label-sm">Citología cervical</label>
                    <input class="form-control form-control-sm" type="number" placeholder="Fecha" name="anx1_cervical">
                  </div>
                  <div class="col-md-2 mb-2">
                    <label for="" class="col-form-label col-form-label-sm">DOCMA</label>
                    <input class="form-control form-control-sm" type="number" placeholder="Fecha" name="anx1_docma">
                  </div>
                  <div class="col-md-2 mb-2">
                    <label for="" class="col-form-label col-form-label-sm">Autoexploración</label>
                    <input class="form-control form-control-sm" type="number" placeholder="" name="anx1_autoexp">
                  </div>
                  <div class="col-md-2 mb-2">
                    <label for="" class="col-form-label col-form-label-sm">USG</label>
                    <input class="form-control form-control-sm" type="number" placeholder="" name="anx1_usg">
                  </div>
                  <div class="col-md-2 mb-2">
                    <label for="" class="col-form-label col-form-label-sm">Mastografía</label>
                    <input class="form-control form-control-sm" type="number" placeholder="" name="anx1_mastogra">
                  </div>
                  <div class="col-md-2 mb-2">
                    <label for="" class="col-form-label col-form-label-sm">Menopausia</label>
                    <input class="form-control form-control-sm" type="number" placeholder="Edad" name="anx1_menopausia">
                  </div>
                  <div class="col-md-12 mb-4">
                    <label for="" class="col-form-label col-form-label-sm">Antecedentes de infertilidad</label>
                    <input class="form-control form-control-sm" type="number" placeholder="Descripción" name="anx1_inferti">
                  </div>
                  
                  <div class="col-md-12 mb-4">
                   <div class="col-md-12 mb-2">
                    <label for="" class="col-form-label col-form-label-sm">Esquema de Vacunación VPH</label>
                    <input class="" type="checkbox" data-toggle="toggle" data-size="sm" data-style="ios" data-on="SI" data-off="No" name="">
                    </div>
                    <div class="col-md-3 mb-2">
                    <label for="" class="col-form-label col-form-label-sm">No. Dosis</label>
                    <input class="form-control form-control-sm" type="number" placeholder="" name="">
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
                              <textarea class="form-control form-control-sm" id="exampleFormControlTextarea1" rows="3" name="anx1_pActual"></textarea>
                            </div>
                            <div class="col-md-6 mb-2">
                              <label for="" class="col-form-label col-form-label-sm">Exploración física</label>
                              <textarea class="form-control form-control-sm" id="exampleFormControlTextarea1" rows="3" name="anx1_impresionD"></textarea>
                            </div>
                            <div class="col-md-3 mb-2">
                              <label for="" class="col-form-label col-form-label-sm">Gabinete y laboratoria</label>
                              <textarea class="form-control form-control-sm" id="exampleFormControlTextarea1" rows="3" placeholder="Estudios de gabinete y laboratorio " name="anx1_EGL"></textarea>
                            </div>
                            <div class="col-md-3 mb-2">
                              <label for="" class="col-form-label col-form-label-sm">Impresión diagnostica</label>
                              <textarea class="form-control form-control-sm" id="exampleFormControlTextarea1" rows="3" name="anx1_impresionD"></textarea>
                            </div>
                            <div class="col-md-3 mb-2">
                              <label for="" class="col-form-label col-form-label-sm">Tratamiento</label>
                              <textarea class="form-control form-control-sm" id="exampleFormControlTextarea1" rows="3" name="anx1_tratamiento1"></textarea>
                            </div>
                            <div class="col-md-3 mb-2">
                              <label for="" class="col-form-label col-form-label-sm">Plan medico</label>
                              <textarea class="form-control form-control-sm" id="exampleFormControlTextarea1" rows="3" name="anx1_Pmedico" ></textarea>
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
                  </div>

                </div>
            </div>
<!--  Fin seccion 4 ------------------------>
       </div>
      </div>
             <div class="card-footer">
                <div class="card-footer ml-auto mr-auto">
                    <button type="input" class="btn btn-rose">{{ __('Guardar ') }}
                </div>
              <div class="clearfix"></div>
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