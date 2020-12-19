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
