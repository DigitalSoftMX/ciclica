<?php

namespace App\Models\Catalogos\Anexos;
use Illuminate\Database\Eloquent\Model;

class Anexo1 extends Model{

    public $timestamps = true;
    protected $table= 'anexo1';
    protected $fillable = ['anx1_hiper','anx1_hiperSN','anx1_cancer','anx1_cancerSN','anx1_gine','anx1_apari','anx1_otros','anx1_apari2','anx1_diabetes','anx1_diabetesSN','anx1_patoTiro','anx1_patoTiroSN','anx1_otros2','anx1_otros2SN','anx1_TipoSangre',
                           'anx1_ejer','anx1_ejerSN','anx1_tabaquimo','anx1_tabaquimoSN','anx1_alcohol','anx1_alcoholSN','anx1_drogas','anx1_drogasSN', 'anx1_extre','anx1_extreSN', 'anx1_alergias',
                           'anx1_cirugia','anx1_cirugiaSN','anx1_trans','anx1_transSN','anx1_infecciosa','anx1_infecciosaSN','anx1_CroDege','anx1_CroDegeSN',
                           'anx1_trauma','anx1_traumaSN','anx1_gine2','anx1_gine2SN','anx1_menarca','anx1_ritmo','anx1_cantidad','anx1_dolor','anx1_toalla','anx1_tratamiento','anx1_fum','anx1_ivisa',
                           'anx1_parejas','anx1_mpf','anx1_gestas','anx1_cesareas','anx1_partos','anx1_abortos','anx1_ectopicos','anx1_g1_ano','anx1_g1_edadmat',
                           'anx1_g1_durembara','anx1_g1_sexo','anx1_g1_peso','anx1_g1_vivo','anx1_g1_resol','anx1_g1_comp','anx1_g1_lactancia','anx1_g1_meses',
                           'anx1_g2_ano','anx1_g2_edadmat','anx1_g2_durembara','anx1_g2_sexo','anx1_g2_peso','anx1_g2_vivo','anx1_g2_resol','anx1_g2_comp','anx1_g2_lactancia',
                           'anx1_g2_meses','anx1_g3_ano','anx1_g3_edadmat','anx1_g3_durembara','anx1_g3_sexo','anx1_g3_peso','anx1_g3_vivo','anx1_g3_resol','anx1_g3_comp',
                           'anx1_g3_lactancia','anx1_g3_meses','anx1_g4_ano','anx1_g4_edadmat','anx1_g4_durembara','anx1_g4_sexo','anx1_g4_peso','anx1_g4_vivo','anx1_g4_resol',
                           'anx1_g4_comp','anx1_g4_lactancia','anx1_g4_meses','anx1_cervical','anx1_docma','anx1_autoexp','anx1_usg','anx1_mastogra','anx1_menopausia',
                           'anx1_inferti','anx1_esquemaVPH','anx1_DOSIS','anx1_explF','anx1_EGL','anx1_impresionD','anx1_tratamiento1','anx1_Pmedico','anx1_pronos',
                            'anx1_fun','id_paciente', 'id_doctor', 'id_cita'];

}





