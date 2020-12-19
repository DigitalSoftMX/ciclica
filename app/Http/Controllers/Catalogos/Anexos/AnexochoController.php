<?php

namespace App\Http\Controllers\Catalogos\Admin;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use App\Http\Controllers\Controller;
use Auth;
use Validator;
use App\User;
use App\Models\Catalogos\Citas;
use App\Models\Catalogos\anexos;
use Calendar;
use App\Core\Util\CatalogTrait;


class AnexochoController extends Controller
{


    use CatalogTrait;




    public function __construct()
    {


        /* $this->middleware('auth');

         $this->name = 'AEstudio';
         $this->model = 'App\Models\Catalogos\AEstudio';
         $this->url_prefix = 'procesoaestudios';*/


        $this->middleware('auth');
        $this->field_list = ['id'=>'Acciones'];
        $this->name = 'Anexo8';
        $this->name_plural = 'Anexo8';
        $this->form = 'App\Core\Forms\Admin\CitasForm';
        $this->model = 'App\Models\Catalogos\Anexo8';
        $this->url_prefix = 'procesoanexo8';
        $validation_add = [
        ];
        $validation_edit = $validation_add;
        $this->setValidatorAdd($validation_add);
        $this->setValidatorEdit($validation_edit);

    }




}