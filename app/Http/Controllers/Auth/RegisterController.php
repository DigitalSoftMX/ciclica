<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use App\Models\Catalogos\Role_User;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/dashboard';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:6'],
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {
        $imagen = "go.jpg";
        $mem = User::orderby('username','DESC')->take(1)->value('id');
        $nuevo = $mem + 1000;

        $data =  User::create([
            'name' => $data['name'],
            'username' => $nuevo,
            'app_name' => $data['app_name'],
            'apm_name' => $data['apm_name'],
            'phone' => $data['phone'],
            'medio' => $data['medio'],
            'sex' => $data['sex'],
            'email' => $data['email'],
            'picture' => $imagen,
            'password' => Hash::make($data['password']),
            'active' => 1,
        ]);

        $muser = User::where('username', '=', $nuevo)->value('id');
          Role_User::create([
            'user_id' => $muser,
            'role_id' => 3,
        ]);
        
        
        $datas =  Pacientes::create([
            'id_user' => $muser,
            'id_edo_civil' => 1,
        ]);
        
        return $data;

    }
}
