 
 <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
 
 <div class="wizard-container">
    <div class="card card-wizard" data-color="rose" id="wizardProfile">
        <h5 class="title-ciclica">ONCOLOG&Iacute;A</h5>
      <form method="post"  action="#" autocomplete="off" class="form-horizontal">
                @csrf

                     <div class="content p-0">
                        <div class="container-fluid">
                           <div class="form-row p-4">
            <div class="col-md-6 mb-2">
              <label for="" class="col-form-label col-form-label-sm mb-1">Historia familiar de padecimientos oncol&oacute;gicos</label>
              <input class="form-control form-control-sm" type="text" placeholder="">
            </div>
            <div class="col-md-6 mb-2">
              <label for="" class="col-form-label col-form-label-sm mb-1">Menarca</label>
              <input class="form-control form-control-sm" type="text" placeholder="">
            </div>
            <div class="col-md-6 mb-2">
              <label for="" class="col-form-label col-form-label-sm mb-1">Edad del primer embarazo</label>
              <input class="form-control form-control-sm" type="text" placeholder="">
            </div>
            <div class="col-md-3 mb-2">
              <label for="" class="col-form-label col-form-label-sm mb-1">Lactancia materna (tiempo)</label>
              <input class="form-control form-control-sm" type="text" placeholder="">
            </div>
            <div class="col-md-3 mb-2">
              <label for="" class="col-form-label col-form-label-sm mb-1">Uso de hormonales:</label>
              <input class="form-control form-control-sm" type="text" placeholder="">
            </div>
            <div class="col-md-12 mb-2">
              <label for="" class="col-form-label col-form-label-sm">Notas</label>
              <textarea class="form-control form-control-sm" id="exampleFormControlTextarea1" rows="3"></textarea>
            </div>

          </div>
                          <div class="cform-row p-3 pl-1 mb-2">
          <button type="input" class="btn btn-primary">{{ __('Guardar ') }}
          </button>
        </div>

                        </div>
                    </div>
           </form>

    </div>
  </div>



@push('js')
    <script>
        $(document).ready(function() {
            // Initialise the wizard
            demo.initMaterialWizard();
            setTimeout(function() {
                $('.card.card-wizard').addClass('active');
            }, 600);
        });
    </script>
@endpush


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
