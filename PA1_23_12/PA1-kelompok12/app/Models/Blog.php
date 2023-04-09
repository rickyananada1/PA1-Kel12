<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Berita extends Model
{
    use HasFactory;

    public function blogkategori()
    {
        return $this->belongsTo(BlogKategori::class);
    }

    public function incrementReadCount()
    {
        $this->reads++;
        return $this->save();
    }

}
