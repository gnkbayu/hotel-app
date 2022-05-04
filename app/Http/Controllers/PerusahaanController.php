<?php

namespace App\Http\Controllers;

use App\Models\Perusahaan;
use Illuminate\Http\Request;

class PerusahaanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dataperusahaan = Perusahaan::all();
        return view('Perusahaan.index', compact(
            'dataperusahaan'
        ));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
        $modelperusahaan = Perusahaan::find($id);
        return view('Perusahaan.update', compact('modelperusahaan'));
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
        $modelperusahaan =Perusahaan::find($id);;
        $modelperusahaan->nama_hotel = $request->nama_hotel;
        $modelperusahaan->nama_perusahaan = $request->nama_perusahaan;
        $modelperusahaan->alamat = $request->alamat;
        $modelperusahaan->kabupaten = $request->kabupaten;
        $modelperusahaan->provinsi = $request->provinsi;
        $modelperusahaan->website = $request->website;
        $modelperusahaan->email = $request->email;
        // if($request->file('foto_profile')){
        //     $filep = $request->file('foto_profile');
        //     $name_filep = time().str_replace(" ", "",  $filep->getClientOriginalName());
        //     $filep->move('foto', $name_filep);
        //     File::delete('foto', $modeluser->foto_profile);

        //     $modeluser->foto_profile = $name_filep;
        // }
        $modelperusahaan->save();
        return redirect('perusahaan')->with('succes', "Data Berhasil Diperbarui");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $modelperusahaan = Perusahaan::find($id);
        $modelperusahaan->delete();
        return redirect('perusahaan');
    }
}
