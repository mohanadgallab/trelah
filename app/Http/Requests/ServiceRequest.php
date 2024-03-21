<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ServiceRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            "name" => ['required', 'min:5', 'unique:services'],
            "desc" => ['required'],
            "image_path" => ['required', 'image'],
            "icon" => ['required'],
            "lang" => ['required'],
            "country_id" => ['required']
        ];
    }
}
