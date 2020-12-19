<?php namespace App\Http\Controllers\Catalogos\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Core\Util\CatalogTrait;

class FarmaciaController extends Controller {


    use CatalogTrait;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
        $this->field_list = ['clave'=>'Clave','descripcion'=>'Descripcion','tipo'=>'tipo','precio'=>'Precio','id'=>'Acciones'];
        $this->name = 'Precio Farmacia';
        $this->name_plural = 'Precio Farmacia';
        $this->form = 'App\Core\Forms\Admin\Precio_farmaciaForm';
        $this->model = 'App\Models\Catalogos\Farmacia';
        $this->url_prefix = 'farmacia';
        $validation_add = [
            'clave'=>'required|max:25',

        ];
        $validation_edit = $validation_add;
        $this->setValidatorAdd($validation_add);
        $this->setValidatorEdit($validation_edit);
    }
}