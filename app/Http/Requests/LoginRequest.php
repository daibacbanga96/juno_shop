<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class LoginRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'user'=>'required',
            'pass'=>'required|min:3|max:30'
        ];
    }

    public function messages(){
        return [
            'user.required'=>'Email không được để trống',
            'user.email'=>'Email không đúng định dạng',
            'pass.required'=>'Password không được để trống',
            'pass.min'=>'Password không được nhỏ hơn 3 ký tự',
            'pass.max'=>'Password không được lớn hơn 30 ký tự'
        ];

    }
}
