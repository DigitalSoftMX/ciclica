<div class="wizard-container">   
    <div class="card card-wizard" data-color="rose" id="wizardProfile">

  <div class="card-body">
    <div class="tab-content">

 @forelse ($anexo1 as $product)
  <!-- primer metodo del panel-------------------------------------------------------------------->
            <div class="tab-pane active" id="link1">
                <div class="row">
                <div class="col-md-12">
                    <div class="card ">
                        <div class="card-header card-header-rose card-header-icon">
                            <div class="card-icon">
                                <i class="material-icons">battery_std</i>
                            </div>
                            <h2 class="card-title">{{ $product->nombr }}</h2>
                        </div>
                        <div class="card-body ">

                                <div class="form-group">
                                    <div class="card-header text-center">
                                        <h3 class="card-title">
                                            {{ $product->names }}
                                        </h3>
                                    </div>
                                </div>

                        </div>
                    </div>
                </div>
              </div>

            </div>
 @empty
      <div class="card-header card-header-primary text-center">
         <h4>No se encontraron Resultados</h4>
      </div>
  @endforelse
  
       </div>
      </div>
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
