<?php

namespace App\Models\Catalogos;
use Illuminate\Database\Eloquent\Model;

class Historial_clinico extends Model{

    public $timestamps = true;
    protected $table= 'historial_clinica';
    protected $fillable = ['id','id_paciente','id_doctor', 'id_anexo', 'id_especialidad', 'created_at', 'updated_at'];

}