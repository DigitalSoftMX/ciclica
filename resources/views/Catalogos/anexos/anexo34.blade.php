  <form method="post"  action="{{url('procesoanexo34/add') }}" autocomplete="off" class="form-horizontal">
                @csrf


                    <div class="content p-0">
                        <div class="container-fluid">

                            <!-- Inicio de elemento -->
                            <!-- segundo elemento -->
                            <div class="row justify-content-center" >
                                <div class="col-md-12 p-0">
                                    <div class="card">
                                        <div class="card-header card-header-icon card-header-rose">
                                            <div class="card-icon">
                                                <i class="material-icons">assignment</i>
                                            </div>
                                            <h5 class="card-title ">CUESTIONARIO DE MASTOGRAFÍA</h5>
                                        </div>
                                        <div class="card-body p-0">


                                          <div class="row p-4">
            <div class="col-md-6">
              <h6 class="col-md-12 color-text-1 mt-3 mb-0 p-0">
                Embarazo actual
              </h6>
              <div class="form-row col d-flex align-items-center p-0">
                <input class="" type="checkbox" data-toggle="toggle" data-size="sm" data-style="ios" data-on="SI" data-off="No">
                <label for="inlineCheckbox1" class="form-check-label ml-2 col-form-label-sm mb-2 col-md-9">¿Usted o algún familiar tiene antecedentes de cáncer de mama? </label>
                <input class="form-control form-control-sm" type="text" placeholder="¿A qué edad?">
              </div>
            </div>
            <div class="col-md-6">
              <h6 class="col-md-12 color-text-1 mt-3 mb-0 p-0">
                Embarazo actual
              </h6>
              <div class="form-row col d-flex align-items-center">
                <input class="" type="checkbox" data-toggle="toggle" data-size="sm" data-style="ios" data-on="SI" data-off="No">
                <label for="inlineCheckbox1" class="form-check-label ml-2 col-form-label-sm mb-2 col-md-9">¿Usted o algún familiar ha padecido algún tipo de cáncer? </label>
                <input class="form-control form-control-sm" type="text" placeholder="¿Quién?">
              </div>
            </div>
            <div class="col-md-12 form-row my-3">
              <div class="col-md-6">
                <img src="{{ asset('material') }}/img/diagrama-senos.png" class="img-fluid w-100" alt="">
              </div>
              <div class="col-md-6">
                <div class="form-row">
                  <div class="col-md-12 mb-2">
                    <input class="" type="checkbox" data-toggle="toggle" data-size="sm" data-style="ios" data-on="SI" data-off="No">
                    <label for="inlineCheckbox1" class="form-check-label ml-2 col-form-label-sm">Dolor</label>
                  </div>
                  <div class="col-md-12 mb-2">
                    <input class="" type="checkbox" data-toggle="toggle" data-size="sm" data-style="ios" data-on="SI" data-off="No">
                    <label for="inlineCheckbox1" class="form-check-label ml-2 col-form-label-sm">Masa palpable</label>
                  </div>
                  <div class="col-md-12 mb-2">
                    <input class="" type="checkbox" data-toggle="toggle" data-size="sm" data-style="ios" data-on="SI" data-off="No">
                    <label for="inlineCheckbox1" class="form-check-label ml-2 col-form-label-sm">Cambios en piel</label>
                  </div>
                  <div class="col-md-12 mb-2">
                    <input class="" type="checkbox" data-toggle="toggle" data-size="sm" data-style="ios" data-on="SI" data-off="No">
                    <label for="inlineCheckbox1" class="form-check-label ml-2 col-form-label-sm">Aumento de volumen</label>
                  </div>
                  <div class="col-md-12 mb-2">
                    <input class="" type="checkbox" data-toggle="toggle" data-size="sm" data-style="ios" data-on="SI" data-off="No">
                    <label for="inlineCheckbox1" class="form-check-label ml-2 col-form-label-sm">Secreción por el pezón</label>
                  </div>
                  <div class="col-md-12 mb-2">
                    <input class="" type="checkbox" data-toggle="toggle" data-size="sm" data-style="ios" data-on="SI" data-off="No">
                    <label for="inlineCheckbox1" class="form-check-label ml-2 col-form-label-sm">Inversión del pezón </label>
                  </div>
                  <div class="col-md-12 mb-2">
                    <input class="" type="checkbox" data-toggle="toggle" data-size="sm" data-style="ios" data-on="SI" data-off="No">
                    <label for="inlineCheckbox1" class="form-check-label ml-2 col-form-label-sm">Otros</label>
                  </div>
                </div>
              </div>
              <div class="col-md-12 mb-2">
                <label for="" class="col-form-label-sm">Especifique</label>
                <textarea class="form-control form-control-sm" id="exampleFormControlTextarea1" rows="3"></textarea>
              </div>
              <div class="col-md-4 mb-2">
                <label for="" class="col-form-label-sm">¿Desde cuándo?</label>
                <input class="form-control form-control-sm" type="text" placeholder="">
              </div>
              <div class="col-md-4 mb-2">
                <label for="" class="col-form-label-sm">Seña particular en sus mamas </label>
                <select class="form-control form-control-sm" id="exampleFormControlSelect1">
                  <option>No</option>
                  <option>LUNAR</option>
                  <option>CICATRICES</option>
                  <option>VERRUGAS</option>
                  <option>OTROS</option>
                </select>
              </div>
              <div class="col-md-4 mb-2">
                <label for="" class="col-form-label-sm">Edad de la primera menstrución </label>
                <input class="form-control form-control-sm" type="text" placeholder="">
              </div>
              <div class="col-md-5 mb-2">
                <label for="" class="col-form-label-sm">Edad de inicio de vida sexual activa </label>
                <input class="form-control form-control-sm" type="text" placeholder="">
              </div>
              <div class="col-md-4 mb-2">
                <label for="" class="col-form-label-sm">Número de embarazos </label>
                <input class="form-control form-control-sm" type="text" placeholder="">
              </div>
               <div class="col-md-3 mb-2">
                <label for="" class="col-form-label-sm">Número de parto</label>
                <input class="form-control form-control-sm" type="text" placeholder="">
              </div>
              <div class="col-md-4 mb-2">
                <label for="" class="col-form-label-sm">Número de cesáreas</label>
                <input class="form-control form-control-sm" type="text" placeholder="">
              </div>
               <div class="col-md-2 mb-2">
                <label for="" class="col-form-label-sm col-12 p-0">Método anticonceptivo</label>
                <input class="" type="checkbox" data-toggle="toggle" data-size="sm" data-style="ios" data-on="SI" data-off="No">
              </div>
              <div class="col-md-4 mb-2">
                <label for="" class="col-form-label-sm">¿De qué tipo?</label>
                <input class="form-control form-control-sm" type="text" placeholder="">
              </div>
              <div class="col-md-2 mb-2">
                <label for="" class="col-form-label-sm col-12 p-0">Hormonal</label>
                <input class="" type="checkbox" data-toggle="toggle" data-size="sm" data-style="ios" data-on="SI" data-off="No">
              </div>
              <div class="col-md-4 mb-2">
                <label for="" class="col-form-label-sm">¿Cuánto tiempo? </label>
                <input class="form-control form-control-sm" type="text" placeholder="">
              </div>
               <div class="col-md-4 mb-2">
                <label for="" class="col-form-label-sm">Edad de la menopausia </label>
                <input class="form-control form-control-sm" type="text" placeholder="">
              </div>
               <div class="col-md-4 mb-2">
                <label for="" class="col-form-label-sm">Fecha de la última menstruación </label>
                <input class="form-control form-control-sm" type="text" placeholder="">
              </div>
              <h6 class="col-md-12 color-text-1 mt-3 mb-0 p-0">
                ANTECEDENTES QUIRÚRGICOS
              </h6>
                <div class="col-md-6 mb-2">
                  <label for="" class="col-form-label-sm col-12 p-0">Biopsia de mama</label>
                  <div class="form-row mt-1 p-0">
                    <div class="form-group col-md-3">
                      <input class="" type="checkbox" data-toggle="toggle" data-size="sm" data-style="ios" data-on="SI" data-off="No">
                    </div>
                     <div class="form-group col-md-9">
                      <input class="" type="checkbox" data-toggle="toggle" data-size="sm" data-style="ios" data-on="Izquierda" data-off="Derecha">
                    </div>
                  </div>
                </div>
                 <div class="col-md-6 mb-2">
                  <label for="" class="col-form-label-sm col-12 p-0">¿Le han realizado mastectomía?   </label>
                  <div class="form-row mt-1 p-0">
                    <div class=" col-md-3">
                      <input class="" type="checkbox" data-toggle="toggle" data-size="sm" data-style="ios" data-on="SI" data-off="No">
                    </div>
                     <div class="col-md-4">
                      <input class="" type="checkbox" data-toggle="toggle" data-size="sm" data-style="ios" data-on="Izquierda" data-off="Derecha">
                    </div>
                     <div class=" col-md-5">
                     <input class="form-control form-control-sm mt-1 ml-2" type="text" placeholder="Fecha">
                    </div>
                  </div>
                </div>
                 <div class="col-md-6 mb-2">
                  <label for="" class="col-form-label-sm col-12 p-0">¿Le han quitado o biosiado ganglios en axilas? </label>
                  <div class="form-row mt-1 p-0">
                    <div class="form-group col-md-3">
                      <input class="" type="checkbox" data-toggle="toggle" data-size="sm" data-style="ios" data-on="SI" data-off="No">
                    </div>
                     <div class="form-group col-md-9">
                      <input class="" type="checkbox" data-toggle="toggle" data-size="sm" data-style="ios" data-on="Izquierda" data-off="Derecha">
                    </div>
                  </div>
                </div>
                 <div class="col-md-6 mb-2">
                  <label for="" class="col-form-label-sm col-12 p-0">¿Le han colocado implantes mamarios? </label>
                  <div class="form-row mt-1 p-0">
                    <div class="form-group col-md-3">
                      <input class="" type="checkbox" data-toggle="toggle" data-size="sm" data-style="ios" data-on="SI" data-off="No">
                    </div>
                     <div class="form-group col-md-9">
                      <input class="" type="checkbox" data-toggle="toggle" data-size="sm" data-style="ios" data-on="Izquierda" data-off="Derecha">
                    </div>
                  </div>
                </div>
                 <div class="col-md-6 mb-2">
                  <label for="" class="col-form-label-sm col-12 p-0">¿Ha tenido recambio de implantes?   </label>
                  <div class="form-row mt-1 p-0">
                    <div class="form-group col-md-3">
                      <input class="" type="checkbox" data-toggle="toggle" data-size="sm" data-style="ios" data-on="SI" data-off="No">
                    </div>
                     <div class="form-group col-md-9">
                      <input class="" type="checkbox" data-toggle="toggle" data-size="sm" data-style="ios" data-on="Izquierda" data-off="Derecha">
                    </div>
                  </div>
                </div>
                 <div class="col-md-6 mb-2">
                  <label for="" class="col-form-label-sm col-12 p-0">¿Le han realizado reducción mamaria?   </label>
                  <div class="form-row mt-1 p-0">
                    <div class="form-group col-md-3">
                      <input class="" type="checkbox" data-toggle="toggle" data-size="sm" data-style="ios" data-on="SI" data-off="No">
                    </div>
                     <div class="form-group col-md-9">
                      <input class="" type="checkbox" data-toggle="toggle" data-size="sm" data-style="ios" data-on="Izquierda" data-off="Derecha">
                    </div>
                  </div>
                </div>
                 <div class="col-md-6 mb-2">
                  <label for="" class="col-form-label-sm col-12 p-0">¿Ha recibido readioterapia en su seno?  </label>
                  <div class="form-row mt-1 p-0">
                    <div class="form-group col-md-3">
                      <input class="" type="checkbox" data-toggle="toggle" data-size="sm" data-style="ios" data-on="SI" data-off="No">
                    </div>
                     <div class="form-group col-md-9">
                      <input class="" type="checkbox" data-toggle="toggle" data-size="sm" data-style="ios" data-on="Izquierda" data-off="Derecha">
                    </div>
                  </div>
                </div>
                 <div class="col-md-6 mb-2">
                  <label for="" class="col-form-label-sm col-12 p-0">¿Le han realizado mastografía o ultrasonido?  </label>
                  <div class="form-row mt-1 p-0">
                    <div class="form-group col-md-3">
                      <input class="" type="checkbox" data-toggle="toggle" data-size="sm" data-style="ios" data-on="SI" data-off="No">
                    </div>
                     <div class="form-group col-md-9">
                      <input class="" type="checkbox" data-toggle="toggle" data-size="sm" data-style="ios" data-on="Izquierda" data-off="Derecha">
                    </div>
                  </div>
                </div>
                 <div class="col-md-6 mb-2">
                  <label for="" class="col-form-label-sm col-12 p-0">¿Qué le diagnosticaron? </label>
                  <input class="form-control form-control-sm" type="text" placeholder="">
                </div>
                 
              
              </div>
          </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- fin de seguno elemento -->
                                <div class="row justify-content-center">
                                    <button type="submit" class="btn btn-fill btn-rose">Guardar</button>
                                </div>
                            </div>
                        </div>

                    </div>
            </form>