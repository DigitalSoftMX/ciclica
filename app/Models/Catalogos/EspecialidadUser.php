<?php 

namespace App\Models\Catalogos;
use Illuminate\Database\Eloquent\Model;

class EspecialidadUser extends Model{
    
    public $timestamps = true;
    protected $table= 'especialidad_user';
    protected $fillable = ['id', 'id_especialidad', 'id_user'];

}