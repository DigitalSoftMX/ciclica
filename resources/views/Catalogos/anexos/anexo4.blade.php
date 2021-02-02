<div class="wizard-container">
  <div class="card card-wizard" data-color="rose" id="wizardProfile">    
  
       <form id="myform" method="post" action="#" autocomplete="off" class="form-horizontal">
        @csrf
          @method('post')              
              <div class="card-body p-0">
              <h5 class="title-ciclica">Materno Fetal
              </h5>
          <div class="form-row p-5">
            <div class="col-md-4 mb-2">
              <label for="" class="col-form-label col-form-label-sm mb-1">Número de fetos</label>
              <input class="form-control form-control-sm" type="text" placeholder="#">
            </div>
            <div class="col-md-8 mb-2">
              <label for="" class="col-form-label col-form-label-sm mb-1">Múltiple CORIONICIDAD</label>
              <input class="form-control form-control-sm" type="text" placeholder="">
            </div>
            <!--            acordeon fetos inicio-->
            <div id="accordion" class="col-12 my-3">
              <div class="">
                <div class="card-header p-0" id="head-feto1">
                  <h5 class="mb-0">
                    <a class="btn btn-link" data-toggle="collapse" data-target="#feto1-coll" aria-expanded="true" aria-controls="collapseOne">
                      <i class="fas fa-plus mr-2"></i>Feto 1 (ó único)
                    </a>
                  </h5>
                </div>
                <div id="feto1-coll" class="collapse" aria-labelledby="head-feto1" data-parent="#accordion">
                  <div class="card-body">
                    <div class="form-row">
                      <div class="input-group-sm col-md-4 mb-1">
                        <label for="" class="col-form-label col-form-label-sm mb-1 pb-0">Localización</label>
                       <input class="form-control form-control-sm" type="text" placeholder="">
                      </div>
                      <div class="input-group-sm col-md-4 mb-1">
                        <label for="" class="col-form-label col-form-label-sm mb-1 pb-0">LCC</label>
                       <input class="form-control form-control-sm" type="number" placeholder="mm">
                      </div>
                      <div class="col-md-4 mb-2">
                        <label for="" class="col-form-label col-form-label-sm mb-1">Semanas</label>
                        <input class="form-control form-control-sm" type="number" placeholder="">
                      </div>
                      <div class="col-md-4 mb-2">
                        <label for="" class="col-form-label col-form-label-sm mb-1">FCF</label>
                        <input class="form-control form-control-sm" type="number" placeholder="latidos por minuto">
                      </div>

                      <div class="col-md-8 mb-2">
                        <label for="" class="col-form-label col-form-label-sm mb-1">Translucencia nucal</label>
                        <div class="form-row">
                          <div class="col-md-4">
                            <input class="form-control form-control-sm" type="text" placeholder="">
                          </div>
                          <div class="col-md-4">
                            <input class="form-control form-control-sm" type="text" placeholder="">
                          </div>
                          <div class="col-md-4">
                            <input class="form-control form-control-sm" type="number" placeholder="">
                          </div>
                        </div>
                      </div>

                      <div class="col-md-4 mb-2">
                        <label for="" class="col-form-label col-form-label-sm mb-1">IP ducto venoso</label>
                        <input class="form-control form-control-sm" type="text" placeholder="">
                      </div>
                      <div class="col-md-4 mb-2">
                        <label for="" class="col-form-label col-form-label-sm mb-1">Onda "A"</label>
                        <input class="form-control form-control-sm" type="text" placeholder="">
                      </div>
                      <div class="col-md-4 mb-2">
                        <br>
                        <input class="" type="checkbox" data-toggle="toggle" data-width="100" data-height="75" data-style="ios" data-on="PRESENTE" data-off="AUSENTE">
                        <label for="inlineCheckbox1" class="form-check-label">Hueso Nasal</label>
                      </div>

                      <div class="col-md-4 mb-2">
                        <br><input class="" type="checkbox" data-toggle="toggle" data-width="100" data-height="75"  data-style="ios" data-on="PRESENTE" data-off="AUSENTE">
                        <label for="inlineCheckbox1" class="form-check-label">Regurgitación TricuspÍdea </label>
                      </div>
                      <div class="col-md-4 mb-2">
                        <label for="" class="col-form-label col-form-label-sm mb-1">Defectos mayores</label>
                        <input class="form-control form-control-sm" type="text" placeholder="">
                      </div>
                      <div class="col-md-4 mb-2">
                        <label for="" class="col-form-label col-form-label-sm mb-1">Placenta</label>
                        <input class="form-control form-control-sm" type="text" placeholder="">
                      </div>

                      <div class="form-row col-md-12">
                        <h6 class="col-md-12 color-text-1">
                          Cálculo de riesgo de Feto
                        </h6>
                        <h6 class="col-md-12 color-prim-1">Trisotomía 21</h6>
                        <div class="form-row col-md-12">
                          <div class=" col-4 mb-2">
                            <label for="" class="col-form-label col-form-label-sm mb-1 col-md-12 p-0">Riesgo Basal(EDAD)</label>   
                            <div class="input-group mb-2">
                            <div class="input-group-prepend">
                              <div class="input-group-text">1:</div>
                            </div>
                            <input class="form-control col-md-10" type="number" placeholder="" min="1" max="20000">
                          </div>
                          </div>
                          <div class=" col-4 mb-2">
                            <label for="" class="col-form-label col-form-label-sm mb-1 col-md-12 p-0">Riesgo Ajustado(USG)</label>
                            <div class="input-group mb-2">
                            <div class="input-group-prepend">
                              <div class="input-group-text">1:</div>
                            </div>
                            <input class="form-control col-md-10" type="number" placeholder="" min="1" max="20000">
                          </div>
                          </div>
                          <div class=" col-4 mb-2">
                            <label for="" class="col-form-label col-form-label-sm mb-1 col-md-12 p-0">Riesgo Ajustado (DUO-TEST)</label>
                            <div class="input-group mb-2">
                            <div class="input-group-prepend">
                              <div class="input-group-text">1:</div>
                            </div>
                            <input class="form-control col-md-10" type="number" placeholder="" min="1" max="20000">
                          </div>
                          </div>
                        </div>
                      </div>
                      <div class="form-row col-md-12">
                        <h6 class="col-md-12 color-prim-1">Trisotomía 18</h6>
                        <div class="form-row col-md-12">
                          <div class=" col-4 mb-2">
                            <label for="" class="col-form-label col-form-label-sm mb-1 col-md-12 p-0">Riesgo Basal(EDAD)</label>
                            <div class="input-group mb-2">
                            <div class="input-group-prepend">
                              <div class="input-group-text">1:</div>
                            </div>
                            <input class="form-control col-md-10" type="number" placeholder="" min="1" max="20000">
                          </div>
                          </div>
                          <div class=" col-4 mb-2">
                            <label for="" class="col-form-label col-form-label-sm mb-1 col-md-12 p-0">Riesgo Ajustado(USG)</label>
                            <div class="input-group mb-2">
                            <div class="input-group-prepend">
                              <div class="input-group-text">1:</div>
                            </div>
                            <input class="form-control col-md-10" type="number" placeholder="" min="1" max="20000">
                          </div>
                          </div>
                          <div class=" col-4 mb-2">
                            <label for="" class="col-form-label col-form-label-sm mb-1 col-md-12 p-0">Riesgo Ajustado (DUO-TEST)</label>
                            <div class="input-group mb-2">
                            <div class="input-group-prepend">
                              <div class="input-group-text">1:</div>
                            </div>
                            <input class="form-control col-md-10" type="number" placeholder="" min="1" max="20000">
                          </div>
                          </div>
                        </div>
                      </div>
                      <div class="form-row col-md-12">
                        <h6 class="col-md-12 color-prim-1">Trisotomía 13</h6>
                        <div class="form-row col-md-12">
                          <div class=" col-4 mb-2">
                            <label for="" class="col-form-label col-form-label-sm mb-1 col-md-12 p-0">Riesgo Basal(EDAD)</label>
                            <div class="input-group mb-2">
                            <div class="input-group-prepend">
                              <div class="input-group-text">1:</div>
                            </div>
                            <input class="form-control col-md-10" type="number" placeholder="" min="1" max="20000">
                          </div>
                          </div>
                          <div class=" col-4 mb-2">
                            <label for="" class="col-form-label col-form-label-sm mb-1 col-md-12 p-0">Riesgo Ajustado(USG)</label>
                            <div class="input-group mb-2">
                            <div class="input-group-prepend">
                              <div class="input-group-text">1:</div>
                            </div>
                            <input class="form-control col-md-10" type="number" placeholder="" min="1" max="20000">
                          </div>
                          </div>
                          <div class=" col-4 mb-2">
                            <label for="" class="col-form-label col-form-label-sm mb-1 col-md-12 p-0">Riesgo Ajustado(DUO-TEST)</label>
                            <div class="input-group mb-2">
                            <div class="input-group-prepend">
                              <div class="input-group-text">1:</div>
                            </div>
                            <input class="form-control col-md-10" type="number" placeholder="" min="1" max="20000">
                          </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>


              <div class="">
                <div class="card-header p-0" id="head-feto2">
                  <h5 class="mb-0">
                    <a class="btn btn-link" data-toggle="collapse" data-target="#feto2-coll" aria-expanded="true" aria-controls="collapseOne">
                      <i class="fas fa-plus mr-2"></i>Feto 2
                    </a>
                  </h5>
                </div>
                <div id="feto2-coll" class="collapse" aria-labelledby="head-feto2" data-parent="#accordion">
                  <div class="card-body">
                    <div class="form-row">
                      <div class="input-group-sm col-md-4 mb-1">
                        <label for="" class="col-form-label col-form-label-sm mb-1 pb-0">Localización</label>
                       <input class="form-control form-control-sm" type="text" placeholder="">
                      </div>
                      <div class="input-group-sm col-md-4 mb-1">
                        <label for="" class="col-form-label col-form-label-sm mb-1 pb-0">LCC</label>
                       <input class="form-control form-control-sm" type="number" placeholder="mm">
                      </div>
                      <div class="col-md-4 mb-2">
                        <label for="" class="col-form-label col-form-label-sm mb-1">Semanas</label>
                        <input class="form-control form-control-sm" type="number" placeholder="">
                      </div>
                      <div class="col-md-4 mb-2">
                        <label for="" class="col-form-label col-form-label-sm mb-1">FCF</label>
                        <input class="form-control form-control-sm" type="number" placeholder="latidos por minuto">
                      </div>

                      <div class="col-md-8 mb-2">
                        <label for="" class="col-form-label col-form-label-sm mb-1">Translucencia nucal</label>
                        <div class="form-row">
                          <div class="col-md-4">
                            <input class="form-control form-control-sm" type="text" placeholder="">
                          </div>
                          <div class="col-md-4">
                            <input class="form-control form-control-sm" type="text" placeholder="">
                          </div>
                          <div class="col-md-4">
                            <input class="form-control form-control-sm" type="number" placeholder="">
                          </div>
                        </div>
                      </div>

                      <div class="col-md-4 mb-2">
                        <label for="" class="col-form-label col-form-label-sm mb-1">IP ducto venoso</label>
                        <input class="form-control form-control-sm" type="text" placeholder="">
                      </div>
                      <div class="col-md-4 mb-2">
                        <label for="" class="col-form-label col-form-label-sm mb-1">Onda "A"</label>
                        <input class="form-control form-control-sm" type="text" placeholder="">
                      </div>
                      <div class="col-md-4 mb-2">
                        <br>
                        <input class="" type="checkbox" data-toggle="toggle" data-width="100" data-height="75" data-style="ios" data-on="PRESENTE" data-off="AUSENTE">
                        <label for="inlineCheckbox1" class="form-check-label">Hueso Nasal</label>
                      </div>

                      <div class="col-md-4 mb-2">
                        <br><input class="" type="checkbox" data-toggle="toggle" data-width="100" data-height="75"  data-style="ios" data-on="PRESENTE" data-off="AUSENTE">
                        <label for="inlineCheckbox1" class="form-check-label">Regurgitación TricuspÍdea </label>
                      </div>
                      <div class="col-md-4 mb-2">
                        <label for="" class="col-form-label col-form-label-sm mb-1">Defectos mayores</label>
                        <input class="form-control form-control-sm" type="text" placeholder="">
                      </div>
                      <div class="col-md-4 mb-2">
                        <label for="" class="col-form-label col-form-label-sm mb-1">Placenta</label>
                        <input class="form-control form-control-sm" type="text" placeholder="">
                      </div>

                      <div class="form-row col-md-12">
                        <h6 class="col-md-12 color-text-1">
                          Cálculo de riesgo de Feto
                        </h6>
                        <h6 class="col-md-12 color-prim-1">Trisotomía 21</h6>
                        <div class="form-row col-md-12">
                          <div class=" col-4 mb-2">
                            <label for="" class="col-form-label col-form-label-sm mb-1 col-md-12 p-0">Riesgo Basal(EDAD)</label>   
                            <div class="input-group mb-2">
                            <div class="input-group-prepend">
                              <div class="input-group-text">1:</div>
                            </div>
                            <input class="form-control col-md-10" type="number" placeholder="" min="1" max="20000">
                          </div>
                          </div>
                          <div class=" col-4 mb-2">
                            <label for="" class="col-form-label col-form-label-sm mb-1 col-md-12 p-0">Riesgo Ajustado(USG)</label>
                            <div class="input-group mb-2">
                            <div class="input-group-prepend">
                              <div class="input-group-text">1:</div>
                            </div>
                            <input class="form-control col-md-10" type="number" placeholder="" min="1" max="20000">
                          </div>
                          </div>
                          <div class=" col-4 mb-2">
                            <label for="" class="col-form-label col-form-label-sm mb-1 col-md-12 p-0">Riesgo Ajustado (DUO-TEST)</label>
                            <div class="input-group mb-2">
                            <div class="input-group-prepend">
                              <div class="input-group-text">1:</div>
                            </div>
                            <input class="form-control col-md-10" type="number" placeholder="" min="1" max="20000">
                          </div>
                          </div>
                        </div>
                      </div>
                      <div class="form-row col-md-12">
                        <h6 class="col-md-12 color-prim-1">Trisotomía 18</h6>
                        <div class="form-row col-md-12">
                          <div class=" col-4 mb-2">
                            <label for="" class="col-form-label col-form-label-sm mb-1 col-md-12 p-0">Riesgo Basal(EDAD)</label>
                            <div class="input-group mb-2">
                            <div class="input-group-prepend">
                              <div class="input-group-text">1:</div>
                            </div>
                            <input class="form-control col-md-10" type="number" placeholder="" min="1" max="20000">
                          </div>
                          </div>
                          <div class=" col-4 mb-2">
                            <label for="" class="col-form-label col-form-label-sm mb-1 col-md-12 p-0">Riesgo Ajustado(USG)</label>
                            <div class="input-group mb-2">
                            <div class="input-group-prepend">
                              <div class="input-group-text">1:</div>
                            </div>
                            <input class="form-control col-md-10" type="number" placeholder="" min="1" max="20000">
                          </div>
                          </div>
                          <div class=" col-4 mb-2">
                            <label for="" class="col-form-label col-form-label-sm mb-1 col-md-12 p-0">Riesgo Ajustado (DUO-TEST)</label>
                            <div class="input-group mb-2">
                            <div class="input-group-prepend">
                              <div class="input-group-text">1:</div>
                            </div>
                            <input class="form-control col-md-10" type="number" placeholder="" min="1" max="20000">
                          </div>
                          </div>
                        </div>
                      </div>
                      <div class="form-row col-md-12">
                        <h6 class="col-md-12 color-prim-1">Trisotomía 13</h6>
                        <div class="form-row col-md-12">
                          <div class=" col-4 mb-2">
                            <label for="" class="col-form-label col-form-label-sm mb-1 col-md-12 p-0">Riesgo Basal(EDAD)</label>
                            <div class="input-group mb-2">
                            <div class="input-group-prepend">
                              <div class="input-group-text">1:</div>
                            </div>
                            <input class="form-control col-md-10" type="number" placeholder="" min="1" max="20000">
                          </div>
                          </div>
                          <div class=" col-4 mb-2">
                            <label for="" class="col-form-label col-form-label-sm mb-1 col-md-12 p-0">Riesgo Ajustado(USG)</label>
                            <div class="input-group mb-2">
                            <div class="input-group-prepend">
                              <div class="input-group-text">1:</div>
                            </div>
                            <input class="form-control col-md-10" type="number" placeholder="" min="1" max="20000">
                          </div>
                          </div>
                          <div class=" col-4 mb-2">
                            <label for="" class="col-form-label col-form-label-sm mb-1 col-md-12 p-0">Riesgo Ajustado(DUO-TEST)</label>
                            <div class="input-group mb-2">
                            <div class="input-group-prepend">
                              <div class="input-group-text">1:</div>
                            </div>
                            <input class="form-control col-md-10" type="number" placeholder="" min="1" max="20000">
                          </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>



              <div class="">
                <div class="card-header p-0" id="head-feto2">
                  <h5 class="mb-0">
                    <a class="btn btn-link" data-toggle="collapse" data-target="#feto2-coll" aria-expanded="true" aria-controls="collapseOne">
                      <i class="fas fa-plus mr-2"></i>Feto 3
                    </a>
                  </h5>
                </div>
                <div id="feto2-coll" class="collapse" aria-labelledby="head-feto2" data-parent="#accordion">
                  <div class="card-body">
                    <div class="form-row">
                      <div class="input-group-sm col-md-4 mb-1">
                        <label for="" class="col-form-label col-form-label-sm mb-1 pb-0">Localización</label>
                       <input class="form-control form-control-sm" type="text" placeholder="">
                      </div>
                      <div class="input-group-sm col-md-4 mb-1">
                        <label for="" class="col-form-label col-form-label-sm mb-1 pb-0">LCC</label>
                       <input class="form-control form-control-sm" type="number" placeholder="mm">
                      </div>
                      <div class="col-md-4 mb-2">
                        <label for="" class="col-form-label col-form-label-sm mb-1">Semanas</label>
                        <input class="form-control form-control-sm" type="number" placeholder="">
                      </div>
                      <div class="col-md-4 mb-2">
                        <label for="" class="col-form-label col-form-label-sm mb-1">FCF</label>
                        <input class="form-control form-control-sm" type="number" placeholder="latidos por minuto">
                      </div>

                      <div class="col-md-8 mb-2">
                        <label for="" class="col-form-label col-form-label-sm mb-1">Translucencia nucal</label>
                        <div class="form-row">
                          <div class="col-md-4">
                            <input class="form-control form-control-sm" type="text" placeholder="">
                          </div>
                          <div class="col-md-4">
                            <input class="form-control form-control-sm" type="text" placeholder="">
                          </div>
                          <div class="col-md-4">
                            <input class="form-control form-control-sm" type="number" placeholder="">
                          </div>
                        </div>
                      </div>

                      <div class="col-md-4 mb-2">
                        <label for="" class="col-form-label col-form-label-sm mb-1">IP ducto venoso</label>
                        <input class="form-control form-control-sm" type="text" placeholder="">
                      </div>
                      <div class="col-md-4 mb-2">
                        <label for="" class="col-form-label col-form-label-sm mb-1">Onda "A"</label>
                        <input class="form-control form-control-sm" type="text" placeholder="">
                      </div>
                      <div class="col-md-4 mb-2">
                        <br>
                        <input class="" type="checkbox" data-toggle="toggle" data-width="100" data-height="75" data-style="ios" data-on="PRESENTE" data-off="AUSENTE">
                        <label for="inlineCheckbox1" class="form-check-label">Hueso Nasal</label>
                      </div>

                      <div class="col-md-4 mb-2">
                        <br><input class="" type="checkbox" data-toggle="toggle" data-width="100" data-height="75"  data-style="ios" data-on="PRESENTE" data-off="AUSENTE">
                        <label for="inlineCheckbox1" class="form-check-label">Regurgitación TricuspÍdea </label>
                      </div>
                      <div class="col-md-4 mb-2">
                        <label for="" class="col-form-label col-form-label-sm mb-1">Defectos mayores</label>
                        <input class="form-control form-control-sm" type="text" placeholder="">
                      </div>
                      <div class="col-md-4 mb-2">
                        <label for="" class="col-form-label col-form-label-sm mb-1">Placenta</label>
                        <input class="form-control form-control-sm" type="text" placeholder="">
                      </div>

                      <div class="form-row col-md-12">
                        <h6 class="col-md-12 color-text-1">
                          Cálculo de riesgo de Feto
                        </h6>
                        <h6 class="col-md-12 color-prim-1">Trisotomía 21</h6>
                        <div class="form-row col-md-12">
                          <div class=" col-4 mb-2">
                            <label for="" class="col-form-label col-form-label-sm mb-1 col-md-12 p-0">Riesgo Basal(EDAD)</label>   
                            <div class="input-group mb-2">
                            <div class="input-group-prepend">
                              <div class="input-group-text">1:</div>
                            </div>
                            <input class="form-control col-md-10" type="number" placeholder="" min="1" max="20000">
                          </div>
                          </div>
                          <div class=" col-4 mb-2">
                            <label for="" class="col-form-label col-form-label-sm mb-1 col-md-12 p-0">Riesgo Ajustado(USG)</label>
                            <div class="input-group mb-2">
                            <div class="input-group-prepend">
                              <div class="input-group-text">1:</div>
                            </div>
                            <input class="form-control col-md-10" type="number" placeholder="" min="1" max="20000">
                          </div>
                          </div>
                          <div class=" col-4 mb-2">
                            <label for="" class="col-form-label col-form-label-sm mb-1 col-md-12 p-0">Riesgo Ajustado (DUO-TEST)</label>
                            <div class="input-group mb-2">
                            <div class="input-group-prepend">
                              <div class="input-group-text">1:</div>
                            </div>
                            <input class="form-control col-md-10" type="number" placeholder="" min="1" max="20000">
                          </div>
                          </div>
                        </div>
                      </div>
                      <div class="form-row col-md-12">
                        <h6 class="col-md-12 color-prim-1">Trisotomía 18</h6>
                        <div class="form-row col-md-12">
                          <div class=" col-4 mb-2">
                            <label for="" class="col-form-label col-form-label-sm mb-1 col-md-12 p-0">Riesgo Basal(EDAD)</label>
                            <div class="input-group mb-2">
                            <div class="input-group-prepend">
                              <div class="input-group-text">1:</div>
                            </div>
                            <input class="form-control col-md-10" type="number" placeholder="" min="1" max="20000">
                          </div>
                          </div>
                          <div class=" col-4 mb-2">
                            <label for="" class="col-form-label col-form-label-sm mb-1 col-md-12 p-0">Riesgo Ajustado(USG)</label>
                            <div class="input-group mb-2">
                            <div class="input-group-prepend">
                              <div class="input-group-text">1:</div>
                            </div>
                            <input class="form-control col-md-10" type="number" placeholder="" min="1" max="20000">
                          </div>
                          </div>
                          <div class=" col-4 mb-2">
                            <label for="" class="col-form-label col-form-label-sm mb-1 col-md-12 p-0">Riesgo Ajustado (DUO-TEST)</label>
                            <div class="input-group mb-2">
                            <div class="input-group-prepend">
                              <div class="input-group-text">1:</div>
                            </div>
                            <input class="form-control col-md-10" type="number" placeholder="" min="1" max="20000">
                          </div>
                          </div>
                        </div>
                      </div>
                      <div class="form-row col-md-12">
                        <h6 class="col-md-12 color-prim-1">Trisotomía 13</h6>
                        <div class="form-row col-md-12">
                          <div class=" col-4 mb-2">
                            <label for="" class="col-form-label col-form-label-sm mb-1 col-md-12 p-0">Riesgo Basal(EDAD)</label>
                            <div class="input-group mb-2">
                            <div class="input-group-prepend">
                              <div class="input-group-text">1:</div>
                            </div>
                            <input class="form-control col-md-10" type="number" placeholder="" min="1" max="20000">
                          </div>
                          </div>
                          <div class=" col-4 mb-2">
                            <label for="" class="col-form-label col-form-label-sm mb-1 col-md-12 p-0">Riesgo Ajustado(USG)</label>
                            <div class="input-group mb-2">
                            <div class="input-group-prepend">
                              <div class="input-group-text">1:</div>
                            </div>
                            <input class="form-control col-md-10" type="number" placeholder="" min="1" max="20000">
                          </div>
                          </div>
                          <div class=" col-4 mb-2">
                            <label for="" class="col-form-label col-form-label-sm mb-1 col-md-12 p-0">Riesgo Ajustado(DUO-TEST)</label>
                            <div class="input-group mb-2">
                            <div class="input-group-prepend">
                              <div class="input-group-text">1:</div>
                            </div>
                            <input class="form-control col-md-10" type="number" placeholder="" min="1" max="20000">
                          </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!--acordeon fetos fin-->
            <h6 class="col-md-12 color-text-1 mb-0">
              Doppler de arterias uterinas
            </h6>
            <div class="col-md-8 mb-2">
              <label for="" class="col-form-label col-form-label-sm mb-1">IP arteria uterina derecha</label>
              <input class="form-control form-control-sm" type="text" placeholder="">
            </div>
            <div class="col-md-4 mb-2">
              <label for="inlineCheckbox1" class="form-check-label pl-0 col-form-label-sm col-12 mb-1">NOTCH</label>
              <input class="" type="checkbox" data-toggle="toggle" data-size="sm" data-style="ios" data-on="SI" data-off="No">
            </div>
            <div class="col-md-8 mb-2">
              <label for="" class="col-form-label col-form-label-sm mb-1">IP arteria uterina izquierda</label>
              <input class="form-control form-control-sm" type="text" placeholder="">
            </div>
            <div class="col-md-4 mb-2">
              <label for="inlineCheckbox1" class="form-check-label pl-0 col-form-label-sm col-12 mb-1">NOTCH</label>
              <input class="" type="checkbox" data-toggle="toggle" data-size="sm" data-style="ios" data-on="SI" data-off="No">
            </div>
            <div class="col-md-8 mb-2">
              <label for="" class="col-form-label col-form-label-sm mb-1">IP medio de arterias uterinas</label>
              <input class="form-control form-control-sm" type="text" placeholder="">
            </div>
            <div class="input-group input-group-sm col-md-6 mb-1">
              <label for="" class="col-form-label col-form-label-sm mb-0 pb-0">Longitud cervica</label>
              <div class="input-group col-12 p-0">
                <input class="form-control form-control-sm" type="number" placeholder="">
                <div class="input-group-append">
                  <span class="input-group-text " id="basic-addon2">mm</span>
                </div>
              </div>
            </div>
            <div class="form row">
              <h6 class="col-md-12 color-text-1 mt-3 mb-0">
                Marcadores Séricos
              </h6>
              <div class="col-md-3 mb-2">
                <label for="" class="col-form-label col-form-label-sm mb-1">Fecha de la toma</label>
                <input class="form-control form-control-sm" type="date" placeholder="">
              </div>
              <div class="col-md-3 mb-2">
                <label for="" class="col-form-label col-form-label-sm mb-1">Fecha de procesamiento</label>
                <input class="form-control form-control-sm" type="date" placeholder="">
              </div>
              <div class="col-md-3 mb-2">
                <label for="" class="col-form-label col-form-label-sm mb-1">B-HGC</label>
                <input class="form-control form-control-sm" type="text" placeholder="">
              </div>
              <div class="col-md-3 mb-2">
                <label for="" class="col-form-label col-form-label-sm mb-1">MoM</label>
                <input class="form-control form-control-sm" type="text" placeholder="">
              </div>
              <div class="col-md-3 mb-2">
                <label for="" class="col-form-label col-form-label-sm mb-1">PAPP-A</label>
                <input class="form-control form-control-sm" type="text" placeholder="">
              </div>
              <div class="col-md-3 mb-2">
                <label for="" class="col-form-label col-form-label-sm mb-1">MoM</label>
                <input class="form-control form-control-sm" type="text" placeholder="">
              </div>
              <div class="col-md-3 mb-2">
                <label for="" class="col-form-label col-form-label-sm mb-1">PIGF</label>
                <input class="form-control form-control-sm" type="text" placeholder="">
              </div>
              <div class="col-md-3 mb-2">
                <label for="" class="col-form-label col-form-label-sm mb-1">MoM</label>
                <input class="form-control form-control-sm" type="text" placeholder="">
              </div>
            </div>
            <div class="form-row col-md-12">
              <h6 class="col-md-12 color-text-1 mt-3 mb-0">
                Cálculo de riesgo
              </h6>
              <div class="col-md-4">
                <label for="" class="col-form-label">Para Preclampsia <h6><small>antes de 34 semanas</small></h6></label>
                <input class="form-control form-control-sm" type="text" placeholder="">
              </div>
              <div class="col-md-4">
                <label for="" class="col-form-label">Para Restricción de crecimiento <h6><small>antes de 37 semanas</small></h6></label>
                <input class="form-control form-control-sm" type="text" placeholder="">
              </div>
              <div class="col-md-4 mb-2">
                <label for="" class="col-form-label">Para Parto pretérmino <h6><small>antes de 34 semanas</small></h6></label>
                <input class="form-control form-control-sm" type="text" placeholder="">
              </div>
            </div>
            <div class="form-row col-md-12">
              <h6 class="col-md-12 color-text-1 mt-3 mb-0">
                Tabaquismo
              </h6>
              <div class="col-md-4 mb-2">
                <label for="inlineCheckbox1" class="form-check-label pl-0 col-form-label-sm col-12 mb-1">Fuma</label>
                <input class="" type="checkbox" data-toggle="toggle" data-size="sm" data-style="ios" data-on="SI" data-off="No">
              </div>
              <div class="col-md-4 mb-2">
                <label for="" class="col-form-label col-form-label-sm mb-1">¿Cuantos al día?</label>
                <input class="form-control form-control-sm" type="number" placeholder="#">
              </div>
              <div class="col-md-4 mb-2">
                <label for="inlineCheckbox1" class="form-check-label pl-0 col-form-label-sm col-12 mb-1">¿Durante el embarazo?</label>
                <input class="" type="checkbox" data-toggle="toggle" data-size="sm" data-style="ios" data-on="SI" data-off="No">
              </div>
            </div>
            
            <div class="form-row col-md-12">
              <div class="col-md-12 form-row">
                <div class="col-md-6 mb-2">
                  <label for="inlineCheckbox1" class="form-check-label pl-0 col-form-label-sm col-12 mb-1">Peso</label>
                  <input class="form-control form-control-sm" type="text" placeholder="">
                </div>
                <div class="col-md-6 mb-2">
                  <label for="inlineCheckbox1" class="form-check-label pl-0 col-form-label-sm col-12 mb-1">Talla</label>
                  <input class="form-control form-control-sm" type="text" placeholder="">
                </div>
                <div class="col-md-12 mb-2">
                <label for="inlineCheckbox1" class="form-check-label pl-0 col-form-label-sm col-12 mb-1">T/A</label>
               </div>
                <div class="col-md-6 mb-2">
                  <label for="inlineCheckbox1" class="form-check-label pl-0 col-form-label-sm col-12 mb-1">T/A Brazo izquierdo</label>
                  <div class="form-row">
                      <div class="col-5">
                        <input class="form-control" name="ta1" id="ta1" type="text" placeholder="" value=""  aria-required="true">
                      </div>
                       <div class="col-3">
                        <input class="form-control text-center" type="text" placeholder="/" disabled>
                      </div>
                       <div class="col-4">
                        <input class="form-control" name="ta2" id="ta2" type="text" placeholder="" value=""  aria-required="true">
                      </div>
                  </div>
                </div>
                <div class="col-md-6 mb-2">
                  <label for="inlineCheckbox1" class="form-check-label pl-0 col-form-label-sm col-12 mb-1">T/A Brazo derecho</label>
                  <div class="form-row">
                      <div class="col-5">
                        <input class="form-control" name="ta1" id="ta1" type="text" placeholder="" value=""  aria-required="true">
                      </div>
                       <div class="col-3">
                        <input class="form-control text-center" type="text" placeholder="/" disabled>
                      </div>
                       <div class="col-4">
                        <input class="form-control" name="ta2" id="ta2" type="text" placeholder="" value=""  aria-required="true">
                      </div>
                  </div>
                </div>
              </div>
            </div>
           
            <div class="form-row col-md-12">
              <div class="col-md-12 form-row">
                <h6 class="col-md-12 color-text-1 mt-3 mb-0">
                  Antecedentes patológicos de la embarazada
                </h6>
                <div class="col-md-4 mb-2">
                  <label for="inlineCheckbox1" class="form-check-label pl-0 col-form-label-sm col-12 mb-1">Padece Diabetes Mellitus dependiente de insulina?</label>
                  <input class="" type="checkbox" data-toggle="toggle" data-size="sm" data-style="ios" data-on="SI" data-off="No">
                </div>
                <div class="col-md-4 mb-2">
                  <label for="inlineCheckbox1" class="form-check-label pl-0 col-form-label-sm col-12 mb-1">Padece Hipertensión crónica?</label>
                  <input class="" type="checkbox" data-toggle="toggle" data-size="sm" data-style="ios" data-on="SI" data-off="No">
                </div>
                <div class="col-md-4 mb-2">
                  <label for="inlineCheckbox1" class="form-check-label pl-0 col-form-label-sm col-12 mb-1">Padece Lupus Eritematoso Sistémico?</label>
                  <input class="" type="checkbox" data-toggle="toggle" data-size="sm" data-style="ios" data-on="SI" data-off="No">
                </div>
                <div class="col-md-4 mb-2">
                  <label for="inlineCheckbox1" class="form-check-label pl-0 col-form-label-sm col-12 mb-1">Padece síndrome de anticuerpos anti-fosfolípidos?</label>
                  <input class="" type="checkbox" data-toggle="toggle" data-size="sm" data-style="ios" data-on="SI" data-off="No">
                </div>
                <div class="col-md-4 mb-2">
                  <label for="inlineCheckbox1" class="form-check-label pl-0 col-form-label-sm col-12 mb-1">Padeció preeclampsia en los embarazos previos?</label>
                  <input class="" type="checkbox" data-toggle="toggle" data-size="sm" data-style="ios" data-on="SI" data-off="No">
                </div>
                <div class="col-md-4 mb-2">
                  <label for="inlineCheckbox1" class="form-check-label pl-0 col-form-label-sm col-12 mb-1">Su madre padeció preeclampsia en algún embarazo?</label>
                  <input class="" type="checkbox" data-toggle="toggle" data-size="sm" data-style="ios" data-on="SI" data-off="No">
                </div>
                <div class="col-md-4 mb-2">
                  <label for="inlineCheckbox1" class="form-check-label pl-0 col-form-label-sm col-12 mb-1">Tiene algún otro antecedente personal o familiar que considere
                    importante?</label>
                  <input class="" type="checkbox" data-toggle="toggle" data-size="sm" data-style="ios" data-on="SI" data-off="No">
                </div>
                <div class="col-md-12 mb-2">
              <label for="" class="col-form-label col-form-label-sm mb-1">Se logró el embarazo con algún tratamiento de Reproducción Asistida?</label>
              <input class="" type="checkbox" data-toggle="toggle" data-size="sm" data-style="ios" name="anx2_IUE" data-on="SI" data-off="No">
            </div>
            
            <div class="col-md-12 mb-2">
              <label for="" class="col-form-label col-form-label-sm mb-1">Inductores de ovulación?</label>
              <input class="" type="checkbox" data-toggle="toggle" data-size="sm" data-style="ios" name="" data-on="SI" data-off="No">
            </div>
            
            <div class="col-md-12 mb-2">
              <label for="" class="col-form-label col-form-label-sm mb-1">En caso de Fertilización In Vitro, indique lo siguiente:</label>              
            </div>
            <div class="col-md-6 mb-2">
              <label for="" class="col-form-label col-form-label-sm mb-1">Fecha de extracción de ovocitos:</label>
              <input class="form-control form-control-sm" type="date" placeholder="">
            </div>
            
            <div class="col-md-6 mb-2">
              <label for="" class="col-form-label col-form-label-sm mb-1">Fecha de congelación:</label>
              <input class="form-control form-control-sm" type="date" placeholder="">
            </div>
            
            <div class="col-md-12 mb-2">
              <label for="" class="col-form-label col-form-label-sm mb-1">En caso de donante de ovocitos, indique su fecha de nacimiento o edad aproximada:</label>
            </div>
            
            <div class="col-md-6 mb-2">
              <input class="form-control form-control-sm" type="date" placeholder="">
            </div>
            <div class="col-md-6 mb-2">
              <input class="form-control form-control-sm" type="text" placeholder="años">
            </div>
            
             <div class="card-footer p-0 ml-auto mr-auto">
                <button type="input" class="btn btn-rose">{{ __('Guardar ') }}
                </button>
              </div>
            
            
                
              </div>
            </div>
          </div>
        </div>
        
      </form>
 
 
  </div>
</div>

