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

    public function makanan()
    {
        return $this->hasMany(Makanan::class);
    }

    public function tempatmakan()
    {
        return $this->hasMany(TempatMakan::class);
    }

    public function trasportasi()
    {
        return $this->hasMany(Transportasi::class);
    }

    // relasi one to one
    public function rating()
    {
        return $this->hasOne(Rating::class);
    }
}
