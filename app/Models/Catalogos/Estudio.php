<?php 

namespace App\Models\Catalogos;
use Illuminate\Database\Eloquent\Model;

class Estudio extends Model{
    
    public $timestamps = false;
    protected $table= 'estudios';
    protected $fillable = ['id', 'name', 'precio', 'id_especialidad'];

}