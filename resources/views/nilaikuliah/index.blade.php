@extends('template')
@section('title', 'Nilai Kuliah')
@section('konten')
    <a href="/E5/tambah" class="btn btn-primary">Tambah Data</a>

    <br />
    <table class="table table-striped table-hover">
        <tr>
        <th>ID</th>
        <th>NRP</th>
        <th>Nilai Angka</th>
        <th>Nilai Huruf</th>
        <th>SKS</th>
        <th>Bobot</th>
        </tr>
        @foreach ($nilaikuliah as $n)
            <tr>
            <td>{{ $n->ID }}</td>
            <td>{{ $n->NRP }}</td>
            <td>{{ $n->NilaiAngka }}</td>
            <td>{{ $n->NilaiHuruf }}</td>
            <td>{{ $n->SKS }}</td>
            <td>{{ $n->Bobot }}</td>
            </tr>
        @endforeach
    </table>
@endsection
