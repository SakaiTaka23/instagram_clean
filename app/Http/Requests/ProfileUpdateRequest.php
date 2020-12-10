<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProfileUpdateRequest extends FormRequest
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
     * @return array
     */
    public function rules()
    {
        return [
            'image' => ['image'],
            'username' => ['required', 'max:20'],
            'description' => ['max:200'],
            'url' => ['url'],
        ];
    }

    protected function prepareForValidation()
    {
        if (is_null($this->description)) {
            $this->merge([
                'description' => ''
            ]);
        }
        if (is_null($this->url)) {
            $this->merge([
                'url' => ''
            ]);
        }
    }
}
