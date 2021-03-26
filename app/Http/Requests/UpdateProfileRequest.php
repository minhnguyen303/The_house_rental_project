<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateProfileRequest extends FormRequest
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
            'username' => ['required','unique:users'],
            'fullname' => ['required'],
            'address' => ['required'],
            'phone' => ['required','digits:10','unique:users'],
            'email' => ['required','email','unique:users'],
        ];
    }
    public function messages()
    {
        return [
            'username.required' => 'Tên người dùng không được để trống',
            'username.unique' => 'Tên người dùng đã tồn tại',
            'fullname.required' => 'Họ và tên không được để trống',
            'address.required' => 'Địa chỉ không được để trống',
            'phone.required' => 'Số điện thoại không được để trống',
            'phone.digits' => 'Số điện thoại không hợp lệ',
            'phone.unique' => 'Số điện thoại này đã tồn tại',
            'email.required' => 'Email không được để trống',
            'email.email' => 'Email không hợp lệ',
            'email.unique' => 'Email này đã tồn tại',
        ];
    }
}
