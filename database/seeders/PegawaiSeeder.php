<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class PegawaiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('pegawai')->insert([
            ['nip' => '10001' ,'nama_lengkap' => 'Lucky', 'role_id' => 1],
            ['nip' => '10002', 'nama_lengkap' => 'Epyk Sunarno', 'role_id' => 1],
            ['nip' => '10003', 'nama_lengkap' => 'Irianto', 'role_id' => 1],
            ['nip' => '10004', 'nama_lengkap' => 'Gigih Prabowo', 'role_id' => 1],
            ['nip' => '10005', 'nama_lengkap' => 'Ony', 'role_id' => 1],
            ['nip' => '10006', 'nama_lengkap' => 'Sutedjo', 'role_id' => 1],
            ['nip' => '10007', 'nama_lengkap' => 'Endro', 'role_id' => 1],
            ['nip' => '10008', 'nama_lengkap' => 'Ali', 'role_id' => 1],
            ['nip' => '10009', 'nama_lengkap' => 'Zainal', 'role_id' => 1],
            ['nip' => '10010', 'nama_lengkap' => 'Elizabeth', 'role_id' => 1],
            ['nip' => '10011', 'nama_lengkap' => 'Rika', 'role_id' => 1],
            ['nip' => '10012', 'nama_lengkap' => 'Artiarini', 'role_id' => 1],
            ['nip' => '10013', 'nama_lengkap' => 'Achmad Basuki', 'role_id' => 1],
            ['nip' => '10014', 'nama_lengkap' => 'Safrodin', 'role_id' => 1],
            ['nip' => '10015', 'nama_lengkap' => 'Hero', 'role_id' => 1],
            ['nip' => '10016', 'nama_lengkap' => 'Udin', 'role_id' => 1],
            ['nip' => '10017', 'nama_lengkap' => 'Rengga', 'role_id' => 1],
            ['nip' => '10018', 'nama_lengkap' => 'Andik', 'role_id' => 2]
        ]);
    }
}
