<?php namespace App\Http\Controllers\Catalogos\Doctores;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use App\Http\Controllers\Controller;
use Auth;
use Validator;
use App\User;
use App\Models\Catalogos\Citas;
use App\Models\Catalogos\ResultadoLaboratorio;
use App\Models\Catalogos\ResultadoImagenologia;
use App\Models\Catalogos\Especialidad;
use App\Models\Catalogos\Historial_clinico;
use App\Models\Catalogos\Anexos\Anexo1;
use App\Models\Catalogos\Anexos\Anexo2;
use App\Models\Catalogos\Anexos\Anexo3;
use App\Models\Catalogos\Anexos\Anexo4;
use App\Models\Catalogos\Anexos\Anexo5;
use App\Models\Catalogos\Anexos\Anexo6;
use App\Models\Catalogos\Anexos\Anexo7;
use App\Models\Catalogos\Anexos\Anexo8;
use App\Models\Catalogos\Anexos\Anexo9;
use App\Models\Catalogos\Anexos\Anexo10;
use App\Models\Catalogos\Anexos\Anexo11;
use App\Models\Catalogos\Anexos\Anexo12;
use App\Models\Catalogos\Anexos\Anexo13;
use App\Models\Catalogos\Anexos\Anexo14;
use App\Models\Catalogos\Anexos\Anexo15;
use App\Models\Catalogos\Anexos\Anexo16;
use App\Models\Catalogos\Anexos\Anexo17;
use App\Models\Catalogos\Anexos\Anexo18;
use App\Models\Catalogos\Anexos\Anexo19;
use App\Models\Catalogos\Anexos\Anexo20;
use Calendar;

class ProcesoConsultaDoctoresController extends Controller
{
    public function index(){
        return view('Catalogos.forms.doctores.procesoconsultadoctores');
    }

    public function getConsulta($id){

        $ids = $id;
       
        $paciente = Citas::where('id', '=', $id)->value("id_paciente");
        $anex1 = Anexo1::where('id_paciente', '=', $paciente)->get();
    
        $citas = Citas::where('id', '=', $id)->get();
        $info = User::where('id', '=', $paciente)->get();
        $especialidad = Citas::where('id', '=', $id)->value('id_especialidad');
        
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
                
                //dd($histmedico);

                if($anex1 == " "){ $anex1 = true; }
    return view('Catalogos.forms.procesoconsultawisar', compact('info', 'ids', 'anexos', 'anex1','resultadosmedicos','histmedico','paciente'),compact('citas'));

      
    }

    public function downloadFile($archivo){
      $pathtoFile = public_path().'/material/archivos/'.$archivo;
      return response()->download($pathtoFile);
    }
    
   public function downloadImg($archivo){
      $pathtoFile = public_path().'/material/archivos/'.$archivo.'.png';
      return response()->download($pathtoFile);
    }
   


}
