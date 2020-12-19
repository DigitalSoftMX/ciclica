<!-- Modal -->
<div class="modal fade docs-modalcitas-modal-lg" id="modalcitas" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h3 class="modal-title" id="exampleModalLongTitle">Agendar Citas</h3>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close" style="color: red">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="card">
                    <div class="card-body">
                        <div class="tab-content">
                            <div class="tab-pane active">
                                <div class="card-body ">
                                    <div class="row">
                                        <label class="col-sm-2 col-form-label">Nota</label>
                                        <div class="col-sm-10">
                                            <div class="form-group bmd-form-group is-filled">
                                                <input class="form-control" name="nota" id="nota" type="text" placeholder="Nota">
                                                <input name="numpac" id="numpac" value="" type="hidden">
                                                <input name="fechstart" id="fechstart" type="hidden">
                                                <input name="fechend" id="fechend" type="hidden">
                                                <input name="img" id="img" type="hidden">
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <button type="button" class="btn btn-primary"  onclick=citas()>Aceptar</button>
            </div>
        </div>
        <div class="card-footer ml-auto">
        </div>
    </div>
</div>

<!-- Fin Modal -->

<!-- Modal -->
<form method="post" action="{{url('procesoaestudios/add') }}" autocomplete="off" class="form-horizontal">
    @csrf
        <div class="modal fade docs-modalestudios-modal-lg" id="modalestudios" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h3 class="modal-title" id="exampleModalLongTitle">Agendar Estudios</h3>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close" style="color: red">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="card">
                            <div class="card-body">
                                <div class="tab-content">
                                    <div class="tab-pane active">
                                        <div class="card-body ">
                                            <div class="row">
                                                <label class="col-sm-2 col-form-label">Nombre</label>
                                                <div class="col-sm-4">
                                                    <div class="form-group bmd-form-group">
                                                        <input class="form-control" name="name" id="name" type="text" placeholder="" value="" required="true" aria-required="true">

                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row ">
                                                <label class="col-sm-2 col-form-label"><small>Agendar Estudios:</small></label>
                                                <div class="col-sm-7">
                                                    <div class="form-group{{ $errors->has('description') ? ' has-danger' : '' }}">
                                                        <textarea  rows="4" class="form-control{{ $errors->has('description') ? ' is-invalid' : '' }}" name="indica" id="input-description" type="text" placeholder=""  aria-required="true">{{ old('Exporacion Fisica:') }}</textarea>
                                                        @include('alerts.feedback', ['field' => 'description'])
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer ml-auto mr-auto">
                                <button type="submit" class="btn btn-rose">{{ __('Imprimir') }}</button>
                            </div>
                        </div>


                    </div>
                </div>
            </div>
        </div>
</form>


<!-- Modal -->

<div class="modal fade docs-anexotres-modal-lg" tabindex="-1" id="anexos" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h3 class="modal-title" id="exampleModalLongTitle">Anexo 3</h3>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close" style="color: red">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form method="post"  action="{{url('procesoanexo3/add') }}" autocomplete="off" class="form-horizontal">
                @csrf


                    <div class="content">
                        <div class="container-fluid">
                            <!-- Inicio de elemento -->
                            <div class="card ">
                                <div class="card-body ">
                                    <div class="tab-content tab-space">
                                        <!-- primer metodo del panel-->
                                        <div class="tab-pane  active show" id="link1">
                                            <div class="row">
                                                <label class="col-sm-2 col-form-label">Ciclos Mestruales</label>
                                                <div class="col-sm-4">
                                                    <div class="form-group bmd-form-group">
                                                        <input class="form-control" type="text" name="anx3_Ciclos_mes" id="anx3_Ciclos_mes" required="true" aria-required="true">
                                                    </div>
                                                </div>
                                                <label class="col-sm-2 col-form-label">Cantidad sangrados mestrual</label>
                                                <div class="col-sm-4">
                                                    <div class="form-group bmd-form-group">
                                                        <div class="dropdown bootstrap-select col-sm-12 pl-0 pr-0">
                                                            <label>
                                                                <select class="selectpicker col-sm-12 pl-0 pr-0" name="anx3_cantidad_sangrado_mes" data-style="select-with-transition" title="" data-size="100" tabindex="-98">
                                                                    <option value="Escaso">Escaso</option>
                                                                    <option value="Normal">Normal</option>
                                                                    <option value="Abundante">Abundante</option>
                                                                </select>
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>

                                                <label class="col-sm-2 col-form-label">No. de Toallas por dia</label>
                                                <div class="col-sm-4">
                                                    <div class="form-group bmd-form-group">
                                                        <div class="dropdown bootstrap-select col-sm-12 pl-0 pr-0"><select class="selectpicker col-sm-12 pl-0 pr-0" name="anx3_nume_toalla_x_dia" data-style="select-with-transition" title="" data-size="100" tabindex="-98">
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

                                                <label class="col-sm-2 col-form-label">Dismenorrea</label>
                                                <div class="col-sm-4">
                                                    <div class="form-group bmd-form-group">
                                                        <div class="dropdown bootstrap-select col-sm-12 pl-0 pr-0"><select class="selectpicker col-sm-12 pl-0 pr-0" name="anx_dismenorrea" data-style="select-with-transition" title="" data-size="100" tabindex="-98">
                                                                <option value="Leve">Leve</option>
                                                                <option value="Moderado">Moderado</option>
                                                                <option value="Severo">Severo</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>

                                                <label class="col-sm-2 col-form-label label-checkbox">Cáida de Cabello</label>
                                                <div class="col-sm-4 checkbox-radios">
                                                    <div class="form-check form-check-inline">
                                                        <label class="form-check-label">
                                                            <input class="form-check-input"  type="radio" name="anx3_caida_pelo" value="Si" checked> Si
                                                            <span class="circle">
                        <span class="check"></span>
                      </span>
                                                        </label>
                                                    </div>
                                                    <div class="form-check form-check-inline">
                                                        <label class="form-check-label">
                                                            <input class="form-check-input" type="radio" name="anx3_caida_pelo" value="No"> No
                                                            <span class="circle">
                        <span class="check"></span>
                      </span>
                                                        </label>
                                                    </div>
                                                </div>

                                                <label class="col-sm-2 col-form-label label-checkbox">Resequedad de Piel</label>
                                                <div class="col-sm-4 checkbox-radios">
                                                    <div class="form-check form-check-inline">
                                                        <label class="form-check-label">
                                                            <input class="form-check-input" type="radio" name="anx3_reseque_piel" value="Si" checked> Si
                                                            <span class="circle">
                        <span class="check"></span>
                      </span>
                                                        </label>
                                                    </div>
                                                    <div class="form-check form-check-inline">
                                                        <label class="form-check-label">
                                                            <input class="form-check-input" type="radio" name="anx3_reseque_piel" value="No"> No
                                                            <span class="circle">
                        <span class="check"></span>
                      </span>
                                                        </label>
                                                    </div>
                                                </div>

                                                <label class="col-sm-2 col-form-label">Bochornos</label>
                                                <div class="col-sm-4">
                                                    <div class="form-group bmd-form-group">
                                                        <div class="dropdown bootstrap-select col-sm-12 pl-0 pr-0"><select class="selectpicker col-sm-12 pl-0 pr-0" name="anx3_bochornos" data-style="select-with-transition" title="" data-size="100" tabindex="-98">
                                                                <option value="Leve">Leve</option>
                                                                <option value="Moderado">Moderado</option>
                                                                <option value="Severo">Severo</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                <label class="col-sm-2 col-form-label">Tiempo de evolución</label>
                                                <div class="col-sm-4">
                                                    <div class="form-group bmd-form-group">
                                                        <input class="form-control" type="text" name="anx3_tiempo_evolucion_bocho" id="anx3_tiempo_evolucion_bocho" required="true" aria-required="true">
                                                    </div>
                                                </div>


                                                <label class="col-sm-2 col-form-label">Sudoracion</label>
                                                <div class="col-sm-4 checkbox-radios">
                                                    <div class="form-check form-check-inline">
                                                        <label class="form-check-label">
                                                            <input class="form-check-input" type="radio" name="anx3_sudoracion" value="Si" checked> Si
                                                            <span class="circle">
                        <span class="check"></span>
                      </span>
                                                        </label>
                                                    </div>
                                                    <div class="form-check form-check-inline">
                                                        <label class="form-check-label">
                                                            <input class="form-check-input" type="radio" name="anx3_sudoracion" value="No"> No
                                                            <span class="circle">
                        <span class="check"></span>
                      </span>
                                                        </label>
                                                    </div>
                                                </div>
                                                <label class="col-sm-2 col-form-label">Tiempo de evolución</label>
                                                <div class="col-sm-4">
                                                    <div class="form-group bmd-form-group">
                                                        <input class="form-control" type="text" name="anx3_tiempo_evolucion_sudo" id="anx3_tiempo_evolucion_sudo" required="true" aria-required="true">
                                                    </div>
                                                </div>

                                                <label class="col-sm-2 col-form-label label-checkbox">Labilidad</label>
                                                <div class="col-sm-4 checkbox-radios">
                                                    <div class="form-check form-check-inline">
                                                        <label class="form-check-label">
                                                            <input class="form-check-input" type="radio" name="anx3_labilidad" value="Si" checked> Si
                                                            <span class="circle">
                        <span class="check"></span>
                      </span>
                                                        </label>
                                                    </div>
                                                    <div class="form-check form-check-inline">
                                                        <label class="form-check-label">
                                                            <input class="form-check-input" type="radio" name="anx3_labilidad" value="No"> No
                                                            <span class="circle">
                        <span class="check"></span>
                      </span>
                                                        </label>
                                                    </div>
                                                </div>
                                                <label class="col-sm-2 col-form-label label-checkbox">Irratibilidad</label>
                                                <div class="col-sm-4 checkbox-radios">
                                                    <div class="form-check form-check-inline">
                                                        <label class="form-check-label">
                                                            <input class="form-check-input" type="radio" name="anx3_irratibilidad" value="Si" checked> Si
                                                            <span class="circle">
                        <span class="check"></span>
                      </span>
                                                        </label>
                                                    </div>
                                                    <div class="form-check form-check-inline">
                                                        <label class="form-check-label">
                                                            <input class="form-check-input" type="radio" name="anx3_irratibilidad" value="No"> No
                                                            <span class="circle">
                        <span class="check"></span>
                      </span>
                                                        </label>
                                                    </div>
                                                </div>

                                                <label class="col-sm-2 col-form-label label-checkbox">Ansiedad</label>
                                                <div class="col-sm-4 checkbox-radios">
                                                    <div class="form-check form-check-inline">
                                                        <label class="form-check-label">
                                                            <input class="form-check-input" type="radio" name="anx3_ansiedad" value="Si" checked> Si
                                                            <span class="circle">
                        <span class="check"></span>
                      </span>
                                                        </label>
                                                    </div>
                                                    <div class="form-check form-check-inline">
                                                        <label class="form-check-label">
                                                            <input class="form-check-input" type="radio" name="anx3_ansiedad" value="No"> No
                                                            <span class="circle">
                        <span class="check"></span>
                      </span>
                                                        </label>
                                                    </div>
                                                </div>

                                                <label class="col-sm-2 col-form-label label-checkbox">Nerviosismo</label>
                                                <div class="col-sm-4 checkbox-radios">
                                                    <div class="form-check form-check-inline">
                                                        <label class="form-check-label">
                                                            <input class="form-check-input" type="radio" name="anx3_nerviosismo" value="Si" checked> Si
                                                            <span class="circle">
                        <span class="check"></span>
                      </span>
                                                        </label>
                                                    </div>
                                                    <div class="form-check form-check-inline">
                                                        <label class="form-check-label">
                                                            <input class="form-check-input" type="radio" name="anx3_nerviosismo" value="No"> No
                                                            <span class="circle">
                        <span class="check"></span>
                      </span>
                                                        </label>
                                                    </div>
                                                </div>

                                                <label class="col-sm-2 col-form-label label-checkbox">Cefalea</label>
                                                <div class="col-sm-4 checkbox-radios">
                                                    <div class="form-check form-check-inline">
                                                        <label class="form-check-label">
                                                            <input class="form-check-input" type="radio" name="anx3_cefalea" value="Si" checked> Si
                                                            <span class="circle">
                        <span class="check"></span>
                      </span>
                                                        </label>
                                                    </div>
                                                    <div class="form-check form-check-inline">
                                                        <label class="form-check-label">
                                                            <input class="form-check-input" type="radio" name="anx3_cefalea" value="No"> No
                                                            <span class="circle">
                        <span class="check"></span>
                      </span>
                                                        </label>
                                                    </div>
                                                </div>

                                                <label class="col-sm-2 col-form-label label-checkbox">Insomnio</label>
                                                <div class="col-sm-4 checkbox-radios">
                                                    <div class="form-check form-check-inline">
                                                        <label class="form-check-label">
                                                            <input class="form-check-input" type="radio" name="anx3_insomnio" value="Si" checked> Si
                                                            <span class="circle">
                        <span class="check"></span>
                      </span>
                                                        </label>
                                                    </div>
                                                    <div class="form-check form-check-inline">
                                                        <label class="form-check-label">
                                                            <input class="form-check-input" type="radio" name="anx3_insomnio" value="No"> No
                                                            <span class="circle">
                        <span class="check"></span>
                      </span>
                                                        </label>
                                                    </div>
                                                </div>

                                                <label class="col-sm-2 col-form-label label-checkbox">Alteración libido</label>
                                                <div class="col-sm-4 checkbox-radios">
                                                    <div class="form-check form-check-inline">
                                                        <label class="form-check-label">
                                                            <input class="form-check-input" type="radio" name="anx3_alteracion_libido" value="Si" checked> Si
                                                            <span class="circle">
                        <span class="check"></span>
                      </span>
                                                        </label>
                                                    </div>
                                                    <div class="form-check form-check-inline">
                                                        <label class="form-check-label">
                                                            <input class="form-check-input" type="radio" name="anx3_alteracion_libido" value="No"> No
                                                            <span class="circle">
                        <span class="check"></span>
                      </span>
                                                        </label>
                                                    </div>
                                                </div>

                                                <label class="col-sm-2 col-form-label label-checkbox">Incontinencia urinaria</label>
                                                <div class="col-sm-4">
                                                    <div class="form-group bmd-form-group">
                                                        <div class="dropdown bootstrap-select col-sm-12 pl-0 pr-0"><select class="selectpicker col-sm-12 pl-0 pr-0" name="anx3_incontinecia_urinaria" data-style="select-with-transition" title="" data-size="100" tabindex="-98">
                                                                <option value="Esfuerzo">Esfuerzo</option>
                                                                <option value="Urgencia">Urgencia</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>


                                                <label class="col-sm-2 col-form-label label-checkbox">Resequedad vaginal</label>
                                                <div class="col-sm-4 checkbox-radios">
                                                    <div class="form-check form-check-inline">
                                                        <label class="form-check-label">
                                                            <input class="form-check-input" type="radio" name="anx3_resequedad_vaginal" value="Si" checked> Si
                                                            <span class="circle">
                        <span class="check"></span>
                      </span>
                                                        </label>
                                                    </div>
                                                    <div class="form-check form-check-inline">
                                                        <label class="form-check-label">
                                                            <input class="form-check-input" type="radio" name="anx3_resequedad_vaginal" value="No"> No
                                                            <span class="circle">
                        <span class="check"></span>
                      </span>
                                                        </label>
                                                    </div>
                                                </div>

                                                <label class="col-sm-2 col-form-label">Notas</label>
                                                <div class="col-sm-10">
                                                    <div class="form-group bmd-form-group">
                                                        <input class="form-control" type="text" name="anx3_notas" id="anx3_notas" required="true" aria-required="true">
                                                    </div>
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
                    </div>
            </form>


        </div>
    </div>
</div>

<!-- Fin Modal -->

<!-- Modal -->
<div class="modal fade docs-anexo4-modal-lg" tabindex="-1" id="anexos" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h3 class="modal-title" id="exampleModalLongTitle">Anexo 4</h3>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close" style="color: red">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form method="post"  action="{{url('procesoanexo4/add') }}" autocomplete="off" class="form-horizontal">
                @csrf

                    <div class="content">
                        <div class="container-fluid">
                            <div class="row">
                                <!-- Primer  elemento -->
                                <div class="col-md-12">
                                    <div class="card ">
                                        <div class="card-body ">
                                            <ul class="nav nav-pills nav-pills-warning" role="tablist">
                                                <li class="nav-item">
                                                    <a class="nav-link active show" data-toggle="tab" href="#dato1" role="tablist">
                                                        Feto 1
                                                    </a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link" data-toggle="tab" href="#dato2" role="tablist">
                                                        Feto 2
                                                    </a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link" data-toggle="tab" href="#dato3" role="tablist">
                                                        Feto 3
                                                    </a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link" data-toggle="tab" href="#dato4" role="tablist">
                                                        DOPPLER DE ARTERIAS UTERINAS
                                                    </a>
                                                </li>

                                            </ul>
                                            <div class="tab-content tab-space">
                                                <div class="tab-pane  active show" id="dato1">
                                                    <div class="card-header card-header-rose card-header-icon">
                                                        <div class="card-icon">
                                                            <i class="material-icons">assignment</i>
                                                        </div>
                                                        <h4 class="card-title">Feto 1</h4>
                                                    </div>


                                                    <div class="row justify-content-center">
                                                        <label class="col-sm-2 col-form-label">Numero de Fetos:</label>
                                                        <div class="col-sm-4">
                                                            <div class="form-group">
                                                                <input class="form-control" name="anx4_num_fetos" id="input-name" type="text" placeholder="" value="" required="true" aria-required="true"/>
                                                            </div>
                                                        </div>
                                                        <label class="col-sm-2 col-form-label">Multiple : CORIONICIDAD:</label>
                                                        <div class="col-sm-4">
                                                            <div class="form-group">
                                                                <input class="form-control" name="anx4_coriocidad" id="input-name" type="text" placeholder="" value="" required="true" aria-required="true"/>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <label class="col-sm-4 col-form-label">Localización:</label>
                                                        <div class="col-sm-7">
                                                            <div class="form-group">
                                                                <input class="form-control" name="anx4_loca_feto1" id="input-name" type="text" placeholder="" value="" required="true" aria-required="true"/>
                                                            </div>
                                                        </div>

                                                    </div>

                                                    <div class="row align-content-around ">
                                                        <label class="col-sm-2 col-form-label">LCC:</label>
                                                        <div class="col-sm-3">
                                                            <div class="form-group">
                                                                <input class="form-control" name="anx4_feto1_lcc" id="input-name" type="text" placeholder="" value="" required="true" aria-required="true"/>
                                                            </div>
                                                        </div>
                                                        <label class="col-sm-2 col-form-label">mm/:</label>
                                                        <div class="col-sm-3">
                                                            <div class="form-group">
                                                                <input class="form-control" name="anx4_feto1_mm" id="input-name" type="text" placeholder="" value="" required="true" aria-required="true"/>
                                                            </div>
                                                        </div>
                                                        <label class="col-sm-1 col-form-label">semanas</label>
                                                    </div>
                                                    <div class="row align-content-around ">
                                                        <label class="col-sm-2 col-form-label">FCF:</label>
                                                        <div class="col-sm-5">
                                                            <div class="form-group">
                                                                <input class="form-control" name="anx4_feto1_fcf" id="input-name" type="text" placeholder="" value="" required="true" aria-required="true"/>
                                                            </div>
                                                        </div>
                                                        <label class="col-sm-2 col-form-label">latidos por minuto</label>
                                                    </div>
                                                    <div class="row align-content-around ">
                                                        <label class="col-sm-2 col-form-label">TRANSLUCENCIA NUCAL:</label>

                                                        <div class="form-group">
                                                            <input class="form-control" name="anx4_feto1_tras_nucal" id="input-name" type="text" size="15" placeholder="" value="" required="true" aria-required="true"/>
                                                        </div>
                                                        <label class="col-sm-1 col-form-label">/</label>
                                                        <div class="form-group">
                                                            <input class="form-control" name="anx4_feto1_tras_nuca_1" id="input-name" type="text" size="15" placeholder="" value="" required="true" aria-required="true"/>
                                                        </div>
                                                        <label class="col-sm-1 col-form-label">/</label>
                                                        <div class="form-group">
                                                            <input class="form-control" name="anx4_feto1_tras_nuca_2" id="input-name" type="text" size="15" placeholder="" value="" required="true" aria-required="true"/>
                                                        </div>
                                                        <label class="col-sm-1 col-form-label">mm</label>
                                                    </div>
                                                    <div class="row align-content-around ">
                                                        <label class="col-sm-3 col-form-label">IP DUCTO VENOSO:</label>
                                                        <div class="col-sm-3">
                                                            <div class="form-group">
                                                                <input class="form-control" name="anx4_feto1_ip_venoso" id="input-name" type="text" placeholder="" value="" required="true" aria-required="true"/>
                                                            </div>
                                                        </div>
                                                        <label class="col-sm-2 col-form-label">ONDA “A”</label>
                                                        <div class="col-sm-3">
                                                            <div class="form-group">
                                                                <input class="form-control" name="anx4_feto1_onda_a" id="input-name" type="text" placeholder="" value="" required="true" aria-required="true"/>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row align-content-around ">
                                                        <label class="col-sm-3 col-form-label">HUESO NASAL:  presente:</label>
                                                        <div class="col-sm-3">
                                                            <div class="form-group">
                                                                <input class="form-control" name="anx4_feto1_hueso_nasal" id="input-name" type="text" placeholder="" value="" required="true" aria-required="true"/>
                                                            </div>
                                                        </div>
                                                        <label class="col-sm-2 col-form-label">ausente:</label>
                                                        <div class="col-sm-3">
                                                            <div class="form-group">
                                                                <input class="form-control" name="anx4_feto1_hueso_nasal_au" id="input-name" type="text" placeholder="" value="" required="true" aria-required="true"/>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row align-content-around ">
                                                        <label class="col-sm-3 col-form-label">REGURGITACIÓN TRICUSPÍDEA: presente:</label>
                                                        <div class="col-sm-3">
                                                            <div class="form-group">
                                                                <input class="form-control" name="anx4_feto1_triscu" id="input-name" type="text" placeholder="" value="" required="true" aria-required="true"/>
                                                            </div>
                                                        </div>
                                                        <label class="col-sm-2 col-form-label">ausente:</label>
                                                        <div class="col-sm-3">
                                                            <div class="form-group">
                                                                <input class="form-control" name="anx4_feto1_triscu_au" id="input-name" type="text" placeholder="" value="" required="true" aria-required="true"/>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <br><br>
                                                    <div class="col-md-10 form-group">
                                                        <label for="exampleEmail" class="bmd-label-floating">DEFECTOS MAYORES:</label>
                                                        <input type="text" name="anx4_feto1_defectos_mayo" class="form-control" id="exampleEmail">
                                                    </div>

                                                    <div class="col-md-10 form-group">
                                                        <label for="exampleEmail" class="bmd-label-floating">Placenta:</label>
                                                        <input type="text" name="anx4_feto1_placenta" class="form-control" id="exampleEmail">
                                                    </div>


                                                    <!-- fin  de primer elemento -->
                                                    <!-- segundo elemento -->
                                                    <br><br><br>
                                                    <div class="col-md-12">
                                                        <!-- <div class="card"> -->
                                                        <div class="card-header card-header-icon card-header-rose">
                                                            <div class="card-icon">
                                                                <i class="material-icons">assignment</i>
                                                            </div>
                                                            <h4 class="card-title ">CÁLCULO DE RIESGO FETO 1</h4>
                                                        </div>
                                                        <!--  <div class="card-body"> -->
                                                        <div class="table-responsive">
                                                            <table class="table">
                                                                <thead class=" text-primary">
                                                                <th>
                                                                    CROMOSOMOPATIA
                                                                </th>
                                                                <th>
                                                                    RIESGO BASAL(EDAD)
                                                                </th>
                                                                <th>
                                                                    RIESGO AJUSTADO
                                                                    (USG)
                                                                </th>
                                                                <th>
                                                                    RIESGO AJUSTADO
                                                                    (DUO-TEST)
                                                                </th>
                                                                </thead>
                                                                <tbody>
                                                                <tr>
                                                                    <td>
                                                                        Trisomía 21
                                                                    </td>
                                                                    <td>
                                                                        <div class="form-group">
                                                                            <input type="text" name="anx4_feto1_trisomia21_uno" class="form-control" placeholder="1:">
                                                                        </div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="form-group">
                                                                            <input type="text" name="anx4_feto1_trisomia21_dos" class="form-control" placeholder="1:">
                                                                        </div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="form-group">
                                                                            <input type="text" name="anx4_feto1_trisomia21_tres" class="form-control" placeholder="1:">
                                                                        </div>
                                                                    </td>

                                                                </tr>
                                                                <tr>
                                                                    <td>
                                                                        Trisomía 18
                                                                    </td>
                                                                    <td>
                                                                        <div class="form-group">
                                                                            <input type="text" name="anx4_feto1_trisomia18_uno" class="form-control" placeholder="1:">
                                                                        </div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="form-group">
                                                                            <input type="text" name="anx4_feto1_trisomia18_dos" class="form-control" placeholder="1:">
                                                                        </div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="form-group">
                                                                            <input type="text" name="anx4_feto1_trisomia18_tres" class="form-control" placeholder="1:">
                                                                        </div>
                                                                    </td>

                                                                </tr>
                                                                <tr>
                                                                    <td>
                                                                        Trisomía 13
                                                                    </td>
                                                                    <td>
                                                                        <div class="form-group">
                                                                            <input type="text" name="anx4_feto1_trisomia13_uno" class="form-control" placeholder="1:">
                                                                        </div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="form-group">
                                                                            <input type="text" name="anx4_feto1_trisomia13_dos" class="form-control" placeholder="1:">
                                                                        </div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="form-group">
                                                                            <input type="text" name="anx4_feto1_trisomia13_tres" class="form-control" placeholder="1:">
                                                                        </div>
                                                                    </td>
                                                                </tr>
                                                                </tbody>
                                                            </table>
                                                        </div>
                                                    </div>
                                                </div>


                                                <!-- fin de seguno elemento -->

                                                <!-- tercer de elemento -->
                                                <div class="tab-pane" id="dato2">
                                                    <div class="col-md-12">
                                                        <!--<div class="card ">-->
                                                        <div class="card-header card-header-rose card-header-icon">
                                                            <div class="card-icon">
                                                                <i class="material-icons">assignment</i>
                                                            </div>
                                                            <h4 class="card-title">Feto 2</h4>
                                                        </div>
                                                        <!--<div class="card-body ">-->
                                                        <div class="row">
                                                            <label class="col-sm-4 col-form-label">Localización:</label>
                                                            <div class="col-sm-7">
                                                                <div class="form-group">
                                                                    <input class="form-control" name="anx4_loca_feto2" id="input-name" type="text" placeholder="" value="" required="true" aria-required="true"/>
                                                                </div>
                                                            </div>

                                                        </div>

                                                        <div class="row align-content-around ">
                                                            <label class="col-sm-2 col-form-label">LCC:</label>
                                                            <div class="col-sm-3">
                                                                <div class="form-group">
                                                                    <input class="form-control" name="anx4_feto2_lcc" id="input-name" type="text" placeholder="" value="" required="true" aria-required="true"/>
                                                                </div>
                                                            </div>
                                                            <label class="col-sm-2 col-form-label">mm/:</label>
                                                            <div class="col-sm-3">
                                                                <div class="form-group">
                                                                    <input class="form-control" name="anx4_feto2_mm" id="input-name" type="text" placeholder="" value="" required="true" aria-required="true"/>
                                                                </div>
                                                            </div>
                                                            <label class="col-sm-1 col-form-label">semanas</label>
                                                        </div>
                                                        <div class="row align-content-around ">
                                                            <label class="col-sm-2 col-form-label">FCF:</label>
                                                            <div class="col-sm-5">
                                                                <div class="form-group">
                                                                    <input class="form-control" name="anx4_feto2_fcf" id="input-name" type="text" placeholder="" value="" required="true" aria-required="true"/>
                                                                </div>
                                                            </div>
                                                            <label class="col-sm-2 col-form-label">latidos por minuto</label>
                                                        </div>
                                                        <div class="row align-content-around ">
                                                            <label class="col-sm-2 col-form-label">TRANSLUCENCIA NUCAL:</label>

                                                            <div class="form-group">
                                                                <input class="form-control" name="anx4_feto2_tras_nucal" id="input-name" type="text" size="15" placeholder="" value="" required="true" aria-required="true"/>
                                                            </div>
                                                            <label class="col-sm-1 col-form-label">/</label>
                                                            <div class="form-group">
                                                                <input class="form-control" name="anx4_feto2_tras_nuca_1" id="input-name" type="text" size="15" placeholder="" value="" required="true" aria-required="true"/>
                                                            </div>
                                                            <label class="col-sm-1 col-form-label">/</label>
                                                            <div class="form-group">
                                                                <input class="form-control" name="anx4_feto2_tras_nuca_2" id="input-name" type="text" size="15" placeholder="" value="" required="true" aria-required="true"/>
                                                            </div>
                                                            <label class="col-sm-1 col-form-label">mm</label>
                                                        </div>
                                                        <div class="row align-content-around ">
                                                            <label class="col-sm-3 col-form-label">IP DUCTO VENOSO:</label>
                                                            <div class="col-sm-3">
                                                                <div class="form-group">
                                                                    <input class="form-control" name="anx4_feto2_ip_venoso" id="input-name" type="text" placeholder="" value="" required="true" aria-required="true"/>
                                                                </div>
                                                            </div>
                                                            <label class="col-sm-2 col-form-label">ONDA “A”</label>
                                                            <div class="col-sm-3">
                                                                <div class="form-group">
                                                                    <input class="form-control" name="anx4_feto2_onda_a" id="input-name" type="text" placeholder="" value="" required="true" aria-required="true"/>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row align-content-around ">
                                                            <label class="col-sm-3 col-form-label">HUESO NASAL:  presente:</label>
                                                            <div class="col-sm-3">
                                                                <div class="form-group">
                                                                    <input class="form-control" name="anx4_feto2_hueso_nasal" id="input-name" type="text" placeholder="" value="" required="true" aria-required="true"/>
                                                                </div>
                                                            </div>
                                                            <label class="col-sm-2 col-form-label">ausente:</label>
                                                            <div class="col-sm-3">
                                                                <div class="form-group">
                                                                    <input class="form-control" name="anx4_feto2_hueso_nasal_au" id="input-name" type="text" placeholder="" value="" required="true" aria-required="true"/>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row align-content-around ">
                                                            <label class="col-sm-3 col-form-label">REGURGITACIÓN TRICUSPÍDEA: presente:</label>
                                                            <div class="col-sm-3">
                                                                <div class="form-group">
                                                                    <input class="form-control" name="anx4_feto2_triscu" id="input-name" type="text" placeholder="" value="" required="true" aria-required="true"/>
                                                                </div>
                                                            </div>
                                                            <label class="col-sm-2 col-form-label">ausente:</label>
                                                            <div class="col-sm-3">
                                                                <div class="form-group">
                                                                    <input class="form-control" name="anx4_feto2_triscu_au" id="input-name" type="text" placeholder="" value="" required="true" aria-required="true"/>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <br><br>
                                                        <div class="col-md-10 form-group">
                                                            <label for="exampleEmail" class="bmd-label-floating">DEFECTOS MAYORES:</label>
                                                            <input type="text" name="anx4_feto2_defectos_mayo" class="form-control" id="exampleEmail">
                                                        </div>

                                                        <div class="col-md-10 form-group">
                                                            <label for="exampleEmail" class="bmd-label-floating">Placenta:</label>
                                                            <input type="text" name="anx4_feto2_placenta" class="form-control" id="exampleEmail">
                                                        </div>
                                                        <!--</div>-->
                                                        <!--</div>-->
                                                    </div>

                                                    <!-- fin tercer elemento -->
                                                    <!-- cuarto elemento -->
                                                    <br><br><br>
                                                    <div class="col-md-12">
                                                        <!--<div class="card">-->
                                                        <div class="card-header card-header-icon card-header-rose">
                                                            <div class="card-icon">
                                                                <i class="material-icons">assignment</i>
                                                            </div>
                                                            <h4 class="card-title ">CÁLCULO DE RIESGO FETO 2</h4>
                                                        </div>
                                                        <!--<div class="card-body">-->
                                                        <div class="table-responsive">
                                                            <table class="table">
                                                                <thead class=" text-primary">
                                                                <th>
                                                                    CROMOSOMOPATIA
                                                                </th>
                                                                <th>
                                                                    RIESGO BASAL(EDAD)
                                                                </th>
                                                                <th>
                                                                    RIESGO AJUSTADO
                                                                    (USG)
                                                                </th>
                                                                <th>
                                                                    RIESGO AJUSTADO
                                                                    (DUO-TEST)
                                                                </th>
                                                                </thead>
                                                                <tbody>
                                                                <tr>
                                                                    <td>
                                                                        Trisomía 21
                                                                    </td>
                                                                    <td>
                                                                        <div class="form-group">
                                                                            <input type="text" name="anx4_feto2_trisomia21_uno" class="form-control" placeholder="1:">
                                                                        </div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="form-group">
                                                                            <input type="text" name="anx4_feto2_trisomia21_dos" class="form-control" placeholder="1:">
                                                                        </div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="form-group">
                                                                            <input type="text" name="anx4_feto2_trisomia21_tres" class="form-control" placeholder="1:">
                                                                        </div>
                                                                    </td>

                                                                </tr>
                                                                <tr>
                                                                    <td>
                                                                        Trisomía 18
                                                                    </td>
                                                                    <td>
                                                                        <div class="form-group">
                                                                            <input type="text" name="anx4_feto2_trisomia18_uno" class="form-control" placeholder="1:">
                                                                        </div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="form-group">
                                                                            <input type="text" name="anx4_feto2_trisomia18_dos" class="form-control" placeholder="1:">
                                                                        </div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="form-group">
                                                                            <input type="text" name="anx4_feto2_trisomia18_tres" class="form-control" placeholder="1:">
                                                                        </div>
                                                                    </td>

                                                                </tr>
                                                                <tr>
                                                                    <td>
                                                                        Trisomía 13
                                                                    </td>
                                                                    <td>
                                                                        <div class="form-group">
                                                                            <input type="text" name="anx4_feto2_trisomia13_uno" class="form-control" placeholder="1:">
                                                                        </div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="form-group">
                                                                            <input type="text" name="anx4_feto2_trisomia13_dos" class="form-control" placeholder="1:">
                                                                        </div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="form-group">
                                                                            <input type="text" name="anx4_feto2_trisomia13_tres"  class="form-control" placeholder="1:">
                                                                        </div>
                                                                    </td>
                                                                </tr>
                                                                </tbody>
                                                            </table>
                                                        </div>
                                                        <!--</div>
                            </div>-->
                                                    </div>
                                                </div>
                                                <div class="tab-pane" id="dato3">
                                                    <div class="col-md-12">
                                                        <!--<div class="card ">-->
                                                        <div class="card-header card-header-rose card-header-icon">
                                                            <div class="card-icon">
                                                                <i class="material-icons">assignment</i>
                                                            </div>
                                                            <h4 class="card-title">Feto 3</h4>
                                                        </div>
                                                        <!--<div class="card-body ">-->
                                                        <div class="row">
                                                            <label class="col-sm-4 col-form-label">Localización:</label>
                                                            <div class="col-sm-7">
                                                                <div class="form-group">
                                                                    <input class="form-control" name="anx4_loca_feto3" id="input-name" type="text" placeholder="" value="" required="true" aria-required="true"/>
                                                                </div>
                                                            </div>

                                                        </div>

                                                        <div class="row align-content-around ">
                                                            <label class="col-sm-2 col-form-label">LCC:</label>
                                                            <div class="col-sm-3">
                                                                <div class="form-group">
                                                                    <input class="form-control" name="anx4_feto3_lcc" id="input-name" type="text" placeholder="" value="" required="true" aria-required="true"/>
                                                                </div>
                                                            </div>
                                                            <label class="col-sm-2 col-form-label">mm/:</label>
                                                            <div class="col-sm-3">
                                                                <div class="form-group">
                                                                    <input class="form-control" name="anx4_feto3_mm" id="input-name" type="text" placeholder="" value="" required="true" aria-required="true"/>
                                                                </div>
                                                            </div>
                                                            <label class="col-sm-1 col-form-label">semanas</label>
                                                        </div>
                                                        <div class="row align-content-around ">
                                                            <label class="col-sm-2 col-form-label">FCF:</label>
                                                            <div class="col-sm-5">
                                                                <div class="form-group">
                                                                    <input class="form-control" name="anx4_feto3_fcf" id="input-name" type="text" placeholder="" value="" required="true" aria-required="true"/>
                                                                </div>
                                                            </div>
                                                            <label class="col-sm-2 col-form-label">latidos por minuto</label>
                                                        </div>
                                                        <div class="row align-content-around ">
                                                            <label class="col-sm-2 col-form-label">TRANSLUCENCIA NUCAL:</label>

                                                            <div class="form-group">
                                                                <input class="form-control" name="anx4_feto3_tras_nucal" id="input-name" type="text" size="15" placeholder="" value="" required="true" aria-required="true"/>
                                                            </div>
                                                            <label class="col-sm-1 col-form-label">/</label>
                                                            <div class="form-group">
                                                                <input class="form-control" name="anx4_feto3_tras_nuca_1" id="input-name" type="text" size="15" placeholder="" value="" required="true" aria-required="true"/>
                                                            </div>
                                                            <label class="col-sm-1 col-form-label">/</label>
                                                            <div class="form-group">
                                                                <input class="form-control" name="anx4_feto3_tras_nuca_2" id="input-name" type="text" size="15" placeholder="" value="" required="true" aria-required="true"/>
                                                            </div>
                                                            <label class="col-sm-1 col-form-label">mm</label>
                                                        </div>
                                                        <div class="row align-content-around ">
                                                            <label class="col-sm-3 col-form-label">IP DUCTO VENOSO:</label>
                                                            <div class="col-sm-3">
                                                                <div class="form-group">
                                                                    <input class="form-control" name="anx4_feto3_ip_venoso" id="input-name" type="text" placeholder="" value="" required="true" aria-required="true"/>
                                                                </div>
                                                            </div>
                                                            <label class="col-sm-2 col-form-label">ONDA “A”</label>
                                                            <div class="col-sm-3">
                                                                <div class="form-group">
                                                                    <input class="form-control" name="anx4_feto3_onda_a" id="input-name" type="text" placeholder="" value="" required="true" aria-required="true"/>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row align-content-around ">
                                                            <label class="col-sm-3 col-form-label">HUESO NASAL:  presente:</label>
                                                            <div class="col-sm-3">
                                                                <div class="form-group">
                                                                    <input class="form-control" name="anx4_feto3_hueso_nasal" id="input-name" type="text" placeholder="" value="" required="true" aria-required="true"/>
                                                                </div>
                                                            </div>
                                                            <label class="col-sm-2 col-form-label">ausente:</label>
                                                            <div class="col-sm-3">
                                                                <div class="form-group">
                                                                    <input class="form-control" name="anx4_feto3_hueso_nasal_au" id="input-name" type="text" placeholder="" value="" required="true" aria-required="true"/>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row align-content-around ">
                                                            <label class="col-sm-3 col-form-label">REGURGITACIÓN TRICUSPÍDEA: presente:</label>
                                                            <div class="col-sm-3">
                                                                <div class="form-group">
                                                                    <input class="form-control" name="anx4_feto3_triscu" id="input-name" type="text" placeholder="" value="" required="true" aria-required="true"/>
                                                                </div>
                                                            </div>
                                                            <label class="col-sm-2 col-form-label">ausente:</label>
                                                            <div class="col-sm-3">
                                                                <div class="form-group">
                                                                    <input class="form-control" name="anx4_feto3_triscu_au" id="input-name" type="text" placeholder="" value="" required="true" aria-required="true"/>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <br><br>
                                                        <div class="col-md-10 form-group">
                                                            <label for="exampleEmail" class="bmd-label-floating">DEFECTOS MAYORES:</label>
                                                            <input type="text" name="anx4_feto3_defectos_mayo" class="form-control" id="exampleEmail">
                                                        </div>

                                                        <div class="col-md-10 form-group">
                                                            <label for="exampleEmail" class="bmd-label-floating">Placenta:</label>
                                                            <input type="text" name="anx4_feto3_placenta" class="form-control" id="exampleEmail">
                                                        </div>
                                                        <!--</div>-->
                                                        <!--</div>-->
                                                    </div>

                                                    <!-- fin tercer elemento -->
                                                    <!-- cuarto elemento -->
                                                    <br><br><br>
                                                    <div class="col-md-12">
                                                        <!--<div class="card">-->
                                                        <div class="card-header card-header-icon card-header-rose">
                                                            <div class="card-icon">
                                                                <i class="material-icons">assignment</i>
                                                            </div>
                                                            <h4 class="card-title ">CÁLCULO DE RIESGO FETO 3</h4>
                                                        </div>
                                                        <!--<div class="card-body">-->
                                                        <div class="table-responsive">
                                                            <table class="table">
                                                                <thead class=" text-primary">
                                                                <th>
                                                                    CROMOSOMOPATIA
                                                                </th>
                                                                <th>
                                                                    RIESGO BASAL(EDAD)
                                                                </th>
                                                                <th>
                                                                    RIESGO AJUSTADO
                                                                    (USG)
                                                                </th>
                                                                <th>
                                                                    RIESGO AJUSTADO
                                                                    (DUO-TEST)
                                                                </th>
                                                                </thead>
                                                                <tbody>
                                                                <tr>
                                                                    <td>
                                                                        Trisomía 21
                                                                    </td>
                                                                    <td>
                                                                        <div class="form-group">
                                                                            <input type="text" name="anx4_feto3_trisomia21_uno" class="form-control" placeholder="1:">
                                                                        </div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="form-group">
                                                                            <input type="text" name="anx4_feto3_trisomia21_dos" class="form-control" placeholder="1:">
                                                                        </div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="form-group">
                                                                            <input type="text" name="anx4_feto3_trisomia21_tres" class="form-control" placeholder="1:">
                                                                        </div>
                                                                    </td>

                                                                </tr>
                                                                <tr>
                                                                    <td>
                                                                        Trisomía 18
                                                                    </td>
                                                                    <td>
                                                                        <div class="form-group">
                                                                            <input type="text" name="anx4_feto3_trisomia18_uno" class="form-control" placeholder="1:">
                                                                        </div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="form-group">
                                                                            <input type="text" name="anx4_feto3_trisomia18_dos" class="form-control" placeholder="1:">
                                                                        </div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="form-group">
                                                                            <input type="text" name="anx4_feto3_trisomia18_tres" class="form-control" placeholder="1:">
                                                                        </div>
                                                                    </td>

                                                                </tr>
                                                                <tr>
                                                                    <td>
                                                                        Trisomía 13
                                                                    </td>
                                                                    <td>
                                                                        <div class="form-group">
                                                                            <input type="text" name="anx4_feto3_trisomia13_uno" class="form-control" placeholder="1:">
                                                                        </div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="form-group">
                                                                            <input type="text" name="anx4_feto3_trisomia13_dos" class="form-control" placeholder="1:">
                                                                        </div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="form-group">
                                                                            <input type="text" name="anx4_feto3_trisomia13_tres"  class="form-control" placeholder="1:">
                                                                        </div>
                                                                    </td>
                                                                </tr>
                                                                </tbody>
                                                            </table>
                                                        </div>
                                                        <!--</div>
                </div>-->
                                                    </div>
                                                </div>
                                                <div class="tab-pane" id="dato4">
                                                    <div class="row align-content-around ">
                                                        <label class="col-sm-3 col-form-label">IP ARTERIA UTERINA DERECHA:</label>
                                                        <div class="col-sm-3">
                                                            <div class="form-group">
                                                                <input class="form-control" name="anx4_ip_uterina_dere" id="input-name" type="text" placeholder="" value="" required="true" aria-required="true"/>
                                                            </div>
                                                        </div>
                                                        <label class="col-sm-2 col-form-label">NOTCH: SI</label>
                                                        <div class="col-sm-3">
                                                            <div class="form-group">
                                                                <input class="form-control" name="anx4_noth_si" id="input-name" type="text" placeholder="" value="" required="true" aria-required="true"/>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row align-content-around ">
                                                        <label class="col-sm-3 col-form-label">IP ARTERIA UTERINA IZQUIERDA: </label>
                                                        <div class="col-sm-3">
                                                            <div class="form-group">
                                                                <input class="form-control" name="anx4_ip_uterina_izq" id="input-name" type="text" placeholder="" value="" required="true" aria-required="true"/>
                                                            </div>
                                                        </div>
                                                        <label class="col-sm-2 col-form-label">NOTCH: SI</label>
                                                        <div class="col-sm-3">
                                                            <div class="form-group">
                                                                <input class="form-control" name="anx4_noth_si_2" id="input-name" type="text" placeholder="" value="" required="true" aria-required="true"/>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row align-content-around ">
                                                        <label class="col-sm-3 col-form-label">IP MEDIO DE ARTERIAS UTERINAS:</label>
                                                        <div class="col-sm-6">
                                                            <div class="form-group">
                                                                <input class="form-control" name="anx4_ip_medio_arterias" id="input-name" type="text" placeholder="" value="" required="true" aria-required="true"/>
                                                            </div>
                                                        </div>

                                                    </div>



                                                </div>








                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row justify-content-center">
                        <button type="submit" class="btn btn-fill btn-rose">Guardar</button>
                    </div>
            </form>

        </div>
    </div>
</div>
<!-- fin de cuarto elemento -->

<!-- Fin Modal -->
<!-- Modal -->
<div class="modal fade docs-anexo5-modal-lg" tabindex="-1" id="anexos" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h3 class="modal-title" id="exampleModalLongTitle">Anexo 5</h3>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close" style="color: red">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form method="post"  action="{{url('procesoanexo5/add') }}" autocomplete="off" class="form-horizontal">
                @csrf


                    <div class="content">
                        <div class="container-fluid">
                            <div class="card ">
                                <div class="card-body ">
                                    <div class="tab-content tab-space">
                                        <!-- primer metodo del panel-->
                                        <div class="tab-pane  active show" id="link1">
                                            <div class="row">
                                                <label class="col-sm-2 col-form-label">Alimentos que causan malestar</label>
                                                <div class="col-sm-4">
                                                    <div class="form-group bmd-form-group">
                                                        <input class="form-control" type="text" name="anx5_Alimentos_que_malestar" id="anx5_Alimentos_que_malestar" required="true" aria-required="true">
                                                    </div>
                                                </div>
                                                <label class="col-sm-2 col-form-label">Es alérgico o intolerante a algún alimento</label>
                                                <div class="col-sm-4">
                                                    <div class="form-group bmd-form-group">
                                                        <input class="form-control" type="text" name="anx5_alergico_alimento" id="" required="true" aria-required="true">
                                                    </div>
                                                </div>

                                                <label class="col-sm-2 col-form-label label-checkbox">Toma algún suplemento / complemento</label>
                                                <div class="col-sm-4 checkbox-radios">
                                                    <div class="form-check form-check-inline">
                                                        <label class="form-check-label">
                                                            <input class="form-check-input" type="radio" name="anx5_suplemento" value="option2" checked> Si
                                                            <span class="circle">
                        <span class="check"></span>
                      </span>
                                                        </label>
                                                    </div>
                                                    <div class="form-check form-check-inline">
                                                        <label class="form-check-label">
                                                            <input class="form-check-input" type="radio" name="anx5_suplemento" value="option1"> No
                                                            <span class="circle">
                        <span class="check"></span>
                      </span>
                                                        </label>
                                                    </div>
                                                </div>

                                                <label class="col-sm-2 col-form-label">Cúal</label>
                                                <div class="col-sm-4">
                                                    <div class="form-group bmd-form-group">
                                                        <input class="form-control" type="text" name="anx5_suplemento_cual" id="" required="true" aria-required="true">
                                                    </div>
                                                </div>

                                                <label class="col-sm-2 col-form-label">Dosis</label>
                                                <div class="col-sm-4">
                                                    <div class="form-group bmd-form-group">
                                                        <input class="form-control" type="text" name="anx5_dosis" id="" required="true" aria-required="true">
                                                    </div>
                                                </div>
                                                <label class="col-sm-2 col-form-label">Cúal</label>
                                                <div class="col-sm-4">
                                                    <div class="form-group bmd-form-group">
                                                        <input class="form-control" type="text" name="anx5_dosis_cual" id="" required="true" aria-required="true">
                                                    </div>
                                                </div>

                                                <label class="col-sm-2 col-form-label">Dosis</label>
                                                <div class="col-sm-4">
                                                    <div class="form-group bmd-form-group">
                                                        <input class="form-control" type="text" name="anx5_dosis_1" id="" required="true" aria-required="true">
                                                    </div>
                                                </div>
                                                <label class="col-sm-2 col-form-label">Cúal</label>
                                                <div class="col-sm-4">
                                                    <div class="form-group bmd-form-group">
                                                        <input class="form-control" type="text" name="anx5_dosis_cual_1" id="" required="true" aria-required="true">
                                                    </div>
                                                </div>

                                                <label class="col-sm-2 col-form-label">Dosis</label>
                                                <div class="col-sm-4">
                                                    <div class="form-group bmd-form-group">
                                                        <input class="form-control" type="text" name="anx5_dosis_2" id="" required="true" aria-required="true">
                                                    </div>
                                                </div>

                                                <label class="col-sm-2 col-form-label label-checkbox">Su consumo varía cuando está triste, nervioso o ansioso</label>
                                                <div class="col-sm-4 checkbox-radios">
                                                    <div class="form-check form-check-inline">
                                                        <label class="form-check-label">
                                                            <input class="form-check-input" type="radio" name="anx5_consumo" value="option2" checked> Si
                                                            <span class="circle">
                        <span class="check"></span>
                      </span>
                                                        </label>
                                                    </div>
                                                    <div class="form-check form-check-inline">
                                                        <label class="form-check-label">
                                                            <input class="form-check-input" type="radio" name="anx5_consumo" value="option1"> No
                                                            <span class="circle">
                        <span class="check"></span>
                      </span>
                                                        </label>
                                                    </div>
                                                </div>

                                                <label class="col-sm-2 col-form-label">Cómo</label>
                                                <div class="col-sm-4">
                                                    <div class="form-group bmd-form-group">
                                                        <input class="form-control" type="text" name="anx5_como" id="" required="true" aria-required="true">
                                                    </div>
                                                </div>


                                                <label class="col-sm-2 col-form-label label-checkbox">Agrega sal a la comida ya preparada</label>
                                                <div class="col-sm-4 checkbox-radios">
                                                    <div class="form-check form-check-inline">
                                                        <label class="form-check-label">
                                                            <input class="form-check-input" type="radio" name="anx5_comida_preparada" value="option2" checked> Si
                                                            <span class="circle">
                        <span class="check"></span>
                      </span>
                                                        </label>
                                                    </div>
                                                    <div class="form-check form-check-inline">
                                                        <label class="form-check-label">
                                                            <input class="form-check-input" type="radio" name="anx5_comida_preparada" value="option1"> No
                                                            <span class="circle">
                        <span class="check"></span>
                      </span>
                                                        </label>
                                                    </div>
                                                </div>

                                                <label class="col-sm-2 col-form-label">Qué grasa utiliza en casa para preparar su comida</label>
                                                <div class="col-sm-4">
                                                    <div class="form-group bmd-form-group">
                                                        <div class="dropdown bootstrap-select col-sm-12 pl-0 pr-0"><select class="selectpicker col-sm-12 pl-0 pr-0" name="anx5_grasa_utili" data-style="select-with-transition" title="" data-size="100" tabindex="-98">
                                                                <option value="1">Margarina</option>
                                                                <option value="2">Aceite Vegetal</option>
                                                                <option value="3">Manteca</option>
                                                                <option value="4">Mantequilla</option>
                                                                <option value="5">Otros</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>

                                                <label class="col-sm-2 col-form-label">Ha llevado alguna dieta especial </label>
                                                <div class="col-sm-4">
                                                    <div class="form-group bmd-form-group">
                                                        <input class="form-control" type="text" name="anx5_dieta_especial" id="" required="true" aria-required="true">
                                                    </div>
                                                </div>

                                                <label class="col-sm-2 col-form-label">Cuántas</label>
                                                <div class="col-sm-4">
                                                    <div class="form-group bmd-form-group">
                                                        <input class="form-control" type="text" name="anx5_cuantas" id="" required="true" aria-required="true">
                                                    </div>
                                                </div>

                                                <label class="col-sm-2 col-form-label">Qué tipo de dieta </label>
                                                <div class="col-sm-4">
                                                    <div class="form-group bmd-form-group">
                                                        <input class="form-control" type="text" name="anx5_tipo_dieta" id="" required="true" aria-required="true">
                                                    </div>
                                                </div>

                                                <label class="col-sm-2 col-form-label">Hace cuánto </label>
                                                <div class="col-sm-4">
                                                    <div class="form-group bmd-form-group">
                                                        <input class="form-control" type="text" name="anx5_hace_cuanto" id="" required="true" aria-required="true">
                                                    </div>
                                                </div>

                                                <label class="col-sm-2 col-form-label">Por cuánto tiempo </label>
                                                <div class="col-sm-4">
                                                    <div class="form-group bmd-form-group">
                                                        <input class="form-control" type="text" name="anx5_por_cuanto_tiempo" id="" required="true" aria-required="true">
                                                    </div>
                                                </div>


                                                <label class="col-sm-2 col-form-label">Por qué razón </label>
                                                <div class="col-sm-4">
                                                    <div class="form-group bmd-form-group">
                                                        <input class="form-control" type="text" name="anx5_por_que_razon" id="" required="true" aria-required="true">
                                                    </div>
                                                </div>
                                                <label class="col-sm-2 col-form-label">Qué tanto se apegó a ella </label>
                                                <div class="col-sm-4">
                                                    <div class="form-group bmd-form-group">
                                                        <input class="form-control" type="text" name="anx5_se_apego_ella" id="" required="true" aria-required="true">
                                                    </div>
                                                </div>

                                                <label class="col-sm-2 col-form-label">Obtuvo los resultados esperados</label>
                                                <div class="col-sm-4">
                                                    <div class="form-group bmd-form-group">
                                                        <input class="form-control" type="text" name="anx5_resultados_esperados" id="" required="true" aria-required="true">
                                                    </div>
                                                </div>


                                                <label class="col-sm-2 col-form-label">Kg perdidos </label>
                                                <div class="col-sm-4">
                                                    <div class="form-group bmd-form-group">
                                                        <input class="form-control" type="text" name="anx5_kg_perdidos" id="" required="true" aria-required="true">
                                                    </div>
                                                </div>

                                                <label class="col-sm-2 col-form-label">Peso logrado </label>
                                                <div class="col-sm-4">
                                                    <div class="form-group bmd-form-group">
                                                        <input class="form-control" type="text" name="anx5_peso_logrado" id="" required="true" aria-required="true">
                                                    </div>
                                                </div>

                                                <label class="col-sm-2 col-form-label label-checkbox">Ha utilizado medicamento para bajar de peso </label>
                                                <div class="col-sm-4 checkbox-radios">
                                                    <div class="form-check form-check-inline">
                                                        <label class="form-check-label">
                                                            <input class="form-check-input" type="radio" name="anx5_medicamento_bajar_peso" value="option2" checked> Si
                                                            <span class="circle">
                        <span class="check"></span>
                      </span>
                                                        </label>
                                                    </div>
                                                    <div class="form-check form-check-inline">
                                                        <label class="form-check-label">
                                                            <input class="form-check-input" type="radio" name="anx5_medicamento_bajar_peso" value="option1"> No
                                                            <span class="circle">
                        <span class="check"></span>
                      </span>
                                                        </label>
                                                    </div>
                                                </div>


                                                <label class="col-sm-2 col-form-label">Cuáles </label>
                                                <div class="col-sm-4">
                                                    <div class="form-group bmd-form-group">
                                                        <input class="form-control" type="text" name="anx5_cuales" id="" required="true" aria-required="true">
                                                    </div>
                                                </div>

                                                <label class="col-sm-2 col-form-label">Por cuanto tiempo </label>
                                                <div class="col-sm-4">
                                                    <div class="form-group bmd-form-group">
                                                        <input class="form-control" type="text" name="anx5_por_cuanto_tiempo_1" id="" required="true" aria-required="true">
                                                    </div>
                                                </div>


                                                <label class="col-sm-2 col-form-label">Plan </label>
                                                <div class="col-sm-10">
                                                    <div class="form-group bmd-form-group">
                                                        <input class="form-control" type="text" name="anx5_plan" id="" required="true" aria-required="true">
                                                    </div>
                                                </div>


                                                <label class="col-sm-2 col-form-label">Peso logrado </label>
                                                <div class="col-sm-4">
                                                    <div class="form-group bmd-form-group">
                                                        <input class="form-control" type="text" name="anx5_peso_logrado_1" id="" required="true" aria-required="true">
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

                                                <label class="col-sm-12 col-form-label text-center">ANTROPOMETRIA EMBARAZO</label>

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







                                        </div>

                                    </div>

                                </div>


                                <div class="row justify-content-center">
                                    <button type="submit" class="btn btn-fill btn-rose">Guardar</button>
                                </div>
                            </div>


                        </div>
                    </div>
            </form>


        </div>
    </div>
</div>
<!-- Fin Modal -->
<!-- Modal -->
<div class="modal fade docs-anexo6-modal-lg" tabindex="-1" id="anexos" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h3 class="modal-title" id="exampleModalLongTitle">Anexo 6</h3>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close" style="color: red">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form method="post"  action="{{url('procesoanexo6/add') }}" autocomplete="off" class="form-horizontal">
                @csrf


                    <div class="content">
                        <div class="container-fluid">
                            <div class="col-md-12">
                                <div class="card ">
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
                                                <div class="row justify-content-center">
                                                    <button type="submit" class="btn btn-fill btn-rose">Guardar</button>
                                                </div>
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
</div>
<!-- Fin Modal -->
<!-- Modal -->
<div class="modal fade docs-anexo7-modal-lg" tabindex="-1" id="anexos" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h3 class="modal-title" id="exampleModalLongTitle">Anexo 7</h3>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close" style="color: red">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>


            <div class="content">
                <div class="container-fluid">

                </div>
            </div>

        </div>
    </div>
</div>
<!-- Fin Modal -->
<!-- Modal -->
<div class="modal fade docs-anexo8-modal-lg" tabindex="-1" id="anexos" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h3 class="modal-title" id="exampleModalLongTitle">Anexo 8</h3>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close" style="color: red">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form method="post"  action="{{url('procesoanexo8/add') }}" autocomplete="off" class="form-horizontal">
                @csrf

                    <div class="content">
                        <div class="container-fluid">
                            <div class="col-md-12">
                                <div class="card ">
                                    <div class="card-body ">

                                        <div class="card-header card-header-rose card-header-icon">
                                            <div class="card-icon">
                                                <i class="material-icons">battery_std</i>
                                            </div>
                                            <h4 class="card-title">BIOLOGIA DE LA REPRODUCCIÓN</h4>
                                        </div><br><br><br>
                                        <div class="row justify-content-center">
                                            <div class="col">
                                                <div class="form-group form-group-lg-3">
                                                    <label for="exampleEmail" class="bmd-label-floating">Tiempo de búsqueda del embarazo:</label>
                                                    <input type="text" name="anx8_tiempo_b_emb"  class="form-control" id="exampleEmail">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row justify-content-center">
                                            <div class="col">
                                                <div class="form-group form-group-lg-3">
                                                    <label for="exampleEmail" class="bmd-label-floating">Frecuencia coital:</label>
                                                    <input type="text" name="anx8_frecu_coital"  class="form-control" id="exampleEmail">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row justify-content-between">
                                            <div class="col-2">
                                                <div class="form-group form-group-lg-3">
                                                    <label for="exampleEmail" class="bmd-label-floating">Penetración:</label>
                                                </div>
                                            </div>
                                            <div class="col-2">
                                                <div class="form-check">
                                                    <label class="form-check-label">
                                                        <input class="form-check-input" type="radio" name="anx8_penetracion" value="Completa" > Completa
                                                        <span class="circle">
                                                        <span class="check"></span>
                                                        </span>
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col-2">
                                                <div class="form-check">
                                                    <label class="form-check-label">
                                                        <input class="form-check-input" type="radio" name="anx8_penetracion" value="Incompleta" > Incompleta
                                                        <span class="circle">
                                                        <span class="check"></span>
                                                        </span>
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col">
                                                <div class="form-group">
                                                    <input type="hidden"   class="form-control" id="exampleEmail">
                                                </div>
                                            </div>
                                            <div class="col">

                                            </div>
                                        </div>
                                        <div class="row justify-content-between">
                                            <div class="col-2">
                                                <div class="form-group form-group-lg-3">
                                                    <label for="exampleEmail" class="bmd-label-floating">Dispareunia:</label>
                                                </div>
                                            </div>
                                            <div class="col-2">
                                                <div class="form-check">
                                                    <label class="form-check-label">
                                                        <input class="form-check-input" type="radio" name="anx8_dispareunia" value="Si" > Si
                                                        <span class="circle">
                                                        <span class="check"></span>
                                                        </span>
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col-2">
                                                <div class="form-check">
                                                    <label class="form-check-label">
                                                        <input class="form-check-input" type="radio" name="anx8_dispareunia" value="No" > No
                                                        <span class="circle">
                                                        <span class="check"></span>
                                                        </span>
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col">
                                                <div class="form-group">
                                                    <input type="hidden"   class="form-control" id="exampleEmail">
                                                </div>
                                            </div>
                                            <div class="col">

                                            </div>
                                        </div>
                                        <div class="row justify-content-between">
                                            <div class="col-2">
                                                <div class="form-group form-group-lg-3">
                                                    <label for="exampleEmail" class="bmd-label-floating">Eyaculación vaginal:</label>
                                                </div>
                                            </div>
                                            <div class="col-2">
                                                <div class="form-check">
                                                    <label class="form-check-label">
                                                        <input class="form-check-input" type="radio" name="anx8_eyacu_vagi" value="Si" > Si
                                                        <span class="circle">
                                                        <span class="check"></span>
                                                        </span>
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col-2">
                                                <div class="form-check">
                                                    <label class="form-check-label">
                                                        <input class="form-check-input" type="radio" name="anx8_eyacu_vagi" value="No" > No
                                                        <span class="circle">
                                                        <span class="check"></span>
                                                        </span>
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col">
                                                <div class="form-group">
                                                    <input type="hidden"   class="form-control" id="exampleEmail">
                                                </div>
                                            </div>
                                            <div class="col">

                                            </div>
                                        </div>
                                        <div class="row justify-content-between">
                                            <div class="col-2">
                                                <div class="form-group form-group-lg-3">
                                                    <label for="exampleEmail" class="bmd-label-floating">Dismenorrea:</label>
                                                </div>
                                            </div>
                                            <div class="col-2">
                                                <div class="form-check">
                                                    <label class="form-check-label">
                                                        <input class="form-check-input" type="radio" name="anx8_dismenorrea" value="Si" > Si
                                                        <span class="circle">
                                                        <span class="check"></span>
                                                        </span>
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col-2">
                                                <div class="form-check">
                                                    <label class="form-check-label">
                                                        <input class="form-check-input" type="radio" name="anx8_dismenorrea" value="No" > No
                                                        <span class="circle">
                                                        <span class="check"></span>
                                                        </span>
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col">
                                                <div class="form-group">
                                                    <input type="hidden"   class="form-control" id="exampleEmail">
                                                </div>
                                            </div>
                                            <div class="col">
                                            </div>
                                        </div>
                                        <br><br>
                                        <h6>Factor masculino</h6>
                                        <br><br>
                                        <div class="row justify-content-center">
                                            <div class="col-2">
                                                <div class="form-group form-group-lg-3">
                                                    <label for="exampleEmail" class="bmd-label-floating">Edad:</label>
                                                    <input type="text" name="anx8_edad"  class="form-control" id="exampleEmail">
                                                </div>
                                            </div>
                                            <div class="col">
                                                <input type="hidden"   class="form-control" id="exampleEmail">
                                            </div>
                                        </div>
                                        <div class="row justify-content-between">
                                            <div class="col-2">
                                                <div class="form-group form-group-lg-3">
                                                    <label for="exampleEmail" class="bmd-label-floating">Paternidad comprobada:</label>
                                                </div>
                                            </div>
                                            <div class="col-2">
                                                <div class="form-check">
                                                    <label class="form-check-label">
                                                        <input class="form-check-input" type="radio" name="anx8_pater_comprobada" value="Si" > Si
                                                        <span class="circle">
                                                        <span class="check"></span>
                                                        </span>
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col-2">
                                                <div class="form-check">
                                                    <label class="form-check-label">
                                                        <input class="form-check-input" type="radio" name="anx8_pater_comprobada" value="No" > No
                                                        <span class="circle">
                                                        <span class="check"></span>
                                                        </span>
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col">
                                                <div class="form-group">
                                                    <input type="hidden"   class="form-control" id="exampleEmail">
                                                </div>
                                            </div>
                                            <div class="col">
                                            </div>
                                        </div>
                                        <div class="row justify-content-center">
                                            <div class="col-4">
                                                <div class="form-group form-group-lg-3">
                                                    <label for="exampleEmail" class="bmd-label-floating">Ocupación:</label>
                                                    <input type="text" name="anx8_ocupacion"  class="form-control" id="exampleEmail">
                                                </div>
                                            </div>
                                            <div class="col">
                                                <input type="hidden"   class="form-control" id="exampleEmail">
                                            </div>
                                        </div>
                                        <div class="row justify-content-center">
                                            <div class="col ">
                                                <div class="form-group form-group-lg-3">
                                                    <label for="exampleEmail" class="bmd-label-floating">Traumatismo o alteración testicular:</label>
                                                    <input type="text" name="anx8_trauma_testicular"  class="form-control" id="exampleEmail">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row justify-content-center">
                                            <div class="col">
                                                <div class="form-group form-group-lg-3">
                                                    <label for="exampleEmail" class="bmd-label-floating">Antecedentes de parotiditis, uso de anabólicos o medicamentos:</label>
                                                    <input type="text" name="anx8_Ante_paro_medicos"  class="form-control" id="exampleEmail">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row justify-content-center">
                                            <div class="col-4">
                                                <div class="form-group form-group-lg-3">
                                                    <label for="exampleEmail" class="bmd-label-floating">EBD previas:</label>
                                                    <input type="text" name="anx8_ebd_previas"  class="form-control" id="exampleEmail">
                                                </div>
                                            </div>
                                            <div class="col">
                                                <input type="hidden"   class="form-control" id="exampleEmail">
                                            </div>
                                        </div><br>
                                        <br>
                                        <h6>Factor tuboperitoneal</h6>
                                        <br>
                                        <div class="row justify-content-center">
                                            <div class="col">
                                                <div class="form-group form-group-lg-3">
                                                    <label for="exampleEmail" class="bmd-label-floating">Cirugías abdominales:</label>
                                                    <input type="text" name="anx8_cirujias_abodominales"  class="form-control" id="exampleEmail">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row justify-content-center">
                                            <div class="col">
                                                <div class="form-group form-group-lg-3">
                                                    <label for="exampleEmail" class="bmd-label-floating">Infecciones vaginales de repetición:</label>
                                                    <input type="text" name="anx8_infecc_vagi_repe"  class="form-control" id="exampleEmail">
                                                </div>
                                            </div>
                                        </div>
                                        <br>
                                        <br>
                                        <h6>Factor endócrino ovárico</h6>
                                        <br>
                                        <div class="row justify-content-between">
                                            <div class="col-4">
                                                <div class="form-group form-group-lg-3">
                                                    <label for="exampleEmail" class="bmd-label-floating">Ciclos:</label>
                                                    <input type="text" name="anx8_ciclos"  class="form-control" id="exampleEmail">
                                                </div>
                                            </div>
                                            <div class="col-2">
                                                <div class="form-group form-group-lg-3">
                                                    <label for="exampleEmail" class="bmd-label-floating">Cantidad:</label>
                                                </div>
                                            </div>
                                            <div class="col-2">
                                                <div class="form-check">
                                                    <label class="form-check-label">
                                                        <input class="form-check-input" type="radio" name="anx8_cantidad" value="Escaso" > Escaso
                                                        <span class="circle">
                                                        <span class="check"></span>
                                                        </span>
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col-2">
                                                <div class="form-check">
                                                    <label class="form-check-label">
                                                        <input class="form-check-input" type="radio" name="anx8_cantidad" value="Normal" > Normal
                                                        <span class="circle">
                                                        <span class="check"></span>
                                                        </span>
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col-2">
                                                <div class="form-check">
                                                    <label class="form-check-label">
                                                        <input class="form-check-input" type="radio" name="anx8_cantidad" value="Abundante" > Abundante
                                                        <span class="circle">
                                                        <span class="check"></span>
                                                        </span>
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col">
                                                <div class="form-group">
                                                    <input type="hidden"   class="form-control" id="exampleEmail">
                                                </div>
                                            </div>
                                            <div class="col">
                                            </div>
                                        </div>
                                        <br>
                                        <br>
                                        <h6>Factor cervical</h6>
                                        <br>
                                        <div class="row justify-content-between">
                                            <div class="col-4">
                                                <div class="form-group form-group-lg-3">
                                                    <label for="exampleEmail" class="bmd-label-floating">Infección vaginal de repetición:</label>
                                                </div>
                                            </div>
                                            <div class="col-1">
                                                <div class="form-check">
                                                    <label class="form-check-label">
                                                        <input class="form-check-input" type="radio" name="anx8_infec_vagi_repe2" value="Si" > Si
                                                        <span class="circle">
                                                        <span class="check"></span>
                                                        </span>
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col-1">
                                                <div class="form-check">
                                                    <label class="form-check-label">
                                                        <input class="form-check-input" type="radio" name="anx8_infec_vagi_repe2" value="No" > No
                                                        <span class="circle">
                                                        <span class="check"></span>
                                                        </span>
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col">
                                                <div class="form-group">
                                                    <input type="hidden"   class="form-control" id="exampleEmail">
                                                </div>
                                            </div>
                                            <div class="col">
                                            </div>
                                        </div>
                                        <div class="row justify-content-center">
                                            <div class="col">
                                                <div class="form-group form-group-lg-3">
                                                    <label for="exampleEmail" class="bmd-label-floating">Último papanicolaou:</label>
                                                    <input type="text" name="anx8_ultimo_papani"  class="form-control" id="exampleEmail">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row justify-content-center">
                                            <div class="col">
                                                <div class="form-group form-group-lg-3">
                                                    <label for="exampleEmail" class="bmd-label-floating">Anteriores lesiones cervicales:</label>
                                                    <input type="text" name="anx8_ante_cervi"  class="form-control" id="exampleEmail">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row justify-content-center">
                                            <div class="col">
                                                <div class="form-group form-group-lg-3">
                                                    <label for="exampleEmail" class="bmd-label-floating">Anteriores cirugías uterinas:</label>
                                                    <input type="text" name="anx8_ante_uterinas"  class="form-control" id="exampleEmail">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row justify-content-center">
                                            <div class="col">
                                                <div class="form-group form-group-lg-3">
                                                    <label for="exampleEmail" class="bmd-label-floating">Notas:</label>
                                                    <textarea  name="anx8_notas"  class="form-control" id="exampleEmail"></textarea>
                                                </div>
                                            </div>
                                        </div>
                                        <br>
                                        <div class="row justify-content-center">
                                            <button type="submit" class="btn btn-fill btn-rose">Guardar</button>
                                        </div>


                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
            </form>


        </div>
    </div>
</div>
<!-- Fin Modal -->
<!-- Modal -->
<div class="modal fade docs-anexo9-modal-lg" tabindex="-1" id="anexos" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h3 class="modal-title" id="exampleModalLongTitle">Anexo 9</h3>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close" style="color: red">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form method="post"  action="{{url('procesoanexo9/add') }}" autocomplete="off" class="form-horizontal">
                @csrf


                    <div class="content">
                        <div class="container-fluid">
                            <div class="card ">
                                <div class="card-body ">
                                    <div class="tab-content tab-space">
                                        <!-- primer metodo del panel-->
                                        <div class="tab-pane  active show" id="link1">
                                            <div class="row">

                                                <label class="col-sm-12 col-form-label text-center
                ">CIRUGÍA ENDOSCÓPICA, HISTEROSCOPÍA, VAGINOSCOPÍA, Cérvix</label>

                                                <label class="col-sm-2 col-form-label">Posición</label>
                                                <div class="col-sm-4">
                                                    <div class="form-group bmd-form-group">
                                                        <div class="dropdown bootstrap-select col-sm-12 pl-0 pr-0"><select class="selectpicker col-sm-12 pl-0 pr-0" name="anx9_pocision" data-style="select-with-transition" title="" data-size="100" tabindex="-98">
                                                                <option value="1">Posterior</option>
                                                                <option value="2">Central</option>
                                                                <option value="2">Anterior</option>
                                                                <option value="2">Hipotrófico</option>
                                                                <option value="2">Eutrófico</option>
                                                                <option value="2">Hipertrófico</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>


                                                <label class="col-sm-2 col-form-label">OCE</label>
                                                <div class="col-sm-4">
                                                    <div class="form-group bmd-form-group">
                                                        <div class="dropdown bootstrap-select col-sm-12 pl-0 pr-0"><select class="selectpicker col-sm-12 pl-0 pr-0" name="anx9_OCE" data-style="select-with-transition" title="" data-size="100" tabindex="-98">
                                                                <option value="1">Permeable</option>
                                                                <option value="2">Estenótio</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>

                                                <label class="col-sm-2 col-form-label label-checkbox">Se permeabiliza</label>
                                                <div class="col-sm-4 checkbox-radios">
                                                    <div class="form-check form-check-inline">
                                                        <label class="form-check-label">
                                                            <input class="form-check-input" type="radio" name="anx9_permeabiliza" value="Si" checked> Si
                                                            <span class="circle">
                        <span class="check"></span>
                      </span>
                                                        </label>
                                                    </div>
                                                    <div class="form-check form-check-inline">
                                                        <label class="form-check-label">
                                                            <input class="form-check-input" type="radio" name="anx9_permeabiliza" value="No"> No
                                                            <span class="circle">
                        <span class="check"></span>
                      </span>
                                                        </label>
                                                    </div>
                                                </div>


                                                <label class="col-sm-2 col-form-label">Canal Endocervical</label>
                                                <div class="col-sm-4">
                                                    <div class="form-group bmd-form-group">
                                                        <div class="dropdown bootstrap-select col-sm-12 pl-0 pr-0"><select class="selectpicker col-sm-12 pl-0 pr-0" name="anx9_Canal_Endocervical" data-style="select-with-transition" title="" data-size="100" tabindex="-98">
                                                                <option value="1">Tubular Permeable</option>
                                                                <option value="2">Estenótio</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>

                                                <label class="col-sm-2 col-form-label label-checkbox">Se permeabiliza</label>
                                                <div class="col-sm-4 checkbox-radios">
                                                    <div class="form-check form-check-inline">
                                                        <label class="form-check-label">
                                                            <input class="form-check-input" type="radio" name="anx9_permeabiliza_2" value="Si" checked> Si
                                                            <span class="circle">
                        <span class="check"></span>
                      </span>
                                                        </label>
                                                    </div>
                                                    <div class="form-check form-check-inline">
                                                        <label class="form-check-label">
                                                            <input class="form-check-input" type="radio" name="anx9_permeabiliza_2" value="No"> No
                                                            <span class="circle">
                        <span class="check"></span>
                      </span>
                                                        </label>
                                                    </div>
                                                </div>


                                                <label class="col-sm-2 col-form-label">Epitelio glandular</label>
                                                <div class="col-sm-4">
                                                    <div class="form-group bmd-form-group">
                                                        <div class="dropdown bootstrap-select col-sm-12 pl-0 pr-0"><select class="selectpicker col-sm-12 pl-0 pr-0" name="anx9_Epitelio_glandular" data-style="select-with-transition" title="" data-size="100" tabindex="-98">
                                                                <option value="1">Atrofico</option>
                                                                <option value="2">Adecuado</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>


                                                <label class="col-sm-2 col-form-label">OCI</label>
                                                <div class="col-sm-4">
                                                    <div class="form-group bmd-form-group">
                                                        <div class="dropdown bootstrap-select col-sm-12 pl-0 pr-0"><select class="selectpicker col-sm-12 pl-0 pr-0" name="anx9_OCI" data-style="select-with-transition" title="" data-size="100" tabindex="-98">
                                                                <option value="1">Permeable</option>
                                                                <option value="2">Estenótio</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>

                                                <label class="col-sm-2 col-form-label label-checkbox">Se permeabiliza</label>
                                                <div class="col-sm-4 checkbox-radios">
                                                    <div class="form-check form-check-inline">
                                                        <label class="form-check-label">
                                                            <input class="form-check-input" type="radio" name="anx9_permeabiliza_3" value="Si" checked> Si
                                                            <span class="circle">
                        <span class="check"></span>
                      </span>
                                                        </label>
                                                    </div>
                                                    <div class="form-check form-check-inline">
                                                        <label class="form-check-label">
                                                            <input class="form-check-input" type="radio" name="anx9_permeabiliza_3" value="No"> No
                                                            <span class="circle">
                        <span class="check"></span>
                      </span>
                                                        </label>
                                                    </div>
                                                </div>


                                                <label class="col-sm-2 col-form-label">OCE</label>
                                                <div class="col-sm-4">
                                                    <div class="form-group bmd-form-group">
                                                        <div class="dropdown bootstrap-select col-sm-12 pl-0 pr-0"><select class="selectpicker col-sm-12 pl-0 pr-0" name="anx9_OCE_1" data-style="select-with-transition" title="" data-size="100" tabindex="-98">
                                                                <option value="1">Permeable</option>
                                                                <option value="2">Estenótio</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>

                                                <label class="col-sm-12 col-form-label text-center
                ">Útero</label>

                                                <label class="col-sm-2 col-form-label">Posición</label>
                                                <div class="col-sm-4">
                                                    <div class="form-group bmd-form-group">
                                                        <div class="dropdown bootstrap-select col-sm-12 pl-0 pr-0"><select class="selectpicker col-sm-12 pl-0 pr-0" name="anx9_Posicion_1" data-style="select-with-transition" title="" data-size="100" tabindex="-98">
                                                                <option value="1">AVF</option>
                                                                <option value="2">Central</option>
                                                                <option value="2">RVF</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>

                                                <label class="col-sm-12 col-form-label text-center
                ">Cavidad uterina</label>

                                                <label class="col-sm-2 col-form-label">Distensión</label>
                                                <div class="col-sm-4">
                                                    <div class="form-group bmd-form-group">
                                                        <div class="dropdown bootstrap-select col-sm-12 pl-0 pr-0"><select class="selectpicker col-sm-12 pl-0 pr-0" name="anx9_Distension" data-style="select-with-transition" title="" data-size="100" tabindex="-98">
                                                                <option value="1">Adecuada</option>
                                                                <option value="2">Inadecuada</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                <label class="col-sm-2 col-form-label">Tamaño</label>
                                                <div class="col-sm-4">
                                                    <div class="form-group bmd-form-group">
                                                        <input class="form-control" type="text" name="anx9_Tamaño" id="anx9_Tamaño" required="true" aria-required="true">
                                                    </div>
                                                </div>
                                                <label class="col-sm-2 col-form-label">Forma</label>
                                                <div class="col-sm-4">
                                                    <div class="form-group bmd-form-group">
                                                        <input class="form-control" type="text" name="anx9_Forma" id="anx9_Forma" required="true" aria-required="true">
                                                    </div>
                                                </div>

                                                <label class="col-sm-2 col-form-label">Defectos</label>
                                                <div class="col-sm-4">
                                                    <div class="form-group bmd-form-group">
                                                        <div class="dropdown bootstrap-select col-sm-12 pl-0 pr-0"><select class="selectpicker col-sm-12 pl-0 pr-0" name="anx9_Defectos" data-style="select-with-transition" title="" data-size="100" tabindex="-98">
                                                                <option value="1">Proyecciones</option>
                                                                <option value="2">Hundimiento</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                <label class="col-sm-12 col-form-label text-center
                ">Endometrio</label>
                                                <label class="col-sm-12 col-form-label text-center
                ">Atrófico</label>

                                                <label class="col-sm-2 col-form-label">Poliferativo</label>
                                                <div class="col-sm-4">
                                                    <div class="form-group bmd-form-group">
                                                        <div class="dropdown bootstrap-select col-sm-12 pl-0 pr-0"><select class="selectpicker col-sm-12 pl-0 pr-0" name="anx9_Poliferativo" data-style="select-with-transition" title="" data-size="100" tabindex="-98">
                                                                <option value="1">Temprano</option>
                                                                <option value="2">Tardío</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>

                                                <label class="col-sm-2 col-form-label">Secretor</label>
                                                <div class="col-sm-4">
                                                    <div class="form-group bmd-form-group">
                                                        <div class="dropdown bootstrap-select col-sm-12 pl-0 pr-0"><select class="selectpicker col-sm-12 pl-0 pr-0" name="anx9_Secretor" data-style="select-with-transition" title="" data-size="100" tabindex="-98">
                                                                <option value="1">Temprano</option>
                                                                <option value="2">Tardío</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                <label class="col-sm-2 col-form-label">Anormal</label>
                                                <div class="col-sm-2">
                                                    <div class="form-group bmd-form-group">
                                                        <input class="form-control" type="text" name="anx9_Anormal" id="anx9_Anormal" required="true" aria-required="true">
                                                    </div>
                                                </div>

                                                <label class="col-sm-12 col-form-label text-center
                ">Ostium</label>
                                                <label class="col-sm-12 col-form-label text-center
                ">Derecho</label>

                                                <label class="col-sm-2 col-form-label label-checkbox">Visible</label>
                                                <div class="col-sm-4 checkbox-radios">
                                                    <div class="form-check form-check-inline">
                                                        <label class="form-check-label">
                                                            <input class="form-check-input" type="radio" name="anx9_Visible" value="Si" checked> Si
                                                            <span class="circle">
                        <span class="check"></span>
                      </span>
                                                        </label>
                                                    </div>
                                                    <div class="form-check form-check-inline">
                                                        <label class="form-check-label">
                                                            <input class="form-check-input" type="radio" name="anx9_Visible" value="No"> No
                                                            <span class="circle">
                        <span class="check"></span>
                      </span>
                                                        </label>
                                                    </div>
                                                </div>

                                                <label class="col-sm-2 col-form-label label-checkbox">Permeable</label>
                                                <div class="col-sm-4 checkbox-radios">
                                                    <div class="form-check form-check-inline">
                                                        <label class="form-check-label">
                                                            <input class="form-check-input" type="radio" name="anx9_Permeable" value="Si" checked> Si
                                                            <span class="circle">
                        <span class="check"></span>
                      </span>
                                                        </label>
                                                    </div>
                                                    <div class="form-check form-check-inline">
                                                        <label class="form-check-label">
                                                            <input class="form-check-input" type="radio" name="anx9_Permeable" value="No"> No
                                                            <span class="circle">
                        <span class="check"></span>
                      </span>
                                                        </label>
                                                    </div>
                                                </div>


                                                <label class="col-sm-12 col-form-label text-center
                ">Izquierdo</label>

                                                <label class="col-sm-2 col-form-label label-checkbox">Visible</label>
                                                <div class="col-sm-4 checkbox-radios">
                                                    <div class="form-check form-check-inline">
                                                        <label class="form-check-label">
                                                            <input class="form-check-input" type="radio" name="anx9_Visible_izq" value="Si" checked> Si
                                                            <span class="circle">
                        <span class="check"></span>
                      </span>
                                                        </label>
                                                    </div>
                                                    <div class="form-check form-check-inline">
                                                        <label class="form-check-label">
                                                            <input class="form-check-input" type="radio" name="anx9_Visible_izq" value="No"> No
                                                            <span class="circle">
                        <span class="check"></span>
                      </span>
                                                        </label>
                                                    </div>
                                                </div>

                                                <label class="col-sm-2 col-form-label label-checkbox">Permeable</label>
                                                <div class="col-sm-4 checkbox-radios">
                                                    <div class="form-check form-check-inline">
                                                        <label class="form-check-label">
                                                            <input class="form-check-input" type="radio" name="anx9_Permeable_izq" value="Si" checked> Si
                                                            <span class="circle">
                        <span class="check"></span>
                      </span>
                                                        </label>
                                                    </div>
                                                    <div class="form-check form-check-inline">
                                                        <label class="form-check-label">
                                                            <input class="form-check-input" type="radio" name="anx9_Permeable_izq" value="No"> No
                                                            <span class="circle">
                        <span class="check"></span>
                      </span>
                                                        </label>
                                                    </div>
                                                </div>

                                                <label class="col-sm-2 col-form-label">Diagnóstico</label>
                                                <div class="col-sm-2">
                                                    <div class="form-group bmd-form-group">
                                                        <input class="form-control" type="text" name="anx9_Diagnostico" id="anx9_Diagnostico" required="true" aria-required="true">
                                                    </div>
                                                </div>
                                                <label class="col-sm-2 col-form-label">Tom biopsia</label>
                                                <div class="col-sm-2">
                                                    <div class="form-group bmd-form-group">
                                                        <input class="form-control" type="text" name="anx9_Tom_biopsia" id="anx9_Tom_biopsia" required="true" aria-required="true">
                                                    </div>
                                                </div>
                                                <label class="col-sm-2 col-form-label">Colocación DIU</label>
                                                <div class="col-sm-2">
                                                    <div class="form-group bmd-form-group">
                                                        <input class="form-control" type="text" name="anx9_Colocación_DIU" id="anx9_Colocación_DIU" required="true" aria-required="true">
                                                    </div>
                                                </div>
                                                <label class="col-sm-2 col-form-label">Resultado biopsia</label>
                                                <div class="col-sm-2">
                                                    <div class="form-group bmd-form-group">
                                                        <input class="form-control" type="text" name="anx9_Resultado_biopsia" id="anx9_Resultado_biopsia" required="true" aria-required="true">
                                                    </div>
                                                </div>
                                                <label class="col-sm-2 col-form-label">Plan quirúrgico</label>
                                                <div class="col-sm-2">
                                                    <div class="form-group bmd-form-group">
                                                        <input class="form-control" type="text" name="anx9_Plan_quirurgico" id="anx9_Plan_quirurgico" required="true" aria-required="true">
                                                    </div>
                                                </div>

                                                <label class="col-sm-2 col-form-label">Notas</label>
                                                <div class="col-sm-2">
                                                    <div class="form-group bmd-form-group">
                                                        <input class="form-control" type="text" name="anx9_Notas" id="anx9_Notas" required="true" aria-required="true">
                                                    </div>
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
                    </div>
            </form>



        </div>
    </div>
</div>
<!-- Fin Modal -->
<!-- Modal -->
<div class="modal fade docs-anexo10-modal-lg" tabindex="-1" id="anexos" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h3 class="modal-title" id="exampleModalLongTitle">Anexo 10</h3>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close" style="color: red">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>

            <form method="post" action="{{url('procesoanexo10/add') }}" autocomplete="off" class="form-horizontal">
                @csrf

                    <div class="content">
                        <div class="container-fluid">
                            <div class="row justify-content-center">

                                <div class="col-md-10 ">
                                    <div class="card ">
                                        <div class="card-header card-header-rose card-header-icon">
                                            <div class="card-icon">
                                                <i class="material-icons">battery_std</i>
                                            </div>
                                            <h4 class="card-title">Oncología</h4>
                                        </div>
                                        <div class="card-body ">

                                            <div class="form-group">
                                                <label for="example" class="bmd-label-floating">Historia familiar de padecimintos oncológicos</label>
                                                <input type="text" name="anx10_ht_oncologia" class="form-control" id="anx10_ht_oncologia" value="">
                                            </div>


                                            <div class="form-group">
                                                <label for="exampleEmail" class="bmd-label-floating">Menarca</label>
                                                <input type="text" name="anx10_menarca" class="form-control" id="anx10_menarca" value="">
                                            </div>

                                            <div class="form-group">
                                                <label for="exampleEmail" class="bmd-label-floating">Edad del primer embarazo</label>
                                                <input type="text" name="anx10_embarazo" class="form-control" id="anx10_embarazo" value="">
                                            </div>

                                            <div class="form-group">
                                                <label for="exampleEmail" class="bmd-label-floating">Lactancia materna (tiepo)</label>
                                                <input type="text" name="anx10_lmaterna" class="form-control" id="anx10_lmaterna" value="">
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleEmail" class="bmd-label-floating">Uso de hormonales</label>
                                                <input type="text" name="anx10_uso_hormonales" class="form-control" id="anx10_uso_hormonales" value="">
                                            </div>
                                            <div class="row ">
                                                <label class="col-sm-2 col-form-label"><small>Notas:</small></label>
                                                <div class="col-sm-10">
                                                    <div class="form-group{{ $errors->has('anx10_notas') ? ' has-danger' : '' }}">
                                                        <textarea  rows="4" class="form-control{{ $errors->has('anx10_notas') ? ' is-invalid' : '' }}" name="anx10_notas" id="input-anx10_notas" type="text" placeholder=""  aria-required="true"  value="">{{ old('Exporacion Fisica:') }}</textarea>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row justify-content-center">
                                <button type="submit" class="btn btn-rose">{{ __('Guardar ') }}</button>
                            </div>

                        </div>
                    </div>
            </form>



        </div>
    </div>
</div>
<!-- Fin Modal -->

<!-- Modal -->
<div class="modal fade docs-anexo11-modal-lg" tabindex="-1" id="anexos" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h3 class="modal-title" id="exampleModalLongTitle">Anexo 11</h3>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close" style="color: red">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>


            <div class="content">
                <div class="container-fluid">

                </div>
            </div>

        </div>
    </div>
</div>
<!-- Fin Modal -->
<!-- Modal -->
<div class="modal fade docs-anexo12-modal-lg" tabindex="-1" id="anexos" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h3 class="modal-title" id="exampleModalLongTitle">Anexo 12</h3>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close" style="color: red">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>


            <div class="content">
                <div class="container-fluid">

                </div>
            </div>

        </div>
    </div>
</div>
<!-- Fin Modal -->
<!-- Modal -->
<div class="modal fade docs-anexo13-modal-lg" tabindex="-1" id="anexos" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h3 class="modal-title" id="exampleModalLongTitle">Anexo 13</h3>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close" style="color: red">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>


            <div class="content">
                <div class="container-fluid">

                </div>
            </div>

        </div>
    </div>
</div>
<!-- Fin Modal -->
<!-- Modal -->
<div class="modal fade docs-anexo14-modal-lg" tabindex="-1" id="anexos" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h3 class="modal-title" id="exampleModalLongTitle">Anexo 14</h3>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close" style="color: red">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>


            <div class="content">
                <div class="container-fluid">

                </div>
            </div>

        </div>
    </div>
</div>
<!-- Fin Modal -->
<!-- Modal -->
<div class="modal fade docs-anexo15-modal-lg" tabindex="-1" id="anexos" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h3 class="modal-title" id="exampleModalLongTitle">Anexo 15</h3>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close" style="color: red">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>


            <div class="content">
                <div class="container-fluid">

                </div>
            </div>

        </div>
    </div>
</div>
<!-- Fin Modal -->
<!-- Modal -->
<div class="modal fade docs-anexo16-modal-lg" tabindex="-1" id="anexos" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h3 class="modal-title" id="exampleModalLongTitle">Anexo 16</h3>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close" style="color: red">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>


            <div class="content">
                <div class="container-fluid">

                </div>
            </div>

        </div>
    </div>
</div>
<!-- Fin Modal -->


<!-- Modal -->

<div class="modal fade docs-anexo17-modal-lg" tabindex="-1" id="anexos" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h3 class="modal-title" id="exampleModalLongTitle">Anexo 17</h3>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close" style="color: red">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form method="post"  action="{{url('procesoanexo17/add') }}" autocomplete="off" class="form-horizontal">
                @csrf



                    <div class="content">
                        <div class="container-fluid">
                            <!-- Inicio de elemento -->
                            <div class="card ">
                                <div class="card-body ">
                                    <div class="tab-content tab-space">
                                        <!-- primer metodo del panel-->
                                        <div class="tab-pane  active show" id="link1">
                                            <div class="row">

                                                <label class="col-sm-12 col-form-label text-center
                ">Check-up Mature</label>


                                                <label class="col-sm-12 col-form-label text-center
                ">Desitometria Ósea</label>

                                                <label class="col-sm-2 col-form-label">Doctora que realiza el procedimiento </label>
                                                <div class="col-sm-4">
                                                    <div class="form-group bmd-form-group">
                                                        <input class="form-control" type="text" name="anx17_D_osea_doc" id="anx17_D_osea_doc" required="true" aria-required="true">
                                                    </div>
                                                </div>

                                                <label class="col-sm-2 col-form-label">Fecha en que se realiza el estudio</label>
                                                <div class="col-sm-4">
                                                    <div class="form-group bmd-form-group">
                                                        <input class="form-control" type="date" name="anx17_D_osea_fr" id="anx17_D_osea_fr" required="true" aria-required="true">
                                                    </div>
                                                </div>

                                                <label class="col-sm-4 col-form-label">Fecha programada para el estudio</label>
                                                <div class="col-sm-8">
                                                    <div class="form-group bmd-form-group">
                                                        <input class="form-control" type="date" name="anx17_D_osea_fp" id="anx17_D_osea_fp" required="true" aria-required="true">
                                                    </div>
                                                </div>


                                                <label class="col-sm-12 col-form-label text-center
                ">Mastografía Bilateral</label>

                                                <label class="col-sm-2 col-form-label">Doctora que realiza el procedimiento </label>
                                                <div class="col-sm-4">
                                                    <div class="form-group bmd-form-group">
                                                        <input class="form-control" type="text" name="anx17_M_bilateral_doc" id="anx17_M_bilateral_doc" required="true" aria-required="true">
                                                    </div>
                                                </div>

                                                <label class="col-sm-2 col-form-label">Fecha en que se realiza el estudio</label>
                                                <div class="col-sm-4">
                                                    <div class="form-group bmd-form-group">
                                                        <input class="form-control" type="date" name="anx17_M_bilateral_fr" id="anx17_M_bilateral_fr" required="true" aria-required="true">
                                                    </div>
                                                </div>

                                                <label class="col-sm-4 col-form-label">Fecha programada para el estudio</label>
                                                <div class="col-sm-8">
                                                    <div class="form-group bmd-form-group">
                                                        <input class="form-control" type="date" name="anx17_M_bilateral_fp" id="anx17_M_bilateral_fp" required="true" aria-required="true">
                                                    </div>
                                                </div>


                                                <label class="col-sm-12 col-form-label text-center
                ">USG Mamario</label>

                                                <label class="col-sm-2 col-form-label">Doctora que realiza el procedimiento </label>
                                                <div class="col-sm-4">
                                                    <div class="form-group bmd-form-group">
                                                        <input class="form-control" type="text" name="anx17_USG_mamario_doc" id="anx17_USG_mamario_doc" required="true" aria-required="true">
                                                    </div>
                                                </div>

                                                <label class="col-sm-2 col-form-label">Fecha en que se realiza el estudio</label>
                                                <div class="col-sm-4">
                                                    <div class="form-group bmd-form-group">
                                                        <input class="form-control" type="date" name="anx17_USG_mamario_fr" id="anx17_USG_mamario_fr" required="true" aria-required="true">
                                                    </div>
                                                </div>

                                                <label class="col-sm-4 col-form-label">Fecha programada para el estudio</label>
                                                <div class="col-sm-8">
                                                    <div class="form-group bmd-form-group">
                                                        <input class="form-control" type="date" name="anx17_USG_mamario_fp" id="anx17_USG_mamario_fp" required="true" aria-required="true">
                                                    </div>
                                                </div>

                                                <label class="col-sm-12 col-form-label text-center
                ">USG Pélvico</label>

                                                <label class="col-sm-2 col-form-label">Doctora que realiza el procedimiento </label>
                                                <div class="col-sm-4">
                                                    <div class="form-group bmd-form-group">
                                                        <input class="form-control" type="text" name="anx17_USG_pelvico_doc" id="anx17_USG_pelvico_doc" required="true" aria-required="true">
                                                    </div>
                                                </div>

                                                <label class="col-sm-2 col-form-label">Fecha en que se realiza el estudio</label>
                                                <div class="col-sm-4">
                                                    <div class="form-group bmd-form-group">
                                                        <input class="form-control" type="date" name="anx17_USG_pelvico_fr" id="anx17_USG_pelvico_fr" required="true" aria-required="true">
                                                    </div>
                                                </div>

                                                <label class="col-sm-4 col-form-label">Fecha programada para el estudio</label>
                                                <div class="col-sm-8">
                                                    <div class="form-group bmd-form-group">
                                                        <input class="form-control" type="date" name="anx17_USG_pelvico_fp" id="anx17_USG_pelvico_fp" required="true" aria-required="true">
                                                    </div>
                                                </div>


                                                <label class="col-sm-12 col-form-label text-center
                ">CHECK-UP Cíclica Femenino   *QS 24 elementos *Biometría Hemática   *Perfil Tiroideo IV *Perfil Climaterio Básico </label>

                                                <label class="col-sm-2 col-form-label">Doctora que realiza el procedimiento </label>
                                                <div class="col-sm-4">
                                                    <div class="form-group bmd-form-group">
                                                        <input class="form-control" type="text" name="anx17_QS_doc" id="anx17_QS_doc" required="true" aria-required="true">
                                                    </div>
                                                </div>

                                                <label class="col-sm-2 col-form-label">Fecha en que se realiza el estudio</label>
                                                <div class="col-sm-4">
                                                    <div class="form-group bmd-form-group">
                                                        <input class="form-control" type="date" name="anx17_QS_fr" id="anx17_QS_fr" required="true" aria-required="true">
                                                    </div>
                                                </div>

                                                <label class="col-sm-4 col-form-label">Fecha programada para el estudio</label>
                                                <div class="col-sm-8">
                                                    <div class="form-group bmd-form-group">
                                                        <input class="form-control" type="date" name="anx17_QS_fp" id="anx17_QS_fp" required="true" aria-required="true">
                                                    </div>
                                                </div>



                                                <label class="col-sm-12 col-form-label text-center
                ">Examen General de Orina (Incluido en Perfil CHECK-UP Cíclica Femenino)</label>

                                                <label class="col-sm-2 col-form-label">Doctora que realiza el procedimiento </label>
                                                <div class="col-sm-4">
                                                    <div class="form-group bmd-form-group">
                                                        <input class="form-control" type="text" name="anx17_general_orina_doc" id="anx17_general_orina_doc" required="true" aria-required="true">
                                                    </div>
                                                </div>

                                                <label class="col-sm-2 col-form-label">Fecha en que se realiza el estudio</label>
                                                <div class="col-sm-4">
                                                    <div class="form-group bmd-form-group">
                                                        <input class="form-control" type="date" name="anx17_general_orina_fr" id="anx17_general_orina_fr" required="true" aria-required="true">
                                                    </div>
                                                </div>

                                                <label class="col-sm-4 col-form-label">Fecha programada para el estudio</label>
                                                <div class="col-sm-8">
                                                    <div class="form-group bmd-form-group">
                                                        <input class="form-control" type="date" name="anx17_general_orina_fp" id="anx17_general_orina_fp" required="true" aria-required="true">
                                                    </div>
                                                </div>


                                                <label class="col-sm-12 col-form-label text-center
                ">Cultivos especiales</label>

                                                <label class="col-sm-2 col-form-label">Doctora que realiza el procedimiento </label>
                                                <div class="col-sm-4">
                                                    <div class="form-group bmd-form-group">
                                                        <input class="form-control" type="text" name="anx17_cultivo_espe_doc" id="anx17_cultivo_espe_doc" required="true" aria-required="true">
                                                    </div>
                                                </div>

                                                <label class="col-sm-2 col-form-label">Fecha en que se realiza el estudio</label>
                                                <div class="col-sm-4">
                                                    <div class="form-group bmd-form-group">
                                                        <input class="form-control" type="date" name="anx17_cultivo_espe_fr" id="anx17_cultivo_espe_fr" required="true" aria-required="true">
                                                    </div>
                                                </div>

                                                <label class="col-sm-4 col-form-label">Fecha programada para el estudio</label>
                                                <div class="col-sm-8">
                                                    <div class="form-group bmd-form-group">
                                                        <input class="form-control" type="date" name="anx17_cultivo_espe_fp" id="anx17_cultivo_espe_fp" required="true" aria-required="true">
                                                    </div>
                                                </div>



                                                <label class="col-sm-12 col-form-label text-center
                ">Papanicolau</label>

                                                <label class="col-sm-2 col-form-label">Doctora que realiza el procedimiento </label>
                                                <div class="col-sm-4">
                                                    <div class="form-group bmd-form-group">
                                                        <input class="form-control" type="text" name="anx17_papanicolau_doc" id="anx17_papanicolau_doc" required="true" aria-required="true">
                                                    </div>
                                                </div>

                                                <label class="col-sm-2 col-form-label">Fecha en que se realiza el estudio</label>
                                                <div class="col-sm-4">
                                                    <div class="form-group bmd-form-group">
                                                        <input class="form-control" type="date" name="anx17_papanicolau_fr" id="anx17_papanicolau_fr" required="true" aria-required="true">
                                                    </div>
                                                </div>

                                                <label class="col-sm-4 col-form-label">Fecha programada para el estudio</label>
                                                <div class="col-sm-8">
                                                    <div class="form-group bmd-form-group">
                                                        <input class="form-control" type="date" name="anx17_papanicolau_fp" id="anx17_papanicolau_fp" required="true" aria-required="true">
                                                    </div>
                                                </div>



                                                <label class="col-sm-12 col-form-label text-center
                ">Colposcopía</label>

                                                <label class="col-sm-2 col-form-label">Doctora que realiza el procedimiento </label>
                                                <div class="col-sm-4">
                                                    <div class="form-group bmd-form-group">
                                                        <input class="form-control" type="text" name="anx17_colposcopia_doc" id="anx17_colposcopia_doc" required="true" aria-required="true">
                                                    </div>
                                                </div>

                                                <label class="col-sm-2 col-form-label">Fecha en que se realiza el estudio</label>
                                                <div class="col-sm-4">
                                                    <div class="form-group bmd-form-group">
                                                        <input class="form-control" type="date" name="anx17_colposcopia_fr" id="anx17_colposcopia_fr" required="true" aria-required="true">
                                                    </div>
                                                </div>

                                                <label class="col-sm-4 col-form-label">Fecha programada para el estudio</label>
                                                <div class="col-sm-8">
                                                    <div class="form-group bmd-form-group">
                                                        <input class="form-control" type="date" name="anx17_colposcopia_fp" id="anx17_colposcopia_fp" required="true" aria-required="true">
                                                    </div>
                                                </div>


                                                <label class="col-sm-12 col-form-label text-center
                ">Consulta ginecología</label>

                                                <label class="col-sm-2 col-form-label">Doctora que realiza el procedimiento </label>
                                                <div class="col-sm-4">
                                                    <div class="form-group bmd-form-group">
                                                        <input class="form-control" type="text" name="anx17_consulta_gine_doc" id="anx17_consulta_gine_doc" required="true" aria-required="true">
                                                    </div>
                                                </div>

                                                <label class="col-sm-2 col-form-label">Fecha en que se realiza el estudio</label>
                                                <div class="col-sm-4">
                                                    <div class="form-group bmd-form-group">
                                                        <input class="form-control" type="date" name="anx17_consulta_gine_fr" id="anx17_consulta_gine_fr" required="true" aria-required="true">
                                                    </div>
                                                </div>

                                                <label class="col-sm-4 col-form-label">Fecha programada para el estudio</label>
                                                <div class="col-sm-8">
                                                    <div class="form-group bmd-form-group">
                                                        <input class="form-control" type="date" name="anx17_consulta_gine_fp" id="anx17_consulta_gine_fp" required="true" aria-required="true">
                                                    </div>
                                                </div>


                                                <label class="col-sm-12 col-form-label text-center
                ">Consulta Nutricion</label>

                                                <label class="col-sm-2 col-form-label">Doctora que realiza el procedimiento </label>
                                                <div class="col-sm-4">
                                                    <div class="form-group bmd-form-group">
                                                        <input class="form-control" type="text" name="anx17_consulta_nutri_doc" id="anx17_consulta_nutri_doc" required="true" aria-required="true">
                                                    </div>
                                                </div>

                                                <label class="col-sm-2 col-form-label">Fecha en que se realiza el estudio</label>
                                                <div class="col-sm-4">
                                                    <div class="form-group bmd-form-group">
                                                        <input class="form-control" type="date" name="anx17_consulta_nutri_fr" id="anx17_consulta_nutri_fr" required="true" aria-required="true">
                                                    </div>
                                                </div>

                                                <label class="col-sm-4 col-form-label">Fecha programada para el estudio</label>
                                                <div class="col-sm-8">
                                                    <div class="form-group bmd-form-group">
                                                        <input class="form-control" type="date" name="anx17_consulta_nutri_fp" id="anx17_consulta_nutri_fp" required="true" aria-required="true">
                                                    </div>
                                                </div>



                                                <label class="col-sm-12 col-form-label text-center
                ">Valoración uroginecologia</label>

                                                <label class="col-sm-2 col-form-label">Doctora que realiza el procedimiento </label>
                                                <div class="col-sm-4">
                                                    <div class="form-group bmd-form-group">
                                                        <input class="form-control" type="text" name="anx17_valoracion_urogine_doc" id="anx17_valoracion_urogine_doc" required="true" aria-required="true">
                                                    </div>
                                                </div>

                                                <label class="col-sm-2 col-form-label">Fecha en que se realiza el estudio</label>
                                                <div class="col-sm-4">
                                                    <div class="form-group bmd-form-group">
                                                        <input class="form-control" type="date" name="anx17_valoracion_urogine_fr" id="anx17_valoracion_urogine_fr" required="true" aria-required="true">
                                                    </div>
                                                </div>

                                                <label class="col-sm-4 col-form-label">Fecha programada para el estudio</label>
                                                <div class="col-sm-8">
                                                    <div class="form-group bmd-form-group">
                                                        <input class="form-control" type="date" name="anx17_valoracion_urogine_fp" id="anx17_valoracion_urogine_fp" required="true" aria-required="true">
                                                    </div>
                                                </div>



                                                <label class="col-sm-12 col-form-label text-center
                ">Valoración Peri menopausia</label>

                                                <label class="col-sm-2 col-form-label">Doctora que realiza el procedimiento </label>
                                                <div class="col-sm-4">
                                                    <div class="form-group bmd-form-group">
                                                        <input class="form-control" type="text" name="anx17_valoracion_menopausia_doc" id="anx17_valoracion_menopausia_doc" required="true" aria-required="true">
                                                    </div>
                                                </div>

                                                <label class="col-sm-2 col-form-label">Fecha en que se realiza el estudio</label>
                                                <div class="col-sm-4">
                                                    <div class="form-group bmd-form-group">
                                                        <input class="form-control" type="date" name="anx17_valoracion_menopausia_fr" id="anx17_valoracion_menopausia_fr" required="true" aria-required="true">
                                                    </div>
                                                </div>

                                                <label class="col-sm-4 col-form-label">Fecha programada para el estudio</label>
                                                <div class="col-sm-8">
                                                    <div class="form-group bmd-form-group">
                                                        <input class="form-control" type="date" name="anx17_valoracion_menopausia_fp" id="anx17_valoracion_menopausia_fp" required="true" aria-required="true">
                                                    </div>
                                                </div>



                                                <label class="col-sm-12 col-form-label text-center
                ">Valoracion Onco-Ginecología</label>

                                                <label class="col-sm-2 col-form-label">Doctora que realiza el procedimiento </label>
                                                <div class="col-sm-4">
                                                    <div class="form-group bmd-form-group">
                                                        <input class="form-control" type="text" name="anx17_valoracion_onco_gine_doc" id="anx17_valoracion_onco_gine_doc" required="true" aria-required="true">
                                                    </div>
                                                </div>

                                                <label class="col-sm-2 col-form-label">Fecha en que se realiza el estudio</label>
                                                <div class="col-sm-4">
                                                    <div class="form-group bmd-form-group">
                                                        <input class="form-control" type="date" name="anx17_valoracion_onco_gine_fr" id="anx17_valoracion_onco_gine_fr" required="true" aria-required="true">
                                                    </div>
                                                </div>

                                                <label class="col-sm-4 col-form-label">Fecha programada para el estudio</label>
                                                <div class="col-sm-8">
                                                    <div class="form-group bmd-form-group">
                                                        <input class="form-control" type="date" name="anx17_valoracion_onco_gine_fp" id="anx17_valoracion_onco_gine_fp" required="true" aria-required="true">
                                                    </div>
                                                </div>



                                                <label class="col-sm-12 col-form-label text-center
                ">Mas de 50 años: Sangre oculta en eses</label>

                                                <label class="col-sm-2 col-form-label">Doctora que realiza el procedimiento </label>
                                                <div class="col-sm-4">
                                                    <div class="form-group bmd-form-group">
                                                        <input class="form-control" type="text" name="anx17_sangre_oculta_doc" id="anx17_sangre_oculta_doc" required="true" aria-required="true">
                                                    </div>
                                                </div>

                                                <label class="col-sm-2 col-form-label">Fecha en que se realiza el estudio</label>
                                                <div class="col-sm-4">
                                                    <div class="form-group bmd-form-group">
                                                        <input class="form-control" type="date" name="anx17_sangre_oculta_fr" id="anx17_sangre_oculta_fr" required="true" aria-required="true">
                                                    </div>
                                                </div>

                                                <label class="col-sm-4 col-form-label">Fecha programada para el estudio</label>
                                                <div class="col-sm-8">
                                                    <div class="form-group bmd-form-group">
                                                        <input class="form-control" type="date" name="anx17_sangre_oculta_fp" id="anx17_sangre_oculta_fp" required="true" aria-required="true">
                                                    </div>
                                                </div>



                                                <label class="col-sm-12 col-form-label text-center
                ">Opción: Genotipificación de VPH</label>

                                                <label class="col-sm-2 col-form-label">Doctora que realiza el procedimiento </label>
                                                <div class="col-sm-4">
                                                    <div class="form-group bmd-form-group">
                                                        <input class="form-control" type="text" name="anx17_vph_doc" id="anx17_vph_doc" required="true" aria-required="true">
                                                    </div>
                                                </div>

                                                <label class="col-sm-2 col-form-label">Fecha en que se realiza el estudio</label>
                                                <div class="col-sm-4">
                                                    <div class="form-group bmd-form-group">
                                                        <input class="form-control" type="date" name="anx17_vph_fr" id="anx17_vph_fr" required="true" aria-required="true">
                                                    </div>
                                                </div>

                                                <label class="col-sm-4 col-form-label">Fecha programada para el estudio</label>
                                                <div class="col-sm-8">
                                                    <div class="form-group bmd-form-group">
                                                        <input class="form-control" type="date" name="anx17_vph_fp" id="anx17_vph_fp" required="true" aria-required="true">
                                                    </div>
                                                </div>
                                                <div class="row justify-content-center">
                                                    <button type="submit" class="btn btn-fill btn-rose">Guardar</button>
                                                </div>
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
</div>

<!-- Fin Modal -->

<!-- Modal -->
<div class="modal fade docs-anexo18-modal-lg" tabindex="-1" id="anexos" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content ">
            <div class="modal-header">
                <h3 class="modal-title" id="exampleModalLongTitle">Anexo 18</h3>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close" style="color: red">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form method="post"  action="{{url('procesoanexo18/add') }}" autocomplete="off" class="form-horizontal">
                @csrf


                    <div class="content">
                        <div class="container-fluid">
                            <div class="row justify-content-center" >
                                <div class="col-md-12">
                                    <div class="card ">
                                        <div class="card-header card-header-icon card-header-rose">
                                            <div class="card-icon">
                                                <i class="material-icons">assignment</i>
                                            </div>
                                            <h4 class="card-title ">CHECK-UP MUJER CÍCLICA</h4>
                                        </div>
                                        <div class="card-body">
                                            <div class="table">
                                                <table class="table">
                                                    <thead class=" text-primary">
                                                    <th>
                                                        PROCEDIMIENTO
                                                    </th>
                                                    <th>
                                                        DR(A)/ENF.QUE REALIZA
                                                        <br />EL PROCEDIMIENTO
                                                    </th>
                                                    <th>
                                                        FECHA EN QUE SE REALIZO
                                                        <br />EL ESTUDIO
                                                    </th>
                                                    <th>
                                                        FECHA PROGRAMADA PARA
                                                        <br />EL ESTUDIO
                                                    </th>
                                                    </thead>
                                                    <tbody>
                                                    <tr>
                                                        <td>
                                                            USG Mamario
                                                        </td>
                                                        <td>
                                                            <div class="form-group">
                                                                <input type="text" name="anx18_USG_Mamario_Doc" class="form-control" placeholder="Medico:">
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="form-group">
                                                                <input type="text" name="anx18_USG_Mamario_Fr" class="form-control datepicker " placeholder="Fecha:">
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="form-group ">
                                                                <input type="text" name="anx18_USG_Mamario_Fp" class="form-control  datepicker" placeholder="Fecha:">
                                                            </div>
                                                        </td>

                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            USG Pélvico
                                                        </td>
                                                        <td>
                                                            <div class="form-group">
                                                                <input type="text" name="anx18_USG_Pelvico_Doc" class="form-control" placeholder="Medico:">
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="form-group">
                                                                <input type="text" name="anx18_USG_Pelvico_Fr" class="form-control datepicker" placeholder="Fecha:">
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="form-group">
                                                                <input type="text" name="anx18_USG_Pelvico_Fp" class="form-control datepicker" placeholder="Fecha:">
                                                            </div>
                                                        </td>

                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            Cultivos Epeciales
                                                        </td>
                                                        <td>
                                                            <div class="form-group">
                                                                <input type="text" name="anx18_Cul_especiales_Doc" class="form-control" placeholder="Medico:">
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="form-group">
                                                                <input type="text" name="anx18_Cul_especiales_Fr" class="form-control datepicker" placeholder="Fecha:">
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="form-group">
                                                                <input type="text" name="anx18_Cul_especiales_Fp" class="form-control datepicker" placeholder="Fecha:">
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            Papanicolau
                                                        </td>
                                                        <td>
                                                            <div class="form-group">
                                                                <input type="text" name="anx18_papanicolau_Doc" class="form-control" placeholder="Medico:">
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="form-group">
                                                                <input type="text" name="anx18_papanicolau_Fr" class="form-control datepicker" placeholder="Fecha:">
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="form-group">
                                                                <input type="text" name="anx18_papanicolau_Fp" class="form-control datepicker" placeholder="Fecha:">
                                                            </div>
                                                        </td>

                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            Colposcopía
                                                        </td>
                                                        <td>
                                                            <div class="form-group">
                                                                <input type="text" name="anx18_Colposcopia_Doc" class="form-control" placeholder="Medico:">
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="form-group">
                                                                <input type="text" name="anx18_Colposcopia_Fr" class="form-control datepicker" placeholder="Fecha:">
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="form-group">
                                                                <input type="text" name="anx18_Colposcopia_Fp" class="form-control datepicker" placeholder="Fecha:">
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            Perfil Hormonal Femenino Fase I
                                                        </td>
                                                        <td>
                                                            <div class="form-group">
                                                                <input type="text" name="anx18_H_femenino_fase1_Doc" class="form-control" placeholder="Medico:">
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="form-group">
                                                                <input type="text" name="anx18_H_femenino_fase1_Fr" class="form-control datepicker" placeholder="Fecha:">
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="form-group">
                                                                <input type="text" name="anx18_H_femenino_fase1_Fp" class="form-control datepicker" placeholder="Fecha:">
                                                            </div>
                                                        </td>

                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            Perfil Hormonal Femenino Fase II
                                                        </td>
                                                        <td>
                                                            <div class="form-group">
                                                                <input type="text" name="anx18_H_femenino_fase2_Doc" class="form-control" placeholder="Medico:">
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="form-group">
                                                                <input type="text" name="anx18_H_femenino_fase2_Fr" class="form-control datepicker" placeholder="Fecha:">
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="form-group">
                                                                <input type="text" name="anx18_H_femenino_fase2_Fp" class="form-control datepicker" placeholder="Fecha:">
                                                            </div>
                                                        </td>

                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            Consulta Ginecología
                                                        </td>
                                                        <td>
                                                            <div class="form-group">
                                                                <input type="text" name="anx18_Consulta_Gine_Doc" class="form-control" placeholder="Medico:">
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="form-group">
                                                                <input type="text" name="anx18_Consulta_Gine_Fr" class="form-control datepicker" placeholder="Fecha:">
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="form-group">
                                                                <input type="text" name="anx18_Consulta_Gine_Fp" class="form-control datepicker" placeholder="Fecha:">
                                                            </div>
                                                        </td>

                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            Consulta Nutrición
                                                        </td>
                                                        <td>
                                                            <div class="form-group">
                                                                <input type="text" name="anx18_Consulta_Nutri_Doc" class="form-control" placeholder="Medico:">
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="form-group">
                                                                <input type="text" name="anx18_Consulta_Nutri_Fr" class="form-control datepicker" placeholder="Fecha:">
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="form-group">
                                                                <input type="text" name="anx18_Consulta_Nutri_Fp" class="form-control datepicker" placeholder="Fecha:">
                                                            </div>
                                                        </td>

                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            Valoración Biología de la Reproduccíon
                                                        </td>
                                                        <td>
                                                            <div class="form-group">
                                                                <input type="text" name="anx18_Valoracion_B_repro_Doc" class="form-control" placeholder="Medico:">
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="form-group">
                                                                <input type="text" name="anx18_Valoracion_B_repro_Fr" class="form-control datepicker" placeholder="Fecha:">
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="form-group">
                                                                <input type="text" name="anx18_Valoracion_B_repro_Fp" class="form-control datepicker" placeholder="Fecha:">
                                                            </div>
                                                        </td>

                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            Opción: Genotipificación de VPH
                                                        </td>
                                                        <td>
                                                            <div class="form-group">
                                                                <input type="text" name="anx18_VPH_Doc" class="form-control" placeholder="Medico:">
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="form-group">
                                                                <input type="text" name="anx18_VPH_Fr" class="form-control datepicker" placeholder="Fecha:">
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="form-group">
                                                                <input type="text" name="anx18_VPH_Fp" class="form-control datepicker" placeholder="Fecha:">
                                                            </div>
                                                        </td>

                                                    </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                        <div class="card-footer ml-auto mr-auto">
                                            <button type="submit" class="btn btn-rose">{{ __('Guardar ') }}</button>
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <!-- fin de seguno elemento -->

                        </div>
                    </div>
            </form>


        </div>
    </div>
</div>
<!-- Fin Modal -->



<!-- Modal -->
<div class="modal fade docs-anexo19-modal-lg" tabindex="-1" id="anexos" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h3 class="modal-title" id="exampleModalLongTitle">Anexo 19</h3>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close" style="color: red">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form method="post"  action="{{url('procesoanexo19/add') }}" autocomplete="off" class="form-horizontal">
                @csrf


                    <div class="content">
                        <div class="container-fluid">
                            <div class="card ">
                                <div class="card-body ">
                                    <div class="tab-content tab-space">
                                        <!-- primer metodo del panel-->
                                        <div class="tab-pane  active show" id="link1">
                                            <div class="row">

                                                <label class="col-sm-12 col-form-label text-center">Check-up Teen</label>




                                                <label class="col-sm-12 col-form-label text-center
                ">USG Mamario</label>

                                                <label class="col-sm-2 col-form-label">Doctora que realiza el procedimiento </label>
                                                <div class="col-sm-4">
                                                    <div class="form-group bmd-form-group">
                                                        <input class="form-control" type="text" name="anx19_mamario_doc" id="" required="true" aria-required="true">
                                                    </div>
                                                </div>

                                                <label class="col-sm-2 col-form-label">Fecha en que se realiza el estudio</label>
                                                <div class="col-sm-4">
                                                    <div class="form-group bmd-form-group">
                                                        <input class="form-control" type="date" name="anx19_mamario_fr" id="" required="true" aria-required="true">
                                                    </div>
                                                </div>

                                                <label class="col-sm-4 col-form-label">Fecha programada para el estudio</label>
                                                <div class="col-sm-8">
                                                    <div class="form-group bmd-form-group">
                                                        <input class="form-control" type="date" name="anx19_mamario_fp" id="" required="true" aria-required="true">
                                                    </div>
                                                </div>

                                                <label class="col-sm-12 col-form-label text-center
                ">USG Pélvico</label>

                                                <label class="col-sm-2 col-form-label">Doctora que realiza el procedimiento </label>
                                                <div class="col-sm-4">
                                                    <div class="form-group bmd-form-group">
                                                        <input class="form-control" type="text" name="anx19_pelvico_doc" id="" required="true" aria-required="true">
                                                    </div>
                                                </div>

                                                <label class="col-sm-2 col-form-label">Fecha en que se realiza el estudio</label>
                                                <div class="col-sm-4">
                                                    <div class="form-group bmd-form-group">
                                                        <input class="form-control" type="date" name="anx19_pelvico_fr" id="" required="true" aria-required="true">
                                                    </div>
                                                </div>

                                                <label class="col-sm-4 col-form-label">Fecha programada para el estudio</label>
                                                <div class="col-sm-8">
                                                    <div class="form-group bmd-form-group">
                                                        <input class="form-control" type="date" name="anx19_pelvico_fp" id="" required="true" aria-required="true">
                                                    </div>
                                                </div>




                                                <label class="col-sm-12 col-form-label text-center
                ">Consulta ginecología</label>

                                                <label class="col-sm-2 col-form-label">Doctora que realiza el procedimiento </label>
                                                <div class="col-sm-4">
                                                    <div class="form-group bmd-form-group">
                                                        <input class="form-control" type="text" name="anx19_gine_doc" id="" required="true" aria-required="true">
                                                    </div>
                                                </div>

                                                <label class="col-sm-2 col-form-label">Fecha en que se realiza el estudio</label>
                                                <div class="col-sm-4">
                                                    <div class="form-group bmd-form-group">
                                                        <input class="form-control" type="date" name="anx19_gine_fr" id="" required="true" aria-required="true">
                                                    </div>
                                                </div>

                                                <label class="col-sm-4 col-form-label">Fecha programada para el estudio</label>
                                                <div class="col-sm-8">
                                                    <div class="form-group bmd-form-group">
                                                        <input class="form-control" type="date" name="anx19_gine_fp" id="" required="true" aria-required="true">
                                                    </div>
                                                </div>


                                                <label class="col-sm-12 col-form-label text-center
                ">Consulta Nutricion</label>

                                                <label class="col-sm-2 col-form-label">Doctora que realiza el procedimiento </label>
                                                <div class="col-sm-4">
                                                    <div class="form-group bmd-form-group">
                                                        <input class="form-control" type="text" name="anx19_nutricion_doc" id="" required="true" aria-required="true">
                                                    </div>
                                                </div>

                                                <label class="col-sm-2 col-form-label">Fecha en que se realiza el estudio</label>
                                                <div class="col-sm-4">
                                                    <div class="form-group bmd-form-group">
                                                        <input class="form-control" type="date" name="anx19_nutricion_fr" id="" required="true" aria-required="true">
                                                    </div>
                                                </div>

                                                <label class="col-sm-4 col-form-label">Fecha programada para el estudio</label>
                                                <div class="col-sm-8">
                                                    <div class="form-group bmd-form-group">
                                                        <input class="form-control" type="date" name="anx19_nutricion_fp" id="" required="true" aria-required="true">
                                                    </div>
                                                </div>




                                                <label class="col-sm-12 col-form-label text-center
                ">Valoracion Biologia de la reproduccion</label>

                                                <label class="col-sm-2 col-form-label">Doctora que realiza el procedimiento </label>
                                                <div class="col-sm-4">
                                                    <div class="form-group bmd-form-group">
                                                        <input class="form-control" type="text" name="anx19_biologia_doc" id="" required="true" aria-required="true">
                                                    </div>
                                                </div>

                                                <label class="col-sm-2 col-form-label">Fecha en que se realiza el estudio</label>
                                                <div class="col-sm-4">
                                                    <div class="form-group bmd-form-group">
                                                        <input class="form-control" type="date" name="anx19_biologia_fr" id="" required="true" aria-required="true">
                                                    </div>
                                                </div>

                                                <label class="col-sm-4 col-form-label">Fecha programada para el estudio</label>
                                                <div class="col-sm-8">
                                                    <div class="form-group bmd-form-group">
                                                        <input class="form-control" type="date" name="anx19_biologia_fp" id="" required="true" aria-required="true">
                                                    </div>
                                                </div>



                                                <label class="col-sm-12 col-form-label text-center
                ">Opcion perfil hormonal Femenino</label>

                                                <label class="col-sm-2 col-form-label">Doctora que realiza el procedimiento </label>
                                                <div class="col-sm-4">
                                                    <div class="form-group bmd-form-group">
                                                        <input class="form-control" type="text" name="anx19_hormonal_doc" id="" required="true" aria-required="true">
                                                    </div>
                                                </div>

                                                <label class="col-sm-2 col-form-label">Fecha en que se realiza el estudio</label>
                                                <div class="col-sm-4">
                                                    <div class="form-group bmd-form-group">
                                                        <input class="form-control" type="date" name="anx19_hormonal_fr" id="" required="true" aria-required="true">
                                                    </div>
                                                </div>

                                                <label class="col-sm-4 col-form-label">Fecha programada para el estudio</label>
                                                <div class="col-sm-8">
                                                    <div class="form-group bmd-form-group">
                                                        <input class="form-control" type="date" name="anx19_hormonal_fp" id="" required="true" aria-required="true">
                                                    </div>
                                                </div>



                                                <label class="col-sm-12 col-form-label text-center
                ">Perfil Hormonal Fase 1</label>

                                                <label class="col-sm-2 col-form-label">Doctora que realiza el procedimiento </label>
                                                <div class="col-sm-4">
                                                    <div class="form-group bmd-form-group">
                                                        <input class="form-control" type="text" name="anx19_hormonal_fase1_doc" id="" required="true" aria-required="true">
                                                    </div>
                                                </div>

                                                <label class="col-sm-2 col-form-label">Fecha en que se realiza el estudio</label>
                                                <div class="col-sm-4">
                                                    <div class="form-group bmd-form-group">
                                                        <input class="form-control" type="date" name="anx19_hormonal_fase1_fr" id="" required="true" aria-required="true">
                                                    </div>
                                                </div>

                                                <label class="col-sm-4 col-form-label">Fecha programada para el estudio</label>
                                                <div class="col-sm-8">
                                                    <div class="form-group bmd-form-group">
                                                        <input class="form-control" type="date" name="anx19_hormonal_fase1_fp" id="" required="true" aria-required="true">
                                                    </div>
                                                </div>


                                                <label class="col-sm-12 col-form-label text-center
                ">Perfil Hormonal Fase 2</label>

                                                <label class="col-sm-2 col-form-label">Doctora que realiza el procedimiento </label>
                                                <div class="col-sm-4">
                                                    <div class="form-group bmd-form-group">
                                                        <input class="form-control" type="text" name="anx19_hormonal_fase2_doc" id="" required="true" aria-required="true">
                                                    </div>
                                                </div>

                                                <label class="col-sm-2 col-form-label">Fecha en que se realiza el estudio</label>
                                                <div class="col-sm-4">
                                                    <div class="form-group bmd-form-group">
                                                        <input class="form-control" type="date" name="anx19_hormonal_fase2_fr" id="" required="true" aria-required="true">
                                                    </div>
                                                </div>

                                                <label class="col-sm-4 col-form-label">Fecha programada para el estudio</label>
                                                <div class="col-sm-8">
                                                    <div class="form-group bmd-form-group">
                                                        <input class="form-control" type="date" name="anx19_hormonal_fase2_fp" id="" required="true" aria-required="true">
                                                    </div>
                                                </div>

                                                <div class="row justify-content-center">
                                                    <button type="submit" class="btn btn-fill btn-rose">Guardar</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- fin de cuarto elemento -->

                                </div>
                            </div>

                        </div>
                    </div>
            </form>

        </div>
    </div>
</div>
<!-- Fin Modal -->
<!-- Modal -->
<div class="modal fade docs-anexo20-modal-lg" tabindex="-1" id="anexos" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h3 class="modal-title" id="exampleModalLongTitle">Anexo 20</h3>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close" style="color: red">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form method="post"  action="{{url('procesoanexo20/add') }}" autocomplete="off" class="form-horizontal">
                @csrf


                    <div class="content">
                        <div class="container-fluid">
                            <div class="row justify-content-center" >
                                <div class="col-md-12">
                                    <div class="card">
                                        <div class="card-header card-header-icon card-header-rose">
                                            <div class="card-icon">
                                                <i class="material-icons">assignment</i>
                                            </div>
                                            <h4 class="card-title ">CHECK-UP MOM</h4>
                                        </div>
                                        <div class="card-body">
                                            <div class="table">
                                                <table class="table">
                                                    <thead class=" text-primary">
                                                    <th>
                                                        PROCEDIMIENTO
                                                    </th>
                                                    <th>
                                                        DR(A)/ENF.QUE REALIZA
                                                        <br />EL PROCEDIMIENTO
                                                    </th>
                                                    <th>
                                                        FECHA EN QUE SE REALIZO
                                                        <br />EL ESTUDIO
                                                    </th>
                                                    <th>
                                                        FECHA PROGRAMADA PARA
                                                        <br />EL ESTUDIO
                                                    </th>
                                                    </thead>
                                                    <tbody>


                                                    <th class=" text-primary" align="left">
                                                        Primer Trimestre:
                                                    </th>
                                                    <tr>
                                                        <td>
                                                            Perfil Prenatal
                                                        </td>
                                                        <td>
                                                            <div class="form-group">
                                                                <input type="text" name="anx20_primert_pp_doc" class="form-control" placeholder="Medico:">
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="form-group">
                                                                <input type="text" name="anx20_primert_pp_fr" class="form-control datepicker" placeholder="Fecha:">
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="form-group">
                                                                <input type="text" name="anx20_primert_pp_fp" class="form-control datepicker" placeholder="Fecha:">
                                                            </div>
                                                        </td>

                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            Perfil Tiroideo de Seguimiento
                                                            <br />(Básico)
                                                        </td>
                                                        <td>
                                                            <div class="form-group">
                                                                <input type="text" name="anx20_tiroideo_doc" class="form-control" placeholder="Medico:">
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="form-group">
                                                                <input type="text" name="anx20_tiroideo_fr" class="form-control datepicker" placeholder="Fecha:">
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="form-group">
                                                                <input type="text" name="anx20_tiroideo_fp" class="form-control datepicker" placeholder="Fecha:">
                                                            </div>
                                                        </td>

                                                    </tr>
                                                    <th class=" text-primary" align="left">
                                                        Segundo Trimestre:
                                                    </th>
                                                    <tr>
                                                        <td>
                                                            Curva de Tolerancia a
                                                            <br />la glucosa de 120 min
                                                        </td>
                                                        <td>
                                                            <div class="form-group">
                                                                <input type="text" name="anx20_segundot_glucosa_doc" class="form-control" placeholder="Medico:">
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="form-group">
                                                                <input type="text" name="anx20_segundot_glucosa_fr" class="form-control datepicker" placeholder="Fecha:">
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="form-group">
                                                                <input type="text" name="anx20_segundot_glucosa_fp" class="form-control datepicker" placeholder="Fecha:">
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            Biometria Hemática
                                                        </td>
                                                        <td>
                                                            <div class="form-group">
                                                                <input type="text" name="anx20_segundot_biometriah_doc" class="form-control" placeholder="Medico:">
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="form-group">
                                                                <input type="text" name="anx20_segundot_biometriah_fr" class="form-control datepicker" placeholder="Fecha:">
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="form-group">
                                                                <input type="text" name="anx20_segundot_biometriah_fp" class="form-control datepicker" placeholder="Fecha:">
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            EGO
                                                        </td>
                                                        <td>
                                                            <div class="form-group">
                                                                <input type="text" name="anx20_segundot_ego_doc" class="form-control" placeholder="Medico:">
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="form-group">
                                                                <input type="text" name="anx20_segundot_ego_fr" class="form-control datepicker" placeholder="Fecha:">
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="form-group">
                                                                <input type="text" name="anx20_segundo_ego_fp" class="form-control datepicker" placeholder="Fecha:">
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <th class=" text-primary" align="left">
                                                        Tercer Trimestre:
                                                    </th>
                                                    <tr>
                                                        <td>
                                                            Cultivos Especiales
                                                        </td>
                                                        <td>
                                                            <div class="form-group">
                                                                <input type="text" name="anx20_tercert_cespeciales_doc" class="form-control" placeholder="Medico:">
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="form-group">
                                                                <input type="text" name="anx20_tercert_cespeciales_fr" class="form-control datepicker" placeholder="Fecha:">
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="form-group">
                                                                <input type="text" name="anx20_tercert_cespeciales_fp" class="form-control datepicker" placeholder="Fecha:">
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            Urocultivo
                                                        </td>
                                                        <td>
                                                            <div class="form-group">
                                                                <input type="text" name="anx20_tercert_urocultivo_doc" class="form-control" placeholder="Medico:">
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="form-group">
                                                                <input type="text" name="anx20_tercert_urocultivo_fr" class="form-control datepicker" placeholder="Fecha:">
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="form-group">
                                                                <input type="text" name="anx20_tercert_urocultivo_fp" class="form-control datepicker" placeholder="Fecha:">
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            Perfil Preoperatorio
                                                        </td>
                                                        <td>
                                                            <div class="form-group">
                                                                <input type="text" name="anx20_tercert_pp_doc" class="form-control" placeholder="Medico:">
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="form-group">
                                                                <input type="text" name="anx20_tercert_pp_fr" class="form-control datepicker" placeholder="Fecha:">
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="form-group">
                                                                <input type="text" name="anx20_tercert_pp_fp" class="form-control datepicker" placeholder="Fecha:">
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>

                                                        </td>
                                                        <td>
                                                            <div class="form-group">
                                                                <input type="text" class="form-control" placeholder="">
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="form-group">
                                                                <input type="text" class="form-control" placeholder="">
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="form-group">
                                                                <input type="text" class="form-control" placeholder="">
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>

                                                        </td>
                                                        <td>
                                                            <div class="form-group">
                                                                <input type="text" class="form-control" placeholder="">
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="form-group">
                                                                <input type="text" class="form-control" placeholder="">
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="form-group">
                                                                <input type="text" class="form-control" placeholder="">
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                        <div class="card-footer ml-auto mr-auto">
                                            <button type="submit" class="btn btn-rose">{{ __('Guardar ') }}</button>
                                        </div>

                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
            </form>

        </div>
    </div>
</div>
<!-- Fin Modal -->

<!-- Modal -->
<div class="modal fade docs-anexo21-modal-lg" tabindex="-1" id="anexos" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h3 class="modal-title" id="exampleModalLongTitle">Anexo 21</h3>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close" style="color: red">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form method="post"  action="{{url('procesoanexo21/add') }}" autocomplete="off" class="form-horizontal">
                @csrf


                    <div class="content">
                        <div class="container-fluid">
                            <div class="card ">
                                <div class="card-body ">
                                    <div class="tab-content tab-space">
                                        <!-- primer metodo del panel-->
                                        <div class="tab-pane  active show" id="link1">
                                            <div class="row">

                                                <label class="col-sm-12 col-form-label text-center
                ">Check-up Diagnostico prenatal</label>


                                                <label class="col-sm-12 col-form-label text-center
                ">Marcadores sericos de primer trimestre</label>

                                                <label class="col-sm-2 col-form-label">Doctora que realiza el procedimiento </label>
                                                <div class="col-sm-4">
                                                    <div class="form-group bmd-form-group">
                                                        <input class="form-control" type="text" name="anx21_marcadores_doc" id="" required="true" aria-required="true">
                                                    </div>
                                                </div>

                                                <label class="col-sm-2 col-form-label">Fecha en que se realiza el estudio</label>
                                                <div class="col-sm-4">
                                                    <div class="form-group bmd-form-group">
                                                        <input class="form-control" type="date" name="anx21_marcadores_fr" id="" required="true" aria-required="true">
                                                    </div>
                                                </div>

                                                <label class="col-sm-4 col-form-label">Fecha programada para el estudio</label>
                                                <div class="col-sm-8">
                                                    <div class="form-group bmd-form-group">
                                                        <input class="form-control" type="date" name="anx21_marcadores_fp" id="" required="true" aria-required="true">
                                                    </div>
                                                </div>



                                                <label class="col-sm-12 col-form-label text-center
                ">USG Primer Trimestre</label>

                                                <label class="col-sm-2 col-form-label">Doctora que realiza el procedimiento </label>
                                                <div class="col-sm-4">
                                                    <div class="form-group bmd-form-group">
                                                        <input class="form-control" type="text" name="anx21_usg_primer_doc" id="" required="true" aria-required="true">
                                                    </div>
                                                </div>

                                                <label class="col-sm-2 col-form-label">Fecha en que se realiza el estudio</label>
                                                <div class="col-sm-4">
                                                    <div class="form-group bmd-form-group">
                                                        <input class="form-control" type="date" name="anx21_usg_primer_fr" id="" required="true" aria-required="true">
                                                    </div>
                                                </div>

                                                <label class="col-sm-4 col-form-label">Fecha programada para el estudio</label>
                                                <div class="col-sm-8">
                                                    <div class="form-group bmd-form-group">
                                                        <input class="form-control" type="date" name="anx21_usg_primer_fp" id="" required="true" aria-required="true">
                                                    </div>
                                                </div>

                                                <label class="col-sm-12 col-form-label text-center
                ">USG Segundo Trimestre</label>

                                                <label class="col-sm-2 col-form-label">Doctora que realiza el procedimiento </label>
                                                <div class="col-sm-4">
                                                    <div class="form-group bmd-form-group">
                                                        <input class="form-control" type="text" name="anx21_usg_segundo_doc" id="" required="true" aria-required="true">
                                                    </div>
                                                </div>

                                                <label class="col-sm-2 col-form-label">Fecha en que se realiza el estudio</label>
                                                <div class="col-sm-4">
                                                    <div class="form-group bmd-form-group">
                                                        <input class="form-control" type="date" name="anx21_usg_segundo_fr" id="" required="true" aria-required="true">
                                                    </div>
                                                </div>

                                                <label class="col-sm-4 col-form-label">Fecha programada para el estudio</label>
                                                <div class="col-sm-8">
                                                    <div class="form-group bmd-form-group">
                                                        <input class="form-control" type="date" name="anx21_usg_segundo_fp" id="" required="true" aria-required="true">
                                                    </div>
                                                </div>


                                                <label class="col-sm-12 col-form-label text-center
                ">USG Tercer Trimestre</label>

                                                <label class="col-sm-2 col-form-label">Doctora que realiza el procedimiento </label>
                                                <div class="col-sm-4">
                                                    <div class="form-group bmd-form-group">
                                                        <input class="form-control" type="text" name="anx21_usg_tercer_doc" id="" required="true" aria-required="true">
                                                    </div>
                                                </div>

                                                <label class="col-sm-2 col-form-label">Fecha en que se realiza el estudio</label>
                                                <div class="col-sm-4">
                                                    <div class="form-group bmd-form-group">
                                                        <input class="form-control" type="date" name="anx21_usg_tercer_fr" id="" required="true" aria-required="true">
                                                    </div>
                                                </div>

                                                <label class="col-sm-4 col-form-label">Fecha programada para el estudio</label>
                                                <div class="col-sm-8">
                                                    <div class="form-group bmd-form-group">
                                                        <input class="form-control" type="date" name="anx21_usg_tercer_fp" id="" required="true" aria-required="true">
                                                    </div>
                                                </div>

                                                <label class="col-sm-12 col-form-label text-center
                ">Consulta Nutricion</label>

                                                <label class="col-sm-2 col-form-label">Doctora que realiza el procedimiento </label>
                                                <div class="col-sm-4">
                                                    <div class="form-group bmd-form-group">
                                                        <input class="form-control" type="text" name="anx21_nutri_doc" id="" required="true" aria-required="true">
                                                    </div>
                                                </div>

                                                <label class="col-sm-2 col-form-label">Fecha en que se realiza el estudio</label>
                                                <div class="col-sm-4">
                                                    <div class="form-group bmd-form-group">
                                                        <input class="form-control" type="date" name="anx21_nutri_fr" id="" required="true" aria-required="true">
                                                    </div>
                                                </div>

                                                <label class="col-sm-4 col-form-label">Fecha programada para el estudio</label>
                                                <div class="col-sm-8">
                                                    <div class="form-group bmd-form-group">
                                                        <input class="form-control" type="date" name="anx21_nutri_fp" id="" required="true" aria-required="true">
                                                    </div>
                                                </div>



                                                <label class="col-sm-12 col-form-label text-center
                ">Opcion ecocardiograma fetal</label>

                                                <label class="col-sm-2 col-form-label">Doctora que realiza el procedimiento </label>
                                                <div class="col-sm-4">
                                                    <div class="form-group bmd-form-group">
                                                        <input class="form-control" type="text" name="anx21_ecocar_doc" id="" required="true" aria-required="true">
                                                    </div>
                                                </div>

                                                <label class="col-sm-2 col-form-label">Fecha en que se realiza el estudio</label>
                                                <div class="col-sm-4">
                                                    <div class="form-group bmd-form-group">
                                                        <input class="form-control" type="date" name="anx21_ecocar_fr" id="" required="true" aria-required="true">
                                                    </div>
                                                </div>

                                                <label class="col-sm-4 col-form-label">Fecha programada para el estudio</label>
                                                <div class="col-sm-8">
                                                    <div class="form-group bmd-form-group">
                                                        <input class="form-control" type="date" name="anx21_ecocar_fp" id="" required="true" aria-required="true">
                                                    </div>
                                                </div>
                                                <div class="row justify-content-center">
                                                    <button type="submit" class="btn btn-fill btn-rose">Guardar</button>
                                                </div>
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
</div>
<!-- Fin Modal -->
<!-- Modal -->
<div class="modal fade docs-anexo22-modal-lg" tabindex="-1" id="anexos" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h3 class="modal-title" id="exampleModalLongTitle">Anexo 22</h3>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close" style="color: red">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form method="post"  action="{{url('procesoanexo22/add') }}" autocomplete="off" class="form-horizontal">
                @csrf


                    <div class="content">
                        <div class="container-fluid">

                            <div class="row justify-content-center" >
                                <div class="col-md-18">
                                    <div class="card">
                                        <div class="card-header card-header-icon card-header-rose">
                                            <div class="card-icon">
                                                <i class="material-icons">assignment</i>
                                            </div>
                                            <h4 class="card-title ">CHECK-UP CONVENIO INSTITUCIONAL</h4>
                                        </div>
                                        <div class="card-body">
                                            <div class="table">
                                                <table class="table">
                                                    <thead class=" text-primary">
                                                    <th>
                                                        PROCEDIMIENTO
                                                    </th>
                                                    <th>
                                                        DR(A)/ENF.QUE REALIZA
                                                        <br />EL PROCEDIMIENTO
                                                    </th>
                                                    <th>
                                                        FECHA EN QUE SE REALIZO
                                                        <br />EL ESTUDIO
                                                    </th>
                                                    <th>
                                                        FECHA PROGRAMADA PARA
                                                        <br />EL ESTUDIO
                                                    </th>
                                                    </thead>
                                                    <tbody>
                                                    <tr>
                                                        <td>
                                                            USG Mamario
                                                        </td>
                                                        <td>
                                                            <div class="form-group">
                                                                <input type="text" name="anx22_USG_Mamario_Doc" class="form-control" placeholder="Medico:">
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="form-group">
                                                                <input type="text" name="anx22_USG_Mamario_FR" class="form-control datepicker" placeholder="Fecha:">
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="form-group">
                                                                <input type="text" name="anx22_USG_Mamario_FP" class="form-control datepicker" placeholder="Fecha:">
                                                            </div>
                                                        </td>

                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            USG Pélvico
                                                        </td>
                                                        <td>
                                                            <div class="form-group">
                                                                <input type="text" name="anx22_USG_Pelvico_doc" class="form-control" placeholder="Medico:">
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="form-group">
                                                                <input type="text" name="anx22_USG_Pelvico_FR" class="form-control datepicker" placeholder="Fecha:">
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="form-group">
                                                                <input type="text" name="anx22_USG_Pelvico_FP" class="form-control datepicker" placeholder="Fecha:">
                                                            </div>
                                                        </td>

                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            Papanicolau
                                                        </td>
                                                        <td>
                                                            <div class="form-group">
                                                                <input type="text" name="anx22_Papanicolau_Doc" class="form-control" placeholder="Medico:">
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="form-group">
                                                                <input type="text" name="anx22_Papanicolau_FR" class="form-control datepicker" placeholder="Fecha:">
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="form-group">
                                                                <input type="text"  name="anx22_Papanicolau_FP" class="form-control datepicker" placeholder="Fecha:">
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            Colposcopía
                                                        </td>
                                                        <td>
                                                            <div class="form-group">
                                                                <input type="text" name="anx22_Colposcopia_Doc" class="form-control" placeholder="Medico:">
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="form-group">
                                                                <input type="text" name="anx22_Colposcopia_FR" class="form-control datepicker" placeholder="Fecha:">
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="form-group">
                                                                <input type="text" name="anx22_Colposcopia_FP" class="form-control datepicker" placeholder="Fecha:">
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                        <div class="card-footer ml-auto mr-auto">
                                            <button type="submit" class="btn btn-rose">{{ __('Guardar ') }}</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
            </form>

        </div>
    </div>
</div>
<!-- Fin Modal -->

<!-- Modal -->
<div class="modal fade docs-anexo23-modal-lg" tabindex="-1" id="anexos" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h3 class="modal-title" id="exampleModalLongTitle">Anexo 23</h3>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close" style="color: red">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>


            <div class="content">
                <div class="container-fluid">
                    <h1>No hay Anexo</h1>
                </div>
            </div>

        </div>
    </div>
</div>
<!-- Fin Modal -->

<!-- Modal -->
<div class="modal fade docs-anexo24-modal-lg" tabindex="-1" id="anexos" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h3 class="modal-title" id="exampleModalLongTitle">Anexo 24</h3>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close" style="color: red">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form method="post"  action="{{url('procesoanexo24/add') }}" autocomplete="off" class="form-horizontal">
                @csrf


                    <div class="content">
                        <div class="container-fluid">
                            <div class="row justify-content-center">
                                <div class="col-md-12">
                                    <div class="card ">
                                        <div class="card-header card-header-rose card-header-icon">
                                            <div class="card-icon">
                                                <i class="material-icons">battery_std</i>
                                            </div>
                                            <h4 class="card-title">ESPERMATOBIOSCOPIA DIRECTA</h4>
                                        </div>
                                        <br>
                                        <div class="row justify-content-end">
                                            <label class="col-sm-1 col-form-label">fecha:</label>
                                            <div class="col-sm-2">
                                                <div class="form-group">
                                                    <input type="text" class="form-control datepicker" value="" name="anx24_fecha">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row justify-content-end">
                                            <label class="col-sm-1 col-form-label">EBD:</label>
                                            <div class="col-sm-2">
                                                <div class="form-group">
                                                    <input type="text" name="anx24_EDB" class="form-control" placeholder="-">
                                                </div>
                                            </div>
                                        </div>
                                        <br>
                                        <div class="card-body ">
                                            <div class="row">
                                                <div class="col-md-9">
                                                    <label for="examplePaciente" class="bmd-label-floating">Paciente</label>
                                                    <input type="text" name="anx24_paciente" class="form-control" id="examplePaciente">
                                                </div>

                                                <div class="col-md-1 mr-auto ml-auto">
                                                    <label for="exampleEdad" class="bmd-label-floating">Edad</label>
                                                    <input type="text" name="anx24_edad1" class="form-control" id="exampleEdad">
                                                </div>
                                            </div>


                                            <div class="row">
                                                <div class="col-md-9">
                                                    <label for="exampleEmail" class="bmd-label-floating">Conyugue</label>
                                                    <input type="text" name="anx24_conyuge" class="form-control" id="exampleEmail">
                                                </div>

                                                <div class="col-md-1 mr-auto ml-auto">
                                                    <label for="exampleEmail" class="bmd-label-floating">Edad</label>
                                                    <input type="text" name="anx24_edad2" class="form-control" id="exampleEmail">
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-9">
                                                    <label for="exampleEmail" class="bmd-label-floating">Médico Solicitante</label>
                                                    <input type="text" name="anx24_medico" class="form-control" id="exampleEmail">
                                                </div>
                                            </div>
                                            <br><br><br>
                                            <div class="card-header card-header-rose card-header-icon">
                                                <div class="card-icon ">
                                                    <i class="material-icons">battery_std</i>
                                                </div>
                                                <div class="row ">
                                                    <h4 class="card-title">OBSERVACIONES</h4>
                                                </div>
                                            </div>



                                            <div class="row">
                                                <label class="col-sm-3 col-form-label label-checkbox">¿FUMADOR? </label>
                                                <div class="col-sm-1">
                                                    <div class="form-group bmd-form-group">
                                                        <div class="form-check">
                                                            <label class="form-check-label">
                                                                <input class="form-check-input" type="radio" name="anx24_fumador" value="si"> SI<span class="circle">
                        <span class="check"></span></span>
                                                            </label>
                                                        </div>
                                                        <div class="form-check">
                                                            <label class="form-check-label">
                                                                <input class="form-check-input" type="radio" name="anx24_fumador" value="no"> NO<span class="circle">
                        <span class="check"></span></span>
                                                            </label>
                                                        </div>
                                                    </div>

                                                </div>
                                                <label class="col-sm-2 col-form-label">FRECUENCIA:</label>
                                                <div class="col-sm-2">
                                                    <div class="form-group">
                                                        <input type="text" name="anx24_fumador_fre" class="form-control" placeholder="">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <label class="col-sm-3 col-form-label label-checkbox">¿MEDICAMENTOS? </label>
                                                <div class="col-sm-1">
                                                    <div class="form-group bmd-form-group">
                                                        <div class="form-check">
                                                            <label class="form-check-label">
                                                                <input class="form-check-input" type="radio" name="anx24_medicamentos" value="SI"> SI<span class="circle">
                        <span class="check"></span></span>
                                                            </label>
                                                        </div>
                                                        <div class="form-check">
                                                            <label class="form-check-label">
                                                                <input class="form-check-input" type="radio" name="anx24_medicamentos" value="NO"> NO<span class="circle">
                        <span class="check"></span></span>
                                                            </label>
                                                        </div>
                                                    </div>

                                                </div>
                                                <label class="col-sm-2 col-form-label">¿CUALES?:</label>
                                                <div class="col-sm-2">
                                                    <div class="form-group">
                                                        <input type="text" name="anx24_cuales" class="form-control" placeholder="">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <label class="col-sm-2 col-form-label">Días de abstinencia sexual:</label>
                                                <div class="col-sm-6">
                                                    <div class="form-group">
                                                        <input type="text" name="anx24_dias_abs_sex" class="form-control" placeholder="# de dias/ # semanas">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <label class="col-sm-2 col-form-label">Modo de recoleccín:</label>
                                                <div class="col-sm-6">
                                                    <div class="form-group">
                                                        <input type="text" name="anx24_mod_reco" class="form-control" placeholder="Masturbación / coito interrupido">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <label class="col-sm-2 col-form-label">Hora de recolección:</label>
                                                <div class="col-sm-2">
                                                    <div class="form-group">
                                                        <input type="text" name="anx24_hora_re" class="form-control" placeholder="00:00 am / pm">
                                                    </div>
                                                </div>
                                                <label class="col-sm-2 col-form-label">Hora de proceso:</label>
                                                <div class="col-sm-2">
                                                    <div class="form-group">
                                                        <input type="text" name="anx24_hora_pro" class="form-control" placeholder="00:00 am / pm">
                                                    </div>
                                                </div>
                                            </div></br></br>
                                            <div class="row ">
                                                <h4 class="card-title">Análisis Macroscopico</h4>
                                            </div>
                                            <div class="row">
                                                <label class="col-sm-3 col-form-label label-checkbox">Coagulo Inicial </label>
                                                <div class="col-sm-1">
                                                    <div class="form-group bmd-form-group">
                                                        <div class="form-check">
                                                            <label class="form-check-label">
                                                                <input class="form-check-input" type="radio" name="anx24_coagulo_inicial" value="Presente"> Presente<span class="circle">
                        <span class="check"></span></span>
                                                            </label>
                                                        </div>
                                                        <div class="form-check">
                                                            <label class="form-check-label">
                                                                <input class="form-check-input" type="radio" name="anx24_coagulo_inicial" value="Ausente"> Ausente<span class="circle">
                        <span class="check"></span></span>
                                                            </label>
                                                        </div>
                                                    </div>

                                                </div>
                                                <label class="col-sm-2 col-form-label">Licuefacción:</label>
                                                <div class="col-sm-2">
                                                    <div class="form-group">
                                                        <input type="text" name="anx24_licuefaccion" class="form-control" placeholder="">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <label class="col-sm-2 col-form-label">Viscosidad:</label>
                                                <div class="col-sm-2">
                                                    <div class="form-group">
                                                        <input type="text" name="anx24_viscosidad" class="form-control" placeholder="">
                                                    </div>
                                                </div>
                                                <label class="col-sm-2 col-form-label">Aspecto:</label>
                                                <div class="col-sm-2">
                                                    <div class="form-group">
                                                        <input type="text" name="anx24_aspecto" class="form-control" placeholder="">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <label class="col-sm-2 col-form-label">Volumen:</label>
                                                <div class="col-sm-2">
                                                    <div class="form-group">
                                                        <input type="text" name="anx24_volumen" class="form-control" placeholder="">
                                                    </div>
                                                </div>
                                                <label class="col-sm-2 col-form-label">PH:</label>
                                                <div class="col-sm-2">
                                                    <div class="form-group">
                                                        <input type="text" name="anx24_PH" class="form-control" placeholder="">
                                                    </div>
                                                </div>
                                            </div>
                                            </br></br>
                                            <div class="row ">
                                                <h4 class="card-title">Análisis Microscopico</h4>
                                            </div>
                                            <div class="row">
                                                <label class="col-sm-2 col-form-label">Concetración:</label>
                                                <div class="col-sm-2">
                                                    <div class="form-group">
                                                        <input type="text" name="anx24_concetracion" class="form-control" placeholder="00:00 am / pm">
                                                    </div>
                                                </div>
                                                <label class="col-sm-2 col-form-label">Hora de proceso:</label>
                                                <div class="col-sm-2">
                                                    <div class="form-group">
                                                        <input type="text" name="anx24_hp" class="form-control" placeholder="00:00 am / pm">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <label class="col-sm-2 col-form-label">Movilidad A:</label>
                                                <div class="col-sm-1">
                                                    <div class="form-group">
                                                        <input type="text" name="anx24_movi_a" class="form-control" placeholder="">
                                                    </div>
                                                </div>
                                                <label class="col-sm-1 col-form-label">B:</label>
                                                <div class="col-sm-1">
                                                    <div class="form-group">
                                                        <input type="text" name="anx24_movi_b" class="form-control" placeholder="">
                                                    </div>
                                                </div>
                                                <label class="col-sm-1 col-form-label">C:</label>
                                                <div class="col-sm-1">
                                                    <div class="form-group">
                                                        <input type="text" name="anx24_movi_c" class="form-control" placeholder="">
                                                    </div>
                                                </div>
                                                <label class="col-sm-1 col-form-label">D:</label>
                                                <div class="col-sm-1">
                                                    <div class="form-group">
                                                        <input type="text" name="anx24_movi_d" class="form-control" placeholder="">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <label class="col-sm-2 col-form-label">Indice de Modavilidad (A+B):</label>
                                                <div class="col-sm-2">
                                                    <div class="form-group">
                                                        <input type="text" name="anx24_indi_movi_ab" class="form-control" placeholder="%">
                                                    </div>
                                                </div>
                                                <label class="col-sm-2 col-form-label">Movilidad Total (A+B+C):</label>
                                                <div class="col-sm-2">
                                                    <div class="form-group">
                                                        <input type="text" name="anx24_movi_total_abc" class="form-control" placeholder="%">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <label class="col-sm-2 col-form-label">Morfología:</label>
                                                <div class="col-sm-2">
                                                    <div class="form-group">
                                                        <input type="text" name="anx24_morfo" class="form-control" placeholder="%">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <label class="col-sm-2 col-form-label">Defectos de cabeza:</label>
                                                <div class="col-sm-2">
                                                    <div class="form-group">
                                                        <input type="text" name="anx24_defectos_cabeza" class="form-control" placeholder="%">
                                                    </div>
                                                </div>
                                                <label class="col-sm-2 col-form-label">Defectos de pieza media:</label>
                                                <div class="col-sm-2">
                                                    <div class="form-group">
                                                        <input type="text" name="anx24_defectos_pieza_meda" class="form-control" placeholder="%">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <label class="col-sm-2 col-form-label">Defectos de cola:</label>
                                                <div class="col-sm-2">
                                                    <div class="form-group">
                                                        <input type="text" name="anx24_defectos_cola" class="form-control" placeholder="%">
                                                    </div>
                                                </div>
                                            </div>
                                            <br><br>
                                            <div class="row ">
                                                <h4 class="card-title">Celularidad</h4>
                                            </div>
                                            <div class="row">
                                                <label class="col-sm-2 col-form-label">Eritrocitos:</label>
                                                <div class="col-sm-2">
                                                    <div class="form-group">
                                                        <input type="text" name="anx24_eritrocitos" class="form-control" placeholder="x10/ml">
                                                    </div>
                                                </div>
                                                <label class="col-sm-2 col-form-label">Leucocitos:</label>
                                                <div class="col-sm-2">
                                                    <div class="form-group">
                                                        <input type="text" name="anx24_leucocitos" class="form-control" placeholder="%">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <label class="col-sm-2 col-form-label">Inmaduras:</label>
                                                <div class="col-sm-2">
                                                    <div class="form-group">
                                                        <input type="text" name="anx24_inmadura" class="form-control" placeholder="%">
                                                    </div>
                                                </div>
                                                <label class="col-sm-2 col-form-label">Epiteliales:</label>
                                                <div class="col-sm-2">
                                                    <div class="form-group">
                                                        <input type="text" name="anx24_epiteliales" class="form-control" placeholder="%">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <label class="col-sm-2 col-form-label">Bacterias:</label>
                                                <div class="col-sm-2">
                                                    <div class="form-group">
                                                        <input type="text" name="anx24_bacterias" class="form-control" placeholder="%">
                                                    </div>
                                                </div>
                                                <label class="col-sm-2 col-form-label">Cristales:</label>
                                                <div class="col-sm-2">
                                                    <div class="form-group">
                                                        <input type="text" name="anx24_cristales" class="form-control" placeholder="%">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <label class="col-sm-2 col-form-label">Aglutinacion / Agregación:</label>
                                                <div class="col-sm-2">
                                                    <div class="form-group">
                                                        <input type="text" name="anx24_aglu" class="form-control" placeholder="%">
                                                    </div>
                                                </div>
                                                <label class="col-sm-2 col-form-label">Residuos / Detritos:</label>
                                                <div class="col-sm-2">
                                                    <div class="form-group">
                                                        <input type="text" name="anx24_residuos" class="form-control" placeholder="%">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row ">
                                                <label class="col-sm-2 col-form-label"><small>Observaciones:</small></label>
                                                <div class="col-sm-9">
                                                    <div class="form-group{{ $errors->has('description') ? ' has-danger' : '' }}">
                                                        <textarea  rows="2" class="form-control{{ $errors->has('description') ? ' is-invalid' : '' }}" name="anx24_observaciones" id="input-description" type="text" placeholder=""  aria-required="true">{{ old('Exporacion Fisica:') }}</textarea>
                                                        @include('alerts.feedback', ['field' => 'description'])
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card-footer ml-auto mr-auto">
                                                <button type="submit" class="btn btn-rose">{{ __('Guardar ') }}</button>
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
</div>
<!-- Fin Modal -->

<!-- Modal -->
<div class="modal fade docs-anexo25-modal-lg" tabindex="-1" id="anexos" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h3 class="modal-title" id="exampleModalLongTitle">Anexo 25</h3>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close" style="color: red">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form method="post"  action="{{url('procesoanexo25/add') }}" autocomplete="off" class="form-horizontal">
                @csrf


                    <div class="content">
                        <div class="container-fluid">
                            <div class="col-md-12">
                                <div class="card">
                                    <div class="card-header card-header-rose card-header-icon">
                                        <div class="card-icon">
                                            <i class="material-icons">add_to_queue</i>
                                        </div>
                                        <h4 class="card-title">INSEMINACIÓN ARTIFICIAL HUMANA</h4>
                                    </div>
                                    <br><br>
                                    <div class="row justify-content-end">
                                        <div class="col-2">
                                            <div class="form-group form-group-lg-3">
                                                <label for="exampleEmail" class="bmd-label-floating">Fecha:</label>
                                                <input type="text" name="anx25_fecha"  class="form-control datepicker " id="exampleEmail" required>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row justify-content-end">
                                        <div class="col-2">
                                            <div class="form-group form-group-lg-3">
                                                <label for="exampleEmail" class="bmd-label-floating">IAH#:</label>
                                                <input type="text" name="anx25_IAH"  class="form-control " id="exampleEmail">
                                            </div>
                                        </div>
                                    </div><br>
                                    <div class="row justify-content-center">
                                        <div class="col-8">
                                            <div class="form-group form-group-lg-3">
                                                <label for="exampleEmail" class="bmd-label-floating">Paciente:</label>
                                                <input type="text" name="anx25_paciente"  class="form-control" id="exampleEmail" required>
                                            </div>
                                        </div>
                                        <div class="col-2">
                                            <div class="form-group form-group-lg-3">
                                                <label for="exampleEmail" class="bmd-label-floating">Edad:</label>
                                                <input type="text" name="anx25_edad"  class="form-control" id="exampleEmail">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row justify-content-center">
                                        <div class="col-8">
                                            <div class="form-group form-group-lg-3">
                                                <label for="exampleEmail" class="bmd-label-floating">Conyuge:</label>
                                                <input type="text" name="anx25_conyuge"  class="form-control" id="exampleEmail">
                                            </div>
                                        </div>
                                        <div class="col-2">
                                            <div class="form-group form-group-lg-3">
                                                <label for="exampleEmail" class="bmd-label-floating">Edad:</label>
                                                <input type="text" name="anx25_edad_2"  class="form-control" id="exampleEmail">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row justify-content-center">
                                        <div class="col-8">
                                            <div class="form-group form-group-lg-3">
                                                <label for="exampleEmail" class="bmd-label-floating">Dr. Solicitante:</label>
                                                <input type="text" name="anx25_Dr_solicitante"  class="form-control" id="exampleEmail">
                                            </div>
                                        </div>
                                        <div class="col-2">
                                            <div class="form-group form-group-lg-3">
                                                <input type="hidden"  class="form-control" id="exampleEmail">
                                            </div>
                                        </div>
                                    </div>
                                    <br><br>
                                    <div class="row justify-content-center">
                                        <h4>Observaciones:</h4>
                                    </div>
                                    <br>
                                    <div class="row justify-content-center">
                                        <label class="col-sm-3 col-form-label label-checkbox">¿FUMADOR? </label>
                                        <div class="col-sm-1">
                                            <div class="form-group bmd-form-group">
                                                <div class="form-check">
                                                    <label class="form-check-label">
                                                        <input class="form-check-input" type="radio" name="anx25_fumador" value="si"> SI<span class="circle">
                        <span class="check"></span></span>
                                                    </label>
                                                </div>
                                                <div class="form-check">
                                                    <label class="form-check-label">
                                                        <input class="form-check-input" type="radio" name="anx25_fumador" value="no"> NO<span class="circle">
                        <span class="check"></span></span>
                                                    </label>
                                                </div>
                                            </div>

                                        </div>
                                        <label class="col-sm-2 col-form-label">FRECUENCIA:</label>
                                        <div class="col-sm-2">
                                            <div class="form-group">
                                                <input type="text" name="anx25_fumador_fre" class="form-control" placeholder="">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row justify-content-center">

                                    </div>
                                    <div class="row justify-content-center">
                                        <label class="col-sm-3 col-form-label label-checkbox">¿MEDICAMENTOS? </label>
                                        <div class="col-sm-1">
                                            <div class="form-group bmd-form-group">
                                                <div class="form-check">
                                                    <label class="form-check-label">
                                                        <input class="form-check-input" type="radio" name="anx25_medicamentos" value="SI"> SI<span class="circle">
                        <span class="check"></span></span>
                                                    </label>
                                                </div>
                                                <div class="form-check">
                                                    <label class="form-check-label">
                                                        <input class="form-check-input" type="radio" name="anx25_medicamentos" value="NO"> NO<span class="circle">
                        <span class="check"></span></span>
                                                    </label>
                                                </div>
                                            </div>

                                        </div>
                                        <label class="col-sm-2 col-form-label">¿CUALES?:</label>
                                        <div class="col-sm-2">
                                            <div class="form-group">
                                                <input type="text" name="anx25_cuales" class="form-control" placeholder="">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row justify-content-center">
                                        <label class="col-sm-2 col-form-label">Días de abstinencia sexual:</label>
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <input type="text" name="anx25_dias_abs_sex" class="form-control" placeholder="# de dias/ # semanas">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row justify-content-center">
                                        <label class="col-sm-2 col-form-label">Modo de recoleccín:</label>
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <input type="text" name="anx25_mod_reco" class="form-control" placeholder="Masturbación / coito interrupido">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row justify-content-center">
                                        <label class="col-sm-2 col-form-label">Hora de recolección:</label>
                                        <div class="col-sm-2">
                                            <div class="form-group">
                                                <input type="text" name="anx25_hora_re" class="form-control" placeholder="00:00 am / pm">
                                            </div>
                                        </div>
                                        <label class="col-sm-2 col-form-label">Hora de proceso:</label>
                                        <div class="col-sm-2">
                                            <div class="form-group">
                                                <input type="text" name="anx25_hora_pro" class="form-control" placeholder="00:00 am / pm">
                                            </div>
                                        </div>
                                    </div>
                                    <br><br>
                                    <div class="row justify-content-center">
                                        <h4>Análisis Pre-capacitación:</h4>
                                    </div><br>
                                    <div class="row justify-content-center">
                                        <div class="col-5">
                                            <div class="form-group form-group-lg-3">
                                                <label for="exampleEmail" class="bmd-label-floating">Licuefacción:</label>
                                                <input type="text" name="anx25_licuefa"  class="form-control" id="exampleEmail">
                                            </div>
                                        </div>
                                        <div class="col-5">
                                            <div class="form-group form-group-lg-3">
                                                <label for="exampleEmail" class="bmd-label-floating">Viscosidad:</label>
                                                <input type="text" name="anx25_visco"  class="form-control" id="exampleEmail">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row justify-content-center">
                                        <div class="col-4">
                                            <div class="form-group form-group-lg-3">
                                                <label for="exampleEmail" class="bmd-label-floating">Volumen:</label>
                                                <input type="text" name="anx25_volumen"  class="form-control" id="exampleEmail">
                                            </div>
                                        </div>
                                        <div class="col-1">
                                            ml
                                        </div>
                                        <div class="col-4">
                                            <div class="form-group form-group-lg-3">
                                                <label for="exampleEmail" class="bmd-label-floating">Aspecto:</label>
                                                <input type="text" name="anx25_apecto"  class="form-control" id="exampleEmail">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row justify-content-center">
                                        <div class="col-4">
                                            <div class="form-group form-group-lg-3">
                                                <label for="exampleEmail" class="bmd-label-floating">Concetracion:</label>
                                                <input type="text" name="anx25_conce"  class="form-control" id="exampleEmail">
                                            </div>
                                        </div>
                                        <div class="col-1">
                                            x106/ml
                                        </div>
                                        <div class="col-4">
                                            <div class="form-group form-group-lg-3">
                                                <label for="exampleEmail" class="bmd-label-floating">Concentración total:</label>
                                                <input type="text" name="anx25_conce_total"  class="form-control" id="exampleEmail">
                                            </div>
                                        </div>
                                        <div class="col-2">
                                            millones
                                        </div>
                                    </div>
                                    <div class="row justify-content-center">
                                        <label class="col-sm-2 col-form-label">Movilidad A:</label>
                                        <div class="col-sm-1">
                                            <div class="form-group">
                                                <input type="text" name="anx25_movia_a" class="form-control" placeholder="">
                                            </div>
                                        </div>
                                        <label class="col-sm-1 col-form-label">B:</label>
                                        <div class="col-sm-1">
                                            <div class="form-group">
                                                <input type="text" name="anx25_movi_b" class="form-control" placeholder="">
                                            </div>
                                        </div>
                                        <label class="col-sm-1 col-form-label">C:</label>
                                        <div class="col-sm-1">
                                            <div class="form-group">
                                                <input type="text" name="anx25_movi_c" class="form-control" placeholder="">
                                            </div>
                                        </div>
                                        <label class="col-sm-1 col-form-label">D:</label>
                                        <div class="col-sm-1">
                                            <div class="form-group">
                                                <input type="text" name="anx25_movi_d" class="form-control" placeholder="">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row justify-content-center">
                                        <label class="col-sm-2 col-form-label">Indice de Modavilidad (A+B):</label>
                                        <div class="col-sm-2">
                                            <div class="form-group">
                                                <input type="text" name="anx25_movi_ab" class="form-control" placeholder="%">
                                            </div>
                                        </div>
                                        <label class="col-sm-2 col-form-label">Movilidad Total (A+B+C):</label>
                                        <div class="col-sm-2">
                                            <div class="form-group">
                                                <input type="text" name="anx25_movi_total_abc" class="form-control" placeholder="%">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row justify-content-between">
                                        <div class="col">
                                            <div class="form-group form-group-lg-3">
                                                <label for="exampleEmail" class="bmd-label-floating">Morfología:</label>
                                                <input type="text" name="anx25_morfo" class="form-control" placeholder="                                                         %">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row justify-content-between">
                                        <div class="col">
                                            <div class="form-group form-group-lg-3">
                                                <label for="exampleEmail" class="bmd-label-floating">Observaciones:</label>
                                                <input type="text" name="anx25_obser" class="form-control">
                                            </div>
                                        </div>
                                    </div>
                                    <br><br>
                                    <div class="row justify-content-center">
                                        <h4>Análisis Post-capacitación:</h4>
                                    </div><br>
                                    <div class="row justify-content-center">
                                        <div class="col-4">
                                            <div class="form-group form-group-lg-3">
                                                <label for="exampleEmail" class="bmd-label-floating">Volumen Final:</label>
                                                <input type="text" name="anx25_volumen_final"  class="form-control" id="exampleEmail">
                                            </div>
                                        </div>
                                        <div class="col-1">
                                            ml
                                        </div>
                                        <div class="col-4">
                                            <div class="form-group form-group-lg-3">
                                                <label for="exampleEmail" class="bmd-label-floating">Aspecto:</label>
                                                <input type="text" name="anx25_apecto_1"  class="form-control" id="exampleEmail">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row justify-content-center">
                                        <div class="col-4">
                                            <div class="form-group form-group-lg-3">
                                                <label for="exampleEmail" class="bmd-label-floating">Concetracion:</label>
                                                <input type="text" name="anx25_conce_1"  class="form-control" id="exampleEmail">
                                            </div>
                                        </div>
                                        <div class="col-1">
                                            x106/ml
                                        </div>
                                    </div>
                                    <div class="row justify-content-center">
                                        <label class="col-sm-2 col-form-label">Movilidad A:</label>
                                        <div class="col-sm-1">
                                            <div class="form-group">
                                                <input type="text" name="anx25_movia_a_1" class="form-control" placeholder="">
                                            </div>
                                        </div>
                                        <label class="col-sm-1 col-form-label">B:</label>
                                        <div class="col-sm-1">
                                            <div class="form-group">
                                                <input type="text" name="anx25_movi_b_1" class="form-control" placeholder="">
                                            </div>
                                        </div>
                                        <label class="col-sm-1 col-form-label">C:</label>
                                        <div class="col-sm-1">
                                            <div class="form-group">
                                                <input type="text" name="anx25_movi_c_1" class="form-control" placeholder="">
                                            </div>
                                        </div>
                                        <label class="col-sm-1 col-form-label">D:</label>
                                        <div class="col-sm-1">
                                            <div class="form-group">
                                                <input type="text" name="anx25_movi_d_1" class="form-control" placeholder="">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row justify-content-center">
                                        <label class="col-sm-2 col-form-label">Indice de Modavilidad (A+B):</label>
                                        <div class="col-sm-2">
                                            <div class="form-group">
                                                <input type="text" name="anx25_movi_ab_1" class="form-control" placeholder="%">
                                            </div>
                                        </div>
                                        <label class="col-sm-2 col-form-label">Movilidad Total (A+B+C):</label>
                                        <div class="col-sm-2">
                                            <div class="form-group">
                                                <input type="text" name="anx25_movi_total_abc_1" class="form-control" placeholder="%">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row justify-content-between">
                                        <div class="col">
                                            <div class="form-group form-group-lg-3">
                                                <label for="exampleEmail" class="bmd-label-floating">Morfología:</label>
                                                <input type="text" name="anx25_morfo_1" class="form-control" placeholder="                                                         %">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row justify-content-between">
                                        <div class="col">
                                            <div class="form-group form-group-lg-3">
                                                <label for="exampleEmail" class="bmd-label-floating">Observaciones:</label>
                                                <input type="text" name="anx25_obser_1" class="form-control">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-footer ml-auto mr-auto">
                                        <button type="submit" class="btn btn-rose">{{ __('Guardar ') }}</button>
                                    </div>


                                </div>
                            </div>
                        </div>
                    </div>
            </form>

        </div>
    </div>
</div>
<!-- Fin Modal -->

<!-- Modal -->
<div class="modal fade docs-anexo26-modal-lg" tabindex="-1" id="anexos" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h3 class="modal-title" id="exampleModalLongTitle">Anexo 26</h3>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close" style="color: red">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form method="post"  action="{{url('procesoanexo26/add') }}" autocomplete="off" class="form-horizontal">
                @csrf


                    <div class="content">
                        <div class="container-fluid">
                            <div class="row justify-content-center">
                                <div class="col-md-12">
                                    <div class="card ">
                                        <div class="card-header card-header-rose card-header-icon">
                                            <div class="card-icon">
                                                <i class="material-icons">battery_std</i>
                                            </div>
                                            <h4 class="card-title">ORINA POST-EYACULADO</h4>
                                        </div>
                                        <br>
                                        <div class="row justify-content-end">
                                            <label class="col-sm-1 col-form-label">fecha:</label>
                                            <div class="col-sm-2">
                                                <div class="form-group">
                                                    <input type="text" class="form-control datepicker" value="" name="anx26_fecha">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row justify-content-end">
                                            <label class="col-sm-1 col-form-label">EBD:</label>
                                            <div class="col-sm-2">
                                                <div class="form-group">
                                                    <input type="text" name="anx26_EDB" class="form-control" placeholder="-">
                                                </div>
                                            </div>
                                        </div>
                                        <br>
                                        <div class="card-body ">


                                            <div class="row">
                                                <div class="col-md-10">
                                                    <label for="examplePaciente" class="bmd-label-floating">Paciente</label>
                                                    <input type="text" name="anx26_paciente" class="form-control" id="examplePaciente">
                                                </div>

                                                <div class="col-md-1 mr-auto ml-auto">
                                                    <label for="exampleEdad" class="bmd-label-floating">Edad</label>
                                                    <input type="text" name="anx26_edad1" class="form-control" id="exampleEdad">
                                                </div>
                                            </div>


                                            <div class="row">
                                                <div class="col-md-10">
                                                    <label for="exampleEmail" class="bmd-label-floating">Conyugue</label>
                                                    <input type="text" name="anx26_conyuge" class="form-control" id="exampleEmail">
                                                </div>

                                                <div class="col-md-1 mr-auto ml-auto">
                                                    <label for="exampleEmail" class="bmd-label-floating">Edad</label>
                                                    <input type="text" name="anx26_edad2" class="form-control" id="exampleEmail">
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-10">
                                                    <label for="exampleEmail" class="bmd-label-floating">Médico Solicitante</label>
                                                    <input type="text" name="anx26_medico" class="form-control" id="exampleEmail">
                                                </div>
                                            </div>


                                        </div>

                                    </div>
                                </div>
                            </div>
                            <div class="row justify-content-center">
                                <div class="col-md-12">
                                    <div class="card ">
                                        <div class="card-header card-header-rose card-header-icon">
                                            <div class="card-icon ">
                                                <i class="material-icons">battery_std</i>
                                            </div>
                                            <div class="row ">
                                                <h4 class="card-title">OBSERVACIONES</h4>
                                            </div>
                                        </div>
                                        <div class="card-body ">
                                            <div class="form-group">
                                                <div class="row">
                                                    <label class="col-sm-3 col-form-label label-checkbox">¿MEDICAMENTOS? </label>
                                                    <div class="col-sm-1">
                                                        <div class="form-group bmd-form-group">
                                                            <div class="form-check">
                                                                <label class="form-check-label">
                                                                    <input class="form-check-input" type="radio" name="anx26_medicamentos" value="option1"> SI<span class="circle">
                        <span class="check"></span></span>
                                                                </label>
                                                            </div>
                                                            <div class="form-check">
                                                                <label class="form-check-label">
                                                                    <input class="form-check-input" type="radio" name="anx26_medicamentos" value="option1"> NO<span class="circle">
                        <span class="check"></span></span>
                                                                </label>
                                                            </div>
                                                        </div>

                                                    </div>
                                                    <label class="col-sm-2 col-form-label">¿CUALES?:</label>
                                                    <div class="col-sm-2">
                                                        <div class="form-group">
                                                            <input type="text" name="anx26_cuales" class="form-control" placeholder="">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <label class="col-sm-2 col-form-label">Días de abstinencia sexual:</label>
                                                    <div class="col-sm-6">
                                                        <div class="form-group">
                                                            <input type="text" name="anx26_dias_abs_sex" class="form-control" placeholder="# de dias/ # semanas">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <label class="col-sm-2 col-form-label">Hora de recolección:</label>
                                                    <div class="col-sm-2">
                                                        <div class="form-group">
                                                            <input type="text" name="anx26_hora_re" class="form-control" placeholder="00:00 am / pm">
                                                        </div>
                                                    </div>
                                                    <label class="col-sm-2 col-form-label">Hora de proceso:</label>
                                                    <div class="col-sm-2">
                                                        <div class="form-group">
                                                            <input type="text" name="anx26_hora_proce" class="form-control" placeholder="00:00 am / pm">
                                                        </div>
                                                    </div>
                                                </div></br></br>
                                                <div class="row ">
                                                    <h4 class="card-title">Análisis Macroscopico</h4>
                                                </div>
                                                <div class="row">
                                                    <label class="col-sm-2 col-form-label">pH:</label>
                                                    <div class="col-sm-2">
                                                        <div class="form-group">
                                                            <input type="text" name="anx26_ph" class="form-control" placeholder="">
                                                        </div>
                                                    </div>
                                                    <label class="col-sm-2 col-form-label">Aspecto:</label>
                                                    <div class="col-sm-2">
                                                        <div class="form-group">
                                                            <input type="text" name="anx26_aspecto" class="form-control" placeholder="">
                                                        </div>
                                                    </div>
                                                </div>
                                                </br></br>
                                                <div class="row ">
                                                    <h4 class="card-title">Análisis Microscopico</h4>
                                                </div>
                                                <div class="row">
                                                    <label class="col-sm-2 col-form-label">Concetración:</label>
                                                    <div class="col-sm-2">
                                                        <div class="form-group">
                                                            <input type="text" name="anx26_concetracion" class="form-control" placeholder="00:00 am / pm">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <label class="col-sm-2 col-form-label">Movilidad A:</label>
                                                    <div class="col-sm-1">
                                                        <div class="form-group">
                                                            <input type="text" name="anx26_movi_a" class="form-control" placeholder="">
                                                        </div>
                                                    </div>
                                                    <label class="col-sm-1 col-form-label">B:</label>
                                                    <div class="col-sm-1">
                                                        <div class="form-group">
                                                            <input type="text" name="anx26_movi_b" class="form-control" placeholder="">
                                                        </div>
                                                    </div>
                                                    <label class="col-sm-1 col-form-label">C:</label>
                                                    <div class="col-sm-1">
                                                        <div class="form-group">
                                                            <input type="text" name="anx26_movi_c" class="form-control" placeholder="">
                                                        </div>
                                                    </div>
                                                    <label class="col-sm-1 col-form-label">D:</label>
                                                    <div class="col-sm-1">
                                                        <div class="form-group">
                                                            <input type="text" name="anx26_movi_d" class="form-control" placeholder="">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <label class="col-sm-2 col-form-label">Movilidad Total(A+B+C):</label>
                                                    <div class="col-sm-2">
                                                        <div class="form-group">
                                                            <input type="text" name="anx26_movi_abc" class="form-control" placeholder="%">
                                                        </div>
                                                    </div>
                                                    <label class="col-sm-2 col-form-label">Modavilidad Progresiva(A+B):</label>
                                                    <div class="col-sm-2">
                                                        <div class="form-group">
                                                            <input type="text" name="anx26_movi_pro_ab" class="form-control" placeholder="%">
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="row">
                                                    <label class="col-sm-2 col-form-label">Eritrocitos:</label>
                                                    <div class="col-sm-2">
                                                        <div class="form-group">
                                                            <input type="text" name="anx26_eritro" class="form-control" placeholder="x10/ml">
                                                        </div>
                                                    </div>
                                                    <label class="col-sm-2 col-form-label">Leucocitos:</label>
                                                    <div class="col-sm-2">
                                                        <div class="form-group">
                                                            <input type="text" name="anx26_leucocitos" class="form-control" placeholder="%">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <label class="col-sm-2 col-form-label">Inmaduras:</label>
                                                    <div class="col-sm-2">
                                                        <div class="form-group">
                                                            <input type="text" name="anx26_inmaduras" class="form-control" placeholder="%">
                                                        </div>
                                                    </div>
                                                    <label class="col-sm-2 col-form-label">Epiteliales:</label>
                                                    <div class="col-sm-2">
                                                        <div class="form-group">
                                                            <input type="text" name="anx26_epiteliales" class="form-control" placeholder="%">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <label class="col-sm-2 col-form-label">Bacterias:</label>
                                                    <div class="col-sm-2">
                                                        <div class="form-group">
                                                            <input type="text" name="anx26_bacterias" class="form-control" placeholder="%">
                                                        </div>
                                                    </div>
                                                    <label class="col-sm-2 col-form-label">Cristales:</label>
                                                    <div class="col-sm-2">
                                                        <div class="form-group">
                                                            <input type="text" name="anx26_cristales" class="form-control" placeholder="%">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <label class="col-sm-2 col-form-label">Residuos / Detritos:</label>
                                                    <div class="col-sm-2">
                                                        <div class="form-group">
                                                            <input type="text" name="anx26_rdtritos" class="form-control" placeholder="%">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row ">
                                                    <label class="col-sm-2 col-form-label"><small>Observaciones adicionales:</small></label>
                                                    <div class="col-sm-9">
                                                        <div class="form-group{{ $errors->has('description') ? ' has-danger' : '' }}">
                                                            <textarea  rows="2" class="form-control{{ $errors->has('description') ? ' is-invalid' : '' }}" name="anx26_observa" id="input-description" type="text" placeholder=""  aria-required="true">{{ old('Exporacion Fisica:') }}</textarea>
                                                            @include('alerts.feedback', ['field' => 'description'])
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="card-footer ml-auto mr-auto">
                                                    <button type="submit" class="btn btn-rose">{{ __('Guardar ') }}</button>
                                                </div>


                                            </div>
                                        </div>
                                    </div>
                                    <!-- fin de seguno elemento -->


                                </div>
                            </div>
                        </div>
                    </div>
            </form>

        </div>
    </div>
</div>
<!-- Fin Modal -->

<!-- Modal -->
<div class="modal fade docs-anexo27-modal-lg" tabindex="-1" id="anexos" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h3 class="modal-title" id="exampleModalLongTitle">Anexo 27</h3>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close" style="color: red">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form method="post"  action="{{url('procesoanexo27/add') }}" autocomplete="off" class="form-horizontal">
                @csrf


                    <div class="content">
                        <div class="container-fluid">
                            <div class="col-md-12">
                                <div class="card">
                                    <div class="card-header card-header-rose card-header-icon">
                                        <div class="card-icon">
                                            <i class="material-icons">add_to_queue</i>
                                        </div>
                                        <h4 class="card-title">PRUEBA DE CAPACITACIÓN ESPERMÁTICA</h4>
                                    </div>
                                    <br><br>
                                    <div class="row justify-content-end">
                                        <div class="col-2">
                                            <div class="form-group form-group-lg-3">
                                                <label for="exampleEmail" class="bmd-label-floating">Fecha:</label>
                                                <input type="text" name="anx27_fecha"  class="form-control datepicker " id="exampleEmail" required>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row justify-content-end">
                                        <div class="col-2">
                                            <div class="form-group form-group-lg-3">
                                                <label for="exampleEmail" class="bmd-label-floating">IAH#:</label>
                                                <input type="text" name="anx27_IAH"  class="form-control " id="exampleEmail">
                                            </div>
                                        </div>
                                    </div><br>
                                    <div class="row justify-content-center">
                                        <div class="col-8">
                                            <div class="form-group form-group-lg-3">
                                                <label for="exampleEmail" class="bmd-label-floating">Paciente:</label>
                                                <input type="text" name="anx27_paciente"  class="form-control" id="exampleEmail" required>
                                            </div>
                                        </div>
                                        <div class="col-2">
                                            <div class="form-group form-group-lg-3">
                                                <label for="exampleEmail" class="bmd-label-floating">Edad:</label>
                                                <input type="text" name="anx27_edad"  class="form-control" id="exampleEmail">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row justify-content-center">
                                        <div class="col-8">
                                            <div class="form-group form-group-lg-3">
                                                <label for="exampleEmail" class="bmd-label-floating">Conyuge:</label>
                                                <input type="text" name="anx27_conyuge"  class="form-control" id="exampleEmail">
                                            </div>
                                        </div>
                                        <div class="col-2">
                                            <div class="form-group form-group-lg-3">
                                                <label for="exampleEmail" class="bmd-label-floating">Edad:</label>
                                                <input type="text" name="anx27_edad_2"  class="form-control" id="exampleEmail">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row justify-content-center">
                                        <div class="col-8">
                                            <div class="form-group form-group-lg-3">
                                                <label for="exampleEmail" class="bmd-label-floating">Dr. Solicitante:</label>
                                                <input type="text" name="anx27_Dr_solicitante"  class="form-control" id="exampleEmail">
                                            </div>
                                        </div>
                                        <div class="col-2">
                                            <div class="form-group form-group-lg-3">
                                                <input type="hidden"  class="form-control" id="exampleEmail">
                                            </div>
                                        </div>
                                    </div>
                                    <br><br>
                                    <div class="row justify-content-center">
                                        <h4>Observaciones:</h4>
                                    </div>
                                    <br>
                                    <div class="row justify-content-center">
                                        <label class="col-sm-3 col-form-label label-checkbox">¿FUMADOR? </label>
                                        <div class="col-sm-1">
                                            <div class="form-group bmd-form-group">
                                                <div class="form-check">
                                                    <label class="form-check-label">
                                                        <input class="form-check-input" type="radio" name="anx27_fumador" value="si"> SI<span class="circle">
                        <span class="check"></span></span>
                                                    </label>
                                                </div>
                                                <div class="form-check">
                                                    <label class="form-check-label">
                                                        <input class="form-check-input" type="radio" name="anx27_fumador" value="no"> NO<span class="circle">
                        <span class="check"></span></span>
                                                    </label>
                                                </div>
                                            </div>

                                        </div>
                                        <label class="col-sm-2 col-form-label">FRECUENCIA:</label>
                                        <div class="col-sm-2">
                                            <div class="form-group">
                                                <input type="text" name="anx27_fumador_fre" class="form-control" placeholder="">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row justify-content-center">

                                    </div>
                                    <div class="row justify-content-center">
                                        <label class="col-sm-3 col-form-label label-checkbox">¿MEDICAMENTOS? </label>
                                        <div class="col-sm-1">
                                            <div class="form-group bmd-form-group">
                                                <div class="form-check">
                                                    <label class="form-check-label">
                                                        <input class="form-check-input" type="radio" name="anx27_medicamentos" value="SI"> SI<span class="circle">
                        <span class="check"></span></span>
                                                    </label>
                                                </div>
                                                <div class="form-check">
                                                    <label class="form-check-label">
                                                        <input class="form-check-input" type="radio" name="anx27_medicamentos" value="NO"> NO<span class="circle">
                        <span class="check"></span></span>
                                                    </label>
                                                </div>
                                            </div>

                                        </div>
                                        <label class="col-sm-2 col-form-label">¿CUALES?:</label>
                                        <div class="col-sm-2">
                                            <div class="form-group">
                                                <input type="text" name="anx27_cuales" class="form-control" placeholder="">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row justify-content-center">
                                        <label class="col-sm-2 col-form-label">Días de abstinencia sexual:</label>
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <input type="text" name="anx27_dias_abs_sex" class="form-control" placeholder="# de dias/ # semanas">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row justify-content-center">
                                        <label class="col-sm-2 col-form-label">Modo de recoleccín:</label>
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <input type="text" name="anx27_mod_reco" class="form-control" placeholder="Masturbación / coito interrupido">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row justify-content-center">
                                        <label class="col-sm-2 col-form-label">Hora de recolección:</label>
                                        <div class="col-sm-2">
                                            <div class="form-group">
                                                <input type="text" name="anx27_hora_re" class="form-control" placeholder="00:00 am / pm">
                                            </div>
                                        </div>
                                        <label class="col-sm-2 col-form-label">Hora de proceso:</label>
                                        <div class="col-sm-2">
                                            <div class="form-group">
                                                <input type="text" name="anx27_hora_pro" class="form-control" placeholder="00:00 am / pm">
                                            </div>
                                        </div>
                                    </div>
                                    <br><br>
                                    <div class="row justify-content-center">
                                        <h4>Análisis Pre-capacitación:</h4>
                                    </div><br>
                                    <div class="row justify-content-center">
                                        <div class="col-5">
                                            <div class="form-group form-group-lg-3">
                                                <label for="exampleEmail" class="bmd-label-floating">Licuefacción:</label>
                                                <input type="text" name="anx27_licuefa"  class="form-control" id="exampleEmail">
                                            </div>
                                        </div>
                                        <div class="col-5">
                                            <div class="form-group form-group-lg-3">
                                                <label for="exampleEmail" class="bmd-label-floating">Viscosidad:</label>
                                                <input type="text" name="anx27_visco"  class="form-control" id="exampleEmail">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row justify-content-center">
                                        <div class="col-4">
                                            <div class="form-group form-group-lg-3">
                                                <label for="exampleEmail" class="bmd-label-floating">Volumen:</label>
                                                <input type="text" name="anx27_volumen"  class="form-control" id="exampleEmail">
                                            </div>
                                        </div>
                                        <div class="col-1">
                                            ml
                                        </div>
                                        <div class="col-4">
                                            <div class="form-group form-group-lg-3">
                                                <label for="exampleEmail" class="bmd-label-floating">Aspecto:</label>
                                                <input type="text" name="anx27_apecto"  class="form-control" id="exampleEmail">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row justify-content-center">
                                        <div class="col-4">
                                            <div class="form-group form-group-lg-3">
                                                <label for="exampleEmail" class="bmd-label-floating">Concetracion:</label>
                                                <input type="text" name="anx27_conce"  class="form-control" id="exampleEmail">
                                            </div>
                                        </div>
                                        <div class="col-1">
                                            x106/ml
                                        </div>
                                        <div class="col-4">
                                            <div class="form-group form-group-lg-3">
                                                <label for="exampleEmail" class="bmd-label-floating">Concentración total:</label>
                                                <input type="text" name="anx27_conce_total"  class="form-control" id="exampleEmail">
                                            </div>
                                        </div>
                                        <div class="col-2">
                                            millones
                                        </div>
                                    </div>
                                    <div class="row justify-content-center">
                                        <label class="col-sm-2 col-form-label">Movilidad A:</label>
                                        <div class="col-sm-1">
                                            <div class="form-group">
                                                <input type="text" name="anx27_movia_a" class="form-control" placeholder="">
                                            </div>
                                        </div>
                                        <label class="col-sm-1 col-form-label">B:</label>
                                        <div class="col-sm-1">
                                            <div class="form-group">
                                                <input type="text" name="anx27_movi_b" class="form-control" placeholder="">
                                            </div>
                                        </div>
                                        <label class="col-sm-1 col-form-label">C:</label>
                                        <div class="col-sm-1">
                                            <div class="form-group">
                                                <input type="text" name="anx27_movi_c" class="form-control" placeholder="">
                                            </div>
                                        </div>
                                        <label class="col-sm-1 col-form-label">D:</label>
                                        <div class="col-sm-1">
                                            <div class="form-group">
                                                <input type="text" name="anx27_movi_d" class="form-control" placeholder="">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row justify-content-center">
                                        <label class="col-sm-2 col-form-label">Indice de Modavilidad (A+B):</label>
                                        <div class="col-sm-2">
                                            <div class="form-group">
                                                <input type="text" name="anx27_movi_ab" class="form-control" placeholder="%">
                                            </div>
                                        </div>
                                        <label class="col-sm-2 col-form-label">Movilidad Total (A+B+C):</label>
                                        <div class="col-sm-2">
                                            <div class="form-group">
                                                <input type="text" name="anx27_movi_total_abc" class="form-control" placeholder="%">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row justify-content-between">
                                        <div class="col">
                                            <div class="form-group form-group-lg-3">
                                                <label for="exampleEmail" class="bmd-label-floating">Morfología:</label>
                                                <input type="text" name="anx27_morfo" class="form-control" placeholder="                                                         %">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row justify-content-between">
                                        <div class="col">
                                            <div class="form-group form-group-lg-3">
                                                <label for="exampleEmail" class="bmd-label-floating">Observaciones:</label>
                                                <input type="text" name="anx27_obser" class="form-control">
                                            </div>
                                        </div>
                                    </div>
                                    <br><br>
                                    <div class="row justify-content-center">
                                        <h4>Análisis Post-capacitación:</h4>
                                    </div><br>
                                    <div class="row justify-content-center">
                                        <div class="col-4">
                                            <div class="form-group form-group-lg-3">
                                                <label for="exampleEmail" class="bmd-label-floating">Volumen Final:</label>
                                                <input type="text" name="anx27_volumen_final"  class="form-control" id="exampleEmail">
                                            </div>
                                        </div>
                                        <div class="col-1">
                                            ml
                                        </div>
                                        <div class="col-4">
                                            <div class="form-group form-group-lg-3">
                                                <label for="exampleEmail" class="bmd-label-floating">Aspecto:</label>
                                                <input type="text" name="anx27_apecto_1"  class="form-control" id="exampleEmail">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row justify-content-center">
                                        <div class="col-4">
                                            <div class="form-group form-group-lg-3">
                                                <label for="exampleEmail" class="bmd-label-floating">Concetracion:</label>
                                                <input type="text" name="anx27_conce_1"  class="form-control" id="exampleEmail">
                                            </div>
                                        </div>
                                        <div class="col-1">
                                            x106/ml
                                        </div>
                                    </div>
                                    <div class="row justify-content-center">
                                        <label class="col-sm-2 col-form-label">Movilidad A:</label>
                                        <div class="col-sm-1">
                                            <div class="form-group">
                                                <input type="text" name="anx27_movia_a_1" class="form-control" placeholder="">
                                            </div>
                                        </div>
                                        <label class="col-sm-1 col-form-label">B:</label>
                                        <div class="col-sm-1">
                                            <div class="form-group">
                                                <input type="text" name="anx27_movi_b_1" class="form-control" placeholder="">
                                            </div>
                                        </div>
                                        <label class="col-sm-1 col-form-label">C:</label>
                                        <div class="col-sm-1">
                                            <div class="form-group">
                                                <input type="text" name="anx27_movi_c_1" class="form-control" placeholder="">
                                            </div>
                                        </div>
                                        <label class="col-sm-1 col-form-label">D:</label>
                                        <div class="col-sm-1">
                                            <div class="form-group">
                                                <input type="text" name="anx27_movi_d_1" class="form-control" placeholder="">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row justify-content-center">
                                        <label class="col-sm-2 col-form-label">Indice de Modavilidad (A+B):</label>
                                        <div class="col-sm-2">
                                            <div class="form-group">
                                                <input type="text" name="anx27_movi_ab_1" class="form-control" placeholder="%">
                                            </div>
                                        </div>
                                        <label class="col-sm-2 col-form-label">Movilidad Total (A+B+C):</label>
                                        <div class="col-sm-2">
                                            <div class="form-group">
                                                <input type="text" name="anx27_movi_total_abc_1" class="form-control" placeholder="%">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row justify-content-between">
                                        <div class="col">
                                            <div class="form-group form-group-lg-3">
                                                <label for="exampleEmail" class="bmd-label-floating">Morfología:</label>
                                                <input type="text" name="anx27_morfo_1" class="form-control" placeholder="                                                         %">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row justify-content-between">
                                        <div class="col">
                                            <div class="form-group form-group-lg-3">
                                                <label for="exampleEmail" class="bmd-label-floating">Observaciones:</label>
                                                <input type="text" name="anx27_obser_1" class="form-control">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-footer ml-auto mr-auto">
                                        <button type="submit" class="btn btn-rose">{{ __('Guardar ') }}</button>
                                    </div>


                                </div>
                            </div>
                        </div>
                    </div>
            </form>

        </div>
    </div>
</div>
<!-- Fin Modal -->

<!-- Modal -->
<div class="modal fade docs-anexo28-modal-lg" tabindex="-1" id="anexos" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h3 class="modal-title" id="exampleModalLongTitle">Anexo 28</h3>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close" style="color: red">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form method="post"  action="{{url('procesoanexo28/add') }}" autocomplete="off" class="form-horizontal">
                @csrf


                    <div class="content">
                        <div class="container-fluid">
                            <!-- Inicio de elemento -->
                            <div class="row justify-content-center">
                                <div class="col-md-12">
                                    <div class="card ">
                                        <div class="card-header card-header-rose card-header-icon">
                                            <div class="card-icon">
                                                <i class="material-icons">battery_std</i>
                                            </div>
                                            <h4 class="card-title">PRUEBA DE HOST</h4>
                                        </div>
                                        <br>
                                        <div class="row justify-content-end">
                                            <label class="col-sm-1 col-form-label">fecha:</label>
                                            <div class="col-sm-2">
                                                <div class="form-group">
                                                    <input type="text" class="form-control datepicker" value="" name="anx28_fechaP">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row justify-content-end">
                                            <label class="col-sm-1 col-form-label">EBD:</label>
                                            <div class="col-sm-2">
                                                <div class="form-group">
                                                    <input type="text" name="anx28_EBD" class="form-control" placeholder="-">
                                                </div>
                                            </div>
                                        </div>
                                        <br>
                                        <div class="card-body ">
                                            <form method="#" action="#">

                                                <div class="row">
                                                    <div class="col-md-10">
                                                        <label for="examplePaciente" class="bmd-label-floating">Paciente</label>
                                                        <input type="text" name="anx28_paciente" class="form-control" id="examplePaciente">
                                                    </div>

                                                    <div class="col-md-1 mr-auto ml-auto">
                                                        <label for="exampleEdad" class="bmd-label-floating">Edad</label>
                                                        <input type="text" name="anx28_edad_p" class="form-control" id="exampleEdad">
                                                    </div>
                                                </div>


                                                <div class="row">
                                                    <div class="col-md-10">
                                                        <label for="exampleEmail" class="bmd-label-floating">Conyugue</label>
                                                        <input type="text" name="anx28_conyuge" class="form-control" id="exampleEmail">
                                                    </div>

                                                    <div class="col-md-1 mr-auto ml-auto">
                                                        <label for="exampleEmail" class="bmd-label-floating">Edad</label>
                                                        <input type="text" name="anx28_edad_conyu" class="form-control" id="exampleEmail">
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-10">
                                                        <label for="exampleEmail" class="bmd-label-floating">Médico Solicitante</label>
                                                        <input type="text" name="anx28_medico" class="form-control" id="exampleEmail">
                                                    </div>
                                                </div>


                                        </div>

                                    </div>
                                </div>
                            </div>

                            <!-- fin de elemento -->
                            <!-- segundo elemento -->
                            <div class="row justify-content-center">
                                <div class="col-md-12">
                                    <div class="card ">
                                        <div class="card-header card-header-rose card-header-icon">
                                            <div class="card-icon ">
                                                <i class="material-icons">battery_std</i>
                                            </div>
                                            <div class="row ">
                                                <h4 class="card-title">OBSERVACIONES</h4>
                                            </div>
                                        </div>
                                        <div class="card-body ">
                                            <div class="form-group">
                                                <div class="row">
                                                    <label class="col-sm-3 col-form-label label-checkbox">¿FUMADOR? </label>
                                                    <div class="col-sm-1">
                                                        <div class="form-group bmd-form-group">
                                                            <div class="form-check">
                                                                <label class="form-check-label">
                                                                    <input class="form-check-input" type="radio" name="anx28_fumador" value="option1"> SI<span class="circle">
                        <span class="check"></span></span>
                                                                </label>
                                                            </div>
                                                            <div class="form-check">
                                                                <label class="form-check-label">
                                                                    <input class="form-check-input" type="radio" name="anx28_fumador" value="option1"> NO<span class="circle">
                        <span class="check"></span></span>
                                                                </label>
                                                            </div>
                                                        </div>

                                                    </div>
                                                    <label class="col-sm-2 col-form-label">FRECUENCIA:</label>
                                                    <div class="col-sm-2">
                                                        <div class="form-group">
                                                            <input type="text" name="anx28_fuma_frecuen" class="form-control" placeholder="">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <label class="col-sm-3 col-form-label label-checkbox">¿MEDICAMENTOS? </label>
                                                    <div class="col-sm-1">
                                                        <div class="form-group bmd-form-group">
                                                            <div class="form-check">
                                                                <label class="form-check-label">
                                                                    <input class="form-check-input" type="radio" name="anx28_medicamento" value="option1"> SI<span class="circle">
                        <span class="check"></span></span>
                                                                </label>
                                                            </div>
                                                            <div class="form-check">
                                                                <label class="form-check-label">
                                                                    <input class="form-check-input" type="radio" name="anx28_medicamento" value="option1"> NO<span class="circle">
                        <span class="check"></span></span>
                                                                </label>
                                                            </div>
                                                        </div>

                                                    </div>
                                                    <label class="col-sm-2 col-form-label">¿CUALES?:</label>
                                                    <div class="col-sm-2">
                                                        <div class="form-group">
                                                            <input type="text" name="anx28_medi_cuales" class="form-control" placeholder="">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <label class="col-sm-2 col-form-label">Días de abstinencia sexual:</label>
                                                    <div class="col-sm-6">
                                                        <div class="form-group">
                                                            <input type="text" name="anx28_abs_sexual" class="form-control" placeholder="# de dias/ # semanas">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <label class="col-sm-2 col-form-label">Modo de recoleccín:</label>
                                                    <div class="col-sm-6">
                                                        <div class="form-group">
                                                            <input type="text" name="anx28_modo_recole" class="form-control" placeholder="Masturbación / coito interrupido">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <label class="col-sm-2 col-form-label">Hora de recolección:</label>
                                                    <div class="col-sm-2">
                                                        <div class="form-group">
                                                            <input type="text" name="anx28_hora_reco" class="form-control" placeholder="00:00 am / pm">
                                                        </div>
                                                    </div>
                                                    <label class="col-sm-2 col-form-label">Hora de proceso:</label>
                                                    <div class="col-sm-2">
                                                        <div class="form-group">
                                                            <input type="text" name="anx28_hora_proceso" class="form-control" placeholder="00:00 am / pm">
                                                        </div>
                                                    </div>
                                                </div></br></br>
                                                <div class="row ">
                                                    <h4 class="card-title">Análisis Microscopico</h4>
                                                </div>
                                                <div class="row">
                                                    <label class="col-sm-3 col-form-label label-checkbox">Coagulo inicial</label>
                                                    <div class="col-sm-1">
                                                        <div class="form-group bmd-form-group">
                                                            <div class="form-check">
                                                                <label class="form-check-label">
                                                                    <input class="form-check-input" type="radio" name="anx28_coagulo_ini" value="option1"> Presente<span class="circle">
                        <span class="check"></span></span>
                                                                </label>
                                                            </div>
                                                            <div class="form-check">
                                                                <label class="form-check-label">
                                                                    <input class="form-check-input" type="radio" name="anx28_coagulo_ini" value="option1"> Ausente<span class="circle">
                        <span class="check"></span></span>
                                                                </label>
                                                            </div>
                                                        </div>

                                                    </div>
                                                    <label class="col-sm-2 col-form-label">Licuefacción:</label>
                                                    <div class="col-sm-2">
                                                        <div class="form-group">
                                                            <input type="text" name="anx28_licuefa" class="form-control" placeholder="">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <label class="col-sm-2 col-form-label">Viscosidad:</label>
                                                    <div class="col-sm-2">
                                                        <div class="form-group">
                                                            <input type="text" name="anx28_visco" class="form-control" placeholder="">
                                                        </div>
                                                    </div>
                                                    <label class="col-sm-2 col-form-label">Aspecto:</label>
                                                    <div class="col-sm-2">
                                                        <div class="form-group">
                                                            <input type="text" name="anx28_aspeto" class="form-control" placeholder="">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <label class="col-sm-2 col-form-label">Volumen:</label>
                                                    <div class="col-sm-2">
                                                        <div class="form-group">
                                                            <input type="text" name="anx28_volumen" class="form-control" placeholder="%">
                                                        </div>
                                                    </div>
                                                    <label class="col-sm-2 col-form-label">pH:</label>
                                                    <div class="col-sm-2">
                                                        <div class="form-group">
                                                            <input type="text" name="anx28_ph" class="form-control" placeholder="%">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <label class="col-sm-2 col-form-label">HOST:</label>
                                                    <div class="col-sm-2">
                                                        <div class="form-group">
                                                            <input type="text" name="anx28_host" class="form-control" placeholder="%">
                                                        </div>
                                                    </div>
                                                </div>


                                                <br><br>

                                                <div class="row ">
                                                    <label class="col-sm-2 col-form-label"><small>Observaciones adicionales:</small></label>
                                                    <div class="col-sm-9">
                                                        <div class="form-group{{ $errors->has('description') ? ' has-danger' : '' }}">
                                                            <textarea  rows="2" class="form-control{{ $errors->has('description') ? ' is-invalid' : '' }}" name="anx28_observa" id="input-description" type="text" placeholder=""  aria-required="true">{{ old('Exporacion Fisica:') }}</textarea>
                                                            @include('alerts.feedback', ['field' => 'description'])
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="card-footer ml-auto mr-auto">
                                                    <button type="submit" class="btn btn-rose">{{ __('Guardar ') }}</button>
                                                </div>


                                            </div>
                                        </div>
                                    </div>
                                    <!-- fin de seguno elemento -->


                                </div>
                            </div>
                        </div>
                    </div>
            </form>

        </div>
    </div>
</div>
<!-- Fin Modal -->

<!-- Modal -->
<div class="modal fade docs-anexo29-modal-lg" tabindex="-1" id="anexos" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h3 class="modal-title" id="exampleModalLongTitle">Anexo 29 al Anexo 33</h3>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close" style="color: red">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
 <form method="post"  action="{{url('procesoanexo29/add') }}" autocomplete="off" class="form-horizontal">
                @csrf

            <div class="content">
                <div class="container-fluid">


                    <!-- Inicio de elemento -->
                    <div class="card ">
                        <div class="card-body ">
                            <div class="tab-content tab-space">
                                <!-- primer metodo del panel-->
                                <div class="tab-pane  active show" id="link1">
                                    <div class="row">



                                        <label class="col-sm-2 col-form-label">Hora de recoleccion de mestra</label>
                                        <div class="col-sm-4">
                                            <div class="form-group bmd-form-group">
                                                <input class="form-control" type="text" name="anx29_horamuestra" id="" required="true" aria-required="true">
                                            </div>
                                        </div>

                                        <label class="col-sm-2 col-form-label">Fecha del estudio</label>
                                        <div class="col-sm-4">
                                            <div class="form-group bmd-form-group">
                                                <input class="form-control" type="text" name="anx29_fecha_estu" id="" required="true" aria-required="true">
                                            </div>
                                        </div>


                                        <label class="col-sm-2 col-form-label">Hora de procesado de la muestra</label>
                                        <div class="col-sm-4">
                                            <div class="form-group bmd-form-group">
                                                <input class="form-control" type="text" name="anx29_hora_proce_mue" id="" required="true" aria-required="true">
                                            </div>
                                        </div>

                                        <label class="col-sm-2 col-form-label">Fecha de procesado</label>
                                        <div class="col-sm-4">
                                            <div class="form-group bmd-form-group">
                                                <input class="form-control" type="text" name="anx29_fecha_proce" id="" required="true" aria-required="true">
                                            </div>
                                        </div><br><br><br>

                                        <h3 class="col-sm-12  text-center"> ESPERMATOBIOSCOPIA DIRECTA</h3>



                                        <label size="8" class="col-sm-12 col-form-label text-center
                ">Análisis Macroscópico</label>

                                        <label class="col-sm-6 col-form-label text-center
                ">Parámetro Evaluado</label>
                                        <label class="col-sm-6 col-form-label text-center
                ">Valores de Referencia</label>


                                        <label class="col-sm-2 col-form-label">Dias de abstinencia sexual</label>
                                        <div class="col-sm-4">
                                            <div class="form-group bmd-form-group">
                                                <input class="form-control" type="text" name="anx29_dias_abs_sexual" id="" required="true" aria-required="true">
                                            </div>
                                        </div>
                                        <label class="col-sm-6 col-form-label text-center
                ">2-7 Dias</label>

                                        <label class="col-sm-2 col-form-label">Coagulo inicial</label>
                                        <div class="col-sm-4">
                                            <div class="form-group bmd-form-group">
                                                <input class="form-control" type="text" name="anx29_coagulo_ini" id="" required="true" aria-required="true">
                                            </div>
                                        </div>
                                        <label class="col-sm-6 col-form-label text-center
                ">presente</label>

                                        <label class="col-sm-2 col-form-label">Licuefacción</label>
                                        <div class="col-sm-4">
                                            <div class="form-group bmd-form-group">
                                                <input class="form-control" type="text" name="anx29_licuefaccion" id="" required="true" aria-required="true">
                                            </div>
                                        </div>
                                        <label class="col-sm-6 col-form-label text-center
                ">20-60 min</label>

                                        <label class="col-sm-2 col-form-label">Viscosidad</label>
                                        <div class="col-sm-4">
                                            <div class="form-group bmd-form-group">
                                                <input class="form-control" type="text" name="anx29_viscosidad" id="" required="true" aria-required="true">
                                            </div>
                                        </div>
                                        <label class="col-sm-6 col-form-label text-center
                ">Normal(Filamento < 2cm)</label>

                                        <label class="col-sm-2 col-form-label">Volumen</label>
                                        <div class="col-sm-4">
                                            <div class="form-group bmd-form-group">
                                                <input class="form-control" type="text" name="anx29_volumen" id="" required="true" aria-required="true">
                                            </div>
                                        </div>
                                        <label class="col-sm-6 col-form-label text-center
                ">1.5 - 6 ml</label>


                                        <label class="col-sm-2 col-form-label">Aspecto</label>
                                        <div class="col-sm-4">
                                            <div class="form-group bmd-form-group">
                                                <input class="form-control" type="text" name="anx29_aspecto" id="" required="true" aria-required="true">
                                            </div>
                                        </div>
                                        <label class="col-sm-6 col-form-label text-center
                ">Amarillento / Gris opalecente / Blanquecino</label>


                                        <label class="col-sm-2 col-form-label">PH</label>
                                        <div class="col-sm-4">
                                            <div class="form-group bmd-form-group">
                                                <input class="form-control" type="text" name="anx29_PH" id="" required="true" aria-required="true">
                                            </div>
                                        </div>
                                        <label class="col-sm-6 col-form-label text-center
                "> 7.2</label>




                                        <label class="col-sm-12 col-form-label text-center
                ">Análisis Microscópico</label>

                                        <label class="col-sm-6 col-form-label text-center
                ">Parámetro Evaluado</label>
                                        <label class="col-sm-6 col-form-label text-center
                ">Valores de Referencia</label>


                                        <label class="col-sm-2 col-form-label">Concentración espermática por mililitro</label>
                                        <div class="col-sm-4">
                                            <div class="form-group bmd-form-group">
                                                <input class="form-control" type="text" name="anx29_conce_esper" id="" required="true" aria-required="true">
                                            </div>
                                        </div>
                                        <label class="col-sm-6 col-form-label text-center
                ">15 X 10 ml</label>

                                        <label class="col-sm-2 col-form-label">Concentración espermática total</label>
                                        <div class="col-sm-4">
                                            <div class="form-group bmd-form-group">
                                                <input class="form-control" type="text" name="anx29_conce_esper_total" id="" required="true" aria-required="true">
                                            </div>
                                        </div>
                                        <label class="col-sm-6 col-form-label text-center
                ">39 millones</label>

                                        <label class="col-sm-2 col-form-label">Movilidad Total (A+B+C)</label>
                                        <div class="col-sm-4">
                                            <div class="form-group bmd-form-group">
                                                <input class="form-control" type="text" name="anx29_movi_total_abc" id="" required="true" aria-required="true">
                                            </div>
                                        </div>
                                        <label class="col-sm-6 col-form-label text-center
                ">40%</label>

                                        <label class="col-sm-2 col-form-label">Movilidad Progresiva (A+B+C)</label>
                                        <div class="col-sm-4">
                                            <div class="form-group bmd-form-group">
                                                <input class="form-control" type="text" name="anx29_movi_proge_abc" id="" required="true" aria-required="true">
                                            </div>
                                        </div>
                                        <label class="col-sm-6 col-form-label text-center
                ">32%</label>

                                        <label class="col-sm-2 col-form-label">Volumen</label>
                                        <div class="col-sm-4">
                                            <div class="form-group bmd-form-group">
                                                <input class="form-control" type="text" name="anx29_volumen" id="" required="true" aria-required="true">
                                            </div>
                                        </div>
                                        <label class="col-sm-6 col-form-label text-center
                ">1.5 - 6 ml</label>


                                        <label class="col-sm-2 col-form-label">Morfilogia(Normales)</label>
                                        <div class="col-sm-4">
                                            <div class="form-group bmd-form-group">
                                                <input class="form-control" type="text" name="anx29_morfi" id="" required="true" aria-required="true">
                                            </div>
                                        </div>
                                        <label class="col-sm-6 col-form-label text-center
                ">4%</label>


                                        <label class="col-sm-2 col-form-label">Viabilidad</label>
                                        <div class="col-sm-4">
                                            <div class="form-group bmd-form-group">
                                                <input class="form-control" type="text" name="anx29_viabilidad" id="" required="true" aria-required="true">
                                            </div>
                                        </div>
                                        <label class="col-sm-6 col-form-label text-center
                "> 58%</label>




                                        <label class="col-sm-12 col-form-label text-center
                ">Defectos morfológicos</label>

                                        <label class="col-sm-12 col-form-label text-center
                ">Tipo de efecto</label>
                                        <label class="col-sm-12 col-form-label text-center
                "></label>


                                        <label class="col-sm-2 col-form-label">Defectos en cabeza</label>
                                        <div class="col-sm-4">
                                            <div class="form-group bmd-form-group">
                                                <input class="form-control" type="text" name="anx29_defectos_cabeza" id="" required="true" aria-required="true">
                                            </div>
                                        </div>
                                        <label class="col-sm-6 col-form-label text-center
                ">La suma de los defectos puede ser > 100%</label>

                                        <label class="col-sm-2 col-form-label">Defectos en pieza medica</label>
                                        <div class="col-sm-4">
                                            <div class="form-group bmd-form-group">
                                                <input class="form-control" type="text" name="anx29_defectos_medica" id="" required="true" aria-required="true">
                                            </div>
                                        </div>
                                        <label class="col-sm-6 col-form-label text-center
                ">debido a que un espermatozoide puede</label>

                                        <label class="col-sm-2 col-form-label">Defectos en colas</label>
                                        <div class="col-sm-4">
                                            <div class="form-group bmd-form-group">
                                                <input class="form-control" type="text" name="anx29_defectos_colas" id="" required="true" aria-required="true">
                                            </div>
                                        </div>
                                        <label class="col-sm-6 col-form-label text-center
                ">presentar más de un defecto morfológico</label>




                                        <label class="col-sm-12 col-form-label text-center
                ">Celularidad y otros</label>

                                        <label class="col-sm-6 col-form-label text-center
                ">Parámetro Evaluado</label>
                                        <label class="col-sm-6 col-form-label text-center
                ">Valores de Referencia</label>


                                        <label class="col-sm-2 col-form-label">Eritrocitos</label>
                                        <div class="col-sm-4">
                                            <div class="form-group bmd-form-group">
                                                <input class="form-control" type="text" name="anx29_Eritro" id="" required="true" aria-required="true">
                                            </div>
                                        </div>
                                        <label class="col-sm-6 col-form-label text-center
                ">0 X 10 ml</label>

                                        <label class="col-sm-2 col-form-label">Leucocitos</label>
                                        <div class="col-sm-4">
                                            <div class="form-group bmd-form-group">
                                                <input class="form-control" type="text" name="anx29_leucocitos" id="" required="true" aria-required="true">
                                            </div>
                                        </div>
                                        <label class="col-sm-6 col-form-label text-center
                ">1 - 2 x 10 ml</label>

                                        <label class="col-sm-2 col-form-label">Inmaduras</label>
                                        <div class="col-sm-4">
                                            <div class="form-group bmd-form-group">
                                                <input class="form-control" type="text" name="anx29_inmaduras" id="" required="true" aria-required="true">
                                            </div>
                                        </div>
                                        <label class="col-sm-6 col-form-label text-center
                ">1 x 10 ml</label>

                                        <label class="col-sm-2 col-form-label">Epiteliales</label>
                                        <div class="col-sm-4">
                                            <div class="form-group bmd-form-group">
                                                <input class="form-control" type="text" name="anx29_epiteliales" id="" required="true" aria-required="true">
                                            </div>
                                        </div>
                                        <label class="col-sm-6 col-form-label text-center
                ">1 x 10 ml</label>

                                        <label class="col-sm-2 col-form-label">Bacterias</label>
                                        <div class="col-sm-4">
                                            <div class="form-group bmd-form-group">
                                                <input class="form-control" type="text" name="anx29_bacterias" id="" required="true" aria-required="true">
                                            </div>
                                        </div>
                                        <label class="col-sm-6 col-form-label text-center
                ">-/++</label>


                                        <label class="col-sm-2 col-form-label">Cristales</label>
                                        <div class="col-sm-4">
                                            <div class="form-group bmd-form-group">
                                                <input class="form-control" type="text" name="anx29_cristales" id="" required="true" aria-required="true">
                                            </div>
                                        </div>
                                        <label class="col-sm-6 col-form-label text-center
                ">ausentes</label>


                                        <label class="col-sm-2 col-form-label">Aglutinación</label>
                                        <div class="col-sm-4">
                                            <div class="form-group bmd-form-group">
                                                <input class="form-control" type="text" name="anx29_agluti" id="" required="true" aria-required="true">
                                            </div>
                                        </div>
                                        <label class="col-sm-6 col-form-label text-center
                ">0%</label>

                                        <label class="col-sm-2 col-form-label">Agregación</label>
                                        <div class="col-sm-4">
                                            <div class="form-group bmd-form-group">
                                                <input class="form-control" type="text" name="anx29_agregacion" id="" required="true" aria-required="true">
                                            </div>
                                        </div>
                                        <label class="col-sm-6 col-form-label text-center
                ">0%</label>

                                        <label class="col-sm-2 col-form-label">Residuos / Detritos</label>
                                        <div class="col-sm-4">
                                            <div class="form-group bmd-form-group">
                                                <input class="form-control" type="text" name="anx29_resi_detri" id="" required="true" aria-required="true">
                                            </div>
                                        </div>
                                        <label class="col-sm-6 col-form-label text-center
                ">Escasos</label>




                                        <label class="col-sm-12 col-form-label text-center
                ">PRUEBA HIPO-OSMÓTICA(HOST)</label>

                                        <label class="col-sm-2 col-form-label">Hora de recoleccion de muestra</label>
                                        <div class="col-sm-4">
                                            <div class="form-group bmd-form-group">
                                                <input class="form-control" type="text" name="anx29_host_hora_reco_mues" id="" required="true" aria-required="true">
                                            </div>
                                        </div>

                                        <label class="col-sm-2 col-form-label">Fecha del estudio</label>
                                        <div class="col-sm-4">
                                            <div class="form-group bmd-form-group">
                                                <input class="form-control" type="text" name="anx29_host_fecha_estu" id="" required="true" aria-required="true">
                                            </div>
                                        </div>


                                        <label class="col-sm-2 col-form-label">Hora de procesado de la muestra</label>
                                        <div class="col-sm-4">
                                            <div class="form-group bmd-form-group">
                                                <input class="form-control" type="text" name="anx29_host_hora_proce_mues" id="" required="true" aria-required="true">
                                            </div>
                                        </div>

                                        <label class="col-sm-2 col-form-label">Fecha de procesado</label>
                                        <div class="col-sm-4">
                                            <div class="form-group bmd-form-group">
                                                <input class="form-control" type="text" name="anx29_host_fecha_proce" id="" required="true" aria-required="true">
                                            </div>
                                        </div>

                                        <label class="col-sm-6 col-form-label text-center
                ">Parámetro Evaluado</label>
                                        <label class="col-sm-6 col-form-label text-center
                ">Valores de Referencia</label>


                                        <label class="col-sm-2 col-form-label">Dias de abstinencia sexual</label>
                                        <div class="col-sm-4">
                                            <div class="form-group bmd-form-group">
                                                <input class="form-control" type="text" name="anx29_host_dias_abs_sexual" id="" required="true" aria-required="true">
                                            </div>
                                        </div>
                                        <label class="col-sm-6 col-form-label text-center
                ">2-7 Dias</label>

                                        <label class="col-sm-2 col-form-label">Coagulo inicial</label>
                                        <div class="col-sm-4">
                                            <div class="form-group bmd-form-group">
                                                <input class="form-control" type="text" name="anx29_host_coagulo_ini" id="" required="true" aria-required="true">
                                            </div>
                                        </div>
                                        <label class="col-sm-6 col-form-label text-center
                ">presente</label>

                                        <label class="col-sm-2 col-form-label">Licuefacción</label>
                                        <div class="col-sm-4">
                                            <div class="form-group bmd-form-group">
                                                <input class="form-control" type="text" name="anx29_host_licue" id="" required="true" aria-required="true">
                                            </div>
                                        </div>
                                        <label class="col-sm-6 col-form-label text-center
                ">20-60 min</label>

                                        <label class="col-sm-2 col-form-label">Viscosidad</label>
                                        <div class="col-sm-4">
                                            <div class="form-group bmd-form-group">
                                                <input class="form-control" type="text" name="anx29_host_visco" id="" required="true" aria-required="true">
                                            </div>
                                        </div>
                                        <label class="col-sm-6 col-form-label text-center
                ">Normal(Filamento < 2cm)</label>

                                        <label class="col-sm-2 col-form-label">Volumen</label>
                                        <div class="col-sm-4">
                                            <div class="form-group bmd-form-group">
                                                <input class="form-control" type="text" name="anx29_host_volumen" id="" required="true" aria-required="true">
                                            </div>
                                        </div>
                                        <label class="col-sm-6 col-form-label text-center
                ">1.5 - 6 ml</label>


                                        <label class="col-sm-2 col-form-label">Aspecto</label>
                                        <div class="col-sm-4">
                                            <div class="form-group bmd-form-group">
                                                <input class="form-control" type="text" name="anx29_host_aspecto" id="" required="true" aria-required="true">
                                            </div>
                                        </div>
                                        <label class="col-sm-6 col-form-label text-center
                ">Amarillento / Gris opalecente / Blanquecino</label>


                                        <label class="col-sm-2 col-form-label">PH</label>
                                        <div class="col-sm-4">
                                            <div class="form-group bmd-form-group">
                                                <input class="form-control" type="text" name="anx29_host_PH" id="" required="true" aria-required="true">
                                            </div>
                                        </div>
                                        <label class="col-sm-6 col-form-label text-center
                "> 7.2</label>


                                        <label class="col-sm-2 col-form-label">HOST(Espermatozoides con hinchazón)</label>
                                        <div class="col-sm-4">
                                            <div class="form-group bmd-form-group">
                                                <input class="form-control" type="text" name="anx29_host_esperma" id="" required="true" aria-required="true">
                                            </div>
                                        </div>
                                        <label class="col-sm-6 col-form-label text-center
                "> 58%</label>



                                        <label class="col-sm-12 col-form-label text-center
                ">ORINA POST-EYACULADO</label>

                                        <label class="col-sm-2 col-form-label">Hora de recoleccion de muestra</label>
                                        <div class="col-sm-4">
                                            <div class="form-group bmd-form-group">
                                                <input class="form-control" type="text" name="anx29_post_hora_reco_mue" id="" required="true" aria-required="true">
                                            </div>
                                        </div>

                                        <label class="col-sm-2 col-form-label">Fecha del estudio</label>
                                        <div class="col-sm-4">
                                            <div class="form-group bmd-form-group">
                                                <input class="form-control" type="text" name="anx29_post_fecha_estu" id="" required="true" aria-required="true">
                                            </div>
                                        </div>


                                        <label class="col-sm-2 col-form-label">Hora de procesado de la muestra</label>
                                        <div class="col-sm-4">
                                            <div class="form-group bmd-form-group">
                                                <input class="form-control" type="text" name="anx29_post_hora_proce_mue" id="" required="true" aria-required="true">
                                            </div>
                                        </div>

                                        <label class="col-sm-2 col-form-label">Fecha de procesado</label>
                                        <div class="col-sm-4">
                                            <div class="form-group bmd-form-group">
                                                <input class="form-control" type="text" name="anx29_post_fecha_proce" id="" required="true" aria-required="true">
                                            </div>
                                        </div>

                                        <label class="col-sm-6 col-form-label text-center
                ">Parámetro Evaluado</label>
                                        <label class="col-sm-6 col-form-label text-center
                ">Valores de Referencia</label>


                                        <label class="col-sm-2 col-form-label">Dias de abstinencia sexual</label>
                                        <div class="col-sm-4">
                                            <div class="form-group bmd-form-group">
                                                <input class="form-control" type="text" name="anx29_post_dias_abs_sex" id="" required="true" aria-required="true">
                                            </div>
                                        </div>
                                        <label class="col-sm-6 col-form-label text-center
                ">2-7 Dias</label>

                                        <label class="col-sm-2 col-form-label">Aspecto</label>
                                        <div class="col-sm-4">
                                            <div class="form-group bmd-form-group">
                                                <input class="form-control" type="text" name="anx29_post_aspecto" id="" required="true" aria-required="true">
                                            </div>
                                        </div>
                                        <label class="col-sm-6 col-form-label text-center
                ">Amarillento / Gris opalecente / Blanquecino</label>


                                        <label class="col-sm-2 col-form-label">PH</label>
                                        <div class="col-sm-4">
                                            <div class="form-group bmd-form-group">
                                                <input class="form-control" type="text" name="anx29_post_PH" id="" required="true" aria-required="true">
                                            </div>
                                        </div>
                                        <label class="col-sm-6 col-form-label text-center
                "> 7.2</label>


                                        <label class="col-sm-2 col-form-label">Concentración espermatica (400X)</label>
                                        <div class="col-sm-4">
                                            <div class="form-group bmd-form-group">
                                                <input class="form-control" type="text" name="anx29_post_conce_esper" id="" required="true" aria-required="true">
                                            </div>
                                        </div>
                                        <label class="col-sm-6 col-form-label text-center
                "> 12 por campo</label>

                                        <label class="col-sm-12 col-form-label text-center
                ">En caso de ser positiva, se reporta:</label>


                                        <label class="col-sm-4 col-form-label">Movilidad Total (A+B+C)</label>
                                        <div class="col-sm-8">
                                            <div class="form-group bmd-form-group">
                                                <input class="form-control" type="text" name="anx29_post_movi_total_abc" id="" required="true" aria-required="true">
                                            </div>
                                        </div>
                                        <label class="col-sm-4 col-form-label">Movilidad Progresiva (A+B)</label>
                                        <div class="col-sm-8">
                                            <div class="form-group bmd-form-group">
                                                <input class="form-control" type="text" name="anx29_post_movi_proce_AB" id="" required="true" aria-required="true">
                                            </div>
                                        </div>





                                        <label class="col-sm-12 col-form-label text-center
                ">PRUEBA DE CAPACITACIÓN ESPERMÁTICA </label>

                                        <label class="col-sm-2 col-form-label">Hora de recoleccion de muestra</label>
                                        <div class="col-sm-4">
                                            <div class="form-group bmd-form-group">
                                                <input class="form-control" type="text" name="anx29_capa_hora_reco_mue" id="" required="true" aria-required="true">
                                            </div>
                                        </div>

                                        <label class="col-sm-2 col-form-label">Fecha del estudio</label>
                                        <div class="col-sm-4">
                                            <div class="form-group bmd-form-group">
                                                <input class="form-control" type="text" name="anx29_capa_fech_estu" id="" required="true" aria-required="true">
                                            </div>
                                        </div>


                                        <label class="col-sm-2 col-form-label">Hora de procesado de la muestra</label>
                                        <div class="col-sm-4">
                                            <div class="form-group bmd-form-group">
                                                <input class="form-control" type="text" name="anx29_capa_hora_proce_mu" id="" required="true" aria-required="true">
                                            </div>
                                        </div>

                                        <label class="col-sm-2 col-form-label">Fecha de procesado</label>
                                        <div class="col-sm-4">
                                            <div class="form-group bmd-form-group">
                                                <input class="form-control" type="text" name="anx29_capa_fecha_proce" id="" required="true" aria-required="true">
                                            </div>
                                        </div>

                                        <label class="col-sm-12 col-form-label text-center
                ">Pre-Capacitación</label>

                                        <label class="col-sm-6 col-form-label text-center
                ">Parámetro Evaluado</label>
                                        <label class="col-sm-6 col-form-label text-center
                ">Valores de Referencia</label>


                                        <label class="col-sm-2 col-form-label">Dias de abstinencia sexual</label>
                                        <div class="col-sm-4">
                                            <div class="form-group bmd-form-group">
                                                <input class="form-control" type="text" name="anx29_capa_dias_abs_sexual" id="" required="true" aria-required="true">
                                            </div>
                                        </div>
                                        <label class="col-sm-6 col-form-label text-center
                ">2-7 Dias</label>

                                        <label class="col-sm-2 col-form-label">Licuefacción</label>
                                        <div class="col-sm-4">
                                            <div class="form-group bmd-form-group">
                                                <input class="form-control" type="text" name="anx29_capa_licue" id="" required="true" aria-required="true">
                                            </div>
                                        </div>
                                        <label class="col-sm-6 col-form-label text-center
                ">20-60 min</label>

                                        <label class="col-sm-2 col-form-label">Viscosidad</label>
                                        <div class="col-sm-4">
                                            <div class="form-group bmd-form-group">
                                                <input class="form-control" type="text" name="anx29_capa_visco" id="" required="true" aria-required="true">
                                            </div>
                                        </div>
                                        <label class="col-sm-6 col-form-label text-center
                ">Normal(Filamento < 2cm)</label>

                                        <label class="col-sm-2 col-form-label">Volumen</label>
                                        <div class="col-sm-4">
                                            <div class="form-group bmd-form-group">
                                                <input class="form-control" type="text" name="anx29_capa_volumen" id="" required="true" aria-required="true">
                                            </div>
                                        </div>
                                        <label class="col-sm-6 col-form-label text-center
                ">1.5 - 6 ml</label>


                                        <label class="col-sm-2 col-form-label">Aspecto</label>
                                        <div class="col-sm-4">
                                            <div class="form-group bmd-form-group">
                                                <input class="form-control" type="text" name="anx29_capa_aspecto" id="" required="true" aria-required="true">
                                            </div>
                                        </div>
                                        <label class="col-sm-6 col-form-label text-center
                ">Amarillento / Gris opalecente / Blanquecino</label>


                                        <label class="col-sm-2 col-form-label">Concentración espermática por mililitro</label>
                                        <div class="col-sm-4">
                                            <div class="form-group bmd-form-group">
                                                <input class="form-control" type="text" name="anx29_capa_esper_mili" id="" required="true" aria-required="true">
                                            </div>
                                        </div>
                                        <label class="col-sm-6 col-form-label text-center
                ">15 X 10 ml</label>

                                        <label class="col-sm-2 col-form-label">Concentración espermática total</label>
                                        <div class="col-sm-4">
                                            <div class="form-group bmd-form-group">
                                                <input class="form-control" type="text" name="anx29_capa_esper_total" id="" required="true" aria-required="true">
                                            </div>
                                        </div>
                                        <label class="col-sm-6 col-form-label text-center
                ">39 millones</label>

                                        <label class="col-sm-2 col-form-label">Movilidad Total (A+B+C)</label>
                                        <div class="col-sm-4">
                                            <div class="form-group bmd-form-group">
                                                <input class="form-control" type="text" name="anx29_capa_movi_total_ABC" id="" required="true" aria-required="true">
                                            </div>
                                        </div>
                                        <label class="col-sm-6 col-form-label text-center
                ">40%</label>

                                        <label class="col-sm-2 col-form-label">Movilidad Progresiva (A+B+C)</label>
                                        <div class="col-sm-4">
                                            <div class="form-group bmd-form-group">
                                                <input class="form-control" type="text" name="anx29_capa_movi_progre_abc" id="" required="true" aria-required="true">
                                            </div>
                                        </div>
                                        <label class="col-sm-6 col-form-label text-center
                ">32%</label>

                                        <label class="col-sm-2 col-form-label">Morfilogia(Normales)</label>
                                        <div class="col-sm-4">
                                            <div class="form-group bmd-form-group">
                                                <input class="form-control" type="text" name="anx29_capa_morfilogia" id="" required="true" aria-required="true">
                                            </div>
                                        </div>
                                        <label class="col-sm-6 col-form-label text-center
                ">4%</label>




                                        <label class="col-sm-12 col-form-label text-center
                ">Post-Capacitación</label>

                                        <label class="col-sm-6 col-form-label text-center
                ">Parámetro Evaluado</label>
                                        <label class="col-sm-6 col-form-label text-center
                ">Valores de Referencia</label>


                                        <label class="col-sm-2 col-form-label">Volumen</label>
                                        <div class="col-sm-4">
                                            <div class="form-group bmd-form-group">
                                                <input class="form-control" type="text" name="anx29_post_capa_volumen" id="" required="true" aria-required="true">
                                            </div>
                                        </div>
                                        <label class="col-sm-6 col-form-label text-center
                ">1.5 - 6 ml</label>

                                        <label class="col-sm-2 col-form-label">Concentración espermática por mililitro</label>
                                        <div class="col-sm-4">
                                            <div class="form-group bmd-form-group">
                                                <input class="form-control" type="text" name="anx29_post_capa_espe_mili" id="" required="true" aria-required="true">
                                            </div>
                                        </div>
                                        <label class="col-sm-6 col-form-label text-center
                ">15 X 10 ml</label>

                                        <label class="col-sm-2 col-form-label">Movilidad Total (A+B+C)</label>
                                        <div class="col-sm-4">
                                            <div class="form-group bmd-form-group">
                                                <input class="form-control" type="text" name="anx29_post_capa_movi_total_abc" id="" required="true" aria-required="true">
                                            </div>
                                        </div>
                                        <label class="col-sm-6 col-form-label text-center
                ">40%</label>

                                        <label class="col-sm-2 col-form-label">Movilidad Progresiva (A+B+C)</label>
                                        <div class="col-sm-4">
                                            <div class="form-group bmd-form-group">
                                                <input class="form-control" type="text" name="anx29_post_capa_moviproABC" id="" required="true" aria-required="true">
                                            </div>
                                        </div>
                                        <label class="col-sm-6 col-form-label text-center
                ">32%</label>

                                        <label class="col-sm-2 col-form-label">Morfologia(Normales)</label>
                                        <div class="col-sm-4">
                                            <div class="form-group bmd-form-group">
                                                <input class="form-control" type="text" name="anx29_post_capa_morfo" id="" required="true" aria-required="true">
                                            </div>
                                        </div>
                                        <label class="col-sm-6 col-form-label text-center
                ">4%</label>


                                        <label class="col-sm-12 col-form-label text-center
                ">INSEMINACIÓN ARTIFICIAL HUMANA </label>

                                        <label class="col-sm-2 col-form-label">Hora de recoleccion de muestra</label>
                                        <div class="col-sm-4">
                                            <div class="form-group bmd-form-group">
                                                <input class="form-control" type="text" name="anx29_post_capa_hora_reco_mue" id="" required="true" aria-required="true">
                                            </div>
                                        </div>

                                        <label class="col-sm-2 col-form-label">Fecha del estudio</label>
                                        <div class="col-sm-4">
                                            <div class="form-group bmd-form-group">
                                                <input class="form-control" type="text" name="anx29_post_capa_fecha_estu" id="" required="true" aria-required="true">
                                            </div>
                                        </div>


                                        <label class="col-sm-2 col-form-label">Hora de procesado de la muestra</label>
                                        <div class="col-sm-4">
                                            <div class="form-group bmd-form-group">
                                                <input class="form-control" type="text" name="anx29_post_capa_hora_proce" id="" required="true" aria-required="true">
                                            </div>
                                        </div>

                                        <label class="col-sm-2 col-form-label">Fecha de procesado</label>
                                        <div class="col-sm-4">
                                            <div class="form-group bmd-form-group">
                                                <input class="form-control" type="text" name="anx29_post_capa_fecha_proce" id="" required="true" aria-required="true">
                                            </div>
                                        </div>

                                        <label class="col-sm-12 col-form-label text-center
                ">Pre-Capacitación</label>

                                        <label class="col-sm-6 col-form-label text-center
                ">Parámetro Evaluado</label>
                                        <label class="col-sm-6 col-form-label text-center
                ">Valores de Referencia</label>


                                        <label class="col-sm-2 col-form-label">Dias de abstinencia sexual</label>
                                        <div class="col-sm-4">
                                            <div class="form-group bmd-form-group">
                                                <input class="form-control" type="text" name="anx29_post_capa_abs_sex" id="" required="true" aria-required="true">
                                            </div>
                                        </div>
                                        <label class="col-sm-6 col-form-label text-center
                ">2-7 Dias</label>

                                        <label class="col-sm-2 col-form-label">Licuefacción</label>
                                        <div class="col-sm-4">
                                            <div class="form-group bmd-form-group">
                                                <input class="form-control" type="text" name="anx29_post_capa_licue" id="" required="true" aria-required="true">
                                            </div>
                                        </div>
                                        <label class="col-sm-6 col-form-label text-center
                ">20-60 min</label>

                                        <label class="col-sm-2 col-form-label">Viscosidad</label>
                                        <div class="col-sm-4">
                                            <div class="form-group bmd-form-group">
                                                <input class="form-control" type="text" name="anx29_post_capa_visco" id="" required="true" aria-required="true">
                                            </div>
                                        </div>
                                        <label class="col-sm-6 col-form-label text-center
                ">Normal(Filamento < 2cm)</label>

                                        <label class="col-sm-2 col-form-label">Volumen</label>
                                        <div class="col-sm-4">
                                            <div class="form-group bmd-form-group">
                                                <input class="form-control" type="text" name="anx29_post_capa_volumen_1" id="" required="true" aria-required="true">
                                            </div>
                                        </div>
                                        <label class="col-sm-6 col-form-label text-center
                ">1.5 - 6 ml</label>


                                        <label class="col-sm-2 col-form-label">Aspecto</label>
                                        <div class="col-sm-4">
                                            <div class="form-group bmd-form-group">
                                                <input class="form-control" type="text" name="anx29_post_capa_aspecto" id="" required="true" aria-required="true">
                                            </div>
                                        </div>
                                        <label class="col-sm-6 col-form-label text-center
                ">Amarillento / Gris opalecente / Blanquecino</label>


                                        <label class="col-sm-2 col-form-label">Concentración espermática por mililitro</label>
                                        <div class="col-sm-4">
                                            <div class="form-group bmd-form-group">
                                                <input class="form-control" type="text" name="anx29_post_capa_espe" id="" required="true" aria-required="true">
                                            </div>
                                        </div>
                                        <label class="col-sm-6 col-form-label text-center
                ">15 X 10 ml</label>

                                        <label class="col-sm-2 col-form-label">Concentración espermática total</label>
                                        <div class="col-sm-4">
                                            <div class="form-group bmd-form-group">
                                                <input class="form-control" type="text" name="anx29_post_capa_espe_total" id="" required="true" aria-required="true">
                                            </div>
                                        </div>
                                        <label class="col-sm-6 col-form-label text-center
                ">39 millones</label>

                                        <label class="col-sm-2 col-form-label">Movilidad Total (A+B+C)</label>
                                        <div class="col-sm-4">
                                            <div class="form-group bmd-form-group">
                                                <input class="form-control" type="text" name="anx29_post_capa_movi_abc" id="" required="true" aria-required="true">
                                            </div>
                                        </div>
                                        <label class="col-sm-6 col-form-label text-center
                ">40%</label>

                                        <label class="col-sm-2 col-form-label">Movilidad Progresiva (A+B+C)</label>
                                        <div class="col-sm-4">
                                            <div class="form-group bmd-form-group">
                                                <input class="form-control" type="text" name="anx29_post_capa_movipro_abc" id="" required="true" aria-required="true">
                                            </div>
                                        </div>
                                        <label class="col-sm-6 col-form-label text-center
                ">32%</label>

                                        <label class="col-sm-2 col-form-label">Morfilogia(Normales)</label>
                                        <div class="col-sm-4">
                                            <div class="form-group bmd-form-group">
                                                <input class="form-control" type="text" name="anx29_post_capa_norma" id="" required="true" aria-required="true">
                                            </div>
                                        </div>
                                        <label class="col-sm-6 col-form-label text-center
                ">4%</label>




                                        <label class="col-sm-12 col-form-label text-center
                ">Post-Capacitación</label>

                                        <label class="col-sm-6 col-form-label text-center
                ">Parámetro Evaluado</label>
                                        <label class="col-sm-6 col-form-label text-center
                ">Valores de Referencia</label>


                                        <label class="col-sm-2 col-form-label">Volumen</label>
                                        <div class="col-sm-4">
                                            <div class="form-group bmd-form-group">
                                                <input class="form-control" type="text" name="anx29_postt_volumen" id="" required="true" aria-required="true">
                                            </div>
                                        </div>
                                        <label class="col-sm-6 col-form-label text-center
                ">1.5 - 6 ml</label>

                                        <label class="col-sm-2 col-form-label">Concentración espermática por mililitro</label>
                                        <div class="col-sm-4">
                                            <div class="form-group bmd-form-group">
                                                <input class="form-control" type="text" name="anx29_postt_espe_mili" id="" required="true" aria-required="true">
                                            </div>
                                        </div>
                                        <label class="col-sm-6 col-form-label text-center
                ">15 X 10 ml</label>

                                        <label class="col-sm-2 col-form-label">Movilidad Total (A+B+C)</label>
                                        <div class="col-sm-4">
                                            <div class="form-group bmd-form-group">
                                                <input class="form-control" type="text" name="anx29_postt_movi_total_abc" id="" required="true" aria-required="true">
                                            </div>
                                        </div>
                                        <label class="col-sm-6 col-form-label text-center
                ">40%</label>

                                        <label class="col-sm-2 col-form-label">Movilidad Progresiva (A+B+C)</label>
                                        <div class="col-sm-4">
                                            <div class="form-group bmd-form-group">
                                                <input class="form-control" type="text" name="anx29_postt_movi_progre_abc" id="" required="true" aria-required="true">
                                            </div>
                                        </div>
                                        <label class="col-sm-6 col-form-label text-center
                ">32%</label>

                                        <label class="col-sm-2 col-form-label">Morfologia(Normales)</label>
                                        <div class="col-sm-4">
                                            <div class="form-group bmd-form-group">
                                                <input class="form-control" type="text" name="anx29_postt_morfo" id="" required="true" aria-required="true">
                                            </div>
                                        </div>
                                        <label class="col-sm-6 col-form-label text-center
                ">4%</label>



                                        <div class="row justify-content-center">
                                            <button type="submit" class="btn btn-fill btn-rose">Guardar</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- fin de cuarto elemento -->

                        </div>
                    </div>

                </div>
            </div>
 </form>
        </div>
    </div>
</div>
<!-- Fin Modal -->


<!-- Modal -->
<div class="modal  fade docs-anexo34-modal-lg" tabindex="-1" id="anexos" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true" style="justify-content:center;">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h3 class="modal-title" id="exampleModalLongTitle">Anexo 34</h3>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close" style="color: red">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form method="post"  action="{{url('procesoanexo34/add') }}" autocomplete="off" class="form-horizontal">
                @csrf


                    <div class="content">
                        <div class="container-fluid">

                            <!-- Inicio de elemento -->
                            <!-- segundo elemento -->
                            <div class="row justify-content-center" >
                                <div class="col-md-12">
                                    <div class="card">
                                        <div class="card-header card-header-icon card-header-rose">
                                            <div class="card-icon">
                                                <i class="material-icons">assignment</i>
                                            </div>
                                            <h4 class="card-title ">CUESTIONARIO DE MASTOGRAFÍA</h4>
                                        </div>
                                        <div class="card-body">


                                            <div class="row">

                                                <label class="col-sm-2 col-form-label">Fecha:</label>
                                                <div class="col-sm-2">
                                                    <div class="form-group bmd-form-group">
                                                        <input class="form-control datepicker" type="text" name="anx34_fecha" id="" placeholder="" value="" required="true" aria-required="true">
                                                    </div>
                                                </div>

                                                <label class="col-sm-2 col-form-label">Folio:</label>
                                                <div class="col-sm-2">
                                                    <div class="form-group bmd-form-group">
                                                        <input class="form-control" type="text" name="anx34_folio" id="" required="true" aria-required="true">
                                                    </div>
                                                </div>

                                                <label class="col-sm-12 col-form-label text-center">IDENTIFICACIÓN</label>


                                                <label class="col-sm-2 col-form-label">Nombre del paciente</label>
                                                <div class="col-sm-4">
                                                    <div class="form-group bmd-form-group">
                                                        <input class="form-control" type="text" name="anx34_paciente" id="" placeholder="" value="" required="true" aria-required="true">
                                                    </div>
                                                </div>

                                                <label class="col-sm-2 col-form-label">Edad:</label>
                                                <div class="col-sm-4">
                                                    <div class="form-group bmd-form-group">
                                                        <input class="form-control" type="text" name="anx34_moti_estu" id="anx35_mot_estudio" required="true" aria-required="true">
                                                    </div>
                                                </div>

                                                <label class="col-sm-2 col-form-label">Fecha de nacimiento:</label>
                                                <div class="col-sm-2">
                                                    <div class="form-group bmd-form-group">
                                                        <input class="form-control datepicker" type="text" name="anx34_fecha_nac" id="" placeholder="" value="" required="true" aria-required="true">
                                                    </div>
                                                </div>
                                                <label class="col-sm-2 col-form-label">Sexo:</label>
                                                <div class="col-sm-2">
                                                    <div class="form-check">
                                                        <label class="form-check-label">
                                                            <input class="form-check-input" type="radio" name="anx34_sexo" value="Masculino" checked> Masculino
                                                            <span class="circle"><span class="check"></span></span>
                                                        </label>
                                                    </div>

                                                    <div class="form-check">
                                                        <label class="form-check-label">
                                                            <input class="form-check-input" type="radio" name="anx34_sexo" value="Femenino" > Femenino
                                                            <span class="circle"><span class="check"></span></span>
                                                        </label>
                                                    </div>
                                                </div>

                                                <label class="col-sm-2 col-form-label">Estado Civil:</label>
                                                <div class="col-sm-2">
                                                    <div class="form-group bmd-form-group">
                                                        <input class="form-control" type="text" name="anx34_edo_civil" id="" required="true" aria-required="true">
                                                    </div>
                                                </div>
                                                <label class="col-sm-2 col-form-label">Domicilio:</label>
                                                <div class="col-sm-9">
                                                    <div class="form-group bmd-form-group">
                                                        <input class="form-control" type="text" name="anx34_domicilio" id="anx35_mot_estudio" required="true" aria-required="true">
                                                    </div>
                                                </div>
                                                <label class="col-sm-2 col-form-label">Telefono:</label>
                                                <div class="col-sm-4">
                                                    <div class="form-group bmd-form-group">
                                                        <input class="form-control" type="text" name="anx34_telefono" id="" placeholder="" value="" required="true" aria-required="true">
                                                    </div>
                                                </div>

                                                <label class="col-sm-2 col-form-label">Correo:</label>
                                                <div class="col-sm-4">
                                                    <div class="form-group bmd-form-group">
                                                        <input class="form-control" type="text" name="anx34_correo" id="anx35_mot_estudio" required="true" aria-required="true">
                                                    </div>
                                                </div>

                                                <label class="col-sm-12 col-form-label text-center">ANTECEDENTES FAMILIARES</label><br><br>


                                                <label class="col-sm-4 col-form-label label-checkboxl">¿Usted o algun familiar tiene antecedentes de cancer de mama?:</label>

                                                <div class="col-sm-2 checkbox-radios">
                                                    <div class="form-check form-check-inline">
                                                        <label class="form-check-label">
                                                            <input class="form-check-input" type="radio" name="anx34_A_cancer_mama" value="Si" checked> Si
                                                            <span class="circle"><span class="check"></span></span>
                                                        </label>
                                                    </div>
                                                    <div class="form-check form-check-inline">
                                                        <label class="form-check-label">
                                                            <input class="form-check-input" type="radio" name="anx34_A_cancer_mama" value="No"> No
                                                            <span class="circle"><span class="check"></span></span>
                                                        </label>
                                                    </div>
                                                </div>

                                                <label class="col-sm-2 col-form-label">¿A que edad?:</label>
                                                <div class="col-sm-2">
                                                    <div class="form-group bmd-form-group">
                                                        <input class="form-control" type="text" name="anx34_CA_aque_edad" id="" required="true" aria-required="true">
                                                    </div>
                                                </div>
                                                <br><br><br><br>
                                                <label class="col-sm-4 col-form-label label-checkboxl">¿Usted o algun familiar tiene antecedentes de cancer?:</label>

                                                <div class="col-sm-2 checkbox-radios">
                                                    <div class="form-check form-check-inline">
                                                        <label class="form-check-label">
                                                            <input class="form-check-input" type="radio" name="anx34_AF_cancel_mama" value="Si" checked> Si
                                                            <span class="circle"><span class="check"></span></span>
                                                        </label>
                                                    </div>
                                                    <div class="form-check form-check-inline">
                                                        <label class="form-check-label">
                                                            <input class="form-check-input" type="radio" name="anx34_AF_cancel_mama" value="No"> No
                                                            <span class="circle"><span class="check"></span></span>
                                                        </label>
                                                    </div>
                                                </div>

                                                <label class="col-sm-2 col-form-label">¿Quien?:</label>
                                                <div class="col-sm-2">
                                                    <div class="form-group bmd-form-group">
                                                        <input class="form-control" type="text" name="anx34_FCA_quien" id="" required="true" aria-required="true">
                                                    </div>
                                                </div>
                                                <br><br><br><br>
                                                <label class="col-sm-12 col-form-label text-center">ANTECEDENTES PERSONALES</label><br><br>
                                                <label class="col-sm-4 col-form-label label-checkboxl">¿Ha notado algun cambio en sus mamas?:</label>

                                                <div class="col-sm-2 checkbox-radios">
                                                    <div class="form-check form-check-inline">
                                                        <label class="form-check-label">
                                                            <input class="form-check-input" type="radio" name="anx34_AP_mamas" value="Si" checked> Si
                                                            <span class="circle"><span class="check"></span></span>
                                                        </label>
                                                    </div>
                                                    <div class="form-check form-check-inline">
                                                        <label class="form-check-label">
                                                            <input class="form-check-input" type="radio" name="anx34_AP_mamas" value="No"> No
                                                            <span class="circle"><span class="check"></span></span>
                                                        </label>
                                                    </div>
                                                </div>

                                                <label class="col-sm-2 col-form-label">¿De que tipo?:</label>
                                                <div class="col-sm-3">
                                                    <div class="form-group bmd-form-group">
                                                        <input class="form-control" type="text" name="anx34_AP_mamas_tipo" id="" required="true" aria-required="true">
                                                    </div>
                                                </div>
                                                <br><br><br><br>

                                                <label class="col-sm-2 col-form-label label-checkbox"></label>
                                                <div class="col-sm-10 checkbox-radios">
                                                    <div class="form-check">
                                                        <label class="form-check-label">
                                                            <input class="form-check-input" type="checkbox" name="anx34_dolor" value="[X]"> Dolor
                                                            <span class="form-check-sign"><span class="check"></span></span>
                                                        </label>
                                                    </div>
                                                </div>
                                                <label class="col-sm-2 col-form-label label-checkbox"></label>
                                                <div class="col-sm-10 checkbox-radios">
                                                    <div class="form-check">
                                                        <label class="form-check-label">
                                                            <input class="form-check-input" type="checkbox" name="anx34_masa_palpable" value="x"> Masa palpable
                                                            <span class="form-check-sign"><span class="check"></span></span>
                                                        </label>
                                                    </div>
                                                </div>
                                                <label class="col-sm-2 col-form-label label-checkbox"></label>
                                                <div class="col-sm-10 checkbox-radios">
                                                    <div class="form-check">
                                                        <label class="form-check-label">
                                                            <input class="form-check-input" type="checkbox" name="anx34_cambios_piel" value="x"> Cambios de Piel
                                                            <span class="form-check-sign"><span class="check"></span></span>
                                                        </label>
                                                    </div>
                                                </div>
                                                <label class="col-sm-2 col-form-label label-checkbox"></label>
                                                <div class="col-sm-10 checkbox-radios">
                                                    <div class="form-check">
                                                        <label class="form-check-label">
                                                            <input class="form-check-input" type="checkbox" name="anx34_aumento_volumen" value="x"> Aumento de Volumen
                                                            <span class="form-check-sign"><span class="check"></span></span>
                                                        </label>
                                                    </div>
                                                </div>
                                                <label class="col-sm-2 col-form-label label-checkbox"></label>
                                                <div class="col-sm-10 checkbox-radios">
                                                    <div class="form-check">
                                                        <label class="form-check-label">
                                                            <input class="form-check-input" type="checkbox" name="anx34_secrecion_pezon" value="x"> Secreción por el Pezón
                                                            <span class="form-check-sign"><span class="check"></span></span>
                                                        </label>
                                                    </div>
                                                </div>
                                                <label class="col-sm-2 col-form-label label-checkbox"></label>
                                                <div class="col-sm-10 checkbox-radios">
                                                    <div class="form-check">
                                                        <label class="form-check-label">
                                                            <input class="form-check-input" type="checkbox" name="anx34_inversion_pezon" value="x"> Inversión del pezón
                                                            <span class="form-check-sign"><span class="check"></span></span>
                                                        </label>
                                                    </div>
                                                </div>
                                                <label class="col-sm-2 col-form-label label-checkbox"></label>
                                                <div class="col-sm-10 checkbox-radios">
                                                    <div class="form-check">
                                                        <label class="form-check-label">
                                                            <input class="form-check-input" type="checkbox" name="anx34_otros" value="x"> Otros
                                                            <span class="form-check-sign"><span class="check"></span></span>
                                                        </label>
                                                    </div>
                                                </div>
                                                <label class="col-sm-2 col-form-label">¿Desde cuándo?:</label>
                                                <div class="col-sm-9">
                                                    <div class="form-group bmd-form-group">
                                                        <input class="form-control" type="text" name="anx34_desde_cuando" id="" required="true" aria-required="true">
                                                    </div>
                                                </div>
                                                <br><br><br><br>
                                                <label class="col-sm-3 col-form-label">Tiene alguna seña particular en sus mamas como:</label>
                                                <div class="col-sm-2 checkbox-radios">
                                                    <div class="form-check">
                                                        <label class="form-check-label">
                                                            <input class="form-check-input" type="checkbox" name="anx34_senal_mamas_lunar" value="x"> Lunar
                                                            <span class="form-check-sign"><span class="check"></span></span>
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="col-sm-2 checkbox-radios">
                                                    <div class="form-check">
                                                        <label class="form-check-label">
                                                            <input class="form-check-input" type="checkbox" name="anx34_senal_mamas_cicatrices" value="x"> Cicatrices
                                                            <span class="form-check-sign"><span class="check"></span></span>
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="col-sm-2 checkbox-radios">
                                                    <div class="form-check">
                                                        <label class="form-check-label">
                                                            <input class="form-check-input" type="checkbox" name="anx34_senal_mamas_verrugas" value="x"> Verrugas
                                                            <span class="form-check-sign"><span class="check"></span></span>
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="col-sm-2 checkbox-radios">
                                                    <div class="form-check">
                                                        <label class="form-check-label">
                                                            <input class="form-check-input" type="checkbox" name="anx34_senal_mamas_otros" value="x"> Otros
                                                            <span class="form-check-sign"><span class="check"></span></span>
                                                        </label>
                                                    </div>
                                                </div>
                                                <br><br><br>
                                                <label class="col-sm-3 col-form-label">Edad de la primera menstrución:</label>
                                                <div class="col-sm-2">
                                                    <div class="form-group bmd-form-group">
                                                        <input class="form-control" type="text" name="anx34_primer_menstru" id="" placeholder="" value="" required="true" aria-required="true">
                                                    </div>
                                                </div>

                                                <label class="col-sm-3 col-form-label">Edad de inicio de vida sexual activa:</label>
                                                <div class="col-sm-2">
                                                    <div class="form-group bmd-form-group">
                                                        <input class="form-control" type="text" name="anx34_vida_sexual" id="" required="true" aria-required="true">
                                                    </div>
                                                </div>
                                                <br><br><br>
                                                <label class="col-sm-3 col-form-label">Numero de embarazos:</label>
                                                <div class="col-sm-2">
                                                    <div class="form-group bmd-form-group">
                                                        <input class="form-control" type="text" name="anx34_numero_embara" id="" placeholder="" value="" required="true" aria-required="true">
                                                    </div>
                                                </div>

                                                <label class="col-sm-3 col-form-label">Numero de partos:</label>
                                                <div class="col-sm-2">
                                                    <div class="form-group bmd-form-group">
                                                        <input class="form-control" type="text" name="anx34_numero_partos" id="" required="true" aria-required="true">
                                                    </div>
                                                </div>
                                                <br><br><br>
                                                <label class="col-sm-3 col-form-label">Numero de cesareas:</label>
                                                <div class="col-sm-2">
                                                    <div class="form-group bmd-form-group">
                                                        <input class="form-control" type="text" name="anx34_numero_cesareas" id="" placeholder="" value="" required="true" aria-required="true">
                                                    </div>
                                                </div>

                                                <label class="col-sm-3 col-form-label">Numero de Abortos:</label>
                                                <div class="col-sm-2">
                                                    <div class="form-group bmd-form-group">
                                                        <input class="form-control" type="text" name="anx34_numero_abortos" id="" required="true" aria-required="true">
                                                    </div>
                                                </div>
                                                <br><br><br>
                                                <label class="col-sm-4 col-form-label label-checkboxl">Método anticonceptivo:</label>

                                                <div class="col-sm-2 checkbox-radios">
                                                    <div class="form-check form-check-inline">
                                                        <label class="form-check-label">
                                                            <input class="form-check-input" type="radio" name="anx34_anticonceptivo" value="Si" checked> Si
                                                            <span class="circle"><span class="check"></span></span>
                                                        </label>
                                                    </div>
                                                    <div class="form-check form-check-inline">
                                                        <label class="form-check-label">
                                                            <input class="form-check-input" type="radio" name="anx34_anticonceptivo" value="No"> No
                                                            <span class="circle"><span class="check"></span></span>
                                                        </label>
                                                    </div>
                                                </div>

                                                <label class="col-sm-2 col-form-label">¿De que tipo?:</label>
                                                <div class="col-sm-3">
                                                    <div class="form-group bmd-form-group">
                                                        <input class="form-control" type="text" name="anx34_anticonceptivo_tipo" id="" required="true" aria-required="true">
                                                    </div>
                                                </div>
                                                <br><br><br><br>
                                                <label class="col-sm-4 col-form-label label-checkboxl">Hormonal:</label>
                                                <div class="col-sm-2 checkbox-radios">
                                                    <div class="form-check form-check-inline">
                                                        <label class="form-check-label">
                                                            <input class="form-check-input" type="radio" name="anx34_hormonal" value="Si" checked> Si
                                                            <span class="circle"><span class="check"></span></span>
                                                        </label>
                                                    </div>
                                                    <div class="form-check form-check-inline">
                                                        <label class="form-check-label">
                                                            <input class="form-check-input" type="radio" name="anx34_hormonal" value="No"> No
                                                            <span class="circle"><span class="check"></span></span>
                                                        </label>
                                                    </div>
                                                </div>

                                                <label class="col-sm-2 col-form-label">¿Cuánto tiempo?:</label>
                                                <div class="col-sm-3">
                                                    <div class="form-group bmd-form-group">
                                                        <input class="form-control" type="text" name="anx34_hormonal_tiempo" id="" required="true" aria-required="true">
                                                    </div>
                                                </div>
                                                <br><br><br><br>
                                                <label class="col-sm-3 col-form-label">Edad de la menopausia:</label>
                                                <div class="col-sm-2">
                                                    <div class="form-group bmd-form-group">
                                                        <input class="form-control" type="text" name="anx34_menopausia" id="" placeholder="" value="" required="true" aria-required="true">
                                                    </div>
                                                </div>

                                                <label class="col-sm-3 col-form-label">Fecha de la ultima mestruación:</label>
                                                <div class="col-sm-2">
                                                    <div class="form-group bmd-form-group">
                                                        <input class="form-control datepicker" type="text" name="anx34_fecha_ultima_mestruacion" id="" required="true" aria-required="true">
                                                    </div>
                                                </div>
                                                <br><br><br>
                                                <label class="col-sm-12 col-form-label text-center">ANTECEDENTES QUIRÚRGICOS</label><br><br>
                                                <label class="col-sm-4 col-form-label">Biopsia de mama:</label>
                                                <div class="col-sm-2 checkbox-radios">
                                                    <div class="form-check form-check-inline">
                                                        <label class="form-check-label">
                                                            <input class="form-check-input" type="radio" name="anx34_biopsia_mama" value="Si" checked> Si
                                                            <span class="circle"><span class="check"></span></span>
                                                        </label>
                                                    </div>
                                                    <div class="form-check form-check-inline">
                                                        <label class="form-check-label">
                                                            <input class="form-check-input" type="radio" name="anx34_biopsia_mama" value="No"> No
                                                            <span class="circle"><span class="check"></span></span>
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="col-sm-2 checkbox-radios">
                                                    <div class="form-check">
                                                        <label class="form-check-label">
                                                            <input class="form-check-input" type="checkbox" name="anx34_biopsia_derecha" value="x"> Derecha
                                                            <span class="form-check-sign"><span class="check"></span></span>
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="col-sm-3 checkbox-radios">
                                                    <div class="form-check">
                                                        <label class="form-check-label">
                                                            <input class="form-check-input" type="checkbox" name="anx34_biopsia_izquierda" value="x"> Izquierda
                                                            <span class="form-check-sign"><span class="check"></span></span>
                                                        </label>
                                                    </div>
                                                </div>
                                                <br><br><br>
                                                <label class="col-sm-3 col-form-label">¿Le han realizado mastectomia?</label>
                                                <div class="col-sm-2 checkbox-radios">
                                                    <div class="form-check form-check-inline">
                                                        <label class="form-check-label">
                                                            <input class="form-check-input" type="radio" name="anx34_realizo_mastec" value="Si" checked> Si
                                                            <span class="circle"><span class="check"></span></span>
                                                        </label>
                                                    </div>
                                                    <div class="form-check form-check-inline">
                                                        <label class="form-check-label">
                                                            <input class="form-check-input" type="radio" name="anx34_realizo_mastec" value="No"> No
                                                            <span class="circle"><span class="check"></span></span>
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="col-sm-2 checkbox-radios">
                                                    <div class="form-check">
                                                        <label class="form-check-label">
                                                            <input class="form-check-input" type="checkbox" name="anx34_realizo_mastec_der" value="x"> Derecha
                                                            <span class="form-check-sign"><span class="check"></span></span>
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="col-sm-2 checkbox-radios">
                                                    <div class="form-check">
                                                        <label class="form-check-label">
                                                            <input class="form-check-input" type="checkbox" name="anx34_realizo_mastec_izq" value="x"> Izquierda
                                                            <span class="form-check-sign"><span class="check"></span></span>
                                                        </label>
                                                    </div>
                                                </div>
                                                <label class="col-sm-1 col-form-label">Fecha:</label>
                                                <div class="col-sm-2">
                                                    <div class="form-group bmd-form-group">
                                                        <input class="form-control datepicker" type="text" name="anx34_realizo_mastec_fecha" id="" placeholder="" value="" required="true" aria-required="true">
                                                    </div>
                                                </div>
                                                <br><br><br>
                                                <label class="col-sm-3 col-form-label">¿Le han quitado o biosiado ganglios en axilas?</label>
                                                <div class="col-sm-1 checkbox-radios">
                                                    <div class="form-check form-check-inline">
                                                        <label class="form-check-label">
                                                            <input class="form-check-input" type="radio" name="anx34_axilas" value="Si" checked> Si
                                                            <span class="circle"><span class="check"></span></span>
                                                        </label>
                                                    </div>
                                                    <div class="form-check form-check-inline">
                                                        <label class="form-check-label">
                                                            <input class="form-check-input" type="radio" name="anx34_axilas" value="No"> No
                                                            <span class="circle"><span class="check"></span></span>
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="col-sm-2 checkbox-radios">
                                                    <div class="form-check">
                                                        <label class="form-check-label">
                                                            <input class="form-check-input" type="checkbox" name="anx34_axilas_dere" value="x"> Derecha
                                                            <span class="form-check-sign"><span class="check"></span></span>
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="col-sm-2 checkbox-radios">
                                                    <div class="form-check">
                                                        <label class="form-check-label">
                                                            <input class="form-check-input" type="checkbox" name="anx34_axilas_izq" value="x"> Izquierda
                                                            <span class="form-check-sign"><span class="check"></span></span>
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="col-sm-2 checkbox-radios">
                                                    <div class="form-check">
                                                        <label class="form-check-label">
                                                            <input class="form-check-input" type="checkbox" name="anx34_axilas_ambas" value="x"> Ambas
                                                            <span class="form-check-sign"><span class="check"></span></span>
                                                        </label>
                                                    </div>
                                                </div>
                                                <label class="col-sm-1 col-form-label">Fecha:</label>
                                                <div class="col-sm-1">
                                                    <div class="form-group bmd-form-group">
                                                        <input class="form-control datepicker" type="text" name="anx34_axilas_fecha" id="" placeholder="" value="" required="true" aria-required="true">
                                                    </div>
                                                </div>
                                                <br><br><br>
                                                <label class="col-sm-2
                                         col-form-label">¿Le han colocado implantes mamarios?</label>
                                                <div class="col-sm-2 checkbox-radios">
                                                    <div class="form-check form-check-inline">
                                                        <label class="form-check-label">
                                                            <input class="form-check-input" type="radio" name="anx34_implantes_mama" value="Si" checked> Si
                                                            <span class="circle"><span class="check"></span></span>
                                                        </label>
                                                    </div>
                                                    <div class="form-check form-check-inline">
                                                        <label class="form-check-label">
                                                            <input class="form-check-input" type="radio" name="anx34_implantes_mama" value="No"> No
                                                            <span class="circle"><span class="check"></span></span>
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="col-sm-2 checkbox-radios">
                                                    <div class="form-check">
                                                        <label class="form-check-label">
                                                            <input class="form-check-input" type="checkbox" name="anx34_implantes_mama_dere" value="x"> Derecha
                                                            <span class="form-check-sign"><span class="check"></span></span>
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="col-sm-2 checkbox-radios">
                                                    <div class="form-check">
                                                        <label class="form-check-label">
                                                            <input class="form-check-input" type="checkbox" name="anx34_implantes_mama_izq" value="x"> Izquierda
                                                            <span class="form-check-sign"><span class="check"></span></span>
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="col-sm-2 checkbox-radios">
                                                    <div class="form-check">
                                                        <label class="form-check-label">
                                                            <input class="form-check-input" type="checkbox" name="anx34_implantes_mama_ambos" value="x"> Ambas
                                                            <span class="form-check-sign"><span class="check"></span></span>
                                                        </label>
                                                    </div>
                                                </div>
                                                <label class="col-sm-1 col-form-label">Fecha:</label>
                                                <div class="col-sm-1">
                                                    <div class="form-group bmd-form-group">
                                                        <input class="form-control datepicker" type="text" name="anx34_implantes_mama_fecha" id="" placeholder="" value="" required="true" aria-required="true">
                                                    </div>
                                                </div>
                                                <br><br><br>
                                                <label class="col-sm-4 col-form-label">¿Ha tenido recambio de implantes?</label>
                                                <div class="col-sm-2 checkbox-radios">
                                                    <div class="form-check form-check-inline">
                                                        <label class="form-check-label">
                                                            <input class="form-check-input" type="radio" name="anx34_reca_implante" value="Si" checked> Si
                                                            <span class="circle"><span class="check"></span></span>
                                                        </label>
                                                    </div>
                                                    <div class="form-check form-check-inline">
                                                        <label class="form-check-label">
                                                            <input class="form-check-input" type="radio" name="anx34_reca_implante" value="No"> No
                                                            <span class="circle"><span class="check"></span></span>
                                                        </label>
                                                    </div>
                                                </div>
                                                <label class="col-sm-1 col-form-label">Fecha:</label>
                                                <div class="col-sm-4">
                                                    <div class="form-group bmd-form-group">
                                                        <input class="form-control datepicker" type="text" name="anx34_reca_implante_fecha" id="" placeholder="" value="" required="true" aria-required="true">
                                                    </div>
                                                </div>
                                                <br><br><br>
                                                <label class="col-sm-3 col-form-label">¿Le han realizado reduccíon mamaria?</label>
                                                <div class="col-sm-2 checkbox-radios">
                                                    <div class="form-check form-check-inline">
                                                        <label class="form-check-label">
                                                            <input class="form-check-input" type="radio" name="anx34_reduc_mama" value="Si" checked> Si
                                                            <span class="circle"><span class="check"></span></span>
                                                        </label>
                                                    </div>
                                                    <div class="form-check form-check-inline">
                                                        <label class="form-check-label">
                                                            <input class="form-check-input" type="radio" name="anx34_reduc_mama" value="No"> No
                                                            <span class="circle"><span class="check"></span></span>
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="col-sm-1 checkbox-radios">
                                                    <div class="form-check">
                                                        <label class="form-check-label">
                                                            <input class="form-check-input" type="checkbox" name="anx34_reduc_mama_dere" value="x"> Derecha
                                                            <span class="form-check-sign"><span class="check"></span></span>
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="col-sm-1 checkbox-radios">
                                                    <div class="form-check">
                                                        <label class="form-check-label">
                                                            <input class="form-check-input" type="checkbox" name="anx34_reduc_mama_izq" value="x"> Izquierda
                                                            <span class="form-check-sign"><span class="check"></span></span>
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="col-sm-1 checkbox-radios">
                                                    <div class="form-check">
                                                        <label class="form-check-label">
                                                            <input class="form-check-input" type="checkbox" name="anx34_reduc_mama_amb" value="x"> Ambas
                                                            <span class="form-check-sign"><span class="check"></span></span>
                                                        </label>
                                                    </div>
                                                </div>
                                                <label class="col-sm-1 col-form-label">Fecha:</label>
                                                <div class="col-sm-1">
                                                    <div class="form-group bmd-form-group">
                                                        <input class="form-control datepicker" type="text" name="anx34_reduc_mama_fecha" id="" placeholder="" value="" required="true" aria-required="true">
                                                    </div>
                                                </div>
                                                <br><br><br>
                                                <label class="col-sm-4 col-form-label">¿Ha recibido readioterapia en un seno?</label>
                                                <div class="col-sm-6 checkbox-radios">
                                                    <div class="form-check form-check-inline">
                                                        <label class="form-check-label">
                                                            <input class="form-check-input" type="radio" name="anx34_readio_seno" value="Si" checked> Si
                                                            <span class="circle"><span class="check"></span></span>
                                                        </label>
                                                    </div>
                                                    <div class="form-check form-check-inline">
                                                        <label class="form-check-label">
                                                            <input class="form-check-input" type="radio" name="anx34_readio_seno" value="No"> No
                                                            <span class="circle"><span class="check"></span></span>
                                                        </label>
                                                    </div>
                                                </div>
                                                <br><br><br>
                                                <label class="col-sm-4 col-form-label">¿Le han realizado mastografia o ultrasonido ?</label>
                                                <div class="col-sm-2 checkbox-radios">
                                                    <div class="form-check form-check-inline">
                                                        <label class="form-check-label">
                                                            <input class="form-check-input" type="radio" name="anx34_masto_utra" value="Si" checked> Si
                                                            <span class="circle"><span class="check"></span></span>
                                                        </label>
                                                    </div>
                                                    <div class="form-check form-check-inline">
                                                        <label class="form-check-label">
                                                            <input class="form-check-input" type="radio" name="anx34_masto_utra" value="No"> No
                                                            <span class="circle"><span class="check"></span></span>
                                                        </label>
                                                    </div>
                                                </div>
                                                <label class="col-sm-1 col-form-label">Fecha:</label>
                                                <div class="col-sm-4">
                                                    <div class="form-group bmd-form-group">
                                                        <input class="form-control datepicker" type="text" name="anx34_masto_utra_fecha" id="" placeholder="" value="" required="true" aria-required="true">
                                                    </div>
                                                </div>
                                                <br><br><br>
                                                <label class="col-sm-2 col-form-label">¿Que le diagnosticaron?:</label>
                                                <div class="col-sm-9">
                                                    <div class="form-group bmd-form-group">
                                                        <input class="form-control" type="text" name="anx34_dianostico" id="anx34_dianostico" required="true" aria-required="true">
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

        </div>
    </div>
</div>
<!-- Fin Modal -->

<!-- Modal -->

<div class="modal fade docs-anexo35-modal-lg" tabindex="-1" id="anexos" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h3 class="modal-title" id="exampleModalLongTitle">35</h3>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close" style="color: red">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form method="post"  action="{{url('procesoanexo35/add') }}" autocomplete="off" class="form-horizontal">
                @csrf



                    <div class="content">
                        <div class="container-fluid">
                            <!-- Inicio de elemento -->
                            <div class="card ">

                                <!-- primer metodo del panel-->

                                <div class="row">

                                    <label class="col-sm-12 col-form-label text-center">INTERPRETACIÓN ULTRASONIDOS</label>


                                    <label class="col-sm-2 col-form-label">Nombre del paciente</label>
                                    <div class="col-sm-4">
                                        <div class="form-group bmd-form-group">
                                            <input class="form-control" type="text" name="anx35_nombre_paciente" id="name" placeholder="" value="" required="true" aria-required="true">
                                        </div>
                                    </div>

                                    <label class="col-sm-2 col-form-label">Motivo del estudio</label>
                                    <div class="col-sm-4">
                                        <div class="form-group bmd-form-group">
                                            <input class="form-control" type="text" name="anx35_mot_estudio" id="anx35_mot_estudio" required="true" aria-required="true">
                                        </div>
                                    </div>

                                    <label class="col-sm-2 col-form-label">Tipo de estudio</label>
                                    <div class="col-sm-4">
                                        <div class="form-group bmd-form-group">
                                            <input class="form-control" type="text" name="anx35_tipo_estudio" id="anx35_tipo_estudio" required="true" aria-required="true">
                                        </div>
                                    </div>


                                    <label class="col-sm-2 col-form-label">Técnica de estudio</label>
                                    <div class="col-sm-4">
                                        <div class="form-group bmd-form-group">
                                            <input class="form-control" type="text" name="anx35_tecnica_estudio" id="anx35_tecnica_estudio" required="true" aria-required="true">
                                        </div>
                                    </div>

                                    <label class="col-sm-2 col-form-label">Hallazgos</label>
                                    <div class="col-sm-4">
                                        <div class="form-group bmd-form-group">
                                            <input class="form-control" type="text" name="anx35_hallazgo" id="anx35_hallazgo" required="true" aria-required="true">
                                        </div>
                                    </div>

                                    <label class="col-sm-2 col-form-label">Conclusión</label>
                                    <div class="col-sm-4">
                                        <div class="form-group bmd-form-group">
                                            <input class="form-control" type="text" name="anx35_conclucion" id="anx35_conclucion" required="true" aria-required="true">
                                        </div>
                                    </div>

                                    <label class="col-sm-2 col-form-label">Categoría</label>
                                    <div class="col-sm-4">
                                        <div class="form-group bmd-form-group">
                                            <input class="form-control" type="text" name="anx35_categoria" id="anx35_categoria" required="true" aria-required="true">
                                        </div>
                                    </div>


                                    <label class="col-sm-2 col-form-label">Conducta</label>
                                    <div class="col-sm-4">
                                        <div class="form-group bmd-form-group">
                                            <input class="form-control" type="text" name="anx35_conducta" id="anx35_conducta" required="true" aria-required="true">
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
    </div>
</div>
<!-- Fin Modal -->

<!-- Modal -->
<div class="modal fade docs-anexo36-modal-lg" tabindex="-1" id="anexos" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h3 class="modal-title" id="exampleModalLongTitle">Anexo 36</h3>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close" style="color: red">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>


            <div class="content">
                <div class="container-fluid">

                </div>
            </div>

        </div>
    </div>
</div>
<!-- Fin Modal -->

<!-- Modal -->
<div class="modal fade docs-anexo37_1-modal-lg" tabindex="-1" id="anexos" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h3 class="modal-title" id="exampleModalLongTitle">Anexo 37.1</h3>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close" style="color: red">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form method="post"  action="{{url('procesoanexo37_1/add') }}" autocomplete="off" class="form-horizontal">
                @csrf


                    <div class="content">
                        <div class="container-fluid">
                            <div class="row">
                                <label class="col-sm-2 col-form-label">Nombre</label>
                                <div class="col-sm-4">
                                    <div class="form-group bmd-form-group">
                                        <input class="form-control" name="name" id="name" type="text" placeholder="" value="" required="true" aria-required="true">

                                    </div>
                                </div>
                            </div>
                            <div class="card-footer ml-auto mr-auto">
                                <button type="submit" class="btn btn-rose">{{ __('Imprimir') }}</button>
                            </div>
                        </div>
                    </div>
            </form>

        </div>
    </div>
</div>
<!-- Fin Modal -->

<!-- Modal -->
<div class="modal fade docs-anexo38-modal-lg" tabindex="-1" id="anexos" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h3 class="modal-title" id="exampleModalLongTitle">Anexo 38</h3>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close" style="color: red">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>


            <div class="content">
                <div class="container-fluid">

                </div>
            </div>

        </div>
    </div>
</div>
<!-- Fin Modal -->

<!-- Modal -->
<div class="modal fade docs-anexo39-modal-lg" tabindex="-1" id="anexos" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h3 class="modal-title" id="exampleModalLongTitle">Anexo 39</h3>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close" style="color: red">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form method="post"  action="{{url('procesoAnexo39/add') }}" autocomplete="off" class="form-horizontal">
                @csrf



                    <div class="content">
                        <div class="container-fluid">
                            <div class="card ">
                                <div class="card-body ">
                                    <div class="tab-content tab-space">
                                        <!-- primer metodo del panel-->
                                        <div class="tab-pane  active show" id="link1">
                                            <div class="row">

                                                <label class="col-sm-12 col-form-label text-center
                ">Cuestionario para la paciente</label>


                                                <label class="col-sm-2 col-form-label">Origen Étnico</label>
                                                <div class="col-sm-4">
                                                    <div class="form-group bmd-form-group">
                                                        <div class="dropdown bootstrap-select col-sm-12 pl-0 pr-0"><select class="selectpicker col-sm-12 pl-0 pr-0" name="anx39_origen_etnico" data-style="select-with-transition" title="" data-size="100" tabindex="-98">
                                                                <option value="Latina(Mexicana, Centroamericana)">Latina(Mexicana, Centroamericana)</option>
                                                                <option value="Cáucasico(Europeo, Hispánico, Oriente Medio, África del Norte)">Cáucasico(Europeo, Hispánico, Oriente Medio, África del Norte)</option>
                                                                <option value="Negro(Africano, Caribeño, Afroamericano)">Negro(Africano, Caribeño, Afroamericano)</option>
                                                                <option value="Asiatico(India, Pakistan, Bangladesh)">Asiatico(India, Pakistan, Bangladesh)</option>
                                                                <option value="Este Asiático - Oriental(Chino, Coreano, Japones)">Este Asiático - Oriental(Chino, Coreano, Japones)</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>

                                                <label class="col-sm-2 col-form-label">Otra</label>
                                                <div class="col-sm-4">
                                                    <div class="form-group bmd-form-group">
                                                        <input class="form-control" type="text" name="anx39_otra" id="" required="true" aria-required="true">
                                                    </div>
                                                </div>

                                                <label class="col-sm-2 col-form-label">Fecha última mestruación</label>
                                                <div class="col-sm-4">
                                                    <div class="form-group bmd-form-group">
                                                        <input class="form-control" type="date" name="anx39_fecha_ultima_mestrua" id="" required="true" aria-required="true">
                                                    </div>
                                                </div>

                                                <label class="col-sm-2 col-form-label">Como considera su mestruación?</label>
                                                <div class="col-sm-4">
                                                    <div class="form-group bmd-form-group">
                                                        <div class="dropdown bootstrap-select col-sm-12 pl-0 pr-0"><select class="selectpicker col-sm-12 pl-0 pr-0" name="anx39_como_considera_mestru" data-style="select-with-transition" title="" data-size="100" tabindex="-98">
                                                                <option value="Desconoce">Desconoce</option>
                                                                <option value="Regular (FUM segura)">Regular (FUM segura)</option>
                                                                <option value="Regular (FUM insierta o no esta segura)">Regular (FUM insierta o no esta segura)</option>
                                                                <option value="Irregular">Irregular</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>

                                                <label class="col-sm-12 col-form-label text-center
                ">¿Existe antecedente de algun hijo/feto previo con alguna cromosomopatia?</label>


                                                <label class="col-sm-2 col-form-label">TRISOMIA 21</label>
                                                <div class="col-sm-4">
                                                    <div class="form-group bmd-form-group">
                                                        <input class="form-control" type="date" name="anx39_trisomia21" id="anx39_trisomia21" required="true" aria-required="true">
                                                    </div>
                                                </div>

                                                <label class="col-sm-2 col-form-label">TRISOMIA 18</label>
                                                <div class="col-sm-4">
                                                    <div class="form-group bmd-form-group">
                                                        <input class="form-control" type="date" name="anx39_trisomia18" id="anx39_trisomia18" required="true" aria-required="true">
                                                    </div>
                                                </div>

                                                <label class="col-sm-2 col-form-label">TRISOMIA 13</label>
                                                <div class="col-sm-4">
                                                    <div class="form-group bmd-form-group">
                                                        <input class="form-control" type="date" name="anx39_trisomia13" id="anx39_trisomia13" required="true" aria-required="true">
                                                    </div>
                                                </div>

                                                <label class="col-sm-2 col-form-label label-checkbox">¿Existe antecedente de algun hijo/feto previo con algun efecto o malformacion?</label>
                                                <div class="col-sm-4 checkbox-radios">
                                                    <div class="form-check form-check-inline">
                                                        <label class="form-check-label">
                                                            <input class="form-check-input" type="radio" name="anx39_hijo_malformacion" value="Si" checked> Si
                                                            <span class="circle">
                        <span class="check"></span>
                      </span>
                                                        </label>
                                                    </div>
                                                    <div class="form-check form-check-inline">
                                                        <label class="form-check-label">
                                                            <input class="form-check-input" type="radio" name="anx39_hijo_malformacion" value="No"> No
                                                            <span class="circle">
                        <span class="check"></span>
                      </span>
                                                        </label>
                                                    </div>
                                                </div>

                                                <label class="col-sm-2 col-form-label">Cual?</label>
                                                <div class="col-sm-4">
                                                    <div class="form-group bmd-form-group">
                                                        <input class="form-control" type="text" name="anx39_cual" id="anx39_cual" required="true" aria-required="true">
                                                    </div>
                                                </div>

                                                <label class="col-sm-2 col-form-label">Total de Embarazos</label>
                                                <div class="col-sm-4">
                                                    <div class="form-group bmd-form-group">
                                                        <input class="form-control" type="text" name="anx39_total_emba" id="anx39_total_emba" required="true" aria-required="true">
                                                    </div>
                                                </div>

                                                <label class="col-sm-2 col-form-label">Partos</label>
                                                <div class="col-sm-4">
                                                    <div class="form-group bmd-form-group">
                                                        <input class="form-control" type="text" name="anx39_partos" id="anx39_partos" required="true" aria-required="true">
                                                    </div>
                                                </div>


                                                <label class="col-sm-2 col-form-label">Cesareas</label>
                                                <div class="col-sm-4">
                                                    <div class="form-group bmd-form-group">
                                                        <input class="form-control" type="text" name="anx39_cesareas" id="anx39_cesareas" required="true" aria-required="true">
                                                    </div>
                                                </div>

                                                <label class="col-sm-2 col-form-label">Abortos</label>
                                                <div class="col-sm-4">
                                                    <div class="form-group bmd-form-group">
                                                        <input class="form-control" type="text" name="anx39_abortos" id="anx39_abortos" required="true" aria-required="true">
                                                    </div>
                                                </div>


                                                <label class="col-sm-2 col-form-label">Ectopicos</label>
                                                <div class="col-sm-4">
                                                    <div class="form-group bmd-form-group">
                                                        <input class="form-control" type="text" name="anx39_ectopicos" id="anx39_ectopicos" required="true" aria-required="true">
                                                    </div>
                                                </div>


                                                <label class="col-sm-2 col-form-label">Molas</label>
                                                <div class="col-sm-4">
                                                    <div class="form-group bmd-form-group">
                                                        <input class="form-control" type="text" name="anx39_molas" id="anx39_molas" required="true" aria-required="true">
                                                    </div>
                                                </div>

                                                <label class="col-sm-2 col-form-label label-checkbox">MUERTE IN ÚTERO ANTES DE LAS 16 SEMANAS</label>
                                                <div class="col-sm-4 checkbox-radios">
                                                    <div class="form-check form-check-inline">
                                                        <label class="form-check-label">
                                                            <input class="form-check-input" type="radio" name="anx39_muerte_antes16semanas" value="Si" checked> Si
                                                            <span class="circle">
                        <span class="check"></span>
                      </span>
                                                        </label>
                                                    </div>
                                                    <div class="form-check form-check-inline">
                                                        <label class="form-check-label">
                                                            <input class="form-check-input" type="radio" name="anx39_muerte_antes16semanas" value="No"> No
                                                            <span class="circle">
                        <span class="check"></span>
                      </span>
                                                        </label>
                                                    </div>
                                                </div>


                                                <label class="col-sm-2 col-form-label label-checkbox">MUERTE IN ÚTERO DESPUES DE LAS 16 SEMANAS</label>
                                                <div class="col-sm-4 checkbox-radios">
                                                    <div class="form-check form-check-inline">
                                                        <label class="form-check-label">
                                                            <input class="form-check-input" type="radio" name="anx39_muerte_despues16semanas" value="Si" checked> Si
                                                            <span class="circle">
                        <span class="check"></span>
                      </span>
                                                        </label>
                                                    </div>
                                                    <div class="form-check form-check-inline">
                                                        <label class="form-check-label">
                                                            <input class="form-check-input" type="radio" name="anx39_muerte_despues16semanas" value="No"> No
                                                            <span class="circle">
                        <span class="check"></span>
                      </span>
                                                        </label>
                                                    </div>
                                                </div>



                                                <label class="col-sm-2 col-form-label">A las cuentas semanas</label>
                                                <div class="col-sm-4">
                                                    <div class="form-group bmd-form-group">
                                                        <input class="form-control" type="text" name="anx39_cuantas_semanas" id="anx39_cuantas_semanas" required="true" aria-required="true">
                                                    </div>
                                                </div>



                                                <div class="row justify-content-center">
                                                    <button type="submit" class="btn btn-fill btn-rose">Guardar</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- fin de cuarto elemento -->

                                </div>
                            </div>

                        </div>
                    </div>
            </form>


        </div>
    </div>
</div>
<!-- Fin Modal -->


<!-- Modal -->
<div class="modal fade docs-anexo40-modal-lg" tabindex="-1" id="anexos" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h3 class="modal-title" id="exampleModalLongTitle">Anexo 40</h3>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close" style="color: red">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>

            <form method="post"  action="{{url('procesoanexo40/add') }}" autocomplete="off" class="form-horizontal">
                @csrf

                    <div class="content">
                        <div class="container-fluid">

                            <!-- Inicio de elemento -->
                            <div class="row justify-content-center">
                                <div class="col-md-12">
                                    <div class="card ">
                                        <div class="card-header card-header-rose card-header-icon">
                                            <div class="card-icon">
                                                <i class="material-icons">assignment</i>
                                            </div>
                                            <h4 class="card-title">Consulta subsecuentes</h4>
                                        </div>
                                        <div class="card-body ">
                                            <form method="#" action="#">
                                                <div class="row" >
                                                    <div class="col-md-5 mr-auto ml-auto">
                                                        <div class="card ">

                                                            <div class="card-body ">
                                                                <div class="form-group">
                                                                    <h5 class="card-title">Básicos:</h5>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-5 mr-auto ml-auto">
                                                        <div class="card ">
                                                            <div class="card-header card-header-rose card-header-text">
                                                                <div class="card-icon">
                                                                    <i class="material-icons">today</i>
                                                                </div>
                                                                <h4 class="card-title">Fecha:</h4>
                                                            </div>
                                                            <div class="card-body ">
                                                                <div class="form-group">
                                                                    <input type="text" class="form-control datepicker" value="" name="anx40_fecha">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <label class="col-sm-2 col-form-label">Nombre:</label>
                                                    <div class="col-sm-4">
                                                        <div class="form-group">
                                                            <input type="text" name="anx40_nombre" class="form-control" placeholder="">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <label class="col-sm-2 col-form-label">Edad:</label>
                                                    <div class="col-sm-4">
                                                        <div class="form-group">
                                                            <input type="text" name="anx40_edad" class="form-control" placeholder="">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <label class="col-sm-2 col-form-label">Gestas:</label>
                                                    <div class="col-sm-4">
                                                        <div class="form-group">
                                                            <input type="text" name="anx40_gestas" class="form-control" placeholder="">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <label class="col-sm-2 col-form-label">Partos:</label>
                                                    <div class="col-sm-4">
                                                        <div class="form-group">
                                                            <input type="text" name="anx40_partos" class="form-control" placeholder="">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <label class="col-sm-2 col-form-label">Cesáreas:</label>
                                                    <div class="col-sm-4">
                                                        <div class="form-group">
                                                            <input type="text" name="anx40_cesareas" class="form-control" placeholder="">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <label class="col-sm-2 col-form-label">Abortos:</label>
                                                    <div class="col-sm-4">
                                                        <div class="form-group">
                                                            <input type="text" name="anx40_abortos" class="form-control" placeholder="">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <label class="col-sm-2 col-form-label">Ectópicos:</label>
                                                    <div class="col-sm-4">
                                                        <div class="form-group">
                                                            <input type="text" name="anx40_ectopico" class="form-control" placeholder="">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <label class="col-sm-2 col-form-label">Grupo RH:</label>
                                                    <div class="col-sm-4">
                                                        <div class="form-group">
                                                            <input type="text" name="anx40_grupo_rh" class="form-control" placeholder="">
                                                        </div>
                                                    </div>
                                                </div>
                                                <br><br>
                                                <div class="row ">
                                                    <label class="col-sm-2 col-form-label"><small>Diagnósticos:</small></label>
                                                    <div class="col-sm-9">
                                                        <div class="form-group{{ $errors->has('description') ? ' has-danger' : '' }}">
                                                            <textarea  rows="2" class="form-control{{ $errors->has('description') ? ' is-invalid' : '' }}" name="anx40_diagnostico" id="input-description" type="text" placeholder=""  aria-required="true">{{ old('Exporacion Fisica:') }}</textarea>
                                                            @include('alerts.feedback', ['field' => 'description'])
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row ">
                                                    <label class="col-sm-2 col-form-label"><small>Subjetivo:</small></label>
                                                    <div class="col-sm-9">
                                                        <div class="form-group{{ $errors->has('description') ? ' has-danger' : '' }}">
                                                            <textarea  rows="2" class="form-control{{ $errors->has('description') ? ' is-invalid' : '' }}" name="anx40_subjetivo" id="input-description" type="text" placeholder=""  aria-required="true">{{ old('Exporacion Fisica:') }}</textarea>
                                                            @include('alerts.feedback', ['field' => 'description'])
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row ">
                                                    <label class="col-sm-2 col-form-label"><small>Objetivo:</small></label>
                                                    <div class="col-sm-9">
                                                        <div class="form-group{{ $errors->has('description') ? ' has-danger' : '' }}">
                                                            <textarea  rows="2" class="form-control{{ $errors->has('description') ? ' is-invalid' : '' }}" name="anx40_Objetivo" id="input-description" type="text" placeholder=""  aria-required="true">{{ old('Exporacion Fisica:') }}</textarea>
                                                            @include('alerts.feedback', ['field' => 'description'])
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row ">
                                                    <label class="col-sm-2 col-form-label"><small>Análisis:</small></label>
                                                    <div class="col-sm-9">
                                                        <div class="form-group{{ $errors->has('description') ? ' has-danger' : '' }}">
                                                            <textarea  rows="2" class="form-control{{ $errors->has('description') ? ' is-invalid' : '' }}" name="anx40_analisis" id="input-description" type="text" placeholder=""  aria-required="true">{{ old('Exporacion Fisica:') }}</textarea>
                                                            @include('alerts.feedback', ['field' => 'description'])
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row ">
                                                    <label class="col-sm-2 col-form-label"><small>Plan:</small></label>
                                                    <div class="col-sm-9">
                                                        <div class="form-group{{ $errors->has('description') ? ' has-danger' : '' }}">
                                                            <textarea  rows="2" class="form-control{{ $errors->has('description') ? ' is-invalid' : '' }}" name="anx40_plan" id="input-description" type="text" placeholder=""  aria-required="true">{{ old('Exporacion Fisica:') }}</textarea>
                                                            @include('alerts.feedback', ['field' => 'description'])
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row justify-content-center">
                                                    <button type="submit" class="btn btn-fill btn-rose">Guardar</button>
                                                </div>

                                        </div>

                                    </div>
                                </div>
                                <!-- fin de elemento -->



                            </div>


                        </div>
                    </div>
            </form>

        </div>
    </div>
</div>
<!-- Fin Modal -->
<!-- Fin Modal -->

<!-- Modal -->
<div class="modal fade docs-anexo4100-modal-lg" tabindex="-1" id="anexos" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h3 class="modal-title" id="exampleModalLongTitle">Anexo 40</h3>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close" style="color: red">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>


            <div class="content">
                <div class="container-fluid">

                </div>
            </div>

        </div>
    </div>
</div>
<!-- Fin Modal -->





<!-- Modal -->
<div class="modal fade docs-anexonueve-modal-lg" tabindex="-1" id="anexos" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h3 class="modal-title" id="exampleModalLongTitle">Dos</h3>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close" style="color: red">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>


            <div class="content">
                <div class="container-fluid">

                </div>
            </div>

        </div>
    </div>
</div>
<!-- Fin Modal -->

<!-- Modal -->
<div class="modal fade docs-anexonueve-modal-lg" tabindex="-1" id="anexos" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h3 class="modal-title" id="exampleModalLongTitle">Dos</h3>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close" style="color: red">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>


            <div class="content">
                <div class="container-fluid">

                </div>
            </div>

        </div>
    </div>
</div>
<!-- Fin Modal -->




<!-- Modal -->
<!-- Modal -->
<div class="modal fade docs-anexo341-modal-lg" tabindex="-1" id="anexos" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h3 class="modal-title" id="exampleModalLongTitle">Anexo 34</h3>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close" style="color: red">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>


            <div class="content col-lg-10">
                <div class="container-fluid">


                    <!-- Inicio de elemento -->
                    <!-- segundo elemento -->
                    <div class="row justify-content-center" >
                        <div class="col-md-30">
                            <div class="card">
                                <div class="card-header card-header-icon card-header-rose">
                                    <div class="card-icon">
                                        <i class="material-icons">assignment</i>
                                    </div>
                                    <h4 class="card-title ">CHECK-UP CONVENIO INSTITUCIONAL</h4>
                                </div>
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table class="table">
                                            <thead class=" text-primary">
                                            <th>
                                                PROCEDIMIENTO
                                            </th>
                                            <th>
                                                DR(A)/ENF.QUE REALIZA
                                                <br />EL PROCEDIMIENTO
                                            </th>
                                            <th>
                                                FECHA EN QUE SE REALIZO
                                                <br />EL ESTUDIO
                                            </th>
                                            <th>
                                                FECHA PROGRAMADA PARA
                                                <br />EL ESTUDIO
                                            </th>
                                            </thead>
                                            <tbody>
                                            <tr>
                                                <td>
                                                    USG Mamario
                                                </td>
                                                <td>
                                                    <div class="form-group">
                                                        <input type="text" name="anx34_USG_mamario_doc" class="form-control" placeholder="Medico:">
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="form-group">
                                                        <input type="text" name="anx34_USG_mamario_fr" class="form-control" placeholder="Fecha:">
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="form-group">
                                                        <input type="text" name="anx34_USG_mamario_fp" class="form-control" placeholder="Fecha:">
                                                    </div>
                                                </td>

                                            </tr>
                                            <tr>
                                                <td>
                                                    USG Pélvico
                                                </td>
                                                <td>
                                                    <div class="form-group">
                                                        <input type="text" name="anx34_USG_pelvico_doc"
                                                               class="form-control" placeholder="Medico:">
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="form-group">
                                                        <input type="text" name="anx34_USG_pelvico_fr"
                                                               class="form-control" placeholder="Fecha:">
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="form-group">
                                                        <input type="text" name="anx34_USG_pelvico_fp"
                                                               class="form-control" placeholder="Fecha:">
                                                    </div>
                                                </td>

                                            </tr>
                                            <tr>
                                                <td>
                                                    Papanicolau
                                                </td>
                                                <td>
                                                    <div class="form-group">
                                                        <input type="text" name="anx34_papanicolau_doc"
                                                               class="form-control" placeholder="Medico:">
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="form-group">
                                                        <input type="text" name="anx34_papanicolau_fr"
                                                               class="form-control" placeholder="Fecha:">
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="form-group">
                                                        <input type="text" name="anx34_papanicolau_fp"
                                                               class="form-control" placeholder="Fecha:">
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    Colposcopía
                                                </td>
                                                <td>
                                                    <div class="form-group">
                                                        <input type="text" name="anx34_colposcopia_doc"
                                                               class="form-control" placeholder="Medico:">
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="form-group">
                                                        <input type="text" name="anx34_colposcopia_fr"
                                                               class="form-control" placeholder="Fecha:">
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="form-group">
                                                        <input type="text" name="anx34_colposcopia_fp"
                                                               class="form-control" placeholder="Fecha:">
                                                    </div>
                                                </td>
                                            </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <div class="card-footer ml-auto mr-auto">
                                    <button type="submit" class="btn btn-rose">{{ __('Guardar ') }}</button>
                                </div>

                            </div>
                        </div>
                    </div>
                    <!-- fin de seguno elemento -->

                </div>
            </div>
        </div>
    </div>
</div>

<!-- Fin Modal -->





@push('js')

@endpush