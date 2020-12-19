<?php

namespace App\Models\Catalogos;
use Illuminate\Database\Eloquent\Model;

class FormatoSeguimiento extends Model{

    public $timestamps = true;
    protected $table= 'formato_seguimiento';
    protected $fillable = ['id', 'id_doctor','evaluacion','fech_mestruacion', 'diagnostico', 'tratamiento', 'observaciones'];

}