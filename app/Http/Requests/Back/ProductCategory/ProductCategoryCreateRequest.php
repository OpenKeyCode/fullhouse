<?php

namespace App\Http\Requests\Back\ProductCategory;

use Illuminate\Foundation\Http\FormRequest;

class ProductCategoryCreateRequest extends FormRequest
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

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'title' => 'required|string|unique:product_categories,title,NULL,NULL,deleted_at,NULL',
            'image' => 'required|image',
            'color' => 'string',
            'description' => 'string',
            'parent_category_id' => 'nullable|integer|exists:product_categories,id,deleted_at,NULL'
        ];
    }


}
