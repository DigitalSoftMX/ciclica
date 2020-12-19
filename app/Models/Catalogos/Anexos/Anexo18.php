<?php

namespace App\Models\Catalogos\Anexos;
use Illuminate\Database\Eloquent\Model;

class Anexo18 extends Model{

    public $timestamps = true;
    protected $table= 'anexo18';
    protected $fillable = ['id', 'anx18_USG_Mamario_Doc','anx18_USG_Mamario_Fr','anx18_USG_Mamario_Fp','anx18_USG_Pelvico_Doc', 'anx18_USG_Pelvico_Fr','anx18_USG_Pelvico_Fp',
        'anx18_Cul_especiales_Doc','anx18_Cul_especiales_Fr','anx18_Cul_especiales_Fp','anx18_papanicolau_Doc','anx18_papanicolau_Fr','anx18_papanicolau_Fp',
        'anx18_Colposcopia_Doc','anx18_Colposcopia_Fr','anx18_Colposcopia_Fp','anx18_H_femenino_fase1_Doc','anx18_H_femenino_fase1_Fr','anx18_H_femenino_fase1_Fp',
        'anx18_H_femenino_fase2_Doc','anx18_H_femenino_fase2_Fr','anx18_H_femenino_fase2_Fp','anx18_Consulta_Gine_Doc','anx18_Consulta_Gine_Fr','anx18_Consulta_Gine_Fp',
        'anx18_Consulta_Nutri_Doc','anx18_Consulta_Nutri_Fr','anx18_Consulta_Nutri_Fp','anx18_Valoracion_B_repro_Doc','anx18_Valoracion_B_repro_Fr','anx18_Valoracion_B_repro_Fp',
        'anx18_VPH_Doc','anx18_VPH_Fr','anx18_VPH_Fp','id_paciente','id_doctor', 'id_cita', 'created_at', 'updated_at'];

}