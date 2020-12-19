<?php

namespace App\Models\Catalogos\Anexos;
use Illuminate\Database\Eloquent\Model;

class Anexo35 extends Model{

    public $timestamps = true;
    protected $table= 'anexo35';
    protected $fillable = ['anx35_nombre_paciente','anx35_mot_estudio','anx35_tipo_estudio','anx35_tecnica_estudio','anx35_hallazgo','anx35_conclucion',
                           'anx35_categoria','anx35_conducta','created_at','updated_at','deleted_at','id_paciente', 'id_doctor','id_cita'];

}