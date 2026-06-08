@extends('template')
@section('title', 'Edit Data Unggas')
@section('konten')
<a href="/unggas" class="btn btn-secondary mb-4">Kembali</a>

    @foreach($unggas as $u)

    <div class="card">
        <div class="card-header">
            Form Edit Data Unggas
        </div>

        <div class="card-body">
            <form action="/unggas/update" method="post">
                {{ csrf_field() }}

                <input type="hidden" name="id" value="{{ $u->kodeunggas }}">

                <div class="row mb-3">
                    <label for="namaunggas" class="col-sm-2 col-form-label">Nama Unggas</label>
                    <div class="col-sm-10">
                        <input
                            type="text"
                            name="namaunggas"
                            id="namaunggas"
                            class="form-control"
                            required
                            value="{{ $u->namaunggas }}"
                        >
                    </div>
                </div>

                <div class="row mb-3">
                    <label for="jumlahunggas" class="col-sm-2 col-form-label">Jumlah</label>
                    <div class="col-sm-10">
                        <input
                            type="number"
                            name="jumlahunggas"
                            id="jumlahunggas"
                            class="form-control"
                            required
                            value="{{ $u->jumlahunggas }}"
                        >
                    </div>
                </div>

                <div class="row mb-3">
                    <label for="tersedia" class="col-sm-2 col-form-label">Tersedia</label>
                    <div class="col-sm-10">
                        <input
                            type="text"
                            name="tersedia"
                            id="tersedia"
                            class="form-control"
                            maxlength="1"
                            required
                            value="{{ $u->tersedia }}"
                        >
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

    @endforeach
@endsection
