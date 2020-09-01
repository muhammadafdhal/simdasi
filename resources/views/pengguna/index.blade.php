@extends('layouts.app')

@section('status-user') active
@endsection

@section('content')

<div class="row">
    <!-- ============================================================== -->
    <!-- basic table  -->
    <!-- ============================================================== -->
    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
        <div class="card">
            <h5 class="card-header">Data Tabel Manajemen user</h5>
            <div class="card-body">
                <a href="/pengguna/tambah" class="btn btn-icon btn-primary"><i class="fa fa-plus"></i>
                    Tambah Data</a>
                    <br><br>
                <div class="table-responsive">
                    <table class="table table-striped table-bordered first">
                        <thead>
                            <tr>
                                <th>No.</th>
                                <th>Nama</th>
                                <th>Email</th>
                                <th>Nik</th>
                                <th>Level</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody align="center">
                            @php
                                $no = 1;
                            @endphp
                            @foreach ($user as $t)
                                
                            
                            <tr>
                                <td>{{$no++}}.</td>
                                <td>{{$t->name}}</td>
                                <td>{{$t->email}}</td>
                                <td>{{$t->nik}}</td>
                                <td>{{$t->level}}</td>
                                <td><form method="POST" action="/pengguna/delete/{{ $t->id }}">
                                    {{csrf_field()}} {{method_field('DELETE')}}

                                    <a href="/pengguna/edit/{{ $t->id }}" class="btn btn-primary" data-toggle="tooltip"
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
    </div>
    <!-- ============================================================== -->
    <!-- end basic table  -->
    <!-- ============================================================== -->
</div>

@endsection
