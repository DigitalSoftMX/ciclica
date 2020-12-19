<?php namespace App\Http\Controllers\Catalogos\Imagenologia;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Core\Util\CatalogTrait;

   class ImagenologiaFinalizadoController extends Controller {


    use CatalogTrait;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
        $this->field_list = ['nota'=>'Nota','paciente'=>'Paciente','doctor'=>'Doctor','especialidad'=>'Especialidad','estado'=>'Estado','start'=>'Fecha','id'=>'Acciones'];
        $this->name = 'Imagenologia Finalizado';
        $this->name_plural = 'Imagenologia Finalizado';
        $this->form = 'App\Core\Forms\Lealtad\EntregaForm';
        $this->model = 'App\Models\Catalogos\CitasImagenologia';
        $this->url_prefix = 'imagenologiafinalizado';
        $validation_add = [
       //     'folio'=>'required|max:25',
        ];
        $validation_edit = $validation_add;
        $this->setValidatorAdd($validation_add);
        $this->setValidatorEdit($validation_edit);
    }
}