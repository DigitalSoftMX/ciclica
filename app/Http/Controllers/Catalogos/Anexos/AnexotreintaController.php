<?php

namespace App\Http\Controllers\Catalogos\Admin;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use App\Http\Controllers\Controller;
use Auth;
use Validator;
use App\User;
use App\Models\Catalogos\Citas;
//use App\Models\Catalogos\anexos;
use App\Models\Catalogos\Anexo30;
use Calendar;
use App\Core\Util\CatalogTrait;

class AnexotreintaController extends Controller
{

    use CatalogTrait;

    public function index()
    {

        return view('Catalogos.anexos.anexo30');

    }


    public function __construct()
    {


        $this->middleware('auth');

        $this->name = 'Anexo30';
        $this->model = 'App\Models\Catalogos\Anexo30';
        $this->url_prefix = 'procesoAnexo30';

    }


}
