@extends('layouts.app', ['activePage' => 'form_regular', 'menuParent' => 'forms', 'titlePage' => __('Regular Forms')])

@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="col-md-12 mr-auto ml-auto">
                <!--      Wizard container        -->
                <div class="wizard-container">
                    <div class="card card-wizard" data-color="rose" id="wizardProfile">
                        <h5 class="title-ciclica">Nutrición Perinatal</h5>
            <form method="post"  action="" autocomplete="off" class="form-horizontal">
                @csrf


                    <div class="content p-0">
                        <div class="container-fluid">
                            <div class=" m-0">
                                <div class="card-body ">
                                    
                                    <div class="tab-content tab-space">
                                        <!-- primer metodo del panel-->
                                        <div class="tab-pane  active show" id="link1">
                                            <div class="row">
                                                <div class="col-md-4 mb-2">
              <label for="" class="col-form-label col-form-label-sm mb-1">Número de embarazos anteriores</label>
              <input class="form-control form-control-sm" type="number" placeholder="#">
            </div>
            <div class="col-md-4 mb-2">
              <label for="" class="col-form-label col-form-label-sm mb-1">Peso pre gestacional</label>
              <input class="form-control form-control-sm" type="text" placeholder="kg">
            </div>
            <div class="col-md-4 mb-2">
              <label for="" class="col-form-label col-form-label-sm mb-1">Peso al final del embarazo</label>
              <input class="form-control form-control-sm" type="text" placeholder="kg">
            </div>
            <div class="col-md-3 mb-2">
              <label for="" class="col-form-label col-form-label-sm mb-1"> Peso pre gestacional</label>
              <input class="form-control form-control-sm" type="text" placeholder="kg">
            </div>
            <div class="col-md-3 mb-2">
              <label for="" class="col-form-label col-form-label-sm mb-1">Peso al final del embarazo</label>
              <input class="form-control form-control-sm" type="text" placeholder="kg">
            </div>
            <div class="col-md-3 mb-2">
              <label for="" class="col-form-label col-form-label-sm mb-1">Peso pre gestacional</label>
              <input class="form-control form-control-sm" type="text" placeholder="kg">
            </div>
            <div class="col-md-3 mb-2">
              <label for="" class="col-form-label col-form-label-sm mb-1">Peso al final del embarazo</label>
              <input class="form-control form-control-sm" type="text" placeholder="kg">
            </div>
            <h6 class="col-md-12 color-text-1 mt-3 mb-0">
              Embarazo actual
            </h6>
            <div class="col-md-6 mb-2">
              <label for="" class="col-form-label col-form-label-sm mb-1">Fecha de inicio del tx</label>
              <input class="form-control form-control-sm" type="text" placeholder="">
            </div>
            <div class="col-md-6 mb-2">
              <label for="" class="col-form-label col-form-label-sm mb-1">Semana de gestación</label>
              <input class="form-control form-control-sm" type="text" placeholder="">
            </div>
            <div class="col-md-4 mb-2">
              <label for="" class="col-form-label col-form-label-sm mb-1">Trimestre</label>
              <input class="form-control form-control-sm" type="text" placeholder="">
            </div>
            <div class="col-md-4 mb-2">
              <label for="" class="col-form-label col-form-label-sm mb-1">Pesó pre-gestacional</label>
              <input class="form-control form-control-sm" type="text" placeholder="">
            </div>
            <div class="col-md-4 mb-2">
              <label for="" class="col-form-label col-form-label-sm mb-1">IMC Pre-gestacional</label>
              <input class="form-control form-control-sm" type="text" placeholder="">
            </div>
            <!--acordeon fanexo 4-->
            <div id="accordion" class="col-12 my-3">
              <div class="card">
                <div class="card-header p-0" id="head-anexo5a">
                  <h5 class="mb-0">
                    <button class="btn btn-link" data-toggle="collapse" data-target="#anexo5a-tab" aria-expanded="true" aria-controls="collapseOne">
                      <i class="fas fa-plus mr-2"></i>ANTECEDENTES SALUD/ENFERMEDAD
                    </button>
                  </h5>
                </div>
                <div id="anexo5a-tab" class="collapse" aria-labelledby="head-anexo5a" data-parent="#accordion">
                  <div class="card-body">
                    <div class="form-row">
                      <div class="form-row col-md-12">
                        <h6 class="col-md-12 color-text-1">
                          PROBLEMAS ACTUALES
                        </h6>
                      </div>
                      <div class="col-md-2 mb-2">
                        <label for="inlineCheckbox1" class="form-check-label pl-0 col-form-label-sm col-12 mb-1">Diarrea</label>
                        <input class="" type="checkbox" data-toggle="toggle" data-size="sm" data-style="ios" data-on="SI" data-off="No">
                      </div>
                      <div class="col-md-2 mb-2">
                        <label for="inlineCheckbox1" class="form-check-label pl-0 col-form-label-sm col-12 mb-1">Estreñimiento</label>
                        <input class="" type="checkbox" data-toggle="toggle" data-size="sm" data-style="ios" data-on="SI" data-off="No">
                      </div>
                      <div class="col-md-2 mb-2">
                        <label for="inlineCheckbox1" class="form-check-label pl-0 col-form-label-sm col-12 mb-1">Gastritis</label>
                        <input class="" type="checkbox" data-toggle="toggle" data-size="sm" data-style="ios" data-on="SI" data-off="No">
                      </div>
                      <div class="col-md-2 mb-2">
                        <label for="inlineCheckbox1" class="form-check-label pl-0 col-form-label-sm col-12 mb-1">Úlcera</label>
                        <input class="" type="checkbox" data-toggle="toggle" data-size="sm" data-style="ios" data-on="SI" data-off="No">
                      </div>
                      <div class="col-md-2 mb-2">
                        <label for="inlineCheckbox1" class="form-check-label pl-0 col-form-label-sm col-12 mb-1">Náuseas</label>
                        <input class="" type="checkbox" data-toggle="toggle" data-size="sm" data-style="ios" data-on="SI" data-off="No">
                      </div>
                      <div class="col-md-2 mb-2">
                        <label for="inlineCheckbox1" class="form-check-label pl-0 col-form-label-sm col-12 mb-1">Pirosis</label>
                        <input class="" type="checkbox" data-toggle="toggle" data-size="sm" data-style="ios" data-on="SI" data-off="No">
                      </div>
                      <div class="col-md-2 mb-2">
                        <label for="inlineCheckbox1" class="form-check-label pl-0 col-form-label-sm col-12 mb-1">Vómito </label>
                        <input class="" type="checkbox" data-toggle="toggle" data-size="sm" data-style="ios" data-on="SI" data-off="No">
                      </div>
                      <div class="col-md-2 mb-2">
                        <label for="inlineCheckbox1" class="form-check-label pl-0 col-form-label-sm col-12 mb-1">Colitis </label>
                        <input class="" type="checkbox" data-toggle="toggle" data-size="sm" data-style="ios" data-on="SI" data-off="No">
                      </div>
                      <div class="col-md-6 mb-2">
                        <label for="" class="col-form-label col-form-label-sm mb-1">Otros</label>
                        <input class="form-control form-control-sm" type="text" placeholder="Especifique">
                      </div>
                      <div class="col-md-6 mb-2">
                        <label for="" class="col-form-label col-form-label-sm mb-1">Observaciones</label>
                        <input class="form-control form-control-sm" type="text" placeholder="Especifique">
                      </div>
                      <div class="col-md-2 mb-2">
                        <label for="" class="col-form-label col-form-label-sm mb-1">TA</label>
                        <input class="form-control form-control-sm" type="text" placeholder="Especifique">
                      </div>
                      <div class="col-md-4 mb-2">
                        <label for="" class="col-form-label col-form-label-sm mb-1">Padece alguna enfermedad diagnosticada</label>
                        <input class="form-control form-control-sm" type="text" placeholder="Especifique">
                      </div>
                      <div class="col-md-6 mb-2">
                        <label for="" class="col-form-label col-form-label-sm mb-1">Ha padecido alguna enfermedad importante</label>
                        <input class="form-control form-control-sm" type="text" placeholder="Especifique">
                      </div>
                      <div class="col-md-6 mb-2">
                        <label for="" class="col-form-label col-form-label-sm mb-1">Ha padecido alguna enfermedad importante</label>
                        <input class="form-control form-control-sm" type="text" placeholder="Especifique">
                      </div>
                      <div class="form-group col-md-12">
                        <div class="col-md-12 p-0 mb-0">
                          <input class="" type="checkbox" data-toggle="toggle" data-size="sm" data-style="ios" data-on="SI" data-off="No">
                          <label for="inlineCheckbox1" class="form-check-label pl-0 col-form-label-sm mb-1">¿Toma algún medicamento?</label>
                        </div>
                        <div class="form-row">
                          <div class="col-md-6 mb-2">
                            <label for="" class="col-form-label col-form-label-sm mb-1">Cuál</label>
                            <input class="form-control form-control-sm" type="text" placeholder="Especifique">
                          </div>
                          <div class="col-md-3 mb-2">
                            <label for="" class="col-form-label col-form-label-sm mb-1">Dosis</label>
                            <input class="form-control form-control-sm" type="text" placeholder="Especifique">
                          </div>
                          <div class="col-md-3 mb-2">
                            <label for="" class="col-form-label col-form-label-sm mb-1">Desde cuándo</label>
                            <input class="form-control form-control-sm" type="text" placeholder="Especifique">
                          </div>
                        </div>
                        <div class="form-row">
                          <div class="col-md-6 mb-2">
                            <label for="" class="col-form-label col-form-label-sm mb-1">Cuál</label>
                            <input class="form-control form-control-sm" type="text" placeholder="Especifique">
                          </div>
                          <div class="col-md-3 mb-2">
                            <label for="" class="col-form-label col-form-label-sm mb-1">Dosis</label>
                            <input class="form-control form-control-sm" type="text" placeholder="Especifique">
                          </div>
                          <div class="col-md-3 mb-2">
                            <label for="" class="col-form-label col-form-label-sm mb-1">Desde cuándo</label>
                            <input class="form-control form-control-sm" type="text" placeholder="Especifique">
                          </div>
                        </div>
                        <div class="form-row">
                          <div class="col-md-6 mb-2">
                            <label for="" class="col-form-label col-form-label-sm mb-1">Cuál</label>
                            <input class="form-control form-control-sm" type="text" placeholder="Especifique">
                          </div>
                          <div class="col-md-3 mb-2">
                            <label for="" class="col-form-label col-form-label-sm mb-1">Dosis</label>
                            <input class="form-control form-control-sm" type="text" placeholder="Especifique">
                          </div>
                          <div class="col-md-3 mb-2">
                            <label for="" class="col-form-label col-form-label-sm mb-1">Desde cuándo</label>
                            <input class="form-control form-control-sm" type="text" placeholder="Especifique">
                          </div>
                          <div class="col-md-2 mb-2">
                            <label for="inlineCheckbox1" class="form-check-label pl-0 col-form-label-sm col-12 mb-1">Laxantes</label>
                            <input class="" type="checkbox" data-toggle="toggle" data-size="sm" data-style="ios" data-on="SI" data-off="No">
                          </div>
                          <div class="col-md-2 mb-2">
                            <label for="inlineCheckbox1" class="form-check-label pl-0 col-form-label-sm col-12 mb-1">Diuréticos</label>
                            <input class="" type="checkbox" data-toggle="toggle" data-size="sm" data-style="ios" data-on="SI" data-off="No">
                          </div>
                          <div class="col-md-2 mb-2">
                            <label for="inlineCheckbox1" class="form-check-label pl-0 col-form-label-sm col-12 mb-1">Antiácidos</label>
                            <input class="" type="checkbox" data-toggle="toggle" data-size="sm" data-style="ios" data-on="SI" data-off="No">
                          </div>
                          <div class="col-md-2 mb-2">
                            <label for="inlineCheckbox1" class="form-check-label pl-0 col-form-label-sm col-12 mb-1">Analgésicos</label>
                            <input class="" type="checkbox" data-toggle="toggle" data-size="sm" data-style="ios" data-on="SI" data-off="No">
                          </div>
                          <div class="col-md-4 mb-2">
                            <label for="" class="col-form-label col-form-label-sm mb-1">Le han practicado alguna cirugía:</label>
                            <input class="form-control form-control-sm" type="text" placeholder="Especifique">
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="card">
                <div class="card-header p-0" id="head-anexo5b">
                  <h5 class="mb-0">
                    <button class="btn btn-link" data-toggle="collapse" data-target="#anexo5b-tab" aria-expanded="true" aria-controls="collapseOne">
                      <i class="fas fa-plus mr-2"></i>ANTECEDENTES FAMILIARES
                    </button>
                  </h5>
                </div>
                <div id="anexo5b-tab" class="collapse" aria-labelledby="head-anexo5b" data-parent="#accordion">
                  <div class="card-body">
                    <div class="form-row">
                      <div class="col-md-4 mb-2">
                        <label for="" class="col-form-label col-form-label-sm mb-1">Obesidad</label>
                        <input class="form-control form-control-sm" type="text" placeholder="">
                      </div>
                      <div class="col-md-4 mb-2">
                        <label for="" class="col-form-label col-form-label-sm mb-1">Diabetes (tipo)</label>
                        <input class="form-control form-control-sm" type="text" placeholder="">
                      </div>
                      <div class="col-md-4 mb-2">
                        <label for="" class="col-form-label col-form-label-sm mb-1">HTA</label>
                        <input class="form-control form-control-sm" type="text" placeholder="">
                      </div>
                      <div class="col-md-4 mb-2">
                        <label for="" class="col-form-label col-form-label-sm mb-1">Cáncer</label>
                        <input class="form-control form-control-sm" type="text" placeholder="">
                      </div>
                      <div class="col-md-4 mb-2">
                        <label for="" class="col-form-label col-form-label-sm mb-1">Hipercolesterolemia</label>
                        <input class="form-control form-control-sm" type="text" placeholder="">
                      </div>
                      <div class="col-md-4 mb-2">
                        <label for="" class="col-form-label col-form-label-sm mb-1">Hipertrigliceridemia</label>
                        <input class="form-control form-control-sm" type="text" placeholder="">
                      </div>
                      <div class="form-row col-md-12 mt-3">
                        <h6 class="col-md-12 color-text-1">
                          ACTIVIDAD FÍSICA
                        </h6>
                      </div>
                      <div class="col-md-3 mb-2">
                        <label for="" class="col-form-label col-form-label-sm mb-1">¿Cuál es tu profesión?</label>
                        <input class="form-control form-control-sm" type="text" placeholder="Especifique">
                      </div>
                      <div class="col-md-4 mb-2">
                        <label for="" class="col-form-label col-form-label-sm mb-1">¿Practica algún deporte o hace ejercicio</label>
                        <input class="form-control form-control-sm" type="text" placeholder="Especifique">
                      </div>
                      <div class="col-md-5 mb-2">
                        <label for="" class="col-form-label col-form-label-sm mb-1">¿Cuántos días y horas al día haces ejercicio?</label>
                        <input class="form-control form-control-sm" type="text" placeholder="Especifique">
                      </div>
                      <div class="form-row col-md-12">
                        <h6 class="col-md-12 color-text-1 mt-3">
                          CONSUMO DE FRECUENCUENCIA Y CANTIDAD
                        </h6>
                      </div>
                      <div class="col-md-3 mb-2">
                        <label for="" class="col-form-label col-form-label-sm mb-1">Alcohol</label>
                        <input class="form-control form-control-sm" type="text" placeholder="">
                      </div>
                      <div class="col-md-4 mb-2">
                        <label for="" class="col-form-label col-form-label-sm mb-1">Tabaco</label>
                        <input class="form-control form-control-sm" type="text" placeholder="">
                      </div>
                      <div class="col-md-5 mb-2">
                        <label for="" class="col-form-label col-form-label-sm mb-1">Café</label>
                        <input class="form-control form-control-sm" type="text" placeholder="">
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="card">
                <div class="card-header p-0" id="head-anexo5c">
                  <h5 class="mb-0">
                    <button class="btn btn-link" data-toggle="collapse" data-target="#anexo5c-tab" aria-expanded="true" aria-controls="collapseOne">
                      <i class="fas fa-plus mr-2"></i>INDICADORES BIOQUÍMICOS
                    </button>
                  </h5>
                </div>
                <div id="anexo5c-tab" class="collapse" aria-labelledby="head-anexo5c" data-parent="#accordion">
                  <div class="card-body">
                    <div class="form-row">
                      <div class="col-md-4 mb-2">
                        <label for="" class="col-form-label col-form-label-sm mb-1">Últimos estudios de laboratorio</label>
                        <input class="form-control form-control-sm" type="text" placeholder="">
                      </div>
                      <div class="col-md-8 mb-2">
                        <input class="" type="checkbox" data-toggle="toggle" data-size="sm" data-style="ios" data-on="SI" data-off="No">
                        <label for="inlineCheckbox1" class="form-check-label ml-2 col-form-label-sm mb-1">Se solicitaron análisis </label>
                        <input class="form-control form-control-sm" type="text" placeholder="">
                      </div>
                      <div class="col-md-12 mb-2">
                        <label for="" class="col-form-label col-form-label-sm mb-1"> Datos bioquímicos relevantes</label>
                        <textarea class="form-control form-control-sm" id="exampleFormControlTextarea1" rows="3"></textarea>
                      </div>
                      <h6 class="col-md-12 color-text-1 mt-3">
                        CONSUMO DE FRECUENCUENCIA Y CANTIDAD
                      </h6>
                      <div class="col-md-1 mb-2">
                        <label for="" class="col-form-label col-form-label-sm mb-1">Día</label>
                        <input class="form-control form-control-sm" type="number" placeholder="#">
                      </div>
                      <div class="col-md-3 mb-2">
                        <label for="" class="col-form-label col-form-label-sm mb-1">Glucosa </label>
                        <input class="form-control form-control-sm" type="number" placeholder="#">
                      </div>
                      <div class="col-md-1 mb-2">
                        <label for="" class="col-form-label col-form-label-sm mb-1">Día</label>
                        <input class="form-control form-control-sm" type="number" placeholder="#">
                      </div>
                      <div class="col-md-3 mb-2">
                        <label for="" class="col-form-label col-form-label-sm mb-1">Glucosa </label>
                        <input class="form-control form-control-sm" type="number" placeholder="#">
                      </div>
                      <div class="col-md-1 mb-2">
                        <label for="" class="col-form-label col-form-label-sm mb-1">Día</label>
                        <input class="form-control form-control-sm" type="number" placeholder="#">
                      </div>
                      <div class="col-md-3 mb-2">
                        <label for="" class="col-form-label col-form-label-sm mb-1">Glucosa </label>
                        <input class="form-control form-control-sm" type="number" placeholder="#">
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="card">
                <div class="card-header p-0" id="head-anexo5e">
                  <h5 class="mb-0">
                    <button class="btn btn-link" data-toggle="collapse" data-target="#anexo5e-tab" aria-expanded="true" aria-controls="collapseOne">
                      <i class="fas fa-plus mr-2"></i>INDICADORES DIETÉTICOS
                    </button>
                  </h5>
                </div>
                <div id="anexo5e-tab" class="collapse" aria-labelledby="head-anexo5e" data-parent="#accordion">
                  <div class="card-body">
                    <div class="form-row">
                      <div class="col-md-4 mb-2">
                        <label for="" class="col-form-label col-form-label-sm mb-1">Cuántas comidas haces al día</label>
                        <input class="form-control form-control-sm" type="number" placeholder="">
                      </div>
                      <div class="col-md-4 mb-2">
                        <label for="" class="col-form-label col-form-label-sm mb-1">Quién prepara sus alimentos</label>
                        <input class="form-control form-control-sm" type="text" placeholder="">
                      </div>
                      <div class="col-md-4 mb-2">
                        <input class="" type="checkbox" data-toggle="toggle" data-size="sm" data-style="ios" data-on="SI" data-off="No">
                        <label for="inlineCheckbox1" class="form-check-label ml-2 col-form-label-sm mb-1">Come entre comidas </label>
                        <input class="form-control form-control-sm" type="text" placeholder="¿Qué?">
                      </div>
                      <div class="col-md-12 mb-2">
                        <input class="" type="checkbox" data-toggle="toggle" data-size="sm" data-style="ios" data-on="SI" data-off="No">
                        <label for="inlineCheckbox1" class="form-check-label ml-2 col-form-label-sm ">Ha modificado su alimentación desde el inicio de su embarazo</label>
                        <div class="form-row mt-1 p-0">
                          <div class="form-group col-md-6 mb-0">
                            <input class="form-control form-control-sm" type="text" placeholder="¿Por qué?">
                          </div>
                          <div class="form-group col-md-6 mb-0">
                            <input class="form-control form-control-sm" type="text" placeholder="¿Cómo?">
                          </div>
                        </div>
                      </div>
                      <div class="col-md-2 mb-2">
                        <label for="" class="col-form-label col-form-label-sm mb-1">Apetito</label>
                        <select class="form-control form-control-sm" id="exampleFormControlSelect1">
                          <option>Bueno</option>
                          <option>Malo</option>
                          <option>Regular</option>
                        </select>
                      </div>
                      <div class="col-md-3 mb-2">
                        <label for="" class="col-form-label col-form-label-sm mb-1">A qué hora tiene más hambre</label>
                        <input class="form-control form-control-sm" type="text" placeholder="">
                      </div>
                      <div class="col-md-3 mb-2">
                        <label for="" class="col-form-label col-form-label-sm mb-1">Alimentos preferidos</label>
                        <input class="form-control form-control-sm" type="text" placeholder="">
                      </div>
                      <div class="col-md-3 mb-2">
                        <label for="" class="col-form-label col-form-label-sm mb-1">Alimentos que causan malestar</label>
                        <input class="form-control form-control-sm" type="text" placeholder="Especificar">
                      </div>
                      <div class="col-md-5 mb-2">
                        <input class="" type="checkbox" data-toggle="toggle" data-size="sm" data-style="ios" data-on="SI" data-off="No">
                        <label for="inlineCheckbox1" class="form-check-label ml-2 col-form-label-sm mb-1">Es alérgico o intolerante a algún alimento</label>
                        <input class="form-control form-control-sm" type="text" placeholder="Especificar">
                      </div>
                      <div class="col-md-7 mb-2">
                        <input class="" type="checkbox" data-toggle="toggle" data-size="sm" data-style="ios" data-on="SI" data-off="No">
                        <label for="inlineCheckbox1" class="form-check-label ml-2 col-form-label-sm mb-1">Su consumo varía cuando está triste, nervioso o ansioso:o</label>
                        <input class="form-control form-control-sm" type="text" placeholder="¿Cómo?">
                      </div>
                      <div class="col-md-5 mb-2">
                        <input class="" type="checkbox" data-toggle="toggle" data-size="sm" data-style="ios" data-on="SI" data-off="No">
                        <label for="inlineCheckbox1" class="form-check-label ml-2 col-form-label-sm mb-1">Es alérgico o intolerante a algún alimento</label>
                        <input class="form-control form-control-sm" type="text" placeholder="Especificar">
                      </div>
                      <div class="col-md-7 mb-2">
                        <label for="" class="col-form-label col-form-label-sm mb-1">Qué grasa utiliza en casa para preparar su comida:</label>
                        <select class="form-control form-control-sm" id="exampleFormControlSelect1">
                          <option>Margarina</option>
                          <option>Aceite vegetal</option>
                          <option>Manteca</option>
                          <option>Mantequilla</option>
                          <option>otro</option>
                        </select>
                      </div>
                      <div class="col-md-10 mb-2">
                        <label for="" class="col-form-label col-form-label-sm mb-1">Ha llevado alguna dieta especial</label>
                        <input class="form-control form-control-sm" type="text" placeholder="Especificar">
                      </div>
                      <div class="col-md-2 mb-2">
                        <label for="" class="col-form-label col-form-label-sm mb-1">Cuántas</label>
                        <input class="form-control form-control-sm" type="number" placeholder="#">
                      </div>
                      <div class="col-md-3 mb-2">
                        <label for="" class="col-form-label col-form-label-sm mb-1">Qué tipo de dieta</label>
                        <input class="form-control form-control-sm" type="text" placeholder="">
                      </div>
                      <div class="col-md-3 mb-2">
                        <label for="" class="col-form-label col-form-label-sm mb-1">Hace cuánto</label>
                        <input class="form-control form-control-sm" type="text" placeholder="">
                      </div>
                      <div class="col-md-3 mb-2">
                        <label for="" class="col-form-label col-form-label-sm mb-1">Por cuánto tiempo </label>
                        <input class="form-control form-control-sm" type="text" placeholder="">
                      </div>
                      <div class="col-md-3 mb-2">
                        <label for="" class="col-form-label col-form-label-sm mb-1">Por qué razón </label>
                        <input class="form-control form-control-sm" type="text" placeholder="">
                      </div>
                      <div class="col-md-3 mb-2">
                        <label for="" class="col-form-label col-form-label-sm mb-1">Qué tanto se apegó a ella</label>
                        <input class="form-control form-control-sm" type="text" placeholder="">
                      </div>
                      <div class="col-md-4 mb-2">
                        <label for="" class="col-form-label col-form-label-sm mb-1">Obtuvo los resultados esperados </label>
                        <input class="form-control form-control-sm" type="text" placeholder="">
                      </div>
                      <div class="col-md-2 mb-2">
                        <label for="" class="col-form-label col-form-label-sm mb-1">Kg perdidos </label>
                        <input class="form-control form-control-sm" type="number" placeholder="">
                      </div>
                      <div class="col-md-3 mb-2">
                        <label for="" class="col-form-label col-form-label-sm mb-1">Peso logrado </label>
                        <input class="form-control form-control-sm" type="number" placeholder="">
                      </div>
                      <div class="form-group col-md-12 mb-2">
                        <div class="col-md-12 p-0 mb-0">
                          <input class="" type="checkbox" data-toggle="toggle" data-size="sm" data-style="ios" data-on="SI" data-off="No">
                          <label for="inlineCheckbox1" class="form-check-label pl-0 col-form-label-sm mb-1">Ha utilizado medicamento para bajar de peso </label>
                        </div>
                        <div class="form-row">
                          <div class="col-md-8">
                            <input class="form-control form-control-sm" type="text" placeholder="¿Cuáles?">
                          </div>
                          <div class="col-md-4">
                            <input class="form-control form-control-sm" type="text" placeholder="Por cuanto tiempo ">
                          </div>
                        </div>
                      </div>
                      <div class="col-md-12 mb-2">
                        <label for="" class="col-form-label col-form-label-sm">Notas</label>
                        <textarea class="form-control form-control-sm" id="exampleFormControlTextarea1" rows="3"></textarea>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="form-row mt-1 p-0">
                <h6 class="col-md-12 m-0 mt-3 color-text-1">Antropometricos</h6>
                <div class=" col-md-2">
                  <label for="" class="col-form-label col-form-label-sm">Edad</label>
                  <input class="form-control form-control-sm" type="text" placeholder="Tiempo de envolución">
                </div>
                <div class=" col-md-2">
                  <label for="" class="col-form-label col-form-label-sm">Indicador</label>
                  <input class="form-control form-control-sm" type="text" placeholder="Frecuencia">
                </div>
                <div class=" col-md-2">
                  <label for="" class="col-form-label col-form-label-sm">Talla</label>
                  <input class="form-control form-control-sm" type="text" placeholder="Cantidad perdida">
                </div>
                <div class=" col-md-3">
                  <label for="" class="col-form-label col-form-label-sm">Peso pre gestacional</label>
                  <input class="form-control form-control-sm" type="text" placeholder="Cantidad perdida">
                </div>
                <div class=" col-md-3">
                  <label for="" class="col-form-label col-form-label-sm">IMC pre gestacional</label>
                  <input class="form-control form-control-sm" type="text" placeholder="Cantidad perdida">
                </div>
                <div class=" col-md-6">
                  <label for="" class="col-form-label col-form-label-sm">IGanancia de peso recomendada al final del embarazo</label>
                  <input class="form-control form-control-sm" type="text" placeholder="Cantidad perdida">
                </div>
                <div class=" col-md-6">
                  <label for="" class="col-form-label col-form-label-sm">Ganancia de peso durante el 2do y 3er trimestre (semanal)</label>
                  <input class="form-control form-control-sm" type="text" placeholder="Cantidad perdida">
                </div>
                <div class="col-md-12 mb-2">
                  <label for="" class="col-form-label col-form-label-sm">Notas</label>
                  <textarea class="form-control form-control-sm" id="exampleFormControlTextarea1" rows="3"></textarea>
                </div>
              </div>
            </div>

                                                <label class="col-sm-12 col-form-label text-center">RECORDATORIO DE 24 HORAS</label>

                                                <label class="col-sm-12 col-form-label text-center">Lunes</label>
                                                <label class="col-sm-2 col-form-label label-checkbox">Desayuno</label>
                                                <div class="col-sm-4">
                                                    <div class="form-group bmd-form-group">
                                                        <div class="dropdown bootstrap-select col-sm-12 pl-0 pr-0"><select class="selectpicker col-sm-12 pl-0 pr-0" name="anx5_lunes_desayuno" data-style="select-with-transition" title="" data-size="100" tabindex="-98">
                                                                <option value="1">Chicles</option>
                                                                <option value="2">Mentas</option>
                                                                <option value="3">Patillas</option>
                                                                <option value="4">Mermeladas</option>
                                                                <option value="5">Miel</option>
                                                                <option value="6">Azúcar</option>
                                                                <option value="7">Sustituto</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                <label class="col-sm-2 col-form-label label-checkbox">Colación</label>
                                                <div class="col-sm-4">
                                                    <div class="form-group bmd-form-group">
                                                        <div class="dropdown bootstrap-select col-sm-12 pl-0 pr-0"><select class="selectpicker col-sm-12 pl-0 pr-0" name="anx5_lunes_colacion" data-style="select-with-transition" title="" data-size="100" tabindex="-98">
                                                                <option value="1">Chicles</option>
                                                                <option value="2">Mentas</option>
                                                                <option value="3">Patillas</option>
                                                                <option value="4">Mermeladas</option>
                                                                <option value="5">Miel</option>
                                                                <option value="6">Azúcar</option>
                                                                <option value="7">Sustituto</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                <label class="col-sm-2 col-form-label label-checkbox">Comida</label>
                                                <div class="col-sm-4">
                                                    <div class="form-group bmd-form-group">
                                                        <div class="dropdown bootstrap-select col-sm-12 pl-0 pr-0"><select class="selectpicker col-sm-12 pl-0 pr-0" name="anx5_lunes_comida" data-style="select-with-transition" title="" data-size="100" tabindex="-98">
                                                                <option value="1">Chicles</option>
                                                                <option value="2">Mentas</option>
                                                                <option value="3">Patillas</option>
                                                                <option value="4">Mermeladas</option>
                                                                <option value="5">Miel</option>
                                                                <option value="6">Azúcar</option>
                                                                <option value="7">Sustituto</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                <label class="col-sm-2 col-form-label label-checkbox">Colación</label>
                                                <div class="col-sm-4">
                                                    <div class="form-group bmd-form-group">
                                                        <div class="dropdown bootstrap-select col-sm-12 pl-0 pr-0"><select class="selectpicker col-sm-12 pl-0 pr-0" name="anx5_lunes_colacion_1" data-style="select-with-transition" title="" data-size="100" tabindex="-98">
                                                                <option value="1">Chicles</option>
                                                                <option value="2">Mentas</option>
                                                                <option value="3">Patillas</option>
                                                                <option value="4">Mermeladas</option>
                                                                <option value="5">Miel</option>
                                                                <option value="6">Azúcar</option>
                                                                <option value="7">Sustituto</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                <label class="col-sm-2 col-form-label label-checkbox">Cena</label>
                                                <div class="col-sm-4">
                                                    <div class="form-group bmd-form-group">
                                                        <div class="dropdown bootstrap-select col-sm-12 pl-0 pr-0"><select class="selectpicker col-sm-12 pl-0 pr-0" name="anx5_lunes_cena" data-style="select-with-transition" title="" data-size="100" tabindex="-98">
                                                                <option value="1">Chicles</option>
                                                                <option value="2">Mentas</option>
                                                                <option value="3">Patillas</option>
                                                                <option value="4">Mermeladas</option>
                                                                <option value="5">Miel</option>
                                                                <option value="6">Azúcar</option>
                                                                <option value="7">Sustituto</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>

                                                <label class="col-sm-12 col-form-label text-center">Martes</label>
                                                <label class="col-sm-2 col-form-label label-checkbox">Desayuno</label>
                                                <div class="col-sm-4">
                                                    <div class="form-group bmd-form-group">
                                                        <div class="dropdown bootstrap-select col-sm-12 pl-0 pr-0"><select class="selectpicker col-sm-12 pl-0 pr-0" name="anx5_martes_desayuno" data-style="select-with-transition" title="" data-size="100" tabindex="-98">
                                                                <option value="1">Chicles</option>
                                                                <option value="2">Mentas</option>
                                                                <option value="3">Patillas</option>
                                                                <option value="4">Mermeladas</option>
                                                                <option value="5">Miel</option>
                                                                <option value="6">Azúcar</option>
                                                                <option value="7">Sustituto</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                <label class="col-sm-2 col-form-label label-checkbox">Colación</label>
                                                <div class="col-sm-4">
                                                    <div class="form-group bmd-form-group">
                                                        <div class="dropdown bootstrap-select col-sm-12 pl-0 pr-0"><select class="selectpicker col-sm-12 pl-0 pr-0" name="anx5_martes_colacion" data-style="select-with-transition" title="" data-size="100" tabindex="-98">
                                                                <option value="1">Chicles</option>
                                                                <option value="2">Mentas</option>
                                                                <option value="3">Patillas</option>
                                                                <option value="4">Mermeladas</option>
                                                                <option value="5">Miel</option>
                                                                <option value="6">Azúcar</option>
                                                                <option value="7">Sustituto</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                <label class="col-sm-2 col-form-label label-checkbox">Comida</label>
                                                <div class="col-sm-4">
                                                    <div class="form-group bmd-form-group">
                                                        <div class="dropdown bootstrap-select col-sm-12 pl-0 pr-0"><select class="selectpicker col-sm-12 pl-0 pr-0" name="anx5_martes_comida" data-style="select-with-transition" title="" data-size="100" tabindex="-98">
                                                                <option value="1">Chicles</option>
                                                                <option value="2">Mentas</option>
                                                                <option value="3">Patillas</option>
                                                                <option value="4">Mermeladas</option>
                                                                <option value="5">Miel</option>
                                                                <option value="6">Azúcar</option>
                                                                <option value="7">Sustituto</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                <label class="col-sm-2 col-form-label label-checkbox">Colación</label>
                                                <div class="col-sm-4">
                                                    <div class="form-group bmd-form-group">
                                                        <div class="dropdown bootstrap-select col-sm-12 pl-0 pr-0"><select class="selectpicker col-sm-12 pl-0 pr-0" name="anx5_martes_colacion_1" data-style="select-with-transition" title="" data-size="100" tabindex="-98">
                                                                <option value="1">Chicles</option>
                                                                <option value="2">Mentas</option>
                                                                <option value="3">Patillas</option>
                                                                <option value="4">Mermeladas</option>
                                                                <option value="5">Miel</option>
                                                                <option value="6">Azúcar</option>
                                                                <option value="7">Sustituto</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                <label class="col-sm-2 col-form-label label-checkbox">Cena</label>
                                                <div class="col-sm-4">
                                                    <div class="form-group bmd-form-group">
                                                        <div class="dropdown bootstrap-select col-sm-12 pl-0 pr-0"><select class="selectpicker col-sm-12 pl-0 pr-0" name="anx5_martes_cena" data-style="select-with-transition" title="" data-size="100" tabindex="-98">
                                                                <option value="1">Chicles</option>
                                                                <option value="2">Mentas</option>
                                                                <option value="3">Patillas</option>
                                                                <option value="4">Mermeladas</option>
                                                                <option value="5">Miel</option>
                                                                <option value="6">Azúcar</option>
                                                                <option value="7">Sustituto</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>

                                                <label class="col-sm-12 col-form-label text-center">Miercoles</label>
                                                <label class="col-sm-2 col-form-label label-checkbox">Desayuno</label>
                                                <div class="col-sm-4">
                                                    <div class="form-group bmd-form-group">
                                                        <div class="dropdown bootstrap-select col-sm-12 pl-0 pr-0"><select class="selectpicker col-sm-12 pl-0 pr-0" name="anx5_miercoles_desayuno" data-style="select-with-transition" title="" data-size="100" tabindex="-98">
                                                                <option value="1">Chicles</option>
                                                                <option value="2">Mentas</option>
                                                                <option value="3">Patillas</option>
                                                                <option value="4">Mermeladas</option>
                                                                <option value="5">Miel</option>
                                                                <option value="6">Azúcar</option>
                                                                <option value="7">Sustituto</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                <label class="col-sm-2 col-form-label label-checkbox">Colación</label>
                                                <div class="col-sm-4">
                                                    <div class="form-group bmd-form-group">
                                                        <div class="dropdown bootstrap-select col-sm-12 pl-0 pr-0"><select class="selectpicker col-sm-12 pl-0 pr-0" name="anx5_miercoles_colacion" data-style="select-with-transition" title="" data-size="100" tabindex="-98">
                                                                <option value="1">Chicles</option>
                                                                <option value="2">Mentas</option>
                                                                <option value="3">Patillas</option>
                                                                <option value="4">Mermeladas</option>
                                                                <option value="5">Miel</option>
                                                                <option value="6">Azúcar</option>
                                                                <option value="7">Sustituto</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                <label class="col-sm-2 col-form-label label-checkbox">Comida</label>
                                                <div class="col-sm-4">
                                                    <div class="form-group bmd-form-group">
                                                        <div class="dropdown bootstrap-select col-sm-12 pl-0 pr-0"><select class="selectpicker col-sm-12 pl-0 pr-0" name="anx5_miercoles_comida" data-style="select-with-transition" title="" data-size="100" tabindex="-98">
                                                                <option value="1">Chicles</option>
                                                                <option value="2">Mentas</option>
                                                                <option value="3">Patillas</option>
                                                                <option value="4">Mermeladas</option>
                                                                <option value="5">Miel</option>
                                                                <option value="6">Azúcar</option>
                                                                <option value="7">Sustituto</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                <label class="col-sm-2 col-form-label label-checkbox">Colación</label>
                                                <div class="col-sm-4">
                                                    <div class="form-group bmd-form-group">
                                                        <div class="dropdown bootstrap-select col-sm-12 pl-0 pr-0"><select class="selectpicker col-sm-12 pl-0 pr-0" name="anx5_miercoles_colacion_1" data-style="select-with-transition" title="" data-size="100" tabindex="-98">
                                                                <option value="1">Chicles</option>
                                                                <option value="2">Mentas</option>
                                                                <option value="3">Patillas</option>
                                                                <option value="4">Mermeladas</option>
                                                                <option value="5">Miel</option>
                                                                <option value="6">Azúcar</option>
                                                                <option value="7">Sustituto</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                <label class="col-sm-2 col-form-label label-checkbox">Cena</label>
                                                <div class="col-sm-4">
                                                    <div class="form-group bmd-form-group">
                                                        <div class="dropdown bootstrap-select col-sm-12 pl-0 pr-0"><select class="selectpicker col-sm-12 pl-0 pr-0" name="anx5_miercoles_cena" data-style="select-with-transition" title="" data-size="100" tabindex="-98">
                                                                <option value="1">Chicles</option>
                                                                <option value="2">Mentas</option>
                                                                <option value="3">Patillas</option>
                                                                <option value="4">Mermeladas</option>
                                                                <option value="5">Miel</option>
                                                                <option value="6">Azúcar</option>
                                                                <option value="7">Sustituto</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>

                                                <label class="col-sm-12 col-form-label text-center">Jueves</label>
                                                <label class="col-sm-2 col-form-label label-checkbox">Desayuno</label>
                                                <div class="col-sm-4">
                                                    <div class="form-group bmd-form-group">
                                                        <div class="dropdown bootstrap-select col-sm-12 pl-0 pr-0"><select class="selectpicker col-sm-12 pl-0 pr-0" name="anx5_jueves_desayuno" data-style="select-with-transition" title="" data-size="100" tabindex="-98">
                                                                <option value="1">Chicles</option>
                                                                <option value="2">Mentas</option>
                                                                <option value="3">Patillas</option>
                                                                <option value="4">Mermeladas</option>
                                                                <option value="5">Miel</option>
                                                                <option value="6">Azúcar</option>
                                                                <option value="7">Sustituto</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                <label class="col-sm-2 col-form-label label-checkbox">Colación</label>
                                                <div class="col-sm-4">
                                                    <div class="form-group bmd-form-group">
                                                        <div class="dropdown bootstrap-select col-sm-12 pl-0 pr-0"><select class="selectpicker col-sm-12 pl-0 pr-0" name="anx5_jueves_colacion" data-style="select-with-transition" title="" data-size="100" tabindex="-98">
                                                                <option value="1">Chicles</option>
                                                                <option value="2">Mentas</option>
                                                                <option value="3">Patillas</option>
                                                                <option value="4">Mermeladas</option>
                                                                <option value="5">Miel</option>
                                                                <option value="6">Azúcar</option>
                                                                <option value="7">Sustituto</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                <label class="col-sm-2 col-form-label label-checkbox">Comida</label>
                                                <div class="col-sm-4">
                                                    <div class="form-group bmd-form-group">
                                                        <div class="dropdown bootstrap-select col-sm-12 pl-0 pr-0"><select class="selectpicker col-sm-12 pl-0 pr-0" name="anx5_jueves_comida" data-style="select-with-transition" title="" data-size="100" tabindex="-98">
                                                                <option value="1">Chicles</option>
                                                                <option value="2">Mentas</option>
                                                                <option value="3">Patillas</option>
                                                                <option value="4">Mermeladas</option>
                                                                <option value="5">Miel</option>
                                                                <option value="6">Azúcar</option>
                                                                <option value="7">Sustituto</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                <label class="col-sm-2 col-form-label label-checkbox">Colación</label>
                                                <div class="col-sm-4">
                                                    <div class="form-group bmd-form-group">
                                                        <div class="dropdown bootstrap-select col-sm-12 pl-0 pr-0"><select class="selectpicker col-sm-12 pl-0 pr-0" name="anx5_jueves_colacion_1" data-style="select-with-transition" title="" data-size="100" tabindex="-98">
                                                                <option value="1">Chicles</option>
                                                                <option value="2">Mentas</option>
                                                                <option value="3">Patillas</option>
                                                                <option value="4">Mermeladas</option>
                                                                <option value="5">Miel</option>
                                                                <option value="6">Azúcar</option>
                                                                <option value="7">Sustituto</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                <label class="col-sm-2 col-form-label label-checkbox">Cena</label>
                                                <div class="col-sm-4">
                                                    <div class="form-group bmd-form-group">
                                                        <div class="dropdown bootstrap-select col-sm-12 pl-0 pr-0"><select class="selectpicker col-sm-12 pl-0 pr-0" name="anx5_jueves_cena" data-style="select-with-transition" title="" data-size="100" tabindex="-98">
                                                                <option value="1">Chicles</option>
                                                                <option value="2">Mentas</option>
                                                                <option value="3">Patillas</option>
                                                                <option value="4">Mermeladas</option>
                                                                <option value="5">Miel</option>
                                                                <option value="6">Azúcar</option>
                                                                <option value="7">Sustituto</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>

                                                <label class="col-sm-12 col-form-label text-center">Viernes</label>
                                                <label class="col-sm-2 col-form-label label-checkbox">Desayuno</label>
                                                <div class="col-sm-4">
                                                    <div class="form-group bmd-form-group">
                                                        <div class="dropdown bootstrap-select col-sm-12 pl-0 pr-0"><select class="selectpicker col-sm-12 pl-0 pr-0" name="anx5_viernes_desayuno" data-style="select-with-transition" title="" data-size="100" tabindex="-98">
                                                                <option value="1">Chicles</option>
                                                                <option value="2">Mentas</option>
                                                                <option value="3">Patillas</option>
                                                                <option value="4">Mermeladas</option>
                                                                <option value="5">Miel</option>
                                                                <option value="6">Azúcar</option>
                                                                <option value="7">Sustituto</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                <label class="col-sm-2 col-form-label label-checkbox">Colación</label>
                                                <div class="col-sm-4">
                                                    <div class="form-group bmd-form-group">
                                                        <div class="dropdown bootstrap-select col-sm-12 pl-0 pr-0"><select class="selectpicker col-sm-12 pl-0 pr-0" name="anx5_viernes_colacion" data-style="select-with-transition" title="" data-size="100" tabindex="-98">
                                                                <option value="1">Chicles</option>
                                                                <option value="2">Mentas</option>
                                                                <option value="3">Patillas</option>
                                                                <option value="4">Mermeladas</option>
                                                                <option value="5">Miel</option>
                                                                <option value="6">Azúcar</option>
                                                                <option value="7">Sustituto</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                <label class="col-sm-2 col-form-label label-checkbox">Comida</label>
                                                <div class="col-sm-4">
                                                    <div class="form-group bmd-form-group">
                                                        <div class="dropdown bootstrap-select col-sm-12 pl-0 pr-0"><select class="selectpicker col-sm-12 pl-0 pr-0" name="anx5_viernes_comida" data-style="select-with-transition" title="" data-size="100" tabindex="-98">
                                                                <option value="1">Chicles</option>
                                                                <option value="2">Mentas</option>
                                                                <option value="3">Patillas</option>
                                                                <option value="4">Mermeladas</option>
                                                                <option value="5">Miel</option>
                                                                <option value="6">Azúcar</option>
                                                                <option value="7">Sustituto</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                <label class="col-sm-2 col-form-label label-checkbox">Colación</label>
                                                <div class="col-sm-4">
                                                    <div class="form-group bmd-form-group">
                                                        <div class="dropdown bootstrap-select col-sm-12 pl-0 pr-0"><select class="selectpicker col-sm-12 pl-0 pr-0" name="anx5_viernes_colacion_1" data-style="select-with-transition" title="" data-size="100" tabindex="-98">
                                                                <option value="1">Chicles</option>
                                                                <option value="2">Mentas</option>
                                                                <option value="3">Patillas</option>
                                                                <option value="4">Mermeladas</option>
                                                                <option value="5">Miel</option>
                                                                <option value="6">Azúcar</option>
                                                                <option value="7">Sustituto</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                <label class="col-sm-2 col-form-label label-checkbox">Cena</label>
                                                <div class="col-sm-4">
                                                    <div class="form-group bmd-form-group">
                                                        <div class="dropdown bootstrap-select col-sm-12 pl-0 pr-0"><select class="selectpicker col-sm-12 pl-0 pr-0" name="anx5_viernes_cena" data-style="select-with-transition" title="" data-size="100" tabindex="-98">
                                                                <option value="1">Chicles</option>
                                                                <option value="2">Mentas</option>
                                                                <option value="3">Patillas</option>
                                                                <option value="4">Mermeladas</option>
                                                                <option value="5">Miel</option>
                                                                <option value="6">Azúcar</option>
                                                                <option value="7">Sustituto</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>

                                          <!--      <label class="col-sm-12 col-form-label text-center">ANTROPOMETRIA EMBARAZO</label>

                                                <label class="col-sm-12 col-form-label text-center">ANTROPOMÉTRICOS</label>

                                                <label class="col-sm-2 col-form-label">Edad</label>
                                                <div class="col-sm-4">
                                                    <div class="form-group bmd-form-group">
                                                        <input class="form-control" type="text" name="anx5_ANTROPOMETRICOS_edad" id="" required="true" aria-required="true">
                                                    </div>
                                                </div>

                                                <label class="col-sm-2 col-form-label">Indicador</label>
                                                <div class="col-sm-4">
                                                    <div class="form-group bmd-form-group">
                                                        <input class="form-control" type="text" name="anx5_ANTROPOMETRICOS_indicador" id="" required="true" aria-required="true">
                                                    </div>
                                                </div>


                                                <label class="col-sm-2 col-form-label">Talla</label>
                                                <div class="col-sm-4">
                                                    <div class="form-group bmd-form-group">
                                                        <input class="form-control" type="text" name="anx5_ANTROPOMETRICOS_talla" id="" required="true" aria-required="true">
                                                    </div>
                                                </div>

                                                <label class="col-sm-2 col-form-label">Peso pre gestacional</label>
                                                <div class="col-sm-4">
                                                    <div class="form-group bmd-form-group">
                                                        <input class="form-control" type="text" name="anx5_ANTROPOMETRICOS_peso_ges" id="" required="true" aria-required="true">
                                                    </div>
                                                </div>

                                                <label class="col-sm-2 col-form-label">IMC pre gestacional</label>
                                                <div class="col-sm-4">
                                                    <div class="form-group bmd-form-group">
                                                        <input class="form-control" type="text" name="anx5_ANTROPOMETRICOS_imc" id="" required="true" aria-required="true">
                                                    </div>
                                                </div>

                                                <label class="col-sm-2 col-form-label">Ganancia de peso recomendada al final del embarazo</label>
                                                <div class="col-sm-4">
                                                    <div class="form-group bmd-form-group">
                                                        <input class="form-control" type="text" name="anx5_ANTROPOMETRICOS_peso_final" id="" required="true" aria-required="true">
                                                    </div>
                                                </div>

                                                <label class="col-sm-2 col-form-label">Ganancia de peso durante el 2do y el 3er trimestre(semanal)</label>
                                                <div class="col-sm-4">
                                                    <div class="form-group bmd-form-group">
                                                        <input class="form-control" type="text" name="anx5_ANTROPOMETRICOS_peso_2_3" id="" required="true" aria-required="true">
                                                    </div>
                                                </div>
                                            </div>

                                            <label class="col-sm-2 col-form-label">Notas</label>
                                            <div class="col-sm-12">
                                                <div class="form-group bmd-form-group">
                                                    <input class="form-control" type="text" name="anx5_ANTROPOMETRICOS_notas" id="" required="true" aria-required="true">
                                                </div>
                                            </div>

-->





                                        </div>

                                    </div>

                                </div>


                                <div class="row justify-content-center">
                                    <button type="submit" class="btn btn-fill btn-rose">Guardar</button>
                                </div>
                            </div>


                        </div>
                    </div>
          

                    </div>
                    
            </form>        
                    </div>
                <!-- wizard container -->
                </div>
            </div>
        </div>
    </div>
@endsection

@push('js')
    <script>
        $(document).ready(function() {
            // Initialise the wizard
            demo.initMaterialWizard();
            setTimeout(function() {
                $('.card.card-wizard').addClass('active');
            }, 600);
        });
    </script>
@endpush


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
