<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

use App\Models\User;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Pengaduan>
 */
class PengaduanFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'user_id' => User::all()->random()->id,
            'nama' => $this->faker->name(),
            'jenisKelamin' => $this->faker->randomElement($array = array ('male', 'female')),
            'tanggalLahir' => $this->faker->dateTime(),
            'noIdentitas' => $this->faker->nik(),
            'telepon' => $this->faker->phoneNumber(),
            'email' => $this->faker->unique()->safeEmail(),
            'alamat' => $this->faker->address(),
            'provinsi' => $this->faker->state(),
            'kotaKabupaten' => $this->faker->city(),
            'kodePos' => $this->faker->postcode(),
            'alamatTempatBarangJasa' => $this->faker->address(),
            'teleponPelakuUsaha' => $this->faker->phoneNumber(),
            'provinsiPelakuUsaha' => $this->faker->state(),
            'kotaKabupatenPelakuUsaha' => $this->faker->city(),
            'kodePosPelakuUsaha' => $this->faker->postcode(),
            'jenisProduk' => "elektronik",
            'detailProduk' => "tv 32 inch",
            'merkDagang' => "sony",
            'type' => "aaa",
            'jenisPengaduan' => "aaa",
            'waktuKejadianDitemukan' => $this->faker->dateTime(),
            'tempatLokasiKejadian' => $this->faker->address(),
            'saksi' => $this->faker->name(),
            'kerugianMaterial' => $this->faker->sentence(),
            'kerugianFisik' => $this->faker->sentence(),
            'kerugianPsikis' => $this->faker->sentence(),
            'jenisTuntutan' => "Pengembalian Uang",
            'buktiPembelian' => $this->faker->image(null, 640, 480),
            'kronologisPengaduan' => $this->faker->paragraph(),
        ];
    }
}
