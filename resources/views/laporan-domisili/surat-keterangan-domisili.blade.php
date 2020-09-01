<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <p style="text-align: center;"><strong>PEMERINTAH {{$dom->kabkota}}</strong></p>
    <p style="text-align: center;"><strong>DESA {{$dom->keldes}}</strong></p>
    <p style="text-align: center;"><strong>KECAMATAN {{$dom->kecamatan}}</strong></p>
    <p style="text-align: center;">Alamat : &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Telp :
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Kode Pos : </p>
    <hr />
    <p style="text-align: center;">&nbsp;<strong><u><br />SURAT KETERANGAN DOMISILI</u></strong></p>
    <p style="text-align: center;">Nomor : &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;/&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        /&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; /&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; /<?php
        $tanggal=getdate();
        echo $tanggal['year'];
        
        ?></p>
    <p>Yang bertanda tangan dibawah ini, menerangkan bahwa :</p>
    <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        Nama&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        :&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <strong>{{$dom->domisili_nama}}</strong></p>
    <p><strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </strong>Jenis
        Kelamin&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        :&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; {{$dom->domisili_jk}}</p>
    <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Tempat Tanggal Lahir&nbsp; :&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; {{$dom->domisili_tmp_lahir}}, {{ date('d M Y', strtotime($dom->domisili_tgl_lahir)) }}</p>
    <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Warga
        Negara&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        :&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; {{$dom->domisili_kewarganegaraan}}</p>
    <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        Agama&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        :&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; {{$dom->domisili_agama}}</p>
    <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        Pekerjaan&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        :&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; {{$dom->domisili_pekerjaan}}</p>
    <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        Alamat&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        :&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; {{$dom->domisili_alamat}}</p>
    <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Nomor KTP (NIK)&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        :&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; {{$dom->domisili_no_ktp}}</p>
    <p>Bahwa nama tersebut diatas adalah benar warga yang <strong>tinggal/berdomisili</strong> di {{$dom->domisili_alamat}} Desa {{$dom->keldes}} Kecamatan {{$dom->kecamatan}} {{$dom->kabkota}} Provinsi {{$dom->provinsi}}.</p>
    <p>Demikianlah <strong>Surat Keterangan Domisili </strong>ini dibuat dan diberikan kepada yang bersangkutan,
        mengingat untuk dapat dipergunakan sebagaimana mestinya.</p>
    <table style="margin-left: auto; margin-right: auto; height: 140px; width: 177px;">
        <tbody>
            <tr style="height: 42px;">
                <td style="width: 309px; height: 42px;">
                    <p>&nbsp;</p>
                    <p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                        Tanda Tangan Ybs</p>
                    <p>&nbsp;</p>
                    <p>&nbsp;</p>
                    <p><strong>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                            &nbsp; &nbsp; &nbsp; ____________</strong></p>
                </td>
                <td style="width: 309px; height: 42px;">
                    <p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;, ......................... <?php
                        $tanggal=getdate();
                        echo $tanggal['year'];
                        
                        ?></p>
                    <p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; KELURAHAN</p>
                    <p>&nbsp;</p>
                    <p>&nbsp;</p>
                    <p><strong>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                            &nbsp;____________</strong></p>
                </td>
            </tr>
            <tr style="height: 13px;">
                <td style="width: 309px; height: 13px;">&nbsp;</td>
                <td style="width: 309px; height: 13px;">&nbsp;</td>
            </tr>
            <tr style="height: 182px;">
                <td style="width: 624px; height: 182px;" colspan="2"><br />
                    <table width="624">
                        <tbody>
                            <tr style="height: 6px;">
                                <td style="height: 6px;" width="624">&nbsp;</td>
                            </tr>
                            <tr style="height: 62px;">
                                <td style="height: 62px;" width="624">&nbsp;</td>
                            </tr>
                        </tbody>
                    </table>
                </td>
            </tr>
        </tbody>
    </table>
    <p style="text-align: center;"><strong><u>&nbsp;</u></strong></p>
</body>

</html>
