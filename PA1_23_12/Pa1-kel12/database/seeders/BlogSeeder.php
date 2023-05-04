<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Blog;

class BlogSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $blogs = [
            [
                'blog_category_id' => 1,
                'kabupaten_id' => 4,
                'slug' => 'Destination-Branding-Dorong-Pariwisata-Berkelanjutan-di-Bakkara-Toba',
                'title' => 'Destination Branding, Dorong Pariwisata Berkelanjutan di Bakkara Toba',
                'excerpt' => 'Ini adalah cuplikan dari blog pertama',
                'description' => 'Masyarakat di Kecamatan Baktiraja (Bakkara), Kabupaten Humbang Hasundutan, Danau Toba bersama Wise Steps Foundation meluncurkan branding destination dan UMKM Baktiraja, Lake Toba’s Secret Valley, serta produk wisata The Baktiraja Cycling Tour di acara komunitas Bernama Saturday Night in Baktiraja, di Wisma Nasional, Bakkara, Sabtu (16/4/2022).
                Project Manager Wisestep Foundation, Mochamad Nalendra menjelaskan kegiatan berbentuk pelatihan, workshop, dan pendampingan dalam program “Peningkatan Kapasitas untuk Ketahanan Destinasi dan Produk Pariwisata Berkelanjutan di Kabupaten Humbang Hasundutan” yang dilaksanakan mulai November 2021 hingga April 2022, telah menelurkan dua buah keluaran program yang menekankan pada pembangunan identitas Baktiraja sebagai destinasi yang memiliki sejarah dan atraksi petualangan yang dikemas dalam sebuah destination branding.
               Secara umum, program ini dirancang untuk mendukung pemangku kepentingan pariwisata di kawasan Danau Toba agar memperkuat pengetahuan mereka tentang praktik pariwisata berkelanjutan. Kabupaten Humbang Hasundutan dipilih menjadi fokus program karena potensi pariwisata yang besar, serta dukungan yang telah diberikan pemerintah pusat, khususnya di sekitar situs Geopark Danau Toba di Baktiraja seperti kemudahan akses ke atraksi, papan interpretasi, homestay, dan lainnya.'
            ],
            [
                'blog_category_id' => 1,
                'kabupaten_id' => 4,
                'slug' => 'Humbang-Hasundutan-Turut-Memeriahkan-Acara-Woman-20-Summit-di-Pantai-Bebas-Parapat',
                'title' => 'Humbang Hasundutan Turut Memeriahkan Acara Woman 20 Summit, di Pantai Bebas Parapat',
                'excerpt' => 'Ini adalah cuplikan dari blog pertama',
                'description' => 'Dalam rangka perhelatan Women 20 (W20) Summit yang telah dilaksanakan di Danau Toba Parapat pada 19-21 Juli 2022, Bank Indonesia (Prov Sumut, Pematangsiantar, dan Sibolga) beserta Badan Pelaksana Otoritas Danau Toba (BPODT) dan 8 Kabupaten/Kota di Sumatera Utara menggelar event W20 Progresif Danau Toba 2022, salah satunya kabupaten Humbang Hasundutan.
                Kabupaten Humbang Hasundutan turut memeriahkan acara W20 Summit dengan penampilan kesenian dari sanggar dan band local yang ada di Humbang Hasundutan. Adapun bentuk kesenian yang ditampilkan diantaranya Tarian-tarian yang dibawakan oleh Sanggar Seni Tonggi, kesenian moncak yang dibawakan oleh Sanggar Seni Nabasa, uning-uningan dari Sanggar Seni Pearung, dan penampilan dari band WEMAKEIT yang turut memeriahkan rangkaian acara W20 Summit 2022 di Parapat.
                Selain penampilan dari Sanggar Seni dan Band, Humbang Hasundutan juga turut serta mendirikan booth yang menampilkan hasil UMKM daerah Humbang Hasundutan. Booth UMKM dipenuhi dengan oleh-oleh asli Humbang Hasundutan seperti kopi Lintong, keripik, bandrek andaliman, batik khas Humbang, dan kerajinan tangan lainnya.'
            ],
            [
                'blog_category_id' => 1,
                'kabupaten_id' => 4,
                'slug' => '2-Desa-Wisata-di-Humbang-Hasundutan-Masuk-Nominasi-Anugrah-Desa-Wisata-Indonesia-(ADWI)-2022',
                'title' => '2 Desa Wisata di Humbang Hasundutan, Masuk Nominasi Anugrah Desa Wisata Indonesia (ADWI) 2022',
                'excerpt' => 'Ini adalah cuplikan dari blog pertama',
                'description' => 'Anugrah Desa Wisata Indonesia ( ADWI), merupakan sebuah program kerja unggulan dari Menteri Pariwisata dan Ekonomi Kreatif Indonesia, yakni Sandiaga Uno. Anugrah Desa Wisata Indonesia disebut sebagai pengembangan desa pariwisata yang menjadi satu dari sekian program unggulan Kemenparekraf ( Kementrian Pariwisata dan Ekonomi Kreatif ). Tujuan dari program ADWI ini sendiri adalah sebagai sarana penggerak di bagian pemulihan sektor wisata dan ekonomi kreatif. Pada tahun 2021, ADWI mendapatkan respon yang positif dari masyarakat, serta keinginan masyarakat agar program ini dijalankan lebih lanjut. Sebanyak 3000 desa wisata dari 34 provinsi, di tahun 2022 yang menjadi penargetan pengembangan oleh Kemenparakraf, salah satunya adalah desa desa yang berada di Humbang Hasundutan.
                Humbang Hasundutan merupakan sebuah kabupaten yang terletak di Sumatra Utara, Indonesia dan beribu kotakan Doloksanggul. Kabupaten Humbang Hasundutan terdiri dari 10 kecamatan, 1 kelurahan, dan 153 desa dengan luas wilayah mencapai 2.335,33 km² dan jumlah penduduk sekitar 195.111 jiwa (2017) dengan kepadatan penduduk 84 jiwa/km². Kabar baik untuk Kab. Humbahas, terdapat 2 desa dari Kabupaten Humbahas yang masuk ke dalam nominasi Anugrah Desa Wisata Indonesia. Yakni Desa Sihombu, Kecamatan Tarabintang, dan Desa Simamora, Kecamatan Baktiraja
                '
            ],


        ];
        foreach ($blogs as $blog) {
            Blog::create($blog);
        }
    }
}
