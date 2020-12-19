@extends('layouts.app', ['activePage' => 'form_wizard', 'menuParent' => 'forms', 'titlePage' => __('Consulta')])

@section('content')
<div class="content">
  <div class="container-fluid">
    <div class="row">
      
<!--      Wizard container --------------------------------------------------------------------- -->
    <div class="col-md-9">     
            @include("Catalogos.anexosupdate.anexo1")
    </div>
 <!-- wizard container ----------------------------------------------------------------------->

   </div>
  </div>
</div>
    <!--  FIN        -->
     
@endsection


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
