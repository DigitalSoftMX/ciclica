<?php namespace App\Http\Controllers\Catalogos\Enfermera;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Core\Util\CatalogTrait;

class RecetaController extends Controller {


    use CatalogTrait;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
        $this->field_list = ['cron_inicia'=>'Horario','nota'=>'Nota','usuario'=>'Paciente','doctor'=>'Doctor','espe'=>'Especialidad','id'=>'Acciones'];
        $this->name = 'Signos Vitales';
        $this->name_plural = 'Signos Vitales';
        $this->form = 'App\Core\Forms\Admin\CitasForm';
        $this->model = 'App\Models\Catalogos\Recetas';
        $this->url_prefix = 'recetascitas';
        $validation_add = [
        ];
        $validation_edit = $validation_add;
        $this->setValidatorAdd($validation_add);
        $this->setValidatorEdit($validation_edit);
    }
}