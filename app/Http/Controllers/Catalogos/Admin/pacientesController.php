<?php namespace App\Http\Controllers\Catalogos\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Core\Util\CatalogTrait;

   class pacientesController extends Controller {


    use CatalogTrait;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
        $this->field_list = ['name'=>'Nombres','app_name'=>'Apellido Paterno ','apm_name'=>'Apellido Materno ','username'=>'Usuario','email'=>'Email','phone'=>'Telefono','id'=>'Acciones'];
        $this->name = 'Pacientes';
        $this->name_plural = 'Pacientes';
        $this->form = 'App\Core\Forms\Admin\PacientesForm';
        $this->model = 'App\Models\Catalogos\Pacientes';
        $this->url_prefix = 'pacientes';
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