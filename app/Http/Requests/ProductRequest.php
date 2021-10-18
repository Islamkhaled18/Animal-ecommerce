<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductRequest extends FormRequest
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
            'product_name_ar' => 'required|max:100',
            'product_name__en' => 'required|max:100',

            'slug_ar' => 'required|unique:products,slug',
            'slug_en' => 'required|unique:products,slug',

            'description_ar' => 'required|max:1000',
            'short_description_ar' => 'nullable|max:500',
            'description_en' => 'required|max:1000',
            'short_description_en' => 'nullable|max:500',
            'categories' => 'array|min:1', //[]
            'categories.*' => 'numeric|exists:categories,id',
        ];
    }
}
