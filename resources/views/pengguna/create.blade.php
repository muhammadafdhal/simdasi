@extends('layouts.app')

@section('status-data-pengguna') active
@endsection

@section('title-page') Form Manajemen User
@endsection

@section('content')

<section class="section">

    <div class="section-body">

        <div class="row">
            <div class="col-12 col-md-12 col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <h4>@yield('title-page')</h4>
                    </div>
                    <form action="/pengguna/tambah/save" id="form1" method="POST">
                        @csrf
                        <div class="card-body">
                            <div class="form-group">
                                <label>Nama Lengkap</label>
                                <input type="text" name="name" value="{{ old('name') }}" required
                                    placeholder="Masukan Nama Lengkap" class="form-control">
                            </div>
                            <div class="form-group">
                                <label>Password <small>(Default)</small></label>
                                <input type="text" name="password" value="12345678" readonly
                                    placeholder="Masukan Nama Lengkap" class="form-control">
                            </div>
                            <div class="form-group">
                                <label>Level</label>
                                <select class="form-control" id="level" required name="level" onchange="tampilkan()">
                                    <option value="">=== Silahkan Pilih Level ===</option>
                                    <option value="Pimpinan">Pimpinan</option>
                                    <option value="Pegawai">Pegawai</option>
                                </select>
                            </div>

                            <div class="form-group">
                                <label>NIK</label>
                                <input type="number" name="nik" required placeholder="Masukan NIK"
                                    class="form-control">
                            </div>

                            <div class="form-group">
                                <label>Email</label>
                                <input type="email" name="email" required placeholder="Masukan Email"
                                    class="form-control">
                            </div>

                            <div class="buttons">
                                <button type="submit" class="btn btn-primary">Save</button>
                                <a href="/pengguna" class="btn btn-danger">Kembali</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
</div>

@endsection
