<?php namespace App\Http\Controllers\Catalogos\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Core\Util\CatalogTrait;

class GeneralpreController extends Controller {


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
        $this->name = 'Precio General';
        $this->name_plural = 'Precio General';
        $this->form = 'App\Core\Forms\Admin\PreciogeneForm';
        $this->model = 'App\Models\Catalogos\PrecioGene';
        $this->url_prefix = 'generalpre';
        $validation_add = [
            'clave'=>'required|max:25',

        ];
        $validation_edit = $validation_add;
        $this->setValidatorAdd($validation_add);
        $this->setValidatorEdit($validation_edit);
    }
}