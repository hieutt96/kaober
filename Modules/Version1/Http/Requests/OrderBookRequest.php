<?php

namespace Modules\Version1\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class OrderBookRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'title'       =>  'required|min:3|max:190',
            'email' => 'required|email',
        ];
    }

    public function messages(){
        return [
            'title.required'       =>  'Tên cuốn sách không được trống.',
            'title.max'            =>  'Tên sách quá dài.',
            'title.min'            =>  'Tên sách quá ngắn.',
            'email.required'       =>  'Email không được để trống.',
            'email.email'       =>  'Email không đúng định dạng.',
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
