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
