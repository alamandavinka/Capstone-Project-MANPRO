<?php

namespace App\Http\Controllers;

use App\Models\mahasiswa;
use Illuminate\Http\Request;

class mahasiswaController extends Controller
{
    //
    function index ()
    {
        // $data = mahasiswa::all();
        $data = mahasiswa::orderBy('nim', 'asc')->paginate(1);
        return view('mahasiswa/index')->with('data', $data);
    }
    function detail($id)
    {
    $data = mahasiswa::where('nim', $id)->first();
    return view('mahasiswa/show')->with('data', $data);
    }
    function create(){

    }
    function delete(){
        
    }
}
