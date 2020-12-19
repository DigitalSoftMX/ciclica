@extends('layouts.app', ['activePage' => 'form_wizard', 'menuParent' => 'forms', 'titlePage' => __('Consulta')])

<link href="{{ asset('material') }}/css/flipclock.css" rel="stylesheet" />

@section('content')
<div class="content">
  <div class="container-fluid">
    <div class="row">

<!-- PERFIL -->
  @forelse ($info as $product)
      <div class="col-md-3">
        <div class="card card-profile">
          <div class="card-avatar">
                @if ($product->picture)
                    <img src="../storage/app/public/{{ $product->picture }}" />
                @else
                    <img src="{{ asset('material') }}/img/placeholder.jpg" alt="...">
                @endif
          </div>
         <!-- body -->     
          <div class="card-body">
                  <div class="row justify-content-center">
                     <div class="col-lg-12 mt-3">
                      <div class="input-group form-control-lg">
                        <label class="col-sm-12 col-form-label text-center">{{ $product->name }} {{ $product->app_name }} {{ $product->apm_name }}</label>   
                      </div>
                    </div>
                    <div class="col-lg-12 mt-3">
                      <div class="input-group form-control-lg">
                        <label class="col-sm-12 col-form-label text-center">26 años</label>   
                      </div>
                    </div>
                  </div>
                  <div class="card-footer">
                <div class="card-footer ml-auto mr-auto">
                     <div class="col-lg-12">
                      <div class="clock"></div>
                    </div>
                </div>
              <div class="clearfix"></div>
            </div>
           <!-- body -->     
          </div>
        </div>
      </div>
  @empty
      <div class="card-header card-header-primary text-center">
         <h4>No se encontraron Resultados</h4>
      </div>
  @endforelse
<!-- PERFIL -->
      
<!--      Wizard container --------------------------------------------------------------------- -->
    <div class="col-md-9">
               @include("Catalogos.anexos.$anexos")
     </div>
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
 
<script src="//cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.10.0/locale/es.js"></script>
<script src="{{ asset('select2/select2.full.min.js')}}"></script>
<script src="{{ asset('js') }}/citasprocesoconsulta.js"></script>

<script>
  $(document).ready(function() {
   
var i = 0;
var hour = 0;
var minut = 0;
var second = 0;

var year = 0;
var month = 0;
var day = 0;
var total = 0;

var tod = new Date();
var newhour = tod.getHours();
var newmin = tod.getMinutes();
var newsec = tod.getSeconds();

var citas = {{ $ids }};
      $.ajax({
        type: "GET",
        dataType: "json",
        url: "../public/cronometro",
        data: {cita: citas},
        success: function (result) {

           $.each(result, function (index, subcatObj) {
           i++;

            year = subcatObj.start.substring(0, 4);
            month = subcatObj.start.substring(5, 7);
            day = subcatObj.start.substring(8, 10);
            hour = subcatObj.cron_inicia.substring(0, 2);
            minut = subcatObj.cron_inicia.substring(3, 5);
            second = subcatObj.cron_inicia.substring(6, 8);
           
            var date = new Date(year, month, day,hour,minut,second);
            var today = new Date(year, month, day,newhour,newmin,newsec);
            var dif = today.getTime() - date.getTime();
            var timeLeft = (dif/1000);

            clock = $('.clock').FlipClock({
            clockFace: 'MinuteCounter'
            });
                clock.setTime(timeLeft);
                clock.start(); 
        });
      }
   });      


});



function start(){
  clock = $('.clock').FlipClock({
  clockFace: 'MinuteCounter'
  });  
}

function reset(result){
  var times = result;
  clock = $('.clock').FlipClock({
  clockFace: 'MinuteCounter'
  });
      clock.setTime(times);
      clock.start();  
}
    function stop () { 
        clock.stop;
        var tiempo = clock.getTime();
        alert(tiempo);
         $("#final").val(tiempo);
         var times = $("#final").val();
         //myForm.submit(); 
         document.getElementById("myForm").submit();   
         }

</script>
@endpush
