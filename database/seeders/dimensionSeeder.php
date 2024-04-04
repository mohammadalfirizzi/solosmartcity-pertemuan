<?php

namespace Database\Seeders;

use App\Models\Dimensi;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class dimensionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(): void
    {
        Dimensi::create([
            'judul'         => 'Museum Tumurun',
            'desc'          => 'Tumurun Private Museum adalah sebuah museum yang
                                berlokasi di tengah kota Surakarta, tepatnya di Jalan Kebangkitan Nasional 2/4,
                                Sriwedari, Kecamatan Laweyan, Kota Surakarta.',
            'subdimensi'    => 'Smart branding',
        ]);
    }
}
