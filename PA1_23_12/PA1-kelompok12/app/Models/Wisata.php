<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Wisata extends Model
{
    use HasFactory;

    //one to many wisata dan hotel
    public function hotel()
    {
        return $this->hasMany(Hotel::class);
    }

    public function komen()
    {
        return $this->hasMany(Komen::class);
    }

}
