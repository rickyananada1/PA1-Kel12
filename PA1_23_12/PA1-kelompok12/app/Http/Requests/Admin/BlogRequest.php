<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class BlogRequest extends FormRequest
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
                        'judul' => 'required',
                        'kutipan' => 'required',
                        'deskripsi' => 'required',
                        'blog_kategoris_id' => 'required'
                    ];
                }
            case 'PUT':
            case 'PATCH': {
                    return [
                        'judul' => 'required',
                        'kutipan' => 'required',
                        'deskripsi' => 'required',
                        'blog_kategoris_id' => 'required'
                    ];
                }
        }
    }

    public function messages()
    {
        return [
            'judul.required' => 'Judul harus diisi.',
            'kutipan.required' => 'Kutipan harus diisi.',
            'gambar.required' => 'Gambar harus diisi.',
            'gambar.image' => 'Gambar harus berupa file gambar.',
            'gambar.mimes' => 'Gambar harus berformat png, jpg, atau jpeg.',
            'deskripsi.required' => 'Deskripsi harus diisi.',
            'blog_kategoris_id.required' => 'Kategori harus dipilih.',
        ];
    }
}
