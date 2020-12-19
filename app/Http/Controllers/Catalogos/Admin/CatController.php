<?php namespace App\Http\Controllers\Catalogos\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Core\Util\CatalogTrait;

   class CatController extends Controller {


    use CatalogTrait;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
        $this->field_list = ['name'=>'Especialidad', 'color'=>'Color','id'=>'Acciones'];
        $this->name = 'Especialidad';
        $this->name_plural = 'Especialidad';
        $this->form = 'App\Core\Forms\Admin\EspecialidadesForm';
        $this->model = 'App\Models\Catalogos\Especialidad';
        $this->url_prefix = 'cat';
        $validation_add = [
            'name'=>'required|max:25',
             ];
        $validation_edit = $validation_add;
        $this->setValidatorAdd($validation_add);
        $this->setValidatorEdit($validation_edit);
    }
}