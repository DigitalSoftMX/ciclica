<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
  return view('auth.login');
})->name('welcome');

Auth::routes();

Route::get('home', 'HomeController@index')->name('home');
Route::get('dashboard', 'HomeController@index')->name('home');
Route::get('pricing', 'ExamplePagesController@pricing')->name('page.pricing');
Route::get('lock', 'ExamplePagesController@lock')->name('page.lock');
Route::get('error', ['as' => 'page.error', 'uses' => 'ExamplePagesController@error']);

Route::group(['middleware' => 'auth'], function () {
    Route::resource('category', 'CategoryController', ['except' => ['show']]);
    Route::resource('tag', 'TagController', ['except' => ['show']]);
    Route::resource('item', 'ItemController', ['except' => ['show']]);
    Route::resource('role', 'RoleController', ['except' => ['show', 'destroy']]);
    Route::resource('user', 'UserController', ['except' => ['show']]);
    
    Route::get('profile', ['as' => 'profile.edit', 'uses' => 'ProfileController@edit']);
    Route::put('profile', ['as' => 'profile.update', 'uses' => 'ProfileController@update']);
    Route::put('profile/password', ['as' => 'profile.password', 'uses' => 'ProfileController@password']);
    
    Route::get('calendar', ['as' => 'page.calendar', 'uses' => 'ExamplePagesController@calendar']);

         //Rutas de roles y permisos
     Route::resource('roles', 'Security\RoleController');
     Route::post('roles/store', 'Security\RoleController@store');
     Route::get('user_Role', 'Security\RoleController@userRole'); //asignar permisos a roles
     Route::post('user_Role/add', 'Security\RoleController@add');
     Route::get('roles/destroy/{id}', 'Security\RoleController@destroy');
     Route::post('roles/update/{id}', 'Security\RoleController@update');
     Route::put('restore_rol/{id}','Security\RoleController@restore');

     Route::put('restore_permission/{id}','Security\RolePermissionController@restore');
     Route::post('rolepermission/edit', 'Security\RolePermissionController@asignar');
     Route::post('rolepermission/delete', 'Security\RolePermissionController@desasignar');
     Route::post('rolepermission/store','Security\RolePermissionController@store');
     Route::resource('rolepermission', 'Security\RolePermissionController');
         
     // Fin Rutas de Roles y Permisos
     

     Route::get('calendarprocesoconsulta/{id}','ExamplePagesController@calendarprocesoconsulta');

     //Catalogos
     //Administrador
     
     //Roles
     Route::resource('role', 'Catalogos\Admin\RoleController', ['except' => ['destroy', 'show']]); //llama al controlador
     Route::get('rolejlist', 'Catalogos\Admin\RoleController@getJlist'); //lista de la tabla
     Route::get('role/edit/{id}', 'Catalogos\Admin\RoleController@getEdit');//metodo para mostrar en edit
     Route::post('role/edit/{id}', 'Catalogos\Admin\RoleController@postEdit');//metodo para guardar en edit
     Route::get('role/add', 'Catalogos\Admin\RoleController@getAdd');//metodo para abrir add
     Route::post('role/add', 'Catalogos\Admin\RoleController@postAdd');//metodo para guardar en add
     
     //Permisos
     Route::resource('permission', 'Catalogos\Admin\PermissionController', ['except' => ['destroy', 'show']]); //llama al controlador
     Route::get('permissionjlist', 'Catalogos\Admin\PermissionController@getJlist'); //lista de la tabla
     Route::get('permission/edit/{id}', 'Catalogos\Admin\PermissionController@getEdit');//metodo para mostrar en edit
     Route::post('permission/edit/{id}', 'Catalogos\Admin\PermissionController@postEdit');//metodo para guardar en edit
     Route::get('permission/add', 'Catalogos\Admin\PermissionController@getAdd');//metodo para abrir add
     Route::post('permission/add', 'Catalogos\Admin\PermissionController@postAdd');//metodo para guardar en add
     
     
     //Perfil
     Route::resource('perfil', 'Catalogos\Admin\PerfilController', ['except' => ['destroy', 'show']]); //llama al controlador
     Route::get('perfiljlist', 'Catalogos\Admin\PerfilController@getJlist'); //lista de la tabla
     Route::get('perfil/edit/{id}', 'Catalogos\Admin\PerfilController@getEdit');//metodo para mostrar en edit
     Route::post('perfil/edit/{id}', 'Catalogos\Admin\PerfilController@postEdit');//metodo para guardar en edit
     Route::get('perfil/add', 'Catalogos\Admin\PerfilController@getAdd');//metodo para abrir add
     Route::post('perfil/add', 'Catalogos\Admin\PerfilController@postAdd');//metodo para guardar en add

     /**************************************************** CATALOGOS  ***********************************************************************************/


     // Especialidades
     Route::resource('cat', 'Catalogos\Admin\CatController', ['except' => ['destroy', 'show']]); //llama al controlador
     Route::get('catjlist', 'Catalogos\Admin\CatController@getJlist'); //lista de la tabla
     Route::get('cat/edit/{id}', 'Catalogos\Admin\CatController@getEdit');//metodo para mostrar en edit
     Route::post('cat/edit/{id}', 'Catalogos\Admin\CatController@postEdit');//metodo para guardar en edit
     Route::get('cat/add', 'Catalogos\Admin\CatController@getAdd');//metodo para abrir add
     Route::post('cat/add', 'Catalogos\Admin\CatController@postAdd');//metodo para guardar en add
     Route::get('cat/destroy/{id}', 'Catalogos\Admin\CatController@getDestroy'); 

     // Estado Civil
     Route::resource('cat_est_civ', 'Catalogos\Admin\cat_est_civController', ['except' => ['destroy', 'show']]); //llama al controlador
     Route::get('cat_est_civjlist', 'Catalogos\Admin\cat_est_civController@getJlist'); //lista de la tabla
     Route::get('cat_est_civ/edit/{id}', 'Catalogos\Admin\cat_est_civController@getEdit');//metodo para mostrar en edit
     Route::post('cat_est_civ/edit/{id}', 'Catalogos\Admin\cat_est_civController@postEdit');//metodo para guardar en edit
     Route::get('cat_est_civ/add', 'Catalogos\Admin\cat_est_civController@getAdd');//metodo para abrir add
     Route::post('cat_est_civ/add', 'Catalogos\Admin\cat_est_civController@postAdd');//metodo para guardar en add
     Route::get('cat_est_civ/destroy/{id}', 'Catalogos\Admin\cat_est_civController@getDestroy'); 

      // Sexo
     Route::resource('cat_sexo', 'Catalogos\Admin\cat_sexoController', ['except' => ['destroy', 'show']]); //llama al controlador
     Route::get('cat_sexojlist', 'Catalogos\Admin\cat_sexoController@getJlist'); //lista de la tabla
     Route::get('cat_sexo/edit/{id}', 'Catalogos\Admin\cat_sexoController@getEdit');//metodo para mostrar en edit
     Route::post('cat_sexo/edit/{id}', 'Catalogos\Admin\cat_sexoController@postEdit');//metodo para guardar en edit
     Route::get('cat_sexo/add', 'Catalogos\Admin\cat_sexoController@getAdd');//metodo para abrir add
     Route::post('cat_sexo/add', 'Catalogos\Admin\cat_sexoController@postAdd');//metodo para guardar en add
     Route::get('cat_sexo/destroy/{id}', 'Catalogos\Admin\cat_sexoController@getDestroy'); 

     //Citas
     Route::resource('cat_tipo_cita', 'Catalogos\Admin\cat_tipo_citaController', ['except' => ['destroy', 'show']]); //llama al controlador
     Route::get('cat_tipo_citajlist', 'Catalogos\Admin\cat_tipo_citaController@getJlist'); //lista de la tabla
     Route::get('cat_tipo_cita/edit/{id}', 'Catalogos\Admin\cat_tipo_citaController@getEdit');//metodo para mostrar en edit
     Route::post('cat_tipo_cita/edit/{id}', 'Catalogos\Admin\cat_tipo_citaController@postEdit');//metodo para guardar en edit
     Route::get('cat_tipo_cita/add', 'Catalogos\Admin\cat_tipo_citaController@getAdd');//metodo para abrir add
     Route::post('cat_tipo_cita/add', 'Catalogos\Admin\cat_tipo_citaController@postAdd');//metodo para guardar en add
     Route::get('cat_tipo_cita/destroy/{id}', 'Catalogos\Admin\cat_tipo_citaController@getDestroy');
     
     //Pacientes
     Route::resource('pacientes', 'Catalogos\Admin\pacientesController', ['except' => ['destroy', 'show']]); //llama al controlador
     Route::get('pacientesjlist', 'Catalogos\Admin\pacientesController@getJlist'); //lista de la tabla
     Route::get('pacientes/edit/{id}', 'Catalogos\Admin\pacientesController@getEdit');//metodo para mostrar en edit
     Route::post('pacientes/edit/{id}', 'Catalogos\Admin\pacientesController@postEdit');//metodo para guardar en edit
     Route::get('pacientes/add', 'Catalogos\Admin\pacientesController@getAdd');//metodo para abrir add
     Route::post('pacientes/add', 'Catalogos\Admin\pacientesController@postAdd');//metodo para guardar en add
     Route::get('pacientes/destroy/{id}', 'Catalogos\Admin\pacientesController@getDestroy');
     

 //Anotaciones
    Route::resource('anotaciones', 'Catalogos\Admin\anotacionesController', ['except' => ['destroy', 'show']]); //llama al controlador
    Route::get('anotacionesjlist', 'Catalogos\Admin\anotacionesController@getJlist'); //lista de la tabla
    Route::get('anotaciones/edit/{id}', 'Catalogos\Admin\anotacionesController@getEdit');//metodo para mostrar en edit
    Route::post('anotaciones/edit/{id}', 'Catalogos\Admin\anotacionesController@postEdit');//metodo para guardar en edit
    Route::get('anotaciones/add', 'Catalogos\Admin\anotacionesController@getAdd');//metodo para abrir add
    Route::post('anotaciones/add', 'Catalogos\Admin\anotacionesController@postAdd');//metodo para guardar en add
    Route::get('anotaciones/destroy/{id}', 'Catalogos\Admin\anotacionesController@getDestroy');

    //precios
    Route::resource('generalpre', 'Catalogos\Admin\GeneralpreController', ['except' => ['destroy', 'show']]); //llama al controlador
    Route::get('generalprejlist', 'Catalogos\Admin\GeneralpreController@getJlist'); //lista de la tabla
    Route::get('generalpre/edit/{id}', 'Catalogos\Admin\GeneralpreController@getEdit');//metodo para mostrar en edit
    Route::post('generalpre/edit/{id}', 'Catalogos\Admin\GeneralpreController@postEdit');//metodo para guardar en edit
    Route::get('generalpre/add', 'Catalogos\Admin\GeneralpreController@getAdd');//metodo para abrir add
    Route::post('generalpre/add', 'Catalogos\Admin\GeneralpreController@postAdd');//metodo para guardar en add
    Route::get('generalpre/destroy/{id}', 'Catalogos\Admin\GeneralpreController@getDestroy');

    Route::resource('farmacia', 'Catalogos\Admin\farmaciaController', ['except' => ['destroy', 'show']]); //llama al controlador
    Route::get('farmaciajlist', 'Catalogos\Admin\farmaciaController@getJlist'); //lista de la tabla
    Route::get('farmacia/edit/{id}', 'Catalogos\Admin\farmaciaController@getEdit');//metodo para mostrar en edit
    Route::post('farmacia/edit/{id}', 'Catalogos\Admin\farmaciaController@postEdit');//metodo para guardar en edit
    Route::get('farmacia/add', 'Catalogos\Admin\farmaciaController@getAdd');//metodo para abrir add
    Route::post('farmacia/add', 'Catalogos\Admin\farmaciaController@postAdd');//metodo para guardar en add
    Route::get('farmacia/destroy/{id}', 'Catalogos\Admin\farmaciaController@getDestroy');


    Route::resource('labo', 'Catalogos\Admin\LaboController', ['except' => ['destroy', 'show']]); //llama al controlador
    Route::get('labojlist', 'Catalogos\Admin\LaboController@getJlist'); //lista de la tabla
    Route::get('labo/edit/{id}', 'Catalogos\Admin\LaboController@getEdit');//metodo para mostrar en edit
    Route::post('labo/edit/{id}', 'Catalogos\Admin\LaboController@postEdit');//metodo para guardar en edit
    Route::get('labo/add', 'Catalogos\Admin\LaboController@getAdd');//metodo para abrir add
    Route::post('labo/add', 'Catalogos\Admin\LaboController@postAdd');//metodo para guardar en add
    Route::get('labo/destroy/{id}', 'Catalogos\Admin\LaboController@getDestroy');


     //Usuarios o Clientes

     Route::resource('userclient', 'Catalogos\Admin\UserClientController', ['except' => ['destroy', 'show']]); 
     Route::get('userclientjlist', 'Catalogos\Admin\UserClientController@getJlist'); 
     Route::get('userclient/edit/{id}', 'Catalogos\Admin\UserClientController@getEdit');
     Route::post('userclient/edit/{id}', 'Catalogos\Admin\UserClientController@postEdit');
     Route::get('userclient/add', 'Catalogos\Admin\UserClientController@getAdd');
     Route::post('userclient/add', 'Catalogos\Admin\UserClientController@postAdd');
     Route::get('userclient/destroy/{id}', 'Catalogos\Admin\UserClientController@getDestroy'); 
     

     //Citas Laboratorio
     Route::resource('citaslaboratorios', 'Catalogos\Admin\CitasLaboratorioController', ['except' => ['destroy', 'show']]); 
     Route::get('citaslaboratoriosjlist', 'Catalogos\Admin\CitasLaboratorioController@getJlist'); 
     Route::get('citaslaboratorios/edit/{id}', 'Catalogos\Admin\CitasLaboratorioController@getEdit');
     Route::post('citaslaboratorios/edit/{id}', 'Catalogos\Admin\CitasLaboratorioController@postEdit');
     Route::get('citaslaboratorios/add', 'Catalogos\Admin\CitasLaboratorioController@getAdd');
     Route::post('citaslaboratorios/add', 'Catalogos\Admin\CitasLaboratorioController@postAdd');
     Route::get('citaslaboratorios/destroy/{id}', 'Catalogos\Admin\CitasLaboratorioController@getDestroy'); 
     
     //Citas Imagenologia
     Route::resource('citasimagenologia', 'Catalogos\Admin\CitasImagenologiaController', ['except' => ['destroy', 'show']]); 
     Route::get('citasimagenologiajlist', 'Catalogos\Admin\CitasImagenologiaController@getJlist'); 
     Route::get('citasimagenologia/edit/{id}', 'Catalogos\Admin\CitasImagenologiaController@getEdit');
     Route::post('citasimagenologia/edit/{id}', 'Catalogos\Admin\CitasImagenologiaController@postEdit');
     Route::get('citasimagenologia/add', 'Catalogos\Admin\CitasImagenologiaController@getAdd');
     Route::post('citasimagenologia/add', 'Catalogos\Admin\CitasImagenologiaController@postAdd');
     Route::get('citasimagenologia/destroy/{id}', 'Catalogos\Admin\CitasImagenologiaController@getDestroy'); 
     

     
     Route::resource('receta', 'Catalogos\Admin\RecetaController');
     Route::resource('graphicsgeneral', 'Graphics\GraphicsGeneralController');
     Route::resource('liters','Catalogos\Admin\RecetaController');
    Route::resource('general','Graphics\GraphicsGeneralController');

     
     //Caja o Cobrar
     Route::resource('caja', 'Catalogos\Admin\CajaController', ['except' => ['destroy', 'show']]); 
     Route::get('cajajlist', 'Catalogos\Admin\CajaController@getJlist'); 
     Route::get('caja/edit/{id}', 'Catalogos\Admin\CajaController@getEdit');
     Route::post('caja/edit/{id}', 'Catalogos\Admin\CajaController@postEdit');
     Route::get('caja/add', 'Catalogos\Admin\CajaController@getAdd');
     Route::post('caja/add', 'Catalogos\Admin\CajaController@postAdd');
     Route::get('caja/destroy/{id}', 'Catalogos\Admin\CajaController@getDestroy'); 
     

     //Deudas
     Route::resource('deudas', 'Catalogos\Admin\DeudasController', ['except' => ['destroy', 'show']]); 
     Route::get('deudasjlist', 'Catalogos\Admin\DeudasController@getJlist'); 
     Route::get('deudas/edit/{id}', 'Catalogos\Admin\DeudasController@getEdit');
     Route::post('deudas/edit/{id}', 'Catalogos\Admin\DeudasController@postEdit');
     Route::get('deudas/add', 'Catalogos\Admin\DeudasController@getAdd');
     Route::post('deudas/add', 'Catalogos\Admin\DeudasController@postAdd');
     Route::get('deudas/destroy/{id}', 'Catalogos\Admin\DeudasController@getDestroy'); 
     
     
     //Facturacion
     Route::resource('facturacion', 'Catalogos\Admin\FacturacionController', ['except' => ['destroy', 'show']]); 
     Route::get('facturacionjlist', 'Catalogos\Admin\FacturacionController@getJlist'); 
     Route::get('facturacion/edit/{id}', 'Catalogos\Admin\FacturacionController@getEdit');
     Route::post('facturacion/edit/{id}', 'Catalogos\Admin\FacturacionController@postEdit');
     Route::get('facturacion/add', 'Catalogos\Admin\FacturacionController@getAdd');
     Route::post('facturacion/add', 'Catalogos\Admin\FacturacionController@postAdd');
     Route::get('facturacion/destroy/{id}', 'Catalogos\Admin\FacturacionController@getDestroy'); 
     

     //Recetas
     Route::resource('recetas', 'Catalogos\Admin\RecetasController', ['except' => ['destroy', 'show']]); 
     Route::get('recetasjlist', 'Catalogos\Admin\RecetasController@getJlist'); 
     Route::get('recetas/edit/{id}', 'Catalogos\Admin\RecetasController@getEdit');
     Route::post('recetas/edit/{id}', 'Catalogos\Admin\RecetasController@postEdit');
     Route::get('recetas/add', 'Catalogos\Admin\RecetasController@getAdd');
     Route::post('recetas/add', 'Catalogos\Admin\RecetasController@postAdd');
     Route::get('recetas/destroy/{id}', 'Catalogos\Admin\RecetasController@getDestroy'); 
     
//********************************************************************************************
     //Proceso Consulta
       Route::get('procesoconsulta', 'Catalogos\Admin\ProcesoConsultaController@index')->name('procesoconsulta');
       Route::get('procesoconsultas/{id}', 'Catalogos\Admin\ProcesoConsultaController@getConsulta')->name('procesoconsultas');
       Route::get('selectprocesoconsulta/{id}', 'Catalogos\Admin\PerfilController@getAjaxlistaProcesoConsulta');

      //-------------
       Route::post('procesoconsultas/add', 'Catalogos\Admin\ConsultaController@postAdd');
       Route::get('procesoconsultas/download/{id}' , 'Catalogos\Admin\ProcesoConsultaController@downloadFile');
       Route::get('procesoconsultas/downloadimg/{id}' , 'Catalogos\Admin\ProcesoConsultaController@downloadImg');

     //Citas Estudios
       Route::get('citasestudios', ['as' => 'page.calendar', 'uses' => 'ExamplePagesController@calendarestudios']);
       Route::get('selectcitaestudios/{id}', 'Catalogos\Admin\PerfilController@getAjaxlistaCita'); 
       Route::post('citasestudios/add', 'Catalogos\Admin\CitasController@postAdd');
       Route::get('citasestudios/destroy/{id}', 'Catalogos\Admin\CitasController@getDestroy'); 
   
    // Documentos anexo

   //Anexos
     Route::get('anexos', 'Catalogos\Admin\AnexosController@index')->name('anexos');
      Route::post('procesoaestudios/add','Catalogos\Admin\AnexosController@postAdd');

    Route::post('procesoanexos2/add', 'Catalogos\Admin\ConsultaController@postAdd');


    // Documentos anexo

    Route::resource('anexodocu', 'Catalogos\Admin\AnexodocuController', ['except' => ['show']]);

    Route::resource('anexouno', 'Catalogos\Admin\AnexunoController', ['except' => ['show']]);
    Route::post('procesoanexo1/add', 'Catalogos\Admin\AnexunoController@postAdd');
    
    Route::resource('anexo2', 'Catalogos\Admin\AnexdosController', ['except' => ['show']]);
    Route::post('procesoanexo2/add', 'Catalogos\Admin\AnexdosController@postAdd');

    Route::resource('anexo3', 'Catalogos\Admin\Anexo3Controller', ['except' => ['show']]);
    Route::post('procesoanexo3/add', 'Catalogos\Admin\Anexo3Controller@postAdd');

    /*Route::resource('anexo4', 'Catalogos\Admin\AnexdosController', ['except' => ['show']]);
    Route::post('procesoanexo4/add', 'Catalogos\Admin\AnexdosController@postAdd');

    Route::resource('anexo4', 'Catalogos\Admin\AnexdosController', ['except' => ['show']]);
    Route::post('procesoanexo4/add', 'Catalogos\Admin\AnexdosController@postAdd');*/


    Route::resource('anexo6', 'Catalogos\Admin\AnexseisController', ['except' => ['show']]);
    Route::resource('anexo8', 'Catalogos\Admin\AnexochoController', ['except' => ['show']]);

    Route::resource('anexo10', 'Catalogos\Admin\AnexdiezController', ['except' => ['show']]);
    Route::post('procesoanexo10/add', 'Catalogos\Admin\AnexdiezController@postAdd');

    Route::resource('anexo14', 'Catalogos\Admin\AnexcatorceController', ['except' => ['show']]);
    Route::resource('anexo16', 'Catalogos\Admin\AnexdseisController', ['except' => ['show']]);

    Route::resource('anexo18', 'Catalogos\Admin\AnexdochoController', ['except' => ['show']]);
    Route::post('procesoanexo18/add', 'Catalogos\Admin\AnexdochoController@postAdd');


    Route::resource('anexo20', 'Catalogos\Admin\AnexveiteController', ['except' => ['show']]);
    Route::post('procesoanexo20/add', 'Catalogos\Admin\AnexveiteController@postAdd');

    Route::resource('anexo22', 'Catalogos\Admin\AnexveitedosController', ['except' => ['show']]);
    Route::post('procesoanexo22/add', 'Catalogos\Admin\AnexveitedosController@postAdd');

    Route::resource('anexodocu2', 'Catalogos\Admin\Anexodocu2Controller', ['except' => ['show']]);
    Route::resource('anexo24', 'Catalogos\Admin\AnexoveitecuatroController', ['except' => ['show']]);
    Route::resource('anexo26', 'Catalogos\Admin\AnexoveiteseisController', ['except' => ['show']]);
    Route::resource('anexo28', 'Catalogos\Admin\AnexoveiteochoController', ['except' => ['show']]);
    Route::resource('anexo30', 'Catalogos\Admin\AnexotreintaController', ['except' => ['show']]);
    Route::post('procesoanexo30/add', 'Catalogos\Admin\AnexotreintaController@postAdd');

    Route::resource('anexo32', 'Catalogos\Admin\AnexotreitadosController', ['except' => ['show']]);

    Route::resource('anexo34', 'Catalogos\Admin\AnexotreintacuatroController', ['except' => ['show']]);
    Route::post('procesoanexo34/add', 'Catalogos\Admin\AnexotreintacuatroController@postAdd');

    Route::resource('anexo35', 'Catalogos\Admin\AnexotreintacuatroController', ['except' => ['show']]);
    Route::post('procesoanexo35/add', 'Catalogos\Admin\Anex35Controller@postAdd');

    Route::post('procesoanexo37_1/add', 'Catalogos\Admin\AnexotreintasieteUnoController@postAdd');


    Route::resource('anexo40', 'Catalogos\Admin\AnexocuarentaController', ['except' => ['show']]);
    Route::post('procesoanexo40/add', 'Catalogos\Admin\AnexcuarentaController@postAdd');
    





    //select2
     Route::get('selectsex', 'Catalogos\Admin\PerfilController@getAjaxlistaSex');
     Route::get('selectedocivil', 'Catalogos\Admin\PerfilController@getAjaxlistaEdoCivil');
     Route::get('selectactive', 'Catalogos\Admin\PerfilController@getAjaxlistaActive');
     Route::get('selectestadoubicacion', 'Catalogos\Admin\PerfilController@getAjaxlistaEstado');
     Route::get('selectpaciente', 'Catalogos\Admin\PerfilController@getAjaxlistaPaciente');
     Route::get('selectdoctor', 'Catalogos\Admin\PerfilController@getAjaxlistaDoctor');
     Route::get('selectespecialidad', 'Catalogos\Admin\PerfilController@getAjaxlistaEspecialidad');
     Route::get('selectnumpaciente', 'Catalogos\Admin\PerfilController@getAjaxlistaNumeroPaciente');
     Route::get('selectestudio', 'Catalogos\Admin\PerfilController@getAjaxlistaEstudio');
     Route::get('selectdoctoresusuarios/{id}', 'Catalogos\Admin\PerfilController@getAjaxlistaDoctoresUsuarios');
    
     Route::get('selectusuario', 'Catalogos\Admin\PerfilController@getAjaxlistaUser');
     Route::get('selectusuarios', 'Catalogos\Admin\PerfilController@getAjaxlistaUsers');
     Route::get('selectsgraphics', 'Catalogos\Admin\PerfilController@getAjaxlistaGraphics');
     
     Route::get('notification', 'Catalogos\Admin\PerfilController@getAjaxlistaNotification');
     
     
     Route::resource('graphics', 'Graphics\GraphicsController');
     Route::resource('graphicsgeneral', 'Graphics\GraphicsGeneralController');
     Route::resource('liters','Graphics\GraphicsController');
    Route::resource('general','Graphics\GraphicsGeneralController');

    Route::post('usuariojlistt', 'Catalogos\Admin\PerfilController@Jlistt'); //filtro
    Route::get('import', 'ImportController@import');
     
    
    Route::get('selecttipousuario', 'Catalogos\Admin\PerfilController@getAjaxlistaTipoUsuario');
    Route::get('selectfacturacion', 'Catalogos\Admin\PerfilController@getAjaxlistaFacturacion');
         

    //calendar ejemplo
    Route::get('events', 'EventController@index')->name('events.index');
    Route::post('events', 'EventController@addEvent')->name('events.add');
   

    Route::get('selectcita/{id}', 'Catalogos\Admin\PerfilController@getAjaxlistaCita'); 
    Route::post('citas/add', 'Catalogos\Admin\CitasController@postAdd');
    Route::get('citas/destroy/{id}', 'Catalogos\Admin\CitasController@getDestroy'); 
    Route::get('citas/iniciar/{id}', 'Catalogos\Admin\CitasController@getVer'); 
    Route::get('citas/finalizar/{id}', 'Catalogos\Admin\CitasController@getFinalizar'); 
    Route::get('cronometro', 'Catalogos\Admin\CitasController@getAjaxlistaCronometro'); 
    
     //----------------------------------------------------------------------------------------------

    //Roll Recepcionista
       Route::get('registrarprocesoconsultadoctores', 'Catalogos\Admin\ProcesoConsultaController@index')->name('procesoconsulta');
       Route::get('registrarprocesoconsultadoctores/{id}', 'Catalogos\Admin\ProcesoConsultaController@getConsulta')->name('procesoconsultas');
       Route::get('selectprocesoconsulta/{id}', 'Catalogos\Admin\PerfilController@getAjaxlistaProcesoConsulta');
    

  
    //Roll Doctores
    //Perfil
    Route::get('profiledoctores', ['as' => 'profile.edit', 'uses' => 'ProfileController@edit']);
    Route::put('profiledoctores', ['as' => 'profile.update', 'uses' => 'ProfileController@update']);
    Route::put('profiledoctores/password', ['as' => 'profile.password', 'uses' => 'ProfileController@password']);

    //Proceso Consulta
       Route::get('procesoconsultadoctores', 'Catalogos\Doctores\ProcesoConsultaDoctoresController@index')->name('procesoconsulta');
       Route::get('procesoconsultadoctores/{id}', 'Catalogos\Admin\ProcesoConsultaController@getConsulta')->name('procesoconsultas');
       Route::get('selectprocesoconsultadoctores/{id}', 'Catalogos\Admin\PerfilController@getAjaxlistaProcesoConsulta');
       Route::post('procesoconsultadoctores/add', 'Catalogos\Admin\ConsultaController@postAdd');
       Route::get('procesoconsultadoctores/download/{id}' , 'Catalogos\Admin\ProcesoConsultaController@downloadFile');
       Route::get('procesoconsultadoctores/downloadimg/{id}' , 'Catalogos\Admin\ProcesoConsultaController@downloadImg');

    //Anexos proceso consulta  
       Route::get('anexoprocesoconsultadoctores', 'Catalogos\Admin\ProcesoConsultaController@anexo')->name('procesoconsulta');   
    //Historial proceso consulta    
       Route::get('historialprocesoconsultadoctores', 'Catalogos\Admin\ProcesoConsultaController@historial')->name('procesoconsulta');
    //Receta proceso consulta
     Route::get('recetaprocesoconsultadoctores', 'Catalogos\Admin\ProcesoConsultaController@receta')->name('procesoconsulta');
     Route::post('recetaprocesoconsultadoctores/add', 'Catalogos\Admin\RecetaImprimirController@postAdd');
       
    //Agendar citas proceso consulta
     Route::get('agendarcitaprocesoconsultadoctores', 'Catalogos\Admin\ProcesoConsultaController@agendar')->name('procesoconsulta');
    //Estudios citas proceso consulta
     Route::get('estudiosprocesoconsultadoctores', 'Catalogos\Admin\ProcesoConsultaController@estudios')->name('procesoconsulta');
       
  });




//--------------------------------------------------------------------------------------------



