<?php

namespace App\Models\Catalogos;
use Illuminate\Database\Eloquent\Model;

class ResultadoImagenologia extends Model{

    public $timestamps = true;
    protected $table= 'resultados_imagenologia';
    protected $fillable = ['id', 'resultado','imagen','archivo', 'archivo2','archivo3', 'id_paciente', 'id_doctor', 'id_especialidad', 'id_cita'];

}
