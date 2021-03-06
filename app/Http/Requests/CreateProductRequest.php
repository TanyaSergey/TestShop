<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateProductRequest extends FormRequest
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
            "title" => 'string|max:255',
            "description" => 'string|max:65535',
            "quantity" => 'integer|min:1',
            "price" => 'numeric',
            "file" => 'file|mimes:jpg,gif,png|max:2048',
        ];
    }
}