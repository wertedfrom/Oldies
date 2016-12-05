<?php

namespace App\Http\Controllers;

use App\Http\Requests\editAvatarRequest;
use App\Http\Requests\editProfileRequest;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

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

    public function editAvatar(){
        $user = Auth::user();
        return view('avatar',['user'=>$user]);
    }

    public function updateAvatar($id, editAvatarRequest $request) {
        $user = User::find($id);

        $file = $request->file('avatar');

        $name = str_slug($file->getFilename()).'-'.$user->id.'.'.$file->extension();

        $filename = $file->storeAs('avatars', $name, env('PUBLIC_STORAGE', 'public'));

        Storage::delete('public/'.$user->url_image);

        $user->url_image = $filename;

//        var_dump($filename);
//        var_dump($user->url_image);
//        $exit;
        $user->save();
        return redirect('/profile/');
    }
}
