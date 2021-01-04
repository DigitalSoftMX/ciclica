
 <div class="wizard-container">
    <div class="card card-wizard" data-color="rose" id="wizardProfile">
        <h5 class="title-ciclica"> CIRUG&Iacute;A ENDOSC&Oacute;PICA</h5>
              <form method="post"  action="#" autocomplete="off" class="form-horizontal">
                @csrf


                    <div class="content p-0">
                        <div class="container-fluid">
                            <div class=" ">
                                <div class="card-body ">
                                    <div class="form-row p-3">
            <h6 class="col-md-12">HISTEROSCOPÍA</h6>
            </br>
            <h6 class="col-md-12">VAGINOSCOPÍA</h6>
            </br>
            <h6 class="col-md-12">CÉRVIX</h6>
            </br>
            <div class="col-md-4 mb-2">
              <label for="" class="col-form-label col-form-label-sm mb-1">Posici&oacute;n</label>
              <select class="form-control mt-1 form-control-sm" id="exampleFormControlSelect1">
                <option>Posterior </option>
                <option>Central </option>
                <option>Anterior</option>
                <option>Hipotr&oacute;fico </option>
                <option>Eutr&oacute;fico </option>
                <option>Hipertr&oacute;fico </option>
              </select>
            </div>
            <div class="col-md-4 mb-2">
              <label for="" class="col-form-label col-form-label-sm mb-1">OCE</label>
              <select class="form-control mt-1 form-control-sm" id="exampleFormControlSelect1">
                <option>Permeable </option>
                <option>Esten&oacute;tico </option>
              </select>
            </div>
            <div class="col-md-4 mb-2">
              <label for="" class="col-form-label col-form-label-sm mb-1">Canal Endocervical</label>
              <select class="form-control mt-1 form-control-sm" id="exampleFormControlSelect1">
                <option>Tubular permeable </option>
                <option>Esten&oacute;tico </option>
              </select>
            </div>
            <div class="col-md-6 mb-2">
              <label for="" class="col-form-label col-form-label-sm mb-1">Epitelio glandular</label>
              <select class="form-control mt-1 form-control-sm" id="exampleFormControlSelect1">
                <option>Atr&oacute;fico </option>
                <option>Adecuado </option>
              </select>
            </div>
            <div class="col-md-6 mb-2">
              <label for="" class="col-form-label col-form-label-sm mb-1">OCI</label>
              <select class="form-control mt-1 form-control-sm" id="exampleFormControlSelect1">
                <option>Permeable </option>
                <option>Esten&oacute;tico </option>
              </select>
            </div>
            <h6 class="col-md-12 color-text-1 mt-3 mb-0">Útero </h6>
            <div class="col-md-12 mb-2">
              <label for="" class="col-form-label col-form-label-sm mb-1">Posici&oacute;n</label>
              <select class="form-control mt-1 form-control-sm" id="exampleFormControlSelect1">
                <option>AVF </option>
                <option>Central </option>
                <option>RVF</option>
              </select>
            </div>
            <h6 class="col-md-12 color-text-1 mt-3 mb-0">Cavidad uterina </h6>
            <div class="col-md-3 mb-2">
              <label for="" class="col-form-label col-form-label-sm mb-1">Distensi&oacute;n</label>
              <select class="form-control mt-1 form-control-sm" id="exampleFormControlSelect1">
                <option>Adecuada </option>
                <option>Inadecuada </option>
              </select>
            </div>
            <div class="col-md-3 mb-2">
              <label for="" class="col-form-label col-form-label-sm mb-1">Tama&ntilde;o</label>
              <input class="form-control form-control-sm" type="text" placeholder="">
            </div>
            <div class="col-md-3 mb-2">
              <label for="" class="col-form-label col-form-label-sm mb-1">Forma</label>
              <input class="form-control form-control-sm" type="text" placeholder="">
            </div>
            <div class="col-md-3 mb-2">
              <label for="" class="col-form-label col-form-label-sm mb-1">Defectos</label>
              <select class="form-control mt-1 form-control-sm" id="exampleFormControlSelect1">
                <option>Proyecciones </option>
                <option>Hundimiento </option>
              </select>
            </div>
            <h6 class="col-md-12 color-text-1 mt-3 mb-0">Endometrio </h6>
            <div class="col-md-4 mb-2">
              <label for="" class="col-form-label col-form-label-sm mb-1">Atr&oacute;fico Proliferativo
              </label>
              <select class="form-control mt-1 form-control-sm" id="exampleFormControlSelect1">
                <option>Temprano </option>
                <option>Tard&iacute;o </option>
              </select>
            </div>
            <div class="col-md-4 mb-2">
              <label for="" class="col-form-label col-form-label-sm mb-1">Secretor
              </label>
              <select class="form-control mt-1 form-control-sm" id="exampleFormControlSelect1">
                <option>Temprano </option>
                <option>Tard&iacute;o </option>
              </select>
            </div>
            <div class="col-md-4 mb-2">
              <label for="" class="col-form-label col-form-label-sm mb-1">Anormal</label>
              <input class="form-control form-control-sm" type="text" placeholder="">
            </div>
            <h6 class="col-md-12 color-text-1 mt-3 mb-0">Ostium </h6>
             <label for="col-md-6" class="col-form-label col-form-label-sm mb-1">Derecho
              </label>
              <br>
             <div class="col-md-4 mb-2">
               <input class="" type="checkbox" data-toggle="toggle" data-size="sm" name="derecho" id="derecho" data-style="ios" data-on="SI" data-off="No">
              <label for="" class="col-form-label col-form-label-sm mb-1">Visible
              </label>
              <div class="collapse" id="derecho_CL">
                          <div class="col-md-12">
                            <input class="form-control form-control-sm" type="text" placeholder="">
                          </div>
              </div>
            </div>
             <label for="col-md-6" class="col-form-label col-form-label-sm mb-1">Izquierdo
              </label>
              <br>
             <div class="col-md-4 mb-2">
               <input class="" type="checkbox" data-toggle="toggle" data-size="sm" name="izquierdo" id="izquierdo" data-style="ios" data-on="SI" data-off="No">
              <label for="" class="col-form-label col-form-label-sm mb-1">Visible
              </label>
              <div class="collapse" id="izquierdo_CL">
                          <div class="col-md-12">
                            <input class="form-control form-control-sm" type="text" placeholder="">
                          </div>
              </div>
            </div>
            

            <div class="col-md-4 mb-2">
              <label for="" class="col-form-label col-form-label-sm mb-1">Diagn&oacute;stico</label>
              <input class="form-control form-control-sm" type="text" placeholder="">
            </div>
            <div class="col-md-3 mb-2">
              <label for="" class="col-form-label col-form-label-sm mb-1">Tom biopsia</label>
              <input class="form-control form-control-sm" type="text" placeholder="">
            </div>
            <div class="col-md-3 mb-2">
              <label for="" class="col-form-label col-form-label-sm mb-1">Colocaci&oacute;n DIU</label>
              <input class="form-control form-control-sm" type="text" placeholder="">
            </div>
            <div class="col-md-3 mb-2">
              <label for="" class="col-form-label col-form-label-sm mb-1">Resultado biopsia</label>
              <input class="form-control form-control-sm" type="text" placeholder="">
            </div>
            <div class="col-md-3 mb-2">
              <label for="" class="col-form-label col-form-label-sm mb-1">Plan Quir&uacute;rgico</label>
              <input class="form-control form-control-sm" type="text" placeholder="">
            </div>
            <div class="col-md-12 mb-2">
              <label for="" class="col-form-label col-form-label-sm">Notas</label>
              <textarea class="form-control form-control-sm" id="exampleFormControlTextarea1" rows="3"></textarea>
            </div>

          </div>
                                </div>
                                <div class="card-footer pl-1 mb-2">
          <button type="input" class="btn btn-primary">{{ __('Guardar ') }}
          </button>
        </div>
                            </div>


                        </div>
                    </div>
            </form>

    </div>
  </div>

  @push('js')


<script>
 $(function() {
    $('#derecho').change(function() {
           if($('#derecho').prop('checked') == true){  $('#derecho_CL').collapse('show') }
      else if($('#derecho').prop('checked') == false){  $('#derecho_CL').collapse('hide') }
    });
    //-----------------------------------------------------------------------------------------------
    $('#izquierdo').change(function() {
           if($('#izquierdo').prop('checked') == true){  $('#izquierdo_CL').collapse('show') }
      else if($('#izquierdo').prop('checked') == false){  $('#izquierdo_CL').collapse('hide') }
    });
    //-----------------------------------------------------------------------------------------------
   
        

 })
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