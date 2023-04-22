<?php

namespace Database\Seeders;
use App\Models\BlogKategori;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;

class BlogKategoriSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $blogKategori = new BlogKategori();
        $blogKategori->nama = 'Berita';
        $blogKategori->slug = Str::slug($blogKategori->nama);
        $blogKategori->deskripsi = 'Deskripsi kategori 1';
        $blogKategori->save();

        $blogKategori = new BlogKategori();
        $blogKategori->nama = 'Kuliner';
        $blogKategori->slug = Str::slug($blogKategori->nama);
        $blogKategori->deskripsi = 'Deskripsi kategori 2';
        $blogKategori->save();

        $blogKategori = new BlogKategori();
        $blogKategori->nama = 'Event';
        $blogKategori->slug = Str::slug($blogKategori->nama);
        $blogKategori->deskripsi = 'Deskripsi kategori 3';
        $blogKategori->save();
    }
}
