<?php

namespace App\Models\Catalogos;
use Illuminate\Database\Eloquent\Model;

class Anotaciones extends Model{

    public $timestamps = false;
    protected $table= 'anotaciones';
    protected $fillable = ['id', 'nombre'];

}