<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\File;
use App\Models\mahasiswa;
use Illuminate\Http\Request;


class mahasiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = mahasiswa::orderBy('nim', 'asc')->paginate(5);
        return view('mahasiswa/index')->with('data', $data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('mahasiswa/create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Session::flash('nim', $request->nim);
        Session::flash('nama_mhs', $request->nama_mhs);
        Session::flash('alamat', $request->alamat);

        $request->validate([
            'nim'=>'required|numeric',
            'nama_mhs'=>'required',
            'alamat'=>'required',
            'foto'=>'required|mimes:jpeg,jpg,png',
        ],[
            'nim.required'=>'NIM wajib diisi',
            'nim.numeric'=>'NIM wajib diisi dalam angka',
            'nama_mhs.required'=>'Nama Mahasiswa wajib diisi',
            'alamat.required'=>'Alamat wajib diisi',
            'foto.required'=>'Silahkan masukkan foto',
            'foto.mimes' => 'Format foto yang diperbolehkan jpeg, jpg, dan png',
        ]);

        $foto_file = $request->file('foto');
        $foto_ekstensi = $foto_file->extension();
        $foto_nama = date('ymdhis').".". $foto_ekstensi;
        $foto_file->move(public_path('foto'),$foto_nama);

        $data = [
            'nim' => $request->input('nim'),
            'nama_mhs' => $request->input('nama_mhs'),
            'alamat' => $request->input('alamat'),
            'foto' => $foto_nama

        ];
        mahasiswa::create($data);
        return redirect('mahasiswa')->with('success', 'Berhasil menambahkan data.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $data = mahasiswa::where('nim', $id)->first();
        return view('mahasiswa/show')->with('data', $data);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $data = mahasiswa::where('nim', $id)->first();
        return view('mahasiswa/edit')->with('data', $data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            
            'nama_mhs'=>'required',
            'alamat'=>'required',
        ],[
            
            'nama_mhs.required'=>'Nama Mahasiswa wajib diisi',
            'alamat.required'=>'Alamat wajib diisi',
        ]);
        $data = [
            'nama_mhs' => $request->input('nama_mhs'),
            'alamat' => $request->input('alamat'),
        ];

        if($request->hasFile('foto')) {
            $request->validate([
                'foto' => 'mimes:jpeg,jpg,png'
            ],[
                'foto.mimes' => 'Format foto yang diperbolehkan jpeg, jpg, dan png',
            ]);
            $foto_file = $request->file('foto');
            $foto_ekstensi = $foto_file->extension();
            $foto_nama = date('ymdhis').".". $foto_ekstensi;
            $foto_file->move(public_path('foto'),$foto_nama);

            $data_foto = mahasiswa::where('nim', $id)->first();
            File::delete(public_path('foto').'/'.$data_foto->foto);

            $data['foto'] = $foto_nama;
        }

       
        mahasiswa::where('nim',$id)->update($data);
        return redirect('/mahasiswa')->with('success','Berhasil melakukan update data');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
    
    $data = mahasiswa::where('nim', $id)->first();
    if ($data && File::exists(public_path('foto') . '/' . $data->foto)) {
        File::delete(public_path('foto') . '/' . $data->foto);
    }

    // Hapus data dari database
    mahasiswa::where('nim', $id)->delete();

    return redirect('/mahasiswa')->with('success', 'Berhasil menghapus data');
    }

}
