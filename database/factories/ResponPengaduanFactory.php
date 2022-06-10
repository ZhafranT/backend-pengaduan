<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

use App\Models\Admin;
use App\Models\Pengaduan;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\ResponPengaduan>
 */
class ResponPengaduanFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'admin_id' => Admin::all()->random()->id,
            'pengaduan_id' => Pengaduan::all()->random()->id,
            'statusPengaduan' => "unresolved",
            'tanggalMediasi' => new \DateTime,
            'tempatMediasi' => "",
            'reportMediasi' => "",
            // Pengaduan::all()->random()->id,
        ];
    }
}
