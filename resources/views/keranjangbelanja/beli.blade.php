@extends('template')
@section('title', 'Beli')
@section('konten')

<a href="/D4" class="btn btn-secondary mb-4">Kembali</a>

    <div class="card">
        <div class="card-header">
            Beli
        </div>

        <div class="card-body">
            <form action="/D4/store" method="post">
                {{ csrf_field() }}

                <div class="row mb-3">
                    <label for="NRP" class="col-sm-2 col-form-label">Kode Barang</label>
                    <div class="col-sm-10">
                        <input type="text" name="KodeBarang" id="KodeBarang" class="form-control" required>
                    </div>
                </div>

                <div class="row mb-3">
                    <label for="NiaiAngka" class="col-sm-2 col-form-label">Jumlah Pembelian</label>
                    <div class="col-sm-10">
                        <input type="number" name="Jumlah" id="Jumlah" class="form-control" required>
                    </div>
                </div>

                <div class="row mb-3">
                    <label for="SKS" class="col-sm-2 col-form-label">Harga per Item</label>
                    <div class="col-sm-10">
                        <input type="text" name="Harga" id="Harga" class="form-control" required>
                    </div>
                </div>

                <div class="row">
                    <div class="offset-sm-2 col-sm-10">
                        <input type="submit" value="Simpan Data" class="btn btn-primary">
                    </div>
                </div>

            </form>
        </div>

    </div>
@endsection
