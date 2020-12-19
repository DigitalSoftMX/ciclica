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