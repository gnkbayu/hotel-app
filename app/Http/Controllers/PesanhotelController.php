<?php

namespace App\Http\Controllers;

use App\Models\Pesanhotel;
use Illuminate\Http\Request;

class PesanhotelController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $modelpesanhotel = new Pesanhotel;
        return view('welcome', compact(
           'modelpesanhotel'
        ));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $modelpesanhotel = new Pesanhotel();
        $modelpesanhotel->cekin = $request->cekin;
        $modelpesanhotel->cekout = $request->cekout;
        $modelpesanhotel->jml_kamar = $request->jml_kamar;
        $modelpesanhotel->nama_pemesan = $request->nama_pemesan;
        $modelpesanhotel->email_pemesan = $request->email_pemesan;
        $modelpesanhotel->phone = $request->phone;
        $modelpesanhotel->tipe_kamar = $request->tipe_kamar;
        $modelpesanhotel->status = $request->status;
        $modelpesanhotel->save();
        return redirect('/')->with('pesansucces', "Data Berhasil Tersimpan");
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
    public function edit($id)
    {
        $modelpesanhotel = Pesanhotel::find($id);
        return view('Download.cetakpdf', compact('modelpesanhotel'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $modelpesanhotel = Pesanhotel::find($id);
        $modelpesanhotel->cekin = $request->cekin;
        $modelpesanhotel->cekout = $request->cekout;
        $modelpesanhotel->jml_kamar = $request->jml_kamar;
        $modelpesanhotel->nama_pemesan = $request->nama_pemesan;
        $modelpesanhotel->email_pemesan = $request->email_pemesan;
        $modelpesanhotel->phone = $request->phone;
        $modelpesanhotel->tipe_kamar = $request->tipe_kamar;
        $modelpesanhotel->status = $request->status;
        $modelpesanhotel->save();
        return redirect('/')->with('pesansucces', "Data Berhasil Tersimpan");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
