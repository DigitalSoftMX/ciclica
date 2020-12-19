<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Models\Catalogos\Citas;
use App\Models\Catalogos\Role_User;


class ExamplePagesController extends Controller
{
    public function calendar()
    {
         $ids = \Auth::user()->id;
         $role = Role_User::where('user_id', '=', $ids)->value('role_id'); 
            if($role == 1){
                
               $this->field_list = ['paciente'=>'Nombre', 'start'=>'Fecha','especialidad'=>'Especialidad','username'=>'No. Paciente'];
               return view('pages.calendar',array('catalog'=>$this));
               
           }
           else if($role == 3){
               $this->field_list = ['paciente'=>'Nombre', 'start'=>'Fecha','especialidad'=>'Especialidad','username'=>'No. Paciente'];
                 return view('pages.calendarusuarios',array('catalog'=>$this));
           }
           else if($role == 5){
               $this->field_list = ['paciente'=>'Nombre', 'start'=>'Fecha','especialidad'=>'Especialidad','username'=>'No. Paciente'];
                 return view('pages.calendardoctor',array('catalog'=>$this), compact('role'));
           }
           else if($role == 9){
               $this->field_list = ['paciente'=>'Nombre', 'start'=>'Fecha','especialidad'=>'Especialidad','username'=>'No. Paciente'];
                 return view('pages.calendar',array('catalog'=>$this));
           }
        
    }
    
     public function postJFilter(Request $request)
    {
        
       if($request->url == "calendarfilter"){
         
        if($request->username != ""){
           $usuario = User::where('users.username', '=', $request->username)
                    ->value('id');
                  
             $data = Citas::select('citas.id','citas.start', \DB::raw('CONCAT(paciente.name, " ", paciente.app_name, " ", paciente.apm_name) as paciente'), 'especialidad.name as especialidad', 'paciente.username')
                      ->join('especialidad', 'citas.id_especialidad', '=', 'especialidad.id')
                      ->join('users as paciente', 'citas.id_paciente', '=', 'paciente.id')
                      ->where('citas.cron_inicia', '=', null)
                      ->where('citas.id_paciente', '=', $usuario)
                      ->get();
                    
        return response()->json(['draw'=>"1",'data' => $data,'recordsTotal'=>$data->count()] );  

     }
        else if($request->name != ""){
           $usuario = User::where('users.name', '=', $request->name)
                    ->value('id');
                  
             $data = Citas::select('citas.id','citas.start', \DB::raw('CONCAT(paciente.name, " ", paciente.app_name, " ", paciente.apm_name) as paciente'), 'especialidad.name as especialidad', 'paciente.username')
                      ->join('especialidad', 'citas.id_especialidad', '=', 'especialidad.id')
                      ->join('users as paciente', 'citas.id_paciente', '=', 'paciente.id')
                      ->where('citas.cron_inicia', '=', null)
                      ->where('citas.id_paciente', '=', $usuario)
                      ->get();
        return response()->json(['draw'=>"1",'data' => $data,'recordsTotal'=>$data->count()] );  
     }
     else if($request->app_name != "" && $request->apm_name != "" && $request->name != ""){
           $usuario = User::where('users.name', '=', $request->name)
                    ->where('users.app_name', '=', $request->app_name)
                    ->where('users.apm_name', '=', $request->apm_name)
                    ->value('id');
                  
             $data = Citas::select('citas.id','citas.start', \DB::raw('CONCAT(paciente.name, " ", paciente.app_name, " ", paciente.apm_name) as paciente'), 'especialidad.name as especialidad', 'paciente.username')
                      ->join('especialidad', 'citas.id_especialidad', '=', 'especialidad.id')
                      ->join('users as paciente', 'citas.id_paciente', '=', 'paciente.id')
                      ->where('citas.cron_inicia', '=', null)
                      ->where('citas.id_paciente', '=', $usuario)
                      ->get();
        return response()->json(['draw'=>"1",'data' => $data,'recordsTotal'=>$data->count()] );  
     }
        
       }

    }

    public function calendarestudios()
    {
        return view('pages.calendarestudios');
    }

    public function calendarprocesoconsulta($id)
    {
      $info = User::where('id', '=', $id)->get();
      $ids = Citas::where('id', '=', $id)->value('id_paciente');
      return view('calendar.calendarprocesoconsulta', compact('info'),compact('ids', 'id'));
    }

      public function calendarprocesoestudios($id)
    {
      $info = User::where('id', '=', $id)->get();
      $ids = Citas::where('id', '=', $id)->value('id_paciente');
      return view('calendar.calendarprocesoconsulta', compact('info'),compact('ids', 'id'));
    }
}
