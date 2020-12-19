<?php namespace App\Http\Controllers\Catalogos\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Core\Util\CatalogTrait;

   class RecetasController extends Controller {


    use CatalogTrait;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
        $this->field_list = ['fechap'=>'Fecha','descripcionp'=>'Descripcion','doctor'=>'Doctor','ids'=>'Imprimir','peso'=>'Peso','talla'=>'Talla','temp'=>'Temperatura','ta'=>'TA','id'=>'Acciones'];
        $this->name = 'Recetas';
        $this->name_plural = 'Recetas';
        $this->form = 'App\Core\Forms\Admin\RecetasForm';
        $this->model = 'App\Models\Catalogos\Recetas';
        $this->url_prefix = 'recetas';
        $validation_add = [
        ];
        $validation_edit = $validation_add;
        $this->setValidatorAdd($validation_add);
        $this->setValidatorEdit($validation_edit);
    }
}