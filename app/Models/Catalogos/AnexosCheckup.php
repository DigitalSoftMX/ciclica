<?php

namespace App\Models\Catalogos;
use Illuminate\Database\Eloquent\Model;

class AnexosCheckup extends Model{

    public $timestamps = false;
    protected $table= 'anexoscheckup';
    protected $fillable = ['id', 'nombre'];

}