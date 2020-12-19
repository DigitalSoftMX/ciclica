<?php 

namespace App\Models\Catalogos;
use Illuminate\Database\Eloquent\Model;

class Especialidad extends Model{
    
    public $timestamps = false;
    protected $table= 'especialidad';
    protected $fillable = ['id', 'name', 'color', 'anexo'];

}