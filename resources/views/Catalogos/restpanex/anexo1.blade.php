
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
                    <input class="" type="checkbox" data-toggle="toggle" data-size="sm" data-style="ios" data-on="SI" data-off="No">
                    <label for="inlineCheckbox1" class="form-check-label ml-2 col-form-label-sm">Hipertención</label>
                    <select class="form-control mt-2 form-control-sm" id="exampleFormControlSelect1">
                      <option>Padre</option>
                      <option>Mandre</option>
                      <option>Hermano</option>
                      <option>Otro</option>
                    </select>
                  </div>
                  <div class="col-8">
                    <input class="" type="checkbox" data-toggle="toggle" data-size="sm" data-style="ios" data-on="SI" data-off="No">
                    <label for="inlineCheckbox1" class="form-check-label col-form-label-sm">Cancer</label>
                    <div class="form-row">
                      <div class="col">
                        <select class="form-control mt-2 form-control-sm" id="exampleFormControlSelect1">
                          <option>Padre</option>
                          <option>Mandre</option>
                          <option>Hermano</option>
                          <option>Otro</option>
                        </select>
                      </div>
                      <div class="col">
                        <input type="text" class="form-control mt-2 form-control-sm" id="formGroupExampleInput2" placeholder="Edad de aparición">
                      </div>
                    </div>
                  </div>
                  <div class="col-4 mt-3">
                    <input class="" type="checkbox" data-toggle="toggle" data-size="sm" data-style="ios" data-on="SI" data-off="No">
                    <label for="inlineCheckbox1" class="form-check-label col-form-label-sm">Diabetes mellitus</label>
                    <div class="form-row">
                      <div class="col">
                        <select class="form-control mt-2 form-control-sm" id="exampleFormControlSelect1">
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
                    <input class="" type="checkbox" data-toggle="toggle" data-size="sm" data-style="ios" data-on="SI" data-off="No">
                    <label for="inlineCheckbox1" class="form-check-label col-form-label-sm">Patologia Tiroidea</label>
                    <div class="form-row">
                      <div class="col">
                        <select class="form-control mt-2 form-control-sm" id="exampleFormControlSelect1">
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
                    <input class="" type="checkbox" data-toggle="toggle" data-size="sm" data-style="ios" data-on="SI" data-off="No">
                    <label for="inlineCheckbox1" class="form-check-label col-form-label-sm">Otro</label>
                    <div class="form-row">
                      <div class="col">
                        <input type="text" class="form-control mt-2 form-control-sm" id="formGroupExampleInput2" placeholder="Especoifique">
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
                      <select class="form-control mt-2" id="">
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
                    <input class="" type="checkbox" data-toggle="toggle" data-size="sm" data-style="ios" data-on="SI" data-off="No">
                    <label for="inlineCheckbox1" class="form-check-label col-form-label-sm">Ejercicio</label>
                    <input type="text" class="form-control mt-2 form-control-sm" id="formGroupExampleInput2" placeholder="Frecuencia e inicio">
                  </div>
                  <div class="col-4">
                    <input class="" type="checkbox" data-toggle="toggle" data-size="sm" data-style="ios" data-on="SI" data-off="No">
                    <label for="inlineCheckbox1" class="form-check-label col-form-label-sm">Tabaquismo</label>
                    <input type="text" class="form-control mt-2 form-control-sm" id="formGroupExampleInput2" placeholder="Frecuencia e inicio">
                  </div>
                  <div class="col-4">
                    <input class="" type="checkbox" data-toggle="toggle" data-size="sm" data-style="ios" data-on="SI" data-off="No">
                    <label for="inlineCheckbox1" class="form-check-label col-form-label-sm">Alcoholismo</label>
                    <input type="text" class="form-control mt-2 form-control-sm" id="formGroupExampleInput2" placeholder="Frecuencia e inicio">
                  </div>
                  <div class="col-4">
                    <input class="" type="checkbox" data-toggle="toggle" data-size="sm" data-style="ios" data-on="SI" data-off="No">
                    <label for="inlineCheckbox1" class="form-check-label col-form-label-sm">Drogas</label>
                    <input type="text" class="form-control mt-2 form-control-sm" id="formGroupExampleInput2" placeholder="Frecuencia e inicio">
                  </div>
                  <div class="col-4">
                    <input class="" type="checkbox" data-toggle="toggle" data-size="sm" data-style="ios" data-on="SI" data-off="No">
                    <label for="inlineCheckbox1" class="form-check-label col-form-label-sm">Estreñimiento</label>
                    <input type="text" class="form-control mt-2 form-control-sm" id="formGroupExampleInput2" placeholder="Frecuencia e inicio">
                  </div>
                </div>
               
            </div>
 <!-- tercer metodo del panel-------------------------------------------------------------------->
            <div class="tab-pane" id="link3">
              <div class="form-row p-3 mb-3">
                  <div class="col-4">
                    <input class="" type="checkbox" data-toggle="toggle" data-size="sm" data-style="ios" data-on="SI" data-off="No">
                    <label for="inlineCheckbox1" class="form-check-label col-form-label-sm">Cirugias</label>
                    <input type="text" class="form-control mt-2 form-control-sm" id="formGroupExampleInput2" placeholder="Descripción corta">
                  </div>
                  <div class="col-4">
                    <input class="" type="checkbox" data-toggle="toggle" data-size="sm" data-style="ios" data-on="SI" data-off="No">
                    <label for="inlineCheckbox1" class="form-check-label col-form-label-sm">Transfusionales</label>
                    <input type="text" class="form-control mt-2 form-control-sm" id="formGroupExampleInput2" placeholder="Cuantas veces y hace cuanto ?">
                  </div>
                  <div class="col-4 mb-3">
                    <input class="" type="checkbox" data-toggle="toggle" data-size="sm" data-style="ios" data-on="SI" data-off="No">
                    <label for="inlineCheckbox1" class="form-check-label col-form-label-sm">Infeccionsas</label>
                    <input type="text" class="form-control mt-2 form-control-sm" id="formGroupExampleInput2" placeholder="Describalas">
                  </div>
                  <div class="col-4">
                    <input class="" type="checkbox" data-toggle="toggle" data-size="sm" data-style="ios" data-on="SI" data-off="No">
                    <label for="inlineCheckbox1" class="form-check-label col-form-label-sm">Cronico degenerativas</label>
                    <input type="text" class="form-control mt-2 form-control-sm" id="formGroupExampleInput2" placeholder="Describalas">
                  </div>
                  <div class="col-4">
                    <input class="" type="checkbox" data-toggle="toggle" data-size="sm" data-style="ios" data-on="SI" data-off="No">
                    <label for="inlineCheckbox1" class="form-check-label col-form-label-sm">Traumatismos</label>
                    <input type="text" class="form-control mt-2 form-control-sm" id="formGroupExampleInput2" placeholder="Describalas">
                  </div>
                  <div class="col-4">
                    <input class="" type="checkbox" data-toggle="toggle" data-size="sm" data-style="ios" data-on="SI" data-off="No">
                    <label for="inlineCheckbox1" class="form-check-label col-form-label-sm">Ginecológicos</label>
                    <input type="text" class="form-control mt-2 form-control-sm" id="formGroupExampleInput2" placeholder="Describalas">
                  </div>
                </div>

            </div>
  <!-- cuarto metodo del panel------------------------------------------------------------------->
            <div class="tab-pane" id="link4">
              <div class="form-row p-3 mb-3">
                  <div class="col-3 mb-2">
                    <label for="" class="col-form-label col-form-label-sm">Menarca</label>
                    <input class="form-control form-control-sm" type="text" placeholder="A que edad comenzo">
                  </div>
                  <div class="col-md-3 mb-2">
                    <label for="" class="col-form-label col-form-label-sm">Ritmo</label>
                    <input class="form-control form-control-sm" type="text" placeholder="">
                  </div>
                  <div class="col-md-3 mb-2">
                    <label for="" class="col-form-label col-form-label-sm">Cantidad</label>
                    <select class="form-control form-control-sm" id="">
                      <option>Escaso</option>
                      <option>Normal</option>
                      <option>Abundante</option>
                    </select>
                  </div>
                  <div class="col-md-3 mb-2">
                    <label for="" class="col-form-label col-form-label-sm"><span class="mr-2" id="valortoallas"></span> Toallas por día</label>
                    <input type="range" class="custom-range mt-1" min="0" max="15" id="toallasxdia">
                  </div>
                  <div class="col-md-3 mb-2">
                    <label for="" class="col-form-label col-form-label-sm">Dolor</label>
                    <select class="form-control form-control-sm" id="">
                      <option>Leve</option>
                      <option>Moderado</option>
                      <option>Severo</option>
                    </select>
                  </div>
                  <div class="col-md-9 mb-2">
                    <label for="" class="col-form-label col-form-label-sm">Tratamiento</label>
                    <input class="form-control form-control-sm" type="text" placeholder="Descripción del tratamiento">
                  </div>
                  <div class="col-md-4 mb-2">
                    <label for="" class="col-form-label col-form-label-sm">FUM</label>
                    <input class="form-control form-control-sm" type="text" placeholder="Fechao">
                  </div>
                  <div class="col-md-4 mb-2">
                    <label for="" class="col-form-label col-form-label-sm">IVSA</label>
                    <input class="form-control form-control-sm" type="text" placeholder="Año de comienz">
                  </div>
                  <div class="col-md-2 mb-2">
                    <label for="" class="col-form-label col-form-label-sm">Parejas</label>
                    <input class="form-control form-control-sm" type="number" placeholder="#">
                  </div>
                  <div class="col-md-2 mb-2">
                    <label for="" class="col-form-label col-form-label-sm">MPF</label>
                    <select class="form-control form-control-sm" id="">
                      <option>Actual</option>
                      <option>Previos</option>
                    </select>
                  </div>

                  <div class="col-md-2 mb-2">
                    <label for="" class="col-form-label col-form-label-sm">Gestas</label>
                    <input class="form-control form-control-sm" type="number" placeholder="#">
                  </div>
                  <div class="col-md-2 mb-2">
                    <label for="" class="col-form-label col-form-label-sm">Cesareas</label>
                    <input class="form-control form-control-sm" type="number" placeholder="#">
                  </div>
                  <div class="col-md-2 mb-2">
                    <label for="" class="col-form-label col-form-label-sm">Partos</label>
                    <input class="form-control form-control-sm" type="number" placeholder="#">
                  </div>
                  <div class="col-md-3 mb-2">
                    <label for="" class="col-form-label col-form-label-sm">Abortos</label>
                    <input class="form-control form-control-sm" type="number" placeholder="#">
                  </div>
                  <div class="col-3 mb-4">
                    <label for="" class="col-form-label col-form-label-sm">Estópicas</label>
                    <input class="form-control form-control-sm" type="number" placeholder="#">
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
                              <input class="form-control form-control-sm" type="text" placeholder="Ejem: 1994">
                            </div>
                            <div class="col-md-3 mb-2">
                              <label for="" class="col-form-label col-form-label-sm">Edad Maternal</label>
                              <input class="form-control form-control-sm" type="number" placeholder="Edad">
                            </div>
                            <div class="col-md-3 mb-2">
                              <label for="" class="col-form-label col-form-label-sm">Duración de embarazo</label>
                              <input class="form-control form-control-sm" type="number" placeholder="1 a 42 sem">
                            </div>
                            <div class="col-md-3 mb-2">
                              <label for="" class="col-form-label col-form-label-sm">Sexo</label>
                              <select class="form-control form-control-sm" id="">
                                <option>Sleccione el sexo</option>
                                <option>Femenino</option>
                                <option>Masculino</option>
                              </select>
                            </div>
                            <div class="col-md-3 mb-2">
                              <label for="" class="col-form-label col-form-label-sm">Peso</label>
                              <input class="form-control form-control-sm" type="number" placeholder="Eje: 300 gr">
                            </div>
                            <div class="col-md-2 mb-2">
                              <label for="" class="col-form-label col-form-label-sm col-sm-12 pl-0">Vivo y sano</label>
                              <input class="" type="checkbox" data-toggle="toggle" data-size="sm" data-style="ios" data-on="SI" data-off="No">
                            </div>
                            <div class="col-md-2 mb-2">
                              <label for="" class="col-form-label col-form-label-sm">Resol.</label>
                              <select class="form-control form-control-sm" id="">
                                <option>Parto</option>
                                <option>Cesarea</option>
                                <option>Forceps</option>
                                <option>Aborto</option>
                              </select>
                            </div>
                            <div class="col-md-2 mb-2">
                              <label for="" class="col-form-label col-form-label-sm pl-0">Comp</label>
                              <input class="" type="checkbox" data-toggle="toggle" data-size="xs" data-style="ios" data-on="✓" data-off="x">
                              <input class="form-control form-control-sm" type="number" placeholder="Meses">
                            </div>
                            <div class="col-md-3 mb-2">
                              <label for="" class="col-form-label col-form-label-sm">Lactancia</label>
                              <input class="form-control form-control-sm" type="number" placeholder="Meses">
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
                              <input class="form-control form-control-sm" type="text" placeholder="Ejem: 1994">
                            </div>
                            <div class="col-md-3 mb-2">
                              <label for="" class="col-form-label col-form-label-sm">Edad Maternal</label>
                              <input class="form-control form-control-sm" type="number" placeholder="Edad">
                            </div>
                            <div class="col-md-3 mb-2">
                              <label for="" class="col-form-label col-form-label-sm">Duración de embarazo</label>
                              <input class="form-control form-control-sm" type="number" placeholder="1 a 42 sem">
                            </div>
                            <div class="col-md-3 mb-2">
                              <label for="" class="col-form-label col-form-label-sm">Sexo</label>
                              <select class="form-control form-control-sm" id="">
                                <option>Sleccione el sexo</option>
                                <option>Femenino</option>
                                <option>Masculino</option>
                              </select>
                            </div>
                            <div class="col-md-3 mb-2">
                              <label for="" class="col-form-label col-form-label-sm">Peso</label>
                              <input class="form-control form-control-sm" type="number" placeholder="Eje: 300 gr">
                            </div>
                            <div class="col-md-2 mb-2">
                              <label for="" class="col-form-label col-form-label-sm col-sm-12 pl-0">Vivo y sano</label>
                              <input class="" type="checkbox" data-toggle="toggle" data-size="sm" data-style="ios" data-on="SI" data-off="No">
                            </div>
                            <div class="col-md-2 mb-2">
                              <label for="" class="col-form-label col-form-label-sm">Resol.</label>
                              <select class="form-control form-control-sm" id="">
                                <option>Parto</option>
                                <option>Cesarea</option>
                                <option>Forceps</option>
                                <option>Aborto</option>
                              </select>
                            </div>
                            <div class="col-md-2 mb-2">
                              <label for="" class="col-form-label col-form-label-sm pl-0">Comp</label>
                              <input class="" type="checkbox" data-toggle="toggle" data-size="xs" data-style="ios" data-on="✓" data-off="x">
                              <input class="form-control form-control-sm" type="number" placeholder="Meses">
                            </div>
                            <div class="col-md-3 mb-2">
                              <label for="" class="col-form-label col-form-label-sm">Lactancia</label>
                              <input class="form-control form-control-sm" type="number" placeholder="Meses">
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
                              <input class="form-control form-control-sm" type="text" placeholder="Ejem: 1994">
                            </div>
                            <div class="col-md-3 mb-2">
                              <label for="" class="col-form-label col-form-label-sm">Edad Maternal</label>
                              <input class="form-control form-control-sm" type="number" placeholder="Edad">
                            </div>
                            <div class="col-md-3 mb-2">
                              <label for="" class="col-form-label col-form-label-sm">Duración de embarazo</label>
                              <input class="form-control form-control-sm" type="number" placeholder="1 a 42 sem">
                            </div>
                            <div class="col-md-3 mb-2">
                              <label for="" class="col-form-label col-form-label-sm">Sexo</label>
                              <select class="form-control form-control-sm" id="">
                                <option>Sleccione el sexo</option>
                                <option>Femenino</option>
                                <option>Masculino</option>
                              </select>
                            </div>
                            <div class="col-md-3 mb-2">
                              <label for="" class="col-form-label col-form-label-sm">Peso</label>
                              <input class="form-control form-control-sm" type="number" placeholder="Eje: 300 gr">
                            </div>
                            <div class="col-md-2 mb-2">
                              <label for="" class="col-form-label col-form-label-sm col-sm-12 pl-0">Vivo y sano</label>
                              <input class="" type="checkbox" data-toggle="toggle" data-size="sm" data-style="ios" data-on="SI" data-off="No">
                            </div>
                            <div class="col-md-2 mb-2">
                              <label for="" class="col-form-label col-form-label-sm">Resol.</label>
                              <select class="form-control form-control-sm" id="">
                                <option>Parto</option>
                                <option>Cesarea</option>
                                <option>Forceps</option>
                                <option>Aborto</option>
                              </select>
                            </div>
                            <div class="col-md-2 mb-2">
                              <label for="" class="col-form-label col-form-label-sm pl-0">Comp</label>
                              <input class="" type="checkbox" data-toggle="toggle" data-size="xs" data-style="ios" data-on="✓" data-off="x">
                              <input class="form-control form-control-sm" type="number" placeholder="Meses">
                            </div>
                            <div class="col-md-3 mb-2">
                              <label for="" class="col-form-label col-form-label-sm">Lactancia</label>
                              <input class="form-control form-control-sm" type="number" placeholder="Meses">
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
                              <input class="form-control form-control-sm" type="text" placeholder="Ejem: 1994">
                            </div>
                            <div class="col-md-3 mb-2">
                              <label for="" class="col-form-label col-form-label-sm">Edad Maternal</label>
                              <input class="form-control form-control-sm" type="number" placeholder="Edad">
                            </div>
                            <div class="col-md-3 mb-2">
                              <label for="" class="col-form-label col-form-label-sm">Duración de embarazo</label>
                              <input class="form-control form-control-sm" type="number" placeholder="1 a 42 sem">
                            </div>
                            <div class="col-md-3 mb-2">
                              <label for="" class="col-form-label col-form-label-sm">Sexo</label>
                              <select class="form-control form-control-sm" id="">
                                <option>Sleccione el sexo</option>
                                <option>Femenino</option>
                                <option>Masculino</option>
                              </select>
                            </div>
                            <div class="col-md-3 mb-2">
                              <label for="" class="col-form-label col-form-label-sm">Peso</label>
                              <input class="form-control form-control-sm" type="number" placeholder="Eje: 300 gr">
                            </div>
                            <div class="col-md-2 mb-2">
                              <label for="" class="col-form-label col-form-label-sm col-sm-12 pl-0">Vivo y sano</label>
                              <input class="" type="checkbox" data-toggle="toggle" data-size="sm" data-style="ios" data-on="SI" data-off="No">
                            </div>
                            <div class="col-md-2 mb-2">
                              <label for="" class="col-form-label col-form-label-sm">Resol.</label>
                              <select class="form-control form-control-sm" id="">
                                <option>Parto</option>
                                <option>Cesarea</option>
                                <option>Forceps</option>
                                <option>Aborto</option>
                              </select>
                            </div>
                            <div class="col-md-2 mb-2">
                              <label for="" class="col-form-label col-form-label-sm pl-0">Comp</label>
                              <input class="" type="checkbox" data-toggle="toggle" data-size="xs" data-style="ios" data-on="✓" data-off="x">
                              <input class="form-control form-control-sm" type="number" placeholder="Meses">
                            </div>
                            <div class="col-md-3 mb-2">
                              <label for="" class="col-form-label col-form-label-sm">Lactancia</label>
                              <input class="form-control form-control-sm" type="number" placeholder="Meses">
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-2 mb-2">
                    <label for="" class="col-form-label col-form-label-sm">Citología cervical</label>
                    <input class="form-control form-control-sm" type="number" placeholder="Fecha">
                  </div>
                  <div class="col-md-2 mb-2">
                    <label for="" class="col-form-label col-form-label-sm">DOCMA</label>
                    <input class="form-control form-control-sm" type="number" placeholder="Fecha">
                  </div>
                  <div class="col-md-2 mb-2">
                    <label for="" class="col-form-label col-form-label-sm">Autoexploración</label>
                    <input class="form-control form-control-sm" type="number" placeholder="">
                  </div>
                  <div class="col-md-2 mb-2">
                    <label for="" class="col-form-label col-form-label-sm">USG</label>
                    <input class="form-control form-control-sm" type="number" placeholder="">
                  </div>
                  <div class="col-md-2 mb-2">
                    <label for="" class="col-form-label col-form-label-sm">Mastografía</label>
                    <input class="form-control form-control-sm" type="number" placeholder="">
                  </div>
                  <div class="col-md-2 mb-2">
                    <label for="" class="col-form-label col-form-label-sm">Menopausia</label>
                    <input class="form-control form-control-sm" type="number" placeholder="Edad">
                  </div>
                  <div class="col-md-12 mb-4">
                    <label for="" class="col-form-label col-form-label-sm">Antecedentes de infertilidad</label>
                    <input class="form-control form-control-sm" type="number" placeholder="Descripción">
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
                              <textarea class="form-control form-control-sm" id="exampleFormControlTextarea1" rows="3"></textarea>
                            </div>
                            <div class="col-md-6 mb-2">
                              <label for="" class="col-form-label col-form-label-sm">Exploración física</label>
                              <textarea class="form-control form-control-sm" id="exampleFormControlTextarea1" rows="3"></textarea>
                            </div>
                            <div class="col-md-3 mb-2">
                              <label for="" class="col-form-label col-form-label-sm">Gabinete y laboratoria</label>
                              <textarea class="form-control form-control-sm" id="exampleFormControlTextarea1" rows="3" placeholder="Estudios de gabinete y laboratorio "></textarea>
                            </div>
                            <div class="col-md-3 mb-2">
                              <label for="" class="col-form-label col-form-label-sm">Impresión diagnostica</label>
                              <textarea class="form-control form-control-sm" id="exampleFormControlTextarea1" rows="3"></textarea>
                            </div>
                            <div class="col-md-3 mb-2">
                              <label for="" class="col-form-label col-form-label-sm">Tratamiento</label>
                              <textarea class="form-control form-control-sm" id="exampleFormControlTextarea1" rows="3"></textarea>
                            </div>
                            <div class="col-md-3 mb-2">
                              <label for="" class="col-form-label col-form-label-sm">Plan medico</label>
                              <textarea class="form-control form-control-sm" id="exampleFormControlTextarea1" rows="3"></textarea>
                            </div>
                            <hr>
                            <h6 class="col-md-12 m-0 mt-3 color-text-1">Pronóstico</h6>
                            <div class="col-md-6 mb-2">
                              <label for="" class="col-form-label col-form-label-sm">Para la vida</label>
                              <select class="form-control form-control-sm" id="">
                                <option>Bueno</option>
                                <option>Reservado</option>
                                <option>Malo</option>
                              </select>
                            </div>
                            <div class="col-md-6 mb-2">
                              <label for="" class="col-form-label col-form-label-sm">Para la función</label>
                              <select class="form-control form-control-sm" id="">
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
                    </button>
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
