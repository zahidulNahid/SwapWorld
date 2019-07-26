<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class BooksRequest extends FormRequest
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
            
            'image' => 'required',
            'location' => 'required',
            'book_name' => 'required',
            'writer_name' => 'required',
            'category' => 'required',
            'edition' => 'required',
            'description' => 'required',
            'prefer_category' => 'required'
        ];
    }

    public function messages()
    {
        return [
            'image.required' => 'You must upload a product picture',
            'location.required' => 'You must select a location',
            'book_name.required' => 'You must write a book name',
            'writer_name.required' => 'You must write a author name',
            'category.required' => 'Please select a category',
            'edition.required' => 'Please uplaod a edition of your book',
            'description.required' => 'Please give a description about your product',
            'prefer_category.required' => 'Please select a category you want to swap your book'
        ];
    }
}