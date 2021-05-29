<?php

namespace Database\Seeders;

use App\Models\Mahasiswa;
use Illuminate\Database\Seeder;

class MahasiswaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $mhs1 = new Mahasiswa();
        $mhs1->nbi = "1461900184";
        $mhs1->nama_mhs = "Hermawan Ali M";
        $mhs1->save();

        $mhs2 = new Mahasiswa();
        $mhs2->nbi = "1461900188";
        $mhs2->nama_mhs = "Brendan Eich";
        $mhs2->save();

    }
}
