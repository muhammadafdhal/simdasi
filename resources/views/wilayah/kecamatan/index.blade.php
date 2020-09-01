@extends('layouts.app')

@section('dropdown-wilayah') active
@endsection

@section('status-dropdown') show
@endsection

@section('status-kecamatan') active
@endsection

@section('title-page') Kecamatan
@endsection

@section('content')
<div class="row">
    <!-- ============================================================== -->
    <!-- basic table  -->
    <!-- ============================================================== -->
    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
        <div class="card">
            <h5 class="card-header">Data Tabel @yield('title-page')</h5>
            <div class="card-body">
                <a href="/kecamatan/tambah" class="btn btn-icon btn-primary"><i class="fa fa-plus"></i>
                    Tambah Data</a>
                <br><br>
                <div class="table-responsive">
                    <table class="table table-striped table-bordered first">
                        <thead>
                            <tr>
                                <th>No.</th>
                                <th>Provinsi</th>
                                <th>Kabkota</th>
                                <th>Kecamatan</th>
                                <th>Kode Kecamatan</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody align="center">
                            @php
                            $no = 1;
                            @endphp
                            @foreach ($kec as $t)


                            <tr>
                                <td>{{$no++}}.</td>
                                <td>{{$t->provinsi}}</td>
                                <td>{{$t->kabkota}}</td>
                                <td>{{$t->kecamatan}}</td>
                                <td>{{$t->kode_kecamatan}}</td>

                                <td>
                                    <form method="POST" action="/kecamatan/delete/{{ $t->id_kecamatan }}">
                                        {{csrf_field()}} {{method_field('DELETE')}}

                                        <a href="/kecamatan/edit/{{ $t->id_kecamatan }}" class="btn btn-primary"
                                            data-toggle="tooltip" data-placement="top" title="Kelola User"><i
                                                class="far fa-edit"></i></a>
                                        <br>
                                        <br>
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
        <!-- ============================================================== -->
        <!-- end basic table  -->
        <!-- ============================================================== -->
    </div>

    @endsection
