<?php namespace App\Http\Controllers\Catalogos\Anexos;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Core\Util\CatalogTrait;

class Anexo13LaboratorioController extends Controller {


    use CatalogTrait;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
        $this->field_list = ['codigo'=>'Codigo','clave'=>'Clave','descripcion'=>'Descripcion','precio'=>'Precio','id'=>'Acciones'];
        $this->name = 'Precio Laboratorios';
        $this->name_plural = 'Precio Laboratorios';
        $this->form = 'App\Core\Forms\Admin\LaboForm';
        $this->model = 'App\Models\Catalogos\Anexos\Anexo13Laboratorio';
        $this->url_prefix = 'precioslaboratorios';
       $validation_add = [
            'codigo'=>'required|max:25',

        ];
        $validation_edit = $validation_add;
        $this->setValidatorAdd($validation_add);
        $this->setValidatorEdit($validation_edit);
    }
}