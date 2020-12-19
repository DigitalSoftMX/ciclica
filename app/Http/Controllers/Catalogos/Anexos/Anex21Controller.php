<?php

namespace App\Http\Controllers\Catalogos\Anexos;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use App\Http\Controllers\Controller;
use Auth;
use Validator;
use App\User;
use App\Models\Catalogos\Anexos\Anexo21;
use App\Core\Util\CatalogTrait;

class Anex21Controller extends Controller
{

    use CatalogTrait;

    public function __construct()
    {


        $this->middleware('auth');
        $this->name = 'Anexo21';
        $this->model = 'App\Models\Catalogos\Anexos\Anexo21';
        $this->url_prefix = 'procesoconsultascheckup21';

    }
}