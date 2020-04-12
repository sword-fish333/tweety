<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class ProfileController extends Controller
{
    public function show(User $user){

        return view('profiles.show',[
            'user'=>$user,
            'tweets'=>$user->tweets()->paginate(10)
        ]);
    }

    public function edit(User $user){

//        $this->authorize('edit',$user);
        return view('profiles.edit',compact('user'));
    }

    public function update(Request $request, User $user){

        $attributes=$request->validate([
            'username'=>['required','string','max:255','alpha_dash',Rule::unique('users')->ignore($user)],
            'name'=>['required','string','max:255'],
            'avatar'=>['file'],
            'email'=>['string','required','email','max:255',Rule::unique('users')->ignore($user)],
            'password'=>['string','required','min:8','max:255','confirmed'],

        ]);
        if(request('avatar')){
            $attributes['avatar']=request('avatar')->store('avatars');

        }
        $user->update($attributes);
        return redirect($user->path());
    }
}
