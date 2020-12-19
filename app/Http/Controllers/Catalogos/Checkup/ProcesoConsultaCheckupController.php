<?php namespace App\Http\Controllers\Catalogos\Checkup;

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
use App\Models\Catalogos\Anexos\Anexo40;
use App\Models\Catalogos\Anexos\Anexo17;
use App\Models\Catalogos\Anexos\Anexo18;
use App\Models\Catalogos\Anexos\Anexo19;
use App\Models\Catalogos\Anexos\Anexo20;
use App\Models\Catalogos\Anexos\Anexo21;
use App\Models\Catalogos\Anexos\Anexo22;
use App\Models\Catalogos\Recetas;
use App\Core\Util\CatalogTrait;
use Calendar;

class ProcesoConsultaCheckupController extends Controller{
    
    public function index(){
        //return view('Catalogos.forms.procesoconsulta');
        
         $ids = \Auth::user()->id;
         $role = Role_User::where('user_id', '=', $ids)->value('role_id'); 
         if($role == 5){
                $cita = Citas::where('id_doctor', '=', $ids)
                             ->where('cron_inicia', '!=', null)
                             ->where('cron_doctor', '!=', null)
                             ->where('cron_final', '=', null)
                             ->where('id_especialidad', '=', 11)
                             ->value('id');
                if($cita != " "){

                 $id = $cita;
                 $paciente = Citas::where('id', '=', $cita)->value("id_paciente");
                 $anexo1 = AnexosCitasCheckup::where('id_paciente', '=', $paciente)->where('id_cita', '=', $id)->get();
                 $citas = Citas::where('id', '=', $cita)->get();
                 $info = User::where('id', '=', $paciente)->get();
                 
                 dd($anexo1);
                     return view('Catalogos.forms.checkup.procesoconsultawisarcheckup', compact('info', 'ids', 'paciente', 'anexo1', 'id'),compact('citas'));
                 
                }
                else{
                    return view('Catalogos.forms.checkup.procesoconsultadoctores');           
                }
           }
    }

    public function getConsulta($id){ //INGRESA POR PRIMERA VES A LA CITA DESDE EL CALENDARIO
        $ids = $id;
        $idss = \Auth::user()->id;
         $role = Role_User::where('user_id', '=', $idss)->value('role_id'); 
         if($role == 5){
                 $ids = $id;
                 $paciente = Citas::where('id', '=', $ids)->value("id_paciente");
                 $anexo1 = AnexosCitasCheckup::select('citas_checkup.id','anexo17_22.nombre as names','anexoscheckup.nombre as nombr')
                                             ->join('anexo17_22', 'citas_checkup.id_anexo1722', '=', 'anexo17_22.id')
                                             ->join('anexoscheckup', 'anexo17_22.id_checkup', '=', 'anexoscheckup.id')
                                             ->where('id_paciente', '=', $paciente)
                                             ->where('id_cita', '=', $ids)
                                             ->get();
                 $citas = Citas::where('id', '=', $ids)->get();
                 $info = User::where('id', '=', $paciente)->get();
    
                     return view('Catalogos.forms.checkup.procesoconsultawisarcheckup', compact('info', 'ids', 'paciente', 'anexo1', 'id'),compact('citas'));
         }
    }
    
    public function getConsultaAnex18($id){ //INGRESA POR PRIMERA VES A LA CITA DESDE EL CALENDARIO
        $ids = $id;
        $idss = \Auth::user()->id;
         $role = Role_User::where('user_id', '=', $idss)->value('role_id'); 
         if($role == 5){
                 $ids = $id;
                 $paciente = Citas::where('id', '=', $ids)->value("id_paciente");
                 $anexo1 = Anexo18::where('id_paciente', '=', $paciente)->where('id_cita', '=', $ids)->value('id');
                 $citas = Citas::where('id', '=', $ids)->get();
                 $info = User::where('id', '=', $paciente)->get();
                 $anexosckechup = "anexo18";
        
                 if($anexo1 == null){
                     return view('Catalogos.forms.checkup.procesoconsultawisarcheckup', compact('info', 'ids', 'paciente', 'anexosckechup', 'id'),compact('citas'));
                 }
                 else{

                     return redirect()->to("recetaprocesoconsultadoctorescheckup")->withStatus(__('No se puede iniciar la consulta.'));              
                    }
         }
    }

    public function getConsultaAnex19($id){ //INGRESA POR PRIMERA VES A LA CITA DESDE EL CALENDARIO
        $ids = $id;
        $idss = \Auth::user()->id;
         $role = Role_User::where('user_id', '=', $idss)->value('role_id'); 
         if($role == 5){
                 $ids = $id;
                 $paciente = Citas::where('id', '=', $ids)->value("id_paciente");
                 $anexo1 = Anexo19::where('id_paciente', '=', $paciente)->where('id_cita', '=', $ids)->value('id');
                 $citas = Citas::where('id', '=', $ids)->get();
                 $info = User::where('id', '=', $paciente)->get();
                 $anexosckechup = "anexo19";
        
                 if($anexo1 == null){
                     return view('Catalogos.forms.checkup.procesoconsultawisarcheckup', compact('info', 'ids', 'paciente', 'anexosckechup', 'id'),compact('citas'));
                 }
                 else{

                     return redirect()->to("recetaprocesoconsultadoctorescheckup")->withStatus(__('No se puede iniciar la consulta.'));              
                    }
         }
    }
    
    public function getConsultaAnex20($id){ //INGRESA POR PRIMERA VES A LA CITA DESDE EL CALENDARIO
        $ids = $id;
        $idss = \Auth::user()->id;
         $role = Role_User::where('user_id', '=', $idss)->value('role_id'); 
         if($role == 5){
                 $ids = $id;
                 $paciente = Citas::where('id', '=', $ids)->value("id_paciente");
                 $anexo1 = Anexo20::where('id_paciente', '=', $paciente)->where('id_cita', '=', $ids)->value('id');
                 $citas = Citas::where('id', '=', $ids)->get();
                 $info = User::where('id', '=', $paciente)->get();
                 $anexosckechup = "anexo20";
        
                 if($anexo1 == null){
                     return view('Catalogos.forms.checkup.procesoconsultawisarcheckup', compact('info', 'ids', 'paciente', 'anexosckechup', 'id'),compact('citas'));
                 }
                 else{

                     return redirect()->to("recetaprocesoconsultadoctorescheckup")->withStatus(__('No se puede iniciar la consulta.'));              
                    }
         }
    }
    
    public function getConsultaAnex21($id){ //INGRESA POR PRIMERA VES A LA CITA DESDE EL CALENDARIO
        $ids = $id;
        $idss = \Auth::user()->id;
         $role = Role_User::where('user_id', '=', $idss)->value('role_id'); 
         if($role == 5){
                 $ids = $id;
                 $paciente = Citas::where('id', '=', $ids)->value("id_paciente");
                 $anexo1 = Anexo21::where('id_paciente', '=', $paciente)->where('id_cita', '=', $ids)->value('id');
                 $citas = Citas::where('id', '=', $ids)->get();
                 $info = User::where('id', '=', $paciente)->get();
                 $anexosckechup = "anexo21";
        
                 if($anexo1 == null){
                     return view('Catalogos.forms.checkup.procesoconsultawisarcheckup', compact('info', 'ids', 'paciente', 'anexosckechup', 'id'),compact('citas'));
                 }
                 else{

                     return redirect()->to("recetaprocesoconsultadoctorescheckup")->withStatus(__('No se puede iniciar la consulta.'));              
                    }
         }
    }
    
    public function getConsultaAnex22($id){ //INGRESA POR PRIMERA VES A LA CITA DESDE EL CALENDARIO
        $ids = $id;
        $idss = \Auth::user()->id;
         $role = Role_User::where('user_id', '=', $idss)->value('role_id'); 
         if($role == 5){
                 $ids = $id;
                 $paciente = Citas::where('id', '=', $ids)->value("id_paciente");
                 $anexo1 = Anexo22::where('id_paciente', '=', $paciente)->where('id_cita', '=', $ids)->value('id');
                 $citas = Citas::where('id', '=', $ids)->get();
                 $info = User::where('id', '=', $paciente)->get();
                 $anexosckechup = "anexo22";
        
                 if($anexo1 == null){
                     return view('Catalogos.forms.checkup.procesoconsultawisarcheckup', compact('info', 'ids', 'paciente', 'anexosckechup', 'id'),compact('citas'));
                 }
                 else{

                     return redirect()->to("recetaprocesoconsultadoctorescheckup")->withStatus(__('No se puede iniciar la consulta.'));              
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
                             ->where('id_especialidad', '=', 11)
                             ->value('id');
                if($cita != null){
                    $id = $cita;
                    $paciente = Citas::where('id', '=', $cita)->value("id_paciente");
                    $citas = Citas::where('id', '=', $cita)->get();
                    $info = User::where('id', '=', $paciente)->get();
                    $especialidad = Citas::where('id', '=', $cita)->value('id_especialidad');
                    
                            
                            $histmedicoanexo1=Anexo1::
                            select('anexo1.id','users.name as medico', 'citas.id_especialidad', 'anexo1.created_at', \DB::raw('(CASE 
                                    WHEN especialidad.name != null THEN "Anexo 1" 
                                    ELSE "Anexo 1"
                                    END) AS especialidad'))
                            ->join('users', 'anexo1.id_doctor', '=', 'users.id')
                            ->join('citas', 'anexo1.id_cita', '=', 'citas.id')
                            ->join('especialidad', 'citas.id_especialidad', '=', 'especialidad.id')
                            ->where('anexo1.id_paciente','=', $paciente)
                            ->orderby('anexo1.id','DESC');
                            
                            $histmedicoanexo40=Anexo40::
                            select('anexo40.id','users.name as medico', 'citas.id_especialidad', 'anexo40.created_at', \DB::raw('(CASE 
                                    WHEN especialidad.name != null THEN "Anexo 40" 
                                    ELSE "Anexo 40"
                                    END) AS especialidad'))
                            ->join('users', 'anexo40.id_doctor', '=', 'users.id')
                            ->join('citas', 'anexo40.id_cita', '=', 'citas.id')
                            ->join('especialidad', 'citas.id_especialidad', '=', 'especialidad.id')
                            ->where('anexo40.id_paciente','=', $paciente)
                            ->orderby('anexo40.id','DESC');
                            
                            $histmedicoanexo17=Anexo17::
                            select('anexo17.id','users.name as medico', 'citas.id_especialidad', 'anexo17.created_at', \DB::raw('(CASE 
                                    WHEN especialidad.name != null THEN "Anexo 17" 
                                    ELSE "Anexo 17"
                                    END) AS especialidad'))
                            ->join('users', 'anexo17.id_doctor', '=', 'users.id')
                            ->join('citas', 'anexo17.id_cita', '=', 'citas.id')
                            ->join('especialidad', 'citas.id_especialidad', '=', 'especialidad.id')
                            ->where('anexo17.id_paciente','=', $paciente)
                            ->orderby('anexo17.id','DESC');
                            
                            $histmedicoanexo18=Anexo18::
                            select('anexo18.id','users.name as medico', 'citas.id_especialidad', 'anexo18.created_at', \DB::raw('(CASE 
                                    WHEN especialidad.name != null THEN "Anexo 18" 
                                    ELSE "Anexo 18"
                                    END) AS especialidad'))
                            ->join('users', 'anexo18.id_doctor', '=', 'users.id')
                            ->join('citas', 'anexo18.id_cita', '=', 'citas.id')
                            ->join('especialidad', 'citas.id_especialidad', '=', 'especialidad.id')
                            ->where('anexo18.id_paciente','=', $paciente)
                            ->orderby('anexo18.id','DESC');
                            
                            $histmedicoanexo19=Anexo19::
                            select('anexo19.id','users.name as medico', 'citas.id_especialidad', 'anexo19.created_at', \DB::raw('(CASE 
                                    WHEN especialidad.name != null THEN "Anexo 19" 
                                    ELSE "Anexo 19"
                                    END) AS especialidad'))
                            ->join('users', 'anexo19.id_doctor', '=', 'users.id')
                            ->join('citas', 'anexo19.id_cita', '=', 'citas.id')
                            ->join('especialidad', 'citas.id_especialidad', '=', 'especialidad.id')
                            ->where('anexo19.id_paciente','=', $paciente)
                            ->orderby('anexo19.id','DESC');
                            
                            $histmedicoanexo20=Anexo20::
                            select('anexo20.id','users.name as medico', 'citas.id_especialidad', 'anexo20.created_at', \DB::raw('(CASE 
                                    WHEN especialidad.name != null THEN "Anexo 20" 
                                    ELSE "Anexo 20"
                                    END) AS especialidad'))
                            ->join('users', 'anexo20.id_doctor', '=', 'users.id')
                            ->join('citas', 'anexo20.id_cita', '=', 'citas.id')
                            ->join('especialidad', 'citas.id_especialidad', '=', 'especialidad.id')
                            ->where('anexo20.id_paciente','=', $paciente)
                            ->orderby('anexo20.id','DESC');
                            
                            $histmedicoanexo21=Anexo21::
                            select('anexo21.id','users.name as medico', 'citas.id_especialidad', 'anexo21.created_at', \DB::raw('(CASE 
                                    WHEN especialidad.name != null THEN "Anexo 21" 
                                    ELSE "Anexo 21"
                                    END) AS especialidad'))
                            ->join('users', 'anexo21.id_doctor', '=', 'users.id')
                            ->join('citas', 'anexo21.id_cita', '=', 'citas.id')
                            ->join('especialidad', 'citas.id_especialidad', '=', 'especialidad.id')
                            ->where('anexo21.id_paciente','=', $paciente)
                            ->orderby('anexo21.id','DESC');
                            
                            $histmedicoanexo22=Anexo22::
                            select('anexo22.id','users.name as medico', 'citas.id_especialidad', 'anexo22.created_at', \DB::raw('(CASE 
                                    WHEN especialidad.name != null THEN "Anexo 22" 
                                    ELSE "Anexo 22"
                                    END) AS especialidad'))
                            ->join('users', 'anexo22.id_doctor', '=', 'users.id')
                            ->join('citas', 'anexo22.id_cita', '=', 'citas.id')
                            ->join('especialidad', 'citas.id_especialidad', '=', 'especialidad.id')
                            ->where('anexo22.id_paciente','=', $paciente)
                            ->orderby('anexo22.id','DESC');
                            
                            $histmedico=Citas::
                            select('citas.id','users.name as medico', 'citas.id_especialidad', 'citas.created_at', 'especialidad.name as especialidad')
                            ->join('users', 'citas.id_doctor', '=', 'users.id')
                            ->join('especialidad', 'citas.id_especialidad', '=', 'especialidad.id')
                            ->where('citas.id_paciente','=',$paciente)
                            ->where('cron_final', '!=', null)
                            ->orderby('citas.id','DESC')
                            ->union($histmedicoanexo1)
                            ->union($histmedicoanexo40)
                            ->union($histmedicoanexo17)
                            ->union($histmedicoanexo18)
                            ->union($histmedicoanexo19)
                            ->union($histmedicoanexo20)
                            ->union($histmedicoanexo21)
                            ->union($histmedicoanexo22)
                            ->get();
                            
                            //dd($histmedico);
                            
                            
                            //->get();
                            //dd($histmedicoanexo1);
    
                     return view('Catalogos.forms.checkup.historialprocesoconsultawisar', compact('info', 'ids', 'histmedico','paciente','id'),compact('cita'));
                }
                else{
                    return view('Catalogos.forms.checkup.procesoconsultadoctores');           
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
                             ->where('cron_inicia', '!=', null)
                             ->where('cron_doctor', '!=', null)
                             ->where('cron_final', '=', null)
                             ->where('id_especialidad', '=', 11)
                             ->value('id');
                if($cita != " "){

                    $id = $cita;
                    $paciente = Citas::where('id', '=', $cita)->value("id_paciente");
                    $citas = Citas::where('id', '=', $cita)->get();
                    $info = User::where('id', '=', $paciente)->get();
                    $especialidad = Citas::where('id', '=', $cita)->value('id_especialidad');
                    
                    $anexos = Especialidad::where('id', '=', $especialidad)->value('anexo');
                    $result = \DB::table($anexos)->where('id_cita', '=', $cita)->get();
                    $anexid = $result[0]->id;
                           
                     return view('Catalogos.forms.checkup.historialprocesoconsultawisaranexos', compact('info', 'ids', 'result','paciente','anexid','anexos','id'),compact('citas'));
                }
                else{
                    return view('Catalogos.forms.checkup.procesoconsultadoctores');           
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
                             ->where('id_especialidad', '=', 11)
                             ->value('id');
                if($cita != " "){

         $ids = $cita;
         $id = $cita;
         date_default_timezone_set("America/Mexico_City");
         $tim = date('H:i:s');
         $paciente = Citas::where('id', '=', $cita)->value("id_paciente");
         //dd($paciente);
         $citas = Citas::where('id', '=', $cita)->get();
         $info = User::where('id', '=', $paciente)->get();
        
    return view('Catalogos.forms.checkup.agendarcitaprocesoconsultawisar', compact('info', 'ids','paciente', 'id'),compact('citas'));


                }
                else{
                    return view('Catalogos.forms.checkup.procesoconsultadoctores');           
                }
           }
    }

    public function estudios($id){
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
                             ->where('id_especialidad', '=', 11)
                             ->value('id');
         $ids = $cita;
         $paciente = Citas::where('id', '=', $cita)->value("id_paciente");
         $anex1 = Anexo1::where('id_paciente', '=', $paciente)->get();
    
         $citas = Citas::where('id', '=', $cita)->get();
         $info = User::where('id', '=', $paciente)->get();
         $especialidad = Citas::where('id', '=', $cita)->value('id_especialidad');
        
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
 
                 return view('Catalogos.forms.checkup.estudiosprocesoconsultawisar', compact('info', 'ids','resultadosmedicos','paciente', 'id'),compact('citas'));

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
                             ->where('id_especialidad', '=', 11)
                             ->value('id');
                if($cita != null){

                 $ids = $cita;
                 $id = $cita;
                 $paciente = Citas::where('id', '=', $cita)->value("id_paciente");
             
                 $citas = Citas::where('id', '=', $cita)->get();
                 $info = User::where('id', '=', $paciente)->get();
                 $receta = Recetas::where('id_paciente', '=', $paciente)->get();
                 //dd($info);
                 return view('Catalogos.forms.checkup.recetaprocesoconsultawisar', compact('info', 'ids','paciente','receta','id'),compact('citas'));
                }
                else{
                    return view('Catalogos.forms.checkup.procesoconsultadoctores');           
                }
           }
    }
    
    public function costosconsulta(){
        return view('Catalogos.forms.checkup.doctorescaja');
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