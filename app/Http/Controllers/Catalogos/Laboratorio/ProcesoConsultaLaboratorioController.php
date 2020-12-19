<?php namespace App\Http\Controllers\Catalogos\Laboratorio;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use App\Http\Controllers\Controller;
use Auth;
use Validator;
use App\User;
use App\Models\Catalogos\Role_User;
use App\Models\Catalogos\Role;
use App\Models\Catalogos\CitasLaboratorios;
use App\Models\Catalogos\ResultadoLaboratorio;
use App\Models\Catalogos\ResultadoImagenologia;
use App\Models\Catalogos\Especialidad;
use App\Models\Catalogos\AgendarEstudio;

use App\Models\Catalogos\Anexos\Anexo24;
use App\Models\Catalogos\Anexos\Anexo25;
use App\Models\Catalogos\Anexos\Anexo26;
use App\Models\Catalogos\Anexos\Anexo27;
use App\Models\Catalogos\Anexos\Anexo28;
use App\Models\Catalogos\Anexos\Anexo29;
use Calendar;

class ProcesoConsultaLaboratorioController extends Controller
{
    public function index(){
        
        
        return view('Catalogos.forms.laboratorio.procesoconsultalaboratorio');
    }
    
    public function consulta(){
        return view('Catalogos.forms.laboratorio.consultalaboratorio');
    }

     public function getConsulta($id){

        $ids = $id;
        $idss = \Auth::user()->id;
         $role = Role_User::where('user_id', '=', $idss)->value('role_id'); 
         if($role == 4){
                 $ids = $id;
                 $paciente = CitasLaboratorios::where('id', '=', $ids)->value("id_paciente");
                 $anexo1 = Anexo24::where('id_paciente', '=', $paciente)->where('id_cita', '=', $ids)->value('id');
                 $citas = CitasLaboratorios::where('id', '=', $ids)->get();
                 $info = User::where('id', '=', $paciente)->get();
                 $anexosckechup = "anexo24";
        
                 if($anexo1 == null){
                     return view('Catalogos.forms.laboratorio.procesoconsulta', compact('info', 'ids', 'paciente', 'anexosckechup', 'id'),compact('citas'));
                 }
                 else{

                     return redirect()->to("dashboard")->withStatus(__('No se puede iniciar la consulta.'));              
                    }
         }
      
    }
    
     public function getConsultaAnex24($id){

        $tipo = CitasLaboratorios::where('id', '=', $id)->value("tipo");
        if($tipo == 2){
        $ids = $id;
        $idss = \Auth::user()->id;
         $role = Role_User::where('user_id', '=', $idss)->value('role_id'); 
         if($role == 4){
                 $ids = $id;
                 $paciente = CitasLaboratorios::where('id', '=', $ids)->value("id_paciente");
                 $anexo1 = Anexo24::where('id_paciente', '=', $paciente)->where('id_cita', '=', $ids)->value('id');
                 $citas = CitasLaboratorios::where('id', '=', $ids)->get();
                 $info = User::where('id', '=', $paciente)->get();
                 $estu = AgendarEstudio::where('id_paciente', '=', $paciente)->orderby('id', 'desc')->get(); 
                 $anexosckechup = "anexo24";
        
                 if($anexo1 == null){
                     return view('Catalogos.forms.laboratorio.procesoconsulta', compact('info', 'ids', 'paciente', 'anexosckechup', 'id', 'estu','tipo'),compact('citas'));
                 }
                 else{

                     return redirect()->to("dashboard")->withStatus(__('No se puede iniciar la consulta.'));              
                    }
         }
         
        }
        else{
            return redirect()->route('addestget', [$id])->withStatus(__('Se agrego correctamente.'));
        }
      
    }
    
     public function getConsultaAnex25($id){

        $tipo = CitasLaboratorios::where('id', '=', $id)->value("tipo");
        $ids = $id;
        $idss = \Auth::user()->id;
         $role = Role_User::where('user_id', '=', $idss)->value('role_id'); 
         if($role == 4){
                 $ids = $id;
                 $paciente = CitasLaboratorios::where('id', '=', $ids)->value("id_paciente");
                 $anexo1 = Anexo25::where('id_paciente', '=', $paciente)->where('id_cita', '=', $ids)->value('id');
                 $citas = CitasLaboratorios::where('id', '=', $ids)->get();
                 $info = User::where('id', '=', $paciente)->get();
                 $estu = AgendarEstudio::where('id_paciente', '=', $paciente)->orderby('id', 'desc')->get(); 
                 $anexosckechup = "anexo25";
        
                 if($anexo1 == null){
                     return view('Catalogos.forms.laboratorio.procesoconsulta', compact('info', 'ids', 'paciente', 'anexosckechup', 'id', 'estu','tipo'),compact('citas'));
                 }
                 else{

                     return redirect()->to("dashboard")->withStatus(__('No se puede iniciar la consulta.'));              
                    }
         }
      
    }
    
     public function getConsultaAnex26($id){
         $tipo = CitasLaboratorios::where('id', '=', $id)->value("tipo");
        $ids = $id;
        $idss = \Auth::user()->id;
         $role = Role_User::where('user_id', '=', $idss)->value('role_id'); 
         if($role == 4){
                 $ids = $id;
                 $paciente = CitasLaboratorios::where('id', '=', $ids)->value("id_paciente");
                 $anexo1 = Anexo26::where('id_paciente', '=', $paciente)->where('id_cita', '=', $ids)->value('id');
                 $citas = CitasLaboratorios::where('id', '=', $ids)->get();
                 $info = User::where('id', '=', $paciente)->get();
                 $estu = AgendarEstudio::where('id_paciente', '=', $paciente)->orderby('id', 'desc')->get(); 
                 $anexosckechup = "anexo26";
        
                 if($anexo1 == null){
                     return view('Catalogos.forms.laboratorio.procesoconsulta', compact('info', 'ids', 'paciente', 'anexosckechup', 'id', 'estu','tipo'),compact('citas'));
                 }
                 else{

                     return redirect()->to("dashboard")->withStatus(__('No se puede iniciar la consulta.'));              
                    }
         }
      
    }
    
     public function getConsultaAnex27($id){
         $tipo = CitasLaboratorios::where('id', '=', $id)->value("tipo");
        $ids = $id;
        $idss = \Auth::user()->id;
         $role = Role_User::where('user_id', '=', $idss)->value('role_id'); 
         if($role == 4){
                 $ids = $id;
                 $paciente = CitasLaboratorios::where('id', '=', $ids)->value("id_paciente");
                 $anexo1 = Anexo27::where('id_paciente', '=', $paciente)->where('id_cita', '=', $ids)->value('id');
                 $citas = CitasLaboratorios::where('id', '=', $ids)->get();
                 $info = User::where('id', '=', $paciente)->get();
                 $estu = AgendarEstudio::where('id_paciente', '=', $paciente)->orderby('id', 'desc')->get(); 
                 $anexosckechup = "anexo27";
        
                 if($anexo1 == null){
                     return view('Catalogos.forms.laboratorio.procesoconsulta', compact('info', 'ids', 'paciente', 'anexosckechup', 'id', 'estu','tipo'),compact('citas'));
                 }
                 else{

                     return redirect()->to("dashboard")->withStatus(__('No se puede iniciar la consulta.'));              
                    }
         }
      
    }
    
     public function getConsultaAnex28($id){
         $tipo = CitasLaboratorios::where('id', '=', $id)->value("tipo");
        $ids = $id;
        $idss = \Auth::user()->id;
         $role = Role_User::where('user_id', '=', $idss)->value('role_id'); 
         if($role == 4){
                 $ids = $id;
                 $paciente = CitasLaboratorios::where('id', '=', $ids)->value("id_paciente");
                 $anexo1 = Anexo28::where('id_paciente', '=', $paciente)->where('id_cita', '=', $ids)->value('id');
                 $citas = CitasLaboratorios::where('id', '=', $ids)->get();
                 $info = User::where('id', '=', $paciente)->get();
                 $estu = AgendarEstudio::where('id_paciente', '=', $paciente)->orderby('id', 'desc')->get(); 
                 $anexosckechup = "anexo28";
        
                 if($anexo1 == null){
                     return view('Catalogos.forms.laboratorio.procesoconsulta', compact('info', 'ids', 'paciente', 'anexosckechup', 'id', 'estu','tipo'),compact('citas'));
                 }
                 else{

                     return redirect()->to("dashboard")->withStatus(__('No se puede iniciar la consulta.'));              
                    }
         }
      
    }
    
     public function getConsultaAnex29($id){
         $tipo = CitasLaboratorios::where('id', '=', $id)->value("tipo");
        $ids = $id;
        $idss = \Auth::user()->id;
         $role = Role_User::where('user_id', '=', $idss)->value('role_id'); 
         if($role == 4){
                 $ids = $id;
                 $paciente = CitasLaboratorios::where('id', '=', $ids)->value("id_paciente");
                 $anexo1 = Anexo29::where('id_paciente', '=', $paciente)->where('id_cita', '=', $ids)->value('id');
                 $citas = CitasLaboratorios::where('id', '=', $ids)->get();
                 $info = User::where('id', '=', $paciente)->get();
                 $estu = AgendarEstudio::where('id_paciente', '=', $paciente)->orderby('id', 'desc')->get(); 
                 $anexosckechup = "anexo29";
        
                 if($anexo1 == null){
                     return view('Catalogos.forms.laboratorio.procesoconsulta', compact('info', 'ids', 'paciente', 'anexosckechup', 'id', 'estu','tipo'),compact('citas'));
                 }
                 else{

                     return redirect()->to("dashboard")->withStatus(__('No se puede iniciar la consulta.'));              
                    }
         }
      
    }
    
     public function estudios($id){
        //return view('Catalogos.forms.procesoconsulta');
       //dd($id);
         $ids = \Auth::user()->id;
         $role = Role_User::where('user_id', '=', $ids)->value('role_id'); 
           if($role == 4){
                $cita = $id;
         $ids = $cita;
         $paciente = CitasLaboratorios::where('id', '=', $cita)->value("id_paciente");
         
         $citas = CitasLaboratorios::where('id', '=', $cita)->get();
         $info = User::where('id', '=', $paciente)->get();
        
        $est = ResultadoLaboratorio::where('resultados_estudios.id_paciente', '=', $paciente)
                ->where('resultados_estudios.id_cita', '=', $cita)
                ->value('id');
                
        $labo = ResultadoLaboratorio::where('resultados_estudios.id_paciente', '=', $paciente)
                ->where('resultados_estudios.id_cita', '=', $cita)
                ->get();
        
        $estu = AgendarEstudio::where('id_paciente', '=', $paciente)->orderby('id', 'desc')->get(); 
        
         $estudios = ResultadoLaboratorio::
                select('resultados_estudios.id','resultados_estudios.resultado', 'resultados_estudios.imagen', 'resultados_estudios.archivo', 'resultados_estudios.archivo2', 'resultados_estudios.archivo3', 'users.name as medico', 'especialidad.name as especialidad','resultados_estudios.created_at')
                ->join('users', 'resultados_estudios.id_doctor', '=', 'users.id')
                ->join('especialidad', 'resultados_estudios.id_especialidad', '=', 'especialidad.id')
                ->where('resultados_estudios.id_paciente', '=', $paciente)
                ->where('resultados_estudios.id_cita', '=', $cita);
                
         $resultadosmedicos = ResultadoImagenologia::
                select('resultados_imagenologia.id','resultados_imagenologia.resultado', 'resultados_imagenologia.imagen', 'resultados_imagenologia.archivo', 'resultados_imagenologia.archivo2', 'resultados_imagenologia.archivo3', 'users.name as medico', 'especialidad.name as especialidad', 'resultados_imagenologia.created_at')
                ->join('users', 'resultados_imagenologia.id_doctor', '=', 'users.id')
                ->join('especialidad', 'resultados_imagenologia.id_especialidad', '=', 'especialidad.id')
                ->where('resultados_imagenologia.id_paciente', '=', $paciente)
                ->where('resultados_imagenologia.id_cita', '=', $cita)
                ->union($estudios)
                ->orderBy('created_at', 'desc')
                ->get();
        
        $tipo = CitasLaboratorios::where('id', '=', $id)->value("tipo");
 
                 return view('Catalogos.forms.laboratorio.estudiosprocesoconsultawisar', compact('info', 'ids', 'id','resultadosmedicos','paciente','est','labo','estu','tipo'),compact('citas'));

           }
           
           if($role == 3){

         $paciente = $ids;
         
         $citas = CitasLaboratorios::where('id_paciente', '=', $paciente)->get();
         $info = User::where('id', '=', $paciente)->get();
        
        $est = ResultadoLaboratorio::where('resultados_estudios.id_paciente', '=', $paciente)
                ->value('id');
                
        $labo = ResultadoLaboratorio::where('resultados_estudios.id_paciente', '=', $paciente)
                ->get();
        
        $estu = AgendarEstudio::where('id_paciente', '=', $paciente)->orderby('id', 'desc')->get(); 
        
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
        
        $tipo = CitasLaboratorios::where('id', '=', $id)->value("tipo");
 
                 return view('Catalogos.forms.usuarios.estudiosprocesoconsultawisar', compact('info', 'ids', 'id','resultadosmedicos','paciente','est','labo','estu','tipo'),compact('citas'));

           }
                
           if($role == 5){

         $paciente = $id;
        //dd($paciente);
         $citas = CitasLaboratorios::where('id_paciente', '=', $paciente)->get();
         $info = User::where('id', '=', $paciente)->get();
        
         $est = ResultadoLaboratorio::where('resultados_estudios.id_paciente', '=', $paciente)
                ->value('id');
                
         $labo = ResultadoLaboratorio::where('resultados_estudios.id_paciente', '=', $paciente)
                ->get();
        
         $estu = AgendarEstudio::where('id_paciente', '=', $paciente)->orderby('id', 'desc')->get(); 
        
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
        
        $tipo = 2;
 
                 return view('Catalogos.forms.doctores.estudiosusuariosprocesoconsultawisar', compact('info', 'ids', 'id','resultadosmedicos','paciente','est','labo','estu','tipo'),compact('citas'));

           }
           
           if($role == 9){

         $paciente = $id;
        //dd($paciente);
         $citas = CitasLaboratorios::where('id_paciente', '=', $paciente)->get();
         $info = User::where('id', '=', $paciente)->get();
        
         $est = ResultadoLaboratorio::where('resultados_estudios.id_paciente', '=', $paciente)
                ->value('id');
                
         $labo = ResultadoLaboratorio::where('resultados_estudios.id_paciente', '=', $paciente)
                ->get();
        
         $estu = AgendarEstudio::where('id_paciente', '=', $paciente)->orderby('id', 'desc')->get(); 
        
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
        
        $tipo = 2;
 
                 return view('Catalogos.forms.doctores.estudiosusuariosprocesoconsultawisar', compact('info', 'ids', 'id','resultadosmedicos','paciente','est','labo','estu','tipo'),compact('citas'));

           }
    }
    
     public function postAdd(Request $request, $id){
    
       $citas = CitasLaboratorios::where('id', '=', $id)->get();
        //dd($citas[0]->id_paciente);
        
         \Storage::makeDirectory('cita/' . $id);
        if($request->file('file1') != null){
            $fileCon=$request->file('file1');
            $nombreCon1 = $fileCon->getClientOriginalName();
            \Storage::disk('laboratorio')->put('/'.$id.'/'.$nombreCon1,  \File::get($fileCon));
        }
        else{ $nombreCon1 = ""; }
        
        if($request->file('file2') != null){
            $fileCon=$request->file('file2');
            $nombreCon2 = $fileCon->getClientOriginalName();
            \Storage::disk('laboratorio')->put('/'.$id.'/'.$nombreCon2,  \File::get($fileCon));
        }
        else{ $nombreCon2 = ""; }
        
        if($request->file('file2') != null){
            $fileCon=$request->file('file2');
            $nombreCon3 = $fileCon->getClientOriginalName();
            \Storage::disk('laboratorio')->put('/'.$id.'/'.$nombreCon3,  \File::get($fileCon));
        }
        else{ $nombreCon3 = ""; }
        
         $datos = ResultadoLaboratorio::create([
                    'resultado' => $request->resultado,
                    'archivo' => $nombreCon1,
                    'archivo2' => $nombreCon2,
                    'archivo3' => $nombreCon3,
                    'id_paciente' => $citas[0]->id_paciente,
                    'id_doctor' => $citas[0]->id_doctor,
                    'id_especialidad' => $citas[0]->id_especialidad,
                    'id_cita' => $id,
                    ]);
            
            $pruebacolor = "#F34814";
            $ticket = CitasLaboratorios::find($id);
                $ticket->color = $pruebacolor;
                $ticket->save();
        
        return redirect()->route('addestget', [$id])->withStatus(__('Se agrego correctamente.'));
    }
    
     public function postEdit(Request $request, $ids){
    
       $id = ResultadoLaboratorio::where('id_cita', '=', $ids)->value('id');
       
       if($id != null){
    
       //$citas = CitasLaboratorios::where('id', '=', $id)->get();
        //dd($citas[0]->id_paciente);
        
        if($request->file('file1') != null){
            $fileCon=$request->file('file1');
            $nombreCon1 = $fileCon->getClientOriginalName();
            \Storage::disk('laboratorio')->put('/'.$ids.'/'.$nombreCon1,  \File::get($fileCon));
        }
        else{ $nombreCon1 = ResultadoLaboratorio::where('id', '=', $id)->value('archivo'); }
        
        if($request->file('file2') != null){
            $fileCon=$request->file('file2');
            $nombreCon2 = $fileCon->getClientOriginalName();
            \Storage::disk('laboratorio')->put('/'.$ids.'/'.$nombreCon2,  \File::get($fileCon));
        }
        else{ $nombreCon2 = ResultadoLaboratorio::where('id', '=', $id)->value('archivo2'); }
        
        if($request->file('file2') != null){
            $fileCon=$request->file('file2');
            $nombreCon3 = $fileCon->getClientOriginalName();
            \Storage::disk('laboratorio')->put('/'.$ids.'/'.$nombreCon3,  \File::get($fileCon));
        }
        else{ $nombreCon3 = ResultadoLaboratorio::where('id', '=', $id)->value('archivo3'); }
       
                    $ticket = ResultadoLaboratorio::find($id);
                    $ticket->resultado = $request->resultado;
                    $ticket->archivo = $nombreCon1;
                    $ticket->archivo2 = $nombreCon2;
                    $ticket->archivo3 = $nombreCon3;
                    $ticket->save();
                    
        return redirect()->route('addestget', [$ids])->withStatus(__('Se agrego correctamente.'));
        
       }
       else{
           
            $citas = CitasLaboratorios::where('id', '=', $ids)->get();
        //dd($citas[0]->id_paciente);
        
         \Storage::makeDirectory('cita/' . $ids);
        if($request->file('file1') != null){
            $fileCon=$request->file('file1');
            $nombreCon1 = $fileCon->getClientOriginalName();
            \Storage::disk('laboratorio')->put('/'.$ids.'/'.$nombreCon1,  \File::get($fileCon));
        }
        else{ $nombreCon1 = ""; }
        
        if($request->file('file2') != null){
            $fileCon=$request->file('file2');
            $nombreCon2 = $fileCon->getClientOriginalName();
            \Storage::disk('laboratorio')->put('/'.$ids.'/'.$nombreCon2,  \File::get($fileCon));
        }
        else{ $nombreCon2 = ""; }
        
        if($request->file('file2') != null){
            $fileCon=$request->file('file2');
            $nombreCon3 = $fileCon->getClientOriginalName();
            \Storage::disk('laboratorio')->put('/'.$ids.'/'.$nombreCon3,  \File::get($fileCon));
        }
        else{ $nombreCon3 = ""; }
        
         $datos = ResultadoLaboratorio::create([
                    'resultado' => $request->resultado,
                    'archivo' => $nombreCon1,
                    'archivo2' => $nombreCon2,
                    'archivo3' => $nombreCon3,
                    'id_paciente' => $citas[0]->id_paciente,
                    'id_doctor' => $citas[0]->id_doctor,
                    'id_especialidad' => $citas[0]->id_especialidad,
                    'id_cita' => $ids,
                    ]);
            
           /* $pruebacolor = "#F34814";
            $ticket = CitasLaboratorios::find($id);
                $ticket->color = $pruebacolor;
                $ticket->save();
        */
        return redirect()->route('addestget', [$ids])->withStatus(__('Se agrego correctamente.'));
       }
    }
    
     public function getDestroy($ids){
    
       $id = ResultadoLaboratorio::where('id', '=', $ids)->value('id_cita');
       //dd($id);
        $data = ResultadoLaboratorio::destroy($ids);
        
        return redirect()->route('addestget', [$id])->withStatus(__('Se agrego correctamente.'));
    }
    
     public function costosconsulta(){
        return view('Catalogos.forms.laboratorio.laboratoriocaja');
    }

     public function downloadFile1($archivo){
      $id = ResultadoLaboratorio::where('archivo', '=', $archivo)->value('id_cita');
      $path = storage_path('app/laboratorio/'.$id.'/').$archivo;
       return response()->download($path);
    }
    
     public function downloadFile2($archivo){
      $id = ResultadoLaboratorio::where('archivo2', '=', $archivo)->value('id_cita');
      $path = storage_path('app/laboratorio/'.$id.'/').$archivo;
       return response()->download($path);
    }
    
     public function downloadFile3($archivo){
      $id = ResultadoLaboratorio::where('archivo3', '=', $archivo)->value('id_cita');
      $path = storage_path('app/laboratorio/'.$id.'/').$archivo;
       return response()->download($path);
    }
    


}
