<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PropertyRequest extends FormRequest
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
            'address' => 'required',
            'land_type' => 'required',
            'land_size' => 'required',
            'unit' => 'required',
            'description' => 'required',
            'price_range' => 'required',
            'prefer_location' => 'required',
            //'prefer_land_size' => 'required'
            ];
    }

    public function messages()
    {
        return [
            'image.required' => 'You must upload an image of your furniture',
            'location.required' => 'please select a location',
            'address.required' => 'please write address of your land',
            'land_type.required' => 'please select a land type',
            'land_size.required' => 'please write land ize',
            'unit.required' => 'unit need to click',
            'description.required' => 'please add a description of your land',
            'price_range.required' => 'please select a price range of your furniture',
            'prefer_location.required' => 'please select your prefer location'
            //'prefer_land_size.required' => 'please select your prefer land size'
        ];
    }
}