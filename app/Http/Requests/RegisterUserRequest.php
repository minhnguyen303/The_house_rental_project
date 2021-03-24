<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RegisterUserRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */


    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'username' => ['required', 'unique:users'],
            'email' => ['required', 'email', 'unique:users'],
            'password' => ['required', 'min:6', 'max:8', 'confirmed'],
            'phone' => ['required', 'digits:10', 'unique:users'],
        ];
    }
    public function messages()
    {
        return [
            'username.required' => 'Tên người dùng không được để trống',
            'username.unique' => 'Tên người dùng đã tồn tại',
            'email.required' => 'Email không được để trống',
            'email.email' => 'vui lòng nhập email đúng định dạng',
            'email.unique' => 'Email này đã tồn tại',
            'password.required' => 'Mật khẩu không được để trống',
            'password.min' => 'Mật khẩu phải có ít nhất 6 ký tự',
            'password.max' => 'Mật khẩu phải ít hơn 9 ký tự',
            'password.confirmed' => 'Vui lòng nhập mật khẩu khớp với nội dung phía trên',
            'phone.required' => 'Số điện thoại không được để trống',
            'phone.digits' => 'Số điện thoại không hợp lệ',
            'phone.unique' => 'Số điện thoại này đã tồn tại',
        ];
    }
}
