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
