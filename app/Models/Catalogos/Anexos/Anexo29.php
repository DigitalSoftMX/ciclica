<?php

namespace App\Models\Catalogos\Anexos;
use Illuminate\Database\Eloquent\Model;

class Anexo29 extends Model{

    public $timestamps = true;
    protected $table= 'anexo29';
    protected $fillable = ['anx29_horamuestra','anx29_fecha_estu','anx29_hora_proce_mue','anx29_fecha_proce','anx29_dias_abs_sexual','anx29_coagulo_ini','anx29_licuefaccion','anx29_viscosidad',
        'anx29_volumen','anx29_aspecto','anx29_PH','anx29_conce_esper','anx29_conce_esper_total','anx29_movi_total_abc','anx29_movi_proge_abc','anx29_volumen_1','anx29_morfi','anx29_viabilidad',
        'anx29_defectos_cabeza','anx29_defectos_medica','anx29_defectos_colas','anx29_Eritro','anx29_leucocitos','anx29_inmaduras','anx29_epiteliales','anx29_bacterias','anx29_cristales','anx29_agluti',
        'anx29_agregacion','anx29_resi_detri','anx29_host_hora_reco_mues','anx29_host_fecha_estu','anx29_host_hora_proce_mues','anx29_host_fecha_proce','anx29_host_dias_abs_sexual','anx29_host_coagulo_ini',
        'anx29_host_licue','anx29_host_visco','anx29_host_volumen','anx29_host_aspecto','anx29_host_PH','anx29_host_esperma','anx29_post_hora_reco_mue','anx29_post_fecha_estu','anx29_post_hora_proce_mue',
        'anx29_post_fecha_proce','anx29_post_dias_abs_sex','anx29_post_aspecto','anx29_post_conce_esper','anx29_post_movi_total_abc','anx29_post_movi_proce_AB','anx29_capa_hora_reco_mue',
        'anx29_capa_fech_estu','anx29_capa_hora_proce_mu','anx29_capa_fecha_proce','anx29_capa_dias_abs_sexual','anx29_capa_licue','anx29_capa_visco','anx29_capa_volumen','anx29_capa_aspecto',
        'anx29_capa_esper_mili','anx29_capa_esper_total','anx29_capa_movi_total_ABC','anx29_capa_movi_progre_abc','anx29_capa_morfilogia','anx29_post_capa_volumen','anx29_post_capa_espe_mili',
        'anx29_post_capa_movi_total_abc','anx29_post_capa_moviproABC','anx29_post_capa_morfo','anx29_post_capa_hora_reco_mue','anx29_post_capa_fecha_estu','anx29_post_capa_hora_proce',
        'anx29_post_capa_fecha_proce','anx29_post_capa_abs_sex','anx29_post_capa_licue','anx29_post_capa_visco','anx29_post_capa_volumen_1','anx29_post_capa_aspecto','anx29_post_capa_espe',
        'anx29_post_capa_espe_total','anx29_post_capa_movi_abc','anx29_post_capa_movipro_abc','anx29_post_capa_norma','anx29_postt_volumen','anx29_postt_espe_mili','anx29_postt_movi_total_abc',
        'anx29_postt_movi_progre_abc','anx29_postt_morfo','id_paciente','id_doctor', 'id_cita'];

}