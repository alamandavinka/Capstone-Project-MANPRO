@extends('layout/aplikasi')

@section('konten')
    <form method="post" action="/mahasiswa" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
        <label for="nim" class="form-label">NIM</label>
        <input type="text" class="form-control" name="nim" id="nim" value="{{ Session::get('nim') }}">
        </div>
        <div class="mb-3">
            <label for="nama_mhs" class="form-label">Nama Mahasiswa</label>
            <input type="text" class="form-control" name="nama_mhs" id="nama_mhs" value="{{ Session::get('nama_mhs') }}">
        </div>
        <div class="mb-3">
            <label for="alamat" class="form-label">Alamat</label>
            <textarea class="form-control" name="alamat">{{ Session::get('alamat') }}</textarea>
        </div>
        <div class="mb-3">
            <label for="foto" class="form-label">FOTO</label>
            <input type="file" class="form-control" name="foto" id="foto">
        </div>
        <div class="mb-3">
            <button type="submit" class="btn btn-primary">SIMPAN</button>
        </div>
    </form>
@endsection
