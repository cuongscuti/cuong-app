<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class Rv extends FormRequest
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
            'email'=>'required|email',
            'password'=>'required|min:5',
            
            ];
    }
       public function messages(){
        return [
           'email.required' => 'Phải nhập email',
            'password.required' =>'Phải nhập mật khẩu',
            'email.email' =>'Email phải đúng định dạng',
            'password.min' =>'Mật khẩu phải đủ 5 ký tự',
            
            // 'name.regex'=>'Tên sai định dạng',
        ];
    }
}
