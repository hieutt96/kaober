<?php

namespace Modules\Product\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CateRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'titleVi'       =>  'required|max:190',
            'descriptionVi' =>  'required',
            'titleEn'       =>  'required',
            'descriptionEn' =>  'required|max:250',
            'slug'          =>  'required|unique:shop_categories|max:190',
        ];
    }

    public function messages(){
        return [
            'titleVi.required'       =>  'Bạn chưa nhập tên danh mục.',
            'titleVi.max'            =>  'Tên danh mục quá dài.',
            'descriptionVi.required' =>  'Bạn chưa nhập mô tả.',
            'descriptionEn.required' =>  'Bạn chưa nhập mô tả tiếng anh.',
            'slug.max'               => 'đường dẫn quá dài',
            'slug.required'          => 'Đường dẫn không được để trống',
            'slug.unique'            => 'Đường dẫn đã tồn tại'
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
