<?php

namespace App\Http\Controllers;

use App\Models\Pengguna;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class PenggunaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datauser = Pengguna::all();
        return view('Pengguna.index', compact(
            'datauser'
        ));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $modeluser = new Pengguna;
        return view('Pengguna.create', compact(
            'modeluser'
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
        $modeluser = new pengguna;
        $modeluser->name = $request->name;
        $modeluser->level = $request->level;
        $modeluser->password = bcrypt($request->password);
        $modeluser->email = $request->email;
        if($request->file('foto_profil')){
            $filep = $request->file('foto_profil');
            $name_filep = time().str_replace(" ", "",  $filep->getClientOriginalName());
            $filep->move('foto', $name_filep);
            File::delete('foto', $modeluser->foto_profil);

            $modeluser->foto_profil = $name_filep;
        }
        $modeluser->save();
        return redirect('pengguna')->with('succes', "Data Berhasil Tersimpan");
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
        $modeluser = Pengguna::find($id);
        return view('Pengguna.update', compact('modeluser'));
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
        $modeluser =Pengguna::find($id);;
        $modeluser->name = $request->name;
        $modeluser->level = $request->level;
        $modeluser->password = $request->password;
        $modeluser->email = $request->email;
        if($request->file('foto_profile')){
            $filep = $request->file('foto_profile');
            $name_filep = time().str_replace(" ", "",  $filep->getClientOriginalName());
            $filep->move('foto', $name_filep);
            File::delete('foto', $modeluser->foto_profile);

            $modeluser->foto_profile = $name_filep;
        }
        $modeluser->save();
        return redirect('pengguna')->with('succes', "Data Berhasil Diperbarui");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $modeluser = Pengguna::find($id);
        $modeluser->delete();
        return redirect('pengguna');
    }
}
