 <div class="wizard-container">
    <div class="card card-wizard" data-color="rose" id="wizardProfile">
        <h5 class="title-ciclica"> BIOLOGIA DE LA REPRODUCCIÓN</h5>
      <form method="post"  action="{{url('procesoanexo8/add') }}" autocomplete="off" class="form-horizontal">
                @csrf

                    <div class="content p-0">
                        <div class="container-fluid">
                            <div class="col-md-12">
                                <div class=" ">
                                    <div class="card-body pl-1">

                                       <div class="form-row p-2">
            <div class="col-md-6 mb-2">
              <label for="" class=" -sm mb-1">Tiempo de búsqueda del embarazo</label>
              <input class="form-control form-control-sm" type="text" placeholder="">
            </div>
            <div class="col-md-6 mb-2">
              <label for="" class=" -sm mb-1">Frecuencia coital</label>
              <input class="form-control form-control-sm" type="text" placeholder="">
            </div>
            <div class="col-md-3 mb-2">
              <label for="" class=" -sm mb-1">Penetración</label>
              <select class="form-control mt-1 form-control-sm" id="exampleFormControlSelect1">
                <option>Completa</option>
                <option>Imcompleta</option>
              </select>
            </div>
            <div class="col-md-3 mb-2">
              <label for="" class=" -sm mb-1 col-md-12 p-0">Dispareunia</label>
              <input class="" type="checkbox" data-toggle="toggle" data-size="sm" data-style="ios" data-on="SI" data-off="No">
            </div>
            <div class="col-md-3 mb-2">
              <label for="" class=" -sm mb-1 col-md-12 p-0">Eyaculación vaginal</label>
              <input class="" type="checkbox" data-toggle="toggle" data-size="sm" data-style="ios" data-on="SI" data-off="No">
            </div>
            <div class="col-md-3 mb-2">
              <label for="" class=" -sm mb-1 col-md-12 p-0">Dismenorrea</label>
              <input class="" type="checkbox" data-toggle="toggle" data-size="sm" data-style="ios" data-on="SI" data-off="No">
            </div>
            <h6 class="col-md-12 color-text-1 mt-3 mb-0">
              Factor masculino
            </h6>
            <div class="col-md-1 mb-2">
              <label for="" class=" -sm mb-1">Edad</label>
              <input class="form-control form-control-sm" type="text" placeholder="">
            </div>
            <div class="col-md-3 mb-2">
              <label for="" class=" -sm mb-1 col-md-12 p-0">Paternidad comprobada</label>
              <input class="" type="checkbox" data-toggle="toggle" data-size="sm" data-style="ios" data-on="SI" data-off="No">
            </div>
            <div class="col-md-2 mb-2">
              <label for="" class=" -sm mb-1">Ocupación</label>
              <input class="form-control form-control-sm" type="text" placeholder="">
            </div>
            <div class="col-md-6 mb-2">
              <label for="" class=" -sm mb-1">Traumatismo o alteración testicular</label>
              <input class="form-control form-control-sm" type="text" placeholder="">
            </div>
            <div class="col-md-9 mb-2">
              <label for="" class=" -sm mb-1">Antecedentes de parotiditis, uso de anabólicos o medicamentos</label>
              <input class="form-control form-control-sm" type="text" placeholder="">
            </div>
            <div class="col-md-3 mb-2">
              <label for="" class=" -sm mb-1">EBD previas</label>
              <input class="form-control form-control-sm" type="text" placeholder="">
            </div>
            <h6 class="col-md-12 color-text-1 mt-3 mb-0">
              Factor tuboperitoneal
            </h6>
            <div class="col-md-6 mb-2">
              <label for="" class=" -sm mb-1">Cirugías abdominales</label>
              <input class="form-control form-control-sm" type="text" placeholder="">
            </div>
            <div class="col-md-6 mb-2">
              <label for="" class=" -sm mb-1">Infecciones vaginales de repetición</label>
              <input class="form-control form-control-sm" type="text" placeholder="">
            </div>
            <h6 class="col-md-12 color-text-1 mt-3 mb-0">
              Factor endócrino ovárico
            </h6>
            <div class="col-md-6 mb-2">
              <label for="" class=" -sm mb-1">Ciclos</label>
              <input class="form-control form-control-sm" type="text" placeholder="">
            </div>
            <div class="col-md-6 mb-2">
              <label for="" class=" -sm mb-1">Cantidad</label>
              <select class="form-control form-control-sm" id="exampleFormControlSelect1">
                <option>escaso </option>
                <option>normal</option>
                <option>abundante</option>
              </select>
            </div>
            <h6 class="col-md-12 color-text-1 mt-3 mb-0">
              Factor cervical
            </h6>
            <div class="col-md-6 mb-2">
              <label for="" class=" -sm mb-3 col-md-12 p-0">Infección vaginal de repetición</label>
              <input class="" type="checkbox" data-toggle="toggle" data-size="sm" data-style="ios" data-on="SI" data-off="No">
            </div>
            <div class="col-md-6 mb-2">
              <label for="" class=" -sm mb-1">Último papanicolaou</label>
              <input class="form-control form-control-sm" type="text" placeholder="">
            </div>
            <div class="col-md-6 mb-2">
              <label for="" class=" -sm mb-1">Anteriores lesiones cervicale</label>
              <input class="form-control form-control-sm" type="text" placeholder="">
            </div>
            <div class="col-md-6 mb-2">
              <label for="" class=" -sm mb-1">Anteriores cirugías uterinas</label>
              <input class="form-control form-control-sm" type="text" placeholder="">
            </div>
            <div class="col-md-12 ">
              <label for="" class=" -sm">Notas</label>
              <textarea class="form-control form-control-sm" id="exampleFormControlTextarea1" rows="3"></textarea>
            </div>
          </div>


                                    </div>
                                    <div class="card-footer mb-2">
          <button type="input" class="btn btn-primary">{{ __('Guardar ') }}
          </button>
        </div>
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