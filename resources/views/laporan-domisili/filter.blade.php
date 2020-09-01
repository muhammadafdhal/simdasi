@extends('layouts.app')

@section('status-rekap-domisili') active
@endsection

@section('content')

<div class="row">
    <!-- ============================================================== -->
    <!-- basic table  -->
    <!-- ============================================================== -->
    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
        <div class="card">
            <h5 class="card-header">Rekapitulasi Data Domisili</h5>

            <div class="card-body">

                <h6 class="m-0 font-weight-bold text-primary">Laporan Pada Tanggal {{$range1.' s/d '.$range2}}</h6>
                <br>


                <a href="/rekap-domisili/cetak-pdf/{{$tgl}}/{{$tgl1}}" class="btn btn-primary">Cetak Laporan</a>

                <br><br>
                <div class="table-responsive">
                    <table class="table table-striped table-bordered">
                        <thead>
                            <tr>
                                <th>No.</th>
                                <th>Nama</th>
                                <th>No. KTP</th>
                                <th>Kewarganegaraan</th>
                                <th>Jenis Kelamin</th>
                                <th>TTL</th>
                                <th>Agama</th>
                                <th>Pekerjaan</th>
                                <th>Alamat</th>
                                <th>Keperluan</th>
                                <th>Provinsi</th>
                                <th>Kabkota</th>
                                <th>Kecamatan</th>
                            </tr>
                        </thead>
                        <tbody align="center">
                            @php
                            $no = 1;
                            @endphp
                            @foreach ($date as $t)


                            <tr>
                                <td>{{$no++}}.</td>
                                <td>{{$t->domisili_nama}}</td>
                                <td>{{$t->domisili_no_ktp}}</td>
                                <td>{{$t->domisili_kewarganegaraan}}</td>
                                <td>{{$t->domisili_jk}}</td>
                                <td>{{$t->domisili_tmp_lahir}}, {{ date('d M Y', strtotime($t->domisili_tgl_lahir)) }}
                                </td>
                                <td>{{$t->domisili_agama}}</td>
                                <td>{{$t->domisili_pekerjaan}}</td>
                                <td>{{$t->domisili_alamat}}</td>
                                <td>{{$t->domisili_keperluan}}</td>
                                <td>{{$t->provinsi}}</td>
                                <td>{{$t->kabkota}}</td>
                                <td>{{$t->kecamatan}}</td>

                            </tr>
                            @endforeach
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
