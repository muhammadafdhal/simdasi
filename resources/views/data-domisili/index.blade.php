@extends('layouts.app')

@section('status-domisili') active
@endsection

@section('content')

<div class="row">
    <!-- ============================================================== -->
    <!-- basic table  -->
    <!-- ============================================================== -->
    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
        <div class="card">
            <h5 class="card-header">Data Tabel Domisili</h5>
            <div class="card-body">
                <a href="/data-domisili/tambah" class="btn btn-icon btn-primary"><i class="fa fa-plus"></i>
                    Tambah Data</a>
                <br><br>
                <div class="table-responsive">
                    <table class="table table-striped table-bordered first">
                        <thead>
                            <tr>
                                <th>No.</th>
                                <th>Nama</th>
                                <th>No. KTP</th>
                                <th>Jenis Kelamin</th>
                                <th>TTL</th>
                                <th>Agama</th>

                                <th>Alamat</th>

                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody align="center">
                            @php
                            $no = 1;
                            @endphp
                            @foreach ($dom as $t)


                            <tr>
                                <td>{{$no++}}. <a href="/data-domisili/cetak-pdf/{{$t->domisili_id}}"
                                        class="icon-circle-small icon-box-xs text-primary bg-info-light bg-info-light"
                                        data-toggle="tooltip" data-placement="top" title="Download Surat"><i
                                            class="fa fa-fw fa-download"></i></a></td>
                                <td>{{$t->domisili_nama}}</td>
                                <td>{{$t->domisili_no_ktp}}</td>
                                <td>{{$t->domisili_jk}}</td>
                                <td>{{$t->domisili_tmp_lahir}}, {{ date('d M Y', strtotime($t->domisili_tgl_lahir)) }}
                                </td>
                                <td>{{$t->domisili_agama}}</td>

                                <td>{{$t->domisili_alamat}}</td>



                                <td>
                                    <form method="POST" action="/data-domisili/delete/{{ $t->domisili_id }}">
                                        {{csrf_field()}} {{method_field('DELETE')}}

                                        <a href="/data-domisili/detail/{{ $t->domisili_id }}" class="btn btn-info"
                                            data-toggle="tooltip" data-placement="top" title="Detail Info"><i
                                                class="fa fa-info-circle"></i></a>

                                        <a href="/data-domisili/edit/{{ $t->domisili_id }}" class="btn btn-primary"
                                            data-toggle="tooltip" data-placement="top" title="Kelola User"><i
                                                class="far fa-edit"></i></a>

                                        <button type="submit"
                                            onclick="return confirm('Yakin Ingin Menghapus Data Ini ?')"
                                            class="btn btn-danger" data-toggle="tooltip" data-placement="top"
                                            title="Hapus User"><i class="fas fa-trash"></i></button>


                                    </form>
                                </td>
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
