<?php

namespace App\Http\Controllers;

use App\Models\Pemesan;
use Illuminate\Http\Request;

class PemesanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        // $datapemesan = Pemesan::all();
        // return view('Pemesan.index', compact(
        //     'datapemesan'
        // ));
        $keyword = $request->keyword;
        $datapemesan = Pemesan::where('nama_pemesan', 'LIKE', '%' .$keyword.'%')

        ->orwhere ('nama_pemesan', 'LIKE', '%' .$keyword.'%')
        ->orwhere ('tipe_kamar', 'LIKE', '%' .$keyword.'%')
        ->paginate(4);
        $datapemesan->withPath('pemesan');
        $datapemesan->appends($request->all());
        return view('Pemesan.index', compact('datapemesan', 'keyword'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $modelpemesan = new pemesan;
        return view('welcome', compact(
           'modelpemesan'
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
        $model = new Pemesan;
        $model->cekin = $request->cekin;
        $model->cekout = $request->cekout;
        $model->jml_kamar = $request->jml_kamar;
        $model->nama_pemesan = $request->nama_pemesan;
        $model->email_pemesan = $request->email_pemesan;
        $model->phone = $request->phone;
        $model->tipe_kamar = $request->tipe_kamar;
        $model->status = $request->status;
        $model->save();
        return redirect('pemesan')->with('succes', "Data Berhasil Tersimpan");
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
        $modelpemesan = Pemesan::find($id);
        return view('Pemesan.update', compact('modelpemesan'));
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
        $model = Pemesan::find($id);
        $model->cekin = $request->cekin;
        $model->cekout = $request->cekout;
        $model->jml_kamar = $request->jml_kamar;
        $model->nama_pemesan = $request->nama_pemesan;
        $model->email_pemesan = $request->email_pemesan;
        $model->phone = $request->phone;
        $model->tipe_kamar = $request->tipe_kamar;
        $model->status = $request->status;
        $model->save();
        return redirect('pemesan')->with('succes', "Data Berhasil Diperbarui");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $model = Pemesan::find($id);
        $model->delete();
        return redirect('pemesan');
    }
}
