<?php

namespace App\Http\Controllers;

use Gate;
use App\User;
use Illuminate\Support\Facades\Hash;
use App\Http\Requests\ProfileRequest;
use App\Http\Requests\PasswordRequest;
use App\Models\Catalogos\Role_User;
use App\Models\Catalogos\Role;
use App\Models\Catalogos\EspecialidadUser;

class ProfileController extends Controller
{
    /**
     * Show the form for editing the profile.
     *
     * @return \Illuminate\View\View
     */
    public function edit()
    {
        $ids = \Auth::user()->id;
        $role = Role_User::where('user_id', '=', $ids)->value('role_id'); 
        if($role == 1){
          return view('profile.edit');
        }
        else if($role == 5){
        $especiali = EspecialidadUser::select('especialidad_user.id_user','especialidad.name as espe')
             ->join('especialidad', 'especialidad_user.id_especialidad', '=', 'especialidad.id')
             ->where('especialidad_user.id_user', '=', $ids)
             ->get();
          ///dd($especiali);
    
          return view('profile.editdoctores',compact('especiali'));
        }
    }

    /**
     * Update the profile
     *
     * @param  \App\Http\Requests\ProfileRequest  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(ProfileRequest $request)
    {
        auth()->user()->update(
            $request->merge(['picture' => $request->photo ? $request->photo->store('profile', 'public') : null]) 
                ->except([$request->hasFile('photo') ? '' : 'picture'])
        );

        return back()->withStatus(__('Perfil actualizado.'));
    }

    /**
     * Change the password
     *
     * @param  \App\Http\Requests\PasswordRequest  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function password(PasswordRequest $request)
    {
        auth()->user()->update(['password' => Hash::make($request->get('password'))]);

        return back()->withStatus(__('Contraseña actualizada.'));
    }
}
