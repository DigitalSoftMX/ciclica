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
use Calendar;

class AnexodocuController extends Controller
{
    /*public function __construct()
    {
        //$this->authorizeResource(Tag::class);
    }*/

    /**
     * Display a listing of the tags
     *
     * @param \App\Tag  $model
     * @return \Illuminate\View\View
     */
    //public function index(Tag $model)
    public function index()
    {
       // $this->authorize('manage-items', User::class);

        //return view('tags.index', ['tags' => $model->all()]);
       return view('Catalogos.anexos.index');
        //return view('Catalogos.anexos.principal');
    }

/*
    public function anexo2()
    {
       // return view('tags.create');
        return view('Catalogos.anexos.anexo2');
    }

*/

}
