<?php

namespace App\Models\Catalogos;
use Illuminate\Database\Eloquent\Model;

class Farmacia extends Model{

    public $timestamps = false;
    protected $table= 'precio_farmacia';
    protected $fillable = ['id', 'clave','descripcion','tipo','precio'];

}