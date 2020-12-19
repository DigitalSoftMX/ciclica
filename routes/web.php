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
Route::get('storage-link', function(){
           Artisan::call('storage:link');
           });
           
Route::group(['middleware' => 'auth'], function () {
    Route::resource('category', 'CategoryController', ['except' => ['show']]);
    Route::resource('tag', 'TagController', ['except' => ['show']]);
    Route::resource('item', 'ItemController', ['except' => ['show']]);
    Route::resource('role', 'RoleController', ['except' => ['show', 'destroy']]);
    Route::resource('user', 'UserController', ['except' => ['show']]);
    
    Route::get('profile', ['as' => 'profile.edit', 'uses' => 'ProfileController@edit']);
    Route::put('profile', ['as' => 'profile.update', 'uses' => 'ProfileController@update']);
    Route::put('profile/password', ['as' => 'profile.password', 'uses' => 'ProfileController@password']);
    
    Route::get('selectcoutenfermeria', 'Catalogos\Admin\PerfilController@getAjaxlistaCountEnfermera');
    Route::get('selectcoutdoctores', 'Catalogos\Admin\PerfilController@getAjaxlistaCountDoctores');
    
    Route::get('calendar', ['as' => 'page.calendar', 'uses' => 'ExamplePagesController@calendar']);
    Route::post('calendarfilterjfilter', 'ExamplePagesController@postJFilter');

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
     Route::get('pacientes/ver/{id}', 'Catalogos\Admin\pacientesController@getVer')->name('pacientesver');//metodo para abrir add
     

 //Anotaciones
    Route::resource('anotaciones', 'Catalogos\Admin\AnotacionesController', ['except' => ['destroy', 'show']]); //llama al controlador
    Route::get('anotacionesjlist', 'Catalogos\Admin\AnotacionesController@getJlist'); //lista de la tabla
    Route::get('anotaciones/edit/{id}', 'Catalogos\Admin\AnotacionesController@getEdit');//metodo para mostrar en edit
    Route::post('anotaciones/edit/{id}', 'Catalogos\Admin\AnotacionesController@postEdit');//metodo para guardar en edit
    Route::get('anotaciones/add', 'Catalogos\Admin\AnotacionesController@getAdd');//metodo para abrir add
    Route::post('anotaciones/add', 'Catalogos\Admin\AnotacionesController@postAdd');//metodo para guardar en add
    Route::get('anotaciones/destroy/{id}', 'Catalogos\Admin\AnotacionesController@getDestroy');

    //precios
    Route::resource('preciosgenerales', 'Catalogos\Anexos\Anexo13Controller', ['except' => ['destroy', 'show']]); //llama al controlador
    Route::get('preciosgeneralesjlist', 'Catalogos\Anexos\Anexo13Controller@getJlist'); //lista de la tabla
    Route::get('preciosgenerales/edit/{id}', 'Catalogos\Anexos\Anexo13Controller@getEdit');//metodo para mostrar en edit
    Route::post('preciosgenerales/edit/{id}', 'Catalogos\Anexos\Anexo13Controller@postEdit');//metodo para guardar en edit
    Route::get('preciosgenerales/add', 'Catalogos\Anexos\Anexo13Controller@getAdd');//metodo para abrir add
    Route::post('preciosgenerales/add', 'Catalogos\Anexos\Anexo13Controller@postAdd');//metodo para guardar en add
    Route::get('preciosgenerales/destroy/{id}', 'Catalogos\Anexos\Anexo13Controller@getDestroy');

    Route::resource('preciosfarmacia', 'Catalogos\Anexos\Anexo13FarmaciaController', ['except' => ['destroy', 'show']]); //llama al controlador
    Route::get('preciosfarmaciajlist', 'Catalogos\Anexos\Anexo13FarmaciaController@getJlist'); //lista de la tabla
    Route::get('preciosfarmacia/edit/{id}', 'Catalogos\Anexos\Anexo13FarmaciaController@getEdit');//metodo para mostrar en edit
    Route::post('preciosfarmacia/edit/{id}', 'Catalogos\Anexos\Anexo13FarmaciaController@postEdit');//metodo para guardar en edit
    Route::get('preciosfarmacia/add', 'Catalogos\Anexos\Anexo13FarmaciaController@getAdd');//metodo para abrir add
    Route::post('preciosfarmacia/add', 'Catalogos\Anexos\Anexo13FarmaciaController@postAdd');//metodo para guardar en add
    Route::get('preciosfarmacia/destroy/{id}', 'Catalogos\Anexos\Anexo13FarmaciaController@getDestroy');


    Route::resource('precioslaboratorios', 'Catalogos\Anexos\Anexo13LaboratorioController', ['except' => ['destroy', 'show']]); //llama al controlador
    Route::get('precioslaboratoriosjlist', 'Catalogos\Anexos\Anexo13LaboratorioController@getJlist'); //lista de la tabla
    Route::get('precioslaboratorios/edit/{id}', 'Catalogos\Anexos\Anexo13LaboratorioController@getEdit');//metodo para mostrar en edit
    Route::post('precioslaboratorios/edit/{id}', 'Catalogos\Anexos\Anexo13LaboratorioController@postEdit');//metodo para guardar en edit
    Route::get('precioslaboratorios/add', 'Catalogos\Anexos\Anexo13LaboratorioController@getAdd');//metodo para abrir add
    Route::post('precioslaboratorios/add', 'Catalogos\Anexos\Anexo13LaboratorioController@postAdd');//metodo para guardar en add
    Route::get('precioslaboratorios/destroy/{id}', 'Catalogos\Anexos\Anexo13LaboratorioController@getDestroy');


     //Usuarios o Clientes

     Route::resource('userclient', 'Catalogos\Admin\UserClientController', ['except' => ['destroy', 'show']]); 
     Route::get('userclientjlist', 'Catalogos\Admin\UserClientController@getJlist'); 
     Route::get('userclient/edit/{id}', 'Catalogos\Admin\UserClientController@getEdit');
     Route::post('userclient/edit/{id}', 'Catalogos\Admin\UserClientController@postEdit');
     Route::get('userclient/add', 'Catalogos\Admin\UserClientController@getAdd');
     Route::post('userclient/add', 'Catalogos\Admin\UserClientController@postAdd');
     Route::get('userclient/destroy/{id}', 'Catalogos\Admin\UserClientController@getDestroy'); 
     Route::get('userclient/ver/{id}', 'Catalogos\Admin\CitasEstadisticasController@getVer');//metodo para abrir add
     
     Route::resource('citasestadisticas', 'Catalogos\Admin\CitasEstadisticasController', ['except' => ['destroy', 'show']]); //llama al controlador
     Route::get('citasestadisticasjlist', 'Catalogos\Admin\CitasEstadisticasController@getJlist'); //lista de la tabla
     Route::get('citasestadisticasjlistl/{id}', 'Catalogos\Admin\CitasEstadisticasController@getJlistl'); //lista de la tabla
     Route::get('citasestadisticas/edit/{id}', 'Catalogos\Admin\CitasEstadisticasController@getEdit');//metodo para mostrar en edit
     Route::post('citasestadisticas/edit/{id}', 'Catalogos\Admin\CitasEstadisticasController@postEdit');//metodo para guardar en edit
     Route::get('citasestadisticas/destroy/{id}', 'Catalogos\Admin\CitasEstadisticasController@getDestroy');
     

     //Citas precioslaboratoriosratorio
     Route::resource('citasprecioslaboratoriosratorios', 'Catalogos\Admin\CitasprecioslaboratoriosratorioController', ['except' => ['destroy', 'show']]); 
     Route::get('citasprecioslaboratoriosratoriosjlist', 'Catalogos\Admin\CitasprecioslaboratoriosratorioController@getJlist'); 
     Route::get('citasprecioslaboratoriosratorios/edit/{id}', 'Catalogos\Admin\CitasprecioslaboratoriosratorioController@getEdit');
     Route::post('citasprecioslaboratoriosratorios/edit/{id}', 'Catalogos\Admin\CitasprecioslaboratoriosratorioController@postEdit');
     Route::get('citasprecioslaboratoriosratorios/add', 'Catalogos\Admin\CitasprecioslaboratoriosratorioController@getAdd');
     Route::post('citasprecioslaboratoriosratorios/add', 'Catalogos\Admin\CitasprecioslaboratoriosratorioController@postAdd');
     Route::get('citasprecioslaboratoriosratorios/destroy/{id}', 'Catalogos\Admin\CitasprecioslaboratoriosratorioController@getDestroy'); 
     
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

     
     //Citas caja
     Route::resource('citascaja', 'Catalogos\Admin\CitasCajaController', ['except' => ['destroy', 'show']]); 
     Route::get('citascajajlist', 'Catalogos\Admin\CitasCajaController@getJlist'); 
     Route::get('citascaja/edit/{id}', 'Catalogos\Admin\CitasCajaController@getEdit');
     Route::post('citascaja/edit/{id}', 'Catalogos\Admin\CitasCajaController@postEdit');
     Route::get('citascaja/add', 'Catalogos\Admin\CitasCajaController@getAdd');
     Route::post('citascaja/add', 'Catalogos\Admin\CitasCajaController@postAdd');
     Route::get('citascaja/destroy/{id}', 'Catalogos\Admin\CitasCajaController@getDestroy'); 
     Route::get('citascaja/ver/{id}', 'Catalogos\Admin\CitasCajaController@getVer')->name('citver');
     
     //Caja o Cobrar
     Route::resource('caja', 'Catalogos\Admin\CajaController', ['except' => ['destroy', 'show']]); 
     Route::get('cajajlist', 'Catalogos\Admin\CajaController@getJlist'); 
     Route::get('caja/edit/{id}', 'Catalogos\Admin\CajaController@getEdit');
     Route::post('caja/edit/{id}', 'Catalogos\Admin\CajaController@postEdit')->name('caj');
     Route::get('caja/add', 'Catalogos\Admin\CajaController@getAdd');
     Route::post('caja/add', 'Catalogos\Admin\CajaController@postAdd');
     Route::get('caja/destroy/{id}', 'Catalogos\Admin\CajaController@getDestroy'); 
     

     //Deudas
     Route::resource('deudas', 'Catalogos\Anexos\Anexo16Controller', ['except' => ['destroy', 'show']]); 
     Route::get('deudasjlist', 'Catalogos\Anexos\Anexo16Controller@getJlist'); 
     Route::get('deudas/edit/{id}', 'Catalogos\Anexos\Anexo16Controller@getEdit');
     Route::post('deudas/edit/{id}', 'Catalogos\Anexos\Anexo16Controller@postEdit');
     Route::get('deudas/add', 'Catalogos\Anexos\Anexo16Controller@getAdd');
     Route::post('deudas/add', 'Catalogos\Anexos\Anexo16Controller@postAdd');
     Route::get('deudas/destroy/{id}', 'Catalogos\Anexos\Anexo16Controller@getDestroy'); 
     
     
     //Facturacion
     Route::resource('facturacion', 'Catalogos\Anexos\Anexo15Controller', ['except' => ['destroy', 'show']]); 
     Route::get('facturacionjlist', 'Catalogos\Anexos\Anexo15Controller@getJlist'); 
     Route::get('facturacion/edit/{id}', 'Catalogos\Anexos\Anexo15Controller@getEdit');
     Route::post('facturacion/edit/{id}', 'Catalogos\Anexos\Anexo15Controller@postEdit');
     Route::get('facturacion/add', 'Catalogos\Anexos\Anexo15Controller@getAdd');
     Route::post('facturacion/add', 'Catalogos\Anexos\Anexo15Controller@postAdd');
     Route::get('facturacion/destroy/{id}', 'Catalogos\Anexos\Anexo15Controller@getDestroy'); 
     

     //Recetas
     Route::resource('recetas', 'Catalogos\Admin\RecetasController', ['except' => ['destroy', 'show']]); 
     Route::get('recetasjlist', 'Catalogos\Admin\RecetasController@getJlist'); 
     Route::get('recetasjlistl/{id}', 'Catalogos\Admin\RecetasController@getJlistl'); //lista de la tabla
     Route::get('recetas/edit/{id}', 'Catalogos\Admin\RecetasController@getEdit');
     Route::post('recetas/edit/{id}', 'Catalogos\Admin\RecetasController@postEdit');
     Route::get('recetas/add', 'Catalogos\Admin\RecetasController@getAdd');
     Route::post('recetas/add', 'Catalogos\Admin\RecetasController@postAdd');
     Route::get('recetas/destroy/{id}', 'Catalogos\Admin\RecetasController@getDestroy'); 
     
//********************************************************************************************
     //Proceso Consulta
       Route::get('procesoconsulta', 'Catalogos\Admin\ProcesoConsultaController@index')->name('procesoconsulta');
       Route::get('procesoconsultas/{id}', 'Catalogos\Admin\ProcesoConsultaController@getConsulta');
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
    
    Route::post('procesoanexos2/add', 'Catalogos\Admin\ConsultaController@postAdd');


    // Documentos anexo

    Route::resource('anexodocu', 'Catalogos\Anexos\AnexodocuController', ['except' => ['show']]);

    Route::resource('anexouno', 'Catalogos\Admin\AnexunoController', ['except' => ['show']]);
    Route::post('procesoanexo1/add', 'Catalogos\Anexos\Anex1Controller@postAdd');
    Route::post('procesoanexo1/edit/{id}', 'Catalogos\Anexos\Anex1Controller@postEdit')->name('proanex1');
    
    Route::resource('anexo2', 'Catalogos\Admin\AnexdosController', ['except' => ['show']]);
    Route::post('procesoanexo2/add', 'Catalogos\Anexos\Anex2Controller@postAdd');
    Route::post('procesoanexo2/edit/{id}', 'Catalogos\Anexos\Anex2Controller@postEdit')->name('proanex2');
     
    Route::resource('anexo3', 'Catalogos\Admin\Anexo3Controller', ['except' => ['show']]);
    Route::post('procesoanexo3/add', 'Catalogos\Anexos\Anexo3Controller@postAdd');
    Route::post('procesoanexo3/edit/{id}', 'Catalogos\Anexos\Anex3Controller@postEdit')->name('proanex3');
    
    Route::resource('anexo4', 'Catalogos\Admin\AnexcuatroController', ['except' => ['show']]);
    Route::post('procesoanexo4/add', 'Catalogos\Anexos\Anex4Controller@postAdd');

    Route::resource('anexo5', 'Catalogos\Admin\AnexcincoController', ['except' => ['show']]);
    Route::post('procesoanexo5/add', 'Catalogos\Anexos\Anex5Controller@postAdd');


    Route::resource('anexo6', 'Catalogos\Admin\AnexseisController', ['except' => ['show']]);
    Route::post('procesoanexo6/add', 'Catalogos\Anexos\Anex6Controller@postAdd');

    Route::resource('anexo8', 'Catalogos\Admin\AnexochoController', ['except' => ['show']]);
    Route::post('procesoanexo8/add', 'Catalogos\Anexos\Anex8Controller@postAdd');

    Route::resource('anexo9', 'Catalogos\Admin\AnexnueveController', ['except' => ['show']]);
    Route::post('procesoanexo9/add', 'Catalogos\Anexos\Anex9Controller@postAdd');

    Route::resource('anexo10', 'Catalogos\Admin\AnexdiezController', ['except' => ['show']]);
    Route::post('procesoanexo10/add', 'Catalogos\Anexos\Anex10Controller@postAdd');

    Route::resource('anexo13', 'Catalogos\Admin\AnexcatorceController', ['except' => ['show']]);
    Route::post('procesoanexo13/add', 'Catalogos\Admin\AnexdochoController@postAdd');

    Route::resource('anexo14', 'Catalogos\Admin\AnexcatorceController', ['except' => ['show']]);
    Route::post('procesoanexo14/add', 'Catalogos\Admin\AnexdochoController@postAdd');

    Route::resource('anexo15', 'Catalogos\Admin\AnexdseisController', ['except' => ['show']]);
    Route::post('procesoanexo15/add', 'Catalogos\Admin\AnexdochoController@postAdd');

    Route::resource('anexo16', 'Catalogos\Admin\AnexdseisController', ['except' => ['show']]);
    Route::post('procesoanexo16/add', 'Catalogos\Admin\AnexdochoController@postAdd');

    Route::resource('anexo17', 'Catalogos\Admin\Anex17Controller', ['except' => ['show']]);
    Route::post('procesoanexo17/add', 'Catalogos\Anexos\Anex17Controller@postAdd');

    Route::resource('anexo18', 'Catalogos\Admin\AnexdochoController', ['except' => ['show']]);
    Route::post('procesoanexo18/add', 'Catalogos\Anexos\Anex18Controller@postAdd');

    Route::resource('anexo19', 'Catalogos\Admin\Anex19Controller', ['except' => ['show']]);
    Route::post('procesoanexo19/add', 'Catalogos\Anexos\Anex19Controller@postAdd');


    Route::resource('anexo20', 'Catalogos\Admin\AnexveiteController', ['except' => ['show']]);
    Route::post('procesoanexo20/add', 'Catalogos\Anexos\Anex20Controller@postAdd');

    Route::resource('anexo21', 'Catalogos\Admin\Anex21Controller', ['except' => ['show']]);
    Route::post('procesoanexo21/add', 'Catalogos\Anexos\Anex21Controller@postAdd');

    Route::resource('anexo22', 'Catalogos\Admin\AnexveitedosController', ['except' => ['show']]);
    Route::post('procesoanexo22/add', 'Catalogos\Anexos\Anex22Controller@postAdd');

    Route::resource('anexo24', 'Catalogos\Admin\AnexoveitecuatroController', ['except' => ['show']]);
    Route::post('procesoanexo24/add', 'Catalogos\Admin\AnexoveitecuatroController@postAdd');

    Route::resource('anexo25', 'Catalogos\Admin\AnexveinticincoController', ['except' => ['show']]);
    Route::post('procesoanexo25/add', 'Catalogos\Admin\AnexveinticincoController@postAdd');

    Route::resource('anexo26', 'Catalogos\Admin\AnexoveiteseisController', ['except' => ['show']]);
    Route::post('procesoanexo26/add', 'Catalogos\Admin\AnexoveiteseisController@postAdd');

    Route::resource('anexo27', 'Catalogos\Admin\AnexoveitesieteController', ['except' => ['show']]);
    Route::post('procesoanexo27/add', 'Catalogos\Admin\AnexoveitesieteController@postAdd');

    Route::resource('anexo28', 'Catalogos\Admin\AnexoveiteochoController', ['except' => ['show']]);
    Route::post('procesoanexo28/add', 'Catalogos\Admin\AnexoveiteochoController@postAdd');
	
	Route::resource('anexo29', 'Catalogos\Admin\Anex29Controller', ['except' => ['show']]);
    Route::post('procesoanexo29/add', 'Catalogos\Admin\Anex29Controller@postAdd');

	Route::resource('anexo30', 'Catalogos\Admin\AnexotreintaController', ['except' => ['show']]);
    Route::post('procesoanexo30/add', 'Catalogos\Admin\AnexotreintaController@postAdd');

    Route::resource('anexo32', 'Catalogos\Admin\AnexotreitadosController', ['except' => ['show']]);

    Route::resource('anexo34', 'Catalogos\Admin\Anexo34Controller', ['except' => ['show']]);
    Route::post('procesoanexo34/add', 'Catalogos\Anexos\Anexo34Controller@postAdd');

    Route::resource('anexo35', 'Catalogos\Admin\Anexo35Controller', ['except' => ['show']]);
    Route::post('procesoanexo35/add', 'Catalogos\Anexos\Anex35Controller@postAdd');

    Route::post('procesoanexo37_1/add', 'Catalogos\Admin\AnexotreintasieteUnoController@postAdd');

    Route::resource('anexo39', 'Catalogos\Admin\Anex39Controller', ['except' => ['show']]);
    Route::post('procesoAnexo39/add', 'Catalogos\Admin\Anex39Controller@postAdd');


    Route::resource('anexo40', 'Catalogos\Admin\AnexocuarentaController', ['except' => ['show']]);
    Route::post('procesoanexo40/add', 'Catalogos\Anexos\Anexo40Controller@postAdd');




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
     Route::get('selectanotaciones', 'Catalogos\Admin\PerfilController@getAjaxlistaAnotaciones');
     Route::get('selectdoctoresusuarios/{id}', 'Catalogos\Admin\PerfilController@getAjaxlistaDoctoresUsuarios');
     Route::get('selectcheckup', 'Catalogos\Admin\PerfilController@getAjaxlistaCheckup');
     Route::get('selectcheckup1722/{id}', 'Catalogos\Admin\PerfilController@getAjaxlistaCheckup1722');
     
     Route::get('selectusuario', 'Catalogos\Admin\PerfilController@getAjaxlistaUser');
     Route::get('selectusuarios', 'Catalogos\Admin\PerfilController@getAjaxlistaUsers');
     Route::get('selectsgraphics', 'Catalogos\Admin\PerfilController@getAjaxlistaGraphics');
     
     Route::get('selectcitasprecioslaboratoriosratorios', 'Catalogos\Admin\PerfilController@getAjaxlistaCitaprecioslaboratoriosratorio');
     
     Route::get('notification', 'Catalogos\Admin\PerfilController@getAjaxlistaNotification');
     
     Route::get('selectanexo13doctores', 'Catalogos\Admin\PerfilController@getAjaxlistaPreciosGenerales');
     
     
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
    Route::get('selectcitaconsulta/{id}', 'Catalogos\Admin\PerfilController@getAjaxlistaCitaConsulta'); 
    Route::get('selectcitadelete/{id}', 'Catalogos\Admin\PerfilController@getAjaxlistaCitaDelete'); 
    Route::post('citas/add', 'Catalogos\Admin\CitasController@postAdd');
    Route::get('citas/destroy/{id}', 'Catalogos\Admin\CitasController@getDestroy'); 
    Route::get('citas/iniciar/{id}', 'Catalogos\Admin\CitasController@getVer'); 
    Route::get('citas/confirmar/{id}', 'Catalogos\Admin\CitasController@getConfirmar'); 
    Route::post('citas/modificar', 'Catalogos\Admin\CitasController@postModificar'); 
    Route::get('citas/finalizar/{id}', 'Catalogos\Admin\CitasController@getFinalizar'); 
    Route::get('cronometro', 'Catalogos\Admin\CitasController@getAjaxlistaCronometro'); 
    
     //----------------------------------------------------------------------------------------------

    //Roll Recepcionista
    Route::get('registrarprocesoconsultadoctores', 'Catalogos\Admin\ProcesoConsultaController@index');
    Route::get('registrarprocesoconsultadoctores/{id}', 'Catalogos\Admin\ProcesoConsultaController@getConsulta');
    Route::get('selectprocesoconsulta/{id}', 'Catalogos\Admin\PerfilController@getAjaxlistaProcesoConsulta');
    
    //Agendar Estudios
    Route::resource('agendarestudios', 'Catalogos\Checkup\AgendarEstudiosController', ['except' => ['destroy', 'show']]); //llama al controlador
    Route::get('agendarestudiosjlist', 'Catalogos\Checkup\AgendarEstudiosController@getJlist'); //lista de la tabla
    Route::get('agendarestudios/edit/{id}', 'Catalogos\Checkup\AgendarEstudiosController@getEdit')->name('agencitalabo');//metodo para mostrar en edit
    Route::post('agendarestudios/edit/{id}', 'Catalogos\Checkup\AgendarEstudiosControllerController@postEdit');//metodo para guardar en edit
    Route::get('agendarestudios/add', 'Catalogos\Checkup\AgendarEstudiosController@getAdd');//metodo para abrir add
    Route::post('agendarestudios/add', 'Catalogos\Checkup\AgendarEstudiosController@postAdd');//metodo para guardar en add
    Route::get('agendarestudios/destroy/{id}', 'Catalogos\Checkup\AgendarEstudiosController@getDestroy');
    
    //Agendar Estudios Imagenologia
    Route::resource('agendarestudiosimagenologia', 'Catalogos\Checkup\AgendarEstudiosImagenologiaController', ['except' => ['destroy', 'show']]); //llama al controlador
    Route::get('agendarestudiosimagenologiajlist', 'Catalogos\Checkup\AgendarEstudiosImagenologiaController@getJlist'); //lista de la tabla
    Route::get('agendarestudiosimagenologia/edit/{id}', 'Catalogos\Checkup\AgendarEstudiosImagenologiaController@getEdit');//metodo para mostrar en edit
    Route::post('agendarestudiosimagenologia/edit/{id}', 'Catalogos\Checkup\AgendarEstudiosImagenologiaControllerController@postEdit');//metodo para guardar en edit
    Route::get('agendarestudiosimagenologia/add', 'Catalogos\Checkup\AgendarEstudiosImagenologiaController@getAdd');//metodo para abrir add
    Route::post('agendarestudiosimagenologia/add', 'Catalogos\Checkup\AgendarEstudiosImagenologiaController@postAdd');//metodo para guardar en add
    Route::get('agendarestudiosimagenologia/destroy/{id}', 'Catalogos\Checkup\AgendarEstudiosImagenologiaController@getDestroy');
    
    //Agendar Caja
    Route::resource('agendarcaja', 'Catalogos\Checkup\AgendarCostoController', ['except' => ['destroy', 'show']]); //llama al controlador
    Route::get('agendarcajajlist', 'Catalogos\Checkup\AgendarCostoController@getJlist'); //lista de la tabla
    Route::post('agendarcajajlistt', 'Catalogos\Checkup\AgendarCostoController@Jlistt'); //filtro
    Route::get('agendarcaja/edit/{id}', 'Catalogos\Checkup\AgendarCostoController@getEdit')->name('addcajacitasget');//metodo para mostrar en edit
    Route::post('agendarcaja/edit/{id}', 'Catalogos\Checkup\AgendarCostoController@postEdit')->name('addcajacitas');//metodo para guardar en edit
    Route::get('agendarcaja/add', 'Catalogos\Checkup\AgendarCostoController@getAdd');//metodo para abrir add
    Route::post('agendarcaja/add', 'Catalogos\Checkup\AgendarCostoController@postAdd');//metodo para guardar en add
    Route::get('agendarcaja/destroy/{id}', 'Catalogos\Checkup\AgendarCostoController@getDestroy')->name('addcajacitasdelete');
    
  
    //Roll Doctores*************************************************************************************************************
    //Perfil
       Route::get('profiledoctores', ['as' => 'profile.edit', 'uses' => 'ProfileController@edit']);
       Route::put('profiledoctores', ['as' => 'profile.update', 'uses' => 'ProfileController@update']);
       Route::put('profiledoctores/password', ['as' => 'profile.password', 'uses' => 'ProfileController@password']);

    //Proceso Consulta
       Route::get('procesoconsultadoctores', 'Catalogos\Doctores\ProcesoConsultaDoctoresController@index');
       Route::get('procesoconsultadoctores/{id}', 'Catalogos\Admin\ProcesoConsultaController@getConsulta');
       Route::get('selectprocesoconsultadoctores/{id}', 'Catalogos\Admin\PerfilController@getAjaxlistaProcesoConsulta');
       Route::post('procesoconsultadoctores/add', 'Catalogos\Admin\ConsultaController@postAdd');
       Route::get('procesoconsultadoctores/download/{id}' , 'Catalogos\Admin\ProcesoConsultaController@downloadFile');
       Route::get('procesoconsultadoctores/downloadimg/{id}' , 'Catalogos\Admin\ProcesoConsultaController@downloadImg');

    //Consulta proceso consulta
       Route::get('consultaprocesoconsultadoctores', 'Catalogos\Admin\ProcesoConsultaController@consulta');   
    //Anexos proceso consulta  
       Route::get('anexoprocesoconsultadoctores', 'Catalogos\Admin\ProcesoConsultaController@anexo');   
    //Historial proceso consulta    
       Route::get('historialprocesoconsultadoctores', 'Catalogos\Admin\ProcesoConsultaController@historial');
       Route::get('historialprocesoconsultadoctores/{id}', 'Catalogos\Admin\ProcesoConsultaController@gethistorial')->name('historialclinico');
    //Receta proceso consulta
       Route::get('recetaprocesoconsultadoctores', 'Catalogos\Admin\ProcesoConsultaController@receta');
       Route::post('recetaprocesoconsultadoctores/add', 'Catalogos\Admin\RecetaImprimirController@postAdd');
       Route::post('recetaprocesoconsultadoctores/edit/{id}', 'Catalogos\Admin\RecetaImprimirController@postEdit');
    //Agendar citas proceso consulta
       Route::get('agendarcitaprocesoconsultadoctores', 'Catalogos\Admin\ProcesoConsultaController@agendar');
    //Estudios citas proceso consulta
       Route::get('estudiosprocesoconsultadoctores', 'Catalogos\Admin\ProcesoConsultaController@estudios');
    //agendar estudios
       Route::post('procesoaestudios/add','Catalogos\Admin\AgendarEstudiosController@postAdd');
    //agregar costos de la consulta
       Route::get('costosconsulta','Catalogos\Admin\ProcesoConsultaController@costosconsulta');//calendario
       Route::get('selectprocesoconsultadoctorescaja/{id}', 'Catalogos\Admin\PerfilController@getAjaxlistaProcesoConsultaCaja');//consulta
    //citas laboratorio
       Route::post('citaslaboratorio/add', 'Catalogos\Admin\CitasLaboratorioController@postAdd');
       Route::get('citaslaboratorio/destroy/{id}', 'Catalogos\Admin\CitasLaboratorioController@getDestroy'); 
       Route::get('selectcitaslaboratorios', 'Catalogos\Admin\PerfilController@getAjaxlistaCitaLaboratorio');//consulta
       Route::get('selectcitadeletelabo/{id}', 'Catalogos\Admin\PerfilController@getAjaxlistaCitaDeleteLabo');
   
       
    
    //Roll Checkup*************************************************************************************************************
       
       Route::get('procesoconsultascheckup/{id}', 'Catalogos\Checkup\ProcesoConsultaCheckupController@getConsulta');
       Route::get('procesoconsultascheckup18/{id}', 'Catalogos\Checkup\ProcesoConsultaCheckupController@getConsultaAnex18');
       Route::get('procesoconsultascheckup19/{id}', 'Catalogos\Checkup\ProcesoConsultaCheckupController@getConsultaAnex19');
       Route::get('procesoconsultascheckup20/{id}', 'Catalogos\Checkup\ProcesoConsultaCheckupController@getConsultaAnex20');
       Route::get('procesoconsultascheckup21/{id}', 'Catalogos\Checkup\ProcesoConsultaCheckupController@getConsultaAnex21');
       Route::get('procesoconsultascheckup22/{id}', 'Catalogos\Checkup\ProcesoConsultaCheckupController@getConsultaAnex22');
       //Historial proceso consulta    
       Route::get('historialprocesoconsultadoctorescheckup', 'Catalogos\Checkup\ProcesoConsultaCheckupController@historial');
       Route::get('historialprocesoconsultadoctorescheckup/{id}', 'Catalogos\Checkup\ProcesoConsultaCheckupController@gethistorial')->name('historialclinicocheck');
    //Receta proceso consulta
       Route::get('recetaprocesoconsultadoctorescheckup', 'Catalogos\Checkup\ProcesoConsultaCheckupController@receta');
       Route::post('recetaprocesoconsultadoctorescheckup/add', 'Catalogos\Checkup\RecetaImprimirController@postAdd');
       Route::post('recetaprocesoconsultadoctorescheckup/edit/{id}', 'Catalogos\Checkup\RecetaImprimirController@postEdit');
    //Agendar citas proceso consulta
       Route::get('agendarcitaprocesoconsultadoctorescheckup', 'Catalogos\Checkup\ProcesoConsultaCheckupController@agendar');
    //Estudios citas proceso consulta
       Route::get('estudiosprocesoconsultadoctorescheckup/{id}', 'Catalogos\Checkup\ProcesoConsultaCheckupController@estudios');
    //agendar estudios
       Route::post('procesoaestudioscheckup/add','Catalogos\Checkup\AgendarEstudiosController@postAdd');
    //agregar costos de la consulta
       Route::get('costosconsultacheckup','Catalogos\Checkup\ProcesoConsultaCheckupController@costosconsulta');//calendario
     
     
     Route::resource('citascheckup', 'Catalogos\Checkup\CitasCheckupController', ['except' => ['destroy', 'show']]); //llama al controlador
     Route::get('citascheckupjlist', 'Catalogos\Checkup\CitasCheckupController@getJlist'); //lista de la tabla
     Route::get('citascheckupjlistl/{id}', 'Catalogos\Checkup\CitasCheckupController@getJlistl'); //lista de la tabla
     Route::post('citascheckupjlistt', 'Catalogos\Checkup\CitasCheckupController@Jlistt'); //lista de la tabla
     Route::get('citascheckup/edit/{id}', 'Catalogos\Checkup\CitasCheckupController@getEdit');//metodo para mostrar en edit
     Route::post('citascheckup/edit/{id}', 'Catalogos\Checkup\CitasCheckupController@postEdit')->name('subircheck');//metodo para guardar en edit
     Route::post('citascheckupjfilter', 'Catalogos\Checkup\CitasCheckupController@postJFilter'); //filtro
     Route::get('citascheckup/destroy/{id}', 'Catalogos\Checkup\CitasCheckupController@getDestroy');
        
     Route::resource('citascheckupfinalizado', 'Catalogos\Checkup\CitasCheckupFinalizadoController', ['except' => ['destroy', 'show']]); //llama al controlador
     Route::get('citascheckupfinalizadojlist', 'Catalogos\Checkup\CitasCheckupFinalizadoController@getJlist'); //lista de la tabla
     Route::get('citascheckupfinalizadojlistl/{id}', 'Catalogos\Checkup\CitasCheckupFinalizadoController@getJlistl'); //lista de la tabla
     Route::post('citascheckupfinalizadojlistt', 'Catalogos\Checkup\CitasCheckupFinalizadoController@Jlistt'); //lista de la tabla
     Route::get('citascheckupfinalizado/edit/{id}', 'Catalogos\Checkup\CitasCheckupFinalizadoController@getEdit');//metodo para mostrar en edit
     Route::post('citascheckupfinalizado/edit/{id}', 'Catalogos\Checkup\CitasCheckupFinalizadoController@postEdit');//metodo para guardar en edit
     Route::post('citascheckupfinalizadojfilter', 'Catalogos\Checkup\CitasCheckupFinalizadoController@postJFilter'); //filtro
     Route::get('citascheckupfinalizado/destroy/{id}', 'Catalogos\Checkup\CitasCheckupFinalizadoController@getDestroy');
     
     Route::get('citascheckupdownload/{id}' , 'Catalogos\Checkup\CitasCheckupFinalizadoController@downloadcitascheckupFile1');
        
  
     //Roll Laboratorio*************************************************************************************************************
     
       Route::get('procesoconsultalaboratorio', 'Catalogos\Laboratorio\ProcesoConsultaLaboratorioController@index')->name('procesoconsultalaboratorio');
       Route::get('selectprocesoconsultalaboratorio/{id}', 'Catalogos\Admin\PerfilController@getAjaxlistaProcesoConsultaLaboratorio');
      //citas de laboratorio
       Route::get('consultarprocesoconsultalaboratorio', 'Catalogos\Laboratorio\ProcesoConsultaLaboratorioController@consulta');
       Route::get('consultarprocesoconsultalaboratorio24/{id}', 'Catalogos\Laboratorio\ProcesoConsultaLaboratorioController@getConsultaAnex24');
       Route::get('consultarprocesoconsultalaboratorio25/{id}', 'Catalogos\Laboratorio\ProcesoConsultaLaboratorioController@getConsultaAnex25');
       Route::get('consultarprocesoconsultalaboratorio26/{id}', 'Catalogos\Laboratorio\ProcesoConsultaLaboratorioController@getConsultaAnex26');
       Route::get('consultarprocesoconsultalaboratorio27/{id}', 'Catalogos\Laboratorio\ProcesoConsultaLaboratorioController@getConsultaAnex27');
       Route::get('consultarprocesoconsultalaboratorio28/{id}', 'Catalogos\Laboratorio\ProcesoConsultaLaboratorioController@getConsultaAnex28');
       Route::get('consultarprocesoconsultalaboratorio29/{id}', 'Catalogos\Laboratorio\ProcesoConsultaLaboratorioController@getConsultaAnex29');
       Route::get('selectconsultarprocesoconsultalaboratorio/{id}', 'Catalogos\Admin\PerfilController@getAjaxlistaConsultaLaboratorio');
       
      //
     Route::resource('laboratorio', 'Catalogos\Laboratorio\LaboratorioController', ['except' => ['destroy', 'show']]); //llama al controlador
     Route::get('laboratoriojlist', 'Catalogos\Laboratorio\LaboratorioController@getJlist'); //lista de la tabla
     Route::get('laboratoriojlistl/{id}', 'Catalogos\Laboratorio\LaboratorioController@getJlistl'); //lista de la tabla
     Route::post('laboratoriojlistt', 'Catalogos\Laboratorio\LaboratorioController@Jlistt'); //lista de la tabla
     Route::get('laboratorio/edit/{id}', 'Catalogos\Laboratorio\LaboratorioController@getEdit');//metodo para mostrar en edit
     Route::post('laboratorio/edit/{id}', 'Catalogos\Laboratorio\LaboratorioController@postEdit');//metodo para guardar en edit
     Route::post('laboratoriojfilter', 'Catalogos\Laboratorio\LaboratorioController@postJFilter'); //filtro
  
     Route::resource('laboratoriofinalizado', 'Catalogos\Laboratorio\LaboratorioFinalizadoController', ['except' => ['destroy', 'show']]); //llama al controlador
     Route::get('laboratoriofinalizadojlist', 'Catalogos\Laboratorio\LaboratorioFinalizadoController@getJlist'); //lista de la tabla
     Route::get('laboratoriofinalizadojlistl/{id}', 'Catalogos\Laboratorio\LaboratorioFinalizadoController@getJlistl'); //lista de la tabla
     Route::post('laboratoriofinalizadojlistt', 'Catalogos\Laboratorio\LaboratorioFinalizadoController@Jlistt'); //lista de la tabla
     Route::get('laboratoriofinalizado/edit/{id}', 'Catalogos\Laboratorio\LaboratorioFinalizadoController@getEdit');//metodo para mostrar en edit
     Route::post('laboratoriofinalizado/edit/{id}', 'Catalogos\Laboratorio\LaboratorioFinalizadoController@postEdit');//metodo para guardar en edit
     Route::post('laboratoriofinalizadojfilter', 'Catalogos\Laboratorio\LaboratorioFinalizadoController@postJFilter'); //filtro
  
       
       //Add Estudios Archivos
       //Estudios citas proceso consulta
        Route::get('addestudios/{id}', 'Catalogos\Laboratorio\ProcesoConsultaLaboratorioController@estudios', ['except' => ['destroy', 'show']])->name('addestget'); //llama al controlador
        Route::post('addestudios/edit/{id}', 'Catalogos\Laboratorio\ProcesoConsultaLaboratorioController@postEdit')->name('addlaboratorioedit');//metodo para guardar en edit
        Route::post('addestudios/add/{id}', 'Catalogos\Laboratorio\ProcesoConsultaLaboratorioController@postAdd')->name('addlaboratorio');//metodo para guardar en add
        Route::get('addestudios/destroy/{id}', 'Catalogos\Laboratorio\ProcesoConsultaLaboratorioController@getDestroy')->name('addlaboratoriodelete');
        Route::get('addestudios/download/{id}' , 'Catalogos\Laboratorio\ProcesoConsultaLaboratorioController@downloadFile1');
        Route::get('addestudios/download2/{id}' , 'Catalogos\Laboratorio\ProcesoConsultaLaboratorioController@downloadFile2');
        Route::get('addestudios/download3/{id}' , 'Catalogos\Laboratorio\ProcesoConsultaLaboratorioController@downloadFile3');
       //agregar costos de la consulta
        Route::get('costosconsultalaboratorio','Catalogos\Laboratorio\ProcesoConsultaLaboratorioController@costosconsulta');//calendario
        Route::get('selectcostosconsultalaboratorio/{id}', 'Catalogos\Admin\PerfilController@getAjaxlistaProcesoConsultaCajaLaboratorio');//consulta
        Route::post('agendarcajalabojlistt', 'Catalogos\Checkup\AgendarCostoController@Jlistt'); //filtro
        Route::get('selectanexo13lab', 'Catalogos\Admin\PerfilController@getAjaxlistaPreciosGeneralesLab');
   
      //Rol Imagenologia*************************************************************************************************************
     
     Route::resource('imagenologia', 'Catalogos\Imagenologia\ImagenologiaController', ['except' => ['destroy', 'show']]); //llama al controlador
     Route::get('imagenologiajlist', 'Catalogos\Imagenologia\ImagenologiaController@getJlist'); //lista de la tabla
     Route::get('imagenologiajlistl/{id}', 'Catalogos\Laboratorio\LaboratorioController@getJlistl'); //lista de la tabla
     Route::post('imagenologiajlistt', 'Catalogos\Imagenologia\ImagenologiaController@Jlistt'); //lista de la tabla
     Route::get('imagenologia/edit/{id}', 'Catalogos\Imagenologia\ImagenologiaController@getEdit');//metodo para mostrar en edit
     Route::post('imagenologia/edit/{id}', 'Catalogos\Imagenologia\ImagenologiaController@postEdit');//metodo para guardar en edit
     Route::post('imagenologiajfilter', 'Catalogos\Imagenologia\ImagenologiaController@postJFilter'); //filtro
  
     Route::resource('imagenologiafinalizado', 'Catalogos\Imagenologia\ImagenologiaFinalizadoController', ['except' => ['destroy', 'show']]); //llama al controlador
     Route::get('imagenologiafinalizadojlist', 'Catalogos\Imagenologia\ImagenologiaFinalizadoController@getJlist'); //lista de la tabla
     Route::get('imagenologiafinalizadojlistl/{id}', 'Catalogos\Laboratorio\LaboratorioFinalizadoController@getJlistl'); //lista de la tabla
     Route::post('imagenologiafinalizadojlistt', 'Catalogos\Imagenologia\ImagenologiaFinalizadoController@Jlistt'); //lista de la tabla
     Route::get('imagenologiafinalizado/edit/{id}', 'Catalogos\Imagenologia\ImagenologiaFinalizadoController@getEdit');//metodo para mostrar en edit
     Route::post('imagenologiafinalizado/edit/{id}', 'Catalogos\Imagenologia\ImagenologiaFinalizadoController@postEdit');//metodo para guardar en edit
     Route::post('imagenologiafinalizadojfilter', 'Catalogos\Imagenologia\ImagenologiaFinalizadoController@postJFilter'); //filtro
  
       Route::get('procesoconsultaimagenologia', 'Catalogos\Imagenologia\ProcesoConsultaImagenologiaController@index')->name('procesoconsultaimagen');
       Route::get('selectprocesoconsultaimagenologia/{id}', 'Catalogos\Admin\PerfilController@getAjaxlistaProcesoConsultaImagen');
      //citas de imagenologia
       Route::get('consultarprocesoconsultaimagenologia34/{id}', 'Catalogos\Imagenologia\ProcesoConsultaImagenologiaController@getConsultaAnex34');
       Route::get('consultarprocesoconsultaimagenologia35/{id}', 'Catalogos\Imagenologia\ProcesoConsultaImagenologiaController@getConsultaAnex35');
       Route::get('selectconsultarprocesoconsultaimagenologia/{id}', 'Catalogos\Admin\PerfilController@getAjaxlistaConsultaLaboratorio');
       
        Route::post('citasimagen/add', 'Catalogos\Admin\CitasImagenologiaController@postAdd');
        Route::get('citasimagen/destroy/{id}', 'Catalogos\Admin\CitasImagenologiaController@getDestroy'); 
        Route::get('selectcitasimagen', 'Catalogos\Admin\PerfilController@getAjaxlistaCitaImagenologia');//consulta
        Route::get('selectcitadeleteimagen/{id}', 'Catalogos\Admin\PerfilController@getAjaxlistaCitaDeleteImagen');
    
     //Add Estudios Archivos
       //Estudios citas proceso consulta imagenologia
        Route::get('addestudiosimagenologia/{id}', 'Catalogos\Imagenologia\ProcesoConsultaImagenologiaController@estudios', ['except' => ['destroy', 'show']])->name('addestimagenget'); //llama al controlador
        Route::post('addestudiosimagenologia/edit/{id}', 'Catalogos\Imagenologia\ProcesoConsultaImagenologiaController@postEdit')->name('addimagenologiaedit');//metodo para guardar en edit
        Route::post('addestudiosimagenologia/add/{id}', 'Catalogos\Imagenologia\ProcesoConsultaImagenologiaController@postAdd')->name('addimagenologiaadd');//metodo para guardar en add
        Route::get('addestudiosimagenologia/destroy/{id}', 'Catalogos\Imagenologia\ProcesoConsultaImagenologiaController@getDestroy')->name('addimagenologiadelete');
        Route::get('addestudiosimagenologia/download/{id}' , 'Catalogos\Imagenologia\ProcesoConsultaImagenologiaController@downloadFile1');
        Route::get('addestudiosimagenologia/download2/{id}' , 'Catalogos\Imagenologia\ProcesoConsultaImagenologiaController@downloadFile2');
        Route::get('addestudiosimagenologia/download3/{id}' , 'Catalogos\Imagenologia\ProcesoConsultaImagenologiaController@downloadFile3');
       //agregar costos de la consulta imagenologia
        Route::get('costosconsultaimagenologia','Catalogos\Imagenologia\ProcesoConsultaImagenologiaController@costosconsulta');//calendario
        Route::get('selectcostosconsultaimagenologia/{id}', 'Catalogos\Admin\PerfilController@getAjaxlistaProcesoConsultaCajaImagenologia');//consulta
        Route::post('agendarcajaimagenjlistt', 'Catalogos\Checkup\AgendarCostoImagenController@Jlistt'); //filtro
        
      //ENFERMERA **********************************************************************************************************************************+
      
       //Recetas
     Route::resource('recetascitas', 'Catalogos\Enfermera\RecetaController', ['except' => ['destroy', 'show']]); 
     Route::get('recetascitasjlist', 'Catalogos\Enfermera\RecetaController@getJlist'); 
     Route::get('recetascitas/edit/{id}', 'Catalogos\Enfermera\RecetaController@getEdit');
     Route::post('recetascitas/edit/{id}', 'Catalogos\Enfermera\RecetaController@postEdit');
     Route::get('recetascitas/add', 'Catalogos\Enfermera\RecetaController@getAdd');
     Route::post('recetascitas/add', 'Catalogos\Enfermera\RecetaController@postAdd');
     Route::get('recetas/destroy/{id}', 'Catalogos\Enfermera\RecetaController@getDestroy'); 
     
     //ASISTENTE************************************************************************************************************************************
     
    
    
    Route::get('downloadcarta/{id}', 'Catalogos\Admin\RoleController@downloadcarta');
    Route::get('downloadimprimirreceta/{id}', 'Catalogos\Admin\RoleController@downloadimprimirreceta');
    Route::get('downloadimprimirestudios/{id}', 'Catalogos\Admin\RoleController@downloadimprimirestudios');
    Route::get('downloadimprimirnota/{id}', 'Catalogos\Admin\RoleController@downloadimprimirnota');
    
     
      
  });




//--------------------------------------------------------------------------------------------



