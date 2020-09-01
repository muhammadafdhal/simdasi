<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Provinsi;

class ProvinsiController extends Controller
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
        $prov = Provinsi::all();

        return view('wilayah.provinsi.index', compact('prov'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('wilayah.provinsi.create');
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
        $prov = new Provinsi;
        $prov->kode_provinsi = $request['kode_provinsi'];
        $prov->provinsi = $request['provinsi'];
        $prov->save();
        return redirect('/provinsi');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id_provinsi)
    {
        //
        $prov = Provinsi::find($id_provinsi);
        return view('wilayah.provinsi.edit', compact('prov'));
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id_provinsi)
    {
        //
        $prov = Provinsi::find($id_provinsi);
        $prov->kode_provinsi = $request['kode_provinsi'];
        $prov->provinsi = $request['provinsi'];
        $prov->save();
        return redirect('/provinsi');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id_provinsi)
    {
        //
        $prov = Provinsi::find($id_provinsi);
        $prov->delete();
        return redirect('/provinsi');
    }

    public function cari(Request $request)
	{
		// menangkap data pencarian
        $cari = $request->cari;
        
    	// mengambil data dari table pegawai sesuai pencarian data
        $prov = Provinsi::where('provinsi','like',"%".$cari."%")->orWhere('kode_provinsi','like',"%".$cari."%")->paginate(10);
        $prov->appends($request->only('cari'));
    	// mengirim data pegawai ke view index
		return view('wilayah.provinsi.index',compact('prov'));

	}
}
