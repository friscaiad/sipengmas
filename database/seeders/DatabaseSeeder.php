<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $p = new ProdiSeeder();
        $d = new DepartemenSeeder();
        $dp = new DepartemenProdiSeeder();
        $pers = new PeriodeSeeder();
        $s = new SkemaSeeder();
        $r = new RoleSeeder();
        $pes = new PegawaiSeeder();

        // import manually from csv

        // $pens = new PengmasSeeder();
        // $dps = new DaftarPengmasSeeder();

        $p->run();
        $d->run();
        $dp->run();
        $pers->run();
        $s->run();
        $r->run();
        $pes->run();
        // $pens->run();
        // $dps->run();
    }
}
