<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Uupk;
use App\Models\Berita;

class Data2Seeder extends Seeder
{
    public function run()
    {
        $berita1 = Berita::create(array(
            'admin_id' => 1,
            'judulBerita' => "Kemendag Catat Pengaduan Konsumen Didominasi E-commerce pada 2021",
            'photo' => "asset/berita1.jpg",
            'isiBerita' => "JAKARTA, KOMPAS.com - Direktur Jenderal Perlindungan Konsumen dan Tertib Niaga(PKTN) Veri Anggrijono mengatakan, 
                            Kementerian Perdagangan melalui Direktorat Jenderal PKTN terus menjamin adanya kepastian hukum dalam memberikan perlindungan kepada 
                            seluruh konsumen Indonesia. Dia memaparkan, pada 2021, tercatat adanya 9.393 layanan pengaduan konsumen. Jumlah ini naik 10 kali lipat 
                            dibandingkan tahun sebelumnya, yaitu sebanyak 931 layanan pengaduan. “Sebanyak 95,3 persen atau 8.949 konsumen membuat pengaduan 
                            di sektor niaga elektronik/niaga-el (e-commerce). Banyaknya pengaduan di sektor ini seiring makin intensifnya transaksi elektronik
                            konsumen selama pandemi Covid-19,” kata Veri dalam siaran resminya dikutip Kompas.com, Senin (10/1/2022). 
                            Baca juga: Airlangga: Transaksi E-commerce Diproyeksi Naik Jadi Rp 395 Triliun pada 2021 Pengaduan di sektor niaga-el, 
                            lanjut Veri, meliputi sektor makanan dan minuman, jasa transportasi, pengembalian dana (refund), pembelian barang yang tidak
                            sesuai dengan perjanjian atau rusak, barang tidak diterima konsumen, pembatalan sepihak oleh pelaku usaha, waktu 
                            kedatangan barang tidak sesuai dengan yang dijanjikan, penipuan belanja daring, serta penggunaan aplikasi media sosialyang 
                            tidak berfungsi. Veri menuturkan, dari total pengaduan konsumen, Kemendag telah menyelesaikan 99,2 persen pengaduan atau sebanyak
                            9.318 pengaduan. Sedangkan, yang saat ini masih berproses sebanyak 7 kasus pengaduan. Pengaduan yang dinyatakan dalam proses
                            merupakan pengaduan yang masih menunggu kelengkapan data dari konsumen, dalam proses analisis dokumen, menunggu klarifikasi dari 
                            pelaku usaha atau konsumen, dan juga sedang dalam proses mediasi. Dia menjelaskan, pengaduan tidak diproses jika konsumen sudah
                            menyampaikan pengaduan yang sama ke lembaga lain seperti Badan Penyelesaian Sengketa Konsumen (BPSK), pengadilan negeri, atau ke 
                            kepolisian. Baca juga: Ditopang E-commerce dan MRT, Ekonomi Jakarta Diproyeksi Tembus 6 Persen Tahun Depan Veri menambahkan, 
                            selama periode Januari-Desember 2021, aplikasi pesan Whatsapp menjadi saluran layanan pengaduan konsumen yang paling banyak 
                            digunakan yaitu sebanyak 8.511 pengaduan. Saluran terbanyak selanjutnya adalah surat elektronik (e-mail) 585 pengaduan, 
                            situs web 268 pengaduan, datang langsung 8 pengaduan, surat 5 pengaduan, dan telepon 16 pengaduan. “Penyelesaian pengaduan 
                            konsumen akan terus ditingkatkan sebagai wujud pemerintah hadir dalam melindungi konsumen Indonesia dan menciptakan konsumen
                            berdaya, serta pelaku usaha yang tertib,” pungkas Veri."
        ));

        $berita2 = Berita::create(array(
            'admin_id' => 2,
            'judulBerita' => "Ini Masalah yang Paling Banyak Diadukan Konsumen ke Kemendag",
            'photo' => "asset/berita2.jpg",
            'isiBerita' => "JAKARTA, KOMPAS.com - Direktur Jenderal Perlindungan Konsumen dan Tertib Niaga(PKTN) Veri Anggrijono mengatakan, 
                            Kementerian Perdagangan melalui Direktorat Jenderal PKTN terus menjamin adanya kepastian hukum dalam memberikan perlindungan kepada 
                            seluruh konsumen Indonesia. Dia memaparkan, pada 2021, tercatat adanya 9.393 layanan pengaduan konsumen. Jumlah ini naik 10 kali lipat 
                            dibandingkan tahun sebelumnya, yaitu sebanyak 931 layanan pengaduan. “Sebanyak 95,3 persen atau 8.949 konsumen membuat pengaduan 
                            di sektor niaga elektronik/niaga-el (e-commerce). Banyaknya pengaduan di sektor ini seiring makin intensifnya transaksi elektronik
                            konsumen selama pandemi Covid-19,” kata Veri dalam siaran resminya dikutip Kompas.com, Senin (10/1/2022). 
                            Baca juga: Airlangga: Transaksi E-commerce Diproyeksi Naik Jadi Rp 395 Triliun pada 2021 Pengaduan di sektor niaga-el, 
                            lanjut Veri, meliputi sektor makanan dan minuman, jasa transportasi, pengembalian dana (refund), pembelian barang yang tidak
                            sesuai dengan perjanjian atau rusak, barang tidak diterima konsumen, pembatalan sepihak oleh pelaku usaha, waktu 
                            kedatangan barang tidak sesuai dengan yang dijanjikan, penipuan belanja daring, serta penggunaan aplikasi media sosialyang 
                            tidak berfungsi. Veri menuturkan, dari total pengaduan konsumen, Kemendag telah menyelesaikan 99,2 persen pengaduan atau sebanyak
                            9.318 pengaduan. Sedangkan, yang saat ini masih berproses sebanyak 7 kasus pengaduan. Pengaduan yang dinyatakan dalam proses
                            merupakan pengaduan yang masih menunggu kelengkapan data dari konsumen, dalam proses analisis dokumen, menunggu klarifikasi dari 
                            pelaku usaha atau konsumen, dan juga sedang dalam proses mediasi. Dia menjelaskan, pengaduan tidak diproses jika konsumen sudah
                            menyampaikan pengaduan yang sama ke lembaga lain seperti Badan Penyelesaian Sengketa Konsumen (BPSK), pengadilan negeri, atau ke 
                            kepolisian. Baca juga: Ditopang E-commerce dan MRT, Ekonomi Jakarta Diproyeksi Tembus 6 Persen Tahun Depan Veri menambahkan, 
                            selama periode Januari-Desember 2021, aplikasi pesan Whatsapp menjadi saluran layanan pengaduan konsumen yang paling banyak 
                            digunakan yaitu sebanyak 8.511 pengaduan. Saluran terbanyak selanjutnya adalah surat elektronik (e-mail) 585 pengaduan, 
                            situs web 268 pengaduan, datang langsung 8 pengaduan, surat 5 pengaduan, dan telepon 16 pengaduan. “Penyelesaian pengaduan 
                            konsumen akan terus ditingkatkan sebagai wujud pemerintah hadir dalam melindungi konsumen Indonesia dan menciptakan konsumen
                            berdaya, serta pelaku usaha yang tertib,” pungkas Veri."
        ));
    
        $berita3 = Berita::create(array(
            'admin_id' => 3,
            'judulBerita' => "Pengaduan Konsumen E-Commerce dan Jasa Keuangan Melonjak Sepanjang 2020",
            'photo' => "asset/berita3.jpg",
            'isiBerita' => "JAKARTA, KOMPAS.com - Direktur Jenderal Perlindungan Konsumen dan Tertib Niaga(PKTN) Veri Anggrijono mengatakan, 
                            Kementerian Perdagangan melalui Direktorat Jenderal PKTN terus menjamin adanya kepastian hukum dalam memberikan perlindungan kepada 
                            seluruh konsumen Indonesia. Dia memaparkan, pada 2021, tercatat adanya 9.393 layanan pengaduan konsumen. Jumlah ini naik 10 kali lipat 
                            dibandingkan tahun sebelumnya, yaitu sebanyak 931 layanan pengaduan. “Sebanyak 95,3 persen atau 8.949 konsumen membuat pengaduan 
                            di sektor niaga elektronik/niaga-el (e-commerce). Banyaknya pengaduan di sektor ini seiring makin intensifnya transaksi elektronik
                            konsumen selama pandemi Covid-19,” kata Veri dalam siaran resminya dikutip Kompas.com, Senin (10/1/2022). 
                            Baca juga: Airlangga: Transaksi E-commerce Diproyeksi Naik Jadi Rp 395 Triliun pada 2021 Pengaduan di sektor niaga-el, 
                            lanjut Veri, meliputi sektor makanan dan minuman, jasa transportasi, pengembalian dana (refund), pembelian barang yang tidak
                            sesuai dengan perjanjian atau rusak, barang tidak diterima konsumen, pembatalan sepihak oleh pelaku usaha, waktu 
                            kedatangan barang tidak sesuai dengan yang dijanjikan, penipuan belanja daring, serta penggunaan aplikasi media sosialyang 
                            tidak berfungsi. Veri menuturkan, dari total pengaduan konsumen, Kemendag telah menyelesaikan 99,2 persen pengaduan atau sebanyak
                            9.318 pengaduan. Sedangkan, yang saat ini masih berproses sebanyak 7 kasus pengaduan. Pengaduan yang dinyatakan dalam proses
                            merupakan pengaduan yang masih menunggu kelengkapan data dari konsumen, dalam proses analisis dokumen, menunggu klarifikasi dari 
                            pelaku usaha atau konsumen, dan juga sedang dalam proses mediasi. Dia menjelaskan, pengaduan tidak diproses jika konsumen sudah
                            menyampaikan pengaduan yang sama ke lembaga lain seperti Badan Penyelesaian Sengketa Konsumen (BPSK), pengadilan negeri, atau ke 
                            kepolisian. Baca juga: Ditopang E-commerce dan MRT, Ekonomi Jakarta Diproyeksi Tembus 6 Persen Tahun Depan Veri menambahkan, 
                            selama periode Januari-Desember 2021, aplikasi pesan Whatsapp menjadi saluran layanan pengaduan konsumen yang paling banyak 
                            digunakan yaitu sebanyak 8.511 pengaduan. Saluran terbanyak selanjutnya adalah surat elektronik (e-mail) 585 pengaduan, 
                            situs web 268 pengaduan, datang langsung 8 pengaduan, surat 5 pengaduan, dan telepon 16 pengaduan. “Penyelesaian pengaduan 
                            konsumen akan terus ditingkatkan sebagai wujud pemerintah hadir dalam melindungi konsumen Indonesia dan menciptakan konsumen
                            berdaya, serta pelaku usaha yang tertib,” pungkas Veri."
        ));

        $uupk1 = Uupk::create(array(
            'admin_id' => 1,
            'nomorUU' => "8 TAHUN 1999",
            'bab' => "1",
            'judulBab' => "KETENTUAN UMUM",
            'pasal' => "1",
            'isi' => "Dalam Undang-undang ini yang dimaksud dengan:
                    1. Perlindungan konsumen adalah segala upaya yang menjamin adanya
                    kepastian hukum untuk memberi perlindungan kepada konsumen.
                    2. Konsumen adalah setiap orang pemakai barang dan/atau jasa yang
                    tersedia dalam masyarakat, baik bagi kepentingan diri sendiri,
                    keluarga, orang lain, maupun makhluk hidup lain dan tidak untuk
                    diperdagangkan.
                    3. Pelaku usaha adalah setiap orang perseorangan atau badan usaha,
                    baik yang berbentuk badan hukum maupun bukan badan hukum
                    yang didirikan dan berkedudukan atau melakukan kegiatan dalam
                    wilayah hukum negara Republik Indonesia, baik sendiri maupun
                    bersama-sama melalui perjanjian penyelenggaraan kegiatan usaha
                    dalam berbagai bidang ekonomi.
                    4. Barang adalah setiap benda baik berwujud maupun tidak berwujud,
                    baik bergerak maupun tidak bergerak, dapat dihabiskan maupun
                    tidak dapat dihabiskan, yang dapat untuk diperdagangkan, dipakai,
                    dipergunakan, atau dimanfaatkan oleh konsumen.
                    5. Jasa adalah setiap layanan yang berbentuk pekerjaan atau prestasi
                    yang disediakan bagi masyarakat untuk dimanfaatkan oleh
                    konsumen.
                    6. Promosi adalah kegiatan pengenalan atau penyebarluasan informasi
                    suatu barang dan/atau untuk menarik minat beli konsumen terhadap
                    barang dan atau jasa yang akan dan sedang diperdagangkan.
                    7. Impor barang adalah kegiatan memasukkan barang ke dalam daerah
                    pabean.
                    8. Impor jasa adalah kegiatan penyediaan jasa asing untuk digunakan
                    di dalam wilayah Republik Indonesia.
                    9. Lembaga Perlindungan Konsumen Swadaya Masyarakat adalah
                    lembaga non-Pemerintah yang terdaftar dan diakui oleh Pemerintah
                    yang mempunyai kegiatan menangani perlindungan konsumen.
                    10. Klausula Baku adalah setiap aturan atau ketentuan dan syarat-syarat
                    yang telah dipersiapkan dan ditetapkan terlebih dahulu secara
                    sepihak oleh pelaku usaha yang dituangkan dalam suatu dokumen
                    dan/atau perjanjian yang mengikat dan wajib dipenuhi oleh
                    konsumen.
                    11. Badan Penyelesaian Sengketa Konsumen adalah badan yang
                    bertugas menangani dan menyelesaikan sengketa antara pelaku
                    usaha dan konsumen.
                    12. Badan Perlindungan Konsumen Nasional adalah badan yang
                    dibentuk untuk membantu upaya pengembangan perlindungan
                    konsumen.
                    13. Menteri adalah menteri yang ruang lingkup tugas dan tanggung 
                    jawabnya meliputi bidang perdagangan.",
        ));

        $uupk2 = Uupk::create(array(
            'admin_id' => 1,
            'nomorUU' => "8 TAHUN 1999",
            'bab' => "2",
            'judulBab' => "ASAS DAN TUJUAN",
            'pasal' => "2",
            'isi' => "Perlindungan konsumen berasaskan manfaat, keadilan, keseimbangan, keamanan dan keselamatan konsumen, serta kepastian hukum.",
        ));

        $uupk3 = Uupk::create(array(
            'admin_id' => 1,
            'nomorUU' => "8 TAHUN 1999",
            'bab' => "2",
            'judulBab' => "ASAS DAN TUJUAN",
            'pasal' => "3",
            'isi' => "Perlindungan konsumen bertujuan:
                    a. meningkatkan kesadaran, kemampuan dan kemandirian konsumen untuk melindungi diri;
                    b. mengangkat harkat dan martabat konsumen dengan cara menghindarkannya dari ekses negatif pemakaian barang dan/atau jasa;
                    c. meningkatkan pemberdayaan konsumen dalam memilih, menentukan, dan menuntut hak-haknya sebagai konsumen;
                    d. menciptakan sistem perlindungan konsumen yang mengandung unsur kepastian hukum dan keterbukaan informasi serta akses untuk mendapatkan informasi;
                    e. menumbuhkan kesadaran pelaku usaha mengenai pentingnya perlindungan konsumen sehingga tumbuh sikap yang jujur dan bertanggungjawab dalam berusaha;
                    f. meningkatkan kualitas barang dan/atau jasa yang menjamin kelangsungan usaha produksi barang dan/atau jasa, kesehatan, kenyamanan, keamanan, dan keselamatan konsumen.",
        ));

        $uupk4 = Uupk::create(array(
            'admin_id' => 1,
            'nomorUU' => "8 TAHUN 1999",
            'bab' => "2",
            'judulBab' => "ASAS DAN TUJUAN",
            'pasal' => "4",
            'isi' => "Hak konsumen adalah:
                    a. hak atas kenyamanan, keamanan, dan keselamatan dalam mengkonsumsi barang dan/atau jasa;
                    b. hak untuk memilih barang dan/atau jasa serta mendapatkan barang dan/atau jasa tersebut sesuai dengan nilai tukar dan kondisi serta jaminan yang dijanjikan;
                    c. hak atas informasi yang benar, jelas, dan jujur mengenai konsidi dan jaminan barang dan/atau jasa;
                    d. hak untuk didengar pendapat dan keluhannya atas barang dan/atau jasa yang digunakan;
                    e. hak untuk mendapatkan advokasi, perlindungan, dan upaya penyelesaian sengketa perlindungan konsumen secara patut;
                    f. hak untuk mendapat pembinaan dan pendidikan konsumen;
                    g. hak untuk diperlakukan atau dilayani secara benar dan jujur serta tidak diskriminatif;
                    h. hak untuk mendapatkan kompensasi, ganti rugi dan/atau penggantian, apabila barang dan/atau jasa yang diterima tidak sesuai dengan perjanjian atau tidak sebagaimana mestinya;
                    i. hak-hak yang diatur dalam ketentuan peraturan perundang-undangan lainnya.",
        ));

        $uupk5 = Uupk::create(array(
            'admin_id' => 1,
            'nomorUU' => "8 TAHUN 1999",
            'bab' => "2",
            'judulBab' => "ASAS DAN TUJUAN",
            'pasal' => "5",
            'isi' => "Kewajiban konsumen adalah:
                    a. membaca atau mengikuti petunjuk informasi dan prosedur pemakaian atau pemanfaatan barang dan/atau jasa, demi keamanan dan keselamatan;
                    b. beritikad baik dalam melakukan transaksi pembelian barang dan/atau jasa;
                    c. membayar sesuai dengan nilai tukar yang disepakati;
                    d. mengikuti upaya penyelesaian hukum sengketa perlindungan konsumen secara patut.",
        ));

    }
}