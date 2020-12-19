 $(document).ready(function () {


  $('#id_checkup').hide(); //oculto mediante id
  $('#cat').hide(); //muestro mediante clase

  $('#id_checkup1722').hide(); //oculto mediante id
  
   var role = $('#user').val();
            //medico();   
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

 if(select_val == 11){
     $('#id_checkup').show(); //oculto mediante id
     $('#cat').show(); //muestro mediante clase
     $('#id_checkup1722').show(); //oculto mediante id
     checkup();
 }
 else{
      $('#id_checkup').hide(); //oculto mediante id
      $('#cat').hide(); //muestro mediante clase
 }
 
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
        $('.docs-example-modal-lg').modal();
        especialidad();                    
},

eventClick: function(event, element) {
   
        var formDateSF = event.start=moment(event.start).format('YYYY-MM-DD HH:mm');
        var formDateSH = event.start=moment(event.start).format('HH:mm');
        var formDateEH = event.start=moment(event.end).format('HH:mm');
        

// $('.modalactualizar').modal();
    //alert(event.img);
     
    if(event.img === undefined){
        //alert(formDateSF);
        var result = $.ajax({
               type: "GET",
               dataType: "json",
               url: "../public/selectcitadelete/"+""+formDateSF+"",               
               success:function(data) {
                  //alert(data.msg);
        var ffech = formDateSF.substring(0,10);
            swal({
            title: 'Cita',
            html:    '<div class="row">' +
                             '<div class="col-sm-3 fileinput-new thumbnail img-circle">' +
                                 '<img src="https://ciclica.lealtaddigitalsoft.mx/public/material/img/'+data.img+'" width="160px" height="160px" style="padding: 0px; width: 160px; height: 160px;">' +
                             '</div>' +
                    '<div class="col-sm-9">' +
                    '<div class="bmd-form-group is-filled">' +
                      '<label class="col-sm-8 col-form-label">Nombre: '+ event.title +'</label>' +
                    '<div>' +
                    '<div class="bmd-form-group is-filled">' +
                      '<input class="col-sm-7 form-control ml-auto mr-auto" type="date" value="'+ ffech +'">' +
                    '<div>' +
                    '<div class="bmd-form-group is-filled">' +
                          '<label class="col-sm-8 col-form-label">Hora de entrada:</label>' +
                    '<div>' +
                     '<div class="bmd-form-group is-filled">' +
                      '<input class="col-sm-4 form-control ml-auto mr-auto" type="time" value="'+ formDateSH +'">' +
                    '<div>' +
                    '<div class="bmd-form-group is-filled">' +
                      '<label class="col-sm-8 col-form-label">Hora de salida:</label>' +
                    '<div>' +
                    '<div class="bmd-form-group is-filled">' +
                      '<input class="col-sm-4 form-control ml-auto mr-auto" type="time" value="'+ formDateEH +'">' +
                    '<div>' +
                    '<div class="bmd-form-group is-filled">' +
                      '<label class="col-sm-8 col-form-label">Nota: '+ event.nota +'</label>' +
                    '<div>' +
                  '<button type="button" class="btn btn-primary SwalBtn1">' + 'Eliminar' + '</button>' +
                    '<button type="button" class="btn btn-success SwalBtn2">' + 'Modificar' + '</button>' +
                    '<button type="button" class="btn btn-danger SwalBtn3">' + 'Cerrar' + '</button>' +
               '</div>' +
             '</div>' ,
        
        
        showCancelButton: false,
            showConfirmButton: false,
             onOpen: function (dObj) {
                $('.SwalBtn1').on('click',function () {
                   deletecitas(event.id);
                });
                $('.SwalBtn2').on('click',function () {
                    var f = $("#ffecha").val();
                    var hi = $("#hin").val();
                    var hf = $("#hfi").val();
                    //alert(hi);
                    modificarcitas(event.id, f, hi, hf);
                });
                $('.SwalBtn3').on('click',function () {
                   swal.clickConfirm();
                });
               
            }
            
        });  
                        
                       }
                });
        
    }
    else if(role === "5"){
        //alert(role);
        
    swal({
    title: 'Cita',
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
    else{
        
        var ffech = formDateSF.substring(0,10);

    swal({
    title: 'Cita',
    html:    '<div class="row">' +
                     '<div class="col-sm-3 fileinput-new thumbnail img-circle">' +
                      '<img src="https://ciclica.lealtaddigitalsoft.mx/public/material/img/'+event.img+'" width="160px" height="160px" style="padding: 0px; width: 160px; height: 160px;">' +
                     '</div>' +
                '<div class="col-sm-9">' +
                    '<div class="bmd-form-group is-filled">' +
                      '<label class="col-sm-8 col-form-label">Nombre: '+ event.title +'</label>' +
                    '<div>' +
                    '<div class="bmd-form-group is-filled">' +
                      '<input class="col-sm-7 form-control ml-auto mr-auto" id="ffecha" type="date" value="'+ ffech +'">' +
                    '<div>' +
                    '<div class="bmd-form-group is-filled">' +
                          '<label class="col-sm-8 col-form-label">Hora de entrada:</label>' +
                    '<div>' +
                     '<div class="bmd-form-group is-filled">' +
                      '<input class="col-sm-4 form-control ml-auto mr-auto" id="hin" type="time" value="'+ formDateSH +'">' +
                    '<div>' +
                    '<div class="bmd-form-group is-filled">' +
                      '<label class="col-sm-8 col-form-label">Hora de salida:</label>' +
                    '<div>' +
                    '<div class="bmd-form-group is-filled">' +
                      '<input class="col-sm-4 form-control ml-auto mr-auto" id="hfi" type="time" value="'+ formDateEH +'">' +
                    '<div>' +
                    '<div class="bmd-form-group is-filled">' +
                      '<label class="col-sm-8 col-form-label">Nota: '+ event.nota +'</label>' +
                    '<div>' +
                    '<button type="button" class="btn btn-primary SwalBtn1">' + 'Eliminar' + '</button>' +
                    '<button type="button" class="btn btn-success SwalBtn2">' + 'Modificar' + '</button>' +
                    '<button type="button" class="btn btn-danger SwalBtn3">' + 'Cerrar' + '</button>' +
               '</div>' +
             '</div>' ,
        
        
        showCancelButton: false,
            showConfirmButton: false,
             onOpen: function (dObj) {
                $('.SwalBtn1').on('click',function () {
                   deletecitas(event.id);
                });
                $('.SwalBtn2').on('click',function () {
                    var f = $("#ffecha").val();
                    var hi = $("#hin").val();
                    var hf = $("#hfi").val();
                    //alert(hi);
                    modificarcitas(event.id, f, hi, hf);
                });
                $('.SwalBtn3').on('click',function () {
                   swal.clickConfirm();
                });
               
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
               url: "https://ciclica.lealtaddigitalsoft.mx/public/selectcita/"+""+user+"",               
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
        url: 'https://ciclica.lealtaddigitalsoft.mx/public/citas/destroy/' + ids,          
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
                         var espe = $("#id_usuario").val();
                          medico(espe);
                        
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

function modificarcitas(ids, fec, hoi, hof){
    
    var parametros = {"id" : ids,
                     "fecha" : fec,
                     "hor_inicial" : hoi,
                     "hor_final" : hof};
                     
     //alert(fec);
      $.ajax({
        type: "POST",
        dataType: "json",
        url: 'https://ciclica.lealtaddigitalsoft.mx/public/citas/modificar',  
        data: parametros,
        success: function (data) {
                    var item = [];
                    for (var i = 0, max = data.data.length; i < max; i++) {
                     var result = data.data[i].message;
                    }
                    if(result == "Se modifico correctamente"){
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
                         var espe = $("#id_usuario").val();
                          medico(espe);
                        
                    }
                    else{
                             Swal.fire({
                                    position: 'top-end',
                                    type: 'success',
                                    title: result,
                                    showConfirmButton: false,
                                    timer: 4500
                          });       
                    }
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

function checkup(){
    
      //Checkup

    var checkup = $("#id_checkup").val();

    $.ajax({                
        type: "GET",
        dataType: "json",
        url: "https://ciclica.lealtaddigitalsoft.mx/public/selectcheckup",               
        success: function (data) {
            var item = [];
            for (var i = 0, max = data.data.length; i < max; i++) {
                item.push({id: data.data[i].id, text: data.data[i].nombre});
            }

            $("#id_checkup")
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
                                checkupselect(select_val);
                            });
        
                        $("#id_checkup").val([checkup]).change();            
         }
    }); 
    
}

function checkupselect(select_val){

 
 var checkup1722 = $("#id_checkup1722").val();

 $.ajax({                
        type: "GET",
        dataType: "json",
        url: "https://ciclica.lealtaddigitalsoft.mx/public/selectcheckup1722/"+""+select_val+"",                                    
        success: function (data) {
            var item = [];
            for (var i = 0, max = data.data.length; i < max; i++) {
                item.push({id: data.data[i].id, text: data.data[i].nombre});
            }

            $("#id_checkup1722")
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
            )
            
            $("#id_checkup1722").val([checkup1722]).change();

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