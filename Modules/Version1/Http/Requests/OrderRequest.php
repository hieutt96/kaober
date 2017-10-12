<?php

namespace Modules\Version1\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class OrderRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name'  =>  'required|min:2|max:190',
            'email' => 'email|required|min:5|max:190',
            'phone' => 'required|min:9|max:15',
            // 'city' => 'required|min:3|max:50',
            'address' => 'required|min:3|max:190',
        ];
    }

    public function messages(){
        return [
            'name.required'       =>  'Tên không được trống.',
            'name.max'            =>  'Tên quá dài.',
            'name.min'            =>  'Tên quá ngắn.',
            'email.required'       =>  'Email không được để trống.',
            'email.max'            =>  'Email quá dài.',
            'email.min'            =>  'Email quá ngắn.',
            'email.email'            =>  'Email không đúng định dạng.',
            'phone.required'       =>  'Số điện thoại không được trống.',
            'phone.max'            =>  'Số điện thoại quá dài.',
            'phone.min'            =>  'Số điện thoại quá ngắn.',
            'address.required'       =>  'Địa chỉ không được trống.',
            'address.max'            =>  'Địa chỉ quá dài.',
            'address.min'            =>  'Địa chỉ quá ngắn.',
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
