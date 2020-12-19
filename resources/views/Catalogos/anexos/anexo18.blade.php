
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
