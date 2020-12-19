<?php 

namespace App\Models\Catalogos;
use Illuminate\Database\Eloquent\Model;

class Citas extends Model{
    
    public $timestamps = true;
    protected $table= 'citas';
    protected $fillable = ['id', 'start', 'end', 'color', 'color_status', 'url', 'nota', 'id_paciente', 'id_doctor','id_especialidad','cron_inicia','cron_doctor','cron_final', 'cobrar_status', 'cronometro','tiempo_cita'];

}