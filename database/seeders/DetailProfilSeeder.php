<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DetailProfilSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // insert data ke table pegawai
        DB::table('detail_profile')->insert([
            'address' => 'Nganjuk',
            'nomor_tlp'=> '08xxxxxx7699',
            'ttl' => '2003-09-29',
            'foto'=>'picture.png'
        ]);
    }
}
