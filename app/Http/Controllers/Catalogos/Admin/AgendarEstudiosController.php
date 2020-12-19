<?php namespace App\Http\Controllers\Catalogos\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Core\Util\CatalogTrait;

class AgendarEstudiosController extends Controller {


    use CatalogTrait;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
        $this->field_list = ['fechap'=>'fecha','fechac'=>'Horario','descripcionp'=>'Nota','id_paciente'=>'Paciente','id_doctor'=>'Doctor','edad'=>'Especialidad','id'=>'Acciones'];
        $this->name = 'AgendarEstudios';
        $this->name_plural = 'AgendarEstudios';
        $this->form = 'App\Core\Forms\Admin\AgendarEstudiosForm';
        $this->model = 'App\Models\Catalogos\AgendarEstudio';
        $this->url_prefix = 'recetaprocesoconsultadoctores';
        $validation_add = [
        ];
        $validation_edit = $validation_add;
        $this->setValidatorAdd($validation_add);
        $this->setValidatorEdit($validation_edit);
    }
}