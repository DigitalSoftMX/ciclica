
<!-- Modal -->
<div class="modal fade docs-anexo1-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h3 class="modal-title" id="exampleModalLongTitle">Anexo 1</h3>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close" style="color: red">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>




            <div class="modal-body">

                <form id="myform" method="post" action="{{url('procesoanexo1/add') }}" autocomplete="off" class="form-horizontal">
                    @csrf
                    @method('post')


                    <div class="card ">
                        <div class="card-body ">
                            <ul class="nav nav-pills nav-pills-warning" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active show" data-toggle="tab" href="#link1" role="tablist">
                                        Antecendentes Heredo Familiares
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-toggle="tab" href="#link2" role="tablist">
                                        Antecedentes personales no patologicos
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-toggle="tab" href="#link3" role="tablist">
                                        Antecedentes personales patologicos
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-toggle="tab" href="#link4" role="tablist">
                                        Antecedentes gineco-obstetros
                                    </a>
                                </li>
                            </ul>
                            <div class="tab-content tab-space">
                                <!-- primer metodo del panel-->
                                <div class="tab-pane  active show" id="link1">
                                    <div class="row">
                                        <label class="col-sm-2 col-form-label label-checkbox">Hipertensión</label>
                                        <div class="col-sm-10 checkbox-radios">
                                            <div class="form-check form-check-inline">
                                                <label class="form-check-label">
                                                    <input class="form-check-input" type="radio" name="anx1_hiper" value="option2" checked> Si
                                                    <span class="circle">
                        <span class="check"></span>
                      </span>
                                                </label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <label class="form-check-label">
                                                    <input class="form-check-input" type="radio" name="anx1_hiper" value="option1"> No
                                                    <span class="circle">
                        <span class="check"></span>
                      </span>
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <label class="col-sm-2 col-form-label label-checkbox">Cancer</label>
                                        <div class="col-sm-10 checkbox-radios">
                                            <div class="form-check form-check-inline">
                                                <label class="form-check-label">
                                                    <input class="form-check-input" type="radio" name="anx1_cancer" value="option2" checked> Si
                                                    <span class="circle">
                        <span class="check"></span>
                      </span>
                                                </label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <label class="form-check-label">
                                                    <input class="form-check-input" type="radio" name="anx1_cancer" value="option1"> No
                                                    <span class="circle">
                        <span class="check"></span>
                      </span>
                                                </label>
                                            </div>
                                        </div>
                                        <label class="col-sm-2 col-form-label">Ginecológico</label>
                                        <div class="col-sm-4">
                                            <div class="form-group bmd-form-group">
                                                <input class="form-control" type="text" name="anx1_gine" id="anx1_gine" required="true" aria-required="true">
                                            </div>
                                        </div>
                                        <label class="col-sm-2 col-form-label">Edad de aparición</label>
                                        <div class="col-sm-4">
                                            <div class="form-group bmd-form-group">
                                                <input class="form-control" type="text" name="anx1_apari" id="anx1_apari" required="true" aria-required="true">
                                            </div>
                                        </div>
                                        <label class="col-sm-2 col-form-label">Otros</label>
                                        <div class="col-sm-4">
                                            <div class="form-group bmd-form-group">
                                                <input class="form-control" type="text" name="anx1_otros" id="anx1_otros" required="true" aria-required="true">
                                            </div>
                                        </div>
                                        <label class="col-sm-2 col-form-label">Edad de aparición</label>
                                        <div class="col-sm-4">
                                            <div class="form-group bmd-form-group">
                                                <input class="form-control" type="text" name="anx1_apari2" id="anx1_apari2" required="true" aria-required="true">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <label class="col-sm-2 col-form-label label-checkbox">Diabetes Mellitus</label>
                                        <div class="col-sm-4 checkbox-radios">
                                            <div class="form-check form-check-inline">
                                                <label class="form-check-label">
                                                    <input class="form-check-input" type="radio" name="anx1_diabetes" value="option2" checked> Si
                                                    <span class="circle">
                        <span class="check"></span>
                      </span>
                                                </label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <label class="form-check-label">
                                                    <input class="form-check-input" type="radio" name="anx1_diabetes" value="option1"> No
                                                    <span class="circle">
                        <span class="check"></span>
                      </span>
                                                </label>
                                            </div>
                                        </div>
                                        <label class="col-sm-2 col-form-label"></label>
                                        <div class="col-sm-4">
                                            <div class="form-group bmd-form-group">
                                                <input class="form-control" type="text" name="anx1_otros2" id="anx1_otros2" required="true" aria-required="true">
                                            </div>
                                        </div>
                                        <label class="col-sm-2 col-form-label label-checkbox">Patología Tiroidea</label>
                                        <div class="col-sm-4 checkbox-radios">
                                            <div class="form-check form-check-inline">
                                                <label class="form-check-label">
                                                    <input class="form-check-input" type="radio" name="anx1_patoTiro" value="option2" checked> Si
                                                    <span class="circle">
                        <span class="check"></span>
                      </span>
                                                </label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <label class="form-check-label">
                                                    <input class="form-check-input" type="radio" name="anx1_patoTiro" value="option1"> No
                                                    <span class="circle">
                        <span class="check"></span>
                      </span>
                                                </label>
                                            </div>
                                        </div>
                                        <label class="col-sm-2 col-form-label">Otros</label>
                                        <div class="col-sm-10">
                                            <div class="form-group bmd-form-group">
                                                <input class="form-control" type="text" name="anx1_otros2" id="anx1_otros2" required="true" aria-required="true">
                                            </div>
                                        </div>
                                    </div>

                                </div>
                                <!-- segundo metodo del panel-->
                                <div class="tab-pane" id="link2">
                                    <div class="row">
                                        <label class="col-sm-2 col-form-label">Tipo de Sangre</label>
                                        <div class="col-sm-10">
                                            <div class="form-group bmd-form-group">
                                                <input class="form-control" type="text" name="anx1_TipoSangre" id="anx1_TipoSangre" required="true" aria-required="true">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <label class="col-sm-2 col-form-label label-checkbox">Ejercicio</label>
                                        <div class="col-sm-4 checkbox-radios">
                                            <div class="form-check form-check-inline">
                                                <label class="form-check-label">
                                                    <input class="form-check-input" type="radio" name="anx1_ejer" value="option2" checked> Si
                                                    <span class="circle">
                        <span class="check"></span>
                      </span>
                                                </label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <label class="form-check-label">
                                                    <input class="form-check-input" type="radio" name="anx1_ejer" value="option1"> No
                                                    <span class="circle">
                        <span class="check"></span>
                      </span>
                                                </label>
                                            </div>
                                        </div>
                                        <label class="col-sm-2 col-form-label label-checkbox">Tabaquismo</label>
                                        <div class="col-sm-4 checkbox-radios">
                                            <div class="form-check form-check-inline">
                                                <label class="form-check-label">
                                                    <input class="form-check-input" type="radio" name="anx1_tabaquimo" value="option2" checked> Si
                                                    <span class="circle">
                        <span class="check"></span>
                      </span>
                                                </label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <label class="form-check-label">
                                                    <input class="form-check-input" type="radio" name="anx1_tabaquimo" value="option1"> No
                                                    <span class="circle">
                        <span class="check"></span>
                      </span>
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <label class="col-sm-2 col-form-label label-checkbox">Alcoholismo</label>
                                        <div class="col-sm-4 checkbox-radios">
                                            <div class="form-check form-check-inline">
                                                <label class="form-check-label">
                                                    <input class="form-check-input" type="radio" name="anx1_alcohol" value="option2" checked> Si
                                                    <span class="circle">
                        <span class="check"></span>
                      </span>
                                                </label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <label class="form-check-label">
                                                    <input class="form-check-input" type="radio" name="anx1_alcohol" value="option1"> No
                                                    <span class="circle">
                        <span class="check"></span>
                      </span>
                                                </label>
                                            </div>
                                        </div>
                                        <label class="col-sm-2 col-form-label label-checkbox">Drogras</label>
                                        <div class="col-sm-4 checkbox-radios">
                                            <div class="form-check form-check-inline">
                                                <label class="form-check-label">
                                                    <input class="form-check-input" type="radio" name="anx1_drogas" value="option2" checked> Si
                                                    <span class="circle">
                        <span class="check"></span>
                      </span>
                                                </label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <label class="form-check-label">
                                                    <input class="form-check-input" type="radio" name="anx1_drogas" value="option1"> No
                                                    <span class="circle">
                        <span class="check"></span>
                      </span>
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <label class="col-sm-2 col-form-label label-checkbox">Extreñimiento</label>
                                        <div class="col-sm-4 checkbox-radios">
                                            <div class="form-check form-check-inline">
                                                <label class="form-check-label">
                                                    <input class="form-check-input" type="radio" name="anx1_extre" value="option2" checked> Si
                                                    <span class="circle">
                        <span class="check"></span>
                      </span>
                                                </label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <label class="form-check-label">
                                                    <input class="form-check-input" type="radio" name="anx1_extre" value="option1"> No
                                                    <span class="circle">
                        <span class="check"></span>
                      </span>
                                                </label>
                                            </div>
                                        </div>
                                    </div>


                                </div>
                                <!-- tercer metodo del panel-->
                                <div class="tab-pane" id="link3">

                                    <div class="row">
                                        <label class="col-sm-2 col-form-label">Alergias</label>
                                        <div class="col-sm-10">
                                            <div class="form-group bmd-form-group">
                                                <input class="form-control" type="text" name="anx1_alergias" id="anx1_alergias" required="true" aria-required="true">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <label class="col-sm-2 col-form-label label-checkbox">Cirugías</label>
                                        <div class="col-sm-4 checkbox-radios">
                                            <div class="form-check form-check-inline">
                                                <label class="form-check-label">
                                                    <input class="form-check-input" type="radio" name="anx1_cirugia" value="option2" checked> Si
                                                    <span class="circle">
                        <span class="check"></span>
                      </span>
                                                </label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <label class="form-check-label">
                                                    <input class="form-check-input" type="radio" name="anx1_cirugia" value="option1"> No
                                                    <span class="circle">
                        <span class="check"></span>
                      </span>
                                                </label>
                                            </div>
                                        </div>
                                        <label class="col-sm-2 col-form-label label-checkbox">Transfuncionales</label>
                                        <div class="col-sm-4 checkbox-radios">
                                            <div class="form-check form-check-inline">
                                                <label class="form-check-label">
                                                    <input class="form-check-input" type="radio" name="anx1_trans" value="option2" checked> Si
                                                    <span class="circle">
                        <span class="check"></span>
                      </span>
                                                </label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <label class="form-check-label">
                                                    <input class="form-check-input" type="radio" name="anx1_trans" value="option1"> No
                                                    <span class="circle">
                        <span class="check"></span>
                      </span>
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <label class="col-sm-2 col-form-label label-checkbox">Infecciosas</label>
                                        <div class="col-sm-4 checkbox-radios">
                                            <div class="form-check form-check-inline">
                                                <label class="form-check-label">
                                                    <input class="form-check-input" type="radio" name="anx1_infecciosa" value="option2" checked> Si
                                                    <span class="circle">
                        <span class="check"></span>
                      </span>
                                                </label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <label class="form-check-label">
                                                    <input class="form-check-input" type="radio" name="anx1_infecciosa" value="option1"> No
                                                    <span class="circle">
                        <span class="check"></span>
                      </span>
                                                </label>
                                            </div>
                                        </div>
                                        <label class="col-sm-2 col-form-label label-checkbox">Crónico degenerativas</label>
                                        <div class="col-sm-4 checkbox-radios">
                                            <div class="form-check form-check-inline">
                                                <label class="form-check-label">
                                                    <input class="form-check-input" type="radio" name="anx1_CroDege" value="option2" checked> Si
                                                    <span class="circle">
                        <span class="check"></span>
                      </span>
                                                </label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <label class="form-check-label">
                                                    <input class="form-check-input" type="radio" name="anx1_CroDege" value="option1"> No
                                                    <span class="circle">
                        <span class="check"></span>
                      </span>
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <label class="col-sm-2 col-form-label label-checkbox">Traumatismos</label>
                                        <div class="col-sm-4 checkbox-radios">
                                            <div class="form-check form-check-inline">
                                                <label class="form-check-label">
                                                    <input class="form-check-input" type="radio" name="anx1_trauma" value="option2" checked> Si
                                                    <span class="circle">
                        <span class="check"></span>
                      </span>
                                                </label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <label class="form-check-label">
                                                    <input class="form-check-input" type="radio" name="anx1_trauma" value="option1"> No
                                                    <span class="circle">
                        <span class="check"></span>
                      </span>
                                                </label>
                                            </div>
                                        </div>
                                        <label class="col-sm-2 col-form-label label-checkbox">Ginecológicos</label>
                                        <div class="col-sm-4 checkbox-radios">
                                            <div class="form-check form-check-inline">
                                                <label class="form-check-label">
                                                    <input class="form-check-input" type="radio" name="anx1_gine2" value="option2" checked> Si
                                                    <span class="circle">
                        <span class="check"></span>
                      </span>
                                                </label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <label class="form-check-label">
                                                    <input class="form-check-input" type="radio" name="anx1_gine2" value="option1"> No
                                                    <span class="circle">
                        <span class="check"></span>
                      </span>
                                                </label>
                                            </div>
                                        </div>
                                    </div>

                                </div>

                                <!-- cuarto metodo del panel-->
                                <div class="tab-pane" id="link4">
                                    <div class="row">
                                        <label class="col-sm-2 col-form-label">Menarca</label>
                                        <div class="col-sm-4">
                                            <div class="form-group bmd-form-group">
                                                <input class="form-control" type="text" name="anx1_menarca" id="anx1_menarca" required="true" aria-required="true">
                                            </div>
                                        </div>
                                        <label class="col-sm-2 col-form-label">Ritmo</label>
                                        <div class="col-sm-4">
                                            <div class="form-group bmd-form-group">
                                                <input class="form-control" type="text" name="anx1_ritmo" id="anx1_ritmo" required="true" aria-required="true">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <label class="col-sm-2 col-form-label">Cantidad</label>
                                        <div class="col-sm-4">
                                            <div class="form-group bmd-form-group">
                                                <div class="dropdown bootstrap-select col-sm-12 pl-0 pr-0"><select class="selectpicker col-sm-12 pl-0 pr-0" name="anx1_cantidad" data-style="select-with-transition" title="" data-size="100" tabindex="-98">
                                                        <option value="1">Escaso</option>
                                                        <option value="2">Normal</option>
                                                        <option value="2">Abundante</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <label class="col-sm-2 col-form-label">Dolor</label>
                                        <div class="col-sm-4">
                                            <div class="form-group bmd-form-group">
                                                <div class="dropdown bootstrap-select col-sm-12 pl-0 pr-0"><select class="selectpicker col-sm-12 pl-0 pr-0" name="anx1_dolor" data-style="select-with-transition" title="" data-size="100" tabindex="-98">
                                                        <option value="1">Leve</option>
                                                        <option value="2">Moderado</option>
                                                        <option value="2">Severo</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <label class="col-sm-2 col-form-label">No. de Toallas por dia</label>
                                        <div class="col-sm-4">
                                            <div class="form-group bmd-form-group">
                                                <div class="dropdown bootstrap-select col-sm-12 pl-0 pr-0"><select class="selectpicker col-sm-12 pl-0 pr-0" name="anx1_toalla" data-style="select-with-transition" title="" data-size="100" tabindex="-98">
                                                        <option value="1">1</option>
                                                        <option value="2">2</option>
                                                        <option value="3">3</option>
                                                        <option value="4">4</option>
                                                        <option value="5">5</option>
                                                        <option value="6">6</option>
                                                        <option value="7">7</option>
                                                        <option value="8">8</option>
                                                        <option value="9">9</option>
                                                        <option value="10">10</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <label class="col-sm-2 col-form-label">Tratamiento</label>
                                        <div class="col-sm-4">
                                            <div class="form-group bmd-form-group">
                                                <input class="form-control" type="text" name="anx1_tratamiento" id="anx1_tratamiento" required="true" aria-required="true">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <label class="col-sm-2 col-form-label">FUM</label>
                                        <div class="col-sm-4">
                                            <div class="form-group bmd-form-group">
                                                <input class="form-control" type="text" name="anx1_fum" id="anx1_fum" required="true" aria-required="true">
                                            </div>
                                        </div>
                                        <label class="col-sm-2 col-form-label">IVSA</label>
                                        <div class="col-sm-4">
                                            <div class="form-group bmd-form-group">
                                                <input class="form-control" type="text" name="anx1_ivisa" id="anx1_ivisa" required="true" aria-required="true">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <label class="col-sm-2 col-form-label">Parejas</label>
                                        <div class="col-sm-4">
                                            <div class="form-group bmd-form-group">
                                                <div class="dropdown bootstrap-select col-sm-12 pl-0 pr-0"><select class="selectpicker col-sm-12 pl-0 pr-0" name="anx1_parejas" data-style="select-with-transition" title="" data-size="100" tabindex="-98">
                                                        <option value="1">1</option>
                                                        <option value="2">2</option>
                                                        <option value="3">3</option>
                                                        <option value="4">4</option>
                                                        <option value="5">5</option>
                                                        <option value="6">6</option>
                                                        <option value="7">7</option>
                                                        <option value="8">8</option>
                                                        <option value="9">9</option>
                                                        <option value="10">10</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <label class="col-sm-2 col-form-label">MPF</label>
                                        <div class="col-sm-4">
                                            <div class="form-group bmd-form-group">
                                                <div class="dropdown bootstrap-select col-sm-12 pl-0 pr-0"><select class="selectpicker col-sm-12 pl-0 pr-0" name="anx1_mpf" data-style="select-with-transition" title="" data-size="100" tabindex="-98">
                                                        <option value="1">Actual</option>
                                                        <option value="2">Previos</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <label class="col-sm-2 col-form-label">Gestas</label>
                                        <div class="col-sm-4">
                                            <div class="form-group bmd-form-group">
                                                <input class="form-control" type="text" name="anx1_gestas" id="anx1_gestas" required="true" aria-required="true">
                                            </div>
                                        </div>
                                        <label class="col-sm-2 col-form-label">Cesáreas</label>
                                        <div class="col-sm-4">
                                            <div class="form-group bmd-form-group">
                                                <input class="form-control" type="text" name="anx1_cesareas" id="anx1_cesareas" required="true" aria-required="true">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <label class="col-sm-2 col-form-label">Partos</label>
                                        <div class="col-sm-4">
                                            <div class="form-group bmd-form-group">
                                                <input class="form-control" type="text" name="anx1_partos" id="anx1_partos" required="true" aria-required="true">
                                            </div>
                                        </div>
                                        <label class="col-sm-2 col-form-label">Abortos</label>
                                        <div class="col-sm-4">
                                            <div class="form-group bmd-form-group">
                                                <input class="form-control" type="text" name="anx1_abortos" id="anx1_abortos" required="true" aria-required="true">
                                            </div>
                                        </div>
                                        <label class="col-sm-2 col-form-label">Ectópicos</label>
                                        <div class="col-sm-4">
                                            <div class="form-group bmd-form-group">
                                                <input class="form-control" type="text" name="anx1_ectopicos" id="anx1_ectopicos" required="true" aria-required="true">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLongTitle">G1</h5>
                                    </div>
                                    <div class="row">
                                        <label class="col-sm-2 col-form-label">Año</label>
                                        <div class="col-sm-4">
                                            <div class="form-group bmd-form-group">
                                                <input class="form-control" type="text" name="anx1_g1_año" id="anx1_g1_año" required="true" aria-required="true">
                                            </div>
                                        </div>
                                        <label class="col-sm-2 col-form-label">Edad mat.</label>
                                        <div class="col-sm-4">
                                            <div class="form-group bmd-form-group">
                                                <input class="form-control" type="text" name="anx1_g1_edadmat" id="anx1_g1_edadmat" required="true" aria-required="true">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <label class="col-sm-2 col-form-label">Dur. de emb.</label>
                                        <div class="col-sm-4">
                                            <div class="form-group bmd-form-group">
                                                <input class="form-control" type="text" name="anx1_g1_durembara" id="anx1_g1_durembara" required="true" aria-required="true">
                                            </div>
                                        </div>
                                        <label class="col-sm-2 col-form-label">Sexo</label>
                                        <div class="col-sm-4">
                                            <div class="form-group bmd-form-group">
                                                <input class="form-control" type="text" name="anx1_g1_sexo" id="anx1_g1_sexo" required="true" aria-required="true">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <label class="col-sm-2 col-form-label">Peso</label>
                                        <div class="col-sm-4">
                                            <div class="form-group bmd-form-group">
                                                <input class="form-control" type="text" name="anx1_g1_peso" id="anx1_g1_peso" required="true" aria-required="true">
                                            </div>
                                        </div>
                                        <label class="col-sm-2 col-form-label">Vivo y Sano</label>
                                        <div class="col-sm-4">
                                            <div class="form-group bmd-form-group">
                                                <input class="form-control" type="text" name="anx1_g1_vivo" id="anx1_g1_vivo" required="true" aria-required="true">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <label class="col-sm-2 col-form-label">Resol</label>
                                        <div class="col-sm-4">
                                            <div class="form-group bmd-form-group">
                                                <input class="form-control" type="text" name="anx1_g1_resol" id="anx1_g1_resol" required="true" aria-required="true">
                                            </div>
                                        </div>
                                        <label class="col-sm-2 col-form-label">Comp</label>
                                        <div class="col-sm-4">
                                            <div class="form-group bmd-form-group">
                                                <input class="form-control" type="text" name="anx1_g1_comp" id="anx1_g1_comp" required="true" aria-required="true">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <label class="col-sm-2 col-form-label">Lactancia #Meses</label>
                                        <div class="col-sm-4">
                                            <div class="form-group bmd-form-group">
                                                <div class="dropdown bootstrap-select col-sm-12 pl-0 pr-0"><select class="selectpicker col-sm-12 pl-0 pr-0" name="anx1_g1_lactancia" data-style="select-with-transition" title="" data-size="100" tabindex="-98">
                                                        <option value="1">1</option>
                                                        <option value="2">2</option>
                                                        <option value="3">3</option>
                                                        <option value="4">4</option>
                                                        <option value="5">5</option>
                                                        <option value="6">6</option>
                                                        <option value="7">7</option>
                                                        <option value="8">8</option>
                                                        <option value="9">9</option>
                                                        <option value="10">10</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <label class="col-sm-2 col-form-label label-checkbox">Meses</label>
                                        <div class="col-sm-10 checkbox-radios">
                                            <div class="form-check form-check-inline">
                                                <label class="form-check-label">
                                                    <input class="form-check-input" type="radio" name="anx1_g1_meses" value="option2" checked> Si
                                                    <span class="circle">
                        <span class="check"></span>
                      </span>
                                                </label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <label class="form-check-label">
                                                    <input class="form-check-input" type="radio" name="anx1_g1_meses" value="option1"> No
                                                    <span class="circle">
                        <span class="check"></span>
                      </span>
                                                </label>
                                            </div>
                                        </div>
                                    </div>



                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLongTitle">G2</h5>
                                    </div>
                                    <div class="row">
                                        <label class="col-sm-2 col-form-label">Año</label>
                                        <div class="col-sm-4">
                                            <div class="form-group bmd-form-group">
                                                <input class="form-control" type="text" name="anx1_g2_año" id="anx1_g2_año" required="true" aria-required="true">
                                            </div>
                                        </div>
                                        <label class="col-sm-2 col-form-label">Edad mat.</label>
                                        <div class="col-sm-4">
                                            <div class="form-group bmd-form-group">
                                                <input class="form-control" type="text" name="anx1_g2_edadmat" id="anx1_g2_edadmat" required="true" aria-required="true">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <label class="col-sm-2 col-form-label">Dur. de emb.</label>
                                        <div class="col-sm-4">
                                            <div class="form-group bmd-form-group">
                                                <input class="form-control" type="text" name="anx1_g2_durembara" id="anx1_g2_durembara" required="true" aria-required="true">
                                            </div>
                                        </div>
                                        <label class="col-sm-2 col-form-label">Sexo</label>
                                        <div class="col-sm-4">
                                            <div class="form-group bmd-form-group">
                                                <input class="form-control" type="text" name="anx1_g2_sexo" id="anx1_g2_sexo" required="true" aria-required="true">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <label class="col-sm-2 col-form-label">Peso</label>
                                        <div class="col-sm-4">
                                            <div class="form-group bmd-form-group">
                                                <input class="form-control" type="text" name="anx1_g2_peso" id="anx1_g2_peso" required="true" aria-required="true">
                                            </div>
                                        </div>
                                        <label class="col-sm-2 col-form-label">Vivo y Sano</label>
                                        <div class="col-sm-4">
                                            <div class="form-group bmd-form-group">
                                                <input class="form-control" type="text" name="anx1_g2_vivo" id="anx1_g2_vivo" required="true" aria-required="true">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <label class="col-sm-2 col-form-label">Resol</label>
                                        <div class="col-sm-4">
                                            <div class="form-group bmd-form-group">
                                                <input class="form-control" type="text" name="anx1_g2_resol" id="anx1_g2_resol" required="true" aria-required="true">
                                            </div>
                                        </div>
                                        <label class="col-sm-2 col-form-label">Comp</label>
                                        <div class="col-sm-4">
                                            <div class="form-group bmd-form-group">
                                                <input class="form-control" type="text" name="anx1_g2_comp" id="anx1_g2_comp" required="true" aria-required="true">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <label class="col-sm-2 col-form-label">Lactancia #Meses</label>
                                        <div class="col-sm-4">
                                            <div class="form-group bmd-form-group">
                                                <div class="dropdown bootstrap-select col-sm-12 pl-0 pr-0"><select class="selectpicker col-sm-12 pl-0 pr-0" name="anx1_g2_lactancia" data-style="select-with-transition" title="" data-size="100" tabindex="-98">
                                                        <option value="1">1</option>
                                                        <option value="2">2</option>
                                                        <option value="3">3</option>
                                                        <option value="4">4</option>
                                                        <option value="5">5</option>
                                                        <option value="6">6</option>
                                                        <option value="7">7</option>
                                                        <option value="8">8</option>
                                                        <option value="9">9</option>
                                                        <option value="10">10</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <label class="col-sm-2 col-form-label label-checkbox">Meses</label>
                                        <div class="col-sm-10 checkbox-radios">
                                            <div class="form-check form-check-inline">
                                                <label class="form-check-label">
                                                    <input class="form-check-input" type="radio" name="anx1_g2_meses" value="option2" checked> Si
                                                    <span class="circle">
                        <span class="check"></span>
                      </span>
                                                </label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <label class="form-check-label">
                                                    <input class="form-check-input" type="radio" name="anx1_g2_meses" value="option1"> No
                                                    <span class="circle">
                        <span class="check"></span>
                      </span>
                                                </label>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLongTitle">G3</h5>
                                    </div>
                                    <div class="row">
                                        <label class="col-sm-2 col-form-label">Año</label>
                                        <div class="col-sm-4">
                                            <div class="form-group bmd-form-group">
                                                <input class="form-control" type="text" name="anx1_g3_año" id="anx1_g3_año" required="true" aria-required="true">
                                            </div>
                                        </div>
                                        <label class="col-sm-2 col-form-label">Edad mat.</label>
                                        <div class="col-sm-4">
                                            <div class="form-group bmd-form-group">
                                                <input class="form-control" type="text" name="anx1_g3_edadmat" id="anx1_g3_edadmat" required="true" aria-required="true">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <label class="col-sm-2 col-form-label">Dur. de emb.</label>
                                        <div class="col-sm-4">
                                            <div class="form-group bmd-form-group">
                                                <input class="form-control" type="text" name="anx1_g3_durembara" id="anx1_g3_durembara" required="true" aria-required="true">
                                            </div>
                                        </div>
                                        <label class="col-sm-2 col-form-label">Sexo</label>
                                        <div class="col-sm-4">
                                            <div class="form-group bmd-form-group">
                                                <input class="form-control" type="text" name="anx1_g3_sexo" id="anx1_g3_sexo" required="true" aria-required="true">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <label class="col-sm-2 col-form-label">Peso</label>
                                        <div class="col-sm-4">
                                            <div class="form-group bmd-form-group">
                                                <input class="form-control" type="text" name="anx1_g3_peso" id="anx1_g3_peso" required="true" aria-required="true">
                                            </div>
                                        </div>
                                        <label class="col-sm-2 col-form-label">Vivo y Sano</label>
                                        <div class="col-sm-4">
                                            <div class="form-group bmd-form-group">
                                                <input class="form-control" type="text" name="anx1_g3_vivo" id="anx1_g3_vivo" required="true" aria-required="true">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <label class="col-sm-2 col-form-label">Resol</label>
                                        <div class="col-sm-4">
                                            <div class="form-group bmd-form-group">
                                                <input class="form-control" type="text" name="anx1_g3_resol" id="anx1_g3_resol" required="true" aria-required="true">
                                            </div>
                                        </div>
                                        <label class="col-sm-2 col-form-label">Comp</label>
                                        <div class="col-sm-4">
                                            <div class="form-group bmd-form-group">
                                                <input class="form-control" type="text" name="anx1_g3_comp" id="anx1_g3_comp" required="true" aria-required="true">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <label class="col-sm-2 col-form-label">Lactancia #Meses</label>
                                        <div class="col-sm-4">
                                            <div class="form-group bmd-form-group">
                                                <div class="dropdown bootstrap-select col-sm-12 pl-0 pr-0"><select class="selectpicker col-sm-12 pl-0 pr-0" name="anx1_g3_lactancia" data-style="select-with-transition" title="" data-size="100" tabindex="-98">
                                                        <option value="1">1</option>
                                                        <option value="2">2</option>
                                                        <option value="3">3</option>
                                                        <option value="4">4</option>
                                                        <option value="5">5</option>
                                                        <option value="6">6</option>
                                                        <option value="7">7</option>
                                                        <option value="8">8</option>
                                                        <option value="9">9</option>
                                                        <option value="10">10</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <label class="col-sm-2 col-form-label label-checkbox">Meses</label>
                                        <div class="col-sm-10 checkbox-radios">
                                            <div class="form-check form-check-inline">
                                                <label class="form-check-label">
                                                    <input class="form-check-input" type="radio" name="anx1_g3_meses" value="option2" checked> Si
                                                    <span class="circle">
                        <span class="check"></span>
                      </span>
                                                </label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <label class="form-check-label">
                                                    <input class="form-check-input" type="radio" name="anx1_g3_meses" value="option1"> No
                                                    <span class="circle">
                        <span class="check"></span>
                      </span>
                                                </label>
                                            </div>
                                        </div>
                                    </div>


                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLongTitle">G4</h5>
                                    </div>
                                    <div class="row">
                                        <label class="col-sm-2 col-form-label">Año</label>
                                        <div class="col-sm-4">
                                            <div class="form-group bmd-form-group">
                                                <input class="form-control" type="text" name="anx1_g4_año" id="anx1_g4_año" required="true" aria-required="true">
                                            </div>
                                        </div>
                                        <label class="col-sm-2 col-form-label">Edad mat.</label>
                                        <div class="col-sm-4">
                                            <div class="form-group bmd-form-group">
                                                <input class="form-control" type="text" name="anx1_g4_edadmat" id="anx1_g4_edadmat" required="true" aria-required="true">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <label class="col-sm-2 col-form-label">Dur. de emb.</label>
                                        <div class="col-sm-4">
                                            <div class="form-group bmd-form-group">
                                                <input class="form-control" type="text" name="anx1_g4_durembara" id="anx1_g4_durembara" required="true" aria-required="true">
                                            </div>
                                        </div>
                                        <label class="col-sm-2 col-form-label">Sexo</label>
                                        <div class="col-sm-4">
                                            <div class="form-group bmd-form-group">
                                                <input class="form-control" type="text" name="anx1_g4_sexo" id="anx1_g4_sexo" required="true" aria-required="true">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <label class="col-sm-2 col-form-label">Peso</label>
                                        <div class="col-sm-4">
                                            <div class="form-group bmd-form-group">
                                                <input class="form-control" type="text" name="anx1_g4_peso" id="anx1_g4_peso" required="true" aria-required="true">
                                            </div>
                                        </div>
                                        <label class="col-sm-2 col-form-label">Vivo y Sano</label>
                                        <div class="col-sm-4">
                                            <div class="form-group bmd-form-group">
                                                <input class="form-control" type="text" name="anx1_g4_vivo" id="anx1_g4_vivo" required="true" aria-required="true">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <label class="col-sm-2 col-form-label">Resol</label>
                                        <div class="col-sm-4">
                                            <div class="form-group bmd-form-group">
                                                <input class="form-control" type="text" name="anx1_g4_resol" id="anx1_g4_resol" required="true" aria-required="true">
                                            </div>
                                        </div>
                                        <label class="col-sm-2 col-form-label">Comp</label>
                                        <div class="col-sm-4">
                                            <div class="form-group bmd-form-group">
                                                <input class="form-control" type="text" name="anx1_g4_comp" id="anx1_g4_comp" required="true" aria-required="true">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <label class="col-sm-2 col-form-label">Lactancia #Meses</label>
                                        <div class="col-sm-4">
                                            <div class="form-group bmd-form-group">
                                                <div class="dropdown bootstrap-select col-sm-12 pl-0 pr-0"><select class="selectpicker col-sm-12 pl-0 pr-0" name="anx1_g4_lactancia" data-style="select-with-transition" title="" data-size="100" tabindex="-98">
                                                        <option value="1">1</option>
                                                        <option value="2">2</option>
                                                        <option value="3">3</option>
                                                        <option value="4">4</option>
                                                        <option value="5">5</option>
                                                        <option value="6">6</option>
                                                        <option value="7">7</option>
                                                        <option value="8">8</option>
                                                        <option value="9">9</option>
                                                        <option value="10">10</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <label class="col-sm-2 col-form-label label-checkbox">Meses</label>
                                        <div class="col-sm-10 checkbox-radios">
                                            <div class="form-check form-check-inline">
                                                <label class="form-check-label">
                                                    <input class="form-check-input" type="radio" name="anx1_g4_meses" value="option2" checked> Si
                                                    <span class="circle">
                        <span class="check"></span>
                      </span>
                                                </label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <label class="form-check-label">
                                                    <input class="form-check-input" type="radio" name="anx1_g4_meses" value="option1"> No
                                                    <span class="circle">
                        <span class="check"></span>
                      </span>
                                                </label>
                                            </div>
                                        </div>
                                    </div>


                                    <div class="row">
                                        <label class="col-sm-2 col-form-label">Citología Cervical</label>
                                        <div class="col-sm-4">
                                            <div class="form-group bmd-form-group">
                                                <input class="form-control" type="text" name="anx1_cervical" id="anx1_cervical" required="true" aria-required="true">
                                            </div>
                                        </div>
                                        <label class="col-sm-2 col-form-label">DOCMA</label>
                                        <div class="col-sm-4">
                                            <div class="form-group bmd-form-group">
                                                <input class="form-control" type="text" name="anx1_docma" id="anx1_docma" required="true" aria-required="true">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <label class="col-sm-2 col-form-label">Autoexploración</label>
                                        <div class="col-sm-4">
                                            <div class="form-group bmd-form-group">
                                                <input class="form-control" type="text" name="anx1_autoexp" id="anx1_autoexp" required="true" aria-required="true">
                                            </div>
                                        </div>
                                        <label class="col-sm-2 col-form-label">USG</label>
                                        <div class="col-sm-4">
                                            <div class="form-group bmd-form-group">
                                                <input class="form-control" type="text" name="anx1_usg" id="anx1_usg" required="true" aria-required="true">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <label class="col-sm-2 col-form-label">Mastografía</label>
                                        <div class="col-sm-4">
                                            <div class="form-group bmd-form-group">
                                                <input class="form-control" type="text" name="anx1_mastogra" id="anx1_mastogra" required="true" aria-required="true">
                                            </div>
                                        </div>
                                        <label class="col-sm-2 col-form-label">Menopausia</label>
                                        <div class="col-sm-4">
                                            <div class="form-group bmd-form-group">
                                                <input class="form-control" type="text" name="anx1_menopausia" id="anx1_menopausia" required="true" aria-required="true">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <label class="col-sm-2 col-form-label">Antecedentes de Infertilidad</label>
                                        <div class="col-sm-4">
                                            <div class="form-group bmd-form-group">
                                                <input class="form-control" type="text" name="anx1_inferti" id="anx1_inferti" required="true" aria-required="true">
                                            </div>
                                        </div>
                                    </div>


                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLongTitle">Esquema de Vacunacion VPH</h5>
                                    </div>

                                    <div class="row">
                                        <label class="col-sm-2 col-form-label"></label>
                                        <div class="col-sm-4 checkbox-radios">
                                            <div class="form-check form-check-inline">
                                                <label class="form-check-label">
                                                    <input class="form-check-input" type="radio" name="anx1_esquemaVPH" value="option2" checked> Si
                                                    <span class="circle">
                        <span class="check"></span>
                      </span>
                                                </label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <label class="form-check-label">
                                                    <input class="form-check-input" type="radio" name="anx1_esquemaVPH" value="option1"> No
                                                    <span class="circle">
                        <span class="check"></span>
                      </span>
                                                </label>
                                            </div>
                                        </div>
                                        <label class="col-sm-2 col-form-label">Numero de Dosis</label>
                                        <div class="col-sm-4">
                                            <div class="form-group bmd-form-group">
                                                <div class="dropdown bootstrap-select col-sm-12 pl-0 pr-0"><select class="selectpicker col-sm-12 pl-0 pr-0" name="anx1_DOSIS" data-style="select-with-transition" title="" data-size="100" tabindex="-98">
                                                        <option value="1">1</option>
                                                        <option value="2">2</option>
                                                        <option value="3">3</option>
                                                        <option value="4">4</option>
                                                        <option value="5">5</option>
                                                        <option value="6">6</option>
                                                        <option value="7">7</option>
                                                        <option value="8">8</option>
                                                        <option value="9">9</option>
                                                        <option value="10">10</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLongTitle">Padecimiento Actual</h5>
                                    </div>

                                    <div class="row ">
                                        <label class="col-sm-2 col-form-label"><small>Padecimiento Actual</small></label>
                                        <div class="col-sm-10">
                                            <div class="form-group{{ $errors->has('description') ? ' has-danger' : '' }}">
                                                <textarea  rows="4" class="form-control{{ $errors->has('description') ? ' is-invalid' : '' }}" name="anx1_pActual" id="input-description" type="text" placeholder=""  aria-required="true">{{ old('Exporacion Fisica:') }}</textarea>
                                                @include('alerts.feedback', ['field' => 'description'])
                                            </div>
                                        </div>
                                    </div>

                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLongTitle">Exploración Fisica</h5>
                                    </div>

                                    <div class="row ">
                                        <label class="col-sm-2 col-form-label"><small>Exploración Fisica</small></label>
                                        <div class="col-sm-10">
                                            <div class="form-group{{ $errors->has('description') ? ' has-danger' : '' }}">
                                                <textarea  rows="4" class="form-control{{ $errors->has('description') ? ' is-invalid' : '' }}" name="anx1_explF" id="input-description" type="text" placeholder=""  aria-required="true">{{ old('Exporacion Fisica:') }}</textarea>
                                                @include('alerts.feedback', ['field' => 'description'])
                                            </div>
                                        </div>
                                    </div>

                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLongTitle">Estudios de Gabinete y Laboratorio</h5>
                                    </div>

                                    <div class="row ">
                                        <label class="col-sm-2 col-form-label"><small>Estudios de Gabinete y Laboratorio</small></label>
                                        <div class="col-sm-10">
                                            <div class="form-group{{ $errors->has('description') ? ' has-danger' : '' }}">
                                                <textarea  rows="4" class="form-control{{ $errors->has('description') ? ' is-invalid' : '' }}" name="anx1_EGL" id="input-description" type="text" placeholder=""  aria-required="true">{{ old('Exporacion Fisica:') }}</textarea>
                                                @include('alerts.feedback', ['field' => 'description'])
                                            </div>
                                        </div>
                                    </div>

                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLongTitle">Impresión Diagnostica</h5>
                                    </div>

                                    <div class="row ">
                                        <label class="col-sm-2 col-form-label"><small>Impresión Diagnostica</small></label>
                                        <div class="col-sm-10">
                                            <div class="form-group{{ $errors->has('description') ? ' has-danger' : '' }}">
                                                <textarea  rows="4" class="form-control{{ $errors->has('description') ? ' is-invalid' : '' }}" name="anx1_impresionD" id="input-description" type="text" placeholder=""  aria-required="true">{{ old('Exporacion Fisica:') }}</textarea>
                                                @include('alerts.feedback', ['field' => 'description'])
                                            </div>
                                        </div>
                                    </div>

                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLongTitle">Tratamiento</h5>
                                    </div>

                                    <div class="row ">
                                        <label class="col-sm-2 col-form-label"><small>Tratamiento</small></label>
                                        <div class="col-sm-10">
                                            <div class="form-group{{ $errors->has('description') ? ' has-danger' : '' }}">
                                                <textarea  rows="4" class="form-control{{ $errors->has('description') ? ' is-invalid' : '' }}" name="anx1_tratamiento1" id="input-description" type="text" placeholder=""  aria-required="true">{{ old('Exporacion Fisica:') }}</textarea>
                                                @include('alerts.feedback', ['field' => 'description'])
                                            </div>
                                        </div>
                                    </div>

                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLongTitle">Plan Médico</h5>
                                    </div>

                                    <div class="row ">
                                        <label class="col-sm-2 col-form-label"><small>Plan Médico</small></label>
                                        <div class="col-sm-10">
                                            <div class="form-group{{ $errors->has('description') ? ' has-danger' : '' }}">
                                                <textarea  rows="4" class="form-control{{ $errors->has('description') ? ' is-invalid' : '' }}" name="anx1_Pmedico" id="input-description" type="text" placeholder=""  aria-required="true">{{ old('Exporacion Fisica:') }}</textarea>
                                                @include('alerts.feedback', ['field' => 'description'])
                                            </div>
                                        </div>
                                    </div>

                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLongTitle">Pronóstico</h5>
                                    </div>

                                    <div class="row ">
                                        <label class="col-sm-2 col-form-label">Para la Vida</label>
                                        <div class="col-sm-4">
                                            <div class="form-group bmd-form-group">
                                                <div class="dropdown bootstrap-select col-sm-12 pl-0 pr-0"><select class="selectpicker col-sm-12 pl-0 pr-0" name="anx1_pronos" data-style="select-with-transition" title="" data-size="100" tabindex="-98">
                                                        <option value="1">Bueno</option>
                                                        <option value="2">Reservado</option>
                                                        <option value="3">Malo</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <label class="col-sm-2 col-form-label">Para la Función</label>
                                        <div class="col-sm-4">
                                            <div class="form-group bmd-form-group">
                                                <div class="dropdown bootstrap-select col-sm-12 pl-0 pr-0"><select class="selectpicker col-sm-12 pl-0 pr-0" name="anx1_fun" data-style="select-with-transition" title="" data-size="100" tabindex="-98">
                                                        <option value="1">Bueno</option>
                                                        <option value="2">Reservado</option>
                                                        <option value="3">Malo</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                    </div>





                                </div



                            </div>

                        </div>
                    </div>
            </div>

            <button type="submit" class="btn btn-primary" align="left">Aceptar</button>
            </form>
        </div>









    </div>
</div>
</div>


</div>


@push('js')
    <script>

        function tipo(variable){

            if(variable == "nuevo"){
                $(".form-control").val("");
                $("#myform").attr("action","anexo1/add");
                //selectnews();
            }
            else{
                $("#myform").attr("action","anexo1/edit/"+""+variable+"");

                $.ajax({
                    type: "GET",
                    dataType: "json",
                    url: "../public/anexo1/edit/"+""+variable+"",
                    success: function (data) {
                        var item = [];
                        for (var i = 0, max = data.data.length; i < max; i++) {
                            var name = data.data[i].name;
                            var app_name = data.data[i].app_name;
                            var apm_name = data.data[i].apm_name;
                            var username = data.data[i].username;
                            var email = data.data[i].email;
                            var sex = data.data[i].sex;
                            var phone = data.data[i].phone;
                            var fecha_nacimiento = data.data[i].fecha_nacimiento;
                            var id_edo_civil = data.data[i].id_edo_civil;
                            var telefono = data.data[i].telefono;
                            var id_estado = data.data[i].id_estado;
                            var id_estado_domicilio = data.data[i].id_estado_domicilio;
                            var cp = data.data[i].cp;
                            var ciudad = data.data[i].ciudad;
                            var calle = data.data[i].calle;
                            var num_ext = data.data[i].num_ext;
                            var num_int = data.data[i].num_int;
                            var colonia = data.data[i].colonia;
                            var tipo_sangre = data.data[i].tipo_sangre;
                            var ocupacion = data.data[i].ocupacion;
                            var alergias = data.data[i].alergias;
                            var nombre_pareja = data.data[i].nombre_pareja;
                            var fch_nacimiento_pareja = data.data[i].fch_nacimiento_pareja;
                            var ocupacion_pareja = data.data[i].ocupacion_pareja;
                            var celular_pareja = data.data[i].celular_pareja;
                            var email_pareja = data.data[i].email_pareja;
                        }

                        $("#name").val(name);
                        $("#app_name").val(app_name);
                        $("#apm_name").val(apm_name);
                        $("#username").val(username);
                        $("#email").val(email);
                        $("#sex").val(sex);
                        $("#phone").val(phone);
                        $("#fecha_nacimiento").val(fecha_nacimiento);
                        $("#id_edo_civil").val(id_edo_civil);
                        $("#telefono").val(telefono);
                        $("#id_estado").val(id_estado);
                        $("#id_estado_domicilio").val(id_estado_domicilio);
                        $("#cp").val(cp);
                        $("#ciudad").val(ciudad);
                        $("#calle").val(calle);
                        $("#num_ext").val(num_ext);
                        $("#num_int").val(num_int);
                        $("#colonia").val(colonia);
                        $("#tipo_sangre").val(tipo_sangre);
                        $("#ocupacion").val(ocupacion);
                        $("#alergias").val(alergias);
                        $("#nombre_pareja").val(nombre_pareja);
                        $("#fch_nacimiento_pareja").val(fch_nacimiento_pareja);
                        $("#ocupacion_pareja").val(ocupacion_pareja);
                        $("#celular_pareja").val(celular_pareja);
                        $("#email_pareja").val(email_pareja);
                    }
                });
            }

        };
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
