@extends('layout/aplikasi')

@section('konten')
<h1>{{ $judul }}</h1>
<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Tenetur culpa a nisi fuga error earum dolor, in sint eum praesentium.</p>
<p>
    <ul>
        <li>Nama Ayah: {{ $parentprofil['Nama Ayah']}}</li>
        <li>Tempat, Tanggal lahir: {{ $parentprofil['Tempat, Tanggal Lahir Ayah']}}</li>
        <li>Pekerjaan Ayah: {{ $parentprofil['Pekerjaan Ayah']}}</li>
    </ul>
    <ul>
        <li>Nama Ibu: {{ $parentprofil['Nama Ibu']}}</li>
        <li>Tempat, Tanggal lahir: {{ $parentprofil['Tempat, Tanggal Lahir Ibu']}}</li>
        <li>Pekerjaan Ibu: {{ $parentprofil['Pekerjaan Ibu']}}</li>
    </ul>
    <ul>
        <li>Alamat Orang Tua: {{ $parentprofil['Alamat Orang Tua']}}</li>
    </ul>
</p>
@endsection
