<?php

namespace App\Models\Catalogos\Anexos;
use Illuminate\Database\Eloquent\Model;

class Anexo25 extends Model{

    public $timestamps = true;
    protected $table= 'anexo25';
    protected $fillable = ['anx25_fecha','anx25_IAH','anx25_paciente','anx25_edad','anx25_conyuge','anx25_edad_2','anx25_Dr_solicitante','anx25_fumador','anx25_fumador_fre',
        'anx25_medicamentos','anx25_cuales','anx25_dias_abs_sex','anx25_mod_reco','anx25_hora_re','anx25_hora_pro','anx25_licuefa','anx25_visco','anx25_volumen','anx25_apecto',
        'anx25_conce','anx25_conce_total','anx25_movia_a','anx25_movi_b','anx25_movi_c','anx25_movi_d','anx25_movi_ab','anx25_movi_total_abc','anx25_morfo','anx25_obser',
        'anx25_volumen_final','anx25_apecto_1','anx25_conce_1','anx25_movia_a_1','anx25_movi_b_1','anx25_movi_c_1','anx25_movi_d_1','anx25_movi_ab_1','anx25_movi_total_abc_1',
        'anx25_morfo_1','anx25_obser_1','created_at','updated_at','deleted_at','id_paciente','id_doctor','id_cita'];

}