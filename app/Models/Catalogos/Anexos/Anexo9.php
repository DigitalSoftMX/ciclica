<?php

namespace App\Models\Catalogos\Anexos;
use Illuminate\Database\Eloquent\Model;

class Anexo9 extends Model
{

    public $timestamps = true;
    protected $table = 'anexo9';
    protected $fillable = ['anx9_pocision','anx9_OCE','anx9_permeabiliza','anx9_Canal_Endocervical','anx9_Epitelio_glandular','anx9_OCI','anx9_permeabiliza_3','anx9_OCE_1','anx9_Posicion_1',
        'anx9_Distension','anx9_Tamaño','anx9_Forma','anx9_Defectos','anx9_Poliferativo','anx9_Secretor','anx9_Anormal','anx9_Visible','anx9_Permeable','id','anx9_permeabiliza_2',
        'anx9_Visible_izq','anx9_Permeable_izq','anx9_Diagnostico','anx9_Tom_biopsia','anx9_Colocación_DIU','anx9_Resultado_biopsia','anx9_Plan_quirúrgico','anx9_Notas','created_at',
        'updated_at','deleted_at','id_paciente','id_doctor','id_cita'];

}
