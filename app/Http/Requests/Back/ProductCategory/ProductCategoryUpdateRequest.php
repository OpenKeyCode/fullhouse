<?php

namespace App\Http\Requests\Back\ProductCategory;

use Illuminate\Foundation\Http\FormRequest;

class ProductCategoryUpdateRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'title' => 'required|string',
            'image' => 'image',
            'icon' => 'image',
            'color' => 'string',
            'description' => 'string',
            'parent_category_id' => 'nullable|integer|exists:product_categories,id,deleted_at,NULL'
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
