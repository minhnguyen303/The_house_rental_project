<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function profile()
    {
        $user = Auth::user();
        return view('user.profile', compact('user'));
    }

    public function showPageUserProfile(){
        return view('user_profile');
    }

    public function updateProfile(Request $request){
        $user = Auth::user();
        $user->phone = $request->phone;
        $user->email = $request->email;
        $user->address = $request->address;
        $user->fullname = $request->fullname;
        $user->avatar = $request->avatar;
        $user->save();
        return redirect()->back();
    }
}
