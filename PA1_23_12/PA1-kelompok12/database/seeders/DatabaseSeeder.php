<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(KabupatenSeeder::class);
        $this->call(UserSeeder::class);
        $this->call(BlogKategoriSeeder::class);
        $this->call(DestinasiKategoriSeeder::class);
    }
}
