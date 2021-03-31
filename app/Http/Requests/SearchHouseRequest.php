<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SearchHouseRequest extends FormRequest
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
            'start_date' => ['required','date','before:end_date'],
            'end_date' => ['required','date','after:start_date']
        ];
    }
    public function messages()
    {
        return [
            'start_date.required' => 'Không thể để trống trường này',
            'start_date.date' => 'Vui lòng nhập ngày tháng hợp lệ',
            'start_date.before' => 'Vui lòng nhập ngày tháng hợp lệ',
            'end_date.required' => 'Không thể để trống trường này',
            'end_date.date' => 'Vui lòng nhập ngày tháng hợp lệ',
            'end_date.after' => 'Vui lòng nhập ngày tháng hợp lệ'
        ];
    }
}
