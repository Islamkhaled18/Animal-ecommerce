<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class BlogRequest extends FormRequest
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
            'blog_title_en'=>'required|max:20',
            'blog_title_ar'=>'required|max:20',
            'short_description_en'=>'required|max:20',
            'short_description_ar'=>'required|max:20',
            'long_description_en'=>'required|min:5',
            'long_description_ar'=>'required|min:5',
            'blog_video'=>'required',
            'blog_photo'=>'required|image'

        ];
    }
}
