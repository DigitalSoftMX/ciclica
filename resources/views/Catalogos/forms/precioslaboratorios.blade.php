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
                  <form id="myform" method="post" action="" autocomplete="off" class="form-horizontal">
                    @csrf
                    @method('post')
              
              <div class="row">
                <label class="col-sm-2 col-form-label">Codigo</label>
                <div class="col-sm-7">
                  <div class="form-group bmd-form-group is-filled">
                    <input class="form-control" name="codigo" id="codigo" type="text" placeholder="Codigo" required="true" aria-required="true">
                  </div>
                </div>
              </div>

              <div class="row">
                <label class="col-sm-2 col-form-label">Clave</label>
                <div class="col-sm-7">
                  <div class="form-group bmd-form-group is-filled">
                    <input class="form-control" name="clave" id="clave" type="text" placeholder="Clave" required="true" aria-required="true">
                  </div>
                </div>
              </div>

               <div class="row">
                <label class="col-sm-2 col-form-label">Precio</label>
                <div class="col-sm-7">
                  <div class="form-group bmd-form-group is-filled">
                    <input class="form-control" name="precio" id="precio" type="text" placeholder="Precio" required="true" aria-required="true">
                  </div>
                </div>
              </div>


               <div class="row">
                <label class="col-sm-2 col-form-label">Descripción</label>
                <div class="col-sm-7">
                  <div class="form-group bmd-form-group is-filled">
                    <input class="form-control" name="descripcion" id="descripcion" type="text" placeholder="Descripción" required="true" aria-required="true">
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
  
       if(variable == "nuevo"){
      $(".form-control").val("");
        $("#myform").attr("action","{{$catalog->getUrlPrefix()}}/add");
    }
    else{
       $("#myform").attr("action","{{$catalog->getUrlPrefix()}}/edit/"+""+variable+"");
  
  
    $.ajax({
    data: {"clave" : variable},
    type: "GET",
    dataType: "json",
    url: "../public/{{$catalog->getUrlPrefix()}}/edit/"+""+variable+"",
    success: function (data) {
             var item = [];
            for (var i = 0, max = data.data.length; i < max; i++) {
                var clave = data.data[i].clave;
                var precio = data.data[i].precio;
                var descripcion = data.data[i].descripcion;
                var codigo = data.data[i].codigo;
              }

               $("#codigo").val(codigo);  
               $("#clave").val(clave);  
               $("#precio").val(precio);  
               $("#descripcion").val(descripcion);  
             
          }
    });
    }

};
 </script>
       
@endpush
