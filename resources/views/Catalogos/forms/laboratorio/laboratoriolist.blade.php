  <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
                    <div class="modal-dialog">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h4 class="modal-title">Filtros</h4>
                          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                            <i class="material-icons">clear</i>
                          </button>
                        </div>
                          <div class="modal-body">
                                <div class="input-group form-control-lg">
                                    <label for="exampleInput1" class="col-sm-6">Fecha de inicio</label>
                                      <div class="form-group col-sm-8">
                                      <input type="date" class="form-control col-sm-12" id="min" name="min">
                                    </div>
                                   <label for="exampleInput1" class="col-sm-6">Fecha final</label>
                                      <div class="form-group col-sm-8">
                                      <input type="date" class="form-control col-sm-12" id="max" name="max">
                                    </div>
                                </div>
                                <div class="input-group form-control-lg">
                                   <div class="form-group col-sm-6">
                                      <label for="exampleInput1" class="bmd-label-floating">Paciente</label>
                                      <input type="text" class="form-control col-sm-12" id="id_paciente" name="id_paciente">
                                    </div>
                                </div>
                
                        </div>
                        <div class="modal-footer">
                          <input type="submit" class="btn btn-finish btn-fill btn-rose btn-wd" onclick="FFunction()" name="finish" value="Aceptar">
                          <button type="button" class="btn btn-danger btn-link" data-dismiss="modal">Cerrar</button>
                        </div>
                      </div>
                    </div>
                  </div>