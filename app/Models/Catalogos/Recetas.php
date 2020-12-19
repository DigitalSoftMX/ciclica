<?php

namespace App\Models\Catalogos;
use Illuminate\Database\Eloquent\Model;

class Recetas extends Model{

    public $timestamps = true;
    protected $table= 'receta_medica';
    protected $fillable = ['id', 'fechap','fechac','descripcionp', 'receta', 'id_paciente', 'id_doctor', 'edad',
                           'talla', 'peso','temp','ta', 'fc', 'fr', 'expo_me','indica','fm','observaciones','id_cita'];

}


