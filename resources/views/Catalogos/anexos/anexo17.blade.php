
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
            </form>
