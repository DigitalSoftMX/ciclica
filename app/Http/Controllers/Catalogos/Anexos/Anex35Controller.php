<?php

namespace App\Http\Controllers\Catalogos\Admin;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use App\Http\Controllers\Controller;
use Auth;
use Validator;
use App\User;
use App\Models\Catalogos\Anexo35;
use Calendar;
use App\Core\Util\CatalogTrait;

class Anex35Controller extends Controller
{

    use CatalogTrait;

    public function index()
    {

        return view('Catalogos.anexos.anexo35');

    }


    public function __construct()
    {


        /* $this->middleware('auth');

         $this->name = 'AEstudio';
         $this->model = 'App\Models\Catalogos\AEstudio';
         $this->url_prefix = 'procesoaestudios';*/


        $this->middleware('auth');
        $this->field_list = ['id'=>'Acciones'];
        $this->name = 'Anexo35';
        $this->name_plural = 'Anexos35';
        $this->form = 'App\Core\Forms\Admin\CitasForm';
        $this->model = 'App\Models\Catalogos\Anexo35';
        $this->url_prefix = 'procesoanexo35';
        $validation_add = [
        ];
        $validation_edit = $validation_add;
        $this->setValidatorAdd($validation_add);
        $this->setValidatorEdit($validation_edit);

    }






}