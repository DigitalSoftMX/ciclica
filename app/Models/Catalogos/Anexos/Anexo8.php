<?php

namespace App\Models\Catalogos\Anexos;
use Illuminate\Database\Eloquent\Model;

class Anexo8 extends Model
{

    public $timestamps = true;
    protected $table = 'anexo8';
    protected $fillable = ['anx8_penetracion','anx8_dispareunia','anx8_eyacu_vagi','anx8_dismenorrea','anx8_pater_comprobada','anx8_ocupacion',
        'anx8_trauma_testicular','anx8_Ante_paro_medicos','anx8_ebd_previas','anx8_cirujias_abodominales','anx8_infecc_vagi_repe','anx8_ciclos','anx8_cantidad',
        'anx8_infec_vagi_repe2','anx8_ultimo_papani','anx8_ante_cervi','anx8_ante_uterinas','anx8_notas','anx8_frecu_coital','anx8_tiempo_b_emb','anx8_edad','created_at',
        'updated_at','deleted_at','id_paciente','id_doctor', 'id_cita'];

}
