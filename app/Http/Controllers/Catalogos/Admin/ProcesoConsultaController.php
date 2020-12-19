<?php namespace App\Http\Controllers\Catalogos\Admin;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use App\Http\Controllers\Controller;
use Auth;
use Validator;
use App\User;
use App\Models\Catalogos\Role_User;
use App\Models\Catalogos\Role;
use App\Models\Catalogos\Citas;
use App\Models\Catalogos\ResultadoLaboratorio;
use App\Models\Catalogos\ResultadoImagenologia;
use App\Models\Catalogos\Especialidad;
use App\Models\Catalogos\Historial_clinico;
use App\Models\Catalogos\Anexos\Anexo40;
use App\Models\Catalogos\Anexos\Anexo1;
use App\Models\Catalogos\Recetas;
use App\Models\Catalogos\AgendarEstudio;
use App\Core\Util\CatalogTrait;
use Calendar;

class ProcesoConsultaController extends Controller{
    
    public function index(){
        //return view('Catalogos.forms.procesoconsulta');
        
         $ids = \Auth::user()->id;
         $role = Role_User::where('user_id', '=', $ids)->value('role_id'); 
            if($role == 1){
              return view('Catalogos.forms.procesoconsulta');
           }
           else if($role == 3){
             return view('Catalogos.forms.usuarios.procesoconsultausuarios');
           }
           else if($role == 5){
                $cita = Citas::where('id_doctor', '=', $ids)
                             ->where('cron_inicia', '!=', null)
                             ->where('cron_doctor', '=', null)
                             ->where('cron_final', '=', null)
                             ->value('id');
                if($cita != " "){

         $ids = $cita;
         date_default_timezone_set("America/Mexico_City");
         $tim = date('H:i:s');
         /*$update = Citas::where('id', '=', $cita)
                            ->update(['cron_doctor' => $tim]);
                            */
        $paciente = Citas::where('id', '=', $cita)->value("id_paciente");
        $anex1 = Anexo1::where('id_paciente', '=', $paciente)->value('id');
    
        $citas = Citas::where('id', '=', $cita)->get();
        $info = User::where('id', '=', $paciente)->get();
        $especialidad = Citas::where('id', '=', $cita)->value('id_especialidad');
        
        $anexos = Especialidad::where('id', '=', $especialidad)->value('anexo');
        $estudios = ResultadoLaboratorio::
                select('resultados_estudios.id','resultados_estudios.resultado', 'resultados_estudios.imagen', 'resultados_estudios.archivo', 'users.name as medico', 'especialidad.name as especialidad','resultados_estudios.created_at')
                ->join('users', 'resultados_estudios.id_doctor', '=', 'users.id')
                ->join('especialidad', 'resultados_estudios.id_especialidad', '=', 'especialidad.id')
                ->where('resultados_estudios.id_paciente', '=', $paciente);
                
                $resultadosmedicos = ResultadoImagenologia::
                select('resultados_imagenologia.id','resultados_imagenologia.resultado', 'resultados_imagenologia.imagen', 'resultados_imagenologia.archivo', 'users.name as medico', 'especialidad.name as especialidad', 'resultados_imagenologia.created_at')
                ->join('users', 'resultados_imagenologia.id_doctor', '=', 'users.id')
                ->join('especialidad', 'resultados_imagenologia.id_especialidad', '=', 'especialidad.id')
                ->where('resultados_imagenologia.id_paciente', '=', $paciente)
                ->union($estudios)
                ->orderBy('created_at', 'desc')
                ->get();
 
                $histmedico=Historial_clinico::
                select('historial_clinica.id','historial_clinica.id_anexo', 'users.name as medico', 'especialidad.name as especialidad', 'historial_clinica.created_at')
                ->join('users', 'historial_clinica.id_doctor', '=', 'users.id')
                ->join('especialidad', 'historial_clinica.id_especialidad', '=', 'especialidad.id')
                ->where('historial_clinica.id_paciente','=',$paciente)
                ->get();
                
                
                if($anex1 == null){ 
                    $anex1 = true; 
                }
                else{
                    $anex1 = false;
                }
    return view('Catalogos.forms.procesoconsultawisar', compact('info', 'ids', 'anexos', 'anex1',' resultadosmedicos','histmedico','paciente'),compact('citas'));


                }
                else{
                    return view('Catalogos.forms.doctores.procesoconsultadoctores');           
                }
           }
           else if($role == 9){
              return view('Catalogos.forms.procesoconsulta');
           }
    }

    public function getConsulta($id){ //INGRESA POR PRIMERA VES A LA CITA DESDE EL CALENDARIO

        $ids = $id;
        date_default_timezone_set("America/Mexico_City");
        $tim = date('H:i:s');
        $cita = Citas::where('id', '=', $ids)
                             ->where('cron_inicia', '!=', null)
                             ->where('cron_doctor', '=', null)
                             ->where('cron_final', '=', null)
                             ->value('id');
                            // dd($cita);
                if($cita != null){
                            $update = Citas::where('id', '=', $id)
                                                ->update(['cron_doctor' => $tim]);
                            $paciente = Citas::where('id', '=', $cita)->value("id_paciente");
                            $citas = Citas::where('id', '=', $cita)->get();
                            $info = User::where('id', '=', $paciente)->get();
                            $especialidad = Citas::where('id', '=', $cita)->value('id_especialidad');
                            
                            $anexos = Especialidad::where('id', '=', $especialidad)->value('anexo');
                            $anexo1 = Anexo1::where('id_paciente', '=', $paciente)->get();
                            $verianexo1 = Anexo1::where('id_paciente', '=', $paciente)->value('id_paciente');
                            $anexo40= Anexo40::where('id_paciente', '=', $paciente)->get();
                            
                            //if($verianexo1 != $paciente){
                                 if($verianexo1 == null){ $anex1 = true; } else { $anex1 = false; } //anexo 1 o 40
                                    return view('Catalogos.forms.procesoconsultawisar', compact('info', 'ids', 'anexos', 'anex1','anexo1','anexo40','paciente','citas'));
                            //}
                            //else{
                              //      return redirect()->to("anexoprocesoconsultadoctores")->withStatus(__('Ya se guardo el anexo.'));
                            //}
                }
                else{
                             return redirect()->to("dashboard")->withStatus(__('No se puede iniciar la consulta.'));              
                    }
    }

    public function consulta(){ //CITA DESDE EL MENU
      
         $ids = \Auth::user()->id;
         $role = Role_User::where('user_id', '=', $ids)->value('role_id'); 
         if($role == 1){
               return view('pages.dashboard');   
           }
            else if($role == 5){
                $cita = Citas::where('id_doctor', '=', $ids)
                             ->where('cron_inicia', '!=', null)
                             ->where('cron_doctor', '!=', null)
                             ->where('cron_final', '=', null)
                             ->value('id');
                if($cita != null){
                            $paciente = Citas::where('id', '=', $cita)->value("id_paciente");
                            $citas = Citas::where('id', '=', $cita)->get();
                            $info = User::where('id', '=', $paciente)->get();
                            $especialidad = Citas::where('id', '=', $cita)->value('id_especialidad');
                            
                            $anexos = Especialidad::where('id', '=', $especialidad)->value('anexo');
                            $anexo1 = Anexo1::where('id_paciente', '=', $paciente)->get();
                            $verianexo1 = Anexo1::where('id_paciente', '=', $paciente)->value('id_cita');
                            $anexo40= Anexo40::where('id_paciente', '=', $paciente)->get();
                            $verianexo40 = Anexo40::where('id_paciente', '=', $paciente)->value('id_cita');
                            
                            if($verianexo1 != $cita){
                                 if($verianexo1 == null){ $anex1 = true; } else { $anex1 = false; 
                                       if($verianexo40 != $cita){
                                         if($verianexo1 == null){ $anex1 = true; } else { $anex1 = false;} //anexo 1 o 40
                                            return view('Catalogos.forms.procesoconsultawisar', compact('info', 'ids', 'anexos', 'anex1','anexo1','anexo40','paciente','citas'));
                                       }
                                        else{
                                            return redirect()->to("anexoprocesoconsultadoctores")->withStatus(__('Ya se guardo el anexo.'));
                                       }
                                 } //anexo 1 o 40
                                    return view('Catalogos.forms.procesoconsultawisar', compact('info', 'ids', 'anexos', 'anex1','anexo1','anexo40','paciente','citas'));
                            }
                            else{
                                return redirect()->to("anexoprocesoconsultadoctores")->withStatus(__('Ya se guardo el anexo.'));
                            }
                }
                else{
                            return view('Catalogos.forms.doctores.procesoconsultadoctores');           
                    }
           }
    }

    public function anexo(){ //ANEXOS DE LAS SUBESPECIALIDADES
       
         $ids = \Auth::user()->id;
         $role = Role_User::where('user_id', '=', $ids)->value('role_id'); 
         if($role == 1){
               return view('pages.dashboard');   
           }
            else if($role == 5){
                $cita = Citas::where('id_doctor', '=', $ids)
                             ->where('cron_inicia', '!=', null)
                             ->where('cron_doctor', '!=', null)
                             ->where('cron_final', '=', null)
                             ->value('id');
                            $paciente = Citas::where('id', '=', $cita)->value("id_paciente");
                            $info = User::where('id', '=', $paciente)->get();
                            $especialidad = Citas::where('id', '=', $cita)->value('id_especialidad');
                //dd($ids);            
                            $anexos = Especialidad::where('id', '=', $especialidad)->value('anexo');
                            $anexoc = \DB::table($anexos)->where('id_paciente', '=', $paciente)->orderby('id','DESC')->first();
                            $anexocval = \DB::table($anexos)->where('id_paciente', '=', $paciente)->orderby('id','DESC')->value('id_cita');
                            //dd($anexos);
                            if($anexocval != $cita){
                                    return view('Catalogos.forms.procesoconsultawisaranexos', compact('info', 'ids', 'anexos', 'paciente', 'anexoc'));
                            }
                            else{
                                    return redirect()->to("recetaprocesoconsultadoctores")->withStatus(__('Ya se guardo el anexo.'));
                            }
           }
    }
    
    public function historial(){
        //return view('Catalogos.forms.procesoconsulta');

         $ids = \Auth::user()->id;
         $role = Role_User::where('user_id', '=', $ids)->value('role_id'); 
            if($role == 1){
               return view('pages.dashboard');   
           }
            else if($role == 5){
                $cita = Citas::where('id_doctor', '=', $ids)
                             ->where('cron_inicia', '!=', null)
                             ->where('cron_doctor', '!=', null)
                             ->where('cron_final', '=', null)
                             ->value('id');
                if($cita != null){

                    $paciente = Citas::where('id', '=', $cita)->value("id_paciente");
                    $citas = Citas::where('id', '=', $cita)->get();
                    $info = User::where('id', '=', $paciente)->get();
                    $especialidad = Citas::where('id', '=', $cita)->value('id_especialidad');
                    
                            
                            $histmedicoanexo1=Anexo1::
                            select('anexo1.id as ids','users.name as medico', 'citas.id_especialidad', 'anexo1.created_at', \DB::raw('(CASE 
                                    WHEN especialidad.name != null THEN "Anexo 1" 
                                    ELSE "Anexo 1"
                                    END) AS especialidad'))
                            ->join('users', 'anexo1.id_doctor', '=', 'users.id')
                            ->join('citas', 'anexo1.id_cita', '=', 'citas.id')
                            ->join('especialidad', 'citas.id_especialidad', '=', 'especialidad.id')
                            ->where('anexo1.id_paciente','=', $paciente)
                            ->orderby('ids','DESC');
                            
                            $histmedicoanexo40=Anexo40::
                            select('anexo40.id as ids','users.name as medico', 'citas.id_especialidad', 'anexo40.created_at', \DB::raw('(CASE 
                                    WHEN especialidad.name != null THEN "Anexo 40" 
                                    ELSE "Anexo 40"
                                    END) AS especialidad'))
                            ->join('users', 'anexo40.id_doctor', '=', 'users.id')
                            ->join('citas', 'anexo40.id_cita', '=', 'citas.id')
                            ->join('especialidad', 'citas.id_especialidad', '=', 'especialidad.id')
                            ->where('anexo40.id_paciente','=', $paciente)
                            ->orderby('ids','DESC');
                            
                            
                            $histmedico=Citas::
                            select('citas.id as ids','users.name as medico', 'citas.id_especialidad', 'citas.created_at', 'especialidad.name as especialidad')
                            ->join('users', 'citas.id_doctor', '=', 'users.id')
                            ->join('especialidad', 'citas.id_especialidad', '=', 'especialidad.id')
                            ->where('citas.id_paciente','=',$paciente)
                            ->where('cron_final', '!=', null)
                            ->orderby('ids','DESC')
                            ->union($histmedicoanexo1)
                            ->union($histmedicoanexo40)
                            ->get();
                            
                            //dd($histmedico);
                            
                            
                            //->get();
                            //dd($histmedicoanexo1);
    
                     return view('Catalogos.forms.doctores.historialprocesoconsultawisar', compact('info', 'ids', 'histmedico','paciente'),compact('cita'));
                }
                else{
                    return view('Catalogos.forms.doctores.procesoconsultadoctores');           
                }
           }
    }
    
    public function gethistorial($id){
         $ids = \Auth::user()->id;
         $role = Role_User::where('user_id', '=', $ids)->value('role_id'); 
            if($role == 1){
               return view('pages.dashboard');   
           }
            else if($role == 5){
                
                $cita = Citas::where('id', '=', $id)
                             ->value('id');
                
                if($cita != null){
                    
                    $paciente = Citas::where('id', '=', $cita)->value("id_paciente");
                    $citas = Citas::where('id', '=', $cita)->get();
                    $info = User::where('id', '=', $paciente)->get();
                    $especialidad = Citas::where('id', '=', $cita)->value('id_especialidad');
                    
                       $anexos = Especialidad::where('id', '=', $especialidad)->value('anexo');
                    //dd($anexos);
                    //$anexos = "anexo1";
                    $result = \DB::table($anexos)->where('id_cita', '=', $id)->get();
                    $anexid = $id;
                    //dd($result);
                     return view('Catalogos.forms.doctores.historialprocesoconsultawisaranexos', compact('info', 'ids', 'result','paciente','anexid','anexos'),compact('citas'));
                }
                else{
                   
                     $cita = Citas::where('cron_inicia', '!=', null)
                             ->where('cron_doctor', '!=', null)
                             ->where('cron_final', '=', null)
                             ->value('id');

                    $paciente = Citas::where('id', '=', $cita)->value("id_paciente");
                    $citas = Citas::where('id', '=', $cita)->get();
                    $info = User::where('id', '=', $paciente)->get();
                    $especialidad = Citas::where('id', '=', $cita)->value('id_especialidad');
                
                    $verifica = Anexo1::where('id', '=', $id)->value('id');
                    if($verifica != null){
                        $anexos = "anexo1";
                    }
                    else{
                        $anexos = "anexo40";
                    }
                        $result = \DB::table($anexos)->where('id', '=', $id)->get();
                        $anexid = $id;
                        //dd($result[0]->anx40_gestas);
                         return view('Catalogos.forms.doctores.historialprocesoconsultawisaranexos', compact('info', 'ids', 'result','paciente','anexid','anexos'),compact('citas'));
           
               //     return view('Catalogos.forms.doctores.procesoconsultadoctores');           
                }
           }
    }

    public function receta(){
        //return view('Catalogos.forms.procesoconsulta');

         $ids = \Auth::user()->id;
         $role = Role_User::where('user_id', '=', $ids)->value('role_id'); 
            if($role == 1){
               return view('pages.dashboard');   
           }
            else if($role == 5){
                $cita = Citas::where('id_doctor', '=', $ids)
                             ->where('cron_inicia', '!=', null)
                             //->where('cron_doctor', '!=', null)
                             ->where('cron_final', '=', null)
                             ->value('id');
                if($cita != null){

                 $ids = $cita;
                 $paciente = Citas::where('id', '=', $cita)->value("id_paciente");
             
                 $citas = Citas::where('id', '=', $cita)->get();
                 $info = User::where('id', '=', $paciente)->get();
                 $agenest = AgendarEstudio::where('id_cita', '=', $cita)->value('descripcion');
                 $receta = Recetas::where('id_cita', '=', $cita)->get();
                 $result = Anexo1::where('id_paciente', '=', $paciente)->get();
                 $verresult = Anexo1::where('id_cita', '=', $cita)->value('id');
                 
                 if($verresult == null){
                    return redirect()->to("consultaprocesoconsultadoctores")->withStatus(__('Debe guardar primero el anexo 1.'));
                 }
                 else{
                 return view('Catalogos.forms.doctores.recetaprocesoconsultawisar', compact('info', 'ids','paciente','receta','agenest','result'),compact('citas'));
                 }
                }
                else{
                    return view('Catalogos.forms.doctores.procesoconsultadoctores');           
                }
           }
    }

    public function agendar(){
        //return view('Catalogos.forms.procesoconsulta');

         $ids = \Auth::user()->id;
         $role = Role_User::where('user_id', '=', $ids)->value('role_id'); 
            if($role == 1){
               return view('pages.dashboard');   
           }
            else if($role == 5){
                $cita = Citas::where('id_doctor', '=', $ids)
                             ->where('cron_inicia', '!=', null)
                             ->where('cron_doctor', '!=', null)
                             ->where('cron_final', '=', null)
                             ->value('id');
                             
                if($cita != " "){

         $ids = $cita;
         date_default_timezone_set("America/Mexico_City");
         $tim = date('H:i:s');
         $paciente = Citas::where('id', '=', $cita)->value("id_paciente");
     
         $citas = Citas::where('id', '=', $cita)->get();
         $info = User::where('id', '=', $paciente)->get();
         $almacen = User::select(\DB::raw('CONCAT(users.name, " ", users.app_name, " ", users.apm_name) as title'))
            ->where('id', '=', $paciente)
            ->value('title');
         return view('Catalogos.forms.doctores.agendarcitaprocesoconsultawisar', compact('info', 'ids','paciente','almacen'),compact('citas'));

                }
                else{
                    return view('Catalogos.forms.doctores.procesoconsultadoctores');           
                }
           }
    }

    public function estudios(){
        //return view('Catalogos.forms.procesoconsulta');

         $ids = \Auth::user()->id;
         $role = Role_User::where('user_id', '=', $ids)->value('role_id'); 
            if($role == 1){
               return view('pages.dashboard');   
           }
            else if($role == 5){
                $cita = Citas::where('id_doctor', '=', $ids)
                             ->where('cron_inicia', '!=', null)
                             ->where('cron_doctor', '!=', null)
                             ->where('cron_final', '=', null)
                             ->value('id');
         $ids = $cita;
         $paciente = Citas::where('id', '=', $cita)->value("id_paciente");
         $anex1 = Anexo1::where('id_paciente', '=', $paciente)->get();
    
         $citas = Citas::where('id', '=', $cita)->get();
         $info = User::where('id', '=', $paciente)->get();
         $especialidad = Citas::where('id', '=', $cita)->value('id_especialidad');
        //dd($paciente);
        $estudios = ResultadoLaboratorio::
                select('resultados_estudios.id','resultados_estudios.resultado', 'resultados_estudios.imagen', 'resultados_estudios.archivo', 'users.name as medico', 'especialidad.name as especialidad','resultados_estudios.created_at')
                ->join('users', 'resultados_estudios.id_doctor', '=', 'users.id')
                ->join('especialidad', 'resultados_estudios.id_especialidad', '=', 'especialidad.id')
                ->where('resultados_estudios.id_paciente', '=', $paciente);
                
                $resultadosmedicos = ResultadoImagenologia::
                select('resultados_imagenologia.id','resultados_imagenologia.resultado', 'resultados_imagenologia.imagen', 'resultados_imagenologia.archivo', 'users.name as medico', 'especialidad.name as especialidad', 'resultados_imagenologia.created_at')
                ->join('users', 'resultados_imagenologia.id_doctor', '=', 'users.id')
                ->join('especialidad', 'resultados_imagenologia.id_especialidad', '=', 'especialidad.id')
                ->where('resultados_imagenologia.id_paciente', '=', $paciente)
                ->union($estudios)
                ->orderBy('created_at', 'desc')
                ->get();
 
                 return view('Catalogos.forms.doctores.estudiosprocesoconsultawisar', compact('info', 'ids','resultadosmedicos','paciente'),compact('citas'));

           }
    }
    
    public function costosconsulta(){
        return view('Catalogos.forms.doctores.doctorescaja');
    }

    public function downloadFile($archivo){
      $pathtoFile = public_path().'/material/archivos/'.$archivo;
      return response()->download($pathtoFile);
    }
    
    public function downloadImg($archivo){
      $pathtoFile = public_path().'/material/archivos/'.$archivo.'.png';
      return response()->download($pathtoFile);
    }
   
    use CatalogTrait;

    public function __construct()
    {

        $this->middleware('auth');
        $this->name = 'Consulta';
        $this->model = 'App\Models\Catalogos\Recetas';
        $this->url_prefix = 'recetaprocesoconsultadoctores';

    }


}
