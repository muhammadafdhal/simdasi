@extends('layouts.app')

@section('status-rekap-kelahiran') active
@endsection

@section('content')

<div class="row">
    <!-- ============================================================== -->
    <!-- basic table  -->
    <!-- ============================================================== -->
    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
        <div class="card">
            <h5 class="card-header">Rekapitulasi Data Kelahiran</h5>

            <div class="card-body">

                <h6 class="m-0 font-weight-bold text-primary">Laporan Pada Tanggal {{$range1.' s/d '.$range2}}</h6>
                <br>


                <a href="/rekap-kelahiran/cetak-pdf/{{$tgl}}/{{$tgl1}}" class="btn btn-primary">Cetak Laporan</a>

                <br><br>
                <div class="table-responsive">
                    <table class="table table-striped table-bordered">
                        <thead>
                            <tr>
                                <th>No.</th>
                                <th>Nama</th>
                                <th>Nama Ayah</th>
                                <th>Nama Ibu</th>
                                <th>Lampiran Ktp Ayah</th>
                                <th>Lampiran Ktp Ibu</th>
                                <th>Lampiran Surat Nikah</th>
                                <th>Lampiran Akte Kelahiran</th>

                            </tr>
                        </thead>
                        <tbody align="center">
                            @php
                            $no = 1;
                            @endphp
                            @foreach ($date as $key => $t)


                            <tr>
                                <td>{{$no++}}.</td>
                                <td>{{$t->kelahiran_nama}}</td>
                                <td>{{$t->kelahiran_nama_ayah}}</td>
                                <td>{{$t->kelahiran_nama_ibu}}</td>
                                <td><img src="/gambar/lampiranKtpAyah/{{$t->kelahiran_lampiran_ktp_ayah }}"
                                        class="img-responsive" alt="Lampiran" width="120" height="60"></td>
                                <td><img src="/gambar/lampiranKtpIbu/{{$t->kelahiran_lampiran_ktp_ibu }}"
                                        class="img-responsive" alt="Lampiran" width="120" height="60"></td>
                                <td><img src="/gambar/lampiranSuratNikah/{{$t->kelahiran_surat_nikah }}"
                                        class="img-responsive" alt="Lampiran" width="120" height="60"></td>
                                <td><img src="/gambar/lampiranAkteKelahiran/{{$t->kelahiran_lampiran_akte_kelahiran }}"
                                        class="img-responsive" alt="Lampiran" width="120" height="60"></td>


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
