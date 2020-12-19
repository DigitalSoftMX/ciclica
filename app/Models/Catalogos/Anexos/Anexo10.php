<?php

namespace App\Models\Catalogos\Anexos;
use Illuminate\Database\Eloquent\Model;

class Anexo10 extends Model{

    public $timestamps = true;
    protected $table= 'anexo10';
    protected $fillable = ['id', 'anx10_ht_oncologia','anx10_menarca','anx10_embarazo','anx10_lmaterna', 'anx10_uso_hormonales','anx10_notas','id_paciente','id_doctor','id_cita'];

}