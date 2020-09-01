@extends('layouts.app')

@section('title-page')Form Data Kelahiran

@endsection

@section('status-kelahiran') active
@endsection

@section('content')
<div class="row">
    <!-- ============================================================== -->
    <!-- basic table  -->
    <!-- ============================================================== -->
    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
        <div class="card">
            <h5 class="card-header">Detail Data Kelahiran</h5>
            <div class="card-body">
                <a href="/data-kelahiran" class="btn btn-danger"> <i class="fa fa-arrow-circle-left"></i> Kembali</a>
                <br><br>
                <div class="table-responsive">
                    <table class="table table-striped table-bordered">
                        <thead>
                            <tr align="center">
                                <th>Nama Bayi</th>
                                <td>{{$lahir->kelahiran_nama}}</td>
                            </tr>
                            <tr align="center">
                                <th>Tempat, Tanggal Lahir Bayi</th>
                                <td>{{$lahir->kelahiran_tempat}}, {{ date('d M Y', strtotime($lahir->kelahiran_tgl)) }}
                                </td>
                            </tr>
                            <tr align="center">
                                <th>Berat Bayi</th>
                                <td>{{$lahir->kelahiran_berat}}</td>
                            </tr>
                            <tr align="center">
                                <th>Nama Ayah</th>
                                <td>{{$lahir->kelahiran_nama_ayah}}</td>
                            </tr>
                            <tr align="center">
                                <th>Nama Ibu</th>
                                <td>{{$lahir->kelahiran_nama_ibu}}</td>
                            </tr>
                            <tr align="center">
                                <th>Lampiran KTP Ayah</th>
                                <td><img src="/gambar/lampiranKtpAyah/{{$lahir->kelahiran_lampiran_ktp_ayah }}"
                                        class="img-responsive" alt="Surat Bukti Tanah" width="200" height="100"></td>
                            </tr>
                            <tr align="center">
                                <th>Lampiran KTP Ibu</th>
                                <td><img src="/gambar/lampiranKtpIbu/{{$lahir->kelahiran_lampiran_ktp_ibu }}"
                                        class="img-responsive" alt="Surat Bukti Tanah" width="200" height="100"></td>
                            </tr>
                            <tr align="center">
                                <th>Lampiran Surat Nikah</th>
                                <td><img src="/gambar/lampiranSuratNikah/{{$lahir->kelahiran_surat_nikah }}" class="img-responsive"
                                        alt="Surat Bukti Tanah" width="200" height="100"></td>
                            </tr>
                            <tr align="center">
                                <th>Lampiran Akte Kelahiran</th>
                                <td><img src="/gambar/lampiranAkteKelahiran/{{$lahir->kelahiran_lampiran_akte_kelahiran }}" class="img-responsive"
                                        alt="Surat Bukti Tanah" width="200" height="100"></td>
                            </tr>
                        </thead>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- end basic table  -->
    <!-- ============================================================== -->
</div>
@endsection
