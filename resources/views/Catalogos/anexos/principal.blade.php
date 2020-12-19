@extends('layouts.app', ['activePage' => 'form_wizard', 'menuParent' => 'forms', 'titlePage' => __('Consulta')])

@section('content')
<div class="content">
  <div class="container-fluid">
    <div class="col-md-8 col-12 mr-auto ml-auto">
      <!--      Wizard container        -->
      <div class="wizard-container">
        <div class="card card-wizard" data-color="rose" id="wizardProfile">
            <form method="post" action="" autocomplete="off" class="form-horizontal">
          @csrf
          @method('post')
            <!--        You can switch " data-color="primary" "  with one of the next bright colors: "green", "orange", "red", "blue"       -->
            <div class="card-header text-center">
              <h3 class="card-title">
                Consulta
              </h3>
            </div>


            <div class="wizard-navigation">
              <ul class="nav nav-pills">
                <li class="nav-item">
                  <a class="nav-link active" href="#consu" data-toggle="tab" role="tab">
                    anexos
                  </a>
                </li>
                </ul>
            </div>
            <div class="card-body">
              <div class="tab-content">
               

                <div class="tab-pane active" id="consu">
                  
                  <div class="row" >
                  <div class="col-md-5 mr-auto ml-auto">
                    <div class="card ">
                      <div class="card-header card-header-rose card-header-text">
                        <div class="card-icon">
                          <a href="#" class="btn btn-sm btn-rose" data-toggle="modal" data-target=".docs-example-modal-lg" onclick="tipo('nuevo')">{{ __('Anexo1') }} </a>
                        </div>
                      </div>
                    </div>
                  </div>
                  </div>

                  <div class="row" >
                    <div class="col-md-5 mr-auto ml-auto">
                      <div class="card ">
                        <div class="card-header card-header-rose card-header-text">
                          <div class="card-icon">
                            <a href="{{  view('Catalogos.anexos.anexo2') }}" class="btn btn-sm btn-rose" data-toggle="modal" data-target=".docs-example-modal-lg" onclick="tipo('nuevo')">{{ __('Anexo2') }} </a>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                    

                    </div>
                  </div>
                </div>
              </div>
            </div>
          </form>
        </div>
      </div>
      <!-- wizard container -->
    </div>
  </div>
</div>

@include("Catalogos.anexos.anexo1")






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