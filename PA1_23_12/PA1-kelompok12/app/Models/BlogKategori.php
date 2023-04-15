<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BlogKategori extends Model
{
    use HasFactory;

    protected $guarded = ['id'];
    protected $fillable = ['nama', 'deskripsi'];

    protected $attributes = [
        'deskripsi' => '', // Menyediakan nilai default untuk kolom "keterangan"
    ];

    public function blog()
    {
        return $this->hasMany(Blog::class);
    }
}
