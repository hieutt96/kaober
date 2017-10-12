<?php

namespace Modules\Auth\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class LoginRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'email'     =>  'required|email',
            'password'  =>  'required|min:6'
        ];
    }

    public function messages(){
        return [
            'email.required'        =>  'Bạn chưa điền email',
            'email.email'           =>  'Email không hợp lệ',
            'password.required'     =>  'Bạn chưa điền password',
            'password.min'          =>  'Mật khẩu phải có ít nhất 6 ký tự'
        ];
    }

    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }
}
