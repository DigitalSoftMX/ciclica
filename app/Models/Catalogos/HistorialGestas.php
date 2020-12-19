<?php

namespace App\Models\Catalogos;
use Illuminate\Database\Eloquent\Model;

class HistorialGestas extends Model{

    public $timestamps = true;
    protected $table= 'historial_gestas';
    protected $fillable = ['id', 'fecha','semanas','par_ces_are_abo','vivo', 'peso', 'sexo', 'sano_defecto'];

}