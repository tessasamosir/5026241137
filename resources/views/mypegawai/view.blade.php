@extends('template')
@section('title', 'View Data')
@section('konten')
<a href="/eas" class="btn btn-secondary mb-4">Kembali</a>

    @foreach($mypegawai as $u)

    <div class="card">

        <div class="card-body">
            <form action="/mypegawai/view" method="get">
                {{ csrf_field() }}

                <div class="row mb-3">
                    <label for="kodepegawai" class="col-sm-2 col-form-label">Kode Pegawai</label>
                    <div class="col-sm-10">
                        <input
                            type="text"
                            name="kodepegawai"
                            id="kodepegawai"
                            class="form-control"
                            required
                            value="{{ $u->kodepegawai }}"
                        >
                    </div>
                </div>

                <div class="row mb-3">
                    <label for="namalengkap" class="col-sm-2 col-form-label">Nama Lengkap</label>
                    <div class="col-sm-10">
                        <input
                            type="text"
                            name="namalengkap"
                            id="namalengkap"
                            class="form-control"
                            required
                            value="{{ $u->namalengkap}}"
                        >
                    </div>
                </div>

                <div class="row mb-3">
                    <label for="divisi" class="col-sm-2 col-form-label">Divisi</label>
                    <div class="col-sm-10">
                        <input
                            type="text"
                            name="divisi"
                            id="divisi"
                            class="form-control"
                            required
                            value="{{ $u->divisi}}"
                        >
                    </div>
                </div>

                <div class="row mb-3">
                    <label for="departemen" class="col-sm-2 col-form-label">Departemen</label>
                    <div class="col-sm-10">
                        <input
                            type="text"
                            name="departemen"
                            id="departemen"
                            class="form-control"
                            required
                            value="{{ $u->departemen}}"
                        >
                    </div>
                </div>

            </form>
        </div>
    </div>

    @endforeach
@endsection
