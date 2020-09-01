<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Kelahiran;
use PDF;

class RekapKelahiranController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        //
        $lahir = kelahiran::all()->sortByDesc('created_at');
        return view('laporan-kelahiran.rekap', compact('lahir'));
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

        $date =kelahiran::whereBetween('created_at', [$tgl, $tgl1])
            ->get();
        
        return view('laporan-kelahiran.filter', compact('date','tgl1','tgl','range1','range2'));
    }

    public function cetak_pdf($tgl,$tgl1)
    {
    	$date =kelahiran::whereBetween('created_at', [$tgl, $tgl1])
            ->get();

        $pdf = PDF::setPaper('f4', 'landscape')->loadview('laporan-kelahiran.cetak-laporan', ['date'=>$date]);

        return $pdf->download('laporan-kelahiran-pdf');
        // return $pdf->stream();
    }
}
