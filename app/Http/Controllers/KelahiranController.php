<?php

namespace App\Http\Controllers;

use App\kelahiran;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class KelahiranController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function index()
    {
        //
        $lahir = kelahiran::all();
        return view('data-kelahiran.index', compact('lahir'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('data-kelahiran.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        

        $lahir = new kelahiran;
        $lahir->kelahiran_nama = $request['kelahiran_nama'];
        $lahir->kelahiran_tgl = $request['kelahiran_tgl'];
        $lahir->kelahiran_tempat = $request['kelahiran_tempat'];
        $lahir->kelahiran_berat = $request['kelahiran_berat'];
        $lahir->kelahiran_nama_ayah = $request['kelahiran_nama_ayah'];
        $lahir->kelahiran_nama_ibu = $request['kelahiran_nama_ibu'];

        $berkas1 = $request->file('kelahiran_lampiran_ktp_ayah');
        $namaFile1 = $berkas1->getClientOriginalName();
        $request->file('kelahiran_lampiran_ktp_ayah')->move('gambar/lampiranKtpAyah/', $namaFile1);
        $lahir->kelahiran_lampiran_ktp_ayah=$namaFile1;

        $berkas2 = $request->file('kelahiran_lampiran_ktp_ibu');
        $namaFile2 = $berkas2->getClientOriginalName();
        $request->file('kelahiran_lampiran_ktp_ibu')->move('gambar/lampiranKtpIbu/', $namaFile2);
        $lahir->kelahiran_lampiran_ktp_ibu=$namaFile2;
        
        $berkas3 = $request->file('kelahiran_surat_nikah');
        $namaFile3 = $berkas3->getClientOriginalName();
        $request->file('kelahiran_surat_nikah')->move('gambar/lampiranSuratNikah/', $namaFile3);
        $lahir->kelahiran_surat_nikah=$namaFile3;

        $lahir->kelahiran_lampiran_akte_kelahiran = $request['kelahiran_lampiran_akte_kelahiran'];
        $berkas4 = $request->file('kelahiran_lampiran_akte_kelahiran');
        $namaFile4 = $berkas4->getClientOriginalName();
        $request->file('kelahiran_lampiran_akte_kelahiran')->move('gambar/lampiranAkteKelahiran/', $namaFile4);
        $lahir->kelahiran_lampiran_akte_kelahiran=$namaFile4;
        
        $lahir->save();
        return redirect('/data-kelahiran');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\kelahiran  $kelahiran
     * @return \Illuminate\Http\Response
     */
    public function show( $kelahiran_id)
    {
        //
        $lahir = kelahiran::findOrFail($kelahiran_id);
        return view('data-kelahiran.detail', compact('lahir'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\kelahiran  $kelahiran
     * @return \Illuminate\Http\Response
     */
    public function edit( $kelahiran_id)
    {
        //
        $lahir = kelahiran::findOrFail($kelahiran_id);
        return view('data-kelahiran.edit', compact('lahir'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\kelahiran  $kelahiran
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,  $kelahiran_id)
    {
        //
        $lahir = kelahiran::find($kelahiran_id);
        $lahir->kelahiran_nama = $request['kelahiran_nama'];
        $lahir->kelahiran_tgl = $request['kelahiran_tgl'];
        $lahir->kelahiran_tempat = $request['kelahiran_tempat'];
        $lahir->kelahiran_berat = $request['kelahiran_berat'];
        $lahir->kelahiran_nama_ayah = $request['kelahiran_nama_ayah'];
        $lahir->kelahiran_nama_ibu = $request['kelahiran_nama_ibu'];

        $hps = $lahir->kelahiran_lampiran_ktp_ayah;
        File::delete('gambar/lampiranKtpAyah/'. $hps);
        $berkas1 = $request->file('kelahiran_lampiran_ktp_ayah');
        $namaFile1 = $berkas1->getClientOriginalName();
        $request->file('kelahiran_lampiran_ktp_ayah')->move('gambar/lampiranKtpAyah/', $namaFile1);
        $lahir->kelahiran_lampiran_ktp_ayah=$namaFile1;

        $hps2 = $lahir->kelahiran_lampiran_ktp_ibu;
        File::delete('gambar/lampiranKtpIbu/'. $hps2);
        $berkas2 = $request->file('kelahiran_lampiran_ktp_ibu');
        $namaFile2 = $berkas2->getClientOriginalName();
        $request->file('kelahiran_lampiran_ktp_ibu')->move('gambar/lampiranKtpIbu/', $namaFile2);
        $lahir->kelahiran_lampiran_ktp_ibu=$namaFile2;

        $hps3 = $lahir->kelahiran_surat_nikah;
        File::delete('gambar/lampiranSuratNikah/'. $hps3);
        $berkas3 = $request->file('kelahiran_surat_nikah');
        $namaFile3 = $berkas3->getClientOriginalName();
        $request->file('kelahiran_surat_nikah')->move('gambar/lampiranSuratNikah/', $namaFile3);
        $lahir->kelahiran_surat_nikah=$namaFile3;

        $hps4 = $lahir->kelahiran_lampiran_akte_kelahiran;
        File::delete('gambar/lampiranAkteKelahiran/'. $hps4);
        $berkas4 = $request->file('kelahiran_lampiran_akte_kelahiran');
        $namaFile4 = $berkas4->getClientOriginalName();
        $request->file('kelahiran_lampiran_akte_kelahiran')->move('gambar/lampiranAkteKelahiran/', $namaFile4);
        $lahir->kelahiran_lampiran_akte_kelahiran=$namaFile4;

        $lahir->save();
        return redirect('/data-kelahiran');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\kelahiran  $kelahiran
     * @return \Illuminate\Http\Response
     */
    public function destroy( $kelahiran_id)
    {
        //
        $lahir = kelahiran::findOrFail($kelahiran_id);
        $lahir->delete();
        return redirect('/data-kelahiran');
    }
}
