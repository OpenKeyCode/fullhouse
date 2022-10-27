<?php

namespace App\Http\Requests\Back\Setting;

use Illuminate\Foundation\Http\FormRequest;

class SettingRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'logo'              => 'required|image',
            'icon_site'         => 'required|image',
            'address'           => 'required|string',
            'contact_instagram' => 'required|string',
            'contact_facebook'  => 'required|string',
            'contact_telegram'  => 'required|string',
            'contact_phone'     => 'required|string',
            'telegram_token'    => 'required|string',
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
