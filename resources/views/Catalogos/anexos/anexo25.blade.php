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
