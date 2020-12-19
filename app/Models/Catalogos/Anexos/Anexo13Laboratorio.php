<?php

namespace App\Models\Catalogos\Anexos;
use Illuminate\Database\Eloquent\Model;

class Anexo13Laboratorio extends Model{

    public $timestamps = true;
    protected $table= 'anexo13_laboratorio';
    protected $fillable = ['id','codigo','clave','descripcion','precio','created_at','updated_at'];


}