   <form method="post"  action="{{url('procesoanexo22/add') }}" autocomplete="off" class="form-horizontal">
                @csrf


                    <div class="content">
                        <div class="container-fluid">

                            <div class="row justify-content-center" >
                                <div class="col-md-18">
                                    <div class="card">
                                        <div class="card-header card-header-icon card-header-rose">
                                            <div class="card-icon">
                                                <i class="material-icons">assignment</i>
                                            </div>
                                            <h4 class="card-title ">CHECK-UP CONVENIO INSTITUCIONAL</h4>
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
                                                                <input type="text" name="anx22_USG_Mamario_Doc" class="form-control" placeholder="Medico:">
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="form-group">
                                                                <input type="text" name="anx22_USG_Mamario_FR" class="form-control datepicker" placeholder="Fecha:">
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="form-group">
                                                                <input type="text" name="anx22_USG_Mamario_FP" class="form-control datepicker" placeholder="Fecha:">
                                                            </div>
                                                        </td>

                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            USG Pélvico
                                                        </td>
                                                        <td>
                                                            <div class="form-group">
                                                                <input type="text" name="anx22_USG_Pelvico_doc" class="form-control" placeholder="Medico:">
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="form-group">
                                                                <input type="text" name="anx22_USG_Pelvico_FR" class="form-control datepicker" placeholder="Fecha:">
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="form-group">
                                                                <input type="text" name="anx22_USG_Pelvico_FP" class="form-control datepicker" placeholder="Fecha:">
                                                            </div>
                                                        </td>

                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            Papanicolau
                                                        </td>
                                                        <td>
                                                            <div class="form-group">
                                                                <input type="text" name="anx22_Papanicolau_Doc" class="form-control" placeholder="Medico:">
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="form-group">
                                                                <input type="text" name="anx22_Papanicolau_FR" class="form-control datepicker" placeholder="Fecha:">
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="form-group">
                                                                <input type="text"  name="anx22_Papanicolau_FP" class="form-control datepicker" placeholder="Fecha:">
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            Colposcopía
                                                        </td>
                                                        <td>
                                                            <div class="form-group">
                                                                <input type="text" name="anx22_Colposcopia_Doc" class="form-control" placeholder="Medico:">
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="form-group">
                                                                <input type="text" name="anx22_Colposcopia_FR" class="form-control datepicker" placeholder="Fecha:">
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="form-group">
                                                                <input type="text" name="anx22_Colposcopia_FP" class="form-control datepicker" placeholder="Fecha:">
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
