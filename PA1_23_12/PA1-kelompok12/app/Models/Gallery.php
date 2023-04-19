<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Gallery extends Model
{
    use HasFactory;
    
    protected $guarded = [];

    public function destinasi()
    {
        return $this->belongsTo(Destinasi::class);
    }
}
