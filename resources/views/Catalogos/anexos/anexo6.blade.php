<div class="wizard-container">
  <div class="card card-wizard" data-color="rose" id="wizardProfile">    
  
       <form id="myform" method="post" action="#" autocomplete="off" class="form-horizontal">
        @csrf
          @method('post')              

                          <div class="content p-0">
                        <div class="container-fluid">
                            <div class=" m-0">
                                <div class="card-body ">
                                    
                                    <div class="tab-content tab-space">
                                        <!-- primer metodo del panel-->
                                        <div class="tab-pane  active show" id="link1">
                                            <div class="row">
                                                <div class="col-md-6 mb-2">
              <label for="" class="col-form-label col-form-label-sm mb-1">Pesó mímimo</label>
              <input class="form-control form-control-sm" type="number" placeholder="kg">
              </div>
              <div class="col-md-6 mb-2">
              <label for="" class="col-form-label col-form-label-sm mb-1">Hace cuánto y durante cuánto tiempo</label>
              <input class="form-control form-control-sm" type="text" placeholder="">
              </div>
                                          <div class="col-md-6 mb-2">
              <label for="" class="col-form-label col-form-label-sm mb-1">Pesó máximo</label>
              <input class="form-control form-control-sm" type="number" placeholder="kg">
              </div>
              <div class="col-md-6 mb-2">
              <label for="" class="col-form-label col-form-label-sm mb-1">Hace cuánto y durante cuánto tiempo</label>
              <input class="form-control form-control-sm" type="text" placeholder="">
              </div>
                                          <div class="col-md-6 mb-2">
              <label for="" class="col-form-label col-form-label-sm mb-1">Pesó habitual</label>
              <input class="form-control form-control-sm" type="number" placeholder="kg">
              </div>
            <!--acordeon fanexo 4-->
            <div id="accordion" class="col-12 my-3">
              <div class="card">
                <div class="card-header p-0" id="head-anexo5a">
                  <h5 class="mb-0">
                    <a class="btn btn-link" data-toggle="collapse" data-target="#anexo5a-tab" aria-expanded="true" aria-controls="collapseOne">
                      <i class="fas fa-plus mr-2"></i>ANTECEDENTES SALUD/ENFERMEDAD
                    </a>
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
                      <div class="col-md-4">
                        <input class="" type="checkbox" data-toggle="toggle" data-size="sm" data-style="ios" name="" data-on="SI" data-off="No">
                        <label for="inlineCheckbox1" class="form-check-label">Diarrea</label>
                      </div>
                      <div class="col-md-4">
                        <input class="" type="checkbox" data-toggle="toggle" data-size="sm" data-style="ios" name="" data-on="SI" data-off="No">
                        <label for="inlineCheckbox1" class="form-check-label">Estreñimiento</label>
                      </div>
                      <div class="col-md-4">
                        <input class="" type="checkbox" data-toggle="toggle" data-size="sm" data-style="ios" name="" data-on="SI" data-off="No">
                        <label for="inlineCheckbox1" class="form-check-label">Gastritis</label>
                      </div>
                      <div class="col-md-4 mb-2">
                        <input class="" type="checkbox" data-toggle="toggle" data-size="sm" data-style="ios" name="" data-on="SI" data-off="No">
                        <label for="inlineCheckbox1" class="form-check-label">Úlcera</label>
                      </div>
                      <div class="col-md-4 mb-2">
                        <input class="" type="checkbox" data-toggle="toggle" data-size="sm" data-style="ios" name="" data-on="SI" data-off="No">
                        <label for="inlineCheckbox1" class="form-check-label">Náuseas</label>
                      </div>
                      <div class="col-md-4 mb-2">
                        <input class="" type="checkbox" data-toggle="toggle" data-size="sm" data-style="ios" name="" data-on="SI" data-off="No">
                        <label for="inlineCheckbox1" class="form-check-label">Pirosis</label>
                      </div>
                      <div class="col-md-4 mb-2">
                        <input class="" type="checkbox" data-toggle="toggle" data-size="sm" data-style="ios" name="" data-on="SI" data-off="No">
                        <label for="inlineCheckbox1" class="form-check-label">Vómito </label>
                        </div>
                      <div class="col-md-4 mb-2">
                        <input class="" type="checkbox" data-toggle="toggle" data-size="sm" data-style="ios" name="" data-on="SI" data-off="No">
                        <label for="inlineCheckbox1" class="form-check-label">Colitis </label>
                        </div>
                      <div class="col-md-4">
                        <input class="" type="checkbox" data-toggle="toggle" data-size="sm" data-style="ios" name="otros" id="otros" data-on="SI" data-off="NO" >
                        <label for="" class="col-form-label col-form-label-sm mb-1">Otros</label>
                         <div class="collapse" id="otros_CL">
                        <input class="form-control form-control-sm" type="text" placeholder="">
                         </div>
                      </div>
                      <div class="col-md-12 mb-2">
                        <label for="" class="col-form-label col-form-label-sm mb-1">Observaciones</label>
                        <input class="form-control form-control-sm" type="text" placeholder="">
                      </div>
                      <div class="col-md-6 mb-2">
                        <label for="" class="col-form-label col-form-label-sm mb-1">Padece alguna enfermedad diagnosticada</label>
                        <input class="form-control form-control-sm" type="text" placeholder="">
                      </div>
                      <div class="col-md-6 mb-2">
                        <label for="" class="col-form-label col-form-label-sm mb-1">Ha padecido alguna enfermedad importante</label>
                        <input class="form-control form-control-sm" type="text" placeholder="">
                      </div>
                      <div class="col-md-6 mb-2">
                        <label for="" class="col-form-label col-form-label-sm mb-1">Ha padecido alguna enfermedad importante</label>
                        <input class="form-control form-control-sm" type="text" placeholder="">
                      </div>
                      <div class="form-group col-md-12">
                        <div class="col-md-12 p-0 mb-0">
                          <input class="" type="checkbox" data-toggle="toggle" data-size="sm" data-style="ios" name="algunmedicamento" id="algunmedicamento" data-on="SI" data-off="NO" >
                          <label for="inlineCheckbox1" class="form-check-label pl-0 col-form-label-sm mb-1">¿Toma algún medicamento?</label>
                         </div>
                         <div class="collapse" id="algunmedicamento_CL">
                        <div class="form-row">
                          <div class="col-md-6 mb-2">
                            <label for="" class="col-form-label col-form-label-sm mb-1">Cuál</label>
                            <input class="form-control form-control-sm" type="text" placeholder="">
                          </div>
                          <div class="col-md-3 mb-2">
                            <label for="" class="col-form-label col-form-label-sm mb-1">Dosis</label>
                            <input class="form-control form-control-sm" type="text" placeholder="">
                          </div>
                          <div class="col-md-3 mb-2">
                            <label for="" class="col-form-label col-form-label-sm mb-1">Desde cuándo</label>
                            <input class="form-control form-control-sm" type="text" placeholder="">
                          </div>
                        </div>
                        <div class="form-row">
                          <div class="col-md-6 mb-2">
                            <label for="" class="col-form-label col-form-label-sm mb-1">Cuál</label>
                            <input class="form-control form-control-sm" type="text" placeholder="">
                          </div>
                          <div class="col-md-3 mb-2">
                            <label for="" class="col-form-label col-form-label-sm mb-1">Dosis</label>
                            <input class="form-control form-control-sm" type="text" placeholder="">
                          </div>
                          <div class="col-md-3 mb-2">
                            <label for="" class="col-form-label col-form-label-sm mb-1">Desde cuándo</label>
                            <input class="form-control form-control-sm" type="text" placeholder="">
                          </div>
                        </div>
                        <div class="form-row">
                          <div class="col-md-6 mb-2">
                            <label for="" class="col-form-label col-form-label-sm mb-1">Cuál</label>
                            <input class="form-control form-control-sm" type="text" placeholder="">
                          </div>
                          <div class="col-md-3 mb-2">
                            <label for="" class="col-form-label col-form-label-sm mb-1">Dosis</label>
                            <input class="form-control form-control-sm" type="text" placeholder="">
                          </div>
                          <div class="col-md-3 mb-2">
                            <label for="" class="col-form-label col-form-label-sm mb-1">Desde cuándo</label>
                            <input class="form-control form-control-sm" type="text" placeholder="">
                          </div>
                        </div>
                      </div>

                          <div class="form-row">
                          <div class="col-md-3 mb-2">
                            <input class="" type="checkbox" data-toggle="toggle" data-size="sm" data-style="ios" name="" data-on="SI" data-off="No">
                            <label for="inlineCheckbox1" class="form-check-label">Laxantes</label>
                            </div>
                          <div class="col-md-3 mb-2">
                            <input class="" type="checkbox" data-toggle="toggle" data-size="sm" data-style="ios" name="" data-on="SI" data-off="No">
                            <label for="inlineCheckbox1" class="form-check-label">Diuréticos</label>
                            </div>
                          <div class="col-md-3 mb-2">
                            <input class="" type="checkbox" data-toggle="toggle" data-size="sm" data-style="ios" name="" data-on="SI" data-off="No">
                            <label for="inlineCheckbox1" class="form-check-label">Antiácidos</label>
                            </div>
                          <div class="col-md-3 mb-2">
                            <input class="" type="checkbox" data-toggle="toggle" data-size="sm" data-style="ios" name="" data-on="SI" data-off="No">
                            <label for="inlineCheckbox1" class="form-check-label">Analgésicos</label>
                            </div>
                          <div class="col-md-12 mb-2">
                            <label for="" class="col-form-label col-form-label-sm mb-1">Le han practicado alguna cirugía:</label>
                            <input class="form-control form-control-sm" type="text" placeholder="">
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
                    <a class="btn btn-link" data-toggle="collapse" data-target="#anexo5b-tab" aria-expanded="true" aria-controls="collapseOne">
                      <i class="fas fa-plus mr-2"></i>ANTECEDENTES FAMILIARES
                    </a>
                  </h5>
                </div>
                <div id="anexo5b-tab" class="collapse" aria-labelledby="head-anexo5b" data-parent="#accordion">
                  <div class="card-body">
                    <div class="form-row">
                      <div class="col-md-4 mb-2">
                        <input class="" type="checkbox" data-toggle="toggle" data-size="sm" data-style="ios" name="" data-on="SI" data-off="NO">
                        <label for="" class="col-form-label col-form-label-sm mb-1">Obesidad</label>
                      </div>
                      <div class="col-md-4 mb-2">
                        <input class="" type="checkbox" data-toggle="toggle" data-size="sm" data-style="ios" name="diabetes" id="diabetes" data-on="SI" data-off="NO">
                        <label for="" class="col-form-label col-form-label-sm mb-1">Diabetes (tipo)</label>
                        <div class="collapse" id="diabetes_CL">
                        <select class="form-control mt-2" name="#">
                           <option>Tipo 1</option>
                           <option>Tipo 2</option>
                        </select>
                        </div>
                      </div>
                      <div class="col-md-4 mb-2">
                        <input class="" type="checkbox" data-toggle="toggle" data-size="sm" data-style="ios" name="" data-on="SI" data-off="NO">
                        <label for="" class="col-form-label col-form-label-sm mb-1">HTA</label>
                      </div>
                      <div class="col-md-4 mb-2">
                        <input class="" type="checkbox" data-toggle="toggle" data-size="sm" data-style="ios" name="" data-on="SI" data-off="NO">
                        <label for="" class="col-form-label col-form-label-sm mb-1">Cáncer</label>
                      </div>
                      <div class="col-md-4 mb-2">
                        <input class="" type="checkbox" data-toggle="toggle" data-size="sm" data-style="ios" name="" data-on="SI" data-off="NO">
                        <label for="" class="col-form-label col-form-label-sm mb-1">Hipercolesterolemia</label>
                      </div>
                      <div class="col-md-4 mb-2">
                        <input class="" type="checkbox" data-toggle="toggle" data-size="sm" data-style="ios" name="" data-on="SI" data-off="NO">
                        <label for="" class="col-form-label col-form-label-sm mb-1">Hipertrigliceridemia</label>
                      </div>
                      <div class="col-md-4 mb-2">
                        <label for="" class="col-form-label col-form-label-sm mb-1">TA</label>
                        <input class="form-control form-control-sm" type="text" placeholder="">
                      </div>
                      <div class="form-row col-md-12 mt-3">
                        <h6 class="col-md-12 color-text-1">
                          ASPECTOS GINECOLÓGICOS
                        </h6>
                      </div>
                      <div class="col-md-12 mb-2">
                        <input class="" type="checkbox" data-toggle="toggle" data-size="sm" name="embarazo" id="embarazo" data-style="ios" data-on="SI" data-off="No">
                        <label for="" class="col-form-label col-form-label-sm mb-1">Embarazo actual</label>
                        <div class="collapse" id="embarazo_CL">
                        <div class="form-row">
                        <div class="col-md-6 mb-2">
                        <label for="" class="col-form-label col-form-label-sm mb-1">Semana de gestación</label>
                        <input class="form-control form-control-sm" type="text" placeholder="">
                        </div>
                      <div class="col-md-6 mb-2">
                        <label for="" class="col-form-label col-form-label-sm mb-1">Peso pregestacional</label>
                        <input class="form-control form-control-sm" type="text" placeholder="">
                      </div>
                      
                      </div>
                        </div>
                      </div>
                      
                      <div class="col-md-12 mb-2">
                        <input class="" type="checkbox" data-toggle="toggle" data-size="sm" name="anticonceptivos" id="anticonceptivos" data-style="ios" data-on="SI" data-off="No">
                        <label for="" class="col-form-label col-form-label-sm mb-1">Anticonceptivos orales</label>
                        <div class="collapse" id="anticonceptivos_CL">
                        <div class="form-row">
                        <div class="col-md-6 mb-2">
                        <label for="" class="col-form-label col-form-label-sm mb-1">Cuál</label>
                        <input class="form-control form-control-sm" type="text" placeholder="">
                        </div>
                      <div class="col-md-6 mb-2">
                        <label for="" class="col-form-label col-form-label-sm mb-1">Dosis</label>
                        <input class="form-control form-control-sm" type="text" placeholder="">
                      </div>
                      <div class="col-md-4 mb-2">
                        <label for="" class="col-form-label col-form-label-sm mb-1">Sx</label>
                        <input class="form-control form-control-sm" type="text" placeholder="">
                      </div>
                      
                      </div>
                        </div>
                      </div>
                      
                      <div class="col-md-12 mb-2">
                        <input class="" type="checkbox" data-toggle="toggle" data-size="sm" name="climaterio" id="climaterio" data-style="ios" data-on="SI" data-off="No">
                        <label for="" class="col-form-label col-form-label-sm mb-1">Climaterio</label>
                        <div class="collapse" id="climaterio_CL">
                        <div class="form-row">
                        <div class="col-md-6 mb-2">
                        <label for="" class="col-form-label col-form-label-sm mb-1">Fecha</label>
                        <input class="form-control form-control-sm" type="date" placeholder="">
                        </div>
                      </div>
                        </div>
                      </div>

                      <div class="col-md-12 mb-2">
                        <input class="" type="checkbox" data-toggle="toggle" data-size="sm" name="terapia" id="terapia" data-style="ios" data-on="SI" data-off="No">
                        <label for="" class="col-form-label col-form-label-sm mb-1">Terapia de remplazo Hormonal</label>
                        <div class="collapse" id="terapia_CL">
                        <div class="form-row">
                        <div class="col-md-6 mb-2">
                        <label for="" class="col-form-label col-form-label-sm mb-1">Cuál</label>
                        <input class="form-control form-control-sm" type="text" placeholder="">
                        </div>
                      <div class="col-md-6 mb-2">
                        <label for="" class="col-form-label col-form-label-sm mb-1">Dosis</label>
                        <input class="form-control form-control-sm" type="text" placeholder="">
                      </div>
                      <div class="col-md-4 mb-2">
                        <label for="" class="col-form-label col-form-label-sm mb-1">Sx</label>
                        <input class="form-control form-control-sm" type="text" placeholder="">
                      </div>
                      
                      </div>
                        </div>
                      </div>
                      
                      

                      <div class="form-row col-md-12 mt-3">
                        <h6 class="col-md-12 color-text-1">
                          ACTIVIDAD FÍSICA
                        </h6>
                      </div>
                      <div class="col-md-6 mb-2">
                        <label for="" class="col-form-label col-form-label-sm mb-1">¿Cuál es tu profesión?</label>
                        <input class="form-control form-control-sm" type="text" placeholder="">
                      </div>
                      <div class="col-md-6 mb-2">
                        <label for="" class="col-form-label col-form-label-sm mb-1">¿Practica algún deporte o hace ejercicio</label>
                        <input class="form-control form-control-sm" type="text" placeholder="">
                      </div>
                      <div class="col-md-6 mb-2">
                        <label for="" class="col-form-label col-form-label-sm mb-1">¿Cuántos días y horas al día haces ejercicio?</label>
                        <input class="form-control form-control-sm" type="text" placeholder="">
                      </div>
                      <div class="form-row col-md-12">
                        <h6 class="col-md-12 color-text-1 mt-3">
                          CONSUMO DE FRECUENCUENCIA Y CANTIDAD
                        </h6>
                      </div>
                      <div class="col-md-4 mb-2">
                        <input class="" type="checkbox" data-toggle="toggle" data-size="sm" data-style="ios" name="alcohol" id="alcohol" data-on="SI" data-off="NO">
                        <label for="" class="col-form-label col-form-label-sm mb-1">Alcohol</label>
                        <div class="collapse" id="alcohol_CL">
                        <input class="form-control form-control-sm" type="number" placeholder="Cantidad">
                        <select class="form-control mt-2" name="#">
                           <option>día</option>
                           <option>semana</option>
                           <option>mes</option>
                           <option>trimestre</option>
                           <option>año</option>
                        </select>
                        </div>
                      </div>
                      <div class="col-md-4 mb-2">
                        <input class="" type="checkbox" data-toggle="toggle" data-size="sm" data-style="ios" name="tabaco" id="tabaco" data-on="SI" data-off="NO">
                        <label for="" class="col-form-label col-form-label-sm mb-1">Tabaco</label>
                        <div class="collapse" id="tabaco_CL">
                        <input class="form-control form-control-sm" type="number" placeholder="Cantidad">
                        <select class="form-control mt-2" name="#">
                           <option>día</option>
                           <option>semana</option>
                           <option>mes</option>
                           <option>trimestre</option>
                           <option>año</option>
                        </select>
                        </div>
                      </div>
                      <div class="col-md-4 mb-2">
                        <input class="" type="checkbox" data-toggle="toggle" data-size="sm" data-style="ios" name="cafe" id="cafe" data-on="SI" data-off="NO">
                        <label for="" class="col-form-label col-form-label-sm mb-1">Café</label>
                        <div class="collapse" id="cafe_CL">
                        <input class="form-control form-control-sm" type="number" placeholder="Cantidad">
                        <select class="form-control mt-2" name="#">
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
                </div>
              </div>
              <div class="card">
                <div class="card-header p-0" id="head-anexo5c">
                  <h5 class="mb-0">
                    <a class="btn btn-link" data-toggle="collapse" data-target="#anexo5c-tab" aria-expanded="true" aria-controls="collapseOne">
                      <i class="fas fa-plus mr-2"></i>INDICADORES BIOQUÍMICOS
                    </a>
                  </h5>
                </div>
                <div id="anexo5c-tab" class="collapse" aria-labelledby="head-anexo5c" data-parent="#accordion">
                  <div class="card-body">
                    <div class="form-row">
                      <div class="col-md-12 mb-2">
                        <label for="" class="col-form-label col-form-label-sm mb-1">Últimos estudios de laboratorio</label>
                        <input class="form-control form-control-sm" type="text" placeholder="">
                      </div>
                      <div class="col-md-12 mb-2">
                        <label for="" class="col-form-label col-form-label-sm mb-1"> Datos bioquímicos relevantes</label>
                        <textarea class="form-control form-control-sm" id="exampleFormControlTextarea1" rows="3"></textarea>
                      </div>
                      <div class="col-md-12 mb-2">
                        <input class="" type="checkbox" data-toggle="toggle" data-size="sm" name="analisis" id="analisis" data-style="ios" data-on="SI" data-off="No">
                        <label for="inlineCheckbox1" class="form-check-label ml-2 col-form-label-sm mb-1">Se solicitaron análisis </label>
                        <div class="collapse" id="analisis_CL">
                        <input class="form-control form-control-sm" type="text" placeholder="Cuáles">
                        </div>
                      </div>
      
                      <h6 class="col-md-12 color-text-1 mt-3">
                        GLUCOSA CAPILAR
                      </h6>
                      <div class="col-md-2 mb-2">
                        <label for="" class="col-form-label col-form-label-sm mb-1">Día</label>
                        <input class="form-control form-control-sm" type="number" placeholder="#">
                      </div>
                      <div class="col-md-4 mb-2">
                        <label for="" class="col-form-label col-form-label-sm mb-1">Glucosa </label>
                        <input class="form-control form-control-sm" type="text" placeholder="#">
                      </div>
                      <div class="col-md-2 mb-2">
                        <label for="" class="col-form-label col-form-label-sm mb-1">Día</label>
                        <input class="form-control form-control-sm" type="number" placeholder="#">
                      </div>
                      <div class="col-md-4 mb-2">
                        <label for="" class="col-form-label col-form-label-sm mb-1">Glucosa </label>
                        <input class="form-control form-control-sm" type="text" placeholder="#">
                      </div>
                      <div class="col-md-2 mb-2">
                        <label for="" class="col-form-label col-form-label-sm mb-1">Día</label>
                        <input class="form-control form-control-sm" type="number" placeholder="#">
                      </div>
                      <div class="col-md-4 mb-2">
                        <label for="" class="col-form-label col-form-label-sm mb-1">Glucosa </label>
                        <input class="form-control form-control-sm" type="text" placeholder="#">
                      </div>
                      <div class="col-md-2 mb-2">
                        <label for="" class="col-form-label col-form-label-sm mb-1">Día</label>
                        <input class="form-control form-control-sm" type="number" placeholder="#">
                      </div>
                      <div class="col-md-4 mb-2">
                        <label for="" class="col-form-label col-form-label-sm mb-1">Glucosa </label>
                        <input class="form-control form-control-sm" type="text" placeholder="#">
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="card">
                <div class="card-header p-0" id="head-anexo5e">
                  <h5 class="mb-0">
                    <a class="btn btn-link" data-toggle="collapse" data-target="#anexo5e-tab" aria-expanded="true" aria-controls="collapseOne">
                      <i class="fas fa-plus mr-2"></i>INDICADORES DIETÉTICOS
                    </a>
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
                        <input class="" type="checkbox" data-toggle="toggle" data-size="sm" data-style="ios" name="comidas" id="comidas" data-on="SI" data-off="No">
                        <label for="inlineCheckbox1" class="form-check-label">Come entre comidas </label>
                        <div class="collapse" id="comidas_CL">
                        <input class="form-control form-control-sm" type="text" placeholder="¿Qué?">
                        </div>
                      </div>
                      <div class="col-md-12 mb-2">
                        <input class="" type="checkbox" data-toggle="toggle" data-size="sm" name="alimentacion" id="alimentacion" data-style="ios" data-on="SI" data-off="No" />
                        <label for="inlineCheckbox1" class="form-check-label ml-2 col-form-label-sm ">Ha modificado su alimentación en los últimos 6 meses (trabajo, estudio o actividad)</label>
                        <div class="collapse" id="alimentacion_CL">
                          <div class="col-md-12">
                            <input class="form-control form-control-sm" type="text" placeholder="¿Por qué?">
                          </div>
                          <div class="col-md-12">

                          </div>
                          <div class="col-md-12">
                            <input class="form-control form-control-sm" type="text" placeholder="¿Cómo?">
                          </div>
                        </div>
                      </div>
                      <div class="col-md-6 mb-2">
                        <label for="" class="col-form-label col-form-label-sm mb-1">Apetito</label>
                        <select class="form-control form-control-sm" id="exampleFormControlSelect1">
                          <option>Bueno</option>
                          <option>Malo</option>
                          <option>Regular</option>
                        </select>
                      </div>
                      <div class="col-md-6 mb-2">
                        <label for="" class="col-form-label col-form-label-sm mb-1">A qué hora tiene más hambre</label>
                        <input class="form-control form-control-sm" type="text" placeholder="">
                      </div>
                      <div class="col-md-12 mb-2">
                        <label for="" class="col-form-label col-form-label-sm mb-1">Alimentos preferidos</label>
                        <input class="form-control form-control-sm" type="text" placeholder="">
                      </div>
                      <div class="col-md-12 mb-2">
                        <label for="" class="col-form-label col-form-label-sm mb-1">Alimentos que no le agradan / no acostumbra</label>
                        <input class="form-control form-control-sm" type="text" placeholder="">
                      </div>
                      <div class="col-md-12 mb-2">
                        <label for="" class="col-form-label col-form-label-sm mb-1">Alimentos que causan malestar</label>
                        <input class="form-control form-control-sm" type="text" placeholder="">
                      </div>
                      <div class="col-md-12 mb-2">
                        <input class="" type="checkbox" data-toggle="toggle" data-size="sm" name="alergico" id="alergico" data-style="ios" data-on="SI" data-off="No">
                        <label for="inlineCheckbox1" class="form-check-label ml-2 col-form-label-sm mb-1">Es alérgico o intolerante a algún alimento</label>
                        <div class="collapse" id="alergico_CL">
                            <label for="" class="col-form-label col-form-label-sm mb-1">Cuál</label>
                        <input class="form-control form-control-sm" type="text" placeholder="">    
                        </div>
                      </div>
                      <div class="col-md-12 mb-2">
                        <input class="" type="checkbox" data-toggle="toggle" data-size="sm" name="suplemento" id="suplemento" data-style="ios" data-on="SI" data-off="No">
                        <label for="inlineCheckbox1" class="form-check-label ml-2 col-form-label-sm mb-1">Toma algún suplemento / complementos</label>
                        <div class="collapse" id="suplemento_CL">
                        <div class="form-row">
                          <div class="col-md-6 mb-2">
                            <label for="" class="col-form-label col-form-label-sm mb-1">Dosis </label>
                            <input class="form-control form-control-sm" type="text" placeholder="">
                          </div>
                          <div class="col-md-6 mb-2">
                            <label for="" class="col-form-label col-form-label-sm mb-1">Cuál</label>
                            <input class="form-control form-control-sm" type="text" placeholder="">
                          </div>
                          <div class="col-md-6 mb-2">
                            <label for="" class="col-form-label col-form-label-sm mb-1">Porqué</label>
                            <input class="form-control form-control-sm" type="text" placeholder="">
                          </div>
                        </div>
                      </div>
                      </div>

                      <div class="col-md-12 mb-2">
                        <input class="" type="checkbox" data-toggle="toggle" data-size="sm" name="consumo" id="consumo" data-style="ios" data-on="SI" data-off="No">
                        <label for="inlineCheckbox1" class="form-check-label ml-2 col-form-label-sm mb-1">Su consumo varía cuando está triste, nervioso o ansioso:o</label>
                           <div class="collapse" id="consumo_CL">
                        <input class="form-control form-control-sm" type="text" placeholder="¿Cómo?">
                        </div>
                      </div>

                      <div class="col-md-12 mb-2">
                        <input class="" type="checkbox" data-toggle="toggle" data-size="sm" data-style="ios" data-on="SI" data-off="No">
                        <label for="inlineCheckbox1" class="form-check-label ml-2 col-form-label-sm mb-1">Agrega sal a la comida ya preparada</label>
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

                      <div class="col-md-12 mb-2">
                        <input class="" type="checkbox" data-toggle="toggle" data-size="sm" name="dietaespecial" id="dietaespecial" data-style="ios" data-on="SI" data-off="No">
                        <label for="" class="col-form-label col-form-label-sm mb-1">Ha llevado alguna dieta especial</label>
                        <div class="collapse" id="dietaespecial_CL">
                         <div class="form-row">
                          <div class="col-md-10">
                            <input class="form-control form-control-sm" type="text" placeholder="Especificar">
                          </div>
                          <div class="col-md-2">
                            <input class="form-control form-control-sm" type="number" placeholder="Cuántas">
                          </div>
                        </div>
                    <div class="form-row">
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
                    </div>
                    <div class="form-row">
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
                    </div>

                    </div>
                    </div>


                      <div class="form-group col-md-12 mb-2">
                        <div class="col-md-12 p-0 mb-0">
                          <input class="" type="checkbox" data-toggle="toggle" data-size="sm"  name="medicamento" id="medicamento" data-style="ios" data-on="SI" data-off="No">
                          <label for="inlineCheckbox1" class="form-check-label pl-0 col-form-label-sm mb-1">Ha utilizado medicamento para bajar de peso </label>
                          <div class="collapse" id="medicamento_CL">
                        <div class="form-row">
                          <div class="col-md-8">
                            <input class="form-control form-control-sm" type="text" placeholder="¿Cuáles?">
                          </div>
                          <div class="col-md-4">
                            <input class="form-control form-control-sm" type="text" placeholder="Por cuanto tiempo ">
                          </div>
                        </div>
                         </div>
                         </div>
                      </div>
                      <div class="col-md-12 mb-2">
                        <label for="" class="col-form-label col-form-label-sm">PLAN:</label>
                        <textarea class="form-control form-control-sm" id="exampleFormControlTextarea1" rows="3"></textarea>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              
              <div class="card">
              <div class="card-header p-0" id="head-anexo5e">
                  <h5 class="mb-0">
                    <a class="btn btn-link" data-toggle="collapse" data-target="#anexo6e-tab" aria-expanded="true" aria-controls="collapseOne">
                      <i class="fas fa-plus mr-2"></i>ANTROPOMETRICOS
                    </a>
                  </h5>
                </div>
                <div id="anexo6e-tab" class="collapse" aria-labelledby="head-anexo6e" data-parent="#accordion">
               <div class="card-body">
                   
              <div class="form-row mt-1 p-0">
                <div class=" col-md-2">
                  <label for="" class="col-form-label col-form-label-sm">Edad</label>
                  <input class="form-control form-control-sm" type="text" placeholder="">
                </div>
                <div class=" col-md-2">
                  <label for="" class="col-form-label col-form-label-sm">Indicador</label>
                  <input class="form-control form-control-sm" type="text" placeholder="">
                </div>
                <div class=" col-md-2">
                  <label for="" class="col-form-label col-form-label-sm">Talla</label>
                  <input class="form-control form-control-sm" type="text" placeholder="">
                </div>
                <div class=" col-md-3">
                  <label for="" class="col-form-label col-form-label-sm">Peso mínimo</label>
                  <input class="form-control form-control-sm" type="text" placeholder="">
                </div>
                <div class=" col-md-3">
                  <label for="" class="col-form-label col-form-label-sm">Peso máximo</label>
                  <input class="form-control form-control-sm" type="text" placeholder="">
                </div>
                <div class="col-md-5">
                  <label for="" class="col-form-label col-form-label-sm">Peso Ideal</label>
                  <input class="form-control form-control-sm" type="text" placeholder="">
                </div>
                <div class="col-md-12 mb-2">
                  <label for="" class="col-form-label col-form-label-sm">Notas</label>
                  <textarea class="form-control form-control-sm" id="exampleFormControlTextarea1" rows="3"></textarea>
                </div>
              </div>
               
              </div>
            </div>
            </div>

            <div class="card">
              <div class="card-header p-0" id="head-anexo5e">
                  <h5 class="mb-0">
                    <a class="btn btn-link" data-toggle="collapse" data-target="#anexo7e-tab" aria-expanded="true" aria-controls="collapseOne">
                      <i class="fas fa-plus mr-2"></i>RECORDATORIO DE 24 HORAS
                    </a>
                  </h5>
                </div>
                <div id="anexo7e-tab" class="collapse" aria-labelledby="head-anexo7e" data-parent="#accordion">
               <div class="card-body">
                  <div class="row">                                 
                    <label class="col-sm-12 col-form-label text-center">Entre semana</label>        
                      <div class="col-sm-4">
                       <label class="col-form-label col-form-label-sm">Desayuno</label>
                       <textarea class="form-control form-control-sm" id="exampleFormControlTextarea1" rows="5" name=""></textarea>
                      </div>
                    <div class="col-sm-4">
                       <label class="col-form-label col-form-label-sm">Colación</label>
                       <textarea class="form-control form-control-sm" id="exampleFormControlTextarea1" rows="5" name=""></textarea>
                    </div>
                    <div class="col-sm-4">
                       <label class="col-form-label col-form-label-sm">Comida</label>
                       <textarea class="form-control form-control-sm" id="exampleFormControlTextarea1" rows="5" name=""></textarea>
                    </div>
                    <div class="col-sm-4">
                       <label class="col-form-label col-form-label-sm">Colación</label>
                       <textarea class="form-control form-control-sm" id="exampleFormControlTextarea1" rows="5" name=""></textarea>
                    </div>
                    <div class="col-sm-4">
                       <label class="col-form-label col-form-label-sm">Cena</label>
                       <textarea class="form-control form-control-sm" id="exampleFormControlTextarea1" rows="5" name=""></textarea>
                    </div>
                    <div class="col-sm-4">
                       <label class="col-form-label col-form-label-sm">Alimentos olvidados</label>
                       <select class="form-control form-control-sm selectpicker" multiple data-live-search="true">
                                <option>Chicles</option>
                                <option>Mentas</option>
                                <option>Patillas</option>
                                <option>Mermeladas</option>
                                <option>Miel</option>
                                <option>Azúcar</option>
                                <option>Sustituto</option>
                                <option>Crema</option>
                                <option>Dulces</option>
                                <option>Mantequilla</option>
                                <option>Aceite</option>
                                <option>Mayonesa</option>
                                <option>Aderezo</option>
                                <option>Vinagretas</option>
                                <option>Sal</option>
                                <option>Salsas</option>
                      </select>
                    </div>
                  </div>
                  
                  <div class="row">                                 
                    <label class="col-sm-12 col-form-label text-center">Fin de semana</label>        
                      <div class="col-sm-4">
                       <label class="col-form-label col-form-label-sm">Desayuno</label>
                       <textarea class="form-control form-control-sm" id="exampleFormControlTextarea1" rows="5" name=""></textarea>
                      </div>
                    <div class="col-sm-4">
                       <label class="col-form-label col-form-label-sm">Colación</label>
                       <textarea class="form-control form-control-sm" id="exampleFormControlTextarea1" rows="5" name=""></textarea>
                    </div>
                    <div class="col-sm-4">
                       <label class="col-form-label col-form-label-sm">Comida</label>
                       <textarea class="form-control form-control-sm" id="exampleFormControlTextarea1" rows="5" name=""></textarea>
                    </div>
                    <div class="col-sm-4">
                       <label class="col-form-label col-form-label-sm">Colación</label>
                       <textarea class="form-control form-control-sm" id="exampleFormControlTextarea1" rows="5" name=""></textarea>
                    </div>
                    <div class="col-sm-4">
                       <label class="col-form-label col-form-label-sm">Cena</label>
                       <textarea class="form-control form-control-sm" id="exampleFormControlTextarea1" rows="5" name=""></textarea>
                    </div>
                    <div class="col-sm-4">
                      <label class="col-form-label col-form-label-sm">Alimentos olvidados</label>
                      <select class="form-control form-control-sm selectpicker" multiple data-live-search="true">
                                <option>Chicles</option>
                                <option>Mentas</option>
                                <option>Patillas</option>
                                <option>Mermeladas</option>
                                <option>Miel</option>
                                <option>Azúcar</option>
                                <option>Sustituto</option>
                                <option>Crema</option>
                                <option>Dulces</option>
                                <option>Mantequilla</option>
                                <option>Aceite</option>
                                <option>Mayonesa</option>
                                <option>Aderezo</option>
                                <option>Vinagretas</option>
                                <option>Sal</option>
                                <option>Salsas</option>
                      </select>
                    </div>
                  </div>      
                </div>
                </div>
              </div>

               </div>



                                <!--<div class="row justify-content-center">
                                    <button type="submit" class="btn btn-fill btn-rose">Guardar</button>
                                </div>-->
                            </div>


                        </div>
                    </div>
          

                    </div>
  
      </form>
 
 
  </div>
</div>


@push('js')


<script>
 $(function() {
    $('#diabetes').change(function() {
           if($('#diabetes').prop('checked') == true){  $('#diabetes_CL').collapse('show') }
      else if($('#diabetes').prop('checked') == false){  $('#diabetes_CL').collapse('hide') }
    });
    //-----------------------------------------------------------------------------------------------
    $('#alcohol').change(function() {
           if($('#alcohol').prop('checked') == true){  $('#alcohol_CL').collapse('show') }
      else if($('#alcohol').prop('checked') == false){  $('#alcohol_CL').collapse('hide') }
    });
    //-----------------------------------------------------------------------------------------------
    $('#tabaco').change(function() {
           if($('#tabaco').prop('checked') == true){  $('#tabaco_CL').collapse('show') }
      else if($('#tabaco').prop('checked') == false){  $('#tabaco_CL').collapse('hide') }
    });
    //-----------------------------------------------------------------------------------------------
    $('#cafe').change(function() {
           if($('#cafe').prop('checked') == true){  $('#cafe_CL').collapse('show') }
      else if($('#cafe').prop('checked') == false){  $('#cafe_CL').collapse('hide') }
    });
    //-----------------------------------------------------------------------------------------------
    $('#analisis').change(function() {
           if($('#analisis').prop('checked') == true){  $('#analisis_CL').collapse('show') }
      else if($('#analisis').prop('checked') == false){  $('#analisis_CL').collapse('hide') }
    });
    //-----------------------------------------------------------------------------------------------
    $('#comidas').change(function() {
           if($('#comidas').prop('checked') == true){  $('#comidas_CL').collapse('show') }
      else if($('#comidas').prop('checked') == false){  $('#comidas_CL').collapse('hide') }
    });
    //-----------------------------------------------------------------------------------------------
    $('#alimentacion').change(function() {
           if($('#alimentacion').prop('checked') == true){  $('#alimentacion_CL').collapse('show') }
      else if($('#alimentacion').prop('checked') == false){  $('#alimentacion_CL').collapse('hide') }
    });
    //-----------------------------------------------------------------------------------------------

    $('#alergico').change(function() {
           if($('#alergico').prop('checked') == true){  $('#alergico_CL').collapse('show') }
      else if($('#alergico').prop('checked') == false){  $('#alergico_CL').collapse('hide') }
    });
    //-----------------------------------------------------------------------------------------------
    $('#suplemento').change(function() {
           if($('#suplemento').prop('checked') == true){  $('#suplemento_CL').collapse('show') }
      else if($('#suplemento').prop('checked') == false){  $('#suplemento_CL').collapse('hide') }
    });
    //-----------------------------------------------------------------------------------------------
    $('#consumo').change(function() {
           if($('#consumo').prop('checked') == true){  $('#consumo_CL').collapse('show') }
      else if($('#consumo').prop('checked') == false){  $('#consumo_CL').collapse('hide') }
    });
    //-----------------------------------------------------------------------------------------------
    $('#medicamento').change(function() {
           if($('#medicamento').prop('checked') == true){  $('#medicamento_CL').collapse('show') }
      else if($('#medicamento').prop('checked') == false){  $('#medicamento_CL').collapse('hide') }
    });
    //-----------------------------------------------------------------------------------------------
    $('#dietaespecial').change(function() {
           if($('#dietaespecial').prop('checked') == true){  $('#dietaespecial_CL').collapse('show') }
      else if($('#dietaespecial').prop('checked') == false){  $('#dietaespecial_CL').collapse('hide') }
    });
    //-----------------------------------------------------------------------------------------------
        $('#algunmedicamento').change(function() {
           if($('#algunmedicamento').prop('checked') == true){  $('#algunmedicamento_CL').collapse('show') }
      else if($('#algunmedicamento').prop('checked') == false){  $('#algunmedicamento_CL').collapse('hide') }
    });
    //-----------------------------------------------------------------------------------------------
        $('#otros').change(function() {
           if($('#otros').prop('checked') == true){  $('#otros_CL').collapse('show') }
      else if($('#otros').prop('checked') == false){  $('#otros_CL').collapse('hide') }
    });
    //-----------------------------------------------------------------------------------------------
   
        $('#embarazo').change(function() {
           if($('#embarazo').prop('checked') == true){  $('#embarazo_CL').collapse('show') }
      else if($('#embarazo').prop('checked') == false){  $('#embarazo_CL').collapse('hide') }
    });
    //-----------------------------------------------------------------------------------------------
        $('#anticonceptivos').change(function() {
           if($('#anticonceptivos').prop('checked') == true){  $('#anticonceptivos_CL').collapse('show') }
      else if($('#anticonceptivos').prop('checked') == false){  $('#anticonceptivos_CL').collapse('hide') }
    });
    //-----------------------------------------------------------------------------------------------
     $('#climaterio').change(function() {
           if($('#climaterio').prop('checked') == true){  $('#climaterio_CL').collapse('show') }
      else if($('#climaterio').prop('checked') == false){  $('#climaterio_CL').collapse('hide') }
    });
    //-----------------------------------------------------------------------------------------------
     $('#terapia').change(function() {
           if($('#terapia').prop('checked') == true){  $('#terapia_CL').collapse('show') }
      else if($('#terapia').prop('checked') == false){  $('#terapia_CL').collapse('hide') }
    });
    //-----------------------------------------------------------------------------------------------
    
        

 })
</script>
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
