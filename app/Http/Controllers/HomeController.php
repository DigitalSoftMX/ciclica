<?php

namespace App\Http\Controllers;

use App\Models\Catalogos\Role_User;
use App\Models\Catalogos\Role;
use App\User;
use App\Models\Catalogos\Citas;
use App\Models\Catalogos\ResultadoLaboratorio;
use App\Models\Catalogos\ResultadoImagenologia;
use App\Models\Catalogos\Especialidad;
use App\Models\Catalogos\EspecialidadUser;
use App\Models\Catalogos\Historial_clinico;
use App\Models\Catalogos\Anexos\Anexo1;
use App\Models\Catalogos\Anexos\Anexo17;
use App\Models\Catalogos\Anexos\Anexo18;
use App\Models\Catalogos\Anexos\Anexo19;
use App\Models\Catalogos\Anexos\Anexo20;
use App\Models\Catalogos\Anexos\Anexo21;
use App\Models\Catalogos\Anexos\Anexo22;
use App\Models\Catalogos\Pacientes;
use App\Models\Catalogos\AnexosCitasCheckup;
use App\Models\Catalogos\AnexosCheckup;
use App\Models\Catalogos\Anexos1722;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
         $ids = \Auth::user()->id;
         $role = Role_User::where('user_id', '=', $ids)->value('role_id'); 
           if($role == 1){
               //return view('pages.dashboard'); 
                $url = "procesoconsulta";
               return redirect()->to($url);
           }
           else if($role == 3){
               //$url = "calendar";
               //return redirect()->to($url);
               $fecha = Citas::where('id_paciente', '=', $ids)
                            ->where('cron_inicia', '!=', null)
                            ->value('id');
                            
              if($fecha != null){
                  
               $info = Pacientes::where('id_user', '=', $ids)
                ->value('fecha_nacimiento');
                
                if($info == null){
                $info = User::where('id', '=', $ids)->get();
                 return view('Catalogos.forms.usuarios.pacientes', compact('ids', 'info')); 
                }
                 else{
                 $id = \Auth::user()->id;
                 return view('Catalogos.forms.usuarios.procesoconsultausuarios',compact('id')); 
                }
              }
               else{
                 $id = \Auth::user()->id;
                 return view('Catalogos.forms.usuarios.procesoconsultausuarios',compact('id')); 
                }
                
            }
           else if($role == 4){
                $url = "procesoconsultalaboratorio";
               return redirect()->to($url); 
            }
           else if($role == 5){
                
                // return view('Catalogos.forms.doctores.doctoresagenda');
                 $verespe = EspecialidadUser::where('id_user', '=', $ids)
                             ->value('id_especialidad');
                             
                if($verespe == 11){
                
                $cita = Citas::where('id_doctor', '=', $ids)
                             ->where('cron_inicia', '!=', null)
                             ->where('cron_doctor', '!=', null)
                             ->where('cron_final', '=', null)
                             ->where('id_especialidad', '=', 11)
                             ->value('id');
                if($cita != null){

                 $ids = $cita;
                 $id = $ids;
                 $paciente = Citas::where('id', '=', $cita)->value("id_paciente");
                 $anexo1 = AnexosCitasCheckup::select('citas_checkup.id','anexo17_22.nombre as names','anexoscheckup.nombre as nombr')
                                             ->join('anexo17_22', 'citas_checkup.id_anexo1722', '=', 'anexo17_22.id')
                                             ->join('anexoscheckup', 'anexo17_22.id_checkup', '=', 'anexoscheckup.id')
                                             ->where('id_paciente', '=', $paciente)
                                             ->where('id_cita', '=', $ids)
                                             ->get();
                 $citas = Citas::where('id', '=', $cita)->get();
                 $info = User::where('id', '=', $paciente)->get();
                 //dd($anexo1);
                     return view('Catalogos.forms.checkup.procesoconsultawisarcheckup', compact('info', 'ids', 'paciente', 'anexosckechup', 'id'),compact('citas'));
                }
                else{
                    
                    return view('Catalogos.forms.checkup.procesoconsultadoctores');           
                }
                    
                    
                }
                else{
                 
                $cita = Citas::where('id_doctor', '=', $ids)
                             ->where('cron_inicia', '!=', null)
                             ->where('cron_doctor', '!=', null)
                             ->where('cron_final', '=', null)
                             ->value('id');
               
                if($cita != null){

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
                    $anex1 = true; } else { $anex1 = false; }

 return view('Catalogos.forms.procesoconsultawisar', compact('info', 'ids', 'anexos', 'anex1',' resultadosmedicos','histmedico','paciente'),compact('citas'));


                }
                else{
                 return view('Catalogos.forms.doctores.doctoresagenda');
                }
           }
        }
           else if($role == 6){
               //return view('pages.dashboard'); 
                $url = "caja";
               return redirect()->to($url);
           }
           else if($role == 7){
               //return view('pages.dashboard'); 
                $url = "recetascitas";
               return redirect()->to($url);
           }
           else if($role == 8){
                $url = "procesoconsultaimagenologia";
               return redirect()->to($url); 
            }
           else if($role == 9){
                  $url = "procesoconsulta";
               return redirect()->to($url); 
            }
             
            
    }
}
