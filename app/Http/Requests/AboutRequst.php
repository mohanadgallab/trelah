<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AboutRequst extends FormRequest
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
            'title' => ['required'],
            'lang' => ['required'],
            'subtitle' => ['required'],
            'image_path' => ['required','image'],
            'end' => ['required'],
            'list_1' => ['nullable'],
            'list_2' => ['nullable'],
            'list_3' => ['nullable'],
            'list_4' => ['nullable']

        ];
    }
}
