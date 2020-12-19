<?php namespace App\Http\Controllers\Catalogos\Checkup;

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
        $this->field_list = ['fecha'=>'fecha','descripcion'=>'Nota','paciente'=>'Paciente','ids'=>'Imprimir','doctor'=>'Doctor','id'=>'Acciones'];
        $this->name = 'AgendarEstudios';
        $this->name_plural = 'AgendarEstudios';
        $this->form = 'App\Core\Forms\Admin\AgendarEstudiosForm';
        $this->model = 'App\Models\Catalogos\AgendarEstudio';
        $this->url_prefix = 'agendarestudios';
        $validation_add = [
        ];
        $validation_edit = $validation_add;
        $this->setValidatorAdd($validation_add);
        $this->setValidatorEdit($validation_edit);
    }
}