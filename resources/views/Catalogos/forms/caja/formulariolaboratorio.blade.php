<!-- Modal -->
<div class="modal fade docs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h3 class="modal-title" id="exampleModalLongTitle">Agregar Estudios</h3>
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
                    
             <form action="{{route('addlaboratorioedit',$id)}}" autocomplete="off" class="form-horizontal" method="post" enctype="multipart/form-data">
                @csrf
                @method('post')
                       
              <div class="row">
                <label class="col-sm-2 col-form-label">Nota</label>
                <div class="col-sm-10">
                  <div class="form-group bmd-form-group is-filled">
                    <input class="form-control" name="resultado" id="resultado" type="text" placeholder="Notas" required="true" aria-required="true">
                  </div>
                </div>
              </div>
              
              <div class="row">
                <div class="col-6">
                <h4></h4>
                    <label for="">Archivo 1</label>
                    <input type="file" class="form-control" name="file1" required>
                </div>
                <div class="col-6">
                <h4></h4>
                    <label for="">Archivo 2</label>
                    <input type="file" class="form-control" name="file2" >
                    </div>
              </div>
              
              <div class="row">
                <div class="col-6">
                <h4></h4>
                    <label for="">Archivo 3</label>
                    <input type="file" class="form-control" name="file3" >
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