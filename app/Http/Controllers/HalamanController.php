<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HalamanController extends Controller
{
    function index(){
        return view("halaman/index");
    }

    function graduation(){
        return view("halaman/graduation");       
    }

    function parentprofil(){
        $data = [
            'judul' => 'ini halaman parent profil',
            'parentprofil' => [
                'Nama Ayah' => 'Sutrisno',
                'Tempat, Tanggal Lahir Ayah' => 'Jepara, 20 Februari 1988',
                'Pekerjaan Ayah' => 'Civil Engineer',

                'Nama Ibu' => 'Winarti',
                'Tempat, Tanggal Lahir Ibu' => 'Yogyakarta, 7 Juni 1990',
                'Pekerjaan Ibu' => 'Ibu Rumah Tangga',

                'Alamat Orang Tua' => 'Jl,Gatak, Kasihan, Bantul, Yogyakarta',
            ]
        ];
        return view("halaman/parentprofil", $data);   
    }
}
