<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class BlogKategoriRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\Rule|array|string>
     */
    public function rules(): array
    {
        switch($this->method()) {
            case 'POST' : {
                return [
                    'nama' => ['required', 'unique:blog_kategoris,nama']
                ];
            }
            case 'PUT':
            case 'PATCH': {
                return [
                    'nama' => ['required', 'unique:blog_kategoris,nama,' . $this->route()->parameter('blog_kategori')->id]
                ];
            }
        }
    }
}
