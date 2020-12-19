
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
                          
      <form id="myform" method="post" action="" autocomplete="off" class="form-horizontal" enctype="multipart/form-data">
       @csrf
       @method('post')


          <div class="card ">
            <div class="card-body ">
              <ul class="nav nav-pills nav-pills-warning" role="tablist">
                <li class="nav-item">
                  <a class="nav-link active show" data-toggle="tab" href="#link1" role="tablist">
                    Perfil
                  </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" data-toggle="tab" href="#link2" role="tablist">
                    Direccion
                  </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" data-toggle="tab" href="#link3" role="tablist">
                    Informacion Adicional
                  </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" data-toggle="tab" href="#link4" role="tablist">
                    Pareja
                  </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" data-toggle="tab" href="#link5" role="tablist">
                    Aviso de Privacidad
                  </a>
                </li>
              </ul>
              <div class="tab-content tab-space">
                <!-- primer metodo del panel-->
                <div class="tab-pane  active show" id="link1">
                <div class="row">
                  <label class="col-sm-2 col-form-label">Nombre</label>
                  <div class="col-sm-4">
                    <div class="form-group bmd-form-group">
                      <input class="form-control" type="text" name="name" id="name" number="true" required="true" aria-required="true">
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
                  <label class="col-sm-2 col-form-label">No. del Paciente</label>
                  <div class="col-sm-4">
                    <div class="form-group bmd-form-group">
                      <input class="form-control" name="username" id="username" type="text" placeholder="No. del Paciente" value="" number="true" >
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
                      <input class="form-control" input="" type="password" name="password" id="input-password" placeholder="Password">
                    </div>
                  </div>
                   <label class="col-sm-2 col-form-label">Medio de comunicacion</label>
                  <div class="col-sm-4">
                    <div class="form-group">
                      <div class="dropdown bootstrap-select col-sm-12 pl-0 pr-0">
                        <select class="selectpicker col-sm-12 pl-0 pr-0" name="medio" data-style="select-with-transition" title="" data-size="100" tabindex="-98">
                        <option value="Email">Email</option>
                        <option value="Telefono">Telefono</option>
                        <option value="Whatsapp">Whatsapp</option>
                        <option value="MSM">MSM</option>
                      </select>
                   </div>
                  </div>
                </div>
                </div>

                <div class="row">
                  <label class="col-sm-2 col-form-label">Genero</label>
                  <div class="col-sm-4">
                    <div class="form-group">
                      <div class="dropdown bootstrap-select col-sm-12 pl-0 pr-0">
                        <select class="selectpicker col-sm-12 pl-0 pr-0" name="sex" data-style="select-with-transition" title="" data-size="100" tabindex="-98">
                        <option value="1">Masculino</option>
                        <option value="2">Femenino</option>
                      </select>
                   </div>
                  </div>
                </div>
                <label class="col-sm-2 col-form-label">Telefono celular</label>
                  <div class="col-sm-4">
                    <div class="form-group bmd-form-group">
                      <input class="form-control" name="phone" id="phone" type="text" placeholder="Telefono celular" value="" required="true" number="true">
                    </div>
                  </div>
              </div>

                <div class="row">
                  <label class="col-sm-2 col-form-label">Fecha de nacimiento</label>
                  <div class="col-sm-4">
                    <div class="form-group bmd-form-group is-filled">
                      <input class="form-control datepicker" name="fecha_nacimiento" id="fecha_nacimiento" type="text" placeholder="Fecha de nacimiento" value="">
                    </div>
                  </div>
                  <label class="col-sm-2 col-form-label">Estado civil</label>
                  <div class="col-sm-4">
                    <div class="form-group bmd-form-group">
                      <input class="form-control col-sm-4" name="id_edo_civil" id="id_edo_civil" type="text" placeholder="Estado civil" value="" required="">
                    </div>
                  </div>
                </div>

                <div class="row">
                  <label class="col-sm-2 col-form-label">Telefono de casa</label>
                  <div class="col-sm-4">
                    <div class="form-group bmd-form-group">
                      <input class="form-control" name="telefono" id="telefono" type="text" placeholder="Telefono de casa" value="">
                    </div>
                  </div>
                  <!--<label class="col-sm-2 col-form-label">Estado del paciente</label>
                  <div class="col-sm-4">
                    <div class="form-group bmd-form-group">
                      <div class="dropdown bootstrap-select col-sm-12 pl-0 pr-0"><select class="selectpicker col-sm-12 pl-0 pr-0" name="id_estado" data-style="select-with-transition" title="" data-size="100" tabindex="-98">
                        <option value="1">Bueno</option>
                        <option value="2">Malo</option>
                        <option value="2">Regular</option>
                      </select>
                   </div>
                    </div>
                  </div>-->
                </div>
              

                </div>
                <!-- segundo metodo del panel-->
                <div class="tab-pane" id="link2">
                 

                 <div class="row">
                  <label class="col-sm-2 col-form-label">Ciudad</label>
                  <div class="col-sm-4">
                    <div class="form-group bmd-form-group">
                      <input class="form-control" name="ciudad" id="ciudad" type="text" placeholder="Ciudad" value="" >
                    </div>
                  </div>
                  <label class="col-sm-2 col-form-label">Estado</label>
                  <div class="col-sm-4">
                    <div class="form-group bmd-form-group">
                      <input class="form-control" name="id_estado_domicilio" id="id_estado_domicilio" type="text" placeholder="Estado" value="">
                    </div>
                  </div>
                </div>
              
                <div class="row">
                  <label class="col-sm-2 col-form-label">Colonia</label>
                  <div class="col-sm-10">
                    <div class="form-group bmd-form-group">
                      <input class="form-control" name="colonia" id="colonia" type="text" placeholder="Colonia" value="" >
                    </div>
                  </div>
                </div>
                  

                <div class="row">
                  <label class="col-sm-2 col-form-label">Calle</label>
                  <div class="col-sm-10">
                    <div class="form-group bmd-form-group">
                      <input class="form-control" name="calle" id="calle" type="text" placeholder="Calle" value="">
                    </div>
                  </div>
                </div>

                <div class="row">
                  <label class="col-sm-2 col-form-label">CP</label>
                  <div class="col-sm-2">
                    <div class="form-group bmd-form-group">
                      <input class="form-control" name="cp" id="cp" type="text" placeholder="Codigo Postal" value="">
                    </div>
                  </div>
                  <label class="col-sm-2 col-form-label">No. de exterior</label>
                  <div class="col-sm-2">
                    <div class="form-group bmd-form-group">
                      <input class="form-control" name="num_ext" id="num_ext" type="text" placeholder="No. de exterior" value="" >
                    </div>
                  </div>
                  <label class="col-sm-2 col-form-label">No. de interior</label>
                  <div class="col-sm-2">
                    <div class="form-group bmd-form-group">
                      <input class="form-control" name="num_int" id="num_int" type="text" placeholder="No. de interior" value="">
                    </div>
                  </div>
                </div>

                </div>
                <!-- tercer metodo del panel-->
                <div class="tab-pane" id="link3">
                 
                  <div class="row">
                  <label class="col-sm-2 col-form-label">Tipo de sangre</label>
                  <div class="col-sm-10">
                    <div class="form-group bmd-form-group">
                      <input class="form-control" name="tipo_sangre" id="tipo_sangre" type="text" placeholder="Tipo de sangre" value="" >
                    </div>
                  </div>
                </div>
             
                <div class="row">
                  <label class="col-sm-2 col-form-label">Alergias</label>
                  <div class="col-sm-10">
                    <div class="form-group bmd-form-group">
                      <input class="form-control" name="alergias" id="alergias" type="text" placeholder="Alergias" value="">
                    </div>
                  </div>
                </div>

                <div class="row">
                  <label class="col-sm-2 col-form-label">Ocupacion</label>
                  <div class="col-sm-10">
                    <div class="form-group bmd-form-group">
                      <input class="form-control" name="ocupacion" id="ocupacion" type="text" placeholder="Ocupación" value="" >
                    </div>
                  </div>
                </div>

                </div>

               <!-- cuarto metodo del panel-->
                <div class="tab-pane" id="link4">
               
                <div class="row">
                  <label class="col-sm-2 col-form-label">Nombre de la pareja</label>
                  <div class="col-sm-10">
                    <div class="form-group bmd-form-group">
                      <input class="form-control" name="nombre_pareja" id="nombre_pareja" type="text" placeholder="Nombre de la pareja" value="" >
                    </div>
                  </div>
                </div>

                <div class="row">
                  <label class="col-sm-2 col-form-label">Fecha de nacimiento</label>
                  <div class="col-sm-4">
                    <div class="form-group bmd-form-group">
                      <input class="form-control datepicker" name="fch_nacimiento_pareja" id="fch_nacimiento_pareja" type="text" placeholder="Fecha de nacimiento" value="">
                      </div>
                  </div>
                  <label class="col-sm-2 col-form-label">Ocupacion de la Pareja</label>
                  <div class="col-sm-4">
                    <div class="form-group bmd-form-group">
                      <input class="form-control" name="ocupacion_pareja" id="ocupacion_pareja" type="text" placeholder="Ocupacion de la Pareja" value="" >
                    </div>
                  </div>
                </div>

                <div class="row">
                  <label class="col-sm-2 col-form-label">Celular de la pareja</label>
                  <div class="col-sm-4">
                    <div class="form-group bmd-form-group">
                      <input class="form-control" name="celular_pareja" id="celular_pareja" type="text" placeholder="Celular de la pareja" value="">
                    </div>
                  </div>
                  <label class="col-sm-2 col-form-label">Correo electronico de la pareja</label>
                  <div class="col-sm-4">
                    <div class="form-group bmd-form-group">
                      <input class="form-control" name="email_pareja" id="email_pareja" type="text" placeholder="Correo electronico de la pareja" value="">
                    </div>
                  </div>
                </div>

                </div>
                
                <!-- cuarto metodo del panel-->
                <div class="tab-pane" id="link5">
               
                <div class="row">
                   <div class="col-6">
                    <a href="downloadaviso"><span class="label label-primary">Aviso de privacidad</span></a>
                    <div class="col-4">
                    <input class="" type="checkbox" data-toggle="toggle" data-size="sm" data-style="ios" name="aviso" data-on="SI" data-off="No">
                  </div>
                   </div>
                </div>


                </div>

              </div>
            </div>
          </div>
       

@role('Paciente')
            <button type="submit" class="btn btn-primary" align="left">Aceptar</button>
 @endrole
 @role('Asistente')
            <button type="submit" class="btn btn-primary" align="left">Aceptar</button>
 @endrole
 @role('admin_master')
            <button type="submit" class="btn btn-primary" align="left">Aceptar</button>
 @endrole
        </form>
       </div>









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
        //selectnews();
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
                var name = data.data[i].name;
                var app_name = data.data[i].app_name;
                var apm_name = data.data[i].apm_name;
                var username = data.data[i].username;
                var email = data.data[i].email;
                var sex = data.data[i].sex;
                var phone = data.data[i].phone;
                var fecha_nacimiento = data.data[i].fecha_nacimiento;
                var id_edo_civil = data.data[i].id_edo_civil;
                var telefono = data.data[i].telefono;
                var id_estado = data.data[i].id_estado;
                var id_estado_domicilio = data.data[i].id_estado_domicilio;
                var cp = data.data[i].cp;
                var ciudad = data.data[i].ciudad;
                var calle = data.data[i].calle;
                var num_ext = data.data[i].num_ext;
                var num_int = data.data[i].num_int;
                var colonia = data.data[i].colonia;
                var tipo_sangre = data.data[i].tipo_sangre;
                var ocupacion = data.data[i].ocupacion;
                var alergias = data.data[i].alergias;
                var nombre_pareja = data.data[i].nombre_pareja;
                var fch_nacimiento_pareja = data.data[i].fch_nacimiento_pareja;
                var ocupacion_pareja = data.data[i].ocupacion_pareja;
                var celular_pareja = data.data[i].celular_pareja;
                var email_pareja = data.data[i].email_pareja;
                var carta = data.data[i].carta;
               
               if(carta != null){
                $('#enlace').show();
               document.getElementById('enlace').setAttribute('href', 'downloadcarta/'+carta);
                 }
               }

               $("#name").val(name);  
               $("#app_name").val(app_name);  
               $("#apm_name").val(apm_name);  
               $("#username").val(username);  
               $("#email").val(email);  
               $("#sex").val(sex);  
               $("#phone").val(phone);  
               $("#fecha_nacimiento").val(fecha_nacimiento);  
               $("#id_edo_civil").val(id_edo_civil);  
               $("#telefono").val(telefono);  
               $("#id_estado").val(id_estado);  
               $("#id_estado_domicilio").val(id_estado_domicilio);  
               $("#cp").val(cp);  
               $("#ciudad").val(ciudad);  
               $("#calle").val(calle);  
               $("#num_ext").val(num_ext);  
               $("#num_int").val(num_int);  
               $("#colonia").val(colonia);  
               $("#tipo_sangre").val(tipo_sangre);  
               $("#ocupacion").val(ocupacion);  
               $("#alergias").val(alergias);  
               $("#nombre_pareja").val(nombre_pareja);  
               $("#fch_nacimiento_pareja").val(fch_nacimiento_pareja);  
               $("#ocupacion_pareja").val(ocupacion_pareja);  
               $("#celular_pareja").val(celular_pareja);  
               $("#email_pareja").val(email_pareja);   
               $("#carta").val(carta);
               
          }
    });
    }

};
 </script>
       
<script>
    $(document).ready(function() {
        $('#enlace').hide();
        $('#username').attr('disabled','disabled');

      // initialise Datetimepicker and Sliders
      md.initFormExtendedDatetimepickers();
      if ($('.slider').length != 0) {
        md.initSliders();
      }
    });
  </script>
@endpush
