$(document).ready(function () {



//Especialidad 

    var especialidades = $("#id_especialidad").val();

    $.ajax({                
        type: "GET",
        dataType: "json",
        url: "../public/selectespecialidad",               
        success: function (data) {
            var item = [];
            for (var i = 0, max = data.data.length; i < max; i++) {
                item.push({id: data.data[i].id, text: data.data[i].name});
            }

            $("#id_especialidad")
            .html('')
            .select2(
                    {
                        placeholder: {
                            id: '-1',
                            text: 'Seleccione '
                        },
                        allowClear: true,
                        'data': item
                    }
            ).on("select2:select", function (e) {
                                var select_val = $(e.currentTarget).val();
                                doctoresselect(select_val);
                            });
            
                        $("#id_especialidad").val([especialidades]).change();            
         }
    });     

function doctoresselect(select_val){


 var stateuser = $("#id_usuario").val();

 $.ajax({                
        type: "GET",
        dataType: "json",
        url: "../public/selectdoctoresusuarios/"+""+select_val+"",                                    
        success: function (data) {
            var item = [];
            for (var i = 0, max = data.data.length; i < max; i++) {
                item.push({id: data.data[i].id, text: data.data[i].title});
            }

            $("#id_usuario")
            .html('')
            .select2(
                    {
                        placeholder: {
                            id: '-1',
                            text: 'Seleccione'
                        },
                        allowClear: true,
                        'data': item
                    }
            ).on("select2:select", function (e) {
                                var select_val = $(e.currentTarget).val();
                                $('#fullCalendar').fullCalendar('refetchEvents');
                                $('#fullCalendar').fullCalendar('destroy');
                                medico(select_val);


                            });
                        $("#id_usuario").val([stateuser]).change();


         }
    }); 
}

function medico(sel){

$calendar = $('#fullCalendar');
var user = sel;
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

       $("#myform").attr("action","citas/add");
        var formDateS = start=moment(start).format('YYYY-MM-DD HH:mm');
        var formDateE = end=moment(end).format('YYYY-MM-DD HH:mm');

       // alert(formDateS);
        $('#fechstart').val(formDateS),
        $('#fechend').val(formDateE),
        $('.modal').modal();
        especialidad();                    
},

eventClick: function(event, element) {
   
        var formDateSF = event.start=moment(event.start).format('YYYY-MM-DD HH:mm');
        var formDateSH = event.start=moment(event.start).format('HH:mm');
        var formDateEH = event.start=moment(event.end).format('HH:mm');

// $('.modalactualizar').modal();
    //alert(event.img);

    swal({
    title: 'Cita',
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

            showCancelButton: false,
            confirmButtonText: 'Cerrar',
            confirmButtonClass: 'btn btn-danger',
            buttonsStyling: false
        }).then(function(result) {

                //alert(event.id);
            
        });
    
    
},
editable: false,
eventLimit: true,

events: function(start, end, timezone, callback) {
        $.ajax({
               type: "GET",
               dataType: "json",
               url: "../public/selectprocesoconsultalaboratorio/"+""+user+"",               
               success: function(doc) {
                callback(doc);
                console.log(doc);
            }
        });
        //bindCal();
    }

});
}


function especialidad(){


    //Especialidad 
    var especialidads = $("#id_especialidads").val();

    $.ajax({                
        type: "GET",
        dataType: "json",
        url: "../public/selectespecialidad",               
        success: function (data) {
            var item = [];
            for (var i = 0, max = data.data.length; i < max; i++) {
                item.push({id: data.data[i].id, text: data.data[i].name});
            }

            $("#id_especialidads")
            .html('')
            .select2(
                    {
                        placeholder: {
                            id: '-1',
                            text: 'Seleccione '
                        },
                        allowClear: true,
                        'data': item
                    }
            )
                        $("#id_especialidads").val([especialidads]).change();            
         }
    });     

//Numero del Paciente

    var numpaciente = $("#numpac").val();

    $.ajax({                
        type: "GET",
        dataType: "json",
        url: "../public/selectnumpaciente",               
        success: function (data) {
            var item = [];
            for (var i = 0, max = data.data.length; i < max; i++) {
                item.push({id: data.data[i].paciente, text: data.data[i].paciente});
            }

            $("#numpac")
            .html('')
            .select2(
                    {
                        placeholder: {
                            id: '-1',
                            text: 'Seleccione '
                        },
                        allowClear: true,
                        'data': item
                    }
            )
                        $("#numpac").val([numpaciente]).change();            
         }
    });

}

function bindCal() {
    var ddlStudio1Value = $("#id_user").val();
    $('#fullCalendar').fullCalendar('addEventSource', function (start, end, timezone, callback) {
        $.ajax({
            type: "GET",
            dataType: "json",
            url: "../public/selectcita/"+""+user+"",
            async: false,
            contentType: "application/json; charset=utf-8",
            success: function (doc) {
                var events = [];
                var EventIds = "0";
                $(doc).each(function () {
                    $('#fullCalendar').fullCalendar('removeEvents', $(this).attr('id'));
                    events.push({
                        id: $(this).attr('id'),
                        title: $(this).attr('title'),
                        start: $(this).attr('start'),
                        end: $(this).attr('end'),
                        color: $(this).attr('color')
                    });
                });
                callback(events);
            },
            error: function (response) {
                alert(response.responseText);
            }
        });
    });
}

});