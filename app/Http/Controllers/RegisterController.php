<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use App\Http\Requests\RegisterUserRequest;

class RegisterController extends Controller
{
    public function showPageRegister()
    {
        return view('register');
    }

    public function register(RegisterUserRequest $request)
    {
        $user = new User();
        $user->username = $request->username;
        $user->phone = $request->phone;
        $user->password = hash("md5", $request->password);
        $user->email = $request->email;
        $user->save();
        return redirect()->route('page.login');
    }


}
