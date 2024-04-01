<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ItemUpdatRequest extends FormRequest
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
            'lang' => ['sometimes'], 
            'county_id' => ['sometimes'],
            'service_id' => ['sometimes'],
             'name' => ['sometimes', 'min:5' , 'unique:items'],
             'image_path' => ['sometimes'],
             'desc' => ['sometimes']
        ];
    }
}
