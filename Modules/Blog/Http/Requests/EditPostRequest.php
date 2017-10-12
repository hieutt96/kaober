<?php

namespace Modules\Blog\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EditPostRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
                'titleVi'    =>  'required|max:250',
                'contentVi'  =>  'required',
                'contentEn'  =>  'required',
                'titleEn'    =>  'required|max:250',
                'slug'       =>  'required|max:190',
                'selectCate' =>  'required',
                'inputImages'  => 'image'
            ];
    }

    public function messages(){
        return [
                'titleVi.required'     =>  'Bạn chưa nhập tên bài viết.',
                'titleVi.max'          =>  'Tên bài viết quá dài.',
                'titleEn.required'     =>  'Bạn chưa nhập tên bài viết tiếng anh.',
                'titleEn.max'          =>  'Tên bài viết tiếng anh quá dài.',
                'contentVi.required'   => 'Nội dung bài viết không được trống',
                'contentEn.required'   => 'Nội dung bài viết tiếng anh không được trống',
                'slug.required'        =>  'Đường dẫn tĩnh không được trống.',
                'slug.max'             =>  'Đường dẫn tĩnh quá dài.',
                'selectCate.required'  =>  'Chọn một danh mục bài viết.',
                'inputImages.image'      => 'File bạn tải lên không phải hình ảnh',
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
