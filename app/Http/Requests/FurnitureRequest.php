<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class FurnitureRequest extends FormRequest
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
            'product_name' => 'required',
            'furniture_type' => 'required',
            'description' => 'required',
            'price_range' => 'required',
            'used_time' => 'required',
            'prefer_furniture_type' => 'required'
            ];
    }

    public function messages()
    {
        return [
            'image.required' => 'You must upload an image of your furniture',
            'location.required' => 'please select a location',
            'product_name.required' => 'please write a name of your product',
            'furniture_type.required' => 'please select a furniture type',
            'description.required' => 'please add a description of your furniture',
            'price_range.required' => 'please select a price range of your furniture',
            'used_time.required' => 'please write used time of your furniture',
            'prefer_furniture_type.required' => 'please select your prefer furniture type'
        ];
    }
}