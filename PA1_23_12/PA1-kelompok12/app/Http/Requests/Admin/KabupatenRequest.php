<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class KabupatenRequest extends FormRequest
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
                        'logo' => ['required', 'image', 'mimes:png,jpg,jpeg'],
                        'deskripsi' => 'required',
                    ];
                }
            case 'PUT':
            case 'PATCH': {
                    return [
                        'nama' => 'required',
                        'logo' => ['image', 'mimes:png,jpg,jpeg'],
                        'deskripsi' => 'required',
                    ];
                }
        }
    }
}
