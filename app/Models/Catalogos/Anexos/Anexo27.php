<?php

namespace App\Models\Catalogos\Anexos;
use Illuminate\Database\Eloquent\Model;

class Anexo27 extends Model{

    public $timestamps = true;
    protected $table= 'anexo27';
    protected $fillable = ['anx27_fecha','anx27_IAH','anx27_paciente','anx27_edad','anx27_conyuge','anx27_edad_2','anx27_Dr_solicitante','anx27_fumador','anx27_fumador_fre',
        'anx27_medicamentos','anx27_cuales','anx27_dias_abs_sex','anx27_mod_reco','anx27_hora_re','anx27_hora_pro','anx27_licuefa','anx27_visco','anx27_volumen','anx27_apecto',
        'anx27_conce','anx27_conce_total','anx27_movia_a','anx27_movi_b','anx27_movi_c','anx27_movi_d','anx27_movi_ab','anx27_movi_total_abc','anx27_morfo','anx27_obser',
        'anx27_volumen_final','anx27_apecto_1','anx27_conce_1','anx27_movia_a_1','anx27_movi_b_1','anx27_movi_c_1','anx27_movi_d_1','anx27_movi_ab_1','anx27_movi_total_abc_1',
        'anx27_morfo_1','anx27_obser_1','created_at','updated_at','deleted_at','id_paciente','id_doctor','id_cita'];

}