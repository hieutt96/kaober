<?php

namespace Modules\Product\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'titleProductVi'          =>  'required|max:250',
            'priceProduct'            =>  'required',
            // 'priceProductDiscount' =>  'required', provider
            'descriptionProductVi'    =>  'required',
            'provider'                =>  'required',
            'descriptionProductEn'    =>  'required',
            'titleProductEn'          =>  'required|max:250',
            'slug'                    =>  'required|unique:shop_products|max:190',
            'selectCate'              =>  'required',
        ];
    }

    public function messages(){
        return [
            'titleProductVi.required'       =>  'Bạn chưa nhập tên sản phẩm.',
            'titleProductVi.max'            =>  'Tên sản phẩm quá dài.',
            'priceProduct.required'         =>  'Bạn chưa nhập giá sản phẩm.',
            // 'priceProductDiscount.required' =>  'Bạn chưa nhập giá sản phẩm.',
            'descriptionProductVi.required' =>  'Mô tả sản phẩm không được để trống.',
            'slug.required'                 =>  'Đường dẫn tĩnh không được trống.',
            'slug.unique'                   =>  'Đường dẫn tĩnh đã tồn tại, vui lòng điền tên khác.',
            'slug.max'                      =>  'Đường dẫn tĩnh quá dài.',
            'titleProductEn.required'       =>  'Tên sản phẩm tiếng anh không được trống.',
            'titleProductEn.max'            =>  'Tên sản phẩm tiếng anh quá dài.',
            'descriptionProductVi.required' =>  'Miêu tả sản phẩm không được trống.',
            'descriptionProductEn.required' =>  'Miêu tả sản phẩm tiếng anh không được trống.',
            'selectCate.required'           =>  'Chọn một danh mục sản phẩm.',
            'provider.required'             =>  'Chọn một NCC sản phẩm.',
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
