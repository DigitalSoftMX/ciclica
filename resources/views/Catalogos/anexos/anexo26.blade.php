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
