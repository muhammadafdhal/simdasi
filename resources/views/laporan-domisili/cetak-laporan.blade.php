<html>

<head>
    <title>Rekapitulasi Laporan</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>
    <style type="text/css">
        table tr td,
        table tr th {
            font-size: 9pt;
        }

    </style>
    <center>
        <h4>Rekapitulasi Laporan Domisili</h4>
    </center>
    <div class="card shadow mb-4">
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="order_table" width="100%" cellspacing="0">
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
</body>

</html>
