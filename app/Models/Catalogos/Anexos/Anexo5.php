<?php

namespace App\Models\Catalogos\Anexos;
use Illuminate\Database\Eloquent\Model;

class Anexo5 extends Model
{

    public $timestamps = true;
    protected $table = 'anexo5';
    protected $fillable = ['id','anx5_suplemento','anx5_suplemento_cual','anx5_dosis','anx5_dosis_cual','anx5_dosis_cual_1','anx5_dosis_2','anx5_dosis_3','anx5_consumo','anx5_como','anx5_comida_preparada',
        'anx5_grasa_utili','anx5_dieta_especial','anx5_cuantas','anx5_tipo_dieta','anx5_hace_cuanto','anx5_por_cuanto_tiempo','anx5_por_que_razon','anx5_se_apego_ella','anx5_alergico_alimento',
        'anx5_Alimentos_que_malestar','anx5_dosis_1','anx5_resultados_esperados','anx5_kg_perdidos','anx5_peso_logrado','anx5_medicamento_bajar_peso','anx5_cuales','anx5_por_cuanto_tiempo_1',
        'anx5_plan','anx5_peso_logrado_1','anx5_lunes_desayuno','anx5_lunes_colacion','anx5_lunes_comida','anx5_lunes_colacion_1','anx5_lunes_cena','anx5_martes_desayuno','anx5_martes_colacion',
        'anx5_martes_comida','anx5_martes_colacion_1','anx5_martes_cena','anx5_miercoles_desayuno','anx5_miercoles_colacion','anx5_miercoles_comida','anx5_miercoles_colacion_1','anx5_miercoles_cena',
        'anx5_jueves_desayuno','anx5_jueves_colacion','anx5_jueves_comida','anx5_jueves_colacion_1','anx5_jueves_cena','anx5_viernes_desayuno','anx5_viernes_colacion','anx5_viernes_comida',
        'anx5_viernes_colacion_1','anx5_viernes_cena','anx5_ANTROPOMETRICOS_edad','anx5_ANTROPOMETRICOS_indicador','anx5_ANTROPOMETRICOS_talla','anx5_ANTROPOMETRICOS_peso_ges','anx5_ANTROPOMETRICOS_imc',
        'anx5_ANTROPOMETRICOS_peso_final','anx5_ANTROPOMETRICOS_peso_2_3','anx5_ANTROPOMETRICOS_notas','created_at','updated_at','deleted_at','id_paciente','id_doctor', 'id_cita'];
}
