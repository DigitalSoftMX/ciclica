 <form method="post"  action="{{url('procesoanexo24/add') }}" autocomplete="off" class="form-horizontal">
                @csrf


                  <div class="wizard-container">
  <div class="card card-wizard" data-color="rose" id="wizardProfile">
      <h5 class="col-md-12 title-ciclica mb-4">
            Espermatobioscopia directa
          </h5>
    <div class="col-12 card p-0 m-0">
      <div class="card-body p-0">
        <nav class="wizard-navigation">
         <ul class="nav nav-pills">
          <li class="nav-item">
            <a class="nav-link active show" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">Observaciones</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile" aria-selected="false">Análisis Macroscópico</a>
          </li>
          <li class="nav-item">
            <a class="nav-link " id="nav-contact-tab" data-toggle="tab" href="#nav-contact" role="tab" aria-controls="nav-contact" aria-selected="false">Análisis Microscópico</a>
          </li>
        </ul>        
        </nav>
        <div class="tab-content p-5" id="nav-tabContent">
          <div class="tab-pane active" id="nav-home">
            <div class="form-row">
              <div class="col-md-9 mb-2">
                <label for="" class="col-form-label col-form-label-sm mb-1">Conyugue</label>
                <input class="form-control form-control-sm" type="text" placeholder="">
              </div>
              <div class="col-md-3 mb-2">
                <label for="" class="col-form-label col-form-label-sm mb-1">Edad</label>
                <div class="input-group col-12 p-0">
                  <input class="form-control form-control-sm" type="number" placeholder="">
                  <div class="input-group-append">
                    <span class="input-group-text " id="basic-addon2">Años</span>
                  </div>
                </div>
              </div>
              <div class="col-md-12 mb-2">
                <label for="" class="col-form-label col-form-label-sm mb-1">Médico Solicitante</label>
                <input class="form-control form-control-sm" type="text" placeholder="">
              </div>
              <div class="col-md-6 mb-2">
                <input class="" type="checkbox" data-toggle="toggle" data-size="sm" data-style="ios" data-on="SI" data-off="No">
                <label for="inlineCheckbox1" class="form-check-label ml-2 col-form-label-sm">¿Fumador?</label>
                <div class="form-row p-0">
                  <div class="form-group col-md-12">
                    <input class="form-control form-control-sm" type="text" placeholder="Frecuencia">
                  </div>
                </div>
              </div>
              <div class="col-md-6 mb-2">
                <input class="" type="checkbox" data-toggle="toggle" data-size="sm" data-style="ios" data-on="SI" data-off="No">
                <label for="inlineCheckbox1" class="form-check-label ml-2 col-form-label-sm">¿Medicamentos?</label>
                <div class="form-row p-0">
                  <div class="form-group col-md-12">
                    <input class="form-control form-control-sm" type="text" placeholder="¿Cuáles?">
                  </div>
                </div>
              </div>
              <div class="col-md-3 mb-2">
                <label for="" class="col-form-label col-form-label-sm mb-1">Abstinencia sexual</label>
                <input class="form-control form-control-sm" type="number" placeholder="Días">
              </div>
              <div class="col-md-3 mb-2">
                <label for="" class="col-form-label col-form-label-sm mb-1">Modo de recolección</label>
                <input class="form-control form-control-sm" type="text" placeholder="">
              </div>
              <div class="col-md-3 mb-2">
                <label for="" class="col-form-label col-form-label-sm mb-1">Hora de recolección</label>
                <input class="form-control form-control-sm" type="text" placeholder="">
              </div>
              <div class="col-md-3 mb-2">
                <label for="" class="col-form-label col-form-label-sm mb-1">Hora de procesado</label>
                <input class="form-control form-control-sm" type="text" placeholder="">
              </div>
            </div>
          </div>
          <div class="tab-pane" id="nav-profile">
            <div class="col-md-12 mb-2">
              <input class="" type="checkbox" data-toggle="toggle" data-size="sm" data-style="ios" data-on="SI" data-off="No">
              <label for="inlineCheckbox1" class="form-check-label ml-2 col-form-label-sm mb-1">Coagulo inicial</label>
              <div class="form-row p-0">
                <div class="form-group col-md-6">
                  <input class="form-control form-control-sm" type="text" placeholder="Viscosidad">
                </div>
                <div class="form-group col-md-6">
                  <div class="input-group col-12 p-0">
                    <input class="form-control form-control-sm" type="number" placeholder="">
                    <div class="input-group-append">
                      <span class="input-group-text " id="basic-addon2">ml</span>
                    </div>
                  </div>
                </div>
                <div class="form-group col-md-4">
                  <input class="form-control form-control-sm" type="text" placeholder="Licuefacción">
                </div>
                <div class="form-group col-md-4">
                  <input class="form-control form-control-sm" type="text" placeholder="Aspecto">
                </div>
                <div class="form-group col-md-4">
                  <input class="form-control form-control-sm" type="text" placeholder="pH">
                </div>
              </div>
            </div>
          </div>
          <div class="tab-pane" id="nav-contact">
            <div class="col-md-12 mb-2 p-0">
              <label for="inlineCheckbox1" class="form-check-label  col-form-label-sm mb-1">Concentración </label>
              <div class="form-row p-0">
                <div class="row mb-0 form-group col-md-12">
                  <div class="input-group col-md-6 mb-2">
                    <input class="form-control form-control-sm" type="number" placeholder="">
                    <div class="input-group-append">
                      <span class="input-group-text " id="basic-addon2">x10 <sup>6</sup>/ml</span>
                    </div>
                  </div>
                  <div class="input-group col-md-6 mb-2">
                    <input class="form-control form-control-sm" type="number" placeholder="">
                    <div class="input-group-append">
                      <span class="input-group-text " id="basic-addon2">millones</span>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-12 mb-2 p-0">
              <label for="inlineCheckbox1" class="form-check-label  col-form-label-sm mb-1">Movilidad </label>
              <div class="form-row p-0">
                <div class="row m-0 form-group col-md-12">
                  <div class="input-group col-md-3 mb-2">
                    <div class="input-group-append">
                      <span class="input-group-text " id="basic-addon2">A:</span>
                    </div>
                    <input class="form-control form-control-sm" type="number" placeholder="">
                  </div>
                  <div class="input-group col-md-3 mb-2">
                    <div class="input-group-append">
                      <span class="input-group-text " id="basic-addon2">B:</span>
                    </div>
                    <input class="form-control form-control-sm" type="number" placeholder="">
                  </div>
                  <div class="input-group col-md-3 mb-2">
                    <div class="input-group-append">
                      <span class="input-group-text " id="basic-addon2">C:</span>
                    </div>
                    <input class="form-control form-control-sm" type="number" placeholder="">
                  </div>
                  <div class="input-group col-md-3 mb-2">
                    <div class="input-group-append">
                      <span class="input-group-text " id="basic-addon2">D:</span>
                    </div>
                    <input class="form-control form-control-sm" type="number" placeholder="">
                  </div>
                </div>
              </div>
            </div>
            <div class="form-row">
              <div class="col-md-4 mb-2">
                <label for="inlineCheckbox1" class="form-check-label  col-form-label-sm mb-1">Índice de Movilidad (A+B): </label>
                <div class="input-group  mb-2">
                  <div class="input-group-append">
                    <span class="input-group-text " id="basic-addon2">0,</span>
                  </div>
                  <input class="form-control form-control-sm" type="number" placeholder="">
                </div>
              </div>
              <div class="col-md-4 mb-2">
                <label for="inlineCheckbox1" class="form-check-label  col-form-label-sm mb-1">Movilidad Total (A+B+C) </label>
                <div class="input-group  mb-2">
                  <input class="form-control form-control-sm" type="number" placeholder="">
                  <div class="input-group-append">
                    <span class="input-group-text " id="basic-addon2">%</span>
                  </div>
                </div>
              </div>
              <div class="col-md-4 mb-2">
                <label for="inlineCheckbox1" class="form-check-label  col-form-label-sm mb-1">Morfología </label>
                <div class="input-group  mb-2">
                  <input class="form-control form-control-sm" type="number" placeholder="">
                  <div class="input-group-append">
                    <span class="input-group-text " id="basic-addon2">%</span>
                  </div>
                </div>
              </div>
              <div class="col-md-4 mb-2">
                <label for="inlineCheckbox1" class="form-check-label  col-form-label-sm mb-1">Defectos de cabeza </label>
                <div class="input-group  mb-2">
                  <input class="form-control form-control-sm" type="number" placeholder="">
                  <div class="input-group-append">
                    <span class="input-group-text " id="basic-addon2">%</span>
                  </div>
                </div>
              </div>
              <div class="col-md-4 mb-2">
                <label for="inlineCheckbox1" class="form-check-label  col-form-label-sm mb-1">Defectos de pieza media </label>
                <div class="input-group  mb-2">
                  <input class="form-control form-control-sm" type="number" placeholder="">
                  <div class="input-group-append">
                    <span class="input-group-text " id="basic-addon2">%</span>
                  </div>
                </div>
              </div>
              <div class="col-md-4 mb-2">
                <label for="inlineCheckbox1" class="form-check-label  col-form-label-sm mb-1">Defectos de cola </label>
                <div class="input-group  mb-2">
                  <input class="form-control form-control-sm" type="number" placeholder="">
                  <div class="input-group-append">
                    <span class="input-group-text " id="basic-addon2">%</span>
                  </div>
                </div>
              </div>
              <h6 class="col-md-12 color-text-1 mt-3 mb-0">
                CELULARIDAD
              </h6>
              <div class="col-md-3 mb-2">
                <label for="inlineCheckbox1" class="form-check-label  col-form-label-sm mb-1">Eritrocitos</label>
                <div class="input-group  mb-2">
                  <input class="form-control form-control-sm" type="number" placeholder="">
                  <div class="input-group-append">
                    <span class="input-group-text " id="basic-addon2">x10 <sup>6</sup>/ml</span>
                  </div>
                </div>
              </div>
              <div class="col-md-3 mb-2">
                <label for="inlineCheckbox1" class="form-check-label  col-form-label-sm mb-1">Leucocitos</label>
                <div class="input-group  mb-2">
                  <input class="form-control form-control-sm" type="number" placeholder="">
                  <div class="input-group-append">
                    <span class="input-group-text " id="basic-addon2">x10 <sup>6</sup>/ml</span>
                  </div>
                </div>
              </div>
              <div class="col-md-3 mb-2">
                <label for="inlineCheckbox1" class="form-check-label  col-form-label-sm mb-1">Inmaduras</label>
                <div class="input-group  mb-2">
                  <input class="form-control form-control-sm" type="number" placeholder="">
                  <div class="input-group-append">
                    <span class="input-group-text " id="basic-addon2">x10 <sup>6</sup>/ml</span>
                  </div>
                </div>
              </div>
              <div class="col-md-3 mb-2">
                <label for="inlineCheckbox1" class="form-check-label  col-form-label-sm mb-1">Epiteliales</label>
                <div class="input-group  mb-2">
                  <input class="form-control form-control-sm" type="number" placeholder="">
                  <div class="input-group-append">
                    <span class="input-group-text " id="basic-addon2">x10 <sup>6</sup>/ml</span>
                  </div>
                </div>
              </div>
              <div class="col-md-2 mb-2">
                <label for="inlineCheckbox1" class="form-check-label  col-form-label-sm mb-1">Bacterias</label>
                <div class="input-group  mb-2">
                  <input class="form-control form-control-sm" type="number" placeholder="">
                </div>
              </div>
              <div class="col-md-2 mb-2">
                <label for="inlineCheckbox1" class="form-check-label  col-form-label-sm mb-1">Cristales</label>
                <div class="input-group  mb-2">
                  <input class="form-control form-control-sm" type="number" placeholder="">
                </div>
              </div>
              <div class="col-md-3 mb-2">
                <label for="inlineCheckbox1" class="form-check-label  col-form-label-sm mb-1">Aglutinación/Agregación</label>
                <div class="input-group  mb-2">
                  <input class="form-control form-control-sm" type="number" placeholder="">
                  <div class="input-group-append">
                    <span class="input-group-text " id="basic-addon2">%</span>
                  </div>
                </div>
              </div>
              <div class="col-md-3 mb-2">
                <label for="inlineCheckbox1" class="form-check-label  col-form-label-sm mb-1">Residuos/Detritos</label>
                <div class="input-group  mb-2">
                  <input class="form-control form-control-sm" type="number" placeholder="">
                </div>
              </div>
              <div class="col-md-2 mb-2">
                <label for="inlineCheckbox1" class="form-check-label  col-form-label-sm mb-1">Viabilidad</label>
                <div class="input-group  mb-2">
                  <input class="form-control form-control-sm" type="number" placeholder="">
                  <div class="input-group-append">
                    <span class="input-group-text " id="basic-addon2">%</span>
                  </div>
                </div>
              </div>
              <div class="col-md-12 mb-2">
                <label for="" class="col-form-label col-form-label-sm mb-1"> Observaciones adicionales</label>
                <textarea class="form-control form-control-sm" id="exampleFormControlTextarea1" rows="3"></textarea>
              </div>

            </div>
          </div>
        </div>
      </div>
      <div class="card-footer pl-5 mb-2">
        <button type="input" class="btn btn-primary">{{ __('Guardar ') }}
        </button>
      </div>
      <!--      fin de copiado de anexo 24-->
    </div>
  </div>
</div>
            </form>


@push('js')
    <script>
        $(document).ready(function() {
            // Javascript method's body can be found in assets/js/demos.js
            demo.initGoogleMaps();
        });
    </script>
@endpush


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