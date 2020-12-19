<?php namespace App\Http\Controllers\Catalogos\Checkup;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use App\Http\Controllers\Controller;
use Auth;
use Validator;
use App\User;
use App\Models\Catalogos\Citas;
use App\Models\Catalogos\AEstudio;
use Calendar;


use App\Core\Util\CatalogTrait;

class RecetaImprimirController extends Controller
{
    //dd('ggfhfhfh');
    use CatalogTrait;

    /*public function index(){
        return view('Catalogos.anexos.anexos');
    }*/


    public function __construct()
    {
        $this->middleware('auth');
        $this->field_list = ['id'=>'Acciones'];
        $this->name = 'RecetaImprimirCheckup';
        $this->name_plural = 'RecetaImprimirCheckup';
        $this->form = 'App\Core\Forms\Admin\RecetaForm';
        $this->model = 'App\Models\Catalogos\Recetas';
        $this->url_prefix = 'recetaprocesoconsultadoctorescheckup';
        $validation_add = [
        ];
        $validation_edit = $validation_add;
        $this->setValidatorAdd($validation_add);
        $this->setValidatorEdit($validation_edit);

    }

}