<?php

namespace App\Http\Controllers;

use App\Http\Requests\editProfileRequest;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{
    public function editProfile(){
        $user = Auth::user();
        return view('editProfile',['user'=>$user]);
    }

    public function updateProfile($id, editProfileRequest $request) {
        $user = User::find($id);
        $user->name = $request->input('name');
        $user->lastname = $request->input('lastname');
        $user->phone = $request->input('phone');
        $user->gender = $request->input('gender');
        $user->birthdate = $request->input('birthdate');
        $user->save();
        return redirect('/profile/');
    }
}
