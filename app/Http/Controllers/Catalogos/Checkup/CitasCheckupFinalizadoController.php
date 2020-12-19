<?php namespace App\Http\Controllers\Catalogos\Checkup;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Core\Util\CatalogTrait;

   class CitasCheckupFinalizadoController extends Controller {


    use CatalogTrait;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
        $this->field_list = ['names'=>'Checkup', 'nombr'=>'Nombre', 'fecha_enfermeria'=>'Fecha enfermera', 'archivo'=>'Archivo', 'paciente'=>'Paciente','doctor'=>'Doctor','especialidad'=>'Especialidad','start'=>'Fecha','id'=>'Acciones'];
        $this->name = 'Citas Checkup Finalizado';
        $this->name_plural = 'Citas Checkup Finalizado';
        $this->form = 'App\Core\Forms\Lealtad\EntregaForm';
        $this->model = 'App\Models\Catalogos\AnexosCitasCheckup';
        $this->url_prefix = 'citascheckupfinalizado';
        $validation_add = [
       //     'folio'=>'required|max:25',
        ];
        $validation_edit = $validation_add;
        $this->setValidatorAdd($validation_add);
        $this->setValidatorEdit($validation_edit);
    }
}