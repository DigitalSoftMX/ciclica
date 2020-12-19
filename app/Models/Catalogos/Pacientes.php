<?php 

namespace App\Models\Catalogos;
use Illuminate\Database\Eloquent\Model;

class Pacientes extends Model{
    
    public $timestamps = false;
    protected $table= 'pacientes';
    protected $fillable = ['id', 'id_user','fecha_nacimiento','id_estado','id_edo_civil','telefono','email','calle','
                         num_ext','num_int','colonia','ciudad','id_estado_domicilio','cp','tipo_sangre','ocupacion','alergias','nombre_pareja','fch_nacimiento_pareja','ocupacion_pareja','celular_pareja','email_pareja','carta'];

}