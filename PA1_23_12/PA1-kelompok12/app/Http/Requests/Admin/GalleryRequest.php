<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class GalleryRequest extends FormRequest
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
                        'nama' => 'required',
                        'gambar' => ['required', 'image', 'mimes:png,jpg,jpeg'],
                    ];
                }
            case 'PUT':
            case 'PATCH': {
                    return [
                        'nama' => 'required',
                        'gambar' => ['image', 'mimes:png,jpg,jpeg']
                    ];
                }
        }
    }
}
