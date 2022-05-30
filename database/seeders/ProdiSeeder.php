<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class ProdiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('prodi')->insert([
            ['nama_prodi' => 'D4 Teknik Elektronika'],
            ['nama_prodi' => 'D4 Teknik Telekomunikasi'],
            ['nama_prodi' => 'D4 Teknik Elektro Industri'],
            ['nama_prodi' => 'D3 Teknik Informatika'],
            ['nama_prodi' => 'D3 Teknik Komputer'],
            ['nama_prodi' => 'D3 Sains Data'],
            ['nama_prodi' => 'D4 Sistem Pembangkit Energi'],
            ['nama_prodi' => 'D4 Teknik Mekatronika'],
            ['nama_prodi' => 'D4 Teknologi Game'],
            ['nama_prodi' => 'D3 Teknologi Multimedia Broadcasting'],
        ]);
    }
}
