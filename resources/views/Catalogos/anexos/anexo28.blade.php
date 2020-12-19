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