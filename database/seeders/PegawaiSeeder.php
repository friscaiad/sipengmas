<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

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
            [
                'nip' => '1001',
                'nama_lengkap' => 'Andhik Ampuh Yunanto',
                'role_id' => 2, 
                'email' => 'andhik@mail.com', 
                'password' => Hash::make('andhik')
            ],
            [
                'nip' => '1002',
                'nama_lengkap' => 'Mike Yuliana', 
                'role_id' => 1, 
                'email' => 'mike@mail.com', 
                'password' => Hash::make('mike')
            ],
            [
                'nip' => '1003', 
                'nama_lengkap' => 'Mohammad Zikky',
                'role_id' => 1, 
                'email' => 'zikky@mail.com', 
                'password' => Hash::make('zikky')
            ],
            [
                'nip' => '1004', 
                'nama_lengkap' => 'Mohamad Nasyir Tamara',
                'role_id' => 1, 
                'email' => 'nasyir@mail.com', 
                'password' => Hash::make('nasyir')
            ],
            [
                'nip' => '1005', 
                'nama_lengkap' => 'Farid Dwi Murdianto', 
                'role_id' => 1,
                'email' => 'farid@mail.com', 
                'password' => Hash::make('farid')
            ],
            [
                'nip' => '1006', 
                'nama_lengkap' => 'Maretha Ruswiansari', 
                'role_id' => 1,
                'email' => 'maretha@mail.com', 
                'password' => Hash::make('maretha')
            ],
            [
                'nip' => '1007', 
                'nama_lengkap' => 'Hero Yudo Martono', 
                'role_id' => 1,
                'email' => 'hero@mail.com', 
                'password' => Hash::make('hero')
            ],
            [
                'nip' => '1008', 
                'nama_lengkap' => 'Fadilah Fahrul Hardiansyah', 
                'role_id' => 1,
                'email' => 'fadilah@mail.com', 
                'password' => Hash::make('fadilah')
            ],
            [
                'nip' => '1009', 
                'nama_lengkap' => 'Iwan Syarif', 
                'role_id' => 1,
                'email' => 'iwan@mail.com', 
                'password' => Hash::make('iwan')
            ],
            [
                'nip' => '1010', 
                'nama_lengkap' => 'Bima Sena Bayu Dewantara', 
                'role_id' => 1,
                'email' => 'bima@mail.com', 
                'password' => Hash::make('bima')
            ],
            [
                'nip' => '1011', 
                'nama_lengkap' => 'Ida Anisah', 
                'role_id' => 1,
                'email' => 'ida@mail.com', 
                'password' => Hash::make('ida')
            ],
            [
                'nip' => '1012', 
                'nama_lengkap' => 'Reesa Akbar', 
                'role_id' => 1,
                'email' => 'reesa@mail.com', 
                'password' => Hash::make('reesa')
            ],
            [
                'nip' => '1013', 
                'nama_lengkap' => 'Joke Pratilastiarso',
                'role_id' => 1, 
                'email' => 'joke@mail.com', 
                'password' => Hash::make('joke')
            ],
            [
                'nip' => '1014', 
                'nama_lengkap' => 'Fardani Annisa Damastuti',
                'role_id' => 1, 
                'email' => 'fardani@mail.com', 
                'password' => Hash::make('fardani')
            ],
            [
                'nip' => '1015', 
                'nama_lengkap' => 'Muhammad Agus Zainuddin',
                'role_id' => 1, 
                'email' => 'agus@mail.com', 
                'password' => Hash::make('agus')
            ],
            [
                'nip' => '1016', 
                'nama_lengkap' => 'Arna Fariza',
                'role_id' => 1, 
                'email' => 'arna@mail.com', 
                'password' => Hash::make('arna')
            ],
            [
                'nip' => '1017', 
                'nama_lengkap' => 'Desy Intan Permatasari',
                'role_id' => 1, 
                'email' => 'desy@mail.com', 
                'password' => Hash::make('desy')
            ],
            [
                'nip' => '1018', 
                'nama_lengkap' => 'Entin Martiana',
                'role_id' => 1, 
                'email' => 'entin@mail.com', 
                'password' => Hash::make('entin')
            ],
            [
                'nip' => '1019', 
                'nama_lengkap' => 'admin',
                'role_id' => 2, 
                'email' => 'admin@admin.com', 
                'password' => Hash::make('admin')
            ]
        ]);
    }
}
