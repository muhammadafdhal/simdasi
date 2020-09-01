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
        <h4>Rekapitulasi Laporan Kelahiran</h4>
    </center>
    <div class="card shadow mb-4">
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="order_table" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>No.</th>
                            <th>Nama</th>
                            <th>Nama Ayah</th>
                            <th>Nama Ibu</th>
                            {{-- <th>Lampiran Ktp Ayah</th>
                            <th>Lampiran Ktp Ibu</th>
                            <th>Lampiran Surat Nikah</th>
                            <th>Lampiran Akte Kelahiran</th> --}}

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
                            {{-- <td><img src="/gambar/lampiranKtpAyah/{{$t->kelahiran_lampiran_ktp_ayah }}"
                                    class="img-responsive" alt="Lampiran" width="120" height="60"></td>
                            <td><img src="/gambar/lampiranKtpIbu/{{$t->kelahiran_lampiran_ktp_ibu }}"
                                    class="img-responsive" alt="Lampiran" width="120" height="60"></td>
                            <td><img src="/gambar/lampiranSuratNikah/{{$t->kelahiran_surat_nikah }}"
                                    class="img-responsive" alt="Lampiran" width="120" height="60"></td>
                            <td><img src="/gambar/lampiranAkteKelahiran/{{$t->kelahiran_lampiran_akte_kelahiran }}"
                                    class="img-responsive" alt="Lampiran" width="120" height="60"></td> --}}


                        </tr>
                        @endforeach
                </table>

            </div>
        </div>
    </div>
</body>

</html>
