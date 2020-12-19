 $(document).ready(function () {

$calendar = $('#fullCalendar');
today = new Date();
y = today.getFullYear();
m = today.getMonth();
d = today.getDate();

$calendar.fullCalendar({
    monthNames:['Enero','Febrero','Marzo','Abril','Mayo','Junio','Julio','Agosto','Septiembre','Octubre','Noviembre','Diciembre'],
    monthNamesShort:['Ene','Feb','Mar','Abr','May','Jun','Jul','Ago','Sep','Oct','Nov','Dic'],
    dayNames:['Domingo','Lunes','Martes','Miercoles','Jueves','Viernes','Sabado'],
    dayNamesShort:['Dom','Lun','Mar','Mie','Jue','Vie','Sab'],
    
    viewRender: function(view, element) {
        // We make sure that we activate the perfect scrollbar when the view isn't on Month
        if (view.name != 'month'){
            $(element).find('.fc-scroller').perfectScrollbar();
        }
    },
    header: {
     left: 'title',
     center: 'agendaWeek,agendaDay',
     right: 'prev,next,today'
},
defaultView: 'agendaWeek',
slotDuration: '00:30',
allDaySlot: false,
selectable: false,
selectHelper: false,
    views: {
        month: { // name of view
            titleFormat: 'MMMM YYYY'
            // other view-specific options here
        },
        week: {
            titleFormat: " MMMM D YYYY"
        },
        day: {
            titleFormat: 'D MMM, YYYY'
        }
    },

eventClick: function(event, element) {
   
        var formDateSF = event.start=moment(event.start).format('YYYY-MM-DD HH:mm');
        var formDateSH = event.start=moment(event.start).format('HH:mm');
        var formDateEH = event.end=moment(event.end).format('HH:mm');

//alert(event.cron_inicia);
if(event.cron_inicia === null){
swal({
    title: 'Cita',
    html:  '<div class="row">' +
                     '<div class="col-sm-3 fileinput-new thumbnail img-circle">' +
                     '<img src="../public/material/img/'+event.img+'" width="160px" height="160px" style="padding: 0px; width: 160px; height: 160px;">' +
                     '</div>' +
                     '<div class="col-sm-9">' +
                     '<div class="form-group bmd-form-group is-filled">' +
                      '<label class="col-sm-8 col-form-label">Nombre: '+ event.title +'</label>' +
                    '<div>' +
                    '<div class="form-group bmd-form-group is-filled">' +
                      '<label class="col-sm-8 col-form-label">Fecha: '+ formDateSF +'</label>' +
                    '<div>' +
                    '<div class="form-group bmd-form-group is-filled">' +
                      '<label class="col-sm-8 col-form-label">Hora de entrada: '+ formDateSH +'</label>' +
                    '<div>' +
                    '<div class="form-group bmd-form-group is-filled">' +
                      '<label class="col-sm-8 col-form-label">Hora de salida: '+ formDateEH +'</label>' +
                    '<div>' +
                    '<div class="form-group bmd-form-group is-filled">' +
                      '<label class="col-sm-8 col-form-label">Nota: '+ event.nota +'</label>' +
                    '<div>' +
               '</div>' +
             '</div>' ,

           showCancelButton: false,
            cancelButtonClass: 'btn btn-primary',
            cancelButtonText: 'Cerrar',
            confirmButtonText: 'Cerrar',
            confirmButtonClass: 'btn btn-primary',
            buttonsStyling: false
           }).then(function(result) {
            
        });     
    }
  /*  else{
swal({
    title: 'Finalizar Cita',
    html:    '<div class="row">' +
                     '<div class="col-sm-3 fileinput-new thumbnail img-circle">' +
                      '<img src="../public/material/img/'+event.img+'" width="150px">' +
                     '</div>' +
                '<div class="col-sm-9">' +
                    '<div class="form-group bmd-form-group is-filled">' +
                      '<label class="col-sm-8 col-form-label">Nombre: '+ event.title +'</label>' +
                    '<div>' +
                    '<div class="form-group bmd-form-group is-filled">' +
                      '<label class="col-sm-8 col-form-label">Fecha: '+ formDateSF +'</label>' +
                    '<div>' +
                    '<div class="form-group bmd-form-group is-filled">' +
                      '<label class="col-sm-8 col-form-label">Hora de entrada: '+ formDateSH +'</label>' +
                    '<div>' +
                    '<div class="form-group bmd-form-group is-filled">' +
                      '<label class="col-sm-8 col-form-label">Hora de salida: '+ formDateEH +'</label>' +
                    '<div>' +
                    '<div class="form-group bmd-form-group is-filled">' +
                      '<label class="col-sm-8 col-form-label">Nota: '+ event.nota +'</label>' +
                    '<div>' +
               '</div>' +
             '</div>' ,

    showCancelButton: true,
            cancelButtonClass: 'btn btn-primary',
            cancelButtonText: 'Cerrar',
            confirmButtonText: 'Finalizar',
            confirmButtonClass: 'btn btn-danger',
            buttonsStyling: false
        }).then(function(result) {

            if (result.value) {
                  Swal.fire(
                  'Se Finalizo la Cita!'
                )

            finalizarcitas(event.id); 
            $calendar.fullCalendar('removeEvents', event.id); 
            $calendar.fullCalendar('unselect');
              }
            
        });
    }*/



},
editable: false,
eventLimit: true,

events: function(start, end, timezone, callback) {
        $.ajax({
               type: "GET",
               dataType: "json",
               url: "../public/selectcita/"+""+0+"",               
               success: function(doc) {
                callback(doc);
                console.log(doc);
            }
        });
        //bindCal();
    }

});



function finalizarcitas(ids){
     //alert(ids);
      $.ajax({
        type: "GET",
        dataType: "json",
        url: '../public/citas/finalizar/' + ids,          
        success: function (data) {
                    var item = [];
                    for (var i = 0, max = data.data.length; i < max; i++) {
                     var result = data.data[i].message;
                    }
                    if(result == "Se finalizo correctamente"){
                         Swal.fire({
                                    position: 'top-end',
                                    type: 'success',
                                    title: result,
                                    showConfirmButton: false,
                                    timer: 2500
                          });
                    }
                    else{
                             Swal.fire({
                                    position: 'top-end',
                                    type: 'success',
                                    title: 'No tiene permiso para finalizar la cita',
                                    showConfirmButton: false,
                                    timer: 2500
                          });       
                    }
             }
        });
}


});