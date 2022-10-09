<?php

namespace App\Http\Requests\Back\Product;

use Illuminate\Foundation\Http\FormRequest;

class ProductCreateRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'title' => 'required|string|unique:deliveries,title,NULL,NULL,deleted_at,NULL',
            'description' => 'required|string',
            'short_description' => 'string',
            'price' => 'required|integer',
            'discount' => 'required|integer',
            'stock' => 'required|bool',
            'image' => 'required|image',
            'status' => 'required|bool',
            'parameters' => 'required|string',
            'room_id' => 'required|integer|exists:rooms,id,deleted_at,NULL',
            'product_category_id' => 'required|integer|exists:product_categories,id,deleted_at,NULL',
            'delivery_id' => 'required|integer|exists:deliveries,id,deleted_at,NULL',
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
