<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

use App\Models\Admin;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        Admin::create([
            'name' => 'admin',
            'email' => 'admin@test.com',
            'password' => Hash::make('123456'),
        ]);

        Admin::create([
            'name' => 'fran',
            'email' => 'fran@admin.com',
            'password' => Hash::make('123456'),
        ]);

        Admin::create([
            'name' => 'bio',
            'email' => 'febio@admin.com',
            'password' => Hash::make('bio123'),
        ]);
    }
}
