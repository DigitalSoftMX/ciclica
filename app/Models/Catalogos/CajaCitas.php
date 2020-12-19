<?php

namespace App\Models\Catalogos;
use Illuminate\Database\Eloquent\Model;

class CajaCitas extends Model{

    public $timestamps = true;
    protected $table= 'caja_citas';
    protected $fillable = ['id', 'costo','id_paciente','id_doctor', 'id_cita', 'id_anexo13'];

}