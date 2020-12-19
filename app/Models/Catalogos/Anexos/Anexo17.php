<?php

namespace App\Models\Catalogos\Anexos;
use Illuminate\Database\Eloquent\Model;

class Anexo17 extends Model
{

    public $timestamps = true;
    protected $table = 'anexo17';
    protected $fillable = ['anx17_D_osea_doc','anx17_D_osea_fr','anx17_D_osea_fp','anx17_M_bilateral_doc','anx17_M_bilateral_fr','anx17_M_bilateral_fp',
        'anx17_USG_mamario_doc','anx17_USG_mamario_fr','anx17_USG_mamario_fp','anx17_USG_pelvico_doc','anx17_USG_pelvico_fr','anx17_USG_pelvico_fp','anx17_QS_doc',
        'anx17_QS_fr','anx17_QS_fp','anx17_general_orina_doc','anx17_general_orina_fr','anx17_general_orina_fp','anx17_cultivo_espe_doc','anx17_cultivo_espe_fr',
        'anx17_cultivo_espe_fp','anx17_papanicolau_doc','anx17_papanicolau_fr','anx17_papanicolau_fp','anx17_colposcopia_doc','anx17_colposcopia_fr',
        'anx17_colposcopia_fp','anx17_consulta_gine_doc','anx17_consulta_gine_fr','anx17_consulta_gine_fp','anx17_consulta_nutri_doc','anx17_consulta_nutri_fr',
        'anx17_consulta_nutri_fp','anx17_valoracion_urogine_doc','anx17_valoracion_urogine_fr','anx17_valoracion_urogine_fp','anx17_valoracion_menopausia_doc',
        'anx17_valoracion_menopausia_fr','anx17_valoracion_menopausia_fp','anx17_valoracion_onco_gine_doc','anx17_valoracion_onco_gine_fr','anx17_valoracion_onco_gine_fp',
        'anx17_sangre_oculta_doc','anx17_sangre_oculta_fr','anx17_sangre_oculta_fp','anx17_vph_doc','anx17_vph_fr','anx17_vph_fp','id_paciente','id_doctor','id_cita'] ;

}
