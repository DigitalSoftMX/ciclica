<?php

namespace App\Models\Catalogos;
use Illuminate\Database\Eloquent\Model;

class Caja extends Model{

    public $timestamps = true;
    protected $table= 'caja';
    protected $fillable = ['id', 'cantidad','iva', 'total', 'forma_pago', 'tc_td', 'deuda', 'cant_deuda', 'factura', 'id_paciente', 'id_cita'];

}