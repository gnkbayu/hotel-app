<?php

namespace App\Http\Controllers;

use App\Models\Fasilitas;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class FasilitasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datafasilitas = Fasilitas::all();
        return view('Fasilitas.index', compact(
            'datafasilitas'
        ));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $modelfasilitas = new fasilitas;
        return view('Fasilitas.create', compact(
            'modelfasilitas'
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
        $modelfasilitas = new fasilitas;
        $modelfasilitas->tipe_kamar = $request->tipe_kamar;
        $modelfasilitas->harga = $request->harga;
        $modelfasilitas->deskripsi = $request->deskripsi;
        if($request->file('foto_fasilitas')){
            $file = $request->file('foto_fasilitas');
            $name_file = time().str_replace(" ", "",  $file->getClientOriginalName());
            $file->move('foto', $name_file);
            File::delete('foto', $modelfasilitas->foto_fasilitas);

            $modelfasilitas->foto_fasilitas = $name_file;
        }
        $modelfasilitas->save();
        return redirect('fasilitas')->with('succes', "Data Berhasil Tersimpan");
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
        $modelfasilitas = Fasilitas::find($id);
        return view('Fasilitas.update', compact('modelfasilitas'));
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
        $modelfasilitas= Fasilitas::find($id);
        $modelfasilitas->tipe_kamar = $request->tipe_kamar;
        $modelfasilitas->harga = $request->harga;
        $modelfasilitas->deskripsi = $request->deskripsi;
        if($request->file('foto_fasilitas')){
            $file = $request->file('foto_fasilitas');
            $name_file = time().str_replace(" ", "",  $file->getClientOriginalName());
            $file->move('foto', $name_file);
            File::delete('foto', $modelfasilitas->foto_fasilitas);

            $modelfasilitas->foto_fasilitas = $name_file;
        }
        $modelfasilitas->save();
        return redirect('fasilitas')->with('succes', "Data Berhasil Diperbarui");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $modelfasilitas = Fasilitas::find($id);
        $modelfasilitas->delete();
        return redirect('fasilitas');
    }
}
