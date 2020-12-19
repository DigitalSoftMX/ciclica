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
                <label class="col-sm-2 col-form-label">Cantidad</label>
                <div class="col-sm-4">
                  <div class="form-group bmd-form-group is-filled">
                    <input class="form-control" name="cantidad" id="cantidad" type="text" placeholder="Cantidad" required="true" aria-required="true">
                  </div>
                </div>
                   <label class="col-sm-2 col-form-label">Importe</label>
                <div class="col-sm-4">
                  <div class="form-group bmd-form-group is-filled">
                    <input class="form-control" name="importe" id="importe" type="text" placeholder="Importe" required="true" aria-required="true">
                  </div>
                </div>
             
              </div>


               <div class="row">
                <label class="col-sm-2 col-form-label">Iva</label>
                <div class="col-sm-4">
                  <div class="form-group bmd-form-group is-filled">
                    <input class="form-control" name="iva" id="iva" type="text" placeholder="Iva" required="true" aria-required="true">
                  </div>
                </div>
                <label class="col-sm-2 col-form-label">Total</label>
                <div class="col-sm-4">
                  <div class="form-group bmd-form-group is-filled">
                    <input class="form-control" name="total" id="total" type="text" placeholder="Total" required="true" aria-required="true">
                  </div>
                </div>
              </div>

              <div class="row">
                <label class="col-sm-2 col-form-label">Forma de pago</label>
                <div class="col-sm-4">
                  <div class="form-group bmd-form-group is-filled">
                    <input class="form-control" name="forma_pago" id="forma_pago" type="text" placeholder="Forma de pago" required="true" aria-required="true">
                  </div>
                </div>
                 <label class="col-sm-2 col-form-label">TC/TD</label>
                <div class="col-sm-4">
                  <div class="form-group bmd-form-group is-filled">
                    <input class="form-control" name="tc_td" id="tc_td" type="text" placeholder="TC/TD" required="true" aria-required="true">
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
        selectnews();
    }
    else{
       $("#myform").attr("action","{{$catalog->getUrlPrefix()}}/edit/"+""+variable+"");
  
    $.ajax({
    type: "GET",
    dataType: "json",
    url: "../public/{{$catalog->getUrlPrefix()}}/edit/"+""+variable+"",
    success: function (data) {
             var item = [];
            for (var i = 0, max = data.data.length; i < max; i++) {
                var cantidad = data.data[i].cantidad;
                var importe = data.data[i].importe;
                var iva = data.data[i].iva;
                var total = data.data[i].total;
                var forma_pago = data.data[i].forma_pago;
                var tctd = data.data[i].tc_td;
                var paciente = data.data[i].id_paciente;
           
                }

               $("#cantidad").val(cantidad);  
               $("#importe").val(importe);  
               $("#iva").val(iva);  
               $("#total").val(total);  
               $("#forma_pago").val(forma_pago);  
               $("#tc_td").val(tctd);  
               $("#id_paciente").val(paciente);  
               
               selectnews();
          }
    });
    }

};

function selectnews(){
  //Paciente 

    var paciente = $("#id_paciente").val();

    $.ajax({                
        type: "GET",
        dataType: "json",
        url: "../public/selectpaciente",               
        success: function (data) {
            var item = [];
            for (var i = 0, max = data.data.length; i < max; i++) {
                item.push({id: data.data[i].id, text: data.data[i].title});
            }

            $("#id_paciente")
            .html('')
            .select2(
                    {
                        placeholder: {
                            id: '-1',
                            text: 'Seleccione '
                        },
                        allowClear: true,
                        'data': item
                    }
            )
                        $("#id_paciente").val([paciente]).change();            
         }
    });     
}; 

 </script>
 <script src="{{ asset('select2/select2.full.min.js')}}"></script>
  
@endpush
