<?php namespace App\Http\Controllers\Catalogos\Admin;

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
        $this->field_list = ['fechap'=>'fecha','fechac'=>'Horario','descripcionp'=>'Nota','id_paciente'=>'Paciente','id_doctor'=>'Doctor','edad'=>'Especialidad','id'=>'Acciones'];
        $this->name = 'RecetasMedicas';
        $this->name_plural = 'RecetasMedicas';
        $this->form = 'App\Core\Forms\Admin\CitasForm';
        $this->model = 'App\Models\Catalogos\Recetas';
        $this->url_prefix = 'receta_medica';
        $validation_add = [
        ];
        $validation_edit = $validation_add;
        $this->setValidatorAdd($validation_add);
        $this->setValidatorEdit($validation_edit);
    }
}