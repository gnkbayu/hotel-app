<?php

namespace App\Http\Controllers;

use App\Models\Layanan;
use Illuminate\Http\Request;

class LayananController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datalayanan = Layanan::all();
        return view('Layanan.index', compact(
            'datalayanan'
        ));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $modellayanan = new Layanan;
        return view('Layanan.create', compact(
            'modellayanan'
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
        $modellayanan = new Layanan;
        $modellayanan->nama_layanan = $request->nama_layanan;
        $modellayanan->satuan = $request->satuan;
        $modellayanan->harga = $request->harga;
        $modellayanan->save();
        return redirect('layanan')->with('succes', "Data Berhasil Tersimpan");
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
        $modellayanan = Layanan::find($id);
        return view('Layanan.update', compact('modellayanan'));
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
        $model= Layanan::find($id);
        $model->nama_layanan = $request->nama_layanan;
        $model->satuan = $request->satuan;
        $model->harga = $request->harga;
        $model->save();
        return redirect('layanan')->with('succes', "Data Berhasil Diperbarui");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $modellayanan = Layanan::find($id);
        $modellayanan->delete();
        return redirect('layanan');
    }
}
