<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class PetugasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        DB::table('petugas')->insert([
            'nama_petugas' => 'name',
            'username' => 'name',
            'password' => bcrypt('name'),
            'id_level' => '1',
            'remember_token' => Str::random(30),
        ]);

        DB::table('petugas')->insert([
            'nama_petugas' => 'admin',
            'username' => 'admin',
            'password' => bcrypt('admin'),
            'id_level' => '1',
            'remember_token' => Str::random(30),
        ]);

        DB::table('petugas')->insert([
            'nama_petugas' => 'petugas',
            'username' => 'petugas',
            'password' => bcrypt('petugas'),
            'id_level' => '1',
            'remember_token' => Str::random(30),
        ]);

        DB::table('petugas')->insert([
            'nama_petugas' => Str::random(8),
            'username' => Str::random(5),
            'password' => bcrypt('petugas'),
            'id_level' => '3',
            'remember_token' => Str::random(30),
        ]);

        DB::table('petugas')->insert([
            'nama_petugas' => Str::random(8),
            'username' => Str::random(5),
            'password' => bcrypt('petugas'),
            'id_level' => '2',
            'remember_token' => Str::random(30),
        ]);

        DB::table('petugas')->insert([
            'nama_petugas' => Str::random(8),
            'username' => Str::random(5),
            'password' => bcrypt('petugas'),
            'id_level' => '3',
            'remember_token' => Str::random(30),
        ]);

        DB::table('petugas')->insert([
            'nama_petugas' => Str::random(8),
            'username' => Str::random(5),
            'password' => bcrypt('petugas'),
            'id_level' => '2',
            'remember_token' => Str::random(30),
        ]);

        DB::table('petugas')->insert([
            'nama_petugas' => Str::random(8),
            'username' => Str::random(5),
            'password' => bcrypt('petugas'),
            'id_level' => '3',
            'remember_token' => Str::random(30),
        ]);

        DB::table('petugas')->insert([
            'nama_petugas' => Str::random(8),
            'username' => Str::random(5),
            'password' => bcrypt('petugas'),
            'id_level' => '2',
            'remember_token' => Str::random(30),
        ]);
    }
}
