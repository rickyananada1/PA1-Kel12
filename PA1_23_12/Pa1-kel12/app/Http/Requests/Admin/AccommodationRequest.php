<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class AccommodationRequest extends FormRequest
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
        switch ($this->method()) {
            case 'POST': {
                    return [
                        'name' => 'required',
                        'image' => ['required', 'image', 'mimes:png,jpg,jpeg'],
                        'category' => 'required',
                        'price' => 'required',
                        'description' => 'required',
                        'destination_id' => 'required'
                    ];
                }
            case 'PUT':
            case 'PATCH': {
                    return [
                        'name' => 'required',
                        'image' => ['image', 'mimes:png,jpg,jpeg'],
                        'category' => 'required',
                        'price' => 'required',
                        'description' => 'required',
                        'destination_id' => 'required'
                    ];
                }
        }
    }
}