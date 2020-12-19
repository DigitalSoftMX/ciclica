<!-- Modal -->
<div class="modal fade docs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h3 class="modal-title" id="exampleModalLongTitle"></h3>
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
                  <label class="col-sm-2 col-form-label">Nombre</label>
                  <div class="col-sm-10">
                    <div class="form-group bmd-form-group">
                      <input class="form-control" type="text" id="name" name="name" number="true" required="true" aria-required="true">
                    </div>
                  </div>
                </div>
                <div class="row">
                  <label class="col-sm-2 col-form-label">Apellido Paterno</label>
                  <div class="col-sm-4">
                    <div class="form-group bmd-form-group">
                      <input class="form-control" name="app_name" id="app_name" type="text" placeholder="Apellido Paterno" value="" required>
                    </div>
                  </div>
                  <label class="col-sm-2 col-form-label">Apellido Materno</label>
                  <div class="col-sm-4">
                    <div class="form-group bmd-form-group">
                      <input class="form-control" name="apm_name" id="apm_name" type="text" placeholder="Apellido Materno" value="" required>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <label class="col-sm-2 col-form-label">Usuario</label>
                  <div class="col-sm-4">
                    <div class="form-group bmd-form-group">
                      <input class="form-control" name="username" id="username" type="text" placeholder="Usuario" value="" number="true">
                    </div>
                  </div>
                  <label class="col-sm-2 col-form-label">Correo Electronico</label>
                  <div class="col-sm-4">
                    <div class="form-group bmd-form-group">
                      <input class="form-control" name="email" id="email" type="email" placeholder="Correo Electronico" value="" required="true" email="true">
                    </div>
                  </div>
                </div>  
                <div class="row">
                  <label class="col-sm-2 col-form-label" for="input-password"> Password</label>
                  <div class="col-sm-4">
                    <div class="form-group bmd-form-group">
                      <input class="form-control" input="" type="password" name="password" id="input-password" placeholder="Password" required="true">
                    </div>
                  </div>
                  <label class="col-sm-2 col-form-label">Genero</label>
                  <div class="col-sm-4">
                    <div class="form-group">
                      <div class="dropdown bootstrap-select col-sm-12 pl-0 pr-0"><select class="selectpicker col-sm-12 pl-0 pr-0" name="sex" data-style="select-with-transition" title="" data-size="100" tabindex="-98">
                        <option value="1">Masculino</option>
                        <option value="2">Femenino</option>
                      </select>
                   </div>
                  </div>
                </div>
                </div>

                <div class="row">
                <label class="col-sm-2 col-form-label">Telefono celular</label>
                  <div class="col-sm-4">
                    <div class="form-group bmd-form-group">
                      <input class="form-control" name="phone" id="phone" type="text" placeholder="Telefono celular" value="" required="true" number="true">
                    </div>
                  </div>
                  <label class="col-sm-2 col-form-label">Rol del usuario</label>
                  <div class="col-sm-4">
                    <div class="form-group bmd-form-group">
                      <input class="form-control" name="tipousuario" id="tipousuario" type="text" placeholder="Rol del usuario" value="" required="">
                    </div>
                  </div>
              </div>

                <div class="row">
                  <label class="col-sm-2 col-form-label">Especialidad</label>
                  <div class="col-sm-6">
                    <div class="form-group bmd-form-group">
                      <input class="form-control" multiple="multiple" name="especial" id="especial" type="text" disabled="true">
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
    data: {"clave" : variable},
    type: "GET",
    dataType: "json",
    //url: "../public/{{$catalog->getUrlPrefix()}}/edit/"+""+variable+"",
    url: "../public/{{$catalog->getUrlPrefix()}}/edit/"+""+variable+"",
    success: function (data) {
             var item = [];
            for (var i = 0, max = data.data.length; i < max; i++) {
                var name = data.data[i].name;
                var app_name = data.data[i].app_name;
                var apm_name = data.data[i].apm_name;
                var username = data.data[i].username;
                var email = data.data[i].email;
                var sex = data.data[i].sex;
                var phone = data.data[i].phone;
                var tipousuario = data.data[i].tipousuario;
                var especialidad = data.data[i].id_especialidad;    
              }

               $("#name").val(name);  
               $("#app_name").val(app_name);  
               $("#apm_name").val(apm_name);  
               $("#username").val(username);  
               $("#email").val(email);  
               $("#sex").val(sex);  
               $("#phone").val(phone);  
               $("#tipousuario").val(tipousuario);
               $("#especial").val(especialidad);  
                  selectnews();
          }
    });
    }

};

function selectnews(){

//Tipo de Usuario 

    var tipousuario = $("#tipousuario").val();

    $.ajax({                
        type: "GET",
        dataType: "json",
        url: "../public/selecttipousuario",               
        success: function (data) {
            var item = [];
            for (var i = 0, max = data.data.length; i < max; i++) {
                item.push({id: data.data[i].id, text: data.data[i].name});
            }

            $("#tipousuario")
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
            ).on("select2:select", function (e) {
                  var select_val = $(e.currentTarget).val();
                     if (select_val === "5") {
                        $("#especial").removeAttr("disabled");
                    } else {
                        $("#especial").prop("disabled", true);
                    }                   
            });
                        $("#tipousuario").val([tipousuario]).change();            
         }
    });     
 

//Especialidad 

    var especial = $("#especial").val();

    $.ajax({                
        type: "GET",
        dataType: "json",
        url: "../public/selectespecialidad",               
        success: function (data) {
            var item = [];
            for (var i = 0, max = data.data.length; i < max; i++) {
                item.push({id: data.data[i].id, text: data.data[i].name});
            }

            $("#especial")
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
                        $("#especial").val([especial]).change();            
         }
    });     


}
 </script>
 
 <script>
    $(document).ready(function() {
      // initialise Datetimepicker and Sliders
      md.initFormExtendedDatetimepickers();
      if ($('.slider').length != 0) {
        md.initSliders();
      }
    });
  </script>
      
@endpush
