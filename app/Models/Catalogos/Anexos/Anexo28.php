<?php

namespace App\Models\Catalogos\Anexos;
use Illuminate\Database\Eloquent\Model;

class Anexo28 extends Model{

    public $timestamps = true;
    protected $table= 'anexo28';
    protected $fillable = ['anx28_fechaP','anx28_EBD','anx28_paciente','anx28_edad_p','anx28_conyuge','anx28_edad_conyu','anx28_medico','anx28_fumador','anx28_fuma_frecuen',
        'anx28_medicamento','anx28_medi_cuales','anx28_abs_sexual','anx28_modo_recole','anx28_hora_reco','anx28_hora_proceso','anx28_coagulo_ini','anx28_licuefa','anx28_visco',
        'anx28_aspeto','anx28_volumen','anx28_ph','anx28_host','anx28_observa','id_paciente','id_doctor','id_cita'];

}