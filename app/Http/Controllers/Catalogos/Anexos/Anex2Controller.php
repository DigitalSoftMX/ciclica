<?php

namespace App\Http\Controllers\Catalogos\Anexos;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use App\Http\Controllers\Controller;
use Auth;
use Validator;
use App\User;
use App\Models\Catalogos\Anexos\Anexo2;
use App\Core\Util\CatalogTrait;

class Anex2Controller extends Controller
{

    use CatalogTrait;

    public function __construct()
    {


        $this->middleware('auth');
        $this->name = 'Anexo2';
        $this->model = 'App\Models\Catalogos\Anexos\Anexo2';
        $this->url_prefix = 'anexoprocesoconsultadoctores';

    }
}