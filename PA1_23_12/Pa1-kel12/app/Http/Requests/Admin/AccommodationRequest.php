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
                        'category' => 'required',
                        'price' => 'nullable',
                        'location' => 'required',
                        'is_share' => 'required',
                        'description' => 'required',
                        'destination_id' => 'required'
                    ];
                }
            case 'PUT':
            case 'PATCH': {
                    return [
                        'name' => 'required',
                        'category' => 'required',
                        'price' => 'nullable',
                        'location' => 'required',
                        'is_share' => 'required',
                        'description' => 'required',
                        'destination_id' => 'required'
                    ];
                }
        }
    }
    public function messages()
    {
        return [
            'name.required' => 'Kolom nama harus diisi!',
            'category.required' => 'Kategori Akmodasi harus diisi!',
            'location.required' => 'Kolom lokasi akomodasi harus diisi!',
            'description.required' => 'Kolom deskripsi harus diisi!',
        ];
    }
}
