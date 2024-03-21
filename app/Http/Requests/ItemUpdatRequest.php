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
            'lang' => ['required'], 
            'county_id' => ['required'],
            'service_id' => ['required'],
             'name' => ['required', 'min:5' , 'unique:items'],
             'image_path' => ['sometimes'],
             'desc' => ['required']
        ];
    }
}
