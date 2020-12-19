<?php namespace App\Http\Controllers\Catalogos\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Core\Util\CatalogTrait;

   class CitasLaboratorioController extends Controller {


    use CatalogTrait;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
        $this->field_list = ['fecha'=>'fecha','horario'=>'Horario','nota'=>'Nota','paciente'=>'Paciente','doctor'=>'Doctor','espe'=>'Especialidad','id'=>'Acciones'];
        $this->name = 'Citas de Laboratorios';
        $this->name_plural = 'Citas de Laboratorios';
        $this->form = 'App\Core\Forms\Admin\CitasLaboratoriosForm';
        $this->model = 'App\Models\Catalogos\CitasLaboratorios';
        $this->url_prefix = 'citaslaboratorios';
        $validation_add = [
        ];
        $validation_edit = $validation_add;
        $this->setValidatorAdd($validation_add);
        $this->setValidatorEdit($validation_edit);
    }
}