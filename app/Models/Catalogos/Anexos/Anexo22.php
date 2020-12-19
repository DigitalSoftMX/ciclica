<?php

namespace App\Models\Catalogos\Anexos;
use Illuminate\Database\Eloquent\Model;

class Anexo22 extends Model{

    public $timestamps = true;
    protected $table= 'anexo22';
    protected $fillable = ['id', 'anx22_USG_Mamario_Doc','anx22_USG_Mamario_FR','anx22_USG_Mamario_FP','anx22_USG_Pelvico_doc', 'anx22_USG_Pelvico_FR','anx22_USG_Pelvico_FP',
                           'anx22_Papanicolau_Doc','anx22_Papanicolau_FR','anx22_Papanicolau_FP','anx22_Colposcopia_Doc','anx22_Colposcopia_FR','anx22_Colposcopia_FP',
                           'id_paciente','id_doctor','id_cita','created_at', 'updated_at'];

}