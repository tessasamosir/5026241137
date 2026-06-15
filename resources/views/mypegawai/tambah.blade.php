@extends('template')
@section('title', 'Tambah Data')
@section('konten')

<a href="/E5" class="btn btn-secondary mb-4">Kembali</a>

    <div class="card">
        <div class="card-header">
            Tambah Data
        </div>

        <div class="card-body">
            <form action="/eas/store" method="post">
                {{ csrf_field() }}

                <div class="row mb-3">
                    <label for="NRP" class="col-sm-2 col-form-label">Kode Pegawai</label>
                    <div class="col-sm-10">
                        <input type="text" name="kodepegawai" id="kodepegawai" pattern="[a-zA-Z0-9]+"
        title="Hanya boleh huruf dan angka, tanpa spasi atau karakter spesial." class="form-control" required>

                    </div>
                </div>

                <div class="row mb-3">
                    <label for="NRP" class="col-sm-2 col-form-label">Nama Lengkap</label>
                    <div class="col-sm-10">
                        <input type="text" name="namalengkap" id="namalengkap" pattern="^[A-Za-z\s]+$"
    title="Hanya boleh berisi huruf"
    placeholder="Masukkan hanya huruf" class="form-control" required>
                    </div>
                </div>

                <div class="row mb-3">
                    <label for="SKS" class="col-sm-2 col-form-label">Divisi</label>
                    <div class="col-sm-10">
                        <input type="text" name="divisi" id="divisi" class="form-control" required>
                    </div>
                </div>

                <div class="row mb-3">
                    <label for="SKS" class="col-sm-2 col-form-label">Departemen</label>
                    <div class="col-sm-10">
                        <input type="text" name="departemen" id="departemen" class="form-control" required>
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
