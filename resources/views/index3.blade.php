@extends('template')
@section('title', 'Data Unggas')
@section('konten')
    <a href="/unggas/tambah" class="btn btn-primary">Tambah Unggas Baru</a>

    <br />
    <br />
    <p>Cari Data Unggas :</p>
    <form action="/unggas/cari" method="GET">
        <input type="text" name="cari" placeholder="Cari Unggas .." value="{{ old('cari') }}" class="form-control">
        <input type="submit" value="CARI" class="btn btn-light">
    </form>

    <br />
    <table class="table table-striped table-hover">
        <tr>
            <th>Nama Unggas</th>
            <th>Jumlah</th>
            <th>Tersedia</th>
            <th>Opsi</th>
        </tr>
        @foreach ($unggas as $u)
            <tr>
                <td>{{ $u->namaunggas }}</td>
                <td>{{ $u->jumlahunggas }}</td>
                <td>{{ $u->tersedia }}</td>
                <td>
                    <a href="/unggas/edit/{{ $u->kodeunggas }}" class="btn btn-warning">Edit</a>
                    <a href="/unggas/hapus/{{ $u->kodeunggas }}" class="btn btn-danger">Hapus</a>
                </td>
            </tr>
        @endforeach
    </table>
@endsection
