<?php

namespace App\Models\Catalogos\Anexos;
use Illuminate\Database\Eloquent\Model;

class Anexo21 extends Model{

    public $timestamps = true;
    protected $table= 'anexo21';
    protected $fillable = ['anx21_marcadores_doc','anx21_marcadores_fr','anx21_marcadores_fp','anx21_usg_primer_doc','anx21_usg_primer_fr','anx21_usg_primer_fp',
        'anx21_usg_segundo_doc','anx21_usg_segundo_fr','anx21_usg_segundo_fp','anx21_usg_tercer_doc','anx21_usg_tercer_fr','anx21_usg_tercer_fp','anx21_nutri_doc',
        'anx21_nutri_fr','anx21_nutri_fp','anx21_ecocar_doc','anx21_ecocar_fr','anx21_ecocar_fp','id_paciente','id_doctor','id_cita','created_at','updated_at','deleted_at'];

}