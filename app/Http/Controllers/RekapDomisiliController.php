<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PDF;
use App\domisili;

class RekapDomisiliController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        //
        $dom = domisili::join('keldes','id_keldes','domisili_kec_id')->join('kecamatan','id_kecamatan','id_kecamatan_keldes')->join('kabkota','id_kabkota','id_kabkota_kecamatan')->join('provinsi','id_provinsi','id_kabkota_provinsi')->get();
        return view('laporan-domisili.rekap', compact('dom'));
    }

    public function filterlaporan(Request $request)
    {
        $range = explode(" - ", $request->rekaplaporan);
        
        $tgl = explode('/',$range[0]);
        $tgl = $tgl[2].'-'.$tgl[1].'-'.$tgl[0];
        $tgl1 = explode('/',$range[1]);
        $tgl1 = $tgl1[2].'-'.$tgl1[1].'-'.$tgl1[0];
        $range1 = $range[0];
        $range2 = $range[1];

        $date =domisili::join('keldes','id_keldes','domisili_kec_id')->join('kecamatan','id_kecamatan','id_kecamatan_keldes')->join('kabkota','id_kabkota','id_kabkota_kecamatan')->join('provinsi','id_provinsi','id_kabkota_provinsi')->whereBetween('created_at', [$tgl, $tgl1])
            ->get();
        
        return view('laporan-domisili.filter', compact('date','tgl1','tgl','range1','range2'));
    }

    public function cetak_pdf($tgl,$tgl1)
    {
    	$date =domisili::join('keldes','id_keldes','domisili_kec_id')->join('kecamatan','id_kecamatan','id_kecamatan_keldes')->join('kabkota','id_kabkota','id_kabkota_kecamatan')->join('provinsi','id_provinsi','id_kabkota_provinsi')->whereBetween('created_at', [$tgl, $tgl1])
            ->get();

        $pdf = PDF::setPaper('f4', 'landscape')->loadview('laporan-domisili.cetak-laporan', ['date'=>$date]);

        return $pdf->download('laporan-pindah-domisili-pdf');
        // return $pdf->stream();
    }
}
