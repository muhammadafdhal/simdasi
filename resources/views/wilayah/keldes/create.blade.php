@extends('layouts.app')

@section('dropdown-wilayah') active
@endsection

@section('status-dropdown') show
@endsection

@section('status-keldes') active
@endsection

@section('title-page') Kelurahan
@endsection

@section('content')

<section class="section">

    <div class="section-body">

        <div class="row">
            <div class="col-12 col-md-12 col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Form Data Kelurahan</h4>
                    </div>
                    <form action="/keldes/tambah/save" id="form2" method="POST">
                        @csrf
                        <div class="card-body">

                            <div class="row">
                                <div class="col">
                                    <div class="form-group">
                                        <label>Provinsi</label>
                                        <select class="form-control form-control-sm select2" name="id_provinsi" required>
                                            <option class="pilih_provinsi">Pilih Provinsi</option>
                                            @foreach ($provinsi as $key)
                                            <option value="{{ $key->id_provinsi }}">{{ $key->provinsi }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="form-group">
                                        <label id="labelkab">Kabupaten</label>
                                        <select class="form-control form-control-sm select2" name="id_kabkota" required>
                                            <option class="pilih">Pilih Kabupaten</option>
                                        </select>

                                    </div>
                                </div>
                                <div class="col">
                                    <div class="form-group">
                                        <label id="labelkab">Kecamatan</label>
                                        <select class="form-control form-control-sm select2" name="id_kecamatan" required>
                                            <option class="pilih">Pilih Kecamatan</option>
                                        </select>

                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <label>Masukan Nama Kelurahan/Desa</label>
                                <input type="text" name="keldes" required placeholder="Masukan Nama Kelurahan."
                                    class="form-control">
                            </div>

                            <div class="form-group">
                                <label>Masukan Kode Kelurahan/Desa</label>
                                <input type="number" name="kode_keldes" required
                                    placeholder="Masukan Kode Kelurahan." class="form-control">
                            </div>

                            <div class="button">
                                <button type="submit" class="btn btn-primary">Save</button>
                                <a href="/keldes" class="btn btn-danger">Kembali</a>
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
