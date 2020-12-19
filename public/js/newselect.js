 $(document).ready(function () {

    var contrasena = $("#password").val('');

    var sex = $("#sex").val();

//Sexo
    $.ajax({                
        type: "GET",
        dataType: "json",
        url: "../public/selectsex",               
        success: function (data) {
            var item = [];
            for (var i = 0, max = data.data.length; i < max; i++) {
                item.push({id: data.data[i].id, text: data.data[i].name});
            }

            $("#sex")
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
                        $("#sex").val([sex]).change();            
         }
    });     
    
    
    
 //Tipo de Usuario 

    var tipousuario = $("#tipousuario").val();

    $.ajax({                
        type: "GET",
        dataType: "json",
        url: "../public/selecttipousuario",               
        success: function (data) {
            var item = [];
            for (var i = 0, max = data.data.length; i < max; i++) {
                item.push({id: data.data[i].id, text: data.data[i].name});
            }

            $("#tipousuario")
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
                     if (select_val === "5") {
                        $("#id_especialidad").removeAttr("disabled");
                    } else {
                        $("#id_especialidad").prop("disabled", true);
                    }                   
            });
                        $("#tipousuario").val([tipousuario]).change();            
         }
    });     
 

//Paciente 

    var paciente = $("#id_paciente").val();

    $.ajax({                
        type: "GET",
        dataType: "json",
        url: "../public/selectpaciente",               
        success: function (data) {
            var item = [];
            for (var i = 0, max = data.data.length; i < max; i++) {
                item.push({id: data.data[i].id, text: data.data[i].name});
            }

            $("#id_paciente")
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
                        $("#id_paciente").val([paciente]).change();            
         }
    });     
 

//Especialidad 

    var especialidad = $("#id_especialidad").val();

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
            )
                        $("#id_especialidad").val([especialidad]).change();            
         }
    });     


//Facturacion 

    var facturacion = $("#id_facturacion").val();

    $.ajax({                
        type: "GET",
        dataType: "json",
        url: "../public/selectfacturacion",               
        success: function (data) {
            var item = [];
            for (var i = 0, max = data.data.length; i < max; i++) {
                item.push({id: data.data[i].id_facturacion, text: data.data[i].name});
            }

            $("#id_facturacion")
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
                        $("#id_facturacion").val([facturacion]).change();            
         }
    });     

 //Estado civil

    var edocivil = $("#id_edo_civil").val();

    $.ajax({                
        type: "GET",
        dataType: "json",
        url: "../public/selectedocivil",               
        success: function (data) {
            var item = [];
            for (var i = 0, max = data.data.length; i < max; i++) {
                item.push({id: data.data[i].id, text: data.data[i].name});
            }

            $("#id_edo_civil")
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
                        $("#id_edo_civil").val([edocivil]).change();            
         }
    });     



 //Estado Ubicacion

    var estadoubicacion = $("#id_estado_domicilio").val();

    $.ajax({                
        type: "GET",
        dataType: "json",
        url: "../public/selectestadoubicacion",               
        success: function (data) {
            var item = [];
            for (var i = 0, max = data.data.length; i < max; i++) {
                item.push({id: data.data[i].estado, text: data.data[i].estado});
            }

            $("#id_estado_domicilio")
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
                        $("#id_estado_domicilio").val([estadoubicacion]).change();            
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
                item.push({id: data.data[i].id, text: data.data[i].paciente});
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
//-----------------------------------------------------------------------------------------------------
        var active = $("#active").val();

//Active
    $.ajax({                
        type: "GET",
        dataType: "json",
        url: "../public/selectactive",               
        success: function (data) {
            var item = [];
            for (var i = 0, max = data.data.length; i < max; i++) {
                item.push({id: data.data[i].id, text: data.data[i].name_active});
            }

            $("#active")
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
                        $("#active").val([active]).change();            
         }
    });
    
    
    

       var stateuser = $("#id_user").val();

//Usuario
    $.ajax({                
        type: "GET",
        dataType: "json",
        url: "../public/selectusuario",               
      success: function (data) {
            var item = [];
            for (var i = 0, max = data.data.length; i < max; i++) {
                item.push({id: data.data[i].id, text: data.data[i].name});
            }

            $("#id_user")
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
                        $("#id_user").val([stateuser]).change();            
         }
    }); 

 
 
       var anexo13 = $("#id_precio").val();

//Anexo13 precio solo doctores
    $.ajax({                
        type: "GET",
        dataType: "json",
        url: "https://ciclica.lealtaddigitalsoft.mx/public/selectanexo13doctores",               
      success: function (data) {
            var item = [];
            for (var i = 0, max = data.data.length; i < max; i++) {
                item.push({id: data.data[i].id, text: data.data[i].name});
            }

            $("#id_precio")
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
                        $("#id_precio").val([anexo13]).change();            
         }
    }); 

 
  
       var anexo13lab = $("#id_precio_lab").val();

//Anexo13 precio solo doctores
    $.ajax({                
        type: "GET",
        dataType: "json",
        url: "https://ciclica.lealtaddigitalsoft.mx/public/selectanexo13lab",               
      success: function (data) {
            var item = [];
            for (var i = 0, max = data.data.length; i < max; i++) {
                item.push({id: data.data[i].id, text: data.data[i].name});
            }

            $("#id_precio_lab")
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
                        $("#id_precio_lab").val([anexo13lab]).change();            
         }
    }); 
    
    //Paciente laboratorio

    var pacientes = $("#id_pacientes").val();

    $.ajax({                
        type: "GET",
        dataType: "json",
        url: "https://ciclica.lealtaddigitalsoft.mx/public/selectnumpaciente",               
        success: function (data) {
            var item = [];
            for (var i = 0, max = data.data.length; i < max; i++) {
                item.push({id: data.data[i].id, text: data.data[i].paciente});
            }

            $("#id_pacientes")
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
                        $("#id_pacientes").val([pacientes]).change();            
         }
    }); 
    
     //ANOTACIONES

    var anotaciones = $("#id_anotaciones").val();

    $.ajax({                
        type: "GET",
        dataType: "json",
        url: "https://ciclica.lealtaddigitalsoft.mx/public/selectanotaciones",               
        success: function (data) {
            var item = [];
            for (var i = 0, max = data.data.length; i < max; i++) {
                item.push({id: data.data[i].id, text: data.data[i].nombre});
            }

            $("#id_anotaciones")
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
                        $("#id_anotaciones").val([anotaciones]).change();            
         }
    }); 
    
 });



