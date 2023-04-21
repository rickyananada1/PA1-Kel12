<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kabupaten extends Model
{
    use HasFactory;
    // semia diterima kecuali id
    protected $guarded = ['id'];

    public function berita()
    {
        return $this->hasMany(Comment::class);
    }
}
