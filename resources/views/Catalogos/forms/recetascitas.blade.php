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

                  <div class="justify-content-center">
                     <div class="col-lg-4 mt-3">
                     
                    </div>
                     <div class="row justify-content-center">
                    <div class="col-md-3 mr-auto ml-auto" >
                      <label for="exampleTalla" class="bmd-label-floating">Talla (cm)</label>
                      <input class="form-control" name="talla" id="talla" type="text" placeholder="" value=""  aria-required="true">
                    </div>
                    <div class="col-md-3 mr-auto ml-auto">
                    <label for="examplePeso" class="bmd-label-floating">Peso (kg)</label>
                    <input class="form-control" name="peso" id="peso" type="text" placeholder="" value=""  aria-required="true">
                  </div>
                    <div class="col-md-3 mr-auto ml-auto">
                      <label for="exampleTemp" class="bmd-label-floating">Temp(C)</label>
                      <input class="form-control" name="temp" id="temp" type="text" placeholder="" value=""  aria-required="true">
                    </div>
                    <div class="col-md-3 mr-auto ml-auto">
                      <label for="exampleTalla" class="bmd-label-floating">T/A (mmHg)</label>
                      <input class="form-control" name="ta" id="ta" type="text" placeholder="" value=""  aria-required="true">
                    </div>
                    <div class="col-md-3 mr-auto ml-auto">
                      <label for="exampleTalla" class="bmd-label-floating">F.C (lat./min)</label>
                      <input class="form-control" name="fc" id="fc" type="text" placeholder="" value=""  aria-required="true">
                    </div>
                    <div class="col-md-3 mr-auto ml-auto">
                      <label for="exampleTalla" class="bmd-label-floating">F.R(resp./min)</label>
                      <input class="form-control" name="fr" id="fr" type="text" placeholder="" value=""  aria-required="true">
                    </div>
                    <div class="col-md-4 mr-auto ml-auto">
                      <label for="exampleTalla" class="bmd-label-floating">FUM</label>
                      <input class="form-control" name="fum" id="fr" type="date" placeholder="" value=""  aria-required="true">
                    </div>
                  </div>
                  <div class="col-md-12 mr-auto ml-auto">
                        <label for="name" class="bmd-label-floating">Observaciones</label>
                       <textarea  rows="4" class="form-control{{ $errors->has('description') ? ' is-invalid' : '' }}" name="observ" id="expo_me" type="text" placeholder=""  aria-required="true"></textarea>
                   </div>
                  </div>
                   <button type="submit" class="btn btn-primary" align="left">Aceptar</button>
                    </div>
                  </div>
           <!-- body -->     
          </div>
        </div>
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

    }

};


 </script>
 <script src="{{ asset('select2/select2.full.min.js')}}"></script>
  
@endpush
