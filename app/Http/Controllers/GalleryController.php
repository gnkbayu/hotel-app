<?php

namespace App\Http\Controllers;

use App\Models\Gallery;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class GalleryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datagallery = Gallery::all();
        return view('Gallery.index', compact(
            'datagallery'
        ));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $modelgallery = new gallery;
        return view('Gallery.create', compact(
            'modelgallery'
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
        $modelgallery = new Gallery;
        $modelgallery->category = $request->category;
        $modelgallery->project_name = $request->project_name;
        if($request->file('foto_gallery')){
            $file = $request->file('foto_gallery');
            $name_file = time().str_replace(" ", "",  $file->getClientOriginalName());
            $file->move('foto', $name_file);
            File::delete('foto', $modelgallery->foto_gallery);

            $modelgallery->foto_gallery = $name_file;
        }
        $modelgallery->save();
        return redirect('gallery')->with('succes', "Data Berhasil Tersimpan");
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
        $modelgallery = Gallery::find($id);
        return view('Gallery.update', compact('modelgallery'));
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
        $modelgallery= Gallery::find($id);
        $modelgallery->category = $request->category;
        $modelgallery->project_name = $request->project_name;
        if($request->file('foto_gallery')){
            $file = $request->file('foto_gallery');
            $name_file = time().str_replace(" ", "",  $file->getClientOriginalName());
            $file->move('foto', $name_file);
            File::delete('foto', $modelgallery->foto_gallery);

            $modelgallery->foto_gallery = $name_file;
        }
        $modelgallery->save();
        return redirect('gallery')->with('succes', "Data Berhasil Diperbarui");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $modelgallery = Gallery::find($id);
        $modelgallery->delete();
        return redirect('gallery');
    }
}
