<div class="modal fade docs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h3 class="modal-title" id="exampleModalLongTitle">Agendar Citas</h3>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close" style="color: red">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="card">
          <div class="card-body">
            <div class="tab-content">
              <div class="tab-pane active">
                <div class="card-body ">
                  <div class="row">
                    <label class="col-sm-2 col-form-label">Numero de Paciente</label>
                    <div class="col-sm-10">
                      <div class="form-group bmd-form-group is-filled">
                        <input class="form-control" name="numpac" id="numpac" type="text" placeholder="Numeo de Paciente" required="true" aria-required="true">
                      </div>
                    </div>
                
                    <label class="col-sm-2 col-form-label">Nota</label>
                    <div class="col-sm-10">
                      <div class="form-group bmd-form-group is-filled">
                        <input class="form-control" name="nota" id="nota" type="text" placeholder="Nota">
                        <input name="fechstart" id="fechstart" type="hidden">
                        <input name="fechend" id="fechend" type="hidden">
                        <input name="img" id="img" type="hidden">
                      </div>
                    </div>
                    
                    <label class="col-sm-2 col-form-label" id="cat">Checkup</label>
                    <div class="col-sm-10">
                      <div class="form-group bmd-form-group is-filled">
                      <input class="form-control" style="background: white; width: 100%;" name="id_checkup" id="id_checkup" type="text" >
                      </div>
                   
                      <div class="form-group bmd-form-group is-filled">
                      <input class="form-control" name="id_checkup1722" id="id_checkup1722" type="text">
                      </div>
                    </div>
                    
                  </div>

                </div>
              </div>
            </div>
          </div>
        </div>
        <button type="button" class="btn btn-primary" align="left" onclick=citas()>Aceptar</button>
      </div>
    </div>
    <div class="card-footer ml-auto">
    </div>
  </div>
</div>

<div class="modal fade myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="false">
                    <div class="modal-dialog">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h4 class="modal-title">Filtros</h4>
                          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                            <i class="material-icons">clear</i>
                          </button>
                        </div>
                          <div class="modal-body">
                                <div class="row">
                                  <label class="col-sm-3 col-form-label">Nombre</label>
                                  <div class="col-sm-6">
                                    <div class="form-group bmd-form-group">
                                      <input class="form-control" type="text" name="name" id="name" number="true" required="true" >
                                    </div>
                                  </div>
                                </div>
                                <div class="row">
                                  <label class="col-sm-3 col-form-label">Apellido Paterno</label>
                                  <div class="col-sm-6">
                                    <div class="form-group bmd-form-group">
                                      <input class="form-control" name="app_name" id="app_name" type="text" >
                                    </div>
                                  </div>
                                  </div>
                                  <div class="row">
                                  <label class="col-sm-3 col-form-label">Apellido Materno</label>
                                  <div class="col-sm-6">
                                    <div class="form-group bmd-form-group">
                                      <input class="form-control" name="apm_name" id="apm_name" type="text" >
                                    </div>
                                  </div>
                                </div>
                                <div class="row">
                                  <label class="col-sm-3 col-form-label">No. del Paciente</label>
                                  <div class="col-sm-6">
                                    <div class="form-group bmd-form-group">
                                      <input class="form-control" name="username" id="username" type="text" number="true" >
                                    </div>
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