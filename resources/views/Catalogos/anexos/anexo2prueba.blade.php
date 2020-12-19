
<!-- Modal -->
<div class="modal fade docs-anexo2-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h3 class="modal-title" id="exampleModalLongTitle">Anexo 2</h3>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close" style="color: red">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>

            <div class="modal-body">



                <form method="post" action="{{url('procesoanexo2/add') }}" autocomplete="off" class="form-horizontal">
                    @csrf
                    @method('post')

                    <div class="row">
                        <div class="col-md-6">
                            <div class="card ">
                                <div class="card-header card-header-rose card-header-icon">
                                    <div class="card-icon">
                                        <i class="material-icons">battery_std</i>
                                    </div>
                                    <h4 class="card-title">Nictámero</h4>
                                </div>
                                <div class="card-body ">

                                    <div class="form-group">
                                        <label for="exampleEmail" class="bmd-label-floating">Consumo de liquidos por día (lts)</label>
                                        <input type="text" name="anx2_consumo_lt" class="form-control" id="exampleEmail">
                                    </div>
                                    <div class="form-group">
                                        <div class="card-header text-center">
                                            <h5 class="card-title">
                                                Incontinencia urinara de urgencia
                                            </h5>
                                        </div>
                                    </div>
                                    <div class="row justify-content-center ">
                                        <div class="form-check">
                                            <label class="form-check-label">
                                                <input class="form-check-input" type="radio" name="anx2_urina_urgen_1" value="Presente" > Presente
                                                <span class="circle">
                                                        <span class="check"></span>
                                                        </span>
                                            </label>
                                        </div>

                                        <div class="form-check">
                                            <label class="form-check-label">
                                                <input class="form-check-input" type="radio" name="anx2_urina_urgen_1" value="Ausente" > Ausente
                                                <span class="circle">
                                                        <span class="check"></span>
                                                        </span>
                                            </label>
                                        </div>

                                    </div>
                                    <div class="form-group">
                                        <label for="exampleEmail" class="bmd-label-floating">Tiempo de evolución</label>
                                        <input type="text" class="form-control" name="anx2_TiempoE" id="exampleEmail">
                                    </div>

                                    <div class="form-group">
                                        <label for="exampleEmail" class="bmd-label-floating">Frecuencia</label>
                                        <input type="text" class="form-control" name="anx2_Frecuencia" id="exampleEmail">
                                    </div>

                                    <div class="form-group">
                                        <label for="exampleEmail" class="bmd-label-floating">Cantidad Perdida</label>
                                        <input type="text" class="form-control" name="anx2_Cantidadp" id="exampleEmail">
                                    </div>


                                </div>
                            </div>
                        </div>


                        <!-- fin de elemento -->
                        <!-- segundo elemento -->
                        <div class="col-md-6">
                            <div class="card ">
                                <div class="card-header card-header-rose card-header-icon">
                                    <div class="card-icon">
                                        <i class="material-icons">battery_std</i>
                                    </div>
                                </div>
                                <div class="card-body ">
                                    <div class="form-group">
                                        <div class="card-header text-center">
                                            <h5 class="card-title">Incontinencia urinaria de esfuerzo</h5>
                                        </div>
                                    </div>
                                    <div class="row justify-content-center ">
                                        <div class="form-check">
                                            <label class="form-check-label">
                                                <input class="form-check-input" type="radio" name="anx2_IUE" value="Presente" checked> Presente
                                                <span class="circle"><span class="check"></span></span>
                                            </label>
                                        </div>

                                        <div class="form-check">
                                            <label class="form-check-label">
                                                <input class="form-check-input" type="radio" name="anx2_IUE" value="Ausente" checked> Ausente
                                                <span class="circle"><span class="check"></span></span>
                                            </label>
                                        </div>

                                    </div>
                                    <div class="form-group">
                                        <label for="exampleEmail" class="bmd-label-floating">Tiempo de evolución</label>
                                        <input type="text" class="form-control" name="anx2_TiempoE2" id="exampleEmail">
                                    </div>

                                    <div class="form-group">
                                        <label for="exampleEmail" class="bmd-label-floating">Frecuencia</label>
                                        <input type="text" class="form-control" name="anx2_Frecuencia2" id="exampleEmail">
                                    </div>

                                    <div class="form-group">
                                        <label for="exampleEmail" class="bmd-label-floating">Cantidad Perdida</label>
                                        <input type="text" class="form-control" name="anx2_Cantidadp2" id="exampleEmail">
                                    </div>

                                </div>

                            </div>
                        </div>
                        <!-- fin de seguno elemento -->
                        <!-- tercer elemento -->
                        <div class="col-md-10 justify-content-center">
                            <div class="card ">
                                <div class="card-header card-header-rose card-header-icon">
                                    <div class="card-icon">
                                        <i class="material-icons">battery_std</i>
                                    </div>
                                </div>
                                <div class="card-body ">
                                    <div class="row justify-content-center">
                                        <label class="col-sm-3 col-form-label label-checkbox">Chorro miccional </label>
                                        <div class="col-sm-4">
                                            <div class="form-group bmd-form-group">
                                                <div class="form-check">
                                                    <label class="form-check-label">
                                                        <input class="form-check-input" type="radio" name="anx2_CMiccional" value="Completo"> Completo<span class="circle">
                        <span class="check"></span></span>
                                                    </label>
                                                </div>
                                                <div class="form-check">
                                                    <label class="form-check-label">
                                                        <input class="form-check-input" type="radio" name="anx2_CMiccional" value="Incompleto"> Incompleto<span class="circle">
                        <span class="check"></span></span>
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row justify-content-center">
                                        <label class="col-sm-3 col-form-label label-checkbox">Sensación de vaciamiento </label>
                                        <div class="col-sm-4">
                                            <div class="form-group bmd-form-group">
                                                <div class="form-check">
                                                    <label class="form-check-label">
                                                        <input class="form-check-input" type="radio" name="anx2_SVaciamiento" value="Completo"> Completo<span class="circle">
                        <span class="check"></span></span>
                                                    </label>
                                                </div>
                                                <div class="form-check">
                                                    <label class="form-check-label">
                                                        <input class="form-check-input" type="radio" name="anx2_SVaciamiento" value="Incompleto"> Incompleto<span class="circle">
                        <span class="check"></span></span>
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row justify-content-center">
                                        <label class="col-sm-3 col-form-label label-checkbox">Disuria </label>
                                        <div class="col-sm-4">
                                            <div class="form-group bmd-form-group">
                                                <div class="form-check">
                                                    <label class="form-check-label">
                                                        <input class="form-check-input" type="radio" name="anx2_Disuria" value="Si"> Si<span class="circle">
                        <span class="check"></span></span>
                                                    </label>
                                                </div>
                                                <div class="form-check">
                                                    <label class="form-check-label">
                                                        <input class="form-check-input" type="radio" name="anx2_Disuria" value="No"> No<span class="circle">
                        <span class="check"></span></span>
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row justify-content-center">
                                        <label class="col-sm-3 col-form-label label-checkbox">Hematuria </label>
                                        <div class="col-sm-4">
                                            <div class="form-group bmd-form-group">
                                                <div class="form-check">
                                                    <label class="form-check-label">
                                                        <input class="form-check-input" type="radio" name="anx2_Hematuria" value="Si"> Si<span class="circle">
                        <span class="check"></span></span>
                                                    </label>
                                                </div>
                                                <div class="form-check">
                                                    <label class="form-check-label">
                                                        <input class="form-check-input" type="radio" name="anx2_Hematuria" value="No"> No<span class="circle">
                        <span class="check"></span></span>
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- fin de tercer elemento -->



                        <!-- cuarto elemento -->

                        <div class="col-md-12 justify-content-center">
                            <div class="card ">
                                <div class="card-header card-header-rose card-header-text">
                                    <div class="card-text">
                                        <h4 class="card-title">Exploración Física</h4>
                                    </div>
                                </div>
                                <div class="card-body ">

                                    <div class="row justify-content-center">
                                        <div class="row col-sm-4 mr-auto ml-auto">
                                            <label class="col-sm-3 col-form-label label-checkbox">Sensación de cuerpo extraño</label>
                                            <div class="col-sm-2  checkbox-radios">
                                                <div class="form-check">
                                                    <label class="form-check-label">
                                                        <input class="form-check-input" type="radio" name="anx2_SCE" value="Si" checked> Si
                                                        <span class="circle"><span class="check"></span></span>
                                                    </label>
                                                </div>
                                                <div class="form-check">
                                                    <label class="form-check-label">
                                                        <input class="form-check-input" type="radio" name="anx2_SCE" value="No"> No
                                                        <span class="circle"><span class="check"></span></span>
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row col-sm-4 mr-auto ml-auto">
                                            <label class="col-sm-3 col-form-label label-checkbox">Resequedad vaginal </label>
                                            <div class="col-2  checkbox-radios">
                                                <div class="form-check">
                                                    <label class="form-check-label">
                                                        <input class="form-check-input" type="radio" name="anx2_Rvaginal" value="Si" checked> Si
                                                        <span class="circle">
                        <span class="check"></span>
                      </span>
                                                    </label>
                                                </div>
                                                <div class="form-check">
                                                    <label class="form-check-label">
                                                        <input class="form-check-input" type="radio" name="anx2_Rvaginal" value="No"> No
                                                        <span class="circle">
                        <span class="check"></span>
                      </span>
                                                    </label>
                                                </div>

                                            </div>
                                        </div>
                                        <div class="row col-sm-4 mr-auto ml-auto">
                                            <label class="col-sm-3 col-form-label label-checkbox">Ardor</label>
                                            <div class="col-sm-2  checkbox-radios">
                                                <div class="form-check">
                                                    <label class="form-check-label">
                                                        <input class="form-check-input" type="radio" name="anx2_ardor" value="Si" checked> Si
                                                        <span class="circle"><span class="check"></span></span>
                                                    </label>
                                                </div>
                                                <div class="form-check">
                                                    <label class="form-check-label">
                                                        <input class="form-check-input" type="radio" name="anx2_ardor" value="No"> No
                                                        <span class="circle"><span class="check"></span></span>
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <br>  <br>  <br>  <br>
                                    <div class="row justify-content-center">
                                        <div class="row col-sm-4 mr-auto ml-auto">
                                            <label class="col-sm-3 col-form-label label-checkbox">Prurito</label>
                                            <div class="col-sm-2  checkbox-radios">
                                                <div class="form-check">
                                                    <label class="form-check-label">
                                                        <input class="form-check-input" type="radio" name="anx2_prurito" value="Si" checked> Si
                                                        <span class="circle"><span class="check"></span></span>
                                                    </label>
                                                </div>
                                                <div class="form-check">
                                                    <label class="form-check-label">
                                                        <input class="form-check-input" type="radio" name="anx2_prurito" value="No"> No
                                                        <span class="circle"><span class="check"></span></span>
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row col-sm-4 mr-auto ml-auto">
                                            <label class="col-sm-3 col-form-label label-checkbox">Estreñimiento</label>
                                            <div class="col-sm-2  checkbox-radios">
                                                <div class="form-check">
                                                    <label class="form-check-label">
                                                        <input class="form-check-input" type="radio" name="anx2_estre" value="Si"> Si
                                                        <span class="circle"><span class="check"></span></span>
                                                    </label>
                                                </div>
                                                <div class="form-check">
                                                    <label class="form-check-label">
                                                        <input class="form-check-input" type="radio" name="anx2_estre" value="No"> No
                                                        <span class="circle"><span class="check"></span></span>
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row col-sm-4 mr-auto ml-auto">
                                            <label class="col-sm-3 col-form-label label-checkbox">Consumo de laxantes</label>
                                            <div class="col-sm-2  checkbox-radios">
                                                <div class="form-check">
                                                    <label class="form-check-label">
                                                        <input class="form-check-input" type="radio" name="anx2_Claxantes" value="Si" checked> Si
                                                        <span class="circle"><span class="check"></span></span>
                                                    </label>
                                                </div>
                                                <div class="form-check">
                                                    <label class="form-check-label">
                                                        <input class="form-check-input" type="radio" name="anx2_Claxantes" value="No"> No
                                                        <span class="circle"><span class="check"></span></span>
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <br>  <br>  <br>  <br>
                                    <div class="row justify-content-center">
                                        <div class="col-md-2 mr-auto ml-auto">
                                            <label for="exampleTalla" class="bmd-label-floating">Evacuaciones al dia #</label>
                                            <input class="form-control" name="anx2_evacuacion" id="talla" type="text" placeholder="" value=""  aria-required="true">
                                        </div>
                                        <div class="row col-sm-5 mr-auto ml-auto">
                                            <label class="col-sm-4 col-form-label label-checkbox">Icontinencia a flatos o heces</label>
                                            <div class="col-sm-2  checkbox-radios">
                                                <div class="form-check">
                                                    <label class="form-check-label">
                                                        <input class="form-check-input" type="radio" name="anx2_IFH" value="Si" checked> Si
                                                        <span class="circle"><span class="check"></span></span>
                                                    </label>
                                                </div>
                                                <div class="form-check">
                                                    <label class="form-check-label">
                                                        <input class="form-check-input" type="radio" name="anx2_IFH" value="No"> No
                                                        <span class="circle"><span class="check"></span></span>
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row col-sm-4 mr-auto ml-auto">
                                            <label class="col-sm-3 col-form-label label-checkbox">Vida Sexual Activa</label>
                                            <div class="col-sm-2  checkbox-radios">
                                                <div class="form-check">
                                                    <label class="form-check-label">
                                                        <input class="form-check-input" type="radio" name="anx2_VSA" value="Si" checked> Si
                                                        <span class="circle"><span class="check"></span></span>
                                                    </label>
                                                </div>
                                                <div class="form-check">
                                                    <label class="form-check-label">
                                                        <input class="form-check-input" type="radio" name="anx2_VSA" value="No"> No
                                                        <span class="circle"><span class="check"></span></span>
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <br>  <br>  <br>  <br>
                                    <div class="row justify-content-center">
                                        <div class="row col-sm-4 mr-auto ml-auto">
                                            <label class="col-sm-3 col-form-label label-checkbox">Dispareunia</label>
                                            <div class="col-sm-2  checkbox-radios">
                                                <div class="form-check">
                                                    <label class="form-check-label">
                                                        <input class="form-check-input" type="radio" name="anx2_dispa" value="Si" checked> Si
                                                        <span class="circle"><span class="check"></span></span>
                                                    </label>
                                                </div>
                                                <div class="form-check">
                                                    <label class="form-check-label">
                                                        <input class="form-check-input" type="radio" name="anx2_dispa" value="No"> No
                                                        <span class="circle"><span class="check"></span></span>
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row col-sm-4 mr-auto ml-auto">
                                            <label class="col-sm-3 col-form-label label-checkbox">Icontinencia  durante penetracion u orgasmo</label>
                                            <div class="col-sm-2  checkbox-radios">
                                                <div class="form-check">
                                                    <label class="form-check-label">
                                                        <input class="form-check-input" type="radio" name="anx2_pene_orga" value="Si" checked> Si
                                                        <span class="circle"><span class="check"></span></span>
                                                    </label>
                                                </div>
                                                <div class="form-check">
                                                    <label class="form-check-label">
                                                        <input class="form-check-input" type="radio" name="anx2_pene_orga" value="No"> No
                                                        <span class="circle"><span class="check"></span></span>
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row col-sm-4 mr-auto ml-auto">
                                            <label class="col-sm-3 col-form-label label-checkbox">Reflejos perineales</label>
                                            <div class="col-sm-2  checkbox-radios">
                                                <div class="form-check">
                                                    <label class="form-check-label">
                                                        <input class="form-check-input" type="radio" name="anx2_ReflejosPe" value="Presentes" checked> Presentes
                                                        <span class="circle"><span class="check"></span></span>
                                                    </label>
                                                </div>
                                                <div class="form-check">
                                                    <label class="form-check-label">
                                                        <input class="form-check-input" type="radio" name="anx2_ReflejosPe" value="Ausentes"> Ausentes
                                                        <span class="circle"><span class="check"></span></span>
                                                    </label>
                                                </div>
                                                <div class="form-check">
                                                    <label class="form-check-label">
                                                        <input class="form-check-input" type="radio" name="anx2_ReflejosPe" value="Normales"> Normales
                                                        <span class="circle"><span class="check"></span></span>
                                                    </label>
                                                </div>
                                                <div class="form-check">
                                                    <label class="form-check-label">
                                                        <input class="form-check-input" type="radio" name="anx2_ReflejosPe" value="Disminuidos"> Disminuidos
                                                        <span class="circle"><span class="check"></span></span>
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <br>  <br>  <br>  <br>
                                    <div class="row justify-content-center">
                                        <div class="row col-sm-4 mr-auto ml-auto">
                                            <label class="col-sm-3 col-form-label label-checkbox">Prueba de la tos con vejiga</label>
                                            <div class="col-sm-2  checkbox-radios">
                                                <div class="form-check">
                                                    <label class="form-check-label">
                                                        <input class="form-check-input" type="radio" name="anx2_PTV" value="Llena" checked> Llena
                                                        <span class="circle"><span class="check"></span></span>
                                                    </label>
                                                </div>
                                                <div class="form-check">
                                                    <label class="form-check-label">
                                                        <input class="form-check-input" type="radio" name="anx2_PTV" value="Vacia"> Vacia
                                                        <span class="circle"><span class="check"></span></span>
                                                    </label>
                                                </div>
                                                <div class="form-check">
                                                    <label class="form-check-label">
                                                        <input class="form-check-input" type="radio" name="anx2_PTV" value="Positiva"> Positiva
                                                        <span class="circle"><span class="check"></span></span>
                                                    </label>
                                                </div>
                                                <div class="form-check">
                                                    <label class="form-check-label">
                                                        <input class="form-check-input" type="radio" name="anx2_PTV" value="Negativa"> Negativa
                                                        <span class="circle"><span class="check"></span></span>
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row col-sm-4 mr-auto ml-auto">
                                            <label class="col-sm-3 col-form-label label-checkbox">Atrofia Vaginal</label>
                                            <div class="col-sm-2  checkbox-radios">
                                                <div class="form-check">
                                                    <label class="form-check-label">
                                                        <input class="form-check-input" type="radio" name="anx2_AtroVagi" value="Presente" checked> Presente
                                                        <span class="circle"><span class="check"></span></span>
                                                    </label>
                                                </div>
                                                <div class="form-check">
                                                    <label class="form-check-label">
                                                        <input class="form-check-input" type="radio" name="anx2_AtroVagi" value="Ausente"> Ausente
                                                        <span class="circle"><span class="check"></span></span>
                                                    </label>
                                                </div>
                                                <div class="form-check">
                                                    <label class="form-check-label">
                                                        <input class="form-check-input" type="radio" name="anx2_AtroVagi" value="Leve"> Leve
                                                        <span class="circle"><span class="check"></span></span>
                                                    </label>
                                                </div>
                                                <div class="form-check">
                                                    <label class="form-check-label">
                                                        <input class="form-check-input" type="radio" name="anx2_AtroVagi" value="Moderada"> Moderada
                                                        <span class="circle"><span class="check"></span></span>
                                                    </label>
                                                </div>
                                                <div class="form-check">
                                                    <label class="form-check-label">
                                                        <input class="form-check-input" type="radio" name="anx2_AtroVagi" value="Severa"> Severa
                                                        <span class="circle"><span class="check"></span></span>
                                                    </label>
                                                </div>
                                            </div>
                                        </div>


                                    </div>
                                    <div class="row col-sm-12 mr-auto ml-auto">
                                        <label class="col-sm-3 col-form-label"><small>Notas:</small></label>
                                        <div class="col-sm-7">
                                            <div class="form-group{{ $errors->has('description') ? ' has-danger' : '' }}">
                                                <textarea  rows="4" class="form-control{{ $errors->has('description') ? ' is-invalid' : '' }}" name="anx2_notas" id="input-description" type="text" placeholder=""  aria-required="true">{{ old('Exporacion Fisica:') }}</textarea>
                                                @include('alerts.feedback', ['field' => 'description'])
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- fin de cuarto elemento -->




                        <div class="row justify-content-center">
                            <button type="submit" class="btn btn-fill btn-rose">Guardar</button>
                        </div>
                </form>
            </div>
        </div>
    </div>
</div>
</div>
</div>






@push('js')



@endpush