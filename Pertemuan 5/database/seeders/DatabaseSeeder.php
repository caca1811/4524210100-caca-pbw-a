<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Setting;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        Setting::updateOrCreate(
            ['key' => 'home_kegiatan_per_page'],
            [
                'value' => '6',
                'type' => 'number',
                'description' => 'Jumlah kegiatan yang ditampilkan di beranda'
            ]
        );
    }
}