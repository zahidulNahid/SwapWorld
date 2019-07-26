<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ElectronicsRequest extends FormRequest
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
            'device_type' => 'required',
            'product_name' => 'required',
            'brand' => 'required',
            'model' => 'required',
            'used_time' => 'required',
            'description' => 'required',
            'price_range' => 'required',
            'prefer_device' => ' required',
            'prefer_brand' => 'required',
            'prefer_model' => 'required'
        ];
    }

    public function messages()
    {
        return [
            'image.required' => 'You must upload a product picture',
            'location.required' => 'You must select a location',
            'device_type.required' => 'You must select a device type',
            'product_name.required' => 'You must fill up product name field',
            'brand.required' => 'Please fill up the brand field',
            'model.required' => 'Please select a model',
            'used_time.required' => 'Please give your product used time',
            'description.required' => 'Please give a description about your product',
            'price_range.required' => 'Please select a price range of your product',
            'prefer_device.required' => 'Please select a device you prefer for swap',
            'prefer_brand.required' => 'Please select a brand you prefer for swap',
            'prefer_model.required' => 'Please select a model you prefer for swap'
        ];
    }
}