<?php

namespace App\Models\Catalogos\Anexos;
use Illuminate\Database\Eloquent\Model;

class Anexo26 extends Model{

    public $timestamps = true;
    protected $table= 'anexo26';
    protected $fillable = ['anx26_paciente','anx26_conyuge','anx26_medico','anx26_fecha','anx26_EDB','anx26_edad1','anx26_edad2','anx26_medicamentos','anx26_cuales',
        'anx26_dias_abs_sex','anx26_hora_re','anx26_hora_proce','anx26_ph','anx26_aspecto','anx26_concetracion','anx26_movi_a','anx26_movi_b','anx26_movi_c','anx26_movi_d',
        'anx26_movi_abc','anx26_movi_pro_ab','anx26_eritro','anx26_leucocitos','anx26_inmaduras','anx26_epiteliales','anx26_bacterias','anx26_cristales','anx26_rdtritos',
        'anx26_observa','created_at','updated_at','deleted_at','id_paciente','id_doctor','id_cita'];

}