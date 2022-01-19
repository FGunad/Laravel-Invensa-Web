<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class LevelTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        DB::table('level')->insert([
            'nama_level' => 'administrator',
        ]);

        DB::table('level')->insert([
            'nama_level' => 'petugas',
        ]);

        DB::table('level')->insert([
            'nama_level' => 'pegawai',
        ]);
    }
}
