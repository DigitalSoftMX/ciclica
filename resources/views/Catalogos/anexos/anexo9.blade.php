 <div class="wizard-container">
    <div class="card card-wizard" data-color="rose" id="wizardProfile">
        <h5 class="title-ciclica"> CIRUGÍA ENDOSCÓPICA</h5>
              <form method="post"  action="{{url('procesoanexo9/add') }}" autocomplete="off" class="form-horizontal">
                @csrf


                    <div class="content p-0">
                        <div class="container-fluid">
                            <div class=" ">
                                <div class="card-body ">
                                    <div class="form-row p-3">
            <div class="col-md-4 mb-2">
              <label for="" class="col-form-label col-form-label-sm mb-1">Posición</label>
              <select class="form-control mt-1 form-control-sm" id="exampleFormControlSelect1">
                <option>Posterior </option>
                <option>Central </option>
                <option>Anterior</option>
                <option>Hipotrófico </option>
                <option>Eutrófico </option>
                <option>Hipertrófico </option>
              </select>
            </div>
            <div class="col-md-4 mb-2">
              <label for="" class="col-form-label col-form-label-sm mb-1">OCE</label>
              <select class="form-control mt-1 form-control-sm" id="exampleFormControlSelect1">
                <option>Permeable </option>
                <option>Estenótico </option>
              </select>
            </div>
            <div class="col-md-4 mb-2">
              <label for="" class="col-form-label col-form-label-sm mb-1">Canal Endocervical</label>
              <select class="form-control mt-1 form-control-sm" id="exampleFormControlSelect1">
                <option>Tubular permeable </option>
                <option>Estenótico </option>
              </select>
            </div>
            <div class="col-md-6 mb-2">
              <label for="" class="col-form-label col-form-label-sm mb-1">Epitelio glandular</label>
              <select class="form-control mt-1 form-control-sm" id="exampleFormControlSelect1">
                <option>Atrófico </option>
                <option>Adecuado </option>
              </select>
            </div>
            <div class="col-md-6 mb-2">
              <label for="" class="col-form-label col-form-label-sm mb-1">OCI</label>
              <select class="form-control mt-1 form-control-sm" id="exampleFormControlSelect1">
                <option>Permeable </option>
                <option>Estenótico </option>
              </select>
            </div>
            <h6 class="col-md-12 color-text-1 mt-3 mb-0">Útero </h6>
            <div class="col-md-12 mb-2">
              <label for="" class="col-form-label col-form-label-sm mb-1">Posición</label>
              <select class="form-control mt-1 form-control-sm" id="exampleFormControlSelect1">
                <option>AVF </option>
                <option>Central </option>
                <option>RVF</option>
              </select>
            </div>
            <h6 class="col-md-12 color-text-1 mt-3 mb-0">Cavidad uterina </h6>
            <div class="col-md-3 mb-2">
              <label for="" class="col-form-label col-form-label-sm mb-1">Distensión</label>
              <select class="form-control mt-1 form-control-sm" id="exampleFormControlSelect1">
                <option>Adecuada </option>
                <option>Inadecuada </option>
              </select>
            </div>
            <div class="col-md-3 mb-2">
              <label for="" class="col-form-label col-form-label-sm mb-1">Tamaño</label>
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
              <label for="" class="col-form-label col-form-label-sm mb-1">Atrófico Proliferativo
              </label>
              <select class="form-control mt-1 form-control-sm" id="exampleFormControlSelect1">
                <option>Temprano </option>
                <option>Tardío </option>
              </select>
            </div>
            <div class="col-md-4 mb-2">
              <label for="" class="col-form-label col-form-label-sm mb-1">Secretor
              </label>
              <select class="form-control mt-1 form-control-sm" id="exampleFormControlSelect1">
                <option>Temprano </option>
                <option>Tardío </option>
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
              <label for="" class="col-form-label col-form-label-sm mb-1">Diagnóstico</label>
              <input class="form-control form-control-sm" type="text" placeholder="">
            </div>
            <div class="col-md-3 mb-2">
              <label for="" class="col-form-label col-form-label-sm mb-1">Tom biopsia</label>
              <input class="form-control form-control-sm" type="text" placeholder="">
            </div>
            <div class="col-md-3 mb-2">
              <label for="" class="col-form-label col-form-label-sm mb-1">Colocación DIU</label>
              <input class="form-control form-control-sm" type="text" placeholder="">
            </div>
            <div class="col-md-3 mb-2">
              <label for="" class="col-form-label col-form-label-sm mb-1">Resultado biopsia</label>
              <input class="form-control form-control-sm" type="text" placeholder="">
            </div>
            <div class="col-md-3 mb-2">
              <label for="" class="col-form-label col-form-label-sm mb-1">Plan Quirúrgico</label>
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