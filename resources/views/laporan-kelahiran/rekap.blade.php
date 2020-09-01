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
            <h5 class="card-header">Data Kelahiran</h5>
            
            <div class="card-body">
                <form method="post" action="/rekap-kelahiran/laporan">
                    @csrf
                    <div class="row">
    
                        <div class="range-dtp col-sm-10">
                            <label class="control-label"><small>Input Range Tanggal : </small></label>
                            <input type="text" id="range-tanggal" name="rekaplaporan" class="form-control"
                                placeholder="dd/mm/yyyy - dd/mm/yyyy" readonly>
                            <i class="glyphicon glyphicon-calendar fa fa-calendar" style="margin-right:10px"></i>
                        </div>
                        <div class="range-dtp col-sm-1" style="margin-top:23px;">
                            <button type="submit" class="btn btn-primary">Filter</button>
    
                        </div>
    
                    </div>
                </form>
                <hr>
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
                            @foreach ($lahir as $t)


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
