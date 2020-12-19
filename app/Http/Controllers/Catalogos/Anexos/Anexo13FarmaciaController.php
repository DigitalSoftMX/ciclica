<?php namespace App\Http\Controllers\Catalogos\Anexos;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Core\Util\CatalogTrait;

class Anexo13FarmaciaController extends Controller {


    use CatalogTrait;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
        $this->field_list = ['clave'=>'Clave','descripcion'=>'Descripcion','precio'=>'Precio','id'=>'Acciones'];
        $this->name = 'Precio Farmacia';
        $this->name_plural = 'Precio Farmacia';
        $this->form = 'App\Core\Forms\Admin\LaboForm';
        $this->model = 'App\Models\Catalogos\Anexos\Anexo13Farmacia';
        $this->url_prefix = 'preciosfarmacia';
       $validation_add = [
            'codigo'=>'required|max:25',

        ];
        $validation_edit = $validation_add;
        $this->setValidatorAdd($validation_add);
        $this->setValidatorEdit($validation_edit);
    }
}