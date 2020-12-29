<div class="wizard-container">
  <div class="card card-wizard" data-color="rose" id="wizardProfile">    
  
       <form id="myform" method="post" action="#" autocomplete="off" class="form-horizontal">
        @csrf
          @method('post')              

                    <div class="content p-0">
                        <div class="container-fluid">
                            <div class=" m-0">
                                    <div class="card-body ">
                                        <ul class="nav nav-pills nav-pills-warning" role="tablist">
                                            <li class="nav-item">
                                                <a class="nav-link active show" data-toggle="tab" href="#anx6_1" role="tablist">
                                                    HISTORIA CLINICO-NUTRIOLÓGICA
                                                </a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" data-toggle="tab" href="#anx6_2" role="tablist">
                                                    ANTECEDENTES SALUD/ENFERMEDAD
                                                </a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" data-toggle="tab" href="#anx6_3" role="tablist">
                                                    ANTECEDENTES FAMILIARES
                                                </a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" data-toggle="tab" href="#anx6_4" role="tablist">
                                                    ACTIVIDAD FÍSICA
                                                </a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" data-toggle="tab" href="#anx6_5" role="tablist">
                                                    INDICADORES DIETÉTICOS
                                                </a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" data-toggle="tab" href="#anx6_6" role="tablist">
                                                    ANTROPOMÉTRICOS
                                                </a>
                                            </li>

                                        </ul>
                                        <div class="tab-content tab-space">
                                            <div class="tab-pane  active show" id="anx6_1">
                                                <div class="card-header card-header-rose card-header-icon">
                                                    <div class="card-icon">
                                                        <i class="material-icons">battery_std</i>
                                                    </div>
                                                    <h4 class="card-title">HISTORIA CLINICO-NUTRIOLÓGICA</h4>
                                                </div>
                                                <br>
                                                <div class="row justify-content-between">
                                                    <div class="form-group col-lg-3">
                                                        <label for="exampleEmail" class="bmd-label-floating">Fecha:</label>
                                                        <input type="text" name="anx6_fecha"  class="form-control datepicker" id="exampleEmail">
                                                    </div>
                                                </div>
                                                <div class="row justify-content-between">
                                                    <div class="form-group col-lg-3">
                                                        <label for="exampleEmail" class="bmd-label-floating">Expediente:</label>
                                                        <input type="text" name="anx6_expediente"  class="form-control" id="exampleEmail">
                                                    </div>
                                                </div>
                                                <br>
                                                <div class="row justify-content-center">
                                                    <div class="col">
                                                        <div class="form-group form-group-lg-3">
                                                            <label for="exampleEmail" class="bmd-label-floating">Pesó Mínimo:</label>
                                                            <input type="text" name="anx6_peso_mini"  class="form-control" id="exampleEmail">
                                                        </div>
                                                    </div>

                                                    <div class="col">
                                                        <div class="form-group form-group-lg-3">
                                                            <label for="exampleEmail" class="bmd-label-floating">Hace cuánto y durante cuánto tiempo:</label>
                                                            <input type="text" name="anx6_cuanto_durante_tiempo"  class="form-control" id="exampleEmail">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row justify-content-center">
                                                    <div class="col">
                                                        <div class="form-group form-group-lg-3">
                                                            <label for="exampleEmail" class="bmd-label-floating">Pesó Máximo:</label>
                                                            <input type="text" name="anx6_peso_maximo"  class="form-control" id="exampleEmail">
                                                        </div>
                                                    </div>

                                                    <div class="col">
                                                        <div class="form-group form-group-lg-3">
                                                            <label for="exampleEmail" class="bmd-label-floating">Hace cuánto y durante cuánto tiempo:</label>
                                                            <input type="text" name="anx6_cuanto_durante_tiempo2"  class="form-control" id="exampleEmail">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row justify-content-between">
                                                    <div class="col-6">
                                                        <div class="form-group form-group-lg-3">
                                                            <label for="exampleEmail" class="bmd-label-floating">Pesó Habitual:</label>
                                                            <input type="text" name="anx6_peso_habi"  class="form-control" id="exampleEmail">
                                                        </div>
                                                    </div>
                                                </div>
                                                <br>
                                            </div>
                                            <div class="tab-pane" id="anx6_2">
                                                <div class="card-header card-header-rose card-header-icon">
                                                    <div class="card-icon">
                                                        <i class="material-icons">add_to_queue</i>
                                                    </div>
                                                    <h4 class="card-title">ANTECEDENTES SALUD/ENFERMEDAD</h4>
                                                </div>

                                                <br><br>

                                                <h6 class="card-title">Problemas Actuales:</h6>

                                                <div class="row justify-content-center">
                                                    <div class="col">
                                                        <div class="form-group form-group-lg-3">
                                                            <label for="exampleEmail" class="bmd-label-floating">Diarrea:</label>
                                                            <input type="text" name="anx6_diarrea"  class="form-control" id="exampleEmail">
                                                        </div>
                                                    </div>
                                                    <div class="col">
                                                        <div class="form-group form-group-lg-3">
                                                            <label for="exampleEmail" class="bmd-label-floating">Estreñimiento:</label>
                                                            <input type="text" name="anx6_estre"  class="form-control" id="exampleEmail">
                                                        </div>
                                                    </div>
                                                    <div class="col">
                                                        <div class="form-group form-group-lg-3">
                                                            <label for="exampleEmail" class="bmd-label-floating">Gastritis:</label>
                                                            <input type="text" name="anx6_gastritis"  class="form-control" id="exampleEmail">
                                                        </div>
                                                    </div>
                                                    <div class="col">
                                                        <div class="form-group form-group-lg-3">
                                                            <label for="exampleEmail" class="bmd-label-floating">Úlcera:</label>
                                                            <input type="text" name="anx6_ulcera"  class="form-control" id="exampleEmail">
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="row justify-content-center">
                                                    <div class="col">
                                                        <div class="form-group form-group-lg-3">
                                                            <label for="exampleEmail" class="bmd-label-floating">Náuseas:</label>
                                                            <input type="text" name="anx6_nauseas"  class="form-control" id="exampleEmail">
                                                        </div>
                                                    </div>
                                                    <div class="col">
                                                        <div class="form-group form-group-lg-3">
                                                            <label for="exampleEmail" class="bmd-label-floating">Pirosis:</label>
                                                            <input type="text" name="anx6_pirosis"  class="form-control" id="exampleEmail">
                                                        </div>
                                                    </div>
                                                    <div class="col">
                                                        <div class="form-group form-group-lg-3">
                                                            <label for="exampleEmail" class="bmd-label-floating">Vómito :</label>
                                                            <input type="text" name="anx6_vomito"  class="form-control" id="exampleEmail">
                                                        </div>
                                                    </div>
                                                    <div class="col">
                                                        <div class="form-group form-group-lg-3">
                                                            <label for="exampleEmail" class="bmd-label-floating">Colitis:</label>
                                                            <input type="text" name="anx6_colitis"  class="form-control" id="exampleEmail">
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="row justify-content-between">
                                                    <div class="col-6">
                                                        <div class="form-group form-group-lg-3">
                                                            <label for="exampleEmail" class="bmd-label-floating">Dentadura:</label>
                                                            <input type="text" name="anx6_dentadura"  class="form-control" id="exampleEmail">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row justify-content-between">
                                                    <div class="col-6">
                                                        <div class="form-group form-group-lg-3">
                                                            <label for="exampleEmail" class="bmd-label-floating">Otros:</label>
                                                            <input type="text" name="anx6_otros"  class="form-control" id="exampleEmail">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row justify-content-between">
                                                    <div class="col">
                                                        <div class="form-group form-group-lg-3">
                                                            <label for="exampleEmail" class="bmd-label-floating">Observaciones:</label>
                                                            <input type="text" name="anx6_observaciones"  class="form-control" id="exampleEmail">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row justify-content-between">
                                                    <div class="col">
                                                        <div class="form-group form-group-lg-3">
                                                            <label for="exampleEmail" class="bmd-label-floating">Padece alguna enfermedad diagnostica:</label>
                                                            <input type="text" name="anx6_pade_enfer_diag"  class="form-control" id="exampleEmail">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row justify-content-between">
                                                    <div class="col">
                                                        <div class="form-group form-group-lg-3">
                                                            <label for="exampleEmail" class="bmd-label-floating">Ha padecido alguna enfermedad importante:</label>
                                                            <input type="text" name="anx6_pade_enfer_impor_"  class="form-control" id="exampleEmail">
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="row justify-content-between">
                                                    <div class="col-6">
                                                        <div class="form-group form-group-lg-3">
                                                            <label for="exampleEmail" class="bmd-label-floating">Toma algún medicamento:</label>
                                                            <input type="text" name="anx6_toma_medica"  class="form-control" id="exampleEmail">
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="row justify-content-center">
                                                    <div class="col">
                                                        <div class="form-group form-group-lg-3">
                                                            <label for="exampleEmail" class="bmd-label-floating">Cuál:</label>
                                                            <input type="text" name="anx6_cual"  class="form-control" id="exampleEmail">
                                                        </div>
                                                    </div>
                                                    <div class="col">
                                                        <div class="form-group form-group-lg-3">
                                                            <label for="exampleEmail" class="bmd-label-floating">Dosis:</label>
                                                            <input type="text" name="anx6_dosis"  class="form-control" id="exampleEmail">
                                                        </div>
                                                    </div>
                                                    <div class="col">
                                                        <div class="form-group form-group-lg-3">
                                                            <label for="exampleEmail" class="bmd-label-floating">Desde cuándo:</label>
                                                            <input type="text" name="anx6_desde_cuando"  class="form-control" id="exampleEmail">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row justify-content-center">
                                                    <div class="col">
                                                        <div class="form-group form-group-lg-3">
                                                            <label for="exampleEmail" class="bmd-label-floating">Cuál:</label>
                                                            <input type="text" name="anx6_cual_2"  class="form-control" id="exampleEmail">
                                                        </div>
                                                    </div>
                                                    <div class="col">
                                                        <div class="form-group form-group-lg-3">
                                                            <label for="exampleEmail" class="bmd-label-floating">Dosis:</label>
                                                            <input type="text" name="anx6_dosis_2"  class="form-control" id="exampleEmail">
                                                        </div>
                                                    </div>
                                                    <div class="col">
                                                        <div class="form-group form-group-lg-3">
                                                            <label for="exampleEmail" class="bmd-label-floating">Desde cuándo:</label>
                                                            <input type="text" name="anx6_desde_cuando_2"  class="form-control" id="exampleEmail">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row justify-content-center">
                                                    <div class="col">
                                                        <div class="form-group form-group-lg-3">
                                                            <label for="exampleEmail" class="bmd-label-floating">Cuál:</label>
                                                            <input type="text" name="anx6_cual_3"  class="form-control" id="exampleEmail">
                                                        </div>
                                                    </div>
                                                    <div class="col">
                                                        <div class="form-group form-group-lg-3">
                                                            <label for="exampleEmail" class="bmd-label-floating">Dosis:</label>
                                                            <input type="text" name="anx6_dosis_3"  class="form-control" id="exampleEmail">
                                                        </div>
                                                    </div>
                                                    <div class="col">
                                                        <div class="form-group form-group-lg-3">
                                                            <label for="exampleEmail" class="bmd-label-floating">Desde cuándo:</label>
                                                            <input type="text" name="anx6_desde_cuando_3"  class="form-control" id="exampleEmail">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row justify-content-center">
                                                    <label for="exampleEmail" class="bmd-label-floating">Toma:</label>
                                                    <div class="col">
                                                        <div class="form-group form-group-lg-3">
                                                            <label for="exampleEmail" class="bmd-label-floating">Laxantes:</label>
                                                            <input type="text" name="anx6_laxantes"  class="form-control" id="exampleEmail">
                                                        </div>
                                                    </div>
                                                    <div class="col">
                                                        <div class="form-group form-group-lg-3">
                                                            <label for="exampleEmail" class="bmd-label-floating">Diuréticos:</label>
                                                            <input type="text" name="anx6_diureticos"  class="form-control" id="exampleEmail">
                                                        </div>
                                                    </div>
                                                    <div class="col">
                                                        <div class="form-group form-group-lg-3">
                                                            <label for="exampleEmail" class="bmd-label-floating">Antiácidos:</label>
                                                            <input type="text" name="anx6_antiacidos"  class="form-control" id="exampleEmail">
                                                        </div>
                                                    </div>
                                                    <div class="col">
                                                        <div class="form-group form-group-lg-3">
                                                            <label for="exampleEmail" class="bmd-label-floating">Analgésicos:</label>
                                                            <input type="text" name="anx6_analge"  class="form-control" id="exampleEmail">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row justify-content-center">
                                                    <div class="col">
                                                        <div class="form-group form-group-lg-3">
                                                            <label for="exampleEmail" class="bmd-label-floating">Le han practicado alguna cirugía:</label>
                                                            <input type="text" name="anx6_practi_cirugia"  class="form-control" id="exampleEmail">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="tab-pane" id="anx6_3">
                                                <div class="card-header card-header-rose card-header-icon">
                                                    <div class="card-icon">
                                                        <i class="material-icons">add_to_queue</i>
                                                    </div>
                                                    <h4 class="card-title">ANTECEDENTES FAMILIARES</h4>
                                                </div>
                                                <br><br>
                                                <div class="row justify-content-center">
                                                    <div class="col">
                                                        <div class="form-group form-group-lg-3">
                                                            <label for="exampleEmail" class="bmd-label-floating">Obesidad:</label>
                                                            <input type="text" name="anx6_obesidad"  class="form-control" id="exampleEmail">
                                                        </div>
                                                    </div>
                                                    <div class="col">
                                                        <div class="form-group form-group-lg-3">
                                                            <label for="exampleEmail" class="bmd-label-floating">Diabetes (tipo):</label>
                                                            <input type="text" name="anx6_diabetes"  class="form-control" id="exampleEmail">
                                                        </div>
                                                    </div>
                                                    <div class="col">
                                                        <div class="form-group form-group-lg-3">
                                                            <label for="exampleEmail" class="bmd-label-floating">HTA:</label>
                                                            <input type="text" name="anx6_hta"  class="form-control" id="exampleEmail">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row justify-content-center">
                                                    <div class="col-6">
                                                        <div class="form-group form-group-lg-3">
                                                            <label for="exampleEmail" class="bmd-label-floating">Cáncer:</label>
                                                            <input type="text" name="anx6_cancer"  class="form-control" id="exampleEmail">
                                                        </div>
                                                    </div>
                                                    <div class="col-6">
                                                        <div class="form-group form-group-lg-3">
                                                            <label for="exampleEmail" class="bmd-label-floating">Hipercolesterolemia:</label>
                                                            <input type="text" name="anx6_hipercoles"  class="form-control" id="exampleEmail">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row justify-content-center">
                                                    <div class="col">
                                                        <div class="form-group form-group-lg-3">
                                                            <label for="exampleEmail" class="bmd-label-floating">Hipertrigliceridemia:</label>
                                                            <input type="text" name="anx6_hipertri"  class="form-control" id="exampleEmail">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row justify-content-between">
                                                    <div class="col-6">
                                                        <div class="form-group form-group-lg-3">
                                                            <label for="exampleEmail" class="bmd-label-floating">TA:</label>
                                                            <input type="text" name="anx6_TA"  class="form-control" id="exampleEmail">
                                                        </div>
                                                    </div>
                                                </div>
                                                <br>
                                                <h5 class="card-title">ASPECTOS GINECOLÓGICOS</h5>
                                                <br>
                                                <div class="row justify-content-between">
                                                    <div class="col-3">
                                                        <div class="form-group form-group-lg-3">
                                                            <label for="exampleEmail" class="bmd-label-floating">Embarazo actual:</label>

                                                        </div>
                                                    </div>
                                                    <div class="form-check">
                                                        <label class="form-check-label">
                                                            <input class="form-check-input" type="radio" name="anx6_embarazo_actual" value="Si" > Si
                                                            <span class="circle">
                                                        <span class="check"></span>
                                                        </span>
                                                        </label>
                                                    </div>

                                                    <div class="form-check">
                                                        <label class="form-check-label">
                                                            <input class="form-check-input" type="radio" name="anx6_embarazo_actual" value="No" > No
                                                            <span class="circle">
                                                        <span class="check"></span>
                                                        </span>
                                                        </label>
                                                    </div>
                                                    <div class="col">

                                                    </div>
                                                </div>
                                                <div class="row justify-content-center">
                                                    <div class="col-6">
                                                        <div class="form-group form-group-lg-3">
                                                            <label for="exampleEmail" class="bmd-label-floating">Semana de gestación:</label>
                                                            <input type="text" name="anx6_sema_gesta"  class="form-control" id="exampleEmail">
                                                        </div>
                                                    </div>
                                                    <div class="col-6">
                                                        <div class="form-group form-group-lg-3">
                                                            <label for="exampleEmail" class="bmd-label-floating">Peso pregestacional:</label>
                                                            <input type="text" name="anx6_peso_pregestacional"  class="form-control" id="exampleEmail">
                                                        </div>
                                                    </div>
                                                </div>
                                                <br><br>
                                                <div class="row justify-content-between">
                                                    <div class="col-3">
                                                        <div class="form-group form-group-lg-3">
                                                            <label for="exampleEmail" class="bmd-label-floating">Anticonceptivos orales:</label>

                                                        </div>
                                                    </div>
                                                    <div class="form-check">
                                                        <label class="form-check-label">
                                                            <input class="form-check-input" type="radio" name="anx6_anti_orales" value="Si" > Si
                                                            <span class="circle">
                                                        <span class="check"></span>
                                                        </span>
                                                        </label>
                                                    </div>

                                                    <div class="form-check">
                                                        <label class="form-check-label">
                                                            <input class="form-check-input" type="radio" name="anx6_anti_orales" value="No" > No
                                                            <span class="circle">
                                                        <span class="check"></span>
                                                        </span>
                                                        </label>
                                                    </div>
                                                    <div class="col">

                                                    </div>
                                                </div>
                                                <div class="row justify-content-center">
                                                    <div class="col">
                                                        <div class="form-group form-group-lg-3">
                                                            <label for="exampleEmail" class="bmd-label-floating">Cual:</label>
                                                            <input type="text" name="anx6_cual_4"  class="form-control" id="exampleEmail">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row justify-content-center">
                                                    <div class="col-6">
                                                        <div class="form-group form-group-lg-3">
                                                            <label for="exampleEmail" class="bmd-label-floating">Dosis:</label>
                                                            <input type="text" name="anx6_dosis_4"  class="form-control" id="exampleEmail">
                                                        </div>
                                                    </div>
                                                    <div class="col-6">
                                                        <div class="form-group form-group-lg-3">
                                                            <label for="exampleEmail" class="bmd-label-floating">Sx:</label>
                                                            <input type="text" name="anx6_SX"  class="form-control" id="exampleEmail">
                                                        </div>
                                                    </div>
                                                </div>
                                                <br>
                                                <div class="row justify-content-between">
                                                    <div class="col-3">
                                                        <div class="form-group form-group-lg-3">
                                                            <label for="exampleEmail" class="bmd-label-floating">Climaterio:</label>
                                                        </div>
                                                    </div>
                                                    <div class="col-1">
                                                        <div class="form-check">
                                                            <label class="form-check-label">
                                                                <input class="form-check-input" type="radio" name="anx6_climaterio" value="Si" > Si
                                                                <span class="circle">
                                                        <span class="check"></span>
                                                        </span>
                                                            </label>
                                                        </div>
                                                    </div>
                                                    <div class="col-1">
                                                        <div class="form-check">
                                                            <label class="form-check-label">
                                                                <input class="form-check-input" type="radio" name="anx6_climaterio" value="No" > No
                                                                <span class="circle">
                                                        <span class="check"></span>
                                                        </span>
                                                            </label>
                                                        </div>
                                                    </div>
                                                    <div class="col-3">
                                                        <div class="form-group">
                                                            <label for="exampleEmail" class="bmd-label-floating">Fecha:</label>
                                                            <input type="text" name="anx6_fecha_2"  class="form-control datepicker" id="exampleEmail">
                                                        </div>
                                                    </div>
                                                    <div class="col">

                                                    </div>
                                                </div>
                                                <br><br>
                                                <div class="row justify-content-between">
                                                    <div class="col-4">
                                                        <div class="form-group form-group-lg-3">
                                                            <label for="exampleEmail" class="bmd-label-floating">Terapia de remplazo Hormonal:</label>

                                                        </div>
                                                    </div>
                                                    <div class="form-check">
                                                        <label class="form-check-label">
                                                            <input class="form-check-input" type="radio" name="anx6_tera_hormo" value="Si" > Si
                                                            <span class="circle">
                                                        <span class="check"></span>
                                                        </span>
                                                        </label>
                                                    </div>

                                                    <div class="form-check">
                                                        <label class="form-check-label">
                                                            <input class="form-check-input" type="radio" name="anx6_tera_hormo" value="No" > No
                                                            <span class="circle">
                                                        <span class="check"></span>
                                                        </span>
                                                        </label>
                                                    </div>
                                                    <div class="col">
                                                    </div>
                                                </div>
                                                <div class="row justify-content-center">
                                                    <div class="col">
                                                        <div class="form-group form-group-lg-3">
                                                            <label for="exampleEmail" class="bmd-label-floating">Cual:</label>
                                                            <input type="text" name="anx6_cual_5"  class="form-control" id="exampleEmail">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row justify-content-center">
                                                    <div class="col-6">
                                                        <div class="form-group form-group-lg-3">
                                                            <label for="exampleEmail" class="bmd-label-floating">Dosis:</label>
                                                            <input type="text" name="anx6_dosis_5"  class="form-control" id="exampleEmail">
                                                        </div>
                                                    </div>
                                                    <div class="col-6">
                                                        <div class="form-group form-group-lg-3">
                                                            <label for="exampleEmail" class="bmd-label-floating">Sx:</label>
                                                            <input type="text" name="anx6_SX_2"  class="form-control" id="exampleEmail">
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>

                                            <div class="tab-pane" id="anx6_4">
                                                <div class="card-header card-header-rose card-header-icon">
                                                    <div class="card-icon">
                                                        <i class="material-icons">add_to_queue</i>
                                                    </div>
                                                    <h4 class="card-title">ACTIVIDAD FÍSICA</h4>
                                                </div><br><br>
                                                <div class="row justify-content-center">
                                                    <div class="col">
                                                        <div class="form-group form-group-lg-3">
                                                            <label for="exampleEmail" class="bmd-label-floating">¿Cuál es tu profesión?</label>
                                                            <input type="text" name="anx6_profesion"  class="form-control" id="exampleEmail">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row justify-content-center">
                                                    <div class="col">
                                                        <div class="form-group form-group-lg-3">
                                                            <label for="exampleEmail" class="bmd-label-floating">¿Practica algún deporte o hace ejercicio?</label>
                                                            <input type="text" name="anx6_ejercicio"  class="form-control" id="exampleEmail">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row justify-content-center">
                                                    <div class="col">
                                                        <div class="form-group form-group-lg-3">
                                                            <label for="exampleEmail" class="bmd-label-floating">¿Cuántos días y horas al día haces ejercicio?</label>
                                                            <input type="text" name="anx6_dias_horas_ejercicio"  class="form-control" id="exampleEmail">
                                                        </div>
                                                    </div>
                                                </div>
                                                <br><br>
                                                <h5>CONSUMO DE FRECUENCUENCIA Y CANTIDAD</h5>
                                                <div class="row justify-content-center">
                                                    <div class="col">
                                                        <div class="form-group form-group-lg-3">
                                                            <label for="exampleEmail" class="bmd-label-floating">Alcohol:</label>
                                                            <input type="text" name="anx6_alcohol"  class="form-control" id="exampleEmail">
                                                        </div>
                                                    </div>
                                                    <div class="col">
                                                        <div class="form-group form-group-lg-3">
                                                            <label for="exampleEmail" class="bmd-label-floating">Tabaco:</label>
                                                            <input type="text" name="anx6_tabaco"  class="form-control" id="exampleEmail">
                                                        </div>
                                                    </div>
                                                    <div class="col">
                                                        <div class="form-group form-group-lg-3">
                                                            <label for="exampleEmail" class="bmd-label-floating">Café:</label>
                                                            <input type="text" name="anx6_cafe"  class="form-control" id="exampleEmail">
                                                        </div>
                                                    </div>
                                                </div>
                                                <br><br>
                                                <h5>INDICADORES BIOQUÍMICOS</h5>
                                                <br>
                                                <div class="row justify-content-center">
                                                    <div class="col">
                                                        <div class="form-group form-group-lg-3">
                                                            <label for="exampleEmail" class="bmd-label-floating">Últimos estudios de laboratorio:</label>
                                                            <input type="text" name="anx6_laboratorios"  class="form-control" id="exampleEmail">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row justify-content-center">
                                                    <div class="col">
                                                        <div class="form-group form-group-lg-3">
                                                            <label for="exampleEmail" class="bmd-label-floating">Relevantes:</label>
                                                            <textarea name="anx6_relevantes"  class="form-control" id="exampleEmail"></textarea>
                                                        </div>
                                                    </div>
                                                </div>
                                                <br>
                                                <div class="row justify-content-between">
                                                    <div class="col-3">
                                                        <div class="form-group form-group-lg-3">
                                                            <label for="exampleEmail" class="bmd-label-floating">Se solicitaron análisis:</label>
                                                        </div>
                                                    </div>
                                                    <div class="col-1">
                                                        <div class="form-check">
                                                            <label class="form-check-label">
                                                                <input class="form-check-input" type="radio" name="anx6_analisis" value="Si" > Si
                                                                <span class="circle">
                                                        <span class="check"></span>
                                                        </span>
                                                            </label>
                                                        </div>
                                                    </div>
                                                    <div class="col-1">
                                                        <div class="form-check">
                                                            <label class="form-check-label">
                                                                <input class="form-check-input" type="radio" name="anx6_analisis" value="No" > No
                                                                <span class="circle">
                                                        <span class="check"></span>
                                                        </span>
                                                            </label>
                                                        </div>
                                                    </div>
                                                    <div class="col-3">
                                                        <div class="form-group">
                                                            <label for="exampleEmail" class="bmd-label-floating">Cuales:</label>
                                                            <input type="text" name="anx6_cuales_6"  class="form-control" id="exampleEmail">
                                                        </div>
                                                    </div>
                                                    <div class="col">

                                                    </div>
                                                </div>
                                                <div class="row justify-content-center">
                                                    <div class="col">
                                                        <div class="form-group form-group-lg-3">
                                                            <label for="exampleEmail" class="bmd-label-floating">Glucosa capilar:</label>
                                                            <textarea name="anx6_glucosa_capilar"  class="form-control" id="exampleEmail"></textarea>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row justify-content-center">
                                                    <div class="col">
                                                        <div class="form-group form-group-lg-3">
                                                            <label for="exampleEmail" class="bmd-label-floating">Día:</label>
                                                            <input type="text" name="anx6_dia"  class="form-control" id="exampleEmail">
                                                        </div>
                                                    </div>
                                                    <div class="col">
                                                        <div class="form-group form-group-lg-3">
                                                            <label for="exampleEmail" class="bmd-label-floating">Glucosa:</label>
                                                            <input type="text" name="anx6_glucosa"  class="form-control" id="exampleEmail">
                                                        </div>
                                                    </div>
                                                    <div class="col">
                                                        <div class="form-group form-group-lg-3">
                                                            <input type="hidden"  class="form-control" id="exampleEmail">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row justify-content-center">
                                                    <div class="col">
                                                        <div class="form-group form-group-lg-3">
                                                            <label for="exampleEmail" class="bmd-label-floating">Día:</label>
                                                            <input type="text" name="anx6_dia_2"  class="form-control" id="exampleEmail">
                                                        </div>
                                                    </div>
                                                    <div class="col">
                                                        <div class="form-group form-group-lg-3">
                                                            <label for="exampleEmail" class="bmd-label-floating">Glucosa:</label>
                                                            <input type="text" name="anx6_gluco"  class="form-control" id="exampleEmail">
                                                        </div>
                                                    </div>
                                                    <div class="col">
                                                        <div class="form-group form-group-lg-3">
                                                            <input type="hidden"   class="form-control" id="exampleEmail">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row justify-content-center">
                                                    <div class="col">
                                                        <div class="form-group form-group-lg-3">
                                                            <label for="exampleEmail" class="bmd-label-floating">Día:</label>
                                                            <input type="text" name="anx6_dia_3"  class="form-control" id="exampleEmail">
                                                        </div>
                                                    </div>
                                                    <div class="col">
                                                        <div class="form-group form-group-lg-3">
                                                            <label for="exampleEmail" class="bmd-label-floating">Glucosa:</label>
                                                            <input type="text" name="anx6_glu"  class="form-control" id="exampleEmail">
                                                        </div>
                                                    </div>
                                                    <div class="col">
                                                        <div class="form-group form-group-lg-3">
                                                            <input type="hidden"   class="form-control" id="exampleEmail">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="tab-pane" id="anx6_5">
                                                <div class="card-header card-header-rose card-header-icon">
                                                    <div class="card-icon">
                                                        <i class="material-icons">add_to_queue</i>
                                                    </div>
                                                    <h4 class="card-title">INDICADORES DIETÉTICOS</h4>
                                                </div>
                                                <br><br><br>
                                                <div class="row justify-content-center">
                                                    <div class="col">
                                                        <div class="form-group form-group-lg-3">
                                                            <label for="exampleEmail" class="bmd-label-floating">Cuántas comidas haces al día:</label>
                                                            <input type="text" name="anx6_comidas_al_dia"  class="form-control" id="exampleEmail">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row justify-content-center">
                                                    <div class="col">
                                                        <div class="form-group form-group-lg-3">
                                                            <label for="exampleEmail" class="bmd-label-floating">Quién prepara sus alimentos:</label>
                                                            <input type="text" name="anx6_prepar_alimento"  class="form-control" id="exampleEmail">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row justify-content-center">
                                                    <div class="col-4">
                                                        <div class="form-group form-group-lg-3">
                                                            <label for="exampleEmail" class="bmd-label-floating">Come entre comidas:</label>
                                                            <input type="text" name="anx6_come_entre_comidas"  class="form-control" id="exampleEmail">
                                                        </div>
                                                    </div>
                                                    <div class="col">
                                                        <div class="form-group form-group-lg-3">
                                                            <label for="exampleEmail" class="bmd-label-floating">Que:</label>
                                                            <input type="text" name="anx6_que"  class="form-control" id="exampleEmail">
                                                        </div>
                                                    </div>
                                                </div><br>
                                                <h6>Ha modificado su alimentación  en los últimos 6 meses (trabajo, estudio o actividad</h6>
                                                <div class="row justify-content-between">
                                                    <div class="col-1">
                                                        <div class="form-check">
                                                            <label class="form-check-label">
                                                                <input class="form-check-input" type="radio" name="anx6_ultimo_seis_mes_alime" value="Si" > Si
                                                                <span class="circle">
                                                        <span class="check"></span>
                                                        </span>
                                                            </label>
                                                        </div>
                                                    </div>
                                                    <div class="col-1">
                                                        <div class="form-check">
                                                            <label class="form-check-label">
                                                                <input class="form-check-input" type="radio" name="anx6_ultimo_seis_mes_alime" value="No" > No
                                                                <span class="circle">
                                                        <span class="check"></span>
                                                        </span>
                                                            </label>
                                                        </div>
                                                    </div>
                                                    <div class="col-6">
                                                        <div class="form-group">
                                                            <label for="exampleEmail" class="bmd-label-floating">Porqué:</label>
                                                            <input type="text" name="anx6_porque"  class="form-control" id="exampleEmail">
                                                        </div>
                                                    </div>
                                                    <div class="col-3">
                                                        <div class="form-group">
                                                            <label for="exampleEmail" class="bmd-label-floating">Comó:</label>
                                                            <input type="text" name="anx6_como"  class="form-control" id="exampleEmail">
                                                        </div>
                                                    </div>
                                                    <div class="col">
                                                    </div>
                                                </div>
                                                <div class="row justify-content-between">
                                                    <div class="col-2">
                                                        <div class="form-group form-group-lg-3">
                                                            <label for="exampleEmail" class="bmd-label-floating">Apetito:</label>
                                                        </div>
                                                    </div>
                                                    <div class="col-2">
                                                        <div class="form-check">
                                                            <label class="form-check-label">
                                                                <input class="form-check-input" type="radio" name="anx6_apetito" value="Bueno" > Bueno
                                                                <span class="circle">
                                                        <span class="check"></span>
                                                        </span>
                                                            </label>
                                                        </div>
                                                    </div>
                                                    <div class="col-2">
                                                        <div class="form-check">
                                                            <label class="form-check-label">
                                                                <input class="form-check-input" type="radio" name="anx6_apetito" value="Malo" > Malo
                                                                <span class="circle">
                                                        <span class="check"></span>
                                                        </span>
                                                            </label>
                                                        </div>
                                                    </div>
                                                    <div class="col-2">
                                                        <div class="form-check">
                                                            <label class="form-check-label">
                                                                <input class="form-check-input" type="radio" name="anx6_apetito" value="Regular" > Regular
                                                                <span class="circle">
                                                        <span class="check"></span>
                                                        </span>
                                                            </label>
                                                        </div>
                                                    </div>
                                                    <div class="col">
                                                    </div>
                                                </div>
                                                <div class="row justify-content-center">
                                                    <div class="col">
                                                        <div class="form-group">
                                                            <label for="exampleEmail" class="bmd-label-floating">A qué hora tiene más hambre:</label>
                                                            <input type="text" name="anx6_hora_tiene_ham"  class="form-control" id="exampleEmail">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row justify-content-center">
                                                    <div class="col">
                                                        <div class="form-group">
                                                            <label for="exampleEmail" class="bmd-label-floating">Alimentos preferidos:</label>
                                                            <input type="text" name="anx6_alimentos_preferidos"  class="form-control" id="exampleEmail">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row justify-content-center">
                                                    <div class="col">
                                                        <div class="form-group">
                                                            <label for="exampleEmail" class="bmd-label-floating">Alimentos que no le agradan / no acostumbra:</label>
                                                            <input type="text" name="anx6_ali_no_acostu"  class="form-control" id="exampleEmail">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row justify-content-center">
                                                    <div class="col">
                                                        <div class="form-group">
                                                            <label for="exampleEmail" class="bmd-label-floating">Alimentos que le causan malestar:</label>
                                                            <input type="text" name=""  class="form-control" id="exampleEmail">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row justify-content-center">
                                                    <div class="col">
                                                        <div class="form-group">
                                                            <label for="exampleEmail" class="bmd-label-floating">Es alérgico o intolerante a algún alimento:</label>
                                                            <input type="text" name="anx6_alergico_alimen"  class="form-control" id="exampleEmail">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row justify-content-center">
                                                    <div class="col">
                                                        <div class="form-group">
                                                            <label for="exampleEmail" class="bmd-label-floating">Toma algún suplemento / complemento:</label>
                                                            <input type="text" name="anx6_toma_suple"  class="form-control" id="exampleEmail">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row justify-content-center">
                                                    <div class="col">
                                                        <div class="form-group">
                                                            <label for="exampleEmail" class="bmd-label-floating">Cual:</label>
                                                            <input type="text" name="anx6_cual_7"  class="form-control" id="exampleEmail">
                                                        </div>
                                                    </div>
                                                    <div class="col">
                                                        <div class="form-group">
                                                            <label for="exampleEmail" class="bmd-label-floating">Dosis:</label>
                                                            <input type="text" name="anx6_dosis_6"  class="form-control" id="exampleEmail">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row justify-content-center">
                                                    <div class="col">
                                                        <div class="form-group">
                                                            <label for="exampleEmail" class="bmd-label-floating">Por que:</label>
                                                            <input type="text" name="anx6_porque_2"  class="form-control" id="exampleEmail">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row justify-content-center">
                                                    <div class="col">
                                                        <div class="form-group">
                                                            <label for="exampleEmail" class="bmd-label-floating">Su consumo varía cuando está triste, nervioso o ansioso:</label>
                                                            <input type="text" name="anx6_consumo_ansio"  class="form-control" id="exampleEmail">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row justify-content-center">
                                                    <div class="col">
                                                        <div class="form-group">
                                                            <label for="exampleEmail" class="bmd-label-floating">Agrega sal a la comida ya preparada:</label>
                                                            <input type="text" name="anx6_sal_comida"  class="form-control" id="exampleEmail">
                                                        </div>
                                                    </div>
                                                </div>
                                                <br>
                                                <h6>Qué grasa utiliza en casa para preparar su comida:</h6>
                                                <div class="row justify-content-between">
                                                    <div class="col">
                                                        <div class="form-check">
                                                            <label class="form-check-label">
                                                                <input class="form-check-input" type="radio" name="anx6_grasa" value="Margarina" > Margarina
                                                                <span class="circle">
                                                        <span class="check"></span>
                                                        </span>
                                                            </label>
                                                        </div>
                                                    </div>
                                                    <div class="col">
                                                        <div class="form-check">
                                                            <label class="form-check-label">
                                                                <input class="form-check-input" type="radio" name="anx6_grasa" value="Aceite vegetal" > Aceite vegetal
                                                                <span class="circle">
                                                        <span class="check"></span>
                                                        </span>
                                                            </label>
                                                        </div>
                                                    </div>
                                                    <div class="col">
                                                        <div class="form-check">
                                                            <label class="form-check-label">
                                                                <input class="form-check-input" type="radio" name="anx6_grasa" value="Manteca" >Manteca
                                                                <span class="circle">
                                                        <span class="check"></span>
                                                        </span>
                                                            </label>
                                                        </div>
                                                    </div>
                                                    <div class="col">
                                                        <div class="form-check">
                                                            <label class="form-check-label">
                                                                <input class="form-check-input" type="radio" name="anx6_grasa" value="Mantequilla" > Mantequilla
                                                                <span class="circle">
                                                        <span class="check"></span>
                                                        </span>
                                                            </label>
                                                        </div>
                                                    </div>
                                                    <div class="col">
                                                        <div class="form-check">
                                                            <label class="form-check-label">
                                                                <input class="form-check-input" type="radio" name="anx6_grasa" value="otro" > otro
                                                                <span class="circle">
                                                        <span class="check"></span>
                                                        </span>
                                                            </label>
                                                        </div>
                                                    </div>
                                                    <div class="col">
                                                    </div>
                                                </div>
                                                <div class="row justify-content-center">
                                                    <div class="col">
                                                        <div class="form-group">
                                                            <label for="exampleEmail" class="bmd-label-floating">Ha llevado alguna dieta especial:</label>
                                                            <input type="text" name="anx6_dieta_espe"  class="form-control" id="exampleEmail">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row justify-content-center">
                                                    <div class="col">
                                                        <div class="form-group">
                                                            <label for="exampleEmail" class="bmd-label-floating">Cuántas:</label>
                                                            <input type="text" name="anx6_cuantas_2"  class="form-control" id="exampleEmail">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row justify-content-center">
                                                    <div class="col">
                                                        <div class="form-group">
                                                            <label for="exampleEmail" class="bmd-label-floating">Qué tipo de dieta:</label>
                                                            <input type="text" name="anx6_tipo_dieta"  class="form-control" id="exampleEmail">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row justify-content-center">
                                                    <div class="col">
                                                        <div class="form-group">
                                                            <label for="exampleEmail" class="bmd-label-floating">Hace cuánto:</label>
                                                            <input type="text" name="anx6_hace_cuanto"  class="form-control" id="exampleEmail">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row justify-content-center">
                                                    <div class="col">
                                                        <div class="form-group">
                                                            <label for="exampleEmail" class="bmd-label-floating">Por cuánto tiempo:</label>
                                                            <input type="text" name="anx6_porcuanto_tiempo"  class="form-control" id="exampleEmail">
                                                        </div>
                                                    </div>
                                                    <div class="col">
                                                        <div class="form-group">
                                                            <label for="exampleEmail" class="bmd-label-floating">Por qué razón:</label>
                                                            <input type="text" name="anx6_porque_razon"  class="form-control" id="exampleEmail">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row justify-content-center">
                                                    <div class="col">
                                                        <div class="form-group">
                                                            <label for="exampleEmail" class="bmd-label-floating">Qué tanto se apegó a ella:</label>
                                                            <input type="text" name="anx6_apego_ella"  class="form-control" id="exampleEmail">
                                                        </div>
                                                    </div>
                                                    <div class="col">
                                                        <div class="form-group">
                                                            <label for="exampleEmail" class="bmd-label-floating">Obtuvo los resultados esperados:</label>
                                                            <input type="text" name="anx6_resultados_espe"  class="form-control" id="exampleEmail">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row justify-content-center">
                                                    <div class="col">
                                                        <div class="form-group">
                                                            <label for="exampleEmail" class="bmd-label-floating">Kg perdidos:</label>
                                                            <input type="text" name="anx6_kg_perdidos"  class="form-control" id="exampleEmail">
                                                        </div>
                                                    </div>
                                                    <div class="col">
                                                        <div class="form-group">
                                                            <label for="exampleEmail" class="bmd-label-floating">Peso logrado:</label>
                                                            <input type="text" name="anx6_peso_logrado"  class="form-control" id="exampleEmail">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row justify-content-center">
                                                    <div class="col">
                                                        <div class="form-group">
                                                            <label for="exampleEmail" class="bmd-label-floating">Ha utilizado medicamento para bajar de peso:</label>
                                                            <input type="text" name="anx6_medi_bajar_peso"  class="form-control" id="exampleEmail">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row justify-content-center">
                                                    <div class="col">
                                                        <div class="form-group">
                                                            <label for="exampleEmail" class="bmd-label-floating">Cuáles:</label>
                                                            <input type="text" name="anx6_cuales_3"  class="form-control" id="exampleEmail">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row justify-content-center">
                                                    <div class="col">
                                                        <div class="form-group">
                                                            <label for="exampleEmail" class="bmd-label-floating">Por cuanto tiempo:</label>
                                                            <input type="text" name="anx6_por_que_tiempo"  class="form-control" id="exampleEmail">
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>

                                            <div class="tab-pane" id="anx6_6">
                                                <div class="card-header card-header-rose card-header-icon">
                                                    <div class="card-icon">
                                                        <i class="material-icons">add_to_queue</i>
                                                    </div>
                                                    <h4 class="card-title">ANTROPOMÉTRICOS</h4>
                                                </div>
                                                <br><br><br>
                                                <div class="row justify-content-between">
                                                    <div class="col-2">
                                                        <div class="form-group form-group-lg-3">
                                                            <label for="exampleEmail" class="bmd-label-floating">Edad:</label>
                                                            <input type="text" name="anx6_edad"  class="form-control" id="exampleEmail">
                                                        </div>
                                                    </div>
                                                    <div class="col-2">
                                                        <div class="form-group form-group-lg-3">

                                                            <input type="hidden"   class="form-control" id="exampleEmail">
                                                        </div>
                                                    </div>
                                                    <div class="col-2">
                                                        <div class="form-group form-group-lg-3">
                                                            <label for="exampleEmail" class="bmd-label-floating">Peso mínimo:</label>
                                                            <input type="text" name="anx6_peso_mini_2"  class="form-control" id="exampleEmail">
                                                        </div>
                                                    </div>
                                                    <div class="col">
                                                        <div class="form-group form-group-lg-3">

                                                            <input type="hidden"   class="form-control" id="exampleEmail">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row justify-content-between">
                                                    <div class="col-2">
                                                        <div class="form-group form-group-lg-3">
                                                            <label for="exampleEmail" class="bmd-label-floating">Indicador:</label>
                                                            <input type="text" name="anx6_indicador"  class="form-control" id="exampleEmail">
                                                        </div>
                                                    </div>
                                                    <div class="col-2">
                                                        <div class="form-group form-group-lg-3">

                                                            <input type="hidden"   class="form-control" id="exampleEmail">
                                                        </div>
                                                    </div>
                                                    <div class="col-2">
                                                        <div class="form-group form-group-lg-3">
                                                            <label for="exampleEmail" class="bmd-label-floating">Peso máximo:</label>
                                                            <input type="text" name="anx6_peso_max"  class="form-control" id="exampleEmail">
                                                        </div>
                                                    </div>
                                                    <div class="col">
                                                        <div class="form-group form-group-lg-3">

                                                            <input type="hidden"   class="form-control" id="exampleEmail">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row justify-content-center">
                                                    <div class="col-2">
                                                        <div class="form-group form-group-lg-3">

                                                            <input type="hidden"   class="form-control" id="exampleEmail">
                                                        </div>
                                                    </div>
                                                    <div class="col-2">
                                                        <div class="form-group form-group-lg-3">

                                                            <input type="hidden"  class="form-control" id="exampleEmail">
                                                        </div>
                                                    </div>

                                                    <div class="col-2">
                                                        <div class="form-group form-group-lg-3">
                                                            <label for="exampleEmail" class="bmd-label-floating">Peso ideal:</label>
                                                            <input type="text" name="anx6_peso_ideal"  class="form-control" id="exampleEmail">
                                                        </div>
                                                    </div>
                                                    <div class="col">
                                                        <div class="form-group form-group-lg-3">

                                                            <input type="hidden"   class="form-control" id="exampleEmail">
                                                        </div>
                                                    </div>
                                                </div>
                                                <br><br><br>
                                                <div class="row justify-content-center">
                                                    <div class="table-responsive">
                                                        <table class="table">
                                                            <thead class=" text-primary">
                                                            <th>

                                                            </th>
                                                            <th>
                                                                1°Sem
                                                            </th>
                                                            <th>
                                                                2°Sem
                                                            </th>
                                                            <th>
                                                                3°Sem
                                                            </th>
                                                            <th>
                                                                4°Sem
                                                            </th>
                                                            <th>
                                                                Total
                                                            </th>
                                                            <th>
                                                                1°Sem
                                                            </th>
                                                            <th>
                                                                2°Sem
                                                            </th>
                                                            <th>
                                                                3°Sem
                                                            </th>
                                                            <th>
                                                                4°Sem
                                                            </th>
                                                            <th>
                                                                Total
                                                            </th>
                                                            </thead>
                                                            <tbody>
                                                            <tr>
                                                                <td>
                                                                    FECHA
                                                                </td>
                                                                <td>
                                                                    <div class="form-group">
                                                                        <input type="text" name="anx6_sem_1" class="form-control">
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="form-group">
                                                                        <input type="text" name="anx6_sem_2" class="form-control">
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="form-group">
                                                                        <input type="text" name="anx6_sem_3" class="form-control">
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="form-group">
                                                                        <input type="text" name="anx6_sem_4" class="form-control">
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="form-group">
                                                                        <input type="text" name="anx6_sem_total" class="form-control">
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="form-group">
                                                                        <input type="text" name="anx6_sem_5" class="form-control">
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="form-group">
                                                                        <input type="text" name="anx6_sem_6" class="form-control">
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="form-group">
                                                                        <input type="text" name="anx6_sem_7" class="form-control">
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="form-group">
                                                                        <input type="text" name="anx6_sem_8" class="form-control">
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="form-group">
                                                                        <input type="text" name="anx6_sem_total_9" class="form-control">
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>
                                                                    TALLA
                                                                </td>
                                                                <td>
                                                                    <div class="form-group">
                                                                        <input type="text" name="anx6_talla_1" class="form-control">
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="form-group">
                                                                        <input type="text" name="anx6_talla_2" class="form-control">
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="form-group">
                                                                        <input type="text" name="anx6_talla_3" class="form-control">
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="form-group">
                                                                        <input type="text" name="anx6_talla_4" class="form-control">
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="form-group">
                                                                        <input type="text" name="anx6_talla_5" class="form-control">
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="form-group">
                                                                        <input type="text" name="anx6_talla_6" class="form-control">
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="form-group">
                                                                        <input type="text" name="anx6_talla_7" class="form-control">
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="form-group">
                                                                        <input type="text" name="anx6_talla_8" class="form-control">
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="form-group">
                                                                        <input type="text" name="anx6_talla_9" class="form-control">
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="form-group">
                                                                        <input type="text" name="anx6_talla_10" class="form-control">
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>
                                                                    PESO
                                                                </td>
                                                                <td>
                                                                    <div class="form-group">
                                                                        <input type="text" name="anx6_peso_1" class="form-control">
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="form-group">
                                                                        <input type="text" name="anx6_peso_2" class="form-control">
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="form-group">
                                                                        <input type="text" name="anx6_peso_3" class="form-control">
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="form-group">
                                                                        <input type="text" name="anx6_peso_4" class="form-control">
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="form-group">
                                                                        <input type="text" name="anx6_peso_5" class="form-control">
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="form-group">
                                                                        <input type="text" name="anx6_peso_6" class="form-control">
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="form-group">
                                                                        <input type="text" name="anx6_peso_7" class="form-control">
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="form-group">
                                                                        <input type="text" name="anx6_peso_8" class="form-control">
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="form-group">
                                                                        <input type="text" name="anx6_peso_9" class="form-control">
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="form-group">
                                                                        <input type="text" name="anx6_peso_10" class="form-control">
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>
                                                                    C.CINTURA
                                                                </td>
                                                                <td>
                                                                    <div class="form-group">
                                                                        <input type="text" name="anx6_cintura_1" class="form-control">
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="form-group">
                                                                        <input type="text" name="anx6_cintura_2" class="form-control">
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="form-group">
                                                                        <input type="text" name="anx6_cintura_3" class="form-control">
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="form-group">
                                                                        <input type="text" name="anx6_cintura_4" class="form-control">
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="form-group">
                                                                        <input type="text" name="anx6_cintura_5" class="form-control">
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="form-group">
                                                                        <input type="text" name="anx6_cintura_6" class="form-control">
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="form-group">
                                                                        <input type="text" name="anx6_cintura_7" class="form-control">
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="form-group">
                                                                        <input type="text" name="anx6_cintura_8" class="form-control">
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="form-group">
                                                                        <input type="text" name="anx6_cintura_9" class="form-control">
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="form-group">
                                                                        <input type="text" name="anx6_cintura_10" class="form-control">
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>
                                                                    C.ABDOMEN
                                                                </td>
                                                                <td>
                                                                    <div class="form-group">
                                                                        <input type="text" name="anx6_abdomen_1" class="form-control">
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="form-group">
                                                                        <input type="text" name="anx6_abdomen_2" class="form-control">
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="form-group">
                                                                        <input type="text" name="anx6_abdomen_3" class="form-control">
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="form-group">
                                                                        <input type="text" name="anx6_abdomen_4" class="form-control">
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="form-group">
                                                                        <input type="text" name="anx6_abdomen_5" class="form-control">
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="form-group">
                                                                        <input type="text" name="anx6_abdomen_6" class="form-control">
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="form-group">
                                                                        <input type="text" name="anx6_abdomen_7" class="form-control">
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="form-group">
                                                                        <input type="text" name="anx6_abdomen_8" class="form-control">
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="form-group">
                                                                        <input type="text" name="anx6_abdomen_9" class="form-control">
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="form-group">
                                                                        <input type="text" name="anx6_abdomen_10" class="form-control">
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>
                                                                    C.CADERA
                                                                </td>
                                                                <td>
                                                                    <div class="form-group">
                                                                        <input type="text" name="anx6_cadera_1" class="form-control">
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="form-group">
                                                                        <input type="text" name="anx6_cadera_2" class="form-control">
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="form-group">
                                                                        <input type="text" name="anx6_cadera_3" class="form-control">
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="form-group">
                                                                        <input type="text" name="anx6_cadera_4" class="form-control">
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="form-group">
                                                                        <input type="text" name="anx6_cadera_5" class="form-control">
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="form-group">
                                                                        <input type="text" name="anx6_cadera_6" class="form-control">
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="form-group">
                                                                        <input type="text" name="anx6_cadera_7" class="form-control">
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="form-group">
                                                                        <input type="text" name="anx6_cadera_8" class="form-control">
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="form-group">
                                                                        <input type="text" name="anx6_cadera_9" class="form-control">
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="form-group">
                                                                        <input type="text" name="anx6_cadera_10" class="form-control">
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>
                                                                    IMC(18.5-24.5)
                                                                </td>
                                                                <td>
                                                                    <div class="form-group">
                                                                        <input type="text" name="anx6_IMC_1" class="form-control">
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="form-group">
                                                                        <input type="text" name="anx6_IMC_2" class="form-control">
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="form-group">
                                                                        <input type="text" name="anx6_IMC_3" class="form-control">
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="form-group">
                                                                        <input type="text" name="anx6_IMC_4" class="form-control">
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="form-group">
                                                                        <input type="text" name="anx6_IMC_5" class="form-control">
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="form-group">
                                                                        <input type="text" name="anx6_IMC_6" class="form-control">
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="form-group">
                                                                        <input type="text" name="anx6_IMC_7" class="form-control">
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="form-group">
                                                                        <input type="text" name="anx6_IMC_8" class="form-control">
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="form-group">
                                                                        <input type="text" name="anx6_IMC_9" class="form-control">
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="form-group">
                                                                        <input type="text" name="anx6_IMC_10" class="form-control">
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                                <br><br>
                                                <div class="row justify-content-center">
                                                    <div class="col">
                                                        <div class="form-group form-group-lg-3">
                                                            <label for="exampleEmail" class="bmd-label-floating">Notas:</label>
                                                            <textarea name="anx6_notas"  class="form-control" id="exampleEmail"></textarea>
                                                        </div>
                                                    </div>
                                                </div>
                                                <br>
                                                <!--<div class="row justify-content-center">
                                                    <button type="submit" class="btn btn-fill btn-rose">Guardar</button>
                                                </div>-->
                                            </div>
                                        </div>









                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
     
      </form>
 
 
  </div>
</div>


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
