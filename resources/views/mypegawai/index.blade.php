@extends('template')
@section('title', 'mypegawai')
@section('konten')
    <a href="/eas/tambah" class="btn btn-primary">Tambah Pegawai Baru</a>

    <br />
    <table class="table table-striped table-hover">
        <tr>
            <th>Kode Pegawai</th>
            <th>Nama Lengkap</th>
            <th>Divisi</th>
            <th>Departemen</th>
            <th>Opsi</th>
        </tr>
        @foreach ($mypegawai as $u)
            <tr>
                <td>{{ $u->kodepegawai }}</td>
                <td>{{ $u->namalengkap }}</td>
                <td>{{ $u->divisi}}</td>
                <td>{{ $u->departemen}}</td>
                <td>
                    <a href="/eas/view/{{ $u->kodepegawai }}" class="btn btn-warning">View</a>
                </td>
            </tr>
        @endforeach
    </table>
@endsection
