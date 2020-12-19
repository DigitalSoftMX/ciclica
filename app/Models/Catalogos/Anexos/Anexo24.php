<?php

namespace App\Models\Catalogos\Anexos;
use Illuminate\Database\Eloquent\Model;

class Anexo24 extends Model{

    public $timestamps = true;
    protected $table= 'anexo24';
    protected $fillable = ['anx24_paciente','anx24_conyuge','anx24_medico','anx24_fumador','anx24_fumador_fre','anx24_medicamentos','anx24_cuales','anx24_dias_abs_sex',
        'anx24_mod_reco','anx24_hora_re','anx24_hora_pro','anx24_coagulo_inicial','anx24_licuefaccion','anx24_viscosidad','anx24_aspecto','anx24_volumen','anx24_PH',
        'anx24_concetracion','anx24_hp','anx24_movi_a','anx24_movi_b','anx24_movi_c','anx24_movi_d','anx24_indi_movi_ab','anx24_movi_total_abc','anx24_morfo',
        'anx24_defectos_cabeza','anx24_defectos_pieza_meda','anx24_defectos_cola','anx24_eritrocitos','anx24_leucocitos','anx24_inmadura','anx24_epiteliales','anx24_bacterias',
        'anx24_cristales','anx24_aglu','anx24_residuos','anx24_observaciones','anx24_fecha','anx24_EDB','anx24_edad1','anx24_edad2','id_paciente','id_doctor','id_cita','created_at','updated_at','deleted_at'];

}