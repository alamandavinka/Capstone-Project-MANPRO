@extends('layout/aplikasi')

@section('konten')
    <div class="w-50 text-center border rounded px-3 py-3 mx-auto mt-5">
        <h1>Selamat datang</h1>
        <p>Silahkan login atau register untuk masuk</p>
        <a href="/mahasiswa" class="btn btn-primary btn-lg">LOGIN</a>
        <a href="/mahasiswa/register" class="btn btn-success btn-lg">REGISTER</a>
    </div>
@endsection