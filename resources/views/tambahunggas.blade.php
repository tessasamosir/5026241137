@extends('template')
@section('title', 'Tambah Data Unggas')
@section('konten')

<a href="/unggas" class="btn btn-secondary mb-4">Kembali</a>

    <div class="card">
        <div class="card-header">
            Form Tambah Data Unggas
        </div>

        <div class="card-body">
            <form action="/unggas/store" method="post">
                {{ csrf_field() }}

                <div class="row mb-3">
                    <label for="namaunggas" class="col-sm-2 col-form-label">Nama Unggas</label>
                    <div class="col-sm-10">
                        <input type="text" name="namaunggas" id="namaunggas" class="form-control" required>
                    </div>
                </div>

                <div class="row mb-3">
                    <label for="jumlahunggas" class="col-sm-2 col-form-label">Jumlah</label>
                    <div class="col-sm-10">
                        <input type="number" name="jumlahunggas" id="jumlahunggas" class="form-control" required>
                    </div>
                </div>

                <div class="row mb-3">
                    <label for="tersedia" class="col-sm-2 col-form-label">Tersedia</label>
                    <div class="col-sm-10">
                        <input type="text" name="tersedia" id="tersedia" class="form-control" maxlength="1" placeholder="Y / N" required>
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
