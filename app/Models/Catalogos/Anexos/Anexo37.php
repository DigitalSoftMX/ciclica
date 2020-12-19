<?php

namespace App\Models\Catalogos;
use Illuminate\Database\Eloquent\Model;

class Anexo37 extends Model{

    public $timestamps = true;
    protected $table= 'anexo_37';
    protected $fillable = ['id', 'lugar_elabora','hijos','total_hijos','created_at', 'updated_at'];

}