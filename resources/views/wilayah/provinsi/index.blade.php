@extends('layouts.app')

@section('dropdown-wilayah') active
@endsection

@section('status-dropdown') show
@endsection

@section('status-provinsi') active
@endsection

@section('title-page') Provinsi
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
                <a href="/provinsi/tambah" class="btn btn-icon btn-primary"><i class="fa fa-plus"></i>
                    Tambah Data</a>
                    <br><br>
                <div class="table-responsive">
                    <table class="table table-striped table-bordered first">
                        <thead>
                            <tr>
                                <th>No.</th>
                                <th>Provinsi</th>
                                <th>Kode Provinsi</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody align="center">
                            @php
                                $no = 1;
                            @endphp
                            @foreach ($prov as $t)
                                
                            
                            <tr>
                                <td>{{$no++}}.</td>
                                <td>{{$t->provinsi}}</td>
                                <td>{{$t->kode_provinsi}}</td>
                                
                                <td><form method="POST" action="/provinsi/delete/{{ $t->id_provinsi }}">
                                    {{csrf_field()}} {{method_field('DELETE')}}

                                    <a href="/provinsi/edit/{{ $t->id_provinsi }}" class="btn btn-primary" data-toggle="tooltip"
                                        data-placement="top" title="Kelola User"><i class="far fa-edit"></i></a>

                                    <button type="submit" onclick="return confirm('Yakin Ingin Menghapus Data Ini ?')"
                                        class="btn btn-danger" data-toggle="tooltip" data-placement="top"
                                        title="Hapus User"><i class="fas fa-trash"></i></button>
                                </form></td>
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
