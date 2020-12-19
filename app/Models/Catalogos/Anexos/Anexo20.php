<?php

namespace App\Models\Catalogos\Anexos;
use Illuminate\Database\Eloquent\Model;

class Anexo20 extends Model{

    public $timestamps = true;
    protected $table= 'anexo20';
    protected $fillable = ['id', 'anx20_primert_pp_doc','anx20_primert_pp_fr','anx20_primert_pp_fp','anx20_tiroideo_doc', 'anx20_tiroideo_fr','anx20_tiroideo_fp',
        'anx20_segundot_glucosa_doc','anx20_segundot_glucosa_fr','anx20_segundot_glucosa_fp','anx20_segundot_biometriah_doc','anx20_segundot_biometriah_fr','anx20_segundot_biometriah_fp',
        'anx20_segundot_ego_doc','anx20_segundot_ego_fr','anx20_segundo_ego_fp','anx20_tercert_cespeciales_doc','anx20_tercert_cespeciales_fr','anx20_tercert_cespeciales_fp',
        'anx20_tercert_urocultivo_doc','anx20_tercert_urocultivo_fr','anx20_tercert_urocultivo_fp','anx20_tercert_pp_doc','anx20_tercert_pp_fr','anx20_tercert_pp_fp',
        'id_paciente','id_doctor', 'id_cita', 'created_at', 'updated_at'];

}