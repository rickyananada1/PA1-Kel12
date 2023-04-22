<?php

namespace Database\Seeders;

use App\Models\DestinasiKategori;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;

class DestinasiKategoriSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $blogKategori = new DestinasiKategori();
        $blogKategori->nama = 'Wisata Alami';
        $blogKategori->slug = Str::slug($blogKategori->nama);
        $blogKategori->deskripsi = 'Deskripsi kategori 1';
        $blogKategori->save();

        $blogKategori = new DestinasiKategori();
        $blogKategori->nama = 'Wisata Buatan';
        $blogKategori->slug = Str::slug($blogKategori->nama);
        $blogKategori->deskripsi = 'Deskripsi kategori 2';
        $blogKategori->save();

        $blogKategori = new DestinasiKategori();
        $blogKategori->nama = 'Wisata Religi';
        $blogKategori->slug = Str::slug($blogKategori->nama);
        $blogKategori->deskripsi = 'Deskripsi kategori 3';
        $blogKategori->save();
    }
}
