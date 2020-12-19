<?php 

namespace App\Models\Catalogos;
use Illuminate\Database\Eloquent\Model;

class EdoCivil extends Model{
    
    public $timestamps = false;
    protected $table= 'cat_edo_civil';
    protected $fillable = ['id', 'name'];

}