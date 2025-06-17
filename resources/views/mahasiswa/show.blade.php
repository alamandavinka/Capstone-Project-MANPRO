@extends('layout/aplikasi')

@section('konten')
    <div>
        <h1>{{ $data->nama_mhs }}</h1>
        <p>
            <b>Nim</b> {{ $data->nim }}
        </p>
        <p>
            <b>Alamat</b> {{ $data->alamat }}
        </p>
        <a href='/mahasiswa' class="btn btn-secondary">Kembali</a>
    </div>
@endsection