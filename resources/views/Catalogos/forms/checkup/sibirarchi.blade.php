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
                
                        </div>
                        <div class="modal-footer">
                          <input type="submit" class="btn btn-finish btn-fill btn-rose btn-wd" onclick="FFunction()" name="finish" value="Aceptar">
                          <button type="button" class="btn btn-danger btn-link" data-dismiss="modal">Cerrar</button>
                        </div>
                      </div>
                    </div>
                  </div>
   
<!-- Modal -->
<div class="modal fade docs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h3 class="modal-title" id="exampleModalLongTitle">{{$catalog->getName()}}</h3>
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
                    
               <form id="myform" method="post" action="" autocomplete="off" class="form-horizontal" enctype="multipart/form-data">
                    @csrf
                    @method('post')
           
              
              <div class="row">
                <div class="col-6">
                <h4></h4>
                    <label for="">Archivo</label>
                    <input type="file" class="form-control" name="file1" required>
                </div>
              </div>
              
             

               </div>
              </div>
            </div>
          </div>
        </div>
                 <button type="submit" class="btn btn-primary" align="left">Aceptar</button>
      </div>
                </form>
      </div>
      <div class="card-footer ml-auto">
      </div>
    </div>
  </div>
</div>

<!-- Modal -->
<div class="modal fade docs-exampleenferm-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h3 class="modal-title" id="exampleModalLongTitle">{{$catalog->getName()}}</h3>
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
                    
               <form id="myforms" method="post" action="" autocomplete="off" class="form-horizontal">
                    @csrf
                    @method('post')
           
              
              <div class="modal-body">
                                <div class="input-group form-control-lg">
                                    <label for="exampleInput1" class="col-sm-6">Fecha</label>
                                      <div class="form-group col-sm-8">
                                      <input type="date" class="form-control col-sm-12" id="min" name="min">
                                    </div>
                                </div>
                
                        </div>
              
             

               </div>
              </div>
            </div>
          </div>
        </div>
                 <button type="submit" class="btn btn-primary" align="left">Aceptar</button>
      </div>
                </form>
      </div>
      <div class="card-footer ml-auto">
      </div>
    </div>
  </div>
</div>


@push('js')
  <script>

function tipo(variable){
  
       $("#myform").attr("action","citascheckup/edit/"+""+variable+"");
       $("#myforms").attr("action","citascheckup/edit/"+""+variable+"");
};

 </script>
 <script src="{{ asset('select2/select2.full.min.js')}}"></script>
  
@endpush