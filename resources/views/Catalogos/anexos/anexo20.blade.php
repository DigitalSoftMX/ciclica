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
