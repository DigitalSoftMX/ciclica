<?php

namespace App\Models\Catalogos\Anexos;
use Illuminate\Database\Eloquent\Model;

class Anexo16 extends Model{

    public $timestamps = true;
    protected $table= 'anexo16';
    protected $fillable = ['id', 'cantidad','iva', 'total', 'forma_pago', 'tc_td', 'deuda', 'cant_deuda', 'factura', 'id_paciente', 'id_cita', 'fech_pago'];
                           
}