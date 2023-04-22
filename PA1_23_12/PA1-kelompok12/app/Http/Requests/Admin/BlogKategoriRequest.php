<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class BlogKategoriRequest extends FormRequest
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
                        'deskripsi' => 'required',
                    ];
                }
            case 'PUT':
            case 'PATCH': {
                    return [
                        'nama' => 'required',
                        'deskripsi' => 'required',
                    ];
                }
        }
    }
}
