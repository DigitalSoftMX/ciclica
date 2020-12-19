<?php 

namespace App\Models\Catalogos;
use Illuminate\Database\Eloquent\Model;

class Genero extends Model{
    
    public $timestamps = false;
    protected $table= 'cat_sexo';
    protected $fillable = ['id', 'name'];

}