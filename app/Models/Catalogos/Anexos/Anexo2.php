<?php

namespace App\Models\Catalogos\Anexos;
use Illuminate\Database\Eloquent\Model;

class Anexo2 extends Model{

    public $timestamps = true;
    protected $table= 'anexo2';
    protected $fillable = ['id','anx2_consumo_lt','anx2_urina_urgen_1','anx2_TiempoE','anx2_Frecuencia','anx2_Cantidadp','anx2_IUE','anx2_TiempoE2','anx2_Frecuencia2',
        'anx2_Cantidadp2','anx2_CMiccional','anx2_SVaciamiento','anx2_Disuria','anx2_Hematuria','anx2_SCE','anx2_Rvaginal','anx2_ardor','anx2_prurito',
        'anx2_estre','anx2_Claxantes','anx2_evacuacion','anx2_IFH','anx2_VSA','anx2_dispa','anx2_pene_orga','anx2_ReflejosPe','anx2_PTV','anx2_AtroVagi',
        'anx2_notas','created_at','updated_at','deleted_at','id_paciente', 'id_doctor', 'id_cita'];

}