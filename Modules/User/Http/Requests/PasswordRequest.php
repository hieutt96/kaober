<?php

namespace Modules\User\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PasswordRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'oldpassword' =>  'required|min:6|max:190',
            'password'    =>  'required|min:6|max:190|same:retype',
            'retype'      =>  'required'
        ];
    }

    public function messages(){
        return [
            'oldpassword.required' =>  'Bạn chưa điền mật khẩu cũ',
            'oldpassword.max'      =>  'mật khẩu cũ quá dài',
            'oldpassword.min'      =>  'mật khẩu cũ quá ngắn',
            'password.required'    =>  'Bạn chưa điền mật khẩu',
            'password.min'         =>  ' Mật khẩu bạn điền quá ngắn',
            'password.max'         =>  ' Mật khẩu bạn điền quá dài',
            'password.same'        =>  'Mật khẩu nhập lại không trùng với mật khẩu mới',
            'retype.required'      =>  'Vui lòng nhập lại mật khẩu'
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
