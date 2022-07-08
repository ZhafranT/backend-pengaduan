<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Admin;
use App\Models\Pengaduan;
use App\Models\ResponPengaduan;
use App\Models\Uupk;
use App\Models\Berita;
use Faker\Factory as Faker;

class DataSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // User::factory(10)->create();
        // Admin::factory(3)->create();
        // Pengaduan::factory(50)->create();
        // ResponPengaduan::factory(50)->create();

        $user1 = User::create(array(
            'email' => "irsadadf@gmail.com",
            'nik' => "3175052302000009",
            'namaLengkap' => "Febio Irsadad",
            'alamat' => "Kampung Asem",
            'noTelp' => "081282653991",
            'gender' => "Pria",
            'password' => bcrypt('123456'),
            'token' => null,
        ));

        $user2 = User::create(array(
            'email' => "zhafran@gmail.com",
            'nik' => "3175052302000008",
            'namaLengkap' => "Muhammad Zhafran Tosa",
            'alamat' => "Cakung",
            'noTelp' => "081282653992",
            'gender' => "Pria",
            'password' => bcrypt('123456'),
            'token' => null,
        ));

        $user3 = User::create(array(
            'email' => "pashadidan@gmail.com",
            'nik' => "3175052302000007",
            'namaLengkap' => "Pashadidan Fadhillah",
            'alamat' => "Rawamangun",
            'noTelp' => "081282653993",
            'gender' => "Pria",
            'password' => bcrypt('123456'),
            'token' => null,
        ));

        $admin1 = Admin::create(array(
            'name' => "test",
            'email' => "admin@test.com",
            'password' => bcrypt('123456'),
        ));

        $admin2 = Admin::create(array(
            'name' => "febio",
            'email' => "febio@test.com",
            'password' => bcrypt('123456'),
        ));

        $admin3 = Admin::create(array(
            'name' => "zhafran",
            'email' => "zhafran@test.com",
            'password' => bcrypt('123456'),
        ));

        $admin4 = Admin::create(array(
            'name' => "pashadidan",
            'email' => "pashadidan@test.com",
            'password' => bcrypt('123456'),
        ));

        $pengaduan1 = Pengaduan::create(array(
            'user_id' => $user1->id,
            'nama' => "febio",
            'jenisKelamin' => "pria",
            'tanggalLahir' => new \DateTime,
            'noIdentitas' => "3175052302000009",
            'telepon' => "082137437482",
            'email' => "apaaja@mail.com",
            'alamat' => "jl. jalan 123",
            'provinsi' => "jakarta selatan",
            'kotaKabupaten' => "jakarta",
            'kodePos' => "13770",
            'alamatTempatBarangJasa' => "jalan jalan 146",
            'teleponPelakuUsaha' => "432894723932",
            'provinsiPelakuUsaha' => "salatiga",
            'kotaKabupatenPelakuUsaha' => "salatiga",
            'kodePosPelakuUsaha' => "127780",
            'jenisProduk' => "elektronik",
            'detailProduk' => "tv 32 inch",
            'merkDagang' => "aaa",
            'type' => "aaa",
            'jenisPengaduan' => "aaa",
            'waktuKejadianDitemukan' => new \DateTime,
            'tempatLokasiKejadian' => "null",
            'saksi' => "uyriweuhw",
            'kerugianMaterial' => "uyriweuhw",
            'kerugianFisik' => "uyriweuhw",
            'kerugianPsikis' => "uyriweuhw",
            'jenisTuntutan' => "uyriweuhw",
            'buktiPembelian' => 'asset/portrait.jpg',
            'kronologisPengaduan' => "efufheuaihfuiashfuihfdiauhfisabfdjahfiuwhdfruiwahfaiusfbniasufhwiuadhiwusfhbsiajfhasifhasiudfch ufhdsfhiusdfhuidshfuisdfhuisdhfis"
        ));

        $pengaduan2 = Pengaduan::create(array(
            'user_id' => $user1->id,
            'nama' => "japran",
            'jenisKelamin' => "wanita",
            'tanggalLahir' => new \DateTime,
            'noIdentitas' => "3472834623843",
            'telepon' => "082137437482",
            'email' => "apaaja@mail.com",
            'alamat' => "jl. jalan 123",
            'provinsi' => "jakarta selatan",
            'kotaKabupaten' => "jakarta",
            'kodePos' => "13770",
            'alamatTempatBarangJasa' => "jalan jalan 146",
            'teleponPelakuUsaha' => "432894723932",
            'provinsiPelakuUsaha' => "salatiga",
            'kotaKabupatenPelakuUsaha' => "salatiga",
            'kodePosPelakuUsaha' => "127780",
            'jenisProduk' => "elektronik",
            'detailProduk' => "tv 32 inch",
            'merkDagang' => "aaa",
            'type' => "aaa",
            'jenisPengaduan' => "aaa",
            'waktuKejadianDitemukan' => new \DateTime,
            'tempatLokasiKejadian' => "null",
            'saksi' => "uyriweuhw",
            'kerugianMaterial' => "uyriweuhw",
            'kerugianFisik' => "uyriweuhw",
            'kerugianPsikis' => "uyriweuhw",
            'jenisTuntutan' => "uyriweuhw",
            'buktiPembelian' => 'asset/landscape.jpg',
            'kronologisPengaduan' => "efufheuaihfuiashfuihfdiauhfisabfdjahfiuwhdfruiwahfaiusfbniasufhwiuadhiwusfhbsiajfhasifhasiudfch ufhdsfhiusdfhuidshfuisdfhuisdhfis"
        ));

        $pengaduan3 = Pengaduan::create(array(
            'user_id' => $user1->id,
            'nama' => "didan",
            'jenisKelamin' => "wanita",
            'tanggalLahir' => new \DateTime,
            'noIdentitas' => "3472834623843",
            'telepon' => "082137437482",
            'email' => "apaaja@mail.com",
            'alamat' => "jl. jalan 123",
            'provinsi' => "jakarta selatan",
            'kotaKabupaten' => "jakarta",
            'kodePos' => "13770",
            'alamatTempatBarangJasa' => "jalan jalan 146",
            'teleponPelakuUsaha' => "432894723932",
            'provinsiPelakuUsaha' => "salatiga",
            'kotaKabupatenPelakuUsaha' => "salatiga",
            'kodePosPelakuUsaha' => "127780",
            'jenisProduk' => "elektronik",
            'detailProduk' => "tv 32 inch",
            'merkDagang' => "aaa",
            'type' => "aaa",
            'jenisPengaduan' => "aaa",
            'waktuKejadianDitemukan' => new \DateTime,
            'tempatLokasiKejadian' => "null",
            'saksi' => "uyriweuhw",
            'kerugianMaterial' => "uyriweuhw",
            'kerugianFisik' => "uyriweuhw",
            'kerugianPsikis' => "uyriweuhw",
            'jenisTuntutan' => "uyriweuhw",
            'buktiPembelian' => 'asset/logo-kemendag.png',
            'kronologisPengaduan' => "efufheuaihfuiashfuihfdiauhfisabfdjahfiuwhdfruiwahfaiusfbniasufhwiuadhiwusfhbsiajfhasifhasiudfch ufhdsfhiusdfhuidshfuisdfhuisdhfis"
        ));

        $pengaduan4 = Pengaduan::create(array(
            'user_id' => $user1->id,
            'nama' => "aldi",
            'jenisKelamin' => "wanita",
            'tanggalLahir' => new \DateTime,
            'noIdentitas' => "3472834623843",
            'telepon' => "082137437482",
            'email' => "apaaja@mail.com",
            'alamat' => "jl. jalan 123",
            'provinsi' => "jakarta selatan",
            'kotaKabupaten' => "jakarta",
            'kodePos' => "13770",
            'alamatTempatBarangJasa' => "jalan jalan 146",
            'teleponPelakuUsaha' => "432894723932",
            'provinsiPelakuUsaha' => "salatiga",
            'kotaKabupatenPelakuUsaha' => "salatiga",
            'kodePosPelakuUsaha' => "127780",
            'jenisProduk' => "hadcsd",
            'detailProduk' => "efwfiefwa",
            'merkDagang' => "fewfwefef",
            'type' => "fewoiffew",
            'jenisPengaduan' => "fpwefowfjp",
            'waktuKejadianDitemukan' => new \DateTime,
            'tempatLokasiKejadian' => "null",
            'saksi' => "uyriweuhw",
            'kerugianMaterial' => "uyriweuhw",
            'kerugianFisik' => "uyriweuhw",
            'kerugianPsikis' => "uyriweuhw",
            'jenisTuntutan' => "uyriweuhw",
            'buktiPembelian' => 'asset/square.webp',
            'kronologisPengaduan' => "efufheuaihfuiashfuihfdiauhfisabfdjahfiuwhdfruiwahfaiusfbniasufhwiuadhiwusfhbsiajfhasifhasiudfch ufhdsfhiusdfhuidshfuisdfhuisdhfis"
        ));

        $pengaduan5 = Pengaduan::create(array(
            'user_id' => $user2->id,
            'nama' => "lukman",
            'jenisKelamin' => "pria",
            'tanggalLahir' => new \DateTime,
            'noIdentitas' => "3472834623843",
            'telepon' => "082137437482",
            'email' => "apaaja@mail.com",
            'alamat' => "jl. jalan 123",
            'provinsi' => "jakarta selatan",
            'kotaKabupaten' => "jakarta",
            'kodePos' => "13770",
            'alamatTempatBarangJasa' => "jalan jalan 146",
            'teleponPelakuUsaha' => "432894723932",
            'provinsiPelakuUsaha' => "salatiga",
            'kotaKabupatenPelakuUsaha' => "salatiga",
            'kodePosPelakuUsaha' => "127780",
            'jenisProduk' => "hadcsd",
            'detailProduk' => "efwfiefwa",
            'merkDagang' => "fewfwefef",
            'type' => "fewoiffew",
            'jenisPengaduan' => "fpwefowfjp",
            'waktuKejadianDitemukan' => new \DateTime,
            'tempatLokasiKejadian' => "null",
            'saksi' => "uyriweuhw",
            'kerugianMaterial' => "uyriweuhw",
            'kerugianFisik' => "uyriweuhw",
            'kerugianPsikis' => "uyriweuhw",
            'jenisTuntutan' => "uyriweuhw",
            'buktiPembelian' => 'asset/profilepic.webp',
            'kronologisPengaduan' => "efufheuaihfuiashfuihfdiauhfisabfdjahfiuwhdfruiwahfaiusfbniasufhwiuadhiwusfhbsiajfhasifhasiudfch ufhdsfhiusdfhuidshfuisdfhuisdhfis",
        ));

        $pengaduan6 = Pengaduan::create(array(
            'user_id' => $user2->id,
            'nama' => "farid",
            'jenisKelamin' => "pria",
            'tanggalLahir' => new \DateTime,
            'noIdentitas' => "3472834623843",
            'telepon' => "082137437482",
            'email' => "apaaja@mail.com",
            'alamat' => "jl. jalan 123",
            'provinsi' => "jakarta selatan",
            'kotaKabupaten' => "jakarta",
            'kodePos' => "13770",
            'alamatTempatBarangJasa' => "jalan jalan 146",
            'teleponPelakuUsaha' => "432894723932",
            'provinsiPelakuUsaha' => "salatiga",
            'kotaKabupatenPelakuUsaha' => "salatiga",
            'kodePosPelakuUsaha' => "127780",
            'jenisProduk' => "hadcsd",
            'detailProduk' => "efwfiefwa",
            'merkDagang' => "fewfwefef",
            'type' => "fewoiffew",
            'jenisPengaduan' => "fpwefowfjp",
            'waktuKejadianDitemukan' => new \DateTime,
            'tempatLokasiKejadian' => "null",
            'saksi' => "uyriweuhw",
            'kerugianMaterial' => "uyriweuhw",
            'kerugianFisik' => "uyriweuhw",
            'kerugianPsikis' => "uyriweuhw",
            'jenisTuntutan' => "uyriweuhw",
            'created_at' => "2022-05-13 10:37:22",
            'updated_at' => null,
        ));

        $pengaduan7 = Pengaduan::create(array(
            'user_id' => $user2->id,
            'nama' => "farhan",
            'jenisKelamin' => "wanita",
            'tanggalLahir' => new \DateTime,
            'noIdentitas' => "3472834623843",
            'telepon' => "082137437482",
            'email' => "apaaja@mail.com",
            'alamat' => "jl. jalan 123",
            'provinsi' => "jakarta selatan",
            'kotaKabupaten' => "jakarta",
            'kodePos' => "13770",
            'alamatTempatBarangJasa' => "jalan jalan 146",
            'teleponPelakuUsaha' => "432894723932",
            'provinsiPelakuUsaha' => "salatiga",
            'kotaKabupatenPelakuUsaha' => "salatiga",
            'kodePosPelakuUsaha' => "127780",
            'jenisProduk' => "elektronik",
            'detailProduk' => "tv 32 inch",
            'merkDagang' => "aaa",
            'type' => "aaa",
            'jenisPengaduan' => "aaa",
            'waktuKejadianDitemukan' => new \DateTime,
            'tempatLokasiKejadian' => "null",
            'saksi' => "uyriweuhw",
            'kerugianMaterial' => "uyriweuhw",
            'kerugianFisik' => "uyriweuhw",
            'kerugianPsikis' => "uyriweuhw",
            'jenisTuntutan' => "uyriweuhw",
            'created_at' => "2022-05-13 10:37:22",
            'updated_at' => null,
        ));

        $pengaduan8 = Pengaduan::create(array(
            'user_id' => $user3->id,
            'nama' => "arah",
            'jenisKelamin' => "wanita",
            'tanggalLahir' => new \DateTime,
            'noIdentitas' => "3472834623843",
            'telepon' => "082137437482",
            'email' => "apaaja@mail.com",
            'alamat' => "jl. jalan 123",
            'provinsi' => "jakarta selatan",
            'kotaKabupaten' => "jakarta",
            'kodePos' => "13770",
            'alamatTempatBarangJasa' => "jalan jalan 146",
            'teleponPelakuUsaha' => "432894723932",
            'provinsiPelakuUsaha' => "salatiga",
            'kotaKabupatenPelakuUsaha' => "salatiga",
            'kodePosPelakuUsaha' => "127780",
            'jenisProduk' => "elektronik",
            'detailProduk' => "tv 32 inch",
            'merkDagang' => "aaa",
            'type' => "aaa",
            'jenisPengaduan' => "aaa",
            'waktuKejadianDitemukan' => new \DateTime,
            'tempatLokasiKejadian' => "null",
            'saksi' => "uyriweuhw",
            'kerugianMaterial' => "uyriweuhw",
            'kerugianFisik' => "uyriweuhw",
            'kerugianPsikis' => "uyriweuhw",
            'jenisTuntutan' => "uyriweuhw",
            'created_at' => "2022-05-13 10:37:22",
            'updated_at' => null,
        ));

        $pengaduan9 = Pengaduan::create(array(
            'user_id' => $user3->id,
            'nama' => "tifanto",
            'jenisKelamin' => "wanita",
            'tanggalLahir' => new \DateTime,
            'noIdentitas' => "3472834623843",
            'telepon' => "082137437482",
            'email' => "apaaja@mail.com",
            'alamat' => "jl. jalan 123",
            'provinsi' => "jakarta selatan",
            'kotaKabupaten' => "jakarta",
            'kodePos' => "13770",
            'alamatTempatBarangJasa' => "jalan jalan 146",
            'teleponPelakuUsaha' => "432894723932",
            'provinsiPelakuUsaha' => "salatiga",
            'kotaKabupatenPelakuUsaha' => "salatiga",
            'kodePosPelakuUsaha' => "127780",
            'jenisProduk' => "elektronik",
            'detailProduk' => "tv 32 inch",
            'merkDagang' => "aaa",
            'type' => "aaa",
            'jenisPengaduan' => "aaa",
            'waktuKejadianDitemukan' => new \DateTime,
            'tempatLokasiKejadian' => "null",
            'saksi' => "uyriweuhw",
            'kerugianMaterial' => "uyriweuhw",
            'kerugianFisik' => "uyriweuhw",
            'kerugianPsikis' => "uyriweuhw",
            'jenisTuntutan' => "uyriweuhw",
            'created_at' => "2022-07-13 10:37:22",
            'updated_at' => null,
        ));

        $pengaduan10 = Pengaduan::create(array(
            'user_id' => $user3->id,
            'nama' => "jabry",
            'jenisKelamin' => "wanita",
            'tanggalLahir' => new \DateTime,
            'noIdentitas' => "3472834623843",
            'telepon' => "082137437482",
            'email' => "apaaja@mail.com",
            'alamat' => "jl. jalan 123",
            'provinsi' => "jakarta selatan",
            'kotaKabupaten' => "jakarta",
            'kodePos' => "13770",
            'alamatTempatBarangJasa' => "jalan jalan 146",
            'teleponPelakuUsaha' => "432894723932",
            'provinsiPelakuUsaha' => "salatiga",
            'kotaKabupatenPelakuUsaha' => "salatiga",
            'kodePosPelakuUsaha' => "127780",
            'jenisProduk' => "hadcsd",
            'detailProduk' => "efwfiefwa",
            'merkDagang' => "fewfwefef",
            'type' => "fewoiffew",
            'jenisPengaduan' => "fpwefowfjp",
            'waktuKejadianDitemukan' => new \DateTime,
            'tempatLokasiKejadian' => "null",
            'saksi' => "uyriweuhw",
            'kerugianMaterial' => "uyriweuhw",
            'kerugianFisik' => "uyriweuhw",
            'kerugianPsikis' => "uyriweuhw",
            'jenisTuntutan' => "uyriweuhw",
            'created_at' => "2022-07-13 10:37:22",
            'updated_at' => null,
        ));

        $pengaduan11 = Pengaduan::create(array(
            'user_id' => $user3->id,
            'nama' => "irsadad",
            'jenisKelamin' => "pria",
            'tanggalLahir' => new \DateTime,
            'noIdentitas' => "3472834623843",
            'telepon' => "082137437482",
            'email' => "apaaja@mail.com",
            'alamat' => "jl. jalan 123",
            'provinsi' => "jakarta selatan",
            'kotaKabupaten' => "jakarta",
            'kodePos' => "13770",
            'alamatTempatBarangJasa' => "jalan jalan 146",
            'teleponPelakuUsaha' => "432894723932",
            'provinsiPelakuUsaha' => "salatiga",
            'kotaKabupatenPelakuUsaha' => "salatiga",
            'kodePosPelakuUsaha' => "127780",
            'jenisProduk' => "hadcsd",
            'detailProduk' => "efwfiefwa",
            'merkDagang' => "fewfwefef",
            'type' => "fewoiffew",
            'jenisPengaduan' => "fpwefowfjp",
            'waktuKejadianDitemukan' => new \DateTime,
            'tempatLokasiKejadian' => "null",
            'saksi' => "uyriweuhw",
            'kerugianMaterial' => "uyriweuhw",
            'kerugianFisik' => "uyriweuhw",
            'kerugianPsikis' => "uyriweuhw",
            'jenisTuntutan' => "uyriweuhw",
            'created_at' => "2022-08-13 10:37:22",
            'updated_at' => null,
        ));

        ResponPengaduan::create(array(
            'admin_id' => $admin1->id,
            'pengaduan_id' => $pengaduan1->id,
            'statusPengaduan' => "unresolved",
            'tanggalMediasi' => new \DateTime,
            'tempatMediasi' => "",
            'reportMediasi' => "",
        ));
        ResponPengaduan::create(array(
            'admin_id' => $admin1->id,
            'pengaduan_id' => $pengaduan2->id,
            'statusPengaduan' => "unresolved",
            'tanggalMediasi' => new \DateTime,
            'tempatMediasi' => "",
            'reportMediasi' => "",
        ));
        ResponPengaduan::create(array(
            'admin_id' => $admin1->id,
            'pengaduan_id' => $pengaduan3->id,
            'statusPengaduan' => "unresolved",
            'tanggalMediasi' => new \DateTime,
            'tempatMediasi' => "",
            'reportMediasi' => "",
        ));

        ResponPengaduan::create(array(
            'admin_id' => $admin1->id,
            'pengaduan_id' => $pengaduan4->id,
            'statusPengaduan' => "unresolved",
            'tanggalMediasi' => new \DateTime,
            'tempatMediasi' => "",
            'reportMediasi' => "",
        ));

        ResponPengaduan::create(array(
            'admin_id' => $admin1->id,
            'pengaduan_id' => $pengaduan5->id,
            'statusPengaduan' => "unresolved",
            'tanggalMediasi' => new \DateTime,
            'tempatMediasi' => "",
            'reportMediasi' => "",
        ));

        ResponPengaduan::create(array(
            'admin_id' => $admin1->id,
            'pengaduan_id' => $pengaduan6->id,
            'statusPengaduan' => "unresolved",
            'tanggalMediasi' => new \DateTime,
            'tempatMediasi' => "",
            'reportMediasi' => "",
        ));

        ResponPengaduan::create(array(
            'admin_id' => $admin2->id,
            'pengaduan_id' => $pengaduan7->id,
            'statusPengaduan' => "unresolved",
            'tanggalMediasi' => new \DateTime,
            'tempatMediasi' => "",
            'reportMediasi' => "",
        ));

        ResponPengaduan::create(array(
            'admin_id' => $admin3->id,
            'pengaduan_id' => $pengaduan8->id,
            'statusPengaduan' => "unresolved",
            'tanggalMediasi' => new \DateTime,
            'tempatMediasi' => "",
            'reportMediasi' => "",
        ));

        ResponPengaduan::create(array(
            'admin_id' => $admin3->id,
            'pengaduan_id' => $pengaduan9->id,
            'statusPengaduan' => "unresolved",
            'tanggalMediasi' => new \DateTime,
            'tempatMediasi' => "",
            'reportMediasi' => "",
        ));

        ResponPengaduan::create(array(
            'admin_id' => $admin3->id,
            'pengaduan_id' => $pengaduan10->id,
            'statusPengaduan' => "unresolved",
            'tanggalMediasi' => new \DateTime,
            'tempatMediasi' => "",
            'reportMediasi' => "",
        ));

        ResponPengaduan::create(array(
            'admin_id' => $admin3->id,
            'pengaduan_id' => $pengaduan11->id,
            'statusPengaduan' => "unresolved",
            'tanggalMediasi' => new \DateTime,
            'tempatMediasi' => "",
            'reportMediasi' => "",
        ));

        $uupk1 = Uupk::create(array(
            'admin_id' =>  $admin1->id,
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
            'admin_id' =>  $admin1->id,
            'nomorUU' => "8 TAHUN 1999",
            'bab' => "2",
            'judulBab' => "ASAS DAN TUJUAN",
            'pasal' => "2",
            'isi' => "Perlindungan konsumen berasaskan manfaat, keadilan, keseimbangan, keamanan dan keselamatan konsumen, serta kepastian hukum.",
        ));

        $uupk3 = Uupk::create(array(
            'admin_id' =>  $admin1->id,
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
            'admin_id' =>  $admin1->id,
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
            'admin_id' =>  $admin1->id,
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