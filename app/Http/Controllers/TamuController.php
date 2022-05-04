<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tamu;

class TamuController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
       
        $keyword = $request->keyword;
        $datatamu = Tamu::where('name', 'LIKE', '%' .$keyword.'%')

        ->orwhere ('name', 'LIKE', '%' .$keyword.'%')
        ->orwhere ('no_identitas', 'LIKE', '%' .$keyword.'%')
        ->paginate(2);
        $datatamu->withPath('tamu');
        $datatamu->appends($request->all());
        return view('tamu.index', compact('datatamu', 'keyword'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $modeltamu = new tamu;
        return view('Tamu.create', compact(
            'modeltamu'
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
        $modeltamu = new Tamu;
        $modeltamu->name = $request->name;
        $modeltamu->no_identitas = $request->no_identitas;
        $modeltamu->warga_negara = $request->warga_negara;
        $modeltamu->alamat = $request->alamat;
        $modeltamu->kabupaten = $request->kabupaten;
        $modeltamu->provinsi = $request->provinsi;
        $modeltamu->email = $request->email;
        $modeltamu->phone = $request->phone;
        $modeltamu->save();
        return redirect('tamu')->with('succes', "Data Berhasil Tersimpan");
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
        $modeltamu = Tamu::find($id);
        return view('Tamu.update', compact('modeltamu'));
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
        $modeltamu= Tamu::find($id);
        $modeltamu->name = $request->name;
        $modeltamu->no_identitas = $request->no_identitas;
        $modeltamu->warga_negara = $request->warga_negara;
        $modeltamu->alamat = $request->alamat;
        $modeltamu->kabupaten = $request->kabupaten;
        $modeltamu->provinsi = $request->provinsi;
        $modeltamu->email = $request->email;
        $modeltamu->phone = $request->phone;
        $modeltamu->save();
        return redirect('tamu')->with('succes', "Data Berhasil Diperbarui");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $modeltamu = Tamu::find($id);
        $modeltamu->delete();
        return redirect('tamu');
    }
}
