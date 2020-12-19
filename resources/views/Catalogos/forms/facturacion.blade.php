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
                <label class="col-sm-2 col-form-label">´Razon social</label>
                <div class="col-sm-4">
                  <div class="form-group bmd-form-group is-filled">
                    <input class="form-control" name="razon_social" id="razon_social" type="text" placeholder="Razon Social" required="true" aria-required="true">
                  </div>
                </div>
                <label class="col-sm-2 col-form-label">RFC</label>
                <div class="col-sm-4">
                  <div class="form-group bmd-form-group is-filled">
                    <input class="form-control" name="rfc" id="rfc" type="text" placeholder="RFC" required="true" aria-required="true">
                  </div>
                </div>
              </div>

               <div class="row">
                <label class="col-sm-2 col-form-label">Correo electronico</label>
                <div class="col-sm-4">
                  <div class="form-group bmd-form-group is-filled">
                    <input class="form-control" name="email" id="email" type="text" placeholder="Correo electronico" required="true" aria-required="true">
                  </div>
                </div>
                <label class="col-sm-2 col-form-label">Telefono</label>
                <div class="col-sm-4">
                  <div class="form-group bmd-form-group is-filled">
                    <input class="form-control" name="telefono" id="telefono" type="text" placeholder="Telefono" required="true" aria-required="true">
                  </div>
                </div>
              </div>


              <div class="row">
                <label class="col-sm-2 col-form-label">CFDI</label>
                <div class="col-sm-4">
                  <div class="form-group bmd-form-group is-filled">
                    <input class="form-control" name="cdfi" id="cdfi" type="text" placeholder="CFDI" required="true" aria-required="true">
                  </div>
                </div>
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
                var razon_social = data.data[i].razon_social;
                var cdfi = data.data[i].cdfi;
                var email = data.data[i].email;
                var rfc = data.data[i].rfc;
                var telefono = data.data[i].telefono;
                var paciente = data.data[i].id_paciente;
             }

               $("#razon_social").val(razon_social);  
               $("#cdfi").val(cdfi);  
               $("#email").val(email);  
               $("#rfc").val(rfc);
               $("#telefono").val(telefono);
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
