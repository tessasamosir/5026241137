@extends('template')
@section('title', 'Keranjang Belanja')
@section('konten')

<a href="/D4/beli" class="btn btn-primary">Beli</a>

    <br />
    <table class="table table-striped table-hover">
        <tr>
        <th>Kode Pembelian</th>
        <th>Kode Barang</th>
        <th>Jumlah Pembelian</th>
        <th>Harga per item</th>
        <th>Total</th>
        <th>Action</th>
        </tr>
        @foreach ($keranjangbelanja as $n)
            <tr>
            <td>{{ $n->ID }}</td>
            <td>{{ $n->KodeBarang }}</td>
            <td>{{ $n->Jumlah }}</td>
            <td>{{ $n->Harga }}</td>
            <td>{{ $n->Total }}</td>
            <td>
                    <a href="/D4/batal/{{ $n->ID }}" class="btn btn-danger">Batal</a>
                </td>
            </tr>
        @endforeach
    </table>
@endsection
