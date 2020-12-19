<?php 

namespace App\Models\Catalogos;
use Illuminate\Database\Eloquent\Model;

class CatCitas extends Model{
    
    public $timestamps = false;
    protected $table= 'cat_tipo_cita';
    protected $fillable = ['id', 'name'];

}