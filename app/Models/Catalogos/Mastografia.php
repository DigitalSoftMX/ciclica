<?php

namespace App\Models\Catalogos;
use Illuminate\Database\Eloquent\Model;

class Mastografia extends Model{

    public $timestamps = true;
    protected $table= 'mastografia';
    protected $fillable = ['id', 'id_paciente','fecha','folio','cancer', 'ant_cancer', 'edad_cancer', 'quien_cancer', 'mamas', 'que_tipo', 'dolor', 'masa_palpable','cambios_piel', 'aumento_volumen', 'crecion_presion', 'inve_pezon', 'otros', 'desde_cuanto', 'senal_mamas', 'edad_prm_mest', 'edad_vida_sex', 'num_emb', 'num_partos', 'num_cesareas', 'num_abort', 'met_anticonceptivo', 'tipo_met_ant', 'hormonal', 'tiempo_horm', 'edad_menopausia', 'fecha_ult_mestruacion', 'biopsia_mama', 'mastectomia', 'biosiado_ganglios_axilas', 'fecha_ganglios', 'implantes_mamarios', 'fecha_implantes', 'cambios_implantes', 'fecha_cambio_implantes', 'reduccion_mamarios', 'fecha_reduccion', 'radioterapias_seno', 'fecha_radioterapia', 'mastografia_ultrasonido', 'fecha_mast_ult', 'diagnostico_mast_ult'];

}