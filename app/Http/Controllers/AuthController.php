<?php

namespace App\Http\Controllers;

use App\Http\Requests\ChangePasswordRequest;
use App\Http\Requests\LoginUserRequest;
use App\Http\Requests\RegisterUserRequest;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use Laravel\Socialite\Facades\Socialite;

class AuthController extends Controller
{
    public function showPageLogin()
    {
        return view('login');
    }

    public function login(LoginUserRequest $request)
    {
        if (Auth::attempt(['email' => $request->email, 'password' => $request->password], $request->remember_me)) {
            $request->session()->regenerate();

            return redirect()->route('house.list'); // đường dẫn sau khi login ở đây
        }

        return back()->withErrors([
            'username' => 'Tên người dùng hoặc mật khẩu sai !',
        ]);
    }

    public function loginWithGoogle()
    {
        return Socialite::driver('google')->redirect();
    }

    public function loginWithGoogleCallBack()
    {
        try {
            $user = Socialite::driver('google')->user();
        } catch (\Exception $e) {
            return redirect()->route('auth.login');
        }

        $existingUser = User::where('email', $user->email)->first();

        if ($existingUser) {
            auth()->login($existingUser, true);
        } else {
            $newUser = new User();
            $newUser->username = $user->email;
            $newUser->password = Hash::make('password');
            $newUser->email = $user->email;
            $newUser->save();

            auth()->login($newUser, true);
        }

        return redirect()->route('home');

    }

    public function showPageRegister()
    {
        return view('register');
    }

    public function register(RegisterUserRequest $request)
    {
        $user = new User();
        $user->username = $request->username;
        $user->phone = $request->phone;
        $user->password = Hash::make($request->password);
        $user->email = $request->email;
        $user->save();
        return redirect()->route('auth.login');
    }

    public function logout(){
        Auth::logout();
        return redirect()->route('auth.login');
    }

    public function pageChangePassword(){
        return view('change_password');
    }

    public function changePassword(ChangePasswordRequest $request){
        $current_password = $request->current_password;
        $new_password = $request->new_password;
        $password_confirm = $request->password_confirm;
        if ($new_password == $password_confirm){
            if (Hash::check($current_password, Auth::user()->password)){
                if ($current_password != $new_password){
                    $user = Auth::user();
                    $user->password = Hash::make($request->new_password);
                    $user->save();
                    Auth::logout();
                    return redirect()->route('auth.login');
                }
                Session::flash('message_2','Mật khẩu này đã tồn tại');
                return redirect()->back();
            }
            Session::flash('message_1','Mật khẩu bạn nhập không tồn tại');
            return redirect()->back();
        }
        Session::flash('message_3','Vui lòng nhập mật khẩu khớp với nội dung phía trên');
        return redirect()->back();
    }
}
