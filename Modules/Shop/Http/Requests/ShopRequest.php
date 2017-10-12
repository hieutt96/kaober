<?php

namespace Modules\Shop\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ShopRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
			'title'       =>  'required|min:3|max:190|unique:shops',
			'description' => 'required',
			'hotline'     => 'required',
			'userId'      => 'required',
			'inputImages'   =>'required|image',
			'slug'        => 'required|min:3|max:190|unique:shops',
        ];
    }

    public function messages(){
        return [
            'title.required'       =>  'Tên NCC không được để trống.',
            'title.max'            =>  'Tên NCC quá dài.',
            'title.min'            =>  'Tên NCC quá ngắn.',
            'title.unique'         => 'Tên NCC đã tồn tại.',
            'description.required' =>  'Miêu tả NCC không được để trống.',
            'hotline.required'     =>  'Hotline NCC không được để trống.',
            'userId.required'      =>  'Chọn một người quản trị NCC.',
            'slug.required'        =>  'Đường dẫn NCC không được để trống.',
            'slug.max'             =>  'Đường dẫn NCC quá dài.',
            'slug.min'             =>  'Đường dẫn NCC quá ngắn.',
            'slug.unique'          => 'Đường dẫn NCC đã tồn tại.',
            'inputImages.required'   =>  'Tải một ảnh hoặc logo cho NCC.',
            'inputImages.image'      =>  'File bạn tải không phải hình ảnh.',
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
