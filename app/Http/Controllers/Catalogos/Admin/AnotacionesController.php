<?php namespace App\Http\Controllers\Catalogos\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Core\Util\CatalogTrait;

class AnotacionesController extends Controller {


    use CatalogTrait;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
        $this->field_list = ['nombre'=>'Descripcion de Anotacion','id'=>'Acciones'];
        $this->name = 'Anotaciones';
        $this->name_plural = 'Anotaciones';
        $this->form = 'App\Core\Forms\Admin\AnotacionForm';
        $this->model = 'App\Models\Catalogos\Anotaciones';
        $this->url_prefix = 'anotaciones';
        $validation_add = [
            'name'=>'required|max:25',
            'app_name'=>'required|max:25',
            'apm_name'=>'required|max:25',
            'username'=>'required|max:25',
        ];
        $validation_edit = $validation_add;
        $this->setValidatorAdd($validation_add);
        $this->setValidatorEdit($validation_edit);
    }
}