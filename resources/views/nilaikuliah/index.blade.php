@extends('template')
@section('title', 'Nilai Kuliah')
@section('konten')
    <a href="/E5/tambah" class="btn btn-primary">Tambah Data</a>

    <br />
    <table class="table table-striped table-hover">
        <tr>
            <th>NRP</th>
            <th>Nilai Angka</th>
            <th>SKS</th>
        </tr>
        @foreach ($nilaikuliah as $n)
            <tr>
                <td>{{ $n->NRP }}</td>
                <td>{{ $n->NilaiAngka }}</td>
                <td>{{ $n->SKS }}</td>
            </tr>
        @endforeach
    </table>
@endsection
