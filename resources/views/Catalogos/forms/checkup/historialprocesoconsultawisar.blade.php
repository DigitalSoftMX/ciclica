@extends('layouts.appcheckup', ['activePage' => 'form_wizard', 'menuParent' => 'forms', 'titlePage' => __('Consulta')])

<link href="{{ asset('material') }}/css/flipclock.css" rel="stylesheet" />

@section('content')
<div class="content">
  <div class="container-fluid">
    <div class="row">

<!--      Wizard container --------------------------------------------------------------------- -->
      <div class="col-md-12">
        <div class="card card-profile">
          <div class="card-body">
                  
                <div class="table-responsive">
                  <table id="datatables" class="table table-striped table-no-bordered table-hover">
                    <thead class="text-primary">
                      <th>
                        {{ __('Doctor') }}
                      </th>
                      <th>
                        {{ __('Especialidad') }}
                      </th>
                      <th>
                        {{ __('Fecha') }}
                      </th>
                      <th>
                          {{ __('Accion') }}
                        </th>
                    </thead>
                    <tbody>
                      @foreach($histmedico as $item)
                        <tr>
                          <td>
                            {{ $item->medico }}
                          </td>
                          <td>
                            {{ $item->especialidad }}
                          </td>
                          <td>
                            {{ $item->created_at->format('Y-m-d') }}
                          </td>
                          <td class="td-actions text-center">
                            <a href="{{route('historialclinico',$cita)}}" class="btn btn-rose btn-round" role="button">Ver</a> 
                          </td>
                        </tr>
                      @endforeach
                    </tbody>
                  </table>
                </div>
           </div>
         </div>
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

