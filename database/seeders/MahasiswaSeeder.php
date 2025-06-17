<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class mahasiswaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table('mahasiswa')->insert([
            'nama_mhs'=>'Alamanda',
            'nim'=>'223100326',
            'alamat'=>'Yogyakarta',
            'created_at'=>date('Y-m-d H:i:s')
        ]);
        DB::table('mahasiswa')->insert([
            'nama_mhs'=>'Vinka',
            'nim'=>'223100327',
            'alamat'=>'Jakarta',
            'created_at'=>date('Y-m-d H:i:s')
        ]);
        DB::table('mahasiswa')->insert([
            'nama_mhs'=>'Lantana',
            'nim'=>'223100328',
            'alamat'=>'Bali',
            'created_at'=>date('Y-m-d H:i:s')
        ]);
    }
}
