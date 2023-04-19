<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Destinasi extends Model
{
    use HasFactory;

    protected $guarded = ['id'];
    
    // 1 destinasi memiliki banyak foto dari model gallery
    public function galleries()
    {
        return $this->hasMany(Gallery::class);
    }

    public function kategoriDestinasi()
    {
        return $this->belongsTo(DestinasiKategori::class);
    }



    
    
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
