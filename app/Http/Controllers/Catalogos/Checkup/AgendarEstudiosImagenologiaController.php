<?php namespace App\Http\Controllers\Catalogos\Checkup;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Core\Util\CatalogTrait;

   class AgendarEstudiosImagenologiaController extends Controller {


    use CatalogTrait;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
        $this->field_list = ['fecha'=>'fecha','descripcion'=>'Nota','paciente'=>'Paciente','doctor'=>'Doctor','id'=>'Acciones'];
        $this->name = 'AgendarEstudiosImagenologia';
        $this->name_plural = 'AgendarEstudiosImagenologia';
        $this->form = 'App\Core\Forms\Admin\PerfilForm';
        $this->model = 'App\Models\Catalogos\AgendarEstudio';
        $this->url_prefix = 'agendarestudiosimagenologia';
        $validation_add = [
        ];
        $validation_edit = $validation_add;
        $this->setValidatorAdd($validation_add);
        $this->setValidatorEdit($validation_edit);
    }
}