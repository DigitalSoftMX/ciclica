<?php namespace App\Core\Util;


use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Kris\LaravelFormBuilder\FormBuilder;
use Illuminate\Routing\Redirector;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;
use Maatwebsite\Excel\Facades\Excel;
use Mail;
use App\Models\Catalogos\Role_User;
use App\Models\Catalogos\Role;
use App\Models\Catalogos\CatCitas;
use App\Models\Catalogos\Country;
use App\Models\Catalogos\EdoCivil;
use App\Models\Catalogos\Especialidad;
use App\Models\Catalogos\EspecialidadUser;
use App\Models\Catalogos\FacturasUsuarios;
use App\Models\Catalogos\Genero;
use App\Models\Catalogos\Pacientes;
use App\Models\Catalogos\Caja;
use App\Models\Catalogos\CajaCitas;
use App\Models\Catalogos\Anotaciones;
use App\Models\Catalogos\Citas;
use App\Models\Catalogos\Estudio;
use App\Models\Catalogos\AgendarEstudio;
use App\Models\Catalogos\Recetas;
use App\Models\Catalogos\AnexosCitasCheckup;
use App\Models\Catalogos\AnexosCheckup;
use App\Models\Catalogos\Anexos1722;
use App\Models\Catalogos\Anexos\Anexo1;
use App\Models\Catalogos\Anexos\Anexo2;
use App\Models\Catalogos\Anexos\Anexo3;
use App\Models\Catalogos\Anexos\Anexo4;
use App\Models\Catalogos\Anexos\Anexo5;
use App\Models\Catalogos\Anexos\Anexo6;
use App\Models\Catalogos\Anexos\Anexo8;
use App\Models\Catalogos\Anexos\Anexo9;
use App\Models\Catalogos\Anexos\Anexo10;
use App\Models\Catalogos\Anexos\Anexo13;
use App\Models\Catalogos\Anexos\Anexo13Farmacia;
use App\Models\Catalogos\Anexos\Anexo13Laboratorio;
use App\Models\Catalogos\Anexos\Anexo15;
use App\Models\Catalogos\Anexos\Anexo16;
use App\Models\Catalogos\Anexos\Anexo17;
use App\Models\Catalogos\Anexos\Anexo18;
use App\Models\Catalogos\Anexos\Anexo19;
use App\Models\Catalogos\Anexos\Anexo20;
use App\Models\Catalogos\Anexos\Anexo21;
use App\Models\Catalogos\Anexos\Anexo22;
use App\Models\Catalogos\Anexos\Anexo24;
use App\Models\Catalogos\Anexos\Anexo25;
use App\Models\Catalogos\Anexos\Anexo26;
use App\Models\Catalogos\Anexos\Anexo27;
use App\Models\Catalogos\Anexos\Anexo28;
use App\Models\Catalogos\Anexos\Anexo29;
use App\Models\Catalogos\Anexos\Anexo30;
use App\Models\Catalogos\Anexos\Anexo34;
use App\Models\Catalogos\Anexos\Anexo35;
use App\Models\Catalogos\Anexos\Anexo39;
use App\Models\Catalogos\Anexos\Anexo40;

use App\Models\Catalogos\CitasLaboratorios;
use App\Models\Catalogos\CitasImagenologia;
use App\Models\Catalogos\Permission;
use App\Models\Catalogos\Permission_Role;
use App\Models\Event;
use App\Models\Calendario;
use PDF;

trait CatalogTrait {

    public $list_form = null;
    public $form = null;
    public $tpl_prefix = 'Catalogos.default.';
    public $tpl_list_data = null;
    public $url_prefix = null;
    public $model = null;
    public $field_list = ['id'=>'id'];
    public $form_id = null;
	  public $name = null;
	  public $name_plural = null;
	  protected $validators = ['add'=>[],'edit'=>[],'ver'=>[]];

    public function getName()
	{
		if (!$this->name){
			return str_ireplace('controller','',join('', array_slice(explode('\\', get_class($this)), -1)));
			//return get_class($this);
		}
		return $this->name;
	}
	
	public function getNamePlural()
	{
		return $this->name_plural;
	}
	
	public function getUrlPrefix()
	{
		return $this->url_prefix;
	}
	
	public function setValidatorAdd($validation_array){
		$this->validators['add'] = $validation_array;
	}
	
	public function setValidatorVer($validation_array){
    $this->validators['ver'] = $validation_array;
  }
  
  public function setValidatorEdit($validation_array){
		$this->validators['edit'] = $validation_array;
	}

	public function getValidatorAdd(){
		return $this->validators['add'];
	}
	
	public function getValidatorVer(){
    return $this->validators['ver'];
  }
  
  public function getValidatorEdit(){
		return $this->validators['edit'];
	}

	protected function getModelInstance(){
		return new $this->model();
	}

    // MÉTODOS PARA LISTAR INSERTAR, MODIFICAR Y ELIMINAR    
	public function Index()
	{
        $id = \Auth::user()->id;
        $url = $this->getUrlPrefix();
       
        $ins = ("*$url-ins");
        $mod = ("*$url-mod");
        $eli = ("*$url-eli");
        $ver = ("*$url-ver");


        $valmod = \Entrust::can($mod);
        $valeli = \Entrust::can($eli); 
        $valver = \Entrust::can($ver); 
   
         $names = $this->name;
            if($names == "AgendarEstudios"){
                 $ids = \Auth::user()->id;
                 $role = Role_User::where('user_id', '=', $ids)->value('role_id'); 
                 if($role == 3){
                    //$show = "Estudios";
                    $show = "";
                  return view($this->tpl_prefix.'list3usuarios',array('catalog'=>$this))->with('ins', $ins)->with('mod', $mod)->with('eli', $eli)->with('show', $show)->with('ver', $ver);
                 }
                 else{
                     $show = "";
                 }
                 return view($this->tpl_prefix.'list3',array('catalog'=>$this))->with('ins', $ins)->with('mod', $mod)->with('eli', $eli)->with('show', $show)->with('ver', $ver);
             }
            if($names == "AgendarEstudiosCheckup"){
                $show = "";
                 return view($this->tpl_prefix.'list4',array('catalog'=>$this))->with('ins', $ins)->with('mod', $mod)->with('eli', $eli)->with('show', $show)->with('ver', $ver);
             }
            else if($names == "Laboratorio" || $names == "Laboratorio Finalizado"){
                  $ids = \Auth::user()->id;
                 $role = Role_User::where('user_id', '=', $ids)->value('role_id'); 
                 if($role == 3 || $role == 7){
                $show = "Usuario";
                return view($this->tpl_prefix . 'listfilteruser', array('catalog' => $this))->with('ins', $ins)->with('mod', $mod)->with('eli', $eli)->with('show', $show)->with('ver', $ver);
                 }
                 else{
                $show = "";
                return view($this->tpl_prefix . 'listfilter', array('catalog' => $this))->with('ins', $ins)->with('mod', $mod)->with('eli', $eli)->with('show', $show)->with('ver', $ver);
                 }
            }
            else if($names == "Imagenologia" || $names == "Imagenologia Finalizado"){
                  $ids = \Auth::user()->id;
                 $role = Role_User::where('user_id', '=', $ids)->value('role_id'); 
                 if($role == 3 || $role == 7){
                $show = "Usuario";
                return view($this->tpl_prefix . 'listfilterimagenuser', array('catalog' => $this))->with('ins', $ins)->with('mod', $mod)->with('eli', $eli)->with('show', $show)->with('ver', $ver);
                 }
                 else{
                $show = "";
                return view($this->tpl_prefix . 'listfilterimagen', array('catalog' => $this))->with('ins', $ins)->with('mod', $mod)->with('eli', $eli)->with('show', $show)->with('ver', $ver);
                 }
            }
            else if($names == "Citas Checkup" || $names == "Citas Checkup Finalizado"){
                  $ids = \Auth::user()->id;
                 $role = Role_User::where('user_id', '=', $ids)->value('role_id'); 
                 if($role == 5 || $role == 1){
                $show = "";
                return view($this->tpl_prefix . 'listfiltercheck', array('catalog' => $this))->with('ins', $ins)->with('mod', $mod)->with('eli', $eli)->with('show', $show)->with('ver', $ver);
                 }
                 else{
                $show = "";
                return view($this->tpl_prefix . 'listfiltercheckup', array('catalog' => $this))->with('ins', $ins)->with('mod', $mod)->with('eli', $eli)->with('show', $show)->with('ver', $ver);
                 }
            }
            else if($names == "Pacientes"){
                  $ids = \Auth::user()->id;
                 $role = Role_User::where('user_id', '=', $ids)->value('role_id'); 
                 if($role == 3){
                 $show = "";
                   //return view($this->tpl_prefix.'listpacientes',array('catalog'=>$this))->with('ins', $ins)->with('mod', $mod)->with('eli', $eli)->with('show', $show)->with('ver', $ver);
                   return view($this->tpl_prefix.'list',array('catalog'=>$this))->with('ins', $ins)->with('mod', $mod)->with('eli', $eli)->with('show', $show)->with('ver', $ver);
                }
                else if($role == 5){
                 $show = "";
                   return view($this->tpl_prefix.'listpacientes',array('catalog'=>$this))->with('ins', $ins)->with('mod', $mod)->with('eli', $eli)->with('show', $show)->with('ver', $ver);
                   //return view($this->tpl_prefix.'list',array('catalog'=>$this))->with('ins', $ins)->with('mod', $mod)->with('eli', $eli)->with('show', $show)->with('ver', $ver);
                }
                if($role == 7){
                 $show = "Historial";
                   return view($this->tpl_prefix.'list',array('catalog'=>$this))->with('ins', $ins)->with('mod', $mod)->with('eli', $eli)->with('show', $show)->with('ver', $ver);
                }
                 else{
                $show = "";
                  return view($this->tpl_prefix.'list',array('catalog'=>$this))->with('ins', $ins)->with('mod', $mod)->with('eli', $eli)->with('show', $show)->with('ver', $ver);
                }
            }
            else if($names == "Cobrar"){
                 $show = "Ver";
                   return view($this->tpl_prefix.'listcobrar',array('catalog'=>$this))->with('ins', $ins)->with('mod', $mod)->with('eli', $eli)->with('show', $show)->with('ver', $ver);
            }
            else if($names == "Caja"){
                 $show = "caja";
                   return view($this->tpl_prefix.'list2',array('catalog'=>$this))->with('ins', $ins)->with('mod', $mod)->with('eli', $eli)->with('show', $show)->with('ver', $ver);
            }
            else if($valmod == false && $valeli == false){
                $show = "show";
                 return view($this->tpl_prefix.'list2',array('catalog'=>$this))->with('ins', $ins)->with('mod', $mod)->with('eli', $eli)->with('show', $show)->with('ver', $ver);
             }
              else{  
                 $show = ""; 
                 return view($this->tpl_prefix.'list',array('catalog'=>$this))->with('ins', $ins)->with('mod', $mod)->with('eli', $eli)->with('show', $show)->with('ver', $ver);
             }

    }
	//--------------------------------------------------------------------------------------------------------------------
	public function getJlist()
	{
		$model = $this->getModelInstance();
        $name = $this->name_plural;
        $names = $this->name;

         if($names == "Perfil"){
            $id = \Auth::user()->id;
            $data = User::where('id', '=', $id)->get();
            return response()->json(['draw'=>"1",'data' => $data,'recordsTotal'=>$data->count()] );
        }
        else if($names == "Pacientes"){
               $ids = \Auth::user()->id;
                 $role = Role_User::where('user_id', '=', $ids)->value('role_id'); 
                 if($role == 3){
                      $data = User::join('role_user', 'users.id', '=', 'role_user.user_id')
                      ->where('role_user.role_id', '=', 3)
                      ->where('users.id', '=', $ids)
                      ->get();
                 }
                 else{
                     $data = User::join('role_user', 'users.id', '=', 'role_user.user_id')
                      ->where('role_user.role_id', '=', 3)
                      ->get();
                 }
                      
            return response()->json(['draw'=>"1",'data' => $data,'recordsTotal'=>$data->count()] );

        }
        elseif($names == "Usuarios"){
              $data = User::select('users.id','users.name','users.app_name','users.apm_name','users.email','users.phone', 'users.username')
                      ->join('role_user', 'users.id', '=', 'role_user.user_id')
                      ->where('role_user.role_id', '>=', 4)
                      ->get();
        return response()->json(['draw'=>"1",'data' => $data,'recordsTotal'=>$data->count()] );
        }
        elseif($names == "Caja"){
              $data = Caja::select('caja.id','caja.id as ids','caja.cantidad','caja.iva','caja.total','caja.forma_pago','caja.tc_td','users.username','users.name', 'caja.deuda', 'caja.cant_deuda', 'caja.factura', 'caja.created_at')
                      ->join('users', 'caja.id_paciente', '=', 'users.id')
                      ->get();
        return response()->json(['draw'=>"1",'data' => $data,'recordsTotal'=>$data->count()] );
        }
        elseif($names == "Deudas"){
              $data = Anexo16::select('anexo16.id','anexo16.cantidad','anexo16.iva','anexo16.total','anexo16.fech_pago','anexo16.forma_pago', 'anexo16.tc_td', 'users.username','users.name', 'anexo16.deuda', 'anexo16.cant_deuda', 'anexo16.factura', 'anexo16.created_at')
                      ->join('users', 'anexo16.id_paciente', '=', 'users.id')
                      ->get();
                     // dd($data);
        return response()->json(['draw'=>"1",'data' => $data,'recordsTotal'=>$data->count()] );
        }
        elseif($names == "Facturacion"){
              $data = Anexo15::select('anexo15.id','anexo15.razon_social','anexo15.rfc','anexo15.email','anexo15.telefono','anexo15.cdfi', 'users.name','anexo15.created_at')
                      ->join('users', 'anexo15.id_paciente', '=', 'users.id')
                      ->get();
        return response()->json(['draw'=>"1",'data' => $data,'recordsTotal'=>$data->count()] );
        }
        elseif($names == "Citas de Laboratorios"){
              $data = CitasLaboratorios::select('citas_laboratorios.id_cita_laboratorio','citas_laboratorios.fecha','citas_laboratorios.horario', 'citas_laboratorios.nota', 'users.username as usuario', 'users.name as doctor', 'especialidad.name as espe')
                      ->join('users', 'citas_laboratorios.id_paciente', '=', 'users.id')
                      ->join('especialidad', 'citas_laboratorios.id_especialidad', '=', 'especialidad.id')
                      ->get();

        return response()->json(['draw'=>"1",'data' => $data,'recordsTotal'=>$data->count()] );
        }
        elseif($names == "Citas de Imagenologia"){
              $data = CitasImagenologia::select('citas_imagenologia.id','citas_imagenologia.fecha','citas_imagenologia.horario', 'citas_imagenologia.nota', 'users.username as usuario', 'users.name as doctor', 'especialidad.name as espe')
                      ->join('users', 'citas_imagenologia.id_paciente', '=', 'users.id')
                      ->join('especialidad', 'citas_imagenologia.id_especialidad', '=', 'especialidad.id')
                      ->get();

        return response()->json(['draw'=>"1",'data' => $data,'recordsTotal'=>$data->count()] );
        }
        elseif($names == "Anotaciones"){
              $data = Anotaciones::select('anotaciones.id','anotaciones.nombre')
                      ->get();
        return response()->json(['draw'=>"1",'data' => $data,'recordsTotal'=>$data->count()] );
        }
        elseif($names == "AgendarEstudios"){
         $ids = \Auth::user()->id;
         $role = Role_User::where('user_id', '=', $ids)->value('role_id'); 
         if($role == 1 || $role == 9){
              $data = AgendarEstudio::select('agendarestudio.id','agendarestudio.id as ids','agendarestudio.descripcion',\DB::raw('CONCAT(paciente.name, " ", paciente.app_name, " ", paciente.apm_name) as paciente'), 'doctor.name as doctor', 'agendarestudio.created_at as fecha')
                      ->join('users as paciente', 'agendarestudio.id_paciente', '=', 'paciente.id')
                      ->join('users as doctor', 'agendarestudio.id_doctor', '=', 'doctor.id')
                      ->where("agendarestudio.estado", "=", 1)
                      ->get();
         }
        elseif($role == 3){
            $data = AgendarEstudio::select('agendarestudio.id','agendarestudio.id as ids', 'agendarestudio.descripcion',\DB::raw('CONCAT(paciente.name, " ", paciente.app_name, " ", paciente.apm_name) as paciente'), 'doctor.name as doctor', 'agendarestudio.created_at as fecha')
                      ->join('users as paciente', 'agendarestudio.id_paciente', '=', 'paciente.id')
                      ->join('users as doctor', 'agendarestudio.id_doctor', '=', 'doctor.id')
                      ->where("agendarestudio.id_paciente", "=", $ids)
                      ->get();
        }

        return response()->json(['draw'=>"1",'data' => $data,'recordsTotal'=>$data->count()] );
        }
        elseif($names == "Consulta"){
              $data = Citas::select('citas_imagenologia.id','citas_imagenologia.fecha','citas_imagenologia.horario', 'citas_imagenologia.nota', 'users.username as usuario', 'users.name as doctor', 'especialidad.name as espe')
                      ->join('users', 'citas_imagenologia.id_paciente', '=', 'users.id')
                      ->join('especialidad', 'citas_imagenologia.id_especialidad', '=', 'especialidad.id')
                      ->get();

        return response()->json(['draw'=>"1",'data' => $data,'recordsTotal'=>$data->count()] );
        }
        elseif($names == "Recetas"){
          $ids = \Auth::user()->id;
          $role = Role_User::where('user_id', '=', $ids)->value('role_id'); 
            if($role == 3){
              $data = Recetas::select('receta_medica.id', 'receta_medica.id as ids', 'receta_medica.fechap','receta_medica.fechac', 'receta_medica.descripcionp', 'users.name as doctor', 'receta_medica.edad', 'receta_medica.talla', 'receta_medica.peso', 'receta_medica.temp', 'receta_medica.ta', 'receta_medica.fc', 'receta_medica.fr', 'receta_medica.expo_me', 'receta_medica.indica')
                      ->join('users', 'receta_medica.id_doctor', '=', 'users.id')
                      ->get();
              }
              else if($role == 7){
              $data = Recetas::select('receta_medica.id','receta_medica.id as ids', 'receta_medica.fechap','receta_medica.fechac', 'receta_medica.descripcionp', 'users.name as doctor', 'receta_medica.edad', 'receta_medica.talla', 'receta_medica.peso', 'receta_medica.temp', 'receta_medica.ta', 'receta_medica.fc', 'receta_medica.fr', 'receta_medica.expo_me', 'receta_medica.indica')
                      ->join('users', 'receta_medica.id_doctor', '=', 'users.id')
                      ->get();
              }
        return response()->json(['draw'=>"1",'data' => $data,'recordsTotal'=>$data->count()] );
        }
        elseif($names == "Signos Vitales"){
          $ids = \Auth::user()->id;
          $role = Role_User::where('user_id', '=', $ids)->value('role_id'); 
            if($role == 7){
              $data = Citas::select('citas.id','citas.cron_inicia', 'citas.nota', 'usuario.name as usuario', 'doctor.name as doctor', 'especialidad.name as espe','receta_medica.talla')
                      ->join('users as usuario', 'citas.id_paciente', '=', 'usuario.id')
                      ->join('users as doctor', 'citas.id_doctor', '=', 'doctor.id')
                      ->join('especialidad', 'citas.id_especialidad', '=', 'especialidad.id')
                      ->leftjoin('receta_medica', 'citas.id', '=', 'receta_medica.id_cita')
                      ->where('cron_inicia', '!=', null)
                      ->where('cron_doctor', '=', null)
                      ->where('receta_medica.talla', '=', null)
                      ->get();
                      //dd($data);
              }
        return response()->json(['draw'=>"1",'data' => $data,'recordsTotal'=>$data->count()] );
        }
        elseif($names == "Precio Generales"){
          $ids = \Auth::user()->id;
          $role = Role_User::where('user_id', '=', $ids)->value('role_id'); 
            if($role == 6 || $role == 9){
      
              $data = Anexo13::select('anexo13.id','anexo13.clave','anexo13.descripcion', 'anexo13.precio', 'anexo13.id_cat_anexo13', 'cat_anexo13.nombre as name','anexo13.created_at')
                      ->join('cat_anexo13', 'anexo13.id_cat_anexo13', '=', 'cat_anexo13.id')
                      ->get();
              }
        return response()->json(['draw'=>"1",'data' => $data,'recordsTotal'=>$data->count()] );
        }
        elseif($names == "Laboratorio"){
             $ids = \Auth::user()->id;
                 $role = Role_User::where('user_id', '=', $ids)->value('role_id'); 
                 if($role == 3){
                       $data = CitasLaboratorios::select('citas_laboratorios.id','citas_laboratorios.start','citas_laboratorios.estado', 'citas_laboratorios.nota', \DB::raw('CONCAT(paciente.name, " ", paciente.app_name, " ", paciente.apm_name) as paciente'), 'doctor.name as doctor', 'especialidad.name as especialidad')
                      ->join('especialidad', 'citas_laboratorios.id_especialidad', '=', 'especialidad.id')
                      ->join('users as paciente', 'citas_laboratorios.id_paciente', '=', 'paciente.id')
                      ->join('users as doctor', 'citas_laboratorios.id_doctor', '=', 'doctor.id')
                      ->where('citas_laboratorios.estado', '=', 1)
                      ->where('citas_laboratorios.id_paciente', '=', $ids)
                      ->get();
                 }
                 else{
                     $data = CitasLaboratorios::select('citas_laboratorios.id','citas_laboratorios.start','citas_laboratorios.estado', 'citas_laboratorios.nota', \DB::raw('CONCAT(paciente.name, " ", paciente.app_name, " ", paciente.apm_name) as paciente'), 'doctor.name as doctor', 'especialidad.name as especialidad')
                      ->join('especialidad', 'citas_laboratorios.id_especialidad', '=', 'especialidad.id')
                      ->join('users as paciente', 'citas_laboratorios.id_paciente', '=', 'paciente.id')
                      ->join('users as doctor', 'citas_laboratorios.id_doctor', '=', 'doctor.id')
                      ->where('citas_laboratorios.estado', '=', 1)
                      ->get();
                 }

        return response()->json(['draw'=>"1",'data' => $data,'recordsTotal'=>$data->count()] );
        }
        elseif($names == "Laboratorio Finalizado"){
            $ids = \Auth::user()->id;
                 $role = Role_User::where('user_id', '=', $ids)->value('role_id'); 
                 if($role == 3){
                      $data = CitasLaboratorios::select('citas_laboratorios.id','citas_laboratorios.start','citas_laboratorios.estado', 'citas_laboratorios.nota', \DB::raw('CONCAT(paciente.name, " ", paciente.app_name, " ", paciente.apm_name) as paciente'), 'doctor.name as doctor', 'especialidad.name as especialidad')
                      ->join('especialidad', 'citas_laboratorios.id_especialidad', '=', 'especialidad.id')
                      ->join('users as paciente', 'citas_laboratorios.id_paciente', '=', 'paciente.id')
                      ->join('users as doctor', 'citas_laboratorios.id_doctor', '=', 'doctor.id')
                      ->where('citas_laboratorios.estado', '=', 2)
                      ->where('citas_laboratorios.id_paciente', '=', $ids)
                      ->get();
                 }
                 else{
                      $data = CitasLaboratorios::select('citas_laboratorios.id','citas_laboratorios.start','citas_laboratorios.estado', 'citas_laboratorios.nota', \DB::raw('CONCAT(paciente.name, " ", paciente.app_name, " ", paciente.apm_name) as paciente'), 'doctor.name as doctor', 'especialidad.name as especialidad')
                      ->join('especialidad', 'citas_laboratorios.id_especialidad', '=', 'especialidad.id')
                      ->join('users as paciente', 'citas_laboratorios.id_paciente', '=', 'paciente.id')
                      ->join('users as doctor', 'citas_laboratorios.id_doctor', '=', 'doctor.id')
                      ->where('citas_laboratorios.estado', '=', 2)
                      ->get();
                 }

        return response()->json(['draw'=>"1",'data' => $data,'recordsTotal'=>$data->count()] );
        }
        elseif($names == "Imagenologia"){
               $ids = \Auth::user()->id;
                 $role = Role_User::where('user_id', '=', $ids)->value('role_id'); 
                 if($role == 3){
                      $data = CitasImagenologia::select('citas_imagenologia.id','citas_imagenologia.start','citas_imagenologia.estado', 'citas_imagenologia.nota', \DB::raw('CONCAT(paciente.name, " ", paciente.app_name, " ", paciente.apm_name) as paciente'), 'doctor.name as doctor', 'especialidad.name as especialidad')
                      ->join('especialidad', 'citas_imagenologia.id_especialidad', '=', 'especialidad.id')
                      ->join('users as paciente', 'citas_imagenologia.id_paciente', '=', 'paciente.id')
                      ->join('users as doctor', 'citas_imagenologia.id_doctor', '=', 'doctor.id')
                      ->where('citas_imagenologia.estado', '=', 1)
                      ->where('citas_imagenologia.id_paciente', '=', $ids)
                      ->get();
                 }
                 else{
                     $data = CitasImagenologia::select('citas_imagenologia.id','citas_imagenologia.start','citas_imagenologia.estado', 'citas_imagenologia.nota', \DB::raw('CONCAT(paciente.name, " ", paciente.app_name, " ", paciente.apm_name) as paciente'), 'doctor.name as doctor', 'especialidad.name as especialidad')
                      ->join('especialidad', 'citas_imagenologia.id_especialidad', '=', 'especialidad.id')
                      ->join('users as paciente', 'citas_imagenologia.id_paciente', '=', 'paciente.id')
                      ->join('users as doctor', 'citas_imagenologia.id_doctor', '=', 'doctor.id')
                      ->where('citas_imagenologia.estado', '=', 1)
                      ->get();
                 }

        return response()->json(['draw'=>"1",'data' => $data,'recordsTotal'=>$data->count()] );
        }
        elseif($names == "Imagenologia Finalizado"){
             $ids = \Auth::user()->id;
                 $role = Role_User::where('user_id', '=', $ids)->value('role_id'); 
                 if($role == 3){
                      $data = CitasImagenologia::select('citas_imagenologia.id','citas_imagenologia.start','citas_imagenologia.estado', 'citas_imagenologia.nota', \DB::raw('CONCAT(paciente.name, " ", paciente.app_name, " ", paciente.apm_name) as paciente'), 'doctor.name as doctor', 'especialidad.name as especialidad')
                      ->join('especialidad', 'citas_imagenologia.id_especialidad', '=', 'especialidad.id')
                      ->join('users as paciente', 'citas_imagenologia.id_paciente', '=', 'paciente.id')
                      ->join('users as doctor', 'citas_imagenologia.id_doctor', '=', 'doctor.id')
                      ->where('citas_imagenologia.estado', '=', 2)
                      ->where('citas_imagenologia.id_paciente', '=', $ids)
                      ->get();
                 }
                 else{
                     $data = CitasImagenologia::select('citas_imagenologia.id','citas_imagenologia.start','citas_imagenologia.estado', 'citas_imagenologia.nota', \DB::raw('CONCAT(paciente.name, " ", paciente.app_name, " ", paciente.apm_name) as paciente'), 'doctor.name as doctor', 'especialidad.name as especialidad')
                      ->join('especialidad', 'citas_imagenologia.id_especialidad', '=', 'especialidad.id')
                      ->join('users as paciente', 'citas_imagenologia.id_paciente', '=', 'paciente.id')
                      ->join('users as doctor', 'citas_imagenologia.id_doctor', '=', 'doctor.id')
                      ->where('citas_imagenologia.estado', '=', 2)
                      ->get();
                 }

        return response()->json(['draw'=>"1",'data' => $data,'recordsTotal'=>$data->count()] );
        }
        elseif($names == "Citas Checkup"){
             $ids = \Auth::user()->id;
                 $role = Role_User::where('user_id', '=', $ids)->value('role_id'); 
                 if($role == 3){
                  $data = Citas::select('citas.id','citas.start', \DB::raw('CONCAT(paciente.name, " ", paciente.app_name, " ", paciente.apm_name) as paciente'), 'doctor.name as doctor', 'especialidad.name as especialidad', 
                      'citas_checkup.id as id_citascheckup', 'citas_checkup.id_anexo1722', 'citas_checkup.archivo','anexo17_22.id_checkup', 'anexo17_22.nombre as names','anexoscheckup.nombre as nombr', 'citas_checkup.fecha_enfermeria')
                      ->join('especialidad', 'citas.id_especialidad', '=', 'especialidad.id')
                      ->join('users as paciente', 'citas.id_paciente', '=', 'paciente.id')
                      ->join('users as doctor', 'citas.id_doctor', '=', 'doctor.id')
                      ->join('citas_checkup', 'citas.id', '=', 'citas_checkup.id_cita')
                      ->join('anexo17_22', 'citas_checkup.id_anexo1722', '=', 'anexo17_22.id')
                      ->join('anexoscheckup', 'anexo17_22.id_checkup', '=', 'anexoscheckup.id')
                      ->where('citas.cron_inicia', '!=', null)
                      ->where('citas.id_paciente', '=', $ids)
                      ->where('citas.id_especialidad', '=', 11)
                      ->get();
                 }
                 else{
                      $data = Citas::select('citas.id','citas.start', \DB::raw('CONCAT(paciente.name, " ", paciente.app_name, " ", paciente.apm_name) as paciente'), 'doctor.name as doctor', 'especialidad.name as especialidad', 
                      'citas_checkup.id as id_citascheckup', 'citas_checkup.id_anexo1722', 'anexo17_22.id_checkup', 'citas_checkup.archivo','anexo17_22.nombre as names','anexoscheckup.nombre as nombr', 'citas_checkup.fecha_enfermeria')
                      ->join('especialidad', 'citas.id_especialidad', '=', 'especialidad.id')
                      ->join('users as paciente', 'citas.id_paciente', '=', 'paciente.id')
                      ->join('users as doctor', 'citas.id_doctor', '=', 'doctor.id')
                      ->join('citas_checkup', 'citas.id', '=', 'citas_checkup.id_cita')
                      ->join('anexo17_22', 'citas_checkup.id_anexo1722', '=', 'anexo17_22.id')
                      ->join('anexoscheckup', 'anexo17_22.id_checkup', '=', 'anexoscheckup.id')
                      ->where('citas.cron_inicia', '!=', null)
                      ->where('citas.id_especialidad', '=', 11)
                      ->get();
                 }
                    //dd($data);
        return response()->json(['draw'=>"1",'data' => $data,'recordsTotal'=>$data->count()] );
        }
        elseif($names == "Citas Checkup Finalizado"){
             $ids = \Auth::user()->id;
                 $role = Role_User::where('user_id', '=', $ids)->value('role_id'); 
                 if($role == 3){
                  $data = Citas::select('citas.id','citas.start', \DB::raw('CONCAT(paciente.name, " ", paciente.app_name, " ", paciente.apm_name) as paciente'), 'doctor.name as doctor', 'especialidad.name as especialidad', 
                      'citas_checkup.id as id_citascheckup', 'citas_checkup.id_anexo1722', 'anexo17_22.id_checkup', 'citas_checkup.archivo','anexo17_22.nombre as names','anexoscheckup.nombre as nombr', 'citas_checkup.fecha_enfermeria')
                      ->join('especialidad', 'citas.id_especialidad', '=', 'especialidad.id')
                      ->join('users as paciente', 'citas.id_paciente', '=', 'paciente.id')
                      ->join('users as doctor', 'citas.id_doctor', '=', 'doctor.id')
                      ->join('citas_checkup', 'citas.id', '=', 'citas_checkup.id_cita')
                      ->join('anexo17_22', 'citas_checkup.id_anexo1722', '=', 'anexo17_22.id')
                      ->join('anexoscheckup', 'anexo17_22.id_checkup', '=', 'anexoscheckup.id')
                      ->where('citas.cron_inicia', '!=', null)
                      ->where('citas.cron_final', '!=', null)
                      ->where('citas.id_paciente', '=', $ids)
                      ->where('citas.id_especialidad', '=', 11)
                      ->get();
                 }
                 else{
                      $data = Citas::select('citas.id','citas.start', \DB::raw('CONCAT(paciente.name, " ", paciente.app_name, " ", paciente.apm_name) as paciente'), 'doctor.name as doctor', 'especialidad.name as especialidad', 
                      'citas_checkup.id as id_citascheckup', 'citas_checkup.id_anexo1722', 'anexo17_22.id_checkup', 'citas_checkup.archivo','anexo17_22.nombre as names','anexoscheckup.nombre as nombr', 'citas_checkup.fecha_enfermeria')
                      ->join('especialidad', 'citas.id_especialidad', '=', 'especialidad.id')
                      ->join('users as paciente', 'citas.id_paciente', '=', 'paciente.id')
                      ->join('users as doctor', 'citas.id_doctor', '=', 'doctor.id')
                      ->join('citas_checkup', 'citas.id', '=', 'citas_checkup.id_cita')
                      ->join('anexo17_22', 'citas_checkup.id_anexo1722', '=', 'anexo17_22.id')
                      ->join('anexoscheckup', 'anexo17_22.id_checkup', '=', 'anexoscheckup.id')
                      ->where('citas.cron_inicia', '!=', null)
                      ->where('citas.cron_final', '!=', null)
                      ->where('citas.id_especialidad', '=', 11)
                      ->get();
                 }

        return response()->json(['draw'=>"1",'data' => $data,'recordsTotal'=>$data->count()] );
        }
        elseif($names == "Cobrar"){
              /*$data = CajaCitas::select(\DB::raw('ANY_VALUE(caja_citas.id)'), 'caja_citas.id_cita', 'caja.id_cita as cit', 'caja_citas.costo','paciente.username', \DB::raw('CONCAT(paciente.name, " ", paciente.app_name, " ", paciente.apm_name) as pacientes'), \DB::raw('CONCAT(doctor.name, " ", doctor.app_name, " ", doctor.apm_name) as doctores'))
                      ->leftjoin('users as paciente', 'caja_citas.id_paciente', '=', 'paciente.id')
                      ->leftjoin('users as doctor', 'caja_citas.id_doctor', '=', 'doctor.id')
                      ->leftjoin('caja', 'caja_citas.id_cita', '=', 'caja.id_cita')
                      ->groupBy('caja_citas.costo')
                      ->get();*/
            $data = Citas::select('citas.id', 'citas.id as ids', 'citas.cobrar_status', 'paciente.username', \DB::raw('CONCAT(paciente.name, " ", paciente.app_name, " ", paciente.apm_name) as pacientes'), 
            \DB::raw('CONCAT(doctor.name, " ", doctor.app_name, " ", doctor.apm_name) as doctores'))
                      ->join('users as paciente', 'citas.id_paciente', '=', 'paciente.id')
                      ->join('users as doctor', 'citas.id_doctor', '=', 'doctor.id')
                      ->where('cron_final', '!=', null)
                      ->where('tiempo_cita', '!=', null)
                      ->where('cobrar_status', '=', null)
                      ->get();
        return response()->json(['draw'=>"1",'data' => $data,'recordsTotal'=>$data->count()] );
        }
        
        else{
            $data = $model::all();
            return response()->json(['draw'=>"1",'data' => $data,'recordsTotal'=>$data->count()] );
        }
    }
    
    public function getJlistl($id)
	{
		$model = $this->getModelInstance();
        $name = $this->name_plural;
        $names = $this->name;
      //dd($names);
      if($names == "Laboratorio"){
         
             $ids = \Auth::user()->id;
                 $role = Role_User::where('user_id', '=', $ids)->value('role_id'); 
                 if($role == 5){
                       $data = CitasLaboratorios::select('citas_laboratorios.id','citas_laboratorios.start','citas_laboratorios.estado', 'citas_laboratorios.nota', \DB::raw('CONCAT(paciente.name, " ", paciente.app_name, " ", paciente.apm_name) as paciente'), 'doctor.name as doctor', 'especialidad.name as especialidad')
                      ->join('especialidad', 'citas_laboratorios.id_especialidad', '=', 'especialidad.id')
                      ->join('users as paciente', 'citas_laboratorios.id_paciente', '=', 'paciente.id')
                      ->join('users as doctor', 'citas_laboratorios.id_doctor', '=', 'doctor.id')
                      ->where('citas_laboratorios.estado', '=', 1)
                      ->where('citas_laboratorios.id_paciente', '=', $id)
                      ->get();
                 }
                 else{
                       $data = CitasLaboratorios::select('citas_laboratorios.id','citas_laboratorios.start','citas_laboratorios.estado', 'citas_laboratorios.nota', \DB::raw('CONCAT(paciente.name, " ", paciente.app_name, " ", paciente.apm_name) as paciente'), 'doctor.name as doctor', 'especialidad.name as especialidad')
                      ->join('especialidad', 'citas_laboratorios.id_especialidad', '=', 'especialidad.id')
                      ->join('users as paciente', 'citas_laboratorios.id_paciente', '=', 'paciente.id')
                      ->join('users as doctor', 'citas_laboratorios.id_doctor', '=', 'doctor.id')
                      ->where('citas_laboratorios.estado', '=', 1)
                      ->get();
                 }

        return response()->json(['draw'=>"1",'data' => $data,'recordsTotal'=>$data->count()] );
        }
        elseif($names == "Laboratorio Finalizado"){
            $ids = \Auth::user()->id;
                 $role = Role_User::where('user_id', '=', $ids)->value('role_id'); 
                 //dd($id);
                 if($role == 5){
                      $data = CitasLaboratorios::select('citas_laboratorios.id','citas_laboratorios.start','citas_laboratorios.estado', 'citas_laboratorios.nota', \DB::raw('CONCAT(paciente.name, " ", paciente.app_name, " ", paciente.apm_name) as paciente'), 'doctor.name as doctor', 'especialidad.name as especialidad')
                      ->join('especialidad', 'citas_laboratorios.id_especialidad', '=', 'especialidad.id')
                      ->join('users as paciente', 'citas_laboratorios.id_paciente', '=', 'paciente.id')
                      ->join('users as doctor', 'citas_laboratorios.id_doctor', '=', 'doctor.id')
                      ->where('citas_laboratorios.estado', '=', 2)
                      ->where('citas_laboratorios.id_paciente', '=', $id)
                      ->get();
                 }
                 else{
                      $data = CitasLaboratorios::select('citas_laboratorios.id','citas_laboratorios.start','citas_laboratorios.estado', 'citas_laboratorios.nota', \DB::raw('CONCAT(paciente.name, " ", paciente.app_name, " ", paciente.apm_name) as paciente'), 'doctor.name as doctor', 'especialidad.name as especialidad')
                      ->join('especialidad', 'citas_laboratorios.id_especialidad', '=', 'especialidad.id')
                      ->join('users as paciente', 'citas_laboratorios.id_paciente', '=', 'paciente.id')
                      ->join('users as doctor', 'citas_laboratorios.id_doctor', '=', 'doctor.id')
                      ->where('citas_laboratorios.estado', '=', 2)
                      ->get();
                 }

        return response()->json(['draw'=>"1",'data' => $data,'recordsTotal'=>$data->count()] );
        }
        elseif($names == "Imagenologia"){
               $ids = \Auth::user()->id;
                 $role = Role_User::where('user_id', '=', $ids)->value('role_id'); 
                 if($role == 5){
                      $data = CitasImagenologia::select('citas_imagenologia.id','citas_imagenologia.start','citas_imagenologia.estado', 'citas_imagenologia.nota', \DB::raw('CONCAT(paciente.name, " ", paciente.app_name, " ", paciente.apm_name) as paciente'), 'doctor.name as doctor', 'especialidad.name as especialidad')
                      ->join('especialidad', 'citas_imagenologia.id_especialidad', '=', 'especialidad.id')
                      ->join('users as paciente', 'citas_imagenologia.id_paciente', '=', 'paciente.id')
                      ->join('users as doctor', 'citas_imagenologia.id_doctor', '=', 'doctor.id')
                      ->where('citas_imagenologia.estado', '=', 1)
                      ->where('citas_imagenologia.id_paciente', '=', $id)
                      ->get();
                 }
                 else{
                     $data = CitasImagenologia::select('citas_imagenologia.id','citas_imagenologia.start','citas_imagenologia.estado', 'citas_imagenologia.nota', \DB::raw('CONCAT(paciente.name, " ", paciente.app_name, " ", paciente.apm_name) as paciente'), 'doctor.name as doctor', 'especialidad.name as especialidad')
                      ->join('especialidad', 'citas_imagenologia.id_especialidad', '=', 'especialidad.id')
                      ->join('users as paciente', 'citas_imagenologia.id_paciente', '=', 'paciente.id')
                      ->join('users as doctor', 'citas_imagenologia.id_doctor', '=', 'doctor.id')
                      ->where('citas_imagenologia.estado', '=', 1)
                      ->get();
                 }
                 
        return response()->json(['draw'=>"1",'data' => $data,'recordsTotal'=>$data->count()] );
        }
        elseif($names == "Imagenologia Finalizado"){
             $ids = \Auth::user()->id;
                 $role = Role_User::where('user_id', '=', $ids)->value('role_id'); 
                 if($role == 5){
                      $data = CitasImagenologia::select('citas_imagenologia.id','citas_imagenologia.start','citas_imagenologia.estado', 'citas_imagenologia.nota', \DB::raw('CONCAT(paciente.name, " ", paciente.app_name, " ", paciente.apm_name) as paciente'), 'doctor.name as doctor', 'especialidad.name as especialidad')
                      ->join('especialidad', 'citas_imagenologia.id_especialidad', '=', 'especialidad.id')
                      ->join('users as paciente', 'citas_imagenologia.id_paciente', '=', 'paciente.id')
                      ->join('users as doctor', 'citas_imagenologia.id_doctor', '=', 'doctor.id')
                      ->where('citas_imagenologia.estado', '=', 2)
                      ->where('citas_imagenologia.id_paciente', '=', $id)
                      ->get();
                 }
                 else{
                     $data = CitasImagenologia::select('citas_imagenologia.id','citas_imagenologia.start','citas_imagenologia.estado', 'citas_imagenologia.nota', \DB::raw('CONCAT(paciente.name, " ", paciente.app_name, " ", paciente.apm_name) as paciente'), 'doctor.name as doctor', 'especialidad.name as especialidad')
                      ->join('especialidad', 'citas_imagenologia.id_especialidad', '=', 'especialidad.id')
                      ->join('users as paciente', 'citas_imagenologia.id_paciente', '=', 'paciente.id')
                      ->join('users as doctor', 'citas_imagenologia.id_doctor', '=', 'doctor.id')
                      ->where('citas_imagenologia.estado', '=', 2)
                      ->get();
                 }
                
        return response()->json(['draw'=>"1",'data' => $data,'recordsTotal'=>$data->count()] );
        }
        elseif($names == "Recetas"){
             $ids = \Auth::user()->id;
                 $role = Role_User::where('user_id', '=', $ids)->value('role_id'); 
                 if($role == 5){
                      $data = Recetas::select('receta_medica.id','receta_medica.fechap','receta_medica.fechac', 'receta_medica.descripcionp', 'users.name as doctor', 'receta_medica.edad', 'receta_medica.talla', 'receta_medica.peso', 'receta_medica.temp', 'receta_medica.ta', 'receta_medica.fc', 'receta_medica.fr', 'receta_medica.expo_me', 'receta_medica.indica')
                      ->join('users', 'receta_medica.id_doctor', '=', 'users.id')
                      ->where('receta_medica.id_paciente', '=', $id)
                      ->get();
                 }
                 else{
                     $data = Recetas::select('receta_medica.id','receta_medica.fechap','receta_medica.fechac', 'receta_medica.descripcionp', 'users.name as doctor', 'receta_medica.edad', 'receta_medica.talla', 'receta_medica.peso', 'receta_medica.temp', 'receta_medica.ta', 'receta_medica.fc', 'receta_medica.fr', 'receta_medica.expo_me', 'receta_medica.indica')
                      ->join('users', 'receta_medica.id_doctor', '=', 'users.id')
                      ->get();
                 }
                
        return response()->json(['draw'=>"1",'data' => $data,'recordsTotal'=>$data->count()] );
        }
         elseif($names == "Citas Estadisticas"){
              $data = \DB::table('citas')->where('id_doctor','=',$id)->where('tiempo_cita','!=',null)->get();
              
        return response()->json(['draw'=>"1",'data' => $data,'recordsTotal'=>$data->count()] );
        }
        else{
            $data = $model::all();
            return response()->json(['draw'=>"1",'data' => $data,'recordsTotal'=>$data->count()] );
        }
    }
    
    public function Jlistt(Request $request)
    {
        
     if($request->nombre == "Add Caja"){
         
         //dd($request->all());
         $ids = \Auth::user()->id;
         $role = Role_User::where('user_id', '=', $ids)->value('role_id'); 
         if($role == 5){
             $agenda = Citas::where('id', '=', $request->agenda)
                             ->value('id_paciente');
                
              $data = CajaCitas::select('caja_citas.id', 'caja_citas.id_paciente', 'caja_citas.id_doctor', 'caja_citas.id_cita', 'anexo13.clave','anexo13.descripcion','caja_citas.costo','anexo13.id_cat_anexo13', 'cat_anexo13.nombre', 'caja_citas.created_at')
                      ->join('users', 'caja_citas.id_doctor', '=', 'users.id')
                      ->join('anexo13', 'caja_citas.id_anexo13', '=', 'anexo13.id')
                      ->join('cat_anexo13', 'anexo13.id_cat_anexo13', '=', 'cat_anexo13.id')
                      ->where('caja_citas.id_cita', '=', $request->agenda)
                      ->get();
           }
           else if($role == 4){
               
               //dd($request->agenda);
               $ids = CitasLaboratorios::where('id', '=', $request->agenda)
                             ->value('id_cita');
               $agenda = CitasLaboratorios::where('id_cita', '=', $ids)
                             ->value('id_paciente');
                
              $data = CajaCitas::select('caja_citas.id', 'caja_citas.id_paciente', 'caja_citas.id_doctor', 'caja_citas.id_cita', 'anexo13.clave','anexo13.descripcion','caja_citas.costo','anexo13.id_cat_anexo13', 'cat_anexo13.nombre', 'caja_citas.created_at')
                      ->join('users', 'caja_citas.id_doctor', '=', 'users.id')
                      ->join('anexo13', 'caja_citas.id_anexo13', '=', 'anexo13.id')
                      ->join('cat_anexo13', 'anexo13.id_cat_anexo13', '=', 'cat_anexo13.id')
                      ->where('caja_citas.id_cita', '=', $ids)
                      ->where('caja_citas.id_anexo13', '=', 5)
                      ->get();
           }
                      //dd($data);
        return response()->json(['draw'=>"1",'data' => $data,'recordsTotal'=>$data->count()] );
        }
        
     }
     
      public function postJFilter(Request $request)
    {
        
       if($request->url == "laboratorio"){
         //dd($request->all());
        if($request->folio != "" && $request->min != "" && $request->max != ""){
          $ids = \Auth::user()->id;
             $role = Role_User::where('user_id', '=', $ids)->value('role_id'); 
             if($role == 4 || $role == 5 || $role == 1){
                  $data = CitasLaboratorios::select('citas_laboratorios.id','citas_laboratorios.start','citas_laboratorios.estado', 'citas_laboratorios.nota', \DB::raw('CONCAT(paciente.name, " ", paciente.app_name, " ", paciente.apm_name) as paciente'), 'doctor.name as doctor', 'especialidad.name as especialidad')
                      ->join('especialidad', 'citas_laboratorios.id_especialidad', '=', 'especialidad.id')
                      ->join('users as paciente', 'citas_laboratorios.id_paciente', '=', 'paciente.id')
                      ->join('users as doctor', 'citas_laboratorios.id_doctor', '=', 'doctor.id')
                      ->where('citas_laboratorios.estado', '=', 1)
                      ->where('citas_laboratorios.start', '>=', $i)
                      ->where('citas_laboratorios.start', '<=', $f)
                      ->where('citas_laboratorios.id_paciente', '<=', $request->folio)
                      ->get();
              }
       return response()->json(['draw'=>"1",'data' => $data,'recordsTotal'=>$data->count()] );        
      }
       else if($request->min != "" && $request->max != "") {
       $i = $request->min . " 00:00:00";
         $f = $request->max . " 23:59:59";
             $ids = \Auth::user()->id;
             $role = Role_User::where('user_id', '=', $ids)->value('role_id'); 
             if($role == 4 || $role == 5 || $role == 1){
                
                $data = CitasLaboratorios::select('citas_laboratorios.id','citas_laboratorios.start','citas_laboratorios.estado', 'citas_laboratorios.nota', \DB::raw('CONCAT(paciente.name, " ", paciente.app_name, " ", paciente.apm_name) as paciente'), 'doctor.name as doctor', 'especialidad.name as especialidad')
                      ->join('especialidad', 'citas_laboratorios.id_especialidad', '=', 'especialidad.id')
                      ->join('users as paciente', 'citas_laboratorios.id_paciente', '=', 'paciente.id')
                      ->join('users as doctor', 'citas_laboratorios.id_doctor', '=', 'doctor.id')
                      ->where('citas_laboratorios.estado', '=', 1)
                      ->where('citas_laboratorios.start', '>=', $i)
                      ->where('citas_laboratorios.start', '<=', $f)
                      ->get();
              }
              
                
       return response()->json(['draw'=>"1",'data' => $data,'recordsTotal'=>$data->count()] );        
     }
       else if($request->folio != ""){
          $ids = \Auth::user()->id;
             $role = Role_User::where('user_id', '=', $ids)->value('role_id'); 
             if($role == 4 || $role == 5 || $role == 1){
                  
                  $data = CitasLaboratorios::select('citas_laboratorios.id','citas_laboratorios.start','citas_laboratorios.estado', 'citas_laboratorios.nota', \DB::raw('CONCAT(paciente.name, " ", paciente.app_name, " ", paciente.apm_name) as paciente'), 'doctor.name as doctor', 'especialidad.name as especialidad')
                      ->join('especialidad', 'citas_laboratorios.id_especialidad', '=', 'especialidad.id')
                      ->join('users as paciente', 'citas_laboratorios.id_paciente', '=', 'paciente.id')
                      ->join('users as doctor', 'citas_laboratorios.id_doctor', '=', 'doctor.id')
                      ->where('citas_laboratorios.estado', '=', 1)
                      ->where('citas_laboratorios.id_paciente', '=', $request->folio)
                      ->get();
              }
       return response()->json(['draw'=>"1",'data' => $data,'recordsTotal'=>$data->count()] );        
     }
    
    }
    
       if($request->url == "laboratoriofinalizado"){
       
        if($request->folio != "" && $request->min != "" && $request->max != ""){
           $ids = \Auth::user()->id;
             $role = Role_User::where('user_id', '=', $ids)->value('role_id'); 
             if($role == 4 || $role == 5 || $role == 1){
          
                  $data = CitasLaboratorios::select('citas_laboratorios.id','citas_laboratorios.start','citas_laboratorios.estado', 'citas_laboratorios.nota', \DB::raw('CONCAT(paciente.name, " ", paciente.app_name, " ", paciente.apm_name) as paciente'), 'doctor.name as doctor', 'especialidad.name as especialidad')
                      ->join('especialidad', 'citas_laboratorios.id_especialidad', '=', 'especialidad.id')
                      ->join('users as paciente', 'citas_laboratorios.id_paciente', '=', 'paciente.id')
                      ->join('users as doctor', 'citas_laboratorios.id_doctor', '=', 'doctor.id')
                      ->where('citas_laboratorios.estado', '=', 2)
                      ->where('citas_laboratorios.start', '>=', $i)
                      ->where('citas_laboratorios.start', '<=', $f)
                      ->where('citas_laboratorios.id_paciente', '<=', $request->folio)
                      ->get();
              }
       return response()->json(['draw'=>"1",'data' => $data,'recordsTotal'=>$data->count()] );        
      }
       else if($request->min != "" && $request->max != "") {
       $i = $request->min . " 00:00:00";
         $f = $request->max . " 23:59:59";
            $ids = \Auth::user()->id;
             $role = Role_User::where('user_id', '=', $ids)->value('role_id'); 
             if($role == 4 || $role == 5 || $role == 1){
          
                $data = CitasLaboratorios::select('citas_laboratorios.id','citas_laboratorios.start','citas_laboratorios.estado', 'citas_laboratorios.nota', \DB::raw('CONCAT(paciente.name, " ", paciente.app_name, " ", paciente.apm_name) as paciente'), 'doctor.name as doctor', 'especialidad.name as especialidad')
                      ->join('especialidad', 'citas_laboratorios.id_especialidad', '=', 'especialidad.id')
                      ->join('users as paciente', 'citas_laboratorios.id_paciente', '=', 'paciente.id')
                      ->join('users as doctor', 'citas_laboratorios.id_doctor', '=', 'doctor.id')
                      ->where('citas_laboratorios.estado', '=', 2)
                      ->where('citas_laboratorios.start', '>=', $i)
                      ->where('citas_laboratorios.start', '<=', $f)
                      ->get();
              }
              
                
       return response()->json(['draw'=>"1",'data' => $data,'recordsTotal'=>$data->count()] );        
     }
       else if($request->folio != ""){
           $ids = \Auth::user()->id;
             $role = Role_User::where('user_id', '=', $ids)->value('role_id'); 
             if($role == 4 || $role == 5 || $role == 1){
                  
                  $data = CitasLaboratorios::select('citas_laboratorios.id','citas_laboratorios.start','citas_laboratorios.estado', 'citas_laboratorios.nota', \DB::raw('CONCAT(paciente.name, " ", paciente.app_name, " ", paciente.apm_name) as paciente'), 'doctor.name as doctor', 'especialidad.name as especialidad')
                      ->join('especialidad', 'citas_laboratorios.id_especialidad', '=', 'especialidad.id')
                      ->join('users as paciente', 'citas_laboratorios.id_paciente', '=', 'paciente.id')
                      ->join('users as doctor', 'citas_laboratorios.id_doctor', '=', 'doctor.id')
                      ->where('citas_laboratorios.estado', '=', 2)
                      ->where('citas_laboratorios.id_paciente', '=', $request->folio)
                      ->get();
              }
       return response()->json(['draw'=>"1",'data' => $data,'recordsTotal'=>$data->count()] );        
     }
    
    }
    
       if($request->url == "imagenologia"){
       
        if($request->folio != "" && $request->min != "" && $request->max != ""){
          $idr = \Auth::user()->id;
            $rol = Role_User::where('user_id', '=', $idr)->where('role_id', '=', 8)->value('role_id');
              if($rol != ""){
                  $data = CitasImagenologia::select('citas_imagenologia.id','citas_imagenologia.start','citas_imagenologia.estado', 'citas_imagenologia.nota', \DB::raw('CONCAT(paciente.name, " ", paciente.app_name, " ", paciente.apm_name) as paciente'), 'doctor.name as doctor', 'especialidad.name as especialidad')
                      ->join('especialidad', 'citas_imagenologia.id_especialidad', '=', 'especialidad.id')
                      ->join('users as paciente', 'citas_imagenologia.id_paciente', '=', 'paciente.id')
                      ->join('users as doctor', 'citas_imagenologia.id_doctor', '=', 'doctor.id')
                      ->where('citas_imagenologia.estado', '=', 1)
                      ->where('citas_imagenologia.start', '>=', $i)
                      ->where('citas_imagenologia.start', '<=', $f)
                      ->where('citas_imagenologia.id_paciente', '<=', $request->folio)
                      ->get();
              }
       return response()->json(['draw'=>"1",'data' => $data,'recordsTotal'=>$data->count()] );        
      }
       else if($request->min != "" && $request->max != "") {
       $i = $request->min . " 00:00:00";
         $f = $request->max . " 23:59:59";
           $idr = \Auth::user()->id;
            $rol = Role_User::where('user_id', '=', $idr)->where('role_id', '=', 8)->value('role_id');
              if($rol != ""){
                
                 $data = CitasImagenologia::select('citas_imagenologia.id','citas_imagenologia.start','citas_imagenologia.estado', 'citas_imagenologia.nota', \DB::raw('CONCAT(paciente.name, " ", paciente.app_name, " ", paciente.apm_name) as paciente'), 'doctor.name as doctor', 'especialidad.name as especialidad')
                      ->join('especialidad', 'citas_imagenologia.id_especialidad', '=', 'especialidad.id')
                      ->join('users as paciente', 'citas_imagenologia.id_paciente', '=', 'paciente.id')
                      ->join('users as doctor', 'citas_imagenologia.id_doctor', '=', 'doctor.id')
                      ->where('citas_imagenologia.estado', '=', 1)
                      ->where('citas_imagenologia.start', '>=', $i)
                      ->where('citas_imagenologia.start', '<=', $f)
                      ->get();
              }
              
                
       return response()->json(['draw'=>"1",'data' => $data,'recordsTotal'=>$data->count()] );        
     }
       else if($request->folio != ""){
          $idr = \Auth::user()->id;
            $rol = Role_User::where('user_id', '=', $idr)->where('role_id', '=', 8)->value('role_id');
              if($rol != ""){
                  
                  $data = CitasImagenologia::select('citas_imagenologia.id','citas_imagenologia.start','citas_imagenologia.estado', 'citas_imagenologia.nota', \DB::raw('CONCAT(paciente.name, " ", paciente.app_name, " ", paciente.apm_name) as paciente'), 'doctor.name as doctor', 'especialidad.name as especialidad')
                      ->join('especialidad', 'citas_imagenologia.id_especialidad', '=', 'especialidad.id')
                      ->join('users as paciente', 'citas_imagenologia.id_paciente', '=', 'paciente.id')
                      ->join('users as doctor', 'citas_imagenologia.id_doctor', '=', 'doctor.id')
                      ->where('citas_imagenologia.estado', '=', 1)
                      ->where('citas_imagenologia.id_paciente', '<=', $request->folio)
                      ->get();
              }
       return response()->json(['draw'=>"1",'data' => $data,'recordsTotal'=>$data->count()] );        
     }
    
    }
    
       if($request->url == "laboratoriofinalizado"){
       
        if($request->folio != "" && $request->min != "" && $request->max != ""){
          $idr = \Auth::user()->id;
            $rol = Role_User::where('user_id', '=', $idr)->where('role_id', '=', 8)->value('role_id');
              if($rol != ""){
                   $data = CitasImagenologia::select('citas_imagenologia.id','citas_imagenologia.start','citas_imagenologia.estado', 'citas_imagenologia.nota', \DB::raw('CONCAT(paciente.name, " ", paciente.app_name, " ", paciente.apm_name) as paciente'), 'doctor.name as doctor', 'especialidad.name as especialidad')
                      ->join('especialidad', 'citas_imagenologia.id_especialidad', '=', 'especialidad.id')
                      ->join('users as paciente', 'citas_imagenologia.id_paciente', '=', 'paciente.id')
                      ->join('users as doctor', 'citas_imagenologia.id_doctor', '=', 'doctor.id')
                      ->where('citas_imagenologia.estado', '=', 2)
                      ->where('citas_imagenologia.start', '>=', $i)
                      ->where('citas_imagenologia.start', '<=', $f)
                      ->where('citas_imagenologia.id_paciente', '<=', $request->folio)
                      ->get();
              }
       return response()->json(['draw'=>"1",'data' => $data,'recordsTotal'=>$data->count()] );        
      }
       else if($request->min != "" && $request->max != "") {
       $i = $request->min . " 00:00:00";
         $f = $request->max . " 23:59:59";
           $idr = \Auth::user()->id;
            $rol = Role_User::where('user_id', '=', $idr)->where('role_id', '=', 8)->value('role_id');
              if($rol != ""){
                
                 $data = CitasImagenologia::select('citas_imagenologia.id','citas_imagenologia.start','citas_imagenologia.estado', 'citas_imagenologia.nota', \DB::raw('CONCAT(paciente.name, " ", paciente.app_name, " ", paciente.apm_name) as paciente'), 'doctor.name as doctor', 'especialidad.name as especialidad')
                      ->join('especialidad', 'citas_imagenologia.id_especialidad', '=', 'especialidad.id')
                      ->join('users as paciente', 'citas_imagenologia.id_paciente', '=', 'paciente.id')
                      ->join('users as doctor', 'citas_imagenologia.id_doctor', '=', 'doctor.id')
                      ->where('citas_imagenologia.estado', '=', 2)
                      ->where('citas_imagenologia.start', '>=', $i)
                      ->where('citas_imagenologia.start', '<=', $f)
                      ->get();
              }
              
                
       return response()->json(['draw'=>"1",'data' => $data,'recordsTotal'=>$data->count()] );        
     }
       else if($request->folio != ""){
          $idr = \Auth::user()->id;
            $rol = Role_User::where('user_id', '=', $idr)->where('role_id', '=', 8)->value('role_id');
              if($rol != ""){
                  
                   $data = CitasImagenologia::select('citas_imagenologia.id','citas_imagenologia.start','citas_imagenologia.estado', 'citas_imagenologia.nota', \DB::raw('CONCAT(paciente.name, " ", paciente.app_name, " ", paciente.apm_name) as paciente'), 'doctor.name as doctor', 'especialidad.name as especialidad')
                      ->join('especialidad', 'citas_imagenologia.id_especialidad', '=', 'especialidad.id')
                      ->join('users as paciente', 'citas_imagenologia.id_paciente', '=', 'paciente.id')
                      ->join('users as doctor', 'citas_imagenologia.id_doctor', '=', 'doctor.id')
                      ->where('citas_imagenologia.estado', '=', 2)
                      ->where('citas_imagenologia.id_paciente', '<=', $request->folio)
                      ->get();
              }
       return response()->json(['draw'=>"1",'data' => $data,'recordsTotal'=>$data->count()] );        
     }
    
    }

   }
  

//AGREGAR FORMULARIO A EL CAMPO ADD-----------------------------------------------------------------------------------------
    public function getAdd()
	{
	        $form = \FormBuilder::create($this->form, [
                'method' => 'POST',
                'model' => $this->getModelInstance(),
                'url' => ($this->url_prefix.'/add')
            ]);
            return view($this->tpl_prefix.'add',array('catalog'=>$this), compact('form'));
	}

//---------------------------------------------------------------------------------------------------------------------------
   	public function postAdd(Request $request){
   	    $url = $this->getUrlPrefix();
        $model = $this->getModelInstance();
        $names = $this->name;
        //dd($names);
        
         if ($names == "Usuarios") {
              
            $member = User::where('email', '=', $request->email)->value('id');  
             if($member == ""){
                 
                 if($request->tipousuario == 5){ 
                     
                     $datos = User::create([
                    'name' => $request->name,
                    'app_name' => $request->app_name,
                    'apm_name' => $request->apm_name,
                    'username' => $request->username,
                    'email' => $request->email,
                    'password' => Hash::make($request->password),
                    'sex' => $request->sex,
                    'phone' => $request->phone,
                    'active' => 1,
                    ]);

                    $id = User::where('email', '=', $request->email)->value('id');  
            
                  $cadena = $request->especial;
                  if($cadena != ""){
                  $array = explode(",", $cadena);
                  $longitud = count($array);
               
                  for($i=1; $i<$longitud; $i++)
                  {
                     $valor = (int) $array[$i];
                    $especiali = EspecialidadUser::where('id_user', '=', $id)
                                                ->where('id_especialidad', '=', $valor) 
                                               ->value('id');
                 
                   if($especiali == ""){
                        
                         $datos = EspecialidadUser::create([
                         'id_user' => $id,
                         'id_especialidad' => $valor,
                         ]);
                   }
                  }
                }
                 }
                 else{
                     $datos = User::create([
                    'name' => $request->name,
                    'app_name' => $request->app_name,
                    'apm_name' => $request->apm_name,
                    'username' => $request->username,
                    'email' => $request->email,
                    'password' => Hash::make($request->password),
                    'sex' => $request->sex,
                    'phone' => $request->phone,
                    'active' => 1,
                    ]); 
                 }
                $user = User::where('email', '=', $request->email)->value('id');  
                $dat = Role_User::create([
                'user_id' => $user,
                'role_id' => $request->tipousuario,
                ]);
                return redirect()->to($url)->withStatus(__('Se agrego correctamente.'));   
             }
             else{
                return redirect()->to($url)->withStatus(__('EL correo electronico ya existe'));
             }
                      
          }

         if($names=="RecetaImprimir"){

            $ids = \Auth::user()->id;
            $existe = Recetas::where('id_cita', '=', $request->cita)->value('id');
            //dd($request->all());
            if($existe == null){
                
                $ticket = Receta::find($fecha);
                $ticket->receta =$request->receta;
                $ticket->save();
                
            /* $datos = Recetas::create([
                 'fechap' => $request->fechap,
                 'fechac' => $request->fechap,
                 'descripcionp' => $request->descripcionp,
                 'id_paciente' => $request->id_paciente,
                 'id_doctor' => $ids,
                 'edad' => $request->edad,
                 'talla' => $request->talla,
                 'peso' => $request->peso,
                 'temp' => $request->temp,
                 'ta' => $request->ta,
                 'fc' => $request->fc,
                 'fr' => $request->fr,
                 'expo_me' => $request->expo_me,
                 'indica' => $request->indica,
                 'fm' => $request->fm,
                 'observaciones' => $request->observ,
                 'id_cita' => $request->cita,
             ]);*/
            

           /* $dato1=$names;   
            $descrip = $request->cita;          
             $view =  \View::make('pdf.agendarestudio', compact('descrip', 'dato1'))->render();
      
               $pdf = \App::make('dompdf.wrapper');
                set_time_limit(60);
                $pdf->loadHTML($view)->setPaper('a4', 'landscape');  
             */   //$pdf->loadHTML($view)->setPaper('a4', 'portrait');  
                //return $pdf->download($folio.'.pdf');
              //  return $pdf->stream('agendar');
              
               $descrip = Recetas::select(\DB::raw('CONCAT(paciente.name, " ", paciente.app_name, " ", paciente.apm_name) AS usuario'), 'receta_medica.fechap', 'receta_medica.descripcionp', 
             'receta_medica.talla', 'receta_medica.peso', 'receta_medica.temp', 'receta_medica.receta', 'receta_medica.observaciones',
             \DB::raw('CONCAT(doctor.name, " ", doctor.app_name, " ", doctor.apm_name) AS doctores'))
                        ->join('users as paciente', 'receta_medica.id_paciente', '=', 'paciente.id')
                        ->join('users as doctor', 'receta_medica.id_doctor', '=', 'doctor.id')
                        ->where('receta_medica.id','=',$existe)
                        ->get();
           
            /* $view =  \View::make('pdf.recetas', compact('descrip'))->render();
      
             $pdf = \App::make('dompdf.wrapper');
                set_time_limit(60);
             $pdf->loadHTML($view)->setPaper('a4', 'landscape');  
                //$pdf->loadHTML($view)->setPaper('a4', 'portrait');  
                return $pdf->download('receta.pdf');
              */  
                //$url="recetaprocesoconsultadoctores";
              //return redirect()->to($url)->withStatus(__('Se agrego correctamente.')); 
           }
           else{
                 if($request->receta == null){
           
                     $ticket = Recetas::find($existe);
                     $ticket->receta = $request->receta;
                     $ticket->save();
                
                 }
            else{
                
                     $ticket = Recetas::find($existe);
                     $ticket->receta = $request->receta;
                     $ticket->save();
                
            }
            
               $descrip = Recetas::select(\DB::raw('CONCAT(paciente.name, " ", paciente.app_name, " ", paciente.apm_name) AS usuario'), 'receta_medica.fechap', 'receta_medica.descripcionp', 
             'receta_medica.talla', 'receta_medica.peso', 'receta_medica.temp', 'receta_medica.receta', 'receta_medica.observaciones',
             \DB::raw('CONCAT(doctor.name, " ", doctor.app_name, " ", doctor.apm_name) AS doctores'))
                        ->join('users as paciente', 'receta_medica.id_paciente', '=', 'paciente.id')
                        ->join('users as doctor', 'receta_medica.id_doctor', '=', 'doctor.id')
                        ->where('receta_medica.id','=',$existe)
                        ->get();
              
           //            return view('pdf.recetas', compact('descrip'));           
           
            
             $view =  \View::make('pdf.recetas', compact('descrip'))->render();
      
             $pdf = \App::make('dompdf.wrapper');
                set_time_limit(60);
             $pdf->loadHTML($view)->setPaper('a4', 'landscape');  
                //$pdf->loadHTML($view)->setPaper('a4', 'portrait');  
                return $pdf->download('receta.pdf');
                
                //$url="recetaprocesoconsultadoctores";
              //return redirect()->to($url)->withStatus(__('Se agrego correctamente.')); 
           }
         }
         
         if($names=="RecetaImprimirCheckup"){

            $ids = \Auth::user()->id;
            $existe = Recetas::where('id_cita', '=', $request->cita)->value('id');
           // dd($existe);
            if($existe == null){
             $datos = Recetas::create([
                 'fechap' => $request->fechaP,
                 'fechac' => $request->fechaP,
                 'descripcionp' => $request->descripcionP,
                 'id_paciente' => $request->id_paciente,
                 'id_doctor' => $ids,
                 'edad' => $request->edad,
                 'talla' => $request->talla,
                 'peso' => $request->peso,
                 'temp' => $request->temp,
                 'ta' => $request->ta,
                 'fc' => $request->fc,
                 'fr' => $request->fr,
                 'expo_me' => $request->expo_me,
                 'indica' => $request->indica,
                 'id_cita' => $request->cita,
             ]);
          
                $url="recetaprocesoconsultadoctorescheckup";
              return redirect()->to($url)->withStatus(__('Se agrego correctamente.')); 
           }
           else{
                $url="recetaprocesoconsultadoctorescheckup";
              return redirect()->to($url)->withStatus(__('Ya tiene una receta.')); 
           }
         }
     
         if($names=="AgendarEstudios"){

             //dd($request->all());
             $dato=$names;
             $dato1=$request->name;
             $descrip=$request->indica;

             /*$view =  \View::make('pdf.agendarestudio', compact('descrip', 'dato1'))->render();
      
             $pdf = \App::make('dompdf.wrapper');
                set_time_limit(60);
                $pdf->loadHTML($view)->setPaper('a4', 'landscape');  
                //$pdf->loadHTML($view)->setPaper('a4', 'portrait');  
                //return $pdf->download($folio.'.pdf');
                return $pdf->stream('agendar');
              */
             $aest = AgendarEstudio::create([ 
                 'descripcion' => $request->indica,
                 'id_paciente' => $request->id_paciente,
                 'id_doctor' => $request->id_doctor,
                 'id_cita' => $request->cita,
                 'estado' => 1
             ]);
             
 
              return redirect()->to($url)->withStatus(__('Se agrego correctamente.'));

        }
        
         if($names=="AgendarEstudiosCheckup"){

             //dd($request->all());
             $dato=$names;
             $dato1=$request->name;
             $descrip=$request->indica;

             $aest = AgendarEstudio::create([ 
                 'descripcion' => $request->indica,
                 'id_paciente' => $request->id_paciente,
                 'id_doctor' => $request->id_doctor,
                 'id_cita' => $request->cita,
                 'estado' => 1
             ]);
             
              $url="recetaprocesoconsultadoctorescheckup";
              return redirect()->to($url)->withStatus(__('Se agrego correctamente.'));

        }
        
//ANEXOS-----------------------------------------------------------------------		
		 if ($names == "Anexo1") {
           
           $ids = \Auth::user()->id;
           $cita = Citas::where('id_doctor', '=', $ids)
                             ->where('cron_inicia', '!=', null)
                             ->where('cron_doctor', '!=', null)
                             ->where('cron_final', '=', null)
                             ->value('id');
                             
            $paciente = Citas::where('id', '=', $cita)->value("id_paciente");
                                
            $dato=$names;
            $anx1 = Anexo1::create([
                'anx1_hiper' => $request->anx1_hiper,
                'anx1_hiperSN' => $request->anx1_hiperSN,
                'anx1_cancer' => $request->anx1_cancer,
                'anx1_cancerSN' => $request->anx1_cancerSN,
                'anx1_gine' => $request->anx1_gine,
                'anx1_apari' => $request->anx1_apari,
                'anx1_otros' => $request->anx1_otros,
                'anx1_apari2' => $request->anx1_apari2,
                'anx1_diabetes' => $request->anx1_diabetes,
                'anx1_diabetesSN' => $request->anx1_diabetesSN,
                'anx1_patoTiro' => $request->anx1_patoTiro,
                'anx1_patoTiroSN' => $request->anx1_patoTiroSN,
                'anx1_otros2' => $request->anx1_otros2,
                'anx1_otros2SN' => $request->anx1_otros2SN,
                'anx1_TipoSangre' => $request->anx1_TipoSangre,
                'anx1_ejer' => $request->anx1_ejer,
                'anx1_ejerSN' => $request->anx1_ejerSN,
                'anx1_tabaquimo' => $request->anx1_tabaquimo,
                'anx1_tabaquimoSN' => $request->anx1_tabaquimoSN,
                'anx1_alcohol' => $request->anx1_alcohol,
                'anx1_alcoholSN' => $request->anx1_alcoholSN,
                'anx1_drogas' => $request->anx1_drogas,
                'anx1_drogasSN' => $request->anx1_drogasSN,
                'anx1_extre' => $request->anx1_extre,
                'anx1_extreSN' => $request->anx1_extreSN,
                'anx1_alergias' => $request->anx1_alergias,
                'anx1_cirugia' => $request->anx1_cirugia,
                'anx1_cirugiaSN' => $request->anx1_cirugiaSN,
                'anx1_trans' => $request->anx1_trans,
                'anx1_transSN' => $request->anx1_transSN,
                'anx1_infecciosa' => $request->anx1_infecciosa,
                'anx1_infecciosaSN' => $request->anx1_infecciosaSN,
                'anx1_CroDege' => $request->anx1_CroDege,
                'anx1_CroDegeSN' => $request->anx1_CroDegeSN,
                'anx1_trauma' => $request->anx1_trauma,
                'anx1_traumaSN' => $request->anx1_traumaSN,
                'anx1_gine2' => $request->anx1_gine2,
                'anx1_gine2SN' => $request->anx1_gine2SN,
                'anx1_menarca' => $request->anx1_menarca,
                'anx1_ritmo' => $request->anx1_ritmo,
                'anx1_cantidad' => $request->anx1_cantidad,
                'anx1_dolor' => $request->anx1_dolor,
                'anx1_toalla' => $request->anx1_toalla,
                'anx1_tratamiento' => $request->anx1_tratamiento,
                'anx1_fum' => $request->anx1_fum,
                'anx1_ivisa' => $request->anx1_ivisa,
                'anx1_parejas' => $request->anx1_parejas,
                'anx1_mpf' => $request->anx1_mpf,
                'anx1_gestas' => $request->anx1_gestas,
                'anx1_cesareas' => $request->anx1_cesareas,
                'anx1_partos' => $request->anx1_partos,
                'anx1_abortos' => $request->anx1_abortos,
                'anx1_ectopicos' => $request->anx1_ectopicos,
                'anx1_g1_año' => $request->anx1_g1_año,
                'anx1_g1_edadmat' => $request->anx1_g1_edadmat,
                'anx1_g1_durembara' => $request->anx1_g1_durembara,
                'anx1_g1_sexo' => $request->anx1_g1_sexo,
                'anx1_g1_peso' => $request->anx1_g1_peso,
                'anx1_g1_vivo' => $request->anx1_g1_vivo,
                'anx1_g1_resol' => $request->anx1_g1_resol,
                'anx1_g1_comp' => $request->anx1_g1_comp,
                'anx1_g1_lactancia' => $request->anx1_g1_lactancia,
                'anx1_g1_meses' => $request->anx1_g1_meses,
                'anx1_g2_año' => $request->anx1_g2_año,
                'anx1_g2_edadmat' => $request->anx1_g2_edadmat,
                'anx1_g2_durembara' => $request->anx1_g2_durembara,
                'anx1_g2_sexo' => $request->anx1_g2_sexo,
                'anx1_g2_peso' => $request->anx1_g2_peso,
                'anx1_g2_vivo' => $request->anx1_g2_vivo,
                'anx1_g2_resol' => $request->anx1_g2_resol,
                'anx1_g2_comp' => $request->anx1_g2_comp,
                'anx1_g2_lactancia' => $request->anx1_g2_lactancia,
                'anx1_g2_meses' => $request->anx1_g2_meses,
                'anx1_g3_año' => $request->anx1_g3_año,
                'anx1_g3_edadmat' => $request->anx1_g3_edadmat,
                'anx1_g3_durembara' => $request->anx1_g3_durembara,
                'anx1_g3_sexo' => $request->anx1_g3_sexo,
                'anx1_g3_peso' => $request->anx1_g3_peso,
                'anx1_g3_vivo' => $request->anx1_g3_vivo,
                'anx1_g3_resol' => $request->anx1_g3_resol,
                'anx1_g3_comp' => $request->anx1_g3_comp,
                'anx1_g3_lactancia' => $request->anx1_g3_lactancia,
                'anx1_g3_meses' => $request->anx1_g3_meses,
                'anx1_g4_año' => $request->anx1_g4_año,
                'anx1_g4_edadmat' => $request->anx1_g4_edadmat,
                'anx1_g4_durembara' => $request->anx1_g4_durembara,
                'anx1_g4_sexo' => $request->anx1_g4_sexo,
                'anx1_g4_peso' => $request->anx1_g4_peso,
                'anx1_g4_vivo' => $request->anx1_g4_vivo,
                'anx1_g4_resol' => $request->anx1_g4_resol,
                'anx1_g4_comp' => $request->anx1_g4_comp,
                'anx1_g4_lactancia' => $request->anx1_g4_lactancia,
                'anx1_g4_meses' => $request->anx1_g4_meses,
                'anx1_cervical' => $request->anx1_cervical,
                'anx1_docma' => $request->anx1_docma,
                'anx1_autoexp' => $request->anx1_autoexp,
                'anx1_usg' => $request->anx1_usg,
                'anx1_mastogra' => $request->anx1_mastogra,
                'anx1_menopausia' => $request->anx1_menopausia,
                'anx1_inferti' => $request->anx1_inferti,
                'anx1_esquemaVPH' => $request->anx1_esquemaVPH,
                'anx1_DOSIS' => $request->anx1_DOSIS,
                'anx1_explF' => $request->anx1_explF,
                'anx1_EGL' => $request->anx1_EGL,
                'anx1_impresionD' => $request->anx1_impresionD,
                'anx1_tratamiento1' => $request->anx1_tratamiento1,
                'anx1_Pmedico' => $request->anx1_Pmedico,
                'anx1_pronos' => $request->anx1_pronos,
                'anx1_fun' => $request->anx1_fun,
                'id_paciente' => $paciente,
                'id_doctor' => $ids,
                'id_cita' => $cita
            ]);

            return redirect()->to("consultaprocesoconsultadoctores")->withStatus(__('Se agrego correctamente.'));
        }

         if ($names == "Anexo2") {

           $ids = \Auth::user()->id;
           $cita = Citas::where('id_doctor', '=', $ids)
                             ->where('cron_inicia', '!=', null)
                             ->where('cron_doctor', '!=', null)
                             ->where('cron_final', '=', null)
                             ->value('id');
                             
            $paciente = Citas::where('id', '=', $cita)->value("id_paciente");
           
            $dato=$names;
            $anex2 = Anexo2::create([
                'anx2_consumo_lt' =>$request->anx2_consumo_lt,
                'anx2_urina_urgen_1' =>$request->anx2_urina_urgen_1,
                'anx2_TiempoE' =>$request->anx2_TiempoE,
                'anx2_Frecuencia' =>$request->anx2_Frecuencia,
                'anx2_Cantidadp' =>$request->anx2_Cantidadp,
                'anx2_IUE' =>$request->anx2_IUE,
                'anx2_TiempoE2' =>$request->anx2_TiempoE2,
                'anx2_Frecuencia2' =>$request->anx2_Frecuencia2,
                'anx2_Cantidadp2' =>$request->anx2_Cantidadp2,
                'anx2_CMiccional' =>$request->anx2_CMiccional,
                'anx2_SVaciamiento' =>$request->anx2_SVaciamiento,
                'anx2_Disuria' =>$request->anx2_Disuria,
                'anx2_Hematuria' =>$request->anx2_Hematuria,
                'anx2_SCE' =>$request->anx2_SCE,
                'anx2_Rvaginal' =>$request->anx2_Rvaginal,
                'anx2_ardor' =>$request->anx2_ardor,
                'anx2_prurito' =>$request->anx2_prurito,
                'anx2_estre' =>$request->anx2_estre,
                'anx2_Claxantes' =>$request->anx2_Claxantes,
                'anx2_evacuacion' =>$request->anx2_evacuacion,
                'anx2_IFH' =>$request->anx2_IFH,
                'anx2_VSA' =>$request->anx2_VSA,
                'anx2_dispa' =>$request->anx2_dispa,
                'anx2_pene_orga' =>$request->anx2_pene_orga,
                'anx2_ReflejosPe' =>$request->anx2_ReflejosPe,
                'anx2_PTV' =>$request->anx2_PTV,
                'anx2_AtroVagi' =>$request->anx2_AtroVagi,
                'anx2_notas' =>$request->anx2_notas,
                'id_paciente' => $paciente,
                'id_doctor' => $ids,
                'id_cita' => $cita
            ]);
                return redirect()->to($url)->withStatus(__('Se agrego correctamente.'));
        }

         if ($names == "Anexo3") {

            $ids = \Auth::user()->id;
           $cita = Citas::where('id_doctor', '=', $ids)
                             ->where('cron_inicia', '!=', null)
                             ->where('cron_doctor', '!=', null)
                             ->where('cron_final', '=', null)
                             ->value('id');
                             
            $paciente = Citas::where('id', '=', $cita)->value("id_paciente");
           
            $dato=$names;
            $dato1=$request->cita;
            //dd( $dato1);
            $anx3 = Anexo3::create([
                'anx3_Ciclos_mes' => $request->anx3_Ciclos_mes,
                'anx3_cantidad_sangrado_mes' => $request->anx3_cantidad_sangrado_mes,
                'anx3_nume_toalla_x_dia' => $request->anx3_nume_toalla_x_dia,
                'anx_dismenorrea' => $request->anx_dismenorrea,
                'anx3_caida_pelo' => $request->anx3_caida_pelo,
                'anx3_reseque_piel' => $request->anx3_reseque_piel,
                'anx3_bochornos' => $request->anx3_bochornos,
                'anx3_tiempo_evolucion_bocho' => $request->anx3_tiempo_evolucion_bocho,
                'anx3_sudoracion' => $request->anx3_sudoracion,
                'anx3_tiempo_evolucion_sudo' => $request->anx3_tiempo_evolucion_sudo,
                'anx3_labilidad' => $request->anx3_labilidad,
                'anx3_irratibilidad' => $request->anx3_irratibilidad,
                'anx3_ansiedad' => $request->anx3_ansiedad,
                'anx3_nerviosismo' => $request->anx3_nerviosismo,
                'anx3_cefalea' => $request->anx3_cefalea,
                'anx3_insomnio' => $request->anx3_insomnio,
                'anx3_alteracion_libido' => $request->anx3_alteracion_libido,
                'anx3_incontinecia_urinaria' => $request->anx3_incontinecia_urinaria,
                'anx3_resequedad_vaginal' => $request->anx3_resequedad_vaginal,
                'anx3_notas' => $request->anx3_notas,
                'id_paciente' => $paciente,
                'id_doctor' => $ids,
                'id_cita' => $cita
            ]);

            return redirect()->to($url)->withStatus(__('Se agrego correctamente.'));
        }

         if ($names == "Anexo4") {
             
           $ids = \Auth::user()->id;
           $cita = Citas::where('id_doctor', '=', $ids)
                             ->where('cron_inicia', '!=', null)
                             ->where('cron_doctor', '!=', null)
                             ->where('cron_final', '=', null)
                             ->value('id');
                             
            $paciente = Citas::where('id', '=', $cita)->value("id_paciente");
           

            $dato=$names;
            $dato1=$request->cita;
            //dd( $dato);
            $anx4 = Anexo4::create([
                'anx4_num_fetos' => $request->anx4_num_fetos,
                'anx4_coriocidad' => $request->anx4_coriocidad,
                'anx4_loca_feto1' => $request->anx4_loca_feto1,
                'anx4_feto1_lcc' => $request->anx4_feto1_lcc,
                'anx4_feto1_mm' => $request->anx4_feto1_mm,
                'anx4_feto1_fcf' => $request->anx4_feto1_fcf,
                'anx4_feto1_tras_nucal' => $request->anx4_feto1_tras_nucal,
                'anx4_feto1_tras_nuca_1' => $request->anx4_feto1_tras_nuca_1,
                'anx4_feto1_tras_nuca_2' => $request->anx4_feto1_tras_nuca_2,
                'anx4_feto1_ip_venoso' => $request->anx4_feto1_ip_venoso,
                'anx4_feto1_onda_a' => $request->anx4_feto1_onda_a,
                'anx4_feto1_hueso_nasal' => $request->anx4_feto1_hueso_nasal,
                'anx4_feto1_hueso_nasal_au' => $request->anx4_feto1_hueso_nasal_au,
                'anx4_feto1_triscu' => $request->anx4_feto1_triscu,
                'anx4_feto1_triscu_au' => $request->anx4_feto1_triscu_au,
                'anx4_feto1_defectos_mayo' => $request->anx4_feto1_defectos_mayo,
                'anx4_feto1_placenta' => $request->anx4_feto1_placenta,
                'anx4_feto1_trisomia21_uno' => $request->anx4_feto1_trisomia21_uno,
                'anx4_feto1_trisomia21_dos' => $request->anx4_feto1_trisomia21_dos,
                'anx4_feto1_trisomia21_tres' => $request->anx4_feto1_trisomia21_tres,
                'anx4_feto1_trisomia18_uno' => $request->anx4_feto1_trisomia18_uno,
                'anx4_feto1_trisomia18_dos' => $request->anx4_feto1_trisomia18_dos,
                'anx4_feto1_trisomia18_tres' => $request->anx4_feto1_trisomia18_tres,
                'anx4_feto1_trisomia13_uno' => $request->anx4_feto1_trisomia13_uno,
                'anx4_feto1_trisomia13_dos' => $request->anx4_feto1_trisomia13_dos,
                'anx4_feto1_trisomia13_tres' => $request->anx4_feto1_trisomia13_tres,
                'anx4_loca_feto2' => $request->anx4_loca_feto2,
                'anx4_feto2_lcc' => $request->anx4_feto2_lcc,
                'anx4_feto2_mm' => $request->anx4_feto2_mm,
                'anx4_feto2_fcf' => $request->anx4_feto2_fcf,
                'anx4_feto2_tras_nucal' => $request->anx4_feto2_tras_nucal,
                'anx4_feto2_tras_nuca_1' => $request->anx4_feto2_tras_nuca_1,
                'anx4_feto2_tras_nuca_2' => $request->anx4_feto2_tras_nuca_2,
                'anx4_feto2_ip_venoso' => $request->anx4_feto2_ip_venoso,
                'anx4_feto2_onda_a' => $request->anx4_feto2_onda_a,
                'anx4_feto2_hueso_nasal' => $request->anx4_feto2_hueso_nasal,
                'anx4_feto2_hueso_nasal_au' => $request->anx4_feto2_hueso_nasal_au,
                'anx4_feto2_triscu' => $request->anx4_feto2_triscu,
                'anx4_feto2_triscu_au' => $request->anx4_feto2_triscu_au,
                'anx4_feto2_defectos_mayo' => $request->anx4_feto2_defectos_mayo,
                'anx4_feto2_placenta' => $request->anx4_feto2_placenta,
                'anx4_feto2_trisomia21_uno' => $request->anx4_feto2_trisomia21_uno,
                'anx4_feto2_trisomia21_dos' => $request->anx4_feto2_trisomia21_dos,
                'anx4_feto2_trisomia21_tres' => $request->anx4_feto2_trisomia21_tres,
                'anx4_feto2_trisomia18_uno' => $request->anx4_feto2_trisomia18_uno,
                'anx4_feto2_trisomia18_dos' => $request->anx4_feto2_trisomia18_dos,
                'anx4_feto2_trisomia18_tres' => $request->anx4_feto2_trisomia18_tres,
                'anx4_feto2_trisomia13_uno' => $request->anx4_feto2_trisomia13_uno,
                'anx4_feto2_trisomia13_dos' => $request->anx4_feto2_trisomia13_dos,
                'anx4_feto2_trisomia13_tres' => $request->anx4_feto2_trisomia13_tres,
                'anx4_loca_feto3' => $request->anx4_loca_feto3,
                'anx4_feto3_lcc' => $request->anx4_feto3_lcc,
                'anx4_feto3_mm' => $request->anx4_feto3_mm,
                'anx4_feto3_fcf' => $request->anx4_feto3_fcf,
                'anx4_feto3_tras_nucal' => $request->anx4_feto3_tras_nucal,
                'anx4_feto3_tras_nuca_1' => $request->anx4_feto3_tras_nuca_1,
                'anx4_feto3_tras_nuca_2' => $request->anx4_feto3_tras_nuca_2,
                'anx4_feto3_ip_venoso' => $request->anx4_feto3_ip_venoso,
                'anx4_feto3_onda_a' => $request->anx4_feto3_onda_a,
                'anx4_feto3_hueso_nasal' => $request->anx4_feto3_hueso_nasal,
                'anx4_feto3_hueso_nasal_au' => $request->anx4_feto3_hueso_nasal_au,
                'anx4_feto3_triscu' => $request->anx4_feto3_triscu,
                'anx4_feto3_triscu_au' => $request->anx4_feto3_triscu_au,
                'anx4_feto3_defectos_mayo' => $request->anx4_feto3_defectos_mayo,
                'anx4_feto3_placenta' => $request->anx4_feto3_placenta,
                'anx4_feto3_trisomia21_uno' => $request->anx4_feto3_trisomia21_uno,
                'anx4_feto3_trisomia21_dos' => $request->anx4_feto3_trisomia21_dos,
                'anx4_feto3_trisomia21_tres' => $request->anx4_feto3_trisomia21_tres,
                'anx4_feto3_trisomia18_uno' => $request->anx4_feto3_trisomia18_uno,
                'anx4_feto3_trisomia18_dos' => $request->anx4_feto3_trisomia18_dos,
                'anx4_feto3_trisomia18_tres' => $request->anx4_feto3_trisomia18_tres,
                'anx4_feto3_trisomia13_uno' => $request->anx4_feto3_trisomia13_uno,
                'anx4_feto3_trisomia13_dos' => $request->anx4_feto3_trisomia13_dos,
                'anx4_feto3_trisomia13_tres' => $request->anx4_feto3_trisomia13_tres,
                'anx4_ip_uterina_dere' => $request->anx4_ip_uterina_dere,
                'anx4_ip_uterina_izq' => $request->anx4_ip_uterina_izq,
                'anx4_ip_medio_arterias' => $request->anx4_ip_medio_arterias,
                'anx4_noth_si' => $request->anx4_noth_si,
                'anx4_noth_si_2' => $request->anx4_noth_si_2,
                'id_paciente' => $paciente,
                'id_doctor' => $ids,
                'id_cita' => $cita
            ]);

            return redirect()->to($url)->withStatus(__('Se agrego correctamente.'));
        }
        
         if ($names == "Anexo5") {

            $ids = \Auth::user()->id;
           $cita = Citas::where('id_doctor', '=', $ids)
                             ->where('cron_inicia', '!=', null)
                             ->where('cron_doctor', '!=', null)
                             ->where('cron_final', '=', null)
                             ->value('id');
                             
            $paciente = Citas::where('id', '=', $cita)->value("id_paciente");
           
            $dato=$names;
            $dato1=$request->cita;
            //dd( $dato);
            $anx5 = Anexo5::create([
                'id' => $request->id,
                'anx5_Alimentos_que_malestar' => $request->anx5_Alimentos_que_malestar,
                'anx5_alergico_alimento' => $request->anx5_alergico_alimento,
                'anx5_suplemento' => $request->anx5_suplemento,
                'anx5_suplemento_cual' => $request->anx5_suplemento_cual,
                'anx5_dosis' => $request->anx5_dosis,
                'anx5_dosis_cual' => $request->anx5_dosis_cual,
                'anx5_dosis_1' => $request->anx5_dosis_1,
                'anx5_dosis_cual_1' => $request->anx5_dosis_cual_1,
                'anx5_dosis_2' => $request->anx5_dosis_2,
                'anx5_dosis_3' => $request->anx5_dosis_3,
                'anx5_consumo' => $request->anx5_consumo,
                'anx5_como' => $request->anx5_como,
                'anx5_comida_preparada' => $request->anx5_comida_preparada,
                'anx5_grasa_utili' => $request->anx5_grasa_utili,
                'anx5_dieta_especial' => $request->anx5_dieta_especial,
                'anx5_cuantas' => $request->anx5_cuantas,
                'anx5_tipo_dieta' => $request->anx5_tipo_dieta,
                'anx5_hace_cuanto' => $request->anx5_hace_cuanto,
                'anx5_por_cuanto_tiempo' => $request->anx5_por_cuanto_tiempo,
                'anx5_por_que_razon' => $request->anx5_por_que_razon,
                'anx5_se_apego_ella' => $request->anx5_se_apego_ella,
                'anx5_resultados_esperados' => $request->anx5_resultados_esperados,
                'anx5_kg_perdidos' => $request->anx5_kg_perdidos,
                'anx5_peso_logrado' => $request->anx5_peso_logrado,
                'anx5_medicamento_bajar_peso' => $request->anx5_medicamento_bajar_peso,
                'anx5_cuales' => $request->anx5_cuales,
                'anx5_por_cuanto_tiempo_1' => $request->anx5_por_cuanto_tiempo_1,
                'anx5_plan' => $request->anx5_plan,
                'anx5_peso_logrado_1' => $request->anx5_peso_logrado_1,
                'anx5_lunes_desayuno' => $request->anx5_lunes_desayuno,
                'anx5_lunes_colacion' => $request->anx5_lunes_colacion,
                'anx5_lunes_comida' => $request->anx5_lunes_comida,
                'anx5_lunes_colacion_1' => $request->anx5_lunes_colacion_1,
                'anx5_lunes_cena' => $request->anx5_lunes_cena,
                'anx5_martes_desayuno' => $request->anx5_martes_desayuno,
                'anx5_martes_colacion' => $request->anx5_martes_colacion,
                'anx5_martes_comida' => $request->anx5_martes_comida,
                'anx5_martes_colacion_1' => $request->anx5_martes_colacion_1,
                'anx5_martes_cena' => $request->anx5_martes_cena,
                'anx5_miercoles_desayuno' => $request->anx5_miercoles_desayuno,
                'anx5_miercoles_colacion' => $request->anx5_miercoles_colacion,
                'anx5_miercoles_comida' => $request->anx5_miercoles_comida,
                'anx5_miercoles_colacion_1' => $request->anx5_miercoles_colacion_1,
                'anx5_miercoles_cena' => $request->anx5_miercoles_cena,
                'anx5_jueves_desayuno' => $request->anx5_jueves_desayuno,
                'anx5_jueves_colacion' => $request->anx5_jueves_colacion,
                'anx5_jueves_comida' => $request->anx5_jueves_comida,
                'anx5_jueves_colacion_1' => $request->anx5_jueves_colacion_1,
                'anx5_jueves_cena' => $request->anx5_jueves_cena,
                'anx5_viernes_desayuno' => $request->anx5_viernes_desayuno,
                'anx5_viernes_colacion' => $request->anx5_viernes_colacion,
                'anx5_viernes_comida' => $request->anx5_viernes_comida,
                'anx5_viernes_colacion_1' => $request->anx5_viernes_colacion_1,
                'anx5_viernes_cena' => $request->anx5_viernes_cena,
                'anx5_ANTROPOMETRICOS_edad' => $request->anx5_ANTROPOMETRICOS_edad,
                'anx5_ANTROPOMETRICOS_indicador' => $request->anx5_ANTROPOMETRICOS_indicador,
                'anx5_ANTROPOMETRICOS_talla' => $request->anx5_ANTROPOMETRICOS_talla,
                'anx5_ANTROPOMETRICOS_peso_ges' => $request->anx5_ANTROPOMETRICOS_peso_ges,
                'anx5_ANTROPOMETRICOS_imc' => $request->anx5_ANTROPOMETRICOS_imc,
                'anx5_ANTROPOMETRICOS_peso_final' => $request->anx5_ANTROPOMETRICOS_peso_final,
                'anx5_ANTROPOMETRICOS_peso_2_3' => $request->anx5_ANTROPOMETRICOS_peso_2_3,
                'anx5_ANTROPOMETRICOS_notas' => $request->anx5_ANTROPOMETRICOS_notas,
                'id_paciente' => $paciente,
                'id_doctor' => $ids,
                'id_cita' => $cita
            ]);

            return redirect()->to($url)->withStatus(__('Se agrego correctamente.'));
        }

         if ($names == "Anexo6") {
             
           $ids = \Auth::user()->id;
           $cita = Citas::where('id_doctor', '=', $ids)
                             ->where('cron_inicia', '!=', null)
                             ->where('cron_doctor', '!=', null)
                             ->where('cron_final', '=', null)
                             ->value('id');
                             
            $paciente = Citas::where('id', '=', $cita)->value("id_paciente");
           
            $dato=$names;
            $dato1=$request->cita;
            //dd($dato);
            $anx6 = Anexo6::create([
                'anx6_fecha' => $request->anx6_fecha,
                'anx6_expediente' => $request->anx6_expediente,
                'anx6_peso_mini' => $request->anx6_peso_mini,
                'anx6_cuanto_durante_tiempo' => $request->anx6_cuanto_durante_tiempo,
                'anx6_peso_maximo' => $request->anx6_peso_maximo,
                'anx6_cuanto_durante_tiempo2' => $request->anx6_cuanto_durante_tiempo2,
                'anx6_peso_habi' => $request->anx6_peso_habi,
                'anx6_diarrea' => $request->anx6_diarrea,
                'anx6_estre' => $request->anx6_estre,
                'anx6_gastritis' => $request->anx6_gastritis,
                'anx6_ulcera' => $request->anx6_ulcera,
                'anx6_nauseas' => $request->anx6_nauseas,
                'anx6_pirosis' => $request->anx6_pirosis,
                'anx6_vomito' => $request->anx6_vomito,
                'anx6_colitis' => $request->anx6_colitis,
                'anx6_dentadura' => $request->anx6_dentadura,
                'anx6_otros' => $request->anx6_otros,
                'anx6_observaciones' => $request->anx6_observaciones,
                'anx6_pade_enfer_diag' => $request->anx6_pade_enfer_diag,
                'anx6_pade_enfer_impor_' => $request->anx6_pade_enfer_impor_,
                'anx6_toma_medica' => $request->anx6_toma_medica,
                'anx6_cual' => $request->anx6_cual,
                'anx6_dosis' => $request->anx6_dosis,
                'anx6_desde_cuando' => $request->anx6_desde_cuando,
                'anx6_cual_2' => $request->anx6_cual_2,
                'anx6_dosis_2' => $request->anx6_dosis_2,
                'anx6_desde_cuando_2' => $request->anx6_desde_cuando_2,
                'anx6_cual_3' => $request->anx6_cual_3,
                'anx6_dosis_3' => $request->anx6_dosis_3,
                'anx6_desde_cuando_3' => $request->anx6_desde_cuando_3,
                'anx6_laxantes' => $request->anx6_laxantes,
                'anx6_diureticos' => $request->anx6_diureticos,
                'anx6_antiacidos' => $request->anx6_antiacidos,
                'anx6_analge' => $request->anx6_analge,
                'anx6_practi_cirugia' => $request->anx6_practi_cirugia,
                'anx6_obesidad' => $request->anx6_obesidad,
                'anx6_diabetes' => $request->anx6_diabetes,
                'anx6_hta' => $request->anx6_hta,
                'anx6_cancer' => $request->anx6_cancer,
                'anx6_hipercoles' => $request->anx6_hipercoles,
                'anx6_hipertri' => $request->anx6_hipertri,
                'anx6_TA' => $request->anx6_TA,
                'anx6_embarazo_actual' => $request->anx6_embarazo_actual,
                'anx6_sema_gesta' => $request->anx6_sema_gesta,
                'anx6_peso_pregestacional' => $request->anx6_peso_pregestacional,
                'anx6_anti_orales' => $request->anx6_anti_orales,
                'anx6_cual_4' => $request->anx6_cual_4,
                'anx6_dosis_4' => $request->anx6_dosis_4,
                'anx6_SX' => $request->anx6_SX,
                'anx6_climaterio' => $request->anx6_climaterio,
                'anx6_fecha_2' => $request->anx6_fecha_2,
                'anx6_tera_hormo' => $request->anx6_tera_hormo,
                'anx6_cual_5' => $request->anx6_cual_5,
                'anx6_dosis_5' => $request->anx6_dosis_5,
                'anx6_SX_2' => $request->anx6_SX_2,
                'anx6_profesion' => $request->anx6_profesion,
                'anx6_ejercicio' => $request->anx6_ejercicio,
                'anx6_dias_horas_ejercicio' => $request->anx6_dias_horas_ejercicio,
                'anx6_alcohol' => $request->anx6_alcohol,
                'anx6_tabaco' => $request->anx6_tabaco,
                'anx6_cafe' => $request->anx6_cafe,
                'anx6_laboratorios' => $request->anx6_laboratorios,
                'anx6_relevantes' => $request->anx6_relevantes,
                'anx6_analisis' => $request->anx6_analisis,
                'anx6_cuales_6' => $request->anx6_cuales_6,
                'anx6_dia' => $request->anx6_dia,
                'anx6_glucosa' => $request->anx6_glucosa,
                'anx6_glucosa_capilar' => $request->anx6_glucosa_capilar,
                'anx6_dia_2' => $request->anx6_dia_2,
                'anx6_gluco' => $request->anx6_gluco,
                'anx6_dia_3' => $request->anx6_dia_3,
                'anx6_glu' => $request->anx6_glu,
                'anx6_comidas_al_dia' => $request->anx6_comidas_al_dia,
                'anx6_prepar_alimento' => $request->anx6_prepar_alimento,
                'anx6_come_entre_comidas' => $request->anx6_come_entre_comidas,
                'anx6_que' => $request->anx6_que,
                'anx6_ultimo_seis_mes_alime' => $request->anx6_ultimo_seis_mes_alime,
                'anx6_porque' => $request->anx6_porque,
                'anx6_como' => $request->anx6_como,
                'anx6_apetito' => $request->anx6_apetito,
                'anx6_hora_tiene_ham' => $request->anx6_hora_tiene_ham,
                'anx6_alimentos_preferidos' => $request->anx6_alimentos_preferidos,
                'anx6_ali_no_acostu' => $request->anx6_ali_no_acostu,
                'anx6_alergico_alimen' => $request->anx6_alergico_alimen,
                'anx6_toma_suple' => $request->anx6_toma_suple,
                'anx6_cual_7' => $request->anx6_cual_7,
                'anx6_dosis_6' => $request->anx6_dosis_6,
                'anx6_porque_2' => $request->anx6_porque_2,
                'anx6_consumo_ansio' => $request->anx6_consumo_ansio,
                'anx6_sal_comida' => $request->anx6_sal_comida,
                'anx6_grasa' => $request->anx6_grasa,
                'anx6_dieta_espe' => $request->anx6_dieta_espe,
                'anx6_cuantas_2' => $request->anx6_cuantas_2,
                'anx6_tipo_dieta' => $request->anx6_tipo_dieta,
                'anx6_hace_cuanto' => $request->anx6_hace_cuanto,
                'anx6_porcuanto_tiempo' => $request->anx6_porcuanto_tiempo,
                'anx6_porque_razon' => $request->anx6_porque_razon,
                'anx6_apego_ella' => $request->anx6_apego_ella,
                'anx6_resultados_espe' => $request->anx6_resultados_espe,
                'anx6_kg_perdidos' => $request->anx6_kg_perdidos,
                'anx6_peso_logrado' => $request->anx6_peso_logrado,
                'anx6_medi_bajar_peso' => $request->anx6_medi_bajar_peso,
                'anx6_cuales_3' => $request->anx6_cuales_3,
                'anx6_por_que_tiempo' => $request->anx6_por_que_tiempo,
                'anx6_edad' => $request->anx6_edad,
                'anx6_peso_mini_2' => $request->anx6_peso_mini_2,
                'anx6_indicador' => $request->anx6_indicador,
                'anx6_peso_max' => $request->anx6_peso_max,
                'anx6_peso_ideal' => $request->anx6_peso_ideal,
                'anx6_sem_1' => $request->anx6_sem_1,
                'anx6_sem_2' => $request->anx6_sem_2,
                'anx6_sem_3' => $request->anx6_sem_3,
                'anx6_sem_4' => $request->anx6_sem_4,
                'anx6_sem_total' => $request->anx6_sem_total,
                'anx6_sem_5' => $request->anx6_sem_5,
                'anx6_sem_6' => $request->anx6_sem_6,
                'anx6_sem_7' => $request->anx6_sem_7,
                'anx6_sem_8' => $request->anx6_sem_8,
                'anx6_sem_total_9' => $request->anx6_sem_total_9,
                'anx6_talla_1' => $request->anx6_talla_1,
                'anx6_talla_2' => $request->anx6_talla_2,
                'anx6_talla_3' => $request->anx6_talla_3,
                'anx6_talla_4' => $request->anx6_talla_4,
                'anx6_talla_5' => $request->anx6_talla_5,
                'anx6_talla_6' => $request->anx6_talla_6,
                'anx6_talla_7' => $request->anx6_talla_7,
                'anx6_talla_8' => $request->anx6_talla_8,
                'anx6_talla_9' => $request->anx6_talla_9,
                'anx6_talla_10' => $request->anx6_talla_10,
                'anx6_peso_1' => $request->anx6_peso_1,
                'anx6_peso_2' => $request->anx6_peso_2,
                'anx6_peso_3' => $request->anx6_peso_3,
                'anx6_peso_4' => $request->anx6_peso_4,
                'anx6_peso_5' => $request->anx6_peso_5,
                'anx6_peso_6' => $request->anx6_peso_6,
                'anx6_peso_7' => $request->anx6_peso_7,
                'anx6_peso_8' => $request->anx6_peso_8,
                'anx6_peso_9' => $request->anx6_peso_9,
                'anx6_peso_10' => $request->anx6_peso_10,
                'anx6_cintura_1' => $request->anx6_cintura_1,
                'anx6_cintura_2' => $request->anx6_cintura_2,
                'anx6_cintura_3' => $request->anx6_cintura_3,
                'anx6_cintura_4' => $request->anx6_cintura_4,
                'anx6_cintura_5' => $request->anx6_cintura_5,
                'anx6_cintura_6' => $request->anx6_cintura_6,
                'anx6_cintura_7' => $request->anx6_cintura_7,
                'anx6_cintura_8' => $request->anx6_cintura_8,
                'anx6_cintura_9' => $request->anx6_cintura_9,
                'anx6_cintura_10' => $request->anx6_cintura_10,
                'anx6_abdomen_1' => $request->anx6_abdomen_1,
                'anx6_abdomen_2' => $request->anx6_abdomen_2,
                'anx6_abdomen_3' => $request->anx6_abdomen_3,
                'anx6_abdomen_4' => $request->anx6_abdomen_4,
                'anx6_abdomen_5' => $request->anx6_abdomen_5,
                'anx6_abdomen_6' => $request->anx6_abdomen_6,
                'anx6_abdomen_7' => $request->anx6_abdomen_7,
                'anx6_abdomen_8' => $request->anx6_abdomen_8,
                'anx6_abdomen_9' => $request->anx6_abdomen_9,
                'anx6_abdomen_10' => $request->anx6_abdomen_10,
                'anx6_cadera_1' => $request->anx6_cadera_1,
                'anx6_cadera_2' => $request->anx6_cadera_2,
                'anx6_cadera_3' => $request->anx6_cadera_3,
                'anx6_cadera_4' => $request->anx6_cadera_4,
                'anx6_cadera_5' => $request->anx6_cadera_5,
                'anx6_cadera_6' => $request->anx6_cadera_6,
                'anx6_cadera_7' => $request->anx6_cadera_7,
                'anx6_cadera_8' => $request->anx6_cadera_8,
                'anx6_cadera_9' => $request->anx6_cadera_9,
                'anx6_cadera_10' => $request->anx6_cadera_10,
                'anx6_IMC_1' => $request->anx6_IMC_1,
                'anx6_IMC_2' => $request->anx6_IMC_2,
                'anx6_IMC_3' => $request->anx6_IMC_3,
                'anx6_IMC_4' => $request->anx6_IMC_4,
                'anx6_IMC_5' => $request->anx6_IMC_5,
                'anx6_IMC_6' => $request->anx6_IMC_6,
                'anx6_IMC_7' => $request->anx6_IMC_7,
                'anx6_IMC_8' => $request->anx6_IMC_8,
                'anx6_IMC_9' => $request->anx6_IMC_9,
                'anx6_IMC_10' => $request->anx6_IMC_10,
                'anx6_notas' => $request->anx6_notas,
                'id_paciente' => $paciente,
                'id_doctor' => $ids,
                'id_cita' => $cita
            ]);

            return redirect()->to($url)->withStatus(__('Se agrego correctamente.'));
        }

         if ($names == "Anexo8") {
             
           $ids = \Auth::user()->id;
           $cita = Citas::where('id_doctor', '=', $ids)
                             ->where('cron_inicia', '!=', null)
                             ->where('cron_doctor', '!=', null)
                             ->where('cron_final', '=', null)
                             ->value('id');
                             
            $paciente = Citas::where('id', '=', $cita)->value("id_paciente");
           
            $dato=$names;
            $dato1=$request->cita;
            //dd($dato);
            $anx8 = Anexo8::create([
                'anx8_tiempo_b_emb' => $request->anx8_tiempo_b_emb,
                'anx8_frecu_coital' => $request->anx8_frecu_coital,
                'anx8_penetracion' => $request->anx8_penetracion,
                'anx8_dispareunia' => $request->anx8_dispareunia,
                'anx8_eyacu_vagi' => $request->anx8_eyacu_vagi,
                'anx8_dismenorrea' => $request->anx8_dismenorrea,
                'anx8_edad' => $request->anx8_edad,
                'anx8_pater_comprobada' => $request->anx8_pater_comprobada,
                'anx8_ocupacion' => $request->anx8_ocupacion,
                'anx8_trauma_testicular' => $request->anx8_trauma_testicular,
                'anx8_Ante_paro_medicos' => $request->anx8_Ante_paro_medicos,
                'anx8_ebd_previas' => $request->anx8_ebd_previas,
                'anx8_cirujias_abodominales' => $request->anx8_cirujias_abodominales,
                'anx8_infecc_vagi_repe' => $request->anx8_infecc_vagi_repe,
                'anx8_ciclos' => $request->anx8_ciclos,
                'anx8_cantidad' => $request->anx8_cantidad,
                'anx8_infec_vagi_repe2' => $request->anx8_infec_vagi_repe2,
                'anx8_ultimo_papani' => $request->anx8_ultimo_papani,
                'anx8_ante_cervi' => $request->anx8_ante_cervi,
                'anx8_ante_uterinas' => $request->anx8_ante_uterinas,
                'anx8_notas' => $request->anx8_notas,
                'id_paciente' => $paciente,
                'id_doctor' => $ids,
                'id_cita' => $cita
            ]);

            return redirect()->to($url)->withStatus(__('Se agrego correctamente.'));
        }

         if ($names == "Anexo9") {
             
           $ids = \Auth::user()->id;
           $cita = Citas::where('id_doctor', '=', $ids)
                             ->where('cron_inicia', '!=', null)
                             ->where('cron_doctor', '!=', null)
                             ->where('cron_final', '=', null)
                             ->value('id');
                             
            $paciente = Citas::where('id', '=', $cita)->value("id_paciente");

            $dato=$names;
            $dato1=$request->cita;
            //dd($dato);
            $anx9 = Anexo9::create([
                'anx9_pocision' => $request->anx9_pocision,
                'anx9_OCE' => $request->anx9_OCE,
                'anx9_permeabiliza' => $request->anx9_permeabiliza,
                'anx9_Canal_Endocervical' => $request->anx9_Canal_Endocervical,
                'anx9_permeabiliza_2' => $request->anx9_permeabiliza_2,
                'anx9_Epitelio_glandular' => $request->anx9_Epitelio_glandular,
                'anx9_OCI' => $request->anx9_OCI,
                'anx9_permeabiliza_3' => $request->anx9_permeabiliza_3,
                'anx9_OCE_1' => $request->anx9_OCE_1,
                'anx9_Posicion_1' => $request->anx9_Posicion_1,
                'anx9_Distension' => $request->anx9_Distension,
                'anx9_Tamaño' => $request->anx9_Tamaño,
                'anx9_Forma' => $request->anx9_Forma,
                'anx9_Defectos' => $request->anx9_Defectos,
                'anx9_Poliferativo' => $request->anx9_Poliferativo,
                'anx9_Secretor' => $request->anx9_Secretor,
                'anx9_Anormal' => $request->anx9_Anormal,
                'anx9_Visible' => $request->anx9_Visible,
                'anx9_Permeable' => $request->anx9_Permeable,
                'anx9_Visible_izq' => $request->anx9_Visible_izq,
                'anx9_Permeable_izq' => $request->anx9_Permeable_izq,
                'anx9_Diagnostico' => $request->anx9_Diagnostico,
                'anx9_Tom_biopsia' => $request->anx9_Tom_biopsia,
                'anx9_Colocación_DIU' => $request->anx9_Colocación_DIU,
                'anx9_Resultado_biopsia' => $request->anx9_Resultado_biopsia,
                'anx9_Plan_quirúrgico' => $request->anx9_Plan_quirúrgico,
                'anx9_Notas' => $request->anx9_Notas,
                'id_paciente' => $paciente,
                'id_doctor' => $ids,
                'id_cita' => $cita
            ]);

            return redirect()->to($url)->withStatus(__('Se agrego correctamente.'));
        }

         if ($names == "Anexo10") {
             
           $ids = \Auth::user()->id;
           $cita = Citas::where('id_doctor', '=', $ids)
                             ->where('cron_inicia', '!=', null)
                             ->where('cron_doctor', '!=', null)
                             ->where('cron_final', '=', null)
                             ->value('id');
                             
            $paciente = Citas::where('id', '=', $cita)->value("id_paciente");

            $dato=$names;

            $dato1=$request->cita;
            // dd($dato1);
            $anx10 = Anexo10::create([
                'anx10_ht_oncologia' => $request->anx10_ht_oncologia,
                'anx10_menarca' => $request->anx10_menarca,
                'anx10_embarazo' => $request->anx10_embarazo,
                'anx10_lmaterna' => $request->anx10_lmaterna,
                'anx10_uso_hormonales' => $request->anx10_uso_hormonales,
                'anx10_notas' => $request->anx10_notas,
                'id_paciente' => $paciente,
                'id_doctor' => $ids,
                'id_cita' => $cita
            ]);

            return redirect()->to($url)->withStatus(__('Se agrego correctamente.'));
        }
         
         if ($names == "Facturacion") { //ANEXO15
             //dd($request->all());
           $ids = \Auth::user()->id;
            $anx16 = Anexo15::create([
                'id_paciente' => $request->id_paciente,
                'concepto' => $request->concepto,
                'monto' => $request->monto,
                'deuda' => $request->deuda,
                'fech_pago' => $request->fech_pago,
                'form_pago' => $request->form_pago,
                'id_facturacion' => $request->id_paciente,
            ]);

            return redirect()->to($url)->withStatus(__('Se agrego correctamente.'));
        }
        
         if ($names == "Deudas") { //ANEXO16
             //dd($request->all());
           $ids = \Auth::user()->id;
            $anx16 = Anexo16::create([
                'id_paciente' => $request->id_paciente,
                'concepto' => $request->concepto,
                'monto' => $request->monto,
                'deuda' => $request->deuda,
                'fech_pago' => $request->fech_pago,
                'form_pago' => $request->form_pago,
                'id_facturacion' => $request->id_paciente,
            ]);

            return redirect()->to($url)->withStatus(__('Se agrego correctamente.'));
        }
         
         if ($names == "Anexo17") {
           $ids = \Auth::user()->id;
           $cita = Citas::where('id_doctor', '=', $ids)
                             ->where('cron_inicia', '!=', null)
                             ->where('cron_doctor', '!=', null)
                             ->where('cron_final', '=', null)
                             ->where('id_especialidad', '=', 11)
                             ->value('id');
                             
            $paciente = Citas::where('id', '=', $cita)->value("id_paciente");
                                
            $dato=$names;
            //dd($dato);
            $anx17 = Anexo17::create([
                'anx17_D_osea_doc' => $request->anx17_D_osea_doc,
                'anx17_D_osea_fr' => $request->anx17_D_osea_fr,
                'anx17_D_osea_fp' => $request->anx17_D_osea_fp,
                'anx17_M_bilateral_doc' => $request->anx17_M_bilateral_doc,
                'anx17_M_bilateral_fr' => $request->anx17_M_bilateral_fr,
                'anx17_M_bilateral_fp' => $request->anx17_M_bilateral_fp,
                'anx17_USG_mamario_doc' => $request->anx17_USG_mamario_doc,
                'anx17_USG_mamario_fr' => $request->anx17_USG_mamario_fr,
                'anx17_USG_mamario_fp' => $request->anx17_USG_mamario_fp,
                'anx17_USG_pelvico_doc' => $request->anx17_USG_pelvico_doc,
                'anx17_USG_pelvico_fr' => $request->anx17_USG_pelvico_fr,
                'anx17_USG_pelvico_fp' => $request->anx17_USG_pelvico_fp,
                'anx17_QS_doc' => $request->anx17_QS_doc,
                'anx17_QS_fr' => $request->anx17_QS_fr,
                'anx17_QS_fp' => $request->anx17_QS_fp,
                'anx17_general_orina_doc' => $request->anx17_general_orina_doc,
                'anx17_general_orina_fr' => $request->anx17_general_orina_fr,
                'anx17_general_orina_fp' => $request->anx17_general_orina_fp,
                'anx17_cultivo_espe_doc' => $request->anx17_cultivo_espe_doc,
                'anx17_cultivo_espe_fr' => $request->anx17_cultivo_espe_fr,
                'anx17_cultivo_espe_fp' => $request->anx17_cultivo_espe_fp,
                'anx17_papanicolau_doc' => $request->anx17_papanicolau_doc,
                'anx17_papanicolau_fr' => $request->anx17_papanicolau_fr,
                'anx17_papanicolau_fp' => $request->anx17_papanicolau_fp,
                'anx17_colposcopia_doc' => $request->anx17_colposcopia_doc,
                'anx17_colposcopia_fr' => $request->anx17_colposcopia_fr,
                'anx17_colposcopia_fp' => $request->anx17_colposcopia_fp,
                'anx17_consulta_gine_doc' => $request->anx17_consulta_gine_doc,
                'anx17_consulta_gine_fr' => $request->anx17_consulta_gine_fr,
                'anx17_consulta_gine_fp' => $request->anx17_consulta_gine_fp,
                'anx17_consulta_nutri_doc' => $request->anx17_consulta_nutri_doc,
                'anx17_consulta_nutri_fr' => $request->anx17_consulta_nutri_fr,
                'anx17_consulta_nutri_fp' => $request->anx17_consulta_nutri_fp,
                'anx17_valoracion_urogine_doc' => $request->anx17_valoracion_urogine_doc,
                'anx17_valoracion_urogine_fr' => $request->anx17_valoracion_urogine_fr,
                'anx17_valoracion_urogine_fp' => $request->anx17_valoracion_urogine_fp,
                'anx17_valoracion_menopausia_doc' => $request->anx17_valoracion_menopausia_doc,
                'anx17_valoracion_menopausia_fr' => $request->anx17_valoracion_menopausia_fr,
                'anx17_valoracion_menopausia_fp' => $request->anx17_valoracion_menopausia_fp,
                'anx17_valoracion_onco_gine_doc' => $request->anx17_valoracion_onco_gine_doc,
                'anx17_valoracion_onco_gine_fr' => $request->anx17_valoracion_onco_gine_fr,
                'anx17_valoracion_onco_gine_fp' => $request->anx17_valoracion_onco_gine_fp,
                'anx17_sangre_oculta_doc' => $request->anx17_sangre_oculta_doc,
                'anx17_sangre_oculta_fr' => $request->anx17_sangre_oculta_fr,
                'anx17_sangre_oculta_fp' => $request->anx17_sangre_oculta_fp,
                'anx17_vph_doc' => $request->anx17_vph_doc,
                'anx17_vph_fr' => $request->anx17_vph_fr,
                'anx17_vph_fp' => $request->anx17_vph_fp,
                'id_paciente' => $paciente,
                'id_doctor' => $ids,
                'id_cita' => $cita

            ]);
        
            return redirect()->to("recetaprocesoconsultadoctorescheckup")->withStatus(__('Se agrego correctamente.'));
            }

         if ($names == "Anexo18") {

            $ids = \Auth::user()->id;
           $cita = Citas::where('id_doctor', '=', $ids)
                             ->where('cron_inicia', '!=', null)
                             ->where('cron_doctor', '!=', null)
                             ->where('cron_final', '=', null)
                             ->where('id_especialidad', '=', 11)
                             ->value('id');
                             
            $paciente = Citas::where('id', '=', $cita)->value("id_paciente");
                                
            $dato=$names;

            $anx18 = Anexo18::create([
                'anx18_USG_Mamario_Doc' => $request->anx18_USG_Mamario_Doc,
                'anx18_USG_Mamario_Fr' => $request->anx18_USG_Mamario_Fr,
                'anx18_USG_Mamario_Fp' => $request->anx18_USG_Mamario_Fp,
                'anx18_USG_Pelvico_Doc' => $request->anx18_USG_Pelvico_Doc,
                'anx18_USG_Pelvico_Fr' => $request->anx18_USG_Pelvico_Fr,
                'anx18_USG_Pelvico_Fp' => $request->anx18_USG_Pelvico_Fp,
                'anx18_Cul_especiales_Doc' => $request->anx18_Cul_especiales_Doc,
                'anx18_Cul_especiales_Fr' => $request->anx18_Cul_especiales_Fr,
                'anx18_Cul_especiales_Fp' => $request->anx18_Cul_especiales_Fp,
                'anx18_papanicolau_Doc' => $request->anx18_papanicolau_Doc,
                'anx18_papanicolau_Fr' => $request->anx18_papanicolau_Fr,
                'anx18_papanicolau_Fp' => $request->anx18_papanicolau_Fp,
                'anx18_Colposcopia_Doc' => $request->anx18_Colposcopia_Doc,
                'anx18_Colposcopia_Fr' => $request->anx18_Colposcopia_Fr,
                'anx18_Colposcopia_Fp' => $request->anx18_Colposcopia_Fp,
                'anx18_H_femenino_fase1_Doc' => $request->anx18_H_femenino_fase1_Doc,
                'anx18_H_femenino_fase1_Fr' => $request->anx18_H_femenino_fase1_Fr,
                'anx18_H_femenino_fase1_Fp' => $request->anx18_H_femenino_fase1_Fp,
                'anx18_H_femenino_fase2_Doc' => $request->anx18_H_femenino_fase2_Doc,
                'anx18_H_femenino_fase2_Fr' => $request->anx18_H_femenino_fase2_Fr,
                'anx18_H_femenino_fase2_Fp' => $request->anx18_H_femenino_fase2_Fp,
                'anx18_Consulta_Gine_Doc' => $request->anx18_Consulta_Gine_Doc,
                'anx18_Consulta_Gine_Fr' => $request->anx18_Consulta_Gine_Fr,
                'anx18_Consulta_Gine_Fp' => $request->anx18_Consulta_Gine_Fp,
                'anx18_Consulta_Nutri_Doc' => $request->anx18_Consulta_Nutri_Doc,
                'anx18_Consulta_Nutri_Fr' => $request->anx18_Consulta_Nutri_Fr,
                'anx18_Consulta_Nutri_Fp' => $request->anx18_Consulta_Nutri_Fp,
                'anx18_Valoracion_B_repro_Doc' => $request->anx18_Valoracion_B_repro_Doc,
                'anx18_Valoracion_B_repro_Fr' => $request->anx18_Valoracion_B_repro_Fr,
                'anx18_Valoracion_B_repro_Fp' => $request->anx18_Valoracion_B_repro_Fp,
                'anx18_VPH_Doc' => $request->anx18_VPH_Doc,
                'anx18_VPH_Fr' => $request->anx18_VPH_Fr,
                'anx18_VPH_Fp' => $request->anx18_VPH_Fp,
                'id_paciente' => $paciente,
                'id_doctor' => $ids,
                'id_cita' => $cita
            ]);
        
            return redirect()->to("recetaprocesoconsultadoctorescheckup")->withStatus(__('Se agrego correctamente.'));

        }

         if ($names == "Anexo19") {
            $ids = \Auth::user()->id;
           $cita = Citas::where('id_doctor', '=', $ids)
                             ->where('cron_inicia', '!=', null)
                             ->where('cron_doctor', '!=', null)
                             ->where('cron_final', '=', null)
                             ->where('id_especialidad', '=', 11)
                             ->value('id');
                             
            $paciente = Citas::where('id', '=', $cita)->value("id_paciente");
                                
            $dato=$names;
            //dd($dato);
            $anx19 = Anexo19::create([
                'anx19_mamario_doc' => $request->anx19_mamario_doc,
                'anx19_mamario_fr' => $request->anx19_mamario_fr,
                'anx19_mamario_fp' => $request->anx19_mamario_fp,
                'anx19_pelvico_doc' => $request->anx19_pelvico_doc,
                'anx19_pelvico_fr' => $request->anx19_pelvico_fr,
                'anx19_pelvico_fp' => $request->anx19_pelvico_fp,
                'anx19_gine_doc' => $request->anx19_gine_doc,
                'anx19_gine_fr' => $request->anx19_gine_fr,
                'anx19_gine_fp' => $request->anx19_gine_fp,
                'anx19_nutricion_doc' => $request->anx19_nutricion_doc,
                'anx19_nutricion_fr' => $request->anx19_nutricion_fr,
                'anx19_nutricion_fp' => $request->anx19_nutricion_fp,
                'anx19_biologia_doc' => $request->anx19_biologia_doc,
                'anx19_biologia_fr' => $request->anx19_biologia_fr,
                'anx19_biologia_fp' => $request->anx19_biologia_fp,
                'anx19_hormonal_doc' => $request->anx19_hormonal_doc,
                'anx19_hormonal_fr' => $request->anx19_hormonal_fr,
                'anx19_hormonal_fp' => $request->anx19_hormonal_fp,
                'anx19_hormonal_fase1_doc' => $request->anx19_hormonal_fase1_doc,
                'anx19_hormonal_fase1_fr' => $request->anx19_hormonal_fase1_fr,
                'anx19_hormonal_fase1_fp' => $request->anx19_hormonal_fase1_fp,
                'anx19_hormonal_fase2_doc' => $request->anx19_hormonal_fase2_doc,
                'anx19_hormonal_fase2_fr' => $request->anx19_hormonal_fase2_fr,
                'anx19_hormonal_fase2_fp' => $request->anx19_hormonal_fase2_fp,
                'id_paciente' => $paciente,
                'id_doctor' => $ids,
                'id_cita' => $cita


            ]);
           
            return redirect()->to($url)->withStatus(__('Se agrego correctamente.'));
        }

         if ($names == "Anexo20") {

            $ids = \Auth::user()->id;
           $cita = Citas::where('id_doctor', '=', $ids)
                             ->where('cron_inicia', '!=', null)
                             ->where('cron_doctor', '!=', null)
                             ->where('cron_final', '=', null)
                             ->where('id_especialidad', '=', 11)
                             ->value('id');
                             
            $paciente = Citas::where('id', '=', $cita)->value("id_paciente");
                                
            $dato=$names;
            //dd($dato);
            $anx20 = Anexo20::create([
                'anx20_primert_pp_doc' => $request->anx20_primert_pp_doc,
                'anx20_primert_pp_fr' => $request->anx20_primert_pp_fr,
                'anx20_primert_pp_fp' => $request->anx20_primert_pp_fp,
                'anx20_tiroideo_doc' => $request->anx20_tiroideo_doc,
                'anx20_tiroideo_fr' => $request->anx20_tiroideo_fr,
                'anx20_tiroideo_fp' => $request->anx20_tiroideo_fp,
                'anx20_segundot_glucosa_doc' => $request->anx20_segundot_glucosa_doc,
                'anx20_segundot_glucosa_fr' => $request->anx20_segundot_glucosa_fr,
                'anx20_segundot_glucosa_fp' => $request->anx20_segundot_glucosa_fp,
                'anx20_segundot_biometriah_doc' => $request->anx20_segundot_biometriah_doc,
                'anx20_segundot_biometriah_fr' => $request->anx20_segundot_biometriah_fr,
                'anx20_segundot_biometriah_fp' => $request->anx20_segundot_biometriah_fp,
                'anx20_segundot_ego_doc' => $request->anx20_segundot_ego_doc,
                'anx20_segundot_ego_fr' => $request->anx20_segundot_ego_fr,
                'anx20_segundo_ego_fp' => $request->anx20_segundo_ego_fp,
                'anx20_tercert_cespeciales_doc' => $request->anx20_tercert_cespeciales_doc,
                'anx20_tercert_cespeciales_fr' => $request->anx20_tercert_cespeciales_fr,
                'anx20_tercert_cespeciales_fp' => $request->anx20_tercert_cespeciales_fp,
                'anx20_tercert_urocultivo_doc' => $request->anx20_tercert_urocultivo_doc,
                'anx20_tercert_urocultivo_fr' => $request->anx20_tercert_urocultivo_fr,
                'anx20_tercert_urocultivo_fp' => $request->anx20_tercert_urocultivo_fp,
                'anx20_tercert_pp_doc' => $request->anx20_tercert_pp_doc,
                'anx20_tercert_pp_fr' => $request->anx20_tercert_pp_fr,
                'anx20_tercert_pp_fp' => $request->anx20_tercert_pp_fp,
                'id_paciente' => $paciente,
                'id_doctor' => $ids,
                'id_cita' => $cita

            ]);

            return redirect()->to("recetaprocesoconsultadoctorescheckup")->withStatus(__('Se agrego correctamente.'));

        }

         if ($names == "Anexo21") {
            $ids = \Auth::user()->id;
           $cita = Citas::where('id_doctor', '=', $ids)
                             ->where('cron_inicia', '!=', null)
                             ->where('cron_doctor', '!=', null)
                             ->where('cron_final', '=', null)
                             ->where('id_especialidad', '=', 11)
                             ->value('id');
                             
            $paciente = Citas::where('id', '=', $cita)->value("id_paciente");
                                
            $dato=$names;
            //dd($dato);
            $anx21 = Anexo21::create([
                'anx21_marcadores_doc' => $request->anx21_marcadores_doc,
                'anx21_marcadores_fr' => $request->anx21_marcadores_fr,
                'anx21_marcadores_fp' => $request->anx21_marcadores_fp,
                'anx21_usg_primer_doc' => $request->anx21_usg_primer_doc,
                'anx21_usg_primer_fr' => $request->anx21_usg_primer_fr,
                'anx21_usg_primer_fp' => $request->anx21_usg_primer_fp,
                'anx21_usg_segundo_doc' => $request->anx21_usg_segundo_doc,
                'anx21_usg_segundo_fr' => $request->anx21_usg_segundo_fr,
                'anx21_usg_segundo_fp' => $request->anx21_usg_segundo_fp,
                'anx21_usg_tercer_doc' => $request->anx21_usg_tercer_doc,
                'anx21_usg_tercer_fr' => $request->anx21_usg_tercer_fr,
                'anx21_usg_tercer_fp' => $request->anx21_usg_tercer_fp,
                'anx21_nutri_doc' => $request->anx21_nutri_doc,
                'anx21_nutri_fr' => $request->anx21_nutri_fr,
                'anx21_nutri_fp' => $request->anx21_nutri_fp,
                'anx21_ecocar_doc' => $request->anx21_ecocar_doc,
                'anx21_ecocar_fr' => $request->anx21_ecocar_fr,
                'anx21_ecocar_fp' => $request->anx21_ecocar_fp,
                'id_paciente' => $paciente,
                'id_doctor' => $ids,
                'id_cita' => $cita

            ]);

            
            return redirect()->to("recetaprocesoconsultadoctorescheckup")->withStatus(__('Se agrego correctamente.'));
        }

         if ($names == "Anexo22") {

            $ids = \Auth::user()->id;
           $cita = Citas::where('id_doctor', '=', $ids)
                             ->where('cron_inicia', '!=', null)
                             ->where('cron_doctor', '!=', null)
                             ->where('cron_final', '=', null)
                             ->where('id_especialidad', '=', 11)
                             ->value('id');
                             
            $paciente = Citas::where('id', '=', $cita)->value("id_paciente");
                                
            $dato=$names;
            //dd($dato);
            $anx22 = Anexo22::create([
                'anx22_USG_Mamario_Doc' => $request->anx22_USG_Mamario_Doc,
                'anx22_USG_Mamario_FR' => $request->anx22_USG_Mamario_FR,
                'anx22_USG_Mamario_FP' => $request->anx22_USG_Mamario_FP,
                'anx22_USG_Pelvico_doc' => $request->anx22_USG_Pelvico_doc,
                'anx22_USG_Pelvico_FR' => $request->anx22_USG_Pelvico_FR,
                'anx22_USG_Pelvico_FP' => $request->anx22_USG_Pelvico_FP,
                'anx22_Papanicolau_Doc' => $request->anx22_Papanicolau_Doc,
                'anx22_Papanicolau_FR' => $request->anx22_Papanicolau_FR,
                'anx22_Papanicolau_FP' => $request->anx22_Papanicolau_FP,
                'anx22_Colposcopia_Doc' => $request->anx22_Colposcopia_Doc,
                'anx22_Colposcopia_FR' => $request->anx22_Colposcopia_FR,
                'anx22_Colposcopia_FP' => $request->anx22_Colposcopia_FP,
                'id_paciente' => $paciente,
                'id_doctor' => $ids,
                'id_cita' => $cita
            ]);

           
            return redirect()->to("recetaprocesoconsultadoctorescheckup")->withStatus(__('Se agrego correctamente.'));
        }

         if ($names == "Anexo24") {
            $dato=$names;
            $dato1=$request->cita;
            //dd($dato);
            $anx24 = Anexo24::create([
                'anx24_paciente' => $request->anx24_paciente,
                'anx24_conyuge' => $request->anx24_conyuge,
                'anx24_medico' => $request->anx24_medico,
                'anx24_fumador' => $request->anx24_fumador,
                'anx24_fumador_fre' => $request->anx24_fumador_fre,
                'anx24_medicamentos' => $request->anx24_medicamentos,
                'anx24_cuales' => $request->anx24_cuales,
                'anx24_dias_abs_sex' => $request->anx24_dias_abs_sex,
                'anx24_mod_reco' => $request->anx24_mod_reco,
                'anx24_hora_re' => $request->anx24_hora_re,
                'anx24_hora_pro' => $request->anx24_hora_pro,
                'anx24_coagulo_inicial' => $request->anx24_coagulo_inicial,
                'anx24_licuefaccion' => $request->anx24_licuefaccion,
                'anx24_viscosidad' => $request->anx24_viscosidad,
                'anx24_aspecto' => $request->anx24_aspecto,
                'anx24_volumen' => $request->anx24_volumen,
                'anx24_PH' => $request->anx24_PH,
                'anx24_concetracion' => $request->anx24_concetracion,
                'anx24_hp' => $request->anx24_hp,
                'anx24_movi_a' => $request->anx24_movi_a,
                'anx24_movi_b' => $request->anx24_movi_b,
                'anx24_movi_c' => $request->anx24_movi_c,
                'anx24_movi_d' => $request->anx24_movi_d,
                'anx24_indi_movi_ab' => $request->anx24_indi_movi_ab,
                'anx24_movi_total_abc' => $request->anx24_movi_total_abc,
                'anx24_morfo' => $request->anx24_morfo,
                'anx24_defectos_cabeza' => $request->anx24_defectos_cabeza,
                'anx24_defectos_pieza_meda' => $request->anx24_defectos_pieza_meda,
                'anx24_defectos_cola' => $request->anx24_defectos_cola,
                'anx24_eritrocitos' => $request->anx24_eritrocitos,
                'anx24_leucocitos' => $request->anx24_leucocitos,
                'anx24_inmadura' => $request->anx24_inmadura,
                'anx24_epiteliales' => $request->anx24_epiteliales,
                'anx24_bacterias' => $request->anx24_bacterias,
                'anx24_cristales' => $request->anx24_cristales,
                'anx24_aglu' => $request->anx24_aglu,
                'anx24_residuos' => $request->anx24_residuos,
                'anx24_observaciones' => $request->anx24_observaciones,
                'anx24_fecha' => $request->anx24_fecha,
                'anx24_EDB' => $request->anx24_EDB,
                'anx24_edad1' => $request->anx24_edad1,
                'anx24_edad2' => $request->anx24_edad2,
                'id_paciente' => $request->id_paciente,
                'id_doctor' => $request->id_doctor,
                'id_cita' => $cita,
            ]);

            return redirect()->to($url)->withStatus(__('Se agrego correctamente.'));

        }

         if ($names == "Anexo25") {
            $dato=$names;
            $dato1=$request->cita;
            //dd($dato);
            $anx25 = Anexo25::create([
                'anx25_fecha' => $request->anx25_fecha,
                'anx25_IAH' => $request->anx25_IAH,
                'anx25_paciente' => $request->anx25_paciente,
                'anx25_edad' => $request->anx25_edad,
                'anx25_conyuge' => $request->anx25_conyuge,
                'anx25_edad_2' => $request->anx25_edad_2,
                'anx25_Dr_solicitante' => $request->anx25_Dr_solicitante,
                'anx25_fumador' => $request->anx25_fumador,
                'anx25_fumador_fre' => $request->anx25_fumador_fre,
                'anx25_medicamentos' => $request->anx25_medicamentos,
                'anx25_cuales' => $request->anx25_cuales,
                'anx25_dias_abs_sex' => $request->anx25_dias_abs_sex,
                'anx25_mod_reco' => $request->anx25_mod_reco,
                'anx25_hora_re' => $request->anx25_hora_re,
                'anx25_hora_pro' => $request->anx25_hora_pro,
                'anx25_licuefa' => $request->anx25_licuefa,
                'anx25_visco' => $request->anx25_visco,
                'anx25_volumen' => $request->anx25_volumen,
                'anx25_apecto' => $request->anx25_apecto,
                'anx25_conce' => $request->anx25_conce,
                'anx25_conce_total' => $request->anx25_conce_total,
                'anx25_movia_a' => $request->anx25_movia_a,
                'anx25_movi_b' => $request->anx25_movi_b,
                'anx25_movi_c' => $request->anx25_movi_c,
                'anx25_movi_d' => $request->anx25_movi_d,
                'anx25_movi_ab' => $request->anx25_movi_ab,
                'anx25_movi_total_abc' => $request->anx25_movi_total_abc,
                'anx25_morfo' => $request->anx25_morfo,
                'anx25_obser' => $request->anx25_obser,
                'anx25_volumen_final' => $request->anx25_volumen_final,
                'anx25_apecto_1' => $request->anx25_apecto_1,
                'anx25_conce_1' => $request->anx25_conce_1,
                'anx25_movia_a_1' => $request->anx25_movia_a_1,
                'anx25_movi_b_1' => $request->anx25_movi_b_1,
                'anx25_movi_c_1' => $request->anx25_movi_c_1,
                'anx25_movi_d_1' => $request->anx25_movi_d_1,
                'anx25_movi_ab_1' => $request->anx25_movi_ab_1,
                'anx25_movi_total_abc_1' => $request->anx25_movi_total_abc_1,
                'anx25_morfo_1' => $request->anx25_morfo_1,
                'anx25_obser_1' => $request->anx25_obser_1,
                'created_at' => $request->created_at,
                'updated_at' => $request->updated_at,
                'deleted_at' => $request->deleted_at,
                'id_paciente' => $request->id_paciente,
                'id_doctor' => $request->id_doctor,
                'id_cita' => $cita,

            ]);

            return redirect()->to($url)->withStatus(__('Se agrego correctamente.'));
        }

         if ($names == "Anexo26") {
            $dato=$names;
            $dato1=$request->cita;
            //dd($dato);
            $anx26 = Anexo26::create([
                'anx26_paciente' => $request->anx26_paciente,
                'anx26_conyuge' => $request->anx26_conyuge,
                'anx26_medico' => $request->anx26_medico,
                'anx26_fecha' => $request->anx26_fecha,
                'anx26_EDB' => $request->anx26_EDB,
                'anx26_edad1' => $request->anx26_edad1,
                'anx26_edad2' => $request->anx26_edad2,
                'anx26_medicamentos' => $request->anx26_medicamentos,
                'anx26_cuales' => $request->anx26_cuales,
                'anx26_dias_abs_sex' => $request->anx26_dias_abs_sex,
                'anx26_hora_re' => $request->anx26_hora_re,
                'anx26_hora_proce' => $request->anx26_hora_proce,
                'anx26_ph' => $request->anx26_ph,
                'anx26_aspecto' => $request->anx26_aspecto,
                'anx26_concetracion' => $request->anx26_concetracion,
                'anx26_movi_a' => $request->anx26_movi_a,
                'anx26_movi_b' => $request->anx26_movi_b,
                'anx26_movi_c' => $request->anx26_movi_c,
                'anx26_movi_d' => $request->anx26_movi_d,
                'anx26_movi_abc' => $request->anx26_movi_abc,
                'anx26_movi_pro_ab' => $request->anx26_movi_pro_ab,
                'anx26_eritro' => $request->anx26_eritro,
                'anx26_leucocitos' => $request->anx26_leucocitos,
                'anx26_inmaduras' => $request->anx26_inmaduras,
                'anx26_epiteliales' => $request->anx26_epiteliales,
                'anx26_bacterias' => $request->anx26_bacterias,
                'anx26_cristales' => $request->anx26_cristales,
                'anx26_rdtritos' => $request->anx26_rdtritos,
                'anx26_observa' => $request->anx26_observa,
                'created_at' => $request->created_at,
                'updated_at' => $request->updated_at,
                'deleted_at' => $request->deleted_at,
                'id_paciente' => $request->id_paciente,
                'id_doctor' => $request->id_doctor,
                'id_cita' => $cita,
            ]);

            return redirect()->to($url)->withStatus(__('Se agrego correctamente.'));

        }
        
         if ($names == "Anexo27") {

            $dato=$names;
            $dato1=$request->cita;
            //dd($dato);
            $anx27 = Anexo27::create([
                'anx27_fecha' => $request->anx27_fecha,
                'anx27_IAH' => $request->anx27_IAH,
                'anx27_paciente' => $request->anx27_paciente,
                'anx27_edad' => $request->anx27_edad,
                'anx27_conyuge' => $request->anx27_conyuge,
                'anx27_edad_2' => $request->anx27_edad_2,
                'anx27_Dr_solicitante' => $request->anx27_Dr_solicitante,
                'anx27_fumador' => $request->anx27_fumador,
                'anx27_fumador_fre' => $request->anx27_fumador_fre,
                'anx27_medicamentos' => $request->anx27_medicamentos,
                'anx27_cuales' => $request->anx27_cuales,
                'anx27_dias_abs_sex' => $request->anx27_dias_abs_sex,
                'anx27_mod_reco' => $request->anx27_mod_reco,
                'anx27_hora_re' => $request->anx27_hora_re,
                'anx27_hora_pro' => $request->anx27_hora_pro,
                'anx27_licuefa' => $request->anx27_licuefa,
                'anx27_visco' => $request->anx27_visco,
                'anx27_volumen' => $request->anx27_volumen,
                'anx27_apecto' => $request->anx27_apecto,
                'anx27_conce' => $request->anx27_conce,
                'anx27_conce_total' => $request->anx27_conce_total,
                'anx27_movia_a' => $request->anx27_movia_a,
                'anx27_movi_b' => $request->anx27_movi_b,
                'anx27_movi_c' => $request->anx27_movi_c,
                'anx27_movi_d' => $request->anx27_movi_d,
                'anx27_movi_ab' => $request->anx27_movi_ab,
                'anx27_movi_total_abc' => $request->anx27_movi_total_abc,
                'anx27_morfo' => $request->anx27_morfo,
                'anx27_obser' => $request->anx27_obser,
                'anx27_volumen_final' => $request->anx27_volumen_final,
                'anx27_apecto_1' => $request->anx27_apecto_1,
                'anx27_conce_1' => $request->anx27_conce_1,
                'anx27_movia_a_1' => $request->anx27_movia_a_1,
                'anx27_movi_b_1' => $request->anx27_movi_b_1,
                'anx27_movi_c_1' => $request->anx27_movi_c_1,
                'anx27_movi_d_1' => $request->anx27_movi_d_1,
                'anx27_movi_ab_1' => $request->anx27_movi_ab_1,
                'anx27_movi_total_abc_1' => $request->anx27_movi_total_abc_1,
                'anx27_morfo_1' => $request->anx27_morfo_1,
                'anx27_obser_1' => $request->anx27_obser_1,
                'created_at' => $request->created_at,
                'updated_at' => $request->updated_at,
                'deleted_at' => $request->deleted_at,
                'id_paciente' => $request->id_paciente,
                'id_doctor' => $request->id_doctor,
                'id_cita' => $cita,

            ]);

            return redirect()->to($url)->withStatus(__('Se agrego correctamente.'));
        }

         if ($names == "Anexo28") {
            $dato=$names;
            $dato1=$request->cita;
            //dd($dato);
            $anx28 = Anexo28::create([
                'anx28_fechaP' => $request->anx28_fechaP,
                'anx28_EBD' => $request->anx28_EBD,
                'anx28_paciente' => $request->anx28_paciente,
                'anx28_edad_p' => $request->anx28_edad_p,
                'anx28_conyuge' => $request->anx28_conyuge,
                'anx28_edad_conyu' => $request->anx28_edad_conyu,
                'anx28_medico' => $request->anx28_medico,
                'anx28_fumador' => $request->anx28_fumador,
                'anx28_fuma_frecuen' => $request->anx28_fuma_frecuen,
                'anx28_medicamento' => $request->anx28_medicamento,
                'anx28_medi_cuales' => $request->anx28_medi_cuales,
                'anx28_abs_sexual' => $request->anx28_abs_sexual,
                'anx28_modo_recole' => $request->anx28_modo_recole,
                'anx28_hora_reco' => $request->anx28_hora_reco,
                'anx28_hora_proceso' => $request->anx28_hora_proceso,
                'anx28_coagulo_ini' => $request->anx28_coagulo_ini,
                'anx28_licuefa' => $request->anx28_licuefa,
                'anx28_visco' => $request->anx28_visco,
                'anx28_aspeto' => $request->anx28_aspeto,
                'anx28_volumen' => $request->anx28_volumen,
                'anx28_ph' => $request->anx28_ph,
                'anx28_host' => $request->anx28_host,
                'anx28_observa' => $request->anx28_observa,
                'created_at' => $request->created_at,
                'updated_at' => $request->updated_at,
                'deleted_at' => $request->deleted_at,
                'id_paciente' => $request->id_paciente,
                'id_doctor' => $request->id_doctor,
                'id_cita' => $cita,
            ]);

            return redirect()->to($url)->withStatus(__('Se agrego correctamente.'));

        }
		
		 if ($names == "Anexo29") {
            $dato=$names;
            $dato1=$request->cita;
            //dd($dato);
            $anx29 = Anexo29::create([
                'anx29_horamuestra' => $request->anx29_horamuestra,
                'anx29_fecha_estu' => $request->anx29_fecha_estu,
                'anx29_hora_proce_mue' => $request->anx29_hora_proce_mue,
                'anx29_fecha_proce' => $request->anx29_fecha_proce,
                'anx29_dias_abs_sexual' => $request->anx29_dias_abs_sexual,
                'anx29_coagulo_ini' => $request->anx29_coagulo_ini,
                'anx29_licuefaccion' => $request->anx29_licuefaccion,
                'anx29_viscosidad' => $request->anx29_viscosidad,
                'anx29_volumen' => $request->anx29_volumen,
                'anx29_aspecto' => $request->anx29_aspecto,
                'anx29_PH' => $request->anx29_PH,
                'anx29_conce_esper' => $request->anx29_conce_esper,
                'anx29_conce_esper_total' => $request->anx29_conce_esper_total,
                'anx29_movi_total_abc' => $request->anx29_movi_total_abc,
                'anx29_movi_proge_abc' => $request->anx29_movi_proge_abc,
                'anx29_volumen_1' => $request->anx29_volumen_1,
                'anx29_morfi' => $request->anx29_morfi,
                'anx29_viabilidad' => $request->anx29_viabilidad,
                'anx29_defectos_cabeza' => $request->anx29_defectos_cabeza,
                'anx29_defectos_medica' => $request->anx29_defectos_medica,
                'anx29_defectos_colas' => $request->anx29_defectos_colas,
                'anx29_Eritro' => $request->anx29_Eritro,
                'anx29_leucocitos' => $request->anx29_leucocitos,
                'anx29_inmaduras' => $request->anx29_inmaduras,
                'anx29_epiteliales' => $request->anx29_epiteliales,
                'anx29_bacterias' => $request->anx29_bacterias,
                'anx29_cristales' => $request->anx29_cristales,
                'anx29_agluti' => $request->anx29_agluti,
                'anx29_agregacion' => $request->anx29_agregacion,
                'anx29_resi_detri' => $request->anx29_resi_detri,
                'anx29_host_hora_reco_mues' => $request->anx29_host_hora_reco_mues,
                'anx29_host_fecha_estu' => $request->anx29_host_fecha_estu,
                'anx29_host_hora_proce_mues' => $request->anx29_host_hora_proce_mues,
                'anx29_host_fecha_proce' => $request->anx29_host_fecha_proce,
                'anx29_host_dias_abs_sexual' => $request->anx29_host_dias_abs_sexual,
                'anx29_host_coagulo_ini' => $request->anx29_host_coagulo_ini,
                'anx29_host_licue' => $request->anx29_host_licue,
                'anx29_host_visco' => $request->anx29_host_visco,
                'anx29_host_volumen' => $request->anx29_host_volumen,
                'anx29_host_aspecto' => $request->anx29_host_aspecto,
                'anx29_host_PH' => $request->anx29_host_PH,
                'anx29_host_esperma' => $request->anx29_host_esperma,
                'anx29_post_hora_reco_mue' => $request->anx29_post_hora_reco_mue,
                'anx29_post_fecha_estu' => $request->anx29_post_fecha_estu,
                'anx29_post_hora_proce_mue' => $request->anx29_post_hora_proce_mue,
                'anx29_post_fecha_proce' => $request->anx29_post_fecha_proce,
                'anx29_post_dias_abs_sex' => $request->anx29_post_dias_abs_sex,
                'anx29_post_aspecto' => $request->anx29_post_aspecto,
                'anx29_post_conce_esper' => $request->anx29_post_conce_esper,
                'anx29_post_movi_total_abc' => $request->anx29_post_movi_total_abc,
                'anx29_post_movi_proce_AB' => $request->anx29_post_movi_proce_AB,
                'anx29_capa_hora_reco_mue' => $request->anx29_capa_hora_reco_mue,
                'anx29_capa_fech_estu' => $request->anx29_capa_fech_estu,
                'anx29_capa_hora_proce_mu' => $request->anx29_capa_hora_proce_mu,
                'anx29_capa_fecha_proce' => $request->anx29_capa_fecha_proce,
                'anx29_capa_dias_abs_sexual' => $request->anx29_capa_dias_abs_sexual,
                'anx29_capa_licue' => $request->anx29_capa_licue,
                'anx29_capa_visco' => $request->anx29_capa_visco,
                'anx29_capa_volumen' => $request->anx29_capa_volumen,
                'anx29_capa_aspecto' => $request->anx29_capa_aspecto,
                'anx29_capa_esper_mili' => $request->anx29_capa_esper_mili,
                'anx29_capa_esper_total' => $request->anx29_capa_esper_total,
                'anx29_capa_movi_total_ABC' => $request->anx29_capa_movi_total_ABC,
                'anx29_capa_movi_progre_abc' => $request->anx29_capa_movi_progre_abc,
                'anx29_capa_morfilogia' => $request->anx29_capa_morfilogia,
                'anx29_post_capa_volumen' => $request->anx29_post_capa_volumen,
                'anx29_post_capa_espe_mili' => $request->anx29_post_capa_espe_mili,
                'anx29_post_capa_movi_total_abc' => $request->anx29_post_capa_movi_total_abc,
                'anx29_post_capa_moviproABC' => $request->anx29_post_capa_moviproABC,
                'anx29_post_capa_morfo' => $request->anx29_post_capa_morfo,
                'anx29_post_capa_hora_reco_mue' => $request->anx29_post_capa_hora_reco_mue,
                'anx29_post_capa_fecha_estu' => $request->anx29_post_capa_fecha_estu,
                'anx29_post_capa_hora_proce' => $request->anx29_post_capa_hora_proce,
                'anx29_post_capa_fecha_proce' => $request->anx29_post_capa_fecha_proce,
                'anx29_post_capa_abs_sex' => $request->anx29_post_capa_abs_sex,
                'anx29_post_capa_licue' => $request->anx29_post_capa_licue,
                'anx29_post_capa_visco' => $request->anx29_post_capa_visco,
                'anx29_post_capa_volumen_1' => $request->anx29_post_capa_volumen_1,
                'anx29_post_capa_aspecto' => $request->anx29_post_capa_aspecto,
                'anx29_post_capa_espe' => $request->anx29_post_capa_espe,
                'anx29_post_capa_espe_total' => $request->anx29_post_capa_espe_total,
                'anx29_post_capa_movi_abc' => $request->anx29_post_capa_movi_abc,
                'anx29_post_capa_movipro_abc' => $request->anx29_post_capa_movipro_abc,
                'anx29_post_capa_norma' => $request->anx29_post_capa_norma,
                'anx29_postt_volumen' => $request->anx29_postt_volumen,
                'anx29_postt_espe_mili' => $request->anx29_postt_espe_mili,
                'anx29_postt_movi_total_abc' => $request->anx29_postt_movi_total_abc,
                'anx29_postt_movi_progre_abc' => $request->anx29_postt_movi_progre_abc,
                'anx29_postt_morfo' => $request->anx29_postt_morfo,
                'created_at' => $request->created_at,
                'updated_at' => $request->updated_at,
                'deleted_at' => $request->deleted_at,
                'id_paciente' => $request->id_paciente,
                'id_doctor' => $request->id_doctor,
            ]);

            // dd( $anx22);
            $anx29->save();

            //$id = Anexo10::where($request->id);

            //$url="template.php?info=".$dato;
           $url = "https://ciclica.lealtaddigitalsoft.mx/public/anexodocu";

            return redirect()->to($url)->withStatus(__('Se agrego correctamente.'));

        }

         if ($names == "Anexo30") {

            $dato=$names;
            //dd($dato);
            $anx30 = Anexo30::create([
                'anx22_USG_Mamario_Doc' => $request->anx22_USG_Mamario_Doc,
                'anx22_USG_Mamario_FR' => $request->anx22_USG_Mamario_FR,
                'anx22_USG_Mamario_FP' => $request->anx22_USG_Mamario_FP,
                'anx22_USG_Pelvico_doc' => $request->anx22_USG_Pelvico_doc,
                'anx22_USG_Pelvico_FR' => $request->anx22_USG_Pelvico_FR,
                'anx22_USG_Pelvico_FP' => $request->anx22_USG_Pelvico_FP,
                'anx22_Papanicolau_Doc' => $request->anx22_Papanicolau_Doc,
                'anx22_Papanicolau_FR' => $request->anx22_Papanicolau_FR,
                'anx22_Papanicolau_FP' => $request->anx22_Papanicolau_FP,
                'anx22_Colposcopia_Doc' => $request->anx22_Colposcopia_Doc,
                'anx22_Colposcopia_FR' => $request->anx22_Colposcopia_FR,
                'anx22_Colposcopia_FP' => $request->anx22_Colposcopia_FP,
                'id_paciente' => $request->id_paciente,
                'id_doctor' => $request->id_doctor,


            ]);

            // dd( $anx22);
            $anx30->save();

            //$id = Anexo10::where($request->id);

            $url="template.php?info=".$dato;

            return redirect()->to($url)->withStatus(__('Se agrego correctamente.'));

        }

         if ($names == "Anexo34") {
            $dato=$names;
            $dato1=$request->cita;
            dd($request->all());
            $anx34 = Anexo34::create([
                'anx34_fecha' => $request->anx34_fecha,
                'anx34_folio' => $request->anx34_folio,
                'anx34_paciente' => $request->anx34_paciente,
                'anx34_moti_estu' => $request->anx34_moti_estu,
                'anx34_fecha_nac' => $request->anx34_fecha_nac,
                'anx34_sexo' => $request->anx34_sexo,
                'anx34_edo_civil' => $request->anx34_edo_civil,
                'anx34_domicilio' => $request->anx34_domicilio,
                'anx34_telefono' => $request->anx34_telefono,
                'anx34_correo' => $request->anx34_correo,
                'anx34_A_cancer_mama' => $request->anx34_A_cancer_mama,
                'anx34_CA_aque_edad' => $request->anx34_CA_aque_edad,
                'anx34_AF_cancel_mama' => $request->anx34_AF_cancel_mama,
                'anx34_FCA_quien' => $request->anx34_FCA_quien,
                'anx34_AP_mamas' => $request->anx34_AP_mamas,
                'anx34_AP_mamas_tipo' => $request->anx34_AP_mamas_tipo,
                'anx34_dolor' => $request->anx34_dolor,
                'anx34_masa_palpable' => $request->anx34_masa_palpable,
                'anx34_cambios_piel' => $request->anx34_cambios_piel,
                'anx34_aumento_volumen' => $request->anx34_aumento_volumen,
                'anx34_secrecion_pezon' => $request->anx34_secrecion_pezon,
                'anx34_inversion_pezon' => $request->anx34_inversion_pezon,
                'anx34_otros' => $request->anx34_otros,
                'anx34_desde_cuando' => $request->anx34_desde_cuando,
                'anx34_senal_mamas_lunar' => $request->anx34_senal_mamas_lunar,
                'anx34_senal_mamas_cicatrices' => $request->anx34_senal_mamas_cicatrices,
                'anx34_senal_mamas_verrugas' => $request->anx34_senal_mamas_verrugas,
                'anx34_senal_mamas_otros' => $request->anx34_senal_mamas_otros,
                'anx34_primer_menstru' => $request->anx34_primer_menstru,
                'anx34_vida_sexual' => $request->anx34_vida_sexual,
                'anx34_numero_embara' => $request->anx34_numero_embara,
                'anx34_numero_partos' => $request->anx34_numero_partos,
                'anx34_numero_cesareas' => $request->anx34_numero_cesareas,
                'anx34_numero_abortos' => $request->anx34_numero_abortos,
                'anx34_anticonceptivo' => $request->anx34_anticonceptivo,
                'anx34_anticonceptivo_tipo' => $request->anx34_anticonceptivo_tipo,
                'anx34_hormonal' => $request->anx34_hormonal,
                'anx34_hormonal_tiempo' => $request->anx34_hormonal_tiempo,
                'anx34_menopausia' => $request->anx34_menopausia,
                'anx34_fecha_ultima_mestruacion' => $request->anx34_fecha_ultima_mestruacion,
                'anx34_biopsia_mama' => $request->anx34_biopsia_mama,
                'anx34_biopsia_derecha' => $request->anx34_biopsia_derecha,
                'anx34_biopsia_izquierda' => $request->anx34_biopsia_izquierda,
                'anx34_realizo_mastec' => $request->anx34_realizo_mastec,
                'anx34_realizo_mastec_der' => $request->anx34_realizo_mastec_der,
                'anx34_realizo_mastec_izq' => $request->anx34_realizo_mastec_izq,
                'anx34_realizo_mastec_fecha' => $request->anx34_realizo_mastec_fecha,
                'anx34_axilas' => $request->anx34_axilas,
                'anx34_axilas_dere' => $request->anx34_axilas_dere,
                'anx34_axilas_izq' => $request->anx34_axilas_izq,
                'anx34_axilas_ambas' => $request->anx34_axilas_ambas,
                'anx34_axilas_fecha' => $request->anx34_axilas_fecha,
                'anx34_implantes_mama' => $request->anx34_implantes_mama,
                'anx34_implantes_mama_dere' => $request->anx34_implantes_mama_dere,
                'anx34_implantes_mama_izq' => $request->anx34_implantes_mama_izq,
                'anx34_implantes_mama_ambos' => $request->anx34_implantes_mama_ambos,
                'anx34_implantes_mama_fecha' => $request->anx34_implantes_mama_fecha,
                'anx34_reca_implante' => $request->anx34_reca_implante,
                'anx34_reca_implante_fecha' => $request->anx34_reca_implante_fecha,
                'anx34_reduc_mama' => $request->anx34_reduc_mama,
                'anx34_reduc_mama_dere' => $request->anx34_reduc_mama_dere,
                'anx34_reduc_mama_izq' => $request->anx34_reduc_mama_izq,
                'anx34_reduc_mama_amb' => $request->anx34_reduc_mama_amb,
                'anx34_reduc_mama_fecha' => $request->anx34_reduc_mama_fecha,
                'anx34_readio_seno' => $request->anx34_readio_seno,
                'anx34_masto_utra' => $request->anx34_masto_utra,
                'anx34_masto_utra_fecha' => $request->anx34_masto_utra_fecha,
                'anx34_dianostico' => $request->anx34_dianostico,
                'id_paciente' => $request->id_paciente,
                'id_doctor' => $request->id_doctor,
            ]);

            $anx34->save();

            //$id = Anexo10::where($request->id);

           // $url="template.php?info=".$dato;
            $url = "imagenologia";
            return redirect()->to($url)->withStatus(__('Se agrego correctamente.'));

        }

         if ($names == "Anexo35") {

            $dato=$names;
            $dato1=$request->cita;
            //dd($dato);
            $anx35 = Anexo35::create([
                'anx35_nombre_paciente' => $request->anx35_nombre_paciente,
                'anx35_mot_estudio' => $request->anx35_mot_estudio,
                'anx35_tipo_estudio' => $request->anx35_tipo_estudio,
                'anx35_tecnica_estudio' => $request->anx35_tecnica_estudio,
                'anx35_hallazgo' => $request->anx35_hallazgo,
                'anx35_conclucion' => $request->anx35_conclucion,
                'anx35_categoria' => $request->anx35_categoria,
                'anx35_conducta' => $request->anx35_conducta,
                'id_paciente' => $request->id_paciente,
                'id_doctor' => $request->id_doctor,
            ]);
//dd( $anx35);
            $anx35->save();



           // $url="template.php?info=".$dato;
            $url = "imagenologia";
            return redirect()->to($url)->withStatus(__('Se agrego correctamente.'));

        }
        
         if ($names == "Anexo37") {

         }

         if ($names == "Anexo37_1") {
            $dato=$names;
            $dato1=$request->name;


            // $url="template.php?info=".$dato.&" info2=".$dato1." info3=".$dato2;
            //$url="template.php?info=".$dato."&info2=".$dato1."&info3=".$dato2;
            $url="template.php?info=".$dato."&info2=".$dato1;
            //dd(  $url);

            return redirect()->to($url)->withStatus(__('Se agrego correctamente.'));


        }

         if ($names == "Anexo39") {
            $dato=$names;


            $dato1=$request->cita;
           // dd($dato);


            $anx39 = Anexo39::create([
                'id' => $request->id,
                'anx39_origen_etnico' => $request->anx39_origen_etnico,
                'anx39_otra' => $request->anx39_otra,
                'anx39_fecha_ultima_mestrua' => $request->anx39_fecha_ultima_mestrua,
                'anx39_como_considera_mestru' => $request->anx39_como_considera_mestru,
                'anx39_trisomia21' => $request->anx39_trisomia21,
                'anx39_trisomia18' => $request->anx39_trisomia18,
                'anx39_trisomia13' => $request->anx39_trisomia13,
                'anx39_hijo_malformacion' => $request->anx39_hijo_malformacion,
                'anx39_cual' => $request->anx39_cual,
                'anx39_total_emba' => $request->anx39_total_emba,
                'anx39_partos' => $request->anx39_partos,
                'anx39_cesareas' => $request->anx39_cesareas,
                'anx39_abortos' => $request->anx39_abortos,
                'anx39_ectopicos' => $request->anx39_ectopicos,
                'anx39_molas' => $request->anx39_molas,
                'anx39_muerte_antes16semanas' => $request->anx39_muerte_antes16semanas,
                'anx39_muerte_despues16semanas' => $request->anx39_muerte_despues16semanas,
                'anx39_cuantas_semanas' => $request->anx39_cuantas_semanas,
                'created_at' => $request->created_at,
                'updated_at' => $request->updated_at,
                'deleted_at' => $request->deleted_at,
                'id_paciente' => $request->id_paciente,
                'id_doctor' => $request->id_doctor,


            ]);
            //dd( $anx39);
            $anx39->save();

            $url = "https://ciclica.lealtaddigitalsoft.mx/public/anexodocu";
            return redirect()->to($url)->withStatus(__('Se agrego correctamente.'));

        }

         if ($names == "Anexo40") {
            
            $ids = \Auth::user()->id;
           $cita = Citas::where('id_doctor', '=', $ids)
                             ->where('cron_inicia', '!=', null)
                             ->where('cron_doctor', '!=', null)
                             ->where('cron_final', '=', null)
                             ->value('id');

            $dato=$names;
            $dato1=$request->cita;
            // dd($dato1);

            $anx40 = Anexo40::create([
                'id' => $request->id,
                'anx40_fecha' => $request->anx40_fecha,
                'anx40_nombre' => $request->anx40_nombre,
                'anx40_edad' => $request->anx40_edad,
                'anx40_gestas' => $request->anx40_gestas,
                'anx40_partos' => $request->anx40_partos,
                'anx40_cesareas' => $request->anx40_cesareas,
                'anx40_abortos' => $request->anx40_abortos,
                'anx40_ectopico' => $request->anx40_ectopico,
                'anx40_grupo_rh' => $request->anx40_grupo_rh,
                'anx40_diagnostico' => $request->anx40_diagnostico,
                'anx40_subjetivo' => $request->anx40_subjetivo,
                'anx40_Objetivo' => $request->anx40_Objetivo,
                'anx40_analisis' => $request->anx40_analisis,
                'anx40_plan' => $request->anx40_plan,
                'id_paciente' => $request->id_paciente,
                'id_doctor' => $ids,
                'id_cita' => $cita
            ]);

            return redirect()->to($url)->withStatus(__('Se agrego correctamente.'));
        }
        
         if ($names == "Pacientes") {
              
            $member = User::where('email', '=', $request->email)->value('id');  
             $numpac = User::where('username', '=', $request->username)->value('id');  
            //dd($request->all());
               if($member == ""){
                if($numpac == ""){
                $count = User::join('role_user', 'users.id', '=', 'role_user.user_id')
                              ->where('role_id', '=', 3)
                              ->max('username');
                $tot = ($count + 1 );
                //dd($tot);    
                 $datos = User::create([
                'name' => $request->name,
                'app_name' => $request->app_name,
                'apm_name' => $request->apm_name,
                'username' => $tot,
                'email' => $request->email,
                'password' => Hash::make($request->password),
                'sex' => $request->sex,
                'phone' => $request->phone,
                'medio' => $request->medio,
                'active' => 1,
                ]);


                $user = User::where('email', '=', $request->email)->value('id');  
                $dat = Role_User::create([
                'user_id' => $user,
                'role_id' => 3,
                ]);
                
                 \Storage::makeDirectory('usuarios/' . $user);
                if($request->file('carta') != null){
                    $fileCon=$request->file('carta');
                    $nombreCon1 = $fileCon->getClientOriginalName();
                    \Storage::disk('usuarios')->put('/'.$user.'/'.$nombreCon1,  \File::get($fileCon));
                }
                else{ $nombreCon1 = Pacientes::where('id_user', '=', $user)->value('carta'); }
   

                $userid = User::where('email', '=', $request->email)->value('id');  
            
                $datoss = Pacientes::create([
                'id_user' => $userid,
                'fecha_nacimiento' => $request->fecha_nacimiento,
                'id_estado' => $request->id_estado,
                'id_edo_civil' => $request->id_edo_civil,
                'telefono' => $request->telefono,
                'calle' => $request->calle,
                'num_ext' => $request->num_ext,
                'num_int' => $request->num_int,
                'colonia' => $request->colonia,
                'ciudad' => $request->ciudad,
                'id_estado_domicilio' => $request->id_estado_domicilio,
                'cp' => $request->cp,
                'tipo_sangre' => $request->tipo_sangre,
                'ocupacion' => $request->ocupacion,
                'alergias' => $request->alergias,
                'nombre_pareja' => $request->nombre_pareja,
                'fch_nacimiento_pareja' => $request->fch_nacimiento_pareja,
                'ocupacion_pareja' => $request->ocupacion_pareja,
                'celular_pareja' => $request->celular_pareja,
                'email_pareja ' => $request->email_pareja,
                'carta' => $nombreCon1,
                ]);
                

                return redirect()->to($url)->withStatus(__('Se agrego correctamente.'));
                }
                else{
                return redirect()->to($url)->withStatus(__('EL numero de paciente ya existe')); 
                }   
            }
             else{
                return redirect()->to($url)->withStatus(__('EL correo electronico ya existe'));   
               
             }
                      
          }
   
         if ($names == "Citas") {
           
         $ids = \Auth::user()->id;
         $role = Role_User::where('user_id', '=', $ids)->value('role_id'); 
         
         if($role == 1){
           
          $por = explode(" ", $request->pac);
          $pacient = $por[0]; 
             
          $numpac = User::where('username', '=', $pacient)->value('id'); 
          //$numpac = $pacient;
          $numcit = Citas::where('start', '=', $request->start)
                           ->where('id_especialidad', '=', $request->esp)
                           ->where('id_paciente', '=', $numpac)
                           ->value('id');  
          date_default_timezone_set("America/Mexico_City");
          $date = date('Y-m-d H:s:m');
          
          if($date <= $request->start){  
            if($numcit == ""){
            $espcolor = Especialidad::where('id', '=', $request->esp)->value('color');   
                //dd($urls);
                $datos = Citas::create([
                'start' => $request->start,
                'end' => $request->end,
                'color' => $espcolor,
                'nota' => $request->nota,
                'id_paciente' => $numpac,
                'id_doctor' => $request->doc,
                'id_especialidad' => $request->esp,
                ]);
            
                $citaid = Citas::where('start', '=', $request->start)
                           ->where('id_especialidad', '=', $request->esp)
                           ->where('id_paciente', '=', $numpac)
                           ->value('id');  
            
              if($request->esp == 11){
                 // dd($request->all());
                $urlsuser = "https://ciclica.lealtaddigitalsoft.mx/public/procesoconsultascheckup/$citaid";
                $datos = AnexosCitasCheckup::create([
                'id_anexo1722' => $request->checkup1722,
                'id_paciente' => $numpac,
                'id_doctor' => $request->doc,
                'id_cita' => $citaid,
                ]);
                }
                else{
                $urlsuser = "https://ciclica.lealtaddigitalsoft.mx/public/procesoconsultas/$citaid";        
                }
                $ticket = Citas::find($citaid);
                $ticket->url = $urlsuser;
                $ticket->save();
                
                $almacen = [['message' => "Se agrego correctamente"]];             
                return response()->json(['data' => $almacen]);
               }
               else{
                  $almacen = [['message' => "Error la cita ya existe"]];             
                  return response()->json(['data' => $almacen]);   
               }
          } else{
           $almacen = [['message' => "Error no se pudo agregar"]];             
                  return response()->json(['data' => $almacen]);               
           }
           
           }
         else if($role == 9){
           
          $por = explode(" ", $request->pac);
          $pacient = $por[0]; 
             
          $numpac = User::where('username', '=', $pacient)->value('id'); 
          //$numpac = $pacient;
          $numcit = Citas::where('start', '=', $request->start)
                           ->where('id_especialidad', '=', $request->esp)
                           ->where('id_paciente', '=', $numpac)
                           ->value('id');  
          date_default_timezone_set("America/Mexico_City");
          $date = date('Y-m-d H:s:m');
          
          if($date <= $request->start){  
            if($numcit == ""){
            $espcolor = Especialidad::where('id', '=', $request->esp)->value('color');   
                //dd($urls);
                $datos = Citas::create([
                'start' => $request->start,
                'end' => $request->end,
                'color' => $espcolor,
                'nota' => $request->nota,
                'id_paciente' => $numpac,
                'id_doctor' => $request->doc,
                'id_especialidad' => $request->esp,
                ]);
            
                $citaid = Citas::where('start', '=', $request->start)
                           ->where('id_especialidad', '=', $request->esp)
                           ->where('id_paciente', '=', $numpac)
                           ->value('id');  
            
              if($request->esp == 11){
                 // dd($request->all());
                $urlsuser = "https://ciclica.lealtaddigitalsoft.mx/public/procesoconsultascheckup/$citaid";
                $datos = AnexosCitasCheckup::create([
                'id_anexo1722' => $request->checkup1722,
                'id_paciente' => $numpac,
                'id_doctor' => $request->doc,
                'id_cita' => $citaid,
                ]);
                }
                else{
                $urlsuser = "https://ciclica.lealtaddigitalsoft.mx/public/procesoconsultas/$citaid";        
                }
                $ticket = Citas::find($citaid);
                $ticket->url = $urlsuser;
                $ticket->save();
                
                $almacen = [['message' => "Se agrego correctamente"]];             
                return response()->json(['data' => $almacen]);
               }
               else{
                  $almacen = [['message' => "Error la cita ya existe"]];             
                  return response()->json(['data' => $almacen]);   
               }
          } else{
           $almacen = [['message' => "Error no se pudo agregar"]];             
                  return response()->json(['data' => $almacen]);               
           }
           
           }
 
         else if($role == 5){
           
          $por = explode(" ", $request->pac);
          $pacient = $por[0]; 
             
          $numpac = User::where('username', '=', $pacient)->value('id'); 
          if($numpac == null){
            $numpac = $pacient;
          }
          $numcit = Citas::where('start', '=', $request->start)
                           ->where('id_especialidad', '=', $request->esp)
                           ->where('id_paciente', '=', $numpac)
                           ->value('id');  
          date_default_timezone_set("America/Mexico_City");
          $date = date('Y-m-d H:s:m');
          
          if($date <= $request->start){  
            if($numcit == ""){
            $espcolor = Especialidad::where('id', '=', $request->esp)->value('color');   
                //dd($urls);
                $datos = Citas::create([
                'start' => $request->start,
                'end' => $request->end,
                'color' => $espcolor,
                'nota' => $request->nota,
                'id_paciente' => $numpac,
                'id_doctor' => $request->doc,
                'id_especialidad' => $request->esp,
                ]);
            
                $citaid = Citas::where('start', '=', $request->start)
                           ->where('id_especialidad', '=', $request->esp)
                           ->where('id_paciente', '=', $numpac)
                           ->value('id');  
            
              if($request->esp == 11){
                 // dd($request->all());
                $urlsuser = "https://ciclica.lealtaddigitalsoft.mx/public/procesoconsultascheckup/$citaid";
                $datos = AnexosCitasCheckup::create([
                'id_anexo1722' => $request->checkup1722,
                'id_paciente' => $numpac,
                'id_doctor' => $request->doc,
                'id_cita' => $citaid,
                ]);
                }
                else{
                $urlsuser = "https://ciclica.lealtaddigitalsoft.mx/public/procesoconsultas/$citaid";        
                }
                $ticket = Citas::find($citaid);
                $ticket->url = $urlsuser;
                $ticket->save();
                
                $almacen = [['message' => "Se agrego correctamente"]];             
                return response()->json(['data' => $almacen]);
               }
               else{
                  $almacen = [['message' => "Error la cita ya existe"]];             
                  return response()->json(['data' => $almacen]);   
               }
          } else{
           $almacen = [['message' => "Error no se pudo agregar"]];             
                  return response()->json(['data' => $almacen]);               
           }
           
           }
         else if($role == 3){
          //dd($request->all());
          //$por = explode(" ", $request->pac);
          $pacient = $ids; 
             
          //$numpac = User::where('username', '=', $pacient)->value('id');   
          $numcit = Citas::where('start', '=', $request->start)
                           ->where('id_especialidad', '=', $request->esp)
                           ->where('id_paciente', '=', $ids)
                           ->value('id');  
          date_default_timezone_set("America/Mexico_City");
          $date = date('Y-m-d H:s:m');
          
          if($date <= $request->start){  
            if($numcit == ""){
            $espcolor = Especialidad::where('id', '=', $request->esp)->value('color');   
                //dd($urls);
                $datos = Citas::create([
                'start' => $request->start,
                'end' => $request->end,
                'color' => $espcolor,
                'nota' => $request->nota,
                'id_paciente' => $ids,
                'id_doctor' => $request->doc,
                'id_especialidad' => $request->esp,
                ]);
            
                $citaid = Citas::where('start', '=', $request->start)
                           ->where('id_especialidad', '=', $request->esp)
                           ->where('id_paciente', '=', $ids)
                           ->value('id');  
            
                if($request->esp == 11){
                $urlsuser = "https://ciclica.lealtaddigitalsoft.mx/public/procesoconsultascheckup/$citaid";        
                }
                else{
                $urlsuser = "https://ciclica.lealtaddigitalsoft.mx/public/procesoconsultas/$citaid";        
                }
                $ticket = Citas::find($citaid);
                $ticket->url = $urlsuser;
                $ticket->save();

                $almacen = [['message' => "Se agrego correctamente"]];             
                return response()->json(['data' => $almacen]);
               }
               else{
                  $almacen = [['message' => "Error la cita ya existe"]];             
                  return response()->json(['data' => $almacen]);   
               }
          } else{
                  $almacen = [['message' => "Error no se pudo agregar"]];             
                  return response()->json(['data' => $almacen]);               
           }
           
           }
           
       }   
       
         if ($names == "Citas de Laboratorios") {
           //dd($request->all());
         $ids = \Auth::user()->id;
         $role = Role_User::where('user_id', '=', $ids)->value('role_id'); 
         
         if($role == 1){
          
          $agendar = AgendarEstudio::where('id', '=', $request->pac)->get();
         $espe = EspecialidadUser::where('id_user', '=', $agendar[0]->id_doctor)->value('id_especialidad');
         $espcolor="#EF97B9";
         
          date_default_timezone_set("America/Mexico_City");
          $date = date('Y-m-d H:s:m');
          
          if($date <= $request->start){  
           //dd($request->end);
                $datos = CitasLaboratorios::create([
                'start' => $request->start,
                'end' => $request->end,
                'color' => $espcolor,
                'nota' => $request->nota,
                'id_paciente' => $agendar[0]->id_paciente,
                'id_doctor' => $agendar[0]->id_doctor,
                'id_especialidad' => $espe,
                'id_cita' => $agendar[0]->id_cita,
                'tipo' => $request->estudio,
                'estado' => 1,
                'anotaciones' => $request->anotaciones,
                ]);
            
                $citaid = CitasLaboratorios::where('start', '=', $request->start)
                           ->where('id_paciente', '=', $agendar[0]->id_paciente)
                           ->value('id');  
            
                $urlsuser = "https://ciclica.lealtaddigitalsoft.mx/public/agendarestudios/$citaid";        
                $ticket = CitasLaboratorios::find($citaid);
                $ticket->url = $urlsuser;
                $ticket->save();
                
                $ticket = AgendarEstudio::find($request->pac);
                $ticket->estado = 2;
                $ticket->save();

                $almacen = [['message' => "Se agrego correctamente"]];             
                return response()->json(['data' => $almacen]);
               
          } else{
                 $almacen = [['message' => "Error no se pudo agregar"]];             
                  return response()->json(['data' => $almacen]);               
           }
           
           }
         
          else if($role == 5 || $role == 9){
         //dd($request->all());
         $espe = EspecialidadUser::where('id_user', '=', $ids)->value('id_especialidad');
         $espcolor="#EF97B9";
         
          date_default_timezone_set("America/Mexico_City");
          $date = date('Y-m-d H:s:m');
          
          if($date <= $request->start){  
           //dd($request->end);
                $datos = CitasLaboratorios::create([
                'start' => $request->start,
                'end' => $request->end,
                'color' => $espcolor,
                'nota' => $request->nota,
                'id_paciente' => $request->pac,
                'id_doctor' => $ids,
                'id_especialidad' => $espe,
                'id_cita' => 0,
                'tipo' => $request->estudio,
                'estado' => 1,
                'anotaciones' => $request->anotaciones,
                ]);
            
                $citaid = CitasLaboratorios::where('start', '=', $request->start)
                           ->where('id_paciente', '=', $request->pac)
                           ->value('id');  
            
                $urlsuser = "https://ciclica.lealtaddigitalsoft.mx/public/agendarestudios/$citaid";        
                $ticket = CitasLaboratorios::find($citaid);
                $ticket->url = $urlsuser;
                $ticket->save();

                $almacen = [['message' => "Se agrego correctamente"]];             
                return response()->json(['data' => $almacen]);
               
          } else{
                 $almacen = [['message' => "Error no se pudo agregar"]];             
                  return response()->json(['data' => $almacen]);               
           }
           
           }
           
           
           
       }  
       
         if ($names == "Citas de Imagenologia") {
          // dd($request->all());
         $ids = \Auth::user()->id;
         $role = Role_User::where('user_id', '=', $ids)->value('role_id'); 
         
         //dd($paciente);
         if($role == 1){
         $agendar = AgendarEstudio::where('id', '=', $request->pac)->get();
         $espe = EspecialidadUser::where('id_user', '=', $agendar[0]->id_doctor)->value('id_especialidad');
         $espcolor="#EF97B9";
         
          date_default_timezone_set("America/Mexico_City");
          $date = date('Y-m-d H:s:m');
          
          if($date <= $request->start){  
           //dd($request->end);
                $datos = CitasImagenologia::create([
                'start' => $request->start,
                'end' => $request->end,
                'color' => $espcolor,
                'nota' => $request->nota,
                'id_paciente' => $agendar[0]->id_paciente,
                'id_doctor' => $agendar[0]->id_doctor,
                'id_especialidad' => $espe,
                'id_cita' => $agendar[0]->id_cita,
                'estado' => 1,
                'anotaciones' => $request->anotaciones,
                ]);
            
                $citaid = CitasImagenologia::where('start', '=', $request->start)
                           ->where('id_paciente', '=', $agendar[0]->id_paciente)
                           ->value('id');  
            
                $urlsuser = "https://ciclica.lealtaddigitalsoft.mx/public/agendarestudios/$citaid";        
                $ticket = CitasImagenologia::find($citaid);
                $ticket->url = $urlsuser;
                $ticket->save();
                
                $ticket = AgendarEstudio::find($request->pac);
                $ticket->estado = 2;
                $ticket->save();

                $almacen = [['message' => "Se agrego correctamente"]];             
                return response()->json(['data' => $almacen]);
          } else{
           $almacen = [['message' => "Error no se pudo agregar"]];             
                  return response()->json(['data' => $almacen]);               
           }
           
           }
           
           if($role == 5 || $role == 9){
         
         $espe = EspecialidadUser::where('id_user', '=', $ids)->value('id_especialidad');
         $espcolor="#EF97B9";
         
          date_default_timezone_set("America/Mexico_City");
          $date = date('Y-m-d H:s:m');
          
          if($date <= $request->start){  
           //dd($request->end);
                $datos = CitasImagenologia::create([
                'start' => $request->start,
                'end' => $request->end,
                'color' => $espcolor,
                'nota' => $request->nota,
                'id_paciente' => $request->pac,
                'id_doctor' => $ids,
                'id_especialidad' => $espe,
                'id_cita' => 0,
                'estado' => 1,
                'anotaciones' => $request->anotaciones,
                ]);
            
                $citaid = CitasImagenologia::where('start', '=', $request->start)
                           ->where('id_paciente', '=', $request->pac)
                           ->value('id');  
            
                $urlsuser = "https://ciclica.lealtaddigitalsoft.mx/public/agendarestudios/$citaid";        
                $ticket = CitasImagenologia::find($citaid);
                $ticket->url = $urlsuser;
                $ticket->save();

                $almacen = [['message' => "Se agrego correctamente"]];             
                return response()->json(['data' => $almacen]);
          } else{
           $almacen = [['message' => "Error no se pudo agregar"]];             
                  return response()->json(['data' => $almacen]);               
           }
           
           }
           
       }  

           else{
               $url = $this->getUrlPrefix();
               $data = $model::create($request->all());
               return redirect()->to($url)->withStatus(__('Se agrego correctamente.'));   
          }
   	}

 //----------------------------------------------------------------------------------------------------------------------- 
	public function getEdit($id)
	{
      $model = $this->getModelInstance();
        //$data = $model::findOrFail($id);
    
        $names = $this->name;

         if($names == "Pacientes"){
            $data = User::select('users.name','users.app_name','users.apm_name','users.email','users.phone', 'users.medio', 'users.username', 'users.sex', 'pacientes.fecha_nacimiento', 'pacientes.telefono', 'pacientes.id_estado', 'pacientes.id_edo_civil', 'pacientes.calle', 'pacientes.num_ext', 'pacientes.num_int', 'pacientes.colonia', 'pacientes.ciudad', 'pacientes.id_estado_domicilio', 'pacientes.cp', 'pacientes.tipo_sangre', 'pacientes.ocupacion', 'pacientes.alergias', 'pacientes.nombre_pareja', 'pacientes.fch_nacimiento_pareja', 'pacientes.ocupacion_pareja', 'pacientes.celular_pareja', 'pacientes.email_pareja', 'pacientes.carta')
                  ->join('pacientes', 'users.id', '=', 'pacientes.id_user')
                  ->join('role_user', 'users.id', '=', 'role_user.user_id')
                  ->where('role_user.role_id', '=', 3)
                  ->where('users.id', '=', $id)
                  ->get();
             return response()->json(['data' => $data]);
         }
         elseif($names == "Caja"){
                $data = Caja::select('caja.id','caja.cantidad','caja.importe','caja.iva','caja.total', 'caja.forma_pago', 'caja.tc_td', 'users.username', 'users.name', 'caja.created_at', 'caja.id_paciente')
                      ->join('users', 'caja.id_paciente', '=', 'users.id')
                      ->join('role_user', 'users.id', '=', 'role_user.user_id')
                      ->where('role_user.role_id', '=', 3)
                      ->where('caja.id', '=', $id)
                      ->get();
             return response()->json(['data' => $data]);
          } 
         elseif($names == "Facturacion"){
                       $data = FacturasUsuarios::select('facturacion.id','facturacion.razon_social','facturacion.rfc','facturacion.email','facturacion.telefono','facturacion.cdfi', 'users.name','facturacion.created_at', 'facturacion.id_paciente')
                      ->join('users', 'facturacion.id_paciente', '=', 'users.id')
                      ->get();
             return response()->json(['data' => $data]);
          }
         elseif($names == "Recetas"){
               $ids = \Auth::user()->id;
                 $role = Role_User::where('user_id', '=', $ids)->value('role_id'); 
                 if($role == 5){
                     
                $url = $this->getUrlPrefix();
                $show = "Usuario";
                $ins = ("*$url-ins");
                $mod = ("*$url-mod");
                $eli = ("*$url-eli");
                $ver = ("*$url-ver");
                $valmod = \Entrust::can($mod);
                $valeli = \Entrust::can($eli); 
                $valver = \Entrust::can($ver); 
                
                return view($this->tpl_prefix . 'listfilterreceta', array('catalog' => $this),compact('id'))->with('ins', $ins)->with('mod', $mod)->with('eli', $eli)->with('show', $show)->with('ver', $ver);
                 }
                 else{
                 $data = Recetas::select('receta_medica.id','receta_medica.fechap','receta_medica.fechac', 'receta_medica.descripcionp', 'users.name as doctor', 'receta_medica.edad', 'receta_medica.talla', 'receta_medica.peso', 'receta_medica.temp', 'receta_medica.ta', 'receta_medica.fc', 'receta_medica.fr', 'receta_medica.expo_me', 'receta_medica.indica')
                      ->join('users', 'receta_medica.id_doctor', '=', 'users.id')
                      ->where('receta_medica.id', '=', $id)
                      ->get();
               return response()->json(['data' => $data]);
                 }
          }
         else if($names == "AgendarEstudios"){
               $ids = \Auth::user()->id;
               $role = Role_User::where('user_id', '=', $ids)->value('role_id'); 
               if($role == 1 || $role == 3){
                   $agenda = AgendarEstudio::where('id', '=', $id)
                             ->value('id_paciente');
                   if($agenda != " "){
                            $info = User::where('id', '=', $agenda)->get();
                            $descripcion = AgendarEstudio::where('id', '=', $id)
                             ->value('descripcion');
                            
                            return view('Catalogos.forms.checkup.procesoagendarestudios', compact('info', 'ids', 'id', 'descripcion'));
                            }
                }
                else if($role == 9){
                    
                    if($id == "0"){
                            return view('Catalogos.forms.asistente.procesoagendarestudios', compact('ids', 'id'));
                    }
                    else{
                    
                   $agenda = AgendarEstudio::where('id', '=', $id)
                             ->value('id_paciente');
                   if($agenda != " "){
                            $info = User::where('id', '=', $agenda)->get();
                            $descripcion = AgendarEstudio::where('id', '=', $id)
                             ->value('descripcion');
                            
                            return view('Catalogos.forms.checkup.procesoagendarestudios', compact('info', 'ids', 'id', 'descripcion'));
                            }
                    }
                }
                else if($role == 5){
                            $cita = Citas::where('id_doctor', '=', $ids)
                             ->where('cron_inicia', '!=', null)
                             ->where('cron_doctor', '!=', null)
                             ->where('cron_final', '=', null)
                             ->value('id_paciente');
               
                            if($cita != null){
                                
                            return view('Catalogos.forms.doctores.procesoagendarestudioscita', compact('ids', 'cita'));
                            }
                            else{
                            return view('Catalogos.forms.doctores.procesoagendarestudios', compact('ids'));
                            }
                            
                    }
          }
         else if($names == "AgendarEstudiosImagenologia"){
               $ids = \Auth::user()->id;
               $role = Role_User::where('user_id', '=', $ids)->value('role_id'); 
               if($role == 1 || $role == 3){
                $agenda = AgendarEstudio::where('id', '=', $id)
                             ->value('id_paciente');
                if($agenda != " "){
                            $info = User::where('id', '=', $agenda)->get();
                            $descripcion = AgendarEstudio::where('id', '=', $id)
                             ->value('descripcion');
                            
                            return view('Catalogos.forms.checkup.procesoagendarestudiosimagenologia', compact('info', 'ids', 'id', 'descripcion'));
                            }
                }
                else if($role == 9){
                    
                    if($id == "0"){
                            return view('Catalogos.forms.asistente.procesoagendarestudiosimagenologia', compact('ids', 'id'));
                    }
                    else{
                    
                  $agenda = AgendarEstudio::where('id', '=', $id)
                             ->value('id_paciente');
                if($agenda != " "){
                            $info = User::where('id', '=', $agenda)->get();
                            $descripcion = AgendarEstudio::where('id', '=', $id)
                             ->value('descripcion');
                            
                            
                            return view('Catalogos.forms.checkup.procesoagendarestudios', compact('info', 'ids', 'id', 'descripcion'));
                            }
                    }
                }
                else if($role == 5){
                            $cita = Citas::where('id_doctor', '=', $ids)
                             ->where('cron_inicia', '!=', null)
                             ->where('cron_doctor', '!=', null)
                             ->where('cron_final', '=', null)
                             ->value('id_paciente');
               
                            if($cita != null){
                                
                            return view('Catalogos.forms.doctores.procesoagendarestudiosimagenologiacita', compact('ids', 'cita'));
                            }
                            else{
                            return view('Catalogos.forms.doctores.procesoagendarestudiosimagenologia', compact('ids'));
                            }
                            
                    }
               
          }
         else if($names == "AddCaja"){
             
             $ids = \Auth::user()->id;
             $role = Role_User::where('user_id', '=', $ids)->value('role_id'); 
              if($role == 1 || $role == 5){
                
              $url = $this->getUrlPrefix();
              $agenda = Citas::where('id', '=', $id)
                             ->value('id_paciente');
              $info = User::where('id', '=', $agenda)->get();
            
                 $show = ""; 
                 return view('Catalogos/forms/checkup/procesoagendarcosto',array('catalog'=>$this), compact('info', 'ids', 'id'));
               }
               else if($role == 4){
                   $agenda = CitasLaboratorios::where('id', '=', $id)
                             ->value('id_paciente');
                   $info = User::where('id', '=', $agenda)->get();
                   $estu = AgendarEstudio::where('id_paciente', '=', $agenda)->orderby('id', 'desc')->get();
                   $tipo = CitasLaboratorios::where('id', '=', $id)->value("tipo");
            
                 $show = ""; 
                 return view('Catalogos/forms/laboratorio/procesoagendarcosto',array('catalog'=>$this), compact('info', 'ids', 'id', 'estu','tipo'));
               }
               
	     }
	     else if($names == "Laboratorio"){
                  $ids = \Auth::user()->id;
                 $role = Role_User::where('user_id', '=', $ids)->value('role_id'); 
                 if($role == 5 || $role == 9){
                $url = $this->getUrlPrefix();
                $show = "Usuario";
                $ins = ("*$url-ins");
                $mod = ("*$url-mod");
                $eli = ("*$url-eli");
                $ver = ("*$url-ver");
                $valmod = \Entrust::can($mod);
                $valeli = \Entrust::can($eli); 
                $valver = \Entrust::can($ver); 
                
                return view($this->tpl_prefix . 'listfilterdoctores', array('catalog' => $this),compact('id'))->with('ins', $ins)->with('mod', $mod)->with('eli', $eli)->with('show', $show)->with('ver', $ver);
                 }
	     }
         else if($names == "Laboratorio Finalizado"){
                  $ids = \Auth::user()->id;
                 $role = Role_User::where('user_id', '=', $ids)->value('role_id'); 
                 if($role == 5 || $role == 9){
                     //dd($id);
                $url = $this->getUrlPrefix();
                $show = "Usuario";
                $ins = ("*$url-ins");
                $mod = ("*$url-mod");
                $eli = ("*$url-eli");
                $ver = ("*$url-ver");
                $valmod = \Entrust::can($mod);
                $valeli = \Entrust::can($eli); 
                $valver = \Entrust::can($ver); 
                
                return view($this->tpl_prefix . 'listfilterdoctoresfinalizado', array('catalog' => $this),compact('id'))->with('ins', $ins)->with('mod', $mod)->with('eli', $eli)->with('show', $show)->with('ver', $ver);
                 }
        }
         else if($names == "Imagenologia"){
                  $ids = \Auth::user()->id;
                 $role = Role_User::where('user_id', '=', $ids)->value('role_id'); 
                 if($role == 5 || $role == 9){
                $url = $this->getUrlPrefix();
                $show = "Usuario";
                $ins = ("*$url-ins");
                $mod = ("*$url-mod");
                $eli = ("*$url-eli");
                $ver = ("*$url-ver");
                $valmod = \Entrust::can($mod);
                $valeli = \Entrust::can($eli); 
                $valver = \Entrust::can($ver); 
                
                return view($this->tpl_prefix . 'listfilterdoctoresimagenologia', array('catalog' => $this),compact('id'))->with('ins', $ins)->with('mod', $mod)->with('eli', $eli)->with('show', $show)->with('ver', $ver);
                 }
	     }
         else if($names == "Imagenologia Finalizado"){
                  $ids = \Auth::user()->id;
                 $role = Role_User::where('user_id', '=', $ids)->value('role_id'); 
                 if($role == 5 || $role == 9){
                     //dd($id);
                $url = $this->getUrlPrefix();
                $show = "Usuario";
                $ins = ("*$url-ins");
                $mod = ("*$url-mod");
                $eli = ("*$url-eli");
                $ver = ("*$url-ver");
                $valmod = \Entrust::can($mod);
                $valeli = \Entrust::can($eli); 
                $valver = \Entrust::can($ver); 
                
                return view($this->tpl_prefix . 'listfilterdoctoresimagenologiafinalizado', array('catalog' => $this),compact('id'))->with('ins', $ins)->with('mod', $mod)->with('eli', $eli)->with('show', $show)->with('ver', $ver);
                 }
        }
         
         else{
          $data = $model::where('id', '=', $id)->get();
             return response()->json(['data' => $data]);
         }
	}

//------------------------------------------------------------------------------------------------------------------------
    public function postEdit(Request $request, $id){
        $model = $this->getModelInstance();
        $v = Validator::make($request->all(), $this->getValidatorAdd() );  
           $names = $this->name;
        
        if ($names == "Usuarios") {

                 $ticket = User::find($id);
                 $ticket->name = $request->name;
                 $ticket->app_name = $request->app_name;
                 $ticket->apm_name = $request->apm_name;
                 $ticket->username = $request->username;
                 $ticket->email = $request->email;
                 $ticket->password = Hash::make($request->password);
                 $ticket->sex = $request->sex;
                 $ticket->phone = $request->phone;
                 $ticket->save();

                  $cadena = $request->especial;
                  if($cadena != ""){
                  $array = explode(",", $cadena);
                  $longitud = count($array);
               
                  for($i=1; $i<$longitud; $i++)
                  {
                     $valor = (int) $array[$i];
                    $especiali = EspecialidadUser::where('id_user', '=', $id)
                                                ->where('id_especialidad', '=', $valor) 
                                               ->value('id');
                 
                   if($especiali == ""){
                        
                         $datos = EspecialidadUser::create([
                         'id_user' => $id,
                         'id_especialidad' => $valor,
                         ]);
                   }
                  }
                }


                 $url = $this->getUrlPrefix();
                  return redirect()->to($url)->withStatus(__('Se actualizo correctamente.'));   
            }
        elseif ($names == "Pacientes") {
              
            $member = User::where('email', '=', $request->email)->value('id');  
            $numpac = User::where('username', '=', $request->username)->value('id');  
             if($member != ""){
                if($numpac != ""){
                
                $ticket = User::find($id);
                 $ticket->name = $request->name;
                 $ticket->app_name = $request->app_name;
                 $ticket->apm_name = $request->apm_name;
                 $ticket->email = $request->email;
                 $ticket->sex = $request->sex;
                 $ticket->phone = $request->phone;
                 $ticket->medio = $request->medio;
                 $ticket->save();
                 
                $userid = Pacientes::where('id_user', '=', $id)->value('id');  
            
                if($request->file('carta') != null){
                    $fileCon=$request->file('carta');
                    $nombreCon1 = $fileCon->getClientOriginalName();
                    \Storage::disk('usuarios')->put('/'.$id.'/'.$nombreCon1,  \File::get($fileCon));
                }
                else{ $nombreCon1 = Pacientes::where('id_user', '=', $id)->value('carta'); }
                
                $ticket = Pacientes::find($userid);
                $ticket->fecha_nacimiento = $request->fecha_nacimiento;
                $ticket->id_estado = $request->id_estado;
                $ticket->id_edo_civil = $request->id_edo_civil;
                $ticket->telefono = $request->telefono;
                $ticket->calle = $request->calle;
                $ticket->num_ext = $request->num_ext;
                $ticket->num_int = $request->num_int;
                $ticket->colonia = $request->colonia;
                $ticket->ciudad = $request->ciudad;
                $ticket->id_estado_domicilio = $request->id_estado_domicilio;
                $ticket->cp = $request->cp;
                $ticket->tipo_sangre = $request->tipo_sangre;
                $ticket->ocupacion = $request->ocupacion;
                $ticket->alergias = $request->alergias;
                $ticket->nombre_pareja = $request->nombre_pareja;
                $ticket->fch_nacimiento_pareja = $request->fch_nacimiento_pareja;
                $ticket->ocupacion_pareja = $request->ocupacion_pareja;
                $ticket->celular_pareja = $request->celular_pareja;
                $ticket->email_pareja = $request->email_pareja;
                $ticket->carta = $nombreCon1;
                $ticket->save();

                return redirect()->to($url)->withStatus(__('Se agrego correctamente.'));
                }
                else{
                   // dd($request->all());
                 $ticket = User::find($id);
                 $ticket->name = $request->name;
                 $ticket->app_name = $request->app_name;
                 $ticket->apm_name = $request->apm_name;
                 $ticket->email = $request->email;
                 $ticket->sex = $request->sex;
                 $ticket->phone = $request->phone;
                 $ticket->medio = $request->medio;
                 $ticket->save();
                 
                 if($request->file('carta') != null){
                    $fileCon=$request->file('carta');
                    $nombreCon1 = $fileCon->getClientOriginalName();
                    \Storage::disk('usuarios')->put('/'.$id.'/'.$nombreCon1,  \File::get($fileCon));
                }
                else{ $nombreCon1 = Pacientes::where('id_user', '=', $id)->value('carta'); }
   
                 // dd($nombreCon1);
                $userid = Pacientes::where('id_user', '=', $id)->value('id');  
            
                $ticket = Pacientes::find($userid);
                $ticket->fecha_nacimiento = $request->fecha_nacimiento;
                $ticket->id_estado = $request->id_estado;
                $ticket->id_edo_civil = $request->id_edo_civil;
                $ticket->telefono = $request->telefono;
                $ticket->calle = $request->calle;
                $ticket->num_ext = $request->num_ext;
                $ticket->num_int = $request->num_int;
                $ticket->colonia = $request->colonia;
                $ticket->ciudad = $request->ciudad;
                $ticket->id_estado_domicilio = $request->id_estado_domicilio;
                $ticket->cp = $request->cp;
                $ticket->tipo_sangre = $request->tipo_sangre;
                $ticket->ocupacion = $request->ocupacion;
                $ticket->alergias = $request->alergias;
                $ticket->nombre_pareja = $request->nombre_pareja;
                $ticket->fch_nacimiento_pareja = $request->fch_nacimiento_pareja;
                $ticket->ocupacion_pareja = $request->ocupacion_pareja;
                $ticket->celular_pareja = $request->celular_pareja;
                $ticket->email_pareja = $request->email_pareja;
                $ticket->carta = $nombreCon1;
                $ticket->save();
                $url = "dashboard";
                return redirect()->to($url)->withStatus(__('Se agrego correctamente ya puedes pasar a enfermeria para que te tomen tus signos vitales.'));
                }   
            }
             else{
                return redirect()->to($url)->withStatus(__('EL correo electronico no existe'));   
               
             }
                      
          }
        elseif($names == "RecetaImprimir"){
             
              date_default_timezone_set("America/Mexico_City");
              $date = date('Y-m-d H:i:s');
              $tim = date('H:i:s');
              $fecha = Citas::where('id', '=', $id)
                            ->where('cron_inicia', '!=', null)
                            ->where('cron_doctor', '!=', null)
                            ->value('id');
             // dd($fecha);
              if($fecha != null){
                
                //$pruebacolor='#9C27B0';
                $ticket = Citas::find($fecha);
                //$ticket->color = $pruebacolor;
                $ticket->cron_final =$tim;
                $ticket->save();
              }
                $url="dashboard";
              return redirect()->to($url)->withStatus(__('Se dio por finalizada el tiempo de la consulta.')); 
              
         }
        elseif($names == "RecetaImprimirCheckup"){
             
              date_default_timezone_set("America/Mexico_City");
              $date = date('Y-m-d H:i:s');
              $tim = date('H:i:s');
              $fecha = Citas::where('id', '=', $id)
                            ->where('cron_inicia', '!=', null)
                            ->where('cron_doctor', '!=', null)
                            ->where('id_especialidad', '=', 11)
                            ->value('id');
             // dd($fecha);
              if($fecha != null){
                
                //$pruebacolor='#9C27B0';
                $ticket = Citas::find($fecha);
                //$ticket->color = $pruebacolor;
                $ticket->cron_final =$tim;
                $ticket->save();
              }
                $url="dashboard";
              return redirect()->to($url)->withStatus(__('Se dio por finalizada el tiempo de la consulta.')); 
              
         }
        else if($names == "AddCaja"){
        
        $ids = \Auth::user()->id;
             $role = Role_User::where('user_id', '=', $ids)->value('role_id'); 
              if($role == 1 || $role == 5){
             
            $rest = Citas::where('id', '=', $id)
                             ->get();
            $res = Anexo13::where('id', '=', $request->id_precio)
                             ->get();
             
            /// dd($res[0]->precio); 
             $datos = CajaCitas::create([
                    'costo' => $res[0]->precio,
                    'id_paciente' => $rest[0]->id_paciente,
                    'id_doctor' => $rest[0]->id_doctor,
                    'id_cita' => $id,
                    'id_anexo13' => $request->id_precio,
                    ]);
             
              }
               else if($role == 4){
                   
                   $ids = AgendarEstudio::where('id_paciente', '=', $paciente)->orderby('id', 'desc')->value('id_cita'); 
                    $rest = CitasLaboratorio::where('id', '=', $ids)
                             ->get();
                    $res = Anexo13Laboratorio::where('id', '=', $request->id_precio_lab)
                             ->get();
             
            /// dd($res[0]->precio); 
             $datos = CajaCitas::create([
                    'costo' => $res[0]->precio,
                    'id_paciente' => $rest[0]->id_paciente,
                    'id_doctor' => $rest[0]->id_doctor,
                    'id_cita' => $ids,
                    'id_anexo13' => 5,
                    ]);
                    
                    
               }
               
                  else if($role == 6){
                   //dd($request->all());
                   
                    $rest = Citas::where('id', '=', $id)
                             ->get();
                    $res = Anexo13::where('id', '=', $request->id_precio)
                             ->get();
             
            /// dd($res[0]->precio); 
             $datos = CajaCitas::create([
                    'costo' => $res[0]->precio,
                    'id_paciente' => $rest[0]->id_paciente,
                    'id_doctor' => $rest[0]->id_doctor,
                    'id_cita' => $id,
                    'id_anexo13' => $request->id_precio,
                    ]);
                    
                   return redirect()->route('citver', [$id])->withStatus(__('Se agrego correctamente.'));
                    
               }
            
              
                return redirect()->route('addcajacitasget', [$id])->withStatus(__('Se agrego correctamente.'));
            
        }
        else if($names=="Signos Vitales"){
           
            $ids = \Auth::user()->id;
            $existe = Recetas::where('id_cita', '=', $id)->value('id');
            
            if($existe == null){
            $rec = Citas::where('id', '=', $id)->get();
            //dd($request->all());
             $tall3 = $request->ta1 . "/" . $request->ta2; 

            $datos = Recetas::create([
                 'id_paciente' => $rec[0]->id_paciente,
                 'id_doctor' => $rec[0]->id_doctor,
                 'talla' => $request->talla,
                 'peso' => $request->peso,
                 'temp' => $request->temp,
                 'ta' => $tall3,
                 'fc' => $request->fc,
                 'fr' => $request->fr,
                 'fm' => $request->fum,
                 'observaciones' => $request->observ,
                 'id_cita' => $id,
             ]);
           
                $url="dashboard";
              return redirect()->to($url)->withStatus(__('Se agrego correctamente.')); 
           }
           else{
                $url="dashboard";
              return redirect()->to($url)->withStatus(__('Ya tiene una receta.')); 
           }
         }
        else if($names=="Citas Checkup"){
           //dd($request->all());
            $ids = \Auth::user()->id;
            //dd($id);
             $ids = \Auth::user()->id;
                 $role = Role_User::where('user_id', '=', $ids)->value('role_id'); 
                 if($role == 5 || $role == 1){
              
            $fileCon=$request->file('file1');
            $nombreCon1 = $fileCon->getClientOriginalName();
            \Storage::disk('checkup')->put('/'.$id.'/'.$nombreCon1,  \File::get($fileCon));
        
             $check = AnexosCitasCheckup::where('id_cita', '=', $id)->value('id');
             //dd($check);
                    $ticket = AnexosCitasCheckup::find($check);
                    //$ticket->resultado = $request->resultado;
                    $ticket->archivo = $nombreCon1;
                   $ticket->save();
            }
            
            else{
                
                 $check = AnexosCitasCheckup::where('id_cita', '=', $id)->value('id');
                 $ticket = AnexosCitasCheckup::find($check);
                    //$ticket->resultado = $request->resultado;
                    $ticket->fecha_enfermeria = $request->min;
                   $ticket->save();
            }
                 
        return redirect()->to("dashboard")->withStatus(__('Se agrego correctamente.'));
            
         }
        else if($names == "Caja"){
             
             $data = CajaCitas::where('caja_citas.id_cita', '=', $id)
                      ->value('id_paciente');
             
             if($request->deuda == "No"){
                 
                $datos = Caja::create([
                'cantidad' => $request->cantidad,
                'iva' => $request->iva,
                'total' => $request->iva,
                'forma_pago' => $request->forma_pago,
                'tc_td' => $request->tc_td,
                'deuda' => $request->deuda,
                //'cant_deuda' => $request->cant_deuda,
                'factura' => $request->factura,
                'id_paciente' => $data,
                'id_cita' => $id,
                ]);
                
                 $ticket = Citas::find($id);
                 $ticket->cobrar_status = 1;
                 $ticket->save();
             
             }
             else{
                 
                $datos = Anexo16::create([
                'cantidad' => $request->cantidad,
                'iva' => $request->iva,
                'total' => $request->total,
                'forma_pago' => $request->forma_pago,
                'tc_td' => $request->tc_td,
                'deuda' => $request->total,
                //'cant_deuda' => $request->cant_deuda,
                'factura' => $request->factura,
                'fech_pago' => $request->fech_pago,
                'id_paciente' => $data,
                'id_cita' => $id,
                ]);
                
                
                 $ticket = Citas::find($id);
                 $ticket->cobrar_status = 2;
                 $ticket->save();
             
             }
             
                 $url="dashboard";
                 return redirect()->to($url)->withStatus(__('Cambio guardado correctamente.'));   
             
        }
          else{
                    $data = $model::findOrFail($id);
                    $data->fill($request->all());
                    $data->save();
    
                    $url = $this->getUrlPrefix();
                    return redirect()->to($url)->withStatus(__('Se actualizo correctamente.'));   
      
          }
}

    public function getDestroy($id){

            $names = $this->name;
         if($names == "Pacientes"){

            $url = $this->getUrlPrefix();
            $userid = Pacientes::where('id_user', '=', $id)->value('id');  
            
             $data = User::destroy($id);
             $datsa = Pacientes::destroy($userid);
             $url = $this->getUrlPrefix();
             return redirect()->to($url);           
      }
         elseif($names == "Citas"){
        
            $ids = \Auth::user()->id;
            $role = Role_User::where('user_id', '=', $ids)->value('role_id'); 
            if($role == 1 || $role == 5){
              date_default_timezone_set("America/Mexico_City");
              $date = date('Y-m-d H:s:m');
              $fecha = Citas::where('id', '=', $id)
                           ->where('start', '>=', $date)
                           ->where('cron_inicia', '=', null)
                           ->value('start');
              if($fecha != null){
                  $espe = Citas::where('id', '=', $id)->value('id_especialidad');
                  $data = Citas::destroy($id);
                  if($espe == 11){
                     $cit = AnexosCitasCheckup::where('id_cita', '=', $id)->value('id');
                     AnexosCitasCheckup::destroy($cit);
                  }
              
              $almacen = [
                 ['message' => "Se elimino correctamente"]
                ];
              }
              else{
                   $almacen = [
                       ['message' => "No tiene permiso para eliminar"]
                      ];     
              }       
            }
            else{
             $almacen = [
                 ['message' => "No tiene permiso para eliminar"]
                ]; 
            }
             
      return response()->json(['data' => $almacen]);
  
      }
         elseif($names == "Citas de Laboratorios"){
        
            $ids = \Auth::user()->id;
            $role = Role_User::where('user_id', '=', $ids)->value('role_id'); 
            if($role == 1 || $role == 5){
              
             $fecha = CitasLaboratorios::where('id', '=', $id)
                           ->value('start');
              if($fecha != null){
              $data = CitasLaboratorios::destroy($id);
              $almacen = [
                 ['message' => "Se elimino correctamente"]
                ];
              }
              else{
                   $almacen = [
                       ['message' => "No tiene permiso para eliminar"]
                      ];     
              }       
            }
            else{
                   $almacen = [
                       ['message' => "No tiene permiso para eliminar"]
                      ];     
              }    
      return response()->json(['data' => $almacen]);
  
      }
         elseif($names == "Citas de Imagenologia"){
        
            $ids = \Auth::user()->id;
            $role = Role_User::where('user_id', '=', $ids)->value('role_id'); 
            if($role == 1 || $role == 5){
              
             $fecha = CitasImagenologia::where('id', '=', $id)
                           ->value('start');
              if($fecha != null){
              $data = CitasImagenologia::destroy($id);
              $almacen = [
                 ['message' => "Se elimino correctamente"]
                ];
              }
              else{
                   $almacen = [
                       ['message' => "No tiene permiso para eliminar"]
                      ];     
              }       
            }
            else{
                   $almacen = [
                       ['message' => "No tiene permiso para eliminar"]
                      ];     
              }    
      return response()->json(['data' => $almacen]);
  
      }
         else if($names=="Citas Checkup"){
             //dd($id);
          $check = AnexosCitasCheckup::where('id_cita', '=', $id)->value('id');
        
             $data = AnexosCitasCheckup::destroy($check);
             return redirect()->to("dashboard")->withStatus(__('Se elimino correctamente.'));
      }
         elseif($names == "AddCaja"){
            
             $ids = \Auth::user()->id;
             $role = Role_User::where('user_id', '=', $ids)->value('role_id'); 
             if($role == 6){
             //dd($id); 
             $datos = CajaCitas::where('id', '=', $id)
                             ->value('id_cita');
             $data = CajaCitas::destroy($id);
            return redirect()->route('citver', [$datos])->withStatus(__('Se elimino correctamente.'));
            
             }
             else{
                $datos = CajaCitas::where('id', '=', $id)
                             ->value('id_cita');
             $data = CajaCitas::destroy($id);
             return redirect()->route('addcajacitasget', [$datos])->withStatus(__('Se elimino correctamente.'));
             }
         }
         else {

           $model = $this->getModelInstance();
           $url = $this->getUrlPrefix();

             $data = $model::destroy($id);
             $url = $this->getUrlPrefix();
             return redirect()->to($url)->withStatus(__('Se elimino correctamente.'));   
         }
    }

    public function getVer($id)
    { 
     $names = $this->name;

      if($names == "Citas"){
        
            $ids = \Auth::user()->id;
            $role = Role_User::where('user_id', '=', $ids)->value('role_id'); 
            if($role == 1 || $role == 9){
              date_default_timezone_set("America/Mexico_City");
              $date = date('Y-m-d H:i:s');
              $tim = date('H:i:s');
              $fecha = Citas::where('id', '=', $id)
                            //->where('start', '<=', $date)
                            //->where('end', '>=', $date)
                            ->where('cron_inicia', '=', null)
                            ->value('id_paciente');
              //dd($fecha);
              if($fecha != null){
                //$prueba_color='#00FFC4';
                //$cambia_url="";
  
                $ticket = Citas::find($id);
                //$ticket->url =$cambia_url;
                //$ticket->color =$prueba_color;
                $ticket->cron_inicia =$tim;
                $ticket->save();
                 
                //$update = User::where('id', '=', $id_paciente)
                   //         ->update(['anex1' => null]);

              $almacen = [
                 ['message' => "Se inicio correctamente"]
                ];
              }
              else{
                   $almacen = [
                       ['message' => "No tiene permiso para iniciar la cita"]
                      ];     
              }       
            }
            else{
             $almacen = [
                 ['message' => "No tiene permiso para iniciar la cita"]
                ]; 
            }
             
      return response()->json(['data' => $almacen]);
  
      }
      
      else if($names == "Pacientes"){
        //dd($id);
            $ids = \Auth::user()->id;
            $role = Role_User::where('user_id', '=', $ids)->value('role_id'); 
            if($role == 3){
                $info = User::where('id', '=', $ids)->get();
                 return view('Catalogos.forms.usuarios.pacientes', compact('ids', 'info', 'id'));
  
            }
             if($role == 7){
                $info = User::where('id', '=', $ids)->get();
                $anexo = Anexo1::where('id_paciente', '=', $id)->get();
                 return view('Catalogos.forms.enfermera.pacientes', compact('ids', 'info', 'id', 'anexo'));
  
            }
            if($role == 5 || $role == 9){
                $info = User::select('users.id', 'users.name', 'users.app_name', 'users.apm_name','users.username','users.phone', 'users.medio', 'pacientes.id_user','pacientes.fecha_nacimiento','pacientes.id_estado','pacientes.id_edo_civil','pacientes.telefono','users.email','pacientes.calle','pacientes.num_ext','pacientes.num_int','pacientes.colonia','pacientes.ciudad','pacientes.id_estado_domicilio','pacientes.cp','pacientes.tipo_sangre','pacientes.ocupacion','pacientes.alergias','pacientes.nombre_pareja','pacientes.fch_nacimiento_pareja','pacientes.ocupacion_pareja','pacientes.celular_pareja','pacientes.email_pareja',
                'cat_edo_civil.name as edovicilname', 'cat_edo_civil.id as idedocivil')
                ->join('pacientes', 'users.id', '=', 'pacientes.id_user')
                ->join('cat_edo_civil', 'pacientes.id_edo_civil', '=', 'cat_edo_civil.id')
                ->where('users.id', '=', $id)
                ->get();
                //dd($info);
                 return view('Catalogos.forms.doctores.pacientes', compact('ids', 'info', 'id'));
  
            }
      }
      
      elseif($names == "Cobrar"){
       
        //dd($id);
         $ids = \Auth::user()->id;
         $role = Role_User::where('user_id', '=', $ids)->value('role_id'); 
         if($role == 6){
            $cita = $id;
         $paciente = Citas::where('id', '=', $cita)->value("id_paciente");
         
         $citas = Citas::where('id', '=', $cita)->get();
         $info = User::where('id', '=', $paciente)->get();
        
         $data = CajaCitas::select('caja_citas.id as ident', 'caja_citas.id_cita', 'caja_citas.costo', 'caja_citas.id_anexo13', 'caja_citas.created_at', 
         'an13.id', 'an13.clave', 'an13.descripcion', 'an13.id_cat_anexo13', 'catan13.id', 'catan13.nombre as nomb',
         \DB::raw('CONCAT(doctor.name, " ", doctor.app_name, " ", doctor.apm_name) as doctores'))
                      ->leftjoin('users as doctor', 'caja_citas.id_doctor', '=', 'doctor.id')
                      ->leftjoin('anexo13 as an13', 'caja_citas.id_anexo13', '=', 'an13.id')
                      ->leftjoin('cat_anexo13 as catan13', 'an13.id_cat_anexo13', '=', 'catan13.id')
                      ->where('caja_citas.id_cita', '=', $id)
                      ->get();
          $cantidad= CajaCitas::select(\DB::raw('SUM(costo) as Total'))
                                ->where('id_cita', '=', $id)->value('Total');                 
          $iva = ($cantidad*16/100);
          $total = ($cantidad+$iva);
          
          }
          //dd($data);
        return view('Catalogos.forms.caja.estudiosprocesoconsultawisar', compact('info', 'ids', 'id','data', 'cantidad', 'iva', 'total'),compact('citas'));

       }
      
      else if ($names == "Citas Estadisticas") {
          
            $url = $this->getUrlPrefix();
          
          $ids = \Auth::user()->id;
            $role = Role_User::where('user_id', '=', $ids)->value('role_id'); 
            if($role == 1){
            
            $ins = ("*$url-ins");
            $mod = ("*$url-mod");
            $eli = ("*$url-eli");
            $ver = ("*$url-ver");
            $fac = ("*$url-fac");
            $pac = ("*$url-pac");
            $valmod = \Entrust::can($mod);
            $valeli = \Entrust::can($eli);
            $valver = \Entrust::can($ver);
           
            $show = "User";
        
            $terminadas=\DB::table('citas')->where('id_doctor','=',$id)->where('tiempo_cita','!=',null)->count();
            $canceladas=\DB::table('citas')->where('id_doctor','=',$id)->where('cron_final','=',null)->count();
           
            //$facturas=count(\DB::table('facturas')->where('id_bomba','=',$bomba->id)->get());
            $cit=\DB::table('citas')->where('id_doctor','=',$id)->where('cron_final','=',null)->get();
            
            return view($this->tpl_prefix . 'listDoctoresVer', array('catalog' => $this))->with('ins', $ins)->with('mod', $mod)->with('eli', $eli)->with('show', $show)->with('ver', $ver)
            ->with('terminadas', $terminadas)->with('canceladas', $canceladas)->with('ids', $id)->with('cit', $cit); 
            
            }
            else{
                 return redirect()->to($url)->withStatus(__('No es un usuario doctor'));
            }
    }
      
      else{         
         $url = $this->getUrlPrefix();
         return view($this->tpl_prefix.'ver',array('data'=>$data),array('show'=>$show, 'pl'=>$pl));
      }
 }
 
    public function getFinalizar($id)
   { 
     $names = $this->name;

      if($names == "Citas"){
        
            $ids = \Auth::user()->id;
            $role = Role_User::where('user_id', '=', $ids)->value('role_id'); 
            if($role == 1 || $role == 4 || $role == 9){
              date_default_timezone_set("America/Mexico_City");
              $date = date('Y-m-d H:i:s');
              $tim = date('H:i:s');
              //$fecha = Citas::where('id', '=', $id)->value('start');
             // if($date >= $fecha){
            //  dd($$id);
                 $fecha = Citas::where('id', '=', $id)
                            ->where('tiempo_cita', '=', null)
                            ->get();
                $inicia = $fecha[0]->cron_inicia;
                
                $fechaUno=new \DateTime($inicia);
                $fechaDos=new \DateTime($tim);

                $dateInterval = $fechaUno->diff($fechaDos);
                $result = $dateInterval->format('%H:%i:%s');
                
              if($inicia != null){
             
                //$prueba_color='#9C27B0';
                $ticket = Citas::find($id);
                //$ticket->color =$prueba_color;
                $ticket->tiempo_cita =$result;
                $ticket->save();

              $almacen = [
                 ['message' => "Se finalizo correctamente"]
                ];
              }
              else{
                   $almacen = [
                       ['message' => "No tiene permiso para finalizar la cita"]
                      ];     
              }       
            }
            else{
             $almacen = [
                 ['message' => "No tiene permiso para finalizar la citas"]
                ]; 
            }
             
      return response()->json(['data' => $almacen]);
  
      }
      else{         
         $url = $this->getUrlPrefix();
         return view($this->tpl_prefix.'ver',array('data'=>$data),array('show'=>$show, 'pl'=>$pl));
      }
 }
 
  public function getConfirmar($id)
   { 
     $names = $this->name;

      if($names == "Citas"){
        
            $ids = \Auth::user()->id;
            $role = Role_User::where('user_id', '=', $ids)->value('role_id'); 
            if($role == 1 || $role == 4 || $role == 9){
           
                 $paciente = Citas::where('id', '=', $id)
                            ->value('id_paciente');
                //dd($paciente);
                if($paciente != null){
                $prueba_color='#6C79AF';
                $ticket = Citas::find($id);
                $ticket->color_status = $prueba_color;
                $ticket->save();

              $almacen = [
                 ['message' => "Se confirmo correctamente"]
                ];
              }
              else{
                   $almacen = [
                       ['message' => "No tiene permiso para confirmar la cita"]
                      ];     
              }       
            }
            else{
             $almacen = [
                 ['message' => "No tiene permiso para confirmar la citas"]
                ]; 
            }
             
      return response()->json(['data' => $almacen]);
  
      }
      else{         
         $url = $this->getUrlPrefix();
         return view($this->tpl_prefix.'ver',array('data'=>$data),array('show'=>$show, 'pl'=>$pl));
      }
 }
 
  public function postModificar(Request $request)
   { 
     $names = $this->name;

      if($names == "Citas"){
        
            $ids = \Auth::user()->id;
            $role = Role_User::where('user_id', '=', $ids)->value('role_id'); 
            if($role == 1 || $role == 4 || $role == 9){
           
                //dd($request->all());
                
                date_default_timezone_set("America/Mexico_City");
                $date = date('Y-m-d');
                $tim = date('H:i');
                
                 $cita = Citas::where('id', '=', $request->id)
                            ->get();
                            
                $doctor=$cita[0]->id_doctor;
                $especialidad=$cita[0]->id_especialidad; 
                
                 $i = $request->fecha . " 00:00:00";
                 $f = $request->fecha . " 23:59:59";
                 
                 $ii = $request->fecha . " " . $request->hor_inicial;
                 $ff = $request->fecha . " " . $request->hor_final;
                 
                 $factual = date('Y-m-d H:i');
                 //dd($ii);
                if($ii < $ff){ 
                 if($ii >= $factual){
                     
                     $verifica = Citas::where('id_doctor', '=', $doctor)
                            ->value('end');
                    
                    if($verifica >= $ii){
                          $almacen = [
                                ['message' => "Se encuentra en un horario ya ocupado"]
                                ];   
                    }
                    else{
                            $ticket = Citas::find($request->id);
                            $ticket->start = $ii;
                            $ticket->end = $ff;
                            $ticket->save();
                        $almacen = [
                                ['message' => "Se modifico correctamente"]
                                ]; 
                    }
                     
                 }
                 else{
                     $almacen = [
                                 ['message' => "El horario tiene que ser mayor al actual"]
                                ]; 
                 }
                }
                else{
                    $almacen = [
                                ['message' => "La hora de inicio no coincide con la hora final"]
                                ]; 
                }
                 
      
            }
            else{
             $almacen = [
                 ['message' => "No tiene permiso para confirmar la citas"]
                ]; 
            }
             
                         return response()->json(['data' => $almacen]);
  
      }
      else{         
         $url = $this->getUrlPrefix();
         return view($this->tpl_prefix.'ver',array('data'=>$data),array('show'=>$show, 'pl'=>$pl));
      }
 }
 //Select 2 ----------------------------------------------------------------------------------------------

    public function downloadcitascheckupFile1($archivo){
       $id = AnexosCitasCheckup::where('archivo', '=', $archivo)->value('id_cita');
      $path = storage_path('app/checkup/'.$id.'/').$archivo;
       return response()->download($path);
    }
    
    public function downloadcarta($archivo){
       $id = Pacientes::where('carta', '=', $archivo)->value('id_user');
      $path = storage_path('app/usuarios/'.$id.'/').$archivo;
       return response()->download($path);
    }
    
    public function downloadimprimirreceta($id){
            
             $descrip = Recetas::select(\DB::raw('CONCAT(paciente.name, " ", paciente.app_name, " ", paciente.apm_name) AS usuario'), 'receta_medica.fechap', 'receta_medica.descripcionp', 
             'receta_medica.talla', 'receta_medica.peso', 'receta_medica.temp',
             \DB::raw('CONCAT(doctor.name, " ", doctor.app_name, " ", doctor.apm_name) AS doctores'))
                        ->join('users as paciente', 'receta_medica.id_paciente', '=', 'paciente.id')
                        ->join('users as doctor', 'receta_medica.id_doctor', '=', 'doctor.id')
                        ->where('receta_medica.id','=',$id)
                        ->get();
           
             $view =  \View::make('pdf.recetas', compact('descrip'))->render();
      
             $pdf = \App::make('dompdf.wrapper');
                set_time_limit(60);
             $pdf->loadHTML($view)->setPaper('a4', 'landscape');  
                //$pdf->loadHTML($view)->setPaper('a4', 'portrait');  
                return $pdf->download('receta.pdf');
                //return $pdf->stream('receta');
           
        
        
    }
    
    public function downloadimprimirestudios($id){
            
             $descrip = AgendarEstudio::select(\DB::raw('CONCAT(paciente.name, " ", paciente.app_name, " ", paciente.apm_name) AS usuario'), 'agendarestudio.created_at', 'agendarestudio.descripcion', 
             \DB::raw('CONCAT(doctor.name, " ", doctor.app_name, " ", doctor.apm_name) AS doctores'))
                        ->join('users as paciente', 'agendarestudio.id_paciente', '=', 'paciente.id')
                        ->join('users as doctor', 'agendarestudio.id_doctor', '=', 'doctor.id')
                        ->where('agendarestudio.id','=',$id)
                        ->get();
           
             $view =  \View::make('pdf.estudios', compact('descrip'))->render();
      
             $pdf = \App::make('dompdf.wrapper');
                set_time_limit(60);
             $pdf->loadHTML($view)->setPaper('a4', 'landscape');  
                //$pdf->loadHTML($view)->setPaper('a4', 'portrait');  
                return $pdf->download('estudios.pdf');
                //return $pdf->stream('estudios');
           
        
        
    }
    
    public function downloadimprimirnota($id){
                
         $caja = Caja::select(\DB::raw('CONCAT(paciente.name, " ", paciente.app_name, " ", paciente.apm_name) AS usuario'), 'caja.created_at','caja.id_cita','caja.id_paciente')
                        ->join('users as paciente', 'caja.id_paciente', '=', 'paciente.id')
                        ->where('caja.id', '=', $id)
                        ->get();
                        
         $cita = $caja[0]->id_cita;
         $paciente = $caja[0]->id_paciente;
         $citas = Citas::where('id', '=', $cita)->get();
         $info = User::where('id', '=', $paciente)->get();
       
         $data = CajaCitas::select('caja_citas.id as ident', 'caja_citas.id_cita', 'caja_citas.costo', 'caja_citas.id_anexo13', 'caja_citas.created_at', 
         'an13.id', 'an13.clave', 'an13.descripcion', 'an13.id_cat_anexo13', 'catan13.id', 'catan13.nombre as nomb',
         \DB::raw('CONCAT(doctor.name, " ", doctor.app_name, " ", doctor.apm_name) as doctores'))
                      ->leftjoin('users as doctor', 'caja_citas.id_doctor', '=', 'doctor.id')
                      ->leftjoin('anexo13 as an13', 'caja_citas.id_anexo13', '=', 'an13.id')
                      ->leftjoin('cat_anexo13 as catan13', 'an13.id_cat_anexo13', '=', 'catan13.id')
                      ->where('caja_citas.id_cita', '=', $cita)
                      ->get();
          $cantidad= CajaCitas::select(\DB::raw('SUM(costo) as Total'))
                                ->where('id_cita', '=', $cita)->value('Total');                 
          $iva = ($cantidad*16/100);
          $total = ($cantidad+$iva);
          
          //dd($data);
            $view =  \View::make('pdf.nota', compact('info', 'caja', 'data', 'cantidad', 'iva', 'total'));
            
            $pdf = \App::make('dompdf.wrapper');
                set_time_limit(60);
             $pdf->loadHTML($view)->setPaper('a4', 'landscape');  
                //$pdf->loadHTML($view)->setPaper('a4', 'portrait');  
                return $pdf->download('nota.pdf');
                //return $pdf->stream('nota');
              

           
        
        
    }
    
    
    public function getAjaxlistaGraphics() {
      $almacen = [
                 ['id' => '1', 'name' => 'Numero de registros'],
                 ['id' => '2', 'name' => 'Sexo'],
                 ['id' => '3', 'name' => 'no se']
                ];           
      return response()->json(['data' => $almacen]);

    }

     public function getAjaxlistaSex() {    
      $almacen = [
                 ['id' => '2', 'name' => 'Hombre'],
                 ['id' => '1', 'name' => 'Mujer']
                ];           
      return response()->json(['data' => $almacen]);
    }
    
     public function getAjaxlistaDays_Deliver() {    
      $almacen = [
                 ['id' => '1', 'days_deliver' => '1'],['id' => '2', 'days_deliver' => '2'],['id' => '3', 'days_deliver' => '3'],['id' => '4', 'days_deliver' => '4'],['id' => '5', 'days_deliver' => '5'],['id' => '6', 'days_deliver' => '6'],['id' => '7', 'days_deliver' => '7'],['id' => '8', 'days_deliver' => '8'],['id' => '9', 'days_deliver' => '9'],['id' => '10', 'days_deliver' => '10'],
                 ['id' => '11', 'days_deliver' => '11'],['id' => '12', 'days_deliver' => '12'],['id' => '13', 'days_deliver' => '13'],['id' => '14', 'days_deliver' => '14'],['id' => '15', 'days_deliver' => '15'],['id' => '16', 'days_deliver' => '16'],['id' => '17', 'days_deliver' => '17'],['id' => '18', 'days_deliver' => '18'],['id' => '19', 'days_deliver' => '19'],['id' => '20', 'days_deliver' => '20'],
                 ['id' => '21', 'days_deliver' => '21'],['id' => '22', 'days_deliver' => '22'],['id' => '23', 'days_deliver' => '23'],['id' => '24', 'days_deliver' => '24'],['id' => '25', 'days_deliver' => '25'],['id' => '26', 'days_deliver' => '26'],['id' => '27', 'days_deliver' => '27'],['id' => '28', 'days_deliver' => '28'],['id' => '29', 'days_deliver' => '29'],['id' => '30', 'days_deliver' => '30'],
                ];           
      return response()->json(['data' => $almacen]);
    }


     public function getAjaxlistaCountEnfermera() {

             $almacen = Citas::select('citas.id','citas.cron_inicia', 'citas.nota', 'usuario.name as usuario', 'doctor.name as doctor', 'especialidad.name as espe','receta_medica.talla')
                      ->join('users as usuario', 'citas.id_paciente', '=', 'usuario.id')
                      ->join('users as doctor', 'citas.id_doctor', '=', 'doctor.id')
                      ->join('especialidad', 'citas.id_especialidad', '=', 'especialidad.id')
                      ->leftjoin('receta_medica', 'citas.id', '=', 'receta_medica.id_cita')
                      ->where('cron_inicia', '!=', null)
                      ->where('cron_doctor', '=', null)
                      ->where('receta_medica.talla', '=', null)
                      ->count();
             
      return $almacen;
    }
    
     public function getAjaxlistaCountDoctores() {
         
         $ids = \Auth::user()->id;

             $almacen = Citas::select('citas.id','citas.cron_inicia', 'citas.nota', 'especialidad.name as espe')
                      ->join('especialidad', 'citas.id_especialidad', '=', 'especialidad.id')
                      ->where('cron_inicia', '!=', null)
                      ->where('cron_doctor', '=', null)
                      ->where('id_doctor', '=', $ids)
                      ->count();
          
      return $almacen;
    }
    
    //select del sistema
    public function getAjaxlistaDoctoresUsuarios($id) {
     
        if($id == 12){
            $almacen = User::select(\DB::raw('CONCAT(users.name, " ", users.app_name, " ", users.apm_name) AS title'), 'users.id')
            ->join('role_user', 'users.id', '=', 'role_user.user_id')
            ->join('especialidad_user', 'users.id', '=', 'especialidad_user.id_user')
            ->where('role_user.role_id', '=', 5)
            ->get();
        }
        else if($id == 11){
            $almacen = User::select(\DB::raw('CONCAT(users.name, " ", users.app_name, " ", users.apm_name) AS title'), 'users.id')
            ->join('role_user', 'users.id', '=', 'role_user.user_id')
            ->join('especialidad_user', 'users.id', '=', 'especialidad_user.id_user')
            ->where('role_user.role_id', '=', 5)
            ->get();
        }
        else{
            $almacen = User::select(\DB::raw('CONCAT(users.name, " ", users.app_name, " ", users.apm_name) AS title'), 'users.id')
            ->join('role_user', 'users.id', '=', 'role_user.user_id')
            ->join('especialidad_user', 'users.id', '=', 'especialidad_user.id_user')
            ->where('role_user.role_id', '=', 5)
            ->where('especialidad_user.id_especialidad', '=', $id)
            ->get();
        }
      return response()->json(['data' => $almacen]);
    }
    
    public function getAjaxlistaUser() {
      //$almacen = User::select('users.id','users.name','role_user.role_id')
       $almacen = User::select(\DB::raw('CONCAT(users.name, " ", users.app_name, " ", users.apm_name) AS title'), 'users.id')
            ->join('role_user', 'users.id', '=', 'role_user.user_id')
            //->join('especialidad_user', 'users.id', '=', 'especialidad_user.id_user')
            ->where('role_user.role_id', '=', 5)
            //->orderBy('id_doctor')
            ->get();
      return response()->json(['data' => $almacen]);
    }
    
    public function getAjaxlistaUsers() {
      //$almacen = \DB::select("SELECT id, name FROM users");
      $almacen = User::select('users.id','users.name','role_user.role_id')

            ->join('role_user', 'users.id', '=', 'role_user.user_id')
            ->where('role_user.role_id', '=', 3)
            ->get();

      return response()->json(['data' => $almacen]);
    }

    public function getAjaxlistaTipoUsuario() {
      $almacen = Role::select('id','name')
            ->where('id', '>=', 4)
            ->get();
      return response()->json(['data' => $almacen]);
    }
    
    public function getAjaxlistaAnotaciones() {
      $almacen = Anotaciones::select('id','nombre')
            ->get();
      return response()->json(['data' => $almacen]);
    }

    public function getAjaxlistaPaciente() {
      $almacen = User::select(\DB::raw('CONCAT(users.name, " ", users.app_name, " ", users.apm_name) as title'),'users.id','users.name','role_user.role_id')
            ->join('role_user', 'users.id', '=', 'role_user.user_id')
            ->where('role_user.role_id', '=', 3)
            ->get();

      return response()->json(['data' => $almacen]);
    }

    public function getAjaxlistaNumeroPaciente() {
      $almacen = User::select(\DB::raw('CONCAT(users.username, " ", users.name, " ", users.app_name, " ", users.apm_name) as paciente'), \DB::raw('CONCAT(users.name, " ", users.app_name, " ", users.apm_name) as namepac'), 'users.id','users.name','role_user.role_id')
            ->join('role_user', 'users.id', '=', 'role_user.user_id')
            ->where('role_user.role_id', '=', 3)
            ->get();

      return response()->json(['data' => $almacen]);
    }

    public function getAjaxlistaEspecialidad() {
      $id = \Auth::user()->id;
      $rol = Role_User::where('user_id', '=', $id)->value('role_id');
      if($rol == 3){
            $paciente = Citas::where("id_paciente", "=", $id)->value('id');
            if($paciente != null){
                $almacen = Especialidad::select('id','name')
                ->get();
            }
            else{
                $almacen = Especialidad::select('id','name')
                //->where('id', '=', 12)
                ->get();
            }
        }
        else{
            $almacen = Especialidad::select('id','name')
            ->get();
        }
      return response()->json(['data' => $almacen]);
      
    }
 
    public function getAjaxlistaFacturacion() {
     $almacen = FacturasUsuarios::select('facturacion.id','users.name')
            ->join('users', 'facturacion.id_paciente', '=', 'users.id')
            ->get();
      return response()->json(['data' => $almacen]);
    }

    public function getAjaxlistaEstudio() {
     $almacen = Estudio::select('id','name')
            ->get();
      return response()->json(['data' => $almacen]);
    }
    
    public function getAjaxlistaCheckup() {
      $almacen = AnexosCheckup::get();

      return response()->json(['data' => $almacen]);
    }
    
    public function getAjaxlistaCheckup1722($id) {
     
            $almacen = Anexos1722::where('id_checkup', '=', $id)
            ->get();
            
      return response()->json(['data' => $almacen]);
    }

 
    //precios
    public function getAjaxlistaPreciosGenerales() {
       $almacen = Anexo13::select(\DB::raw('CONCAT(anexo13.clave, " ", anexo13.descripcion) as name'), 'anexo13.id')->get();
      return response()->json(['data' => $almacen]);
    }
    
    //precios laboratorio
    public function getAjaxlistaPreciosGeneralesLab() {
       $almacen = Anexo13Laboratorio::select(\DB::raw('CONCAT(anexo13_laboratorio.clave, " ", anexo13_laboratorio.descripcion) as name'), 'anexo13_laboratorio.id')->get();
      return response()->json(['data' => $almacen]);
    }
    
    //precios imagenologia
    public function getAjaxlistaPreciosGeneralesImg() {
       $almacen = Anexo13Imagenologia::select(\DB::raw('CONCAT(anexo13_imagenologia.clave, " ", anexo13_imagenologia.descripcion) as name'), 'anexo13_imagenologia.id')->get();
      return response()->json(['data' => $almacen]);
    }
    
    public function getAjaxlistaCitaUsuario($id) {
    if($id != 0){
       $almacen = Citas::select(\DB::raw('CONCAT(users.name, " ", users.app_name, " ", users.apm_name) as title'),'start','end','color as backgroundColor','citas.id', 'citas.nota','citas.cron_inicia', \DB::raw('(CASE 
                        WHEN users.picture != null THEN users.picture 
                        ELSE "default-avatar.png"
                        END) AS img'))
            ->join('users', 'citas.id_paciente', '=', 'users.id')
            ->where("id_doctor", "=", $id)
            //->where("cron_final", "=", null)
            ->get();
      
      }
    }
   
    //calendario
    public function getAjaxlistaCita($id) {
    if($id != 0){
       $almacen = Citas::select(\DB::raw('CONCAT(users.name, " ", users.app_name, " ", users.apm_name) as title'),'start','end','color as backgroundColor','citas.id', 'citas.nota','citas.cron_inicia', \DB::raw('(CASE 
                        WHEN users.picture != null THEN users.picture 
                        ELSE "default-avatar.png"
                        END) AS img'))
            ->join('users', 'citas.id_paciente', '=', 'users.id')
            ->where("id_doctor", "=", $id)
            //->where("cron_final", "=", null)
            ->get();
            //dd($almacen);
          }
      else{
        $ids = \Auth::user()->id;
        $almacen = Citas::select(\DB::raw('CONCAT(users.name, " ", users.app_name, " ", users.apm_name) as title'),'start','end','color as backgroundColor','citas.id', 'citas.nota','citas.cron_inicia', \DB::raw('(CASE 
                        WHEN users.picture != null THEN users.picture 
                        ELSE "default-avatar.png"
                        END) AS img'))
            ->join('users', 'citas.id_paciente', '=', 'users.id')
            ->where("id_paciente", "=", $ids)
            //->where("cron_final", "=", null)
            ->get();
      }
           return response()->json($almacen);
    }
    
    public function getAjaxlistaCitaConsulta($id) {
    if($id != 0){
       $almacen = Citas::select(\DB::raw('CONCAT(users.name, " ", users.app_name, " ", users.apm_name) as title'), 'users.username as paciente', 'users.medio', 'users.email', 'users.phone', 'start','end','citas.id', 'citas.nota','citas.cron_inicia','citas.color_status','citas.tiempo_cita', \DB::raw('(CASE 
                        WHEN users.picture != null THEN users.picture 
                        ELSE "default-avatar.png"
                        END) AS img'), \DB::raw('(CASE 
                        WHEN citas.color_status != null THEN citas.color
                        ELSE citas.color_status
                        END) AS backgroundColor'))
            ->join('users', 'citas.id_paciente', '=', 'users.id')
            ->where("id_doctor", "=", $id)
            //->where("cron_final", "=", null)
            ->get();
          }
      else{
        $ids = \Auth::user()->id;
        $almacen = Citas::select(\DB::raw('CONCAT(users.name, " ", users.app_name, " ", users.apm_name) as title'),'start','end','color as backgroundColor','citas.id', 'citas.nota','citas.cron_inicia','citas.tiempo_cita', \DB::raw('(CASE 
                        WHEN users.picture != null THEN users.picture 
                        ELSE "default-avatar.png"
                        END) AS img'))
            ->join('users', 'citas.id_paciente', '=', 'users.id')
            ->where("id_paciente", "=", $ids)
            //->where("cron_final", "=", null)
            ->get();
      }
           return response()->json($almacen);
    }
   
    public function getAjaxlistaCitaDelete($fecha) {
    if($fecha != 0){
       $id = Citas::where("start", "=", $fecha)
            ->value('id');
       $nota = Citas::where("start", "=", $fecha)
            ->value('nota');
       $img = Citas::select(\DB::raw('CONCAT(users.name, " ", users.app_name, " ", users.apm_name) as title'),'start','end','color as backgroundColor','citas.id', 'citas.nota','citas.cron_inicia', \DB::raw('(CASE 
                        WHEN users.picture != null THEN users.picture 
                        ELSE "default-avatar.png"
                        END) AS img'))
            ->join('users', 'citas.id_paciente', '=', 'users.id')
            ->where("start", "=", $fecha)
            ->value('img');
        
        $name = Citas::select(\DB::raw('CONCAT(users.name, " ", users.app_name, " ", users.apm_name) as title'))
            ->join('users', 'citas.id_paciente', '=', 'users.id')
            ->where("start", "=", $fecha)
            ->value('title');
          }
          //dd($almacen);
           return response()->json(array('msg'=> $id, 'nota'=> $nota, 'img'=> $img, 'name'=> $name), 200);
    }
    
    public function getAjaxlistaCitaDeleteLabo($fecha) {
    if($fecha != 0){
       $id = CitasLaboratorios::where("start", "=", $fecha)
            ->value('id');
       $nota = CitasLaboratorios::where("start", "=", $fecha)
            ->value('nota');
       $img = CitasLaboratorios::select(\DB::raw('CONCAT(users.name, " ", users.app_name, " ", users.apm_name) as title'),'start','end','color as backgroundColor','citas_laboratorios.id', 'citas_laboratorios.nota', \DB::raw('(CASE 
                        WHEN users.picture != null THEN users.picture 
                        ELSE "default-avatar.png"
                        END) AS img'))
            ->join('users', 'citas_laboratorios.id_paciente', '=', 'users.id')
            ->where("start", "=", $fecha)
            ->value('img');
          
          $name = CitasLaboratorios::select(\DB::raw('CONCAT(users.name, " ", users.app_name, " ", users.apm_name) as title'))
            ->join('users', 'citas_laboratorios.id_paciente', '=', 'users.id')
            ->where("start", "=", $fecha)
            ->value('title');
          }
          //dd($almacen);
           return response()->json(array('msg'=> $id, 'nota'=> $nota, 'img'=> $img, 'name'=> $name), 200);
    }
    
    public function getAjaxlistaCitaDeleteImagen($fecha) {
    if($fecha != 0){
       $id = CitasImagenologia::where("start", "=", $fecha)
            ->value('id');
       $nota = CitasImagenologia::where("start", "=", $fecha)
            ->value('nota');
       $img = CitasImagenologia::select(\DB::raw('CONCAT(users.name, " ", users.app_name, " ", users.apm_name) as title'),'start','end','color as backgroundColor','citas_imagenologia.id', 'citas_imagenologia.nota', \DB::raw('(CASE 
                        WHEN users.picture != null THEN users.picture 
                        ELSE "default-avatar.png"
                        END) AS img'))
            ->join('users', 'citas_imagenologia.id_paciente', '=', 'users.id')
            ->where("start", "=", $fecha)
            ->value('img');
        
         $name = CitasImagenologia::select(\DB::raw('CONCAT(users.name, " ", users.app_name, " ", users.apm_name) as title'))
            ->join('users', 'citas_imagenologia.id_paciente', '=', 'users.id')
            ->where("start", "=", $fecha)
            ->value('title');
          }
          //dd($almacen);
           return response()->json(array('msg'=> $id, 'nota'=> $nota, 'img'=> $img, 'name'=> $name), 200);
    }

    public function getAjaxlistaCitaLaboratorio() {
   
       $almacen = CitasLaboratorios::select(\DB::raw('CONCAT(users.name, " ", users.app_name, " ", users.apm_name) as title'),'start','end','color as backgroundColor','citas_laboratorios.id', 'citas_laboratorios.nota', \DB::raw('(CASE 
                        WHEN users.picture != null THEN users.picture 
                        ELSE "default-avatar.png"
                        END) AS img'))
            ->join('users', 'citas_laboratorios.id_paciente', '=', 'users.id')
            ->get();
          
           return response()->json($almacen);
    }
    
    public function getAjaxlistaCitaImagenologia() {
   
       $almacen = CitasImagenologia::select(\DB::raw('CONCAT(users.name, " ", users.app_name, " ", users.apm_name) as title'),'start','end','color as backgroundColor','citas_imagenologia.id', 'citas_imagenologia.nota', \DB::raw('(CASE 
                        WHEN users.picture != null THEN users.picture 
                        ELSE "default-avatar.png"
                        END) AS img'))
            ->join('users', 'citas_imagenologia.id_paciente', '=', 'users.id')
            ->get();
          
           return response()->json($almacen);
    }

    public function getAjaxlistaProcesoConsulta($id) {
    //dd($id);
     $almacen = Citas::select(\DB::raw('CONCAT(users.name, " ", users.app_name, " ", users.apm_name) as title'),'start','end','color as backgroundColor', 'url','citas.id')
            ->join('users', 'citas.id_paciente', '=', 'users.id')
            ->where("id_doctor", "=", $id)
            ->where("cron_final", "=", null)
            ->get();
    //        dd($almacen);
      return response()->json($almacen);
    }
    
    public function getAjaxlistaProcesoConsultaLaboratorio($id) {
     $almacen = Citas::select(\DB::raw('CONCAT(users.name, " ", users.app_name, " ", users.apm_name) as title'),'start','end','color as backgroundColor','citas.id', 'citas.nota','citas.cron_inicia', \DB::raw('(CASE 
                        WHEN users.picture != null THEN users.picture 
                        ELSE "default-avatar.png"
                        END) AS img'))
            ->join('users', 'citas.id_paciente', '=', 'users.id')
            ->where("id_doctor", "=", $id)
            ->where("cron_final", "!=", null)
            ->get();
      return response()->json($almacen);
    }
    
    public function getAjaxlistaProcesoConsultaCaja($id) {
    //dd($id);
     $almacen = Citas::select(\DB::raw('CONCAT(users.name, " ", users.app_name, " ", users.apm_name) as title'),'start','end','color as backgroundColor','citas.id', \DB::raw('(CASE 
                        WHEN url != null THEN CONCAT("https://ciclica.lealtaddigitalsoft.mx/public/agendarcaja/edit/",citas.id)
                        ELSE CONCAT("https://ciclica.lealtaddigitalsoft.mx/public/agendarcaja/edit/",citas.id)
                        END) AS url'))
            ->join('users', 'citas.id_paciente', '=', 'users.id')
            ->where("id_doctor", "=", $id)
            ->where("cron_final", "!=", null)
            ->get();
    //        dd($almacen);
      return response()->json($almacen);
    }
    
    public function getAjaxlistaProcesoConsultaCajaLaboratorio($id) {
    //dd($id);
     $almacen = CitasLaboratorios::select(\DB::raw('CONCAT(users.name, " ", users.app_name, " ", users.apm_name) as title'),'start','end','color as backgroundColor','citas_laboratorios.id', \DB::raw('(CASE 
                        WHEN url != null THEN CONCAT("https://ciclica.lealtaddigitalsoft.mx/public/agendarcaja/edit/",citas_laboratorio.id)
                        ELSE CONCAT("https://ciclica.lealtaddigitalsoft.mx/public/agendarcaja/edit/",citas_laboratorio.id)
                        END) AS url'))
             ->join('users', 'citas_laboratorios.id_paciente', '=', 'users.id')
             ->where("id", "=", $id)
            ->get();
    //        dd($almacen);
      return response()->json($almacen);
    }
    
    public function getAjaxlistaConsultaLaboratorio($id) {
    //dd($id);
     $almacen = CitasLaboratorios::select(\DB::raw('CONCAT(users.name, " ", users.app_name, " ", users.apm_name) as title'),'start','end','color as backgroundColor','citas_laboratorios.id', \DB::raw('(CASE 
                        WHEN url != null THEN CONCAT("https://ciclica.lealtaddigitalsoft.mx/public/consultarprocesoconsultalaboratorio24/",citas_laboratorios.id)
                        ELSE CONCAT("https://ciclica.lealtaddigitalsoft.mx/public/consultarprocesoconsultalaboratorio24/",citas_laboratorios.id)
                        END) AS url'))
            ->join('users', 'citas_laboratorios.id_paciente', '=', 'users.id')
            //->where("id_doctor", "=", $id)
            //->where("estado", "=", null)
            ->get();
    //        dd($almacen);
      return response()->json($almacen);
    }

    public function getAjaxlistaNotification() {

      $id = \Auth::user()->id;
      $rol = Role_User::where('user_id', '=', $id)->value('role_id');
        if($rol != 3){
             $almacen = Ticket::where('id_area', '=', NULL)->count();
        }

      return $almacen;
    }

    public function getAjaxlistaCronometro(Request $request) {
     $almacen = Citas::where('id', '=', $request->cita)->get();
     if($almacen == null){
         $almacenes = "error";
     }
     else{
      $almacenes = $almacen;
          }
      return response()->json($almacenes);
    }
 
    public function getAjaxlistaEdoCivil() {

      $almacen = \DB::select("SELECT id, name FROM cat_edo_civil");
      return response()->json(['data' => $almacen]);
    }

    public function getAjaxlistaEstado() {

      $almacen = \DB::select("SELECT DISTINCT(estado) FROM codigo_postal");
      return response()->json(['data' => $almacen]);
    }

  
    # Template 
    function get_tpl_prefix(){
        return strtolower($this->tpl_prefix + get_class($this));
	}

    function get_tpl_oper($oStr){
        return strtolower($this->get_tpl_prefix()+"_"+oStr+"->html");
	}

    function get_tpl_list(){
        return $this->get_tpl_oper('list');
	}
	
    function get_tpl_list_data(){
        if($this->tpl_list_data == null ){            
            return 'core/cat_functionault/' + 'list_data' + "->html";
        }else{
            return $this->get_tpl_oper($this->tpl_list_data);
		}
	}
	
    function get_tpl_add(){
        return $this->get_tpl_oper('add');
	}
	
    function get_tpl_ver(){
        return $this->get_tpl_oper('ver');
  }
  
    function get_tpl_edit(){
        return $this->get_tpl_oper('edit');
	}
	
    function get_tpl_view(){
        return $this->get_tpl_oper('view');
	}
	
    # Querys 
    function get_list_query(){
        if($this->model != null ){
            return $this->model->objects->all();
        }else{
            return [];
		}
	}
    
    # Verbose name 
    function get_nombre_plural(){
        return $this->model->_meta->verbose_name_plural;    
	}
	
    function get_nombre(){
        return $this->model->_meta->verbose_name;
	}
	
    ### URLS list, add, edit, delete
    function get_list_url( ){
        return reverse($this->url_prefix."_list" );
	}
	
    function get_search_url( ){
        return reverse($this->url_prefix."_search" );
	}
	
    function get_add_url( ){
        return reverse($this->url_prefix."_add");
	}
    
    function get_ver_url( ){
        return reverse($this->url_prefix."_ver");
  }
  
    function get_edit_url_name( ){        
        return $this->url_prefix."_edit";
	}
	
    function get_delete_url_name( ){
        return $this->url_prefix."_delete";
	}
	
    function get_edit_url( $id ){        
        return reverse($this->get_edit_url_name(), $kwargs=array('id'=>id) );
	}
		
    function get_delete_url( $id ){
        return reverse($this->get_delete_url_name(), $kwargs=array('id'=>id) );
	}


	public function getJsUrl(){		
		return strtolower('assets/js/'.$this->getName().'js');
	}
	
    function get_form_id(){
        if($this->form_id == null ){
            $this->form_id = "form_"+  str(random.randint(1,999));
		}
        return $this->form_id; 
	}
}