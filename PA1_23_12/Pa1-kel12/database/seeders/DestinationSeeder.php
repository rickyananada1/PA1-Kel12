<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Destination;

class DestinationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $destinations = [
            [
                'name' => 'Pemandian Manigom Nauli',
                'slug' => 'Pemandian-Manigom-Nauli',
                'ticket' => '5.000',
                'location' => 'Tiga Dolok, Kecamatan Dolok Panribuan, Kabupaten Simalungun',
                'destination_category_id' => 1,
                'kabupaten_id' => 2,
                'description' => 'Meskipun lokasi wisata ini jauh dari pusat Kota Simalungun, namun perjalanan Anda akan terbayar lunas ketika sudah menikmati segarnya air dari mata air alami yang memancar. Airnya yang jernih dan pepohonan yang rindang menambah nyaman ketika Anda berenang atau sekedar duduk-duduk santai ditepian kolam pemandian.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Pantai Lumban Silintong',
                'slug' => 'pantai-lumban-silintong',
                'ticket' => '10.000',
                'location' => 'Balige',
                'destination_category_id' => 1,
                'kabupaten_id' => 1,
                'description' => 'Jadi tempat wisata yang menarik di Sumatera Utara. Terletak di Balige, Tobasa. Tepi laut ini mempunyai ombak yang tidak sangat kokoh, sehingga rata- rata wisatawan turis yang berkunjung sangat cocok buat kegiatan berenang dengan nyaman di air.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            // tambahkan data destinasi lainnya sesuai kebutuhan
        ];
        foreach ($destinations as $destination) {
            Destination::create($destination);
        }
    }
}
