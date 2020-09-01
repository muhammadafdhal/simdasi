@extends('layouts.app')

@section('status-kelahiran') active
@endsection

@section('content')

<div class="row">
    <!-- ============================================================== -->
    <!-- basic table  -->
    <!-- ============================================================== -->
    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
        <div class="card">
            <h5 class="card-header">Data Tabel Kelahiran</h5>
            <div class="card-body">
                <a href="/data-kelahiran/tambah" class="btn btn-icon btn-primary"><i class="fa fa-plus"></i>
                    Tambah Data</a>
                <br><br>
                <div class="table-responsive">
                    <table class="table table-striped table-bordered first">
                        <thead>
                            <tr>
                                <th>No.</th>
                                <th>Nama Bayi</th>
                                <th>Tempat Tanggal Lahir Bayi</th>
                                <th>Berat Bayi</th>
                                <th>Nama Ayah</th>
                                <th>Nama Ibu</th>
                                <th>Aksi</th>
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
                                <td>{{$t->kelahiran_tempat}}, {{ date('d M Y', strtotime($t->kelahiran_tgl)) }}
                                </td>
                                <td>{{$t->kelahiran_berat}}</td>
                                <td>{{$t->kelahiran_nama_ayah}}</td>
                                <td>{{$t->kelahiran_nama_ibu}}</td>

                                <td>
                                    <form method="POST" action="/data-kelahiran/delete/{{ $t->kelahiran_id }}">
                                        {{csrf_field()}} {{method_field('DELETE')}}
                                        <a href="/data-kelahiran/detail/{{ $t->kelahiran_id }}" class="btn btn-info"
                                            data-toggle="tooltip" data-placement="top" title="Detail Info"><i
                                                class="fa fa-info-circle"></i></a>

                                        <a href="/data-kelahiran/edit/{{ $t->kelahiran_id }}" class="btn btn-primary"
                                            data-toggle="tooltip" data-placement="top" title="Kelola User"><i
                                                class="far fa-edit"></i></a>
                                        <br><br>
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
