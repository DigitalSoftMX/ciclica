<?php

namespace App\Models\Catalogos;
use Illuminate\Database\Eloquent\Model;

class AgendarEstudio extends Model{

    public $timestamps = true;
    protected $table= 'agendarestudio';
    protected $fillable = ['id', 'descripcion','id_paciente','id_doctor','id_cita','estado'];

}