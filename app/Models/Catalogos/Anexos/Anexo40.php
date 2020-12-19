<?php

namespace App\Models\Catalogos\Anexos;
use Illuminate\Database\Eloquent\Model;

class Anexo40 extends Model{

    public $timestamps = true;
    protected $table= 'anexo40';
    protected $fillable = ['anx40_fecha','anx40_nombre','anx40_edad','anx40_gestas','anx40_cesareas','anx40_abortos','anx40_ectopico','anx40_grupo_rh',
                            'anx40_diagnostico','anx40_subjetivo','anx40_Objetivo','anx40_analisis','anx40_plan','id_paciente','id_doctor', 'id_cita'];

}