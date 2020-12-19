<?php

namespace App\Models\Catalogos;
use Illuminate\Database\Eloquent\Model;

class MaternoFetal extends Model{

    public $timestamps = true;
    protected $table= 'materno_fetal';
    protected $fillable = ['id', 'id_medico','id_paciente','fecha','origen_etnico', 'f_ult_mestruacion', 'cons_mestruacion', 'ant_crosomopatia', 'ant_malformaciones', 'muerte_ut_16', 'muerte_ut_des', 'cuantas_muertes_ut', 'id_hist_gestas'];

}