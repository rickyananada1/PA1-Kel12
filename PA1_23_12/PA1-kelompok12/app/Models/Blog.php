<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    use HasFactory;
    protected $guarded = ['id'];

    public function blogkategori()
    {
        return $this->belongsTo(BlogKategori::class);
    }

    public function incrementReadCount()
    {
        // $this->timestamps = false;
        $this->reads++;
        return $this->save();
    }

}
