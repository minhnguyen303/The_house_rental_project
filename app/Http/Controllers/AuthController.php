<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginUserRequest;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function showPageLogin()
    {
        return view('login');
    }

    public function login(LoginUserRequest $request)
    {
        if (Auth::attempt(['username' => $request->username, 'password' => $request->password], $request->remember_me)) {
            $request->session()->regenerate();

            return redirect()->intended('/'); // đường dẫn sau khi login ở đây
        }

        return back()->withErrors([
            'username' => 'Tên người dùng hoặc mật khẩu sai !',
        ]);
    }
}
