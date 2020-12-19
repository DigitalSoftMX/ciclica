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
                <label class="col-sm-2 col-form-label">Concepto</label>
                <div class="col-sm-10">
                  <div class="form-group bmd-form-group is-filled">
                    <input class="form-control" name="concepto" id="concepto" type="text" placeholder="Concepto" required="true" aria-required="true">
                  </div>
                </div>
              </div>

               <div class="row">
                <label class="col-sm-2 col-form-label">Monto</label>
                <div class="col-sm-4">
                  <div class="form-group bmd-form-group is-filled">
                    <input class="form-control" name="monto" id="monto" type="text" placeholder="Monto" required="true" aria-required="true">
                  </div>
                </div>
                <label class="col-sm-2 col-form-label">Deuda</label>
                <div class="col-sm-4">
                  <div class="form-group bmd-form-group is-filled">
                    <input class="form-control" name="deuda" id="deuda" type="text" placeholder="Deuda" required="true" aria-required="true">
                  </div>
                </div>
              </div>


               <div class="row">
                <label class="col-sm-2 col-form-label">Fecha de pago</label>
                <div class="col-sm-4">
                  <div class="form-group bmd-form-group is-filled">
                    <input class="form-control" name="fech_pago" id="fech_pago" type="text" placeholder="Fecha de pago" required="true" aria-required="true">
                  </div>
                </div>
                <label class="col-sm-2 col-form-label">Forma de pago</label>
                <div class="col-sm-4">
                  <div class="form-group bmd-form-group is-filled">
                    <input class="form-control" name="form_pago" id="form_pago" type="text" placeholder="Forma de pago" required="true" aria-required="true">
                  </div>
                </div>
              </div>

              <div class="row">
                <label class="col-sm-2 col-form-label">Paciente</label>
                <div class="col-sm-4">
                  <div class="form-group bmd-form-group is-filled">
                    <input class="form-control" name="id_paciente" id="id_paciente" type="text" placeholder="Paciente" required="true" aria-required="true">
                  </div>
                </div>
                <label class="col-sm-2 col-form-label">Facturación</label>
                <div class="col-sm-4">
                  <div class="form-group bmd-form-group is-filled">
                    <input class="form-control" name="id_facturacion" id="id_facturacion" type="text" placeholder="Facturación" required="true" aria-required="true">
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
                var tipo = data.data[i].tipo;
              }

               $("#clave").val(clave);  
               $("#precio").val(precio);  
               $("#descripcion").val(descripcion);  
               $("#tipo").val(tipo);  
             
          }
    });
    }

};
 </script>
       
@endpush
