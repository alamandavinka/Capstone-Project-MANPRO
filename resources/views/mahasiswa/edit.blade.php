@extends('layout/aplikasi')

@section('konten')

<form method="post" action="{{ '/mahasiswa/'.$data->nim }}" enctype="multipart/form-data">
    @csrf
    @method('PUT')
    <div class="mb-3">
        <h1>NIM : {{ $data->nim }}</h1>
    </div>
    <div class="mb-3">
        <label for="nama_mhs" class="form-label">Nama Mahasiswa</label>
        <input type="text" class="form-control" name="nama_mhs" id="nama_mhs" value="{{ $data->nama_mhs }}">
    </div>
    <div class="mb-3">
        <label for="alamat" class="form-label">Alamat</label>
        <textarea class="form-control" name="alamat">{{ $data->alamat }}</textarea>
    </div>
    @if ($data->foto)
        <div class="mb3">
            <img style="max-width:50px;max-height:50px" src="{{ url('foto').'/'.$data->foto }}"/>
        </div>
    @endif
    <div class="mb-3">
        <label for="foto" class="form-label">FOTO</label>
        <input type="file" class="form-control" name="foto" id="foto">
    </div>
    <div class="mb-3">
        <button type="submit" class="btn btn-primary">UPDATE</button>
        <a href="/mahasiswa" class="btn btn-secondary">Kembali</a>
    </div>
</form>
@endsection
