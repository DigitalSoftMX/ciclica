<?php

namespace App\Models\Catalogos;
use Illuminate\Database\Eloquent\Model;

class AnexosCitasCheckup extends Model{

    public $timestamps = true;
    protected $table= 'citas_checkup';
    protected $fillable = ['id', 'id_anexo1722', 'id_paciente', 'id_doctor', 'id_cita', 'fecha_enfermeria', 'archivo','anotaciones'];

}