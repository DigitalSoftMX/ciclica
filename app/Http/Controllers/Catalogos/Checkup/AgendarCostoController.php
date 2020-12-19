<?php namespace App\Http\Controllers\Catalogos\Checkup;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Core\Util\CatalogTrait;

   class AgendarCostoController extends Controller {


    use CatalogTrait;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
        $this->field_list = ['clave'=>'Clave','descripcion'=>'Descripcion','costo'=>'Costo','nombre'=>'Nombre', 'created_at'=>'Fecha', 'id'=>'Acciones'];
        $this->name = 'AddCaja';
        $this->name_plural = 'AddCaja';
        $this->form = 'App\Core\Forms\Admin\CajaForm';
        $this->model = 'App\Models\Catalogos\CajaCitas';
        $this->url_prefix = 'agendarcaja';
        $validation_add = [
        ];
        $validation_edit = $validation_add;
        $this->setValidatorAdd($validation_add);
        $this->setValidatorEdit($validation_edit);
    }
}