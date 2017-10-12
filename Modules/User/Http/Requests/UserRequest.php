<?php

namespace Modules\User\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'firstname' =>  'required|max:30',
            'lastname'  =>  'required|max:30',
            'email'     =>  'required|unique:users|max:50',
            'password'  =>  'required|min:6|max:100',
            'status'    =>  'required',
            'level'     =>  'required',
        ];
    }

    public function messages(){
        return [
            'firstname.required' =>  'Tên không được để trống.',
            'firstname.max'      =>  'Tên quá dài.',
            'lastname.required'  =>  'Họ và đệm không được để trống.',
            'lastname.max'       =>  'Họ và đệm quá dài.',
            'email.required'     =>  'Email không được để trống.',
            'email.unique'       => 'Email đã tồn tại',
            'password.required'  =>  'Password không được để trống.',
            'password.max'       =>  'Password quá dài.',
            'password.min'       =>  'Password quá ngắn.',
            'status.required'    =>  'Status không được để trống.',
            'level.required'     =>  'level không được để trống.',

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
