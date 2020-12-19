<?php namespace App\Http\Controllers\Catalogos\Anexos;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Core\Util\CatalogTrait;

class Anexo15Controller extends Controller {


    use CatalogTrait;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
        $this->field_list = ['name'=>'Paciente','razon_social'=>'Razon Social','rfc'=>'RFC','email'=>'Correo Fiscal','telefono'=>'Telefono','cdfi'=>'CDFI','id'=>'Acciones'];
        $this->name = 'Facturacion';
        $this->name_plural = 'Facturacion';
        $this->form = 'App\Core\Forms\Admin\FacturacionForm';
        $this->model = 'App\Models\Catalogos\Anexos\Anexo15';
        $this->url_prefix = 'facturacion';
        $validation_add = [
            'id_paciente'=>'required|max:25',

        ];
        $validation_edit = $validation_add;
        $this->setValidatorAdd($validation_add);
        $this->setValidatorEdit($validation_edit);
    }
}