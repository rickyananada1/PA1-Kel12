<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class DestinasiRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function rules(): array
{
    switch($this->method()){
        case 'POST' : {
            return [
                'nama' => 'required',
                'lokasi' => 'required',
                'deskripsi' => 'required',
            ];
        }
        case 'PUT':
        case 'PATCH': {
            return [
                'nama' => 'required',
                'lokasi' => 'required',
                'deskripsi' => 'required',
            ];
        }
        default: {
            return []; // menambahkan return statement default yang mengembalikan array kosong
        }
    }
}

}
