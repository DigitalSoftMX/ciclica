<?php

namespace App\Models\Catalogos\Anexos;
use Illuminate\Database\Eloquent\Model;

class Anexo3 extends Model
{

    public $timestamps = true;
    protected $table = 'anexo3';
    protected $fillable = ['anx3_Ciclos_mes', 'anx3_cantidad_sangrado_mes', 'anx3_nume_toalla_x_dia', 'anx_dismenorrea', 'anx3_caida_pelo', 'anx3_reseque_piel', 'anx3_bochornos',
                           'anx3_tiempo_evolucion_bocho', 'anx3_sudoracion', 'anx3_tiempo_evolucion_sudo', 'anx3_labilidad', 'anx3_irratibilidad', 'anx3_ansiedad', 'anx3_nerviosismo',
                           'anx3_cefalea', 'anx3_insomnio', 'anx3_alteracion_libido', 'anx3_incontinecia_urinaria', 'anx3_resequedad_vaginal', 'anx3_notas', 'created_at', 'updated_at',
                           'deleted_at', 'id_paciente', 'id_doctor', 'id_cita'];

}
