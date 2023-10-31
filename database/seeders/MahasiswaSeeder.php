<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MahasiswaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('mahasiswas')->insert([
            'nim' => '10121195',
            'nama' => 'Tirta Samara',
            'jeniskelamin' => 'Laki-Laki',
            'notlpn' => '081284964533',
        ]);
    }
}
