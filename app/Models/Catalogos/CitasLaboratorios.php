<?php 

namespace App\Models\Catalogos;
use Illuminate\Database\Eloquent\Model;

class CitasLaboratorios extends Model{
    
    public $timestamps = true;
    protected $table= 'citas_laboratorios';
    protected $fillable = ['id', 'start', 'end', 'color', 'nota', 'id_paciente', 'id_doctor','id_especialidad','estado','id_cita','tipo','anotaciones'];

}