<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Admin;
use App\Models\Pengaduan;
use App\Models\ResponPengaduan;
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
            'nik' => "3175052302000004",
            'namaLengkap' => "Febio Irsadad",
            'alamat' => "AKampung Asem",
            'noTelp' => "081282653997",
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
            'name' => "japran",
            'email' => "japran@test.com",
            'password' => bcrypt('123456'),
        ));

        $pengaduan1 = Pengaduan::create(array(
            'user_id' => $user1->id,
            'nama' => "febio",
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
            'created_at' => new \DateTime,
            'updated_at' => null,
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
            'created_at' => new \DateTime,
            'updated_at' => null,
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
            'created_at' => new \DateTime,
            'updated_at' => null,
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
            'created_at' => new \DateTime,
            'updated_at' => null,
        ));

        $pengaduan5 = Pengaduan::create(array(
            'user_id' => $user1->id,
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
            'created_at' => new \DateTime,
            'updated_at' => null,
        ));

        $pengaduan6 = Pengaduan::create(array(
            'user_id' => $user1->id,
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
            'created_at' => new \DateTime,
            'updated_at' => null,
        ));

        $pengaduan7 = Pengaduan::create(array(
            'user_id' => $user1->id,
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
            'created_at' => new \DateTime,
            'updated_at' => null,
        ));

        $pengaduan8 = Pengaduan::create(array(
            'user_id' => $user1->id,
            'nama' => "nanda",
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
            'created_at' => new \DateTime,
            'updated_at' => null,
        ));

        $pengaduan9 = Pengaduan::create(array(
            'user_id' => $user1->id,
            'nama' => "nisa",
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
            'created_at' => new \DateTime,
            'updated_at' => null,
        ));

        $pengaduan10 = Pengaduan::create(array(
            'user_id' => $user1->id,
            'nama' => "dinda",
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
            'created_at' => new \DateTime,
            'updated_at' => null,
        ));

        $pengaduan11 = Pengaduan::create(array(
            'user_id' => $user1->id,
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
            'created_at' => new \DateTime,
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
            'admin_id' => $admin2->id,
            'pengaduan_id' => $pengaduan8->id,
            'statusPengaduan' => "unresolved",
            'tanggalMediasi' => new \DateTime,
            'tempatMediasi' => "",
            'reportMediasi' => "",
        ));

        ResponPengaduan::create(array(
            'admin_id' => $admin2->id,
            'pengaduan_id' => $pengaduan9->id,
            'statusPengaduan' => "unresolved",
            'tanggalMediasi' => new \DateTime,
            'tempatMediasi' => "",
            'reportMediasi' => "",
        ));

        ResponPengaduan::create(array(
            'admin_id' => $admin2->id,
            'pengaduan_id' => $pengaduan10->id,
            'statusPengaduan' => "unresolved",
            'tanggalMediasi' => new \DateTime,
            'tempatMediasi' => "",
            'reportMediasi' => "",
        ));

        ResponPengaduan::create(array(
            'admin_id' => $admin2->id,
            'pengaduan_id' => $pengaduan11->id,
            'statusPengaduan' => "unresolved",
            'tanggalMediasi' => new \DateTime,
            'tempatMediasi' => "",
            'reportMediasi' => "",
        ));
    }
}