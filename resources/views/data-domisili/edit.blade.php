@extends('layouts.app')

@section('status-domisili') active
@endsection

@section('title-page') Form Data Pindah Domisili
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
                    <form action="/data-domisili/edit/{{$dom->domisili_id}}/save" id="form1" method="POST"
                        enctype="multipart/form-data">
                        @csrf {{ method_field('patch')}}
                        <div class="card-body">
                            <div class="card-body">
                                <div class="form-group">
                                    <label>Nama Lengkap</label>
                                <input type="text" name="domisili_nama" value="{{$dom->domisili_nama}}" required
                                        placeholder="Masukan Nama Lengkap" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label>Jenis Kelamin</label>
                                    <select class="form-control" id="level" required name="domisili_jk">
                                        <option value="">=== Pilih Jenis Kelamin ===</option>
                                        <option value="Laki-Laki"<?php if ($dom->domisili_jk == "Laki-Laki") {
                                            echo "selected";
                                        } ?>>Laki-Laki</option>
                                        <option value="Perempuan"<?php if ($dom->domisili_jk == "Perempuan") {
                                            echo "selected";
                                        } ?>>Perempuan</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>Tempat Lahir</label>
                                    <input type="text" name="domisili_tmp_lahir" value="{{$dom->domisili_tmp_lahir}}" required
                                        placeholder="Masukan Tempat Lahir" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label>Tanggal Lahir</label>
                                    <input type="date" name="domisili_tgl_lahir" value="{{$dom->domisili_tgl_lahir}}" required
                                        placeholder="Masukan Tanggal Lahir" class="form-control">
                                </div>
                                
                                <div class="form-group">
                                    <label>No KTP</label>
                                    <input type="number" name="domisili_no_ktp" value="{{$dom->domisili_no_ktp}}" required
                                        placeholder="Masukan Nomor KTP" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label>Kewarganegaraan</label>
                                    <input type="text" name="domisili_kewarganegaraan" value="{{$dom->domisili_kewarganegaraan}}" required
                                        placeholder="Masukan Kewarganegaraan" class="form-control">
                                </div>
    
                                <div class="form-group">
                                    <label>Agama</label>
                                    <select class="form-control" id="level" required name="domisili_agama">
                                        <option value="">=== Pilih Agama ===</option>
                                        <option value="Islam"<?php if ($dom->domisili_agama == "Islam") {
                                            echo "selected";
                                        } ?>>Islam</option>
                                        <option value="Kristen"<?php if ($dom->domisili_agama == "Kristen") {
                                            echo "selected";
                                        } ?>>Kristen</option>
                                        <option value="Hindu"<?php if ($dom->domisili_agama == "Hindu") {
                                            echo "selected";
                                        } ?>>Hindu</option>
                                        <option value="Buddha"<?php if ($dom->domisili_agama == "Buddha") {
                                            echo "selected";
                                        } ?>>Buddha</option>
                                        <option value="Katolik"<?php if ($dom->domisili_agama == "Katolik") {
                                            echo "selected";
                                        } ?>>Katolik</option>
                                        <option value="Khonghucu"<?php if ($dom->domisili_agama == "Khonghucu") {
                                            echo "selected";
                                        } ?>>Khonghucu</option>
    
                                    </select>
                                </div>
    
                                <div class="form-group">
                                    <label>Pekerjaan</label>
                                    <input type="text" name="domisili_pekerjaan" value="{{$dom->domisili_pekerjaan}}" required
                                        placeholder="Masukan Pekerjaan" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label>Alamat</label>
                                    <input type="text" name="domisili_alamat" value="{{$dom->domisili_alamat}}" required
                                        placeholder="Masukan Alamat" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label>Keperluan</label>
                                    <input type="text" name="domisili_keperluan" value="{{$dom->domisili_keperluan}}" required
                                        placeholder="Masukan Keperluan" class="form-control">
                                </div>
    
                                <div class="form-group">
                                    <label>Provinsi</label>
                                    <select id="e1" class="form-control" name="id_provinsi" required>
                                        <option class="pilih_provinsi">Pilih Provinsi</option>
                                        @foreach ($prov as $key)
                                        <option value="{{ $key->id_provinsi }}" <?php if ($key->id_provinsi == $dom->id_kabkota_provinsi) {
                                            echo "selected";
                                        } ?>>{{ $key->provinsi }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>Kabupaten/Kota</label>
                                    <select id="e2" class="form-control" value="{{$dom->kabkota}}" name="id_kabkota" required>
                                        @foreach ($kabkota as $value)
                                        <option value="{{ $value->id_kabkota }}" @if($dom->id_kabkota ==
                                            $value->id_kabkota) selected @endif>{{ $value->kabkota }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>Kecamatan</label>
                                    <select id="e3" class="form-control" value="{{$dom->kecamatan}}" name="id_kecamatan" required>
                                        @foreach ($kec as $value)
                                        <option value="{{ $value->id_kecamatan }}" @if($dom->id_kecamatan ==
                                            $value->id_kecamatan) selected @endif>{{ $value->kecamatan }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>Kelurahan</label>
                                    <select id="e3" class="form-control" value="{{$dom->kecamatan}}" name="id_kecamatan" required>
                                        @foreach ($kel as $value)
                                        <option value="{{ $value->id_keldes }}" @if($dom->id_keldes ==
                                            $value->id_keldes) selected @endif>{{ $value->keldes }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>Lampiran KTP</label><br>
                                    <input type="file" name="domisili_lampiran_ktp">
                                    
                                </div>
    
                                <div class="form-group">
                                    <label>Lampiran Surat KK</label>
                                    <br>
                                    <input type="file" name="domisili_lampiran_kk" id="customFile">
                                    
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
