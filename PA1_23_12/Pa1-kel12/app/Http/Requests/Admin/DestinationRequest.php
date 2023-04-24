<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class DestinationRequest extends FormRequest
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
                        'ticket' => 'required',
                        'location' => 'required',
                        'description' => 'required',
                        'destination_category_id' => 'required',
                        'kabupaten_id' => 'required',
                    ];
                }
            case 'PUT':
            case 'PATCH': {
                    return [
                        'name' => 'required',
                        'ticket' => 'required',
                        'location' => 'required',
                        'description' => 'required',
                        'destination_category_id' => 'required',
                        'kabupaten_id' => 'required',
                    ];
                }
            default: {
                    return []; // menambahkan return statement default yang mengembalikan array kosong
                }
        }
    }
}
