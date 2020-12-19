<?php namespace App\Http\Controllers\Catalogos\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Core\Util\CatalogTrait;

class CajaController extends Controller {


    use CatalogTrait;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
        $this->field_list = ['cantidad'=>'Cantidad','iva'=>'Iva','total'=>'Total','ids'=>'Imprimir','forma_pago'=>'Forma de Pago','tc_td'=>'TC/TD','username'=>'No. Paciente','name'=>'Nombre Paciente', 'deuda'=>'Deuda', 'factura'=>'Factura', 'created_at'=>'Fecha', 'id'=>'Acciones'];
        $this->name = 'Caja';
        $this->name_plural = 'Caja';
        $this->form = 'App\Core\Forms\Admin\CajaForm';
        $this->model = 'App\Models\Catalogos\Caja';
        $this->url_prefix = 'caja';
        $validation_add = [
            'cantidad'=>'required|max:25',

        ];
        $validation_edit = $validation_add;
        $this->setValidatorAdd($validation_add);
        $this->setValidatorEdit($validation_edit);
    }
}