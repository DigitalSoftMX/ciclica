<?php 

namespace App\Models\Catalogos;
use Illuminate\Database\Eloquent\Model;

class Country extends Model{
    
    public $timestamps = false;
    protected $table= 'country';
    protected $fillable = ['id', 'id_state', 'name'];