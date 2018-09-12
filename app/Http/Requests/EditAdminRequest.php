<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EditAdminRequest extends FormRequest
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
        $id = $this->segment(3);
        return [
            'user_name'=>'required|unique:users,user_name,'.$id.',id',
            'password'=>'required|min:3',
            'passwordagain' => 'required|same:password',
            'user_email'=>'required|email|unique:users,user_email,'.$id.',id',
            'user_level'=>'required',
            'user_phone'=>'required',
            'user_avatar'=>'image|mimes:jpeg,bmp,png,jpg,JPG,PNG,JPEG'
        ];
    }

    public function messages()
    {
        return [
         
         'user_name.unique'=>'Tài khoản đã tồn tại',
         'user_name.required' => 'Tài khoản không được để trống',
         
         'password.min'=>'Mật khẩu lớn hơn 3 ký tự',
         'password.required' => 'Mật khẩu không được để trống',
         'passwordagain.same' => 'Mật khẩu nhập lại không đúng',
         'passwordagain.required' => 'Mật khẩu nhập lại không được để trống',
         'user_email.required' => 'Email không được để trống',
         'user_email.email' => 'Email không hợp lệ',
         'user_email.unique'=>'Email đã tồn tại',
         'user_level.required'=>'Không để quyền trống',
         'user_phone.required'=>'Điện thoại không được để trống',
         'user_avatar.image'=>'Định dạng file không đúng',
         'user_avatar.mimes'=>'Định dạng file không đúng'
     ];
 }
}
