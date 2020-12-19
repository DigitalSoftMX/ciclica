<?php 

namespace App\Models\Catalogos;
use Illuminate\Database\Eloquent\Model;

class SenalMamarios extends Model{
    
    public $timestamps = true;
    protected $table= 'señales_mamarios';
    protected $fillable = ['id', 'name', 'estado', 'id_paciente'];

}
