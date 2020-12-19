<?php namespace App\Http\Controllers\Catalogos\Anexos;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Core\Util\CatalogTrait;

class Anexo16Controller extends Controller {


    use CatalogTrait;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
        //$this->field_list = ['concepto'=>'Concepto','monto'=>'Monto','deuda'=>'Deuda','fech_pago'=>'Fecha de Pago','form_pago'=>'Forma de Pago','name'=>'Paciente','id'=>'Acciones'];
        $this->field_list = ['cantidad'=>'Cantidad','iva'=>'Iva','total'=>'Total','forma_pago'=>'Forma de Pago','tc_td'=>'TC/TD','username'=>'No. Paciente','name'=>'Nombre Paciente', 'deuda'=>'Deuda', 'fech_pago'=>'Fecha de Pago', 'factura'=>'Factura', 'created_at'=>'Fecha', 'id'=>'Acciones'];
        $this->name = 'Deudas';
        $this->name_plural = 'Deudas';
        $this->form = 'App\Core\Forms\Admin\DeudasForm';
        $this->model = 'App\Models\Catalogos\Anexos\Anexo16';
        $this->url_prefix = 'deudas';
        $validation_add = [
            'concepto'=>'required|max:25',

        ];
        $validation_edit = $validation_add;
        $this->setValidatorAdd($validation_add);
        $this->setValidatorEdit($validation_edit);
    }
}