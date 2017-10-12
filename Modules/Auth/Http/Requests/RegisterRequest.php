<?php

namespace Modules\Auth\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RegisterRequest extends FormRequest
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


    public function rules()
    {
        return [
            'fname'      =>  'required|min:2|max:30',
            'lname'      =>  'required|max:30',
            'email'     =>  'required|email|max:50|unique:users',
            'password'  =>  'required|min:6|same:retype',
            'retype'    =>  'required'
        ];
    }

    public function messages(){
        return [
            'fname.required'     =>  'Bạn chưa điền họ và tên đệm',
            'fname.max'          =>  'Họ và tên đệm quá dài',
            'fname.min'          => 'Họ và tên đệm quá ngắn',
            'lname.required'     =>  'Bạn chưa điền tên hiển thị',
            'lname.max'          =>  'Tên hiển thị quá dài',
            'email.required'    =>  'Bạn chưa điền email',
            'email.max'         =>  'Email quá dài',
            'email.email'       =>  'Email không hợp lệ',
            'email.unique'      =>  'Email này đã được sử dụng',
            'password.required' =>  'Bạn chưa điền mật khẩu',
            'password.min'      =>  ' Mật khẩu bạn điền quá ngắn',
            'password.same'     =>  'Mật khẩu nhập lại không trùng với mật khẩu chính',
            'retype.required'   =>  'Vui lòng nhập lại mật khẩu'
        ];
    }
}
