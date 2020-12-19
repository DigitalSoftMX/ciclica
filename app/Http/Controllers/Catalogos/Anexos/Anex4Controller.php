<?php

namespace App\Http\Controllers\Catalogos\Anexos;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use App\Http\Controllers\Controller;
use Auth;
use Validator;
use App\User;
use App\Models\Catalogos\Anexos\Anexo4;
use App\Core\Util\CatalogTrait;

class Anex4Controller extends Controller
{

    use CatalogTrait;

    public function __construct()
    {


        $this->middleware('auth');
        $this->name = 'Anexo4';
        $this->model = 'App\Models\Catalogos\Anexos\Anexo4';
        $this->url_prefix = 'anexoprocesoconsultadoctores';

    }
}