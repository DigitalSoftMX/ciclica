
<?php namespace App\Http\Controllers\Catalogos\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Core\Util\CatalogTrait;

   class cat_sexoController extends Controller {


    use CatalogTrait;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
        $this->field_list = ['name'=>'Descripcion','id'=>'Acciones'];
        $this->name = 'Genero';
        $this->name_plural = 'Generos';
        $this->form = 'App\Core\Forms\Admin\GenerosForm';
        $this->model = 'App\Models\Catalogos\Genero';
        $this->url_prefix = 'cat_sexo';
        $validation_add = [
            'name'=>'required|max:25',
            
        ];
        $validation_edit = $validation_add;
        $this->setValidatorAdd($validation_add);
        $this->setValidatorEdit($validation_edit);
    }
}