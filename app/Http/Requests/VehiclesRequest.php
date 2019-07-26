<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class VehiclesRequest extends FormRequest
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
            'vehicle_type' => 'required',
            'brand' => 'required',
            'model_year' => 'required',
            'fuel_type' => 'required',
            'kilometers_run' => 'required',
            'description' => 'required',
            'prefer_device_type' => 'required',
            'prefer_brand' => 'required'
        ];
    }

    public function messages()
    {
        return [
            'image.required' => 'You must upload a product picture',
            'location.required' => 'You must select a location',
            'vehicle_type.required' => 'You must select a device type',
            'brand.required' => 'You must fill up product brand field',
            'model_year.required' => 'Please select a model year',
            'fuel_type.required' => 'Please give your product used time',
            'kilometers_run.required' => 'Please enter how many kilometers your vehicle runs',
            'description.required' => 'Please give a description about your vehicle',
            'prefer_device_type.required' => 'Please select a device you prefer for swap',
            'prefer_brand.required' => 'Please select a brand you prefer for swap'
        ];
    }
}