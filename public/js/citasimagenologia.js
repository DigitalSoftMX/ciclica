$(document).ready(function () {

            medico();           

function medico(){

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
selectable: true,
selectHelper: true,
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

select: function(start, end) {

        var formDateS = start=moment(start).format('YYYY-MM-DD HH:mm');
        var formDateE = end=moment(end).format('YYYY-MM-DD HH:mm');

       // alert(formDateS);
        $('#fechstart').val(formDateS),
        $('#fechend').val(formDateE),
        $('.modal').modal();
                           
},

eventClick: function(event, element) {
   
        var formDateSF = event.start=moment(event.start).format('YYYY-MM-DD HH:mm');
        var formDateSH = event.start=moment(event.start).format('HH:mm');
        var formDateEH = event.start=moment(event.end).format('HH:mm');

// $('.modalactualizar').modal();
    
    if(event.img === undefined){
        //alert(formDateSF);
        var result = $.ajax({
               type: "GET",
               dataType: "json",
               url: "https://ciclica.lealtaddigitalsoft.mx/public/selectcitadeleteimagen/"+""+formDateSF+"",               
               success:function(data) {
                  //alert(data.msg);
                  
            swal({
            title: 'Cita Imagenologia',
            html:    '<div class="row">' +
                             '<div class="col-sm-3 fileinput-new thumbnail img-circle">' +
                              '<img src="https://ciclica.lealtaddigitalsoft.mx/public/material/img/'+data.img+'" width="160px" height="160px" style="padding: 0px; width: 160px; height: 160px;">' +
                             '</div>' +
                        '<div class="col-sm-9">' +
                            '<div class="form-group bmd-form-group is-filled">' +
                              '<label class="col-sm-8 col-form-label">Nombre: '+ data.name +'</label>' +
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
                              '<label class="col-sm-8 col-form-label">Nota: '+ data.nota +'</label>' +
                            '<div>' +
                       '</div>' +
                     '</div>' ,
        
            showCancelButton: true,
                    cancelButtonClass: 'btn btn-primary',
                    cancelButtonText: 'Cerrar',
                    confirmButtonText: 'Eliminar',
                    confirmButtonClass: 'btn btn-danger',
                    buttonsStyling: false
                }).then(function(result) {
        
                    if (result.value) {
               
                        deletecitas(data.msg); 
                         //var element = data.msg;
                    }   
                    
                });
                          
                       }
                });
        
    }
    else{

    swal({
    title: 'Cita Imagenologia',
    html:    '<div class="row">' +
                     '<div class="col-sm-3 fileinput-new thumbnail img-circle">' +
                      '<img src="https://ciclica.lealtaddigitalsoft.mx/public/material/img/'+event.img+'" width="160px" height="160px" style="padding: 0px; width: 160px; height: 160px;">' +
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

    //showCancelButton: true,
            //cancelButtonClass: 'btn btn-primary',
            //cancelButtonText: 'Cerrar',
            confirmButtonText: 'Cerrar',
            confirmButtonClass: 'btn btn-primary',
            buttonsStyling: false
        }).then(function(result) {

          
                if (result.value) {
               
              //  deletecitas(event.id);
                
                } 
              
            
        });
    }
    
},
editable: false,
eventLimit: true,

events: function(start, end, timezone, callback) {
        $.ajax({
               type: "GET",
               dataType: "json",
               url: "https://ciclica.lealtaddigitalsoft.mx/public/selectcitasimagen",               
               success: function(doc) {
                callback(doc);
                console.log(doc);
            }
        });
        //bindCal();
    }

});
}



function deletecitas(ids){
    // alert(ids);
      $.ajax({
        type: "GET",
        dataType: "json",
        url: 'https://ciclica.lealtaddigitalsoft.mx/public/citasimagen/destroy/' + ids,          
        success: function (data) {
                    var item = [];
                    for (var i = 0, max = data.data.length; i < max; i++) {
                     var result = data.data[i].message;
                    }
                    if(result == "Se elimino correctamente"){
                         Swal.fire({
                                    position: 'top-end',
                                    type: 'success',
                                    title: result,
                                    showConfirmButton: false,
                                    timer: 4500
                          });
                          $calendar.fullCalendar('removeEvents', ids); 
                         $calendar.fullCalendar('unselect');
                         $('#fullCalendar').fullCalendar('refetchEvents');
                         $('#fullCalendar').fullCalendar('destroy');
                          medico(); 
                    }
                    else{
                             Swal.fire({
                                    position: 'top-end',
                                    type: 'success',
                                    title: 'No tiene permiso para eliminar',
                                    showConfirmButton: false,
                                    timer: 4500
                          });       
                    }
             }
        });
}

});