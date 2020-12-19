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

class AnexocuarentaController extends Controller
{

    public function index()
    {

        return view('Catalogos.anexos.anexo40');

    }





}
