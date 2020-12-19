<?php

namespace App\Models\Catalogos;
use Illuminate\Database\Eloquent\Model;

class ResultadoLaboratorio extends Model{

    public $timestamps = true;
    protected $table= 'resultados_estudios';
    protected $fillable = ['id', 'resultado','imagen','archivo', 'archivo2','archivo3', 'id_paciente', 'id_doctor', 'id_especialidad', 'id_cita'];

}

