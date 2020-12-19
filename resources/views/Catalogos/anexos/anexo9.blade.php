 <div class="wizard-container">
    <div class="card card-wizard" data-color="rose" id="wizardProfile">
        <h5 class="title-ciclica"> CIRUG�0�1A ENDOSC�0�7PICA</h5>
              <form method="post"  action="{{url('procesoanexo9/add') }}" autocomplete="off" class="form-horizontal">
                @csrf


                    <div class="content p-0">
                        <div class="container-fluid">
                            <div class=" ">
                                <div class="card-body ">
                                    <div class="form-row p-3">
            <div class="col-md-4 mb-2">
              <label for="" class="col-form-label col-form-label-sm mb-1">Posici��n</label>
              <select class="form-control mt-1 form-control-sm" id="exampleFormControlSelect1">
                <option>Posterior </option>
                <option>Central </option>
                <option>Anterior</option>
                <option>Hipotr��fico </option>
                <option>Eutr��fico </option>
                <option>Hipertr��fico </option>
              </select>
            </div>
            <div class="col-md-4 mb-2">
              <label for="" class="col-form-label col-form-label-sm mb-1">OCE</label>
              <select class="form-control mt-1 form-control-sm" id="exampleFormControlSelect1">
                <option>Permeable </option>
                <option>Esten��tico </option>
              </select>
            </div>
            <div class="col-md-4 mb-2">
              <label for="" class="col-form-label col-form-label-sm mb-1">Canal Endocervical</label>
              <select class="form-control mt-1 form-control-sm" id="exampleFormControlSelect1">
                <option>Tubular permeable </option>
                <option>Esten��tico </option>
              </select>
            </div>
            <div class="col-md-6 mb-2">
              <label for="" class="col-form-label col-form-label-sm mb-1">Epitelio glandular</label>
              <select class="form-control mt-1 form-control-sm" id="exampleFormControlSelect1">
                <option>Atr��fico </option>
                <option>Adecuado </option>
              </select>
            </div>
            <div class="col-md-6 mb-2">
              <label for="" class="col-form-label col-form-label-sm mb-1">OCI</label>
              <select class="form-control mt-1 form-control-sm" id="exampleFormControlSelect1">
                <option>Permeable </option>
                <option>Esten��tico </option>
              </select>
            </div>
            <h6 class="col-md-12 color-text-1 mt-3 mb-0">�0�3tero </h6>
            <div class="col-md-12 mb-2">
              <label for="" class="col-form-label col-form-label-sm mb-1">Posici��n</label>
              <select class="form-control mt-1 form-control-sm" id="exampleFormControlSelect1">
                <option>AVF </option>
                <option>Central </option>
                <option>RVF</option>
              </select>
            </div>
            <h6 class="col-md-12 color-text-1 mt-3 mb-0">Cavidad uterina </h6>
            <div class="col-md-3 mb-2">
              <label for="" class="col-form-label col-form-label-sm mb-1">Distensi��n</label>
              <select class="form-control mt-1 form-control-sm" id="exampleFormControlSelect1">
                <option>Adecuada </option>
                <option>Inadecuada </option>
              </select>
            </div>
            <div class="col-md-3 mb-2">
              <label for="" class="col-form-label col-form-label-sm mb-1">Tama�0�9o</label>
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
              <label for="" class="col-form-label col-form-label-sm mb-1">Atr��fico Proliferativo
              </label>
              <select class="form-control mt-1 form-control-sm" id="exampleFormControlSelect1">
                <option>Temprano </option>
                <option>Tard��o </option>
              </select>
            </div>
            <div class="col-md-4 mb-2">
              <label for="" class="col-form-label col-form-label-sm mb-1">Secretor
              </label>
              <select class="form-control mt-1 form-control-sm" id="exampleFormControlSelect1">
                <option>Temprano </option>
                <option>Tard��o </option>
              </select>
            </div>
            <div class="col-md-4 mb-2">
              <label for="" class="col-form-label col-form-label-sm mb-1">Anormal</label>
              <input class="form-control form-control-sm" type="text" placeholder="">
            </div>
            <h6 class="col-md-12 color-text-1 mt-3 mb-0">Ostium </h6>
            <div class="col-md-4 mb-2">
              <label for="" class="col-form-label col-form-label-sm mb-1">Derecho
              </label>
              <select class="form-control mt-1 form-control-sm" id="exampleFormControlSelect1">
                <option>Visible </option>
                <option>Permeable </option>
              </select>
            </div>
            <div class="col-md-4 mb-2">
              <label for="" class="col-form-label col-form-label-sm mb-1">Izquierdo
              </label>
              <select class="form-control mt-1 form-control-sm" id="exampleFormControlSelect1">
                <option>Visible </option>
                <option>Permeable </option>
              </select>
            </div>
            <div class="col-md-4 mb-2">
              <label for="" class="col-form-label col-form-label-sm mb-1">Diagn��stico</label>
              <input class="form-control form-control-sm" type="text" placeholder="">
            </div>
            <div class="col-md-3 mb-2">
              <label for="" class="col-form-label col-form-label-sm mb-1">Tom biopsia</label>
              <input class="form-control form-control-sm" type="text" placeholder="">
            </div>
            <div class="col-md-3 mb-2">
              <label for="" class="col-form-label col-form-label-sm mb-1">Colocaci��n DIU</label>
              <input class="form-control form-control-sm" type="text" placeholder="">
            </div>
            <div class="col-md-3 mb-2">
              <label for="" class="col-form-label col-form-label-sm mb-1">Resultado biopsia</label>
              <input class="form-control form-control-sm" type="text" placeholder="">
            </div>
            <div class="col-md-3 mb-2">
              <label for="" class="col-form-label col-form-label-sm mb-1">Plan Quir��rgico</label>
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
    $(document).ready(function() {
      // initialise Datetimepicker and Sliders
      md.initFormExtendedDatetimepickers();
      if ($('.slider').length != 0) {
        md.initSliders();
      }
    });
  </script>
  @endpush