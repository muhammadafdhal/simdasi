@extends('layouts.app')

@section('title-page')Form Data Pindah Domisili

@endsection

@section('status-domisili') active
@endsection

@section('content')
<div class="row">
    <!-- ============================================================== -->
    <!-- basic table  -->
    <!-- ============================================================== -->
    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
        <div class="card">
            <h5 class="card-header">Detail Data Pindah Domisili</h5>
            <div class="card-body">
                <a href="/data-domisili" class="btn btn-danger"> <i class="fa fa-arrow-circle-left"></i> Kembali</a>
                <br><br>
                <div class="table-responsive">
                    
                    <table class="table table-striped table-bordered">
                        <thead>
                            <tr>
                                <th>Nama</th>
                                <td>{{$dom->domisili_nama}}</td>
                            </tr>
                            <tr>
                                <th>No. KTP</th>
                                <td>{{$dom->domisili_no_ktp}}</td>
                            </tr>
                            <tr>
                                <th>Kewarganegaraan</th>
                                <td>{{$dom->domisili_kewarganegaraan}}</td>
                            </tr>
                            <tr>
                                <th>Jenis Kelamin</th>
                                <td>{{$dom->domisili_jk}}</td>
                            </tr>
                            <tr>
                                <th>Tempat, Tanggal Lahir</th>
                                <td>{{$dom->domisili_tmp_lahir}}, {{ date('d M Y', strtotime($dom->domisili_tgl_lahir)) }}
                                </td>
                            </tr>
                            <tr>
                                <th>Agama</th>
                                <td>{{$dom->domisili_agama}}</td>
                            </tr>
                            <tr>
                                <th>Pekerjaan</th>
                                <td>{{$dom->domisili_pekerjaan}}</td>
                            </tr>
                            <tr>
                                <th>Alamat</th>
                                <td>{{$dom->domisili_alamat}}</td>
                            </tr>
                            <tr>
                                <th>Keperluan</th>
                                <td>{{$dom->domisili_keperluan}}</td>
                            </tr>
                            <tr>
                                <th>Provinsi</th>
                                <td>{{$dom->provinsi}}</td>
                            </tr>
                            <tr>
                                <th>Kabkota</th>
                                <td>{{$dom->kabkota}}</td>
                            </tr>
                            <tr>
                                <th>Kecamatan</th>
                                <td>{{$dom->kecamatan}}</td>
                            </tr>
                            <tr>
                                <th>Kelurahan</th>
                                <td>{{$dom->keldes}}</td>
                            </tr>
                            <tr align="center">
                                <th>Lampiran KTP:</th>
                                <td><img src="/gambar/lampiranDaerahAsal/{{$dom->domisili_lampiran_ktp }}"
                                    class="img-responsive" alt="KTP" width="307" height="240"></td>
                            </tr>
                            <tr align="center">
                                <th>Lampiran Surat KK :</th>
                                <td><img src="/gambar/lampiranKK/{{$dom->domisili_lampiran_kk }}"
                                    class="img-responsive" alt="Surat KK" width="307" height="240"></td>
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
