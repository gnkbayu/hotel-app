<?php

namespace App\Http\Controllers;

// use GuzzleHttp\Psr7\Message;
use Illuminate\Http\Request;
use App\Models\message;

class MessageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        // $datas = message::all();
        // return view('Message.index', compact(
        //     'datas'
        // ));
        $keywordmessage = $request->keywordmessage;
        $datas = message::where('name', 'LIKE', '%' .$keywordmessage.'%')

        ->orwhere ('name', 'LIKE', '%' .$keywordmessage.'%')
        ->orwhere ('email', 'LIKE', '%' .$keywordmessage.'%')
        ->paginate(5);
        $datas->withPath('message');
        $datas->appends($request->all());
        return view('Message.index', compact('datas', 'keywordmessage'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $model = new message;
        return view('welcome', compact(
            'model'
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
        $model = new message;
        $model->name = $request->name;
        $model->email = $request->email;
        $model->phone = $request->phone;
        $model->message = $request->message;
        $model->save();
        return redirect('/')->with('succes', "Data Berhasil Tersimpan");
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
        $model = message::find($id);
        return view('Message.update', compact('model'));
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
        $model= message::find($id);
        $model->nama = $request->nama;
        $model->tanggal_lahir = $request->tanggal_lahir;
        $model->gelar = $request->gelar;
        $model->nip = $request->nip;
        $model->save();
        return redirect('pegawai')->with('succes', "Data Berhasil Diperbarui");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $model = message::find($id);
        $model->delete();
        return redirect('message');
    }
}
