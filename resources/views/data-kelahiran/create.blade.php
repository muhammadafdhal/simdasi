@extends('layouts.app')

@section('status-kelahiran') active
@endsection

@section('title-page') Form Data Kelahiran
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
                    <form action="/data-kelahiran/tambah/save" id="form1" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="card-body">
                            <div class="form-group">
                                <label>Nama Bayi</label>
                                <input type="text" name="kelahiran_nama" required
                                    placeholder="Masukan Nama" class="form-control">
                            </div>
                            <div class="form-group">
                                <label>Tempat Lahir Bayi</label>
                                <input type="text" name="kelahiran_tempat" required
                                    placeholder="Masukan Tempat Lahir" class="form-control">
                            </div>
                            <div class="form-group">
                                <label>Tanggal Lahir Bayi</label>
                                <input type="date" name="kelahiran_tgl" required
                                    placeholder="Masukan Tanggal Lahir" class="form-control">
                            </div>
                            <div class="form-group">
                                <label>Berat Bayi</label>
                                <input type="number" name="kelahiran_berat" required
                                    placeholder="Masukan Berat" class="form-control">
                            </div>
                            <div class="form-group">
                                <label>Nama Ayah</label>
                                <input type="text" name="kelahiran_nama_ayah" required
                                    placeholder="Masukan Nama Ayah" class="form-control">
                            </div>
                            <div class="form-group">
                                <label>Nama Ibu</label>
                                <input type="text" name="kelahiran_nama_ibu" required
                                    placeholder="Masukan Nama Ibu" class="form-control">
                            </div>

                            <div class="form-group">
                                <label>Lampiran KTP Ayah</label><br>
                                <input type="file" name="kelahiran_lampiran_ktp_ayah">
                                
                            </div>

                            <div class="form-group">
                                <label>Lampiran KTP Ibu</label>
                                <br>
                                <input type="file" name="kelahiran_lampiran_ktp_ibu" id="customFile">
                                
                            </div>

                            <div class="form-group">
                                <label>Lampiran Surat Nikah</label>
                                <br>
                                <input type="file" name="kelahiran_surat_nikah" id="customFile">
                                
                            </div>

                            <div class="form-group">
                                <label>Lampiran Akte Kelahiran</label>
                                <br>
                                <input type="file" name="kelahiran_lampiran_akte_kelahiran" id="customFile">
                                
                            </div>

                            <div class="buttons">
                                <button type="submit" class="btn btn-primary">Save</button>
                                <a href="/data-kelahiran" class="btn btn-danger">Kembali</a>
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
