$(document).on('ready');

var i = 0;
var hour = 0;
var minut = 0;
var second = 0;

var year = 0;
var month = 0;
var day = 0;
var total = 0;

$.ajax({
    type: 'get',
    url: 'http://localhost/Birota/public/cronometroapart',
    cache: false,
    success: function (result) {

        $.each(result, function (index, subcatObj) {
            i++;

            year = subcatObj.date.substring(0, 4);
            month = subcatObj.date.substring(5, 7);
            day = subcatObj.date.substring(8, 10);
            hour = subcatObj.hour.substring(0, 2);
            minut = subcatObj.hour.substring(3, 5);
            second = subcatObj.hour.substring(6, 8);
            total = subcatObj.hours;
            var tod = new Date();
            var exam = tod.getHours();
            var exam1 = tod.getMinutes();

            if(hour > exam){

                 alert("Falta tiempo para iniciar:");
           }
            else if(minut > exam1){

                }
                else{

                iniciarTemporizador();

            }

        });

        //return minut;
    }
})

function iniciarTemporizador() {


    if(i == i){
        var tot = parseInt(total);
        if(tot >= 15){

            var newhour = parseInt(hour);
            var newminut = parseInt(minut)+parseInt(10)+parseInt(total);

        }
        else{

            var newhour = parseInt(hour)+parseInt(total);
            var newminut = parseInt(minut)+parseInt(10);
        }

        //var newhour = parseInt(hour)+parseInt(total);
        var newmonth = (month - 1);
        //var newminut = parseInt(minut)+parseInt(10);
        var date = new Date(year, newmonth, day,newhour,newminut,second,0);
        var today = new Date();
        var dif = date.getTime() - today.getTime();
        var timeLeft = (dif/1000);

        var number = ('#' + i);
        var number2 = ('10' + i);

        if(timeLeft > 0){
            var clock = $(number).FlipClock({
                countdown: true,
                callbacks: {
                    interval: redireccionar,
                    stop: function() {
                        clock.setTime(0000);
                        clock.start(false);
                    }

                }
            });

            clock.setTime(timeLeft);
            clock.start();

            function redireccionar()
            {
                if (clock.getTime() <= 0) {
                    // alert("Se termino el tiempo");
                    document.getElementById(number2).style.display="block";

                }
            }
        }
        else{
            document.getElementById(number2).style.display="block";
            var clock = $(number).FlipClock(0000,{
                autoStart: false
            });

        }

    }





}