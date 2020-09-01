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
                    <form action="/pengguna/edit/{{$user->id}}/save" id="form1" method="POST">
                        @csrf {{ method_field('patch')}}
                        <div class="card-body">
                            <div class="form-group">
                                <label>Nama Lengkap</label>
                                <input type="text" name="name" value="{{ $user->name }}" required
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
                                    <option value="Pimpinan" <?php if ($user->level == "Pimpinan") {
                                        echo "selected";
                                    } ?>>Pimpinan</option>
                                    <option value="Pegawai" <?php if ($user->level == "Pegawai") {
                                        echo "selected";
                                    } ?>>Pegawai</option>
                                </select>
                            </div>
                            
                            <div class="form-group">
                                <label>NIK</label>
                                <input type="number" value="{{$user->nik}}" name="nik" required
                                    placeholder="Masukan NIK" class="form-control">
                            </div>

                            <div class="form-group">
                                <label>Email</label>
                                <input type="email" value="{{$user->email}}" name="email" required
                                    placeholder="Masukan Email" class="form-control">
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
