<?php namespace App\Http\Controllers\Catalogos\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Core\Util\CatalogTrait;

   class CitasController extends Controller {


    use CatalogTrait;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
        $this->field_list = ['fecha'=>'fecha','horario'=>'Horario','nota'=>'Nota','id_paciente'=>'Paciente','id_doctor'=>'Doctor','id_especialidad'=>'Especialidad','id'=>'Acciones'];
        $this->name = 'Citas';
        $this->name_plural = 'Citas';
        $this->form = 'App\Core\Forms\Admin\CitasForm';
        $this->model = 'App\Models\Catalogos\Citas';
        $this->url_prefix = 'citas';
        $validation_add = [
        ];
        $validation_edit = $validation_add;
        $this->setValidatorAdd($validation_add);
        $this->setValidatorEdit($validation_edit);
    }
}