<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ParkirSedeer extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tbl_seeders')->insert([
            'no_pol' => 'ers1234',
            'kode_unik' => 'sdsfqwewrw243',
            'status' => '0',
            'jam_masuk' => '2022-05-01',
            'jam_keluar' => '2022-05-02',
            'id_tipe_kendaraan' => '1',
            'id_tarif' => '3000',
            'id_created' => '1',
            'id_updated' => '1',
        ]);
    }
}
