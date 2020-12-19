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
                 
                  <div class="justify-content-center">
                     <div class="col-lg-4 mt-3">
                      <div class="input-group form-control-lg">
                        <label for="name" class="bmd-label-floating">Fecha de Padecimiento</label>
                        <div class="col-lg-12 form-group">
                          <input type="text" id="fechap" class="form-control datepicker" value="" name="fechap" />
                        </div>
                      </div>
                    </div>
                     <div class="col-lg-12 mt-3">
                      <div class="input-group form-control-lg">
                        <label for="name" class="bmd-label-floating">Padecimiento Actual</label>
                        <textarea  rows="4" class="form-control" name="descripcionp" id="descripcionp" type="text"   aria-required="true" ></textarea>
                        </div>
                      </div>
                    </div>
                    <div class="row justify-content-center">
                    <div class="col-md-3 mr-auto ml-auto" >
                      <label for="exampleTalla" class="bmd-label-floating">Talla</label>
                      <input class="form-control" name="talla" id="talla" type="text" placeholder="" value=""  aria-required="true">
                    </div>
                    <div class="col-md-3 mr-auto ml-auto">
                    <label for="examplePeso" class="bmd-label-floating">Peso</label>
                    <input class="form-control" name="peso" id="peso" type="text" placeholder="" value=""  aria-required="true">
                  </div>
                    <div class="col-md-3 mr-auto ml-auto">
                      <label for="exampleTemp" class="bmd-label-floating">Temp(°C)</label>
                      <input class="form-control" name="temp" id="temp" type="text" placeholder="" value=""  aria-required="true">
                    </div>
                    <div class="col-md-3 mr-auto ml-auto">
                      <label for="exampleTalla" class="bmd-label-floating">T.A</label>
                      <input class="form-control" name="ta" id="ta" type="text" placeholder="" value=""  aria-required="true">
                    </div>
                    <div class="col-md-3 mr-auto ml-auto">
                      <label for="exampleTalla" class="bmd-label-floating">F.C</label>
                      <input class="form-control" name="fc" id="fc" type="text" placeholder="" value=""  aria-required="true">
                    </div>
                    <div class="col-md-3 mr-auto ml-auto">
                      <label for="exampleTalla" class="bmd-label-floating">F.R</label>
                      <input class="form-control" name="fr" id="fr" type="text" placeholder="" value=""  aria-required="true">
                    </div>
                    <div class="col-md-3 mr-auto ml-auto">
                      <label for="exampleTalla" class="bmd-label-floating">FUM</label>
                      <input class="form-control" name="fum" id="fr" type="text" placeholder="" value=""  aria-required="true">
                    </div>
                  </div>
                  <div class="col-lg-12 mt-3">
                      <div class="input-group form-control-lg">
                        <label for="name" class="bmd-label-floating">Observaciones</label>
                       <textarea  rows="4" class="form-control{{ $errors->has('description') ? ' is-invalid' : '' }}" name="observ" id="expo_me" type="text" placeholder=""  aria-required="true"></textarea>
                       </div>
                      </div><div class="col-lg-12 mt-3">
                      <div class="input-group form-control-lg">
                        <label for="name" class="bmd-label-floating">Exploracion Fisica</label>
                       <textarea  rows="4" class="form-control{{ $errors->has('description') ? ' is-invalid' : '' }}" name="expo_me" id="expo_me" type="text" placeholder=""  aria-required="true"></textarea>
                       </div>
                      </div>
                    </div>
                  </div>
           <!-- body -->     
          </div>
        </div>
      </div>
 
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
                var fech = data.data[i].fechap;
                var fecha = data.data[i].fechac;
                var descripcion = data.data[i].descripcionp;
                var doctor = data.data[i].doctor;
                var edad = data.data[i].edad;
                var talla = data.data[i].talla;
                var peso = data.data[i].peso;
                var tempe = data.data[i].temp;
                var talla = data.data[i].ta;
                var fcs = data.data[i].fc;
                var frs = data.data[i].fr; 
                var exp = data.data[i].expo_me; 
                 }

               $("#fechap").val(fech);  
               $("#descripcionp").val(descripcion);  
               $("#talla").val(talla);  
               $("#peso").val(peso);
               $("#temp").val(tempe);
               $("#ta").val(talla);  
               $("#fc").val(fcs);  
               $("#fr").val(frs);  
               $("#expo_me").val(exp);  
          }
    });
    }

};


 </script>
 <script src="{{ asset('select2/select2.full.min.js')}}"></script>
  
@endpush
