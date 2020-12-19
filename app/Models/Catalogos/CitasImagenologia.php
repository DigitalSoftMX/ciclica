<?php 

namespace App\Models\Catalogos;
use Illuminate\Database\Eloquent\Model;

class CitasImagenologia extends Model{
    
    public $timestamps = true;
    protected $table= 'citas_imagenologia';
    protected $fillable = ['id', 'start', 'end', 'color', 'nota', 'id_paciente', 'id_doctor','id_especialidad','estado','id_cita','anotaciones'];


}