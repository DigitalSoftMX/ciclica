<!-- Modal -->
<div class="modal fade docs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h3 class="modal-title" id="exampleModalLongTitle">Agregar costo</h3>
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
                  <form action="{{route('addcajacitas',$id)}}" autocomplete="off" class="form-horizontal" method="post" enctype="multipart/form-data">
                       
                    @csrf
                    @method('post')
                            <div class="modal-body">
                                <div class="input-group form-control-lg">
                                    <div class="form-group col-sm-12">
                                      <input type="text" class="form-control col-sm-12" id="id_precio_lab" name="id_precio_lab" style="width:100%" required>
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
@endpush