<?php

namespace App\Http\Requests\Back\Banner;

use Illuminate\Foundation\Http\FormRequest;

class BannerCreateRequest extends FormRequest
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
            'alter_text' => 'required|string',
            'image' => 'required|image',
            'image_mobile' => 'required|image',
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
