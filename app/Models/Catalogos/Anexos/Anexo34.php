<?php

namespace App\Models\Catalogos\Anexos;
use Illuminate\Database\Eloquent\Model;

class Anexo34 extends Model{

    public $timestamps = true;
    protected $table= 'anexo34';
    protected $fillable = ['anx34_fecha','anx34_folio','anx34_paciente','anx34_moti_estu','anx34_fecha_nac','anx34_sexo','anx34_edo_civil','anx34_domicilio',
                           'anx34_telefono','anx34_correo','anx34_A_cancer_mama','anx34_CA_aque_edad','anx34_AF_cancel_mama','anx34_FCA_quien','anx34_AP_mamas',
                           'anx34_AP_mamas_tipo','anx34_dolor','anx34_masa_palpable','anx34_cambios_piel','anx34_aumento_volumen','anx34_secrecion_pezon',
                           'anx34_inversion_pezon','anx34_otros','anx34_desde_cuando','anx34_senal_mamas_lunar','anx34_senal_mamas_cicatrices',
                           'anx34_senal_mamas_verrugas','anx34_senal_mamas_otros','anx34_primer_menstru','anx34_vida_sexual','anx34_numero_embara','anx34_numero_partos',
                           'anx34_numero_cesareas','anx34_numero_abortos','anx34_anticonceptivo','anx34_anticonceptivo_tipo','anx34_hormonal_tiempo','anx34_menopausia',
                           'anx34_fecha_ultima_mestruacion','anx34_biopsia_mama','anx34_biopsia_derecha','anx34_biopsia_izquierda','anx34_realizo_mastec',
                           'anx34_realizo_mastec_der','anx34_realizo_mastec_izq','anx34_realizo_mastec_fecha','anx34_axilas','anx34_axilas_dere','anx34_axilas_izq',
                           'anx34_axilas_fecha','anx34_implantes_mama','anx34_implantes_mama_dere','anx34_implantes_mama_izq','anx34_implantes_mama_ambos',
                           'anx34_implantes_mama_fecha','anx34_reca_implante','anx34_reca_implante_fecha','anx34_reduc_mama','anx34_reduc_mama_dere',
                           'anx34_reduc_mama_izq','anx34_reduc_mama_amb','anx34_reduc_mama_fecha','anx34_readio_seno','anx34_masto_utra',
                           'anx34_masto_utra_fecha','anx34_dianostico','created_at','updated_at','deleted_at','id_paciente', 'id_doctor', 'id_cita'];

}