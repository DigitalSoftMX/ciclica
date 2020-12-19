<?php

namespace App\Models\Catalogos\Anexos;
use Illuminate\Database\Eloquent\Model;

class Anexo19 extends Model{

    public $timestamps = true;
    protected $table= 'anexo19';
    protected $fillable = ['anx19_mamario_doc','anx19_mamario_fr','anx19_mamario_fp','anx19_pelvico_doc','anx19_pelvico_fr','anx19_pelvico_fp','anx19_gine_doc','anx19_gine_fr',
        'anx19_gine_fp','anx19_nutricion_doc','anx19_nutricion_fr','anx19_nutricion_fp','anx19_biologia_doc','anx19_biologia_fr','anx19_biologia_fp','anx19_hormonal_doc',
        'anx19_hormonal_fr','anx19_hormonal_fp','anx19_hormonal_fase1_doc','anx19_hormonal_fase1_fr','anx19_hormonal_fase1_fp','anx19_hormonal_fase2_doc','anx19_hormonal_fase2_fr',
        'anx19_hormonal_fase2_fp','id_paciente','id_doctor', 'id_cita'];

}