<?php

namespace App\Models\Catalogos\Anexos;
use Illuminate\Database\Eloquent\Model;

class Anexo13Farmacia extends Model{

    public $timestamps = false;
    protected $table= 'anexo13_farmacia';
    protected $fillable = ['id', 'clave','descripcion','precio', 'tipo', 'created_at','updated_at'];

}