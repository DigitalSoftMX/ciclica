<?php

namespace App\Models\Catalogos;
use Illuminate\Database\Eloquent\Model;

class TotalEmbarazos extends Model{

    public $timestamps = true;
    protected $table= 'total_embarazos';
    protected $fillable = ['id', 'partos','numero','id_paciente'];

}