@extends('layout/aplikasi')

@section('konten')
<div class="container mt-5">
    <table class="table">
        <thead>
            <tr>
                <th>Foto</th>
                <th>Nama Mahasiswa</th>
                <th>NIM</th>
                <th>Alamat</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($data as $item)
                <tr>
                    <td>
                        @if ($item->foto)
                            <img style="max-width:50px;max-height 50px" src="{{  url('foto').'/'.$item->foto }}"/>
                        @endif
                    </td>
                    <td>{{ $item->nama_mhs }}</td>
                    <td>{{ $item->nim }}</td>
                    <td>{{ $item->alamat }}</td>
                    <td>
                        <a class='btn btn-secondary btn-sm' href="{{ url('/mahasiswa/' . $item->nim) }}">Detail</a>
                        <a class='btn btn-warning btn-sm' href="{{ url('/mahasiswa/' . $item->nim.'/edit') }}">Edit</a>
                        <form class='d-inline' action="{{ url('/mahasiswa/' . $item->nim) }}" method="post" onsubmit="return confirm('Yakin ingin menghapus data ini?')">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger btn-sm" type="submit">Hapus</button>
                        </form>                        
                    </td>
                    
                </tr>
            @endforeach
        </tbody>
    </table>
    <a href="/mahasiswa/create" class="btn btn-primary">+Tambah data mahasiswa</a>
    {{ $data->links() }}
</div>
@endsection