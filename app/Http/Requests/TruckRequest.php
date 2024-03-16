<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TruckRequest extends FormRequest
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
            'lang' => ['required'],
            'name' => ['required', 'min:3', 'unique:trucks'],
            'image_path' => ['required', 'image'],
            'long' => ['required', 'integer'],
            'width' => ['required', 'integer'],
            'weight' => ['required', 'integer'],
        ];
    }
}
