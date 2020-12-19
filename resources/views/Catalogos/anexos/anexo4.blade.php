@extends('layouts.app', ['activePage' => 'form_regular', 'menuParent' => 'forms', 'titlePage' => __('Regular Forms')])

@section('content')
    <div class="content">
        <div class="container-fluid">
            
             <!--       
        para copiar y pegar en el sistema de anexo 4
        -->
        <div class="card card-body p-0">
      
          <div class="title-ciclica d-flex justify-content-between">
            <div class="d-flex align-items-center">
              <h5 class="m-0">Materno Fetal
              </h5>
            </div>
            <!--<button class="btn btn-primary">
              <a href="{{ route('anexodocu.index') }}"><i class="fas fa-angle-left mr-2"></i>Regresar</a>
            </button>-->
          </div>
          <div class="form-row p-5">
              <div class="col-md-4 mb-2">
              <label for="" class="col-form-label col-form-label-sm mb-1">Localización</label>
              <input class="form-control form-control-sm" type="text" placeholder="#">
            </div>
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
                    <button class="btn btn-link" data-toggle="collapse" data-target="#feto1-coll" aria-expanded="true" aria-controls="collapseOne">
                      <i class="fas fa-plus mr-2"></i>Feto 1
                    </button>
                  </h5>
                </div>
                <div id="feto1-coll" class="collapse" aria-labelledby="head-feto1" data-parent="#accordion">
                  <div class="card-body">
                    <div class="form-row">
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
                      <div class="col-md-6 mb-2">
                        <label for="" class="col-form-label col-form-label-sm mb-1">Translucencia nucal</label>
                        <div class="form-row">
                          <div class="col-md-3">
                            <input class="form-control form-control-sm" type="text" placeholder="">
                          </div>
                          <div class="col-md-4">
                            <input class="form-control form-control-sm" type="text" placeholder="">
                          </div>
                          <div class="col-5 mb-2">
                            <input class="form-control form-control-sm" type="number" placeholder="mm">
                          </div>
                        </div>
                      </div>
                      <div class="col-md-3 mb-2">
                        <label for="" class="col-form-label col-form-label-sm mb-1">IP ducto venoso</label>
                        <input class="form-control form-control-sm" type="text" placeholder="">
                      </div>
                      <div class="col-md-3 mb-2">
                        <label for="" class="col-form-label col-form-label-sm mb-1">Onda "A"</label>
                        <input class="form-control form-control-sm" type="text" placeholder="">
                      </div>
                      <div class="col-md-3 mb-2">
                        <label for="inlineCheckbox1" class="form-check-label mb-1 col-form-label-sm col-12 p-0">Hueso Nasal presente</label>
                        <input class="" type="checkbox" data-toggle="toggle" data-size="sm" data-style="ios" data-on="SI" data-off="No">
                      </div>
                      <div class="col-md-4 mb-2">
                        <label for="inlineCheckbox1" class="form-check-label mb-1 col-form-label-sm col-12 p-0">Regurgitación Tricuspide </label>
                        <input class="" type="checkbox" data-toggle="toggle" data-size="sm" data-style="ios" data-on="SI" data-off="No">
                      </div>
                      <div class="col-md-6 mb-2">
                        <label for="" class="col-form-label col-form-label-sm mb-1">Defectos mayores</label>
                        <input class="form-control form-control-sm" type="text" placeholder="">
                      </div>
                      <div class="col-md-6 mb-4">
                        <label for="" class="col-form-label col-form-label-sm mb-1">Placenta</label>
                        <input class="form-control form-control-sm" type="text" placeholder="">
                      </div>
                      <div class="form-row col-md-12">
                        <h6 class="col-md-12 color-text-1">
                          Calculo de riego de Feto
                        </h6>
                        <h6 class="col-md-12 color-prim-1">Tricotomia 21</h6>
                        <div class="form-row col-md-12">
                          <div class=" col-4 mb-2">
                            <label for="" class="col-form-label col-form-label-sm mb-1 col-md-12 p-0">Riesgo Basal(EDAD)</label>
                            <input class="form-control form-control-sm" type="number" placeholder="1:">
                          </div>
                          <div class=" col-4 mb-2">
                            <label for="" class="col-form-label col-form-label-sm mb-1 col-md-12 p-0">Riesgo Ajustado(USG)</label>
                            <input class="form-control form-control-sm" type="number" placeholder="1:">
                          </div>
                          <div class=" col-4 mb-2">
                            <label for="" class="col-form-label col-form-label-sm mb-1 col-md-12 p-0">Riesgo AjustadoO (DUO-TEST)</label>
                            <input class="form-control form-control-sm" type="number" placeholder="1:">
                          </div>
                        </div>
                      </div>
                      <div class="form-row col-md-12">
                        <h6 class="col-md-12 color-prim-1">Tricotomia 18</h6>
                        <div class="form-row col-md-12">
                          <div class=" col-4 mb-2">
                            <label for="" class="col-form-label col-form-label-sm mb-1 col-md-12 p-0">Riesgo Basal(EDAD)</label>
                            <input class="form-control form-control-sm" type="number" placeholder="1:">
                          </div>
                          <div class=" col-4 mb-2">
                            <label for="" class="col-form-label col-form-label-sm mb-1 col-md-12 p-0">Riesgo Ajustado(USG)</label>
                            <input class="form-control form-control-sm" type="number" placeholder="1:">
                          </div>
                          <div class=" col-4 mb-2">
                            <label for="" class="col-form-label col-form-label-sm mb-1 col-md-12 p-0">Riesgo AjustadoO (DUO-TEST)</label>
                            <input class="form-control form-control-sm" type="number" placeholder="1:">
                          </div>
                        </div>
                      </div>
                      <div class="form-row col-md-12">
                        <h6 class="col-md-12 color-prim-1">Tricotomia 13</h6>
                        <div class="form-row col-md-12">
                          <div class=" col-4 mb-2">
                            <label for="" class="col-form-label col-form-label-sm mb-1 col-md-12 p-0">Riesgo Basal(EDAD)</label>
                            <input class="form-control form-control-sm" type="number" placeholder="1:">
                          </div>
                          <div class=" col-4 mb-2">
                            <label for="" class="col-form-label col-form-label-sm mb-1 col-md-12 p-0">Riesgo Ajustado(USG)</label>
                            <input class="form-control form-control-sm" type="number" placeholder="1:">
                          </div>
                          <div class=" col-4 mb-2">
                            <label for="" class="col-form-label col-form-label-sm mb-1 col-md-12 p-0">Riesgo AjustadoO (DUO-TEST)</label>
                            <input class="form-control form-control-sm" type="number" placeholder="1:">
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
                    <button class="btn btn-link" data-toggle="collapse" data-target="#feto2-coll" aria-expanded="true" aria-controls="collapseOne">
                      <i class="fas fa-plus mr-2"></i>Feto 2
                    </button>
                  </h5>
                </div>
                <div id="feto2-coll" class="collapse" aria-labelledby="head-feto2" data-parent="#accordion">
                  <div class="card-body">
                    <div class="form-row">
                      <div class="input-group-sm col-md-4 mb-1">
                        <label for="" class="col-form-label col-form-label-sm mb-0 pb-0">LCC</label>
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
                      <div class="col-md-6 mb-2">
                        <label for="" class="col-form-label col-form-label-sm mb-1">Translucencia nucal</label>
                        <div class="form-row">
                          <div class="col-md-3">
                            <input class="form-control form-control-sm" type="text" placeholder="">
                          </div>
                          <div class="col-md-4">
                            <input class="form-control form-control-sm" type="text" placeholder="">
                          </div>
                          <div class="col-5 mb-2">
                            <input class="form-control form-control-sm" type="number" placeholder="mm">
                          </div>
                        </div>
                      </div>
                      <div class="col-md-3 mb-2">
                        <label for="" class="col-form-label col-form-label-sm mb-1">IP ducto venoso</label>
                        <input class="form-control form-control-sm" type="text" placeholder="">
                      </div>
                      <div class="col-md-3 mb-2">
                        <label for="" class="col-form-label col-form-label-sm mb-1">Onda "A"</label>
                        <input class="form-control form-control-sm" type="text" placeholder="">
                      </div>
                      <div class="col-md-3 mb-2">
                        <label for="inlineCheckbox1" class="form-check-label mb-1 col-form-label-sm col-12 p-0">Hueso Nasal presente</label>
                        <input class="" type="checkbox" data-toggle="toggle" data-size="sm" data-style="ios" data-on="SI" data-off="No">
                      </div>
                      <div class="col-md-4 mb-2">
                        <label for="inlineCheckbox1" class="form-check-label mb-1 col-form-label-sm col-12 p-0">Regurgitación Tricuspide </label>
                        <input class="" type="checkbox" data-toggle="toggle" data-size="sm" data-style="ios" data-on="SI" data-off="No">
                      </div>
                      <div class="col-md-6 mb-2">
                        <label for="" class="col-form-label col-form-label-sm mb-1">Defectos mayores</label>
                        <input class="form-control form-control-sm" type="text" placeholder="">
                      </div>
                      <div class="col-md-6 mb-4">
                        <label for="" class="col-form-label col-form-label-sm mb-1">Placenta</label>
                        <input class="form-control form-control-sm" type="text" placeholder="">
                      </div>
                     <div class="form-row col-md-12">
                        <h6 class="col-md-12 color-text-1">
                          Calculo de riego de Feto
                        </h6>
                        <h6 class="col-md-12 color-prim-1">Tricotomia 21</h6>
                        <div class="form-row col-md-12">
                          <div class=" col-4 mb-2">
                            <label for="" class="col-form-label col-form-label-sm mb-1 col-md-12 p-0">Riesgo Basal(EDAD)</label>
                            <input class="form-control form-control-sm" type="number" placeholder="1:">
                          </div>
                          <div class=" col-4 mb-2">
                            <label for="" class="col-form-label col-form-label-sm mb-1 col-md-12 p-0">Riesgo Ajustado(USG)</label>
                            <input class="form-control form-control-sm" type="number" placeholder="1:">
                          </div>
                          <div class=" col-4 mb-2">
                            <label for="" class="col-form-label col-form-label-sm mb-1 col-md-12 p-0">Riesgo AjustadoO (DUO-TEST)</label>
                            <input class="form-control form-control-sm" type="number" placeholder="1:">
                          </div>
                        </div>
                      </div>
                      <div class="form-row col-md-12">
                        <h6 class="col-md-12 color-prim-1">Tricotomia 18</h6>
                        <div class="form-row col-md-12">
                          <div class=" col-4 mb-2">
                            <label for="" class="col-form-label col-form-label-sm mb-1 col-md-12 p-0">Riesgo Basal(EDAD)</label>
                            <input class="form-control form-control-sm" type="number" placeholder="1:">
                          </div>
                          <div class=" col-4 mb-2">
                            <label for="" class="col-form-label col-form-label-sm mb-1 col-md-12 p-0">Riesgo Ajustado(USG)</label>
                            <input class="form-control form-control-sm" type="number" placeholder="1:">
                          </div>
                          <div class=" col-4 mb-2">
                            <label for="" class="col-form-label col-form-label-sm mb-1 col-md-12 p-0">Riesgo AjustadoO (DUO-TEST)</label>
                            <input class="form-control form-control-sm" type="number" placeholder="1:">
                          </div>
                        </div>
                      </div>
                      <div class="form-row col-md-12">
                        <h6 class="col-md-12 color-prim-1">Tricotomia 13</h6>
                        <div class="form-row col-md-12">
                          <div class=" col-4 mb-2">
                            <label for="" class="col-form-label col-form-label-sm mb-1 col-md-12 p-0">Riesgo Basal(EDAD)</label>
                            <input class="form-control form-control-sm" type="number" placeholder="1:">
                          </div>
                          <div class=" col-4 mb-2">
                            <label for="" class="col-form-label col-form-label-sm mb-1 col-md-12 p-0">Riesgo Ajustado(USG)</label>
                            <input class="form-control form-control-sm" type="number" placeholder="1:">
                          </div>
                          <div class=" col-4 mb-2">
                            <label for="" class="col-form-label col-form-label-sm mb-1 col-md-12 p-0">Riesgo AjustadoO (DUO-TEST)</label>
                            <input class="form-control form-control-sm" type="number" placeholder="1:">
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="">
                <div class="card-header p-0" id="head-feto3">
                  <h5 class="mb-0">
                    <button class="btn btn-link" data-toggle="collapse" data-target="#feto3-coll" aria-expanded="true" aria-controls="collapseOne">
                      <i class="fas fa-plus mr-2"></i>Feto 3
                    </button>
                  </h5>
                </div>
                <div id="feto3-coll" class="collapse" aria-labelledby="head-feto3" data-parent="#accordion">
                  <div class="card-body">
                    <div class="form-row">
                      <div class="input-group-sm col-md-4 mb-1">
                        <label for="" class="col-form-label col-form-label-sm mb-0 pb-0">LCC</label>
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
                      <div class="col-md-6 mb-2">
                        <label for="" class="col-form-label col-form-label-sm mb-1">Translucencia nucal</label>
                        <div class="form-row">
                          <div class="col-md-3">
                            <input class="form-control form-control-sm" type="text" placeholder="">
                          </div>
                          <div class="col-md-4">
                            <input class="form-control form-control-sm" type="text" placeholder="">
                          </div>
                          <div class="col-5 mb-2">
                            <input class="form-control form-control-sm" type="number" placeholder="mm">
                          </div>
                        </div>
                      </div>
                      <div class="col-md-3 mb-2">
                        <label for="" class="col-form-label col-form-label-sm mb-1">IP ducto venoso</label>
                        <input class="form-control form-control-sm" type="text" placeholder="">
                      </div>
                      <div class="col-md-3 mb-2">
                        <label for="" class="col-form-label col-form-label-sm mb-1">Onda "A"</label>
                        <input class="form-control form-control-sm" type="text" placeholder="">
                      </div>
                      <div class="col-md-3 mb-2">
                        <label for="inlineCheckbox1" class="form-check-label mb-1 col-form-label-sm col-12 p-0">Hueso Nasal presente</label>
                        <input class="" type="checkbox" data-toggle="toggle" data-size="sm" data-style="ios" data-on="SI" data-off="No">
                      </div>
                      <div class="col-md-4 mb-2">
                        <label for="inlineCheckbox1" class="form-check-label mb-1 col-form-label-sm col-12 p-0">Regurgitación Tricuspide </label>
                        <input class="" type="checkbox" data-toggle="toggle" data-size="sm" data-style="ios" data-on="SI" data-off="No">
                      </div>
                      <div class="col-md-6 mb-2">
                        <label for="" class="col-form-label col-form-label-sm mb-1">Defectos mayores</label>
                        <input class="form-control form-control-sm" type="text" placeholder="">
                      </div>
                      <div class="col-md-6 mb-4">
                        <label for="" class="col-form-label col-form-label-sm mb-1">Placenta</label>
                        <input class="form-control form-control-sm" type="text" placeholder="">
                      </div>
                      <div class="form-row col-md-12">
                        <h6 class="col-md-12 color-text-1">
                          Calculo de riego de Feto
                        </h6>
                        <h6 class="col-md-12 color-prim-1">Tricotomia 21</h6>
                        <div class="form-row col-md-12">
                          <div class=" col-4 mb-2">
                            <label for="" class="col-form-label col-form-label-sm mb-1 col-md-12 p-0">Riesgo Basal(EDAD)</label>
                            <input class="form-control form-control-sm" type="number" placeholder="1:">
                          </div>
                          <div class=" col-4 mb-2">
                            <label for="" class="col-form-label col-form-label-sm mb-1 col-md-12 p-0">Riesgo Ajustado(USG)</label>
                            <input class="form-control form-control-sm" type="number" placeholder="1:">
                          </div>
                          <div class=" col-4 mb-2">
                            <label for="" class="col-form-label col-form-label-sm mb-1 col-md-12 p-0">Riesgo AjustadoO (DUO-TEST)</label>
                            <input class="form-control form-control-sm" type="number" placeholder="1:">
                          </div>
                        </div>
                      </div>
                      <div class="form-row col-md-12">
                        <h6 class="col-md-12 color-prim-1">Tricotomia 18</h6>
                        <div class="form-row col-md-12">
                          <div class=" col-4 mb-2">
                            <label for="" class="col-form-label col-form-label-sm mb-1 col-md-12 p-0">Riesgo Basal(EDAD)</label>
                            <input class="form-control form-control-sm" type="number" placeholder="1:">
                          </div>
                          <div class=" col-4 mb-2">
                            <label for="" class="col-form-label col-form-label-sm mb-1 col-md-12 p-0">Riesgo Ajustado(USG)</label>
                            <input class="form-control form-control-sm" type="number" placeholder="1:">
                          </div>
                          <div class=" col-4 mb-2">
                            <label for="" class="col-form-label col-form-label-sm mb-1 col-md-12 p-0">Riesgo AjustadoO (DUO-TEST)</label>
                            <input class="form-control form-control-sm" type="number" placeholder="1:">
                          </div>
                        </div>
                      </div>
                      <div class="form-row col-md-12">
                        <h6 class="col-md-12 color-prim-1">Tricotomia 13</h6>
                        <div class="form-row col-md-12">
                          <div class=" col-4 mb-2">
                            <label for="" class="col-form-label col-form-label-sm mb-1 col-md-12 p-0">Riesgo Basal(EDAD)</label>
                            <input class="form-control form-control-sm" type="number" placeholder="1:">
                          </div>
                          <div class=" col-4 mb-2">
                            <label for="" class="col-form-label col-form-label-sm mb-1 col-md-12 p-0">Riesgo Ajustado(USG)</label>
                            <input class="form-control form-control-sm" type="number" placeholder="1:">
                          </div>
                          <div class=" col-4 mb-2">
                            <label for="" class="col-form-label col-form-label-sm mb-1 col-md-12 p-0">Riesgo AjustadoO (DUO-TEST)</label>
                            <input class="form-control form-control-sm" type="number" placeholder="1:">
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
              Dopler de arterias uterinas
            </h6>
            <div class="col-md-5 mb-2">
              <label for="" class="col-form-label col-form-label-sm mb-1">IP arteria uterina derecha</label>
              <input class="form-control form-control-sm" type="text" placeholder="">
            </div>
            <div class="col-md-1 mb-2">
              <label for="inlineCheckbox1" class="form-check-label pl-0 col-form-label-sm col-12 mb-1">NOTCH</label>
              <input class="" type="checkbox" data-toggle="toggle" data-size="sm" data-style="ios" data-on="SI" data-off="No">
            </div>
            <div class="col-md-5 mb-2">
              <label for="" class="col-form-label col-form-label-sm mb-1">IP arteria uterina izquierda</label>
              <input class="form-control form-control-sm" type="text" placeholder="">
            </div>
            <div class="col-md-1 mb-2">
              <label for="inlineCheckbox1" class="form-check-label pl-0 col-form-label-sm col-12 mb-1">NOTCH</label>
              <input class="" type="checkbox" data-toggle="toggle" data-size="sm" data-style="ios" data-on="SI" data-off="No">
            </div>
            <div class="col-md-6 mb-2">
              <label for="" class="col-form-label col-form-label-sm mb-1">IP arteria uterinas</label>
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
                <input class="form-control form-control-sm" type="text" placeholder="">
              </div>
              <div class="col-md-3 mb-2">
                <label for="" class="col-form-label col-form-label-sm mb-1">Fecha de procesamiento</label>
                <input class="form-control form-control-sm" type="text" placeholder="">
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
              <div class="col-md-4 mb-2">
                <label for="" class="col-form-label col-form-label-sm mb-1">Para Preclampsia <h6><small>antes de 24 semanas</small></h6></label>
                <input class="form-control form-control-sm" type="text" placeholder="">
              </div>
              <div class="col-md-4 mb-2">
                <label for="" class="col-form-label col-form-label-sm mb-1">Para Restriccion de crecimiento <h6><small>antes de 24 semanas</small></h6></label>
                <input class="form-control form-control-sm" type="text" placeholder="">
              </div>
              <div class="col-md-4 mb-2">
                <label for="" class="col-form-label col-form-label-sm mb-1">Para Parto pretérmino <h6><small>antes de 24 semanas</small></h6></label>
                <input class="form-control form-control-sm" type="text" placeholder="">
              </div>
            </div>
            <div class="form-row col-md-12">
              <h6 class="col-md-12 color-text-1 mt-3 mb-0">
                Tabaquismo
              </h6>
              <div class="col-md-1 mb-2">
                <label for="inlineCheckbox1" class="form-check-label pl-0 col-form-label-sm col-12 mb-1">Fuma</label>
                <input class="" type="checkbox" data-toggle="toggle" data-size="sm" data-style="ios" data-on="SI" data-off="No">
              </div>
              <div class="col-md-2 mb-2">
                <label for="" class="col-form-label col-form-label-sm mb-1">¿Cuantos al día?</label>
                <input class="form-control form-control-sm" type="number" placeholder="#">
              </div>
              <div class="col-md-3 mb-2">
                <label for="inlineCheckbox1" class="form-check-label pl-0 col-form-label-sm col-12 mb-1">¿Durante el embarazo?</label>
                <input class="" type="checkbox" data-toggle="toggle" data-size="sm" data-style="ios" data-on="SI" data-off="No">
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
              </br>
              <label for="" class="col-form-label col-form-label-sm mb-1">Fecha de extracción de ovocitos:</label>
              <input class="form-control form-control-sm" type="text" placeholder="">
            </div>
            
            <div class="col-md-12 mb-2">
              <label for="" class="col-form-label col-form-label-sm mb-1">Fecha de congelación:</label>
              <input class="form-control form-control-sm" type="text" placeholder="">
            </div>
            
            <div class="col-md-12 mb-2">
              <label for="" class="col-form-label col-form-label-sm mb-1">En caso de donante de ovocitos, indique su fecha de nacimiento o edad aproximada:</label>
              <input class="form-control form-control-sm" type="text" placeholder="">
              <input class="form-control form-control-sm" type="text" placeholder="años">
            </div>
            
            
            
                
              </div>
            </div>
          </div>
        </div>
        <!--      fin de copiado de anexo 4-->


           

            </div>
        </div>
    </div>
@endsection

@push('js')
    <script>
        $(document).ready(function() {
            // Javascript method's body can be found in assets/js/demos.js
            demo.initGoogleMaps();
        });
    </script>
@endpush


<script>
    import { mdbTableEditable, mdbCard, mdbCardBody, mdbContainer } from 'mdbvue';
    export default {
        name: 'TableEditablePage',
        components: {
            mdbTableEditable,
            card-title,
            mdbCardBody,
            mdbContainer
        },
        data() {
            return {
                columns: [
                    {
                        label: 'Name',
                        field: 'name',
                    },
                    {
                        label: 'Position',
                        field: 'position',
                    },
                    {
                        label: 'Office',
                        field: 'office',
                    },
                    {
                        label: 'Age',
                        field: 'age',
                    },
                    {
                        label: 'Start date',
                        field: 'date',
                        sort: 'asc'
                    },
                    {
                        label: 'Salary',
                        field: 'salary',
                    }
                ],
                rows: [
                    {
                        name: 'Tiger Nixon',
                        position: 'System Architect',
                        office: 'Edinburgh',
                        age: '61',
                        date: '2011/04/25',
                        salary: '$320'
                    },
                    {
                        name: 'Garrett Winters',
                        position: 'Accountant',
                        office: 'Tokyo',
                        age: '63',
                        date: '2011/07/25',
                        salary: '$170'
                    },
                    {
                        name: 'Ashton Cox',
                        position: 'Junior Technical Author',
                        office: 'San Francisco',
                        age: '66',
                        date: '2009/01/12',
                        salary: '$86'
                    },
                    {
                        name: 'Cedric Kelly',
                        position: 'Senior Javascript Developer',
                        office: 'Edinburgh',
                        age: '22',
                        date: '2012/03/29',
                        salary: '$433'
                    }
                ]
            };
        }
    }
</script>
