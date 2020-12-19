<?php 

namespace App\Models\Catalogos;
use Illuminate\Database\Eloquent\Model;

class UltrasonidoInterpretacion extends Model{
    
    public $timestamps = true;
    protected $table= 'ultrasonido_interpretacion';
    protected $fillable = ['id', 'id_paciente', 'fecha', 'motivo_estudio', 'tipo_estudio', 'tecnica_estudio', 'hallazgos', 'conclusion', 'categoria', 'conducta'];

}