<?php

namespace App\Http\Controllers;

use App\{domisili, Provinsi, Kabkota, Kecamatan, Keldes};
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use PDF;

class DomisiliController extends Controller
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
        $dom = domisili::join('keldes','id_keldes','domisili_kec_id')->join('kecamatan','id_kecamatan','id_kecamatan_keldes')->join('kabkota','id_kabkota','id_kabkota_kecamatan')->join('provinsi','id_provinsi','id_kabkota_provinsi')->get();

        
        
        return view('data-domisili.index', compact('dom'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $prov = provinsi::all();
        return view('data-domisili.create',  compact('prov'));
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
        $dom = new domisili;
        $dom->domisili_kec_id = $request['id_keldes'];
        $dom->domisili_nama = $request['domisili_nama'];
        $dom->domisili_jk = $request['domisili_jk'];
        $dom->domisili_tmp_lahir = $request['domisili_tmp_lahir'];
        $dom->domisili_tgl_lahir = $request['domisili_tgl_lahir'];
        $dom->domisili_no_ktp = $request['domisili_no_ktp'];
        $dom->domisili_agama = $request['domisili_agama'];
        $dom->domisili_pekerjaan = $request['domisili_pekerjaan'];
        $dom->domisili_alamat = $request['domisili_alamat'];
        $dom->domisili_keperluan = $request['domisili_keperluan'];
        $dom->domisili_kewarganegaraan = $request['domisili_kewarganegaraan'];

        $berkas1 = $request->file('domisili_lampiran_ktp');
        $namaFile1 = $berkas1->getClientOriginalName();
        $request->file('domisili_lampiran_ktp')->move('gambar/lampiranDaerahAsal/', $namaFile1);
        $dom->domisili_lampiran_ktp=$namaFile1;
        
        $berkas3 = $request->file('domisili_lampiran_kk');
        $namaFile3 = $berkas3->getClientOriginalName();
        $request->file('domisili_lampiran_kk')->move('gambar/lampiranKK/', $namaFile3);
        $dom->domisili_lampiran_kk=$namaFile3;

        $dom->save();
        return redirect('/data-domisili');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\kedoman  $kedoman
     * @return \Illuminate\Http\Response
     */
    public function show( $domisili_id)
    {
        //
        $dom = domisili::join('keldes','id_keldes','domisili_kec_id')->join('kecamatan','id_kecamatan','id_kecamatan_keldes')->join('kabkota','id_kabkota','id_kabkota_kecamatan')->join('provinsi','id_provinsi','id_kabkota_provinsi')->findOrFail($domisili_id);
        return view('data-domisili.detail', compact('dom'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\kedoman  $kedoman
     * @return \Illuminate\Http\Response
     */
    public function edit( $domisili_id)
    {
        //
        $dom = domisili::join('keldes','id_keldes','domisili_kec_id')->join('kecamatan','id_kecamatan','id_kecamatan_keldes')->join('kabkota','id_kabkota','id_kabkota_kecamatan')->join('provinsi','id_provinsi','id_kabkota_provinsi')->findOrFail($domisili_id);
        $prov = provinsi::all();
        $kel = keldes::all();
        $kabkota = kabkota::all();
        $kec = kecamatan::all();
        return view('data-domisili.edit', compact('dom','prov','kabkota','kec','kel'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\kedoman  $kedoman
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,  $domisili_id)
    {
        //
        $dom = domisili::find($domisili_id);
        $dom->domisili_kec_id = $request['id_keldes'];
        $dom->domisili_nama = $request['domisili_nama'];
        $dom->domisili_jk = $request['domisili_jk'];
        $dom->domisili_tmp_lahir = $request['domisili_tmp_lahir'];
        $dom->domisili_tgl_lahir = $request['domisili_tgl_lahir'];
        $dom->domisili_no_ktp = $request['domisili_no_ktp'];
        $dom->domisili_agama = $request['domisili_agama'];
        $dom->domisili_pekerjaan = $request['domisili_pekerjaan'];
        $dom->domisili_alamat = $request['domisili_alamat'];
        $dom->domisili_keperluan = $request['domisili_keperluan'];
        $dom->domisili_kewarganegaraan = $request['domisili_kewarganegaraan'];

        $hps = $dom->domisili_lampiran_ktp;
        File::delete('gambar/lampiranDaerahAsal/'. $hps);
        $berkas1 = $request->file('domisili_lampiran_ktp');
        $namaFile1 = $berkas1->getClientOriginalName();
        $request->file('domisili_lampiran_ktp')->move('gambar/lampiranDaerahAsal/', $namaFile1);
        $dom->domisili_lampiran_ktp=$namaFile1;

        $hps3 = $dom->domisili_lampiran_kk;
        File::delete('gambar/lampiranKK/'. $hps3);
        $berkas3 = $request->file('domisili_lampiran_kk');
        $namaFile3 = $berkas3->getClientOriginalName();
        $request->file('domisili_lampiran_kk')->move('gambar/lampiranKK/', $namaFile3);
        $dom->domisili_lampiran_kk=$namaFile3;

        $dom->save();
        return redirect('/data-domisili');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\kedoman  $kedoman
     * @return \Illuminate\Http\Response
     */
    public function destroy( $domisili_id)
    {
        //
        $dom = domisili::findOrFail($domisili_id);
        $dom->delete();
        return redirect('/data-domisili');
    }

    public function cetak_pdf($domisili_id)
    {
    	$dom =domisili::join('keldes','id_keldes','domisili_kec_id')->join('kecamatan','id_kecamatan','id_kecamatan_keldes')->join('kabkota','id_kabkota','id_kabkota_kecamatan')->join('provinsi','id_provinsi','id_kabkota_provinsi')->findOrFail($domisili_id);

        $pdf = PDF::setPaper('f4', 'potrait')->loadview('laporan-domisili.surat-keterangan-domisili', ['dom'=>$dom]);

        return $pdf->download('surat-keterangan-domisili');
        // return $pdf->stream();
    }
}
