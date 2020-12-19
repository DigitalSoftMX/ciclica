<?php

namespace App\Models\Catalogos\Anexos;
use Illuminate\Database\Eloquent\Model;

class Anexo13 extends Model{

    public $timestamps = false;
    protected $table= 'anexo13';
    protected $fillable = ['id', 'clave','descripcion','precio', 'id_cat_anexo13', 'created_at','updated_at'];

}