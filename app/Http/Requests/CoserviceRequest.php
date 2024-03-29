<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CoserviceRequest extends FormRequest
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
            "title" => ['required', 'min:5', 'unique:co_service'],
            "lang" => ['required'],
            "service_id" => ['required'],
            "desc" => ['required']
        ];
    }
}
