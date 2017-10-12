<?php

namespace Modules\User\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateProfileRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'firstname' =>  'required|max:20',
            'lastname'  =>  'required|max:30',
        ];
    }

    public function messages(){
        return [
            'firstname.required' =>  'Tên không được để trống.',
            'firstname.max'      =>  'Tên quá dài.',
            'lastname.required'  =>  'Họ và đệm không được để trống.',
            'lastname.max'       =>  'Họ và đệm quá dài.',
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
