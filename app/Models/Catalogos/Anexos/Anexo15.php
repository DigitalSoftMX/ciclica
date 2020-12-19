<?php

namespace App\Models\Catalogos\Anexos;
use Illuminate\Database\Eloquent\Model;

class Anexo15 extends Model{

    public $timestamps = true;
    protected $table= 'anexo15';
    protected $fillable = ['id', 'id_paciente', 'razon_social', 'rfc', 'email', 'telefono', 'cdfi'];

}