<?php

namespace App\Http\Controllers\Catalogos\Anexos;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use App\Http\Controllers\Controller;
use Auth;
use Validator;
use App\User;
use App\Models\Catalogos\Citas;
use App\Models\Catalogos\anexos;
use App\Models\Catalogos\Anexo34;
use Calendar;
use App\Core\Util\CatalogTrait;

class Anexo34Controller extends Controller
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
        $this->name = 'Anexo34';
        $this->name_plural = 'Anexo34';
        $this->form = 'App\Core\Forms\Admin\CitasForm';
        $this->model = 'App\Models\Catalogos\Anexos\Anexo34';
        $this->url_prefix = 'procesoAnexo34';
        $validation_add = [
        ];
        $validation_edit = $validation_add;
        $this->setValidatorAdd($validation_add);
        $this->setValidatorEdit($validation_edit);

    }





}
